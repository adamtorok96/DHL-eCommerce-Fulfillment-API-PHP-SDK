<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class ShipTo
{
    /**
     * Recipient’s first name
     *
     * @var string
     */
    public $FirstName;

    /**
     * Recipient’s last name
     *
     * @var string
     */
    public $LastName;

    /**
     * Recipient’s Address line 1
     *
     * @var string
     */
    public $AddressLine1;

    /**
     * Recipient’s Address line 2
     *
     * @var string
     */
    public $AddressLine2;

    /**
     * Recipient’s Address line 3
     *
     * @var string
     */
    public $AddressLine3;

    /**
     * Recipient’s City name
     *
     * @var string
     */
    public $City;

    /**
     * Recipient’s State
     *
     * @var string
     */
    public $State;

    /**
     * Recipient’s Postal code
     *
     * @var string
     */
    public $ZipCode;

    /**
     * Recipient’s Country.Must be in ISO code 2
     *
     * @var string
     */
    public $Country;

    /**
     * Recipient’s Phone Number
     *
     * @var string
     */
    public $PhoneNumber;

    /**
     * Recipient’s EmailID.
     * Validation for accurate email ID For e.g.Email ID should be in the format : abc@def.com
     *
     * @var string
     */
    public $EmailID;

    /**
     * Represents the type of id provided in the order [government issued id, tax id, etc].
     * Conditional use based upon destination country of the order.Country-specific (CN, KR).
     * Feature under development
     *
     * @var string
     */
    public $IDType;

    /**
     * The number or value of the ID provided in the IDType.
     * Country-specific (CN, KR).Feature under development
     *
     * @var string
     */
    public $IDValue;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName(string $FirstName): void
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     */
    public function setLastName(string $LastName): void
    {
        $this->LastName = $LastName;
    }

    /**
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     */
    public function setAddressLine1(string $AddressLine1): void
    {
        $this->AddressLine1 = $AddressLine1;
    }

    /**
     * @return string
     */
    public function getAddressLine2(): ?string
    {
        return $this->AddressLine2;
    }

    /**
     * @param string $AddressLine2
     */
    public function setAddressLine2(?string $AddressLine2 = null): void
    {
        $this->AddressLine2 = $AddressLine2;
    }

    /**
     * @return string
     */
    public function getAddressLine3(): ?string
    {
        return $this->AddressLine3;
    }

    /**
     * @param string $AddressLine3
     */
    public function setAddressLine3(?string $AddressLine3 = null): void
    {
        $this->AddressLine3 = $AddressLine3;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity(string $City): void
    {
        $this->City = $City;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->State;
    }

    /**
     * @param string $State
     */
    public function setState(?string $State = null): void
    {
        $this->State = $State;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     */
    public function setZipCode(string $ZipCode): void
    {
        $this->ZipCode = $ZipCode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     */
    public function setCountry(string $Country): void
    {
        $this->Country = $Country;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     */
    public function setPhoneNumber(?string $PhoneNumber = null): void
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getEmailID(): string
    {
        return $this->EmailID;
    }

    /**
     * @param string $EmailID
     */
    public function setEmailID(string $EmailID): void
    {
        $this->EmailID = $EmailID;
    }

    /**
     * @return string
     */
    public function getIDType(): ?string
    {
        return $this->IDType;
    }

    /**
     * @param string $IDType
     */
    public function setIDType(?string $IDType = null): void
    {
        $this->IDType = $IDType;
    }

    /**
     * @return string
     */
    public function getIDValue(): ?string
    {
        return $this->IDValue;
    }

    /**
     * @param string $IDValue
     */
    public function setIDValue(?string $IDValue = null): void
    {
        $this->IDValue = $IDValue;
    }
}