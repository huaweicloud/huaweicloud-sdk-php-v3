<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ItineraryList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ItineraryList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * departureStation  始发站。
    * destinationStation  目的站。
    * carrier  承运人。
    * flight  航班号。
    * cabinClass  座位等级。
    * date  日期。
    * time  时间。
    * fareBasis  客票类别。
    * effectiveDate  客票生效日期。
    * expiryDate  有效截止日期。
    * baggageAllowance  免费行李。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'departureStation' => 'string',
            'destinationStation' => 'string',
            'carrier' => 'string',
            'flight' => 'string',
            'cabinClass' => 'string',
            'date' => 'string',
            'time' => 'string',
            'fareBasis' => 'string',
            'effectiveDate' => 'string',
            'expiryDate' => 'string',
            'baggageAllowance' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * departureStation  始发站。
    * destinationStation  目的站。
    * carrier  承运人。
    * flight  航班号。
    * cabinClass  座位等级。
    * date  日期。
    * time  时间。
    * fareBasis  客票类别。
    * effectiveDate  客票生效日期。
    * expiryDate  有效截止日期。
    * baggageAllowance  免费行李。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'departureStation' => null,
        'destinationStation' => null,
        'carrier' => null,
        'flight' => null,
        'cabinClass' => null,
        'date' => null,
        'time' => null,
        'fareBasis' => null,
        'effectiveDate' => null,
        'expiryDate' => null,
        'baggageAllowance' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * departureStation  始发站。
    * destinationStation  目的站。
    * carrier  承运人。
    * flight  航班号。
    * cabinClass  座位等级。
    * date  日期。
    * time  时间。
    * fareBasis  客票类别。
    * effectiveDate  客票生效日期。
    * expiryDate  有效截止日期。
    * baggageAllowance  免费行李。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'departureStation' => 'departure_station',
            'destinationStation' => 'destination_station',
            'carrier' => 'carrier',
            'flight' => 'flight',
            'cabinClass' => 'cabin_class',
            'date' => 'date',
            'time' => 'time',
            'fareBasis' => 'fare_basis',
            'effectiveDate' => 'effective_date',
            'expiryDate' => 'expiry_date',
            'baggageAllowance' => 'baggage_allowance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * departureStation  始发站。
    * destinationStation  目的站。
    * carrier  承运人。
    * flight  航班号。
    * cabinClass  座位等级。
    * date  日期。
    * time  时间。
    * fareBasis  客票类别。
    * effectiveDate  客票生效日期。
    * expiryDate  有效截止日期。
    * baggageAllowance  免费行李。
    *
    * @var string[]
    */
    protected static $setters = [
            'departureStation' => 'setDepartureStation',
            'destinationStation' => 'setDestinationStation',
            'carrier' => 'setCarrier',
            'flight' => 'setFlight',
            'cabinClass' => 'setCabinClass',
            'date' => 'setDate',
            'time' => 'setTime',
            'fareBasis' => 'setFareBasis',
            'effectiveDate' => 'setEffectiveDate',
            'expiryDate' => 'setExpiryDate',
            'baggageAllowance' => 'setBaggageAllowance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * departureStation  始发站。
    * destinationStation  目的站。
    * carrier  承运人。
    * flight  航班号。
    * cabinClass  座位等级。
    * date  日期。
    * time  时间。
    * fareBasis  客票类别。
    * effectiveDate  客票生效日期。
    * expiryDate  有效截止日期。
    * baggageAllowance  免费行李。
    *
    * @var string[]
    */
    protected static $getters = [
            'departureStation' => 'getDepartureStation',
            'destinationStation' => 'getDestinationStation',
            'carrier' => 'getCarrier',
            'flight' => 'getFlight',
            'cabinClass' => 'getCabinClass',
            'date' => 'getDate',
            'time' => 'getTime',
            'fareBasis' => 'getFareBasis',
            'effectiveDate' => 'getEffectiveDate',
            'expiryDate' => 'getExpiryDate',
            'baggageAllowance' => 'getBaggageAllowance'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['departureStation'] = isset($data['departureStation']) ? $data['departureStation'] : null;
        $this->container['destinationStation'] = isset($data['destinationStation']) ? $data['destinationStation'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['flight'] = isset($data['flight']) ? $data['flight'] : null;
        $this->container['cabinClass'] = isset($data['cabinClass']) ? $data['cabinClass'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['fareBasis'] = isset($data['fareBasis']) ? $data['fareBasis'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['baggageAllowance'] = isset($data['baggageAllowance']) ? $data['baggageAllowance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets departureStation
    *  始发站。
    *
    * @return string|null
    */
    public function getDepartureStation()
    {
        return $this->container['departureStation'];
    }

    /**
    * Sets departureStation
    *
    * @param string|null $departureStation 始发站。
    *
    * @return $this
    */
    public function setDepartureStation($departureStation)
    {
        $this->container['departureStation'] = $departureStation;
        return $this;
    }

    /**
    * Gets destinationStation
    *  目的站。
    *
    * @return string|null
    */
    public function getDestinationStation()
    {
        return $this->container['destinationStation'];
    }

    /**
    * Sets destinationStation
    *
    * @param string|null $destinationStation 目的站。
    *
    * @return $this
    */
    public function setDestinationStation($destinationStation)
    {
        $this->container['destinationStation'] = $destinationStation;
        return $this;
    }

    /**
    * Gets carrier
    *  承运人。
    *
    * @return string|null
    */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
    * Sets carrier
    *
    * @param string|null $carrier 承运人。
    *
    * @return $this
    */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;
        return $this;
    }

    /**
    * Gets flight
    *  航班号。
    *
    * @return string|null
    */
    public function getFlight()
    {
        return $this->container['flight'];
    }

    /**
    * Sets flight
    *
    * @param string|null $flight 航班号。
    *
    * @return $this
    */
    public function setFlight($flight)
    {
        $this->container['flight'] = $flight;
        return $this;
    }

    /**
    * Gets cabinClass
    *  座位等级。
    *
    * @return string|null
    */
    public function getCabinClass()
    {
        return $this->container['cabinClass'];
    }

    /**
    * Sets cabinClass
    *
    * @param string|null $cabinClass 座位等级。
    *
    * @return $this
    */
    public function setCabinClass($cabinClass)
    {
        $this->container['cabinClass'] = $cabinClass;
        return $this;
    }

    /**
    * Gets date
    *  日期。
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 日期。
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets time
    *  时间。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 时间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets fareBasis
    *  客票类别。
    *
    * @return string|null
    */
    public function getFareBasis()
    {
        return $this->container['fareBasis'];
    }

    /**
    * Sets fareBasis
    *
    * @param string|null $fareBasis 客票类别。
    *
    * @return $this
    */
    public function setFareBasis($fareBasis)
    {
        $this->container['fareBasis'] = $fareBasis;
        return $this;
    }

    /**
    * Gets effectiveDate
    *  客票生效日期。
    *
    * @return string|null
    */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
    * Sets effectiveDate
    *
    * @param string|null $effectiveDate 客票生效日期。
    *
    * @return $this
    */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
    * Gets expiryDate
    *  有效截止日期。
    *
    * @return string|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param string|null $expiryDate 有效截止日期。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets baggageAllowance
    *  免费行李。
    *
    * @return string|null
    */
    public function getBaggageAllowance()
    {
        return $this->container['baggageAllowance'];
    }

    /**
    * Sets baggageAllowance
    *
    * @param string|null $baggageAllowance 免费行李。
    *
    * @return $this
    */
    public function setBaggageAllowance($baggageAllowance)
    {
        $this->container['baggageAllowance'] = $baggageAllowance;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

