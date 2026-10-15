<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateSmnTopicReqV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateSmnTopicReqV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  主题资源标识
    * incrementDelayThreshold  增量时延阈值, 单位：秒（s）
    * rtoDelayThreshold  RTO时延阈值，灾备场景下可配置，单位：秒（s）
    * rpoDelayThreshold  RPO时延阈值，灾备场景下可配置，单位：秒（s）
    * isAlarmToUser  异常告警是否通知用户，取值范围[true,false]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'incrementDelayThreshold' => 'int',
            'rtoDelayThreshold' => 'int',
            'rpoDelayThreshold' => 'int',
            'isAlarmToUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  主题资源标识
    * incrementDelayThreshold  增量时延阈值, 单位：秒（s）
    * rtoDelayThreshold  RTO时延阈值，灾备场景下可配置，单位：秒（s）
    * rpoDelayThreshold  RPO时延阈值，灾备场景下可配置，单位：秒（s）
    * isAlarmToUser  异常告警是否通知用户，取值范围[true,false]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'incrementDelayThreshold' => 'int64',
        'rtoDelayThreshold' => 'int64',
        'rpoDelayThreshold' => 'int64',
        'isAlarmToUser' => null
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
    * topicUrn  主题资源标识
    * incrementDelayThreshold  增量时延阈值, 单位：秒（s）
    * rtoDelayThreshold  RTO时延阈值，灾备场景下可配置，单位：秒（s）
    * rpoDelayThreshold  RPO时延阈值，灾备场景下可配置，单位：秒（s）
    * isAlarmToUser  异常告警是否通知用户，取值范围[true,false]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'incrementDelayThreshold' => 'increment_delay_threshold',
            'rtoDelayThreshold' => 'rto_delay_threshold',
            'rpoDelayThreshold' => 'rpo_delay_threshold',
            'isAlarmToUser' => 'is_alarm_to_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  主题资源标识
    * incrementDelayThreshold  增量时延阈值, 单位：秒（s）
    * rtoDelayThreshold  RTO时延阈值，灾备场景下可配置，单位：秒（s）
    * rpoDelayThreshold  RPO时延阈值，灾备场景下可配置，单位：秒（s）
    * isAlarmToUser  异常告警是否通知用户，取值范围[true,false]
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'incrementDelayThreshold' => 'setIncrementDelayThreshold',
            'rtoDelayThreshold' => 'setRtoDelayThreshold',
            'rpoDelayThreshold' => 'setRpoDelayThreshold',
            'isAlarmToUser' => 'setIsAlarmToUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  主题资源标识
    * incrementDelayThreshold  增量时延阈值, 单位：秒（s）
    * rtoDelayThreshold  RTO时延阈值，灾备场景下可配置，单位：秒（s）
    * rpoDelayThreshold  RPO时延阈值，灾备场景下可配置，单位：秒（s）
    * isAlarmToUser  异常告警是否通知用户，取值范围[true,false]
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'incrementDelayThreshold' => 'getIncrementDelayThreshold',
            'rtoDelayThreshold' => 'getRtoDelayThreshold',
            'rpoDelayThreshold' => 'getRpoDelayThreshold',
            'isAlarmToUser' => 'getIsAlarmToUser'
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
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['incrementDelayThreshold'] = isset($data['incrementDelayThreshold']) ? $data['incrementDelayThreshold'] : null;
        $this->container['rtoDelayThreshold'] = isset($data['rtoDelayThreshold']) ? $data['rtoDelayThreshold'] : null;
        $this->container['rpoDelayThreshold'] = isset($data['rpoDelayThreshold']) ? $data['rpoDelayThreshold'] : null;
        $this->container['isAlarmToUser'] = isset($data['isAlarmToUser']) ? $data['isAlarmToUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['isAlarmToUser'] === null) {
            $invalidProperties[] = "'isAlarmToUser' can't be null";
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
    * Gets topicUrn
    *  主题资源标识
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
    * @param string $topicUrn 主题资源标识
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets incrementDelayThreshold
    *  增量时延阈值, 单位：秒（s）
    *
    * @return int|null
    */
    public function getIncrementDelayThreshold()
    {
        return $this->container['incrementDelayThreshold'];
    }

    /**
    * Sets incrementDelayThreshold
    *
    * @param int|null $incrementDelayThreshold 增量时延阈值, 单位：秒（s）
    *
    * @return $this
    */
    public function setIncrementDelayThreshold($incrementDelayThreshold)
    {
        $this->container['incrementDelayThreshold'] = $incrementDelayThreshold;
        return $this;
    }

    /**
    * Gets rtoDelayThreshold
    *  RTO时延阈值，灾备场景下可配置，单位：秒（s）
    *
    * @return int|null
    */
    public function getRtoDelayThreshold()
    {
        return $this->container['rtoDelayThreshold'];
    }

    /**
    * Sets rtoDelayThreshold
    *
    * @param int|null $rtoDelayThreshold RTO时延阈值，灾备场景下可配置，单位：秒（s）
    *
    * @return $this
    */
    public function setRtoDelayThreshold($rtoDelayThreshold)
    {
        $this->container['rtoDelayThreshold'] = $rtoDelayThreshold;
        return $this;
    }

    /**
    * Gets rpoDelayThreshold
    *  RPO时延阈值，灾备场景下可配置，单位：秒（s）
    *
    * @return int|null
    */
    public function getRpoDelayThreshold()
    {
        return $this->container['rpoDelayThreshold'];
    }

    /**
    * Sets rpoDelayThreshold
    *
    * @param int|null $rpoDelayThreshold RPO时延阈值，灾备场景下可配置，单位：秒（s）
    *
    * @return $this
    */
    public function setRpoDelayThreshold($rpoDelayThreshold)
    {
        $this->container['rpoDelayThreshold'] = $rpoDelayThreshold;
        return $this;
    }

    /**
    * Gets isAlarmToUser
    *  异常告警是否通知用户，取值范围[true,false]
    *
    * @return bool
    */
    public function getIsAlarmToUser()
    {
        return $this->container['isAlarmToUser'];
    }

    /**
    * Sets isAlarmToUser
    *
    * @param bool $isAlarmToUser 异常告警是否通知用户，取值范围[true,false]
    *
    * @return $this
    */
    public function setIsAlarmToUser($isAlarmToUser)
    {
        $this->container['isAlarmToUser'] = $isAlarmToUser;
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

