<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RewardAttrs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RewardAttrs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  指标名称。
    * mode  搜索方向。 - max指定时表示指标值越大越好； - min指定时表示指标值越小越好。
    * regex  指标正则表达式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'mode' => 'string',
            'regex' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  指标名称。
    * mode  搜索方向。 - max指定时表示指标值越大越好； - min指定时表示指标值越小越好。
    * regex  指标正则表达式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'mode' => null,
        'regex' => null
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
    * name  指标名称。
    * mode  搜索方向。 - max指定时表示指标值越大越好； - min指定时表示指标值越小越好。
    * regex  指标正则表达式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'mode' => 'mode',
            'regex' => 'regex'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  指标名称。
    * mode  搜索方向。 - max指定时表示指标值越大越好； - min指定时表示指标值越小越好。
    * regex  指标正则表达式。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'mode' => 'setMode',
            'regex' => 'setRegex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  指标名称。
    * mode  搜索方向。 - max指定时表示指标值越大越好； - min指定时表示指标值越小越好。
    * regex  指标正则表达式。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'mode' => 'getMode',
            'regex' => 'getRegex'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  指标名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 指标名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mode
    *  搜索方向。 - max指定时表示指标值越大越好； - min指定时表示指标值越小越好。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 搜索方向。 - max指定时表示指标值越大越好； - min指定时表示指标值越小越好。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets regex
    *  指标正则表达式。
    *
    * @return string|null
    */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
    * Sets regex
    *
    * @param string|null $regex 指标正则表达式。
    *
    * @return $this
    */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;
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

