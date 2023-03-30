<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * select  **参数说明**：用户自定义sql select语句，最大长度2500，更新sql时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度2500，更新操作时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * active  **参数说明**：修改规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'description' => 'string',
            'select' => 'string',
            'where' => 'string',
            'active' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * select  **参数说明**：用户自定义sql select语句，最大长度2500，更新sql时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度2500，更新操作时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * active  **参数说明**：修改规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'description' => null,
        'select' => null,
        'where' => null,
        'active' => null
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
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * select  **参数说明**：用户自定义sql select语句，最大长度2500，更新sql时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度2500，更新操作时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * active  **参数说明**：修改规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'description' => 'description',
            'select' => 'select',
            'where' => 'where',
            'active' => 'active'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * select  **参数说明**：用户自定义sql select语句，最大长度2500，更新sql时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度2500，更新操作时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * active  **参数说明**：修改规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'description' => 'setDescription',
            'select' => 'setSelect',
            'where' => 'setWhere',
            'active' => 'setActive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * select  **参数说明**：用户自定义sql select语句，最大长度2500，更新sql时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度2500，更新操作时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    * active  **参数说明**：修改规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'description' => 'getDescription',
            'select' => 'getSelect',
            'where' => 'getWhere',
            'active' => 'getActive'
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['select'] = isset($data['select']) ? $data['select'] : null;
        $this->container['where'] = isset($data['where']) ? $data['where'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['ruleName'])) {
                $invalidProperties[] = "invalid value for 'ruleName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['select']) && (mb_strlen($this->container['select']) > 2500)) {
                $invalidProperties[] = "invalid value for 'select', the character length must be smaller than or equal to 2500.";
            }
            if (!is_null($this->container['select']) && (mb_strlen($this->container['select']) < 0)) {
                $invalidProperties[] = "invalid value for 'select', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['where']) && (mb_strlen($this->container['where']) > 2500)) {
                $invalidProperties[] = "invalid value for 'where', the character length must be smaller than or equal to 2500.";
            }
            if (!is_null($this->container['where']) && (mb_strlen($this->container['where']) < 0)) {
                $invalidProperties[] = "invalid value for 'where', the character length must be bigger than or equal to 0.";
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
    * Gets ruleName
    *  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：用户自定义的规则描述。
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
    * @param string|null $description **参数说明**：用户自定义的规则描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets select
    *  **参数说明**：用户自定义sql select语句，最大长度2500，更新sql时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    *
    * @return string|null
    */
    public function getSelect()
    {
        return $this->container['select'];
    }

    /**
    * Sets select
    *
    * @param string|null $select **参数说明**：用户自定义sql select语句，最大长度2500，更新sql时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    *
    * @return $this
    */
    public function setSelect($select)
    {
        $this->container['select'] = $select;
        return $this;
    }

    /**
    * Gets where
    *  **参数说明**：用户自定义sql where语句，最大长度2500，更新操作时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    *
    * @return string|null
    */
    public function getWhere()
    {
        return $this->container['where'];
    }

    /**
    * Sets where
    *
    * @param string|null $where **参数说明**：用户自定义sql where语句，最大长度2500，更新操作时，select跟where必须同时传参，如果需要清除该参数的值，输入空字符串，该参数仅供标准版和企业版用户使用。
    *
    * @return $this
    */
    public function setWhere($where)
    {
        $this->container['where'] = $where;
        return $this;
    }

    /**
    * Gets active
    *  **参数说明**：修改规则条件的状态是否为激活。
    *
    * @return bool|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param bool|null $active **参数说明**：修改规则条件的状态是否为激活。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
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

