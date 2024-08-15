<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  实例唯一id
    * provider  资源提供者：ECS。单个脚本工单， 每个实例的provider是一致的
    * regionId  机器所属region的ID
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型
    * customAttributes  支持用户自定义5个key_value形式的属性。 约束条件：  - key值长度为20     - value长度为50     - map长度最大为5
    * agentSn  agent纳管id。该参数即将废弃，请勿使用。
    * agentStatus  agent纳管状态。该参数即将废弃，请勿使用。
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'provider' => 'string',
            'regionId' => 'string',
            'type' => 'string',
            'customAttributes' => '\HuaweiCloud\SDK\Coc\V1\Model\Customttribute[]',
            'agentSn' => 'string',
            'agentStatus' => 'string',
            'properties' => '\HuaweiCloud\SDK\Coc\V1\Model\ResourceInstanceProp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  实例唯一id
    * provider  资源提供者：ECS。单个脚本工单， 每个实例的provider是一致的
    * regionId  机器所属region的ID
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型
    * customAttributes  支持用户自定义5个key_value形式的属性。 约束条件：  - key值长度为20     - value长度为50     - map长度最大为5
    * agentSn  agent纳管id。该参数即将废弃，请勿使用。
    * agentStatus  agent纳管状态。该参数即将废弃，请勿使用。
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'provider' => null,
        'regionId' => null,
        'type' => null,
        'customAttributes' => null,
        'agentSn' => null,
        'agentStatus' => null,
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
    * resourceId  实例唯一id
    * provider  资源提供者：ECS。单个脚本工单， 每个实例的provider是一致的
    * regionId  机器所属region的ID
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型
    * customAttributes  支持用户自定义5个key_value形式的属性。 约束条件：  - key值长度为20     - value长度为50     - map长度最大为5
    * agentSn  agent纳管id。该参数即将废弃，请勿使用。
    * agentStatus  agent纳管状态。该参数即将废弃，请勿使用。
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'provider' => 'provider',
            'regionId' => 'region_id',
            'type' => 'type',
            'customAttributes' => 'custom_attributes',
            'agentSn' => 'agent_sn',
            'agentStatus' => 'agent_status',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  实例唯一id
    * provider  资源提供者：ECS。单个脚本工单， 每个实例的provider是一致的
    * regionId  机器所属region的ID
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型
    * customAttributes  支持用户自定义5个key_value形式的属性。 约束条件：  - key值长度为20     - value长度为50     - map长度最大为5
    * agentSn  agent纳管id。该参数即将废弃，请勿使用。
    * agentStatus  agent纳管状态。该参数即将废弃，请勿使用。
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'provider' => 'setProvider',
            'regionId' => 'setRegionId',
            'type' => 'setType',
            'customAttributes' => 'setCustomAttributes',
            'agentSn' => 'setAgentSn',
            'agentStatus' => 'setAgentStatus',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  实例唯一id
    * provider  资源提供者：ECS。单个脚本工单， 每个实例的provider是一致的
    * regionId  机器所属region的ID
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型
    * customAttributes  支持用户自定义5个key_value形式的属性。 约束条件：  - key值长度为20     - value长度为50     - map长度最大为5
    * agentSn  agent纳管id。该参数即将废弃，请勿使用。
    * agentStatus  agent纳管状态。该参数即将废弃，请勿使用。
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'provider' => 'getProvider',
            'regionId' => 'getRegionId',
            'type' => 'getType',
            'customAttributes' => 'getCustomAttributes',
            'agentSn' => 'getAgentSn',
            'agentStatus' => 'getAgentStatus',
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
    const TYPE_CLOUDSERVER = 'CLOUDSERVER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CLOUDSERVER,
        ];
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
        $this->container['agentSn'] = isset($data['agentSn']) ? $data['agentSn'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
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
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets resourceId
    *  实例唯一id
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 实例唯一id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets provider
    *  资源提供者：ECS。单个脚本工单， 每个实例的provider是一致的
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider 资源提供者：ECS。单个脚本工单， 每个实例的provider是一致的
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets regionId
    *  机器所属region的ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 机器所属region的ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets type
    *  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets customAttributes
    *  支持用户自定义5个key_value形式的属性。 约束条件：  - key值长度为20     - value长度为50     - map长度最大为5
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\Customttribute[]|null
    */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
    * Sets customAttributes
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\Customttribute[]|null $customAttributes 支持用户自定义5个key_value形式的属性。 约束条件：  - key值长度为20     - value长度为50     - map长度最大为5
    *
    * @return $this
    */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;
        return $this;
    }

    /**
    * Gets agentSn
    *  agent纳管id。该参数即将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getAgentSn()
    {
        return $this->container['agentSn'];
    }

    /**
    * Sets agentSn
    *
    * @param string|null $agentSn agent纳管id。该参数即将废弃，请勿使用。
    *
    * @return $this
    */
    public function setAgentSn($agentSn)
    {
        $this->container['agentSn'] = $agentSn;
        return $this;
    }

    /**
    * Gets agentStatus
    *  agent纳管状态。该参数即将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus agent纳管状态。该参数即将废弃，请勿使用。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ResourceInstanceProp|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ResourceInstanceProp|null $properties properties
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

