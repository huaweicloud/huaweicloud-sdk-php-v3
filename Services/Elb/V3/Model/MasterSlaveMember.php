<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MasterSlaveMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MasterSlaveMember';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * name  **参数解释**：后端服务器名称。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。 虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  **取值范围**：true、false。
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 若所属的LB的IP类型后端转发特性已开启，则该字段可以不传，表示添加IP类型的后端服务器。此时address必须为**私网IPv4**地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC[/GRPCS](tag:not_open)。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt)
    * protocolPort  **参数解释**：后端服务器业务端口。  >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * address  **参数解释**：后端服务器对应的IP地址。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6地址。](tag:dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。  **取值范围**：v4、v6
    * deviceOwner  **参数解释**：设备所有者。  **取值范围**：不涉及 - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。 - compute:subeni，表示辅助弹性网卡。  不支持该字段，请勿使用。
    * deviceId  **参数解释**：关联的ECS ID，为空表示后端服务器未关联到ECS。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * operatingStatus  **参数解释**：后端服务器的健康状态。  **取值范围**：不涉及 - ONLINE：后端服务器正常。 - NO_MONITOR：后端服务器所在的服务器组没有健康检查器。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - INITIAL：后端云服务器健康检查打开时的初始状态。 - UNKNOWN: 后端云服务器组没有绑定监听器或者后端云服务器没有关联ECS等原因，后端云服务器健康检查结果未知。
    * reason  reason
    * memberType  **参数解释**：后端服务器的类型。  **取值范围**： - ip：IP类型的member。 - instance：关联到ECS的member。
    * instanceId  **参数解释**：member关联的实例ID。空表示member关联的实例为非真实设备 （如：IP类型的后端场景）。  **取值范围**：不涉及
    * role  **参数解释**：后端服务器的主备状态。  **取值范围**：不涉及
    * status  **参数解释**：后端服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_status为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'adminStateUp' => 'bool',
            'subnetCidrId' => 'string',
            'protocolPort' => 'int',
            'address' => 'string',
            'ipVersion' => 'string',
            'deviceOwner' => 'string',
            'deviceId' => 'string',
            'operatingStatus' => 'string',
            'reason' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberHealthCheckFailedReason',
            'memberType' => 'string',
            'instanceId' => 'string',
            'role' => 'string',
            'status' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerMemberInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * name  **参数解释**：后端服务器名称。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。 虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  **取值范围**：true、false。
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 若所属的LB的IP类型后端转发特性已开启，则该字段可以不传，表示添加IP类型的后端服务器。此时address必须为**私网IPv4**地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC[/GRPCS](tag:not_open)。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt)
    * protocolPort  **参数解释**：后端服务器业务端口。  >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * address  **参数解释**：后端服务器对应的IP地址。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6地址。](tag:dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。  **取值范围**：v4、v6
    * deviceOwner  **参数解释**：设备所有者。  **取值范围**：不涉及 - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。 - compute:subeni，表示辅助弹性网卡。  不支持该字段，请勿使用。
    * deviceId  **参数解释**：关联的ECS ID，为空表示后端服务器未关联到ECS。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * operatingStatus  **参数解释**：后端服务器的健康状态。  **取值范围**：不涉及 - ONLINE：后端服务器正常。 - NO_MONITOR：后端服务器所在的服务器组没有健康检查器。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - INITIAL：后端云服务器健康检查打开时的初始状态。 - UNKNOWN: 后端云服务器组没有绑定监听器或者后端云服务器没有关联ECS等原因，后端云服务器健康检查结果未知。
    * reason  reason
    * memberType  **参数解释**：后端服务器的类型。  **取值范围**： - ip：IP类型的member。 - instance：关联到ECS的member。
    * instanceId  **参数解释**：member关联的实例ID。空表示member关联的实例为非真实设备 （如：IP类型的后端场景）。  **取值范围**：不涉及
    * role  **参数解释**：后端服务器的主备状态。  **取值范围**：不涉及
    * status  **参数解释**：后端服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_status为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'adminStateUp' => null,
        'subnetCidrId' => null,
        'protocolPort' => 'int32',
        'address' => null,
        'ipVersion' => null,
        'deviceOwner' => null,
        'deviceId' => null,
        'operatingStatus' => null,
        'reason' => null,
        'memberType' => null,
        'instanceId' => null,
        'role' => null,
        'status' => null
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
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * name  **参数解释**：后端服务器名称。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。 虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  **取值范围**：true、false。
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 若所属的LB的IP类型后端转发特性已开启，则该字段可以不传，表示添加IP类型的后端服务器。此时address必须为**私网IPv4**地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC[/GRPCS](tag:not_open)。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt)
    * protocolPort  **参数解释**：后端服务器业务端口。  >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * address  **参数解释**：后端服务器对应的IP地址。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6地址。](tag:dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。  **取值范围**：v4、v6
    * deviceOwner  **参数解释**：设备所有者。  **取值范围**：不涉及 - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。 - compute:subeni，表示辅助弹性网卡。  不支持该字段，请勿使用。
    * deviceId  **参数解释**：关联的ECS ID，为空表示后端服务器未关联到ECS。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * operatingStatus  **参数解释**：后端服务器的健康状态。  **取值范围**：不涉及 - ONLINE：后端服务器正常。 - NO_MONITOR：后端服务器所在的服务器组没有健康检查器。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - INITIAL：后端云服务器健康检查打开时的初始状态。 - UNKNOWN: 后端云服务器组没有绑定监听器或者后端云服务器没有关联ECS等原因，后端云服务器健康检查结果未知。
    * reason  reason
    * memberType  **参数解释**：后端服务器的类型。  **取值范围**： - ip：IP类型的member。 - instance：关联到ECS的member。
    * instanceId  **参数解释**：member关联的实例ID。空表示member关联的实例为非真实设备 （如：IP类型的后端场景）。  **取值范围**：不涉及
    * role  **参数解释**：后端服务器的主备状态。  **取值范围**：不涉及
    * status  **参数解释**：后端服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_status为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'subnetCidrId' => 'subnet_cidr_id',
            'protocolPort' => 'protocol_port',
            'address' => 'address',
            'ipVersion' => 'ip_version',
            'deviceOwner' => 'device_owner',
            'deviceId' => 'device_id',
            'operatingStatus' => 'operating_status',
            'reason' => 'reason',
            'memberType' => 'member_type',
            'instanceId' => 'instance_id',
            'role' => 'role',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * name  **参数解释**：后端服务器名称。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。 虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  **取值范围**：true、false。
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 若所属的LB的IP类型后端转发特性已开启，则该字段可以不传，表示添加IP类型的后端服务器。此时address必须为**私网IPv4**地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC[/GRPCS](tag:not_open)。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt)
    * protocolPort  **参数解释**：后端服务器业务端口。  >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * address  **参数解释**：后端服务器对应的IP地址。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6地址。](tag:dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。  **取值范围**：v4、v6
    * deviceOwner  **参数解释**：设备所有者。  **取值范围**：不涉及 - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。 - compute:subeni，表示辅助弹性网卡。  不支持该字段，请勿使用。
    * deviceId  **参数解释**：关联的ECS ID，为空表示后端服务器未关联到ECS。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * operatingStatus  **参数解释**：后端服务器的健康状态。  **取值范围**：不涉及 - ONLINE：后端服务器正常。 - NO_MONITOR：后端服务器所在的服务器组没有健康检查器。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - INITIAL：后端云服务器健康检查打开时的初始状态。 - UNKNOWN: 后端云服务器组没有绑定监听器或者后端云服务器没有关联ECS等原因，后端云服务器健康检查结果未知。
    * reason  reason
    * memberType  **参数解释**：后端服务器的类型。  **取值范围**： - ip：IP类型的member。 - instance：关联到ECS的member。
    * instanceId  **参数解释**：member关联的实例ID。空表示member关联的实例为非真实设备 （如：IP类型的后端场景）。  **取值范围**：不涉及
    * role  **参数解释**：后端服务器的主备状态。  **取值范围**：不涉及
    * status  **参数解释**：后端服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_status为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'subnetCidrId' => 'setSubnetCidrId',
            'protocolPort' => 'setProtocolPort',
            'address' => 'setAddress',
            'ipVersion' => 'setIpVersion',
            'deviceOwner' => 'setDeviceOwner',
            'deviceId' => 'setDeviceId',
            'operatingStatus' => 'setOperatingStatus',
            'reason' => 'setReason',
            'memberType' => 'setMemberType',
            'instanceId' => 'setInstanceId',
            'role' => 'setRole',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * name  **参数解释**：后端服务器名称。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。 虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  **取值范围**：true、false。
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 若所属的LB的IP类型后端转发特性已开启，则该字段可以不传，表示添加IP类型的后端服务器。此时address必须为**私网IPv4**地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC[/GRPCS](tag:not_open)。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt)
    * protocolPort  **参数解释**：后端服务器业务端口。  >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * address  **参数解释**：后端服务器对应的IP地址。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6地址。](tag:dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。  **取值范围**：v4、v6
    * deviceOwner  **参数解释**：设备所有者。  **取值范围**：不涉及 - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。 - compute:subeni，表示辅助弹性网卡。  不支持该字段，请勿使用。
    * deviceId  **参数解释**：关联的ECS ID，为空表示后端服务器未关联到ECS。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * operatingStatus  **参数解释**：后端服务器的健康状态。  **取值范围**：不涉及 - ONLINE：后端服务器正常。 - NO_MONITOR：后端服务器所在的服务器组没有健康检查器。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - INITIAL：后端云服务器健康检查打开时的初始状态。 - UNKNOWN: 后端云服务器组没有绑定监听器或者后端云服务器没有关联ECS等原因，后端云服务器健康检查结果未知。
    * reason  reason
    * memberType  **参数解释**：后端服务器的类型。  **取值范围**： - ip：IP类型的member。 - instance：关联到ECS的member。
    * instanceId  **参数解释**：member关联的实例ID。空表示member关联的实例为非真实设备 （如：IP类型的后端场景）。  **取值范围**：不涉及
    * role  **参数解释**：后端服务器的主备状态。  **取值范围**：不涉及
    * status  **参数解释**：后端服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_status为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'subnetCidrId' => 'getSubnetCidrId',
            'protocolPort' => 'getProtocolPort',
            'address' => 'getAddress',
            'ipVersion' => 'getIpVersion',
            'deviceOwner' => 'getDeviceOwner',
            'deviceId' => 'getDeviceId',
            'operatingStatus' => 'getOperatingStatus',
            'reason' => 'getReason',
            'memberType' => 'getMemberType',
            'instanceId' => 'getInstanceId',
            'role' => 'getRole',
            'status' => 'getStatus'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['subnetCidrId'] = isset($data['subnetCidrId']) ? $data['subnetCidrId'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['subnetCidrId'] === null) {
            $invalidProperties[] = "'subnetCidrId' can't be null";
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
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['deviceOwner'] === null) {
            $invalidProperties[] = "'deviceOwner' can't be null";
        }
        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
        }
        if ($this->container['memberType'] === null) {
            $invalidProperties[] = "'memberType' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    *  **参数解释**：后端服务器ID。  **取值范围**：不涉及
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
    * @param string $id **参数解释**：后端服务器ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：后端服务器名称。  **取值范围**：不涉及
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
    * @param string $name **参数解释**：后端服务器名称。  **取值范围**：不涉及
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
    *  **参数解释**：后端服务器的管理状态。 虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  **取值范围**：true、false。
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
    * @param bool $adminStateUp **参数解释**：后端服务器的管理状态。 虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  **取值范围**：true、false。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets subnetCidrId
    *  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 若所属的LB的IP类型后端转发特性已开启，则该字段可以不传，表示添加IP类型的后端服务器。此时address必须为**私网IPv4**地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC[/GRPCS](tag:not_open)。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt)
    *
    * @return string
    */
    public function getSubnetCidrId()
    {
        return $this->container['subnetCidrId'];
    }

    /**
    * Sets subnetCidrId
    *
    * @param string $subnetCidrId **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 若所属的LB的IP类型后端转发特性已开启，则该字段可以不传，表示添加IP类型的后端服务器。此时address必须为**私网IPv4**地址，所在的pool的协议必须为UDP/TCP/TLS/HTTP/HTTPS/QUIC/GRPC[/GRPCS](tag:not_open)。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt)
    *
    * @return $this
    */
    public function setSubnetCidrId($subnetCidrId)
    {
        $this->container['subnetCidrId'] = $subnetCidrId;
        return $this;
    }

    /**
    * Gets protocolPort
    *  **参数解释**：后端服务器业务端口。  >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
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
    * @param int $protocolPort **参数解释**：后端服务器业务端口。  >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets address
    *  **参数解释**：后端服务器对应的IP地址。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6地址。](tag:dt)
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
    * @param string $address **参数解释**：后端服务器对应的IP地址。  **取值范围**：不涉及  [不支持IPv6，请勿设置为IPv6地址。](tag:dt)
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**：当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。  **取值范围**：v4、v6
    *
    * @return string
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string $ipVersion **参数解释**：当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。  **取值范围**：v4、v6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  **参数解释**：设备所有者。  **取值范围**：不涉及 - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。 - compute:subeni，表示辅助弹性网卡。  不支持该字段，请勿使用。
    *
    * @return string
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string $deviceOwner **参数解释**：设备所有者。  **取值范围**：不涉及 - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。 - compute:subeni，表示辅助弹性网卡。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets deviceId
    *  **参数解释**：关联的ECS ID，为空表示后端服务器未关联到ECS。  **取值范围**：不涉及  不支持该字段，请勿使用。
    *
    * @return string
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string $deviceId **参数解释**：关联的ECS ID，为空表示后端服务器未关联到ECS。  **取值范围**：不涉及  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  **参数解释**：后端服务器的健康状态。  **取值范围**：不涉及 - ONLINE：后端服务器正常。 - NO_MONITOR：后端服务器所在的服务器组没有健康检查器。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - INITIAL：后端云服务器健康检查打开时的初始状态。 - UNKNOWN: 后端云服务器组没有绑定监听器或者后端云服务器没有关联ECS等原因，后端云服务器健康检查结果未知。
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
    * @param string $operatingStatus **参数解释**：后端服务器的健康状态。  **取值范围**：不涉及 - ONLINE：后端服务器正常。 - NO_MONITOR：后端服务器所在的服务器组没有健康检查器。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - INITIAL：后端云服务器健康检查打开时的初始状态。 - UNKNOWN: 后端云服务器组没有绑定监听器或者后端云服务器没有关联ECS等原因，后端云服务器健康检查结果未知。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets reason
    *  reason
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberHealthCheckFailedReason|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberHealthCheckFailedReason|null $reason reason
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets memberType
    *  **参数解释**：后端服务器的类型。  **取值范围**： - ip：IP类型的member。 - instance：关联到ECS的member。
    *
    * @return string
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string $memberType **参数解释**：后端服务器的类型。  **取值范围**： - ip：IP类型的member。 - instance：关联到ECS的member。
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：member关联的实例ID。空表示member关联的实例为非真实设备 （如：IP类型的后端场景）。  **取值范围**：不涉及
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
    * @param string $instanceId **参数解释**：member关联的实例ID。空表示member关联的实例为非真实设备 （如：IP类型的后端场景）。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets role
    *  **参数解释**：后端服务器的主备状态。  **取值范围**：不涉及
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
    * @param string $role **参数解释**：后端服务器的主备状态。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：后端服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_status为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。  **取值范围**：不涉及
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ListenerMemberInfo[]
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerMemberInfo[] $status **参数解释**：后端服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_status为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

