<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepoLastStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepoLastStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * event  event
    * total  **参数解释：** 统计信息数量 **取值范围：** 最小0 **默认取值：** 0
    * statistics  统计信息
    * codelines  仓库近15日每日代码提交增减行数信息。
    * count  **参数解释：** 分支提交总数。 **取值范围：** 最小0 **默认取值：** 0
    * allBranchCommitsCount  **参数解释：** 仓库提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'event' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticEventsDto',
            'total' => 'int',
            'statistics' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticDto[]',
            'codelines' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CodelineDto[]',
            'count' => 'int',
            'allBranchCommitsCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * event  event
    * total  **参数解释：** 统计信息数量 **取值范围：** 最小0 **默认取值：** 0
    * statistics  统计信息
    * codelines  仓库近15日每日代码提交增减行数信息。
    * count  **参数解释：** 分支提交总数。 **取值范围：** 最小0 **默认取值：** 0
    * allBranchCommitsCount  **参数解释：** 仓库提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'event' => null,
        'total' => 'int32',
        'statistics' => null,
        'codelines' => null,
        'count' => 'int32',
        'allBranchCommitsCount' => 'int32'
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
    * event  event
    * total  **参数解释：** 统计信息数量 **取值范围：** 最小0 **默认取值：** 0
    * statistics  统计信息
    * codelines  仓库近15日每日代码提交增减行数信息。
    * count  **参数解释：** 分支提交总数。 **取值范围：** 最小0 **默认取值：** 0
    * allBranchCommitsCount  **参数解释：** 仓库提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'event' => 'event',
            'total' => 'total',
            'statistics' => 'statistics',
            'codelines' => 'codelines',
            'count' => 'count',
            'allBranchCommitsCount' => 'all_branch_commits_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * event  event
    * total  **参数解释：** 统计信息数量 **取值范围：** 最小0 **默认取值：** 0
    * statistics  统计信息
    * codelines  仓库近15日每日代码提交增减行数信息。
    * count  **参数解释：** 分支提交总数。 **取值范围：** 最小0 **默认取值：** 0
    * allBranchCommitsCount  **参数解释：** 仓库提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $setters = [
            'event' => 'setEvent',
            'total' => 'setTotal',
            'statistics' => 'setStatistics',
            'codelines' => 'setCodelines',
            'count' => 'setCount',
            'allBranchCommitsCount' => 'setAllBranchCommitsCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * event  event
    * total  **参数解释：** 统计信息数量 **取值范围：** 最小0 **默认取值：** 0
    * statistics  统计信息
    * codelines  仓库近15日每日代码提交增减行数信息。
    * count  **参数解释：** 分支提交总数。 **取值范围：** 最小0 **默认取值：** 0
    * allBranchCommitsCount  **参数解释：** 仓库提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $getters = [
            'event' => 'getEvent',
            'total' => 'getTotal',
            'statistics' => 'getStatistics',
            'codelines' => 'getCodelines',
            'count' => 'getCount',
            'allBranchCommitsCount' => 'getAllBranchCommitsCount'
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
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['codelines'] = isset($data['codelines']) ? $data['codelines'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['allBranchCommitsCount'] = isset($data['allBranchCommitsCount']) ? $data['allBranchCommitsCount'] : null;
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
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allBranchCommitsCount']) && ($this->container['allBranchCommitsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'allBranchCommitsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['allBranchCommitsCount']) && ($this->container['allBranchCommitsCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'allBranchCommitsCount', must be bigger than or equal to 0.";
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
    * Gets event
    *  event
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticEventsDto|null
    */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
    * Sets event
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticEventsDto|null $event event
    *
    * @return $this
    */
    public function setEvent($event)
    {
        $this->container['event'] = $event;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释：** 统计信息数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释：** 统计信息数量 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets statistics
    *  统计信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticDto[]|null
    */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
    * Sets statistics
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticDto[]|null $statistics 统计信息
    *
    * @return $this
    */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;
        return $this;
    }

    /**
    * Gets codelines
    *  仓库近15日每日代码提交增减行数信息。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CodelineDto[]|null
    */
    public function getCodelines()
    {
        return $this->container['codelines'];
    }

    /**
    * Sets codelines
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CodelineDto[]|null $codelines 仓库近15日每日代码提交增减行数信息。
    *
    * @return $this
    */
    public function setCodelines($codelines)
    {
        $this->container['codelines'] = $codelines;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释：** 分支提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释：** 分支提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets allBranchCommitsCount
    *  **参数解释：** 仓库提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getAllBranchCommitsCount()
    {
        return $this->container['allBranchCommitsCount'];
    }

    /**
    * Sets allBranchCommitsCount
    *
    * @param int|null $allBranchCommitsCount **参数解释：** 仓库提交总数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return $this
    */
    public function setAllBranchCommitsCount($allBranchCommitsCount)
    {
        $this->container['allBranchCommitsCount'] = $allBranchCommitsCount;
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

