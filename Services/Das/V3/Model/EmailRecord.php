<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EmailRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EmailRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sendAt  发送时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * instanceHealthReportList  实例诊断报告列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sendAt' => 'int',
            'sendStatus' => 'int',
            'email' => 'string',
            'topic' => 'string',
            'topicUrn' => 'string',
            'instanceHealthReportList' => '\HuaweiCloud\SDK\Das\V3\Model\InstanceHealthReport[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sendAt  发送时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * instanceHealthReportList  实例诊断报告列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sendAt' => 'int64',
        'sendStatus' => 'int32',
        'email' => null,
        'topic' => null,
        'topicUrn' => null,
        'instanceHealthReportList' => null
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
    * sendAt  发送时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * instanceHealthReportList  实例诊断报告列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sendAt' => 'send_at',
            'sendStatus' => 'send_status',
            'email' => 'email',
            'topic' => 'topic',
            'topicUrn' => 'topic_urn',
            'instanceHealthReportList' => 'instance_health_report_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sendAt  发送时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * instanceHealthReportList  实例诊断报告列表
    *
    * @var string[]
    */
    protected static $setters = [
            'sendAt' => 'setSendAt',
            'sendStatus' => 'setSendStatus',
            'email' => 'setEmail',
            'topic' => 'setTopic',
            'topicUrn' => 'setTopicUrn',
            'instanceHealthReportList' => 'setInstanceHealthReportList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sendAt  发送时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * instanceHealthReportList  实例诊断报告列表
    *
    * @var string[]
    */
    protected static $getters = [
            'sendAt' => 'getSendAt',
            'sendStatus' => 'getSendStatus',
            'email' => 'getEmail',
            'topic' => 'getTopic',
            'topicUrn' => 'getTopicUrn',
            'instanceHealthReportList' => 'getInstanceHealthReportList'
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
        $this->container['sendAt'] = isset($data['sendAt']) ? $data['sendAt'] : null;
        $this->container['sendStatus'] = isset($data['sendStatus']) ? $data['sendStatus'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['instanceHealthReportList'] = isset($data['instanceHealthReportList']) ? $data['instanceHealthReportList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sendAt'] === null) {
            $invalidProperties[] = "'sendAt' can't be null";
        }
            if (($this->container['sendAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'sendAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['sendAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'sendAt', must be bigger than or equal to 0.";
            }
        if ($this->container['sendStatus'] === null) {
            $invalidProperties[] = "'sendStatus' can't be null";
        }
            if (($this->container['sendStatus'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sendStatus', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['sendStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'sendStatus', must be bigger than or equal to 0.";
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
        if ($this->container['instanceHealthReportList'] === null) {
            $invalidProperties[] = "'instanceHealthReportList' can't be null";
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
    * Gets sendAt
    *  发送时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getSendAt()
    {
        return $this->container['sendAt'];
    }

    /**
    * Sets sendAt
    *
    * @param int $sendAt 发送时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setSendAt($sendAt)
    {
        $this->container['sendAt'] = $sendAt;
        return $this;
    }

    /**
    * Gets sendStatus
    *  发送状态
    *
    * @return int
    */
    public function getSendStatus()
    {
        return $this->container['sendStatus'];
    }

    /**
    * Sets sendStatus
    *
    * @param int $sendStatus 发送状态
    *
    * @return $this
    */
    public function setSendStatus($sendStatus)
    {
        $this->container['sendStatus'] = $sendStatus;
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
    * Gets instanceHealthReportList
    *  实例诊断报告列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InstanceHealthReport[]
    */
    public function getInstanceHealthReportList()
    {
        return $this->container['instanceHealthReportList'];
    }

    /**
    * Sets instanceHealthReportList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InstanceHealthReport[] $instanceHealthReportList 实例诊断报告列表
    *
    * @return $this
    */
    public function setInstanceHealthReportList($instanceHealthReportList)
    {
        $this->container['instanceHealthReportList'] = $instanceHealthReportList;
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

