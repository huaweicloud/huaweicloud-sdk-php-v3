<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWorkloadIdentityReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWorkloadIdentityReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allowedResourceOauth2ReturnUrls' => 'string[]',
            'authorizerConfiguration' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerConfiguration',
            'tags' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allowedResourceOauth2ReturnUrls' => null,
        'authorizerConfiguration' => null,
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
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allowedResourceOauth2ReturnUrls' => 'allowed_resource_oauth2_return_urls',
            'authorizerConfiguration' => 'authorizer_configuration',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'allowedResourceOauth2ReturnUrls' => 'setAllowedResourceOauth2ReturnUrls',
            'authorizerConfiguration' => 'setAuthorizerConfiguration',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'allowedResourceOauth2ReturnUrls' => 'getAllowedResourceOauth2ReturnUrls',
            'authorizerConfiguration' => 'getAuthorizerConfiguration',
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
        $this->container['allowedResourceOauth2ReturnUrls'] = isset($data['allowedResourceOauth2ReturnUrls']) ? $data['allowedResourceOauth2ReturnUrls'] : null;
        $this->container['authorizerConfiguration'] = isset($data['authorizerConfiguration']) ? $data['authorizerConfiguration'] : null;
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
    * Gets allowedResourceOauth2ReturnUrls
    *  allowedResourceOauth2ReturnUrls
    *
    * @return string[]|null
    */
    public function getAllowedResourceOauth2ReturnUrls()
    {
        return $this->container['allowedResourceOauth2ReturnUrls'];
    }

    /**
    * Sets allowedResourceOauth2ReturnUrls
    *
    * @param string[]|null $allowedResourceOauth2ReturnUrls allowedResourceOauth2ReturnUrls
    *
    * @return $this
    */
    public function setAllowedResourceOauth2ReturnUrls($allowedResourceOauth2ReturnUrls)
    {
        $this->container['allowedResourceOauth2ReturnUrls'] = $allowedResourceOauth2ReturnUrls;
        return $this;
    }

    /**
    * Gets authorizerConfiguration
    *  authorizerConfiguration
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerConfiguration|null
    */
    public function getAuthorizerConfiguration()
    {
        return $this->container['authorizerConfiguration'];
    }

    /**
    * Sets authorizerConfiguration
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerConfiguration|null $authorizerConfiguration authorizerConfiguration
    *
    * @return $this
    */
    public function setAuthorizerConfiguration($authorizerConfiguration)
    {
        $this->container['authorizerConfiguration'] = $authorizerConfiguration;
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

