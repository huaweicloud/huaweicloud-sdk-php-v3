<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CsbResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CsbResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  资源标签
    * affectedResources  防护资源对象列表
    * createTime  创建时间
    * description  资源描述
    * environment  environment
    * name  资源名称
    * provider  所属云服务，dbss
    * resourceId  资源ID
    * securityGroupId  安全组ID
    * subnetId  子网ID
    * type  资源类型   - cloudservers: 审计   - dbEncrypt: 加密   - dbOm: 运维
    * updateTime  更新时间
    * urn  资源URN
    * urnext  资源URN扩展
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\HuaweiCloud\SDK\Dbss\V1\Model\CsbResourceTag[]',
            'affectedResources' => '\HuaweiCloud\SDK\Dbss\V1\Model\AffectedResource[]',
            'createTime' => '\DateTime',
            'description' => 'string',
            'environment' => '\HuaweiCloud\SDK\Dbss\V1\Model\ResourceEnvironment',
            'name' => 'string',
            'provider' => 'string',
            'resourceId' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'type' => 'string',
            'updateTime' => '\DateTime',
            'urn' => 'string',
            'urnext' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  资源标签
    * affectedResources  防护资源对象列表
    * createTime  创建时间
    * description  资源描述
    * environment  environment
    * name  资源名称
    * provider  所属云服务，dbss
    * resourceId  资源ID
    * securityGroupId  安全组ID
    * subnetId  子网ID
    * type  资源类型   - cloudservers: 审计   - dbEncrypt: 加密   - dbOm: 运维
    * updateTime  更新时间
    * urn  资源URN
    * urnext  资源URN扩展
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'affectedResources' => null,
        'createTime' => 'date-time',
        'description' => null,
        'environment' => null,
        'name' => null,
        'provider' => null,
        'resourceId' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'type' => null,
        'updateTime' => 'date-time',
        'urn' => null,
        'urnext' => null,
        'vpcId' => null
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
    * tags  资源标签
    * affectedResources  防护资源对象列表
    * createTime  创建时间
    * description  资源描述
    * environment  environment
    * name  资源名称
    * provider  所属云服务，dbss
    * resourceId  资源ID
    * securityGroupId  安全组ID
    * subnetId  子网ID
    * type  资源类型   - cloudservers: 审计   - dbEncrypt: 加密   - dbOm: 运维
    * updateTime  更新时间
    * urn  资源URN
    * urnext  资源URN扩展
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'affectedResources' => 'affected_resources',
            'createTime' => 'create_time',
            'description' => 'description',
            'environment' => 'environment',
            'name' => 'name',
            'provider' => 'provider',
            'resourceId' => 'resource_id',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'type' => 'type',
            'updateTime' => 'update_time',
            'urn' => 'urn',
            'urnext' => 'urnext',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  资源标签
    * affectedResources  防护资源对象列表
    * createTime  创建时间
    * description  资源描述
    * environment  environment
    * name  资源名称
    * provider  所属云服务，dbss
    * resourceId  资源ID
    * securityGroupId  安全组ID
    * subnetId  子网ID
    * type  资源类型   - cloudservers: 审计   - dbEncrypt: 加密   - dbOm: 运维
    * updateTime  更新时间
    * urn  资源URN
    * urnext  资源URN扩展
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'affectedResources' => 'setAffectedResources',
            'createTime' => 'setCreateTime',
            'description' => 'setDescription',
            'environment' => 'setEnvironment',
            'name' => 'setName',
            'provider' => 'setProvider',
            'resourceId' => 'setResourceId',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'type' => 'setType',
            'updateTime' => 'setUpdateTime',
            'urn' => 'setUrn',
            'urnext' => 'setUrnext',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  资源标签
    * affectedResources  防护资源对象列表
    * createTime  创建时间
    * description  资源描述
    * environment  environment
    * name  资源名称
    * provider  所属云服务，dbss
    * resourceId  资源ID
    * securityGroupId  安全组ID
    * subnetId  子网ID
    * type  资源类型   - cloudservers: 审计   - dbEncrypt: 加密   - dbOm: 运维
    * updateTime  更新时间
    * urn  资源URN
    * urnext  资源URN扩展
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'affectedResources' => 'getAffectedResources',
            'createTime' => 'getCreateTime',
            'description' => 'getDescription',
            'environment' => 'getEnvironment',
            'name' => 'getName',
            'provider' => 'getProvider',
            'resourceId' => 'getResourceId',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'type' => 'getType',
            'updateTime' => 'getUpdateTime',
            'urn' => 'getUrn',
            'urnext' => 'getUrnext',
            'vpcId' => 'getVpcId'
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['affectedResources'] = isset($data['affectedResources']) ? $data['affectedResources'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['urnext'] = isset($data['urnext']) ? $data['urnext'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
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
    * Gets tags
    *  资源标签
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\CsbResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\CsbResourceTag[]|null $tags 资源标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets affectedResources
    *  防护资源对象列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\AffectedResource[]|null
    */
    public function getAffectedResources()
    {
        return $this->container['affectedResources'];
    }

    /**
    * Sets affectedResources
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\AffectedResource[]|null $affectedResources 防护资源对象列表
    *
    * @return $this
    */
    public function setAffectedResources($affectedResources)
    {
        $this->container['affectedResources'] = $affectedResources;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets description
    *  资源描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 资源描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\ResourceEnvironment|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\ResourceEnvironment|null $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets name
    *  资源名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets provider
    *  所属云服务，dbss
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 所属云服务，dbss
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
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
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID
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
    * @param string|null $subnetId 子网ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets type
    *  资源类型   - cloudservers: 审计   - dbEncrypt: 加密   - dbOm: 运维
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资源类型   - cloudservers: 审计   - dbEncrypt: 加密   - dbOm: 运维
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets urn
    *  资源URN
    *
    * @return string|null
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string|null $urn 资源URN
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets urnext
    *  资源URN扩展
    *
    * @return string|null
    */
    public function getUrnext()
    {
        return $this->container['urnext'];
    }

    /**
    * Sets urnext
    *
    * @param string|null $urnext 资源URN扩展
    *
    * @return $this
    */
    public function setUrnext($urnext)
    {
        $this->container['urnext'] = $urnext;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId VPC ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

