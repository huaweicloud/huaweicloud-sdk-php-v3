<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMaterialRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMaterialRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * materialName  素材名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'materialName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * materialName  素材名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'materialName' => null
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
    * materialName  素材名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'materialName' => 'materialName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * materialName  素材名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'materialName' => 'setMaterialName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * materialName  素材名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'materialName' => 'getMaterialName'
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
        $this->container['materialName'] = isset($data['materialName']) ? $data['materialName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['materialName']) && (mb_strlen($this->container['materialName']) > 96)) {
                $invalidProperties[] = "invalid value for 'materialName', the character length must be smaller than or equal to 96.";
            }
            if (!is_null($this->container['materialName']) && (mb_strlen($this->container['materialName']) < 1)) {
                $invalidProperties[] = "invalid value for 'materialName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['materialName']) && !preg_match("/^[\\u4E00-\\u9FA5A-Za-z0-9\\-_()]+$/", $this->container['materialName'])) {
                $invalidProperties[] = "invalid value for 'materialName', must be conform to the pattern /^[\\u4E00-\\u9FA5A-Za-z0-9\\-_()]+$/.";
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
    * Gets materialName
    *  素材名称。
    *
    * @return string|null
    */
    public function getMaterialName()
    {
        return $this->container['materialName'];
    }

    /**
    * Sets materialName
    *
    * @param string|null $materialName 素材名称。
    *
    * @return $this
    */
    public function setMaterialName($materialName)
    {
        $this->container['materialName'] = $materialName;
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

