<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSyncTaskStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSyncTaskStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncTaskId  同步任务id
    * statisticTimeType  统计结果时间间隔说明描述 FIVE_MINUTES：5分钟 ONE_HOUR：1小时
    * statisticDatas  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncTaskId' => 'string',
            'statisticTimeType' => 'string',
            'statisticDatas' => '\HuaweiCloud\SDK\Oms\V2\Model\StatisticTypeData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncTaskId  同步任务id
    * statisticTimeType  统计结果时间间隔说明描述 FIVE_MINUTES：5分钟 ONE_HOUR：1小时
    * statisticDatas  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncTaskId' => null,
        'statisticTimeType' => null,
        'statisticDatas' => null
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
    * syncTaskId  同步任务id
    * statisticTimeType  统计结果时间间隔说明描述 FIVE_MINUTES：5分钟 ONE_HOUR：1小时
    * statisticDatas  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncTaskId' => 'sync_task_id',
            'statisticTimeType' => 'statistic_time_type',
            'statisticDatas' => 'statistic_datas'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncTaskId  同步任务id
    * statisticTimeType  统计结果时间间隔说明描述 FIVE_MINUTES：5分钟 ONE_HOUR：1小时
    * statisticDatas  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $setters = [
            'syncTaskId' => 'setSyncTaskId',
            'statisticTimeType' => 'setStatisticTimeType',
            'statisticDatas' => 'setStatisticDatas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncTaskId  同步任务id
    * statisticTimeType  统计结果时间间隔说明描述 FIVE_MINUTES：5分钟 ONE_HOUR：1小时
    * statisticDatas  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $getters = [
            'syncTaskId' => 'getSyncTaskId',
            'statisticTimeType' => 'getStatisticTimeType',
            'statisticDatas' => 'getStatisticDatas'
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
    const STATISTIC_TIME_TYPE_FIVE_MINUTES = 'FIVE_MINUTES';
    const STATISTIC_TIME_TYPE_ONE_HOUR = 'ONE_HOUR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatisticTimeTypeAllowableValues()
    {
        return [
            self::STATISTIC_TIME_TYPE_FIVE_MINUTES,
            self::STATISTIC_TIME_TYPE_ONE_HOUR,
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
        $this->container['syncTaskId'] = isset($data['syncTaskId']) ? $data['syncTaskId'] : null;
        $this->container['statisticTimeType'] = isset($data['statisticTimeType']) ? $data['statisticTimeType'] : null;
        $this->container['statisticDatas'] = isset($data['statisticDatas']) ? $data['statisticDatas'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['syncTaskId']) && (mb_strlen($this->container['syncTaskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'syncTaskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['syncTaskId']) && (mb_strlen($this->container['syncTaskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'syncTaskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['syncTaskId']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['syncTaskId'])) {
                $invalidProperties[] = "invalid value for 'syncTaskId', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getStatisticTimeTypeAllowableValues();
                if (!is_null($this->container['statisticTimeType']) && !in_array($this->container['statisticTimeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statisticTimeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['statisticTimeType']) && (mb_strlen($this->container['statisticTimeType']) > 255)) {
                $invalidProperties[] = "invalid value for 'statisticTimeType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['statisticTimeType']) && (mb_strlen($this->container['statisticTimeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'statisticTimeType', the character length must be bigger than or equal to 1.";
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
    * Gets syncTaskId
    *  同步任务id
    *
    * @return string|null
    */
    public function getSyncTaskId()
    {
        return $this->container['syncTaskId'];
    }

    /**
    * Sets syncTaskId
    *
    * @param string|null $syncTaskId 同步任务id
    *
    * @return $this
    */
    public function setSyncTaskId($syncTaskId)
    {
        $this->container['syncTaskId'] = $syncTaskId;
        return $this;
    }

    /**
    * Gets statisticTimeType
    *  统计结果时间间隔说明描述 FIVE_MINUTES：5分钟 ONE_HOUR：1小时
    *
    * @return string|null
    */
    public function getStatisticTimeType()
    {
        return $this->container['statisticTimeType'];
    }

    /**
    * Sets statisticTimeType
    *
    * @param string|null $statisticTimeType 统计结果时间间隔说明描述 FIVE_MINUTES：5分钟 ONE_HOUR：1小时
    *
    * @return $this
    */
    public function setStatisticTimeType($statisticTimeType)
    {
        $this->container['statisticTimeType'] = $statisticTimeType;
        return $this;
    }

    /**
    * Gets statisticDatas
    *  查询的同步任务统计结果集
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\StatisticTypeData[]|null
    */
    public function getStatisticDatas()
    {
        return $this->container['statisticDatas'];
    }

    /**
    * Sets statisticDatas
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\StatisticTypeData[]|null $statisticDatas 查询的同步任务统计结果集
    *
    * @return $this
    */
    public function setStatisticDatas($statisticDatas)
    {
        $this->container['statisticDatas'] = $statisticDatas;
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

