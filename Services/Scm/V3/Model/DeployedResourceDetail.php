<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployedResourceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployedResourceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * service  证书已部署资源服务名称。 - WAF：证书关联Web应用防火墙的资源。 - CDN：证书关联内容分发网络的资源。 - ELB：证书关联弹性负载均衡（经典型）的资源。
    * resourceNum  证书在当前服务已部署资源数量。
    * resourceLocation  全局服务或Region级服务。
    * regionResources  局点资源列表，详情请参见RegionResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'service' => 'string',
            'resourceNum' => 'int',
            'resourceLocation' => 'string',
            'regionResources' => '\HuaweiCloud\SDK\Scm\V3\Model\RegionResourceDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * service  证书已部署资源服务名称。 - WAF：证书关联Web应用防火墙的资源。 - CDN：证书关联内容分发网络的资源。 - ELB：证书关联弹性负载均衡（经典型）的资源。
    * resourceNum  证书在当前服务已部署资源数量。
    * resourceLocation  全局服务或Region级服务。
    * regionResources  局点资源列表，详情请参见RegionResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'service' => null,
        'resourceNum' => null,
        'resourceLocation' => null,
        'regionResources' => null
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
    * service  证书已部署资源服务名称。 - WAF：证书关联Web应用防火墙的资源。 - CDN：证书关联内容分发网络的资源。 - ELB：证书关联弹性负载均衡（经典型）的资源。
    * resourceNum  证书在当前服务已部署资源数量。
    * resourceLocation  全局服务或Region级服务。
    * regionResources  局点资源列表，详情请参见RegionResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'service' => 'service',
            'resourceNum' => 'resource_num',
            'resourceLocation' => 'resource_location',
            'regionResources' => 'region_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * service  证书已部署资源服务名称。 - WAF：证书关联Web应用防火墙的资源。 - CDN：证书关联内容分发网络的资源。 - ELB：证书关联弹性负载均衡（经典型）的资源。
    * resourceNum  证书在当前服务已部署资源数量。
    * resourceLocation  全局服务或Region级服务。
    * regionResources  局点资源列表，详情请参见RegionResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'service' => 'setService',
            'resourceNum' => 'setResourceNum',
            'resourceLocation' => 'setResourceLocation',
            'regionResources' => 'setRegionResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * service  证书已部署资源服务名称。 - WAF：证书关联Web应用防火墙的资源。 - CDN：证书关联内容分发网络的资源。 - ELB：证书关联弹性负载均衡（经典型）的资源。
    * resourceNum  证书在当前服务已部署资源数量。
    * resourceLocation  全局服务或Region级服务。
    * regionResources  局点资源列表，详情请参见RegionResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'service' => 'getService',
            'resourceNum' => 'getResourceNum',
            'resourceLocation' => 'getResourceLocation',
            'regionResources' => 'getRegionResources'
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
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['resourceNum'] = isset($data['resourceNum']) ? $data['resourceNum'] : null;
        $this->container['resourceLocation'] = isset($data['resourceLocation']) ? $data['resourceLocation'] : null;
        $this->container['regionResources'] = isset($data['regionResources']) ? $data['regionResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
            if ((mb_strlen($this->container['service']) > 5)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be smaller than or equal to 5.";
            }
            if ((mb_strlen($this->container['service']) < 0)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceNum'] === null) {
            $invalidProperties[] = "'resourceNum' can't be null";
        }
            if (($this->container['resourceNum'] > 1000)) {
                $invalidProperties[] = "invalid value for 'resourceNum', must be smaller than or equal to 1000.";
            }
            if (($this->container['resourceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceNum', must be bigger than or equal to 0.";
            }
        if ($this->container['resourceLocation'] === null) {
            $invalidProperties[] = "'resourceLocation' can't be null";
        }
            if ((mb_strlen($this->container['resourceLocation']) > 63)) {
                $invalidProperties[] = "invalid value for 'resourceLocation', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['resourceLocation']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceLocation', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['regionResources'] === null) {
            $invalidProperties[] = "'regionResources' can't be null";
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
    * Gets service
    *  证书已部署资源服务名称。 - WAF：证书关联Web应用防火墙的资源。 - CDN：证书关联内容分发网络的资源。 - ELB：证书关联弹性负载均衡（经典型）的资源。
    *
    * @return string
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string $service 证书已部署资源服务名称。 - WAF：证书关联Web应用防火墙的资源。 - CDN：证书关联内容分发网络的资源。 - ELB：证书关联弹性负载均衡（经典型）的资源。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets resourceNum
    *  证书在当前服务已部署资源数量。
    *
    * @return int
    */
    public function getResourceNum()
    {
        return $this->container['resourceNum'];
    }

    /**
    * Sets resourceNum
    *
    * @param int $resourceNum 证书在当前服务已部署资源数量。
    *
    * @return $this
    */
    public function setResourceNum($resourceNum)
    {
        $this->container['resourceNum'] = $resourceNum;
        return $this;
    }

    /**
    * Gets resourceLocation
    *  全局服务或Region级服务。
    *
    * @return string
    */
    public function getResourceLocation()
    {
        return $this->container['resourceLocation'];
    }

    /**
    * Sets resourceLocation
    *
    * @param string $resourceLocation 全局服务或Region级服务。
    *
    * @return $this
    */
    public function setResourceLocation($resourceLocation)
    {
        $this->container['resourceLocation'] = $resourceLocation;
        return $this;
    }

    /**
    * Gets regionResources
    *  局点资源列表，详情请参见RegionResourceDetail字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\RegionResourceDetail[]
    */
    public function getRegionResources()
    {
        return $this->container['regionResources'];
    }

    /**
    * Sets regionResources
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\RegionResourceDetail[] $regionResources 局点资源列表，详情请参见RegionResourceDetail字段数据结构说明。
    *
    * @return $this
    */
    public function setRegionResources($regionResources)
    {
        $this->container['regionResources'] = $regionResources;
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

