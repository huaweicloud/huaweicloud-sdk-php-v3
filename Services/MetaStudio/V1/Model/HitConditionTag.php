<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HitConditionTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HitConditionTag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tag  **参数解释**： 事件内容关键字段 > * event_type为1,2,3,4：与LiveEventReport中event.content中反序列化后的JSON字段对应。如：弹幕事件上报事件。   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   匹配弹幕内容，填写content；匹配用户平台等级，填写level。 > * 10：固定填写content即可。  **约束限制**： 不涉及 **取值范围**： 字符长度0-256位 **默认取值**： 不涉及
    * operation  **参数解释**： 字段取值处理 **约束限制**： 不涉及 **取值范围**： * SUM：累计 * AVG：平均 * COUNT：计数 * NONE：无处理
    * match  **参数解释**： 匹配类型。关键词匹配建议使用REGEX。 **约束限制**： 不涉及。 **取值范围**： * EQUAL: 完全相等 * REGEX：正则匹配 * MATH_GT：数值大于 * MATH_GE：数值大于等于  * MATH_LT：数值小于 * MATH_LE：数值小于等于 * MATH_EQ：数值相等  **默认取值**： 不涉及
    * value  **参数解释**： 匹配值。 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tag' => 'string',
            'operation' => 'string',
            'match' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tag  **参数解释**： 事件内容关键字段 > * event_type为1,2,3,4：与LiveEventReport中event.content中反序列化后的JSON字段对应。如：弹幕事件上报事件。   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   匹配弹幕内容，填写content；匹配用户平台等级，填写level。 > * 10：固定填写content即可。  **约束限制**： 不涉及 **取值范围**： 字符长度0-256位 **默认取值**： 不涉及
    * operation  **参数解释**： 字段取值处理 **约束限制**： 不涉及 **取值范围**： * SUM：累计 * AVG：平均 * COUNT：计数 * NONE：无处理
    * match  **参数解释**： 匹配类型。关键词匹配建议使用REGEX。 **约束限制**： 不涉及。 **取值范围**： * EQUAL: 完全相等 * REGEX：正则匹配 * MATH_GT：数值大于 * MATH_GE：数值大于等于  * MATH_LT：数值小于 * MATH_LE：数值小于等于 * MATH_EQ：数值相等  **默认取值**： 不涉及
    * value  **参数解释**： 匹配值。 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tag' => null,
        'operation' => null,
        'match' => null,
        'value' => null
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
    * tag  **参数解释**： 事件内容关键字段 > * event_type为1,2,3,4：与LiveEventReport中event.content中反序列化后的JSON字段对应。如：弹幕事件上报事件。   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   匹配弹幕内容，填写content；匹配用户平台等级，填写level。 > * 10：固定填写content即可。  **约束限制**： 不涉及 **取值范围**： 字符长度0-256位 **默认取值**： 不涉及
    * operation  **参数解释**： 字段取值处理 **约束限制**： 不涉及 **取值范围**： * SUM：累计 * AVG：平均 * COUNT：计数 * NONE：无处理
    * match  **参数解释**： 匹配类型。关键词匹配建议使用REGEX。 **约束限制**： 不涉及。 **取值范围**： * EQUAL: 完全相等 * REGEX：正则匹配 * MATH_GT：数值大于 * MATH_GE：数值大于等于  * MATH_LT：数值小于 * MATH_LE：数值小于等于 * MATH_EQ：数值相等  **默认取值**： 不涉及
    * value  **参数解释**： 匹配值。 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tag' => 'tag',
            'operation' => 'operation',
            'match' => 'match',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tag  **参数解释**： 事件内容关键字段 > * event_type为1,2,3,4：与LiveEventReport中event.content中反序列化后的JSON字段对应。如：弹幕事件上报事件。   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   匹配弹幕内容，填写content；匹配用户平台等级，填写level。 > * 10：固定填写content即可。  **约束限制**： 不涉及 **取值范围**： 字符长度0-256位 **默认取值**： 不涉及
    * operation  **参数解释**： 字段取值处理 **约束限制**： 不涉及 **取值范围**： * SUM：累计 * AVG：平均 * COUNT：计数 * NONE：无处理
    * match  **参数解释**： 匹配类型。关键词匹配建议使用REGEX。 **约束限制**： 不涉及。 **取值范围**： * EQUAL: 完全相等 * REGEX：正则匹配 * MATH_GT：数值大于 * MATH_GE：数值大于等于  * MATH_LT：数值小于 * MATH_LE：数值小于等于 * MATH_EQ：数值相等  **默认取值**： 不涉及
    * value  **参数解释**： 匹配值。 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'tag' => 'setTag',
            'operation' => 'setOperation',
            'match' => 'setMatch',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tag  **参数解释**： 事件内容关键字段 > * event_type为1,2,3,4：与LiveEventReport中event.content中反序列化后的JSON字段对应。如：弹幕事件上报事件。   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   匹配弹幕内容，填写content；匹配用户平台等级，填写level。 > * 10：固定填写content即可。  **约束限制**： 不涉及 **取值范围**： 字符长度0-256位 **默认取值**： 不涉及
    * operation  **参数解释**： 字段取值处理 **约束限制**： 不涉及 **取值范围**： * SUM：累计 * AVG：平均 * COUNT：计数 * NONE：无处理
    * match  **参数解释**： 匹配类型。关键词匹配建议使用REGEX。 **约束限制**： 不涉及。 **取值范围**： * EQUAL: 完全相等 * REGEX：正则匹配 * MATH_GT：数值大于 * MATH_GE：数值大于等于  * MATH_LT：数值小于 * MATH_LE：数值小于等于 * MATH_EQ：数值相等  **默认取值**： 不涉及
    * value  **参数解释**： 匹配值。 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'tag' => 'getTag',
            'operation' => 'getOperation',
            'match' => 'getMatch',
            'value' => 'getValue'
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
    const OPERATION_SUM = 'SUM';
    const OPERATION_AVG = 'AVG';
    const OPERATION_COUNT = 'COUNT';
    const OPERATION_NONE = 'NONE';
    const MATCH_EQUAL = 'EQUAL';
    const MATCH_REGEX = 'REGEX';
    const MATCH_MATH_GT = 'MATH_GT';
    const MATCH_MATH_GE = 'MATH_GE';
    const MATCH_MATH_LT = 'MATH_LT';
    const MATCH_MATH_LE = 'MATH_LE';
    const MATCH_MATH_EQ = 'MATH_EQ';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_SUM,
            self::OPERATION_AVG,
            self::OPERATION_COUNT,
            self::OPERATION_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMatchAllowableValues()
    {
        return [
            self::MATCH_EQUAL,
            self::MATCH_REGEX,
            self::MATCH_MATH_GT,
            self::MATCH_MATH_GE,
            self::MATCH_MATH_LT,
            self::MATCH_MATH_LE,
            self::MATCH_MATH_EQ,
        ];
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 256)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOperationAllowableValues();
                if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['operation']) && (mb_strlen($this->container['operation']) > 32)) {
                $invalidProperties[] = "invalid value for 'operation', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['operation']) && (mb_strlen($this->container['operation']) < 0)) {
                $invalidProperties[] = "invalid value for 'operation', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getMatchAllowableValues();
                if (!is_null($this->container['match']) && !in_array($this->container['match'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'match', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['match']) && (mb_strlen($this->container['match']) > 32)) {
                $invalidProperties[] = "invalid value for 'match', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['match']) && (mb_strlen($this->container['match']) < 0)) {
                $invalidProperties[] = "invalid value for 'match', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 1024)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
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
    * Gets tag
    *  **参数解释**： 事件内容关键字段 > * event_type为1,2,3,4：与LiveEventReport中event.content中反序列化后的JSON字段对应。如：弹幕事件上报事件。   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   匹配弹幕内容，填写content；匹配用户平台等级，填写level。 > * 10：固定填写content即可。  **约束限制**： 不涉及 **取值范围**： 字符长度0-256位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释**： 事件内容关键字段 > * event_type为1,2,3,4：与LiveEventReport中event.content中反序列化后的JSON字段对应。如：弹幕事件上报事件。   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   匹配弹幕内容，填写content；匹配用户平台等级，填写level。 > * 10：固定填写content即可。  **约束限制**： 不涉及 **取值范围**： 字符长度0-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets operation
    *  **参数解释**： 字段取值处理 **约束限制**： 不涉及 **取值范围**： * SUM：累计 * AVG：平均 * COUNT：计数 * NONE：无处理
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation **参数解释**： 字段取值处理 **约束限制**： 不涉及 **取值范围**： * SUM：累计 * AVG：平均 * COUNT：计数 * NONE：无处理
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets match
    *  **参数解释**： 匹配类型。关键词匹配建议使用REGEX。 **约束限制**： 不涉及。 **取值范围**： * EQUAL: 完全相等 * REGEX：正则匹配 * MATH_GT：数值大于 * MATH_GE：数值大于等于  * MATH_LT：数值小于 * MATH_LE：数值小于等于 * MATH_EQ：数值相等  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
    * Sets match
    *
    * @param string|null $match **参数解释**： 匹配类型。关键词匹配建议使用REGEX。 **约束限制**： 不涉及。 **取值范围**： * EQUAL: 完全相等 * REGEX：正则匹配 * MATH_GT：数值大于 * MATH_GE：数值大于等于  * MATH_LT：数值小于 * MATH_LE：数值小于等于 * MATH_EQ：数值相等  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMatch($match)
    {
        $this->container['match'] = $match;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 匹配值。 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value **参数解释**： 匹配值。 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

