<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTrackedResourceDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTrackedResourceDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源id
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * regionId  区域id
    * projectId  Openstack中的项目id
    * projectName  Openstack中的项目名称
    * epId  企业项目id
    * epName  企业项目名称
    * checksum  资源详情校验码
    * created  资源创建时间
    * updated  资源更新时间
    * provisioningState  资源操作状态
    * tags  资源Tag
    * properties  资源详细属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'epId' => 'string',
            'epName' => 'string',
            'checksum' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'provisioningState' => 'string',
            'tags' => 'map[string,string]',
            'properties' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源id
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * regionId  区域id
    * projectId  Openstack中的项目id
    * projectName  Openstack中的项目名称
    * epId  企业项目id
    * epName  企业项目名称
    * checksum  资源详情校验码
    * created  资源创建时间
    * updated  资源更新时间
    * provisioningState  资源操作状态
    * tags  资源Tag
    * properties  资源详细属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'provider' => null,
        'type' => null,
        'regionId' => null,
        'projectId' => null,
        'projectName' => null,
        'epId' => null,
        'epName' => null,
        'checksum' => null,
        'created' => null,
        'updated' => null,
        'provisioningState' => null,
        'tags' => null,
        'properties' => null
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
    * id  资源id
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * regionId  区域id
    * projectId  Openstack中的项目id
    * projectName  Openstack中的项目名称
    * epId  企业项目id
    * epName  企业项目名称
    * checksum  资源详情校验码
    * created  资源创建时间
    * updated  资源更新时间
    * provisioningState  资源操作状态
    * tags  资源Tag
    * properties  资源详细属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'provider' => 'provider',
            'type' => 'type',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'epId' => 'ep_id',
            'epName' => 'ep_name',
            'checksum' => 'checksum',
            'created' => 'created',
            'updated' => 'updated',
            'provisioningState' => 'provisioning_state',
            'tags' => 'tags',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源id
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * regionId  区域id
    * projectId  Openstack中的项目id
    * projectName  Openstack中的项目名称
    * epId  企业项目id
    * epName  企业项目名称
    * checksum  资源详情校验码
    * created  资源创建时间
    * updated  资源更新时间
    * provisioningState  资源操作状态
    * tags  资源Tag
    * properties  资源详细属性
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'provider' => 'setProvider',
            'type' => 'setType',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'epId' => 'setEpId',
            'epName' => 'setEpName',
            'checksum' => 'setChecksum',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'provisioningState' => 'setProvisioningState',
            'tags' => 'setTags',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源id
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * regionId  区域id
    * projectId  Openstack中的项目id
    * projectName  Openstack中的项目名称
    * epId  企业项目id
    * epName  企业项目名称
    * checksum  资源详情校验码
    * created  资源创建时间
    * updated  资源更新时间
    * provisioningState  资源操作状态
    * tags  资源Tag
    * properties  资源详细属性
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'provider' => 'getProvider',
            'type' => 'getType',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'epId' => 'getEpId',
            'epName' => 'getEpName',
            'checksum' => 'getChecksum',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'provisioningState' => 'getProvisioningState',
            'tags' => 'getTags',
            'properties' => 'getProperties'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['epName'] = isset($data['epName']) ? $data['epName'] : null;
        $this->container['checksum'] = isset($data['checksum']) ? $data['checksum'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['provisioningState'] = isset($data['provisioningState']) ? $data['provisioningState'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
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
    *  资源id
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
    * @param string|null $id 资源id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    *  云服务名称
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
    * @param string|null $provider 云服务名称
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  资源类型
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
    * @param string|null $type 资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets regionId
    *  区域id
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
    * @param string|null $regionId 区域id
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
    *  Openstack中的项目id
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
    * @param string|null $projectId Openstack中的项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  Openstack中的项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName Openstack中的项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets epId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId 企业项目id
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets epName
    *  企业项目名称
    *
    * @return string|null
    */
    public function getEpName()
    {
        return $this->container['epName'];
    }

    /**
    * Sets epName
    *
    * @param string|null $epName 企业项目名称
    *
    * @return $this
    */
    public function setEpName($epName)
    {
        $this->container['epName'] = $epName;
        return $this;
    }

    /**
    * Gets checksum
    *  资源详情校验码
    *
    * @return string|null
    */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
    * Sets checksum
    *
    * @param string|null $checksum 资源详情校验码
    *
    * @return $this
    */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;
        return $this;
    }

    /**
    * Gets created
    *  资源创建时间
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 资源创建时间
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  资源更新时间
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 资源更新时间
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets provisioningState
    *  资源操作状态
    *
    * @return string|null
    */
    public function getProvisioningState()
    {
        return $this->container['provisioningState'];
    }

    /**
    * Sets provisioningState
    *
    * @param string|null $provisioningState 资源操作状态
    *
    * @return $this
    */
    public function setProvisioningState($provisioningState)
    {
        $this->container['provisioningState'] = $provisioningState;
        return $this;
    }

    /**
    * Gets tags
    *  资源Tag
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags 资源Tag
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets properties
    *  资源详细属性
    *
    * @return map[string,object]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,object]|null $properties 资源详细属性
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

