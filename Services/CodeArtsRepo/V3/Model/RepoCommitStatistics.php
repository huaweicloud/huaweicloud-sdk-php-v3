<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoCommitStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoCommitStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allBranchCommitsCount  仓库总提交次数
    * codelines  近15日每日代码提交行数
    * count  对应分支仓库总提交次数
    * event  event
    * statistics  仓库统计列表
    * total  仓库统计次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allBranchCommitsCount' => 'int',
            'codelines' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoDailyCodeline[]',
            'count' => 'int',
            'event' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoStatisticsEvent',
            'statistics' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoStatistics[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allBranchCommitsCount  仓库总提交次数
    * codelines  近15日每日代码提交行数
    * count  对应分支仓库总提交次数
    * event  event
    * statistics  仓库统计列表
    * total  仓库统计次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allBranchCommitsCount' => 'int32',
        'codelines' => null,
        'count' => 'int32',
        'event' => null,
        'statistics' => null,
        'total' => 'int32'
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
    * allBranchCommitsCount  仓库总提交次数
    * codelines  近15日每日代码提交行数
    * count  对应分支仓库总提交次数
    * event  event
    * statistics  仓库统计列表
    * total  仓库统计次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allBranchCommitsCount' => 'all_branch_commits_count',
            'codelines' => 'codelines',
            'count' => 'count',
            'event' => 'event',
            'statistics' => 'statistics',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allBranchCommitsCount  仓库总提交次数
    * codelines  近15日每日代码提交行数
    * count  对应分支仓库总提交次数
    * event  event
    * statistics  仓库统计列表
    * total  仓库统计次数
    *
    * @var string[]
    */
    protected static $setters = [
            'allBranchCommitsCount' => 'setAllBranchCommitsCount',
            'codelines' => 'setCodelines',
            'count' => 'setCount',
            'event' => 'setEvent',
            'statistics' => 'setStatistics',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allBranchCommitsCount  仓库总提交次数
    * codelines  近15日每日代码提交行数
    * count  对应分支仓库总提交次数
    * event  event
    * statistics  仓库统计列表
    * total  仓库统计次数
    *
    * @var string[]
    */
    protected static $getters = [
            'allBranchCommitsCount' => 'getAllBranchCommitsCount',
            'codelines' => 'getCodelines',
            'count' => 'getCount',
            'event' => 'getEvent',
            'statistics' => 'getStatistics',
            'total' => 'getTotal'
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
        $this->container['allBranchCommitsCount'] = isset($data['allBranchCommitsCount']) ? $data['allBranchCommitsCount'] : null;
        $this->container['codelines'] = isset($data['codelines']) ? $data['codelines'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets allBranchCommitsCount
    *  仓库总提交次数
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
    * @param int|null $allBranchCommitsCount 仓库总提交次数
    *
    * @return $this
    */
    public function setAllBranchCommitsCount($allBranchCommitsCount)
    {
        $this->container['allBranchCommitsCount'] = $allBranchCommitsCount;
        return $this;
    }

    /**
    * Gets codelines
    *  近15日每日代码提交行数
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoDailyCodeline[]|null
    */
    public function getCodelines()
    {
        return $this->container['codelines'];
    }

    /**
    * Sets codelines
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoDailyCodeline[]|null $codelines 近15日每日代码提交行数
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
    *  对应分支仓库总提交次数
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
    * @param int|null $count 对应分支仓库总提交次数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets event
    *  event
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoStatisticsEvent|null
    */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
    * Sets event
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoStatisticsEvent|null $event event
    *
    * @return $this
    */
    public function setEvent($event)
    {
        $this->container['event'] = $event;
        return $this;
    }

    /**
    * Gets statistics
    *  仓库统计列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoStatistics[]|null
    */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
    * Sets statistics
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\RepoStatistics[]|null $statistics 仓库统计列表
    *
    * @return $this
    */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;
        return $this;
    }

    /**
    * Gets total
    *  仓库统计次数
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
    * @param int|null $total 仓库统计次数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

