<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClipInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClipInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * input  input
    * timelineStart  剪切开始时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * timelineEnd  剪切结束时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'timelineStart' => 'string',
            'timelineEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * input  input
    * timelineStart  剪切开始时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * timelineEnd  剪切结束时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'input' => null,
        'timelineStart' => null,
        'timelineEnd' => null
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
    * input  input
    * timelineStart  剪切开始时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * timelineEnd  剪切结束时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'input' => 'input',
            'timelineStart' => 'timeline_start',
            'timelineEnd' => 'timeline_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * input  input
    * timelineStart  剪切开始时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * timelineEnd  剪切结束时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @var string[]
    */
    protected static $setters = [
            'input' => 'setInput',
            'timelineStart' => 'setTimelineStart',
            'timelineEnd' => 'setTimelineEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * input  input
    * timelineStart  剪切开始时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * timelineEnd  剪切结束时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @var string[]
    */
    protected static $getters = [
            'input' => 'getInput',
            'timelineStart' => 'getTimelineStart',
            'timelineEnd' => 'getTimelineEnd'
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['timelineStart'] = isset($data['timelineStart']) ? $data['timelineStart'] : null;
        $this->container['timelineEnd'] = isset($data['timelineEnd']) ? $data['timelineEnd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timelineStart']) && (mb_strlen($this->container['timelineStart']) > 32)) {
                $invalidProperties[] = "invalid value for 'timelineStart', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['timelineStart']) && (mb_strlen($this->container['timelineStart']) < 0)) {
                $invalidProperties[] = "invalid value for 'timelineStart', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timelineEnd']) && (mb_strlen($this->container['timelineEnd']) > 32)) {
                $invalidProperties[] = "invalid value for 'timelineEnd', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['timelineEnd']) && (mb_strlen($this->container['timelineEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'timelineEnd', the character length must be bigger than or equal to 0.";
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
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets timelineStart
    *  剪切开始时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @return string|null
    */
    public function getTimelineStart()
    {
        return $this->container['timelineStart'];
    }

    /**
    * Sets timelineStart
    *
    * @param string|null $timelineStart 剪切开始时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @return $this
    */
    public function setTimelineStart($timelineStart)
    {
        $this->container['timelineStart'] = $timelineStart;
        return $this;
    }

    /**
    * Gets timelineEnd
    *  剪切结束时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @return string|null
    */
    public function getTimelineEnd()
    {
        return $this->container['timelineEnd'];
    }

    /**
    * Sets timelineEnd
    *
    * @param string|null $timelineEnd 剪切结束时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @return $this
    */
    public function setTimelineEnd($timelineEnd)
    {
        $this->container['timelineEnd'] = $timelineEnd;
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

