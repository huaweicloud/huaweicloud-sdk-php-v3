<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionParamsRepairInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionParams_repair_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queryId  对比任务ID。
    * objects  数据修复对象信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queryId' => 'string',
            'objects' => '\HuaweiCloud\SDK\Drs\V5\Model\ActionParamsRepairInfoObjects[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queryId  对比任务ID。
    * objects  数据修复对象信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queryId' => null,
        'objects' => null
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
    * queryId  对比任务ID。
    * objects  数据修复对象信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queryId' => 'query_id',
            'objects' => 'objects'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queryId  对比任务ID。
    * objects  数据修复对象信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'queryId' => 'setQueryId',
            'objects' => 'setObjects'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queryId  对比任务ID。
    * objects  数据修复对象信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'queryId' => 'getQueryId',
            'objects' => 'getObjects'
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
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['objects'] = isset($data['objects']) ? $data['objects'] : null;
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
    * Gets queryId
    *  对比任务ID。
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId 对比任务ID。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets objects
    *  数据修复对象信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ActionParamsRepairInfoObjects[]|null
    */
    public function getObjects()
    {
        return $this->container['objects'];
    }

    /**
    * Sets objects
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ActionParamsRepairInfoObjects[]|null $objects 数据修复对象信息。
    *
    * @return $this
    */
    public function setObjects($objects)
    {
        $this->container['objects'] = $objects;
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

