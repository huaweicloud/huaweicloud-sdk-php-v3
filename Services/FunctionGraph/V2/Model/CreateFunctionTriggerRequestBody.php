<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFunctionTriggerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFunctionTriggerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * triggerTypeCode  触发器类型。  - TIMER: 定时触发器。 - APIG: APIGW触发器。 - CTS: 云审计触发器，需要先开通云审计服务。 - DDS: 文档数据库触发器，需要开启函数vpc。 - DMS: 分布式消息服务触发器，需要配置dms委托。 - DIS: 数据接入服务触发器，需要配置dis委托。 - LTS: 云审计日志服务触发器，需要配置lts委托。 - OBS: 对象存储服务触发器。 - KAFKA: 专享版本kafka触发器。
    * triggerStatus  触发器状态，取值为ACTIVE,DISABLED。
    * eventTypeCode  消息代码。
    * eventData  eventData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'triggerTypeCode' => 'string',
            'triggerStatus' => 'string',
            'eventTypeCode' => 'string',
            'eventData' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerEventDataRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * triggerTypeCode  触发器类型。  - TIMER: 定时触发器。 - APIG: APIGW触发器。 - CTS: 云审计触发器，需要先开通云审计服务。 - DDS: 文档数据库触发器，需要开启函数vpc。 - DMS: 分布式消息服务触发器，需要配置dms委托。 - DIS: 数据接入服务触发器，需要配置dis委托。 - LTS: 云审计日志服务触发器，需要配置lts委托。 - OBS: 对象存储服务触发器。 - KAFKA: 专享版本kafka触发器。
    * triggerStatus  触发器状态，取值为ACTIVE,DISABLED。
    * eventTypeCode  消息代码。
    * eventData  eventData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'triggerTypeCode' => null,
        'triggerStatus' => null,
        'eventTypeCode' => null,
        'eventData' => null
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
    * triggerTypeCode  触发器类型。  - TIMER: 定时触发器。 - APIG: APIGW触发器。 - CTS: 云审计触发器，需要先开通云审计服务。 - DDS: 文档数据库触发器，需要开启函数vpc。 - DMS: 分布式消息服务触发器，需要配置dms委托。 - DIS: 数据接入服务触发器，需要配置dis委托。 - LTS: 云审计日志服务触发器，需要配置lts委托。 - OBS: 对象存储服务触发器。 - KAFKA: 专享版本kafka触发器。
    * triggerStatus  触发器状态，取值为ACTIVE,DISABLED。
    * eventTypeCode  消息代码。
    * eventData  eventData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'triggerTypeCode' => 'trigger_type_code',
            'triggerStatus' => 'trigger_status',
            'eventTypeCode' => 'event_type_code',
            'eventData' => 'event_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * triggerTypeCode  触发器类型。  - TIMER: 定时触发器。 - APIG: APIGW触发器。 - CTS: 云审计触发器，需要先开通云审计服务。 - DDS: 文档数据库触发器，需要开启函数vpc。 - DMS: 分布式消息服务触发器，需要配置dms委托。 - DIS: 数据接入服务触发器，需要配置dis委托。 - LTS: 云审计日志服务触发器，需要配置lts委托。 - OBS: 对象存储服务触发器。 - KAFKA: 专享版本kafka触发器。
    * triggerStatus  触发器状态，取值为ACTIVE,DISABLED。
    * eventTypeCode  消息代码。
    * eventData  eventData
    *
    * @var string[]
    */
    protected static $setters = [
            'triggerTypeCode' => 'setTriggerTypeCode',
            'triggerStatus' => 'setTriggerStatus',
            'eventTypeCode' => 'setEventTypeCode',
            'eventData' => 'setEventData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * triggerTypeCode  触发器类型。  - TIMER: 定时触发器。 - APIG: APIGW触发器。 - CTS: 云审计触发器，需要先开通云审计服务。 - DDS: 文档数据库触发器，需要开启函数vpc。 - DMS: 分布式消息服务触发器，需要配置dms委托。 - DIS: 数据接入服务触发器，需要配置dis委托。 - LTS: 云审计日志服务触发器，需要配置lts委托。 - OBS: 对象存储服务触发器。 - KAFKA: 专享版本kafka触发器。
    * triggerStatus  触发器状态，取值为ACTIVE,DISABLED。
    * eventTypeCode  消息代码。
    * eventData  eventData
    *
    * @var string[]
    */
    protected static $getters = [
            'triggerTypeCode' => 'getTriggerTypeCode',
            'triggerStatus' => 'getTriggerStatus',
            'eventTypeCode' => 'getEventTypeCode',
            'eventData' => 'getEventData'
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
        $this->container['triggerTypeCode'] = isset($data['triggerTypeCode']) ? $data['triggerTypeCode'] : null;
        $this->container['triggerStatus'] = isset($data['triggerStatus']) ? $data['triggerStatus'] : null;
        $this->container['eventTypeCode'] = isset($data['eventTypeCode']) ? $data['eventTypeCode'] : null;
        $this->container['eventData'] = isset($data['eventData']) ? $data['eventData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['triggerTypeCode'] === null) {
            $invalidProperties[] = "'triggerTypeCode' can't be null";
        }
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

        if ($this->container['eventData'] === null) {
            $invalidProperties[] = "'eventData' can't be null";
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
    * Gets triggerTypeCode
    *  触发器类型。  - TIMER: 定时触发器。 - APIG: APIGW触发器。 - CTS: 云审计触发器，需要先开通云审计服务。 - DDS: 文档数据库触发器，需要开启函数vpc。 - DMS: 分布式消息服务触发器，需要配置dms委托。 - DIS: 数据接入服务触发器，需要配置dis委托。 - LTS: 云审计日志服务触发器，需要配置lts委托。 - OBS: 对象存储服务触发器。 - KAFKA: 专享版本kafka触发器。
    *
    * @return string
    */
    public function getTriggerTypeCode()
    {
        return $this->container['triggerTypeCode'];
    }

    /**
    * Sets triggerTypeCode
    *
    * @param string $triggerTypeCode 触发器类型。  - TIMER: 定时触发器。 - APIG: APIGW触发器。 - CTS: 云审计触发器，需要先开通云审计服务。 - DDS: 文档数据库触发器，需要开启函数vpc。 - DMS: 分布式消息服务触发器，需要配置dms委托。 - DIS: 数据接入服务触发器，需要配置dis委托。 - LTS: 云审计日志服务触发器，需要配置lts委托。 - OBS: 对象存储服务触发器。 - KAFKA: 专享版本kafka触发器。
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
    *  触发器状态，取值为ACTIVE,DISABLED。
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
    * @param string|null $triggerStatus 触发器状态，取值为ACTIVE,DISABLED。
    *
    * @return $this
    */
    public function setTriggerStatus($triggerStatus)
    {
        $this->container['triggerStatus'] = $triggerStatus;
        return $this;
    }

    /**
    * Gets eventTypeCode
    *  消息代码。
    *
    * @return string|null
    */
    public function getEventTypeCode()
    {
        return $this->container['eventTypeCode'];
    }

    /**
    * Sets eventTypeCode
    *
    * @param string|null $eventTypeCode 消息代码。
    *
    * @return $this
    */
    public function setEventTypeCode($eventTypeCode)
    {
        $this->container['eventTypeCode'] = $eventTypeCode;
        return $this;
    }

    /**
    * Gets eventData
    *  eventData
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerEventDataRequestBody
    */
    public function getEventData()
    {
        return $this->container['eventData'];
    }

    /**
    * Sets eventData
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerEventDataRequestBody $eventData eventData
    *
    * @return $this
    */
    public function setEventData($eventData)
    {
        $this->container['eventData'] = $eventData;
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

