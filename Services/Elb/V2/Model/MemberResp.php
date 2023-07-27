<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  后端云服务器ID
    * projectId  后端云服务器所在的项目ID。
    * tenantId  后端云服务器所在的项目ID。
    * name  后端云服务器名称。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * protocolPort  后端端口和协议号
    * subnetId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。暂不支持IPv6。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_id字段的子网网段中。例如：192.168.3.11。只能指定为主网卡的IP。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。权重为0的后端不再接受新的请求。当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    * operatingStatus  后端云服务器的健康状态，取值：  ONLINE：健康检查在线，后端服务正常。 OFFLINE：健康检查离线，后端服务异常，负载均衡器不再向异常的后端发送流量。 NO_MONITOR：无检查检查。未创建检查检查或健康检查的admin_state_up字段为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'adminStateUp' => 'bool',
            'protocolPort' => 'int',
            'subnetId' => 'string',
            'address' => 'string',
            'weight' => 'int',
            'operatingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  后端云服务器ID
    * projectId  后端云服务器所在的项目ID。
    * tenantId  后端云服务器所在的项目ID。
    * name  后端云服务器名称。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * protocolPort  后端端口和协议号
    * subnetId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。暂不支持IPv6。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_id字段的子网网段中。例如：192.168.3.11。只能指定为主网卡的IP。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。权重为0的后端不再接受新的请求。当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    * operatingStatus  后端云服务器的健康状态，取值：  ONLINE：健康检查在线，后端服务正常。 OFFLINE：健康检查离线，后端服务异常，负载均衡器不再向异常的后端发送流量。 NO_MONITOR：无检查检查。未创建检查检查或健康检查的admin_state_up字段为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'tenantId' => null,
        'name' => null,
        'adminStateUp' => null,
        'protocolPort' => 'int32',
        'subnetId' => null,
        'address' => null,
        'weight' => 'int32',
        'operatingStatus' => null
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
    * id  后端云服务器ID
    * projectId  后端云服务器所在的项目ID。
    * tenantId  后端云服务器所在的项目ID。
    * name  后端云服务器名称。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * protocolPort  后端端口和协议号
    * subnetId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。暂不支持IPv6。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_id字段的子网网段中。例如：192.168.3.11。只能指定为主网卡的IP。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。权重为0的后端不再接受新的请求。当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    * operatingStatus  后端云服务器的健康状态，取值：  ONLINE：健康检查在线，后端服务正常。 OFFLINE：健康检查离线，后端服务异常，负载均衡器不再向异常的后端发送流量。 NO_MONITOR：无检查检查。未创建检查检查或健康检查的admin_state_up字段为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'protocolPort' => 'protocol_port',
            'subnetId' => 'subnet_id',
            'address' => 'address',
            'weight' => 'weight',
            'operatingStatus' => 'operating_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  后端云服务器ID
    * projectId  后端云服务器所在的项目ID。
    * tenantId  后端云服务器所在的项目ID。
    * name  后端云服务器名称。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * protocolPort  后端端口和协议号
    * subnetId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。暂不支持IPv6。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_id字段的子网网段中。例如：192.168.3.11。只能指定为主网卡的IP。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。权重为0的后端不再接受新的请求。当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    * operatingStatus  后端云服务器的健康状态，取值：  ONLINE：健康检查在线，后端服务正常。 OFFLINE：健康检查离线，后端服务异常，负载均衡器不再向异常的后端发送流量。 NO_MONITOR：无检查检查。未创建检查检查或健康检查的admin_state_up字段为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'protocolPort' => 'setProtocolPort',
            'subnetId' => 'setSubnetId',
            'address' => 'setAddress',
            'weight' => 'setWeight',
            'operatingStatus' => 'setOperatingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  后端云服务器ID
    * projectId  后端云服务器所在的项目ID。
    * tenantId  后端云服务器所在的项目ID。
    * name  后端云服务器名称。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * protocolPort  后端端口和协议号
    * subnetId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。暂不支持IPv6。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_id字段的子网网段中。例如：192.168.3.11。只能指定为主网卡的IP。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。权重为0的后端不再接受新的请求。当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    * operatingStatus  后端云服务器的健康状态，取值：  ONLINE：健康检查在线，后端服务正常。 OFFLINE：健康检查离线，后端服务异常，负载均衡器不再向异常的后端发送流量。 NO_MONITOR：无检查检查。未创建检查检查或健康检查的admin_state_up字段为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'protocolPort' => 'getProtocolPort',
            'subnetId' => 'getSubnetId',
            'address' => 'getAddress',
            'weight' => 'getWeight',
            'operatingStatus' => 'getOperatingStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['protocolPort'] === null) {
            $invalidProperties[] = "'protocolPort' can't be null";
        }
            if (($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['protocolPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 1.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
            if (($this->container['weight'] > 100)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 100.";
            }
            if (($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
            }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
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
    * Gets id
    *  后端云服务器ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 后端云服务器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  后端云服务器所在的项目ID。
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
    * @param string $projectId 后端云服务器所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tenantId
    *  后端云服务器所在的项目ID。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 后端云服务器所在的项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  后端云服务器名称。
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
    * @param string $name 后端云服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端端口和协议号
    *
    * @return int
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int $protocolPort 后端端口和协议号
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets subnetId
    *  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。暂不支持IPv6。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。暂不支持IPv6。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets address
    *  后端云服务器的对应的IP地址，这个IP必须在subnet_id字段的子网网段中。例如：192.168.3.11。只能指定为主网卡的IP。
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 后端云服务器的对应的IP地址，这个IP必须在subnet_id字段的子网网段中。例如：192.168.3.11。只能指定为主网卡的IP。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets weight
    *  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。权重为0的后端不再接受新的请求。当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @return int
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int $weight 后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。权重为0的后端不再接受新的请求。当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  后端云服务器的健康状态，取值：  ONLINE：健康检查在线，后端服务正常。 OFFLINE：健康检查离线，后端服务异常，负载均衡器不再向异常的后端发送流量。 NO_MONITOR：无检查检查。未创建检查检查或健康检查的admin_state_up字段为false。
    *
    * @return string
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string $operatingStatus 后端云服务器的健康状态，取值：  ONLINE：健康检查在线，后端服务正常。 OFFLINE：健康检查离线，后端服务异常，负载均衡器不再向异常的后端发送流量。 NO_MONITOR：无检查检查。未创建检查检查或健康检查的admin_state_up字段为false。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
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

