<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateriggerEventData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateriggerEventData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSerial  串行处理数据
    * maxFetchBytes  最大字节数
    * pollingInterval  拉取周期
    * pollingUnit  拉取周期单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSerial' => 'bool',
            'maxFetchBytes' => 'int',
            'pollingInterval' => 'int',
            'pollingUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSerial  串行处理数据
    * maxFetchBytes  最大字节数
    * pollingInterval  拉取周期
    * pollingUnit  拉取周期单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSerial' => 'true',
        'maxFetchBytes' => 'integer',
        'pollingInterval' => 'integer',
        'pollingUnit' => 'ms'
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
    * isSerial  串行处理数据
    * maxFetchBytes  最大字节数
    * pollingInterval  拉取周期
    * pollingUnit  拉取周期单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSerial' => 'is_serial',
            'maxFetchBytes' => 'max_fetch_bytes',
            'pollingInterval' => 'polling_interval',
            'pollingUnit' => 'polling_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSerial  串行处理数据
    * maxFetchBytes  最大字节数
    * pollingInterval  拉取周期
    * pollingUnit  拉取周期单位
    *
    * @var string[]
    */
    protected static $setters = [
            'isSerial' => 'setIsSerial',
            'maxFetchBytes' => 'setMaxFetchBytes',
            'pollingInterval' => 'setPollingInterval',
            'pollingUnit' => 'setPollingUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSerial  串行处理数据
    * maxFetchBytes  最大字节数
    * pollingInterval  拉取周期
    * pollingUnit  拉取周期单位
    *
    * @var string[]
    */
    protected static $getters = [
            'isSerial' => 'getIsSerial',
            'maxFetchBytes' => 'getMaxFetchBytes',
            'pollingInterval' => 'getPollingInterval',
            'pollingUnit' => 'getPollingUnit'
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
    const POLLING_UNIT_MS = 'ms';
    const POLLING_UNIT_S = 's';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPollingUnitAllowableValues()
    {
        return [
            self::POLLING_UNIT_MS,
            self::POLLING_UNIT_S,
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
        $this->container['isSerial'] = isset($data['isSerial']) ? $data['isSerial'] : null;
        $this->container['maxFetchBytes'] = isset($data['maxFetchBytes']) ? $data['maxFetchBytes'] : null;
        $this->container['pollingInterval'] = isset($data['pollingInterval']) ? $data['pollingInterval'] : null;
        $this->container['pollingUnit'] = isset($data['pollingUnit']) ? $data['pollingUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPollingUnitAllowableValues();
                if (!is_null($this->container['pollingUnit']) && !in_array($this->container['pollingUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pollingUnit', must be one of '%s'",
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
    * Gets isSerial
    *  串行处理数据
    *
    * @return bool|null
    */
    public function getIsSerial()
    {
        return $this->container['isSerial'];
    }

    /**
    * Sets isSerial
    *
    * @param bool|null $isSerial 串行处理数据
    *
    * @return $this
    */
    public function setIsSerial($isSerial)
    {
        $this->container['isSerial'] = $isSerial;
        return $this;
    }

    /**
    * Gets maxFetchBytes
    *  最大字节数
    *
    * @return int|null
    */
    public function getMaxFetchBytes()
    {
        return $this->container['maxFetchBytes'];
    }

    /**
    * Sets maxFetchBytes
    *
    * @param int|null $maxFetchBytes 最大字节数
    *
    * @return $this
    */
    public function setMaxFetchBytes($maxFetchBytes)
    {
        $this->container['maxFetchBytes'] = $maxFetchBytes;
        return $this;
    }

    /**
    * Gets pollingInterval
    *  拉取周期
    *
    * @return int|null
    */
    public function getPollingInterval()
    {
        return $this->container['pollingInterval'];
    }

    /**
    * Sets pollingInterval
    *
    * @param int|null $pollingInterval 拉取周期
    *
    * @return $this
    */
    public function setPollingInterval($pollingInterval)
    {
        $this->container['pollingInterval'] = $pollingInterval;
        return $this;
    }

    /**
    * Gets pollingUnit
    *  拉取周期单位
    *
    * @return string|null
    */
    public function getPollingUnit()
    {
        return $this->container['pollingUnit'];
    }

    /**
    * Sets pollingUnit
    *
    * @param string|null $pollingUnit 拉取周期单位
    *
    * @return $this
    */
    public function setPollingUnit($pollingUnit)
    {
        $this->container['pollingUnit'] = $pollingUnit;
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

