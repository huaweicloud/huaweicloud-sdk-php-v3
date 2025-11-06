<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupsInheritRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupsInheritRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * settingType  **参数解释：** 必填项，设置类型protected_branches保护分支 protected_tags保护tag push_rules推送规则 merge_requests合并请求 mr_branch_policies合并分支 reviews检视意见 e2e_settings e2e设置 webhook_settings hook设置 deploy_keys 部署key watermark水印 repository_settings仓库设置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'int',
            'settingType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * settingType  **参数解释：** 必填项，设置类型protected_branches保护分支 protected_tags保护tag push_rules推送规则 merge_requests合并请求 mr_branch_policies合并分支 reviews检视意见 e2e_settings e2e设置 webhook_settings hook设置 deploy_keys 部署key watermark水印 repository_settings仓库设置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => 'int32',
        'settingType' => null
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
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * settingType  **参数解释：** 必填项，设置类型protected_branches保护分支 protected_tags保护tag push_rules推送规则 merge_requests合并请求 mr_branch_policies合并分支 reviews检视意见 e2e_settings e2e设置 webhook_settings hook设置 deploy_keys 部署key watermark水印 repository_settings仓库设置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'settingType' => 'setting_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * settingType  **参数解释：** 必填项，设置类型protected_branches保护分支 protected_tags保护tag push_rules推送规则 merge_requests合并请求 mr_branch_policies合并分支 reviews检视意见 e2e_settings e2e设置 webhook_settings hook设置 deploy_keys 部署key watermark水印 repository_settings仓库设置。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'settingType' => 'setSettingType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * settingType  **参数解释：** 必填项，设置类型protected_branches保护分支 protected_tags保护tag push_rules推送规则 merge_requests合并请求 mr_branch_policies合并分支 reviews检视意见 e2e_settings e2e设置 webhook_settings hook设置 deploy_keys 部署key watermark水印 repository_settings仓库设置。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'settingType' => 'getSettingType'
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
    const SETTING_TYPE_PROTECTED_BRANCHES = 'protected_branches';
    const SETTING_TYPE_PROTECTED_TAGS = 'protected_tags';
    const SETTING_TYPE_PUSH_RULES = 'push_rules';
    const SETTING_TYPE_MERGE_REQUESTS = 'merge_requests';
    const SETTING_TYPE_MR_BRANCH_POLICIES = 'mr_branch_policies';
    const SETTING_TYPE_REVIEWS = 'reviews';
    const SETTING_TYPE_E2E_SETTINGS = 'e2e_settings';
    const SETTING_TYPE_WEBHOOK_SETTINGS = 'webhook_settings';
    const SETTING_TYPE_DEPLOY_KEYS = 'deploy_keys';
    const SETTING_TYPE_WATERMARK = 'watermark';
    const SETTING_TYPE_REPOSITORY_SETTINGS = 'repository_settings';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSettingTypeAllowableValues()
    {
        return [
            self::SETTING_TYPE_PROTECTED_BRANCHES,
            self::SETTING_TYPE_PROTECTED_TAGS,
            self::SETTING_TYPE_PUSH_RULES,
            self::SETTING_TYPE_MERGE_REQUESTS,
            self::SETTING_TYPE_MR_BRANCH_POLICIES,
            self::SETTING_TYPE_REVIEWS,
            self::SETTING_TYPE_E2E_SETTINGS,
            self::SETTING_TYPE_WEBHOOK_SETTINGS,
            self::SETTING_TYPE_DEPLOY_KEYS,
            self::SETTING_TYPE_WATERMARK,
            self::SETTING_TYPE_REPOSITORY_SETTINGS,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['settingType'] = isset($data['settingType']) ? $data['settingType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if (($this->container['groupId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['groupId'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', must be bigger than or equal to 1.";
            }
        if ($this->container['settingType'] === null) {
            $invalidProperties[] = "'settingType' can't be null";
        }
            $allowedValues = $this->getSettingTypeAllowableValues();
                if (!is_null($this->container['settingType']) && !in_array($this->container['settingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'settingType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['settingType']) > 2000)) {
                $invalidProperties[] = "invalid value for 'settingType', the character length must be smaller than or equal to 2000.";
            }
            if ((mb_strlen($this->container['settingType']) < 1)) {
                $invalidProperties[] = "invalid value for 'settingType', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return int
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param int $groupId **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets settingType
    *  **参数解释：** 必填项，设置类型protected_branches保护分支 protected_tags保护tag push_rules推送规则 merge_requests合并请求 mr_branch_policies合并分支 reviews检视意见 e2e_settings e2e设置 webhook_settings hook设置 deploy_keys 部署key watermark水印 repository_settings仓库设置。
    *
    * @return string
    */
    public function getSettingType()
    {
        return $this->container['settingType'];
    }

    /**
    * Sets settingType
    *
    * @param string $settingType **参数解释：** 必填项，设置类型protected_branches保护分支 protected_tags保护tag push_rules推送规则 merge_requests合并请求 mr_branch_policies合并分支 reviews检视意见 e2e_settings e2e设置 webhook_settings hook设置 deploy_keys 部署key watermark水印 repository_settings仓库设置。
    *
    * @return $this
    */
    public function setSettingType($settingType)
    {
        $this->container['settingType'] = $settingType;
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

