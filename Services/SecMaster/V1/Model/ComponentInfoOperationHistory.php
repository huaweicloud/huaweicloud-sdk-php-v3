<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentInfoOperationHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentInfo_operation_history';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationName  操作
    * operationTime  时间点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationName' => 'string',
            'operationTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationName  操作
    * operationTime  时间点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationName' => null,
        'operationTime' => null
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
    * operationName  操作
    * operationTime  时间点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationName' => 'operation_name',
            'operationTime' => 'operation_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationName  操作
    * operationTime  时间点
    *
    * @var string[]
    */
    protected static $setters = [
            'operationName' => 'setOperationName',
            'operationTime' => 'setOperationTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationName  操作
    * operationTime  时间点
    *
    * @var string[]
    */
    protected static $getters = [
            'operationName' => 'getOperationName',
            'operationTime' => 'getOperationTime'
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
        $this->container['operationName'] = isset($data['operationName']) ? $data['operationName'] : null;
        $this->container['operationTime'] = isset($data['operationTime']) ? $data['operationTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operationName']) && (mb_strlen($this->container['operationName']) > 100)) {
                $invalidProperties[] = "invalid value for 'operationName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['operationName']) && (mb_strlen($this->container['operationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'operationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operationTime']) && (mb_strlen($this->container['operationTime']) > 100)) {
                $invalidProperties[] = "invalid value for 'operationTime', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['operationTime']) && (mb_strlen($this->container['operationTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'operationTime', the character length must be bigger than or equal to 1.";
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
    * Gets operationName
    *  操作
    *
    * @return string|null
    */
    public function getOperationName()
    {
        return $this->container['operationName'];
    }

    /**
    * Sets operationName
    *
    * @param string|null $operationName 操作
    *
    * @return $this
    */
    public function setOperationName($operationName)
    {
        $this->container['operationName'] = $operationName;
        return $this;
    }

    /**
    * Gets operationTime
    *  时间点
    *
    * @return string|null
    */
    public function getOperationTime()
    {
        return $this->container['operationTime'];
    }

    /**
    * Sets operationTime
    *
    * @param string|null $operationTime 时间点
    *
    * @return $this
    */
    public function setOperationTime($operationTime)
    {
        $this->container['operationTime'] = $operationTime;
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

