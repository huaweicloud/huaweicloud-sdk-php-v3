<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSqlFilterRulePattern implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSqlFilterRulePattern';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pattern  SQL限流规则，由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  最大并发数。取值范围：非负整数。
    * expireAt  **参数解释**：  SQL限流失效时间，标准秒级时间戳，永久生效SQL限流规则该字段为null。  **约束限制**：  不涉及。  **取值范围**：  0 - 9223372036854775807。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pattern' => 'string',
            'maxConcurrency' => 'int',
            'expireAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pattern  SQL限流规则，由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  最大并发数。取值范围：非负整数。
    * expireAt  **参数解释**：  SQL限流失效时间，标准秒级时间戳，永久生效SQL限流规则该字段为null。  **约束限制**：  不涉及。  **取值范围**：  0 - 9223372036854775807。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pattern' => null,
        'maxConcurrency' => 'int32',
        'expireAt' => 'int64'
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
    * pattern  SQL限流规则，由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  最大并发数。取值范围：非负整数。
    * expireAt  **参数解释**：  SQL限流失效时间，标准秒级时间戳，永久生效SQL限流规则该字段为null。  **约束限制**：  不涉及。  **取值范围**：  0 - 9223372036854775807。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pattern' => 'pattern',
            'maxConcurrency' => 'max_concurrency',
            'expireAt' => 'expire_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pattern  SQL限流规则，由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  最大并发数。取值范围：非负整数。
    * expireAt  **参数解释**：  SQL限流失效时间，标准秒级时间戳，永久生效SQL限流规则该字段为null。  **约束限制**：  不涉及。  **取值范围**：  0 - 9223372036854775807。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'pattern' => 'setPattern',
            'maxConcurrency' => 'setMaxConcurrency',
            'expireAt' => 'setExpireAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pattern  SQL限流规则，由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  最大并发数。取值范围：非负整数。
    * expireAt  **参数解释**：  SQL限流失效时间，标准秒级时间戳，永久生效SQL限流规则该字段为null。  **约束限制**：  不涉及。  **取值范围**：  0 - 9223372036854775807。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'pattern' => 'getPattern',
            'maxConcurrency' => 'getMaxConcurrency',
            'expireAt' => 'getExpireAt'
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
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['expireAt'] = isset($data['expireAt']) ? $data['expireAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pattern'] === null) {
            $invalidProperties[] = "'pattern' can't be null";
        }
        if ($this->container['maxConcurrency'] === null) {
            $invalidProperties[] = "'maxConcurrency' can't be null";
        }
        if ($this->container['expireAt'] === null) {
            $invalidProperties[] = "'expireAt' can't be null";
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
    * Gets pattern
    *  SQL限流规则，由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    *
    * @return string
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string $pattern SQL限流规则，由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  最大并发数。取值范围：非负整数。
    *
    * @return int
    */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
    * Sets maxConcurrency
    *
    * @param int $maxConcurrency 最大并发数。取值范围：非负整数。
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets expireAt
    *  **参数解释**：  SQL限流失效时间，标准秒级时间戳，永久生效SQL限流规则该字段为null。  **约束限制**：  不涉及。  **取值范围**：  0 - 9223372036854775807。  **默认取值**：  不涉及。
    *
    * @return int
    */
    public function getExpireAt()
    {
        return $this->container['expireAt'];
    }

    /**
    * Sets expireAt
    *
    * @param int $expireAt **参数解释**：  SQL限流失效时间，标准秒级时间戳，永久生效SQL限流规则该字段为null。  **约束限制**：  不涉及。  **取值范围**：  0 - 9223372036854775807。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setExpireAt($expireAt)
    {
        $this->container['expireAt'] = $expireAt;
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

