<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserStatusDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserStatusDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * number  终端号码
    * regStatus  注册状态。 * 1：是未注册上 * 0：是已注册
    * callStatus  呼叫状态。 * 0：未上线 * 1：空闲中 * 2：使用中 * 3：非会议硬终端统一的无效值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'number' => 'string',
            'regStatus' => 'string',
            'callStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * number  终端号码
    * regStatus  注册状态。 * 1：是未注册上 * 0：是已注册
    * callStatus  呼叫状态。 * 0：未上线 * 1：空闲中 * 2：使用中 * 3：非会议硬终端统一的无效值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'number' => null,
        'regStatus' => null,
        'callStatus' => null
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
    * number  终端号码
    * regStatus  注册状态。 * 1：是未注册上 * 0：是已注册
    * callStatus  呼叫状态。 * 0：未上线 * 1：空闲中 * 2：使用中 * 3：非会议硬终端统一的无效值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'number' => 'Number',
            'regStatus' => 'RegStatus',
            'callStatus' => 'CallStatus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * number  终端号码
    * regStatus  注册状态。 * 1：是未注册上 * 0：是已注册
    * callStatus  呼叫状态。 * 0：未上线 * 1：空闲中 * 2：使用中 * 3：非会议硬终端统一的无效值
    *
    * @var string[]
    */
    protected static $setters = [
            'number' => 'setNumber',
            'regStatus' => 'setRegStatus',
            'callStatus' => 'setCallStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * number  终端号码
    * regStatus  注册状态。 * 1：是未注册上 * 0：是已注册
    * callStatus  呼叫状态。 * 0：未上线 * 1：空闲中 * 2：使用中 * 3：非会议硬终端统一的无效值
    *
    * @var string[]
    */
    protected static $getters = [
            'number' => 'getNumber',
            'regStatus' => 'getRegStatus',
            'callStatus' => 'getCallStatus'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['regStatus'] = isset($data['regStatus']) ? $data['regStatus'] : null;
        $this->container['callStatus'] = isset($data['callStatus']) ? $data['callStatus'] : null;
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
    * Gets number
    *  终端号码
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 终端号码
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets regStatus
    *  注册状态。 * 1：是未注册上 * 0：是已注册
    *
    * @return string|null
    */
    public function getRegStatus()
    {
        return $this->container['regStatus'];
    }

    /**
    * Sets regStatus
    *
    * @param string|null $regStatus 注册状态。 * 1：是未注册上 * 0：是已注册
    *
    * @return $this
    */
    public function setRegStatus($regStatus)
    {
        $this->container['regStatus'] = $regStatus;
        return $this;
    }

    /**
    * Gets callStatus
    *  呼叫状态。 * 0：未上线 * 1：空闲中 * 2：使用中 * 3：非会议硬终端统一的无效值
    *
    * @return string|null
    */
    public function getCallStatus()
    {
        return $this->container['callStatus'];
    }

    /**
    * Sets callStatus
    *
    * @param string|null $callStatus 呼叫状态。 * 0：未上线 * 1：空闲中 * 2：使用中 * 3：非会议硬终端统一的无效值
    *
    * @return $this
    */
    public function setCallStatus($callStatus)
    {
        $this->container['callStatus'] = $callStatus;
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

