<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDeployedResourcesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDeployedResourcesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateIds  证书ID列表。
    * serviceNames  服务名称列表。 - WAF：查询证书关联Web应用防火墙的资源。 - CDN：查询证书关联内容分发网络的资源。 - ELB：查询证书关联弹性负载均衡（经典型）的资源。 - ALL：查询证书以上四种服务的资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateIds' => 'string[]',
            'serviceNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateIds  证书ID列表。
    * serviceNames  服务名称列表。 - WAF：查询证书关联Web应用防火墙的资源。 - CDN：查询证书关联内容分发网络的资源。 - ELB：查询证书关联弹性负载均衡（经典型）的资源。 - ALL：查询证书以上四种服务的资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateIds' => null,
        'serviceNames' => null
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
    * certificateIds  证书ID列表。
    * serviceNames  服务名称列表。 - WAF：查询证书关联Web应用防火墙的资源。 - CDN：查询证书关联内容分发网络的资源。 - ELB：查询证书关联弹性负载均衡（经典型）的资源。 - ALL：查询证书以上四种服务的资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateIds' => 'certificate_ids',
            'serviceNames' => 'service_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateIds  证书ID列表。
    * serviceNames  服务名称列表。 - WAF：查询证书关联Web应用防火墙的资源。 - CDN：查询证书关联内容分发网络的资源。 - ELB：查询证书关联弹性负载均衡（经典型）的资源。 - ALL：查询证书以上四种服务的资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateIds' => 'setCertificateIds',
            'serviceNames' => 'setServiceNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateIds  证书ID列表。
    * serviceNames  服务名称列表。 - WAF：查询证书关联Web应用防火墙的资源。 - CDN：查询证书关联内容分发网络的资源。 - ELB：查询证书关联弹性负载均衡（经典型）的资源。 - ALL：查询证书以上四种服务的资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateIds' => 'getCertificateIds',
            'serviceNames' => 'getServiceNames'
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
        $this->container['certificateIds'] = isset($data['certificateIds']) ? $data['certificateIds'] : null;
        $this->container['serviceNames'] = isset($data['serviceNames']) ? $data['serviceNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificateIds'] === null) {
            $invalidProperties[] = "'certificateIds' can't be null";
        }
        if ($this->container['serviceNames'] === null) {
            $invalidProperties[] = "'serviceNames' can't be null";
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
    * Gets certificateIds
    *  证书ID列表。
    *
    * @return string[]
    */
    public function getCertificateIds()
    {
        return $this->container['certificateIds'];
    }

    /**
    * Sets certificateIds
    *
    * @param string[] $certificateIds 证书ID列表。
    *
    * @return $this
    */
    public function setCertificateIds($certificateIds)
    {
        $this->container['certificateIds'] = $certificateIds;
        return $this;
    }

    /**
    * Gets serviceNames
    *  服务名称列表。 - WAF：查询证书关联Web应用防火墙的资源。 - CDN：查询证书关联内容分发网络的资源。 - ELB：查询证书关联弹性负载均衡（经典型）的资源。 - ALL：查询证书以上四种服务的资源。
    *
    * @return string[]
    */
    public function getServiceNames()
    {
        return $this->container['serviceNames'];
    }

    /**
    * Sets serviceNames
    *
    * @param string[] $serviceNames 服务名称列表。 - WAF：查询证书关联Web应用防火墙的资源。 - CDN：查询证书关联内容分发网络的资源。 - ELB：查询证书关联弹性负载均衡（经典型）的资源。 - ALL：查询证书以上四种服务的资源。
    *
    * @return $this
    */
    public function setServiceNames($serviceNames)
    {
        $this->container['serviceNames'] = $serviceNames;
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

