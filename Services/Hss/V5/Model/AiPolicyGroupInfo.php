<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiPolicyGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiPolicyGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * groupType  **参数解释**： 策略组ID **取值范围**： 最小值0，最大值2147483647
    * projectId  项目ID
    * protectionObject  **参数解释**： 防护对象 **取值范围**： 字符长度1-128位
    * objectType  **参数解释**: 防护对象类型 **取值范围**: - 0：云服务 - 1：三方
    * objectNum  **参数解释**: 防护对象个数 **取值范围**: 取值0-100000
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * isExclusive  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * enabled  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * detailIsUsed  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-256位
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * policyList  **参数解释**: 策略列表 **取值范围**: 不涉及
    * agentIdList  **参数解释**: 智能体列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'groupName' => 'string',
            'groupType' => 'int',
            'projectId' => 'string',
            'protectionObject' => 'string',
            'objectType' => 'int',
            'objectNum' => 'int',
            'isDefault' => 'bool',
            'isExclusive' => 'bool',
            'enabled' => 'bool',
            'detailIsUsed' => 'bool',
            'description' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'policyList' => '\HuaweiCloud\SDK\Hss\V5\Model\AiPolicyList[]',
            'agentIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * groupType  **参数解释**： 策略组ID **取值范围**： 最小值0，最大值2147483647
    * projectId  项目ID
    * protectionObject  **参数解释**： 防护对象 **取值范围**： 字符长度1-128位
    * objectType  **参数解释**: 防护对象类型 **取值范围**: - 0：云服务 - 1：三方
    * objectNum  **参数解释**: 防护对象个数 **取值范围**: 取值0-100000
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * isExclusive  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * enabled  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * detailIsUsed  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-256位
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * policyList  **参数解释**: 策略列表 **取值范围**: 不涉及
    * agentIdList  **参数解释**: 智能体列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'groupName' => null,
        'groupType' => 'int32',
        'projectId' => null,
        'protectionObject' => null,
        'objectType' => 'int32',
        'objectNum' => 'int32',
        'isDefault' => null,
        'isExclusive' => null,
        'enabled' => null,
        'detailIsUsed' => null,
        'description' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'policyList' => null,
        'agentIdList' => null
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
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * groupType  **参数解释**： 策略组ID **取值范围**： 最小值0，最大值2147483647
    * projectId  项目ID
    * protectionObject  **参数解释**： 防护对象 **取值范围**： 字符长度1-128位
    * objectType  **参数解释**: 防护对象类型 **取值范围**: - 0：云服务 - 1：三方
    * objectNum  **参数解释**: 防护对象个数 **取值范围**: 取值0-100000
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * isExclusive  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * enabled  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * detailIsUsed  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-256位
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * policyList  **参数解释**: 策略列表 **取值范围**: 不涉及
    * agentIdList  **参数解释**: 智能体列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'groupType' => 'group_type',
            'projectId' => 'project_id',
            'protectionObject' => 'protection_object',
            'objectType' => 'object_type',
            'objectNum' => 'object_num',
            'isDefault' => 'is_default',
            'isExclusive' => 'is_exclusive',
            'enabled' => 'enabled',
            'detailIsUsed' => 'detail_is_used',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'policyList' => 'policy_list',
            'agentIdList' => 'agent_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * groupType  **参数解释**： 策略组ID **取值范围**： 最小值0，最大值2147483647
    * projectId  项目ID
    * protectionObject  **参数解释**： 防护对象 **取值范围**： 字符长度1-128位
    * objectType  **参数解释**: 防护对象类型 **取值范围**: - 0：云服务 - 1：三方
    * objectNum  **参数解释**: 防护对象个数 **取值范围**: 取值0-100000
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * isExclusive  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * enabled  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * detailIsUsed  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-256位
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * policyList  **参数解释**: 策略列表 **取值范围**: 不涉及
    * agentIdList  **参数解释**: 智能体列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'groupType' => 'setGroupType',
            'projectId' => 'setProjectId',
            'protectionObject' => 'setProtectionObject',
            'objectType' => 'setObjectType',
            'objectNum' => 'setObjectNum',
            'isDefault' => 'setIsDefault',
            'isExclusive' => 'setIsExclusive',
            'enabled' => 'setEnabled',
            'detailIsUsed' => 'setDetailIsUsed',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'policyList' => 'setPolicyList',
            'agentIdList' => 'setAgentIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * groupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * groupType  **参数解释**： 策略组ID **取值范围**： 最小值0，最大值2147483647
    * projectId  项目ID
    * protectionObject  **参数解释**： 防护对象 **取值范围**： 字符长度1-128位
    * objectType  **参数解释**: 防护对象类型 **取值范围**: - 0：云服务 - 1：三方
    * objectNum  **参数解释**: 防护对象个数 **取值范围**: 取值0-100000
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * isExclusive  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    * enabled  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * detailIsUsed  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-256位
    * createTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * policyList  **参数解释**: 策略列表 **取值范围**: 不涉及
    * agentIdList  **参数解释**: 智能体列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'groupType' => 'getGroupType',
            'projectId' => 'getProjectId',
            'protectionObject' => 'getProtectionObject',
            'objectType' => 'getObjectType',
            'objectNum' => 'getObjectNum',
            'isDefault' => 'getIsDefault',
            'isExclusive' => 'getIsExclusive',
            'enabled' => 'getEnabled',
            'detailIsUsed' => 'getDetailIsUsed',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'policyList' => 'getPolicyList',
            'agentIdList' => 'getAgentIdList'
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
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protectionObject'] = isset($data['protectionObject']) ? $data['protectionObject'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['objectNum'] = isset($data['objectNum']) ? $data['objectNum'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['isExclusive'] = isset($data['isExclusive']) ? $data['isExclusive'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['detailIsUsed'] = isset($data['detailIsUsed']) ? $data['detailIsUsed'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['policyList'] = isset($data['policyList']) ? $data['policyList'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 20)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^.*$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    *  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
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
    * @param string|null $groupId **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
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
    *  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
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
    * @param string|null $groupName **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupType
    *  **参数解释**： 策略组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param int|null $groupType **参数解释**： 策略组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets protectionObject
    *  **参数解释**： 防护对象 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getProtectionObject()
    {
        return $this->container['protectionObject'];
    }

    /**
    * Sets protectionObject
    *
    * @param string|null $protectionObject **参数解释**： 防护对象 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setProtectionObject($protectionObject)
    {
        $this->container['protectionObject'] = $protectionObject;
        return $this;
    }

    /**
    * Gets objectType
    *  **参数解释**: 防护对象类型 **取值范围**: - 0：云服务 - 1：三方
    *
    * @return int|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param int|null $objectType **参数解释**: 防护对象类型 **取值范围**: - 0：云服务 - 1：三方
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets objectNum
    *  **参数解释**: 防护对象个数 **取值范围**: 取值0-100000
    *
    * @return int|null
    */
    public function getObjectNum()
    {
        return $this->container['objectNum'];
    }

    /**
    * Sets objectNum
    *
    * @param int|null $objectNum **参数解释**: 防护对象个数 **取值范围**: 取值0-100000
    *
    * @return $this
    */
    public function setObjectNum($objectNum)
    {
        $this->container['objectNum'] = $objectNum;
        return $this;
    }

    /**
    * Gets isDefault
    *  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets isExclusive
    *  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @return bool|null
    */
    public function getIsExclusive()
    {
        return $this->container['isExclusive'];
    }

    /**
    * Sets isExclusive
    *
    * @param bool|null $isExclusive **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @return $this
    */
    public function setIsExclusive($isExclusive)
    {
        $this->container['isExclusive'] = $isExclusive;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets detailIsUsed
    *  **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    *
    * @return bool|null
    */
    public function getDetailIsUsed()
    {
        return $this->container['detailIsUsed'];
    }

    /**
    * Sets detailIsUsed
    *
    * @param bool|null $detailIsUsed **参数解释**: 是否启用 **取值范围**: - false：否 - true：是
    *
    * @return $this
    */
    public function setDetailIsUsed($detailIsUsed)
    {
        $this->container['detailIsUsed'] = $detailIsUsed;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 描述 **取值范围**: 字符长度0-256位
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
    * @param string|null $description **参数解释**: 描述 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets policyList
    *  **参数解释**: 策略列表 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AiPolicyList[]|null
    */
    public function getPolicyList()
    {
        return $this->container['policyList'];
    }

    /**
    * Sets policyList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AiPolicyList[]|null $policyList **参数解释**: 策略列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setPolicyList($policyList)
    {
        $this->container['policyList'] = $policyList;
        return $this;
    }

    /**
    * Gets agentIdList
    *  **参数解释**: 智能体列表 **取值范围**: 不涉及
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
    * @param string[]|null $agentIdList **参数解释**: 智能体列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
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

