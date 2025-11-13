<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlFilterRulePattern implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlFilterRulePattern';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  不涉及。
    * curConcurrency  **参数解释**：  当前并发数。  **取值范围**：  0 - 4294967296。
    * curReject  **参数解释**：  当前拦截次数。  **取值范围**：  0 - 4294967296。
    * createAt  **参数解释**：  SQL限流规则创建时间。  **取值范围**：  0 - 9223372036854775807。
    * expireAt  **参数解释**：  SQL限流规则失效时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pattern' => 'string',
            'maxConcurrency' => 'int',
            'curConcurrency' => 'int',
            'curReject' => 'int',
            'createAt' => 'int',
            'expireAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  不涉及。
    * curConcurrency  **参数解释**：  当前并发数。  **取值范围**：  0 - 4294967296。
    * curReject  **参数解释**：  当前拦截次数。  **取值范围**：  0 - 4294967296。
    * createAt  **参数解释**：  SQL限流规则创建时间。  **取值范围**：  0 - 9223372036854775807。
    * expireAt  **参数解释**：  SQL限流规则失效时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pattern' => null,
        'maxConcurrency' => 'int32',
        'curConcurrency' => 'int32',
        'curReject' => 'int32',
        'createAt' => 'int64',
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
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  不涉及。
    * curConcurrency  **参数解释**：  当前并发数。  **取值范围**：  0 - 4294967296。
    * curReject  **参数解释**：  当前拦截次数。  **取值范围**：  0 - 4294967296。
    * createAt  **参数解释**：  SQL限流规则创建时间。  **取值范围**：  0 - 9223372036854775807。
    * expireAt  **参数解释**：  SQL限流规则失效时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pattern' => 'pattern',
            'maxConcurrency' => 'max_concurrency',
            'curConcurrency' => 'cur_concurrency',
            'curReject' => 'cur_reject',
            'createAt' => 'create_at',
            'expireAt' => 'expire_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  不涉及。
    * curConcurrency  **参数解释**：  当前并发数。  **取值范围**：  0 - 4294967296。
    * curReject  **参数解释**：  当前拦截次数。  **取值范围**：  0 - 4294967296。
    * createAt  **参数解释**：  SQL限流规则创建时间。  **取值范围**：  0 - 9223372036854775807。
    * expireAt  **参数解释**：  SQL限流规则失效时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @var string[]
    */
    protected static $setters = [
            'pattern' => 'setPattern',
            'maxConcurrency' => 'setMaxConcurrency',
            'curConcurrency' => 'setCurConcurrency',
            'curReject' => 'setCurReject',
            'createAt' => 'setCreateAt',
            'expireAt' => 'setExpireAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  不涉及。
    * curConcurrency  **参数解释**：  当前并发数。  **取值范围**：  0 - 4294967296。
    * curReject  **参数解释**：  当前拦截次数。  **取值范围**：  0 - 4294967296。
    * createAt  **参数解释**：  SQL限流规则创建时间。  **取值范围**：  0 - 9223372036854775807。
    * expireAt  **参数解释**：  SQL限流规则失效时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @var string[]
    */
    protected static $getters = [
            'pattern' => 'getPattern',
            'maxConcurrency' => 'getMaxConcurrency',
            'curConcurrency' => 'getCurConcurrency',
            'curReject' => 'getCurReject',
            'createAt' => 'getCreateAt',
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
        $this->container['curConcurrency'] = isset($data['curConcurrency']) ? $data['curConcurrency'] : null;
        $this->container['curReject'] = isset($data['curReject']) ? $data['curReject'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
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
            if (!is_null($this->container['curConcurrency']) && ($this->container['curConcurrency'] > 4294967296)) {
                $invalidProperties[] = "invalid value for 'curConcurrency', must be smaller than or equal to 4294967296.";
            }
            if (!is_null($this->container['curConcurrency']) && ($this->container['curConcurrency'] < 0)) {
                $invalidProperties[] = "invalid value for 'curConcurrency', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['curReject']) && ($this->container['curReject'] > 4294967296)) {
                $invalidProperties[] = "invalid value for 'curReject', must be smaller than or equal to 4294967296.";
            }
            if (!is_null($this->container['curReject']) && ($this->container['curReject'] < 0)) {
                $invalidProperties[] = "invalid value for 'curReject', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createAt', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireAt']) && ($this->container['expireAt'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'expireAt', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['expireAt']) && ($this->container['expireAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireAt', must be bigger than or equal to 0.";
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
    *  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
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
    * @param string $pattern **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。
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
    *  **参数解释**：  最大并发数。  **取值范围**：  不涉及。
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
    * @param int $maxConcurrency **参数解释**：  最大并发数。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets curConcurrency
    *  **参数解释**：  当前并发数。  **取值范围**：  0 - 4294967296。
    *
    * @return int|null
    */
    public function getCurConcurrency()
    {
        return $this->container['curConcurrency'];
    }

    /**
    * Sets curConcurrency
    *
    * @param int|null $curConcurrency **参数解释**：  当前并发数。  **取值范围**：  0 - 4294967296。
    *
    * @return $this
    */
    public function setCurConcurrency($curConcurrency)
    {
        $this->container['curConcurrency'] = $curConcurrency;
        return $this;
    }

    /**
    * Gets curReject
    *  **参数解释**：  当前拦截次数。  **取值范围**：  0 - 4294967296。
    *
    * @return int|null
    */
    public function getCurReject()
    {
        return $this->container['curReject'];
    }

    /**
    * Sets curReject
    *
    * @param int|null $curReject **参数解释**：  当前拦截次数。  **取值范围**：  0 - 4294967296。
    *
    * @return $this
    */
    public function setCurReject($curReject)
    {
        $this->container['curReject'] = $curReject;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释**：  SQL限流规则创建时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：  SQL限流规则创建时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets expireAt
    *  **参数解释**：  SQL限流规则失效时间。  **取值范围**：  0 - 9223372036854775807。
    *
    * @return int|null
    */
    public function getExpireAt()
    {
        return $this->container['expireAt'];
    }

    /**
    * Sets expireAt
    *
    * @param int|null $expireAt **参数解释**：  SQL限流规则失效时间。  **取值范围**：  0 - 9223372036854775807。
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

