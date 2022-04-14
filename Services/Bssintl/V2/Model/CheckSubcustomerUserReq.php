<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckSubcustomerUserReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckSubcustomerUserReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * searchType  该字段内容可填为：“email”、“mobile”或“name”。
    * searchValue  手机号、邮箱或登录名称。 手机号需符合正则表达式 ^\\d{4}-\\d+$；包括国家码，以00开头，格式：00XX-XXXXXXXX。邮箱需为含有@的正确格式的完整邮箱地址。name：符合正则表达式^([a-zA-Z-]([a-zA-Z0-9_-]){4,31})$，长度5-32；不能以“op_”或“shadow_”开头且不能全为数字，且只能以字母（不区分大小写）或者-开头。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'searchType' => 'string',
            'searchValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * searchType  该字段内容可填为：“email”、“mobile”或“name”。
    * searchValue  手机号、邮箱或登录名称。 手机号需符合正则表达式 ^\\d{4}-\\d+$；包括国家码，以00开头，格式：00XX-XXXXXXXX。邮箱需为含有@的正确格式的完整邮箱地址。name：符合正则表达式^([a-zA-Z-]([a-zA-Z0-9_-]){4,31})$，长度5-32；不能以“op_”或“shadow_”开头且不能全为数字，且只能以字母（不区分大小写）或者-开头。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'searchType' => null,
        'searchValue' => null
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
    * searchType  该字段内容可填为：“email”、“mobile”或“name”。
    * searchValue  手机号、邮箱或登录名称。 手机号需符合正则表达式 ^\\d{4}-\\d+$；包括国家码，以00开头，格式：00XX-XXXXXXXX。邮箱需为含有@的正确格式的完整邮箱地址。name：符合正则表达式^([a-zA-Z-]([a-zA-Z0-9_-]){4,31})$，长度5-32；不能以“op_”或“shadow_”开头且不能全为数字，且只能以字母（不区分大小写）或者-开头。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'searchType' => 'search_type',
            'searchValue' => 'search_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * searchType  该字段内容可填为：“email”、“mobile”或“name”。
    * searchValue  手机号、邮箱或登录名称。 手机号需符合正则表达式 ^\\d{4}-\\d+$；包括国家码，以00开头，格式：00XX-XXXXXXXX。邮箱需为含有@的正确格式的完整邮箱地址。name：符合正则表达式^([a-zA-Z-]([a-zA-Z0-9_-]){4,31})$，长度5-32；不能以“op_”或“shadow_”开头且不能全为数字，且只能以字母（不区分大小写）或者-开头。
    *
    * @var string[]
    */
    protected static $setters = [
            'searchType' => 'setSearchType',
            'searchValue' => 'setSearchValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * searchType  该字段内容可填为：“email”、“mobile”或“name”。
    * searchValue  手机号、邮箱或登录名称。 手机号需符合正则表达式 ^\\d{4}-\\d+$；包括国家码，以00开头，格式：00XX-XXXXXXXX。邮箱需为含有@的正确格式的完整邮箱地址。name：符合正则表达式^([a-zA-Z-]([a-zA-Z0-9_-]){4,31})$，长度5-32；不能以“op_”或“shadow_”开头且不能全为数字，且只能以字母（不区分大小写）或者-开头。
    *
    * @var string[]
    */
    protected static $getters = [
            'searchType' => 'getSearchType',
            'searchValue' => 'getSearchValue'
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
        $this->container['searchType'] = isset($data['searchType']) ? $data['searchType'] : null;
        $this->container['searchValue'] = isset($data['searchValue']) ? $data['searchValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['searchType'] === null) {
            $invalidProperties[] = "'searchType' can't be null";
        }
            if ((mb_strlen($this->container['searchType']) > 64)) {
                $invalidProperties[] = "invalid value for 'searchType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['searchType']) < 1)) {
                $invalidProperties[] = "invalid value for 'searchType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['searchValue'] === null) {
            $invalidProperties[] = "'searchValue' can't be null";
        }
            if ((mb_strlen($this->container['searchValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'searchValue', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['searchValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'searchValue', the character length must be bigger than or equal to 1.";
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
    * Gets searchType
    *  该字段内容可填为：“email”、“mobile”或“name”。
    *
    * @return string
    */
    public function getSearchType()
    {
        return $this->container['searchType'];
    }

    /**
    * Sets searchType
    *
    * @param string $searchType 该字段内容可填为：“email”、“mobile”或“name”。
    *
    * @return $this
    */
    public function setSearchType($searchType)
    {
        $this->container['searchType'] = $searchType;
        return $this;
    }

    /**
    * Gets searchValue
    *  手机号、邮箱或登录名称。 手机号需符合正则表达式 ^\\d{4}-\\d+$；包括国家码，以00开头，格式：00XX-XXXXXXXX。邮箱需为含有@的正确格式的完整邮箱地址。name：符合正则表达式^([a-zA-Z-]([a-zA-Z0-9_-]){4,31})$，长度5-32；不能以“op_”或“shadow_”开头且不能全为数字，且只能以字母（不区分大小写）或者-开头。
    *
    * @return string
    */
    public function getSearchValue()
    {
        return $this->container['searchValue'];
    }

    /**
    * Sets searchValue
    *
    * @param string $searchValue 手机号、邮箱或登录名称。 手机号需符合正则表达式 ^\\d{4}-\\d+$；包括国家码，以00开头，格式：00XX-XXXXXXXX。邮箱需为含有@的正确格式的完整邮箱地址。name：符合正则表达式^([a-zA-Z-]([a-zA-Z0-9_-]){4,31})$，长度5-32；不能以“op_”或“shadow_”开头且不能全为数字，且只能以字母（不区分大小写）或者-开头。
    *
    * @return $this
    */
    public function setSearchValue($searchValue)
    {
        $this->container['searchValue'] = $searchValue;
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

