<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeCheckRuleActionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeCheckRuleActionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不赋值时，查租户所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。 **默认取值**: 不涉及
    * checkCce  **参数解释**: 是否校验cce **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * action  **参数解释**: 对检查项的操作类型 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - unignore：取消忽略 - fix：修复 - verify：验证 - add_to_whitelist：加白  **默认取值**: ignore
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'hostId' => 'string',
            'checkCce' => 'bool',
            'action' => 'string',
            'body' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRuleIdListRequestInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不赋值时，查租户所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。 **默认取值**: 不涉及
    * checkCce  **参数解释**: 是否校验cce **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * action  **参数解释**: 对检查项的操作类型 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - unignore：取消忽略 - fix：修复 - verify：验证 - add_to_whitelist：加白  **默认取值**: ignore
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'hostId' => null,
        'checkCce' => null,
        'action' => null,
        'body' => null
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
    * hostId  **参数解释**: 主机ID，不赋值时，查租户所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。 **默认取值**: 不涉及
    * checkCce  **参数解释**: 是否校验cce **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * action  **参数解释**: 对检查项的操作类型 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - unignore：取消忽略 - fix：修复 - verify：验证 - add_to_whitelist：加白  **默认取值**: ignore
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'hostId' => 'host_id',
            'checkCce' => 'check_cce',
            'action' => 'action',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不赋值时，查租户所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。 **默认取值**: 不涉及
    * checkCce  **参数解释**: 是否校验cce **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * action  **参数解释**: 对检查项的操作类型 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - unignore：取消忽略 - fix：修复 - verify：验证 - add_to_whitelist：加白  **默认取值**: ignore
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'hostId' => 'setHostId',
            'checkCce' => 'setCheckCce',
            'action' => 'setAction',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不赋值时，查租户所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。 **默认取值**: 不涉及
    * checkCce  **参数解释**: 是否校验cce **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * action  **参数解释**: 对检查项的操作类型 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - unignore：取消忽略 - fix：修复 - verify：验证 - add_to_whitelist：加白  **默认取值**: ignore
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'hostId' => 'getHostId',
            'checkCce' => 'getCheckCce',
            'action' => 'getAction',
            'body' => 'getBody'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['checkCce'] = isset($data['checkCce']) ? $data['checkCce'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if ((mb_strlen($this->container['action']) > 32)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(ignore|unignore|fix|verify|add_to_whitelist)$/", $this->container['action'])) {
                $invalidProperties[] = "invalid value for 'action', must be conform to the pattern /^(ignore|unignore|fix|verify|add_to_whitelist)$/.";
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
    * Gets hostId
    *  **参数解释**: 主机ID，不赋值时，查租户所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 主机ID，不赋值时，查租户所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets checkCce
    *  **参数解释**: 是否校验cce **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getCheckCce()
    {
        return $this->container['checkCce'];
    }

    /**
    * Sets checkCce
    *
    * @param bool|null $checkCce **参数解释**: 是否校验cce **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCheckCce($checkCce)
    {
        $this->container['checkCce'] = $checkCce;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**: 对检查项的操作类型 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - unignore：取消忽略 - fix：修复 - verify：验证 - add_to_whitelist：加白  **默认取值**: ignore
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**: 对检查项的操作类型 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - unignore：取消忽略 - fix：修复 - verify：验证 - add_to_whitelist：加白  **默认取值**: ignore
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleIdListRequestInfo|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleIdListRequestInfo|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

