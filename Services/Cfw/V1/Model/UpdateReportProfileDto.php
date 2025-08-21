<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateReportProfileDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateReportProfileDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**： 模板描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendPeriod  **参数解释**： 发送时间，日报和周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendWeekDay  **参数解释**： 发送星期，周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * statisticPeriod  statisticPeriod
    * status  **参数解释**： 启用状态 **约束限制**： 不涉及 **取值范围**： 0 关闭 1 启用 **默认取值**： 不涉及
    * topicUrn  **参数解释**： 通知群组 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subscriptionType  **参数解释**： 通知方式 **约束限制**： 不涉及 **取值范围**： 0 SMN通知方式 1 不需要通知 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'name' => 'string',
            'sendPeriod' => 'int',
            'sendWeekDay' => 'int',
            'statisticPeriod' => '\HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod',
            'status' => 'int',
            'topicUrn' => 'string',
            'subscriptionType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**： 模板描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendPeriod  **参数解释**： 发送时间，日报和周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendWeekDay  **参数解释**： 发送星期，周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * statisticPeriod  statisticPeriod
    * status  **参数解释**： 启用状态 **约束限制**： 不涉及 **取值范围**： 0 关闭 1 启用 **默认取值**： 不涉及
    * topicUrn  **参数解释**： 通知群组 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subscriptionType  **参数解释**： 通知方式 **约束限制**： 不涉及 **取值范围**： 0 SMN通知方式 1 不需要通知 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'name' => null,
        'sendPeriod' => 'int32',
        'sendWeekDay' => 'int32',
        'statisticPeriod' => null,
        'status' => 'int32',
        'topicUrn' => null,
        'subscriptionType' => 'int32'
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
    * description  **参数解释**： 模板描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendPeriod  **参数解释**： 发送时间，日报和周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendWeekDay  **参数解释**： 发送星期，周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * statisticPeriod  statisticPeriod
    * status  **参数解释**： 启用状态 **约束限制**： 不涉及 **取值范围**： 0 关闭 1 启用 **默认取值**： 不涉及
    * topicUrn  **参数解释**： 通知群组 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subscriptionType  **参数解释**： 通知方式 **约束限制**： 不涉及 **取值范围**： 0 SMN通知方式 1 不需要通知 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'name' => 'name',
            'sendPeriod' => 'send_period',
            'sendWeekDay' => 'send_week_day',
            'statisticPeriod' => 'statistic_period',
            'status' => 'status',
            'topicUrn' => 'topic_urn',
            'subscriptionType' => 'subscription_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**： 模板描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendPeriod  **参数解释**： 发送时间，日报和周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendWeekDay  **参数解释**： 发送星期，周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * statisticPeriod  statisticPeriod
    * status  **参数解释**： 启用状态 **约束限制**： 不涉及 **取值范围**： 0 关闭 1 启用 **默认取值**： 不涉及
    * topicUrn  **参数解释**： 通知群组 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subscriptionType  **参数解释**： 通知方式 **约束限制**： 不涉及 **取值范围**： 0 SMN通知方式 1 不需要通知 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'name' => 'setName',
            'sendPeriod' => 'setSendPeriod',
            'sendWeekDay' => 'setSendWeekDay',
            'statisticPeriod' => 'setStatisticPeriod',
            'status' => 'setStatus',
            'topicUrn' => 'setTopicUrn',
            'subscriptionType' => 'setSubscriptionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**： 模板描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendPeriod  **参数解释**： 发送时间，日报和周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * sendWeekDay  **参数解释**： 发送星期，周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * statisticPeriod  statisticPeriod
    * status  **参数解释**： 启用状态 **约束限制**： 不涉及 **取值范围**： 0 关闭 1 启用 **默认取值**： 不涉及
    * topicUrn  **参数解释**： 通知群组 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subscriptionType  **参数解释**： 通知方式 **约束限制**： 不涉及 **取值范围**： 0 SMN通知方式 1 不需要通知 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'name' => 'getName',
            'sendPeriod' => 'getSendPeriod',
            'sendWeekDay' => 'getSendWeekDay',
            'statisticPeriod' => 'getStatisticPeriod',
            'status' => 'getStatus',
            'topicUrn' => 'getTopicUrn',
            'subscriptionType' => 'getSubscriptionType'
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
    const SUBSCRIPTION_TYPE_0 = 0;
    const SUBSCRIPTION_TYPE_1 = 1;
    

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
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubscriptionTypeAllowableValues()
    {
        return [
            self::SUBSCRIPTION_TYPE_0,
            self::SUBSCRIPTION_TYPE_1,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sendPeriod'] = isset($data['sendPeriod']) ? $data['sendPeriod'] : null;
        $this->container['sendWeekDay'] = isset($data['sendWeekDay']) ? $data['sendWeekDay'] : null;
        $this->container['statisticPeriod'] = isset($data['statisticPeriod']) ? $data['statisticPeriod'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^$|^[a-zA-Z0-9\\u4E00-\\u9FA5_\\s-]{1,255}/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^$|^[a-zA-Z0-9\\u4E00-\\u9FA5_\\s-]{1,255}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^$|^[a-zA-Z0-9\\u4E00-\\u9FA5_\\s-]{1,255}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^$|^[a-zA-Z0-9\\u4E00-\\u9FA5_\\s-]{1,255}/.";
            }
            if (!is_null($this->container['sendPeriod']) && ($this->container['sendPeriod'] > 23)) {
                $invalidProperties[] = "invalid value for 'sendPeriod', must be smaller than or equal to 23.";
            }
            if (!is_null($this->container['sendPeriod']) && ($this->container['sendPeriod'] < 0)) {
                $invalidProperties[] = "invalid value for 'sendPeriod', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sendWeekDay']) && ($this->container['sendWeekDay'] > 7)) {
                $invalidProperties[] = "invalid value for 'sendWeekDay', must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['sendWeekDay']) && ($this->container['sendWeekDay'] < 1)) {
                $invalidProperties[] = "invalid value for 'sendWeekDay', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSubscriptionTypeAllowableValues();
                if (!is_null($this->container['subscriptionType']) && !in_array($this->container['subscriptionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subscriptionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets description
    *  **参数解释**： 模板描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $description **参数解释**： 模板描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sendPeriod
    *  **参数解释**： 发送时间，日报和周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getSendPeriod()
    {
        return $this->container['sendPeriod'];
    }

    /**
    * Sets sendPeriod
    *
    * @param int|null $sendPeriod **参数解释**： 发送时间，日报和周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSendPeriod($sendPeriod)
    {
        $this->container['sendPeriod'] = $sendPeriod;
        return $this;
    }

    /**
    * Gets sendWeekDay
    *  **参数解释**： 发送星期，周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getSendWeekDay()
    {
        return $this->container['sendWeekDay'];
    }

    /**
    * Sets sendWeekDay
    *
    * @param int|null $sendWeekDay **参数解释**： 发送星期，周报需要设置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSendWeekDay($sendWeekDay)
    {
        $this->container['sendWeekDay'] = $sendWeekDay;
        return $this;
    }

    /**
    * Gets statisticPeriod
    *  statisticPeriod
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod|null
    */
    public function getStatisticPeriod()
    {
        return $this->container['statisticPeriod'];
    }

    /**
    * Sets statisticPeriod
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod|null $statisticPeriod statisticPeriod
    *
    * @return $this
    */
    public function setStatisticPeriod($statisticPeriod)
    {
        $this->container['statisticPeriod'] = $statisticPeriod;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 启用状态 **约束限制**： 不涉及 **取值范围**： 0 关闭 1 启用 **默认取值**： 不涉及
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
    * @param int|null $status **参数解释**： 启用状态 **约束限制**： 不涉及 **取值范围**： 0 关闭 1 启用 **默认取值**： 不涉及
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
    *  **参数解释**： 通知群组 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn **参数解释**： 通知群组 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets subscriptionType
    *  **参数解释**： 通知方式 **约束限制**： 不涉及 **取值范围**： 0 SMN通知方式 1 不需要通知 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getSubscriptionType()
    {
        return $this->container['subscriptionType'];
    }

    /**
    * Sets subscriptionType
    *
    * @param int|null $subscriptionType **参数解释**： 通知方式 **约束限制**： 不涉及 **取值范围**： 0 SMN通知方式 1 不需要通知 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;
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

