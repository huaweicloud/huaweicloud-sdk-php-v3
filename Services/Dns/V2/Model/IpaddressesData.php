<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpaddressesData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpaddressesData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  资源状态。。
    * id  endpoint的ID，uuid形式的一个资源标识。
    * createTime  创建时间。
    * updateTime  更新时间。
    * subnetId  子网ID。
    * errorInfo  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'id' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'subnetId' => 'string',
            'errorInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  资源状态。。
    * id  endpoint的ID，uuid形式的一个资源标识。
    * createTime  创建时间。
    * updateTime  更新时间。
    * subnetId  子网ID。
    * errorInfo  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'id' => null,
        'createTime' => null,
        'updateTime' => null,
        'subnetId' => null,
        'errorInfo' => null
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
    * status  资源状态。。
    * id  endpoint的ID，uuid形式的一个资源标识。
    * createTime  创建时间。
    * updateTime  更新时间。
    * subnetId  子网ID。
    * errorInfo  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'id' => 'id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'subnetId' => 'subnet_id',
            'errorInfo' => 'error_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  资源状态。。
    * id  endpoint的ID，uuid形式的一个资源标识。
    * createTime  创建时间。
    * updateTime  更新时间。
    * subnetId  子网ID。
    * errorInfo  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'subnetId' => 'setSubnetId',
            'errorInfo' => 'setErrorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  资源状态。。
    * id  endpoint的ID，uuid形式的一个资源标识。
    * createTime  创建时间。
    * updateTime  更新时间。
    * subnetId  子网ID。
    * errorInfo  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'subnetId' => 'getSubnetId',
            'errorInfo' => 'getErrorInfo'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
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
    * Gets status
    *  资源状态。。
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
    * @param string|null $status 资源状态。。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  endpoint的ID，uuid形式的一个资源标识。
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
    * @param string|null $id endpoint的ID，uuid形式的一个资源标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param string|null $createTime 创建时间。
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
    *  更新时间。
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
    * @param string|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets errorInfo
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param string|null $errorInfo 错误信息。
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
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

