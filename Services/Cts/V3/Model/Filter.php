<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Filter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Filter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * condition  多条件关系。 - AND 表示所有过滤条件满足后生效。 - OR 表示有任意一个条件满足时生效。
    * isSupportFilter  是否打开高级筛选开关。
    * rule  高级过滤条件规则，示例如下：\"key != value\"，格式为：字段 规则 值。 -字段取值范围：api_version,code,trace_rating,trace_type,resource_id,resource_name。 -规则：!= 或 =。 - 值：api_version正则约束：^(a-zA-Z0-9_-.){1,64}$；code：最小长度1，最大长度256；trace_rating枚举值：\"normal\", \"warning\", \"incident\"；trace_type枚举值：\"ConsoleAction\", \"ApiCall\", \"SystemAction\"；resource_id：最小长度1，最大长度350；resource_name：最小长度1，最大长度256
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'condition' => 'string',
            'isSupportFilter' => 'bool',
            'rule' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * condition  多条件关系。 - AND 表示所有过滤条件满足后生效。 - OR 表示有任意一个条件满足时生效。
    * isSupportFilter  是否打开高级筛选开关。
    * rule  高级过滤条件规则，示例如下：\"key != value\"，格式为：字段 规则 值。 -字段取值范围：api_version,code,trace_rating,trace_type,resource_id,resource_name。 -规则：!= 或 =。 - 值：api_version正则约束：^(a-zA-Z0-9_-.){1,64}$；code：最小长度1，最大长度256；trace_rating枚举值：\"normal\", \"warning\", \"incident\"；trace_type枚举值：\"ConsoleAction\", \"ApiCall\", \"SystemAction\"；resource_id：最小长度1，最大长度350；resource_name：最小长度1，最大长度256
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'condition' => null,
        'isSupportFilter' => null,
        'rule' => null
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
    * condition  多条件关系。 - AND 表示所有过滤条件满足后生效。 - OR 表示有任意一个条件满足时生效。
    * isSupportFilter  是否打开高级筛选开关。
    * rule  高级过滤条件规则，示例如下：\"key != value\"，格式为：字段 规则 值。 -字段取值范围：api_version,code,trace_rating,trace_type,resource_id,resource_name。 -规则：!= 或 =。 - 值：api_version正则约束：^(a-zA-Z0-9_-.){1,64}$；code：最小长度1，最大长度256；trace_rating枚举值：\"normal\", \"warning\", \"incident\"；trace_type枚举值：\"ConsoleAction\", \"ApiCall\", \"SystemAction\"；resource_id：最小长度1，最大长度350；resource_name：最小长度1，最大长度256
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'condition' => 'condition',
            'isSupportFilter' => 'is_support_filter',
            'rule' => 'rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * condition  多条件关系。 - AND 表示所有过滤条件满足后生效。 - OR 表示有任意一个条件满足时生效。
    * isSupportFilter  是否打开高级筛选开关。
    * rule  高级过滤条件规则，示例如下：\"key != value\"，格式为：字段 规则 值。 -字段取值范围：api_version,code,trace_rating,trace_type,resource_id,resource_name。 -规则：!= 或 =。 - 值：api_version正则约束：^(a-zA-Z0-9_-.){1,64}$；code：最小长度1，最大长度256；trace_rating枚举值：\"normal\", \"warning\", \"incident\"；trace_type枚举值：\"ConsoleAction\", \"ApiCall\", \"SystemAction\"；resource_id：最小长度1，最大长度350；resource_name：最小长度1，最大长度256
    *
    * @var string[]
    */
    protected static $setters = [
            'condition' => 'setCondition',
            'isSupportFilter' => 'setIsSupportFilter',
            'rule' => 'setRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * condition  多条件关系。 - AND 表示所有过滤条件满足后生效。 - OR 表示有任意一个条件满足时生效。
    * isSupportFilter  是否打开高级筛选开关。
    * rule  高级过滤条件规则，示例如下：\"key != value\"，格式为：字段 规则 值。 -字段取值范围：api_version,code,trace_rating,trace_type,resource_id,resource_name。 -规则：!= 或 =。 - 值：api_version正则约束：^(a-zA-Z0-9_-.){1,64}$；code：最小长度1，最大长度256；trace_rating枚举值：\"normal\", \"warning\", \"incident\"；trace_type枚举值：\"ConsoleAction\", \"ApiCall\", \"SystemAction\"；resource_id：最小长度1，最大长度350；resource_name：最小长度1，最大长度256
    *
    * @var string[]
    */
    protected static $getters = [
            'condition' => 'getCondition',
            'isSupportFilter' => 'getIsSupportFilter',
            'rule' => 'getRule'
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
    const CONDITION__AND = 'AND';
    const CONDITION__OR = 'OR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__AND,
            self::CONDITION__OR,
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['isSupportFilter'] = isset($data['isSupportFilter']) ? $data['isSupportFilter'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
            $allowedValues = $this->getConditionAllowableValues();
                if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['isSupportFilter'] === null) {
            $invalidProperties[] = "'isSupportFilter' can't be null";
        }
        if ($this->container['rule'] === null) {
            $invalidProperties[] = "'rule' can't be null";
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
    * Gets condition
    *  多条件关系。 - AND 表示所有过滤条件满足后生效。 - OR 表示有任意一个条件满足时生效。
    *
    * @return string
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string $condition 多条件关系。 - AND 表示所有过滤条件满足后生效。 - OR 表示有任意一个条件满足时生效。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets isSupportFilter
    *  是否打开高级筛选开关。
    *
    * @return bool
    */
    public function getIsSupportFilter()
    {
        return $this->container['isSupportFilter'];
    }

    /**
    * Sets isSupportFilter
    *
    * @param bool $isSupportFilter 是否打开高级筛选开关。
    *
    * @return $this
    */
    public function setIsSupportFilter($isSupportFilter)
    {
        $this->container['isSupportFilter'] = $isSupportFilter;
        return $this;
    }

    /**
    * Gets rule
    *  高级过滤条件规则，示例如下：\"key != value\"，格式为：字段 规则 值。 -字段取值范围：api_version,code,trace_rating,trace_type,resource_id,resource_name。 -规则：!= 或 =。 - 值：api_version正则约束：^(a-zA-Z0-9_-.){1,64}$；code：最小长度1，最大长度256；trace_rating枚举值：\"normal\", \"warning\", \"incident\"；trace_type枚举值：\"ConsoleAction\", \"ApiCall\", \"SystemAction\"；resource_id：最小长度1，最大长度350；resource_name：最小长度1，最大长度256
    *
    * @return string[]
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param string[] $rule 高级过滤条件规则，示例如下：\"key != value\"，格式为：字段 规则 值。 -字段取值范围：api_version,code,trace_rating,trace_type,resource_id,resource_name。 -规则：!= 或 =。 - 值：api_version正则约束：^(a-zA-Z0-9_-.){1,64}$；code：最小长度1，最大长度256；trace_rating枚举值：\"normal\", \"warning\", \"incident\"；trace_type枚举值：\"ConsoleAction\", \"ApiCall\", \"SystemAction\"；resource_id：最小长度1，最大长度350；resource_name：最小长度1，最大长度256
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
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

