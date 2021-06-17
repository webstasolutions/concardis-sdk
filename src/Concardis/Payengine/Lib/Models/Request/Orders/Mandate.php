<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class Mandate
 * @package Concardis\Payengine\Lib\Models\Request\Orders
 */
class Mandate extends AbstractModel
{
    /**
     * Mandate ID
     *
     * @var string
     */
    private string $mandateId;

    /**
     * Date/Time of mandate creation
     *
     * @var string
     */
    private string $createdDateTime;

    /**
     * Mandate text
     *
     * @var string
     */
    private string $mandateText;

    /**
     * Get mandate id
     *
     * @return string
     */
    public function getMandateId(): string
    {
        return $this->mandateId;
    }

    /**
     * Set mandate id
     *
     * @param string $mandateId
     * @return Mandate
     */
    public function setMandateId(string $mandateId): self
    {
        $this->mandateId = $mandateId;
        return $this;
    }

    /**
     * Get date/time of mandate creation
     *
     * @return string
     */
    public function getCreatedDateTime(): string
    {
        return $this->createdDateTime;
    }

    /**
     * Set date/time of mandate creation
     *
     * @param string $createdDateTime
     * @return Mandate
     */
    public function setCreatedDateTime(string $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * Get mandate text
     *
     * @return string
     */
    public function getMandateText(): string
    {
        return $this->mandateText;
    }

    /**
     * Set mandate text
     *
     * @param string $mandateText
     * @return Mandate
     */
    public function setMandateText(string $mandateText): self
    {
        $this->mandateText = $mandateText;
        return $this;
    }
}