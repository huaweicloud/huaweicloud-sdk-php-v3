<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoProcess';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。 取值范围：[0,10]，默认值为：0 与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长。 取值范围：[2,10] ，默认值为：5 hls_init_count不为0时，该字段才起作用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hlsInitCount' => 'int',
            'hlsInitInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。 取值范围：[0,10]，默认值为：0 与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长。 取值范围：[2,10] ，默认值为：5 hls_init_count不为0时，该字段才起作用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hlsInitCount' => 'int32',
        'hlsInitInterval' => 'int32'
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
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。 取值范围：[0,10]，默认值为：0 与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长。 取值范围：[2,10] ，默认值为：5 hls_init_count不为0时，该字段才起作用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hlsInitCount' => 'hls_init_count',
            'hlsInitInterval' => 'hls_init_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。 取值范围：[0,10]，默认值为：0 与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长。 取值范围：[2,10] ，默认值为：5 hls_init_count不为0时，该字段才起作用。
    *
    * @var string[]
    */
    protected static $setters = [
            'hlsInitCount' => 'setHlsInitCount',
            'hlsInitInterval' => 'setHlsInitInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。 取值范围：[0,10]，默认值为：0 与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长。 取值范围：[2,10] ，默认值为：5 hls_init_count不为0时，该字段才起作用。
    *
    * @var string[]
    */
    protected static $getters = [
            'hlsInitCount' => 'getHlsInitCount',
            'hlsInitInterval' => 'getHlsInitInterval'
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
        $this->container['hlsInitCount'] = isset($data['hlsInitCount']) ? $data['hlsInitCount'] : null;
        $this->container['hlsInitInterval'] = isset($data['hlsInitInterval']) ? $data['hlsInitInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hlsInitCount']) && ($this->container['hlsInitCount'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsInitCount', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsInitCount']) && ($this->container['hlsInitCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'hlsInitCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hlsInitInterval']) && ($this->container['hlsInitInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsInitInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsInitInterval']) && ($this->container['hlsInitInterval'] < 2)) {
                $invalidProperties[] = "invalid value for 'hlsInitInterval', must be bigger than or equal to 2.";
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
    * Gets hlsInitCount
    *  需要单独设置时长的HLS起始分片数量。 取值范围：[0,10]，默认值为：0 与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。为0表示不单独配置时长。
    *
    * @return int|null
    */
    public function getHlsInitCount()
    {
        return $this->container['hlsInitCount'];
    }

    /**
    * Sets hlsInitCount
    *
    * @param int|null $hlsInitCount 需要单独设置时长的HLS起始分片数量。 取值范围：[0,10]，默认值为：0 与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。为0表示不单独配置时长。
    *
    * @return $this
    */
    public function setHlsInitCount($hlsInitCount)
    {
        $this->container['hlsInitCount'] = $hlsInitCount;
        return $this;
    }

    /**
    * Gets hlsInitInterval
    *  表示前面hls_init_count个HLS分片的时长。 取值范围：[2,10] ，默认值为：5 hls_init_count不为0时，该字段才起作用。
    *
    * @return int|null
    */
    public function getHlsInitInterval()
    {
        return $this->container['hlsInitInterval'];
    }

    /**
    * Sets hlsInitInterval
    *
    * @param int|null $hlsInitInterval 表示前面hls_init_count个HLS分片的时长。 取值范围：[2,10] ，默认值为：5 hls_init_count不为0时，该字段才起作用。
    *
    * @return $this
    */
    public function setHlsInitInterval($hlsInitInterval)
    {
        $this->container['hlsInitInterval'] = $hlsInitInterval;
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

