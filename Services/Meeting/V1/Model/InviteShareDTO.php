<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InviteShareDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InviteShareDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * share  邀请标志。 * 0：取消邀请 * 1：邀请
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'share' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * share  邀请标志。 * 0：取消邀请 * 1：邀请
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'share' => 'int32'
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
    * share  邀请标志。 * 0：取消邀请 * 1：邀请
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'share' => 'share'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * share  邀请标志。 * 0：取消邀请 * 1：邀请
    *
    * @var string[]
    */
    protected static $setters = [
            'share' => 'setShare'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * share  邀请标志。 * 0：取消邀请 * 1：邀请
    *
    * @var string[]
    */
    protected static $getters = [
            'share' => 'getShare'
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
        $this->container['share'] = isset($data['share']) ? $data['share'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['share'] === null) {
            $invalidProperties[] = "'share' can't be null";
        }
            if (($this->container['share'] > 1)) {
                $invalidProperties[] = "invalid value for 'share', must be smaller than or equal to 1.";
            }
            if (($this->container['share'] < 0)) {
                $invalidProperties[] = "invalid value for 'share', must be bigger than or equal to 0.";
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
    * Gets share
    *  邀请标志。 * 0：取消邀请 * 1：邀请
    *
    * @return int
    */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
    * Sets share
    *
    * @param int $share 邀请标志。 * 0：取消邀请 * 1：邀请
    *
    * @return $this
    */
    public function setShare($share)
    {
        $this->container['share'] = $share;
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

