<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataProcessReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataProcessReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataProcessInfo  指定任务数据加工规则请求体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataProcessInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\DataProcessInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataProcessInfo  指定任务数据加工规则请求体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataProcessInfo' => null
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
    * dataProcessInfo  指定任务数据加工规则请求体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataProcessInfo' => 'data_process_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataProcessInfo  指定任务数据加工规则请求体
    *
    * @var string[]
    */
    protected static $setters = [
            'dataProcessInfo' => 'setDataProcessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataProcessInfo  指定任务数据加工规则请求体
    *
    * @var string[]
    */
    protected static $getters = [
            'dataProcessInfo' => 'getDataProcessInfo'
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
        $this->container['dataProcessInfo'] = isset($data['dataProcessInfo']) ? $data['dataProcessInfo'] : null;
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
    * Gets dataProcessInfo
    *  指定任务数据加工规则请求体
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DataProcessInfo[]|null
    */
    public function getDataProcessInfo()
    {
        return $this->container['dataProcessInfo'];
    }

    /**
    * Sets dataProcessInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DataProcessInfo[]|null $dataProcessInfo 指定任务数据加工规则请求体
    *
    * @return $this
    */
    public function setDataProcessInfo($dataProcessInfo)
    {
        $this->container['dataProcessInfo'] = $dataProcessInfo;
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

