<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSmnSubscriptionDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSmnSubscriptionDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicName  SMN主题名称
    * topicUrn  SMN主题的唯一资源标识
    * delayTime  延迟时间，单位秒
    * rpoDelay  RPO延迟时间，单位秒
    * rtoDelay  RTO延迟时间，单位秒
    * isAlarmUser  是否发送告警给订阅用户
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicName' => 'string',
            'topicUrn' => 'string',
            'delayTime' => 'int',
            'rpoDelay' => 'int',
            'rtoDelay' => 'int',
            'isAlarmUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicName  SMN主题名称
    * topicUrn  SMN主题的唯一资源标识
    * delayTime  延迟时间，单位秒
    * rpoDelay  RPO延迟时间，单位秒
    * rtoDelay  RTO延迟时间，单位秒
    * isAlarmUser  是否发送告警给订阅用户
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicName' => null,
        'topicUrn' => null,
        'delayTime' => 'int32',
        'rpoDelay' => 'int32',
        'rtoDelay' => 'int32',
        'isAlarmUser' => null
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
    * topicName  SMN主题名称
    * topicUrn  SMN主题的唯一资源标识
    * delayTime  延迟时间，单位秒
    * rpoDelay  RPO延迟时间，单位秒
    * rtoDelay  RTO延迟时间，单位秒
    * isAlarmUser  是否发送告警给订阅用户
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicName' => 'topic_name',
            'topicUrn' => 'topic_urn',
            'delayTime' => 'delay_time',
            'rpoDelay' => 'rpo_delay',
            'rtoDelay' => 'rto_delay',
            'isAlarmUser' => 'is_alarm_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicName  SMN主题名称
    * topicUrn  SMN主题的唯一资源标识
    * delayTime  延迟时间，单位秒
    * rpoDelay  RPO延迟时间，单位秒
    * rtoDelay  RTO延迟时间，单位秒
    * isAlarmUser  是否发送告警给订阅用户
    *
    * @var string[]
    */
    protected static $setters = [
            'topicName' => 'setTopicName',
            'topicUrn' => 'setTopicUrn',
            'delayTime' => 'setDelayTime',
            'rpoDelay' => 'setRpoDelay',
            'rtoDelay' => 'setRtoDelay',
            'isAlarmUser' => 'setIsAlarmUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicName  SMN主题名称
    * topicUrn  SMN主题的唯一资源标识
    * delayTime  延迟时间，单位秒
    * rpoDelay  RPO延迟时间，单位秒
    * rtoDelay  RTO延迟时间，单位秒
    * isAlarmUser  是否发送告警给订阅用户
    *
    * @var string[]
    */
    protected static $getters = [
            'topicName' => 'getTopicName',
            'topicUrn' => 'getTopicUrn',
            'delayTime' => 'getDelayTime',
            'rpoDelay' => 'getRpoDelay',
            'rtoDelay' => 'getRtoDelay',
            'isAlarmUser' => 'getIsAlarmUser'
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
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['delayTime'] = isset($data['delayTime']) ? $data['delayTime'] : null;
        $this->container['rpoDelay'] = isset($data['rpoDelay']) ? $data['rpoDelay'] : null;
        $this->container['rtoDelay'] = isset($data['rtoDelay']) ? $data['rtoDelay'] : null;
        $this->container['isAlarmUser'] = isset($data['isAlarmUser']) ? $data['isAlarmUser'] : null;
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
    * Gets topicName
    *  SMN主题名称
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
    * @param string|null $topicName SMN主题名称
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  SMN主题的唯一资源标识
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
    * @param string|null $topicUrn SMN主题的唯一资源标识
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets delayTime
    *  延迟时间，单位秒
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
    * @param int|null $delayTime 延迟时间，单位秒
    *
    * @return $this
    */
    public function setDelayTime($delayTime)
    {
        $this->container['delayTime'] = $delayTime;
        return $this;
    }

    /**
    * Gets rpoDelay
    *  RPO延迟时间，单位秒
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
    * @param int|null $rpoDelay RPO延迟时间，单位秒
    *
    * @return $this
    */
    public function setRpoDelay($rpoDelay)
    {
        $this->container['rpoDelay'] = $rpoDelay;
        return $this;
    }

    /**
    * Gets rtoDelay
    *  RTO延迟时间，单位秒
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
    * @param int|null $rtoDelay RTO延迟时间，单位秒
    *
    * @return $this
    */
    public function setRtoDelay($rtoDelay)
    {
        $this->container['rtoDelay'] = $rtoDelay;
        return $this;
    }

    /**
    * Gets isAlarmUser
    *  是否发送告警给订阅用户
    *
    * @return bool|null
    */
    public function getIsAlarmUser()
    {
        return $this->container['isAlarmUser'];
    }

    /**
    * Sets isAlarmUser
    *
    * @param bool|null $isAlarmUser 是否发送告警给订阅用户
    *
    * @return $this
    */
    public function setIsAlarmUser($isAlarmUser)
    {
        $this->container['isAlarmUser'] = $isAlarmUser;
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

