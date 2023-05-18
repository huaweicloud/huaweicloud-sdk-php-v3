<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PacketThresholdData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PacketThresholdData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * receiving  自定义接收方向阈值，单位为百分比(%)
    * receivingDefault  默认接收方向阈值，单位为百分比(%)
    * sending  自定义发送方向阈值，单位为百分比(%)
    * sendingDefault  默认发送方向阈值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'receiving' => 'int',
            'receivingDefault' => 'int',
            'sending' => 'int',
            'sendingDefault' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * receiving  自定义接收方向阈值，单位为百分比(%)
    * receivingDefault  默认接收方向阈值，单位为百分比(%)
    * sending  自定义发送方向阈值，单位为百分比(%)
    * sendingDefault  默认发送方向阈值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'receiving' => 'int32',
        'receivingDefault' => 'int32',
        'sending' => 'int32',
        'sendingDefault' => 'int32'
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
    * receiving  自定义接收方向阈值，单位为百分比(%)
    * receivingDefault  默认接收方向阈值，单位为百分比(%)
    * sending  自定义发送方向阈值，单位为百分比(%)
    * sendingDefault  默认发送方向阈值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'receiving' => 'receiving',
            'receivingDefault' => 'receivingDefault',
            'sending' => 'sending',
            'sendingDefault' => 'sendingDefault'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * receiving  自定义接收方向阈值，单位为百分比(%)
    * receivingDefault  默认接收方向阈值，单位为百分比(%)
    * sending  自定义发送方向阈值，单位为百分比(%)
    * sendingDefault  默认发送方向阈值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $setters = [
            'receiving' => 'setReceiving',
            'receivingDefault' => 'setReceivingDefault',
            'sending' => 'setSending',
            'sendingDefault' => 'setSendingDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * receiving  自定义接收方向阈值，单位为百分比(%)
    * receivingDefault  默认接收方向阈值，单位为百分比(%)
    * sending  自定义发送方向阈值，单位为百分比(%)
    * sendingDefault  默认发送方向阈值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $getters = [
            'receiving' => 'getReceiving',
            'receivingDefault' => 'getReceivingDefault',
            'sending' => 'getSending',
            'sendingDefault' => 'getSendingDefault'
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
        $this->container['receiving'] = isset($data['receiving']) ? $data['receiving'] : null;
        $this->container['receivingDefault'] = isset($data['receivingDefault']) ? $data['receivingDefault'] : null;
        $this->container['sending'] = isset($data['sending']) ? $data['sending'] : null;
        $this->container['sendingDefault'] = isset($data['sendingDefault']) ? $data['sendingDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['receiving']) && ($this->container['receiving'] > 100)) {
                $invalidProperties[] = "invalid value for 'receiving', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['receiving']) && ($this->container['receiving'] < 0)) {
                $invalidProperties[] = "invalid value for 'receiving', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['receivingDefault']) && ($this->container['receivingDefault'] > 100)) {
                $invalidProperties[] = "invalid value for 'receivingDefault', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['receivingDefault']) && ($this->container['receivingDefault'] < 0)) {
                $invalidProperties[] = "invalid value for 'receivingDefault', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sending']) && ($this->container['sending'] > 100)) {
                $invalidProperties[] = "invalid value for 'sending', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sending']) && ($this->container['sending'] < 0)) {
                $invalidProperties[] = "invalid value for 'sending', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sendingDefault']) && ($this->container['sendingDefault'] > 100)) {
                $invalidProperties[] = "invalid value for 'sendingDefault', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sendingDefault']) && ($this->container['sendingDefault'] < 0)) {
                $invalidProperties[] = "invalid value for 'sendingDefault', must be bigger than or equal to 0.";
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
    * Gets receiving
    *  自定义接收方向阈值，单位为百分比(%)
    *
    * @return int|null
    */
    public function getReceiving()
    {
        return $this->container['receiving'];
    }

    /**
    * Sets receiving
    *
    * @param int|null $receiving 自定义接收方向阈值，单位为百分比(%)
    *
    * @return $this
    */
    public function setReceiving($receiving)
    {
        $this->container['receiving'] = $receiving;
        return $this;
    }

    /**
    * Gets receivingDefault
    *  默认接收方向阈值，单位为百分比(%)
    *
    * @return int|null
    */
    public function getReceivingDefault()
    {
        return $this->container['receivingDefault'];
    }

    /**
    * Sets receivingDefault
    *
    * @param int|null $receivingDefault 默认接收方向阈值，单位为百分比(%)
    *
    * @return $this
    */
    public function setReceivingDefault($receivingDefault)
    {
        $this->container['receivingDefault'] = $receivingDefault;
        return $this;
    }

    /**
    * Gets sending
    *  自定义发送方向阈值，单位为百分比(%)
    *
    * @return int|null
    */
    public function getSending()
    {
        return $this->container['sending'];
    }

    /**
    * Sets sending
    *
    * @param int|null $sending 自定义发送方向阈值，单位为百分比(%)
    *
    * @return $this
    */
    public function setSending($sending)
    {
        $this->container['sending'] = $sending;
        return $this;
    }

    /**
    * Gets sendingDefault
    *  默认发送方向阈值，单位为百分比(%)
    *
    * @return int|null
    */
    public function getSendingDefault()
    {
        return $this->container['sendingDefault'];
    }

    /**
    * Sets sendingDefault
    *
    * @param int|null $sendingDefault 默认发送方向阈值，单位为百分比(%)
    *
    * @return $this
    */
    public function setSendingDefault($sendingDefault)
    {
        $this->container['sendingDefault'] = $sendingDefault;
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

