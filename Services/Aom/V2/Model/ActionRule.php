<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  规则名称 只含有汉字数字、字母、下划线，不能以下划线等特殊符号开头和结尾，长度为 1 - 100
    * projectId  项目ID
    * userName  子账号名称
    * desc  规则描述。规则描述长度为0到1024个字符，并且只能是数字、字母、特殊字符（_*）、空格和中文组成，不能以下划线开头和结尾。
    * type  规则类型。\"1\"：通知，\"2\"：用户
    * notificationTemplate  消息模板
    * createTime  创建时间
    * updateTime  修改时间
    * timeZone  时区
    * smnTopics  SMN主题信息，不能大于5
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'projectId' => 'string',
            'userName' => 'string',
            'desc' => 'string',
            'type' => 'string',
            'notificationTemplate' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'timeZone' => 'string',
            'smnTopics' => '\HuaweiCloud\SDK\Aom\V2\Model\SmnTopics[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  规则名称 只含有汉字数字、字母、下划线，不能以下划线等特殊符号开头和结尾，长度为 1 - 100
    * projectId  项目ID
    * userName  子账号名称
    * desc  规则描述。规则描述长度为0到1024个字符，并且只能是数字、字母、特殊字符（_*）、空格和中文组成，不能以下划线开头和结尾。
    * type  规则类型。\"1\"：通知，\"2\"：用户
    * notificationTemplate  消息模板
    * createTime  创建时间
    * updateTime  修改时间
    * timeZone  时区
    * smnTopics  SMN主题信息，不能大于5
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'projectId' => null,
        'userName' => null,
        'desc' => null,
        'type' => null,
        'notificationTemplate' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'timeZone' => null,
        'smnTopics' => null
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
    * ruleName  规则名称 只含有汉字数字、字母、下划线，不能以下划线等特殊符号开头和结尾，长度为 1 - 100
    * projectId  项目ID
    * userName  子账号名称
    * desc  规则描述。规则描述长度为0到1024个字符，并且只能是数字、字母、特殊字符（_*）、空格和中文组成，不能以下划线开头和结尾。
    * type  规则类型。\"1\"：通知，\"2\"：用户
    * notificationTemplate  消息模板
    * createTime  创建时间
    * updateTime  修改时间
    * timeZone  时区
    * smnTopics  SMN主题信息，不能大于5
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'projectId' => 'project_id',
            'userName' => 'user_name',
            'desc' => 'desc',
            'type' => 'type',
            'notificationTemplate' => 'notification_template',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'timeZone' => 'time_zone',
            'smnTopics' => 'smn_topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  规则名称 只含有汉字数字、字母、下划线，不能以下划线等特殊符号开头和结尾，长度为 1 - 100
    * projectId  项目ID
    * userName  子账号名称
    * desc  规则描述。规则描述长度为0到1024个字符，并且只能是数字、字母、特殊字符（_*）、空格和中文组成，不能以下划线开头和结尾。
    * type  规则类型。\"1\"：通知，\"2\"：用户
    * notificationTemplate  消息模板
    * createTime  创建时间
    * updateTime  修改时间
    * timeZone  时区
    * smnTopics  SMN主题信息，不能大于5
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'projectId' => 'setProjectId',
            'userName' => 'setUserName',
            'desc' => 'setDesc',
            'type' => 'setType',
            'notificationTemplate' => 'setNotificationTemplate',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'timeZone' => 'setTimeZone',
            'smnTopics' => 'setSmnTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  规则名称 只含有汉字数字、字母、下划线，不能以下划线等特殊符号开头和结尾，长度为 1 - 100
    * projectId  项目ID
    * userName  子账号名称
    * desc  规则描述。规则描述长度为0到1024个字符，并且只能是数字、字母、特殊字符（_*）、空格和中文组成，不能以下划线开头和结尾。
    * type  规则类型。\"1\"：通知，\"2\"：用户
    * notificationTemplate  消息模板
    * createTime  创建时间
    * updateTime  修改时间
    * timeZone  时区
    * smnTopics  SMN主题信息，不能大于5
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'projectId' => 'getProjectId',
            'userName' => 'getUserName',
            'desc' => 'getDesc',
            'type' => 'getType',
            'notificationTemplate' => 'getNotificationTemplate',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'timeZone' => 'getTimeZone',
            'smnTopics' => 'getSmnTopics'
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
    const TYPE__1 = '1';
    const TYPE__2 = '2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__1,
            self::TYPE__2,
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['notificationTemplate'] = isset($data['notificationTemplate']) ? $data['notificationTemplate'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['smnTopics'] = isset($data['smnTopics']) ? $data['smnTopics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
            if ((mb_strlen($this->container['ruleName']) > 100)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 100)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 1024)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['type']) > 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 1.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['notificationTemplate'] === null) {
            $invalidProperties[] = "'notificationTemplate' can't be null";
        }
            if ((mb_strlen($this->container['notificationTemplate']) > 100)) {
                $invalidProperties[] = "invalid value for 'notificationTemplate', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['notificationTemplate']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationTemplate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 100)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['smnTopics'] === null) {
            $invalidProperties[] = "'smnTopics' can't be null";
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
    * Gets ruleName
    *  规则名称 只含有汉字数字、字母、下划线，不能以下划线等特殊符号开头和结尾，长度为 1 - 100
    *
    * @return string
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string $ruleName 规则名称 只含有汉字数字、字母、下划线，不能以下划线等特殊符号开头和结尾，长度为 1 - 100
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets userName
    *  子账号名称
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 子账号名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets desc
    *  规则描述。规则描述长度为0到1024个字符，并且只能是数字、字母、特殊字符（_*）、空格和中文组成，不能以下划线开头和结尾。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 规则描述。规则描述长度为0到1024个字符，并且只能是数字、字母、特殊字符（_*）、空格和中文组成，不能以下划线开头和结尾。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets type
    *  规则类型。\"1\"：通知，\"2\"：用户
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 规则类型。\"1\"：通知，\"2\"：用户
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets notificationTemplate
    *  消息模板
    *
    * @return string
    */
    public function getNotificationTemplate()
    {
        return $this->container['notificationTemplate'];
    }

    /**
    * Sets notificationTemplate
    *
    * @param string $notificationTemplate 消息模板
    *
    * @return $this
    */
    public function setNotificationTemplate($notificationTemplate)
    {
        $this->container['notificationTemplate'] = $notificationTemplate;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
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
    *  修改时间
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
    * @param int|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets smnTopics
    *  SMN主题信息，不能大于5
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\SmnTopics[]
    */
    public function getSmnTopics()
    {
        return $this->container['smnTopics'];
    }

    /**
    * Sets smnTopics
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\SmnTopics[] $smnTopics SMN主题信息，不能大于5
    *
    * @return $this
    */
    public function setSmnTopics($smnTopics)
    {
        $this->container['smnTopics'] = $smnTopics;
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

