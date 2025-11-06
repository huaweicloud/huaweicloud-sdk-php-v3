<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DirectoryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DirectoryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * directoryId  目录ID。
    * directoryName  目录名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'directoryId' => 'string',
            'directoryName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * directoryId  目录ID。
    * directoryName  目录名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'directoryId' => null,
        'directoryName' => null
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
    * directoryId  目录ID。
    * directoryName  目录名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'directoryId' => 'directory_id',
            'directoryName' => 'directory_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * directoryId  目录ID。
    * directoryName  目录名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'directoryId' => 'setDirectoryId',
            'directoryName' => 'setDirectoryName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * directoryId  目录ID。
    * directoryName  目录名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'directoryId' => 'getDirectoryId',
            'directoryName' => 'getDirectoryName'
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
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['directoryName'] = isset($data['directoryName']) ? $data['directoryName'] : null;
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
    * Gets directoryId
    *  目录ID。
    *
    * @return string|null
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param string|null $directoryId 目录ID。
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets directoryName
    *  目录名称。
    *
    * @return string|null
    */
    public function getDirectoryName()
    {
        return $this->container['directoryName'];
    }

    /**
    * Sets directoryName
    *
    * @param string|null $directoryName 目录名称。
    *
    * @return $this
    */
    public function setDirectoryName($directoryName)
    {
        $this->container['directoryName'] = $directoryName;
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

