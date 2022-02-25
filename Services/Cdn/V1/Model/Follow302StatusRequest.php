<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Follow302StatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Follow302StatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * follow302Status  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'follow302Status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * follow302Status  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'follow302Status' => null
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
    * follow302Status  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'follow302Status' => 'follow302_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * follow302Status  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $setters = [
            'follow302Status' => 'setFollow302Status'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * follow302Status  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $getters = [
            'follow302Status' => 'getFollow302Status'
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
    const FOLLOW302_STATUS_OFF = 'off';
    const FOLLOW302_STATUS_ON = 'on';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFollow302StatusAllowableValues()
    {
        return [
            self::FOLLOW302_STATUS_OFF,
            self::FOLLOW302_STATUS_ON,
        ];
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
        $this->container['follow302Status'] = isset($data['follow302Status']) ? $data['follow302Status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['follow302Status'] === null) {
            $invalidProperties[] = "'follow302Status' can't be null";
        }
            $allowedValues = $this->getFollow302StatusAllowableValues();
                if (!is_null($this->container['follow302Status']) && !in_array($this->container['follow302Status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'follow302Status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets follow302Status
    *  follow302状态（\"off\"/\"on\"）
    *
    * @return string
    */
    public function getFollow302Status()
    {
        return $this->container['follow302Status'];
    }

    /**
    * Sets follow302Status
    *
    * @param string $follow302Status follow302状态（\"off\"/\"on\"）
    *
    * @return $this
    */
    public function setFollow302Status($follow302Status)
    {
        $this->container['follow302Status'] = $follow302Status;
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

