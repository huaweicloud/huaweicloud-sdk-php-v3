<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdentityProviderConfigDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdentityProviderConfigDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issuerUrl  身份提供商issuer
    * metadataUrl  身份提供商元数据
    * remoteLoginUrl  身份提供商远程登录链接
    * remoteLogoutUrl  身份提供商远程登出链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issuerUrl' => 'string',
            'metadataUrl' => 'string',
            'remoteLoginUrl' => 'string',
            'remoteLogoutUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issuerUrl  身份提供商issuer
    * metadataUrl  身份提供商元数据
    * remoteLoginUrl  身份提供商远程登录链接
    * remoteLogoutUrl  身份提供商远程登出链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issuerUrl' => null,
        'metadataUrl' => null,
        'remoteLoginUrl' => null,
        'remoteLogoutUrl' => null
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
    * issuerUrl  身份提供商issuer
    * metadataUrl  身份提供商元数据
    * remoteLoginUrl  身份提供商远程登录链接
    * remoteLogoutUrl  身份提供商远程登出链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issuerUrl' => 'issuer_url',
            'metadataUrl' => 'metadata_url',
            'remoteLoginUrl' => 'remote_login_url',
            'remoteLogoutUrl' => 'remote_logout_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issuerUrl  身份提供商issuer
    * metadataUrl  身份提供商元数据
    * remoteLoginUrl  身份提供商远程登录链接
    * remoteLogoutUrl  身份提供商远程登出链接
    *
    * @var string[]
    */
    protected static $setters = [
            'issuerUrl' => 'setIssuerUrl',
            'metadataUrl' => 'setMetadataUrl',
            'remoteLoginUrl' => 'setRemoteLoginUrl',
            'remoteLogoutUrl' => 'setRemoteLogoutUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issuerUrl  身份提供商issuer
    * metadataUrl  身份提供商元数据
    * remoteLoginUrl  身份提供商远程登录链接
    * remoteLogoutUrl  身份提供商远程登出链接
    *
    * @var string[]
    */
    protected static $getters = [
            'issuerUrl' => 'getIssuerUrl',
            'metadataUrl' => 'getMetadataUrl',
            'remoteLoginUrl' => 'getRemoteLoginUrl',
            'remoteLogoutUrl' => 'getRemoteLogoutUrl'
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
        $this->container['issuerUrl'] = isset($data['issuerUrl']) ? $data['issuerUrl'] : null;
        $this->container['metadataUrl'] = isset($data['metadataUrl']) ? $data['metadataUrl'] : null;
        $this->container['remoteLoginUrl'] = isset($data['remoteLoginUrl']) ? $data['remoteLoginUrl'] : null;
        $this->container['remoteLogoutUrl'] = isset($data['remoteLogoutUrl']) ? $data['remoteLogoutUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['issuerUrl'] === null) {
            $invalidProperties[] = "'issuerUrl' can't be null";
        }
        if ($this->container['metadataUrl'] === null) {
            $invalidProperties[] = "'metadataUrl' can't be null";
        }
        if ($this->container['remoteLoginUrl'] === null) {
            $invalidProperties[] = "'remoteLoginUrl' can't be null";
        }
        if ($this->container['remoteLogoutUrl'] === null) {
            $invalidProperties[] = "'remoteLogoutUrl' can't be null";
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
    * Gets issuerUrl
    *  身份提供商issuer
    *
    * @return string
    */
    public function getIssuerUrl()
    {
        return $this->container['issuerUrl'];
    }

    /**
    * Sets issuerUrl
    *
    * @param string $issuerUrl 身份提供商issuer
    *
    * @return $this
    */
    public function setIssuerUrl($issuerUrl)
    {
        $this->container['issuerUrl'] = $issuerUrl;
        return $this;
    }

    /**
    * Gets metadataUrl
    *  身份提供商元数据
    *
    * @return string
    */
    public function getMetadataUrl()
    {
        return $this->container['metadataUrl'];
    }

    /**
    * Sets metadataUrl
    *
    * @param string $metadataUrl 身份提供商元数据
    *
    * @return $this
    */
    public function setMetadataUrl($metadataUrl)
    {
        $this->container['metadataUrl'] = $metadataUrl;
        return $this;
    }

    /**
    * Gets remoteLoginUrl
    *  身份提供商远程登录链接
    *
    * @return string
    */
    public function getRemoteLoginUrl()
    {
        return $this->container['remoteLoginUrl'];
    }

    /**
    * Sets remoteLoginUrl
    *
    * @param string $remoteLoginUrl 身份提供商远程登录链接
    *
    * @return $this
    */
    public function setRemoteLoginUrl($remoteLoginUrl)
    {
        $this->container['remoteLoginUrl'] = $remoteLoginUrl;
        return $this;
    }

    /**
    * Gets remoteLogoutUrl
    *  身份提供商远程登出链接
    *
    * @return string
    */
    public function getRemoteLogoutUrl()
    {
        return $this->container['remoteLogoutUrl'];
    }

    /**
    * Sets remoteLogoutUrl
    *
    * @param string $remoteLogoutUrl 身份提供商远程登出链接
    *
    * @return $this
    */
    public function setRemoteLogoutUrl($remoteLogoutUrl)
    {
        $this->container['remoteLogoutUrl'] = $remoteLogoutUrl;
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

