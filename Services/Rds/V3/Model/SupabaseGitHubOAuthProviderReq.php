<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseGitHubOAuthProviderReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseGitHubOAuthProviderReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableGithub  enableGithub
    * oauthClientId  oauthClientId
    * oauthClientSecret  秘密，受控输入，show不返回。
    * redirectUri  redirectUri
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableGithub' => 'bool',
            'oauthClientId' => 'string',
            'oauthClientSecret' => 'string',
            'redirectUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableGithub  enableGithub
    * oauthClientId  oauthClientId
    * oauthClientSecret  秘密，受控输入，show不返回。
    * redirectUri  redirectUri
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableGithub' => null,
        'oauthClientId' => null,
        'oauthClientSecret' => null,
        'redirectUri' => null
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
    * enableGithub  enableGithub
    * oauthClientId  oauthClientId
    * oauthClientSecret  秘密，受控输入，show不返回。
    * redirectUri  redirectUri
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableGithub' => 'enable_github',
            'oauthClientId' => 'oauth_client_id',
            'oauthClientSecret' => 'oauth_client_secret',
            'redirectUri' => 'redirect_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableGithub  enableGithub
    * oauthClientId  oauthClientId
    * oauthClientSecret  秘密，受控输入，show不返回。
    * redirectUri  redirectUri
    *
    * @var string[]
    */
    protected static $setters = [
            'enableGithub' => 'setEnableGithub',
            'oauthClientId' => 'setOauthClientId',
            'oauthClientSecret' => 'setOauthClientSecret',
            'redirectUri' => 'setRedirectUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableGithub  enableGithub
    * oauthClientId  oauthClientId
    * oauthClientSecret  秘密，受控输入，show不返回。
    * redirectUri  redirectUri
    *
    * @var string[]
    */
    protected static $getters = [
            'enableGithub' => 'getEnableGithub',
            'oauthClientId' => 'getOauthClientId',
            'oauthClientSecret' => 'getOauthClientSecret',
            'redirectUri' => 'getRedirectUri'
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
        $this->container['enableGithub'] = isset($data['enableGithub']) ? $data['enableGithub'] : null;
        $this->container['oauthClientId'] = isset($data['oauthClientId']) ? $data['oauthClientId'] : null;
        $this->container['oauthClientSecret'] = isset($data['oauthClientSecret']) ? $data['oauthClientSecret'] : null;
        $this->container['redirectUri'] = isset($data['redirectUri']) ? $data['redirectUri'] : null;
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
    * Gets enableGithub
    *  enableGithub
    *
    * @return bool|null
    */
    public function getEnableGithub()
    {
        return $this->container['enableGithub'];
    }

    /**
    * Sets enableGithub
    *
    * @param bool|null $enableGithub enableGithub
    *
    * @return $this
    */
    public function setEnableGithub($enableGithub)
    {
        $this->container['enableGithub'] = $enableGithub;
        return $this;
    }

    /**
    * Gets oauthClientId
    *  oauthClientId
    *
    * @return string|null
    */
    public function getOauthClientId()
    {
        return $this->container['oauthClientId'];
    }

    /**
    * Sets oauthClientId
    *
    * @param string|null $oauthClientId oauthClientId
    *
    * @return $this
    */
    public function setOauthClientId($oauthClientId)
    {
        $this->container['oauthClientId'] = $oauthClientId;
        return $this;
    }

    /**
    * Gets oauthClientSecret
    *  秘密，受控输入，show不返回。
    *
    * @return string|null
    */
    public function getOauthClientSecret()
    {
        return $this->container['oauthClientSecret'];
    }

    /**
    * Sets oauthClientSecret
    *
    * @param string|null $oauthClientSecret 秘密，受控输入，show不返回。
    *
    * @return $this
    */
    public function setOauthClientSecret($oauthClientSecret)
    {
        $this->container['oauthClientSecret'] = $oauthClientSecret;
        return $this;
    }

    /**
    * Gets redirectUri
    *  redirectUri
    *
    * @return string|null
    */
    public function getRedirectUri()
    {
        return $this->container['redirectUri'];
    }

    /**
    * Sets redirectUri
    *
    * @param string|null $redirectUri redirectUri
    *
    * @return $this
    */
    public function setRedirectUri($redirectUri)
    {
        $this->container['redirectUri'] = $redirectUri;
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

