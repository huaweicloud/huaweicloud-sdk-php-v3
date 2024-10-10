<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMasterSlaveMemberOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMasterSlaveMemberOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。 该IP地址可以是私网IPv4或IPv6。但必须在subnet_cidr_id对应的子网网段中。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * adminStateUp  后端服务器的管理状态。  取值：true。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * name  后端服务器名称。
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * subnetCidrId  后端服务器所在的子网ID，可以是子网的IPv4子网ID或IPv6子网ID。  使用说明： - 该子网和关联的负载均衡器的子网必须在同一VPC下。 - 若所属LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。此时address必须为IPv4地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * role  后端服务器的主备状态。  取值范围： - master：主后端服务器。 - slave：备后端服务器。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => 'string',
            'adminStateUp' => 'bool',
            'name' => 'string',
            'protocolPort' => 'int',
            'subnetCidrId' => 'string',
            'role' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。 该IP地址可以是私网IPv4或IPv6。但必须在subnet_cidr_id对应的子网网段中。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * adminStateUp  后端服务器的管理状态。  取值：true。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * name  后端服务器名称。
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * subnetCidrId  后端服务器所在的子网ID，可以是子网的IPv4子网ID或IPv6子网ID。  使用说明： - 该子网和关联的负载均衡器的子网必须在同一VPC下。 - 若所属LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。此时address必须为IPv4地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * role  后端服务器的主备状态。  取值范围： - master：主后端服务器。 - slave：备后端服务器。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'adminStateUp' => null,
        'name' => null,
        'protocolPort' => 'int32',
        'subnetCidrId' => null,
        'role' => null
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
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。 该IP地址可以是私网IPv4或IPv6。但必须在subnet_cidr_id对应的子网网段中。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * adminStateUp  后端服务器的管理状态。  取值：true。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * name  后端服务器名称。
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * subnetCidrId  后端服务器所在的子网ID，可以是子网的IPv4子网ID或IPv6子网ID。  使用说明： - 该子网和关联的负载均衡器的子网必须在同一VPC下。 - 若所属LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。此时address必须为IPv4地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * role  后端服务器的主备状态。  取值范围： - master：主后端服务器。 - slave：备后端服务器。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'adminStateUp' => 'admin_state_up',
            'name' => 'name',
            'protocolPort' => 'protocol_port',
            'subnetCidrId' => 'subnet_cidr_id',
            'role' => 'role'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。 该IP地址可以是私网IPv4或IPv6。但必须在subnet_cidr_id对应的子网网段中。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * adminStateUp  后端服务器的管理状态。  取值：true。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * name  后端服务器名称。
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * subnetCidrId  后端服务器所在的子网ID，可以是子网的IPv4子网ID或IPv6子网ID。  使用说明： - 该子网和关联的负载均衡器的子网必须在同一VPC下。 - 若所属LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。此时address必须为IPv4地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * role  后端服务器的主备状态。  取值范围： - master：主后端服务器。 - slave：备后端服务器。
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'adminStateUp' => 'setAdminStateUp',
            'name' => 'setName',
            'protocolPort' => 'setProtocolPort',
            'subnetCidrId' => 'setSubnetCidrId',
            'role' => 'setRole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。 该IP地址可以是私网IPv4或IPv6。但必须在subnet_cidr_id对应的子网网段中。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * adminStateUp  后端服务器的管理状态。  取值：true。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * name  后端服务器名称。
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * subnetCidrId  后端服务器所在的子网ID，可以是子网的IPv4子网ID或IPv6子网ID。  使用说明： - 该子网和关联的负载均衡器的子网必须在同一VPC下。 - 若所属LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。此时address必须为IPv4地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * role  后端服务器的主备状态。  取值范围： - master：主后端服务器。 - slave：备后端服务器。
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'adminStateUp' => 'getAdminStateUp',
            'name' => 'getName',
            'protocolPort' => 'getProtocolPort',
            'subnetCidrId' => 'getSubnetCidrId',
            'role' => 'getRole'
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
    const ROLE_MASTER = 'master';
    const ROLE_SLAVE = 'slave';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_MASTER,
            self::ROLE_SLAVE,
        ];
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['subnetCidrId'] = isset($data['subnetCidrId']) ? $data['subnetCidrId'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
            if ((mb_strlen($this->container['address']) > 64)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['address']) < 1)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['subnetCidrId']) && (mb_strlen($this->container['subnetCidrId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetCidrId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['subnetCidrId']) && (mb_strlen($this->container['subnetCidrId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subnetCidrId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
            $allowedValues = $this->getRoleAllowableValues();
                if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['role']) > 36)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['role']) < 0)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be bigger than or equal to 0.";
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
    * Gets address
    *  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。 该IP地址可以是私网IPv4或IPv6。但必须在subnet_cidr_id对应的子网网段中。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
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
    * @param string $address 后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。 该IP地址可以是私网IPv4或IPv6。但必须在subnet_cidr_id对应的子网网段中。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端服务器的管理状态。  取值：true。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 后端服务器的管理状态。  取值：true。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets name
    *  后端服务器名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 后端服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
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
    * @param int $protocolPort 后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets subnetCidrId
    *  后端服务器所在的子网ID，可以是子网的IPv4子网ID或IPv6子网ID。  使用说明： - 该子网和关联的负载均衡器的子网必须在同一VPC下。 - 若所属LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。此时address必须为IPv4地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    *
    * @return string|null
    */
    public function getSubnetCidrId()
    {
        return $this->container['subnetCidrId'];
    }

    /**
    * Sets subnetCidrId
    *
    * @param string|null $subnetCidrId 后端服务器所在的子网ID，可以是子网的IPv4子网ID或IPv6子网ID。  使用说明： - 该子网和关联的负载均衡器的子网必须在同一VPC下。 - 若所属LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。此时address必须为IPv4地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setSubnetCidrId($subnetCidrId)
    {
        $this->container['subnetCidrId'] = $subnetCidrId;
        return $this;
    }

    /**
    * Gets role
    *  后端服务器的主备状态。  取值范围： - master：主后端服务器。 - slave：备后端服务器。
    *
    * @return string
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string $role 后端服务器的主备状态。  取值范围： - master：主后端服务器。 - slave：备后端服务器。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
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

