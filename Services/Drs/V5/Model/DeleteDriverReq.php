<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteDriverReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteDriverReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * driverNames  jdbc驱动文件列表，列表长度1-20，driver_name的长度5-64，结尾以.jar结尾。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'driverNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * driverNames  jdbc驱动文件列表，列表长度1-20，driver_name的长度5-64，结尾以.jar结尾。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'driverNames' => null
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
    * driverNames  jdbc驱动文件列表，列表长度1-20，driver_name的长度5-64，结尾以.jar结尾。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'driverNames' => 'driver_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * driverNames  jdbc驱动文件列表，列表长度1-20，driver_name的长度5-64，结尾以.jar结尾。
    *
    * @var string[]
    */
    protected static $setters = [
            'driverNames' => 'setDriverNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * driverNames  jdbc驱动文件列表，列表长度1-20，driver_name的长度5-64，结尾以.jar结尾。
    *
    * @var string[]
    */
    protected static $getters = [
            'driverNames' => 'getDriverNames'
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
        $this->container['driverNames'] = isset($data['driverNames']) ? $data['driverNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['driverNames'] === null) {
            $invalidProperties[] = "'driverNames' can't be null";
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
    * Gets driverNames
    *  jdbc驱动文件列表，列表长度1-20，driver_name的长度5-64，结尾以.jar结尾。
    *
    * @return string[]
    */
    public function getDriverNames()
    {
        return $this->container['driverNames'];
    }

    /**
    * Sets driverNames
    *
    * @param string[] $driverNames jdbc驱动文件列表，列表长度1-20，driver_name的长度5-64，结尾以.jar结尾。
    *
    * @return $this
    */
    public function setDriverNames($driverNames)
    {
        $this->container['driverNames'] = $driverNames;
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

