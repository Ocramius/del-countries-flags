<?php 

namespace DelCountriesFlags\Entity;

class Country implements CountryInterface
{
	/**
	 * @var string
	 */
    protected $countryid;
    
    /**
	 * @var string
	 */
    protected $name;
    
    /**
	 * @var string
	 */
    protected $country;
    
    /**
	 * @var string
	 */
    protected $iso;
    
    /**
	 * @var int
	 */
    protected $numcode;
    
    /**
	 * @var string
	 */
    protected $flag;
	
	/**
     * Get id.
     *
     * @return string
     */
    public function getCountryid()
    {
    	return $this->countryid;
    }

    /**
     * Get country's name.
     *
     * @return string
     */
    public function getCountry()
    {
    	return $this->country;
    }
    
    /**
     * Get country's name.
     *
     * @return string
     */
    public function getName()
    {
    	return $this->name;
    }

    /**
     * Get country's ISO code
     *
     * @return string
     */
    public function getIso()
    {
    	return $this->iso;
    }

    /**
     * Get country's numerical code
     *
     * @return int
     */
    public function getNumcode()
	{
    	return $this->numcode;
    }

    /**
     * Get country's flag file name
     *
     * @return string
     */
    public function getFlag()
	{
    	return $this->flag;
    }
    
    /**
     * set ISO
     * @param string $iso
     */
    public function setIso($iso)
    {
    	$this->iso = $iso;
    	return $this;
    }
    
	/**
     * set Country id
     * @param string $iso
     */
    public function setCountryid($id)
    {
    	$this->id = $id;
    	return $this;
    }
    
	/**
     * set Numcode
     * @param int $numcode
     */
    public function setNumcode($numcode)
    {
    	$this->numcode = $numcode;
    	return $this;
    }
    
	/**
     * set Name
     * @param string $name
     */
    public function setName($name)
    {
    	$this->name = $name;
    	return $this;
    }
    
	/**
     * set Country
     * @param string $country
     */
    public function setCountry($country)
    {
    	$this->country = $country;
    	return $this;
    }
    
	/**
     * set Flag
     * @param string $flag
     */
    public function setFlag($flag)
    {
    	$this->flag = $flag;
    	return $this;
    }
}