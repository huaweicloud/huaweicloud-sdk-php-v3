<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MoveAppGroupsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MoveAppGroupsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  分组id
    * movement  移动方向，1为上移，-1为下移
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'movement' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  分组id
    * movement  移动方向，1为上移，-1为下移
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'movement' => 'int32'
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
    * id  分组id
    * movement  移动方向，1为上移，-1为下移
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'movement' => 'movement'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  分组id
    * movement  移动方向，1为上移，-1为下移
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'movement' => 'setMovement'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  分组id
    * movement  移动方向，1为上移，-1为下移
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'movement' => 'getMovement'
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
    const MOVEMENT_1 = 1;
    const MOVEMENT_MINUS_1 = -1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMovementAllowableValues()
    {
        return [
            self::MOVEMENT_1,
            self::MOVEMENT_MINUS_1,
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
        $this->container['movement'] = isset($data['movement']) ? $data['movement'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['movement'] === null) {
            $invalidProperties[] = "'movement' can't be null";
        }
            $allowedValues = $this->getMovementAllowableValues();
                if (!is_null($this->container['movement']) && !in_array($this->container['movement'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'movement', must be one of '%s'",
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
    *  分组id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 分组id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets movement
    *  移动方向，1为上移，-1为下移
    *
    * @return int
    */
    public function getMovement()
    {
        return $this->container['movement'];
    }

    /**
    * Sets movement
    *
    * @param int $movement 移动方向，1为上移，-1为下移
    *
    * @return $this
    */
    public function setMovement($movement)
    {
        $this->container['movement'] = $movement;
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

