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
    * searchType  |参数名称：该字段内容可填为：“email”、“mobile”或“name”| |参数的约束及描述：该参数必填，且只允许字符串|
    * searchValue  |参数名称：手机、邮箱或用户名| |参数的约束及描述：该参数必填，且只允许字符串,手机包括国家码，以00开头，格式：00XX-XXXXXXXX。目前手机号仅仅支持以86为国家码|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'searchType' => 'string',
            'searchValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * searchType  |参数名称：该字段内容可填为：“email”、“mobile”或“name”| |参数的约束及描述：该参数必填，且只允许字符串|
    * searchValue  |参数名称：手机、邮箱或用户名| |参数的约束及描述：该参数必填，且只允许字符串,手机包括国家码，以00开头，格式：00XX-XXXXXXXX。目前手机号仅仅支持以86为国家码|
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
    * searchType  |参数名称：该字段内容可填为：“email”、“mobile”或“name”| |参数的约束及描述：该参数必填，且只允许字符串|
    * searchValue  |参数名称：手机、邮箱或用户名| |参数的约束及描述：该参数必填，且只允许字符串,手机包括国家码，以00开头，格式：00XX-XXXXXXXX。目前手机号仅仅支持以86为国家码|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'searchType' => 'search_type',
            'searchValue' => 'search_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * searchType  |参数名称：该字段内容可填为：“email”、“mobile”或“name”| |参数的约束及描述：该参数必填，且只允许字符串|
    * searchValue  |参数名称：手机、邮箱或用户名| |参数的约束及描述：该参数必填，且只允许字符串,手机包括国家码，以00开头，格式：00XX-XXXXXXXX。目前手机号仅仅支持以86为国家码|
    *
    * @var string[]
    */
    protected static $setters = [
            'searchType' => 'setSearchType',
            'searchValue' => 'setSearchValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * searchType  |参数名称：该字段内容可填为：“email”、“mobile”或“name”| |参数的约束及描述：该参数必填，且只允许字符串|
    * searchValue  |参数名称：手机、邮箱或用户名| |参数的约束及描述：该参数必填，且只允许字符串,手机包括国家码，以00开头，格式：00XX-XXXXXXXX。目前手机号仅仅支持以86为国家码|
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
    *  |参数名称：该字段内容可填为：“email”、“mobile”或“name”| |参数的约束及描述：该参数必填，且只允许字符串|
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
    * @param string $searchType |参数名称：该字段内容可填为：“email”、“mobile”或“name”| |参数的约束及描述：该参数必填，且只允许字符串|
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
    *  |参数名称：手机、邮箱或用户名| |参数的约束及描述：该参数必填，且只允许字符串,手机包括国家码，以00开头，格式：00XX-XXXXXXXX。目前手机号仅仅支持以86为国家码|
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
    * @param string $searchValue |参数名称：手机、邮箱或用户名| |参数的约束及描述：该参数必填，且只允许字符串,手机包括国家码，以00开头，格式：00XX-XXXXXXXX。目前手机号仅仅支持以86为国家码|
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

