<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVodRetrievalResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVodRetrievalResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  统计起始时间
    * interval  采样时间间隔
    * sampleData  sampleData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'interval' => 'int',
            'sampleData' => '\HuaweiCloud\SDK\Vod\V1\Model\VodRetrievalData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  统计起始时间
    * interval  采样时间间隔
    * sampleData  sampleData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'interval' => null,
        'sampleData' => null
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
    * startTime  统计起始时间
    * interval  采样时间间隔
    * sampleData  sampleData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'interval' => 'interval',
            'sampleData' => 'sample_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  统计起始时间
    * interval  采样时间间隔
    * sampleData  sampleData
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'interval' => 'setInterval',
            'sampleData' => 'setSampleData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  统计起始时间
    * interval  采样时间间隔
    * sampleData  sampleData
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'interval' => 'getInterval',
            'sampleData' => 'getSampleData'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['sampleData'] = isset($data['sampleData']) ? $data['sampleData'] : null;
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
    * Gets startTime
    *  统计起始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 统计起始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets interval
    *  采样时间间隔
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
    * @param int|null $interval 采样时间间隔
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets sampleData
    *  sampleData
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\VodRetrievalData[]|null
    */
    public function getSampleData()
    {
        return $this->container['sampleData'];
    }

    /**
    * Sets sampleData
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\VodRetrievalData[]|null $sampleData sampleData
    *
    * @return $this
    */
    public function setSampleData($sampleData)
    {
        $this->container['sampleData'] = $sampleData;
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

