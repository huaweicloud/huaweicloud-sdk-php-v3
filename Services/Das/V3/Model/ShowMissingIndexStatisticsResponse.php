<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMissingIndexStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMissingIndexStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectTime  采集时间（ms）
    * totalMissingIndexCount  索引缺失总数
    * userImpactGt80Count  性能提示大于80%的数量
    * lastDayAccessedCount  近1天用户访问条数
    * lastWeekAccessedCount  近1周用户访问条数
    * lastTwoWeekAccessedCount  近2周用户访问条数
    * lastMonthAccessedCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectTime' => 'int',
            'totalMissingIndexCount' => 'int',
            'userImpactGt80Count' => 'int',
            'lastDayAccessedCount' => 'int',
            'lastWeekAccessedCount' => 'int',
            'lastTwoWeekAccessedCount' => 'int',
            'lastMonthAccessedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectTime  采集时间（ms）
    * totalMissingIndexCount  索引缺失总数
    * userImpactGt80Count  性能提示大于80%的数量
    * lastDayAccessedCount  近1天用户访问条数
    * lastWeekAccessedCount  近1周用户访问条数
    * lastTwoWeekAccessedCount  近2周用户访问条数
    * lastMonthAccessedCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectTime' => 'int64',
        'totalMissingIndexCount' => 'int64',
        'userImpactGt80Count' => 'int64',
        'lastDayAccessedCount' => 'int64',
        'lastWeekAccessedCount' => 'int64',
        'lastTwoWeekAccessedCount' => 'int64',
        'lastMonthAccessedCount' => 'int64'
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
    * collectTime  采集时间（ms）
    * totalMissingIndexCount  索引缺失总数
    * userImpactGt80Count  性能提示大于80%的数量
    * lastDayAccessedCount  近1天用户访问条数
    * lastWeekAccessedCount  近1周用户访问条数
    * lastTwoWeekAccessedCount  近2周用户访问条数
    * lastMonthAccessedCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectTime' => 'collect_time',
            'totalMissingIndexCount' => 'total_missing_index_count',
            'userImpactGt80Count' => 'user_impact_gt80_count',
            'lastDayAccessedCount' => 'last_day_accessed_count',
            'lastWeekAccessedCount' => 'last_week_accessed_count',
            'lastTwoWeekAccessedCount' => 'last_two_week_accessed_count',
            'lastMonthAccessedCount' => 'last_month_accessed_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectTime  采集时间（ms）
    * totalMissingIndexCount  索引缺失总数
    * userImpactGt80Count  性能提示大于80%的数量
    * lastDayAccessedCount  近1天用户访问条数
    * lastWeekAccessedCount  近1周用户访问条数
    * lastTwoWeekAccessedCount  近2周用户访问条数
    * lastMonthAccessedCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $setters = [
            'collectTime' => 'setCollectTime',
            'totalMissingIndexCount' => 'setTotalMissingIndexCount',
            'userImpactGt80Count' => 'setUserImpactGt80Count',
            'lastDayAccessedCount' => 'setLastDayAccessedCount',
            'lastWeekAccessedCount' => 'setLastWeekAccessedCount',
            'lastTwoWeekAccessedCount' => 'setLastTwoWeekAccessedCount',
            'lastMonthAccessedCount' => 'setLastMonthAccessedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectTime  采集时间（ms）
    * totalMissingIndexCount  索引缺失总数
    * userImpactGt80Count  性能提示大于80%的数量
    * lastDayAccessedCount  近1天用户访问条数
    * lastWeekAccessedCount  近1周用户访问条数
    * lastTwoWeekAccessedCount  近2周用户访问条数
    * lastMonthAccessedCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $getters = [
            'collectTime' => 'getCollectTime',
            'totalMissingIndexCount' => 'getTotalMissingIndexCount',
            'userImpactGt80Count' => 'getUserImpactGt80Count',
            'lastDayAccessedCount' => 'getLastDayAccessedCount',
            'lastWeekAccessedCount' => 'getLastWeekAccessedCount',
            'lastTwoWeekAccessedCount' => 'getLastTwoWeekAccessedCount',
            'lastMonthAccessedCount' => 'getLastMonthAccessedCount'
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
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
        $this->container['totalMissingIndexCount'] = isset($data['totalMissingIndexCount']) ? $data['totalMissingIndexCount'] : null;
        $this->container['userImpactGt80Count'] = isset($data['userImpactGt80Count']) ? $data['userImpactGt80Count'] : null;
        $this->container['lastDayAccessedCount'] = isset($data['lastDayAccessedCount']) ? $data['lastDayAccessedCount'] : null;
        $this->container['lastWeekAccessedCount'] = isset($data['lastWeekAccessedCount']) ? $data['lastWeekAccessedCount'] : null;
        $this->container['lastTwoWeekAccessedCount'] = isset($data['lastTwoWeekAccessedCount']) ? $data['lastTwoWeekAccessedCount'] : null;
        $this->container['lastMonthAccessedCount'] = isset($data['lastMonthAccessedCount']) ? $data['lastMonthAccessedCount'] : null;
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
    * Gets collectTime
    *  采集时间（ms）
    *
    * @return int|null
    */
    public function getCollectTime()
    {
        return $this->container['collectTime'];
    }

    /**
    * Sets collectTime
    *
    * @param int|null $collectTime 采集时间（ms）
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
        return $this;
    }

    /**
    * Gets totalMissingIndexCount
    *  索引缺失总数
    *
    * @return int|null
    */
    public function getTotalMissingIndexCount()
    {
        return $this->container['totalMissingIndexCount'];
    }

    /**
    * Sets totalMissingIndexCount
    *
    * @param int|null $totalMissingIndexCount 索引缺失总数
    *
    * @return $this
    */
    public function setTotalMissingIndexCount($totalMissingIndexCount)
    {
        $this->container['totalMissingIndexCount'] = $totalMissingIndexCount;
        return $this;
    }

    /**
    * Gets userImpactGt80Count
    *  性能提示大于80%的数量
    *
    * @return int|null
    */
    public function getUserImpactGt80Count()
    {
        return $this->container['userImpactGt80Count'];
    }

    /**
    * Sets userImpactGt80Count
    *
    * @param int|null $userImpactGt80Count 性能提示大于80%的数量
    *
    * @return $this
    */
    public function setUserImpactGt80Count($userImpactGt80Count)
    {
        $this->container['userImpactGt80Count'] = $userImpactGt80Count;
        return $this;
    }

    /**
    * Gets lastDayAccessedCount
    *  近1天用户访问条数
    *
    * @return int|null
    */
    public function getLastDayAccessedCount()
    {
        return $this->container['lastDayAccessedCount'];
    }

    /**
    * Sets lastDayAccessedCount
    *
    * @param int|null $lastDayAccessedCount 近1天用户访问条数
    *
    * @return $this
    */
    public function setLastDayAccessedCount($lastDayAccessedCount)
    {
        $this->container['lastDayAccessedCount'] = $lastDayAccessedCount;
        return $this;
    }

    /**
    * Gets lastWeekAccessedCount
    *  近1周用户访问条数
    *
    * @return int|null
    */
    public function getLastWeekAccessedCount()
    {
        return $this->container['lastWeekAccessedCount'];
    }

    /**
    * Sets lastWeekAccessedCount
    *
    * @param int|null $lastWeekAccessedCount 近1周用户访问条数
    *
    * @return $this
    */
    public function setLastWeekAccessedCount($lastWeekAccessedCount)
    {
        $this->container['lastWeekAccessedCount'] = $lastWeekAccessedCount;
        return $this;
    }

    /**
    * Gets lastTwoWeekAccessedCount
    *  近2周用户访问条数
    *
    * @return int|null
    */
    public function getLastTwoWeekAccessedCount()
    {
        return $this->container['lastTwoWeekAccessedCount'];
    }

    /**
    * Sets lastTwoWeekAccessedCount
    *
    * @param int|null $lastTwoWeekAccessedCount 近2周用户访问条数
    *
    * @return $this
    */
    public function setLastTwoWeekAccessedCount($lastTwoWeekAccessedCount)
    {
        $this->container['lastTwoWeekAccessedCount'] = $lastTwoWeekAccessedCount;
        return $this;
    }

    /**
    * Gets lastMonthAccessedCount
    *  近1月用户访问条数
    *
    * @return int|null
    */
    public function getLastMonthAccessedCount()
    {
        return $this->container['lastMonthAccessedCount'];
    }

    /**
    * Sets lastMonthAccessedCount
    *
    * @param int|null $lastMonthAccessedCount 近1月用户访问条数
    *
    * @return $this
    */
    public function setLastMonthAccessedCount($lastMonthAccessedCount)
    {
        $this->container['lastMonthAccessedCount'] = $lastMonthAccessedCount;
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

