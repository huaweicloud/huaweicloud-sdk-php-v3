<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NoDataCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NoDataCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * noDataTimeframe  无数据周期的个数。
    * noDataAlertState  数据不足时，阈值规则的状态。 - “no_data”：数据不足并发送通知 - “alerting”：告警 - “ok”：正常 - “pre_state”：保持上一个状态
    * notifyNoData  数据不足是否通知。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'noDataTimeframe' => 'int',
            'noDataAlertState' => 'string',
            'notifyNoData' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * noDataTimeframe  无数据周期的个数。
    * noDataAlertState  数据不足时，阈值规则的状态。 - “no_data”：数据不足并发送通知 - “alerting”：告警 - “ok”：正常 - “pre_state”：保持上一个状态
    * notifyNoData  数据不足是否通知。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'noDataTimeframe' => 'int32',
        'noDataAlertState' => null,
        'notifyNoData' => null
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
    * noDataTimeframe  无数据周期的个数。
    * noDataAlertState  数据不足时，阈值规则的状态。 - “no_data”：数据不足并发送通知 - “alerting”：告警 - “ok”：正常 - “pre_state”：保持上一个状态
    * notifyNoData  数据不足是否通知。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'noDataTimeframe' => 'no_data_timeframe',
            'noDataAlertState' => 'no_data_alert_state',
            'notifyNoData' => 'notify_no_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * noDataTimeframe  无数据周期的个数。
    * noDataAlertState  数据不足时，阈值规则的状态。 - “no_data”：数据不足并发送通知 - “alerting”：告警 - “ok”：正常 - “pre_state”：保持上一个状态
    * notifyNoData  数据不足是否通知。
    *
    * @var string[]
    */
    protected static $setters = [
            'noDataTimeframe' => 'setNoDataTimeframe',
            'noDataAlertState' => 'setNoDataAlertState',
            'notifyNoData' => 'setNotifyNoData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * noDataTimeframe  无数据周期的个数。
    * noDataAlertState  数据不足时，阈值规则的状态。 - “no_data”：数据不足并发送通知 - “alerting”：告警 - “ok”：正常 - “pre_state”：保持上一个状态
    * notifyNoData  数据不足是否通知。
    *
    * @var string[]
    */
    protected static $getters = [
            'noDataTimeframe' => 'getNoDataTimeframe',
            'noDataAlertState' => 'getNoDataAlertState',
            'notifyNoData' => 'getNotifyNoData'
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
    const NO_DATA_ALERT_STATE_NO_DATA = 'no_data';
    const NO_DATA_ALERT_STATE_ALERTING = 'alerting';
    const NO_DATA_ALERT_STATE_OK = 'ok';
    const NO_DATA_ALERT_STATE_PRE_STATE = 'pre_state';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoDataAlertStateAllowableValues()
    {
        return [
            self::NO_DATA_ALERT_STATE_NO_DATA,
            self::NO_DATA_ALERT_STATE_ALERTING,
            self::NO_DATA_ALERT_STATE_OK,
            self::NO_DATA_ALERT_STATE_PRE_STATE,
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
        $this->container['noDataTimeframe'] = isset($data['noDataTimeframe']) ? $data['noDataTimeframe'] : null;
        $this->container['noDataAlertState'] = isset($data['noDataAlertState']) ? $data['noDataAlertState'] : null;
        $this->container['notifyNoData'] = isset($data['notifyNoData']) ? $data['notifyNoData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNoDataAlertStateAllowableValues();
                if (!is_null($this->container['noDataAlertState']) && !in_array($this->container['noDataAlertState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noDataAlertState', must be one of '%s'",
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
    * Gets noDataTimeframe
    *  无数据周期的个数。
    *
    * @return int|null
    */
    public function getNoDataTimeframe()
    {
        return $this->container['noDataTimeframe'];
    }

    /**
    * Sets noDataTimeframe
    *
    * @param int|null $noDataTimeframe 无数据周期的个数。
    *
    * @return $this
    */
    public function setNoDataTimeframe($noDataTimeframe)
    {
        $this->container['noDataTimeframe'] = $noDataTimeframe;
        return $this;
    }

    /**
    * Gets noDataAlertState
    *  数据不足时，阈值规则的状态。 - “no_data”：数据不足并发送通知 - “alerting”：告警 - “ok”：正常 - “pre_state”：保持上一个状态
    *
    * @return string|null
    */
    public function getNoDataAlertState()
    {
        return $this->container['noDataAlertState'];
    }

    /**
    * Sets noDataAlertState
    *
    * @param string|null $noDataAlertState 数据不足时，阈值规则的状态。 - “no_data”：数据不足并发送通知 - “alerting”：告警 - “ok”：正常 - “pre_state”：保持上一个状态
    *
    * @return $this
    */
    public function setNoDataAlertState($noDataAlertState)
    {
        $this->container['noDataAlertState'] = $noDataAlertState;
        return $this;
    }

    /**
    * Gets notifyNoData
    *  数据不足是否通知。
    *
    * @return bool|null
    */
    public function getNotifyNoData()
    {
        return $this->container['notifyNoData'];
    }

    /**
    * Sets notifyNoData
    *
    * @param bool|null $notifyNoData 数据不足是否通知。
    *
    * @return $this
    */
    public function setNotifyNoData($notifyNoData)
    {
        $this->container['notifyNoData'] = $notifyNoData;
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

