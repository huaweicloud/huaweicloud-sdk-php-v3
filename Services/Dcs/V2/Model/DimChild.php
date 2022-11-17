<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimChild implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimChild';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimName  维度名称，当前支持维度有dcs_instance_id、dcs_cluster_redis_node、 dcs_cluster_proxy_node和dcs_memcached_instance_id。
    * dimRoute  维度的路由，结构为主维度名称,当前维度名称，比如： dim_name字段为dcs_cluster_redis_node时，这个字段的值为dcs_instance_id,dcs_cluster_redis_node。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimName' => 'string',
            'dimRoute' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimName  维度名称，当前支持维度有dcs_instance_id、dcs_cluster_redis_node、 dcs_cluster_proxy_node和dcs_memcached_instance_id。
    * dimRoute  维度的路由，结构为主维度名称,当前维度名称，比如： dim_name字段为dcs_cluster_redis_node时，这个字段的值为dcs_instance_id,dcs_cluster_redis_node。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimName' => null,
        'dimRoute' => null
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
    * dimName  维度名称，当前支持维度有dcs_instance_id、dcs_cluster_redis_node、 dcs_cluster_proxy_node和dcs_memcached_instance_id。
    * dimRoute  维度的路由，结构为主维度名称,当前维度名称，比如： dim_name字段为dcs_cluster_redis_node时，这个字段的值为dcs_instance_id,dcs_cluster_redis_node。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimName' => 'dim_name',
            'dimRoute' => 'dim_route'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimName  维度名称，当前支持维度有dcs_instance_id、dcs_cluster_redis_node、 dcs_cluster_proxy_node和dcs_memcached_instance_id。
    * dimRoute  维度的路由，结构为主维度名称,当前维度名称，比如： dim_name字段为dcs_cluster_redis_node时，这个字段的值为dcs_instance_id,dcs_cluster_redis_node。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimName' => 'setDimName',
            'dimRoute' => 'setDimRoute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimName  维度名称，当前支持维度有dcs_instance_id、dcs_cluster_redis_node、 dcs_cluster_proxy_node和dcs_memcached_instance_id。
    * dimRoute  维度的路由，结构为主维度名称,当前维度名称，比如： dim_name字段为dcs_cluster_redis_node时，这个字段的值为dcs_instance_id,dcs_cluster_redis_node。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimName' => 'getDimName',
            'dimRoute' => 'getDimRoute'
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
        $this->container['dimName'] = isset($data['dimName']) ? $data['dimName'] : null;
        $this->container['dimRoute'] = isset($data['dimRoute']) ? $data['dimRoute'] : null;
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
    * Gets dimName
    *  维度名称，当前支持维度有dcs_instance_id、dcs_cluster_redis_node、 dcs_cluster_proxy_node和dcs_memcached_instance_id。
    *
    * @return string|null
    */
    public function getDimName()
    {
        return $this->container['dimName'];
    }

    /**
    * Sets dimName
    *
    * @param string|null $dimName 维度名称，当前支持维度有dcs_instance_id、dcs_cluster_redis_node、 dcs_cluster_proxy_node和dcs_memcached_instance_id。
    *
    * @return $this
    */
    public function setDimName($dimName)
    {
        $this->container['dimName'] = $dimName;
        return $this;
    }

    /**
    * Gets dimRoute
    *  维度的路由，结构为主维度名称,当前维度名称，比如： dim_name字段为dcs_cluster_redis_node时，这个字段的值为dcs_instance_id,dcs_cluster_redis_node。
    *
    * @return string|null
    */
    public function getDimRoute()
    {
        return $this->container['dimRoute'];
    }

    /**
    * Sets dimRoute
    *
    * @param string|null $dimRoute 维度的路由，结构为主维度名称,当前维度名称，比如： dim_name字段为dcs_cluster_redis_node时，这个字段的值为dcs_instance_id,dcs_cluster_redis_node。
    *
    * @return $this
    */
    public function setDimRoute($dimRoute)
    {
        $this->container['dimRoute'] = $dimRoute;
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

