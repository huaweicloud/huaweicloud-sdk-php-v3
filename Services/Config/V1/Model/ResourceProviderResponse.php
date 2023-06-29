<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceProviderResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceProviderResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provider  云服务名称
    * displayName  云服务显示名称，可以通过请求Header中的'X-Language'设置语言
    * categoryDisplayName  云服务类别显示名称，可以通过请求Header中的'X-Language'设置语言
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provider' => 'string',
            'displayName' => 'string',
            'categoryDisplayName' => 'string',
            'resourceTypes' => '\HuaweiCloud\SDK\Config\V1\Model\ResourceTypeResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provider  云服务名称
    * displayName  云服务显示名称，可以通过请求Header中的'X-Language'设置语言
    * categoryDisplayName  云服务类别显示名称，可以通过请求Header中的'X-Language'设置语言
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provider' => null,
        'displayName' => null,
        'categoryDisplayName' => null,
        'resourceTypes' => null
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
    * provider  云服务名称
    * displayName  云服务显示名称，可以通过请求Header中的'X-Language'设置语言
    * categoryDisplayName  云服务类别显示名称，可以通过请求Header中的'X-Language'设置语言
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provider' => 'provider',
            'displayName' => 'display_name',
            'categoryDisplayName' => 'category_display_name',
            'resourceTypes' => 'resource_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provider  云服务名称
    * displayName  云服务显示名称，可以通过请求Header中的'X-Language'设置语言
    * categoryDisplayName  云服务类别显示名称，可以通过请求Header中的'X-Language'设置语言
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $setters = [
            'provider' => 'setProvider',
            'displayName' => 'setDisplayName',
            'categoryDisplayName' => 'setCategoryDisplayName',
            'resourceTypes' => 'setResourceTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provider  云服务名称
    * displayName  云服务显示名称，可以通过请求Header中的'X-Language'设置语言
    * categoryDisplayName  云服务类别显示名称，可以通过请求Header中的'X-Language'设置语言
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $getters = [
            'provider' => 'getProvider',
            'displayName' => 'getDisplayName',
            'categoryDisplayName' => 'getCategoryDisplayName',
            'resourceTypes' => 'getResourceTypes'
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
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['categoryDisplayName'] = isset($data['categoryDisplayName']) ? $data['categoryDisplayName'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
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
    * Gets provider
    *  云服务名称
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 云服务名称
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets displayName
    *  云服务显示名称，可以通过请求Header中的'X-Language'设置语言
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 云服务显示名称，可以通过请求Header中的'X-Language'设置语言
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets categoryDisplayName
    *  云服务类别显示名称，可以通过请求Header中的'X-Language'设置语言
    *
    * @return string|null
    */
    public function getCategoryDisplayName()
    {
        return $this->container['categoryDisplayName'];
    }

    /**
    * Sets categoryDisplayName
    *
    * @param string|null $categoryDisplayName 云服务类别显示名称，可以通过请求Header中的'X-Language'设置语言
    *
    * @return $this
    */
    public function setCategoryDisplayName($categoryDisplayName)
    {
        $this->container['categoryDisplayName'] = $categoryDisplayName;
        return $this;
    }

    /**
    * Gets resourceTypes
    *  资源类型列表
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ResourceTypeResponse[]|null
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ResourceTypeResponse[]|null $resourceTypes 资源类型列表
    *
    * @return $this
    */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;
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

