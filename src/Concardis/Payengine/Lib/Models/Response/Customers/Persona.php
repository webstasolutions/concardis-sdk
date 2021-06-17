<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Response\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

/**
 * Class Persona
 * @package Concardis\Payengine\Lib\Models\Response\Customers
 */
class Persona extends AbstractResponseModel
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
     * @var integer
     */
    private int $birthday;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var string
     */
    private string $personaId;

    /**
     * @var string
     */
    private string $gender;

    /**
     * @var string
     */
    private string $mobile;

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return Persona
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
     * @return Persona
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return integer
     */
    public function getBirthday(): int
    {
        return $this->birthday;
    }

    /**
     * @param integer $birthday
     * @return Persona
     */
    public function setBirthday(int $birthday): self
    {
        $this->birthday = $birthday;
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
     * @return Persona
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
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
     * @return Persona
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
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
     * @return Persona
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonaId(): string
    {
        return $this->personaId;
    }

    /**
     * @param string $personaId
     * @return Persona
     */
    public function setPersonaId(string $personaId): self
    {
        $this->personaId = $personaId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return Persona
     */
    public function setGender(string $gender): self
    {
        $this->gender = $gender;
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
     * @return Persona
     */
    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;
        return $this;
    }
}