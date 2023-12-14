<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMrsVersionMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMrsVersionMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * other  其他
    * name  镜像版本名称
    * templateType  模板类型
    * imageId  镜像ID
    * status  版本状态
    * features  特性列表
    * clusterTypes  集群类型列表
    * versionType  版本类型
    * components  组件列表
    * resourceRequirement  版本所需的ip等资源说明
    * constraints  constraints
    * flavors  flavors
    * roleDeployMeta  版本组件实例角色部署策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'other' => 'map[string,object]',
            'name' => 'string',
            'templateType' => 'string',
            'imageId' => 'string',
            'status' => 'string',
            'features' => 'string[]',
            'clusterTypes' => 'string[]',
            'versionType' => 'string',
            'components' => '\HuaweiCloud\SDK\Mrs\V1\Model\VersionComponent[]',
            'resourceRequirement' => 'string[]',
            'constraints' => '\HuaweiCloud\SDK\Mrs\V1\Model\VersionConstraint',
            'flavors' => '\HuaweiCloud\SDK\Mrs\V1\Model\FlavorLists',
            'roleDeployMeta' => '\HuaweiCloud\SDK\Mrs\V1\Model\RoleDeployMeta[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * other  其他
    * name  镜像版本名称
    * templateType  模板类型
    * imageId  镜像ID
    * status  版本状态
    * features  特性列表
    * clusterTypes  集群类型列表
    * versionType  版本类型
    * components  组件列表
    * resourceRequirement  版本所需的ip等资源说明
    * constraints  constraints
    * flavors  flavors
    * roleDeployMeta  版本组件实例角色部署策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'other' => null,
        'name' => null,
        'templateType' => null,
        'imageId' => null,
        'status' => null,
        'features' => null,
        'clusterTypes' => null,
        'versionType' => null,
        'components' => null,
        'resourceRequirement' => null,
        'constraints' => null,
        'flavors' => null,
        'roleDeployMeta' => null
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
    * other  其他
    * name  镜像版本名称
    * templateType  模板类型
    * imageId  镜像ID
    * status  版本状态
    * features  特性列表
    * clusterTypes  集群类型列表
    * versionType  版本类型
    * components  组件列表
    * resourceRequirement  版本所需的ip等资源说明
    * constraints  constraints
    * flavors  flavors
    * roleDeployMeta  版本组件实例角色部署策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'other' => 'other',
            'name' => 'name',
            'templateType' => 'template_type',
            'imageId' => 'image_id',
            'status' => 'status',
            'features' => 'features',
            'clusterTypes' => 'cluster_types',
            'versionType' => 'version_type',
            'components' => 'components',
            'resourceRequirement' => 'resource_requirement',
            'constraints' => 'constraints',
            'flavors' => 'flavors',
            'roleDeployMeta' => 'role_deploy_meta'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * other  其他
    * name  镜像版本名称
    * templateType  模板类型
    * imageId  镜像ID
    * status  版本状态
    * features  特性列表
    * clusterTypes  集群类型列表
    * versionType  版本类型
    * components  组件列表
    * resourceRequirement  版本所需的ip等资源说明
    * constraints  constraints
    * flavors  flavors
    * roleDeployMeta  版本组件实例角色部署策略
    *
    * @var string[]
    */
    protected static $setters = [
            'other' => 'setOther',
            'name' => 'setName',
            'templateType' => 'setTemplateType',
            'imageId' => 'setImageId',
            'status' => 'setStatus',
            'features' => 'setFeatures',
            'clusterTypes' => 'setClusterTypes',
            'versionType' => 'setVersionType',
            'components' => 'setComponents',
            'resourceRequirement' => 'setResourceRequirement',
            'constraints' => 'setConstraints',
            'flavors' => 'setFlavors',
            'roleDeployMeta' => 'setRoleDeployMeta'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * other  其他
    * name  镜像版本名称
    * templateType  模板类型
    * imageId  镜像ID
    * status  版本状态
    * features  特性列表
    * clusterTypes  集群类型列表
    * versionType  版本类型
    * components  组件列表
    * resourceRequirement  版本所需的ip等资源说明
    * constraints  constraints
    * flavors  flavors
    * roleDeployMeta  版本组件实例角色部署策略
    *
    * @var string[]
    */
    protected static $getters = [
            'other' => 'getOther',
            'name' => 'getName',
            'templateType' => 'getTemplateType',
            'imageId' => 'getImageId',
            'status' => 'getStatus',
            'features' => 'getFeatures',
            'clusterTypes' => 'getClusterTypes',
            'versionType' => 'getVersionType',
            'components' => 'getComponents',
            'resourceRequirement' => 'getResourceRequirement',
            'constraints' => 'getConstraints',
            'flavors' => 'getFlavors',
            'roleDeployMeta' => 'getRoleDeployMeta'
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
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['clusterTypes'] = isset($data['clusterTypes']) ? $data['clusterTypes'] : null;
        $this->container['versionType'] = isset($data['versionType']) ? $data['versionType'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['resourceRequirement'] = isset($data['resourceRequirement']) ? $data['resourceRequirement'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['flavors'] = isset($data['flavors']) ? $data['flavors'] : null;
        $this->container['roleDeployMeta'] = isset($data['roleDeployMeta']) ? $data['roleDeployMeta'] : null;
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
    * Gets other
    *  其他
    *
    * @return map[string,object]|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param map[string,object]|null $other 其他
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
        return $this;
    }

    /**
    * Gets name
    *  镜像版本名称
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
    * @param string|null $name 镜像版本名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets templateType
    *  模板类型
    *
    * @return string|null
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string|null $templateType 模板类型
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像ID
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets status
    *  版本状态
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
    * @param string|null $status 版本状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets features
    *  特性列表
    *
    * @return string[]|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param string[]|null $features 特性列表
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
        return $this;
    }

    /**
    * Gets clusterTypes
    *  集群类型列表
    *
    * @return string[]|null
    */
    public function getClusterTypes()
    {
        return $this->container['clusterTypes'];
    }

    /**
    * Sets clusterTypes
    *
    * @param string[]|null $clusterTypes 集群类型列表
    *
    * @return $this
    */
    public function setClusterTypes($clusterTypes)
    {
        $this->container['clusterTypes'] = $clusterTypes;
        return $this;
    }

    /**
    * Gets versionType
    *  版本类型
    *
    * @return string|null
    */
    public function getVersionType()
    {
        return $this->container['versionType'];
    }

    /**
    * Sets versionType
    *
    * @param string|null $versionType 版本类型
    *
    * @return $this
    */
    public function setVersionType($versionType)
    {
        $this->container['versionType'] = $versionType;
        return $this;
    }

    /**
    * Gets components
    *  组件列表
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\VersionComponent[]|null
    */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
    * Sets components
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\VersionComponent[]|null $components 组件列表
    *
    * @return $this
    */
    public function setComponents($components)
    {
        $this->container['components'] = $components;
        return $this;
    }

    /**
    * Gets resourceRequirement
    *  版本所需的ip等资源说明
    *
    * @return string[]|null
    */
    public function getResourceRequirement()
    {
        return $this->container['resourceRequirement'];
    }

    /**
    * Sets resourceRequirement
    *
    * @param string[]|null $resourceRequirement 版本所需的ip等资源说明
    *
    * @return $this
    */
    public function setResourceRequirement($resourceRequirement)
    {
        $this->container['resourceRequirement'] = $resourceRequirement;
        return $this;
    }

    /**
    * Gets constraints
    *  constraints
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\VersionConstraint|null
    */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
    * Sets constraints
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\VersionConstraint|null $constraints constraints
    *
    * @return $this
    */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;
        return $this;
    }

    /**
    * Gets flavors
    *  flavors
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\FlavorLists|null
    */
    public function getFlavors()
    {
        return $this->container['flavors'];
    }

    /**
    * Sets flavors
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\FlavorLists|null $flavors flavors
    *
    * @return $this
    */
    public function setFlavors($flavors)
    {
        $this->container['flavors'] = $flavors;
        return $this;
    }

    /**
    * Gets roleDeployMeta
    *  版本组件实例角色部署策略
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\RoleDeployMeta[]|null
    */
    public function getRoleDeployMeta()
    {
        return $this->container['roleDeployMeta'];
    }

    /**
    * Sets roleDeployMeta
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\RoleDeployMeta[]|null $roleDeployMeta 版本组件实例角色部署策略
    *
    * @return $this
    */
    public function setRoleDeployMeta($roleDeployMeta)
    {
        $this->container['roleDeployMeta'] = $roleDeployMeta;
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

