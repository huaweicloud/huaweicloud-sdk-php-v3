<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmNotifyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmNotifyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delayTime  订阅延迟时间(单位为s)
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    * subscriptions  收件方式与信息体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delayTime' => 'int',
            'rtoDelay' => 'int',
            'rpoDelay' => 'int',
            'alarmToUser' => 'bool',
            'subscriptions' => '\HuaweiCloud\SDK\Drs\V3\Model\SubscriptionInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delayTime  订阅延迟时间(单位为s)
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    * subscriptions  收件方式与信息体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delayTime' => 'int64',
        'rtoDelay' => 'int64',
        'rpoDelay' => 'int64',
        'alarmToUser' => null,
        'subscriptions' => null
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
    * delayTime  订阅延迟时间(单位为s)
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    * subscriptions  收件方式与信息体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delayTime' => 'delay_time',
            'rtoDelay' => 'rto_delay',
            'rpoDelay' => 'rpo_delay',
            'alarmToUser' => 'alarm_to_user',
            'subscriptions' => 'subscriptions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delayTime  订阅延迟时间(单位为s)
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    * subscriptions  收件方式与信息体
    *
    * @var string[]
    */
    protected static $setters = [
            'delayTime' => 'setDelayTime',
            'rtoDelay' => 'setRtoDelay',
            'rpoDelay' => 'setRpoDelay',
            'alarmToUser' => 'setAlarmToUser',
            'subscriptions' => 'setSubscriptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delayTime  订阅延迟时间(单位为s)
    * rtoDelay  rto延迟时间
    * rpoDelay  rpo延迟时间
    * alarmToUser  异常告警是否通知用户
    * subscriptions  收件方式与信息体
    *
    * @var string[]
    */
    protected static $getters = [
            'delayTime' => 'getDelayTime',
            'rtoDelay' => 'getRtoDelay',
            'rpoDelay' => 'getRpoDelay',
            'alarmToUser' => 'getAlarmToUser',
            'subscriptions' => 'getSubscriptions'
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
        $this->container['delayTime'] = isset($data['delayTime']) ? $data['delayTime'] : 0;
        $this->container['rtoDelay'] = isset($data['rtoDelay']) ? $data['rtoDelay'] : 0;
        $this->container['rpoDelay'] = isset($data['rpoDelay']) ? $data['rpoDelay'] : 0;
        $this->container['alarmToUser'] = isset($data['alarmToUser']) ? $data['alarmToUser'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['delayTime']) && ($this->container['delayTime'] > 3600)) {
                $invalidProperties[] = "invalid value for 'delayTime', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['delayTime']) && ($this->container['delayTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'delayTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rtoDelay']) && ($this->container['rtoDelay'] > 3600)) {
                $invalidProperties[] = "invalid value for 'rtoDelay', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['rtoDelay']) && ($this->container['rtoDelay'] < 1)) {
                $invalidProperties[] = "invalid value for 'rtoDelay', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rpoDelay']) && ($this->container['rpoDelay'] > 3600)) {
                $invalidProperties[] = "invalid value for 'rpoDelay', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['rpoDelay']) && ($this->container['rpoDelay'] < 1)) {
                $invalidProperties[] = "invalid value for 'rpoDelay', must be bigger than or equal to 1.";
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
    * Gets delayTime
    *  订阅延迟时间(单位为s)
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
    * @param int|null $delayTime 订阅延迟时间(单位为s)
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
    * Gets subscriptions
    *  收件方式与信息体
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\SubscriptionInfo[]|null $subscriptions 收件方式与信息体
    *
    * @return $this
    */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;
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

