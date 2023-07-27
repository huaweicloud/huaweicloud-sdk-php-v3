<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddTunnelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddTunnelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tunnelId  隧道ID
    * tunnelAccessToken  鉴权信息
    * expiresIn  鉴权信息的过期时间, 单位：秒
    * tunnelUri  websocket接入地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tunnelId' => 'string',
            'tunnelAccessToken' => 'string',
            'expiresIn' => 'int',
            'tunnelUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tunnelId  隧道ID
    * tunnelAccessToken  鉴权信息
    * expiresIn  鉴权信息的过期时间, 单位：秒
    * tunnelUri  websocket接入地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tunnelId' => null,
        'tunnelAccessToken' => null,
        'expiresIn' => null,
        'tunnelUri' => null
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
    * tunnelId  隧道ID
    * tunnelAccessToken  鉴权信息
    * expiresIn  鉴权信息的过期时间, 单位：秒
    * tunnelUri  websocket接入地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tunnelId' => 'tunnel_id',
            'tunnelAccessToken' => 'tunnel_access_token',
            'expiresIn' => 'expires_in',
            'tunnelUri' => 'tunnel_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tunnelId  隧道ID
    * tunnelAccessToken  鉴权信息
    * expiresIn  鉴权信息的过期时间, 单位：秒
    * tunnelUri  websocket接入地址
    *
    * @var string[]
    */
    protected static $setters = [
            'tunnelId' => 'setTunnelId',
            'tunnelAccessToken' => 'setTunnelAccessToken',
            'expiresIn' => 'setExpiresIn',
            'tunnelUri' => 'setTunnelUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tunnelId  隧道ID
    * tunnelAccessToken  鉴权信息
    * expiresIn  鉴权信息的过期时间, 单位：秒
    * tunnelUri  websocket接入地址
    *
    * @var string[]
    */
    protected static $getters = [
            'tunnelId' => 'getTunnelId',
            'tunnelAccessToken' => 'getTunnelAccessToken',
            'expiresIn' => 'getExpiresIn',
            'tunnelUri' => 'getTunnelUri'
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
        $this->container['tunnelId'] = isset($data['tunnelId']) ? $data['tunnelId'] : null;
        $this->container['tunnelAccessToken'] = isset($data['tunnelAccessToken']) ? $data['tunnelAccessToken'] : null;
        $this->container['expiresIn'] = isset($data['expiresIn']) ? $data['expiresIn'] : null;
        $this->container['tunnelUri'] = isset($data['tunnelUri']) ? $data['tunnelUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tunnelId']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['tunnelId'])) {
                $invalidProperties[] = "invalid value for 'tunnelId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['tunnelAccessToken']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['tunnelAccessToken'])) {
                $invalidProperties[] = "invalid value for 'tunnelAccessToken', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['expiresIn']) && ($this->container['expiresIn'] > 86400000)) {
                $invalidProperties[] = "invalid value for 'expiresIn', must be smaller than or equal to 86400000.";
            }
            if (!is_null($this->container['expiresIn']) && ($this->container['expiresIn'] < 0)) {
                $invalidProperties[] = "invalid value for 'expiresIn', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tunnelUri']) && (mb_strlen($this->container['tunnelUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'tunnelUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['tunnelUri']) && (mb_strlen($this->container['tunnelUri']) < 1)) {
                $invalidProperties[] = "invalid value for 'tunnelUri', the character length must be bigger than or equal to 1.";
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
    * Gets tunnelId
    *  隧道ID
    *
    * @return string|null
    */
    public function getTunnelId()
    {
        return $this->container['tunnelId'];
    }

    /**
    * Sets tunnelId
    *
    * @param string|null $tunnelId 隧道ID
    *
    * @return $this
    */
    public function setTunnelId($tunnelId)
    {
        $this->container['tunnelId'] = $tunnelId;
        return $this;
    }

    /**
    * Gets tunnelAccessToken
    *  鉴权信息
    *
    * @return string|null
    */
    public function getTunnelAccessToken()
    {
        return $this->container['tunnelAccessToken'];
    }

    /**
    * Sets tunnelAccessToken
    *
    * @param string|null $tunnelAccessToken 鉴权信息
    *
    * @return $this
    */
    public function setTunnelAccessToken($tunnelAccessToken)
    {
        $this->container['tunnelAccessToken'] = $tunnelAccessToken;
        return $this;
    }

    /**
    * Gets expiresIn
    *  鉴权信息的过期时间, 单位：秒
    *
    * @return int|null
    */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
    * Sets expiresIn
    *
    * @param int|null $expiresIn 鉴权信息的过期时间, 单位：秒
    *
    * @return $this
    */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;
        return $this;
    }

    /**
    * Gets tunnelUri
    *  websocket接入地址
    *
    * @return string|null
    */
    public function getTunnelUri()
    {
        return $this->container['tunnelUri'];
    }

    /**
    * Sets tunnelUri
    *
    * @param string|null $tunnelUri websocket接入地址
    *
    * @return $this
    */
    public function setTunnelUri($tunnelUri)
    {
        $this->container['tunnelUri'] = $tunnelUri;
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

