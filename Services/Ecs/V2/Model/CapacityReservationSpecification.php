<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CapacityReservationSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CapacityReservationSpecification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  目标容量预留ID
    * preference  实例启动的私有池容量选项
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'preference' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  目标容量预留ID
    * preference  实例启动的私有池容量选项
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'preference' => null
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
    * id  目标容量预留ID
    * preference  实例启动的私有池容量选项
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'preference' => 'preference'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  目标容量预留ID
    * preference  实例启动的私有池容量选项
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'preference' => 'setPreference'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  目标容量预留ID
    * preference  实例启动的私有池容量选项
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'preference' => 'getPreference'
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
    const PREFERENCE_NONE = 'none';
    const PREFERENCE_TARGETED = 'targeted';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPreferenceAllowableValues()
    {
        return [
            self::PREFERENCE_NONE,
            self::PREFERENCE_TARGETED,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['preference'] = isset($data['preference']) ? $data['preference'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPreferenceAllowableValues();
                if (!is_null($this->container['preference']) && !in_array($this->container['preference'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'preference', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  目标容量预留ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 目标容量预留ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets preference
    *  实例启动的私有池容量选项
    *
    * @return string|null
    */
    public function getPreference()
    {
        return $this->container['preference'];
    }

    /**
    * Sets preference
    *
    * @param string|null $preference 实例启动的私有池容量选项
    *
    * @return $this
    */
    public function setPreference($preference)
    {
        $this->container['preference'] = $preference;
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

