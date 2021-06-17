<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\AbstractClass;

/**
 * Class AbstractResponseModel
 * @package Concardis\Payengine\Lib\Internal\AbstractClass
 */
abstract class AbstractResponseModel extends AbstractModel
{

    /**
     * @var integer
     */
    protected int $createdAt;

    /**
     * @var integer
     */
    protected int $modifiedAt;
    
    /**
     * @var array
     */
    protected array $errors;

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     * @return AbstractResponseModel
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getModifiedAt(): int
    {
        return $this->modifiedAt;
    }

    /**
     * @param int $modifiedAt
     * @return AbstractResponseModel
     */
    public function setModifiedAt(int $modifiedAt): self
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
