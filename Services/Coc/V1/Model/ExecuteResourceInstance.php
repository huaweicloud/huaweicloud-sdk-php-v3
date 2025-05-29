<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteResourceInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteResourceInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  ecs云服务器ID
    * regionId  服务器所属region
    * provider  资源提供者：ECS，不传默认为：ECS。请保证一次执行， 每个实例的provider是一致的。后续扩展CCE等
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型 约束：  -不允许跨type支持
    * customAttributes  支持用户自定义5个key_value形式的属性。  约束条件： - key值长度为10  - value长度为20  - map长度最大为5 - 禁止填写敏感数据
    * agentSn  该参数已废弃，传入该参数不会生效。
    * projectId  该参数已废弃，传入该参数不会生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'regionId' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'customAttributes' => '\HuaweiCloud\SDK\Coc\V1\Model\Customttribute[]',
            'agentSn' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  ecs云服务器ID
    * regionId  服务器所属region
    * provider  资源提供者：ECS，不传默认为：ECS。请保证一次执行， 每个实例的provider是一致的。后续扩展CCE等
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型 约束：  -不允许跨type支持
    * customAttributes  支持用户自定义5个key_value形式的属性。  约束条件： - key值长度为10  - value长度为20  - map长度最大为5 - 禁止填写敏感数据
    * agentSn  该参数已废弃，传入该参数不会生效。
    * projectId  该参数已废弃，传入该参数不会生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'regionId' => null,
        'provider' => null,
        'type' => null,
        'customAttributes' => null,
        'agentSn' => null,
        'projectId' => null
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
    * resourceId  ecs云服务器ID
    * regionId  服务器所属region
    * provider  资源提供者：ECS，不传默认为：ECS。请保证一次执行， 每个实例的provider是一致的。后续扩展CCE等
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型 约束：  -不允许跨type支持
    * customAttributes  支持用户自定义5个key_value形式的属性。  约束条件： - key值长度为10  - value长度为20  - map长度最大为5 - 禁止填写敏感数据
    * agentSn  该参数已废弃，传入该参数不会生效。
    * projectId  该参数已废弃，传入该参数不会生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'regionId' => 'region_id',
            'provider' => 'provider',
            'type' => 'type',
            'customAttributes' => 'custom_attributes',
            'agentSn' => 'agent_sn',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  ecs云服务器ID
    * regionId  服务器所属region
    * provider  资源提供者：ECS，不传默认为：ECS。请保证一次执行， 每个实例的provider是一致的。后续扩展CCE等
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型 约束：  -不允许跨type支持
    * customAttributes  支持用户自定义5个key_value形式的属性。  约束条件： - key值长度为10  - value长度为20  - map长度最大为5 - 禁止填写敏感数据
    * agentSn  该参数已废弃，传入该参数不会生效。
    * projectId  该参数已废弃，传入该参数不会生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'regionId' => 'setRegionId',
            'provider' => 'setProvider',
            'type' => 'setType',
            'customAttributes' => 'setCustomAttributes',
            'agentSn' => 'setAgentSn',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  ecs云服务器ID
    * regionId  服务器所属region
    * provider  资源提供者：ECS，不传默认为：ECS。请保证一次执行， 每个实例的provider是一致的。后续扩展CCE等
    * type  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型 约束：  -不允许跨type支持
    * customAttributes  支持用户自定义5个key_value形式的属性。  约束条件： - key值长度为10  - value长度为20  - map长度最大为5 - 禁止填写敏感数据
    * agentSn  该参数已废弃，传入该参数不会生效。
    * projectId  该参数已废弃，传入该参数不会生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'regionId' => 'getRegionId',
            'provider' => 'getProvider',
            'type' => 'getType',
            'customAttributes' => 'getCustomAttributes',
            'agentSn' => 'getAgentSn',
            'projectId' => 'getProjectId'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
        $this->container['agentSn'] = isset($data['agentSn']) ? $data['agentSn'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
            if ((mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['agentSn']) && (mb_strlen($this->container['agentSn']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentSn', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentSn']) && (mb_strlen($this->container['agentSn']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentSn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    *  ecs云服务器ID
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
    * @param string $resourceId ecs云服务器ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets regionId
    *  服务器所属region
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
    * @param string $regionId 服务器所属region
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets provider
    *  资源提供者：ECS，不传默认为：ECS。请保证一次执行， 每个实例的provider是一致的。后续扩展CCE等
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
    * @param string|null $provider 资源提供者：ECS，不传默认为：ECS。请保证一次执行， 每个实例的provider是一致的。后续扩展CCE等
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
    *  资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型 约束：  -不允许跨type支持
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
    * @param string|null $type 资源提供者下资源类型，不传默认为CLOUDSERVER CLOUDSERVER:CLOUDSERVER类型 约束：  -不允许跨type支持
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
    *  支持用户自定义5个key_value形式的属性。  约束条件： - key值长度为10  - value长度为20  - map长度最大为5 - 禁止填写敏感数据
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
    * @param \HuaweiCloud\SDK\Coc\V1\Model\Customttribute[]|null $customAttributes 支持用户自定义5个key_value形式的属性。  约束条件： - key值长度为10  - value长度为20  - map长度最大为5 - 禁止填写敏感数据
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
    *  该参数已废弃，传入该参数不会生效。
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
    * @param string|null $agentSn 该参数已废弃，传入该参数不会生效。
    *
    * @return $this
    */
    public function setAgentSn($agentSn)
    {
        $this->container['agentSn'] = $agentSn;
        return $this;
    }

    /**
    * Gets projectId
    *  该参数已废弃，传入该参数不会生效。
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
    * @param string|null $projectId 该参数已废弃，传入该参数不会生效。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

