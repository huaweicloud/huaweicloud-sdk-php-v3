<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateInstanceGlobalEipSegmentRequestBodyGlobalEipSegment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateInstanceGlobalEipSegmentRequestBody_global_eip_segment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  region
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * projectId  项目ID，获取项目ID请参见[获取项目ID](https://support.huaweicloud.com/api-vpc/vpc_api_0011.html)
    * serviceId  服务id
    * serviceType  服务类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'instanceType' => 'string',
            'instanceId' => 'string',
            'projectId' => 'string',
            'serviceId' => 'string',
            'serviceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  region
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * projectId  项目ID，获取项目ID请参见[获取项目ID](https://support.huaweicloud.com/api-vpc/vpc_api_0011.html)
    * serviceId  服务id
    * serviceType  服务类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'instanceType' => null,
        'instanceId' => null,
        'projectId' => null,
        'serviceId' => null,
        'serviceType' => null
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
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * projectId  项目ID，获取项目ID请参见[获取项目ID](https://support.huaweicloud.com/api-vpc/vpc_api_0011.html)
    * serviceId  服务id
    * serviceType  服务类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'instanceType' => 'instance_type',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'serviceId' => 'service_id',
            'serviceType' => 'service_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  region
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * projectId  项目ID，获取项目ID请参见[获取项目ID](https://support.huaweicloud.com/api-vpc/vpc_api_0011.html)
    * serviceId  服务id
    * serviceType  服务类型
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'instanceType' => 'setInstanceType',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'serviceId' => 'setServiceId',
            'serviceType' => 'setServiceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  region
    * instanceType  支持绑定的实例类型
    * instanceId  实例ID
    * projectId  项目ID，获取项目ID请参见[获取项目ID](https://support.huaweicloud.com/api-vpc/vpc_api_0011.html)
    * serviceId  服务id
    * serviceType  服务类型
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'instanceType' => 'getInstanceType',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'serviceId' => 'getServiceId',
            'serviceType' => 'getServiceType'
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
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
            if ((mb_strlen($this->container['instanceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Z0-9_-]+$/", $this->container['instanceType'])) {
                $invalidProperties[] = "invalid value for 'instanceType', must be conform to the pattern /^[A-Z0-9_-]+$/.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[a-z0-9]{32}$/.";
            }
            if (!is_null($this->container['serviceId']) && (mb_strlen($this->container['serviceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['serviceId']) && (mb_strlen($this->container['serviceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 1.";
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
    * Gets region
    *  region
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets instanceType
    *  支持绑定的实例类型
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 支持绑定的实例类型
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
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，获取项目ID请参见[获取项目ID](https://support.huaweicloud.com/api-vpc/vpc_api_0011.html)
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，获取项目ID请参见[获取项目ID](https://support.huaweicloud.com/api-vpc/vpc_api_0011.html)
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

