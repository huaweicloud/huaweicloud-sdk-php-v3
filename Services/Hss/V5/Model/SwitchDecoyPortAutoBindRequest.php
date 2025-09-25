<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchDecoyPortAutoBindRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchDecoyPortAutoBindRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * enable  **参数解释**: 是否启用 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。 **默认取值**: false
    * linuxPolicyId  **参数解释**: linux策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * windowsPolicyId  **参数解释**: windows策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'enable' => 'bool',
            'linuxPolicyId' => 'string',
            'windowsPolicyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * enable  **参数解释**: 是否启用 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。 **默认取值**: false
    * linuxPolicyId  **参数解释**: linux策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * windowsPolicyId  **参数解释**: windows策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'enable' => null,
        'linuxPolicyId' => null,
        'windowsPolicyId' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * enable  **参数解释**: 是否启用 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。 **默认取值**: false
    * linuxPolicyId  **参数解释**: linux策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * windowsPolicyId  **参数解释**: windows策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'enable' => 'enable',
            'linuxPolicyId' => 'linux_policy_id',
            'windowsPolicyId' => 'windows_policy_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * enable  **参数解释**: 是否启用 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。 **默认取值**: false
    * linuxPolicyId  **参数解释**: linux策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * windowsPolicyId  **参数解释**: windows策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enable' => 'setEnable',
            'linuxPolicyId' => 'setLinuxPolicyId',
            'windowsPolicyId' => 'setWindowsPolicyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * enable  **参数解释**: 是否启用 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。 **默认取值**: false
    * linuxPolicyId  **参数解释**: linux策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * windowsPolicyId  **参数解释**: windows策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enable' => 'getEnable',
            'linuxPolicyId' => 'getLinuxPolicyId',
            'windowsPolicyId' => 'getWindowsPolicyId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['linuxPolicyId'] = isset($data['linuxPolicyId']) ? $data['linuxPolicyId'] : null;
        $this->container['windowsPolicyId'] = isset($data['windowsPolicyId']) ? $data['windowsPolicyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
            if (!is_null($this->container['linuxPolicyId']) && (mb_strlen($this->container['linuxPolicyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'linuxPolicyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['linuxPolicyId']) && (mb_strlen($this->container['linuxPolicyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'linuxPolicyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['linuxPolicyId']) && !preg_match("/^.*$/", $this->container['linuxPolicyId'])) {
                $invalidProperties[] = "invalid value for 'linuxPolicyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['windowsPolicyId']) && (mb_strlen($this->container['windowsPolicyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'windowsPolicyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['windowsPolicyId']) && (mb_strlen($this->container['windowsPolicyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'windowsPolicyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['windowsPolicyId']) && !preg_match("/^.*$/", $this->container['windowsPolicyId'])) {
                $invalidProperties[] = "invalid value for 'windowsPolicyId', must be conform to the pattern /^.*$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enable
    *  **参数解释**: 是否启用 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。 **默认取值**: false
    *
    * @return bool
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool $enable **参数解释**: 是否启用 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。 **默认取值**: false
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets linuxPolicyId
    *  **参数解释**: linux策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLinuxPolicyId()
    {
        return $this->container['linuxPolicyId'];
    }

    /**
    * Sets linuxPolicyId
    *
    * @param string|null $linuxPolicyId **参数解释**: linux策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLinuxPolicyId($linuxPolicyId)
    {
        $this->container['linuxPolicyId'] = $linuxPolicyId;
        return $this;
    }

    /**
    * Gets windowsPolicyId
    *  **参数解释**: windows策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getWindowsPolicyId()
    {
        return $this->container['windowsPolicyId'];
    }

    /**
    * Sets windowsPolicyId
    *
    * @param string|null $windowsPolicyId **参数解释**: windows策略id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setWindowsPolicyId($windowsPolicyId)
    {
        $this->container['windowsPolicyId'] = $windowsPolicyId;
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

