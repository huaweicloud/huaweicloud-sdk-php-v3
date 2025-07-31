<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessStatisticResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessStatisticResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  **参数解释** : 进程的可执行文件路径 **约束限制** : 不涉及 **取值范围** : 字符长度1-256位 **默认取值** : 不涉及
    * num  **参数解释** : 进程数量 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值10000 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'num' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  **参数解释** : 进程的可执行文件路径 **约束限制** : 不涉及 **取值范围** : 字符长度1-256位 **默认取值** : 不涉及
    * num  **参数解释** : 进程数量 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值10000 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'num' => null
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
    * path  **参数解释** : 进程的可执行文件路径 **约束限制** : 不涉及 **取值范围** : 字符长度1-256位 **默认取值** : 不涉及
    * num  **参数解释** : 进程数量 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值10000 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'num' => 'num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  **参数解释** : 进程的可执行文件路径 **约束限制** : 不涉及 **取值范围** : 字符长度1-256位 **默认取值** : 不涉及
    * num  **参数解释** : 进程数量 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值10000 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'num' => 'setNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  **参数解释** : 进程的可执行文件路径 **约束限制** : 不涉及 **取值范围** : 字符长度1-256位 **默认取值** : 不涉及
    * num  **参数解释** : 进程数量 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值10000 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
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
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 256)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['num']) && ($this->container['num'] > 100000)) {
                $invalidProperties[] = "invalid value for 'num', must be smaller than or equal to 100000.";
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
    * Gets path
    *  **参数解释** : 进程的可执行文件路径 **约束限制** : 不涉及 **取值范围** : 字符长度1-256位 **默认取值** : 不涉及
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释** : 进程的可执行文件路径 **约束限制** : 不涉及 **取值范围** : 字符长度1-256位 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets num
    *  **参数解释** : 进程数量 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值10000 **默认取值** : 不涉及
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
    * @param int|null $num **参数解释** : 进程数量 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值10000 **默认取值** : 不涉及
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

