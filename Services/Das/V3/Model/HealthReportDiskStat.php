<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportDiskStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportDiskStat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * peakStats  峰值统计信息列表。
    * ratioStats  比率值数据列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'peakStats' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSingleValueStat[]',
            'ratioStats' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportRatioStat[]',
            'analyzeSuccess' => 'bool',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * peakStats  峰值统计信息列表。
    * ratioStats  比率值数据列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'peakStats' => null,
        'ratioStats' => null,
        'analyzeSuccess' => null,
        'errorMessage' => null
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
    * peakStats  峰值统计信息列表。
    * ratioStats  比率值数据列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'peakStats' => 'peak_stats',
            'ratioStats' => 'ratio_stats',
            'analyzeSuccess' => 'analyze_success',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * peakStats  峰值统计信息列表。
    * ratioStats  比率值数据列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'peakStats' => 'setPeakStats',
            'ratioStats' => 'setRatioStats',
            'analyzeSuccess' => 'setAnalyzeSuccess',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * peakStats  峰值统计信息列表。
    * ratioStats  比率值数据列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'peakStats' => 'getPeakStats',
            'ratioStats' => 'getRatioStats',
            'analyzeSuccess' => 'getAnalyzeSuccess',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['peakStats'] = isset($data['peakStats']) ? $data['peakStats'] : null;
        $this->container['ratioStats'] = isset($data['ratioStats']) ? $data['ratioStats'] : null;
        $this->container['analyzeSuccess'] = isset($data['analyzeSuccess']) ? $data['analyzeSuccess'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['peakStats'] === null) {
            $invalidProperties[] = "'peakStats' can't be null";
        }
        if ($this->container['ratioStats'] === null) {
            $invalidProperties[] = "'ratioStats' can't be null";
        }
        if ($this->container['analyzeSuccess'] === null) {
            $invalidProperties[] = "'analyzeSuccess' can't be null";
        }
        if ($this->container['errorMessage'] === null) {
            $invalidProperties[] = "'errorMessage' can't be null";
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
    * Gets peakStats
    *  峰值统计信息列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSingleValueStat[]
    */
    public function getPeakStats()
    {
        return $this->container['peakStats'];
    }

    /**
    * Sets peakStats
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSingleValueStat[] $peakStats 峰值统计信息列表。
    *
    * @return $this
    */
    public function setPeakStats($peakStats)
    {
        $this->container['peakStats'] = $peakStats;
        return $this;
    }

    /**
    * Gets ratioStats
    *  比率值数据列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportRatioStat[]
    */
    public function getRatioStats()
    {
        return $this->container['ratioStats'];
    }

    /**
    * Sets ratioStats
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportRatioStat[] $ratioStats 比率值数据列表。
    *
    * @return $this
    */
    public function setRatioStats($ratioStats)
    {
        $this->container['ratioStats'] = $ratioStats;
        return $this;
    }

    /**
    * Gets analyzeSuccess
    *  统计分析是否成功。
    *
    * @return bool
    */
    public function getAnalyzeSuccess()
    {
        return $this->container['analyzeSuccess'];
    }

    /**
    * Sets analyzeSuccess
    *
    * @param bool $analyzeSuccess 统计分析是否成功。
    *
    * @return $this
    */
    public function setAnalyzeSuccess($analyzeSuccess)
    {
        $this->container['analyzeSuccess'] = $analyzeSuccess;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

