<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateL7RuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateL7RuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  参数解释：转发规则的管理状态。  约束限制：只支持设置为true。
    * compareType  参数解释：转发匹配方式。  约束限制： - type为HOST_NAME时仅支持EQUAL_TO，支持通配符*。 - type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。 - type为METHOD、SOURCE_IP时，仅支持EQUAL_TO。 - type为HEADER、QUERY_STRING，仅支持EQUAL_TO，支持通配符*、？。  取值范围： - EQUAL_TO 表示精确匹配。 - REGEX 表示正则匹配。 - STARTS_WITH 表示前缀匹配。
    * invert  参数解释：是否反向匹配。  取值范围：true、false。  不支持该字段，请勿使用。
    * key  参数解释：匹配项的名称，比如转发规则匹配类型是请求头匹配，则key表示请求头参数的名称。  不支持该字段，请勿使用。
    * value  参数解释：匹配项的值。比如转发规则匹配类型是域名匹配，则value表示域名的值。  约束限制：仅当conditions空时该字段生效。  取值范围： - 当转发规则类别type为HOST_NAME时，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头。 若域名中包含\\*，则\\*只能出现在开头且必须以\\*.开始。当\\*开头时表示通配0~任一个字符。  - 当转发规则类别type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时， 字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。  - 当转发规则类别type为METHOD、SOURCE_IP、HEADER,QUERY_STRING时， 该字段无意义，使用conditions来指定key/value。
    * conditions  参数解释：转发规则的匹配条件。  约束限制： - 当监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效。 - 若转发规则配置了conditions，字段key、字段value的值无意义。 - 同一个rule内的conditions列表中所有key必须相同，value不允许重复。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'compareType' => 'string',
            'invert' => 'bool',
            'key' => 'string',
            'value' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdateRuleCondition[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  参数解释：转发规则的管理状态。  约束限制：只支持设置为true。
    * compareType  参数解释：转发匹配方式。  约束限制： - type为HOST_NAME时仅支持EQUAL_TO，支持通配符*。 - type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。 - type为METHOD、SOURCE_IP时，仅支持EQUAL_TO。 - type为HEADER、QUERY_STRING，仅支持EQUAL_TO，支持通配符*、？。  取值范围： - EQUAL_TO 表示精确匹配。 - REGEX 表示正则匹配。 - STARTS_WITH 表示前缀匹配。
    * invert  参数解释：是否反向匹配。  取值范围：true、false。  不支持该字段，请勿使用。
    * key  参数解释：匹配项的名称，比如转发规则匹配类型是请求头匹配，则key表示请求头参数的名称。  不支持该字段，请勿使用。
    * value  参数解释：匹配项的值。比如转发规则匹配类型是域名匹配，则value表示域名的值。  约束限制：仅当conditions空时该字段生效。  取值范围： - 当转发规则类别type为HOST_NAME时，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头。 若域名中包含\\*，则\\*只能出现在开头且必须以\\*.开始。当\\*开头时表示通配0~任一个字符。  - 当转发规则类别type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时， 字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。  - 当转发规则类别type为METHOD、SOURCE_IP、HEADER,QUERY_STRING时， 该字段无意义，使用conditions来指定key/value。
    * conditions  参数解释：转发规则的匹配条件。  约束限制： - 当监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效。 - 若转发规则配置了conditions，字段key、字段value的值无意义。 - 同一个rule内的conditions列表中所有key必须相同，value不允许重复。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'compareType' => null,
        'invert' => null,
        'key' => null,
        'value' => null,
        'conditions' => null
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
    * adminStateUp  参数解释：转发规则的管理状态。  约束限制：只支持设置为true。
    * compareType  参数解释：转发匹配方式。  约束限制： - type为HOST_NAME时仅支持EQUAL_TO，支持通配符*。 - type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。 - type为METHOD、SOURCE_IP时，仅支持EQUAL_TO。 - type为HEADER、QUERY_STRING，仅支持EQUAL_TO，支持通配符*、？。  取值范围： - EQUAL_TO 表示精确匹配。 - REGEX 表示正则匹配。 - STARTS_WITH 表示前缀匹配。
    * invert  参数解释：是否反向匹配。  取值范围：true、false。  不支持该字段，请勿使用。
    * key  参数解释：匹配项的名称，比如转发规则匹配类型是请求头匹配，则key表示请求头参数的名称。  不支持该字段，请勿使用。
    * value  参数解释：匹配项的值。比如转发规则匹配类型是域名匹配，则value表示域名的值。  约束限制：仅当conditions空时该字段生效。  取值范围： - 当转发规则类别type为HOST_NAME时，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头。 若域名中包含\\*，则\\*只能出现在开头且必须以\\*.开始。当\\*开头时表示通配0~任一个字符。  - 当转发规则类别type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时， 字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。  - 当转发规则类别type为METHOD、SOURCE_IP、HEADER,QUERY_STRING时， 该字段无意义，使用conditions来指定key/value。
    * conditions  参数解释：转发规则的匹配条件。  约束限制： - 当监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效。 - 若转发规则配置了conditions，字段key、字段value的值无意义。 - 同一个rule内的conditions列表中所有key必须相同，value不允许重复。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'compareType' => 'compare_type',
            'invert' => 'invert',
            'key' => 'key',
            'value' => 'value',
            'conditions' => 'conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  参数解释：转发规则的管理状态。  约束限制：只支持设置为true。
    * compareType  参数解释：转发匹配方式。  约束限制： - type为HOST_NAME时仅支持EQUAL_TO，支持通配符*。 - type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。 - type为METHOD、SOURCE_IP时，仅支持EQUAL_TO。 - type为HEADER、QUERY_STRING，仅支持EQUAL_TO，支持通配符*、？。  取值范围： - EQUAL_TO 表示精确匹配。 - REGEX 表示正则匹配。 - STARTS_WITH 表示前缀匹配。
    * invert  参数解释：是否反向匹配。  取值范围：true、false。  不支持该字段，请勿使用。
    * key  参数解释：匹配项的名称，比如转发规则匹配类型是请求头匹配，则key表示请求头参数的名称。  不支持该字段，请勿使用。
    * value  参数解释：匹配项的值。比如转发规则匹配类型是域名匹配，则value表示域名的值。  约束限制：仅当conditions空时该字段生效。  取值范围： - 当转发规则类别type为HOST_NAME时，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头。 若域名中包含\\*，则\\*只能出现在开头且必须以\\*.开始。当\\*开头时表示通配0~任一个字符。  - 当转发规则类别type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时， 字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。  - 当转发规则类别type为METHOD、SOURCE_IP、HEADER,QUERY_STRING时， 该字段无意义，使用conditions来指定key/value。
    * conditions  参数解释：转发规则的匹配条件。  约束限制： - 当监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效。 - 若转发规则配置了conditions，字段key、字段value的值无意义。 - 同一个rule内的conditions列表中所有key必须相同，value不允许重复。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'compareType' => 'setCompareType',
            'invert' => 'setInvert',
            'key' => 'setKey',
            'value' => 'setValue',
            'conditions' => 'setConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  参数解释：转发规则的管理状态。  约束限制：只支持设置为true。
    * compareType  参数解释：转发匹配方式。  约束限制： - type为HOST_NAME时仅支持EQUAL_TO，支持通配符*。 - type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。 - type为METHOD、SOURCE_IP时，仅支持EQUAL_TO。 - type为HEADER、QUERY_STRING，仅支持EQUAL_TO，支持通配符*、？。  取值范围： - EQUAL_TO 表示精确匹配。 - REGEX 表示正则匹配。 - STARTS_WITH 表示前缀匹配。
    * invert  参数解释：是否反向匹配。  取值范围：true、false。  不支持该字段，请勿使用。
    * key  参数解释：匹配项的名称，比如转发规则匹配类型是请求头匹配，则key表示请求头参数的名称。  不支持该字段，请勿使用。
    * value  参数解释：匹配项的值。比如转发规则匹配类型是域名匹配，则value表示域名的值。  约束限制：仅当conditions空时该字段生效。  取值范围： - 当转发规则类别type为HOST_NAME时，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头。 若域名中包含\\*，则\\*只能出现在开头且必须以\\*.开始。当\\*开头时表示通配0~任一个字符。  - 当转发规则类别type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时， 字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。  - 当转发规则类别type为METHOD、SOURCE_IP、HEADER,QUERY_STRING时， 该字段无意义，使用conditions来指定key/value。
    * conditions  参数解释：转发规则的匹配条件。  约束限制： - 当监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效。 - 若转发规则配置了conditions，字段key、字段value的值无意义。 - 同一个rule内的conditions列表中所有key必须相同，value不允许重复。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'compareType' => 'getCompareType',
            'invert' => 'getInvert',
            'key' => 'getKey',
            'value' => 'getValue',
            'conditions' => 'getConditions'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['invert'] = isset($data['invert']) ? $data['invert'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 255)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 128)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
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
    * Gets adminStateUp
    *  参数解释：转发规则的管理状态。  约束限制：只支持设置为true。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 参数解释：转发规则的管理状态。  约束限制：只支持设置为true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets compareType
    *  参数解释：转发匹配方式。  约束限制： - type为HOST_NAME时仅支持EQUAL_TO，支持通配符*。 - type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。 - type为METHOD、SOURCE_IP时，仅支持EQUAL_TO。 - type为HEADER、QUERY_STRING，仅支持EQUAL_TO，支持通配符*、？。  取值范围： - EQUAL_TO 表示精确匹配。 - REGEX 表示正则匹配。 - STARTS_WITH 表示前缀匹配。
    *
    * @return string|null
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string|null $compareType 参数解释：转发匹配方式。  约束限制： - type为HOST_NAME时仅支持EQUAL_TO，支持通配符*。 - type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。 - type为METHOD、SOURCE_IP时，仅支持EQUAL_TO。 - type为HEADER、QUERY_STRING，仅支持EQUAL_TO，支持通配符*、？。  取值范围： - EQUAL_TO 表示精确匹配。 - REGEX 表示正则匹配。 - STARTS_WITH 表示前缀匹配。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets invert
    *  参数解释：是否反向匹配。  取值范围：true、false。  不支持该字段，请勿使用。
    *
    * @return bool|null
    */
    public function getInvert()
    {
        return $this->container['invert'];
    }

    /**
    * Sets invert
    *
    * @param bool|null $invert 参数解释：是否反向匹配。  取值范围：true、false。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setInvert($invert)
    {
        $this->container['invert'] = $invert;
        return $this;
    }

    /**
    * Gets key
    *  参数解释：匹配项的名称，比如转发规则匹配类型是请求头匹配，则key表示请求头参数的名称。  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 参数解释：匹配项的名称，比如转发规则匹配类型是请求头匹配，则key表示请求头参数的名称。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  参数解释：匹配项的值。比如转发规则匹配类型是域名匹配，则value表示域名的值。  约束限制：仅当conditions空时该字段生效。  取值范围： - 当转发规则类别type为HOST_NAME时，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头。 若域名中包含\\*，则\\*只能出现在开头且必须以\\*.开始。当\\*开头时表示通配0~任一个字符。  - 当转发规则类别type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时， 字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。  - 当转发规则类别type为METHOD、SOURCE_IP、HEADER,QUERY_STRING时， 该字段无意义，使用conditions来指定key/value。
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
    * @param string|null $value 参数解释：匹配项的值。比如转发规则匹配类型是域名匹配，则value表示域名的值。  约束限制：仅当conditions空时该字段生效。  取值范围： - 当转发规则类别type为HOST_NAME时，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头。 若域名中包含\\*，则\\*只能出现在开头且必须以\\*.开始。当\\*开头时表示通配0~任一个字符。  - 当转发规则类别type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时， 字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。  - 当转发规则类别type为METHOD、SOURCE_IP、HEADER,QUERY_STRING时， 该字段无意义，使用conditions来指定key/value。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets conditions
    *  参数解释：转发规则的匹配条件。  约束限制： - 当监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效。 - 若转发规则配置了conditions，字段key、字段value的值无意义。 - 同一个rule内的conditions列表中所有key必须相同，value不允许重复。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdateRuleCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdateRuleCondition[]|null $conditions 参数解释：转发规则的匹配条件。  约束限制： - 当监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效。 - 若转发规则配置了conditions，字段key、字段value的值无意义。 - 同一个rule内的conditions列表中所有key必须相同，value不允许重复。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
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

