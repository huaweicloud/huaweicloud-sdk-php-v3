<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRaspPolicyDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRaspPolicyDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  防护策略名称
    * osType  **参数解释** 操作系统类型 **取值范围** 包含以下两种: - Linux : linux系统 - Windows: windows系统
    * ruleList  list
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'osType' => 'string',
            'ruleList' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckFeatureRuleInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  防护策略名称
    * osType  **参数解释** 操作系统类型 **取值范围** 包含以下两种: - Linux : linux系统 - Windows: windows系统
    * ruleList  list
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'osType' => null,
        'ruleList' => null
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
    * policyName  防护策略名称
    * osType  **参数解释** 操作系统类型 **取值范围** 包含以下两种: - Linux : linux系统 - Windows: windows系统
    * ruleList  list
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'osType' => 'os_type',
            'ruleList' => 'rule_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  防护策略名称
    * osType  **参数解释** 操作系统类型 **取值范围** 包含以下两种: - Linux : linux系统 - Windows: windows系统
    * ruleList  list
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'osType' => 'setOsType',
            'ruleList' => 'setRuleList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  防护策略名称
    * osType  **参数解释** 操作系统类型 **取值范围** 包含以下两种: - Linux : linux系统 - Windows: windows系统
    * ruleList  list
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'osType' => 'getOsType',
            'ruleList' => 'getRuleList'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['ruleList'] = isset($data['ruleList']) ? $data['ruleList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 32)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 1)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/^(Linux|Windows)$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^(Linux|Windows)$/.";
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
    * Gets policyName
    *  防护策略名称
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
    * @param string|null $policyName 防护策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释** 操作系统类型 **取值范围** 包含以下两种: - Linux : linux系统 - Windows: windows系统
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释** 操作系统类型 **取值范围** 包含以下两种: - Linux : linux系统 - Windows: windows系统
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets ruleList
    *  list
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CheckFeatureRuleInfo[]|null
    */
    public function getRuleList()
    {
        return $this->container['ruleList'];
    }

    /**
    * Sets ruleList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckFeatureRuleInfo[]|null $ruleList list
    *
    * @return $this
    */
    public function setRuleList($ruleList)
    {
        $this->container['ruleList'] = $ruleList;
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

