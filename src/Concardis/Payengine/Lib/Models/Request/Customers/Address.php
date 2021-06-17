<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class Address
 * @package Concardis\Payengine\Lib\Models\Request\Customers
 */
class Address extends AbstractModel
{

    /**
     * @var string
     */
    private string $fax;

    /**
     * @var string
     */
    private string $phone;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var string
     */
    private string $houseNumber;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $state;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $street;

    /**
     * @var string
     */
    private string $additionalDetails;

    /**
     * @var string
     */
    private string $zip;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var string
     */
    private string $mobile;

    /**
     * @var string
     */
    private string $country;

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return Address
     */
    public function setFax(string $fax): self
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Address
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     * @return Address
     */
    public function setHouseNumber(string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Address
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return Address
     */
    public function setState(string $state): self
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Address
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalDetails(): string
    {
        return $this->additionalDetails;
    }

    /**
     * @param string $additionalDetails
     * @return Address
     */
    public function setAdditionalDetails(string $additionalDetails): self
    {
        $this->additionalDetails = $additionalDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return Address
     */
    public function setZip(string $zip): self
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Address
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return Address
     */
    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

}