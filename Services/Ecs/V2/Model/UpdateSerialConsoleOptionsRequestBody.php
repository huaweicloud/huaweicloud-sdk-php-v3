<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSerialConsoleOptionsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSerialConsoleOptionsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serialConsoleOptions  serialConsoleOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serialConsoleOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\UpdateSerialConsoleOptionsOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serialConsoleOptions  serialConsoleOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serialConsoleOptions' => null
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
    * serialConsoleOptions  serialConsoleOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serialConsoleOptions' => 'serial_console_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serialConsoleOptions  serialConsoleOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'serialConsoleOptions' => 'setSerialConsoleOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serialConsoleOptions  serialConsoleOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'serialConsoleOptions' => 'getSerialConsoleOptions'
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
        $this->container['serialConsoleOptions'] = isset($data['serialConsoleOptions']) ? $data['serialConsoleOptions'] : null;
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
    * Gets serialConsoleOptions
    *  serialConsoleOptions
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\UpdateSerialConsoleOptionsOption|null
    */
    public function getSerialConsoleOptions()
    {
        return $this->container['serialConsoleOptions'];
    }

    /**
    * Sets serialConsoleOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\UpdateSerialConsoleOptionsOption|null $serialConsoleOptions serialConsoleOptions
    *
    * @return $this
    */
    public function setSerialConsoleOptions($serialConsoleOptions)
    {
        $this->container['serialConsoleOptions'] = $serialConsoleOptions;
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

