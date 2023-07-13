<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddAgentPathResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddAgentPathResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * added  新添加成功的路径列表
    * existed  已经存在的路径列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'added' => 'string[]',
            'existed' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * added  新添加成功的路径列表
    * existed  已经存在的路径列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'added' => null,
        'existed' => null
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
    * added  新添加成功的路径列表
    * existed  已经存在的路径列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'added' => 'added',
            'existed' => 'existed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * added  新添加成功的路径列表
    * existed  已经存在的路径列表
    *
    * @var string[]
    */
    protected static $setters = [
            'added' => 'setAdded',
            'existed' => 'setExisted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * added  新添加成功的路径列表
    * existed  已经存在的路径列表
    *
    * @var string[]
    */
    protected static $getters = [
            'added' => 'getAdded',
            'existed' => 'getExisted'
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
        $this->container['added'] = isset($data['added']) ? $data['added'] : null;
        $this->container['existed'] = isset($data['existed']) ? $data['existed'] : null;
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
    * Gets added
    *  新添加成功的路径列表
    *
    * @return string[]|null
    */
    public function getAdded()
    {
        return $this->container['added'];
    }

    /**
    * Sets added
    *
    * @param string[]|null $added 新添加成功的路径列表
    *
    * @return $this
    */
    public function setAdded($added)
    {
        $this->container['added'] = $added;
        return $this;
    }

    /**
    * Gets existed
    *  已经存在的路径列表
    *
    * @return string[]|null
    */
    public function getExisted()
    {
        return $this->container['existed'];
    }

    /**
    * Sets existed
    *
    * @param string[]|null $existed 已经存在的路径列表
    *
    * @return $this
    */
    public function setExisted($existed)
    {
        $this->container['existed'] = $existed;
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

