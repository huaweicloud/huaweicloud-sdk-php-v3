<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  region
    * quarkVpcEndpoint  quark后端地址
    * projectId  项目ID
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * serviceType  服务类型
    * serviceId  服务id
    * publicBorderGroup  中心站点or边缘站点
    * instanceSite  绑定实例所在的站点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'quarkVpcEndpoint' => 'string',
            'projectId' => 'string',
            'instanceType' => 'string',
            'instanceId' => 'string',
            'serviceType' => 'string',
            'serviceId' => 'string',
            'publicBorderGroup' => 'string',
            'instanceSite' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  region
    * quarkVpcEndpoint  quark后端地址
    * projectId  项目ID
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * serviceType  服务类型
    * serviceId  服务id
    * publicBorderGroup  中心站点or边缘站点
    * instanceSite  绑定实例所在的站点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'quarkVpcEndpoint' => null,
        'projectId' => null,
        'instanceType' => null,
        'instanceId' => null,
        'serviceType' => null,
        'serviceId' => null,
        'publicBorderGroup' => null,
        'instanceSite' => null
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
    * region  region
    * quarkVpcEndpoint  quark后端地址
    * projectId  项目ID
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * serviceType  服务类型
    * serviceId  服务id
    * publicBorderGroup  中心站点or边缘站点
    * instanceSite  绑定实例所在的站点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'quarkVpcEndpoint' => 'quarkVpcEndpoint',
            'projectId' => 'project_id',
            'instanceType' => 'instance_type',
            'instanceId' => 'instance_id',
            'serviceType' => 'service_type',
            'serviceId' => 'service_id',
            'publicBorderGroup' => 'public_border_group',
            'instanceSite' => 'instance_site'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  region
    * quarkVpcEndpoint  quark后端地址
    * projectId  项目ID
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * serviceType  服务类型
    * serviceId  服务id
    * publicBorderGroup  中心站点or边缘站点
    * instanceSite  绑定实例所在的站点
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'quarkVpcEndpoint' => 'setQuarkVpcEndpoint',
            'projectId' => 'setProjectId',
            'instanceType' => 'setInstanceType',
            'instanceId' => 'setInstanceId',
            'serviceType' => 'setServiceType',
            'serviceId' => 'setServiceId',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'instanceSite' => 'setInstanceSite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  region
    * quarkVpcEndpoint  quark后端地址
    * projectId  项目ID
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * serviceType  服务类型
    * serviceId  服务id
    * publicBorderGroup  中心站点or边缘站点
    * instanceSite  绑定实例所在的站点
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'quarkVpcEndpoint' => 'getQuarkVpcEndpoint',
            'projectId' => 'getProjectId',
            'instanceType' => 'getInstanceType',
            'instanceId' => 'getInstanceId',
            'serviceType' => 'getServiceType',
            'serviceId' => 'getServiceId',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'instanceSite' => 'getInstanceSite'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['quarkVpcEndpoint'] = isset($data['quarkVpcEndpoint']) ? $data['quarkVpcEndpoint'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['instanceSite'] = isset($data['instanceSite']) ? $data['instanceSite'] : null;
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
    * Gets region
    *  region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets quarkVpcEndpoint
    *  quark后端地址
    *
    * @return string|null
    */
    public function getQuarkVpcEndpoint()
    {
        return $this->container['quarkVpcEndpoint'];
    }

    /**
    * Sets quarkVpcEndpoint
    *
    * @param string|null $quarkVpcEndpoint quark后端地址
    *
    * @return $this
    */
    public function setQuarkVpcEndpoint($quarkVpcEndpoint)
    {
        $this->container['quarkVpcEndpoint'] = $quarkVpcEndpoint;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceType
    *  支持绑定的实例类型
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 支持绑定的实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务id
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  中心站点or边缘站点
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 中心站点or边缘站点
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets instanceSite
    *  绑定实例所在的站点
    *
    * @return string|null
    */
    public function getInstanceSite()
    {
        return $this->container['instanceSite'];
    }

    /**
    * Sets instanceSite
    *
    * @param string|null $instanceSite 绑定实例所在的站点
    *
    * @return $this
    */
    public function setInstanceSite($instanceSite)
    {
        $this->container['instanceSite'] = $instanceSite;
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

