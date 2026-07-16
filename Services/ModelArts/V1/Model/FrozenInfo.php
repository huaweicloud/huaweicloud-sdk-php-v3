<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrozenInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrozenInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scene  冻结场景。可选值如下： - ARREAR：欠费冻结 - POLICE：公安冻结 - ILLEGAL：违规冻结
    * effect  冻结后的影响。可选值如下： - 1：冻结后可释放 - 2：冻结后不可释放
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scene' => 'string',
            'effect' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scene  冻结场景。可选值如下： - ARREAR：欠费冻结 - POLICE：公安冻结 - ILLEGAL：违规冻结
    * effect  冻结后的影响。可选值如下： - 1：冻结后可释放 - 2：冻结后不可释放
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scene' => null,
        'effect' => 'int32'
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
    * scene  冻结场景。可选值如下： - ARREAR：欠费冻结 - POLICE：公安冻结 - ILLEGAL：违规冻结
    * effect  冻结后的影响。可选值如下： - 1：冻结后可释放 - 2：冻结后不可释放
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scene' => 'scene',
            'effect' => 'effect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scene  冻结场景。可选值如下： - ARREAR：欠费冻结 - POLICE：公安冻结 - ILLEGAL：违规冻结
    * effect  冻结后的影响。可选值如下： - 1：冻结后可释放 - 2：冻结后不可释放
    *
    * @var string[]
    */
    protected static $setters = [
            'scene' => 'setScene',
            'effect' => 'setEffect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scene  冻结场景。可选值如下： - ARREAR：欠费冻结 - POLICE：公安冻结 - ILLEGAL：违规冻结
    * effect  冻结后的影响。可选值如下： - 1：冻结后可释放 - 2：冻结后不可释放
    *
    * @var string[]
    */
    protected static $getters = [
            'scene' => 'getScene',
            'effect' => 'getEffect'
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
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
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
    * Gets scene
    *  冻结场景。可选值如下： - ARREAR：欠费冻结 - POLICE：公安冻结 - ILLEGAL：违规冻结
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
    * @param string|null $scene 冻结场景。可选值如下： - ARREAR：欠费冻结 - POLICE：公安冻结 - ILLEGAL：违规冻结
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets effect
    *  冻结后的影响。可选值如下： - 1：冻结后可释放 - 2：冻结后不可释放
    *
    * @return int|null
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param int|null $effect 冻结后的影响。可选值如下： - 1：冻结后可释放 - 2：冻结后不可释放
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
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

