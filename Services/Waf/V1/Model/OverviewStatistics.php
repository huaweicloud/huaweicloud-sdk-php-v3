<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OverviewStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OverviewStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    * accessTypeStats  按接入类型统计
    * categoryStats  分类别统计数据
    * actionStats  处置动作统计数据
    * timeRange  timeRange
    * activeAppCount  已开启的AI应用数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'textRequestCount' => 'int',
            'imageRequestCount' => 'int',
            'accessTypeStats' => '\HuaweiCloud\SDK\Waf\V1\Model\AccessTypeStatistics[]',
            'categoryStats' => '\HuaweiCloud\SDK\Waf\V1\Model\CategoryStatistics[]',
            'actionStats' => '\HuaweiCloud\SDK\Waf\V1\Model\ActionStatistics[]',
            'timeRange' => '\HuaweiCloud\SDK\Waf\V1\Model\TimeRange',
            'activeAppCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    * accessTypeStats  按接入类型统计
    * categoryStats  分类别统计数据
    * actionStats  处置动作统计数据
    * timeRange  timeRange
    * activeAppCount  已开启的AI应用数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'textRequestCount' => 'int64',
        'imageRequestCount' => 'int64',
        'accessTypeStats' => null,
        'categoryStats' => null,
        'actionStats' => null,
        'timeRange' => null,
        'activeAppCount' => 'int64'
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
    * projectId  项目ID
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    * accessTypeStats  按接入类型统计
    * categoryStats  分类别统计数据
    * actionStats  处置动作统计数据
    * timeRange  timeRange
    * activeAppCount  已开启的AI应用数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'textRequestCount' => 'text_request_count',
            'imageRequestCount' => 'image_request_count',
            'accessTypeStats' => 'access_type_stats',
            'categoryStats' => 'category_stats',
            'actionStats' => 'action_stats',
            'timeRange' => 'time_range',
            'activeAppCount' => 'active_app_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    * accessTypeStats  按接入类型统计
    * categoryStats  分类别统计数据
    * actionStats  处置动作统计数据
    * timeRange  timeRange
    * activeAppCount  已开启的AI应用数量
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'textRequestCount' => 'setTextRequestCount',
            'imageRequestCount' => 'setImageRequestCount',
            'accessTypeStats' => 'setAccessTypeStats',
            'categoryStats' => 'setCategoryStats',
            'actionStats' => 'setActionStats',
            'timeRange' => 'setTimeRange',
            'activeAppCount' => 'setActiveAppCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    * accessTypeStats  按接入类型统计
    * categoryStats  分类别统计数据
    * actionStats  处置动作统计数据
    * timeRange  timeRange
    * activeAppCount  已开启的AI应用数量
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'textRequestCount' => 'getTextRequestCount',
            'imageRequestCount' => 'getImageRequestCount',
            'accessTypeStats' => 'getAccessTypeStats',
            'categoryStats' => 'getCategoryStats',
            'actionStats' => 'getActionStats',
            'timeRange' => 'getTimeRange',
            'activeAppCount' => 'getActiveAppCount'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['textRequestCount'] = isset($data['textRequestCount']) ? $data['textRequestCount'] : null;
        $this->container['imageRequestCount'] = isset($data['imageRequestCount']) ? $data['imageRequestCount'] : null;
        $this->container['accessTypeStats'] = isset($data['accessTypeStats']) ? $data['accessTypeStats'] : null;
        $this->container['categoryStats'] = isset($data['categoryStats']) ? $data['categoryStats'] : null;
        $this->container['actionStats'] = isset($data['actionStats']) ? $data['actionStats'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['activeAppCount'] = isset($data['activeAppCount']) ? $data['activeAppCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['textRequestCount'] === null) {
            $invalidProperties[] = "'textRequestCount' can't be null";
        }
        if ($this->container['imageRequestCount'] === null) {
            $invalidProperties[] = "'imageRequestCount' can't be null";
        }
        if ($this->container['accessTypeStats'] === null) {
            $invalidProperties[] = "'accessTypeStats' can't be null";
        }
        if ($this->container['categoryStats'] === null) {
            $invalidProperties[] = "'categoryStats' can't be null";
        }
        if ($this->container['actionStats'] === null) {
            $invalidProperties[] = "'actionStats' can't be null";
        }
        if ($this->container['timeRange'] === null) {
            $invalidProperties[] = "'timeRange' can't be null";
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets textRequestCount
    *  用户输入请求数
    *
    * @return int
    */
    public function getTextRequestCount()
    {
        return $this->container['textRequestCount'];
    }

    /**
    * Sets textRequestCount
    *
    * @param int $textRequestCount 用户输入请求数
    *
    * @return $this
    */
    public function setTextRequestCount($textRequestCount)
    {
        $this->container['textRequestCount'] = $textRequestCount;
        return $this;
    }

    /**
    * Gets imageRequestCount
    *  用户输出请求数
    *
    * @return int
    */
    public function getImageRequestCount()
    {
        return $this->container['imageRequestCount'];
    }

    /**
    * Sets imageRequestCount
    *
    * @param int $imageRequestCount 用户输出请求数
    *
    * @return $this
    */
    public function setImageRequestCount($imageRequestCount)
    {
        $this->container['imageRequestCount'] = $imageRequestCount;
        return $this;
    }

    /**
    * Gets accessTypeStats
    *  按接入类型统计
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AccessTypeStatistics[]
    */
    public function getAccessTypeStats()
    {
        return $this->container['accessTypeStats'];
    }

    /**
    * Sets accessTypeStats
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AccessTypeStatistics[] $accessTypeStats 按接入类型统计
    *
    * @return $this
    */
    public function setAccessTypeStats($accessTypeStats)
    {
        $this->container['accessTypeStats'] = $accessTypeStats;
        return $this;
    }

    /**
    * Gets categoryStats
    *  分类别统计数据
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CategoryStatistics[]
    */
    public function getCategoryStats()
    {
        return $this->container['categoryStats'];
    }

    /**
    * Sets categoryStats
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CategoryStatistics[] $categoryStats 分类别统计数据
    *
    * @return $this
    */
    public function setCategoryStats($categoryStats)
    {
        $this->container['categoryStats'] = $categoryStats;
        return $this;
    }

    /**
    * Gets actionStats
    *  处置动作统计数据
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ActionStatistics[]
    */
    public function getActionStats()
    {
        return $this->container['actionStats'];
    }

    /**
    * Sets actionStats
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ActionStatistics[] $actionStats 处置动作统计数据
    *
    * @return $this
    */
    public function setActionStats($actionStats)
    {
        $this->container['actionStats'] = $actionStats;
        return $this;
    }

    /**
    * Gets timeRange
    *  timeRange
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TimeRange
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TimeRange $timeRange timeRange
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets activeAppCount
    *  已开启的AI应用数量
    *
    * @return int|null
    */
    public function getActiveAppCount()
    {
        return $this->container['activeAppCount'];
    }

    /**
    * Sets activeAppCount
    *
    * @param int|null $activeAppCount 已开启的AI应用数量
    *
    * @return $this
    */
    public function setActiveAppCount($activeAppCount)
    {
        $this->container['activeAppCount'] = $activeAppCount;
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

