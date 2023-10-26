<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnTopics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'smn_topics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。显示名的长度为192byte或64个中文。默认值为空。
    * name  创建topic的名字。Topic名称只能包含大写字母、小写字母、数字、-和_，且必须由大写字母、小写字母或数字开头，长度为1到255个字符。
    * pushPolicy  SMN消息推送策略。取值为0或1
    * status  topic中订阅者的状态。0:主题已删除或主题下订阅列表为空。1:主题下的订阅列表存在状态为“已订阅”的订阅信息。2:主题下的订阅信息状态处于“未订阅”或“已取消”。
    * topicUrn  Topic的唯一的资源标识。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'name' => 'string',
            'pushPolicy' => 'int',
            'status' => 'int',
            'topicUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。显示名的长度为192byte或64个中文。默认值为空。
    * name  创建topic的名字。Topic名称只能包含大写字母、小写字母、数字、-和_，且必须由大写字母、小写字母或数字开头，长度为1到255个字符。
    * pushPolicy  SMN消息推送策略。取值为0或1
    * status  topic中订阅者的状态。0:主题已删除或主题下订阅列表为空。1:主题下的订阅列表存在状态为“已订阅”的订阅信息。2:主题下的订阅信息状态处于“未订阅”或“已取消”。
    * topicUrn  Topic的唯一的资源标识。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'name' => null,
        'pushPolicy' => 'int32',
        'status' => 'int32',
        'topicUrn' => null
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
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。显示名的长度为192byte或64个中文。默认值为空。
    * name  创建topic的名字。Topic名称只能包含大写字母、小写字母、数字、-和_，且必须由大写字母、小写字母或数字开头，长度为1到255个字符。
    * pushPolicy  SMN消息推送策略。取值为0或1
    * status  topic中订阅者的状态。0:主题已删除或主题下订阅列表为空。1:主题下的订阅列表存在状态为“已订阅”的订阅信息。2:主题下的订阅信息状态处于“未订阅”或“已取消”。
    * topicUrn  Topic的唯一的资源标识。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'display_name',
            'name' => 'name',
            'pushPolicy' => 'push_policy',
            'status' => 'status',
            'topicUrn' => 'topic_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。显示名的长度为192byte或64个中文。默认值为空。
    * name  创建topic的名字。Topic名称只能包含大写字母、小写字母、数字、-和_，且必须由大写字母、小写字母或数字开头，长度为1到255个字符。
    * pushPolicy  SMN消息推送策略。取值为0或1
    * status  topic中订阅者的状态。0:主题已删除或主题下订阅列表为空。1:主题下的订阅列表存在状态为“已订阅”的订阅信息。2:主题下的订阅信息状态处于“未订阅”或“已取消”。
    * topicUrn  Topic的唯一的资源标识。
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'name' => 'setName',
            'pushPolicy' => 'setPushPolicy',
            'status' => 'setStatus',
            'topicUrn' => 'setTopicUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。显示名的长度为192byte或64个中文。默认值为空。
    * name  创建topic的名字。Topic名称只能包含大写字母、小写字母、数字、-和_，且必须由大写字母、小写字母或数字开头，长度为1到255个字符。
    * pushPolicy  SMN消息推送策略。取值为0或1
    * status  topic中订阅者的状态。0:主题已删除或主题下订阅列表为空。1:主题下的订阅列表存在状态为“已订阅”的订阅信息。2:主题下的订阅信息状态处于“未订阅”或“已取消”。
    * topicUrn  Topic的唯一的资源标识。
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'name' => 'getName',
            'pushPolicy' => 'getPushPolicy',
            'status' => 'getStatus',
            'topicUrn' => 'getTopicUrn'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
            self::STATUS_2,
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pushPolicy'] = isset($data['pushPolicy']) ? $data['pushPolicy'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 64)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pushPolicy'] === null) {
            $invalidProperties[] = "'pushPolicy' can't be null";
        }
            if (($this->container['pushPolicy'] > 1)) {
                $invalidProperties[] = "invalid value for 'pushPolicy', must be smaller than or equal to 1.";
            }
            if (($this->container['pushPolicy'] < 0)) {
                $invalidProperties[] = "invalid value for 'pushPolicy', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
            if ((mb_strlen($this->container['topicUrn']) > 100)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['topicUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 1.";
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
    * Gets displayName
    *  Topic的显示名，推送邮件消息时，作为邮件发件人显示。显示名的长度为192byte或64个中文。默认值为空。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName Topic的显示名，推送邮件消息时，作为邮件发件人显示。显示名的长度为192byte或64个中文。默认值为空。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets name
    *  创建topic的名字。Topic名称只能包含大写字母、小写字母、数字、-和_，且必须由大写字母、小写字母或数字开头，长度为1到255个字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 创建topic的名字。Topic名称只能包含大写字母、小写字母、数字、-和_，且必须由大写字母、小写字母或数字开头，长度为1到255个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets pushPolicy
    *  SMN消息推送策略。取值为0或1
    *
    * @return int
    */
    public function getPushPolicy()
    {
        return $this->container['pushPolicy'];
    }

    /**
    * Sets pushPolicy
    *
    * @param int $pushPolicy SMN消息推送策略。取值为0或1
    *
    * @return $this
    */
    public function setPushPolicy($pushPolicy)
    {
        $this->container['pushPolicy'] = $pushPolicy;
        return $this;
    }

    /**
    * Gets status
    *  topic中订阅者的状态。0:主题已删除或主题下订阅列表为空。1:主题下的订阅列表存在状态为“已订阅”的订阅信息。2:主题下的订阅信息状态处于“未订阅”或“已取消”。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status topic中订阅者的状态。0:主题已删除或主题下订阅列表为空。1:主题下的订阅列表存在状态为“已订阅”的订阅信息。2:主题下的订阅信息状态处于“未订阅”或“已取消”。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets topicUrn
    *  Topic的唯一的资源标识。
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
    * @param string $topicUrn Topic的唯一的资源标识。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
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

