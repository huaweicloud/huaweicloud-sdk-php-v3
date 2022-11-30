<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaAssociateSecurityGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaAssociateSecurityGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addSecurityGroup  addSecurityGroup
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addSecurityGroup' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaAddSecurityGroupOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addSecurityGroup  addSecurityGroup
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addSecurityGroup' => null
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
    * addSecurityGroup  addSecurityGroup
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addSecurityGroup' => 'addSecurityGroup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addSecurityGroup  addSecurityGroup
    *
    * @var string[]
    */
    protected static $setters = [
            'addSecurityGroup' => 'setAddSecurityGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addSecurityGroup  addSecurityGroup
    *
    * @var string[]
    */
    protected static $getters = [
            'addSecurityGroup' => 'getAddSecurityGroup'
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
        $this->container['addSecurityGroup'] = isset($data['addSecurityGroup']) ? $data['addSecurityGroup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addSecurityGroup'] === null) {
            $invalidProperties[] = "'addSecurityGroup' can't be null";
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
    * Gets addSecurityGroup
    *  addSecurityGroup
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaAddSecurityGroupOption
    */
    public function getAddSecurityGroup()
    {
        return $this->container['addSecurityGroup'];
    }

    /**
    * Sets addSecurityGroup
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaAddSecurityGroupOption $addSecurityGroup addSecurityGroup
    *
    * @return $this
    */
    public function setAddSecurityGroup($addSecurityGroup)
    {
        $this->container['addSecurityGroup'] = $addSecurityGroup;
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

