<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePolicyStateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePolicyStateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  用户ID
    * regionId  资源区域ID
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * triggerType  触发器类型，可选值：resource, period
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * policyDefinitionId  策略ID
    * evaluationTime  合规状态评估时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'regionId' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceProvider' => 'string',
            'resourceType' => 'string',
            'triggerType' => 'string',
            'complianceState' => 'string',
            'policyAssignmentId' => 'string',
            'policyAssignmentName' => 'string',
            'policyDefinitionId' => 'string',
            'evaluationTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  用户ID
    * regionId  资源区域ID
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * triggerType  触发器类型，可选值：resource, period
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * policyDefinitionId  策略ID
    * evaluationTime  合规状态评估时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'regionId' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceProvider' => null,
        'resourceType' => null,
        'triggerType' => null,
        'complianceState' => null,
        'policyAssignmentId' => null,
        'policyAssignmentName' => null,
        'policyDefinitionId' => null,
        'evaluationTime' => null
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
    * domainId  用户ID
    * regionId  资源区域ID
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * triggerType  触发器类型，可选值：resource, period
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * policyDefinitionId  策略ID
    * evaluationTime  合规状态评估时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'regionId' => 'region_id',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceProvider' => 'resource_provider',
            'resourceType' => 'resource_type',
            'triggerType' => 'trigger_type',
            'complianceState' => 'compliance_state',
            'policyAssignmentId' => 'policy_assignment_id',
            'policyAssignmentName' => 'policy_assignment_name',
            'policyDefinitionId' => 'policy_definition_id',
            'evaluationTime' => 'evaluation_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  用户ID
    * regionId  资源区域ID
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * triggerType  触发器类型，可选值：resource, period
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * policyDefinitionId  策略ID
    * evaluationTime  合规状态评估时间
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'regionId' => 'setRegionId',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceProvider' => 'setResourceProvider',
            'resourceType' => 'setResourceType',
            'triggerType' => 'setTriggerType',
            'complianceState' => 'setComplianceState',
            'policyAssignmentId' => 'setPolicyAssignmentId',
            'policyAssignmentName' => 'setPolicyAssignmentName',
            'policyDefinitionId' => 'setPolicyDefinitionId',
            'evaluationTime' => 'setEvaluationTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  用户ID
    * regionId  资源区域ID
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * triggerType  触发器类型，可选值：resource, period
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * policyDefinitionId  策略ID
    * evaluationTime  合规状态评估时间
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'regionId' => 'getRegionId',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceProvider' => 'getResourceProvider',
            'resourceType' => 'getResourceType',
            'triggerType' => 'getTriggerType',
            'complianceState' => 'getComplianceState',
            'policyAssignmentId' => 'getPolicyAssignmentId',
            'policyAssignmentName' => 'getPolicyAssignmentName',
            'policyDefinitionId' => 'getPolicyDefinitionId',
            'evaluationTime' => 'getEvaluationTime'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceProvider'] = isset($data['resourceProvider']) ? $data['resourceProvider'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['complianceState'] = isset($data['complianceState']) ? $data['complianceState'] : null;
        $this->container['policyAssignmentId'] = isset($data['policyAssignmentId']) ? $data['policyAssignmentId'] : null;
        $this->container['policyAssignmentName'] = isset($data['policyAssignmentName']) ? $data['policyAssignmentName'] : null;
        $this->container['policyDefinitionId'] = isset($data['policyDefinitionId']) ? $data['policyDefinitionId'] : null;
        $this->container['evaluationTime'] = isset($data['evaluationTime']) ? $data['evaluationTime'] : null;
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
    * Gets domainId
    *  用户ID
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
    * @param string|null $domainId 用户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets regionId
    *  资源区域ID
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
    * @param string|null $regionId 资源区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceProvider
    *  云服务名称
    *
    * @return string|null
    */
    public function getResourceProvider()
    {
        return $this->container['resourceProvider'];
    }

    /**
    * Sets resourceProvider
    *
    * @param string|null $resourceProvider 云服务名称
    *
    * @return $this
    */
    public function setResourceProvider($resourceProvider)
    {
        $this->container['resourceProvider'] = $resourceProvider;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发器类型，可选值：resource, period
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发器类型，可选值：resource, period
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets complianceState
    *  合规状态
    *
    * @return string|null
    */
    public function getComplianceState()
    {
        return $this->container['complianceState'];
    }

    /**
    * Sets complianceState
    *
    * @param string|null $complianceState 合规状态
    *
    * @return $this
    */
    public function setComplianceState($complianceState)
    {
        $this->container['complianceState'] = $complianceState;
        return $this;
    }

    /**
    * Gets policyAssignmentId
    *  规则ID
    *
    * @return string|null
    */
    public function getPolicyAssignmentId()
    {
        return $this->container['policyAssignmentId'];
    }

    /**
    * Sets policyAssignmentId
    *
    * @param string|null $policyAssignmentId 规则ID
    *
    * @return $this
    */
    public function setPolicyAssignmentId($policyAssignmentId)
    {
        $this->container['policyAssignmentId'] = $policyAssignmentId;
        return $this;
    }

    /**
    * Gets policyAssignmentName
    *  规则名称
    *
    * @return string|null
    */
    public function getPolicyAssignmentName()
    {
        return $this->container['policyAssignmentName'];
    }

    /**
    * Sets policyAssignmentName
    *
    * @param string|null $policyAssignmentName 规则名称
    *
    * @return $this
    */
    public function setPolicyAssignmentName($policyAssignmentName)
    {
        $this->container['policyAssignmentName'] = $policyAssignmentName;
        return $this;
    }

    /**
    * Gets policyDefinitionId
    *  策略ID
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
    * @param string|null $policyDefinitionId 策略ID
    *
    * @return $this
    */
    public function setPolicyDefinitionId($policyDefinitionId)
    {
        $this->container['policyDefinitionId'] = $policyDefinitionId;
        return $this;
    }

    /**
    * Gets evaluationTime
    *  合规状态评估时间
    *
    * @return string|null
    */
    public function getEvaluationTime()
    {
        return $this->container['evaluationTime'];
    }

    /**
    * Sets evaluationTime
    *
    * @param string|null $evaluationTime 合规状态评估时间
    *
    * @return $this
    */
    public function setEvaluationTime($evaluationTime)
    {
        $this->container['evaluationTime'] = $evaluationTime;
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

