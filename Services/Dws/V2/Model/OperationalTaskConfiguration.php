<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationalTaskConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationalTaskConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parallelMin  **参数解释**： 用户表VacuumFull运维任务最小并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * parallelMax  **参数解释**： 用户表VacuumFull运维任务最大并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * smallCuRowsLimit  **参数解释**： 小CU阈值。 **约束限制**： 不涉及。 **取值范围**： 0~1000。 **默认取值**： 不涉及。
    * smallCuPercentage  **参数解释**： 小CU占比。 **约束限制**： 不涉及。 **取值范围**： 0.01~99.99。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parallelMin' => 'int',
            'parallelMax' => 'int',
            'smallCuRowsLimit' => 'int',
            'smallCuPercentage' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parallelMin  **参数解释**： 用户表VacuumFull运维任务最小并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * parallelMax  **参数解释**： 用户表VacuumFull运维任务最大并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * smallCuRowsLimit  **参数解释**： 小CU阈值。 **约束限制**： 不涉及。 **取值范围**： 0~1000。 **默认取值**： 不涉及。
    * smallCuPercentage  **参数解释**： 小CU占比。 **约束限制**： 不涉及。 **取值范围**： 0.01~99.99。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parallelMin' => 'int32',
        'parallelMax' => 'int32',
        'smallCuRowsLimit' => 'int32',
        'smallCuPercentage' => 'double'
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
    * parallelMin  **参数解释**： 用户表VacuumFull运维任务最小并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * parallelMax  **参数解释**： 用户表VacuumFull运维任务最大并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * smallCuRowsLimit  **参数解释**： 小CU阈值。 **约束限制**： 不涉及。 **取值范围**： 0~1000。 **默认取值**： 不涉及。
    * smallCuPercentage  **参数解释**： 小CU占比。 **约束限制**： 不涉及。 **取值范围**： 0.01~99.99。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parallelMin' => 'parallel_min',
            'parallelMax' => 'parallel_max',
            'smallCuRowsLimit' => 'small_cu_rows_limit',
            'smallCuPercentage' => 'small_cu_percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parallelMin  **参数解释**： 用户表VacuumFull运维任务最小并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * parallelMax  **参数解释**： 用户表VacuumFull运维任务最大并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * smallCuRowsLimit  **参数解释**： 小CU阈值。 **约束限制**： 不涉及。 **取值范围**： 0~1000。 **默认取值**： 不涉及。
    * smallCuPercentage  **参数解释**： 小CU占比。 **约束限制**： 不涉及。 **取值范围**： 0.01~99.99。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'parallelMin' => 'setParallelMin',
            'parallelMax' => 'setParallelMax',
            'smallCuRowsLimit' => 'setSmallCuRowsLimit',
            'smallCuPercentage' => 'setSmallCuPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parallelMin  **参数解释**： 用户表VacuumFull运维任务最小并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * parallelMax  **参数解释**： 用户表VacuumFull运维任务最大并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    * smallCuRowsLimit  **参数解释**： 小CU阈值。 **约束限制**： 不涉及。 **取值范围**： 0~1000。 **默认取值**： 不涉及。
    * smallCuPercentage  **参数解释**： 小CU占比。 **约束限制**： 不涉及。 **取值范围**： 0.01~99.99。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'parallelMin' => 'getParallelMin',
            'parallelMax' => 'getParallelMax',
            'smallCuRowsLimit' => 'getSmallCuRowsLimit',
            'smallCuPercentage' => 'getSmallCuPercentage'
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
        $this->container['parallelMin'] = isset($data['parallelMin']) ? $data['parallelMin'] : null;
        $this->container['parallelMax'] = isset($data['parallelMax']) ? $data['parallelMax'] : null;
        $this->container['smallCuRowsLimit'] = isset($data['smallCuRowsLimit']) ? $data['smallCuRowsLimit'] : null;
        $this->container['smallCuPercentage'] = isset($data['smallCuPercentage']) ? $data['smallCuPercentage'] : null;
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
    * Gets parallelMin
    *  **参数解释**： 用户表VacuumFull运维任务最小并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getParallelMin()
    {
        return $this->container['parallelMin'];
    }

    /**
    * Sets parallelMin
    *
    * @param int|null $parallelMin **参数解释**： 用户表VacuumFull运维任务最小并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setParallelMin($parallelMin)
    {
        $this->container['parallelMin'] = $parallelMin;
        return $this;
    }

    /**
    * Gets parallelMax
    *  **参数解释**： 用户表VacuumFull运维任务最大并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getParallelMax()
    {
        return $this->container['parallelMax'];
    }

    /**
    * Sets parallelMax
    *
    * @param int|null $parallelMax **参数解释**： 用户表VacuumFull运维任务最大并发数。 **约束限制**： 不涉及。 **取值范围**： 1~24 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setParallelMax($parallelMax)
    {
        $this->container['parallelMax'] = $parallelMax;
        return $this;
    }

    /**
    * Gets smallCuRowsLimit
    *  **参数解释**： 小CU阈值。 **约束限制**： 不涉及。 **取值范围**： 0~1000。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getSmallCuRowsLimit()
    {
        return $this->container['smallCuRowsLimit'];
    }

    /**
    * Sets smallCuRowsLimit
    *
    * @param int|null $smallCuRowsLimit **参数解释**： 小CU阈值。 **约束限制**： 不涉及。 **取值范围**： 0~1000。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSmallCuRowsLimit($smallCuRowsLimit)
    {
        $this->container['smallCuRowsLimit'] = $smallCuRowsLimit;
        return $this;
    }

    /**
    * Gets smallCuPercentage
    *  **参数解释**： 小CU占比。 **约束限制**： 不涉及。 **取值范围**： 0.01~99.99。 **默认取值**： 不涉及。
    *
    * @return double|null
    */
    public function getSmallCuPercentage()
    {
        return $this->container['smallCuPercentage'];
    }

    /**
    * Sets smallCuPercentage
    *
    * @param double|null $smallCuPercentage **参数解释**： 小CU占比。 **约束限制**： 不涉及。 **取值范围**： 0.01~99.99。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSmallCuPercentage($smallCuPercentage)
    {
        $this->container['smallCuPercentage'] = $smallCuPercentage;
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

