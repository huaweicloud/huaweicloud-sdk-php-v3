<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOrganizationPolicyAssignmentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOrganizationPolicyAssignmentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ownerId  组织合规规则创建者。
    * organizationId  组织ID。
    * organizationPolicyAssignmentUrn  组织合规规则资源唯一标识。
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * excludedAccounts  排除配置规则的帐号。
    * description  描述信息。
    * period  触发周期。
    * policyFilter  policyFilter
    * parameters  规则参数。
    * policyDefinitionId  策略ID。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ownerId' => 'string',
            'organizationId' => 'string',
            'organizationPolicyAssignmentUrn' => 'string',
            'organizationPolicyAssignmentId' => 'string',
            'organizationPolicyAssignmentName' => 'string',
            'excludedAccounts' => 'string[]',
            'description' => 'string',
            'period' => 'string',
            'policyFilter' => '\HuaweiCloud\SDK\Rms\V1\Model\PolicyFilterDefinition',
            'parameters' => 'map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterValue]',
            'policyDefinitionId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ownerId  组织合规规则创建者。
    * organizationId  组织ID。
    * organizationPolicyAssignmentUrn  组织合规规则资源唯一标识。
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * excludedAccounts  排除配置规则的帐号。
    * description  描述信息。
    * period  触发周期。
    * policyFilter  policyFilter
    * parameters  规则参数。
    * policyDefinitionId  策略ID。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ownerId' => null,
        'organizationId' => null,
        'organizationPolicyAssignmentUrn' => null,
        'organizationPolicyAssignmentId' => null,
        'organizationPolicyAssignmentName' => null,
        'excludedAccounts' => null,
        'description' => null,
        'period' => null,
        'policyFilter' => null,
        'parameters' => null,
        'policyDefinitionId' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * ownerId  组织合规规则创建者。
    * organizationId  组织ID。
    * organizationPolicyAssignmentUrn  组织合规规则资源唯一标识。
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * excludedAccounts  排除配置规则的帐号。
    * description  描述信息。
    * period  触发周期。
    * policyFilter  policyFilter
    * parameters  规则参数。
    * policyDefinitionId  策略ID。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ownerId' => 'owner_id',
            'organizationId' => 'organization_id',
            'organizationPolicyAssignmentUrn' => 'organization_policy_assignment_urn',
            'organizationPolicyAssignmentId' => 'organization_policy_assignment_id',
            'organizationPolicyAssignmentName' => 'organization_policy_assignment_name',
            'excludedAccounts' => 'excluded_accounts',
            'description' => 'description',
            'period' => 'period',
            'policyFilter' => 'policy_filter',
            'parameters' => 'parameters',
            'policyDefinitionId' => 'policy_definition_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ownerId  组织合规规则创建者。
    * organizationId  组织ID。
    * organizationPolicyAssignmentUrn  组织合规规则资源唯一标识。
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * excludedAccounts  排除配置规则的帐号。
    * description  描述信息。
    * period  触发周期。
    * policyFilter  policyFilter
    * parameters  规则参数。
    * policyDefinitionId  策略ID。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'ownerId' => 'setOwnerId',
            'organizationId' => 'setOrganizationId',
            'organizationPolicyAssignmentUrn' => 'setOrganizationPolicyAssignmentUrn',
            'organizationPolicyAssignmentId' => 'setOrganizationPolicyAssignmentId',
            'organizationPolicyAssignmentName' => 'setOrganizationPolicyAssignmentName',
            'excludedAccounts' => 'setExcludedAccounts',
            'description' => 'setDescription',
            'period' => 'setPeriod',
            'policyFilter' => 'setPolicyFilter',
            'parameters' => 'setParameters',
            'policyDefinitionId' => 'setPolicyDefinitionId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ownerId  组织合规规则创建者。
    * organizationId  组织ID。
    * organizationPolicyAssignmentUrn  组织合规规则资源唯一标识。
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * excludedAccounts  排除配置规则的帐号。
    * description  描述信息。
    * period  触发周期。
    * policyFilter  policyFilter
    * parameters  规则参数。
    * policyDefinitionId  策略ID。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'ownerId' => 'getOwnerId',
            'organizationId' => 'getOrganizationId',
            'organizationPolicyAssignmentUrn' => 'getOrganizationPolicyAssignmentUrn',
            'organizationPolicyAssignmentId' => 'getOrganizationPolicyAssignmentId',
            'organizationPolicyAssignmentName' => 'getOrganizationPolicyAssignmentName',
            'excludedAccounts' => 'getExcludedAccounts',
            'description' => 'getDescription',
            'period' => 'getPeriod',
            'policyFilter' => 'getPolicyFilter',
            'parameters' => 'getParameters',
            'policyDefinitionId' => 'getPolicyDefinitionId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['organizationPolicyAssignmentUrn'] = isset($data['organizationPolicyAssignmentUrn']) ? $data['organizationPolicyAssignmentUrn'] : null;
        $this->container['organizationPolicyAssignmentId'] = isset($data['organizationPolicyAssignmentId']) ? $data['organizationPolicyAssignmentId'] : null;
        $this->container['organizationPolicyAssignmentName'] = isset($data['organizationPolicyAssignmentName']) ? $data['organizationPolicyAssignmentName'] : null;
        $this->container['excludedAccounts'] = isset($data['excludedAccounts']) ? $data['excludedAccounts'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['policyFilter'] = isset($data['policyFilter']) ? $data['policyFilter'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['policyDefinitionId'] = isset($data['policyDefinitionId']) ? $data['policyDefinitionId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets ownerId
    *  组织合规规则创建者。
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 组织合规规则创建者。
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets organizationId
    *  组织ID。
    *
    * @return string|null
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string|null $organizationId 组织ID。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets organizationPolicyAssignmentUrn
    *  组织合规规则资源唯一标识。
    *
    * @return string|null
    */
    public function getOrganizationPolicyAssignmentUrn()
    {
        return $this->container['organizationPolicyAssignmentUrn'];
    }

    /**
    * Sets organizationPolicyAssignmentUrn
    *
    * @param string|null $organizationPolicyAssignmentUrn 组织合规规则资源唯一标识。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentUrn($organizationPolicyAssignmentUrn)
    {
        $this->container['organizationPolicyAssignmentUrn'] = $organizationPolicyAssignmentUrn;
        return $this;
    }

    /**
    * Gets organizationPolicyAssignmentId
    *  组织合规规则ID。
    *
    * @return string|null
    */
    public function getOrganizationPolicyAssignmentId()
    {
        return $this->container['organizationPolicyAssignmentId'];
    }

    /**
    * Sets organizationPolicyAssignmentId
    *
    * @param string|null $organizationPolicyAssignmentId 组织合规规则ID。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentId($organizationPolicyAssignmentId)
    {
        $this->container['organizationPolicyAssignmentId'] = $organizationPolicyAssignmentId;
        return $this;
    }

    /**
    * Gets organizationPolicyAssignmentName
    *  组织合规规则名称。
    *
    * @return string|null
    */
    public function getOrganizationPolicyAssignmentName()
    {
        return $this->container['organizationPolicyAssignmentName'];
    }

    /**
    * Sets organizationPolicyAssignmentName
    *
    * @param string|null $organizationPolicyAssignmentName 组织合规规则名称。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentName($organizationPolicyAssignmentName)
    {
        $this->container['organizationPolicyAssignmentName'] = $organizationPolicyAssignmentName;
        return $this;
    }

    /**
    * Gets excludedAccounts
    *  排除配置规则的帐号。
    *
    * @return string[]|null
    */
    public function getExcludedAccounts()
    {
        return $this->container['excludedAccounts'];
    }

    /**
    * Sets excludedAccounts
    *
    * @param string[]|null $excludedAccounts 排除配置规则的帐号。
    *
    * @return $this
    */
    public function setExcludedAccounts($excludedAccounts)
    {
        $this->container['excludedAccounts'] = $excludedAccounts;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。
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
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets period
    *  触发周期。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 触发周期。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets policyFilter
    *  policyFilter
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\PolicyFilterDefinition|null
    */
    public function getPolicyFilter()
    {
        return $this->container['policyFilter'];
    }

    /**
    * Sets policyFilter
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\PolicyFilterDefinition|null $policyFilter policyFilter
    *
    * @return $this
    */
    public function setPolicyFilter($policyFilter)
    {
        $this->container['policyFilter'] = $policyFilter;
        return $this;
    }

    /**
    * Gets parameters
    *  规则参数。
    *
    * @return map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterValue]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterValue]|null $parameters 规则参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets policyDefinitionId
    *  策略ID。
    *
    * @return string|null
    */
    public function getPolicyDefinitionId()
    {
        return $this->container['policyDefinitionId'];
    }

    /**
    * Sets policyDefinitionId
    *
    * @param string|null $policyDefinitionId 策略ID。
    *
    * @return $this
    */
    public function setPolicyDefinitionId($policyDefinitionId)
    {
        $this->container['policyDefinitionId'] = $policyDefinitionId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。
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
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

