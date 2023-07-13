<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioTrack implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioTrack';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  音轨选取方式。 - 0：默认选取 - 1：手动选择
    * left  选取左声道所在的音轨编号。
    * right  选取右声道所在的音轨编号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'left' => 'int',
            'right' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  音轨选取方式。 - 0：默认选取 - 1：手动选择
    * left  选取左声道所在的音轨编号。
    * right  选取右声道所在的音轨编号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => 'int32',
        'left' => 'int32',
        'right' => 'int32'
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
    * type  音轨选取方式。 - 0：默认选取 - 1：手动选择
    * left  选取左声道所在的音轨编号。
    * right  选取右声道所在的音轨编号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'left' => 'left',
            'right' => 'right'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  音轨选取方式。 - 0：默认选取 - 1：手动选择
    * left  选取左声道所在的音轨编号。
    * right  选取右声道所在的音轨编号。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'left' => 'setLeft',
            'right' => 'setRight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  音轨选取方式。 - 0：默认选取 - 1：手动选择
    * left  选取左声道所在的音轨编号。
    * right  选取右声道所在的音轨编号。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'left' => 'getLeft',
            'right' => 'getRight'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['right'] = isset($data['right']) ? $data['right'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && ($this->container['type'] > 1)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['left']) && ($this->container['left'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'left', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['left']) && ($this->container['left'] < 0)) {
                $invalidProperties[] = "invalid value for 'left', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['right']) && ($this->container['right'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'right', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['right']) && ($this->container['right'] < 0)) {
                $invalidProperties[] = "invalid value for 'right', must be bigger than or equal to 0.";
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
    * Gets type
    *  音轨选取方式。 - 0：默认选取 - 1：手动选择
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 音轨选取方式。 - 0：默认选取 - 1：手动选择
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets left
    *  选取左声道所在的音轨编号。
    *
    * @return int|null
    */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
    * Sets left
    *
    * @param int|null $left 选取左声道所在的音轨编号。
    *
    * @return $this
    */
    public function setLeft($left)
    {
        $this->container['left'] = $left;
        return $this;
    }

    /**
    * Gets right
    *  选取右声道所在的音轨编号。
    *
    * @return int|null
    */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
    * Sets right
    *
    * @param int|null $right 选取右声道所在的音轨编号。
    *
    * @return $this
    */
    public function setRight($right)
    {
        $this->container['right'] = $right;
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

