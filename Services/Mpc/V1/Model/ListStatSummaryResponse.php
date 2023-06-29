<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStatSummaryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStatSummaryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * summary  统计概览信息
    * total  该指标的总值，精确到小数点后两位。
    * statType  统计类型。取值如下： - video_duration, 转码片源时长统计，单位：分钟。 - remux_file_duration，转封装片源时长统计，单位：分钟。 - transcode_task_number，转码次数统计，单位：次。 - transcode_duration，转码耗时时长统计，单位：分钟。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'summary' => '\HuaweiCloud\SDK\Mpc\V1\Model\StatSummary[]',
            'total' => 'float',
            'statType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * summary  统计概览信息
    * total  该指标的总值，精确到小数点后两位。
    * statType  统计类型。取值如下： - video_duration, 转码片源时长统计，单位：分钟。 - remux_file_duration，转封装片源时长统计，单位：分钟。 - transcode_task_number，转码次数统计，单位：次。 - transcode_duration，转码耗时时长统计，单位：分钟。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'summary' => null,
        'total' => 'float',
        'statType' => null
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
    * summary  统计概览信息
    * total  该指标的总值，精确到小数点后两位。
    * statType  统计类型。取值如下： - video_duration, 转码片源时长统计，单位：分钟。 - remux_file_duration，转封装片源时长统计，单位：分钟。 - transcode_task_number，转码次数统计，单位：次。 - transcode_duration，转码耗时时长统计，单位：分钟。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'summary' => 'summary',
            'total' => 'total',
            'statType' => 'stat_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * summary  统计概览信息
    * total  该指标的总值，精确到小数点后两位。
    * statType  统计类型。取值如下： - video_duration, 转码片源时长统计，单位：分钟。 - remux_file_duration，转封装片源时长统计，单位：分钟。 - transcode_task_number，转码次数统计，单位：次。 - transcode_duration，转码耗时时长统计，单位：分钟。
    *
    * @var string[]
    */
    protected static $setters = [
            'summary' => 'setSummary',
            'total' => 'setTotal',
            'statType' => 'setStatType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * summary  统计概览信息
    * total  该指标的总值，精确到小数点后两位。
    * statType  统计类型。取值如下： - video_duration, 转码片源时长统计，单位：分钟。 - remux_file_duration，转封装片源时长统计，单位：分钟。 - transcode_task_number，转码次数统计，单位：次。 - transcode_duration，转码耗时时长统计，单位：分钟。
    *
    * @var string[]
    */
    protected static $getters = [
            'summary' => 'getSummary',
            'total' => 'getTotal',
            'statType' => 'getStatType'
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
    const STAT_TYPE_VIDEO_DURATION = 'video_duration';
    const STAT_TYPE_REMUX_FILE_DURATION = 'remux_file_duration';
    const STAT_TYPE_TRANSCODE_TASK_NUMBER = 'transcode_task_number';
    const STAT_TYPE_TRANSCODE_DURATION = 'transcode_duration';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatTypeAllowableValues()
    {
        return [
            self::STAT_TYPE_VIDEO_DURATION,
            self::STAT_TYPE_REMUX_FILE_DURATION,
            self::STAT_TYPE_TRANSCODE_TASK_NUMBER,
            self::STAT_TYPE_TRANSCODE_DURATION,
        ];
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
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatTypeAllowableValues();
                if (!is_null($this->container['statType']) && !in_array($this->container['statType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['statType']) && (mb_strlen($this->container['statType']) > 64)) {
                $invalidProperties[] = "invalid value for 'statType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['statType']) && (mb_strlen($this->container['statType']) < 0)) {
                $invalidProperties[] = "invalid value for 'statType', the character length must be bigger than or equal to 0.";
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
    * Gets summary
    *  统计概览信息
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\StatSummary[]|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\StatSummary[]|null $summary 统计概览信息
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
        return $this;
    }

    /**
    * Gets total
    *  该指标的总值，精确到小数点后两位。
    *
    * @return float|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param float|null $total 该指标的总值，精确到小数点后两位。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets statType
    *  统计类型。取值如下： - video_duration, 转码片源时长统计，单位：分钟。 - remux_file_duration，转封装片源时长统计，单位：分钟。 - transcode_task_number，转码次数统计，单位：次。 - transcode_duration，转码耗时时长统计，单位：分钟。
    *
    * @return string|null
    */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
    * Sets statType
    *
    * @param string|null $statType 统计类型。取值如下： - video_duration, 转码片源时长统计，单位：分钟。 - remux_file_duration，转封装片源时长统计，单位：分钟。 - transcode_task_number，转码次数统计，单位：次。 - transcode_duration，转码耗时时长统计，单位：分钟。
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
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

