<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobBuildSuccessRatioResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobBuildSuccessRatio_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * branch  分支
    * totalSuccessCount  构建成功总数
    * totalCount  构建总数
    * totalSuccessRatioFraction  总成功比率分数
    * everyDayReport  每日构建成功率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'branch' => 'string',
            'totalSuccessCount' => 'int',
            'totalCount' => 'int',
            'totalSuccessRatioFraction' => 'string',
            'everyDayReport' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildSuccessRatioResultEveryDayReport[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * branch  分支
    * totalSuccessCount  构建成功总数
    * totalCount  构建总数
    * totalSuccessRatioFraction  总成功比率分数
    * everyDayReport  每日构建成功率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'branch' => null,
        'totalSuccessCount' => 'int32',
        'totalCount' => 'int32',
        'totalSuccessRatioFraction' => null,
        'everyDayReport' => null
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
    * jobId  任务ID
    * branch  分支
    * totalSuccessCount  构建成功总数
    * totalCount  构建总数
    * totalSuccessRatioFraction  总成功比率分数
    * everyDayReport  每日构建成功率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'branch' => 'branch',
            'totalSuccessCount' => 'total_success_count',
            'totalCount' => 'total_count',
            'totalSuccessRatioFraction' => 'total_success_ratio_fraction',
            'everyDayReport' => 'every_day_report'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * branch  分支
    * totalSuccessCount  构建成功总数
    * totalCount  构建总数
    * totalSuccessRatioFraction  总成功比率分数
    * everyDayReport  每日构建成功率
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'branch' => 'setBranch',
            'totalSuccessCount' => 'setTotalSuccessCount',
            'totalCount' => 'setTotalCount',
            'totalSuccessRatioFraction' => 'setTotalSuccessRatioFraction',
            'everyDayReport' => 'setEveryDayReport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * branch  分支
    * totalSuccessCount  构建成功总数
    * totalCount  构建总数
    * totalSuccessRatioFraction  总成功比率分数
    * everyDayReport  每日构建成功率
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'branch' => 'getBranch',
            'totalSuccessCount' => 'getTotalSuccessCount',
            'totalCount' => 'getTotalCount',
            'totalSuccessRatioFraction' => 'getTotalSuccessRatioFraction',
            'everyDayReport' => 'getEveryDayReport'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['totalSuccessCount'] = isset($data['totalSuccessCount']) ? $data['totalSuccessCount'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['totalSuccessRatioFraction'] = isset($data['totalSuccessRatioFraction']) ? $data['totalSuccessRatioFraction'] : null;
        $this->container['everyDayReport'] = isset($data['everyDayReport']) ? $data['everyDayReport'] : null;
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
    * Gets jobId
    *  任务ID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets branch
    *  分支
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 分支
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets totalSuccessCount
    *  构建成功总数
    *
    * @return int|null
    */
    public function getTotalSuccessCount()
    {
        return $this->container['totalSuccessCount'];
    }

    /**
    * Sets totalSuccessCount
    *
    * @param int|null $totalSuccessCount 构建成功总数
    *
    * @return $this
    */
    public function setTotalSuccessCount($totalSuccessCount)
    {
        $this->container['totalSuccessCount'] = $totalSuccessCount;
        return $this;
    }

    /**
    * Gets totalCount
    *  构建总数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 构建总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets totalSuccessRatioFraction
    *  总成功比率分数
    *
    * @return string|null
    */
    public function getTotalSuccessRatioFraction()
    {
        return $this->container['totalSuccessRatioFraction'];
    }

    /**
    * Sets totalSuccessRatioFraction
    *
    * @param string|null $totalSuccessRatioFraction 总成功比率分数
    *
    * @return $this
    */
    public function setTotalSuccessRatioFraction($totalSuccessRatioFraction)
    {
        $this->container['totalSuccessRatioFraction'] = $totalSuccessRatioFraction;
        return $this;
    }

    /**
    * Gets everyDayReport
    *  每日构建成功率
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildSuccessRatioResultEveryDayReport[]|null
    */
    public function getEveryDayReport()
    {
        return $this->container['everyDayReport'];
    }

    /**
    * Sets everyDayReport
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildSuccessRatioResultEveryDayReport[]|null $everyDayReport 每日构建成功率
    *
    * @return $this
    */
    public function setEveryDayReport($everyDayReport)
    {
        $this->container['everyDayReport'] = $everyDayReport;
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

