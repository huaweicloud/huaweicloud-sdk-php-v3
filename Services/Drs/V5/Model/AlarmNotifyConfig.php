<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmNotifyConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmNotifyConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmToUser  异常告警是否通知用户。
    * topicUrn  SMN主题URN。
    * delayTime  时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： 1.源数据库和目标数据库之间的同步有时会存在一个时间差，称为时延，单位为秒。 2.时延阈值设置是指时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量迁移阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。） 3.只有全量+增量的任务支持此选项。
    * rpoDelay  RPO时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RPO时延阈值设置是业务数据库与DRS实例间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量灾备阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。）
    * rtoDelay  RTO时延阈值(s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RTO时延阈值设置是DRS实例与灾备数据库间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmToUser' => 'bool',
            'topicUrn' => 'string',
            'delayTime' => 'int',
            'rpoDelay' => 'int',
            'rtoDelay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmToUser  异常告警是否通知用户。
    * topicUrn  SMN主题URN。
    * delayTime  时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： 1.源数据库和目标数据库之间的同步有时会存在一个时间差，称为时延，单位为秒。 2.时延阈值设置是指时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量迁移阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。） 3.只有全量+增量的任务支持此选项。
    * rpoDelay  RPO时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RPO时延阈值设置是业务数据库与DRS实例间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量灾备阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。）
    * rtoDelay  RTO时延阈值(s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RTO时延阈值设置是DRS实例与灾备数据库间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmToUser' => null,
        'topicUrn' => null,
        'delayTime' => 'int64',
        'rpoDelay' => 'int64',
        'rtoDelay' => 'int64'
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
    * alarmToUser  异常告警是否通知用户。
    * topicUrn  SMN主题URN。
    * delayTime  时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： 1.源数据库和目标数据库之间的同步有时会存在一个时间差，称为时延，单位为秒。 2.时延阈值设置是指时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量迁移阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。） 3.只有全量+增量的任务支持此选项。
    * rpoDelay  RPO时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RPO时延阈值设置是业务数据库与DRS实例间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量灾备阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。）
    * rtoDelay  RTO时延阈值(s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RTO时延阈值设置是DRS实例与灾备数据库间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmToUser' => 'alarm_to_user',
            'topicUrn' => 'topic_urn',
            'delayTime' => 'delay_time',
            'rpoDelay' => 'rpo_delay',
            'rtoDelay' => 'rto_delay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmToUser  异常告警是否通知用户。
    * topicUrn  SMN主题URN。
    * delayTime  时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： 1.源数据库和目标数据库之间的同步有时会存在一个时间差，称为时延，单位为秒。 2.时延阈值设置是指时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量迁移阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。） 3.只有全量+增量的任务支持此选项。
    * rpoDelay  RPO时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RPO时延阈值设置是业务数据库与DRS实例间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量灾备阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。）
    * rtoDelay  RTO时延阈值(s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RTO时延阈值设置是DRS实例与灾备数据库间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmToUser' => 'setAlarmToUser',
            'topicUrn' => 'setTopicUrn',
            'delayTime' => 'setDelayTime',
            'rpoDelay' => 'setRpoDelay',
            'rtoDelay' => 'setRtoDelay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmToUser  异常告警是否通知用户。
    * topicUrn  SMN主题URN。
    * delayTime  时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： 1.源数据库和目标数据库之间的同步有时会存在一个时间差，称为时延，单位为秒。 2.时延阈值设置是指时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量迁移阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。） 3.只有全量+增量的任务支持此选项。
    * rpoDelay  RPO时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RPO时延阈值设置是业务数据库与DRS实例间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量灾备阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。）
    * rtoDelay  RTO时延阈值(s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RTO时延阈值设置是DRS实例与灾备数据库间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmToUser' => 'getAlarmToUser',
            'topicUrn' => 'getTopicUrn',
            'delayTime' => 'getDelayTime',
            'rpoDelay' => 'getRpoDelay',
            'rtoDelay' => 'getRtoDelay'
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
        $this->container['alarmToUser'] = isset($data['alarmToUser']) ? $data['alarmToUser'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['delayTime'] = isset($data['delayTime']) ? $data['delayTime'] : null;
        $this->container['rpoDelay'] = isset($data['rpoDelay']) ? $data['rpoDelay'] : null;
        $this->container['rtoDelay'] = isset($data['rtoDelay']) ? $data['rtoDelay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmToUser'] === null) {
            $invalidProperties[] = "'alarmToUser' can't be null";
        }
            if (!is_null($this->container['delayTime']) && ($this->container['delayTime'] > 3600)) {
                $invalidProperties[] = "invalid value for 'delayTime', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['delayTime']) && ($this->container['delayTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'delayTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rpoDelay']) && ($this->container['rpoDelay'] > 3600)) {
                $invalidProperties[] = "invalid value for 'rpoDelay', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['rpoDelay']) && ($this->container['rpoDelay'] < 1)) {
                $invalidProperties[] = "invalid value for 'rpoDelay', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rtoDelay']) && ($this->container['rtoDelay'] > 3600)) {
                $invalidProperties[] = "invalid value for 'rtoDelay', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['rtoDelay']) && ($this->container['rtoDelay'] < 1)) {
                $invalidProperties[] = "invalid value for 'rtoDelay', must be bigger than or equal to 1.";
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
    * Gets alarmToUser
    *  异常告警是否通知用户。
    *
    * @return bool
    */
    public function getAlarmToUser()
    {
        return $this->container['alarmToUser'];
    }

    /**
    * Sets alarmToUser
    *
    * @param bool $alarmToUser 异常告警是否通知用户。
    *
    * @return $this
    */
    public function setAlarmToUser($alarmToUser)
    {
        $this->container['alarmToUser'] = $alarmToUser;
        return $this;
    }

    /**
    * Gets topicUrn
    *  SMN主题URN。
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
    * @param string|null $topicUrn SMN主题URN。
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
    *  时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： 1.源数据库和目标数据库之间的同步有时会存在一个时间差，称为时延，单位为秒。 2.时延阈值设置是指时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量迁移阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。） 3.只有全量+增量的任务支持此选项。
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
    * @param int|null $delayTime 时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： 1.源数据库和目标数据库之间的同步有时会存在一个时间差，称为时延，单位为秒。 2.时延阈值设置是指时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量迁移阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。） 3.只有全量+增量的任务支持此选项。
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
    *  RPO时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RPO时延阈值设置是业务数据库与DRS实例间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量灾备阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。）
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
    * @param int|null $rpoDelay RPO时延阈值(单位为s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RPO时延阈值设置是业务数据库与DRS实例间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。（初次进入增量灾备阶段，会有较多数据等待同步，存在较大的时延，属于正常情况，不在此功能的监控范围之内。）
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
    *  RTO时延阈值(s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RTO时延阈值设置是DRS实例与灾备数据库间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。
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
    * @param int|null $rtoDelay RTO时延阈值(s)。取值： - 最小值：1 - 最大值：3600 - 缺省值：0 - 说明： RTO时延阈值设置是DRS实例与灾备数据库间同步的时延超过一定的值并持续6分钟后，DRS可以发送通知给指定收件人。
    *
    * @return $this
    */
    public function setRtoDelay($rtoDelay)
    {
        $this->container['rtoDelay'] = $rtoDelay;
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

