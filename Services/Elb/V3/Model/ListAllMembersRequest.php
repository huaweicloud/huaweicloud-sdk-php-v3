<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllMembersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllMembersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * name  后端云服务器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。 权重为0的后端不再接受新的请求。 当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。  支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于member对应的弹性云服务器是否存在。 若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。  支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_cidr_id字段的子网网段中。 例如：192.168.3.11。只能指定为主网卡的IP。  支持多值查询，查询条件格式：*address=xxx&address=xxx*。
    * protocolPort  后端服务器端口号。  支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * id  后端云服务器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * operatingStatus  后端云服务器的健康状态。  取值： - ONLINE，后端服务器正常运行。 - NO_MONITOR，后端服务器无健康检查。 - OFFLINE，已下线。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本，取值v4、v6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * poolId  member所属的服务器组ID  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * loadbalancerId  member所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'name' => 'string[]',
            'weight' => 'int[]',
            'adminStateUp' => 'bool',
            'subnetCidrId' => 'string[]',
            'address' => 'string[]',
            'protocolPort' => 'int[]',
            'id' => 'string[]',
            'operatingStatus' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'ipVersion' => 'string[]',
            'poolId' => 'string[]',
            'loadbalancerId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * name  后端云服务器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。 权重为0的后端不再接受新的请求。 当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。  支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于member对应的弹性云服务器是否存在。 若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。  支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_cidr_id字段的子网网段中。 例如：192.168.3.11。只能指定为主网卡的IP。  支持多值查询，查询条件格式：*address=xxx&address=xxx*。
    * protocolPort  后端服务器端口号。  支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * id  后端云服务器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * operatingStatus  后端云服务器的健康状态。  取值： - ONLINE，后端服务器正常运行。 - NO_MONITOR，后端服务器无健康检查。 - OFFLINE，已下线。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本，取值v4、v6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * poolId  member所属的服务器组ID  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * loadbalancerId  member所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'name' => null,
        'weight' => 'int32',
        'adminStateUp' => null,
        'subnetCidrId' => null,
        'address' => null,
        'protocolPort' => 'int32',
        'id' => null,
        'operatingStatus' => null,
        'enterpriseProjectId' => null,
        'ipVersion' => null,
        'poolId' => null,
        'loadbalancerId' => null
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
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * name  后端云服务器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。 权重为0的后端不再接受新的请求。 当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。  支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于member对应的弹性云服务器是否存在。 若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。  支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_cidr_id字段的子网网段中。 例如：192.168.3.11。只能指定为主网卡的IP。  支持多值查询，查询条件格式：*address=xxx&address=xxx*。
    * protocolPort  后端服务器端口号。  支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * id  后端云服务器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * operatingStatus  后端云服务器的健康状态。  取值： - ONLINE，后端服务器正常运行。 - NO_MONITOR，后端服务器无健康检查。 - OFFLINE，已下线。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本，取值v4、v6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * poolId  member所属的服务器组ID  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * loadbalancerId  member所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'name' => 'name',
            'weight' => 'weight',
            'adminStateUp' => 'admin_state_up',
            'subnetCidrId' => 'subnet_cidr_id',
            'address' => 'address',
            'protocolPort' => 'protocol_port',
            'id' => 'id',
            'operatingStatus' => 'operating_status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ipVersion' => 'ip_version',
            'poolId' => 'pool_id',
            'loadbalancerId' => 'loadbalancer_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * name  后端云服务器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。 权重为0的后端不再接受新的请求。 当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。  支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于member对应的弹性云服务器是否存在。 若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。  支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_cidr_id字段的子网网段中。 例如：192.168.3.11。只能指定为主网卡的IP。  支持多值查询，查询条件格式：*address=xxx&address=xxx*。
    * protocolPort  后端服务器端口号。  支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * id  后端云服务器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * operatingStatus  后端云服务器的健康状态。  取值： - ONLINE，后端服务器正常运行。 - NO_MONITOR，后端服务器无健康检查。 - OFFLINE，已下线。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本，取值v4、v6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * poolId  member所属的服务器组ID  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * loadbalancerId  member所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'name' => 'setName',
            'weight' => 'setWeight',
            'adminStateUp' => 'setAdminStateUp',
            'subnetCidrId' => 'setSubnetCidrId',
            'address' => 'setAddress',
            'protocolPort' => 'setProtocolPort',
            'id' => 'setId',
            'operatingStatus' => 'setOperatingStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ipVersion' => 'setIpVersion',
            'poolId' => 'setPoolId',
            'loadbalancerId' => 'setLoadbalancerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * name  后端云服务器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * weight  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。 权重为0的后端不再接受新的请求。 当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。  支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。
    * adminStateUp  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于member对应的弹性云服务器是否存在。 若存在，该值为true，否则，该值为false。
    * subnetCidrId  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。  支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。
    * address  后端云服务器的对应的IP地址，这个IP必须在subnet_cidr_id字段的子网网段中。 例如：192.168.3.11。只能指定为主网卡的IP。  支持多值查询，查询条件格式：*address=xxx&address=xxx*。
    * protocolPort  后端服务器端口号。  支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * id  后端云服务器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * operatingStatus  后端云服务器的健康状态。  取值： - ONLINE，后端服务器正常运行。 - NO_MONITOR，后端服务器无健康检查。 - OFFLINE，已下线。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本，取值v4、v6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * poolId  member所属的服务器组ID  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * loadbalancerId  member所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'name' => 'getName',
            'weight' => 'getWeight',
            'adminStateUp' => 'getAdminStateUp',
            'subnetCidrId' => 'getSubnetCidrId',
            'address' => 'getAddress',
            'protocolPort' => 'getProtocolPort',
            'id' => 'getId',
            'operatingStatus' => 'getOperatingStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ipVersion' => 'getIpVersion',
            'poolId' => 'getPoolId',
            'loadbalancerId' => 'getLoadbalancerId'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['subnetCidrId'] = isset($data['subnetCidrId']) ? $data['subnetCidrId'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets marker
    *  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets name
    *  后端云服务器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 后端云服务器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets weight
    *  后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。 权重为0的后端不再接受新的请求。 当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。  支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。
    *
    * @return int[]|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int[]|null $weight 后端云服务器的权重，请求按权重在同一后端云服务器组下的后端云服务器间分发。 权重为0的后端不再接受新的请求。 当后端云服务器所在的后端云服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。  支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于member对应的弹性云服务器是否存在。 若存在，该值为true，否则，该值为false。
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
    * @param bool|null $adminStateUp 后端云服务器的管理状态；该字段虽然支持创建、更新，但实际取值决定于member对应的弹性云服务器是否存在。 若存在，该值为true，否则，该值为false。
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
    *  后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。  支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。
    *
    * @return string[]|null
    */
    public function getSubnetCidrId()
    {
        return $this->container['subnetCidrId'];
    }

    /**
    * Sets subnetCidrId
    *
    * @param string[]|null $subnetCidrId 后端云服务器所在的子网ID。该子网和后端云服务器关联的负载均衡器的子网必须在同一VPC下。只支持指定IPv4的子网ID。  支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。
    *
    * @return $this
    */
    public function setSubnetCidrId($subnetCidrId)
    {
        $this->container['subnetCidrId'] = $subnetCidrId;
        return $this;
    }

    /**
    * Gets address
    *  后端云服务器的对应的IP地址，这个IP必须在subnet_cidr_id字段的子网网段中。 例如：192.168.3.11。只能指定为主网卡的IP。  支持多值查询，查询条件格式：*address=xxx&address=xxx*。
    *
    * @return string[]|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string[]|null $address 后端云服务器的对应的IP地址，这个IP必须在subnet_cidr_id字段的子网网段中。 例如：192.168.3.11。只能指定为主网卡的IP。  支持多值查询，查询条件格式：*address=xxx&address=xxx*。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端服务器端口号。  支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    *
    * @return int[]|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int[]|null $protocolPort 后端服务器端口号。  支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets id
    *  后端云服务器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 后端云服务器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  后端云服务器的健康状态。  取值： - ONLINE，后端服务器正常运行。 - NO_MONITOR，后端服务器无健康检查。 - OFFLINE，已下线。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=*。
    *
    * @return string[]|null
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string[]|null $operatingStatus 后端云服务器的健康状态。  取值： - ONLINE，后端服务器正常运行。 - NO_MONITOR，后端服务器无健康检查。 - OFFLINE，已下线。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=*。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  IP版本，取值v4、v6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    *
    * @return string[]|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string[]|null $ipVersion IP版本，取值v4、v6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets poolId
    *  member所属的服务器组ID  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    *
    * @return string[]|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string[]|null $poolId member所属的服务器组ID  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  member所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @return string[]|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string[]|null $loadbalancerId member所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
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

