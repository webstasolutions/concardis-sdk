<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\AbstractClass;


use Concardis\Payengine\Lib\Internal\Util\ArrayHelper;

/**
 * Class AbstractModel
 *
 * @package Concardis\Payengine\Lib\Internal\AbstractClass
 */
abstract class AbstractModel
{
    /**
     * @var array
     */
    protected array $subModels = [];

    /**
     * @param string $propertyName
     * @param array $propertyValue
     * @return AbstractModel
     */
    private function getSubmodel(string $propertyName, array $propertyValue): AbstractModel
    {
        $className = $this->subModels[$propertyName];

        /**
         * @var $subModel AbstractModel
         */
        $subModel = new $className();
        $subModel->__fromArray($propertyValue);
        return $subModel;
    }

    /**
     * @return array
     */
    public function __toArray(): array
    {
        $result = [];
        $reflection = new \ReflectionClass($this);
        $properties = $reflection->getDefaultProperties();
        foreach ($properties as $propertyName => $propertyValue) {
            if ($propertyName == 'subModels') {
                continue;
            }

            $data = null;
            $method = 'get' . ucfirst($propertyName);
            if (!$reflection->hasMethod($method)) {
                //when getting a boolean the method name differs
                $method = 'is' . ucfirst($propertyName);
            }

            if ($reflection->hasMethod($method)) {
                $data = $this->{$method}();
            }

            if (is_null($data) || is_string($data) && empty($data)) {
                continue;
            }

            if (is_array($data)) {
                $convertedData = [];
                foreach ($data as $key => $value) {
                    if ($value instanceof AbstractModel) {
                        /**
                         * @var $model AbstractModel
                         */
                        $model = $value;

                        $convertedEntry = $model->__toArray();
                    } else {
                        $convertedEntry = $value;
                    }
                    $convertedData[$key] = $convertedEntry;
                }
                $data = $convertedData;
            } elseif ($data instanceof AbstractModel) {
                /**
                 * @var $model AbstractModel
                 */
                $model = $data;

                $data = $model->__toArray();
            }

            $result[$propertyName] = $data;
        }
        return $result;
    }

    /**
     * @param array $propertyArray
     */
    public function __fromArray(array $propertyArray)
    {
        $methods = get_class_methods(get_class($this));
        foreach ($propertyArray as $propertyName => $propertyValue) {
            $data = $propertyValue;

            // check if property is a submodel
            if (in_array($propertyName, array_keys($this->subModels)) && is_array($propertyValue)) {
                // if property value is an array and not assoc, its a list of submodel
                if (is_array($propertyValue)) {
                    if (!ArrayHelper::isAssocArray($propertyValue)) {
                        $convertedData = [];

                        foreach ($propertyValue as $key => $value) {
                            //if transactions contains a list of ids
                            if (is_string($value)) {
                                $convertedData[$key] = $value;
                                continue;
                            } elseif (is_array($value)) {
                                $convertedData[$key] = $this->getSubmodel($propertyName, $value);
                            }
                        }
                        $data = $convertedData;
                    } else {
                        // when propertyValue is an array and assoc its an single submodel
                        $data = $this->getSubmodel($propertyName, $propertyValue);

                    }
                }
            }

            $method = 'set' . ucfirst($propertyName);
            if (in_array($method, $methods)) {
                $this->{$method}($data);
            }
        }
    }

    /**
     * @return string
     */
    public function __toJson(): string
    {
        return json_encode($this->__toArray());
    }

    /**
     * @param string $jsonString
     */
    public function __fromJson(string $jsonString)
    {
        $this->__fromArray(json_decode($jsonString, true));
    }

}