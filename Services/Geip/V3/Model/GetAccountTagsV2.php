<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetAccountTagsV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetAccountTagsV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  - 功能说明：标签名称 - 约束：   - 创建的预定义标签如果与已有的预定义标签完全相同，则会覆盖已有的预定义标签；若只有“键”相同，“值”不同，则为新创建的预定义标签。   - 键的长度最大36字符，由英文字母、数字、下划线、中划线、中文字符组成。   - 单个资源最多可以添加20个标签。
    * values  - 功能说明：标签值列表 - 约束：   - 值的长度最大43字符，由英文字母、数字、下划线、点、中划线、中文字符组成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  - 功能说明：标签名称 - 约束：   - 创建的预定义标签如果与已有的预定义标签完全相同，则会覆盖已有的预定义标签；若只有“键”相同，“值”不同，则为新创建的预定义标签。   - 键的长度最大36字符，由英文字母、数字、下划线、中划线、中文字符组成。   - 单个资源最多可以添加20个标签。
    * values  - 功能说明：标签值列表 - 约束：   - 值的长度最大43字符，由英文字母、数字、下划线、点、中划线、中文字符组成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'values' => null
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
    * key  - 功能说明：标签名称 - 约束：   - 创建的预定义标签如果与已有的预定义标签完全相同，则会覆盖已有的预定义标签；若只有“键”相同，“值”不同，则为新创建的预定义标签。   - 键的长度最大36字符，由英文字母、数字、下划线、中划线、中文字符组成。   - 单个资源最多可以添加20个标签。
    * values  - 功能说明：标签值列表 - 约束：   - 值的长度最大43字符，由英文字母、数字、下划线、点、中划线、中文字符组成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  - 功能说明：标签名称 - 约束：   - 创建的预定义标签如果与已有的预定义标签完全相同，则会覆盖已有的预定义标签；若只有“键”相同，“值”不同，则为新创建的预定义标签。   - 键的长度最大36字符，由英文字母、数字、下划线、中划线、中文字符组成。   - 单个资源最多可以添加20个标签。
    * values  - 功能说明：标签值列表 - 约束：   - 值的长度最大43字符，由英文字母、数字、下划线、点、中划线、中文字符组成。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  - 功能说明：标签名称 - 约束：   - 创建的预定义标签如果与已有的预定义标签完全相同，则会覆盖已有的预定义标签；若只有“键”相同，“值”不同，则为新创建的预定义标签。   - 键的长度最大36字符，由英文字母、数字、下划线、中划线、中文字符组成。   - 单个资源最多可以添加20个标签。
    * values  - 功能说明：标签值列表 - 约束：   - 值的长度最大43字符，由英文字母、数字、下划线、点、中划线、中文字符组成。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'values' => 'getValues'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 36)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^\\s=*,<>|\/][^=*,<>|\/\\s]*[^\\s=*,<>|\/]*$/", $this->container['key'])) {
                $invalidProperties[] = "invalid value for 'key', must be conform to the pattern /^[^\\s=*,<>|\/][^=*,<>|\/\\s]*[^\\s=*,<>|\/]*$/.";
            }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    * Gets key
    *  - 功能说明：标签名称 - 约束：   - 创建的预定义标签如果与已有的预定义标签完全相同，则会覆盖已有的预定义标签；若只有“键”相同，“值”不同，则为新创建的预定义标签。   - 键的长度最大36字符，由英文字母、数字、下划线、中划线、中文字符组成。   - 单个资源最多可以添加20个标签。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key - 功能说明：标签名称 - 约束：   - 创建的预定义标签如果与已有的预定义标签完全相同，则会覆盖已有的预定义标签；若只有“键”相同，“值”不同，则为新创建的预定义标签。   - 键的长度最大36字符，由英文字母、数字、下划线、中划线、中文字符组成。   - 单个资源最多可以添加20个标签。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets values
    *  - 功能说明：标签值列表 - 约束：   - 值的长度最大43字符，由英文字母、数字、下划线、点、中划线、中文字符组成。
    *
    * @return string[]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[] $values - 功能说明：标签值列表 - 约束：   - 值的长度最大43字符，由英文字母、数字、下划线、点、中划线、中文字符组成。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

