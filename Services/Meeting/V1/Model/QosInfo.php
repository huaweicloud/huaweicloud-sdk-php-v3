<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QosInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QosInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  Qos类型 - aduio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    * send  send
    * receive  receive
    * cpu  cpu
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'send' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosSendReceiveInfo',
            'receive' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosSendReceiveInfo',
            'cpu' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosCpuInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  Qos类型 - aduio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    * send  send
    * receive  receive
    * cpu  cpu
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'send' => null,
        'receive' => null,
        'cpu' => null
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
    * type  Qos类型 - aduio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    * send  send
    * receive  receive
    * cpu  cpu
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'send' => 'send',
            'receive' => 'receive',
            'cpu' => 'cpu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  Qos类型 - aduio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    * send  send
    * receive  receive
    * cpu  cpu
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'send' => 'setSend',
            'receive' => 'setReceive',
            'cpu' => 'setCpu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  Qos类型 - aduio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    * send  send
    * receive  receive
    * cpu  cpu
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'send' => 'getSend',
            'receive' => 'getReceive',
            'cpu' => 'getCpu'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['send'] = isset($data['send']) ? $data['send'] : null;
        $this->container['receive'] = isset($data['receive']) ? $data['receive'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
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
    * Gets type
    *  Qos类型 - aduio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type Qos类型 - aduio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets send
    *  send
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosSendReceiveInfo|null
    */
    public function getSend()
    {
        return $this->container['send'];
    }

    /**
    * Sets send
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosSendReceiveInfo|null $send send
    *
    * @return $this
    */
    public function setSend($send)
    {
        $this->container['send'] = $send;
        return $this;
    }

    /**
    * Gets receive
    *  receive
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosSendReceiveInfo|null
    */
    public function getReceive()
    {
        return $this->container['receive'];
    }

    /**
    * Sets receive
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosSendReceiveInfo|null $receive receive
    *
    * @return $this
    */
    public function setReceive($receive)
    {
        $this->container['receive'] = $receive;
        return $this;
    }

    /**
    * Gets cpu
    *  cpu
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosCpuInfo|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosCpuInfo|null $cpu cpu
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
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

