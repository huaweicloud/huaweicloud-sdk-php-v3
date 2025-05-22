<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedistributionConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedistributionConf';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parallelJobs  **参数解释**： 并发数，默认并发数为4。 **约束限制**： 不涉及。 **取值范围**： 1~200 **默认取值**： 不涉及。
    * priorityPolicy  **参数解释**： 重分布优先级策略。 **约束限制**： 不涉及。 **取值范围**： - default：默认策略 - small：小表优先 - large：大表优先  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parallelJobs' => 'int',
            'priorityPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parallelJobs  **参数解释**： 并发数，默认并发数为4。 **约束限制**： 不涉及。 **取值范围**： 1~200 **默认取值**： 不涉及。
    * priorityPolicy  **参数解释**： 重分布优先级策略。 **约束限制**： 不涉及。 **取值范围**： - default：默认策略 - small：小表优先 - large：大表优先  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parallelJobs' => 'int32',
        'priorityPolicy' => null
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
    * parallelJobs  **参数解释**： 并发数，默认并发数为4。 **约束限制**： 不涉及。 **取值范围**： 1~200 **默认取值**： 不涉及。
    * priorityPolicy  **参数解释**： 重分布优先级策略。 **约束限制**： 不涉及。 **取值范围**： - default：默认策略 - small：小表优先 - large：大表优先  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parallelJobs' => 'parallel_jobs',
            'priorityPolicy' => 'priority_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parallelJobs  **参数解释**： 并发数，默认并发数为4。 **约束限制**： 不涉及。 **取值范围**： 1~200 **默认取值**： 不涉及。
    * priorityPolicy  **参数解释**： 重分布优先级策略。 **约束限制**： 不涉及。 **取值范围**： - default：默认策略 - small：小表优先 - large：大表优先  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'parallelJobs' => 'setParallelJobs',
            'priorityPolicy' => 'setPriorityPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parallelJobs  **参数解释**： 并发数，默认并发数为4。 **约束限制**： 不涉及。 **取值范围**： 1~200 **默认取值**： 不涉及。
    * priorityPolicy  **参数解释**： 重分布优先级策略。 **约束限制**： 不涉及。 **取值范围**： - default：默认策略 - small：小表优先 - large：大表优先  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'parallelJobs' => 'getParallelJobs',
            'priorityPolicy' => 'getPriorityPolicy'
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
        $this->container['parallelJobs'] = isset($data['parallelJobs']) ? $data['parallelJobs'] : null;
        $this->container['priorityPolicy'] = isset($data['priorityPolicy']) ? $data['priorityPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parallelJobs'] === null) {
            $invalidProperties[] = "'parallelJobs' can't be null";
        }
            if (($this->container['parallelJobs'] > 200)) {
                $invalidProperties[] = "invalid value for 'parallelJobs', must be smaller than or equal to 200.";
            }
            if (($this->container['parallelJobs'] < 1)) {
                $invalidProperties[] = "invalid value for 'parallelJobs', must be bigger than or equal to 1.";
            }
        if ($this->container['priorityPolicy'] === null) {
            $invalidProperties[] = "'priorityPolicy' can't be null";
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
    * Gets parallelJobs
    *  **参数解释**： 并发数，默认并发数为4。 **约束限制**： 不涉及。 **取值范围**： 1~200 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getParallelJobs()
    {
        return $this->container['parallelJobs'];
    }

    /**
    * Sets parallelJobs
    *
    * @param int $parallelJobs **参数解释**： 并发数，默认并发数为4。 **约束限制**： 不涉及。 **取值范围**： 1~200 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setParallelJobs($parallelJobs)
    {
        $this->container['parallelJobs'] = $parallelJobs;
        return $this;
    }

    /**
    * Gets priorityPolicy
    *  **参数解释**： 重分布优先级策略。 **约束限制**： 不涉及。 **取值范围**： - default：默认策略 - small：小表优先 - large：大表优先  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getPriorityPolicy()
    {
        return $this->container['priorityPolicy'];
    }

    /**
    * Sets priorityPolicy
    *
    * @param string $priorityPolicy **参数解释**： 重分布优先级策略。 **约束限制**： 不涉及。 **取值范围**： - default：默认策略 - small：小表优先 - large：大表优先  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPriorityPolicy($priorityPolicy)
    {
        $this->container['priorityPolicy'] = $priorityPolicy;
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

