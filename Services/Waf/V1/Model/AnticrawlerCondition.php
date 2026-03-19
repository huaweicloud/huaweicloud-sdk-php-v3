<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnticrawlerCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnticrawlerCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent **默认取值：** 不涉及
    * logicOperation  **参数解释：** 条件列表匹配逻辑 **约束限制：** 不涉及 **取值范围：** - contain_any: 包含任意一个 - not_contain_all: 不包含全部 - equal_any: 等于任意一个 - not_equal_all: 不等于全部 - prefix_any: 前缀匹配任意一个 - not_prefix_all: 前缀不匹配全部 - suffix_any: 后缀匹配任意一个 - not_suffix_all: 后缀不匹配全部 - contain: 包含 - not_contain: 不包含 - equal: 等于 - not_equal: 不等于 - prefix: 前缀匹配 - not_prefix: 前缀不匹配 - suffix: 后缀匹配 - not_suffix: 后缀不匹配 - len_equal: 长度等于 - len_not_equal: 长度不等于 - len_greater: 长度大于 - len_less: 长度小于 - len_greater_equal: 长度大于等于 - len_less_equal: 长度小于等于 - regular_match: 正则匹配 - regular_not_match: 正则不匹配 **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数；仅支持单个匹配内容 **取值范围：** 匹配内容字符串长度范围：[1, 4096] **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'logicOperation' => 'string',
            'contents' => 'string[]',
            'valueListId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent **默认取值：** 不涉及
    * logicOperation  **参数解释：** 条件列表匹配逻辑 **约束限制：** 不涉及 **取值范围：** - contain_any: 包含任意一个 - not_contain_all: 不包含全部 - equal_any: 等于任意一个 - not_equal_all: 不等于全部 - prefix_any: 前缀匹配任意一个 - not_prefix_all: 前缀不匹配全部 - suffix_any: 后缀匹配任意一个 - not_suffix_all: 后缀不匹配全部 - contain: 包含 - not_contain: 不包含 - equal: 等于 - not_equal: 不等于 - prefix: 前缀匹配 - not_prefix: 前缀不匹配 - suffix: 后缀匹配 - not_suffix: 后缀不匹配 - len_equal: 长度等于 - len_not_equal: 长度不等于 - len_greater: 长度大于 - len_less: 长度小于 - len_greater_equal: 长度大于等于 - len_less_equal: 长度小于等于 - regular_match: 正则匹配 - regular_not_match: 正则不匹配 **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数；仅支持单个匹配内容 **取值范围：** 匹配内容字符串长度范围：[1, 4096] **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'logicOperation' => null,
        'contents' => null,
        'valueListId' => null
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
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent **默认取值：** 不涉及
    * logicOperation  **参数解释：** 条件列表匹配逻辑 **约束限制：** 不涉及 **取值范围：** - contain_any: 包含任意一个 - not_contain_all: 不包含全部 - equal_any: 等于任意一个 - not_equal_all: 不等于全部 - prefix_any: 前缀匹配任意一个 - not_prefix_all: 前缀不匹配全部 - suffix_any: 后缀匹配任意一个 - not_suffix_all: 后缀不匹配全部 - contain: 包含 - not_contain: 不包含 - equal: 等于 - not_equal: 不等于 - prefix: 前缀匹配 - not_prefix: 前缀不匹配 - suffix: 后缀匹配 - not_suffix: 后缀不匹配 - len_equal: 长度等于 - len_not_equal: 长度不等于 - len_greater: 长度大于 - len_less: 长度小于 - len_greater_equal: 长度大于等于 - len_less_equal: 长度小于等于 - regular_match: 正则匹配 - regular_not_match: 正则不匹配 **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数；仅支持单个匹配内容 **取值范围：** 匹配内容字符串长度范围：[1, 4096] **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'logicOperation' => 'logic_operation',
            'contents' => 'contents',
            'valueListId' => 'value_list_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent **默认取值：** 不涉及
    * logicOperation  **参数解释：** 条件列表匹配逻辑 **约束限制：** 不涉及 **取值范围：** - contain_any: 包含任意一个 - not_contain_all: 不包含全部 - equal_any: 等于任意一个 - not_equal_all: 不等于全部 - prefix_any: 前缀匹配任意一个 - not_prefix_all: 前缀不匹配全部 - suffix_any: 后缀匹配任意一个 - not_suffix_all: 后缀不匹配全部 - contain: 包含 - not_contain: 不包含 - equal: 等于 - not_equal: 不等于 - prefix: 前缀匹配 - not_prefix: 前缀不匹配 - suffix: 后缀匹配 - not_suffix: 后缀不匹配 - len_equal: 长度等于 - len_not_equal: 长度不等于 - len_greater: 长度大于 - len_less: 长度小于 - len_greater_equal: 长度大于等于 - len_less_equal: 长度小于等于 - regular_match: 正则匹配 - regular_not_match: 正则不匹配 **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数；仅支持单个匹配内容 **取值范围：** 匹配内容字符串长度范围：[1, 4096] **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'logicOperation' => 'setLogicOperation',
            'contents' => 'setContents',
            'valueListId' => 'setValueListId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent **默认取值：** 不涉及
    * logicOperation  **参数解释：** 条件列表匹配逻辑 **约束限制：** 不涉及 **取值范围：** - contain_any: 包含任意一个 - not_contain_all: 不包含全部 - equal_any: 等于任意一个 - not_equal_all: 不等于全部 - prefix_any: 前缀匹配任意一个 - not_prefix_all: 前缀不匹配全部 - suffix_any: 后缀匹配任意一个 - not_suffix_all: 后缀不匹配全部 - contain: 包含 - not_contain: 不包含 - equal: 等于 - not_equal: 不等于 - prefix: 前缀匹配 - not_prefix: 前缀不匹配 - suffix: 后缀匹配 - not_suffix: 后缀不匹配 - len_equal: 长度等于 - len_not_equal: 长度不等于 - len_greater: 长度大于 - len_less: 长度小于 - len_greater_equal: 长度大于等于 - len_less_equal: 长度小于等于 - regular_match: 正则匹配 - regular_not_match: 正则不匹配 **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数；仅支持单个匹配内容 **取值范围：** 匹配内容字符串长度范围：[1, 4096] **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'logicOperation' => 'getLogicOperation',
            'contents' => 'getContents',
            'valueListId' => 'getValueListId'
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
    const CATEGORY_URL = 'url';
    const CATEGORY_USER_AGENT = 'user-agent';
    const LOGIC_OPERATION_CONTAIN_ANY = 'contain_any';
    const LOGIC_OPERATION_NOT_CONTAIN_ALL = 'not_contain_all';
    const LOGIC_OPERATION_EQUAL_ANY = 'equal_any';
    const LOGIC_OPERATION_NOT_EQUAL_ALL = 'not_equal_all';
    const LOGIC_OPERATION_PREFIX_ANY = 'prefix_any';
    const LOGIC_OPERATION_NOT_PREFIX_ALL = 'not_prefix_all';
    const LOGIC_OPERATION_SUFFIX_ANY = 'suffix_any';
    const LOGIC_OPERATION_NOT_SUFFIX_ALL = 'not_suffix_all';
    const LOGIC_OPERATION_CONTAIN = 'contain';
    const LOGIC_OPERATION_NOT_CONTAIN = 'not_contain';
    const LOGIC_OPERATION_EQUAL = 'equal';
    const LOGIC_OPERATION_NOT_EQUAL = 'not_equal';
    const LOGIC_OPERATION_PREFIX = 'prefix';
    const LOGIC_OPERATION_NOT_PREFIX = 'not_prefix';
    const LOGIC_OPERATION_SUFFIX = 'suffix';
    const LOGIC_OPERATION_NOT_SUFFIX = 'not_suffix';
    const LOGIC_OPERATION_LEN_EQUAL = 'len_equal';
    const LOGIC_OPERATION_LEN_NOT_EQUAL = 'len_not_equal';
    const LOGIC_OPERATION_LEN_GREATER = 'len_greater';
    const LOGIC_OPERATION_LEN_LESS = 'len_less';
    const LOGIC_OPERATION_LEN_GREATER_EQUAL = 'len_greater_equal';
    const LOGIC_OPERATION_LEN_LESS_EQUAL = 'len_less_equal';
    const LOGIC_OPERATION_REGULAR_MATCH = 'regular_match';
    const LOGIC_OPERATION_REGULAR_NOT_MATCH = 'regular_not_match';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_URL,
            self::CATEGORY_USER_AGENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogicOperationAllowableValues()
    {
        return [
            self::LOGIC_OPERATION_CONTAIN_ANY,
            self::LOGIC_OPERATION_NOT_CONTAIN_ALL,
            self::LOGIC_OPERATION_EQUAL_ANY,
            self::LOGIC_OPERATION_NOT_EQUAL_ALL,
            self::LOGIC_OPERATION_PREFIX_ANY,
            self::LOGIC_OPERATION_NOT_PREFIX_ALL,
            self::LOGIC_OPERATION_SUFFIX_ANY,
            self::LOGIC_OPERATION_NOT_SUFFIX_ALL,
            self::LOGIC_OPERATION_CONTAIN,
            self::LOGIC_OPERATION_NOT_CONTAIN,
            self::LOGIC_OPERATION_EQUAL,
            self::LOGIC_OPERATION_NOT_EQUAL,
            self::LOGIC_OPERATION_PREFIX,
            self::LOGIC_OPERATION_NOT_PREFIX,
            self::LOGIC_OPERATION_SUFFIX,
            self::LOGIC_OPERATION_NOT_SUFFIX,
            self::LOGIC_OPERATION_LEN_EQUAL,
            self::LOGIC_OPERATION_LEN_NOT_EQUAL,
            self::LOGIC_OPERATION_LEN_GREATER,
            self::LOGIC_OPERATION_LEN_LESS,
            self::LOGIC_OPERATION_LEN_GREATER_EQUAL,
            self::LOGIC_OPERATION_LEN_LESS_EQUAL,
            self::LOGIC_OPERATION_REGULAR_MATCH,
            self::LOGIC_OPERATION_REGULAR_NOT_MATCH,
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
        $this->container['logicOperation'] = isset($data['logicOperation']) ? $data['logicOperation'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['valueListId'] = isset($data['valueListId']) ? $data['valueListId'] : null;
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

        if ($this->container['logicOperation'] === null) {
            $invalidProperties[] = "'logicOperation' can't be null";
        }
            $allowedValues = $this->getLogicOperationAllowableValues();
                if (!is_null($this->container['logicOperation']) && !in_array($this->container['logicOperation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logicOperation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent **默认取值：** 不涉及
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
    * @param string $category **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets logicOperation
    *  **参数解释：** 条件列表匹配逻辑 **约束限制：** 不涉及 **取值范围：** - contain_any: 包含任意一个 - not_contain_all: 不包含全部 - equal_any: 等于任意一个 - not_equal_all: 不等于全部 - prefix_any: 前缀匹配任意一个 - not_prefix_all: 前缀不匹配全部 - suffix_any: 后缀匹配任意一个 - not_suffix_all: 后缀不匹配全部 - contain: 包含 - not_contain: 不包含 - equal: 等于 - not_equal: 不等于 - prefix: 前缀匹配 - not_prefix: 前缀不匹配 - suffix: 后缀匹配 - not_suffix: 后缀不匹配 - len_equal: 长度等于 - len_not_equal: 长度不等于 - len_greater: 长度大于 - len_less: 长度小于 - len_greater_equal: 长度大于等于 - len_less_equal: 长度小于等于 - regular_match: 正则匹配 - regular_not_match: 正则不匹配 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getLogicOperation()
    {
        return $this->container['logicOperation'];
    }

    /**
    * Sets logicOperation
    *
    * @param string $logicOperation **参数解释：** 条件列表匹配逻辑 **约束限制：** 不涉及 **取值范围：** - contain_any: 包含任意一个 - not_contain_all: 不包含全部 - equal_any: 等于任意一个 - not_equal_all: 不等于全部 - prefix_any: 前缀匹配任意一个 - not_prefix_all: 前缀不匹配全部 - suffix_any: 后缀匹配任意一个 - not_suffix_all: 后缀不匹配全部 - contain: 包含 - not_contain: 不包含 - equal: 等于 - not_equal: 不等于 - prefix: 前缀匹配 - not_prefix: 前缀不匹配 - suffix: 后缀匹配 - not_suffix: 后缀不匹配 - len_equal: 长度等于 - len_not_equal: 长度不等于 - len_greater: 长度大于 - len_less: 长度小于 - len_greater_equal: 长度大于等于 - len_less_equal: 长度小于等于 - regular_match: 正则匹配 - regular_not_match: 正则不匹配 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLogicOperation($logicOperation)
    {
        $this->container['logicOperation'] = $logicOperation;
        return $this;
    }

    /**
    * Gets contents
    *  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数；仅支持单个匹配内容 **取值范围：** 匹配内容字符串长度范围：[1, 4096] **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param string[]|null $contents **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数；仅支持单个匹配内容 **取值范围：** 匹配内容字符串长度范围：[1, 4096] **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets valueListId
    *  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getValueListId()
    {
        return $this->container['valueListId'];
    }

    /**
    * Sets valueListId
    *
    * @param string|null $valueListId **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setValueListId($valueListId)
    {
        $this->container['valueListId'] = $valueListId;
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

