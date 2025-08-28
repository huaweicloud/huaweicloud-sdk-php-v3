<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventAttCkDetailResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventAttCkDetailResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attCk  **参数解释**： 攻击阶段名称，根据页面语言环境，返回中文或英文 **取值范围**： 字符长度1-64位
    * num  **参数解释**: 数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attCk' => 'string',
            'num' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attCk  **参数解释**： 攻击阶段名称，根据页面语言环境，返回中文或英文 **取值范围**： 字符长度1-64位
    * num  **参数解释**: 数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attCk' => null,
        'num' => 'int32'
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
    * attCk  **参数解释**： 攻击阶段名称，根据页面语言环境，返回中文或英文 **取值范围**： 字符长度1-64位
    * num  **参数解释**: 数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attCk' => 'att_ck',
            'num' => 'num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attCk  **参数解释**： 攻击阶段名称，根据页面语言环境，返回中文或英文 **取值范围**： 字符长度1-64位
    * num  **参数解释**: 数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'attCk' => 'setAttCk',
            'num' => 'setNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attCk  **参数解释**： 攻击阶段名称，根据页面语言环境，返回中文或英文 **取值范围**： 字符长度1-64位
    * num  **参数解释**: 数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'attCk' => 'getAttCk',
            'num' => 'getNum'
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
        $this->container['attCk'] = isset($data['attCk']) ? $data['attCk'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attCk']) && (mb_strlen($this->container['attCk']) > 64)) {
                $invalidProperties[] = "invalid value for 'attCk', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['attCk']) && (mb_strlen($this->container['attCk']) < 1)) {
                $invalidProperties[] = "invalid value for 'attCk', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['num']) && ($this->container['num'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'num', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['num']) && ($this->container['num'] < 0)) {
                $invalidProperties[] = "invalid value for 'num', must be bigger than or equal to 0.";
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
    * Gets attCk
    *  **参数解释**： 攻击阶段名称，根据页面语言环境，返回中文或英文 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getAttCk()
    {
        return $this->container['attCk'];
    }

    /**
    * Sets attCk
    *
    * @param string|null $attCk **参数解释**： 攻击阶段名称，根据页面语言环境，返回中文或英文 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setAttCk($attCk)
    {
        $this->container['attCk'] = $attCk;
        return $this;
    }

    /**
    * Gets num
    *  **参数解释**: 数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num **参数解释**: 数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
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

