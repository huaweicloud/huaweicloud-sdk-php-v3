<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkloadIdentityReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkloadIdentityReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  The name of the workload identity.
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'allowedResourceOauth2ReturnUrls' => 'string[]',
            'authorizerType' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerType',
            'authorizerConfiguration' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerConfiguration',
            'tags' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  The name of the workload identity.
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'allowedResourceOauth2ReturnUrls' => null,
        'authorizerType' => null,
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
    * name  The name of the workload identity.
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'allowedResourceOauth2ReturnUrls' => 'allowed_resource_oauth2_return_urls',
            'authorizerType' => 'authorizer_type',
            'authorizerConfiguration' => 'authorizer_configuration',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  The name of the workload identity.
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'allowedResourceOauth2ReturnUrls' => 'setAllowedResourceOauth2ReturnUrls',
            'authorizerType' => 'setAuthorizerType',
            'authorizerConfiguration' => 'setAuthorizerConfiguration',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  The name of the workload identity.
    * allowedResourceOauth2ReturnUrls  allowedResourceOauth2ReturnUrls
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'allowedResourceOauth2ReturnUrls' => 'getAllowedResourceOauth2ReturnUrls',
            'authorizerType' => 'getAuthorizerType',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['allowedResourceOauth2ReturnUrls'] = isset($data['allowedResourceOauth2ReturnUrls']) ? $data['allowedResourceOauth2ReturnUrls'] : null;
        $this->container['authorizerType'] = isset($data['authorizerType']) ? $data['authorizerType'] : null;
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
        if ($this->container['authorizerType'] === null) {
            $invalidProperties[] = "'authorizerType' can't be null";
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
    *  The name of the workload identity.
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
    * @param string $name The name of the workload identity.
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
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
    * Gets authorizerType
    *  authorizerType
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerType
    */
    public function getAuthorizerType()
    {
        return $this->container['authorizerType'];
    }

    /**
    * Sets authorizerType
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerType $authorizerType authorizerType
    *
    * @return $this
    */
    public function setAuthorizerType($authorizerType)
    {
        $this->container['authorizerType'] = $authorizerType;
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

