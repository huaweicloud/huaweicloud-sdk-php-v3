<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuerySmnInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuerySmnInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptions  SMN信息
    * topicName  主题名称
    * delayTime  订阅延迟时间
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptions' => '\HuaweiCloud\SDK\Drs\V3\Model\SubscriptionInfo[]',
            'topicName' => 'string',
            'delayTime' => 'int',
            'rtoDelay' => 'int',
            'rpoDelay' => 'int',
            'alarmToUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptions  SMN信息
    * topicName  主题名称
    * delayTime  订阅延迟时间
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptions' => null,
        'topicName' => null,
        'delayTime' => 'int64',
        'rtoDelay' => 'int64',
        'rpoDelay' => 'int64',
        'alarmToUser' => null
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
    * subscriptions  SMN信息
    * topicName  主题名称
    * delayTime  订阅延迟时间
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptions' => 'subscriptions',
            'topicName' => 'topic_name',
            'delayTime' => 'delay_time',
            'rtoDelay' => 'rto_delay',
            'rpoDelay' => 'rpo_delay',
            'alarmToUser' => 'alarm_to_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptions  SMN信息
    * topicName  主题名称
    * delayTime  订阅延迟时间
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptions' => 'setSubscriptions',
            'topicName' => 'setTopicName',
            'delayTime' => 'setDelayTime',
            'rtoDelay' => 'setRtoDelay',
            'rpoDelay' => 'setRpoDelay',
            'alarmToUser' => 'setAlarmToUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptions  SMN信息
    * topicName  主题名称
    * delayTime  订阅延迟时间
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptions' => 'getSubscriptions',
            'topicName' => 'getTopicName',
            'delayTime' => 'getDelayTime',
            'rtoDelay' => 'getRtoDelay',
            'rpoDelay' => 'getRpoDelay',
            'alarmToUser' => 'getAlarmToUser'
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
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['delayTime'] = isset($data['delayTime']) ? $data['delayTime'] : null;
        $this->container['rtoDelay'] = isset($data['rtoDelay']) ? $data['rtoDelay'] : null;
        $this->container['rpoDelay'] = isset($data['rpoDelay']) ? $data['rpoDelay'] : null;
        $this->container['alarmToUser'] = isset($data['alarmToUser']) ? $data['alarmToUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets subscriptions
    *  SMN信息
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\SubscriptionInfo[]|null
    */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
    * Sets subscriptions
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\SubscriptionInfo[]|null $subscriptions SMN信息
    *
    * @return $this
    */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;
        return $this;
    }

    /**
    * Gets topicName
    *  主题名称
    *
    * @return string|null
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string|null $topicName 主题名称
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets delayTime
    *  订阅延迟时间
    *
    * @return int|null
    */
    public function getDelayTime()
    {
        return $this->container['delayTime'];
    }

    /**
    * Sets delayTime
    *
    * @param int|null $delayTime 订阅延迟时间
    *
    * @return $this
    */
    public function setDelayTime($delayTime)
    {
        $this->container['delayTime'] = $delayTime;
        return $this;
    }

    /**
    * Gets rtoDelay
    *  rto延迟时间
    *
    * @return int|null
    */
    public function getRtoDelay()
    {
        return $this->container['rtoDelay'];
    }

    /**
    * Sets rtoDelay
    *
    * @param int|null $rtoDelay rto延迟时间
    *
    * @return $this
    */
    public function setRtoDelay($rtoDelay)
    {
        $this->container['rtoDelay'] = $rtoDelay;
        return $this;
    }

    /**
    * Gets rpoDelay
    *  rpo延迟时间
    *
    * @return int|null
    */
    public function getRpoDelay()
    {
        return $this->container['rpoDelay'];
    }

    /**
    * Sets rpoDelay
    *
    * @param int|null $rpoDelay rpo延迟时间
    *
    * @return $this
    */
    public function setRpoDelay($rpoDelay)
    {
        $this->container['rpoDelay'] = $rpoDelay;
        return $this;
    }

    /**
    * Gets alarmToUser
    *  异常告警是否通知用户
    *
    * @return bool|null
    */
    public function getAlarmToUser()
    {
        return $this->container['alarmToUser'];
    }

    /**
    * Sets alarmToUser
    *
    * @param bool|null $alarmToUser 异常告警是否通知用户
    *
    * @return $this
    */
    public function setAlarmToUser($alarmToUser)
    {
        $this->container['alarmToUser'] = $alarmToUser;
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

