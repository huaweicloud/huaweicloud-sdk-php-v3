<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * averageMsgBytes  平均消费大小
    * subscribeMsgs  消费条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'averageMsgBytes' => 'float',
            'subscribeMsgs' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * averageMsgBytes  平均消费大小
    * subscribeMsgs  消费条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'averageMsgBytes' => null,
        'subscribeMsgs' => 'int64'
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
    * averageMsgBytes  平均消费大小
    * subscribeMsgs  消费条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'averageMsgBytes' => 'average_msg_bytes',
            'subscribeMsgs' => 'subscribe_msgs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * averageMsgBytes  平均消费大小
    * subscribeMsgs  消费条数
    *
    * @var string[]
    */
    protected static $setters = [
            'averageMsgBytes' => 'setAverageMsgBytes',
            'subscribeMsgs' => 'setSubscribeMsgs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * averageMsgBytes  平均消费大小
    * subscribeMsgs  消费条数
    *
    * @var string[]
    */
    protected static $getters = [
            'averageMsgBytes' => 'getAverageMsgBytes',
            'subscribeMsgs' => 'getSubscribeMsgs'
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
        $this->container['averageMsgBytes'] = isset($data['averageMsgBytes']) ? $data['averageMsgBytes'] : null;
        $this->container['subscribeMsgs'] = isset($data['subscribeMsgs']) ? $data['subscribeMsgs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['averageMsgBytes'] === null) {
            $invalidProperties[] = "'averageMsgBytes' can't be null";
        }
            if (($this->container['averageMsgBytes'] > 1E+13)) {
                $invalidProperties[] = "invalid value for 'averageMsgBytes', must be smaller than or equal to 1E+13.";
            }
            if (($this->container['averageMsgBytes'] < 0)) {
                $invalidProperties[] = "invalid value for 'averageMsgBytes', must be bigger than or equal to 0.";
            }
        if ($this->container['subscribeMsgs'] === null) {
            $invalidProperties[] = "'subscribeMsgs' can't be null";
        }
            if (($this->container['subscribeMsgs'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'subscribeMsgs', must be smaller than or equal to 10000000000000.";
            }
            if (($this->container['subscribeMsgs'] < 0)) {
                $invalidProperties[] = "invalid value for 'subscribeMsgs', must be bigger than or equal to 0.";
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
    * Gets averageMsgBytes
    *  平均消费大小
    *
    * @return float
    */
    public function getAverageMsgBytes()
    {
        return $this->container['averageMsgBytes'];
    }

    /**
    * Sets averageMsgBytes
    *
    * @param float $averageMsgBytes 平均消费大小
    *
    * @return $this
    */
    public function setAverageMsgBytes($averageMsgBytes)
    {
        $this->container['averageMsgBytes'] = $averageMsgBytes;
        return $this;
    }

    /**
    * Gets subscribeMsgs
    *  消费条数
    *
    * @return int
    */
    public function getSubscribeMsgs()
    {
        return $this->container['subscribeMsgs'];
    }

    /**
    * Sets subscribeMsgs
    *
    * @param int $subscribeMsgs 消费条数
    *
    * @return $this
    */
    public function setSubscribeMsgs($subscribeMsgs)
    {
        $this->container['subscribeMsgs'] = $subscribeMsgs;
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

