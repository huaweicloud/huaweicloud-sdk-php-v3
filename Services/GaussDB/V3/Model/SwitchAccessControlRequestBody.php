<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchAccessControlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchAccessControlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * openAccessControl  是否开启访问控制。 取值： - true：开启。 - false：关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'openAccessControl' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * openAccessControl  是否开启访问控制。 取值： - true：开启。 - false：关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'openAccessControl' => null
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
    * openAccessControl  是否开启访问控制。 取值： - true：开启。 - false：关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'openAccessControl' => 'open_access_control'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * openAccessControl  是否开启访问控制。 取值： - true：开启。 - false：关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'openAccessControl' => 'setOpenAccessControl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * openAccessControl  是否开启访问控制。 取值： - true：开启。 - false：关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'openAccessControl' => 'getOpenAccessControl'
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
        $this->container['openAccessControl'] = isset($data['openAccessControl']) ? $data['openAccessControl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['openAccessControl'] === null) {
            $invalidProperties[] = "'openAccessControl' can't be null";
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
    * Gets openAccessControl
    *  是否开启访问控制。 取值： - true：开启。 - false：关闭。
    *
    * @return bool
    */
    public function getOpenAccessControl()
    {
        return $this->container['openAccessControl'];
    }

    /**
    * Sets openAccessControl
    *
    * @param bool $openAccessControl 是否开启访问控制。 取值： - true：开启。 - false：关闭。
    *
    * @return $this
    */
    public function setOpenAccessControl($openAccessControl)
    {
        $this->container['openAccessControl'] = $openAccessControl;
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

