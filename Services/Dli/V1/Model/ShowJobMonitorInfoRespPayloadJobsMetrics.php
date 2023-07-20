<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobMonitorInfoRespPayloadJobsMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobMonitorInfoResp_payload_jobs_metrics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sources  所有输入流。
    * sinks  所有输出流。
    * totalReadRate  总输入速率
    * totalWriteRate  总输出速率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sources' => '\HuaweiCloud\SDK\Dli\V1\Model\ShowJobMonitorInfoRespPayloadJobsMetricsSources[]',
            'sinks' => '\HuaweiCloud\SDK\Dli\V1\Model\ShowJobMonitorInfoRespPayloadJobsMetricsSources[]',
            'totalReadRate' => 'double',
            'totalWriteRate' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sources  所有输入流。
    * sinks  所有输出流。
    * totalReadRate  总输入速率
    * totalWriteRate  总输出速率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sources' => null,
        'sinks' => null,
        'totalReadRate' => 'double',
        'totalWriteRate' => 'double'
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
    * sources  所有输入流。
    * sinks  所有输出流。
    * totalReadRate  总输入速率
    * totalWriteRate  总输出速率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sources' => 'sources',
            'sinks' => 'sinks',
            'totalReadRate' => 'total_read_rate',
            'totalWriteRate' => 'total_write_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sources  所有输入流。
    * sinks  所有输出流。
    * totalReadRate  总输入速率
    * totalWriteRate  总输出速率
    *
    * @var string[]
    */
    protected static $setters = [
            'sources' => 'setSources',
            'sinks' => 'setSinks',
            'totalReadRate' => 'setTotalReadRate',
            'totalWriteRate' => 'setTotalWriteRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sources  所有输入流。
    * sinks  所有输出流。
    * totalReadRate  总输入速率
    * totalWriteRate  总输出速率
    *
    * @var string[]
    */
    protected static $getters = [
            'sources' => 'getSources',
            'sinks' => 'getSinks',
            'totalReadRate' => 'getTotalReadRate',
            'totalWriteRate' => 'getTotalWriteRate'
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
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['sinks'] = isset($data['sinks']) ? $data['sinks'] : null;
        $this->container['totalReadRate'] = isset($data['totalReadRate']) ? $data['totalReadRate'] : null;
        $this->container['totalWriteRate'] = isset($data['totalWriteRate']) ? $data['totalWriteRate'] : null;
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
    * Gets sources
    *  所有输入流。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\ShowJobMonitorInfoRespPayloadJobsMetricsSources[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\ShowJobMonitorInfoRespPayloadJobsMetricsSources[]|null $sources 所有输入流。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets sinks
    *  所有输出流。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\ShowJobMonitorInfoRespPayloadJobsMetricsSources[]|null
    */
    public function getSinks()
    {
        return $this->container['sinks'];
    }

    /**
    * Sets sinks
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\ShowJobMonitorInfoRespPayloadJobsMetricsSources[]|null $sinks 所有输出流。
    *
    * @return $this
    */
    public function setSinks($sinks)
    {
        $this->container['sinks'] = $sinks;
        return $this;
    }

    /**
    * Gets totalReadRate
    *  总输入速率
    *
    * @return double|null
    */
    public function getTotalReadRate()
    {
        return $this->container['totalReadRate'];
    }

    /**
    * Sets totalReadRate
    *
    * @param double|null $totalReadRate 总输入速率
    *
    * @return $this
    */
    public function setTotalReadRate($totalReadRate)
    {
        $this->container['totalReadRate'] = $totalReadRate;
        return $this;
    }

    /**
    * Gets totalWriteRate
    *  总输出速率
    *
    * @return double|null
    */
    public function getTotalWriteRate()
    {
        return $this->container['totalWriteRate'];
    }

    /**
    * Sets totalWriteRate
    *
    * @param double|null $totalWriteRate 总输出速率
    *
    * @return $this
    */
    public function setTotalWriteRate($totalWriteRate)
    {
        $this->container['totalWriteRate'] = $totalWriteRate;
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

