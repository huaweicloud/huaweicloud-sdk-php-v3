<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Oauth2ProviderConfigOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Oauth2ProviderConfigOutput';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * microsoftOauth2ProviderConfig  microsoftOauth2ProviderConfig
    * googleOauth2ProviderConfig  googleOauth2ProviderConfig
    * githubOauth2ProviderConfig  githubOauth2ProviderConfig
    * customOauth2ProviderConfig  customOauth2ProviderConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'microsoftOauth2ProviderConfig' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\MicrosoftOauth2ProviderConfigOutput',
            'googleOauth2ProviderConfig' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\GoogleOauth2ProviderConfigOutput',
            'githubOauth2ProviderConfig' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\GithubOauth2ProviderConfigOutput',
            'customOauth2ProviderConfig' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\CustomOauth2ProviderConfigOutput'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * microsoftOauth2ProviderConfig  microsoftOauth2ProviderConfig
    * googleOauth2ProviderConfig  googleOauth2ProviderConfig
    * githubOauth2ProviderConfig  githubOauth2ProviderConfig
    * customOauth2ProviderConfig  customOauth2ProviderConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'microsoftOauth2ProviderConfig' => null,
        'googleOauth2ProviderConfig' => null,
        'githubOauth2ProviderConfig' => null,
        'customOauth2ProviderConfig' => null
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
    * microsoftOauth2ProviderConfig  microsoftOauth2ProviderConfig
    * googleOauth2ProviderConfig  googleOauth2ProviderConfig
    * githubOauth2ProviderConfig  githubOauth2ProviderConfig
    * customOauth2ProviderConfig  customOauth2ProviderConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'microsoftOauth2ProviderConfig' => 'microsoft_oauth2_provider_config',
            'googleOauth2ProviderConfig' => 'google_oauth2_provider_config',
            'githubOauth2ProviderConfig' => 'github_oauth2_provider_config',
            'customOauth2ProviderConfig' => 'custom_oauth2_provider_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * microsoftOauth2ProviderConfig  microsoftOauth2ProviderConfig
    * googleOauth2ProviderConfig  googleOauth2ProviderConfig
    * githubOauth2ProviderConfig  githubOauth2ProviderConfig
    * customOauth2ProviderConfig  customOauth2ProviderConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'microsoftOauth2ProviderConfig' => 'setMicrosoftOauth2ProviderConfig',
            'googleOauth2ProviderConfig' => 'setGoogleOauth2ProviderConfig',
            'githubOauth2ProviderConfig' => 'setGithubOauth2ProviderConfig',
            'customOauth2ProviderConfig' => 'setCustomOauth2ProviderConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * microsoftOauth2ProviderConfig  microsoftOauth2ProviderConfig
    * googleOauth2ProviderConfig  googleOauth2ProviderConfig
    * githubOauth2ProviderConfig  githubOauth2ProviderConfig
    * customOauth2ProviderConfig  customOauth2ProviderConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'microsoftOauth2ProviderConfig' => 'getMicrosoftOauth2ProviderConfig',
            'googleOauth2ProviderConfig' => 'getGoogleOauth2ProviderConfig',
            'githubOauth2ProviderConfig' => 'getGithubOauth2ProviderConfig',
            'customOauth2ProviderConfig' => 'getCustomOauth2ProviderConfig'
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
        $this->container['microsoftOauth2ProviderConfig'] = isset($data['microsoftOauth2ProviderConfig']) ? $data['microsoftOauth2ProviderConfig'] : null;
        $this->container['googleOauth2ProviderConfig'] = isset($data['googleOauth2ProviderConfig']) ? $data['googleOauth2ProviderConfig'] : null;
        $this->container['githubOauth2ProviderConfig'] = isset($data['githubOauth2ProviderConfig']) ? $data['githubOauth2ProviderConfig'] : null;
        $this->container['customOauth2ProviderConfig'] = isset($data['customOauth2ProviderConfig']) ? $data['customOauth2ProviderConfig'] : null;
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
    * Gets microsoftOauth2ProviderConfig
    *  microsoftOauth2ProviderConfig
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\MicrosoftOauth2ProviderConfigOutput|null
    */
    public function getMicrosoftOauth2ProviderConfig()
    {
        return $this->container['microsoftOauth2ProviderConfig'];
    }

    /**
    * Sets microsoftOauth2ProviderConfig
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\MicrosoftOauth2ProviderConfigOutput|null $microsoftOauth2ProviderConfig microsoftOauth2ProviderConfig
    *
    * @return $this
    */
    public function setMicrosoftOauth2ProviderConfig($microsoftOauth2ProviderConfig)
    {
        $this->container['microsoftOauth2ProviderConfig'] = $microsoftOauth2ProviderConfig;
        return $this;
    }

    /**
    * Gets googleOauth2ProviderConfig
    *  googleOauth2ProviderConfig
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\GoogleOauth2ProviderConfigOutput|null
    */
    public function getGoogleOauth2ProviderConfig()
    {
        return $this->container['googleOauth2ProviderConfig'];
    }

    /**
    * Sets googleOauth2ProviderConfig
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\GoogleOauth2ProviderConfigOutput|null $googleOauth2ProviderConfig googleOauth2ProviderConfig
    *
    * @return $this
    */
    public function setGoogleOauth2ProviderConfig($googleOauth2ProviderConfig)
    {
        $this->container['googleOauth2ProviderConfig'] = $googleOauth2ProviderConfig;
        return $this;
    }

    /**
    * Gets githubOauth2ProviderConfig
    *  githubOauth2ProviderConfig
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\GithubOauth2ProviderConfigOutput|null
    */
    public function getGithubOauth2ProviderConfig()
    {
        return $this->container['githubOauth2ProviderConfig'];
    }

    /**
    * Sets githubOauth2ProviderConfig
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\GithubOauth2ProviderConfigOutput|null $githubOauth2ProviderConfig githubOauth2ProviderConfig
    *
    * @return $this
    */
    public function setGithubOauth2ProviderConfig($githubOauth2ProviderConfig)
    {
        $this->container['githubOauth2ProviderConfig'] = $githubOauth2ProviderConfig;
        return $this;
    }

    /**
    * Gets customOauth2ProviderConfig
    *  customOauth2ProviderConfig
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\CustomOauth2ProviderConfigOutput|null
    */
    public function getCustomOauth2ProviderConfig()
    {
        return $this->container['customOauth2ProviderConfig'];
    }

    /**
    * Sets customOauth2ProviderConfig
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\CustomOauth2ProviderConfigOutput|null $customOauth2ProviderConfig customOauth2ProviderConfig
    *
    * @return $this
    */
    public function setCustomOauth2ProviderConfig($customOauth2ProviderConfig)
    {
        $this->container['customOauth2ProviderConfig'] = $customOauth2ProviderConfig;
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

