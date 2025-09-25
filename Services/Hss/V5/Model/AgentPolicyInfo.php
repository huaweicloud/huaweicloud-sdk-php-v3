<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentPolicyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentPolicyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略ID
    * groupId  策略组ID
    * policyName  策略名称
    * featureName  feature名称
    * policyCategory  策略类别
    * policyStatus  **参数解释**: 策略应用状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - not_applied：未应用 - protection_degradation_not_applied：防护降级未应用 - processing：应用中 - applied：已应用 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'groupId' => 'string',
            'policyName' => 'string',
            'featureName' => 'string',
            'policyCategory' => 'string',
            'policyStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略ID
    * groupId  策略组ID
    * policyName  策略名称
    * featureName  feature名称
    * policyCategory  策略类别
    * policyStatus  **参数解释**: 策略应用状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - not_applied：未应用 - protection_degradation_not_applied：防护降级未应用 - processing：应用中 - applied：已应用 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'groupId' => null,
        'policyName' => null,
        'featureName' => null,
        'policyCategory' => null,
        'policyStatus' => null
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
    * policyId  策略ID
    * groupId  策略组ID
    * policyName  策略名称
    * featureName  feature名称
    * policyCategory  策略类别
    * policyStatus  **参数解释**: 策略应用状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - not_applied：未应用 - protection_degradation_not_applied：防护降级未应用 - processing：应用中 - applied：已应用 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'groupId' => 'group_id',
            'policyName' => 'policy_name',
            'featureName' => 'feature_name',
            'policyCategory' => 'policy_category',
            'policyStatus' => 'policy_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略ID
    * groupId  策略组ID
    * policyName  策略名称
    * featureName  feature名称
    * policyCategory  策略类别
    * policyStatus  **参数解释**: 策略应用状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - not_applied：未应用 - protection_degradation_not_applied：防护降级未应用 - processing：应用中 - applied：已应用 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'groupId' => 'setGroupId',
            'policyName' => 'setPolicyName',
            'featureName' => 'setFeatureName',
            'policyCategory' => 'setPolicyCategory',
            'policyStatus' => 'setPolicyStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略ID
    * groupId  策略组ID
    * policyName  策略名称
    * featureName  feature名称
    * policyCategory  策略类别
    * policyStatus  **参数解释**: 策略应用状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - not_applied：未应用 - protection_degradation_not_applied：防护降级未应用 - processing：应用中 - applied：已应用 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'groupId' => 'getGroupId',
            'policyName' => 'getPolicyName',
            'featureName' => 'getFeatureName',
            'policyCategory' => 'getPolicyCategory',
            'policyStatus' => 'getPolicyStatus'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['featureName'] = isset($data['featureName']) ? $data['featureName'] : null;
        $this->container['policyCategory'] = isset($data['policyCategory']) ? $data['policyCategory'] : null;
        $this->container['policyStatus'] = isset($data['policyStatus']) ? $data['policyStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['featureName']) && (mb_strlen($this->container['featureName']) > 256)) {
                $invalidProperties[] = "invalid value for 'featureName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['featureName']) && (mb_strlen($this->container['featureName']) < 0)) {
                $invalidProperties[] = "invalid value for 'featureName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyCategory']) && (mb_strlen($this->container['policyCategory']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyCategory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyCategory']) && (mb_strlen($this->container['policyCategory']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyCategory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyStatus']) && (mb_strlen($this->container['policyStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'policyStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['policyStatus']) && (mb_strlen($this->container['policyStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyStatus', the character length must be bigger than or equal to 0.";
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
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets groupId
    *  策略组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 策略组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets featureName
    *  feature名称
    *
    * @return string|null
    */
    public function getFeatureName()
    {
        return $this->container['featureName'];
    }

    /**
    * Sets featureName
    *
    * @param string|null $featureName feature名称
    *
    * @return $this
    */
    public function setFeatureName($featureName)
    {
        $this->container['featureName'] = $featureName;
        return $this;
    }

    /**
    * Gets policyCategory
    *  策略类别
    *
    * @return string|null
    */
    public function getPolicyCategory()
    {
        return $this->container['policyCategory'];
    }

    /**
    * Sets policyCategory
    *
    * @param string|null $policyCategory 策略类别
    *
    * @return $this
    */
    public function setPolicyCategory($policyCategory)
    {
        $this->container['policyCategory'] = $policyCategory;
        return $this;
    }

    /**
    * Gets policyStatus
    *  **参数解释**: 策略应用状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - not_applied：未应用 - protection_degradation_not_applied：防护降级未应用 - processing：应用中 - applied：已应用 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPolicyStatus()
    {
        return $this->container['policyStatus'];
    }

    /**
    * Sets policyStatus
    *
    * @param string|null $policyStatus **参数解释**: 策略应用状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - not_applied：未应用 - protection_degradation_not_applied：防护降级未应用 - processing：应用中 - applied：已应用 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPolicyStatus($policyStatus)
    {
        $this->container['policyStatus'] = $policyStatus;
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

