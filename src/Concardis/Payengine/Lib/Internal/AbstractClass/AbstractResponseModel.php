<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\AbstractClass;

/**
 * Class AbstractResponseModel
 * @package Concardis\Payengine\Lib\Internal\AbstractClass
 */
abstract class AbstractResponseModel extends AbstractModel
{

    /**
     * @var integer|null
     */
    protected ?int $createdAt = null;

    /**
     * @var integer|null
     */
    protected ?int $modifiedAt = null;

    /**
     * @var array
     */
    protected array $errors = [];

    /**
     * @return int|null
     */
    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    /**
     * @param int|null $createdAt
     * @return AbstractResponseModel
     */
    public function setCreatedAt(?int $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getModifiedAt(): ?int
    {
        return $this->modifiedAt;
    }

    /**
     * @param int|null $modifiedAt
     * @return AbstractResponseModel
     */
    public function setModifiedAt(?int $modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors ? $this->errors : [];
    }

    /**
     * @param array $errors
     * @return AbstractResponseModel
     */
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

}
