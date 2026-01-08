<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Virsubnet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Virsubnet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 子网的资源ID。子网创建成功后，会生成一个子网 ID，是子网对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 子网的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文字符、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * dnsNameservers  **参数解释**： 子网的DNS服务器地址列表。 **取值范围**： 不涉及。
    * zoneId  **参数解释**： 子网的可用区ID。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所属VPC的资源ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * scope  **参数解释**： 子网的作用域（边缘云场景）。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * subnetCidrs  **参数解释**： OpenStack Neutron子网信息。 **取值范围**： 不涉及。
    * tags  **参数解释**： 子网的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * extraDhcpOpts  **参数解释**： 子网的DHCP属性，支持配置NTP地址、DNS域名或租约到期时间。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  **参数解释**： 子网的更新时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'dnsNameservers' => 'string[]',
            'zoneId' => 'string',
            'vpcId' => 'string',
            'status' => 'string',
            'projectId' => 'string',
            'scope' => 'string',
            'subnetCidrs' => '\HuaweiCloud\SDK\Vpc\V3\Model\SubnetCidr[]',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\ResponseTag[]',
            'extraDhcpOpts' => '\HuaweiCloud\SDK\Vpc\V3\Model\SubnetExtraDhcpOpt[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 子网的资源ID。子网创建成功后，会生成一个子网 ID，是子网对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 子网的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文字符、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * dnsNameservers  **参数解释**： 子网的DNS服务器地址列表。 **取值范围**： 不涉及。
    * zoneId  **参数解释**： 子网的可用区ID。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所属VPC的资源ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * scope  **参数解释**： 子网的作用域（边缘云场景）。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * subnetCidrs  **参数解释**： OpenStack Neutron子网信息。 **取值范围**： 不涉及。
    * tags  **参数解释**： 子网的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * extraDhcpOpts  **参数解释**： 子网的DHCP属性，支持配置NTP地址、DNS域名或租约到期时间。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  **参数解释**： 子网的更新时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'dnsNameservers' => null,
        'zoneId' => null,
        'vpcId' => null,
        'status' => null,
        'projectId' => null,
        'scope' => null,
        'subnetCidrs' => null,
        'tags' => null,
        'extraDhcpOpts' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  **参数解释**： 子网的资源ID。子网创建成功后，会生成一个子网 ID，是子网对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 子网的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文字符、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * dnsNameservers  **参数解释**： 子网的DNS服务器地址列表。 **取值范围**： 不涉及。
    * zoneId  **参数解释**： 子网的可用区ID。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所属VPC的资源ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * scope  **参数解释**： 子网的作用域（边缘云场景）。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * subnetCidrs  **参数解释**： OpenStack Neutron子网信息。 **取值范围**： 不涉及。
    * tags  **参数解释**： 子网的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * extraDhcpOpts  **参数解释**： 子网的DHCP属性，支持配置NTP地址、DNS域名或租约到期时间。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  **参数解释**： 子网的更新时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'dnsNameservers' => 'dns_nameservers',
            'zoneId' => 'zone_id',
            'vpcId' => 'vpc_id',
            'status' => 'status',
            'projectId' => 'project_id',
            'scope' => 'scope',
            'subnetCidrs' => 'subnet_cidrs',
            'tags' => 'tags',
            'extraDhcpOpts' => 'extra_dhcp_opts',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 子网的资源ID。子网创建成功后，会生成一个子网 ID，是子网对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 子网的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文字符、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * dnsNameservers  **参数解释**： 子网的DNS服务器地址列表。 **取值范围**： 不涉及。
    * zoneId  **参数解释**： 子网的可用区ID。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所属VPC的资源ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * scope  **参数解释**： 子网的作用域（边缘云场景）。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * subnetCidrs  **参数解释**： OpenStack Neutron子网信息。 **取值范围**： 不涉及。
    * tags  **参数解释**： 子网的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * extraDhcpOpts  **参数解释**： 子网的DHCP属性，支持配置NTP地址、DNS域名或租约到期时间。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  **参数解释**： 子网的更新时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'dnsNameservers' => 'setDnsNameservers',
            'zoneId' => 'setZoneId',
            'vpcId' => 'setVpcId',
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'scope' => 'setScope',
            'subnetCidrs' => 'setSubnetCidrs',
            'tags' => 'setTags',
            'extraDhcpOpts' => 'setExtraDhcpOpts',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 子网的资源ID。子网创建成功后，会生成一个子网 ID，是子网对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 子网的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文字符、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * dnsNameservers  **参数解释**： 子网的DNS服务器地址列表。 **取值范围**： 不涉及。
    * zoneId  **参数解释**： 子网的可用区ID。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所属VPC的资源ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * scope  **参数解释**： 子网的作用域（边缘云场景）。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * subnetCidrs  **参数解释**： OpenStack Neutron子网信息。 **取值范围**： 不涉及。
    * tags  **参数解释**： 子网的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * extraDhcpOpts  **参数解释**： 子网的DHCP属性，支持配置NTP地址、DNS域名或租约到期时间。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  **参数解释**： 子网的更新时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'dnsNameservers' => 'getDnsNameservers',
            'zoneId' => 'getZoneId',
            'vpcId' => 'getVpcId',
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'scope' => 'getScope',
            'subnetCidrs' => 'getSubnetCidrs',
            'tags' => 'getTags',
            'extraDhcpOpts' => 'getExtraDhcpOpts',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['dnsNameservers'] = isset($data['dnsNameservers']) ? $data['dnsNameservers'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['subnetCidrs'] = isset($data['subnetCidrs']) ? $data['subnetCidrs'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['extraDhcpOpts'] = isset($data['extraDhcpOpts']) ? $data['extraDhcpOpts'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['dnsNameservers'] === null) {
            $invalidProperties[] = "'dnsNameservers' can't be null";
        }
        if ($this->container['zoneId'] === null) {
            $invalidProperties[] = "'zoneId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['subnetCidrs'] === null) {
            $invalidProperties[] = "'subnetCidrs' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['extraDhcpOpts'] === null) {
            $invalidProperties[] = "'extraDhcpOpts' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  **参数解释**： 子网的资源ID。子网创建成功后，会生成一个子网 ID，是子网对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
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
    * @param string $id **参数解释**： 子网的资源ID。子网创建成功后，会生成一个子网 ID，是子网对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
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
    *  **参数解释**： 子网的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文字符、_(下划线)、-（中划线）、.（点）。
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
    * @param string $name **参数解释**： 子网的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文字符、_(下划线)、-（中划线）、.（点）。
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
    *  **参数解释**： 子网的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
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
    * @param string $description **参数解释**： 子网的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dnsNameservers
    *  **参数解释**： 子网的DNS服务器地址列表。 **取值范围**： 不涉及。
    *
    * @return string[]
    */
    public function getDnsNameservers()
    {
        return $this->container['dnsNameservers'];
    }

    /**
    * Sets dnsNameservers
    *
    * @param string[] $dnsNameservers **参数解释**： 子网的DNS服务器地址列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDnsNameservers($dnsNameservers)
    {
        $this->container['dnsNameservers'] = $dnsNameservers;
        return $this;
    }

    /**
    * Gets zoneId
    *  **参数解释**： 子网的可用区ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getZoneId()
    {
        return $this->container['zoneId'];
    }

    /**
    * Sets zoneId
    *
    * @param string $zoneId **参数解释**： 子网的可用区ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 子网所属VPC的资源ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId **参数解释**： 子网所属VPC的资源ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 子网的状态。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
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
    * @param string $status **参数解释**： 子网的状态。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
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
    *  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
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
    * @param string $projectId **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**： 子网的作用域（边缘云场景）。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    *
    * @return string
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string $scope **参数解释**： 子网的作用域（边缘云场景）。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets subnetCidrs
    *  **参数解释**： OpenStack Neutron子网信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\SubnetCidr[]
    */
    public function getSubnetCidrs()
    {
        return $this->container['subnetCidrs'];
    }

    /**
    * Sets subnetCidrs
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\SubnetCidr[] $subnetCidrs **参数解释**： OpenStack Neutron子网信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubnetCidrs($subnetCidrs)
    {
        $this->container['subnetCidrs'] = $subnetCidrs;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 子网的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\ResponseTag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\ResponseTag[] $tags **参数解释**： 子网的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  **参数解释**： 子网的DHCP属性，支持配置NTP地址、DNS域名或租约到期时间。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\SubnetExtraDhcpOpt[]
    */
    public function getExtraDhcpOpts()
    {
        return $this->container['extraDhcpOpts'];
    }

    /**
    * Sets extraDhcpOpts
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\SubnetExtraDhcpOpt[] $extraDhcpOpts **参数解释**： 子网的DHCP属性，支持配置NTP地址、DNS域名或租约到期时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExtraDhcpOpts($extraDhcpOpts)
    {
        $this->container['extraDhcpOpts'] = $extraDhcpOpts;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**： 子网的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    * @param \DateTime $createdAt **参数解释**： 子网的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    *  **参数解释**： 子网的更新时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    * @param \DateTime $updatedAt **参数解释**： 子网的更新时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

