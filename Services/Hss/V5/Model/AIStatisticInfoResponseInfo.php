<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AIStatisticInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AIStatisticInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aiComponentName  **参数解释**： AI组件对应类型的名称 **取值范围**： 字符长度1-256位
    * num  **参数解释**： AI组件所在的服务器数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aiComponentName' => 'string',
            'num' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aiComponentName  **参数解释**： AI组件对应类型的名称 **取值范围**： 字符长度1-256位
    * num  **参数解释**： AI组件所在的服务器数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aiComponentName' => null,
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
    * aiComponentName  **参数解释**： AI组件对应类型的名称 **取值范围**： 字符长度1-256位
    * num  **参数解释**： AI组件所在的服务器数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aiComponentName' => 'ai_component_name',
            'num' => 'num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aiComponentName  **参数解释**： AI组件对应类型的名称 **取值范围**： 字符长度1-256位
    * num  **参数解释**： AI组件所在的服务器数量
    *
    * @var string[]
    */
    protected static $setters = [
            'aiComponentName' => 'setAiComponentName',
            'num' => 'setNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aiComponentName  **参数解释**： AI组件对应类型的名称 **取值范围**： 字符长度1-256位
    * num  **参数解释**： AI组件所在的服务器数量
    *
    * @var string[]
    */
    protected static $getters = [
            'aiComponentName' => 'getAiComponentName',
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
        $this->container['aiComponentName'] = isset($data['aiComponentName']) ? $data['aiComponentName'] : null;
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
            if (!is_null($this->container['aiComponentName']) && (mb_strlen($this->container['aiComponentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'aiComponentName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['aiComponentName']) && (mb_strlen($this->container['aiComponentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'aiComponentName', the character length must be bigger than or equal to 1.";
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
    * Gets aiComponentName
    *  **参数解释**： AI组件对应类型的名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getAiComponentName()
    {
        return $this->container['aiComponentName'];
    }

    /**
    * Sets aiComponentName
    *
    * @param string|null $aiComponentName **参数解释**： AI组件对应类型的名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setAiComponentName($aiComponentName)
    {
        $this->container['aiComponentName'] = $aiComponentName;
        return $this;
    }

    /**
    * Gets num
    *  **参数解释**： AI组件所在的服务器数量
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
    * @param int|null $num **参数解释**： AI组件所在的服务器数量
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

