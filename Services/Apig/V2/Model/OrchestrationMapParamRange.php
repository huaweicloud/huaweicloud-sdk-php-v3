<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrchestrationMapParamRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrchestrationMapParamRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rangeStart  区间起始值。  为可以转换成integer的string，转换后的range_start的范围为0-9223372036854775807， range_start不大于range_end。
    * rangeEnd  区间终止值。  为可以转换成integer的string，转换后的range_end的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rangeStart' => 'string',
            'rangeEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rangeStart  区间起始值。  为可以转换成integer的string，转换后的range_start的范围为0-9223372036854775807， range_start不大于range_end。
    * rangeEnd  区间终止值。  为可以转换成integer的string，转换后的range_end的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rangeStart' => null,
        'rangeEnd' => null
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
    * rangeStart  区间起始值。  为可以转换成integer的string，转换后的range_start的范围为0-9223372036854775807， range_start不大于range_end。
    * rangeEnd  区间终止值。  为可以转换成integer的string，转换后的range_end的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rangeStart' => 'range_start',
            'rangeEnd' => 'range_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rangeStart  区间起始值。  为可以转换成integer的string，转换后的range_start的范围为0-9223372036854775807， range_start不大于range_end。
    * rangeEnd  区间终止值。  为可以转换成integer的string，转换后的range_end的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @var string[]
    */
    protected static $setters = [
            'rangeStart' => 'setRangeStart',
            'rangeEnd' => 'setRangeEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rangeStart  区间起始值。  为可以转换成integer的string，转换后的range_start的范围为0-9223372036854775807， range_start不大于range_end。
    * rangeEnd  区间终止值。  为可以转换成integer的string，转换后的range_end的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @var string[]
    */
    protected static $getters = [
            'rangeStart' => 'getRangeStart',
            'rangeEnd' => 'getRangeEnd'
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
        $this->container['rangeStart'] = isset($data['rangeStart']) ? $data['rangeStart'] : null;
        $this->container['rangeEnd'] = isset($data['rangeEnd']) ? $data['rangeEnd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['rangeStart']) && !preg_match("/^(\\d|[1-9]\\d{1,17}|[1-8]\\d{18}|9[01]\\d{17}|92[01]\\d{16}|922[0-2]\\d{15}|9223[0-2]\\d{14}|92233[0-6]\\d{13}|922337[01]\\d{12}|92233720[0-2]\\d{10}|922337203[0-5]\\d{9}|9223372036[0-7]\\d{8}|92233720368[0-4]\\d{7}|922337203685[0-3]\\d{6}|9223372036854[0-6]\\d{5}|92233720368547[0-6]\\d{4}|922337203685477[0-4]\\d{3}|9223372036854775[0-7]\\d{2}|922337203685477580[0-7])$/", $this->container['rangeStart'])) {
                $invalidProperties[] = "invalid value for 'rangeStart', must be conform to the pattern /^(\\d|[1-9]\\d{1,17}|[1-8]\\d{18}|9[01]\\d{17}|92[01]\\d{16}|922[0-2]\\d{15}|9223[0-2]\\d{14}|92233[0-6]\\d{13}|922337[01]\\d{12}|92233720[0-2]\\d{10}|922337203[0-5]\\d{9}|9223372036[0-7]\\d{8}|92233720368[0-4]\\d{7}|922337203685[0-3]\\d{6}|9223372036854[0-6]\\d{5}|92233720368547[0-6]\\d{4}|922337203685477[0-4]\\d{3}|9223372036854775[0-7]\\d{2}|922337203685477580[0-7])$/.";
            }
            if (!is_null($this->container['rangeEnd']) && !preg_match("/^(\\d|[1-9]\\d{1,17}|[1-8]\\d{18}|9[01]\\d{17}|92[01]\\d{16}|922[0-2]\\d{15}|9223[0-2]\\d{14}|92233[0-6]\\d{13}|922337[01]\\d{12}|92233720[0-2]\\d{10}|922337203[0-5]\\d{9}|9223372036[0-7]\\d{8}|92233720368[0-4]\\d{7}|922337203685[0-3]\\d{6}|9223372036854[0-6]\\d{5}|92233720368547[0-6]\\d{4}|922337203685477[0-4]\\d{3}|9223372036854775[0-7]\\d{2}|922337203685477580[0-7])$/", $this->container['rangeEnd'])) {
                $invalidProperties[] = "invalid value for 'rangeEnd', must be conform to the pattern /^(\\d|[1-9]\\d{1,17}|[1-8]\\d{18}|9[01]\\d{17}|92[01]\\d{16}|922[0-2]\\d{15}|9223[0-2]\\d{14}|92233[0-6]\\d{13}|922337[01]\\d{12}|92233720[0-2]\\d{10}|922337203[0-5]\\d{9}|9223372036[0-7]\\d{8}|92233720368[0-4]\\d{7}|922337203685[0-3]\\d{6}|9223372036854[0-6]\\d{5}|92233720368547[0-6]\\d{4}|922337203685477[0-4]\\d{3}|9223372036854775[0-7]\\d{2}|922337203685477580[0-7])$/.";
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
    * Gets rangeStart
    *  区间起始值。  为可以转换成integer的string，转换后的range_start的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @return string|null
    */
    public function getRangeStart()
    {
        return $this->container['rangeStart'];
    }

    /**
    * Sets rangeStart
    *
    * @param string|null $rangeStart 区间起始值。  为可以转换成integer的string，转换后的range_start的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @return $this
    */
    public function setRangeStart($rangeStart)
    {
        $this->container['rangeStart'] = $rangeStart;
        return $this;
    }

    /**
    * Gets rangeEnd
    *  区间终止值。  为可以转换成integer的string，转换后的range_end的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @return string|null
    */
    public function getRangeEnd()
    {
        return $this->container['rangeEnd'];
    }

    /**
    * Sets rangeEnd
    *
    * @param string|null $rangeEnd 区间终止值。  为可以转换成integer的string，转换后的range_end的范围为0-9223372036854775807， range_start不大于range_end。
    *
    * @return $this
    */
    public function setRangeEnd($rangeEnd)
    {
        $this->container['rangeEnd'] = $rangeEnd;
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

