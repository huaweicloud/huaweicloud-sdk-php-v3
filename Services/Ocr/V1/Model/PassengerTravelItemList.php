<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PassengerTravelItemList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PassengerTravelItemList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * travelerName  出行人。
    * idNumber  有效身份证件号。
    * travelDate  出行日期。
    * departureLocation  出发地。
    * arrivalLocation  到达地。
    * class  等级。
    * transportationType  交通工具类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'travelerName' => 'string',
            'idNumber' => 'string',
            'travelDate' => 'string',
            'departureLocation' => 'string',
            'arrivalLocation' => 'string',
            'class' => 'string',
            'transportationType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * travelerName  出行人。
    * idNumber  有效身份证件号。
    * travelDate  出行日期。
    * departureLocation  出发地。
    * arrivalLocation  到达地。
    * class  等级。
    * transportationType  交通工具类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'travelerName' => null,
        'idNumber' => null,
        'travelDate' => null,
        'departureLocation' => null,
        'arrivalLocation' => null,
        'class' => null,
        'transportationType' => null
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
    * travelerName  出行人。
    * idNumber  有效身份证件号。
    * travelDate  出行日期。
    * departureLocation  出发地。
    * arrivalLocation  到达地。
    * class  等级。
    * transportationType  交通工具类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'travelerName' => 'traveler_name',
            'idNumber' => 'id_number',
            'travelDate' => 'travel_date',
            'departureLocation' => 'departure_location',
            'arrivalLocation' => 'arrival_location',
            'class' => 'class',
            'transportationType' => 'transportation_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * travelerName  出行人。
    * idNumber  有效身份证件号。
    * travelDate  出行日期。
    * departureLocation  出发地。
    * arrivalLocation  到达地。
    * class  等级。
    * transportationType  交通工具类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'travelerName' => 'setTravelerName',
            'idNumber' => 'setIdNumber',
            'travelDate' => 'setTravelDate',
            'departureLocation' => 'setDepartureLocation',
            'arrivalLocation' => 'setArrivalLocation',
            'class' => 'setClass',
            'transportationType' => 'setTransportationType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * travelerName  出行人。
    * idNumber  有效身份证件号。
    * travelDate  出行日期。
    * departureLocation  出发地。
    * arrivalLocation  到达地。
    * class  等级。
    * transportationType  交通工具类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'travelerName' => 'getTravelerName',
            'idNumber' => 'getIdNumber',
            'travelDate' => 'getTravelDate',
            'departureLocation' => 'getDepartureLocation',
            'arrivalLocation' => 'getArrivalLocation',
            'class' => 'getClass',
            'transportationType' => 'getTransportationType'
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
        $this->container['travelerName'] = isset($data['travelerName']) ? $data['travelerName'] : null;
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['travelDate'] = isset($data['travelDate']) ? $data['travelDate'] : null;
        $this->container['departureLocation'] = isset($data['departureLocation']) ? $data['departureLocation'] : null;
        $this->container['arrivalLocation'] = isset($data['arrivalLocation']) ? $data['arrivalLocation'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['transportationType'] = isset($data['transportationType']) ? $data['transportationType'] : null;
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
    * Gets travelerName
    *  出行人。
    *
    * @return string|null
    */
    public function getTravelerName()
    {
        return $this->container['travelerName'];
    }

    /**
    * Sets travelerName
    *
    * @param string|null $travelerName 出行人。
    *
    * @return $this
    */
    public function setTravelerName($travelerName)
    {
        $this->container['travelerName'] = $travelerName;
        return $this;
    }

    /**
    * Gets idNumber
    *  有效身份证件号。
    *
    * @return string|null
    */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
    * Sets idNumber
    *
    * @param string|null $idNumber 有效身份证件号。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets travelDate
    *  出行日期。
    *
    * @return string|null
    */
    public function getTravelDate()
    {
        return $this->container['travelDate'];
    }

    /**
    * Sets travelDate
    *
    * @param string|null $travelDate 出行日期。
    *
    * @return $this
    */
    public function setTravelDate($travelDate)
    {
        $this->container['travelDate'] = $travelDate;
        return $this;
    }

    /**
    * Gets departureLocation
    *  出发地。
    *
    * @return string|null
    */
    public function getDepartureLocation()
    {
        return $this->container['departureLocation'];
    }

    /**
    * Sets departureLocation
    *
    * @param string|null $departureLocation 出发地。
    *
    * @return $this
    */
    public function setDepartureLocation($departureLocation)
    {
        $this->container['departureLocation'] = $departureLocation;
        return $this;
    }

    /**
    * Gets arrivalLocation
    *  到达地。
    *
    * @return string|null
    */
    public function getArrivalLocation()
    {
        return $this->container['arrivalLocation'];
    }

    /**
    * Sets arrivalLocation
    *
    * @param string|null $arrivalLocation 到达地。
    *
    * @return $this
    */
    public function setArrivalLocation($arrivalLocation)
    {
        $this->container['arrivalLocation'] = $arrivalLocation;
        return $this;
    }

    /**
    * Gets class
    *  等级。
    *
    * @return string|null
    */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
    * Sets class
    *
    * @param string|null $class 等级。
    *
    * @return $this
    */
    public function setClass($class)
    {
        $this->container['class'] = $class;
        return $this;
    }

    /**
    * Gets transportationType
    *  交通工具类型。
    *
    * @return string|null
    */
    public function getTransportationType()
    {
        return $this->container['transportationType'];
    }

    /**
    * Sets transportationType
    *
    * @param string|null $transportationType 交通工具类型。
    *
    * @return $this
    */
    public function setTransportationType($transportationType)
    {
        $this->container['transportationType'] = $transportationType;
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

