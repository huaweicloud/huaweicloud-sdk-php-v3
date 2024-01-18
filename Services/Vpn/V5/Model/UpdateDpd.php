<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDpd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDpd';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * interval  DPD检测间隔时长
    * timeout  DPD检测间隔超时时间
    * msg  DPD检测报文格式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'interval' => 'int',
            'timeout' => 'int',
            'msg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * interval  DPD检测间隔时长
    * timeout  DPD检测间隔超时时间
    * msg  DPD检测报文格式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'interval' => null,
        'timeout' => null,
        'msg' => null
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
    * interval  DPD检测间隔时长
    * timeout  DPD检测间隔超时时间
    * msg  DPD检测报文格式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'interval' => 'interval',
            'timeout' => 'timeout',
            'msg' => 'msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * interval  DPD检测间隔时长
    * timeout  DPD检测间隔超时时间
    * msg  DPD检测报文格式
    *
    * @var string[]
    */
    protected static $setters = [
            'interval' => 'setInterval',
            'timeout' => 'setTimeout',
            'msg' => 'setMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * interval  DPD检测间隔时长
    * timeout  DPD检测间隔超时时间
    * msg  DPD检测报文格式
    *
    * @var string[]
    */
    protected static $getters = [
            'interval' => 'getInterval',
            'timeout' => 'getTimeout',
            'msg' => 'getMsg'
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
    const MSG_SEQ_HASH_NOTIFY = 'seq-hash-notify';
    const MSG_SEQ_NOTIFY_HASH = 'seq-notify-hash';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMsgAllowableValues()
    {
        return [
            self::MSG_SEQ_HASH_NOTIFY,
            self::MSG_SEQ_NOTIFY_HASH,
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
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['interval']) && ($this->container['interval'] > 3600)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] < 10)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 60)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 2)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getMsgAllowableValues();
                if (!is_null($this->container['msg']) && !in_array($this->container['msg'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'msg', must be one of '%s'",
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
    * Gets interval
    *  DPD检测间隔时长
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval DPD检测间隔时长
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets timeout
    *  DPD检测间隔超时时间
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout DPD检测间隔超时时间
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets msg
    *  DPD检测报文格式
    *
    * @return string|null
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string|null $msg DPD检测报文格式
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
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

