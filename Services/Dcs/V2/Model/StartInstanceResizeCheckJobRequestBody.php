<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartInstanceResizeCheckJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartInstanceResizeCheckJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newCapacity  新规格的容量，单位GB
    * specCode  新的规格编码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newCapacity' => 'int',
            'specCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newCapacity  新规格的容量，单位GB
    * specCode  新的规格编码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newCapacity' => null,
        'specCode' => null
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
    * newCapacity  新规格的容量，单位GB
    * specCode  新的规格编码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newCapacity' => 'new_capacity',
            'specCode' => 'spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newCapacity  新规格的容量，单位GB
    * specCode  新的规格编码
    *
    * @var string[]
    */
    protected static $setters = [
            'newCapacity' => 'setNewCapacity',
            'specCode' => 'setSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newCapacity  新规格的容量，单位GB
    * specCode  新的规格编码
    *
    * @var string[]
    */
    protected static $getters = [
            'newCapacity' => 'getNewCapacity',
            'specCode' => 'getSpecCode'
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
        $this->container['newCapacity'] = isset($data['newCapacity']) ? $data['newCapacity'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
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
    * Gets newCapacity
    *  新规格的容量，单位GB
    *
    * @return int|null
    */
    public function getNewCapacity()
    {
        return $this->container['newCapacity'];
    }

    /**
    * Sets newCapacity
    *
    * @param int|null $newCapacity 新规格的容量，单位GB
    *
    * @return $this
    */
    public function setNewCapacity($newCapacity)
    {
        $this->container['newCapacity'] = $newCapacity;
        return $this;
    }

    /**
    * Gets specCode
    *  新的规格编码
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 新的规格编码
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
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

