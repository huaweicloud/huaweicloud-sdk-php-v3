<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckPolicyGroupInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckPolicyGroupInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释** 策略组ID **取值范围** 字符长度1-64位
    * groupName  **参数解释** 策略组名称 **取值范围** 字符长度1-256位
    * checkRuleNum  **参数解释** 基线检测项（检测规则）数量 **取值范围** 取值1-10000
    * hostNum  **参数解释** 应用服务器数量 **取值范围** 取值0-1000000
    * deletable  **参数解释** 是否支持删除 **取值范围** - true：支持 - false：不支持
    * defaultGroup  **参数解释** 是否默认策略组 **取值范围** - true：是 - false：否
    * supportOs  **参数解释** 策略支持的操作系统类型 **取值范围** - Linux：linux系统 - Windows：windows系统
    * policyInfo  policyInfo
    * weakPwdPolicyInfo  weakPwdPolicyInfo
    * agentIdList  **参数解释** 应用的主机的agentID列表
    * taskCondition  taskCondition
    * detectionPeriod  **参数解释** 检测周期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'groupName' => 'string',
            'checkRuleNum' => 'int',
            'hostNum' => 'int',
            'deletable' => 'bool',
            'defaultGroup' => 'bool',
            'supportOs' => 'string',
            'policyInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckPolicyInfoResponseInfo',
            'weakPwdPolicyInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckPolicyInfoResponseInfo',
            'agentIdList' => 'string[]',
            'taskCondition' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckTaskCondition',
            'detectionPeriod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释** 策略组ID **取值范围** 字符长度1-64位
    * groupName  **参数解释** 策略组名称 **取值范围** 字符长度1-256位
    * checkRuleNum  **参数解释** 基线检测项（检测规则）数量 **取值范围** 取值1-10000
    * hostNum  **参数解释** 应用服务器数量 **取值范围** 取值0-1000000
    * deletable  **参数解释** 是否支持删除 **取值范围** - true：支持 - false：不支持
    * defaultGroup  **参数解释** 是否默认策略组 **取值范围** - true：是 - false：否
    * supportOs  **参数解释** 策略支持的操作系统类型 **取值范围** - Linux：linux系统 - Windows：windows系统
    * policyInfo  policyInfo
    * weakPwdPolicyInfo  weakPwdPolicyInfo
    * agentIdList  **参数解释** 应用的主机的agentID列表
    * taskCondition  taskCondition
    * detectionPeriod  **参数解释** 检测周期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'groupName' => null,
        'checkRuleNum' => 'int32',
        'hostNum' => 'int32',
        'deletable' => null,
        'defaultGroup' => null,
        'supportOs' => null,
        'policyInfo' => null,
        'weakPwdPolicyInfo' => null,
        'agentIdList' => null,
        'taskCondition' => null,
        'detectionPeriod' => null
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
    * groupId  **参数解释** 策略组ID **取值范围** 字符长度1-64位
    * groupName  **参数解释** 策略组名称 **取值范围** 字符长度1-256位
    * checkRuleNum  **参数解释** 基线检测项（检测规则）数量 **取值范围** 取值1-10000
    * hostNum  **参数解释** 应用服务器数量 **取值范围** 取值0-1000000
    * deletable  **参数解释** 是否支持删除 **取值范围** - true：支持 - false：不支持
    * defaultGroup  **参数解释** 是否默认策略组 **取值范围** - true：是 - false：否
    * supportOs  **参数解释** 策略支持的操作系统类型 **取值范围** - Linux：linux系统 - Windows：windows系统
    * policyInfo  policyInfo
    * weakPwdPolicyInfo  weakPwdPolicyInfo
    * agentIdList  **参数解释** 应用的主机的agentID列表
    * taskCondition  taskCondition
    * detectionPeriod  **参数解释** 检测周期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'checkRuleNum' => 'check_rule_num',
            'hostNum' => 'host_num',
            'deletable' => 'deletable',
            'defaultGroup' => 'default_group',
            'supportOs' => 'support_os',
            'policyInfo' => 'policy_info',
            'weakPwdPolicyInfo' => 'weak_pwd_policy_info',
            'agentIdList' => 'agent_id_list',
            'taskCondition' => 'task_condition',
            'detectionPeriod' => 'detection_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释** 策略组ID **取值范围** 字符长度1-64位
    * groupName  **参数解释** 策略组名称 **取值范围** 字符长度1-256位
    * checkRuleNum  **参数解释** 基线检测项（检测规则）数量 **取值范围** 取值1-10000
    * hostNum  **参数解释** 应用服务器数量 **取值范围** 取值0-1000000
    * deletable  **参数解释** 是否支持删除 **取值范围** - true：支持 - false：不支持
    * defaultGroup  **参数解释** 是否默认策略组 **取值范围** - true：是 - false：否
    * supportOs  **参数解释** 策略支持的操作系统类型 **取值范围** - Linux：linux系统 - Windows：windows系统
    * policyInfo  policyInfo
    * weakPwdPolicyInfo  weakPwdPolicyInfo
    * agentIdList  **参数解释** 应用的主机的agentID列表
    * taskCondition  taskCondition
    * detectionPeriod  **参数解释** 检测周期
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'checkRuleNum' => 'setCheckRuleNum',
            'hostNum' => 'setHostNum',
            'deletable' => 'setDeletable',
            'defaultGroup' => 'setDefaultGroup',
            'supportOs' => 'setSupportOs',
            'policyInfo' => 'setPolicyInfo',
            'weakPwdPolicyInfo' => 'setWeakPwdPolicyInfo',
            'agentIdList' => 'setAgentIdList',
            'taskCondition' => 'setTaskCondition',
            'detectionPeriod' => 'setDetectionPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释** 策略组ID **取值范围** 字符长度1-64位
    * groupName  **参数解释** 策略组名称 **取值范围** 字符长度1-256位
    * checkRuleNum  **参数解释** 基线检测项（检测规则）数量 **取值范围** 取值1-10000
    * hostNum  **参数解释** 应用服务器数量 **取值范围** 取值0-1000000
    * deletable  **参数解释** 是否支持删除 **取值范围** - true：支持 - false：不支持
    * defaultGroup  **参数解释** 是否默认策略组 **取值范围** - true：是 - false：否
    * supportOs  **参数解释** 策略支持的操作系统类型 **取值范围** - Linux：linux系统 - Windows：windows系统
    * policyInfo  policyInfo
    * weakPwdPolicyInfo  weakPwdPolicyInfo
    * agentIdList  **参数解释** 应用的主机的agentID列表
    * taskCondition  taskCondition
    * detectionPeriod  **参数解释** 检测周期
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'checkRuleNum' => 'getCheckRuleNum',
            'hostNum' => 'getHostNum',
            'deletable' => 'getDeletable',
            'defaultGroup' => 'getDefaultGroup',
            'supportOs' => 'getSupportOs',
            'policyInfo' => 'getPolicyInfo',
            'weakPwdPolicyInfo' => 'getWeakPwdPolicyInfo',
            'agentIdList' => 'getAgentIdList',
            'taskCondition' => 'getTaskCondition',
            'detectionPeriod' => 'getDetectionPeriod'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['checkRuleNum'] = isset($data['checkRuleNum']) ? $data['checkRuleNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['defaultGroup'] = isset($data['defaultGroup']) ? $data['defaultGroup'] : null;
        $this->container['supportOs'] = isset($data['supportOs']) ? $data['supportOs'] : null;
        $this->container['policyInfo'] = isset($data['policyInfo']) ? $data['policyInfo'] : null;
        $this->container['weakPwdPolicyInfo'] = isset($data['weakPwdPolicyInfo']) ? $data['weakPwdPolicyInfo'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
        $this->container['taskCondition'] = isset($data['taskCondition']) ? $data['taskCondition'] : null;
        $this->container['detectionPeriod'] = isset($data['detectionPeriod']) ? $data['detectionPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) > 32)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) < 0)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyInfo'] === null) {
            $invalidProperties[] = "'policyInfo' can't be null";
        }
            if (!is_null($this->container['detectionPeriod']) && (mb_strlen($this->container['detectionPeriod']) > 128)) {
                $invalidProperties[] = "invalid value for 'detectionPeriod', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['detectionPeriod']) && (mb_strlen($this->container['detectionPeriod']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectionPeriod', the character length must be bigger than or equal to 1.";
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
    * Gets groupId
    *  **参数解释** 策略组ID **取值范围** 字符长度1-64位
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
    * @param string|null $groupId **参数解释** 策略组ID **取值范围** 字符长度1-64位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释** 策略组名称 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释** 策略组名称 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets checkRuleNum
    *  **参数解释** 基线检测项（检测规则）数量 **取值范围** 取值1-10000
    *
    * @return int|null
    */
    public function getCheckRuleNum()
    {
        return $this->container['checkRuleNum'];
    }

    /**
    * Sets checkRuleNum
    *
    * @param int|null $checkRuleNum **参数解释** 基线检测项（检测规则）数量 **取值范围** 取值1-10000
    *
    * @return $this
    */
    public function setCheckRuleNum($checkRuleNum)
    {
        $this->container['checkRuleNum'] = $checkRuleNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释** 应用服务器数量 **取值范围** 取值0-1000000
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释** 应用服务器数量 **取值范围** 取值0-1000000
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets deletable
    *  **参数解释** 是否支持删除 **取值范围** - true：支持 - false：不支持
    *
    * @return bool|null
    */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
    * Sets deletable
    *
    * @param bool|null $deletable **参数解释** 是否支持删除 **取值范围** - true：支持 - false：不支持
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
        return $this;
    }

    /**
    * Gets defaultGroup
    *  **参数解释** 是否默认策略组 **取值范围** - true：是 - false：否
    *
    * @return bool|null
    */
    public function getDefaultGroup()
    {
        return $this->container['defaultGroup'];
    }

    /**
    * Sets defaultGroup
    *
    * @param bool|null $defaultGroup **参数解释** 是否默认策略组 **取值范围** - true：是 - false：否
    *
    * @return $this
    */
    public function setDefaultGroup($defaultGroup)
    {
        $this->container['defaultGroup'] = $defaultGroup;
        return $this;
    }

    /**
    * Gets supportOs
    *  **参数解释** 策略支持的操作系统类型 **取值范围** - Linux：linux系统 - Windows：windows系统
    *
    * @return string|null
    */
    public function getSupportOs()
    {
        return $this->container['supportOs'];
    }

    /**
    * Sets supportOs
    *
    * @param string|null $supportOs **参数解释** 策略支持的操作系统类型 **取值范围** - Linux：linux系统 - Windows：windows系统
    *
    * @return $this
    */
    public function setSupportOs($supportOs)
    {
        $this->container['supportOs'] = $supportOs;
        return $this;
    }

    /**
    * Gets policyInfo
    *  policyInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckPolicyInfoResponseInfo
    */
    public function getPolicyInfo()
    {
        return $this->container['policyInfo'];
    }

    /**
    * Sets policyInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckPolicyInfoResponseInfo $policyInfo policyInfo
    *
    * @return $this
    */
    public function setPolicyInfo($policyInfo)
    {
        $this->container['policyInfo'] = $policyInfo;
        return $this;
    }

    /**
    * Gets weakPwdPolicyInfo
    *  weakPwdPolicyInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckPolicyInfoResponseInfo|null
    */
    public function getWeakPwdPolicyInfo()
    {
        return $this->container['weakPwdPolicyInfo'];
    }

    /**
    * Sets weakPwdPolicyInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckPolicyInfoResponseInfo|null $weakPwdPolicyInfo weakPwdPolicyInfo
    *
    * @return $this
    */
    public function setWeakPwdPolicyInfo($weakPwdPolicyInfo)
    {
        $this->container['weakPwdPolicyInfo'] = $weakPwdPolicyInfo;
        return $this;
    }

    /**
    * Gets agentIdList
    *  **参数解释** 应用的主机的agentID列表
    *
    * @return string[]|null
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[]|null $agentIdList **参数解释** 应用的主机的agentID列表
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets taskCondition
    *  taskCondition
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckTaskCondition|null
    */
    public function getTaskCondition()
    {
        return $this->container['taskCondition'];
    }

    /**
    * Sets taskCondition
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckTaskCondition|null $taskCondition taskCondition
    *
    * @return $this
    */
    public function setTaskCondition($taskCondition)
    {
        $this->container['taskCondition'] = $taskCondition;
        return $this;
    }

    /**
    * Gets detectionPeriod
    *  **参数解释** 检测周期
    *
    * @return string|null
    */
    public function getDetectionPeriod()
    {
        return $this->container['detectionPeriod'];
    }

    /**
    * Sets detectionPeriod
    *
    * @param string|null $detectionPeriod **参数解释** 检测周期
    *
    * @return $this
    */
    public function setDetectionPeriod($detectionPeriod)
    {
        $this->container['detectionPeriod'] = $detectionPeriod;
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

