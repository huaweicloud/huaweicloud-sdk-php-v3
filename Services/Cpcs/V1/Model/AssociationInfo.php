<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  绑定关系ID
    * clusterId  集群ID
    * clusterName  集群名称
    * appId  应用ID
    * appName  应用名称
    * vpcName  应用所属的VPC名称
    * subnetName  应用所属的VPC的子网
    * clusterServerType  集群所属的服务
    * vpcepAddress  访问地址
    * updateTime  绑定关系的最新更改时间，UNIX时间戳，单位毫秒
    * createTime  绑定关系的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'appId' => 'string',
            'appName' => 'string',
            'vpcName' => 'string',
            'subnetName' => 'string',
            'clusterServerType' => 'string',
            'vpcepAddress' => 'string',
            'updateTime' => 'int',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  绑定关系ID
    * clusterId  集群ID
    * clusterName  集群名称
    * appId  应用ID
    * appName  应用名称
    * vpcName  应用所属的VPC名称
    * subnetName  应用所属的VPC的子网
    * clusterServerType  集群所属的服务
    * vpcepAddress  访问地址
    * updateTime  绑定关系的最新更改时间，UNIX时间戳，单位毫秒
    * createTime  绑定关系的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'clusterName' => null,
        'appId' => null,
        'appName' => null,
        'vpcName' => null,
        'subnetName' => null,
        'clusterServerType' => null,
        'vpcepAddress' => null,
        'updateTime' => 'int64',
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
    * id  绑定关系ID
    * clusterId  集群ID
    * clusterName  集群名称
    * appId  应用ID
    * appName  应用名称
    * vpcName  应用所属的VPC名称
    * subnetName  应用所属的VPC的子网
    * clusterServerType  集群所属的服务
    * vpcepAddress  访问地址
    * updateTime  绑定关系的最新更改时间，UNIX时间戳，单位毫秒
    * createTime  绑定关系的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'appId' => 'app_id',
            'appName' => 'app_name',
            'vpcName' => 'vpc_name',
            'subnetName' => 'subnet_name',
            'clusterServerType' => 'cluster_server_type',
            'vpcepAddress' => 'vpcep_address',
            'updateTime' => 'update_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  绑定关系ID
    * clusterId  集群ID
    * clusterName  集群名称
    * appId  应用ID
    * appName  应用名称
    * vpcName  应用所属的VPC名称
    * subnetName  应用所属的VPC的子网
    * clusterServerType  集群所属的服务
    * vpcepAddress  访问地址
    * updateTime  绑定关系的最新更改时间，UNIX时间戳，单位毫秒
    * createTime  绑定关系的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'vpcName' => 'setVpcName',
            'subnetName' => 'setSubnetName',
            'clusterServerType' => 'setClusterServerType',
            'vpcepAddress' => 'setVpcepAddress',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  绑定关系ID
    * clusterId  集群ID
    * clusterName  集群名称
    * appId  应用ID
    * appName  应用名称
    * vpcName  应用所属的VPC名称
    * subnetName  应用所属的VPC的子网
    * clusterServerType  集群所属的服务
    * vpcepAddress  访问地址
    * updateTime  绑定关系的最新更改时间，UNIX时间戳，单位毫秒
    * createTime  绑定关系的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'vpcName' => 'getVpcName',
            'subnetName' => 'getSubnetName',
            'clusterServerType' => 'getClusterServerType',
            'vpcepAddress' => 'getVpcepAddress',
            'updateTime' => 'getUpdateTime',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['clusterServerType'] = isset($data['clusterServerType']) ? $data['clusterServerType'] : null;
        $this->container['vpcepAddress'] = isset($data['vpcepAddress']) ? $data['vpcepAddress'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
        if ($this->container['vpcName'] === null) {
            $invalidProperties[] = "'vpcName' can't be null";
        }
        if ($this->container['subnetName'] === null) {
            $invalidProperties[] = "'subnetName' can't be null";
        }
        if ($this->container['clusterServerType'] === null) {
            $invalidProperties[] = "'clusterServerType' can't be null";
        }
        if ($this->container['vpcepAddress'] === null) {
            $invalidProperties[] = "'vpcepAddress' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
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
    * Gets id
    *  绑定关系ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 绑定关系ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
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
    * @param string $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets vpcName
    *  应用所属的VPC名称
    *
    * @return string
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string $vpcName 应用所属的VPC名称
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets subnetName
    *  应用所属的VPC的子网
    *
    * @return string
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string $subnetName 应用所属的VPC的子网
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets clusterServerType
    *  集群所属的服务
    *
    * @return string
    */
    public function getClusterServerType()
    {
        return $this->container['clusterServerType'];
    }

    /**
    * Sets clusterServerType
    *
    * @param string $clusterServerType 集群所属的服务
    *
    * @return $this
    */
    public function setClusterServerType($clusterServerType)
    {
        $this->container['clusterServerType'] = $clusterServerType;
        return $this;
    }

    /**
    * Gets vpcepAddress
    *  访问地址
    *
    * @return string
    */
    public function getVpcepAddress()
    {
        return $this->container['vpcepAddress'];
    }

    /**
    * Sets vpcepAddress
    *
    * @param string $vpcepAddress 访问地址
    *
    * @return $this
    */
    public function setVpcepAddress($vpcepAddress)
    {
        $this->container['vpcepAddress'] = $vpcepAddress;
        return $this;
    }

    /**
    * Gets updateTime
    *  绑定关系的最新更改时间，UNIX时间戳，单位毫秒
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 绑定关系的最新更改时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  绑定关系的创建时间，UNIX时间戳，单位毫秒
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
    * @param int $createTime 绑定关系的创建时间，UNIX时间戳，单位毫秒
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

