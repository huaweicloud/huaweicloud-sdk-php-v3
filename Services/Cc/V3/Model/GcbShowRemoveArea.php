<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GcbShowRemoveArea implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GcbShowRemoveArea';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remoteArea  功能说明：远端接入点的中英文名。通过HEADER里面的x-language控制，默认英文，zh-cn返回中文。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remoteArea' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remoteArea  功能说明：远端接入点的中英文名。通过HEADER里面的x-language控制，默认英文，zh-cn返回中文。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remoteArea' => null
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
    * remoteArea  功能说明：远端接入点的中英文名。通过HEADER里面的x-language控制，默认英文，zh-cn返回中文。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remoteArea' => 'remote_area'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remoteArea  功能说明：远端接入点的中英文名。通过HEADER里面的x-language控制，默认英文，zh-cn返回中文。
    *
    * @var string[]
    */
    protected static $setters = [
            'remoteArea' => 'setRemoteArea'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remoteArea  功能说明：远端接入点的中英文名。通过HEADER里面的x-language控制，默认英文，zh-cn返回中文。
    *
    * @var string[]
    */
    protected static $getters = [
            'remoteArea' => 'getRemoteArea'
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
        $this->container['remoteArea'] = isset($data['remoteArea']) ? $data['remoteArea'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) > 36)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be bigger than or equal to 1.";
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
    * Gets remoteArea
    *  功能说明：远端接入点的中英文名。通过HEADER里面的x-language控制，默认英文，zh-cn返回中文。
    *
    * @return string|null
    */
    public function getRemoteArea()
    {
        return $this->container['remoteArea'];
    }

    /**
    * Sets remoteArea
    *
    * @param string|null $remoteArea 功能说明：远端接入点的中英文名。通过HEADER里面的x-language控制，默认英文，zh-cn返回中文。
    *
    * @return $this
    */
    public function setRemoteArea($remoteArea)
    {
        $this->container['remoteArea'] = $remoteArea;
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

