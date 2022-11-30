<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAcceleratorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAcceleratorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * acceleratorId  全球加速器ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'acceleratorId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * acceleratorId  全球加速器ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'acceleratorId' => null
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
    * acceleratorId  全球加速器ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'acceleratorId' => 'accelerator_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * acceleratorId  全球加速器ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'acceleratorId' => 'setAcceleratorId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * acceleratorId  全球加速器ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'acceleratorId' => 'getAcceleratorId'
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
        $this->container['acceleratorId'] = isset($data['acceleratorId']) ? $data['acceleratorId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['acceleratorId'] === null) {
            $invalidProperties[] = "'acceleratorId' can't be null";
        }
            if ((mb_strlen($this->container['acceleratorId']) > 36)) {
                $invalidProperties[] = "invalid value for 'acceleratorId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['acceleratorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'acceleratorId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['acceleratorId'])) {
                $invalidProperties[] = "invalid value for 'acceleratorId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets acceleratorId
    *  全球加速器ID。
    *
    * @return string
    */
    public function getAcceleratorId()
    {
        return $this->container['acceleratorId'];
    }

    /**
    * Sets acceleratorId
    *
    * @param string $acceleratorId 全球加速器ID。
    *
    * @return $this
    */
    public function setAcceleratorId($acceleratorId)
    {
        $this->container['acceleratorId'] = $acceleratorId;
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

