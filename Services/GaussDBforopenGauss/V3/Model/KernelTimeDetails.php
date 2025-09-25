<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KernelTimeDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KernelTimeDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: SQL生成计划时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parseTime' => 'int',
            'rewriteTime' => 'int',
            'planTime' => 'int',
            'executionTime' => 'int',
            'otherTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: SQL生成计划时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parseTime' => 'int64',
        'rewriteTime' => 'int64',
        'planTime' => 'int64',
        'executionTime' => 'int64',
        'otherTime' => 'int64'
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
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: SQL生成计划时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parseTime' => 'parse_time',
            'rewriteTime' => 'rewrite_time',
            'planTime' => 'plan_time',
            'executionTime' => 'execution_time',
            'otherTime' => 'other_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: SQL生成计划时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'parseTime' => 'setParseTime',
            'rewriteTime' => 'setRewriteTime',
            'planTime' => 'setPlanTime',
            'executionTime' => 'setExecutionTime',
            'otherTime' => 'setOtherTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: SQL生成计划时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'parseTime' => 'getParseTime',
            'rewriteTime' => 'getRewriteTime',
            'planTime' => 'getPlanTime',
            'executionTime' => 'getExecutionTime',
            'otherTime' => 'getOtherTime'
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
        $this->container['parseTime'] = isset($data['parseTime']) ? $data['parseTime'] : null;
        $this->container['rewriteTime'] = isset($data['rewriteTime']) ? $data['rewriteTime'] : null;
        $this->container['planTime'] = isset($data['planTime']) ? $data['planTime'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['otherTime'] = isset($data['otherTime']) ? $data['otherTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parseTime'] === null) {
            $invalidProperties[] = "'parseTime' can't be null";
        }
        if ($this->container['rewriteTime'] === null) {
            $invalidProperties[] = "'rewriteTime' can't be null";
        }
        if ($this->container['planTime'] === null) {
            $invalidProperties[] = "'planTime' can't be null";
        }
        if ($this->container['executionTime'] === null) {
            $invalidProperties[] = "'executionTime' can't be null";
        }
        if ($this->container['otherTime'] === null) {
            $invalidProperties[] = "'otherTime' can't be null";
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
    * Gets parseTime
    *  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getParseTime()
    {
        return $this->container['parseTime'];
    }

    /**
    * Sets parseTime
    *
    * @param int $parseTime **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setParseTime($parseTime)
    {
        $this->container['parseTime'] = $parseTime;
        return $this;
    }

    /**
    * Gets rewriteTime
    *  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getRewriteTime()
    {
        return $this->container['rewriteTime'];
    }

    /**
    * Sets rewriteTime
    *
    * @param int $rewriteTime **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRewriteTime($rewriteTime)
    {
        $this->container['rewriteTime'] = $rewriteTime;
        return $this;
    }

    /**
    * Gets planTime
    *  **参数解释**: SQL生成计划时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getPlanTime()
    {
        return $this->container['planTime'];
    }

    /**
    * Sets planTime
    *
    * @param int $planTime **参数解释**: SQL生成计划时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPlanTime($planTime)
    {
        $this->container['planTime'] = $planTime;
        return $this;
    }

    /**
    * Gets executionTime
    *  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param int $executionTime **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
        return $this;
    }

    /**
    * Gets otherTime
    *  **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getOtherTime()
    {
        return $this->container['otherTime'];
    }

    /**
    * Sets otherTime
    *
    * @param int $otherTime **参数解释**: 其余耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setOtherTime($otherTime)
    {
        $this->container['otherTime'] = $otherTime;
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

