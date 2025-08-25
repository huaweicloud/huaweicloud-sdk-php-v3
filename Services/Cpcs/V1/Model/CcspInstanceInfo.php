<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CcspInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CcspInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * resourceId  cbc资源id
    * instanceName  实例名称
    * serviceType  实例所属的服务
    * clusterId  实例所属的集群的ID
    * isNormal  实例的健康状态
    * status  实例的服务状态
    * imageName  实例的镜像名称
    * specification  实例的虚机规格
    * az  az
    * expiredTime  超期时间
    * createTime  实例的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'resourceId' => 'string',
            'instanceName' => 'string',
            'serviceType' => 'string',
            'clusterId' => 'string',
            'isNormal' => 'bool',
            'status' => 'string',
            'imageName' => 'string',
            'specification' => 'string',
            'az' => 'string',
            'expiredTime' => 'int',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * resourceId  cbc资源id
    * instanceName  实例名称
    * serviceType  实例所属的服务
    * clusterId  实例所属的集群的ID
    * isNormal  实例的健康状态
    * status  实例的服务状态
    * imageName  实例的镜像名称
    * specification  实例的虚机规格
    * az  az
    * expiredTime  超期时间
    * createTime  实例的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'resourceId' => null,
        'instanceName' => null,
        'serviceType' => null,
        'clusterId' => null,
        'isNormal' => null,
        'status' => null,
        'imageName' => null,
        'specification' => null,
        'az' => null,
        'expiredTime' => 'int64',
        'createTime' => 'int64'
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
    * instanceId  实例ID
    * resourceId  cbc资源id
    * instanceName  实例名称
    * serviceType  实例所属的服务
    * clusterId  实例所属的集群的ID
    * isNormal  实例的健康状态
    * status  实例的服务状态
    * imageName  实例的镜像名称
    * specification  实例的虚机规格
    * az  az
    * expiredTime  超期时间
    * createTime  实例的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'resourceId' => 'resource_id',
            'instanceName' => 'instance_name',
            'serviceType' => 'service_type',
            'clusterId' => 'cluster_id',
            'isNormal' => 'is_normal',
            'status' => 'status',
            'imageName' => 'image_name',
            'specification' => 'specification',
            'az' => 'az',
            'expiredTime' => 'expired_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * resourceId  cbc资源id
    * instanceName  实例名称
    * serviceType  实例所属的服务
    * clusterId  实例所属的集群的ID
    * isNormal  实例的健康状态
    * status  实例的服务状态
    * imageName  实例的镜像名称
    * specification  实例的虚机规格
    * az  az
    * expiredTime  超期时间
    * createTime  实例的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'resourceId' => 'setResourceId',
            'instanceName' => 'setInstanceName',
            'serviceType' => 'setServiceType',
            'clusterId' => 'setClusterId',
            'isNormal' => 'setIsNormal',
            'status' => 'setStatus',
            'imageName' => 'setImageName',
            'specification' => 'setSpecification',
            'az' => 'setAz',
            'expiredTime' => 'setExpiredTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * resourceId  cbc资源id
    * instanceName  实例名称
    * serviceType  实例所属的服务
    * clusterId  实例所属的集群的ID
    * isNormal  实例的健康状态
    * status  实例的服务状态
    * imageName  实例的镜像名称
    * specification  实例的虚机规格
    * az  az
    * expiredTime  超期时间
    * createTime  实例的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'resourceId' => 'getResourceId',
            'instanceName' => 'getInstanceName',
            'serviceType' => 'getServiceType',
            'clusterId' => 'getClusterId',
            'isNormal' => 'getIsNormal',
            'status' => 'getStatus',
            'imageName' => 'getImageName',
            'specification' => 'getSpecification',
            'az' => 'getAz',
            'expiredTime' => 'getExpiredTime',
            'createTime' => 'getCreateTime'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['isNormal'] = isset($data['isNormal']) ? $data['isNormal'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
        $this->container['expiredTime'] = isset($data['expiredTime']) ? $data['expiredTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['isNormal'] === null) {
            $invalidProperties[] = "'isNormal' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['imageName'] === null) {
            $invalidProperties[] = "'imageName' can't be null";
        }
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
        }
        if ($this->container['az'] === null) {
            $invalidProperties[] = "'az' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
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
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets resourceId
    *  cbc资源id
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId cbc资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets serviceType
    *  实例所属的服务
    *
    * @return string
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string $serviceType 实例所属的服务
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets clusterId
    *  实例所属的集群的ID
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 实例所属的集群的ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets isNormal
    *  实例的健康状态
    *
    * @return bool
    */
    public function getIsNormal()
    {
        return $this->container['isNormal'];
    }

    /**
    * Sets isNormal
    *
    * @param bool $isNormal 实例的健康状态
    *
    * @return $this
    */
    public function setIsNormal($isNormal)
    {
        $this->container['isNormal'] = $isNormal;
        return $this;
    }

    /**
    * Gets status
    *  实例的服务状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 实例的服务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets imageName
    *  实例的镜像名称
    *
    * @return string
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string $imageName 实例的镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets specification
    *  实例的虚机规格
    *
    * @return string
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string $specification 实例的虚机规格
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets az
    *  az
    *
    * @return string
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string $az az
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
        return $this;
    }

    /**
    * Gets expiredTime
    *  超期时间
    *
    * @return int|null
    */
    public function getExpiredTime()
    {
        return $this->container['expiredTime'];
    }

    /**
    * Sets expiredTime
    *
    * @param int|null $expiredTime 超期时间
    *
    * @return $this
    */
    public function setExpiredTime($expiredTime)
    {
        $this->container['expiredTime'] = $expiredTime;
        return $this;
    }

    /**
    * Gets createTime
    *  实例的创建时间，UNIX时间戳，单位毫秒
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 实例的创建时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

