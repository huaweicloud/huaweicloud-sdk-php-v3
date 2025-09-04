<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAppInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAppInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * version  应用实例版本
    * appId  应用ID
    * appVersion  应用版本
    * status  应用实例状态
    * statusDescription  状态描述
    * values  应用实例chart配置
    * createTime  创建时间
    * updateTime  最后一次更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'namespace' => 'string',
            'version' => 'string',
            'appId' => 'string',
            'appVersion' => 'string',
            'status' => 'string',
            'statusDescription' => 'string',
            'values' => 'object',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * version  应用实例版本
    * appId  应用ID
    * appVersion  应用版本
    * status  应用实例状态
    * statusDescription  状态描述
    * values  应用实例chart配置
    * createTime  创建时间
    * updateTime  最后一次更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'namespace' => null,
        'version' => null,
        'appId' => null,
        'appVersion' => null,
        'status' => null,
        'statusDescription' => null,
        'values' => null,
        'createTime' => null,
        'updateTime' => null
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
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * version  应用实例版本
    * appId  应用ID
    * appVersion  应用版本
    * status  应用实例状态
    * statusDescription  状态描述
    * values  应用实例chart配置
    * createTime  创建时间
    * updateTime  最后一次更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'namespace' => 'namespace',
            'version' => 'version',
            'appId' => 'app_id',
            'appVersion' => 'app_version',
            'status' => 'status',
            'statusDescription' => 'status_description',
            'values' => 'values',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * version  应用实例版本
    * appId  应用ID
    * appVersion  应用版本
    * status  应用实例状态
    * statusDescription  状态描述
    * values  应用实例chart配置
    * createTime  创建时间
    * updateTime  最后一次更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'namespace' => 'setNamespace',
            'version' => 'setVersion',
            'appId' => 'setAppId',
            'appVersion' => 'setAppVersion',
            'status' => 'setStatus',
            'statusDescription' => 'setStatusDescription',
            'values' => 'setValues',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * version  应用实例版本
    * appId  应用ID
    * appVersion  应用版本
    * status  应用实例状态
    * statusDescription  状态描述
    * values  应用实例chart配置
    * createTime  创建时间
    * updateTime  最后一次更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'namespace' => 'getNamespace',
            'version' => 'getVersion',
            'appId' => 'getAppId',
            'appVersion' => 'getAppVersion',
            'status' => 'getStatus',
            'statusDescription' => 'getStatusDescription',
            'values' => 'getValues',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusDescription'] = isset($data['statusDescription']) ? $data['statusDescription'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    *  应用实例ID
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
    * @param string|null $id 应用实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespace
    *  边缘集群命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 边缘集群命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets version
    *  应用实例版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 应用实例版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appVersion
    *  应用版本
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 应用版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets status
    *  应用实例状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 应用实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusDescription
    *  状态描述
    *
    * @return string|null
    */
    public function getStatusDescription()
    {
        return $this->container['statusDescription'];
    }

    /**
    * Sets statusDescription
    *
    * @param string|null $statusDescription 状态描述
    *
    * @return $this
    */
    public function setStatusDescription($statusDescription)
    {
        $this->container['statusDescription'] = $statusDescription;
        return $this;
    }

    /**
    * Gets values
    *  应用实例chart配置
    *
    * @return object|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param object|null $values 应用实例chart配置
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后一次更新时间
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
    * @param string|null $updateTime 最后一次更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

