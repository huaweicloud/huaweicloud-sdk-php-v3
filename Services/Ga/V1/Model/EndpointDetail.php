<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  终端节点ID。
    * resourceId  对应后端资源ID。
    * endpointGroupId  终端节点组ID。
    * resourceType  resourceType
    * status  status
    * weight  终端节点权重。
    * healthState  终端的健康状态，取值： - INITIAL：初始 - HEALTHY：正常 - UNHEALTHY：异常 - NO_MONITOR：未监控
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * ipAddress  IP地址。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'resourceId' => 'string',
            'endpointGroupId' => 'string',
            'resourceType' => '\HuaweiCloud\SDK\Ga\V1\Model\EndpointType',
            'status' => '\HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus',
            'weight' => 'int',
            'healthState' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'domainId' => 'string',
            'ipAddress' => 'string',
            'frozenInfo' => '\HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  终端节点ID。
    * resourceId  对应后端资源ID。
    * endpointGroupId  终端节点组ID。
    * resourceType  resourceType
    * status  status
    * weight  终端节点权重。
    * healthState  终端的健康状态，取值： - INITIAL：初始 - HEALTHY：正常 - UNHEALTHY：异常 - NO_MONITOR：未监控
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * ipAddress  IP地址。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'resourceId' => null,
        'endpointGroupId' => null,
        'resourceType' => null,
        'status' => null,
        'weight' => 'int32',
        'healthState' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'domainId' => null,
        'ipAddress' => null,
        'frozenInfo' => null
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
    * id  终端节点ID。
    * resourceId  对应后端资源ID。
    * endpointGroupId  终端节点组ID。
    * resourceType  resourceType
    * status  status
    * weight  终端节点权重。
    * healthState  终端的健康状态，取值： - INITIAL：初始 - HEALTHY：正常 - UNHEALTHY：异常 - NO_MONITOR：未监控
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * ipAddress  IP地址。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'resourceId' => 'resource_id',
            'endpointGroupId' => 'endpoint_group_id',
            'resourceType' => 'resource_type',
            'status' => 'status',
            'weight' => 'weight',
            'healthState' => 'health_state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'domainId' => 'domain_id',
            'ipAddress' => 'ip_address',
            'frozenInfo' => 'frozen_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  终端节点ID。
    * resourceId  对应后端资源ID。
    * endpointGroupId  终端节点组ID。
    * resourceType  resourceType
    * status  status
    * weight  终端节点权重。
    * healthState  终端的健康状态，取值： - INITIAL：初始 - HEALTHY：正常 - UNHEALTHY：异常 - NO_MONITOR：未监控
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * ipAddress  IP地址。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'resourceId' => 'setResourceId',
            'endpointGroupId' => 'setEndpointGroupId',
            'resourceType' => 'setResourceType',
            'status' => 'setStatus',
            'weight' => 'setWeight',
            'healthState' => 'setHealthState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'domainId' => 'setDomainId',
            'ipAddress' => 'setIpAddress',
            'frozenInfo' => 'setFrozenInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  终端节点ID。
    * resourceId  对应后端资源ID。
    * endpointGroupId  终端节点组ID。
    * resourceType  resourceType
    * status  status
    * weight  终端节点权重。
    * healthState  终端的健康状态，取值： - INITIAL：初始 - HEALTHY：正常 - UNHEALTHY：异常 - NO_MONITOR：未监控
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * ipAddress  IP地址。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'resourceId' => 'getResourceId',
            'endpointGroupId' => 'getEndpointGroupId',
            'resourceType' => 'getResourceType',
            'status' => 'getStatus',
            'weight' => 'getWeight',
            'healthState' => 'getHealthState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'domainId' => 'getDomainId',
            'ipAddress' => 'getIpAddress',
            'frozenInfo' => 'getFrozenInfo'
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
    const HEALTH_STATE_INITIAL = 'INITIAL';
    const HEALTH_STATE_HEALTHY = 'HEALTHY';
    const HEALTH_STATE_UNHEALTHY = 'UNHEALTHY';
    const HEALTH_STATE_NO_MONITOR = 'NO_MONITOR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHealthStateAllowableValues()
    {
        return [
            self::HEALTH_STATE_INITIAL,
            self::HEALTH_STATE_HEALTHY,
            self::HEALTH_STATE_UNHEALTHY,
            self::HEALTH_STATE_NO_MONITOR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['endpointGroupId'] = isset($data['endpointGroupId']) ? $data['endpointGroupId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['healthState'] = isset($data['healthState']) ? $data['healthState'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['frozenInfo'] = isset($data['frozenInfo']) ? $data['frozenInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 100)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getHealthStateAllowableValues();
                if (!is_null($this->container['healthState']) && !in_array($this->container['healthState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'healthState', must be one of '%s'",
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
    * Gets id
    *  终端节点ID。
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
    * @param string|null $id 终端节点ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets resourceId
    *  对应后端资源ID。
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
    * @param string|null $resourceId 对应后端资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets endpointGroupId
    *  终端节点组ID。
    *
    * @return string|null
    */
    public function getEndpointGroupId()
    {
        return $this->container['endpointGroupId'];
    }

    /**
    * Sets endpointGroupId
    *
    * @param string|null $endpointGroupId 终端节点组ID。
    *
    * @return $this
    */
    public function setEndpointGroupId($endpointGroupId)
    {
        $this->container['endpointGroupId'] = $endpointGroupId;
        return $this;
    }

    /**
    * Gets resourceType
    *  resourceType
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\EndpointType|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\EndpointType|null $resourceType resourceType
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets weight
    *  终端节点权重。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 终端节点权重。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets healthState
    *  终端的健康状态，取值： - INITIAL：初始 - HEALTHY：正常 - UNHEALTHY：异常 - NO_MONITOR：未监控
    *
    * @return string|null
    */
    public function getHealthState()
    {
        return $this->container['healthState'];
    }

    /**
    * Sets healthState
    *
    * @param string|null $healthState 终端的健康状态，取值： - INITIAL：初始 - HEALTHY：正常 - UNHEALTHY：异常 - NO_MONITOR：未监控
    *
    * @return $this
    */
    public function setHealthState($healthState)
    {
        $this->container['healthState'] = $healthState;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IP地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress IP地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets frozenInfo
    *  frozenInfo
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo|null
    */
    public function getFrozenInfo()
    {
        return $this->container['frozenInfo'];
    }

    /**
    * Sets frozenInfo
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo|null $frozenInfo frozenInfo
    *
    * @return $this
    */
    public function setFrozenInfo($frozenInfo)
    {
        $this->container['frozenInfo'] = $frozenInfo;
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

