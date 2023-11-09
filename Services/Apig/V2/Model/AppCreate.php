<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  APP的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * remark  APP描述。字符长度不能大于255。 > 中文字符必须为UTF-8或者unicode编码。
    * appKey  APP的key。支持英文，数字，“_”，“-”，且只能以英文或数字开头，8 ~ 200个字符。
    * appSecret  密钥。支持英文，数字，“_”，“-”，“!”，“@”，“#”，“$”，“%”，且只能以英文或数字开头，8 ~ 128个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'remark' => 'string',
            'appKey' => 'string',
            'appSecret' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  APP的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * remark  APP描述。字符长度不能大于255。 > 中文字符必须为UTF-8或者unicode编码。
    * appKey  APP的key。支持英文，数字，“_”，“-”，且只能以英文或数字开头，8 ~ 200个字符。
    * appSecret  密钥。支持英文，数字，“_”，“-”，“!”，“@”，“#”，“$”，“%”，且只能以英文或数字开头，8 ~ 128个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'remark' => null,
        'appKey' => null,
        'appSecret' => null
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
    * name  APP的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * remark  APP描述。字符长度不能大于255。 > 中文字符必须为UTF-8或者unicode编码。
    * appKey  APP的key。支持英文，数字，“_”，“-”，且只能以英文或数字开头，8 ~ 200个字符。
    * appSecret  密钥。支持英文，数字，“_”，“-”，“!”，“@”，“#”，“$”，“%”，且只能以英文或数字开头，8 ~ 128个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'remark' => 'remark',
            'appKey' => 'app_key',
            'appSecret' => 'app_secret'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  APP的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * remark  APP描述。字符长度不能大于255。 > 中文字符必须为UTF-8或者unicode编码。
    * appKey  APP的key。支持英文，数字，“_”，“-”，且只能以英文或数字开头，8 ~ 200个字符。
    * appSecret  密钥。支持英文，数字，“_”，“-”，“!”，“@”，“#”，“$”，“%”，且只能以英文或数字开头，8 ~ 128个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'remark' => 'setRemark',
            'appKey' => 'setAppKey',
            'appSecret' => 'setAppSecret'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  APP的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * remark  APP描述。字符长度不能大于255。 > 中文字符必须为UTF-8或者unicode编码。
    * appKey  APP的key。支持英文，数字，“_”，“-”，且只能以英文或数字开头，8 ~ 200个字符。
    * appSecret  密钥。支持英文，数字，“_”，“-”，“!”，“@”，“#”，“$”，“%”，且只能以英文或数字开头，8 ~ 128个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'remark' => 'getRemark',
            'appKey' => 'getAppKey',
            'appSecret' => 'getAppSecret'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['appSecret'] = isset($data['appSecret']) ? $data['appSecret'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets name
    *  APP的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name APP的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets remark
    *  APP描述。字符长度不能大于255。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark APP描述。字符长度不能大于255。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets appKey
    *  APP的key。支持英文，数字，“_”，“-”，且只能以英文或数字开头，8 ~ 200个字符。
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey APP的key。支持英文，数字，“_”，“-”，且只能以英文或数字开头，8 ~ 200个字符。
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets appSecret
    *  密钥。支持英文，数字，“_”，“-”，“!”，“@”，“#”，“$”，“%”，且只能以英文或数字开头，8 ~ 128个字符。
    *
    * @return string|null
    */
    public function getAppSecret()
    {
        return $this->container['appSecret'];
    }

    /**
    * Sets appSecret
    *
    * @param string|null $appSecret 密钥。支持英文，数字，“_”，“-”，“!”，“@”，“#”，“$”，“%”，且只能以英文或数字开头，8 ~ 128个字符。
    *
    * @return $this
    */
    public function setAppSecret($appSecret)
    {
        $this->container['appSecret'] = $appSecret;
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

