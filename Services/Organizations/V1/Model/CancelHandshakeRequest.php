<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CancelHandshakeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CancelHandshakeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'handshakeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'handshakeId' => null
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
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'handshakeId' => 'handshake_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'handshakeId' => 'setHandshakeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'handshakeId' => 'getHandshakeId'
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
        $this->container['handshakeId'] = isset($data['handshakeId']) ? $data['handshakeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['handshakeId'] === null) {
            $invalidProperties[] = "'handshakeId' can't be null";
        }
            if ((mb_strlen($this->container['handshakeId']) > 34)) {
                $invalidProperties[] = "invalid value for 'handshakeId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^h-[0-9a-z]{8,32}$/", $this->container['handshakeId'])) {
                $invalidProperties[] = "invalid value for 'handshakeId', must be conform to the pattern /^h-[0-9a-z]{8,32}$/.";
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
    * Gets handshakeId
    *  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @return string
    */
    public function getHandshakeId()
    {
        return $this->container['handshakeId'];
    }

    /**
    * Sets handshakeId
    *
    * @param string $handshakeId 邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @return $this
    */
    public function setHandshakeId($handshakeId)
    {
        $this->container['handshakeId'] = $handshakeId;
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
