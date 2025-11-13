<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Vpc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Vpc';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能描述：VPC对应的唯一标识 取值范围：带“-”的UUID格式
    * name  功能说明：VPC对应的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：VPC的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * cidr  功能说明：VPC下可用子网的范围 取值范围： - 10.0.0.0/8~10.255.255.240/28 - 172.16.0.0/12 ~ 172.31.255.240/28 - 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  功能描述：VPC的扩展网段 取值范围： 约束：目前只支持ipv4
    * status  功能说明：VPC对应的状态 取值范围：PENDING：创建中；ACTIVE：创建成功
    * projectId  功能说明：VPC所属的项目ID
    * enterpriseProjectId  功能说明：VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  功能说明：VPC创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：VPC更新时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * cloudResources  功能说明：VPC关联资源类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet
    * tags  功能说明：VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    * blockServiceEndpointStates  功能说明：默认情况下，VPC中的资源可以通过内网访问服务终结点。开启该项后，VPC将无法通过内网访问服务终结点，请谨慎操作。 无法访问以下云服务：容器镜像服务SWR、云日志服务LTS、企业主机安全HSS、应用运维管理AOM、应用性能管理APM、对象存储服务OBS、API网关APIG。 取值范围： off：代表禁用。 on：代表开启。
    * enableNetworkAddressUsageMetrics  功能说明：是否开启VPC内所有子网的IPv4地址使用量指标监控。 取值范围： true：开启 false：不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'cidr' => 'string',
            'extendCidrs' => 'string[]',
            'status' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'cloudResources' => '\HuaweiCloud\SDK\Vpc\V3\Model\CloudResource[]',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\Tag[]',
            'blockServiceEndpointStates' => 'string',
            'enableNetworkAddressUsageMetrics' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能描述：VPC对应的唯一标识 取值范围：带“-”的UUID格式
    * name  功能说明：VPC对应的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：VPC的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * cidr  功能说明：VPC下可用子网的范围 取值范围： - 10.0.0.0/8~10.255.255.240/28 - 172.16.0.0/12 ~ 172.31.255.240/28 - 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  功能描述：VPC的扩展网段 取值范围： 约束：目前只支持ipv4
    * status  功能说明：VPC对应的状态 取值范围：PENDING：创建中；ACTIVE：创建成功
    * projectId  功能说明：VPC所属的项目ID
    * enterpriseProjectId  功能说明：VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  功能说明：VPC创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：VPC更新时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * cloudResources  功能说明：VPC关联资源类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet
    * tags  功能说明：VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    * blockServiceEndpointStates  功能说明：默认情况下，VPC中的资源可以通过内网访问服务终结点。开启该项后，VPC将无法通过内网访问服务终结点，请谨慎操作。 无法访问以下云服务：容器镜像服务SWR、云日志服务LTS、企业主机安全HSS、应用运维管理AOM、应用性能管理APM、对象存储服务OBS、API网关APIG。 取值范围： off：代表禁用。 on：代表开启。
    * enableNetworkAddressUsageMetrics  功能说明：是否开启VPC内所有子网的IPv4地址使用量指标监控。 取值范围： true：开启 false：不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'cidr' => null,
        'extendCidrs' => null,
        'status' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'cloudResources' => null,
        'tags' => null,
        'blockServiceEndpointStates' => null,
        'enableNetworkAddressUsageMetrics' => null
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
    * id  功能描述：VPC对应的唯一标识 取值范围：带“-”的UUID格式
    * name  功能说明：VPC对应的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：VPC的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * cidr  功能说明：VPC下可用子网的范围 取值范围： - 10.0.0.0/8~10.255.255.240/28 - 172.16.0.0/12 ~ 172.31.255.240/28 - 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  功能描述：VPC的扩展网段 取值范围： 约束：目前只支持ipv4
    * status  功能说明：VPC对应的状态 取值范围：PENDING：创建中；ACTIVE：创建成功
    * projectId  功能说明：VPC所属的项目ID
    * enterpriseProjectId  功能说明：VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  功能说明：VPC创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：VPC更新时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * cloudResources  功能说明：VPC关联资源类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet
    * tags  功能说明：VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    * blockServiceEndpointStates  功能说明：默认情况下，VPC中的资源可以通过内网访问服务终结点。开启该项后，VPC将无法通过内网访问服务终结点，请谨慎操作。 无法访问以下云服务：容器镜像服务SWR、云日志服务LTS、企业主机安全HSS、应用运维管理AOM、应用性能管理APM、对象存储服务OBS、API网关APIG。 取值范围： off：代表禁用。 on：代表开启。
    * enableNetworkAddressUsageMetrics  功能说明：是否开启VPC内所有子网的IPv4地址使用量指标监控。 取值范围： true：开启 false：不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'cidr' => 'cidr',
            'extendCidrs' => 'extend_cidrs',
            'status' => 'status',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'cloudResources' => 'cloud_resources',
            'tags' => 'tags',
            'blockServiceEndpointStates' => 'block_service_endpoint_states',
            'enableNetworkAddressUsageMetrics' => 'enable_network_address_usage_metrics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能描述：VPC对应的唯一标识 取值范围：带“-”的UUID格式
    * name  功能说明：VPC对应的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：VPC的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * cidr  功能说明：VPC下可用子网的范围 取值范围： - 10.0.0.0/8~10.255.255.240/28 - 172.16.0.0/12 ~ 172.31.255.240/28 - 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  功能描述：VPC的扩展网段 取值范围： 约束：目前只支持ipv4
    * status  功能说明：VPC对应的状态 取值范围：PENDING：创建中；ACTIVE：创建成功
    * projectId  功能说明：VPC所属的项目ID
    * enterpriseProjectId  功能说明：VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  功能说明：VPC创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：VPC更新时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * cloudResources  功能说明：VPC关联资源类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet
    * tags  功能说明：VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    * blockServiceEndpointStates  功能说明：默认情况下，VPC中的资源可以通过内网访问服务终结点。开启该项后，VPC将无法通过内网访问服务终结点，请谨慎操作。 无法访问以下云服务：容器镜像服务SWR、云日志服务LTS、企业主机安全HSS、应用运维管理AOM、应用性能管理APM、对象存储服务OBS、API网关APIG。 取值范围： off：代表禁用。 on：代表开启。
    * enableNetworkAddressUsageMetrics  功能说明：是否开启VPC内所有子网的IPv4地址使用量指标监控。 取值范围： true：开启 false：不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'cidr' => 'setCidr',
            'extendCidrs' => 'setExtendCidrs',
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'cloudResources' => 'setCloudResources',
            'tags' => 'setTags',
            'blockServiceEndpointStates' => 'setBlockServiceEndpointStates',
            'enableNetworkAddressUsageMetrics' => 'setEnableNetworkAddressUsageMetrics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能描述：VPC对应的唯一标识 取值范围：带“-”的UUID格式
    * name  功能说明：VPC对应的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：VPC的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * cidr  功能说明：VPC下可用子网的范围 取值范围： - 10.0.0.0/8~10.255.255.240/28 - 172.16.0.0/12 ~ 172.31.255.240/28 - 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  功能描述：VPC的扩展网段 取值范围： 约束：目前只支持ipv4
    * status  功能说明：VPC对应的状态 取值范围：PENDING：创建中；ACTIVE：创建成功
    * projectId  功能说明：VPC所属的项目ID
    * enterpriseProjectId  功能说明：VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  功能说明：VPC创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：VPC更新时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    * cloudResources  功能说明：VPC关联资源类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet
    * tags  功能说明：VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    * blockServiceEndpointStates  功能说明：默认情况下，VPC中的资源可以通过内网访问服务终结点。开启该项后，VPC将无法通过内网访问服务终结点，请谨慎操作。 无法访问以下云服务：容器镜像服务SWR、云日志服务LTS、企业主机安全HSS、应用运维管理AOM、应用性能管理APM、对象存储服务OBS、API网关APIG。 取值范围： off：代表禁用。 on：代表开启。
    * enableNetworkAddressUsageMetrics  功能说明：是否开启VPC内所有子网的IPv4地址使用量指标监控。 取值范围： true：开启 false：不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'cidr' => 'getCidr',
            'extendCidrs' => 'getExtendCidrs',
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'cloudResources' => 'getCloudResources',
            'tags' => 'getTags',
            'blockServiceEndpointStates' => 'getBlockServiceEndpointStates',
            'enableNetworkAddressUsageMetrics' => 'getEnableNetworkAddressUsageMetrics'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['extendCidrs'] = isset($data['extendCidrs']) ? $data['extendCidrs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['cloudResources'] = isset($data['cloudResources']) ? $data['cloudResources'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['blockServiceEndpointStates'] = isset($data['blockServiceEndpointStates']) ? $data['blockServiceEndpointStates'] : null;
        $this->container['enableNetworkAddressUsageMetrics'] = isset($data['enableNetworkAddressUsageMetrics']) ? $data['enableNetworkAddressUsageMetrics'] : null;
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
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['extendCidrs'] === null) {
            $invalidProperties[] = "'extendCidrs' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['cloudResources'] === null) {
            $invalidProperties[] = "'cloudResources' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['blockServiceEndpointStates'] === null) {
            $invalidProperties[] = "'blockServiceEndpointStates' can't be null";
        }
        if ($this->container['enableNetworkAddressUsageMetrics'] === null) {
            $invalidProperties[] = "'enableNetworkAddressUsageMetrics' can't be null";
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
    *  功能描述：VPC对应的唯一标识 取值范围：带“-”的UUID格式
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
    * @param string $id 功能描述：VPC对应的唯一标识 取值范围：带“-”的UUID格式
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
    *  功能说明：VPC对应的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：VPC对应的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：VPC的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 功能说明：VPC的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cidr
    *  功能说明：VPC下可用子网的范围 取值范围： - 10.0.0.0/8~10.255.255.240/28 - 172.16.0.0/12 ~ 172.31.255.240/28 - 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr 功能说明：VPC下可用子网的范围 取值范围： - 10.0.0.0/8~10.255.255.240/28 - 172.16.0.0/12 ~ 172.31.255.240/28 - 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets extendCidrs
    *  功能描述：VPC的扩展网段 取值范围： 约束：目前只支持ipv4
    *
    * @return string[]
    */
    public function getExtendCidrs()
    {
        return $this->container['extendCidrs'];
    }

    /**
    * Sets extendCidrs
    *
    * @param string[] $extendCidrs 功能描述：VPC的扩展网段 取值范围： 约束：目前只支持ipv4
    *
    * @return $this
    */
    public function setExtendCidrs($extendCidrs)
    {
        $this->container['extendCidrs'] = $extendCidrs;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：VPC对应的状态 取值范围：PENDING：创建中；ACTIVE：创建成功
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 功能说明：VPC对应的状态 取值范围：PENDING：创建中；ACTIVE：创建成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets projectId
    *  功能说明：VPC所属的项目ID
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
    * @param string $projectId 功能说明：VPC所属的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 功能说明：VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：VPC创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 功能说明：VPC创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
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
    *  功能说明：VPC更新时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 功能说明：VPC更新时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets cloudResources
    *  功能说明：VPC关联资源类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\CloudResource[]
    */
    public function getCloudResources()
    {
        return $this->container['cloudResources'];
    }

    /**
    * Sets cloudResources
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\CloudResource[] $cloudResources 功能说明：VPC关联资源类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet
    *
    * @return $this
    */
    public function setCloudResources($cloudResources)
    {
        $this->container['cloudResources'] = $cloudResources;
        return $this;
    }

    /**
    * Gets tags
    *  功能说明：VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\Tag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\Tag[] $tags 功能说明：VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets blockServiceEndpointStates
    *  功能说明：默认情况下，VPC中的资源可以通过内网访问服务终结点。开启该项后，VPC将无法通过内网访问服务终结点，请谨慎操作。 无法访问以下云服务：容器镜像服务SWR、云日志服务LTS、企业主机安全HSS、应用运维管理AOM、应用性能管理APM、对象存储服务OBS、API网关APIG。 取值范围： off：代表禁用。 on：代表开启。
    *
    * @return string
    */
    public function getBlockServiceEndpointStates()
    {
        return $this->container['blockServiceEndpointStates'];
    }

    /**
    * Sets blockServiceEndpointStates
    *
    * @param string $blockServiceEndpointStates 功能说明：默认情况下，VPC中的资源可以通过内网访问服务终结点。开启该项后，VPC将无法通过内网访问服务终结点，请谨慎操作。 无法访问以下云服务：容器镜像服务SWR、云日志服务LTS、企业主机安全HSS、应用运维管理AOM、应用性能管理APM、对象存储服务OBS、API网关APIG。 取值范围： off：代表禁用。 on：代表开启。
    *
    * @return $this
    */
    public function setBlockServiceEndpointStates($blockServiceEndpointStates)
    {
        $this->container['blockServiceEndpointStates'] = $blockServiceEndpointStates;
        return $this;
    }

    /**
    * Gets enableNetworkAddressUsageMetrics
    *  功能说明：是否开启VPC内所有子网的IPv4地址使用量指标监控。 取值范围： true：开启 false：不开启
    *
    * @return bool
    */
    public function getEnableNetworkAddressUsageMetrics()
    {
        return $this->container['enableNetworkAddressUsageMetrics'];
    }

    /**
    * Sets enableNetworkAddressUsageMetrics
    *
    * @param bool $enableNetworkAddressUsageMetrics 功能说明：是否开启VPC内所有子网的IPv4地址使用量指标监控。 取值范围： true：开启 false：不开启
    *
    * @return $this
    */
    public function setEnableNetworkAddressUsageMetrics($enableNetworkAddressUsageMetrics)
    {
        $this->container['enableNetworkAddressUsageMetrics'] = $enableNetworkAddressUsageMetrics;
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

