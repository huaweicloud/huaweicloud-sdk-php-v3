<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionsFilterPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionsFilterPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  过滤策略名称。 包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不得开始、结尾或连续出现），长度限制{1,32}，不能是smn_开头。
    * stringEquals  字符串精确匹配数组。数组长度[1, 10]，数组内容不能重复，值不能为null或者空字符串“ ”，长度限制[1,32]，中英文、数字、下划线
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'stringEquals' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  过滤策略名称。 包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不得开始、结尾或连续出现），长度限制{1,32}，不能是smn_开头。
    * stringEquals  字符串精确匹配数组。数组长度[1, 10]，数组内容不能重复，值不能为null或者空字符串“ ”，长度限制[1,32]，中英文、数字、下划线
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'stringEquals' => null
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
    * name  过滤策略名称。 包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不得开始、结尾或连续出现），长度限制{1,32}，不能是smn_开头。
    * stringEquals  字符串精确匹配数组。数组长度[1, 10]，数组内容不能重复，值不能为null或者空字符串“ ”，长度限制[1,32]，中英文、数字、下划线
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'stringEquals' => 'string_equals'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  过滤策略名称。 包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不得开始、结尾或连续出现），长度限制{1,32}，不能是smn_开头。
    * stringEquals  字符串精确匹配数组。数组长度[1, 10]，数组内容不能重复，值不能为null或者空字符串“ ”，长度限制[1,32]，中英文、数字、下划线
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'stringEquals' => 'setStringEquals'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  过滤策略名称。 包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不得开始、结尾或连续出现），长度限制{1,32}，不能是smn_开头。
    * stringEquals  字符串精确匹配数组。数组长度[1, 10]，数组内容不能重复，值不能为null或者空字符串“ ”，长度限制[1,32]，中英文、数字、下划线
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'stringEquals' => 'getStringEquals'
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
        $this->container['stringEquals'] = isset($data['stringEquals']) ? $data['stringEquals'] : null;
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
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!smn_)(?!.*?_$)(?!^_)(?!.*?__)[a-z0-9_]{1,32}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^(?!smn_)(?!.*?_$)(?!^_)(?!.*?__)[a-z0-9_]{1,32}$/.";
            }
        if ($this->container['stringEquals'] === null) {
            $invalidProperties[] = "'stringEquals' can't be null";
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
    *  过滤策略名称。 包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不得开始、结尾或连续出现），长度限制{1,32}，不能是smn_开头。
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
    * @param string $name 过滤策略名称。 包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不得开始、结尾或连续出现），长度限制{1,32}，不能是smn_开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets stringEquals
    *  字符串精确匹配数组。数组长度[1, 10]，数组内容不能重复，值不能为null或者空字符串“ ”，长度限制[1,32]，中英文、数字、下划线
    *
    * @return string[]
    */
    public function getStringEquals()
    {
        return $this->container['stringEquals'];
    }

    /**
    * Sets stringEquals
    *
    * @param string[] $stringEquals 字符串精确匹配数组。数组长度[1, 10]，数组内容不能重复，值不能为null或者空字符串“ ”，长度限制[1,32]，中英文、数字、下划线
    *
    * @return $this
    */
    public function setStringEquals($stringEquals)
    {
        $this->container['stringEquals'] = $stringEquals;
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

