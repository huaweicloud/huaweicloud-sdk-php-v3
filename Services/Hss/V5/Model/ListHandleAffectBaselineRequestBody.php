<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHandleAffectBaselineRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHandleAffectBaselineRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释** 基线检查执行的操作 **约束限制** 不涉及 **取值范围** - add_to_whitelist: 加白名单 - ignore          : 忽略 - unignore        : 取消忽略 - fix             : 修复 - verify          : 验证 **默认取值** 不涉及
    * handleStatus  **参数解释** 当前检查项的状态 **约束限制** 不涉及 **取值范围** - unhandled : 未处理 - fix-failed: 修复失败 - fixing    : 修复中 - verifying : 验证中 - ignored   : 忽略 - safe      : 安全 **默认取值** 不涉及
    * hostId  **参数解释** 主机id，没有该字段则代表该检查项影响的部分主机 **约束限制** 不涉及 **取值范围** 字符长度1-256位 **默认取值** 不涉及
    * checkRuleList  **参数解释** 需要进行操作的检查项列表 **约束限制** 列表范围0-200条
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'handleStatus' => 'string',
            'hostId' => 'string',
            'checkRuleList' => '\HuaweiCloud\SDK\Hss\V5\Model\ListHandleAffectBaselineRequestBodyCheckRuleList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释** 基线检查执行的操作 **约束限制** 不涉及 **取值范围** - add_to_whitelist: 加白名单 - ignore          : 忽略 - unignore        : 取消忽略 - fix             : 修复 - verify          : 验证 **默认取值** 不涉及
    * handleStatus  **参数解释** 当前检查项的状态 **约束限制** 不涉及 **取值范围** - unhandled : 未处理 - fix-failed: 修复失败 - fixing    : 修复中 - verifying : 验证中 - ignored   : 忽略 - safe      : 安全 **默认取值** 不涉及
    * hostId  **参数解释** 主机id，没有该字段则代表该检查项影响的部分主机 **约束限制** 不涉及 **取值范围** 字符长度1-256位 **默认取值** 不涉及
    * checkRuleList  **参数解释** 需要进行操作的检查项列表 **约束限制** 列表范围0-200条
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'handleStatus' => null,
        'hostId' => null,
        'checkRuleList' => null
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
    * action  **参数解释** 基线检查执行的操作 **约束限制** 不涉及 **取值范围** - add_to_whitelist: 加白名单 - ignore          : 忽略 - unignore        : 取消忽略 - fix             : 修复 - verify          : 验证 **默认取值** 不涉及
    * handleStatus  **参数解释** 当前检查项的状态 **约束限制** 不涉及 **取值范围** - unhandled : 未处理 - fix-failed: 修复失败 - fixing    : 修复中 - verifying : 验证中 - ignored   : 忽略 - safe      : 安全 **默认取值** 不涉及
    * hostId  **参数解释** 主机id，没有该字段则代表该检查项影响的部分主机 **约束限制** 不涉及 **取值范围** 字符长度1-256位 **默认取值** 不涉及
    * checkRuleList  **参数解释** 需要进行操作的检查项列表 **约束限制** 列表范围0-200条
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'handleStatus' => 'handle_status',
            'hostId' => 'host_id',
            'checkRuleList' => 'check_rule_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释** 基线检查执行的操作 **约束限制** 不涉及 **取值范围** - add_to_whitelist: 加白名单 - ignore          : 忽略 - unignore        : 取消忽略 - fix             : 修复 - verify          : 验证 **默认取值** 不涉及
    * handleStatus  **参数解释** 当前检查项的状态 **约束限制** 不涉及 **取值范围** - unhandled : 未处理 - fix-failed: 修复失败 - fixing    : 修复中 - verifying : 验证中 - ignored   : 忽略 - safe      : 安全 **默认取值** 不涉及
    * hostId  **参数解释** 主机id，没有该字段则代表该检查项影响的部分主机 **约束限制** 不涉及 **取值范围** 字符长度1-256位 **默认取值** 不涉及
    * checkRuleList  **参数解释** 需要进行操作的检查项列表 **约束限制** 列表范围0-200条
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'handleStatus' => 'setHandleStatus',
            'hostId' => 'setHostId',
            'checkRuleList' => 'setCheckRuleList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释** 基线检查执行的操作 **约束限制** 不涉及 **取值范围** - add_to_whitelist: 加白名单 - ignore          : 忽略 - unignore        : 取消忽略 - fix             : 修复 - verify          : 验证 **默认取值** 不涉及
    * handleStatus  **参数解释** 当前检查项的状态 **约束限制** 不涉及 **取值范围** - unhandled : 未处理 - fix-failed: 修复失败 - fixing    : 修复中 - verifying : 验证中 - ignored   : 忽略 - safe      : 安全 **默认取值** 不涉及
    * hostId  **参数解释** 主机id，没有该字段则代表该检查项影响的部分主机 **约束限制** 不涉及 **取值范围** 字符长度1-256位 **默认取值** 不涉及
    * checkRuleList  **参数解释** 需要进行操作的检查项列表 **约束限制** 列表范围0-200条
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'handleStatus' => 'getHandleStatus',
            'hostId' => 'getHostId',
            'checkRuleList' => 'getCheckRuleList'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['checkRuleList'] = isset($data['checkRuleList']) ? $data['checkRuleList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if ((mb_strlen($this->container['action']) > 64)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(add_to_whitelist|ignore|unignore|fix|verify)$/", $this->container['action'])) {
                $invalidProperties[] = "invalid value for 'action', must be conform to the pattern /^(add_to_whitelist|ignore|unignore|fix|verify)$/.";
            }
        if ($this->container['handleStatus'] === null) {
            $invalidProperties[] = "'handleStatus' can't be null";
        }
            if ((mb_strlen($this->container['handleStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['handleStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(unhandled|fix-failed|fixing|verifying|ignored|safe)$/", $this->container['handleStatus'])) {
                $invalidProperties[] = "invalid value for 'handleStatus', must be conform to the pattern /^(unhandled|fix-failed|fixing|verifying|ignored|safe)$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
        if ($this->container['checkRuleList'] === null) {
            $invalidProperties[] = "'checkRuleList' can't be null";
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
    * Gets action
    *  **参数解释** 基线检查执行的操作 **约束限制** 不涉及 **取值范围** - add_to_whitelist: 加白名单 - ignore          : 忽略 - unignore        : 取消忽略 - fix             : 修复 - verify          : 验证 **默认取值** 不涉及
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
    * @param string $action **参数解释** 基线检查执行的操作 **约束限制** 不涉及 **取值范围** - add_to_whitelist: 加白名单 - ignore          : 忽略 - unignore        : 取消忽略 - fix             : 修复 - verify          : 验证 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释** 当前检查项的状态 **约束限制** 不涉及 **取值范围** - unhandled : 未处理 - fix-failed: 修复失败 - fixing    : 修复中 - verifying : 验证中 - ignored   : 忽略 - safe      : 安全 **默认取值** 不涉及
    *
    * @return string
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string $handleStatus **参数解释** 当前检查项的状态 **约束限制** 不涉及 **取值范围** - unhandled : 未处理 - fix-failed: 修复失败 - fixing    : 修复中 - verifying : 验证中 - ignored   : 忽略 - safe      : 安全 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释** 主机id，没有该字段则代表该检查项影响的部分主机 **约束限制** 不涉及 **取值范围** 字符长度1-256位 **默认取值** 不涉及
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
    * @param string|null $hostId **参数解释** 主机id，没有该字段则代表该检查项影响的部分主机 **约束限制** 不涉及 **取值范围** 字符长度1-256位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets checkRuleList
    *  **参数解释** 需要进行操作的检查项列表 **约束限制** 列表范围0-200条
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListHandleAffectBaselineRequestBodyCheckRuleList[]
    */
    public function getCheckRuleList()
    {
        return $this->container['checkRuleList'];
    }

    /**
    * Sets checkRuleList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListHandleAffectBaselineRequestBodyCheckRuleList[] $checkRuleList **参数解释** 需要进行操作的检查项列表 **约束限制** 列表范围0-200条
    *
    * @return $this
    */
    public function setCheckRuleList($checkRuleList)
    {
        $this->container['checkRuleList'] = $checkRuleList;
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

