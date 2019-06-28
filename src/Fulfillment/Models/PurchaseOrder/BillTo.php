<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\PurchaseOrder;


class BillTo
{
    /**
     * Name of the manufacturer of the product
     *
     * @var string
     */
    public $VendorName;

    /**
     * Address line 1 of the payer
     *
     * @var string
     */
    public $AddressLine1;

    /**
     * Address line 2 of the payer
     *
     * @var string
     */
    public $AddressLine2;

    /**
     * Address line 3 of the payer [can conditionally be used as the province or district field]
     *
     * @var string
     */
    public $AddressLine3;

    /**
     * City of the payer
     *
     * @var string
     */
    public $City;

    /**
     * State of the payer
     *
     * @var string
     */
    public $State;

    /**
     * Postal code of the payer
     *
     * @var string
     */
    public $ZipCode;

    /**
     * Country of the payer / ISO code 2
     *
     * @var string
     */
    public $Country;

    /**
     * Phone number of the payer
     *
     * @var string
     */
    public $PhoneNumber;

    /**
     * Payer's email address
     *
     * @var string
     */
    public $EmailID;

    /**
     * @return string
     */
    public function getVendorName(): string
    {
        return $this->VendorName;
    }

    /**
     * @param string $VendorName
     */
    public function setVendorName(string $VendorName): void
    {
        $this->VendorName = $VendorName;
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
    public function getEmailID(): ?string
    {
        return $this->EmailID;
    }

    /**
     * @param string $EmailID
     */
    public function setEmailID(?string $EmailID = null): void
    {
        $this->EmailID = $EmailID;
    }
}