<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Condition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Condition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  字段类型，可选值有ip、url、params、cookie、header
    * contents  内容,数组长度限制为1，内容格式根据字段类型变化，例如，字段类型为ip时，contents内容格式需为ip地址或ip地址段；字段类型为url时，contents内容格式需为标准url格式；字段类型为params、cookie、header时，内容的格式不做限制
    * logicOperation  匹配逻辑，匹配逻辑根据字段类型变化，字段类型为ip时，匹配逻辑支持（equal：等于，not_equal：不等于），字段类型为url、header、params、cookie时，匹配逻辑支持（equal：等于，not_equal：不等于，contain：包含，not_contain：不包含，prefix：前缀为，not_prefix：前缀不为，suffix：后缀为，not_suffix：后缀不为，regular_match：正则匹配，regular_not_match：正则不匹配）
    * checkAllIndexesLogic  字段类型为url或ip时不存在check_all_indexes_logic字段，其它情况下（1：检查所有子字段，2：检查任意子字段，null：使用自定义子字段）
    * index  字段类型为ip且子字段为客户端ip时，不存在index参数；子字段类型为X-Forwarded-For时，值为x-forwarded-for，字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'contents' => 'string[]',
            'logicOperation' => 'string',
            'checkAllIndexesLogic' => 'int',
            'index' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  字段类型，可选值有ip、url、params、cookie、header
    * contents  内容,数组长度限制为1，内容格式根据字段类型变化，例如，字段类型为ip时，contents内容格式需为ip地址或ip地址段；字段类型为url时，contents内容格式需为标准url格式；字段类型为params、cookie、header时，内容的格式不做限制
    * logicOperation  匹配逻辑，匹配逻辑根据字段类型变化，字段类型为ip时，匹配逻辑支持（equal：等于，not_equal：不等于），字段类型为url、header、params、cookie时，匹配逻辑支持（equal：等于，not_equal：不等于，contain：包含，not_contain：不包含，prefix：前缀为，not_prefix：前缀不为，suffix：后缀为，not_suffix：后缀不为，regular_match：正则匹配，regular_not_match：正则不匹配）
    * checkAllIndexesLogic  字段类型为url或ip时不存在check_all_indexes_logic字段，其它情况下（1：检查所有子字段，2：检查任意子字段，null：使用自定义子字段）
    * index  字段类型为ip且子字段为客户端ip时，不存在index参数；子字段类型为X-Forwarded-For时，值为x-forwarded-for，字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'contents' => null,
        'logicOperation' => null,
        'checkAllIndexesLogic' => null,
        'index' => null
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
    * category  字段类型，可选值有ip、url、params、cookie、header
    * contents  内容,数组长度限制为1，内容格式根据字段类型变化，例如，字段类型为ip时，contents内容格式需为ip地址或ip地址段；字段类型为url时，contents内容格式需为标准url格式；字段类型为params、cookie、header时，内容的格式不做限制
    * logicOperation  匹配逻辑，匹配逻辑根据字段类型变化，字段类型为ip时，匹配逻辑支持（equal：等于，not_equal：不等于），字段类型为url、header、params、cookie时，匹配逻辑支持（equal：等于，not_equal：不等于，contain：包含，not_contain：不包含，prefix：前缀为，not_prefix：前缀不为，suffix：后缀为，not_suffix：后缀不为，regular_match：正则匹配，regular_not_match：正则不匹配）
    * checkAllIndexesLogic  字段类型为url或ip时不存在check_all_indexes_logic字段，其它情况下（1：检查所有子字段，2：检查任意子字段，null：使用自定义子字段）
    * index  字段类型为ip且子字段为客户端ip时，不存在index参数；子字段类型为X-Forwarded-For时，值为x-forwarded-for，字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'contents' => 'contents',
            'logicOperation' => 'logic_operation',
            'checkAllIndexesLogic' => 'check_all_indexes_logic',
            'index' => 'index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  字段类型，可选值有ip、url、params、cookie、header
    * contents  内容,数组长度限制为1，内容格式根据字段类型变化，例如，字段类型为ip时，contents内容格式需为ip地址或ip地址段；字段类型为url时，contents内容格式需为标准url格式；字段类型为params、cookie、header时，内容的格式不做限制
    * logicOperation  匹配逻辑，匹配逻辑根据字段类型变化，字段类型为ip时，匹配逻辑支持（equal：等于，not_equal：不等于），字段类型为url、header、params、cookie时，匹配逻辑支持（equal：等于，not_equal：不等于，contain：包含，not_contain：不包含，prefix：前缀为，not_prefix：前缀不为，suffix：后缀为，not_suffix：后缀不为，regular_match：正则匹配，regular_not_match：正则不匹配）
    * checkAllIndexesLogic  字段类型为url或ip时不存在check_all_indexes_logic字段，其它情况下（1：检查所有子字段，2：检查任意子字段，null：使用自定义子字段）
    * index  字段类型为ip且子字段为客户端ip时，不存在index参数；子字段类型为X-Forwarded-For时，值为x-forwarded-for，字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'contents' => 'setContents',
            'logicOperation' => 'setLogicOperation',
            'checkAllIndexesLogic' => 'setCheckAllIndexesLogic',
            'index' => 'setIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  字段类型，可选值有ip、url、params、cookie、header
    * contents  内容,数组长度限制为1，内容格式根据字段类型变化，例如，字段类型为ip时，contents内容格式需为ip地址或ip地址段；字段类型为url时，contents内容格式需为标准url格式；字段类型为params、cookie、header时，内容的格式不做限制
    * logicOperation  匹配逻辑，匹配逻辑根据字段类型变化，字段类型为ip时，匹配逻辑支持（equal：等于，not_equal：不等于），字段类型为url、header、params、cookie时，匹配逻辑支持（equal：等于，not_equal：不等于，contain：包含，not_contain：不包含，prefix：前缀为，not_prefix：前缀不为，suffix：后缀为，not_suffix：后缀不为，regular_match：正则匹配，regular_not_match：正则不匹配）
    * checkAllIndexesLogic  字段类型为url或ip时不存在check_all_indexes_logic字段，其它情况下（1：检查所有子字段，2：检查任意子字段，null：使用自定义子字段）
    * index  字段类型为ip且子字段为客户端ip时，不存在index参数；子字段类型为X-Forwarded-For时，值为x-forwarded-for，字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'contents' => 'getContents',
            'logicOperation' => 'getLogicOperation',
            'checkAllIndexesLogic' => 'getCheckAllIndexesLogic',
            'index' => 'getIndex'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['logicOperation'] = isset($data['logicOperation']) ? $data['logicOperation'] : null;
        $this->container['checkAllIndexesLogic'] = isset($data['checkAllIndexesLogic']) ? $data['checkAllIndexesLogic'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  字段类型，可选值有ip、url、params、cookie、header
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
    * @param string|null $category 字段类型，可选值有ip、url、params、cookie、header
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets contents
    *  内容,数组长度限制为1，内容格式根据字段类型变化，例如，字段类型为ip时，contents内容格式需为ip地址或ip地址段；字段类型为url时，contents内容格式需为标准url格式；字段类型为params、cookie、header时，内容的格式不做限制
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
    * @param string[]|null $contents 内容,数组长度限制为1，内容格式根据字段类型变化，例如，字段类型为ip时，contents内容格式需为ip地址或ip地址段；字段类型为url时，contents内容格式需为标准url格式；字段类型为params、cookie、header时，内容的格式不做限制
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets logicOperation
    *  匹配逻辑，匹配逻辑根据字段类型变化，字段类型为ip时，匹配逻辑支持（equal：等于，not_equal：不等于），字段类型为url、header、params、cookie时，匹配逻辑支持（equal：等于，not_equal：不等于，contain：包含，not_contain：不包含，prefix：前缀为，not_prefix：前缀不为，suffix：后缀为，not_suffix：后缀不为，regular_match：正则匹配，regular_not_match：正则不匹配）
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
    * @param string|null $logicOperation 匹配逻辑，匹配逻辑根据字段类型变化，字段类型为ip时，匹配逻辑支持（equal：等于，not_equal：不等于），字段类型为url、header、params、cookie时，匹配逻辑支持（equal：等于，not_equal：不等于，contain：包含，not_contain：不包含，prefix：前缀为，not_prefix：前缀不为，suffix：后缀为，not_suffix：后缀不为，regular_match：正则匹配，regular_not_match：正则不匹配）
    *
    * @return $this
    */
    public function setLogicOperation($logicOperation)
    {
        $this->container['logicOperation'] = $logicOperation;
        return $this;
    }

    /**
    * Gets checkAllIndexesLogic
    *  字段类型为url或ip时不存在check_all_indexes_logic字段，其它情况下（1：检查所有子字段，2：检查任意子字段，null：使用自定义子字段）
    *
    * @return int|null
    */
    public function getCheckAllIndexesLogic()
    {
        return $this->container['checkAllIndexesLogic'];
    }

    /**
    * Sets checkAllIndexesLogic
    *
    * @param int|null $checkAllIndexesLogic 字段类型为url或ip时不存在check_all_indexes_logic字段，其它情况下（1：检查所有子字段，2：检查任意子字段，null：使用自定义子字段）
    *
    * @return $this
    */
    public function setCheckAllIndexesLogic($checkAllIndexesLogic)
    {
        $this->container['checkAllIndexesLogic'] = $checkAllIndexesLogic;
        return $this;
    }

    /**
    * Gets index
    *  字段类型为ip且子字段为客户端ip时，不存在index参数；子字段类型为X-Forwarded-For时，值为x-forwarded-for，字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @return string|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param string|null $index 字段类型为ip且子字段为客户端ip时，不存在index参数；子字段类型为X-Forwarded-For时，值为x-forwarded-for，字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
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

