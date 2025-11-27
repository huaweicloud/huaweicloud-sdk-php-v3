<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EmailTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EmailTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  邮件模板ID
    * templateName  邮件模板名称
    * datastoreType  数据库类型
    * groupId  实例组ID列表
    * healthRank  健康等级列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * inspectionTime  诊断时间，12:00-12:00（默认）或00:00-00:00
    * sendTime  发送时间
    * timeZone  时区
    * updateAt  更新时间
    * userId  最后修改人
    * status  邮件模板状态（0-未启用 1-启用 2-删除）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'int',
            'templateName' => 'string',
            'datastoreType' => 'string',
            'groupId' => 'int[]',
            'healthRank' => 'string[]',
            'email' => 'string',
            'topic' => 'string',
            'topicUrn' => 'string',
            'obsBucketName' => 'string',
            'inspectionTime' => 'string',
            'sendTime' => 'string',
            'timeZone' => 'string',
            'updateAt' => 'int',
            'userId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  邮件模板ID
    * templateName  邮件模板名称
    * datastoreType  数据库类型
    * groupId  实例组ID列表
    * healthRank  健康等级列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * inspectionTime  诊断时间，12:00-12:00（默认）或00:00-00:00
    * sendTime  发送时间
    * timeZone  时区
    * updateAt  更新时间
    * userId  最后修改人
    * status  邮件模板状态（0-未启用 1-启用 2-删除）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => 'int32',
        'templateName' => null,
        'datastoreType' => null,
        'groupId' => 'int32',
        'healthRank' => null,
        'email' => null,
        'topic' => null,
        'topicUrn' => null,
        'obsBucketName' => null,
        'inspectionTime' => null,
        'sendTime' => null,
        'timeZone' => null,
        'updateAt' => 'int64',
        'userId' => null,
        'status' => 'int32'
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
    * templateId  邮件模板ID
    * templateName  邮件模板名称
    * datastoreType  数据库类型
    * groupId  实例组ID列表
    * healthRank  健康等级列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * inspectionTime  诊断时间，12:00-12:00（默认）或00:00-00:00
    * sendTime  发送时间
    * timeZone  时区
    * updateAt  更新时间
    * userId  最后修改人
    * status  邮件模板状态（0-未启用 1-启用 2-删除）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'datastoreType' => 'datastore_type',
            'groupId' => 'group_id',
            'healthRank' => 'health_rank',
            'email' => 'email',
            'topic' => 'topic',
            'topicUrn' => 'topic_urn',
            'obsBucketName' => 'obs_bucket_name',
            'inspectionTime' => 'inspection_time',
            'sendTime' => 'send_time',
            'timeZone' => 'time_zone',
            'updateAt' => 'update_at',
            'userId' => 'user_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  邮件模板ID
    * templateName  邮件模板名称
    * datastoreType  数据库类型
    * groupId  实例组ID列表
    * healthRank  健康等级列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * inspectionTime  诊断时间，12:00-12:00（默认）或00:00-00:00
    * sendTime  发送时间
    * timeZone  时区
    * updateAt  更新时间
    * userId  最后修改人
    * status  邮件模板状态（0-未启用 1-启用 2-删除）
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'datastoreType' => 'setDatastoreType',
            'groupId' => 'setGroupId',
            'healthRank' => 'setHealthRank',
            'email' => 'setEmail',
            'topic' => 'setTopic',
            'topicUrn' => 'setTopicUrn',
            'obsBucketName' => 'setObsBucketName',
            'inspectionTime' => 'setInspectionTime',
            'sendTime' => 'setSendTime',
            'timeZone' => 'setTimeZone',
            'updateAt' => 'setUpdateAt',
            'userId' => 'setUserId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  邮件模板ID
    * templateName  邮件模板名称
    * datastoreType  数据库类型
    * groupId  实例组ID列表
    * healthRank  健康等级列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * inspectionTime  诊断时间，12:00-12:00（默认）或00:00-00:00
    * sendTime  发送时间
    * timeZone  时区
    * updateAt  更新时间
    * userId  最后修改人
    * status  邮件模板状态（0-未启用 1-启用 2-删除）
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'datastoreType' => 'getDatastoreType',
            'groupId' => 'getGroupId',
            'healthRank' => 'getHealthRank',
            'email' => 'getEmail',
            'topic' => 'getTopic',
            'topicUrn' => 'getTopicUrn',
            'obsBucketName' => 'getObsBucketName',
            'inspectionTime' => 'getInspectionTime',
            'sendTime' => 'getSendTime',
            'timeZone' => 'getTimeZone',
            'updateAt' => 'getUpdateAt',
            'userId' => 'getUserId',
            'status' => 'getStatus'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['healthRank'] = isset($data['healthRank']) ? $data['healthRank'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['inspectionTime'] = isset($data['inspectionTime']) ? $data['inspectionTime'] : null;
        $this->container['sendTime'] = isset($data['sendTime']) ? $data['sendTime'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if (($this->container['templateId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'templateId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['templateId'] < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', must be bigger than or equal to 1.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            if ((mb_strlen($this->container['datastoreType']) > 64)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['datastoreType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['healthRank'] === null) {
            $invalidProperties[] = "'healthRank' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
            if ((mb_strlen($this->container['email']) > 1024)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['topic']) < 0)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
            if ((mb_strlen($this->container['topicUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['topicUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['obsBucketName'] === null) {
            $invalidProperties[] = "'obsBucketName' can't be null";
        }
            if ((mb_strlen($this->container['obsBucketName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['obsBucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['inspectionTime'] === null) {
            $invalidProperties[] = "'inspectionTime' can't be null";
        }
            if ((mb_strlen($this->container['inspectionTime']) > 16)) {
                $invalidProperties[] = "invalid value for 'inspectionTime', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['inspectionTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'inspectionTime', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sendTime'] === null) {
            $invalidProperties[] = "'sendTime' can't be null";
        }
            if ((mb_strlen($this->container['sendTime']) > 16)) {
                $invalidProperties[] = "invalid value for 'sendTime', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['sendTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'sendTime', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
        }
            if ((mb_strlen($this->container['timeZone']) > 50)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['timeZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['updateAt'] === null) {
            $invalidProperties[] = "'updateAt' can't be null";
        }
            if (($this->container['updateAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['updateAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be bigger than or equal to 0.";
            }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if (($this->container['status'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['status'] < -2147483648)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -2147483648.";
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
    * Gets templateId
    *  邮件模板ID
    *
    * @return int
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int $templateId 邮件模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateName
    *  邮件模板名称
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 邮件模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 数据库类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets groupId
    *  实例组ID列表
    *
    * @return int[]
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param int[] $groupId 实例组ID列表
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets healthRank
    *  健康等级列表
    *
    * @return string[]
    */
    public function getHealthRank()
    {
        return $this->container['healthRank'];
    }

    /**
    * Sets healthRank
    *
    * @param string[] $healthRank 健康等级列表
    *
    * @return $this
    */
    public function setHealthRank($healthRank)
    {
        $this->container['healthRank'] = $healthRank;
        return $this;
    }

    /**
    * Gets email
    *  邮箱地址
    *
    * @return string
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string $email 邮箱地址
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets topic
    *  主题名称
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic 主题名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题标识符
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn 主题标识符
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  OBS桶名
    *
    * @return string
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string $obsBucketName OBS桶名
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets inspectionTime
    *  诊断时间，12:00-12:00（默认）或00:00-00:00
    *
    * @return string
    */
    public function getInspectionTime()
    {
        return $this->container['inspectionTime'];
    }

    /**
    * Sets inspectionTime
    *
    * @param string $inspectionTime 诊断时间，12:00-12:00（默认）或00:00-00:00
    *
    * @return $this
    */
    public function setInspectionTime($inspectionTime)
    {
        $this->container['inspectionTime'] = $inspectionTime;
        return $this;
    }

    /**
    * Gets sendTime
    *  发送时间
    *
    * @return string
    */
    public function getSendTime()
    {
        return $this->container['sendTime'];
    }

    /**
    * Sets sendTime
    *
    * @param string $sendTime 发送时间
    *
    * @return $this
    */
    public function setSendTime($sendTime)
    {
        $this->container['sendTime'] = $sendTime;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间
    *
    * @return int
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int $updateAt 更新时间
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets userId
    *  最后修改人
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 最后修改人
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets status
    *  邮件模板状态（0-未启用 1-启用 2-删除）
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 邮件模板状态（0-未启用 1-启用 2-删除）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

