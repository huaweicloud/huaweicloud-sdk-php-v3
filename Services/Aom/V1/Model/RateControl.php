<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RateControl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RateControl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * haveRateControl  是否分批发布，默认值是false。
    * timeDelay  每批间隔。
    * max  每批支持的最大实例数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'haveRateControl' => 'bool',
            'timeDelay' => 'int',
            'max' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * haveRateControl  是否分批发布，默认值是false。
    * timeDelay  每批间隔。
    * max  每批支持的最大实例数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'haveRateControl' => null,
        'timeDelay' => 'int32',
        'max' => 'int32'
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
    * haveRateControl  是否分批发布，默认值是false。
    * timeDelay  每批间隔。
    * max  每批支持的最大实例数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'haveRateControl' => 'have_rate_control',
            'timeDelay' => 'time_delay',
            'max' => 'max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * haveRateControl  是否分批发布，默认值是false。
    * timeDelay  每批间隔。
    * max  每批支持的最大实例数。
    *
    * @var string[]
    */
    protected static $setters = [
            'haveRateControl' => 'setHaveRateControl',
            'timeDelay' => 'setTimeDelay',
            'max' => 'setMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * haveRateControl  是否分批发布，默认值是false。
    * timeDelay  每批间隔。
    * max  每批支持的最大实例数。
    *
    * @var string[]
    */
    protected static $getters = [
            'haveRateControl' => 'getHaveRateControl',
            'timeDelay' => 'getTimeDelay',
            'max' => 'getMax'
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
        $this->container['haveRateControl'] = isset($data['haveRateControl']) ? $data['haveRateControl'] : null;
        $this->container['timeDelay'] = isset($data['timeDelay']) ? $data['timeDelay'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timeDelay']) && ($this->container['timeDelay'] > 60)) {
                $invalidProperties[] = "invalid value for 'timeDelay', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['timeDelay']) && ($this->container['timeDelay'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeDelay', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['max']) && ($this->container['max'] > 100)) {
                $invalidProperties[] = "invalid value for 'max', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['max']) && ($this->container['max'] < 0)) {
                $invalidProperties[] = "invalid value for 'max', must be bigger than or equal to 0.";
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
    * Gets haveRateControl
    *  是否分批发布，默认值是false。
    *
    * @return bool|null
    */
    public function getHaveRateControl()
    {
        return $this->container['haveRateControl'];
    }

    /**
    * Sets haveRateControl
    *
    * @param bool|null $haveRateControl 是否分批发布，默认值是false。
    *
    * @return $this
    */
    public function setHaveRateControl($haveRateControl)
    {
        $this->container['haveRateControl'] = $haveRateControl;
        return $this;
    }

    /**
    * Gets timeDelay
    *  每批间隔。
    *
    * @return int|null
    */
    public function getTimeDelay()
    {
        return $this->container['timeDelay'];
    }

    /**
    * Sets timeDelay
    *
    * @param int|null $timeDelay 每批间隔。
    *
    * @return $this
    */
    public function setTimeDelay($timeDelay)
    {
        $this->container['timeDelay'] = $timeDelay;
        return $this;
    }

    /**
    * Gets max
    *  每批支持的最大实例数。
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max 每批支持的最大实例数。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
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

