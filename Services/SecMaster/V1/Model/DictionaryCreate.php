<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DictionaryCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DictionaryCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code码
    * dictVal  字典值
    * dictPkey  字典key
    * dictPcode  字典关联的父code
    * scope  字典所属领域
    * description  字典描述信息
    * extendField  额外字段
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'dictId' => 'string',
            'dictKey' => 'string',
            'dictCode' => 'string',
            'dictVal' => 'string',
            'dictPkey' => 'string',
            'dictPcode' => 'string',
            'scope' => 'string',
            'description' => 'string',
            'extendField' => 'object',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code码
    * dictVal  字典值
    * dictPkey  字典key
    * dictPcode  字典关联的父code
    * scope  字典所属领域
    * description  字典描述信息
    * extendField  额外字段
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'dictId' => null,
        'dictKey' => null,
        'dictCode' => null,
        'dictVal' => null,
        'dictPkey' => null,
        'dictPcode' => null,
        'scope' => null,
        'description' => null,
        'extendField' => null,
        'language' => null
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
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code码
    * dictVal  字典值
    * dictPkey  字典key
    * dictPcode  字典关联的父code
    * scope  字典所属领域
    * description  字典描述信息
    * extendField  额外字段
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'dictId' => 'dict_id',
            'dictKey' => 'dict_key',
            'dictCode' => 'dict_code',
            'dictVal' => 'dict_val',
            'dictPkey' => 'dict_pkey',
            'dictPcode' => 'dict_pcode',
            'scope' => 'scope',
            'description' => 'description',
            'extendField' => 'extend_field',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code码
    * dictVal  字典值
    * dictPkey  字典key
    * dictPcode  字典关联的父code
    * scope  字典所属领域
    * description  字典描述信息
    * extendField  额外字段
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'dictId' => 'setDictId',
            'dictKey' => 'setDictKey',
            'dictCode' => 'setDictCode',
            'dictVal' => 'setDictVal',
            'dictPkey' => 'setDictPkey',
            'dictPcode' => 'setDictPcode',
            'scope' => 'setScope',
            'description' => 'setDescription',
            'extendField' => 'setExtendField',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code码
    * dictVal  字典值
    * dictPkey  字典key
    * dictPcode  字典关联的父code
    * scope  字典所属领域
    * description  字典描述信息
    * extendField  额外字段
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'dictId' => 'getDictId',
            'dictKey' => 'getDictKey',
            'dictCode' => 'getDictCode',
            'dictVal' => 'getDictVal',
            'dictPkey' => 'getDictPkey',
            'dictPcode' => 'getDictPcode',
            'scope' => 'getScope',
            'description' => 'getDescription',
            'extendField' => 'getExtendField',
            'language' => 'getLanguage'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['dictId'] = isset($data['dictId']) ? $data['dictId'] : null;
        $this->container['dictKey'] = isset($data['dictKey']) ? $data['dictKey'] : null;
        $this->container['dictCode'] = isset($data['dictCode']) ? $data['dictCode'] : null;
        $this->container['dictVal'] = isset($data['dictVal']) ? $data['dictVal'] : null;
        $this->container['dictPkey'] = isset($data['dictPkey']) ? $data['dictPkey'] : null;
        $this->container['dictPcode'] = isset($data['dictPcode']) ? $data['dictPcode'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extendField'] = isset($data['extendField']) ? $data['extendField'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dictId'] === null) {
            $invalidProperties[] = "'dictId' can't be null";
        }
            if ((mb_strlen($this->container['dictId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dictId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dictKey'] === null) {
            $invalidProperties[] = "'dictKey' can't be null";
        }
            if ((mb_strlen($this->container['dictKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dictKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dictCode'] === null) {
            $invalidProperties[] = "'dictCode' can't be null";
        }
            if ((mb_strlen($this->container['dictCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dictCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dictVal'] === null) {
            $invalidProperties[] = "'dictVal' can't be null";
        }
            if ((mb_strlen($this->container['dictVal']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictVal', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dictVal']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictVal', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictPkey']) && (mb_strlen($this->container['dictPkey']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictPkey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictPkey']) && (mb_strlen($this->container['dictPkey']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictPkey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictPcode']) && (mb_strlen($this->container['dictPcode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictPcode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictPcode']) && (mb_strlen($this->container['dictPcode']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictPcode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) > 64)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) < 0)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 6)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 6.";
            }
            if ((mb_strlen($this->container['language']) < 2)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 2.";
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
    * Gets version
    *  版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets dictId
    *  字典id
    *
    * @return string
    */
    public function getDictId()
    {
        return $this->container['dictId'];
    }

    /**
    * Sets dictId
    *
    * @param string $dictId 字典id
    *
    * @return $this
    */
    public function setDictId($dictId)
    {
        $this->container['dictId'] = $dictId;
        return $this;
    }

    /**
    * Gets dictKey
    *  字典key
    *
    * @return string
    */
    public function getDictKey()
    {
        return $this->container['dictKey'];
    }

    /**
    * Sets dictKey
    *
    * @param string $dictKey 字典key
    *
    * @return $this
    */
    public function setDictKey($dictKey)
    {
        $this->container['dictKey'] = $dictKey;
        return $this;
    }

    /**
    * Gets dictCode
    *  字典code码
    *
    * @return string
    */
    public function getDictCode()
    {
        return $this->container['dictCode'];
    }

    /**
    * Sets dictCode
    *
    * @param string $dictCode 字典code码
    *
    * @return $this
    */
    public function setDictCode($dictCode)
    {
        $this->container['dictCode'] = $dictCode;
        return $this;
    }

    /**
    * Gets dictVal
    *  字典值
    *
    * @return string
    */
    public function getDictVal()
    {
        return $this->container['dictVal'];
    }

    /**
    * Sets dictVal
    *
    * @param string $dictVal 字典值
    *
    * @return $this
    */
    public function setDictVal($dictVal)
    {
        $this->container['dictVal'] = $dictVal;
        return $this;
    }

    /**
    * Gets dictPkey
    *  字典key
    *
    * @return string|null
    */
    public function getDictPkey()
    {
        return $this->container['dictPkey'];
    }

    /**
    * Sets dictPkey
    *
    * @param string|null $dictPkey 字典key
    *
    * @return $this
    */
    public function setDictPkey($dictPkey)
    {
        $this->container['dictPkey'] = $dictPkey;
        return $this;
    }

    /**
    * Gets dictPcode
    *  字典关联的父code
    *
    * @return string|null
    */
    public function getDictPcode()
    {
        return $this->container['dictPcode'];
    }

    /**
    * Sets dictPcode
    *
    * @param string|null $dictPcode 字典关联的父code
    *
    * @return $this
    */
    public function setDictPcode($dictPcode)
    {
        $this->container['dictPcode'] = $dictPcode;
        return $this;
    }

    /**
    * Gets scope
    *  字典所属领域
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 字典所属领域
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets description
    *  字典描述信息
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
    * @param string|null $description 字典描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets extendField
    *  额外字段
    *
    * @return object|null
    */
    public function getExtendField()
    {
        return $this->container['extendField'];
    }

    /**
    * Sets extendField
    *
    * @param object|null $extendField 额外字段
    *
    * @return $this
    */
    public function setExtendField($extendField)
    {
        $this->container['extendField'] = $extendField;
        return $this;
    }

    /**
    * Gets language
    *  用户当前语言环境
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 用户当前语言环境
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

