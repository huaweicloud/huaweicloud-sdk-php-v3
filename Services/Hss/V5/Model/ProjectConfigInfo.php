<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configName  配置名称，包含如下    - password_min_len ：密码最小长度    - password_digit_min_num ：密码中最少包含数字数量    - password_upper_letter_min_num ：密码中最少包含大写字母数量    - password_lower_letter_min_num ：密码中最少包含小写字母数量    - password_special_char_min_num ：密码中最少包含特殊字符数量    - weakpwd: 自定义弱口令策略
    * configValue  配置内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configName' => 'string',
            'configValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configName  配置名称，包含如下    - password_min_len ：密码最小长度    - password_digit_min_num ：密码中最少包含数字数量    - password_upper_letter_min_num ：密码中最少包含大写字母数量    - password_lower_letter_min_num ：密码中最少包含小写字母数量    - password_special_char_min_num ：密码中最少包含特殊字符数量    - weakpwd: 自定义弱口令策略
    * configValue  配置内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configName' => null,
        'configValue' => null
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
    * configName  配置名称，包含如下    - password_min_len ：密码最小长度    - password_digit_min_num ：密码中最少包含数字数量    - password_upper_letter_min_num ：密码中最少包含大写字母数量    - password_lower_letter_min_num ：密码中最少包含小写字母数量    - password_special_char_min_num ：密码中最少包含特殊字符数量    - weakpwd: 自定义弱口令策略
    * configValue  配置内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configName' => 'config_name',
            'configValue' => 'config_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configName  配置名称，包含如下    - password_min_len ：密码最小长度    - password_digit_min_num ：密码中最少包含数字数量    - password_upper_letter_min_num ：密码中最少包含大写字母数量    - password_lower_letter_min_num ：密码中最少包含小写字母数量    - password_special_char_min_num ：密码中最少包含特殊字符数量    - weakpwd: 自定义弱口令策略
    * configValue  配置内容
    *
    * @var string[]
    */
    protected static $setters = [
            'configName' => 'setConfigName',
            'configValue' => 'setConfigValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configName  配置名称，包含如下    - password_min_len ：密码最小长度    - password_digit_min_num ：密码中最少包含数字数量    - password_upper_letter_min_num ：密码中最少包含大写字母数量    - password_lower_letter_min_num ：密码中最少包含小写字母数量    - password_special_char_min_num ：密码中最少包含特殊字符数量    - weakpwd: 自定义弱口令策略
    * configValue  配置内容
    *
    * @var string[]
    */
    protected static $getters = [
            'configName' => 'getConfigName',
            'configValue' => 'getConfigValue'
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
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) > 255)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) < 1)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['configName']) && !preg_match("/^password_min_len|password_digit_min_num|password_upper_letter_min_num|password_lower_letter_min_num|password_special_char_min_num|weakpwd$/", $this->container['configName'])) {
                $invalidProperties[] = "invalid value for 'configName', must be conform to the pattern /^password_min_len|password_digit_min_num|password_upper_letter_min_num|password_lower_letter_min_num|password_special_char_min_num|weakpwd$/.";
            }
            if (!is_null($this->container['configValue']) && (mb_strlen($this->container['configValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'configValue', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['configValue']) && (mb_strlen($this->container['configValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'configValue', the character length must be bigger than or equal to 1.";
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
    * Gets configName
    *  配置名称，包含如下    - password_min_len ：密码最小长度    - password_digit_min_num ：密码中最少包含数字数量    - password_upper_letter_min_num ：密码中最少包含大写字母数量    - password_lower_letter_min_num ：密码中最少包含小写字母数量    - password_special_char_min_num ：密码中最少包含特殊字符数量    - weakpwd: 自定义弱口令策略
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName 配置名称，包含如下    - password_min_len ：密码最小长度    - password_digit_min_num ：密码中最少包含数字数量    - password_upper_letter_min_num ：密码中最少包含大写字母数量    - password_lower_letter_min_num ：密码中最少包含小写字母数量    - password_special_char_min_num ：密码中最少包含特殊字符数量    - weakpwd: 自定义弱口令策略
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets configValue
    *  配置内容
    *
    * @return string|null
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string|null $configValue 配置内容
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
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

