<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserFunctionDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserFunctionDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableRoom  是否开启智能协同白板功能。如果开启，表示该帐号是给智能协同白板使用，占用企业智能协同白板的资源，如果资源不足，则无法开启。 默认值：false。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableRoom' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableRoom  是否开启智能协同白板功能。如果开启，表示该帐号是给智能协同白板使用，占用企业智能协同白板的资源，如果资源不足，则无法开启。 默认值：false。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableRoom' => null
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
    * enableRoom  是否开启智能协同白板功能。如果开启，表示该帐号是给智能协同白板使用，占用企业智能协同白板的资源，如果资源不足，则无法开启。 默认值：false。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableRoom' => 'enableRoom'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableRoom  是否开启智能协同白板功能。如果开启，表示该帐号是给智能协同白板使用，占用企业智能协同白板的资源，如果资源不足，则无法开启。 默认值：false。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'enableRoom' => 'setEnableRoom'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableRoom  是否开启智能协同白板功能。如果开启，表示该帐号是给智能协同白板使用，占用企业智能协同白板的资源，如果资源不足，则无法开启。 默认值：false。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'enableRoom' => 'getEnableRoom'
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
        $this->container['enableRoom'] = isset($data['enableRoom']) ? $data['enableRoom'] : false;
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
    * Gets enableRoom
    *  是否开启智能协同白板功能。如果开启，表示该帐号是给智能协同白板使用，占用企业智能协同白板的资源，如果资源不足，则无法开启。 默认值：false。 > 该参数将废弃，请勿使用。
    *
    * @return bool|null
    */
    public function getEnableRoom()
    {
        return $this->container['enableRoom'];
    }

    /**
    * Sets enableRoom
    *
    * @param bool|null $enableRoom 是否开启智能协同白板功能。如果开启，表示该帐号是给智能协同白板使用，占用企业智能协同白板的资源，如果资源不足，则无法开启。 默认值：false。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setEnableRoom($enableRoom)
    {
        $this->container['enableRoom'] = $enableRoom;
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

