<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadFederationKubeconfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadFederationKubeconfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  API类型，固定值“Config”，该值不可修改
    * apiVersion  API版本，固定值“v1”，该值不可修改
    * clusters  集群列表
    * users  存放了指定用户的一些证书信息和ClientKey信息
    * contexts  上下文列表
    * currentContext  当前上下文
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'apiVersion' => 'string',
            'clusters' => '\HuaweiCloud\SDK\Ucs\V1\Model\NamedCluster[]',
            'users' => '\HuaweiCloud\SDK\Ucs\V1\Model\NamedAuthInfo[]',
            'contexts' => '\HuaweiCloud\SDK\Ucs\V1\Model\NamedContext[]',
            'currentContext' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  API类型，固定值“Config”，该值不可修改
    * apiVersion  API版本，固定值“v1”，该值不可修改
    * clusters  集群列表
    * users  存放了指定用户的一些证书信息和ClientKey信息
    * contexts  上下文列表
    * currentContext  当前上下文
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'apiVersion' => null,
        'clusters' => null,
        'users' => null,
        'contexts' => null,
        'currentContext' => null
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
    * kind  API类型，固定值“Config”，该值不可修改
    * apiVersion  API版本，固定值“v1”，该值不可修改
    * clusters  集群列表
    * users  存放了指定用户的一些证书信息和ClientKey信息
    * contexts  上下文列表
    * currentContext  当前上下文
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'apiVersion' => 'apiVersion',
            'clusters' => 'clusters',
            'users' => 'users',
            'contexts' => 'contexts',
            'currentContext' => 'current-context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  API类型，固定值“Config”，该值不可修改
    * apiVersion  API版本，固定值“v1”，该值不可修改
    * clusters  集群列表
    * users  存放了指定用户的一些证书信息和ClientKey信息
    * contexts  上下文列表
    * currentContext  当前上下文
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'apiVersion' => 'setApiVersion',
            'clusters' => 'setClusters',
            'users' => 'setUsers',
            'contexts' => 'setContexts',
            'currentContext' => 'setCurrentContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  API类型，固定值“Config”，该值不可修改
    * apiVersion  API版本，固定值“v1”，该值不可修改
    * clusters  集群列表
    * users  存放了指定用户的一些证书信息和ClientKey信息
    * contexts  上下文列表
    * currentContext  当前上下文
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'apiVersion' => 'getApiVersion',
            'clusters' => 'getClusters',
            'users' => 'getUsers',
            'contexts' => 'getContexts',
            'currentContext' => 'getCurrentContext'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['contexts'] = isset($data['contexts']) ? $data['contexts'] : null;
        $this->container['currentContext'] = isset($data['currentContext']) ? $data['currentContext'] : null;
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
    * Gets kind
    *  API类型，固定值“Config”，该值不可修改
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind API类型，固定值“Config”，该值不可修改
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets apiVersion
    *  API版本，固定值“v1”，该值不可修改
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion API版本，固定值“v1”，该值不可修改
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets clusters
    *  集群列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\NamedCluster[]|null
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\NamedCluster[]|null $clusters 集群列表
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
        return $this;
    }

    /**
    * Gets users
    *  存放了指定用户的一些证书信息和ClientKey信息
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\NamedAuthInfo[]|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\NamedAuthInfo[]|null $users 存放了指定用户的一些证书信息和ClientKey信息
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets contexts
    *  上下文列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\NamedContext[]|null
    */
    public function getContexts()
    {
        return $this->container['contexts'];
    }

    /**
    * Sets contexts
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\NamedContext[]|null $contexts 上下文列表
    *
    * @return $this
    */
    public function setContexts($contexts)
    {
        $this->container['contexts'] = $contexts;
        return $this;
    }

    /**
    * Gets currentContext
    *  当前上下文
    *
    * @return string|null
    */
    public function getCurrentContext()
    {
        return $this->container['currentContext'];
    }

    /**
    * Sets currentContext
    *
    * @param string|null $currentContext 当前上下文
    *
    * @return $this
    */
    public function setCurrentContext($currentContext)
    {
        $this->container['currentContext'] = $currentContext;
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

