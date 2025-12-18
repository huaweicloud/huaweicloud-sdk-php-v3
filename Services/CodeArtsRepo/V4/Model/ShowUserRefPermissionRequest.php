<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserRefPermissionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserRefPermissionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetRef  **参数解释：** 分支或者标签名称。  **约束限制：** 不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾，分支以refs/head/开头，标签以refs/tag/开头  **取值范围：** 字符串长度不少于1，不超过210。 **默认取值：** 不涉及。
    * action  **参数解释：** 动作类型，可用于查询指定动作的权限 - read，查看 - review，检视 - approval, 审核 - create-change，创建变更请求 - merge，合并变更请求 - create-delete，创建/删除分支 - push, 推送
    * changeRequestIid  **参数解释：** 变更请求在仓库内部的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'targetRef' => 'string',
            'action' => 'string',
            'changeRequestIid' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetRef  **参数解释：** 分支或者标签名称。  **约束限制：** 不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾，分支以refs/head/开头，标签以refs/tag/开头  **取值范围：** 字符串长度不少于1，不超过210。 **默认取值：** 不涉及。
    * action  **参数解释：** 动作类型，可用于查询指定动作的权限 - read，查看 - review，检视 - approval, 审核 - create-change，创建变更请求 - merge，合并变更请求 - create-delete，创建/删除分支 - push, 推送
    * changeRequestIid  **参数解释：** 变更请求在仓库内部的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'targetRef' => null,
        'action' => null,
        'changeRequestIid' => null
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetRef  **参数解释：** 分支或者标签名称。  **约束限制：** 不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾，分支以refs/head/开头，标签以refs/tag/开头  **取值范围：** 字符串长度不少于1，不超过210。 **默认取值：** 不涉及。
    * action  **参数解释：** 动作类型，可用于查询指定动作的权限 - read，查看 - review，检视 - approval, 审核 - create-change，创建变更请求 - merge，合并变更请求 - create-delete，创建/删除分支 - push, 推送
    * changeRequestIid  **参数解释：** 变更请求在仓库内部的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'targetRef' => 'target_ref',
            'action' => 'action',
            'changeRequestIid' => 'change_request_iid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetRef  **参数解释：** 分支或者标签名称。  **约束限制：** 不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾，分支以refs/head/开头，标签以refs/tag/开头  **取值范围：** 字符串长度不少于1，不超过210。 **默认取值：** 不涉及。
    * action  **参数解释：** 动作类型，可用于查询指定动作的权限 - read，查看 - review，检视 - approval, 审核 - create-change，创建变更请求 - merge，合并变更请求 - create-delete，创建/删除分支 - push, 推送
    * changeRequestIid  **参数解释：** 变更请求在仓库内部的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'targetRef' => 'setTargetRef',
            'action' => 'setAction',
            'changeRequestIid' => 'setChangeRequestIid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetRef  **参数解释：** 分支或者标签名称。  **约束限制：** 不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾，分支以refs/head/开头，标签以refs/tag/开头  **取值范围：** 字符串长度不少于1，不超过210。 **默认取值：** 不涉及。
    * action  **参数解释：** 动作类型，可用于查询指定动作的权限 - read，查看 - review，检视 - approval, 审核 - create-change，创建变更请求 - merge，合并变更请求 - create-delete，创建/删除分支 - push, 推送
    * changeRequestIid  **参数解释：** 变更请求在仓库内部的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'targetRef' => 'getTargetRef',
            'action' => 'getAction',
            'changeRequestIid' => 'getChangeRequestIid'
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
    const ACTION_READ = 'read';
    const ACTION_REVIEW = 'review';
    const ACTION_APPROVAL = 'approval';
    const ACTION_CREATE_CHANGE = 'create-change';
    const ACTION_MERGE = 'merge';
    const ACTION_CREATE_DELETE = 'create-delete';
    const ACTION_PUSH = 'push';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_READ,
            self::ACTION_REVIEW,
            self::ACTION_APPROVAL,
            self::ACTION_CREATE_CHANGE,
            self::ACTION_MERGE,
            self::ACTION_CREATE_DELETE,
            self::ACTION_PUSH,
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['targetRef'] = isset($data['targetRef']) ? $data['targetRef'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['changeRequestIid'] = isset($data['changeRequestIid']) ? $data['changeRequestIid'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
            if (($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
        if ($this->container['targetRef'] === null) {
            $invalidProperties[] = "'targetRef' can't be null";
        }
            if ((mb_strlen($this->container['targetRef']) > 210)) {
                $invalidProperties[] = "invalid value for 'targetRef', the character length must be smaller than or equal to 210.";
            }
            if ((mb_strlen($this->container['targetRef']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetRef', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['changeRequestIid']) && ($this->container['changeRequestIid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeRequestIid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeRequestIid']) && ($this->container['changeRequestIid'] < 1)) {
                $invalidProperties[] = "invalid value for 'changeRequestIid', must be bigger than or equal to 1.";
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
    * Gets repositoryId
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return int
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets targetRef
    *  **参数解释：** 分支或者标签名称。  **约束限制：** 不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾，分支以refs/head/开头，标签以refs/tag/开头  **取值范围：** 字符串长度不少于1，不超过210。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getTargetRef()
    {
        return $this->container['targetRef'];
    }

    /**
    * Sets targetRef
    *
    * @param string $targetRef **参数解释：** 分支或者标签名称。  **约束限制：** 不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾，分支以refs/head/开头，标签以refs/tag/开头  **取值范围：** 字符串长度不少于1，不超过210。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTargetRef($targetRef)
    {
        $this->container['targetRef'] = $targetRef;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释：** 动作类型，可用于查询指定动作的权限 - read，查看 - review，检视 - approval, 审核 - create-change，创建变更请求 - merge，合并变更请求 - create-delete，创建/删除分支 - push, 推送
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释：** 动作类型，可用于查询指定动作的权限 - read，查看 - review，检视 - approval, 审核 - create-change，创建变更请求 - merge，合并变更请求 - create-delete，创建/删除分支 - push, 推送
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets changeRequestIid
    *  **参数解释：** 变更请求在仓库内部的ID。
    *
    * @return int|null
    */
    public function getChangeRequestIid()
    {
        return $this->container['changeRequestIid'];
    }

    /**
    * Sets changeRequestIid
    *
    * @param int|null $changeRequestIid **参数解释：** 变更请求在仓库内部的ID。
    *
    * @return $this
    */
    public function setChangeRequestIid($changeRequestIid)
    {
        $this->container['changeRequestIid'] = $changeRequestIid;
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

