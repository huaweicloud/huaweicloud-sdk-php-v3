<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalUserExecuteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalUserExecuteInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executor  executor
    * executeCount  执行用例数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executor' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'executeCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executor  executor
    * executeCount  执行用例数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executor' => null,
        'executeCount' => 'int32'
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
    * executor  executor
    * executeCount  执行用例数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executor' => 'executor',
            'executeCount' => 'execute_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executor  executor
    * executeCount  执行用例数
    *
    * @var string[]
    */
    protected static $setters = [
            'executor' => 'setExecutor',
            'executeCount' => 'setExecuteCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executor  executor
    * executeCount  执行用例数
    *
    * @var string[]
    */
    protected static $getters = [
            'executor' => 'getExecutor',
            'executeCount' => 'getExecuteCount'
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
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['executeCount'] = isset($data['executeCount']) ? $data['executeCount'] : null;
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
    * Gets executor
    *  executor
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $executor executor
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets executeCount
    *  执行用例数
    *
    * @return int|null
    */
    public function getExecuteCount()
    {
        return $this->container['executeCount'];
    }

    /**
    * Sets executeCount
    *
    * @param int|null $executeCount 执行用例数
    *
    * @return $this
    */
    public function setExecuteCount($executeCount)
    {
        $this->container['executeCount'] = $executeCount;
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

