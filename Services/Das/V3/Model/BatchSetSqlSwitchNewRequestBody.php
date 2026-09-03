<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSetSqlSwitchNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSetSqlSwitchNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOn  是否开启
    * engineType  数据库引擎类型
    * switchType  设置开关的类型，取值范围：fullsql、slowsql
    * instanceIds  实例ID列表
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOn' => 'bool',
            'engineType' => 'string',
            'switchType' => 'string',
            'instanceIds' => 'string[]',
            'retentionHours' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOn  是否开启
    * engineType  数据库引擎类型
    * switchType  设置开关的类型，取值范围：fullsql、slowsql
    * instanceIds  实例ID列表
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOn' => null,
        'engineType' => null,
        'switchType' => null,
        'instanceIds' => null,
        'retentionHours' => 'int64'
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
    * switchOn  是否开启
    * engineType  数据库引擎类型
    * switchType  设置开关的类型，取值范围：fullsql、slowsql
    * instanceIds  实例ID列表
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOn' => 'switch_on',
            'engineType' => 'engine_type',
            'switchType' => 'switch_type',
            'instanceIds' => 'instance_ids',
            'retentionHours' => 'retention_hours'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOn  是否开启
    * engineType  数据库引擎类型
    * switchType  设置开关的类型，取值范围：fullsql、slowsql
    * instanceIds  实例ID列表
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOn' => 'setSwitchOn',
            'engineType' => 'setEngineType',
            'switchType' => 'setSwitchType',
            'instanceIds' => 'setInstanceIds',
            'retentionHours' => 'setRetentionHours'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOn  是否开启
    * engineType  数据库引擎类型
    * switchType  设置开关的类型，取值范围：fullsql、slowsql
    * instanceIds  实例ID列表
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOn' => 'getSwitchOn',
            'engineType' => 'getEngineType',
            'switchType' => 'getSwitchType',
            'instanceIds' => 'getInstanceIds',
            'retentionHours' => 'getRetentionHours'
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
        $this->container['switchOn'] = isset($data['switchOn']) ? $data['switchOn'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['switchType'] = isset($data['switchType']) ? $data['switchType'] : null;
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['retentionHours'] = isset($data['retentionHours']) ? $data['retentionHours'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['switchOn'] === null) {
            $invalidProperties[] = "'switchOn' can't be null";
        }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
        if ($this->container['switchType'] === null) {
            $invalidProperties[] = "'switchType' can't be null";
        }
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
        if ($this->container['retentionHours'] === null) {
            $invalidProperties[] = "'retentionHours' can't be null";
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
    * Gets switchOn
    *  是否开启
    *
    * @return bool
    */
    public function getSwitchOn()
    {
        return $this->container['switchOn'];
    }

    /**
    * Sets switchOn
    *
    * @param bool $switchOn 是否开启
    *
    * @return $this
    */
    public function setSwitchOn($switchOn)
    {
        $this->container['switchOn'] = $switchOn;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets switchType
    *  设置开关的类型，取值范围：fullsql、slowsql
    *
    * @return string
    */
    public function getSwitchType()
    {
        return $this->container['switchType'];
    }

    /**
    * Sets switchType
    *
    * @param string $switchType 设置开关的类型，取值范围：fullsql、slowsql
    *
    * @return $this
    */
    public function setSwitchType($switchType)
    {
        $this->container['switchType'] = $switchType;
        return $this;
    }

    /**
    * Gets instanceIds
    *  实例ID列表
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds 实例ID列表
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets retentionHours
    *  保存时长
    *
    * @return int
    */
    public function getRetentionHours()
    {
        return $this->container['retentionHours'];
    }

    /**
    * Sets retentionHours
    *
    * @param int $retentionHours 保存时长
    *
    * @return $this
    */
    public function setRetentionHours($retentionHours)
    {
        $this->container['retentionHours'] = $retentionHours;
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

