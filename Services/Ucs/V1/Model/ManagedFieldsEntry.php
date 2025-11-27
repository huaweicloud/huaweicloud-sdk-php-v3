<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ManagedFieldsEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ManagedFieldsEntry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manager  管理者的名称
    * operation  记录导致此条目创建的操作类型，只能是 Apply 或 Update 两种操作类型
    * apiVersion  该管理者定义字段时所依据的资源 API 版本
    * time  此管理条目被创建或最后一次更新的时间戳
    * fieldsType  固定为 \"FieldsV1\"，标记字段结构格式
    * fieldsV1  用于存储实际被管理的字段信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manager' => 'string',
            'operation' => 'string',
            'apiVersion' => 'string',
            'time' => 'string',
            'fieldsType' => 'string',
            'fieldsV1' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manager  管理者的名称
    * operation  记录导致此条目创建的操作类型，只能是 Apply 或 Update 两种操作类型
    * apiVersion  该管理者定义字段时所依据的资源 API 版本
    * time  此管理条目被创建或最后一次更新的时间戳
    * fieldsType  固定为 \"FieldsV1\"，标记字段结构格式
    * fieldsV1  用于存储实际被管理的字段信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manager' => null,
        'operation' => null,
        'apiVersion' => null,
        'time' => null,
        'fieldsType' => null,
        'fieldsV1' => null
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
    * manager  管理者的名称
    * operation  记录导致此条目创建的操作类型，只能是 Apply 或 Update 两种操作类型
    * apiVersion  该管理者定义字段时所依据的资源 API 版本
    * time  此管理条目被创建或最后一次更新的时间戳
    * fieldsType  固定为 \"FieldsV1\"，标记字段结构格式
    * fieldsV1  用于存储实际被管理的字段信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manager' => 'manager',
            'operation' => 'operation',
            'apiVersion' => 'apiVersion',
            'time' => 'time',
            'fieldsType' => 'fieldsType',
            'fieldsV1' => 'fieldsV1'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manager  管理者的名称
    * operation  记录导致此条目创建的操作类型，只能是 Apply 或 Update 两种操作类型
    * apiVersion  该管理者定义字段时所依据的资源 API 版本
    * time  此管理条目被创建或最后一次更新的时间戳
    * fieldsType  固定为 \"FieldsV1\"，标记字段结构格式
    * fieldsV1  用于存储实际被管理的字段信息
    *
    * @var string[]
    */
    protected static $setters = [
            'manager' => 'setManager',
            'operation' => 'setOperation',
            'apiVersion' => 'setApiVersion',
            'time' => 'setTime',
            'fieldsType' => 'setFieldsType',
            'fieldsV1' => 'setFieldsV1'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manager  管理者的名称
    * operation  记录导致此条目创建的操作类型，只能是 Apply 或 Update 两种操作类型
    * apiVersion  该管理者定义字段时所依据的资源 API 版本
    * time  此管理条目被创建或最后一次更新的时间戳
    * fieldsType  固定为 \"FieldsV1\"，标记字段结构格式
    * fieldsV1  用于存储实际被管理的字段信息
    *
    * @var string[]
    */
    protected static $getters = [
            'manager' => 'getManager',
            'operation' => 'getOperation',
            'apiVersion' => 'getApiVersion',
            'time' => 'getTime',
            'fieldsType' => 'getFieldsType',
            'fieldsV1' => 'getFieldsV1'
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
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['fieldsType'] = isset($data['fieldsType']) ? $data['fieldsType'] : null;
        $this->container['fieldsV1'] = isset($data['fieldsV1']) ? $data['fieldsV1'] : null;
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
    * Gets manager
    *  管理者的名称
    *
    * @return string|null
    */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
    * Sets manager
    *
    * @param string|null $manager 管理者的名称
    *
    * @return $this
    */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;
        return $this;
    }

    /**
    * Gets operation
    *  记录导致此条目创建的操作类型，只能是 Apply 或 Update 两种操作类型
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 记录导致此条目创建的操作类型，只能是 Apply 或 Update 两种操作类型
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets apiVersion
    *  该管理者定义字段时所依据的资源 API 版本
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion 该管理者定义字段时所依据的资源 API 版本
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets time
    *  此管理条目被创建或最后一次更新的时间戳
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
    * @param string|null $time 此管理条目被创建或最后一次更新的时间戳
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets fieldsType
    *  固定为 \"FieldsV1\"，标记字段结构格式
    *
    * @return string|null
    */
    public function getFieldsType()
    {
        return $this->container['fieldsType'];
    }

    /**
    * Sets fieldsType
    *
    * @param string|null $fieldsType 固定为 \"FieldsV1\"，标记字段结构格式
    *
    * @return $this
    */
    public function setFieldsType($fieldsType)
    {
        $this->container['fieldsType'] = $fieldsType;
        return $this;
    }

    /**
    * Gets fieldsV1
    *  用于存储实际被管理的字段信息
    *
    * @return object|null
    */
    public function getFieldsV1()
    {
        return $this->container['fieldsV1'];
    }

    /**
    * Sets fieldsV1
    *
    * @param object|null $fieldsV1 用于存储实际被管理的字段信息
    *
    * @return $this
    */
    public function setFieldsV1($fieldsV1)
    {
        $this->container['fieldsV1'] = $fieldsV1;
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

