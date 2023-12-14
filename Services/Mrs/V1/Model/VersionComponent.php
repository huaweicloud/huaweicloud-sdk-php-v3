<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionComponent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionComponent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * other  其他
    * name  组件名称
    * version  支持版本
    * dependOn  组件依赖项
    * description  组件描述
    * availableClusterTypes  支持该组件的集群类型
    * externalDatasources  外部数据源
    * resourceRequirement  所需的ip等资源说明
    * validRoles  有效角色
    * visible  是否可见
    * childrenComponents  子组件
    * multiAzSupportStatus  多az支持状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'other' => 'map[string,object]',
            'name' => 'string',
            'version' => 'string',
            'dependOn' => 'string[]',
            'description' => 'string',
            'availableClusterTypes' => 'string[]',
            'externalDatasources' => '\HuaweiCloud\SDK\Mrs\V1\Model\ComponentExternalDatasource[]',
            'resourceRequirement' => 'string[]',
            'validRoles' => 'string[]',
            'visible' => 'bool',
            'childrenComponents' => 'string[]',
            'multiAzSupportStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * other  其他
    * name  组件名称
    * version  支持版本
    * dependOn  组件依赖项
    * description  组件描述
    * availableClusterTypes  支持该组件的集群类型
    * externalDatasources  外部数据源
    * resourceRequirement  所需的ip等资源说明
    * validRoles  有效角色
    * visible  是否可见
    * childrenComponents  子组件
    * multiAzSupportStatus  多az支持状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'other' => null,
        'name' => null,
        'version' => null,
        'dependOn' => null,
        'description' => null,
        'availableClusterTypes' => null,
        'externalDatasources' => null,
        'resourceRequirement' => null,
        'validRoles' => null,
        'visible' => null,
        'childrenComponents' => null,
        'multiAzSupportStatus' => null
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
    * name  组件名称
    * version  支持版本
    * dependOn  组件依赖项
    * description  组件描述
    * availableClusterTypes  支持该组件的集群类型
    * externalDatasources  外部数据源
    * resourceRequirement  所需的ip等资源说明
    * validRoles  有效角色
    * visible  是否可见
    * childrenComponents  子组件
    * multiAzSupportStatus  多az支持状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'other' => 'other',
            'name' => 'name',
            'version' => 'version',
            'dependOn' => 'depend_on',
            'description' => 'description',
            'availableClusterTypes' => 'available_cluster_types',
            'externalDatasources' => 'external_datasources',
            'resourceRequirement' => 'resource_requirement',
            'validRoles' => 'valid_roles',
            'visible' => 'visible',
            'childrenComponents' => 'children_components',
            'multiAzSupportStatus' => 'multi_az_support_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * other  其他
    * name  组件名称
    * version  支持版本
    * dependOn  组件依赖项
    * description  组件描述
    * availableClusterTypes  支持该组件的集群类型
    * externalDatasources  外部数据源
    * resourceRequirement  所需的ip等资源说明
    * validRoles  有效角色
    * visible  是否可见
    * childrenComponents  子组件
    * multiAzSupportStatus  多az支持状态
    *
    * @var string[]
    */
    protected static $setters = [
            'other' => 'setOther',
            'name' => 'setName',
            'version' => 'setVersion',
            'dependOn' => 'setDependOn',
            'description' => 'setDescription',
            'availableClusterTypes' => 'setAvailableClusterTypes',
            'externalDatasources' => 'setExternalDatasources',
            'resourceRequirement' => 'setResourceRequirement',
            'validRoles' => 'setValidRoles',
            'visible' => 'setVisible',
            'childrenComponents' => 'setChildrenComponents',
            'multiAzSupportStatus' => 'setMultiAzSupportStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * other  其他
    * name  组件名称
    * version  支持版本
    * dependOn  组件依赖项
    * description  组件描述
    * availableClusterTypes  支持该组件的集群类型
    * externalDatasources  外部数据源
    * resourceRequirement  所需的ip等资源说明
    * validRoles  有效角色
    * visible  是否可见
    * childrenComponents  子组件
    * multiAzSupportStatus  多az支持状态
    *
    * @var string[]
    */
    protected static $getters = [
            'other' => 'getOther',
            'name' => 'getName',
            'version' => 'getVersion',
            'dependOn' => 'getDependOn',
            'description' => 'getDescription',
            'availableClusterTypes' => 'getAvailableClusterTypes',
            'externalDatasources' => 'getExternalDatasources',
            'resourceRequirement' => 'getResourceRequirement',
            'validRoles' => 'getValidRoles',
            'visible' => 'getVisible',
            'childrenComponents' => 'getChildrenComponents',
            'multiAzSupportStatus' => 'getMultiAzSupportStatus'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['dependOn'] = isset($data['dependOn']) ? $data['dependOn'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['availableClusterTypes'] = isset($data['availableClusterTypes']) ? $data['availableClusterTypes'] : null;
        $this->container['externalDatasources'] = isset($data['externalDatasources']) ? $data['externalDatasources'] : null;
        $this->container['resourceRequirement'] = isset($data['resourceRequirement']) ? $data['resourceRequirement'] : null;
        $this->container['validRoles'] = isset($data['validRoles']) ? $data['validRoles'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['childrenComponents'] = isset($data['childrenComponents']) ? $data['childrenComponents'] : null;
        $this->container['multiAzSupportStatus'] = isset($data['multiAzSupportStatus']) ? $data['multiAzSupportStatus'] : null;
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
    *  组件名称
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
    * @param string|null $name 组件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  支持版本
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
    * @param string|null $version 支持版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets dependOn
    *  组件依赖项
    *
    * @return string[]|null
    */
    public function getDependOn()
    {
        return $this->container['dependOn'];
    }

    /**
    * Sets dependOn
    *
    * @param string[]|null $dependOn 组件依赖项
    *
    * @return $this
    */
    public function setDependOn($dependOn)
    {
        $this->container['dependOn'] = $dependOn;
        return $this;
    }

    /**
    * Gets description
    *  组件描述
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
    * @param string|null $description 组件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets availableClusterTypes
    *  支持该组件的集群类型
    *
    * @return string[]|null
    */
    public function getAvailableClusterTypes()
    {
        return $this->container['availableClusterTypes'];
    }

    /**
    * Sets availableClusterTypes
    *
    * @param string[]|null $availableClusterTypes 支持该组件的集群类型
    *
    * @return $this
    */
    public function setAvailableClusterTypes($availableClusterTypes)
    {
        $this->container['availableClusterTypes'] = $availableClusterTypes;
        return $this;
    }

    /**
    * Gets externalDatasources
    *  外部数据源
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\ComponentExternalDatasource[]|null
    */
    public function getExternalDatasources()
    {
        return $this->container['externalDatasources'];
    }

    /**
    * Sets externalDatasources
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\ComponentExternalDatasource[]|null $externalDatasources 外部数据源
    *
    * @return $this
    */
    public function setExternalDatasources($externalDatasources)
    {
        $this->container['externalDatasources'] = $externalDatasources;
        return $this;
    }

    /**
    * Gets resourceRequirement
    *  所需的ip等资源说明
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
    * @param string[]|null $resourceRequirement 所需的ip等资源说明
    *
    * @return $this
    */
    public function setResourceRequirement($resourceRequirement)
    {
        $this->container['resourceRequirement'] = $resourceRequirement;
        return $this;
    }

    /**
    * Gets validRoles
    *  有效角色
    *
    * @return string[]|null
    */
    public function getValidRoles()
    {
        return $this->container['validRoles'];
    }

    /**
    * Sets validRoles
    *
    * @param string[]|null $validRoles 有效角色
    *
    * @return $this
    */
    public function setValidRoles($validRoles)
    {
        $this->container['validRoles'] = $validRoles;
        return $this;
    }

    /**
    * Gets visible
    *  是否可见
    *
    * @return bool|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param bool|null $visible 是否可见
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
        return $this;
    }

    /**
    * Gets childrenComponents
    *  子组件
    *
    * @return string[]|null
    */
    public function getChildrenComponents()
    {
        return $this->container['childrenComponents'];
    }

    /**
    * Sets childrenComponents
    *
    * @param string[]|null $childrenComponents 子组件
    *
    * @return $this
    */
    public function setChildrenComponents($childrenComponents)
    {
        $this->container['childrenComponents'] = $childrenComponents;
        return $this;
    }

    /**
    * Gets multiAzSupportStatus
    *  多az支持状态
    *
    * @return string|null
    */
    public function getMultiAzSupportStatus()
    {
        return $this->container['multiAzSupportStatus'];
    }

    /**
    * Sets multiAzSupportStatus
    *
    * @param string|null $multiAzSupportStatus 多az支持状态
    *
    * @return $this
    */
    public function setMultiAzSupportStatus($multiAzSupportStatus)
    {
        $this->container['multiAzSupportStatus'] = $multiAzSupportStatus;
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

