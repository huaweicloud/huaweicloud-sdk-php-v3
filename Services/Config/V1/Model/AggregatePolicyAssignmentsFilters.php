<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregatePolicyAssignmentsFilters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregatePolicyAssignmentsFilters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  源帐号ID。
    * complianceState  合规结果。
    * policyAssignmentName  合规规则名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'complianceState' => 'string',
            'policyAssignmentName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  源帐号ID。
    * complianceState  合规结果。
    * policyAssignmentName  合规规则名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'complianceState' => null,
        'policyAssignmentName' => null
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
    * accountId  源帐号ID。
    * complianceState  合规结果。
    * policyAssignmentName  合规规则名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'complianceState' => 'compliance_state',
            'policyAssignmentName' => 'policy_assignment_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  源帐号ID。
    * complianceState  合规结果。
    * policyAssignmentName  合规规则名称
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'complianceState' => 'setComplianceState',
            'policyAssignmentName' => 'setPolicyAssignmentName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  源帐号ID。
    * complianceState  合规结果。
    * policyAssignmentName  合规规则名称
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'complianceState' => 'getComplianceState',
            'policyAssignmentName' => 'getPolicyAssignmentName'
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
    const COMPLIANCE_STATE_NON_COMPLIANT = 'NonCompliant';
    const COMPLIANCE_STATE_COMPLIANT = 'Compliant';
    const COMPLIANCE_STATE_NOT_STARTED = 'NotStarted';
    

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
            self::COMPLIANCE_STATE_NOT_STARTED,
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['complianceState'] = isset($data['complianceState']) ? $data['complianceState'] : null;
        $this->container['policyAssignmentName'] = isset($data['policyAssignmentName']) ? $data['policyAssignmentName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountId']) && !preg_match("/[\\w-]+/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /[\\w-]+/.";
            }
            $allowedValues = $this->getComplianceStateAllowableValues();
                if (!is_null($this->container['complianceState']) && !in_array($this->container['complianceState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'complianceState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['policyAssignmentName']) && (mb_strlen($this->container['policyAssignmentName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyAssignmentName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyAssignmentName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/", $this->container['policyAssignmentName'])) {
                $invalidProperties[] = "invalid value for 'policyAssignmentName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/.";
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
    * Gets accountId
    *  源帐号ID。
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 源帐号ID。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets complianceState
    *  合规结果。
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
    * @param string|null $complianceState 合规结果。
    *
    * @return $this
    */
    public function setComplianceState($complianceState)
    {
        $this->container['complianceState'] = $complianceState;
        return $this;
    }

    /**
    * Gets policyAssignmentName
    *  合规规则名称
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
    * @param string|null $policyAssignmentName 合规规则名称
    *
    * @return $this
    */
    public function setPolicyAssignmentName($policyAssignmentName)
    {
        $this->container['policyAssignmentName'] = $policyAssignmentName;
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

