<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteDeviceControlsSetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteDeviceControlsSetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultCode  属性设置的响应码，具体为实际设备返回的响应码
    * resultDesc  属性设置的描述，具体为实际设备返回的描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultCode' => 'int',
            'resultDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultCode  属性设置的响应码，具体为实际设备返回的响应码
    * resultDesc  属性设置的描述，具体为实际设备返回的描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultCode' => 'int32',
        'resultDesc' => null
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
    * resultCode  属性设置的响应码，具体为实际设备返回的响应码
    * resultDesc  属性设置的描述，具体为实际设备返回的描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultCode' => 'result_code',
            'resultDesc' => 'result_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultCode  属性设置的响应码，具体为实际设备返回的响应码
    * resultDesc  属性设置的描述，具体为实际设备返回的描述
    *
    * @var string[]
    */
    protected static $setters = [
            'resultCode' => 'setResultCode',
            'resultDesc' => 'setResultDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultCode  属性设置的响应码，具体为实际设备返回的响应码
    * resultDesc  属性设置的描述，具体为实际设备返回的描述
    *
    * @var string[]
    */
    protected static $getters = [
            'resultCode' => 'getResultCode',
            'resultDesc' => 'getResultDesc'
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
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['resultDesc'] = isset($data['resultDesc']) ? $data['resultDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resultCode']) && ($this->container['resultCode'] > 600)) {
                $invalidProperties[] = "invalid value for 'resultCode', must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['resultCode']) && ($this->container['resultCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'resultCode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resultDesc']) && (mb_strlen($this->container['resultDesc']) > 2048)) {
                $invalidProperties[] = "invalid value for 'resultDesc', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['resultDesc']) && (mb_strlen($this->container['resultDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'resultDesc', the character length must be bigger than or equal to 0.";
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
    * Gets resultCode
    *  属性设置的响应码，具体为实际设备返回的响应码
    *
    * @return int|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param int|null $resultCode 属性设置的响应码，具体为实际设备返回的响应码
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets resultDesc
    *  属性设置的描述，具体为实际设备返回的描述
    *
    * @return string|null
    */
    public function getResultDesc()
    {
        return $this->container['resultDesc'];
    }

    /**
    * Sets resultDesc
    *
    * @param string|null $resultDesc 属性设置的描述，具体为实际设备返回的描述
    *
    * @return $this
    */
    public function setResultDesc($resultDesc)
    {
        $this->container['resultDesc'] = $resultDesc;
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

