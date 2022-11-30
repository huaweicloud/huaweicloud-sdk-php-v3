<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AliasTarget implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'alias_target';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源服务类型，支持别名记录的服务。取值：  cloudsite：云速建站 waf：Web应用防火墙
    * resourceDomainName  对应服务下的域名，由各服务提供。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceDomainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源服务类型，支持别名记录的服务。取值：  cloudsite：云速建站 waf：Web应用防火墙
    * resourceDomainName  对应服务下的域名，由各服务提供。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceDomainName' => null
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
    * resourceType  资源服务类型，支持别名记录的服务。取值：  cloudsite：云速建站 waf：Web应用防火墙
    * resourceDomainName  对应服务下的域名，由各服务提供。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceDomainName' => 'resource_domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源服务类型，支持别名记录的服务。取值：  cloudsite：云速建站 waf：Web应用防火墙
    * resourceDomainName  对应服务下的域名，由各服务提供。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceDomainName' => 'setResourceDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源服务类型，支持别名记录的服务。取值：  cloudsite：云速建站 waf：Web应用防火墙
    * resourceDomainName  对应服务下的域名，由各服务提供。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceDomainName' => 'getResourceDomainName'
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceDomainName'] = isset($data['resourceDomainName']) ? $data['resourceDomainName'] : null;
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
    * Gets resourceType
    *  资源服务类型，支持别名记录的服务。取值：  cloudsite：云速建站 waf：Web应用防火墙
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源服务类型，支持别名记录的服务。取值：  cloudsite：云速建站 waf：Web应用防火墙
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceDomainName
    *  对应服务下的域名，由各服务提供。
    *
    * @return string|null
    */
    public function getResourceDomainName()
    {
        return $this->container['resourceDomainName'];
    }

    /**
    * Sets resourceDomainName
    *
    * @param string|null $resourceDomainName 对应服务下的域名，由各服务提供。
    *
    * @return $this
    */
    public function setResourceDomainName($resourceDomainName)
    {
        $this->container['resourceDomainName'] = $resourceDomainName;
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

