<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Member implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Member';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  后端服务器ID。 >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * name  后端服务器名称。注意：该名称并非ECS名称。
    * projectId  后端服务器所在的项目ID。
    * poolId  所在后端服务器组ID。  不支持该字段，请勿使用。
    * adminStateUp  后端云服务器的管理状态。  取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在子网的IPv4子网ID或IPv6子网ID。  若所属的LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。 此时address必须为IPv4地址，所在的pool的协议必须为TCP/HTTP/HTTPS。  使用说明：该子网和关联的负载均衡器的子网必须在同一VPC下。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * weight  后端云服务器的权重，请求将根据pool配置的负载均衡算法和后端云服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。  取值：0-100，默认1。  使用说明：若所在pool的lb_algorithm取值为SOURCE_IP，该字段无效。
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。该IP地址可以是IPv4或IPv6。 但必须在subnet_cidr_id对应的子网网段中。且只能指定为关联ECS的主网卡内网IP。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * ipVersion  当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。取值：v4、v6。
    * deviceOwner  设备所有者。  取值： - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。  不支持该字段，请勿使用。
    * deviceId  关联的ECS ID，为空表示后端服务器未关联到ECS。  不支持该字段，请勿使用。
    * operatingStatus  后端云服务器的健康状态。当status非空时，以status字段中监听器粒度的健康检查状态优先。  取值： - ONLINE：后端云服务器正常。 - NO_MONITOR：后端云服务器所在的服务器组没有健康检查器。 - OFFLINE：后端云服务器关联的ECS服务器不存在或已关机。
    * status  后端云服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_stauts为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。
    * loadbalancerId  所属负载均衡器ID。  不支持该字段，请勿使用。
    * loadbalancers  后端云服务器关联的负载均衡器ID列表。  不支持该字段，请勿使用。
    * createdAt  创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * updatedAt  更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * memberType  后端云服务器的类型。  取值： - ip：跨VPC的member。 - instance：关联到ECS的member。
    * instanceId  member关联的实例ID。空表示member关联的实例为非真实设备 （如：跨VPC场景）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'poolId' => 'string',
            'adminStateUp' => 'bool',
            'subnetCidrId' => 'string',
            'protocolPort' => 'int',
            'weight' => 'int',
            'address' => 'string',
            'ipVersion' => 'string',
            'deviceOwner' => 'string',
            'deviceId' => 'string',
            'operatingStatus' => 'string',
            'status' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberStatus[]',
            'loadbalancerId' => 'string',
            'loadbalancers' => '\HuaweiCloud\SDK\Elb\V3\Model\ResourceID[]',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'memberType' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  后端服务器ID。 >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * name  后端服务器名称。注意：该名称并非ECS名称。
    * projectId  后端服务器所在的项目ID。
    * poolId  所在后端服务器组ID。  不支持该字段，请勿使用。
    * adminStateUp  后端云服务器的管理状态。  取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在子网的IPv4子网ID或IPv6子网ID。  若所属的LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。 此时address必须为IPv4地址，所在的pool的协议必须为TCP/HTTP/HTTPS。  使用说明：该子网和关联的负载均衡器的子网必须在同一VPC下。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * weight  后端云服务器的权重，请求将根据pool配置的负载均衡算法和后端云服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。  取值：0-100，默认1。  使用说明：若所在pool的lb_algorithm取值为SOURCE_IP，该字段无效。
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。该IP地址可以是IPv4或IPv6。 但必须在subnet_cidr_id对应的子网网段中。且只能指定为关联ECS的主网卡内网IP。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * ipVersion  当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。取值：v4、v6。
    * deviceOwner  设备所有者。  取值： - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。  不支持该字段，请勿使用。
    * deviceId  关联的ECS ID，为空表示后端服务器未关联到ECS。  不支持该字段，请勿使用。
    * operatingStatus  后端云服务器的健康状态。当status非空时，以status字段中监听器粒度的健康检查状态优先。  取值： - ONLINE：后端云服务器正常。 - NO_MONITOR：后端云服务器所在的服务器组没有健康检查器。 - OFFLINE：后端云服务器关联的ECS服务器不存在或已关机。
    * status  后端云服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_stauts为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。
    * loadbalancerId  所属负载均衡器ID。  不支持该字段，请勿使用。
    * loadbalancers  后端云服务器关联的负载均衡器ID列表。  不支持该字段，请勿使用。
    * createdAt  创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * updatedAt  更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * memberType  后端云服务器的类型。  取值： - ip：跨VPC的member。 - instance：关联到ECS的member。
    * instanceId  member关联的实例ID。空表示member关联的实例为非真实设备 （如：跨VPC场景）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'poolId' => null,
        'adminStateUp' => null,
        'subnetCidrId' => null,
        'protocolPort' => 'int32',
        'weight' => 'int32',
        'address' => null,
        'ipVersion' => null,
        'deviceOwner' => null,
        'deviceId' => null,
        'operatingStatus' => null,
        'status' => null,
        'loadbalancerId' => null,
        'loadbalancers' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'memberType' => null,
        'instanceId' => null
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
    * id  后端服务器ID。 >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * name  后端服务器名称。注意：该名称并非ECS名称。
    * projectId  后端服务器所在的项目ID。
    * poolId  所在后端服务器组ID。  不支持该字段，请勿使用。
    * adminStateUp  后端云服务器的管理状态。  取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在子网的IPv4子网ID或IPv6子网ID。  若所属的LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。 此时address必须为IPv4地址，所在的pool的协议必须为TCP/HTTP/HTTPS。  使用说明：该子网和关联的负载均衡器的子网必须在同一VPC下。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * weight  后端云服务器的权重，请求将根据pool配置的负载均衡算法和后端云服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。  取值：0-100，默认1。  使用说明：若所在pool的lb_algorithm取值为SOURCE_IP，该字段无效。
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。该IP地址可以是IPv4或IPv6。 但必须在subnet_cidr_id对应的子网网段中。且只能指定为关联ECS的主网卡内网IP。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * ipVersion  当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。取值：v4、v6。
    * deviceOwner  设备所有者。  取值： - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。  不支持该字段，请勿使用。
    * deviceId  关联的ECS ID，为空表示后端服务器未关联到ECS。  不支持该字段，请勿使用。
    * operatingStatus  后端云服务器的健康状态。当status非空时，以status字段中监听器粒度的健康检查状态优先。  取值： - ONLINE：后端云服务器正常。 - NO_MONITOR：后端云服务器所在的服务器组没有健康检查器。 - OFFLINE：后端云服务器关联的ECS服务器不存在或已关机。
    * status  后端云服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_stauts为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。
    * loadbalancerId  所属负载均衡器ID。  不支持该字段，请勿使用。
    * loadbalancers  后端云服务器关联的负载均衡器ID列表。  不支持该字段，请勿使用。
    * createdAt  创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * updatedAt  更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * memberType  后端云服务器的类型。  取值： - ip：跨VPC的member。 - instance：关联到ECS的member。
    * instanceId  member关联的实例ID。空表示member关联的实例为非真实设备 （如：跨VPC场景）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'poolId' => 'pool_id',
            'adminStateUp' => 'admin_state_up',
            'subnetCidrId' => 'subnet_cidr_id',
            'protocolPort' => 'protocol_port',
            'weight' => 'weight',
            'address' => 'address',
            'ipVersion' => 'ip_version',
            'deviceOwner' => 'device_owner',
            'deviceId' => 'device_id',
            'operatingStatus' => 'operating_status',
            'status' => 'status',
            'loadbalancerId' => 'loadbalancer_id',
            'loadbalancers' => 'loadbalancers',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'memberType' => 'member_type',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  后端服务器ID。 >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * name  后端服务器名称。注意：该名称并非ECS名称。
    * projectId  后端服务器所在的项目ID。
    * poolId  所在后端服务器组ID。  不支持该字段，请勿使用。
    * adminStateUp  后端云服务器的管理状态。  取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在子网的IPv4子网ID或IPv6子网ID。  若所属的LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。 此时address必须为IPv4地址，所在的pool的协议必须为TCP/HTTP/HTTPS。  使用说明：该子网和关联的负载均衡器的子网必须在同一VPC下。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * weight  后端云服务器的权重，请求将根据pool配置的负载均衡算法和后端云服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。  取值：0-100，默认1。  使用说明：若所在pool的lb_algorithm取值为SOURCE_IP，该字段无效。
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。该IP地址可以是IPv4或IPv6。 但必须在subnet_cidr_id对应的子网网段中。且只能指定为关联ECS的主网卡内网IP。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * ipVersion  当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。取值：v4、v6。
    * deviceOwner  设备所有者。  取值： - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。  不支持该字段，请勿使用。
    * deviceId  关联的ECS ID，为空表示后端服务器未关联到ECS。  不支持该字段，请勿使用。
    * operatingStatus  后端云服务器的健康状态。当status非空时，以status字段中监听器粒度的健康检查状态优先。  取值： - ONLINE：后端云服务器正常。 - NO_MONITOR：后端云服务器所在的服务器组没有健康检查器。 - OFFLINE：后端云服务器关联的ECS服务器不存在或已关机。
    * status  后端云服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_stauts为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。
    * loadbalancerId  所属负载均衡器ID。  不支持该字段，请勿使用。
    * loadbalancers  后端云服务器关联的负载均衡器ID列表。  不支持该字段，请勿使用。
    * createdAt  创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * updatedAt  更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * memberType  后端云服务器的类型。  取值： - ip：跨VPC的member。 - instance：关联到ECS的member。
    * instanceId  member关联的实例ID。空表示member关联的实例为非真实设备 （如：跨VPC场景）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'poolId' => 'setPoolId',
            'adminStateUp' => 'setAdminStateUp',
            'subnetCidrId' => 'setSubnetCidrId',
            'protocolPort' => 'setProtocolPort',
            'weight' => 'setWeight',
            'address' => 'setAddress',
            'ipVersion' => 'setIpVersion',
            'deviceOwner' => 'setDeviceOwner',
            'deviceId' => 'setDeviceId',
            'operatingStatus' => 'setOperatingStatus',
            'status' => 'setStatus',
            'loadbalancerId' => 'setLoadbalancerId',
            'loadbalancers' => 'setLoadbalancers',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'memberType' => 'setMemberType',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  后端服务器ID。 >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * name  后端服务器名称。注意：该名称并非ECS名称。
    * projectId  后端服务器所在的项目ID。
    * poolId  所在后端服务器组ID。  不支持该字段，请勿使用。
    * adminStateUp  后端云服务器的管理状态。  取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在子网的IPv4子网ID或IPv6子网ID。  若所属的LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。 此时address必须为IPv4地址，所在的pool的协议必须为TCP/HTTP/HTTPS。  使用说明：该子网和关联的负载均衡器的子网必须在同一VPC下。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
    * protocolPort  后端服务器业务端口。 >在开启端口透传的pool下创建member传该字段不生效，可不传该字段。
    * weight  后端云服务器的权重，请求将根据pool配置的负载均衡算法和后端云服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。  取值：0-100，默认1。  使用说明：若所在pool的lb_algorithm取值为SOURCE_IP，该字段无效。
    * address  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。该IP地址可以是IPv4或IPv6。 但必须在subnet_cidr_id对应的子网网段中。且只能指定为关联ECS的主网卡内网IP。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
    * ipVersion  当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。取值：v4、v6。
    * deviceOwner  设备所有者。  取值： - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。  不支持该字段，请勿使用。
    * deviceId  关联的ECS ID，为空表示后端服务器未关联到ECS。  不支持该字段，请勿使用。
    * operatingStatus  后端云服务器的健康状态。当status非空时，以status字段中监听器粒度的健康检查状态优先。  取值： - ONLINE：后端云服务器正常。 - NO_MONITOR：后端云服务器所在的服务器组没有健康检查器。 - OFFLINE：后端云服务器关联的ECS服务器不存在或已关机。
    * status  后端云服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_stauts为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。
    * loadbalancerId  所属负载均衡器ID。  不支持该字段，请勿使用。
    * loadbalancers  后端云服务器关联的负载均衡器ID列表。  不支持该字段，请勿使用。
    * createdAt  创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * updatedAt  更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    * memberType  后端云服务器的类型。  取值： - ip：跨VPC的member。 - instance：关联到ECS的member。
    * instanceId  member关联的实例ID。空表示member关联的实例为非真实设备 （如：跨VPC场景）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'poolId' => 'getPoolId',
            'adminStateUp' => 'getAdminStateUp',
            'subnetCidrId' => 'getSubnetCidrId',
            'protocolPort' => 'getProtocolPort',
            'weight' => 'getWeight',
            'address' => 'getAddress',
            'ipVersion' => 'getIpVersion',
            'deviceOwner' => 'getDeviceOwner',
            'deviceId' => 'getDeviceId',
            'operatingStatus' => 'getOperatingStatus',
            'status' => 'getStatus',
            'loadbalancerId' => 'getLoadbalancerId',
            'loadbalancers' => 'getLoadbalancers',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'memberType' => 'getMemberType',
            'instanceId' => 'getInstanceId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['subnetCidrId'] = isset($data['subnetCidrId']) ? $data['subnetCidrId'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['loadbalancers'] = isset($data['loadbalancers']) ? $data['loadbalancers'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
            if (($this->container['weight'] > 100)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 100.";
            }
            if (($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
            }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
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
    *  后端服务器ID。 >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
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
    * @param string $id 后端服务器ID。 >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
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
    *  后端服务器名称。注意：该名称并非ECS名称。
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
    * @param string $name 后端服务器名称。注意：该名称并非ECS名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  后端服务器所在的项目ID。
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
    * @param string $projectId 后端服务器所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets poolId
    *  所在后端服务器组ID。  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId 所在后端服务器组ID。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端云服务器的管理状态。  取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
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
    * @param bool $adminStateUp 后端云服务器的管理状态。  取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端云服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。
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
    *  后端云服务器所在子网的IPv4子网ID或IPv6子网ID。  若所属的LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。 此时address必须为IPv4地址，所在的pool的协议必须为TCP/HTTP/HTTPS。  使用说明：该子网和关联的负载均衡器的子网必须在同一VPC下。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
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
    * @param string|null $subnetCidrId 后端云服务器所在子网的IPv4子网ID或IPv6子网ID。  若所属的LB的跨VPC后端转发特性已开启，则该字段可以不传，表示添加跨VPC的后端服务器。 此时address必须为IPv4地址，所在的pool的协议必须为TCP/HTTP/HTTPS。  使用说明：该子网和关联的负载均衡器的子网必须在同一VPC下。  [不支持IPv6，请勿设置为IPv6子网ID。](tag:dt,dt_test)
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
    * Gets weight
    *  后端云服务器的权重，请求将根据pool配置的负载均衡算法和后端云服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。  取值：0-100，默认1。  使用说明：若所在pool的lb_algorithm取值为SOURCE_IP，该字段无效。
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
    * @param int $weight 后端云服务器的权重，请求将根据pool配置的负载均衡算法和后端云服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。  取值：0-100，默认1。  使用说明：若所在pool的lb_algorithm取值为SOURCE_IP，该字段无效。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets address
    *  后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。该IP地址可以是IPv4或IPv6。 但必须在subnet_cidr_id对应的子网网段中。且只能指定为关联ECS的主网卡内网IP。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
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
    * @param string $address 后端服务器对应的IP地址。  使用说明： - 若subnet_cidr_id为空，表示添加跨VPC后端，此时address必须为IPv4地址。 - 若subnet_cidr_id不为空，表示是一个关联到ECS的后端服务器。该IP地址可以是IPv4或IPv6。 但必须在subnet_cidr_id对应的子网网段中。且只能指定为关联ECS的主网卡内网IP。  [不支持IPv6，请勿设置为IPv6地址。](tag:dt,dt_test)
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
    *  当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。取值：v4、v6。
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
    * @param string $ipVersion 当前后端服务器的IP地址版本，由后端系统自动根据传入的address字段确定。取值：v4、v6。
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
    *  设备所有者。  取值： - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string|null $deviceOwner 设备所有者。  取值： - 空，表示后端服务器未关联到ECS。 - compute:{az_name}，表示关联到ECS，其中{az_name}表示ECS所在可用区名。  不支持该字段，请勿使用。
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
    *  关联的ECS ID，为空表示后端服务器未关联到ECS。  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 关联的ECS ID，为空表示后端服务器未关联到ECS。  不支持该字段，请勿使用。
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
    *  后端云服务器的健康状态。当status非空时，以status字段中监听器粒度的健康检查状态优先。  取值： - ONLINE：后端云服务器正常。 - NO_MONITOR：后端云服务器所在的服务器组没有健康检查器。 - OFFLINE：后端云服务器关联的ECS服务器不存在或已关机。
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
    * @param string $operatingStatus 后端云服务器的健康状态。当status非空时，以status字段中监听器粒度的健康检查状态优先。  取值： - ONLINE：后端云服务器正常。 - NO_MONITOR：后端云服务器所在的服务器组没有健康检查器。 - OFFLINE：后端云服务器关联的ECS服务器不存在或已关机。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets status
    *  后端云服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_stauts为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberStatus[]
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberStatus[] $status 后端云服务器监听器粒度的的健康状态。 若绑定的监听器在该字段中，则以该字段中监听器对应的operating_stauts为准。 若绑定的监听器不在该字段中，则以外层的operating_status为准。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  所属负载均衡器ID。  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId 所属负载均衡器ID。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets loadbalancers
    *  后端云服务器关联的负载均衡器ID列表。  不支持该字段，请勿使用。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ResourceID[]|null
    */
    public function getLoadbalancers()
    {
        return $this->container['loadbalancers'];
    }

    /**
    * Sets loadbalancers
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ResourceID[]|null $loadbalancers 后端云服务器关联的负载均衡器ID列表。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setLoadbalancers($loadbalancers)
    {
        $this->container['loadbalancers'] = $loadbalancers;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets memberType
    *  后端云服务器的类型。  取值： - ip：跨VPC的member。 - instance：关联到ECS的member。
    *
    * @return string|null
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string|null $memberType 后端云服务器的类型。  取值： - ip：跨VPC的member。 - instance：关联到ECS的member。
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
    *  member关联的实例ID。空表示member关联的实例为非真实设备 （如：跨VPC场景）
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
    * @param string|null $instanceId member关联的实例ID。空表示member关联的实例为非真实设备 （如：跨VPC场景）
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

