<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlanCycle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlanCycle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startDate  计划开始时间，要求用UTC时间表示。如2020-03-04
    * endDate  计划结束时间，要求用UTC时间表示。如2020-03-31
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startDate' => 'string',
            'endDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startDate  计划开始时间，要求用UTC时间表示。如2020-03-04
    * endDate  计划结束时间，要求用UTC时间表示。如2020-03-31
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startDate' => null,
        'endDate' => null
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
    * startDate  计划开始时间，要求用UTC时间表示。如2020-03-04
    * endDate  计划结束时间，要求用UTC时间表示。如2020-03-31
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startDate' => 'start_date',
            'endDate' => 'end_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startDate  计划开始时间，要求用UTC时间表示。如2020-03-04
    * endDate  计划结束时间，要求用UTC时间表示。如2020-03-31
    *
    * @var string[]
    */
    protected static $setters = [
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startDate  计划开始时间，要求用UTC时间表示。如2020-03-04
    * endDate  计划结束时间，要求用UTC时间表示。如2020-03-31
    *
    * @var string[]
    */
    protected static $getters = [
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate'
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
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
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
    * Gets startDate
    *  计划开始时间，要求用UTC时间表示。如2020-03-04
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 计划开始时间，要求用UTC时间表示。如2020-03-04
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  计划结束时间，要求用UTC时间表示。如2020-03-31
    *
    * @return string|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string|null $endDate 计划结束时间，要求用UTC时间表示。如2020-03-31
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
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

