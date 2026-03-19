<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePunishmentRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePunishmentRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释：** 攻击惩罚类别 **约束限制：** 创建后不可修改，单个类别只能存在一个规则 **取值范围：**  - long_ip_block  - long_cookie_block  - long_params_block  - long_header_block  - short_ip_block  - short_cookie_block  - short_params_block  - short_header_block **默认取值：** 不涉及
    * timeUnit  **参数解释：** 时间单位，会影响“拦截时间”参数的取值范围 **约束限制：** 不涉及 **取值范围：**  - SECOND  - MINUTE  - HOUR  - DAY  - MONTH **默认取值：** SECOND
    * blockTime  **参数解释：** 拦截时间 **约束限制：** 取值范围取决于惩罚类别和时间单位 **取值范围：** - short_xxx   - SECOND  [1, 300] - long_xxx   - SECOND [301, 7776000]   - MINUTE [6, 129600]   - HOUR [1, 2160]   - DAY [1, 90]   - MONTH [1, 3] **默认取值：** 不涉及
    * description  规则描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'timeUnit' => 'string',
            'blockTime' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释：** 攻击惩罚类别 **约束限制：** 创建后不可修改，单个类别只能存在一个规则 **取值范围：**  - long_ip_block  - long_cookie_block  - long_params_block  - long_header_block  - short_ip_block  - short_cookie_block  - short_params_block  - short_header_block **默认取值：** 不涉及
    * timeUnit  **参数解释：** 时间单位，会影响“拦截时间”参数的取值范围 **约束限制：** 不涉及 **取值范围：**  - SECOND  - MINUTE  - HOUR  - DAY  - MONTH **默认取值：** SECOND
    * blockTime  **参数解释：** 拦截时间 **约束限制：** 取值范围取决于惩罚类别和时间单位 **取值范围：** - short_xxx   - SECOND  [1, 300] - long_xxx   - SECOND [301, 7776000]   - MINUTE [6, 129600]   - HOUR [1, 2160]   - DAY [1, 90]   - MONTH [1, 3] **默认取值：** 不涉及
    * description  规则描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'timeUnit' => null,
        'blockTime' => 'int32',
        'description' => null
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
    * category  **参数解释：** 攻击惩罚类别 **约束限制：** 创建后不可修改，单个类别只能存在一个规则 **取值范围：**  - long_ip_block  - long_cookie_block  - long_params_block  - long_header_block  - short_ip_block  - short_cookie_block  - short_params_block  - short_header_block **默认取值：** 不涉及
    * timeUnit  **参数解释：** 时间单位，会影响“拦截时间”参数的取值范围 **约束限制：** 不涉及 **取值范围：**  - SECOND  - MINUTE  - HOUR  - DAY  - MONTH **默认取值：** SECOND
    * blockTime  **参数解释：** 拦截时间 **约束限制：** 取值范围取决于惩罚类别和时间单位 **取值范围：** - short_xxx   - SECOND  [1, 300] - long_xxx   - SECOND [301, 7776000]   - MINUTE [6, 129600]   - HOUR [1, 2160]   - DAY [1, 90]   - MONTH [1, 3] **默认取值：** 不涉及
    * description  规则描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'timeUnit' => 'time_unit',
            'blockTime' => 'block_time',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释：** 攻击惩罚类别 **约束限制：** 创建后不可修改，单个类别只能存在一个规则 **取值范围：**  - long_ip_block  - long_cookie_block  - long_params_block  - long_header_block  - short_ip_block  - short_cookie_block  - short_params_block  - short_header_block **默认取值：** 不涉及
    * timeUnit  **参数解释：** 时间单位，会影响“拦截时间”参数的取值范围 **约束限制：** 不涉及 **取值范围：**  - SECOND  - MINUTE  - HOUR  - DAY  - MONTH **默认取值：** SECOND
    * blockTime  **参数解释：** 拦截时间 **约束限制：** 取值范围取决于惩罚类别和时间单位 **取值范围：** - short_xxx   - SECOND  [1, 300] - long_xxx   - SECOND [301, 7776000]   - MINUTE [6, 129600]   - HOUR [1, 2160]   - DAY [1, 90]   - MONTH [1, 3] **默认取值：** 不涉及
    * description  规则描述
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'timeUnit' => 'setTimeUnit',
            'blockTime' => 'setBlockTime',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释：** 攻击惩罚类别 **约束限制：** 创建后不可修改，单个类别只能存在一个规则 **取值范围：**  - long_ip_block  - long_cookie_block  - long_params_block  - long_header_block  - short_ip_block  - short_cookie_block  - short_params_block  - short_header_block **默认取值：** 不涉及
    * timeUnit  **参数解释：** 时间单位，会影响“拦截时间”参数的取值范围 **约束限制：** 不涉及 **取值范围：**  - SECOND  - MINUTE  - HOUR  - DAY  - MONTH **默认取值：** SECOND
    * blockTime  **参数解释：** 拦截时间 **约束限制：** 取值范围取决于惩罚类别和时间单位 **取值范围：** - short_xxx   - SECOND  [1, 300] - long_xxx   - SECOND [301, 7776000]   - MINUTE [6, 129600]   - HOUR [1, 2160]   - DAY [1, 90]   - MONTH [1, 3] **默认取值：** 不涉及
    * description  规则描述
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'timeUnit' => 'getTimeUnit',
            'blockTime' => 'getBlockTime',
            'description' => 'getDescription'
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
    const CATEGORY_LONG_IP_BLOCK = 'long_ip_block';
    const CATEGORY_LONG_COOKIE_BLOCK = 'long_cookie_block';
    const CATEGORY_LONG_PARAMS_BLOCK = 'long_params_block';
    const CATEGORY_LONG_HEADER_BLOCK = 'long_header_block';
    const CATEGORY_SHORT_IP_BLOCK = 'short_ip_block';
    const CATEGORY_SHORT_COOKIE_BLOCK = 'short_cookie_block';
    const CATEGORY_SHORT_PARAMS_BLOCK = 'short_params_block';
    const CATEGORY_SHORT_HEADER_BLOCK = 'short_header_block';
    const TIME_UNIT_SECOND = 'SECOND';
    const TIME_UNIT_MINUTE = 'MINUTE';
    const TIME_UNIT_HOUR = 'HOUR';
    const TIME_UNIT_DAY = 'DAY';
    const TIME_UNIT_MONTH = 'MONTH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_LONG_IP_BLOCK,
            self::CATEGORY_LONG_COOKIE_BLOCK,
            self::CATEGORY_LONG_PARAMS_BLOCK,
            self::CATEGORY_LONG_HEADER_BLOCK,
            self::CATEGORY_SHORT_IP_BLOCK,
            self::CATEGORY_SHORT_COOKIE_BLOCK,
            self::CATEGORY_SHORT_PARAMS_BLOCK,
            self::CATEGORY_SHORT_HEADER_BLOCK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTimeUnitAllowableValues()
    {
        return [
            self::TIME_UNIT_SECOND,
            self::TIME_UNIT_MINUTE,
            self::TIME_UNIT_HOUR,
            self::TIME_UNIT_DAY,
            self::TIME_UNIT_MONTH,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['timeUnit'] = isset($data['timeUnit']) ? $data['timeUnit'] : null;
        $this->container['blockTime'] = isset($data['blockTime']) ? $data['blockTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTimeUnitAllowableValues();
                if (!is_null($this->container['timeUnit']) && !in_array($this->container['timeUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'timeUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['blockTime'] === null) {
            $invalidProperties[] = "'blockTime' can't be null";
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
    * Gets category
    *  **参数解释：** 攻击惩罚类别 **约束限制：** 创建后不可修改，单个类别只能存在一个规则 **取值范围：**  - long_ip_block  - long_cookie_block  - long_params_block  - long_header_block  - short_ip_block  - short_cookie_block  - short_params_block  - short_header_block **默认取值：** 不涉及
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释：** 攻击惩罚类别 **约束限制：** 创建后不可修改，单个类别只能存在一个规则 **取值范围：**  - long_ip_block  - long_cookie_block  - long_params_block  - long_header_block  - short_ip_block  - short_cookie_block  - short_params_block  - short_header_block **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets timeUnit
    *  **参数解释：** 时间单位，会影响“拦截时间”参数的取值范围 **约束限制：** 不涉及 **取值范围：**  - SECOND  - MINUTE  - HOUR  - DAY  - MONTH **默认取值：** SECOND
    *
    * @return string|null
    */
    public function getTimeUnit()
    {
        return $this->container['timeUnit'];
    }

    /**
    * Sets timeUnit
    *
    * @param string|null $timeUnit **参数解释：** 时间单位，会影响“拦截时间”参数的取值范围 **约束限制：** 不涉及 **取值范围：**  - SECOND  - MINUTE  - HOUR  - DAY  - MONTH **默认取值：** SECOND
    *
    * @return $this
    */
    public function setTimeUnit($timeUnit)
    {
        $this->container['timeUnit'] = $timeUnit;
        return $this;
    }

    /**
    * Gets blockTime
    *  **参数解释：** 拦截时间 **约束限制：** 取值范围取决于惩罚类别和时间单位 **取值范围：** - short_xxx   - SECOND  [1, 300] - long_xxx   - SECOND [301, 7776000]   - MINUTE [6, 129600]   - HOUR [1, 2160]   - DAY [1, 90]   - MONTH [1, 3] **默认取值：** 不涉及
    *
    * @return int
    */
    public function getBlockTime()
    {
        return $this->container['blockTime'];
    }

    /**
    * Sets blockTime
    *
    * @param int $blockTime **参数解释：** 拦截时间 **约束限制：** 取值范围取决于惩罚类别和时间单位 **取值范围：** - short_xxx   - SECOND  [1, 300] - long_xxx   - SECOND [301, 7776000]   - MINUTE [6, 129600]   - HOUR [1, 2160]   - DAY [1, 90]   - MONTH [1, 3] **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBlockTime($blockTime)
    {
        $this->container['blockTime'] = $blockTime;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

