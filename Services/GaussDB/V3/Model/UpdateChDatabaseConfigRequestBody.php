<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateChDatabaseConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateChDatabaseConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID，严格匹配UUID规则。
    * sourceNodeId  源实例节点ID。
    * database  数据库名。
    * value  配置值。仅支持修改同步范围，不支持修改白名单或黑名单类型。  例如：创建了白名单数据同步，调用本接口修改时， 支持 \"value\"：\"{\\\"white_list\\\":\\\"test1,test2,test3\\\"}\" 不支持 \"value\"：\"{\\\"black_list\\\":\\\"test1,test2,test3\\\"}\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceInstanceId' => 'string',
            'sourceNodeId' => 'string',
            'database' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID，严格匹配UUID规则。
    * sourceNodeId  源实例节点ID。
    * database  数据库名。
    * value  配置值。仅支持修改同步范围，不支持修改白名单或黑名单类型。  例如：创建了白名单数据同步，调用本接口修改时， 支持 \"value\"：\"{\\\"white_list\\\":\\\"test1,test2,test3\\\"}\" 不支持 \"value\"：\"{\\\"black_list\\\":\\\"test1,test2,test3\\\"}\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceInstanceId' => null,
        'sourceNodeId' => null,
        'database' => null,
        'value' => null
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
    * sourceInstanceId  源实例ID，严格匹配UUID规则。
    * sourceNodeId  源实例节点ID。
    * database  数据库名。
    * value  配置值。仅支持修改同步范围，不支持修改白名单或黑名单类型。  例如：创建了白名单数据同步，调用本接口修改时， 支持 \"value\"：\"{\\\"white_list\\\":\\\"test1,test2,test3\\\"}\" 不支持 \"value\"：\"{\\\"black_list\\\":\\\"test1,test2,test3\\\"}\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceInstanceId' => 'source_instance_id',
            'sourceNodeId' => 'source_node_id',
            'database' => 'database',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  源实例ID，严格匹配UUID规则。
    * sourceNodeId  源实例节点ID。
    * database  数据库名。
    * value  配置值。仅支持修改同步范围，不支持修改白名单或黑名单类型。  例如：创建了白名单数据同步，调用本接口修改时， 支持 \"value\"：\"{\\\"white_list\\\":\\\"test1,test2,test3\\\"}\" 不支持 \"value\"：\"{\\\"black_list\\\":\\\"test1,test2,test3\\\"}\"
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceInstanceId' => 'setSourceInstanceId',
            'sourceNodeId' => 'setSourceNodeId',
            'database' => 'setDatabase',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  源实例ID，严格匹配UUID规则。
    * sourceNodeId  源实例节点ID。
    * database  数据库名。
    * value  配置值。仅支持修改同步范围，不支持修改白名单或黑名单类型。  例如：创建了白名单数据同步，调用本接口修改时， 支持 \"value\"：\"{\\\"white_list\\\":\\\"test1,test2,test3\\\"}\" 不支持 \"value\"：\"{\\\"black_list\\\":\\\"test1,test2,test3\\\"}\"
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceInstanceId' => 'getSourceInstanceId',
            'sourceNodeId' => 'getSourceNodeId',
            'database' => 'getDatabase',
            'value' => 'getValue'
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
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['sourceNodeId'] = isset($data['sourceNodeId']) ? $data['sourceNodeId'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceInstanceId'] === null) {
            $invalidProperties[] = "'sourceInstanceId' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets sourceInstanceId
    *  源实例ID，严格匹配UUID规则。
    *
    * @return string
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string $sourceInstanceId 源实例ID，严格匹配UUID规则。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
    }

    /**
    * Gets sourceNodeId
    *  源实例节点ID。
    *
    * @return string|null
    */
    public function getSourceNodeId()
    {
        return $this->container['sourceNodeId'];
    }

    /**
    * Sets sourceNodeId
    *
    * @param string|null $sourceNodeId 源实例节点ID。
    *
    * @return $this
    */
    public function setSourceNodeId($sourceNodeId)
    {
        $this->container['sourceNodeId'] = $sourceNodeId;
        return $this;
    }

    /**
    * Gets database
    *  数据库名。
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库名。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets value
    *  配置值。仅支持修改同步范围，不支持修改白名单或黑名单类型。  例如：创建了白名单数据同步，调用本接口修改时， 支持 \"value\"：\"{\\\"white_list\\\":\\\"test1,test2,test3\\\"}\" 不支持 \"value\"：\"{\\\"black_list\\\":\\\"test1,test2,test3\\\"}\"
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 配置值。仅支持修改同步范围，不支持修改白名单或黑名单类型。  例如：创建了白名单数据同步，调用本接口修改时， 支持 \"value\"：\"{\\\"white_list\\\":\\\"test1,test2,test3\\\"}\" 不支持 \"value\"：\"{\\\"black_list\\\":\\\"test1,test2,test3\\\"}\"
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

