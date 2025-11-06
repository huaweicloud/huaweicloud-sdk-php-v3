<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateGroupGeneralPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateGroupGeneralPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disableFork  **参数解释：** 是否禁用fork。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disableFork' => 'bool',
            'branchNameRegex' => 'string',
            'tagNameRegex' => 'string',
            'generatePreMergeRef' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disableFork  **参数解释：** 是否禁用fork。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disableFork' => null,
        'branchNameRegex' => null,
        'tagNameRegex' => null,
        'generatePreMergeRef' => null
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
    * disableFork  **参数解释：** 是否禁用fork。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disableFork' => 'disable_fork',
            'branchNameRegex' => 'branch_name_regex',
            'tagNameRegex' => 'tag_name_regex',
            'generatePreMergeRef' => 'generate_pre_merge_ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disableFork  **参数解释：** 是否禁用fork。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    *
    * @var string[]
    */
    protected static $setters = [
            'disableFork' => 'setDisableFork',
            'branchNameRegex' => 'setBranchNameRegex',
            'tagNameRegex' => 'setTagNameRegex',
            'generatePreMergeRef' => 'setGeneratePreMergeRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disableFork  **参数解释：** 是否禁用fork。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    *
    * @var string[]
    */
    protected static $getters = [
            'disableFork' => 'getDisableFork',
            'branchNameRegex' => 'getBranchNameRegex',
            'tagNameRegex' => 'getTagNameRegex',
            'generatePreMergeRef' => 'getGeneratePreMergeRef'
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
        $this->container['disableFork'] = isset($data['disableFork']) ? $data['disableFork'] : null;
        $this->container['branchNameRegex'] = isset($data['branchNameRegex']) ? $data['branchNameRegex'] : null;
        $this->container['tagNameRegex'] = isset($data['tagNameRegex']) ? $data['tagNameRegex'] : null;
        $this->container['generatePreMergeRef'] = isset($data['generatePreMergeRef']) ? $data['generatePreMergeRef'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['branchNameRegex']) && (mb_strlen($this->container['branchNameRegex']) > 1000)) {
                $invalidProperties[] = "invalid value for 'branchNameRegex', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['branchNameRegex']) && (mb_strlen($this->container['branchNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'branchNameRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tagNameRegex']) && (mb_strlen($this->container['tagNameRegex']) > 1000)) {
                $invalidProperties[] = "invalid value for 'tagNameRegex', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['tagNameRegex']) && (mb_strlen($this->container['tagNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'tagNameRegex', the character length must be bigger than or equal to 1.";
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
    * Gets disableFork
    *  **参数解释：** 是否禁用fork。
    *
    * @return bool|null
    */
    public function getDisableFork()
    {
        return $this->container['disableFork'];
    }

    /**
    * Sets disableFork
    *
    * @param bool|null $disableFork **参数解释：** 是否禁用fork。
    *
    * @return $this
    */
    public function setDisableFork($disableFork)
    {
        $this->container['disableFork'] = $disableFork;
        return $this;
    }

    /**
    * Gets branchNameRegex
    *  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getBranchNameRegex()
    {
        return $this->container['branchNameRegex'];
    }

    /**
    * Sets branchNameRegex
    *
    * @param string|null $branchNameRegex **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setBranchNameRegex($branchNameRegex)
    {
        $this->container['branchNameRegex'] = $branchNameRegex;
        return $this;
    }

    /**
    * Gets tagNameRegex
    *  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getTagNameRegex()
    {
        return $this->container['tagNameRegex'];
    }

    /**
    * Sets tagNameRegex
    *
    * @param string|null $tagNameRegex **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setTagNameRegex($tagNameRegex)
    {
        $this->container['tagNameRegex'] = $tagNameRegex;
        return $this;
    }

    /**
    * Gets generatePreMergeRef
    *  **参数解释：** 生成合并请求预合并。
    *
    * @return bool|null
    */
    public function getGeneratePreMergeRef()
    {
        return $this->container['generatePreMergeRef'];
    }

    /**
    * Sets generatePreMergeRef
    *
    * @param bool|null $generatePreMergeRef **参数解释：** 生成合并请求预合并。
    *
    * @return $this
    */
    public function setGeneratePreMergeRef($generatePreMergeRef)
    {
        $this->container['generatePreMergeRef'] = $generatePreMergeRef;
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

