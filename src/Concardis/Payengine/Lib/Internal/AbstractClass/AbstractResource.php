<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\AbstractClass;

use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Internal\Constants\ErrorCodes;
use Concardis\Payengine\Lib\Internal\Util\ArrayHelper;
use Concardis\Payengine\Lib\Internal\Util\TypeHelper;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;

/**
 * Class AbstractResource
 * @package Concardis\Payengine\Lib\Internal\AbstractClass
 */
abstract class AbstractResource
{
    /**
     * @var string
     */
    protected string $resourcePath;

    /**
     * @var string
     */
    protected string $resourcePathWithId;

    /**
     * @var string
     */
    protected string $resourceId;

    /**
     * @var Connection
     */
    protected Connection $connection;

    /**
     * AbstractResource constructor.
     * @param Connection $connection
     * @param null $resourceId
     * @param null $parentResourcePath
     * @throws \Exception
     */
    function __construct(Connection $connection, $resourceId = null, $parentResourcePath = null)
    {
        if ($resourceId != null && !is_string($resourceId)) {
            throw new \Exception(ErrorCodes::SDK_RESOURCEID_INVALID);
        }

        if ($parentResourcePath != null) {
            $this->resourcePath = $parentResourcePath . $this->resourcePath;
        }

        if ($resourceId != null) {
            $this->resourceId = $resourceId;
            $this->resourcePathWithId = $this->resourcePath . "/" . $this->resourceId;
        }

        $this->connection = $connection;
    }

    /**
     * @param AbstractModel $data
     *
     * @return AbstractResponseModel
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
     */
    protected function post(AbstractModel $data): AbstractResponseModel
    {
        if ($data instanceof AbstractModel) {
            $data = $data->__toArray();
        }

        $result = $this->connection->post($this->resourcePath, $data);
        return $this->responseDataToModel($result);
    }

    /**
     * @param array|AbstractModel $data
     *
     * @return AbstractResponseModel
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
     */
    protected function patch(array|AbstractModel $data): AbstractResponseModel
    {
        if ($data instanceof AbstractModel) {
            $data = $data->__toArray();
        }

        $result = $this->connection->patch($this->resourcePathWithId, $data);
        return $this->responseDataToModel($result);
    }

    /**
     * @return void
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
     */
    protected function delete(): mixed
    {
        return $this->connection->delete($this->resourcePathWithId);
    }

    /**
     * Returns an array of the Resource.
     * If a resourceId is set only one result will be returned also $filter will
     * be ignored.
     *
     * @param array|null $filter
     * @return ListWrapper|AbstractResponseModel
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
     */
    protected function get(?array $filter = null): ListWrapper|AbstractResponseModel
    {
        if ($filter != null && !ArrayHelper::isAssocArray($filter)) {
            throw new \Exception("Filter parameter is wrong");
        }

        if ($this->resourceId == null) {
            if (is_array($filter)) {
                TypeHelper::convertBooleanValues($filter);
                $result = $this->getAll($filter);
            } else {
                $result = $this->getAll();
            }
        } else {
            $result = $this->getOne();
        }
        return $result;
    }

    /**
     * @param array $filter
     *
     * @return ListWrapper
     * @throws \Exception
     */
    private function getAll(array $filter = []): ListWrapper
    {
        $result = $this->connection->get($this->resourcePath, $filter);
        $listWrapper = new ListWrapper();

        $elementsAsModels = [];
        if (is_array($result['elements']) && count($result['elements']) > 0) {
            foreach ($result['elements'] as $element) {
                $elementsAsModels[] = $this->responseDataToModel($element);
            }
        }

        $listWrapper->setTotalPages($result['totalPages']);
        $listWrapper->setElements($elementsAsModels);
        return $listWrapper;
    }

    /**
     * @return AbstractResponseModel
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
     */
    private function getOne(): AbstractResponseModel
    {
        $result = $this->connection->get($this->resourcePathWithId);
        return $this->responseDataToModel($result);
    }

    /**
     * @param array $response
     *
     * @return AbstractResponseModel
     */
    private function responseDataToModel(array $response): AbstractResponseModel
    {
        $model = $this->getResponseModel();
        $model->__fromArray($response);
        return $model;
    }

    /**
     * @return AbstractResponseModel
     */
    abstract protected function getResponseModel(): AbstractResponseModel;
}
