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
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent  **默认取值：** 不涉及
    * logicOperation  条件列表匹配逻辑, 包括：contain、not_contain、equal、not_equal、prefix、not_prefix、suffix、not_suffix、contain_any、not_contain_all、equal_any、not_equal_all、prefix_any、not_prefix_all、suffix_any、not_suffix_all
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent  **默认取值：** 不涉及
    * logicOperation  条件列表匹配逻辑, 包括：contain、not_contain、equal、not_equal、prefix、not_prefix、suffix、not_suffix、contain_any、not_contain_all、equal_any、not_equal_all、prefix_any、not_prefix_all、suffix_any、not_suffix_all
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent  **默认取值：** 不涉及
    * logicOperation  条件列表匹配逻辑, 包括：contain、not_contain、equal、not_equal、prefix、not_prefix、suffix、not_suffix、contain_any、not_contain_all、equal_any、not_equal_all、prefix_any、not_prefix_all、suffix_any、not_suffix_all
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent  **默认取值：** 不涉及
    * logicOperation  条件列表匹配逻辑, 包括：contain、not_contain、equal、not_equal、prefix、not_prefix、suffix、not_suffix、contain_any、not_contain_all、equal_any、not_equal_all、prefix_any、not_prefix_all、suffix_any、not_suffix_all
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent  **默认取值：** 不涉及
    * logicOperation  条件列表匹配逻辑, 包括：contain、not_contain、equal、not_equal、prefix、not_prefix、suffix、not_suffix、contain_any、not_contain_all、equal_any、not_equal_all、prefix_any、not_prefix_all、suffix_any、not_suffix_all
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
    *  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：**  - url  - user-agent  **默认取值：** 不涉及
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
    *  条件列表匹配逻辑, 包括：contain、not_contain、equal、not_equal、prefix、not_prefix、suffix、not_suffix、contain_any、not_contain_all、equal_any、not_equal_all、prefix_any、not_prefix_all、suffix_any、not_suffix_all
    *
    * @return string|null
    */
    public function getLogicOperation()
    {
        return $this->container['logicOperation'];
    }

    /**
    * Sets logicOperation
    *
    * @param string|null $logicOperation 条件列表匹配逻辑, 包括：contain、not_contain、equal、not_equal、prefix、not_prefix、suffix、not_suffix、contain_any、not_contain_all、equal_any、not_equal_all、prefix_any、not_prefix_all、suffix_any、not_suffix_all
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
    *  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
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
    * @param string[]|null $contents 条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
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
    *  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * @param string|null $valueListId 引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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

