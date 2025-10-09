<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapQueryQueueRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapQueryQueueRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queryQueueMaxQueuedQueries  **参数解释**：  查询队列中的查询数量上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  1024。
    * queryQueuePendingTimeoutSecond  **参数解释**：  查询阻塞时间上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  300。
    * queryQueueConcurrencyLimit  **参数解释**：  查询队列并发值。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueMemUsedPctLimit  **参数解释**：  内存使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueCpuUsedPctLimit  **参数解释**：  CPU使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * enableQueryQueueSelect  **参数解释**：  查询队列开关状态。  **约束限制**：  不涉及。  **取值范围**：  - true：表示开启。 - false：表示关闭。  **默认值**：  false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queryQueueMaxQueuedQueries' => 'int',
            'queryQueuePendingTimeoutSecond' => 'int',
            'queryQueueConcurrencyLimit' => 'int',
            'queryQueueMemUsedPctLimit' => 'int',
            'queryQueueCpuUsedPctLimit' => 'int',
            'enableQueryQueueSelect' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queryQueueMaxQueuedQueries  **参数解释**：  查询队列中的查询数量上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  1024。
    * queryQueuePendingTimeoutSecond  **参数解释**：  查询阻塞时间上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  300。
    * queryQueueConcurrencyLimit  **参数解释**：  查询队列并发值。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueMemUsedPctLimit  **参数解释**：  内存使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueCpuUsedPctLimit  **参数解释**：  CPU使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * enableQueryQueueSelect  **参数解释**：  查询队列开关状态。  **约束限制**：  不涉及。  **取值范围**：  - true：表示开启。 - false：表示关闭。  **默认值**：  false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queryQueueMaxQueuedQueries' => null,
        'queryQueuePendingTimeoutSecond' => null,
        'queryQueueConcurrencyLimit' => null,
        'queryQueueMemUsedPctLimit' => null,
        'queryQueueCpuUsedPctLimit' => null,
        'enableQueryQueueSelect' => null
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
    * queryQueueMaxQueuedQueries  **参数解释**：  查询队列中的查询数量上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  1024。
    * queryQueuePendingTimeoutSecond  **参数解释**：  查询阻塞时间上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  300。
    * queryQueueConcurrencyLimit  **参数解释**：  查询队列并发值。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueMemUsedPctLimit  **参数解释**：  内存使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueCpuUsedPctLimit  **参数解释**：  CPU使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * enableQueryQueueSelect  **参数解释**：  查询队列开关状态。  **约束限制**：  不涉及。  **取值范围**：  - true：表示开启。 - false：表示关闭。  **默认值**：  false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queryQueueMaxQueuedQueries' => 'query_queue_max_queued_queries',
            'queryQueuePendingTimeoutSecond' => 'query_queue_pending_timeout_second',
            'queryQueueConcurrencyLimit' => 'query_queue_concurrency_limit',
            'queryQueueMemUsedPctLimit' => 'query_queue_mem_used_pct_limit',
            'queryQueueCpuUsedPctLimit' => 'query_queue_cpu_used_pct_limit',
            'enableQueryQueueSelect' => 'enable_query_queue_select'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queryQueueMaxQueuedQueries  **参数解释**：  查询队列中的查询数量上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  1024。
    * queryQueuePendingTimeoutSecond  **参数解释**：  查询阻塞时间上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  300。
    * queryQueueConcurrencyLimit  **参数解释**：  查询队列并发值。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueMemUsedPctLimit  **参数解释**：  内存使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueCpuUsedPctLimit  **参数解释**：  CPU使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * enableQueryQueueSelect  **参数解释**：  查询队列开关状态。  **约束限制**：  不涉及。  **取值范围**：  - true：表示开启。 - false：表示关闭。  **默认值**：  false。
    *
    * @var string[]
    */
    protected static $setters = [
            'queryQueueMaxQueuedQueries' => 'setQueryQueueMaxQueuedQueries',
            'queryQueuePendingTimeoutSecond' => 'setQueryQueuePendingTimeoutSecond',
            'queryQueueConcurrencyLimit' => 'setQueryQueueConcurrencyLimit',
            'queryQueueMemUsedPctLimit' => 'setQueryQueueMemUsedPctLimit',
            'queryQueueCpuUsedPctLimit' => 'setQueryQueueCpuUsedPctLimit',
            'enableQueryQueueSelect' => 'setEnableQueryQueueSelect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queryQueueMaxQueuedQueries  **参数解释**：  查询队列中的查询数量上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  1024。
    * queryQueuePendingTimeoutSecond  **参数解释**：  查询阻塞时间上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  300。
    * queryQueueConcurrencyLimit  **参数解释**：  查询队列并发值。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueMemUsedPctLimit  **参数解释**：  内存使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * queryQueueCpuUsedPctLimit  **参数解释**：  CPU使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    * enableQueryQueueSelect  **参数解释**：  查询队列开关状态。  **约束限制**：  不涉及。  **取值范围**：  - true：表示开启。 - false：表示关闭。  **默认值**：  false。
    *
    * @var string[]
    */
    protected static $getters = [
            'queryQueueMaxQueuedQueries' => 'getQueryQueueMaxQueuedQueries',
            'queryQueuePendingTimeoutSecond' => 'getQueryQueuePendingTimeoutSecond',
            'queryQueueConcurrencyLimit' => 'getQueryQueueConcurrencyLimit',
            'queryQueueMemUsedPctLimit' => 'getQueryQueueMemUsedPctLimit',
            'queryQueueCpuUsedPctLimit' => 'getQueryQueueCpuUsedPctLimit',
            'enableQueryQueueSelect' => 'getEnableQueryQueueSelect'
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
        $this->container['queryQueueMaxQueuedQueries'] = isset($data['queryQueueMaxQueuedQueries']) ? $data['queryQueueMaxQueuedQueries'] : null;
        $this->container['queryQueuePendingTimeoutSecond'] = isset($data['queryQueuePendingTimeoutSecond']) ? $data['queryQueuePendingTimeoutSecond'] : null;
        $this->container['queryQueueConcurrencyLimit'] = isset($data['queryQueueConcurrencyLimit']) ? $data['queryQueueConcurrencyLimit'] : null;
        $this->container['queryQueueMemUsedPctLimit'] = isset($data['queryQueueMemUsedPctLimit']) ? $data['queryQueueMemUsedPctLimit'] : null;
        $this->container['queryQueueCpuUsedPctLimit'] = isset($data['queryQueueCpuUsedPctLimit']) ? $data['queryQueueCpuUsedPctLimit'] : null;
        $this->container['enableQueryQueueSelect'] = isset($data['enableQueryQueueSelect']) ? $data['enableQueryQueueSelect'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['queryQueueMaxQueuedQueries'] === null) {
            $invalidProperties[] = "'queryQueueMaxQueuedQueries' can't be null";
        }
        if ($this->container['queryQueuePendingTimeoutSecond'] === null) {
            $invalidProperties[] = "'queryQueuePendingTimeoutSecond' can't be null";
        }
        if ($this->container['queryQueueConcurrencyLimit'] === null) {
            $invalidProperties[] = "'queryQueueConcurrencyLimit' can't be null";
        }
        if ($this->container['queryQueueMemUsedPctLimit'] === null) {
            $invalidProperties[] = "'queryQueueMemUsedPctLimit' can't be null";
        }
        if ($this->container['queryQueueCpuUsedPctLimit'] === null) {
            $invalidProperties[] = "'queryQueueCpuUsedPctLimit' can't be null";
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
    * Gets queryQueueMaxQueuedQueries
    *  **参数解释**：  查询队列中的查询数量上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  1024。
    *
    * @return int
    */
    public function getQueryQueueMaxQueuedQueries()
    {
        return $this->container['queryQueueMaxQueuedQueries'];
    }

    /**
    * Sets queryQueueMaxQueuedQueries
    *
    * @param int $queryQueueMaxQueuedQueries **参数解释**：  查询队列中的查询数量上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  1024。
    *
    * @return $this
    */
    public function setQueryQueueMaxQueuedQueries($queryQueueMaxQueuedQueries)
    {
        $this->container['queryQueueMaxQueuedQueries'] = $queryQueueMaxQueuedQueries;
        return $this;
    }

    /**
    * Gets queryQueuePendingTimeoutSecond
    *  **参数解释**：  查询阻塞时间上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  300。
    *
    * @return int
    */
    public function getQueryQueuePendingTimeoutSecond()
    {
        return $this->container['queryQueuePendingTimeoutSecond'];
    }

    /**
    * Sets queryQueuePendingTimeoutSecond
    *
    * @param int $queryQueuePendingTimeoutSecond **参数解释**：  查询阻塞时间上限。  **约束限制**：  不涉及。  **取值范围**：  非负整数。  **默认值**：  300。
    *
    * @return $this
    */
    public function setQueryQueuePendingTimeoutSecond($queryQueuePendingTimeoutSecond)
    {
        $this->container['queryQueuePendingTimeoutSecond'] = $queryQueuePendingTimeoutSecond;
        return $this;
    }

    /**
    * Gets queryQueueConcurrencyLimit
    *  **参数解释**：  查询队列并发值。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    *
    * @return int
    */
    public function getQueryQueueConcurrencyLimit()
    {
        return $this->container['queryQueueConcurrencyLimit'];
    }

    /**
    * Sets queryQueueConcurrencyLimit
    *
    * @param int $queryQueueConcurrencyLimit **参数解释**：  查询队列并发值。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    *
    * @return $this
    */
    public function setQueryQueueConcurrencyLimit($queryQueueConcurrencyLimit)
    {
        $this->container['queryQueueConcurrencyLimit'] = $queryQueueConcurrencyLimit;
        return $this;
    }

    /**
    * Gets queryQueueMemUsedPctLimit
    *  **参数解释**：  内存使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    *
    * @return int
    */
    public function getQueryQueueMemUsedPctLimit()
    {
        return $this->container['queryQueueMemUsedPctLimit'];
    }

    /**
    * Sets queryQueueMemUsedPctLimit
    *
    * @param int $queryQueueMemUsedPctLimit **参数解释**：  内存使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    *
    * @return $this
    */
    public function setQueryQueueMemUsedPctLimit($queryQueueMemUsedPctLimit)
    {
        $this->container['queryQueueMemUsedPctLimit'] = $queryQueueMemUsedPctLimit;
        return $this;
    }

    /**
    * Gets queryQueueCpuUsedPctLimit
    *  **参数解释**：  CPU使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    *
    * @return int
    */
    public function getQueryQueueCpuUsedPctLimit()
    {
        return $this->container['queryQueueCpuUsedPctLimit'];
    }

    /**
    * Sets queryQueueCpuUsedPctLimit
    *
    * @param int $queryQueueCpuUsedPctLimit **参数解释**：  CPU使用百分比。  **约束限制**：  不涉及。  **取值范围**：  0~100的整数，0表示没有限制。  **默认值**：  0。
    *
    * @return $this
    */
    public function setQueryQueueCpuUsedPctLimit($queryQueueCpuUsedPctLimit)
    {
        $this->container['queryQueueCpuUsedPctLimit'] = $queryQueueCpuUsedPctLimit;
        return $this;
    }

    /**
    * Gets enableQueryQueueSelect
    *  **参数解释**：  查询队列开关状态。  **约束限制**：  不涉及。  **取值范围**：  - true：表示开启。 - false：表示关闭。  **默认值**：  false。
    *
    * @return string|null
    */
    public function getEnableQueryQueueSelect()
    {
        return $this->container['enableQueryQueueSelect'];
    }

    /**
    * Sets enableQueryQueueSelect
    *
    * @param string|null $enableQueryQueueSelect **参数解释**：  查询队列开关状态。  **约束限制**：  不涉及。  **取值范围**：  - true：表示开启。 - false：表示关闭。  **默认值**：  false。
    *
    * @return $this
    */
    public function setEnableQueryQueueSelect($enableQueryQueueSelect)
    {
        $this->container['enableQueryQueueSelect'] = $enableQueryQueueSelect;
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

