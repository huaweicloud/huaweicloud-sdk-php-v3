<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateL7ruleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateL7ruleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配；t ype为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。不能包含空格。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareType' => 'string',
            'adminStateUp' => 'bool',
            'invert' => 'bool',
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配；t ype为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。不能包含空格。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareType' => null,
        'adminStateUp' => null,
        'invert' => null,
        'key' => null,
        'value' => null
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
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配；t ype为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。不能包含空格。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareType' => 'compare_type',
            'adminStateUp' => 'admin_state_up',
            'invert' => 'invert',
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配；t ype为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。不能包含空格。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareType' => 'setCompareType',
            'adminStateUp' => 'setAdminStateUp',
            'invert' => 'setInvert',
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配；t ype为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。不能包含空格。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareType' => 'getCompareType',
            'adminStateUp' => 'getAdminStateUp',
            'invert' => 'getInvert',
            'key' => 'getKey',
            'value' => 'getValue'
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
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['invert'] = isset($data['invert']) ? $data['invert'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets compareType
    *  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配；t ype为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
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
    * @param string|null $compareType 转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配；t ype为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
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
    * @param bool|null $adminStateUp 转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets invert
    *  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
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
    * @param bool|null $invert 是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
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
    *  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
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
    * @param string|null $key 匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
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
    *  匹配内容的值。不能包含空格。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
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
    * @param string|null $value 匹配内容的值。不能包含空格。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

