<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteFunctionTriggerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteFunctionTriggerRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * triggerTypeCode  触发器类型代码。
    * triggerId  触发器编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'triggerTypeCode' => 'string',
            'triggerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * triggerTypeCode  触发器类型代码。
    * triggerId  触发器编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'triggerTypeCode' => null,
        'triggerId' => null
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
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * triggerTypeCode  触发器类型代码。
    * triggerId  触发器编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'triggerTypeCode' => 'trigger_type_code',
            'triggerId' => 'trigger_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * triggerTypeCode  触发器类型代码。
    * triggerId  触发器编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'triggerTypeCode' => 'setTriggerTypeCode',
            'triggerId' => 'setTriggerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * triggerTypeCode  触发器类型代码。
    * triggerId  触发器编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'triggerTypeCode' => 'getTriggerTypeCode',
            'triggerId' => 'getTriggerId'
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
    const TRIGGER_TYPE_CODE_IOTDA = 'IOTDA';
    

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
            self::TRIGGER_TYPE_CODE_IOTDA,
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['triggerTypeCode'] = isset($data['triggerTypeCode']) ? $data['triggerTypeCode'] : null;
        $this->container['triggerId'] = isset($data['triggerId']) ? $data['triggerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['functionUrn'] === null) {
            $invalidProperties[] = "'functionUrn' can't be null";
        }
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

        if ($this->container['triggerId'] === null) {
            $invalidProperties[] = "'triggerId' can't be null";
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
    * Gets functionUrn
    *  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return string
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string $functionUrn 函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets triggerTypeCode
    *  触发器类型代码。
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
    * @param string $triggerTypeCode 触发器类型代码。
    *
    * @return $this
    */
    public function setTriggerTypeCode($triggerTypeCode)
    {
        $this->container['triggerTypeCode'] = $triggerTypeCode;
        return $this;
    }

    /**
    * Gets triggerId
    *  触发器编码。
    *
    * @return string
    */
    public function getTriggerId()
    {
        return $this->container['triggerId'];
    }

    /**
    * Sets triggerId
    *
    * @param string $triggerId 触发器编码。
    *
    * @return $this
    */
    public function setTriggerId($triggerId)
    {
        $this->container['triggerId'] = $triggerId;
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

