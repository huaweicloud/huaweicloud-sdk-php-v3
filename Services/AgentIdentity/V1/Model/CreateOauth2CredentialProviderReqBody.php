<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOauth2CredentialProviderReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOauth2CredentialProviderReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  The name of the credential provider.
    * credentialProviderVendor  credentialProviderVendor
    * oauth2ProviderConfigInput  oauth2ProviderConfigInput
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'credentialProviderVendor' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\CredentialProviderVendor',
            'oauth2ProviderConfigInput' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2ProviderConfigInput',
            'tags' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  The name of the credential provider.
    * credentialProviderVendor  credentialProviderVendor
    * oauth2ProviderConfigInput  oauth2ProviderConfigInput
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'credentialProviderVendor' => null,
        'oauth2ProviderConfigInput' => null,
        'tags' => null
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
    * name  The name of the credential provider.
    * credentialProviderVendor  credentialProviderVendor
    * oauth2ProviderConfigInput  oauth2ProviderConfigInput
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'credentialProviderVendor' => 'credential_provider_vendor',
            'oauth2ProviderConfigInput' => 'oauth2_provider_config_input',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  The name of the credential provider.
    * credentialProviderVendor  credentialProviderVendor
    * oauth2ProviderConfigInput  oauth2ProviderConfigInput
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'credentialProviderVendor' => 'setCredentialProviderVendor',
            'oauth2ProviderConfigInput' => 'setOauth2ProviderConfigInput',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  The name of the credential provider.
    * credentialProviderVendor  credentialProviderVendor
    * oauth2ProviderConfigInput  oauth2ProviderConfigInput
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'credentialProviderVendor' => 'getCredentialProviderVendor',
            'oauth2ProviderConfigInput' => 'getOauth2ProviderConfigInput',
            'tags' => 'getTags'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['credentialProviderVendor'] = isset($data['credentialProviderVendor']) ? $data['credentialProviderVendor'] : null;
        $this->container['oauth2ProviderConfigInput'] = isset($data['oauth2ProviderConfigInput']) ? $data['oauth2ProviderConfigInput'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 56)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 56.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,56}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_-]{1,56}$/.";
            }
        if ($this->container['credentialProviderVendor'] === null) {
            $invalidProperties[] = "'credentialProviderVendor' can't be null";
        }
        if ($this->container['oauth2ProviderConfigInput'] === null) {
            $invalidProperties[] = "'oauth2ProviderConfigInput' can't be null";
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
    * Gets name
    *  The name of the credential provider.
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name The name of the credential provider.
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets credentialProviderVendor
    *  credentialProviderVendor
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\CredentialProviderVendor
    */
    public function getCredentialProviderVendor()
    {
        return $this->container['credentialProviderVendor'];
    }

    /**
    * Sets credentialProviderVendor
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\CredentialProviderVendor $credentialProviderVendor credentialProviderVendor
    *
    * @return $this
    */
    public function setCredentialProviderVendor($credentialProviderVendor)
    {
        $this->container['credentialProviderVendor'] = $credentialProviderVendor;
        return $this;
    }

    /**
    * Gets oauth2ProviderConfigInput
    *  oauth2ProviderConfigInput
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2ProviderConfigInput
    */
    public function getOauth2ProviderConfigInput()
    {
        return $this->container['oauth2ProviderConfigInput'];
    }

    /**
    * Sets oauth2ProviderConfigInput
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2ProviderConfigInput $oauth2ProviderConfigInput oauth2ProviderConfigInput
    *
    * @return $this
    */
    public function setOauth2ProviderConfigInput($oauth2ProviderConfigInput)
    {
        $this->container['oauth2ProviderConfigInput'] = $oauth2ProviderConfigInput;
        return $this;
    }

    /**
    * Gets tags
    *  自定义标签列表。
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]|null $tags 自定义标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

