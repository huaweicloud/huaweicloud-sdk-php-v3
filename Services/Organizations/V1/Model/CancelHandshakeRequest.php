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
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSecurityToken' => 'string',
            'handshakeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSecurityToken' => null,
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
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSecurityToken' => 'X-Security-Token',
            'handshakeId' => 'handshake_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'xSecurityToken' => 'setXSecurityToken',
            'handshakeId' => 'setHandshakeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * handshakeId  邀请的唯一标识符（ID）。账号在发起邀请时创建ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'xSecurityToken' => 'getXSecurityToken',
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
        $this->container['xSecurityToken'] = isset($data['xSecurityToken']) ? $data['xSecurityToken'] : null;
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
    * Gets xSecurityToken
    *  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    *
    * @return string|null
    */
    public function getXSecurityToken()
    {
        return $this->container['xSecurityToken'];
    }

    /**
    * Sets xSecurityToken
    *
    * @param string|null $xSecurityToken 如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    *
    * @return $this
    */
    public function setXSecurityToken($xSecurityToken)
    {
        $this->container['xSecurityToken'] = $xSecurityToken;
        return $this;
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

