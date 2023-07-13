<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyStateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyStateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyResource  policyResource
    * triggerType  触发器类型
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * evaluationTime  合规状态评估时间
    * evaluationHash  评估校验码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyResource' => '\HuaweiCloud\SDK\Rms\V1\Model\PolicyResource',
            'triggerType' => 'string',
            'complianceState' => 'string',
            'policyAssignmentId' => 'string',
            'policyAssignmentName' => 'string',
            'evaluationTime' => 'string',
            'evaluationHash' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyResource  policyResource
    * triggerType  触发器类型
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * evaluationTime  合规状态评估时间
    * evaluationHash  评估校验码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyResource' => null,
        'triggerType' => null,
        'complianceState' => null,
        'policyAssignmentId' => null,
        'policyAssignmentName' => null,
        'evaluationTime' => null,
        'evaluationHash' => null
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
    * policyResource  policyResource
    * triggerType  触发器类型
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * evaluationTime  合规状态评估时间
    * evaluationHash  评估校验码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyResource' => 'policy_resource',
            'triggerType' => 'trigger_type',
            'complianceState' => 'compliance_state',
            'policyAssignmentId' => 'policy_assignment_id',
            'policyAssignmentName' => 'policy_assignment_name',
            'evaluationTime' => 'evaluation_time',
            'evaluationHash' => 'evaluation_hash'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyResource  policyResource
    * triggerType  触发器类型
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * evaluationTime  合规状态评估时间
    * evaluationHash  评估校验码
    *
    * @var string[]
    */
    protected static $setters = [
            'policyResource' => 'setPolicyResource',
            'triggerType' => 'setTriggerType',
            'complianceState' => 'setComplianceState',
            'policyAssignmentId' => 'setPolicyAssignmentId',
            'policyAssignmentName' => 'setPolicyAssignmentName',
            'evaluationTime' => 'setEvaluationTime',
            'evaluationHash' => 'setEvaluationHash'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyResource  policyResource
    * triggerType  触发器类型
    * complianceState  合规状态
    * policyAssignmentId  规则ID
    * policyAssignmentName  规则名称
    * evaluationTime  合规状态评估时间
    * evaluationHash  评估校验码
    *
    * @var string[]
    */
    protected static $getters = [
            'policyResource' => 'getPolicyResource',
            'triggerType' => 'getTriggerType',
            'complianceState' => 'getComplianceState',
            'policyAssignmentId' => 'getPolicyAssignmentId',
            'policyAssignmentName' => 'getPolicyAssignmentName',
            'evaluationTime' => 'getEvaluationTime',
            'evaluationHash' => 'getEvaluationHash'
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
    const TRIGGER_TYPE_RESOURCE = 'resource';
    const TRIGGER_TYPE_PERIOD = 'period';
    const COMPLIANCE_STATE_NON_COMPLIANT = 'NonCompliant';
    const COMPLIANCE_STATE_COMPLIANT = 'Compliant';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_RESOURCE,
            self::TRIGGER_TYPE_PERIOD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getComplianceStateAllowableValues()
    {
        return [
            self::COMPLIANCE_STATE_NON_COMPLIANT,
            self::COMPLIANCE_STATE_COMPLIANT,
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
        $this->container['policyResource'] = isset($data['policyResource']) ? $data['policyResource'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['complianceState'] = isset($data['complianceState']) ? $data['complianceState'] : null;
        $this->container['policyAssignmentId'] = isset($data['policyAssignmentId']) ? $data['policyAssignmentId'] : null;
        $this->container['policyAssignmentName'] = isset($data['policyAssignmentName']) ? $data['policyAssignmentName'] : null;
        $this->container['evaluationTime'] = isset($data['evaluationTime']) ? $data['evaluationTime'] : null;
        $this->container['evaluationHash'] = isset($data['evaluationHash']) ? $data['evaluationHash'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyResource'] === null) {
            $invalidProperties[] = "'policyResource' can't be null";
        }
        if ($this->container['triggerType'] === null) {
            $invalidProperties[] = "'triggerType' can't be null";
        }
            $allowedValues = $this->getTriggerTypeAllowableValues();
                if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['complianceState'] === null) {
            $invalidProperties[] = "'complianceState' can't be null";
        }
            $allowedValues = $this->getComplianceStateAllowableValues();
                if (!is_null($this->container['complianceState']) && !in_array($this->container['complianceState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'complianceState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['policyAssignmentId'] === null) {
            $invalidProperties[] = "'policyAssignmentId' can't be null";
        }
        if ($this->container['evaluationTime'] === null) {
            $invalidProperties[] = "'evaluationTime' can't be null";
        }
        if ($this->container['evaluationHash'] === null) {
            $invalidProperties[] = "'evaluationHash' can't be null";
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
    * Gets policyResource
    *  policyResource
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\PolicyResource
    */
    public function getPolicyResource()
    {
        return $this->container['policyResource'];
    }

    /**
    * Sets policyResource
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\PolicyResource $policyResource policyResource
    *
    * @return $this
    */
    public function setPolicyResource($policyResource)
    {
        $this->container['policyResource'] = $policyResource;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发器类型
    *
    * @return string
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string $triggerType 触发器类型
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
    * @return string
    */
    public function getComplianceState()
    {
        return $this->container['complianceState'];
    }

    /**
    * Sets complianceState
    *
    * @param string $complianceState 合规状态
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
    * @return string
    */
    public function getPolicyAssignmentId()
    {
        return $this->container['policyAssignmentId'];
    }

    /**
    * Sets policyAssignmentId
    *
    * @param string $policyAssignmentId 规则ID
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
    * Gets evaluationTime
    *  合规状态评估时间
    *
    * @return string
    */
    public function getEvaluationTime()
    {
        return $this->container['evaluationTime'];
    }

    /**
    * Sets evaluationTime
    *
    * @param string $evaluationTime 合规状态评估时间
    *
    * @return $this
    */
    public function setEvaluationTime($evaluationTime)
    {
        $this->container['evaluationTime'] = $evaluationTime;
        return $this;
    }

    /**
    * Gets evaluationHash
    *  评估校验码
    *
    * @return string
    */
    public function getEvaluationHash()
    {
        return $this->container['evaluationHash'];
    }

    /**
    * Sets evaluationHash
    *
    * @param string $evaluationHash 评估校验码
    *
    * @return $this
    */
    public function setEvaluationHash($evaluationHash)
    {
        $this->container['evaluationHash'] = $evaluationHash;
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

