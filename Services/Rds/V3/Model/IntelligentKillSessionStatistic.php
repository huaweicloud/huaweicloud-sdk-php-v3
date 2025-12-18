<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

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
    * keyword  **参数解释**：  该类统计维度下提取到的限流关键字。  **约束限制**：  不涉及。
    * rawSqlText  **参数解释**：  随机选取符合sql限流关键字的用户某条sql样例。  **约束限制**：  不涉及。
    * ids  **参数解释**：  符合该统计维度的线程id。  **约束限制**：  不涉及。
    * count  **参数解释**：  符合该统计维度的线程id总数量。  **约束限制**：  不涉及。
    * totalTime  **参数解释**：  符合该统计维度的线程总执行时间。  **约束限制**：  不涉及。
    * avgTime  **参数解释**：  符合该统计维度的线程平均执行时间。  **约束限制**：  不涉及。
    * maxTime  **参数解释**：  符合该统计维度的线程最大执行时间。  **约束限制**：  不涉及。
    * strategy  **参数解释**：  统计维度。  **约束限制**：  不涉及。
    * adviceConcurrency  **参数解释**：  推荐最大并发数。type为\"kill\"时该参数没有返回值。  **约束限制**：  不涉及。
    * type  **参数解释**：  该条维度数据的类型。\"kill\"表示当前统计时刻下一键kill会话下发后会kill该类会话；\"limit\"表示当前统计时刻下勾选\"同步开启sql限流和添加规则\"时会添加的规则。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyword' => 'string',
            'rawSqlText' => 'string',
            'ids' => 'int[]',
            'count' => 'int',
            'totalTime' => 'double',
            'avgTime' => 'double',
            'maxTime' => 'double',
            'strategy' => 'string',
            'adviceConcurrency' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyword  **参数解释**：  该类统计维度下提取到的限流关键字。  **约束限制**：  不涉及。
    * rawSqlText  **参数解释**：  随机选取符合sql限流关键字的用户某条sql样例。  **约束限制**：  不涉及。
    * ids  **参数解释**：  符合该统计维度的线程id。  **约束限制**：  不涉及。
    * count  **参数解释**：  符合该统计维度的线程id总数量。  **约束限制**：  不涉及。
    * totalTime  **参数解释**：  符合该统计维度的线程总执行时间。  **约束限制**：  不涉及。
    * avgTime  **参数解释**：  符合该统计维度的线程平均执行时间。  **约束限制**：  不涉及。
    * maxTime  **参数解释**：  符合该统计维度的线程最大执行时间。  **约束限制**：  不涉及。
    * strategy  **参数解释**：  统计维度。  **约束限制**：  不涉及。
    * adviceConcurrency  **参数解释**：  推荐最大并发数。type为\"kill\"时该参数没有返回值。  **约束限制**：  不涉及。
    * type  **参数解释**：  该条维度数据的类型。\"kill\"表示当前统计时刻下一键kill会话下发后会kill该类会话；\"limit\"表示当前统计时刻下勾选\"同步开启sql限流和添加规则\"时会添加的规则。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyword' => null,
        'rawSqlText' => null,
        'ids' => 'int64',
        'count' => 'int32',
        'totalTime' => 'double',
        'avgTime' => 'double',
        'maxTime' => 'double',
        'strategy' => null,
        'adviceConcurrency' => 'int32',
        'type' => null
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
    * keyword  **参数解释**：  该类统计维度下提取到的限流关键字。  **约束限制**：  不涉及。
    * rawSqlText  **参数解释**：  随机选取符合sql限流关键字的用户某条sql样例。  **约束限制**：  不涉及。
    * ids  **参数解释**：  符合该统计维度的线程id。  **约束限制**：  不涉及。
    * count  **参数解释**：  符合该统计维度的线程id总数量。  **约束限制**：  不涉及。
    * totalTime  **参数解释**：  符合该统计维度的线程总执行时间。  **约束限制**：  不涉及。
    * avgTime  **参数解释**：  符合该统计维度的线程平均执行时间。  **约束限制**：  不涉及。
    * maxTime  **参数解释**：  符合该统计维度的线程最大执行时间。  **约束限制**：  不涉及。
    * strategy  **参数解释**：  统计维度。  **约束限制**：  不涉及。
    * adviceConcurrency  **参数解释**：  推荐最大并发数。type为\"kill\"时该参数没有返回值。  **约束限制**：  不涉及。
    * type  **参数解释**：  该条维度数据的类型。\"kill\"表示当前统计时刻下一键kill会话下发后会kill该类会话；\"limit\"表示当前统计时刻下勾选\"同步开启sql限流和添加规则\"时会添加的规则。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyword' => 'keyword',
            'rawSqlText' => 'raw_sql_text',
            'ids' => 'ids',
            'count' => 'count',
            'totalTime' => 'total_time',
            'avgTime' => 'avg_time',
            'maxTime' => 'max_time',
            'strategy' => 'strategy',
            'adviceConcurrency' => 'advice_concurrency',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyword  **参数解释**：  该类统计维度下提取到的限流关键字。  **约束限制**：  不涉及。
    * rawSqlText  **参数解释**：  随机选取符合sql限流关键字的用户某条sql样例。  **约束限制**：  不涉及。
    * ids  **参数解释**：  符合该统计维度的线程id。  **约束限制**：  不涉及。
    * count  **参数解释**：  符合该统计维度的线程id总数量。  **约束限制**：  不涉及。
    * totalTime  **参数解释**：  符合该统计维度的线程总执行时间。  **约束限制**：  不涉及。
    * avgTime  **参数解释**：  符合该统计维度的线程平均执行时间。  **约束限制**：  不涉及。
    * maxTime  **参数解释**：  符合该统计维度的线程最大执行时间。  **约束限制**：  不涉及。
    * strategy  **参数解释**：  统计维度。  **约束限制**：  不涉及。
    * adviceConcurrency  **参数解释**：  推荐最大并发数。type为\"kill\"时该参数没有返回值。  **约束限制**：  不涉及。
    * type  **参数解释**：  该条维度数据的类型。\"kill\"表示当前统计时刻下一键kill会话下发后会kill该类会话；\"limit\"表示当前统计时刻下勾选\"同步开启sql限流和添加规则\"时会添加的规则。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyword' => 'setKeyword',
            'rawSqlText' => 'setRawSqlText',
            'ids' => 'setIds',
            'count' => 'setCount',
            'totalTime' => 'setTotalTime',
            'avgTime' => 'setAvgTime',
            'maxTime' => 'setMaxTime',
            'strategy' => 'setStrategy',
            'adviceConcurrency' => 'setAdviceConcurrency',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyword  **参数解释**：  该类统计维度下提取到的限流关键字。  **约束限制**：  不涉及。
    * rawSqlText  **参数解释**：  随机选取符合sql限流关键字的用户某条sql样例。  **约束限制**：  不涉及。
    * ids  **参数解释**：  符合该统计维度的线程id。  **约束限制**：  不涉及。
    * count  **参数解释**：  符合该统计维度的线程id总数量。  **约束限制**：  不涉及。
    * totalTime  **参数解释**：  符合该统计维度的线程总执行时间。  **约束限制**：  不涉及。
    * avgTime  **参数解释**：  符合该统计维度的线程平均执行时间。  **约束限制**：  不涉及。
    * maxTime  **参数解释**：  符合该统计维度的线程最大执行时间。  **约束限制**：  不涉及。
    * strategy  **参数解释**：  统计维度。  **约束限制**：  不涉及。
    * adviceConcurrency  **参数解释**：  推荐最大并发数。type为\"kill\"时该参数没有返回值。  **约束限制**：  不涉及。
    * type  **参数解释**：  该条维度数据的类型。\"kill\"表示当前统计时刻下一键kill会话下发后会kill该类会话；\"limit\"表示当前统计时刻下勾选\"同步开启sql限流和添加规则\"时会添加的规则。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyword' => 'getKeyword',
            'rawSqlText' => 'getRawSqlText',
            'ids' => 'getIds',
            'count' => 'getCount',
            'totalTime' => 'getTotalTime',
            'avgTime' => 'getAvgTime',
            'maxTime' => 'getMaxTime',
            'strategy' => 'getStrategy',
            'adviceConcurrency' => 'getAdviceConcurrency',
            'type' => 'getType'
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
        $this->container['rawSqlText'] = isset($data['rawSqlText']) ? $data['rawSqlText'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
        $this->container['avgTime'] = isset($data['avgTime']) ? $data['avgTime'] : null;
        $this->container['maxTime'] = isset($data['maxTime']) ? $data['maxTime'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['adviceConcurrency'] = isset($data['adviceConcurrency']) ? $data['adviceConcurrency'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) > 1000000)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rawSqlText']) && (mb_strlen($this->container['rawSqlText']) > 1000000)) {
                $invalidProperties[] = "invalid value for 'rawSqlText', the character length must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['rawSqlText']) && (mb_strlen($this->container['rawSqlText']) < 0)) {
                $invalidProperties[] = "invalid value for 'rawSqlText', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 1000)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] > 1E+13)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be smaller than or equal to 1E+13.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['avgTime']) && ($this->container['avgTime'] > 1E+13)) {
                $invalidProperties[] = "invalid value for 'avgTime', must be smaller than or equal to 1E+13.";
            }
            if (!is_null($this->container['avgTime']) && ($this->container['avgTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'avgTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxTime']) && ($this->container['maxTime'] > 1E+13)) {
                $invalidProperties[] = "invalid value for 'maxTime', must be smaller than or equal to 1E+13.";
            }
            if (!is_null($this->container['maxTime']) && ($this->container['maxTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['strategy']) && (mb_strlen($this->container['strategy']) > 100)) {
                $invalidProperties[] = "invalid value for 'strategy', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['strategy']) && (mb_strlen($this->container['strategy']) < 0)) {
                $invalidProperties[] = "invalid value for 'strategy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adviceConcurrency']) && ($this->container['adviceConcurrency'] > 1000000000)) {
                $invalidProperties[] = "invalid value for 'adviceConcurrency', must be smaller than or equal to 1000000000.";
            }
            if (!is_null($this->container['adviceConcurrency']) && ($this->container['adviceConcurrency'] < 0)) {
                $invalidProperties[] = "invalid value for 'adviceConcurrency', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    * Gets keyword
    *  **参数解释**：  该类统计维度下提取到的限流关键字。  **约束限制**：  不涉及。
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
    * @param string|null $keyword **参数解释**：  该类统计维度下提取到的限流关键字。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets rawSqlText
    *  **参数解释**：  随机选取符合sql限流关键字的用户某条sql样例。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getRawSqlText()
    {
        return $this->container['rawSqlText'];
    }

    /**
    * Sets rawSqlText
    *
    * @param string|null $rawSqlText **参数解释**：  随机选取符合sql限流关键字的用户某条sql样例。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setRawSqlText($rawSqlText)
    {
        $this->container['rawSqlText'] = $rawSqlText;
        return $this;
    }

    /**
    * Gets ids
    *  **参数解释**：  符合该统计维度的线程id。  **约束限制**：  不涉及。
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
    * @param int[]|null $ids **参数解释**：  符合该统计维度的线程id。  **约束限制**：  不涉及。
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
    *  **参数解释**：  符合该统计维度的线程id总数量。  **约束限制**：  不涉及。
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
    * @param int|null $count **参数解释**：  符合该统计维度的线程id总数量。  **约束限制**：  不涉及。
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
    *  **参数解释**：  符合该统计维度的线程总执行时间。  **约束限制**：  不涉及。
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
    * @param double|null $totalTime **参数解释**：  符合该统计维度的线程总执行时间。  **约束限制**：  不涉及。
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
    *  **参数解释**：  符合该统计维度的线程平均执行时间。  **约束限制**：  不涉及。
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
    * @param double|null $avgTime **参数解释**：  符合该统计维度的线程平均执行时间。  **约束限制**：  不涉及。
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
    *  **参数解释**：  符合该统计维度的线程最大执行时间。  **约束限制**：  不涉及。
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
    * @param double|null $maxTime **参数解释**：  符合该统计维度的线程最大执行时间。  **约束限制**：  不涉及。
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
    *  **参数解释**：  统计维度。  **约束限制**：  不涉及。
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
    * @param string|null $strategy **参数解释**：  统计维度。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets adviceConcurrency
    *  **参数解释**：  推荐最大并发数。type为\"kill\"时该参数没有返回值。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getAdviceConcurrency()
    {
        return $this->container['adviceConcurrency'];
    }

    /**
    * Sets adviceConcurrency
    *
    * @param int|null $adviceConcurrency **参数解释**：  推荐最大并发数。type为\"kill\"时该参数没有返回值。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setAdviceConcurrency($adviceConcurrency)
    {
        $this->container['adviceConcurrency'] = $adviceConcurrency;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  该条维度数据的类型。\"kill\"表示当前统计时刻下一键kill会话下发后会kill该类会话；\"limit\"表示当前统计时刻下勾选\"同步开启sql限流和添加规则\"时会添加的规则。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：  该条维度数据的类型。\"kill\"表示当前统计时刻下一键kill会话下发后会kill该类会话；\"limit\"表示当前统计时刻下勾选\"同步开启sql限流和添加规则\"时会添加的规则。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

