<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTriggerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTriggerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * triggerId  触发器ID。
    * triggerTypeCode  触发器类型。  - TIMER: \"定时触发器。\" - APIG: \"APIG触发器。\" - CTS: \"云审计服务触发器。\" - DDS: \"文档数据库服务触发器。\" - DMS: \"分布式服务触发器。\" - DIS: \"数据接入服务触发器。\" - LTS: \"云日志服务触发器。\" - OBS: \"对象存储触发器。\" - SMN: \"消息通知服务触发器。\" - KAFKA: \"专享版消息通知服务触发器。\"
    * triggerStatus  \"触发器状态\"  - ACTIVE: 启用状态。 - DISABLED: 禁用状态。
    * eventData  触发器源事件。
    * lastUpdatedTime  最后更新时间。
    * createdTime  触发器创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'triggerId' => 'string',
            'triggerTypeCode' => 'string',
            'triggerStatus' => 'string',
            'eventData' => 'object',
            'lastUpdatedTime' => '\DateTime',
            'createdTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * triggerId  触发器ID。
    * triggerTypeCode  触发器类型。  - TIMER: \"定时触发器。\" - APIG: \"APIG触发器。\" - CTS: \"云审计服务触发器。\" - DDS: \"文档数据库服务触发器。\" - DMS: \"分布式服务触发器。\" - DIS: \"数据接入服务触发器。\" - LTS: \"云日志服务触发器。\" - OBS: \"对象存储触发器。\" - SMN: \"消息通知服务触发器。\" - KAFKA: \"专享版消息通知服务触发器。\"
    * triggerStatus  \"触发器状态\"  - ACTIVE: 启用状态。 - DISABLED: 禁用状态。
    * eventData  触发器源事件。
    * lastUpdatedTime  最后更新时间。
    * createdTime  触发器创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'triggerId' => null,
        'triggerTypeCode' => null,
        'triggerStatus' => null,
        'eventData' => null,
        'lastUpdatedTime' => 'date-time',
        'createdTime' => 'date-time'
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
    * triggerId  触发器ID。
    * triggerTypeCode  触发器类型。  - TIMER: \"定时触发器。\" - APIG: \"APIG触发器。\" - CTS: \"云审计服务触发器。\" - DDS: \"文档数据库服务触发器。\" - DMS: \"分布式服务触发器。\" - DIS: \"数据接入服务触发器。\" - LTS: \"云日志服务触发器。\" - OBS: \"对象存储触发器。\" - SMN: \"消息通知服务触发器。\" - KAFKA: \"专享版消息通知服务触发器。\"
    * triggerStatus  \"触发器状态\"  - ACTIVE: 启用状态。 - DISABLED: 禁用状态。
    * eventData  触发器源事件。
    * lastUpdatedTime  最后更新时间。
    * createdTime  触发器创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'triggerId' => 'trigger_id',
            'triggerTypeCode' => 'trigger_type_code',
            'triggerStatus' => 'trigger_status',
            'eventData' => 'event_data',
            'lastUpdatedTime' => 'last_updated_time',
            'createdTime' => 'created_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * triggerId  触发器ID。
    * triggerTypeCode  触发器类型。  - TIMER: \"定时触发器。\" - APIG: \"APIG触发器。\" - CTS: \"云审计服务触发器。\" - DDS: \"文档数据库服务触发器。\" - DMS: \"分布式服务触发器。\" - DIS: \"数据接入服务触发器。\" - LTS: \"云日志服务触发器。\" - OBS: \"对象存储触发器。\" - SMN: \"消息通知服务触发器。\" - KAFKA: \"专享版消息通知服务触发器。\"
    * triggerStatus  \"触发器状态\"  - ACTIVE: 启用状态。 - DISABLED: 禁用状态。
    * eventData  触发器源事件。
    * lastUpdatedTime  最后更新时间。
    * createdTime  触发器创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'triggerId' => 'setTriggerId',
            'triggerTypeCode' => 'setTriggerTypeCode',
            'triggerStatus' => 'setTriggerStatus',
            'eventData' => 'setEventData',
            'lastUpdatedTime' => 'setLastUpdatedTime',
            'createdTime' => 'setCreatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * triggerId  触发器ID。
    * triggerTypeCode  触发器类型。  - TIMER: \"定时触发器。\" - APIG: \"APIG触发器。\" - CTS: \"云审计服务触发器。\" - DDS: \"文档数据库服务触发器。\" - DMS: \"分布式服务触发器。\" - DIS: \"数据接入服务触发器。\" - LTS: \"云日志服务触发器。\" - OBS: \"对象存储触发器。\" - SMN: \"消息通知服务触发器。\" - KAFKA: \"专享版消息通知服务触发器。\"
    * triggerStatus  \"触发器状态\"  - ACTIVE: 启用状态。 - DISABLED: 禁用状态。
    * eventData  触发器源事件。
    * lastUpdatedTime  最后更新时间。
    * createdTime  触发器创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'triggerId' => 'getTriggerId',
            'triggerTypeCode' => 'getTriggerTypeCode',
            'triggerStatus' => 'getTriggerStatus',
            'eventData' => 'getEventData',
            'lastUpdatedTime' => 'getLastUpdatedTime',
            'createdTime' => 'getCreatedTime'
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
    const TRIGGER_TYPE_CODE_TIMER = 'TIMER';
    const TRIGGER_TYPE_CODE_APIG = 'APIG';
    const TRIGGER_TYPE_CODE_CTS = 'CTS';
    const TRIGGER_TYPE_CODE_DDS = 'DDS';
    const TRIGGER_TYPE_CODE_DMS = 'DMS';
    const TRIGGER_TYPE_CODE_DIS = 'DIS';
    const TRIGGER_TYPE_CODE_LTS = 'LTS';
    const TRIGGER_TYPE_CODE_OBS = 'OBS';
    const TRIGGER_TYPE_CODE_SMN = 'SMN';
    const TRIGGER_TYPE_CODE_KAFKA = 'KAFKA';
    const TRIGGER_TYPE_CODE_RABBITMQ = 'RABBITMQ';
    const TRIGGER_TYPE_CODE_DEDICATEDGATEWAY = 'DEDICATEDGATEWAY';
    const TRIGGER_TYPE_CODE_OPENSOURCEKAFKA = 'OPENSOURCEKAFKA';
    const TRIGGER_TYPE_CODE_APIC = 'APIC';
    const TRIGGER_TYPE_CODE_GAUSSMONGO = 'GAUSSMONGO';
    const TRIGGER_TYPE_CODE_EVENTGRID = 'EVENTGRID';
    const TRIGGER_STATUS_ACTIVE = 'ACTIVE';
    const TRIGGER_STATUS_DISABLED = 'DISABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeCodeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_CODE_TIMER,
            self::TRIGGER_TYPE_CODE_APIG,
            self::TRIGGER_TYPE_CODE_CTS,
            self::TRIGGER_TYPE_CODE_DDS,
            self::TRIGGER_TYPE_CODE_DMS,
            self::TRIGGER_TYPE_CODE_DIS,
            self::TRIGGER_TYPE_CODE_LTS,
            self::TRIGGER_TYPE_CODE_OBS,
            self::TRIGGER_TYPE_CODE_SMN,
            self::TRIGGER_TYPE_CODE_KAFKA,
            self::TRIGGER_TYPE_CODE_RABBITMQ,
            self::TRIGGER_TYPE_CODE_DEDICATEDGATEWAY,
            self::TRIGGER_TYPE_CODE_OPENSOURCEKAFKA,
            self::TRIGGER_TYPE_CODE_APIC,
            self::TRIGGER_TYPE_CODE_GAUSSMONGO,
            self::TRIGGER_TYPE_CODE_EVENTGRID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerStatusAllowableValues()
    {
        return [
            self::TRIGGER_STATUS_ACTIVE,
            self::TRIGGER_STATUS_DISABLED,
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
        $this->container['triggerId'] = isset($data['triggerId']) ? $data['triggerId'] : null;
        $this->container['triggerTypeCode'] = isset($data['triggerTypeCode']) ? $data['triggerTypeCode'] : null;
        $this->container['triggerStatus'] = isset($data['triggerStatus']) ? $data['triggerStatus'] : null;
        $this->container['eventData'] = isset($data['eventData']) ? $data['eventData'] : null;
        $this->container['lastUpdatedTime'] = isset($data['lastUpdatedTime']) ? $data['lastUpdatedTime'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTriggerTypeCodeAllowableValues();
                if (!is_null($this->container['triggerTypeCode']) && !in_array($this->container['triggerTypeCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerTypeCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTriggerStatusAllowableValues();
                if (!is_null($this->container['triggerStatus']) && !in_array($this->container['triggerStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerStatus', must be one of '%s'",
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
    * Gets triggerId
    *  触发器ID。
    *
    * @return string|null
    */
    public function getTriggerId()
    {
        return $this->container['triggerId'];
    }

    /**
    * Sets triggerId
    *
    * @param string|null $triggerId 触发器ID。
    *
    * @return $this
    */
    public function setTriggerId($triggerId)
    {
        $this->container['triggerId'] = $triggerId;
        return $this;
    }

    /**
    * Gets triggerTypeCode
    *  触发器类型。  - TIMER: \"定时触发器。\" - APIG: \"APIG触发器。\" - CTS: \"云审计服务触发器。\" - DDS: \"文档数据库服务触发器。\" - DMS: \"分布式服务触发器。\" - DIS: \"数据接入服务触发器。\" - LTS: \"云日志服务触发器。\" - OBS: \"对象存储触发器。\" - SMN: \"消息通知服务触发器。\" - KAFKA: \"专享版消息通知服务触发器。\"
    *
    * @return string|null
    */
    public function getTriggerTypeCode()
    {
        return $this->container['triggerTypeCode'];
    }

    /**
    * Sets triggerTypeCode
    *
    * @param string|null $triggerTypeCode 触发器类型。  - TIMER: \"定时触发器。\" - APIG: \"APIG触发器。\" - CTS: \"云审计服务触发器。\" - DDS: \"文档数据库服务触发器。\" - DMS: \"分布式服务触发器。\" - DIS: \"数据接入服务触发器。\" - LTS: \"云日志服务触发器。\" - OBS: \"对象存储触发器。\" - SMN: \"消息通知服务触发器。\" - KAFKA: \"专享版消息通知服务触发器。\"
    *
    * @return $this
    */
    public function setTriggerTypeCode($triggerTypeCode)
    {
        $this->container['triggerTypeCode'] = $triggerTypeCode;
        return $this;
    }

    /**
    * Gets triggerStatus
    *  \"触发器状态\"  - ACTIVE: 启用状态。 - DISABLED: 禁用状态。
    *
    * @return string|null
    */
    public function getTriggerStatus()
    {
        return $this->container['triggerStatus'];
    }

    /**
    * Sets triggerStatus
    *
    * @param string|null $triggerStatus \"触发器状态\"  - ACTIVE: 启用状态。 - DISABLED: 禁用状态。
    *
    * @return $this
    */
    public function setTriggerStatus($triggerStatus)
    {
        $this->container['triggerStatus'] = $triggerStatus;
        return $this;
    }

    /**
    * Gets eventData
    *  触发器源事件。
    *
    * @return object|null
    */
    public function getEventData()
    {
        return $this->container['eventData'];
    }

    /**
    * Sets eventData
    *
    * @param object|null $eventData 触发器源事件。
    *
    * @return $this
    */
    public function setEventData($eventData)
    {
        $this->container['eventData'] = $eventData;
        return $this;
    }

    /**
    * Gets lastUpdatedTime
    *  最后更新时间。
    *
    * @return \DateTime|null
    */
    public function getLastUpdatedTime()
    {
        return $this->container['lastUpdatedTime'];
    }

    /**
    * Sets lastUpdatedTime
    *
    * @param \DateTime|null $lastUpdatedTime 最后更新时间。
    *
    * @return $this
    */
    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->container['lastUpdatedTime'] = $lastUpdatedTime;
        return $this;
    }

    /**
    * Gets createdTime
    *  触发器创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param \DateTime|null $createdTime 触发器创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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

