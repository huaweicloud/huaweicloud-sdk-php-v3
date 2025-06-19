<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SystemConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SystemConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  配置项主键
    * key  系统配置名称
    * value  系统配置状态
    * remark  描述
    * regionId  region_id
    * projectId  项目ID
    * updateTime  更新时间
    * updateName  更新人名称
    * updateNum  更新人编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'key' => 'string',
            'value' => 'string',
            'remark' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'updateTime' => 'string',
            'updateName' => 'string',
            'updateNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  配置项主键
    * key  系统配置名称
    * value  系统配置状态
    * remark  描述
    * regionId  region_id
    * projectId  项目ID
    * updateTime  更新时间
    * updateName  更新人名称
    * updateNum  更新人编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'key' => null,
        'value' => null,
        'remark' => null,
        'regionId' => null,
        'projectId' => null,
        'updateTime' => null,
        'updateName' => null,
        'updateNum' => null
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
    * id  配置项主键
    * key  系统配置名称
    * value  系统配置状态
    * remark  描述
    * regionId  region_id
    * projectId  项目ID
    * updateTime  更新时间
    * updateName  更新人名称
    * updateNum  更新人编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'key' => 'key',
            'value' => 'value',
            'remark' => 'remark',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'updateTime' => 'update_time',
            'updateName' => 'update_name',
            'updateNum' => 'update_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  配置项主键
    * key  系统配置名称
    * value  系统配置状态
    * remark  描述
    * regionId  region_id
    * projectId  项目ID
    * updateTime  更新时间
    * updateName  更新人名称
    * updateNum  更新人编号
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'key' => 'setKey',
            'value' => 'setValue',
            'remark' => 'setRemark',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'updateTime' => 'setUpdateTime',
            'updateName' => 'setUpdateName',
            'updateNum' => 'setUpdateNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  配置项主键
    * key  系统配置名称
    * value  系统配置状态
    * remark  描述
    * regionId  region_id
    * projectId  项目ID
    * updateTime  更新时间
    * updateName  更新人名称
    * updateNum  更新人编号
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'key' => 'getKey',
            'value' => 'getValue',
            'remark' => 'getRemark',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'updateTime' => 'getUpdateTime',
            'updateName' => 'getUpdateName',
            'updateNum' => 'getUpdateNum'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateName'] = isset($data['updateName']) ? $data['updateName'] : null;
        $this->container['updateNum'] = isset($data['updateNum']) ? $data['updateNum'] : null;
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
    * Gets id
    *  配置项主键
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 配置项主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets key
    *  系统配置名称
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 系统配置名称
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  系统配置状态
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 系统配置状态
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets remark
    *  描述
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 描述
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets regionId
    *  region_id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId region_id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateName
    *  更新人名称
    *
    * @return string|null
    */
    public function getUpdateName()
    {
        return $this->container['updateName'];
    }

    /**
    * Sets updateName
    *
    * @param string|null $updateName 更新人名称
    *
    * @return $this
    */
    public function setUpdateName($updateName)
    {
        $this->container['updateName'] = $updateName;
        return $this;
    }

    /**
    * Gets updateNum
    *  更新人编号
    *
    * @return string|null
    */
    public function getUpdateNum()
    {
        return $this->container['updateNum'];
    }

    /**
    * Sets updateNum
    *
    * @param string|null $updateNum 更新人编号
    *
    * @return $this
    */
    public function setUpdateNum($updateNum)
    {
        $this->container['updateNum'] = $updateNum;
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

