<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigurationDictionariesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigurationDictionariesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  用户当前语言环境
    * scene  字典使用场景, 告警为ALERT, 等级云为QUAD_CLOUD
    * level  仅QUAD_CLOUD场景使用[S1, S2, S3, S4]
    * scope  该字典作用域
    * dictKey  字典key
    * isBuiltIn  是否为系统内置字典数据,true：系统内置，false：自定义
    * offset  分页参数：返回起始偏移量
    * limit  分页参数：返回数据量大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'scene' => 'string',
            'level' => 'string',
            'scope' => 'string',
            'dictKey' => 'string',
            'isBuiltIn' => 'bool',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  用户当前语言环境
    * scene  字典使用场景, 告警为ALERT, 等级云为QUAD_CLOUD
    * level  仅QUAD_CLOUD场景使用[S1, S2, S3, S4]
    * scope  该字典作用域
    * dictKey  字典key
    * isBuiltIn  是否为系统内置字典数据,true：系统内置，false：自定义
    * offset  分页参数：返回起始偏移量
    * limit  分页参数：返回数据量大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'scene' => null,
        'level' => null,
        'scope' => null,
        'dictKey' => null,
        'isBuiltIn' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * xLanguage  用户当前语言环境
    * scene  字典使用场景, 告警为ALERT, 等级云为QUAD_CLOUD
    * level  仅QUAD_CLOUD场景使用[S1, S2, S3, S4]
    * scope  该字典作用域
    * dictKey  字典key
    * isBuiltIn  是否为系统内置字典数据,true：系统内置，false：自定义
    * offset  分页参数：返回起始偏移量
    * limit  分页参数：返回数据量大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'scene' => 'scene',
            'level' => 'level',
            'scope' => 'scope',
            'dictKey' => 'dict_key',
            'isBuiltIn' => 'is_built_in',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  用户当前语言环境
    * scene  字典使用场景, 告警为ALERT, 等级云为QUAD_CLOUD
    * level  仅QUAD_CLOUD场景使用[S1, S2, S3, S4]
    * scope  该字典作用域
    * dictKey  字典key
    * isBuiltIn  是否为系统内置字典数据,true：系统内置，false：自定义
    * offset  分页参数：返回起始偏移量
    * limit  分页参数：返回数据量大小
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'scene' => 'setScene',
            'level' => 'setLevel',
            'scope' => 'setScope',
            'dictKey' => 'setDictKey',
            'isBuiltIn' => 'setIsBuiltIn',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  用户当前语言环境
    * scene  字典使用场景, 告警为ALERT, 等级云为QUAD_CLOUD
    * level  仅QUAD_CLOUD场景使用[S1, S2, S3, S4]
    * scope  该字典作用域
    * dictKey  字典key
    * isBuiltIn  是否为系统内置字典数据,true：系统内置，false：自定义
    * offset  分页参数：返回起始偏移量
    * limit  分页参数：返回数据量大小
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'scene' => 'getScene',
            'level' => 'getLevel',
            'scope' => 'getScope',
            'dictKey' => 'getDictKey',
            'isBuiltIn' => 'getIsBuiltIn',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['dictKey'] = isset($data['dictKey']) ? $data['dictKey'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xLanguage'] === null) {
            $invalidProperties[] = "'xLanguage' can't be null";
        }
            if ((mb_strlen($this->container['xLanguage']) > 6)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 6.";
            }
            if ((mb_strlen($this->container['xLanguage']) < 2)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['scene']) && (mb_strlen($this->container['scene']) > 64)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scene']) && (mb_strlen($this->container['scene']) < 0)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 16)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) > 32)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) < 2)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['dictKey']) && (mb_strlen($this->container['dictKey']) > 32)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['dictKey']) && (mb_strlen($this->container['dictKey']) < 2)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets xLanguage
    *  用户当前语言环境
    *
    * @return string
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string $xLanguage 用户当前语言环境
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets scene
    *  字典使用场景, 告警为ALERT, 等级云为QUAD_CLOUD
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene 字典使用场景, 告警为ALERT, 等级云为QUAD_CLOUD
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets level
    *  仅QUAD_CLOUD场景使用[S1, S2, S3, S4]
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 仅QUAD_CLOUD场景使用[S1, S2, S3, S4]
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets scope
    *  该字典作用域
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
    * @param string|null $scope 该字典作用域
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets dictKey
    *  字典key
    *
    * @return string|null
    */
    public function getDictKey()
    {
        return $this->container['dictKey'];
    }

    /**
    * Sets dictKey
    *
    * @param string|null $dictKey 字典key
    *
    * @return $this
    */
    public function setDictKey($dictKey)
    {
        $this->container['dictKey'] = $dictKey;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否为系统内置字典数据,true：系统内置，false：自定义
    *
    * @return bool|null
    */
    public function getIsBuiltIn()
    {
        return $this->container['isBuiltIn'];
    }

    /**
    * Sets isBuiltIn
    *
    * @param bool|null $isBuiltIn 是否为系统内置字典数据,true：系统内置，false：自定义
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets offset
    *  分页参数：返回起始偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页参数：返回起始偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数：返回数据量大小
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页参数：返回数据量大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

