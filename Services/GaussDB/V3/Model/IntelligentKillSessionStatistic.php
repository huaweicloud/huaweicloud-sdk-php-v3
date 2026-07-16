<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntelligentKillSessionStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntelligentKillSessionStatistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyword  **参数解释**：  预览智能Kill会话SQL模板关键字。  **取值范围**：  不涉及。
    * exampleSqlText  **参数解释**：  预览智能Kill会话中的SQL模板命中的首个会话正在执行的SQL语句。  **取值范围**：  不涉及。
    * ids  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话线程ID列表。
    * count  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话个数。  **取值范围**：  >=0。
    * totalTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话总执行时间，单位为秒。  **取值范围**：  >=0。
    * avgTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话平均执行时间，单位为秒。  **取值范围**：  >=0。
    * maxTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话中最长会话执行时间，单位为秒。  **取值范围**：  >=0。
    * strategy  **参数解释**：  预览智能Kill会话中的SQL模板命中Kill会话策略。  **取值范围**：  - top3_time: 以每组内会话最长的执行时长排序，选择排名前三的组内会话进行Kill。 - top3_count: 以每组内会话数量排序，选择排名前三的组内会话进行Kill。 - top3_avg_time: 以每组内会话平均执行时长排序，选择排名前三的组内会话进行Kill。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyword' => 'string',
            'exampleSqlText' => 'string',
            'ids' => 'int[]',
            'count' => 'int',
            'totalTime' => 'double',
            'avgTime' => 'double',
            'maxTime' => 'double',
            'strategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyword  **参数解释**：  预览智能Kill会话SQL模板关键字。  **取值范围**：  不涉及。
    * exampleSqlText  **参数解释**：  预览智能Kill会话中的SQL模板命中的首个会话正在执行的SQL语句。  **取值范围**：  不涉及。
    * ids  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话线程ID列表。
    * count  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话个数。  **取值范围**：  >=0。
    * totalTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话总执行时间，单位为秒。  **取值范围**：  >=0。
    * avgTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话平均执行时间，单位为秒。  **取值范围**：  >=0。
    * maxTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话中最长会话执行时间，单位为秒。  **取值范围**：  >=0。
    * strategy  **参数解释**：  预览智能Kill会话中的SQL模板命中Kill会话策略。  **取值范围**：  - top3_time: 以每组内会话最长的执行时长排序，选择排名前三的组内会话进行Kill。 - top3_count: 以每组内会话数量排序，选择排名前三的组内会话进行Kill。 - top3_avg_time: 以每组内会话平均执行时长排序，选择排名前三的组内会话进行Kill。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyword' => null,
        'exampleSqlText' => null,
        'ids' => 'int64',
        'count' => null,
        'totalTime' => 'double',
        'avgTime' => 'double',
        'maxTime' => 'double',
        'strategy' => null
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
    * keyword  **参数解释**：  预览智能Kill会话SQL模板关键字。  **取值范围**：  不涉及。
    * exampleSqlText  **参数解释**：  预览智能Kill会话中的SQL模板命中的首个会话正在执行的SQL语句。  **取值范围**：  不涉及。
    * ids  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话线程ID列表。
    * count  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话个数。  **取值范围**：  >=0。
    * totalTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话总执行时间，单位为秒。  **取值范围**：  >=0。
    * avgTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话平均执行时间，单位为秒。  **取值范围**：  >=0。
    * maxTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话中最长会话执行时间，单位为秒。  **取值范围**：  >=0。
    * strategy  **参数解释**：  预览智能Kill会话中的SQL模板命中Kill会话策略。  **取值范围**：  - top3_time: 以每组内会话最长的执行时长排序，选择排名前三的组内会话进行Kill。 - top3_count: 以每组内会话数量排序，选择排名前三的组内会话进行Kill。 - top3_avg_time: 以每组内会话平均执行时长排序，选择排名前三的组内会话进行Kill。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyword' => 'keyword',
            'exampleSqlText' => 'example_sql_text',
            'ids' => 'ids',
            'count' => 'count',
            'totalTime' => 'total_time',
            'avgTime' => 'avg_time',
            'maxTime' => 'max_time',
            'strategy' => 'strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyword  **参数解释**：  预览智能Kill会话SQL模板关键字。  **取值范围**：  不涉及。
    * exampleSqlText  **参数解释**：  预览智能Kill会话中的SQL模板命中的首个会话正在执行的SQL语句。  **取值范围**：  不涉及。
    * ids  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话线程ID列表。
    * count  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话个数。  **取值范围**：  >=0。
    * totalTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话总执行时间，单位为秒。  **取值范围**：  >=0。
    * avgTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话平均执行时间，单位为秒。  **取值范围**：  >=0。
    * maxTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话中最长会话执行时间，单位为秒。  **取值范围**：  >=0。
    * strategy  **参数解释**：  预览智能Kill会话中的SQL模板命中Kill会话策略。  **取值范围**：  - top3_time: 以每组内会话最长的执行时长排序，选择排名前三的组内会话进行Kill。 - top3_count: 以每组内会话数量排序，选择排名前三的组内会话进行Kill。 - top3_avg_time: 以每组内会话平均执行时长排序，选择排名前三的组内会话进行Kill。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyword' => 'setKeyword',
            'exampleSqlText' => 'setExampleSqlText',
            'ids' => 'setIds',
            'count' => 'setCount',
            'totalTime' => 'setTotalTime',
            'avgTime' => 'setAvgTime',
            'maxTime' => 'setMaxTime',
            'strategy' => 'setStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyword  **参数解释**：  预览智能Kill会话SQL模板关键字。  **取值范围**：  不涉及。
    * exampleSqlText  **参数解释**：  预览智能Kill会话中的SQL模板命中的首个会话正在执行的SQL语句。  **取值范围**：  不涉及。
    * ids  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话线程ID列表。
    * count  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话个数。  **取值范围**：  >=0。
    * totalTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话总执行时间，单位为秒。  **取值范围**：  >=0。
    * avgTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话平均执行时间，单位为秒。  **取值范围**：  >=0。
    * maxTime  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话中最长会话执行时间，单位为秒。  **取值范围**：  >=0。
    * strategy  **参数解释**：  预览智能Kill会话中的SQL模板命中Kill会话策略。  **取值范围**：  - top3_time: 以每组内会话最长的执行时长排序，选择排名前三的组内会话进行Kill。 - top3_count: 以每组内会话数量排序，选择排名前三的组内会话进行Kill。 - top3_avg_time: 以每组内会话平均执行时长排序，选择排名前三的组内会话进行Kill。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyword' => 'getKeyword',
            'exampleSqlText' => 'getExampleSqlText',
            'ids' => 'getIds',
            'count' => 'getCount',
            'totalTime' => 'getTotalTime',
            'avgTime' => 'getAvgTime',
            'maxTime' => 'getMaxTime',
            'strategy' => 'getStrategy'
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
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['exampleSqlText'] = isset($data['exampleSqlText']) ? $data['exampleSqlText'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
        $this->container['avgTime'] = isset($data['avgTime']) ? $data['avgTime'] : null;
        $this->container['maxTime'] = isset($data['maxTime']) ? $data['maxTime'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
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
    * Gets keyword
    *  **参数解释**：  预览智能Kill会话SQL模板关键字。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword **参数解释**：  预览智能Kill会话SQL模板关键字。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets exampleSqlText
    *  **参数解释**：  预览智能Kill会话中的SQL模板命中的首个会话正在执行的SQL语句。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getExampleSqlText()
    {
        return $this->container['exampleSqlText'];
    }

    /**
    * Sets exampleSqlText
    *
    * @param string|null $exampleSqlText **参数解释**：  预览智能Kill会话中的SQL模板命中的首个会话正在执行的SQL语句。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setExampleSqlText($exampleSqlText)
    {
        $this->container['exampleSqlText'] = $exampleSqlText;
        return $this;
    }

    /**
    * Gets ids
    *  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话线程ID列表。
    *
    * @return int[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param int[]|null $ids **参数解释**：  预览智能Kill会话中的SQL模板命中的会话线程ID列表。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话个数。  **取值范围**：  >=0。
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
    * @param int|null $count **参数解释**：  预览智能Kill会话中的SQL模板命中的会话个数。  **取值范围**：  >=0。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets totalTime
    *  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话总执行时间，单位为秒。  **取值范围**：  >=0。
    *
    * @return double|null
    */
    public function getTotalTime()
    {
        return $this->container['totalTime'];
    }

    /**
    * Sets totalTime
    *
    * @param double|null $totalTime **参数解释**：  预览智能Kill会话中的SQL模板命中的会话总执行时间，单位为秒。  **取值范围**：  >=0。
    *
    * @return $this
    */
    public function setTotalTime($totalTime)
    {
        $this->container['totalTime'] = $totalTime;
        return $this;
    }

    /**
    * Gets avgTime
    *  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话平均执行时间，单位为秒。  **取值范围**：  >=0。
    *
    * @return double|null
    */
    public function getAvgTime()
    {
        return $this->container['avgTime'];
    }

    /**
    * Sets avgTime
    *
    * @param double|null $avgTime **参数解释**：  预览智能Kill会话中的SQL模板命中的会话平均执行时间，单位为秒。  **取值范围**：  >=0。
    *
    * @return $this
    */
    public function setAvgTime($avgTime)
    {
        $this->container['avgTime'] = $avgTime;
        return $this;
    }

    /**
    * Gets maxTime
    *  **参数解释**：  预览智能Kill会话中的SQL模板命中的会话中最长会话执行时间，单位为秒。  **取值范围**：  >=0。
    *
    * @return double|null
    */
    public function getMaxTime()
    {
        return $this->container['maxTime'];
    }

    /**
    * Sets maxTime
    *
    * @param double|null $maxTime **参数解释**：  预览智能Kill会话中的SQL模板命中的会话中最长会话执行时间，单位为秒。  **取值范围**：  >=0。
    *
    * @return $this
    */
    public function setMaxTime($maxTime)
    {
        $this->container['maxTime'] = $maxTime;
        return $this;
    }

    /**
    * Gets strategy
    *  **参数解释**：  预览智能Kill会话中的SQL模板命中Kill会话策略。  **取值范围**：  - top3_time: 以每组内会话最长的执行时长排序，选择排名前三的组内会话进行Kill。 - top3_count: 以每组内会话数量排序，选择排名前三的组内会话进行Kill。 - top3_avg_time: 以每组内会话平均执行时长排序，选择排名前三的组内会话进行Kill。
    *
    * @return string|null
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param string|null $strategy **参数解释**：  预览智能Kill会话中的SQL模板命中Kill会话策略。  **取值范围**：  - top3_time: 以每组内会话最长的执行时长排序，选择排名前三的组内会话进行Kill。 - top3_count: 以每组内会话数量排序，选择排名前三的组内会话进行Kill。 - top3_avg_time: 以每组内会话平均执行时长排序，选择排名前三的组内会话进行Kill。
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
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

