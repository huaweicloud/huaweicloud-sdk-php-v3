<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrafficMirrorFilterRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrafficMirrorFilterRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：流量镜像筛选规则ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'description' => 'string',
            'trafficMirrorFilterId' => 'string',
            'direction' => 'string',
            'sourceCidrBlock' => 'string',
            'destinationCidrBlock' => 'string',
            'sourcePortRange' => 'string',
            'destinationPortRange' => 'string',
            'ethertype' => 'string',
            'protocol' => 'string',
            'action' => 'string',
            'priority' => 'int',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：流量镜像筛选规则ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'description' => null,
        'trafficMirrorFilterId' => null,
        'direction' => null,
        'sourceCidrBlock' => null,
        'destinationCidrBlock' => null,
        'sourcePortRange' => null,
        'destinationPortRange' => null,
        'ethertype' => null,
        'protocol' => null,
        'action' => null,
        'priority' => 'int32',
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
    * id  功能说明：流量镜像筛选规则ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'description' => 'description',
            'trafficMirrorFilterId' => 'traffic_mirror_filter_id',
            'direction' => 'direction',
            'sourceCidrBlock' => 'source_cidr_block',
            'destinationCidrBlock' => 'destination_cidr_block',
            'sourcePortRange' => 'source_port_range',
            'destinationPortRange' => 'destination_port_range',
            'ethertype' => 'ethertype',
            'protocol' => 'protocol',
            'action' => 'action',
            'priority' => 'priority',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：流量镜像筛选规则ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'description' => 'setDescription',
            'trafficMirrorFilterId' => 'setTrafficMirrorFilterId',
            'direction' => 'setDirection',
            'sourceCidrBlock' => 'setSourceCidrBlock',
            'destinationCidrBlock' => 'setDestinationCidrBlock',
            'sourcePortRange' => 'setSourcePortRange',
            'destinationPortRange' => 'setDestinationPortRange',
            'ethertype' => 'setEthertype',
            'protocol' => 'setProtocol',
            'action' => 'setAction',
            'priority' => 'setPriority',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：流量镜像筛选规则ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'description' => 'getDescription',
            'trafficMirrorFilterId' => 'getTrafficMirrorFilterId',
            'direction' => 'getDirection',
            'sourceCidrBlock' => 'getSourceCidrBlock',
            'destinationCidrBlock' => 'getDestinationCidrBlock',
            'sourcePortRange' => 'getSourcePortRange',
            'destinationPortRange' => 'getDestinationPortRange',
            'ethertype' => 'getEthertype',
            'protocol' => 'getProtocol',
            'action' => 'getAction',
            'priority' => 'getPriority',
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['trafficMirrorFilterId'] = isset($data['trafficMirrorFilterId']) ? $data['trafficMirrorFilterId'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['sourceCidrBlock'] = isset($data['sourceCidrBlock']) ? $data['sourceCidrBlock'] : null;
        $this->container['destinationCidrBlock'] = isset($data['destinationCidrBlock']) ? $data['destinationCidrBlock'] : null;
        $this->container['sourcePortRange'] = isset($data['sourcePortRange']) ? $data['sourcePortRange'] : null;
        $this->container['destinationPortRange'] = isset($data['destinationPortRange']) ? $data['destinationPortRange'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['trafficMirrorFilterId'] === null) {
            $invalidProperties[] = "'trafficMirrorFilterId' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['sourceCidrBlock'] === null) {
            $invalidProperties[] = "'sourceCidrBlock' can't be null";
        }
        if ($this->container['destinationCidrBlock'] === null) {
            $invalidProperties[] = "'destinationCidrBlock' can't be null";
        }
        if ($this->container['sourcePortRange'] === null) {
            $invalidProperties[] = "'sourcePortRange' can't be null";
        }
        if ($this->container['destinationPortRange'] === null) {
            $invalidProperties[] = "'destinationPortRange' can't be null";
        }
        if ($this->container['ethertype'] === null) {
            $invalidProperties[] = "'ethertype' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    *  功能说明：流量镜像筛选规则ID
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
    * @param string $id 功能说明：流量镜像筛选规则ID
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
    *  功能说明：项目ID
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
    * @param string $projectId 功能说明：项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * @param string $description 功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets trafficMirrorFilterId
    *  功能说明：流量镜像筛选条件ID
    *
    * @return string
    */
    public function getTrafficMirrorFilterId()
    {
        return $this->container['trafficMirrorFilterId'];
    }

    /**
    * Sets trafficMirrorFilterId
    *
    * @param string $trafficMirrorFilterId 功能说明：流量镜像筛选条件ID
    *
    * @return $this
    */
    public function setTrafficMirrorFilterId($trafficMirrorFilterId)
    {
        $this->container['trafficMirrorFilterId'] = $trafficMirrorFilterId;
        return $this;
    }

    /**
    * Gets direction
    *  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    *
    * @return string
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string $direction 功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets sourceCidrBlock
    *  功能说明：镜像流量的源网段
    *
    * @return string
    */
    public function getSourceCidrBlock()
    {
        return $this->container['sourceCidrBlock'];
    }

    /**
    * Sets sourceCidrBlock
    *
    * @param string $sourceCidrBlock 功能说明：镜像流量的源网段
    *
    * @return $this
    */
    public function setSourceCidrBlock($sourceCidrBlock)
    {
        $this->container['sourceCidrBlock'] = $sourceCidrBlock;
        return $this;
    }

    /**
    * Gets destinationCidrBlock
    *  功能说明：镜像流量的目的网段
    *
    * @return string
    */
    public function getDestinationCidrBlock()
    {
        return $this->container['destinationCidrBlock'];
    }

    /**
    * Sets destinationCidrBlock
    *
    * @param string $destinationCidrBlock 功能说明：镜像流量的目的网段
    *
    * @return $this
    */
    public function setDestinationCidrBlock($destinationCidrBlock)
    {
        $this->container['destinationCidrBlock'] = $destinationCidrBlock;
        return $this;
    }

    /**
    * Gets sourcePortRange
    *  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    *
    * @return string
    */
    public function getSourcePortRange()
    {
        return $this->container['sourcePortRange'];
    }

    /**
    * Sets sourcePortRange
    *
    * @param string $sourcePortRange 功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    *
    * @return $this
    */
    public function setSourcePortRange($sourcePortRange)
    {
        $this->container['sourcePortRange'] = $sourcePortRange;
        return $this;
    }

    /**
    * Gets destinationPortRange
    *  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    *
    * @return string
    */
    public function getDestinationPortRange()
    {
        return $this->container['destinationPortRange'];
    }

    /**
    * Sets destinationPortRange
    *
    * @param string $destinationPortRange 功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    *
    * @return $this
    */
    public function setDestinationPortRange($destinationPortRange)
    {
        $this->container['destinationPortRange'] = $destinationPortRange;
        return $this;
    }

    /**
    * Gets ethertype
    *  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    *
    * @return string
    */
    public function getEthertype()
    {
        return $this->container['ethertype'];
    }

    /**
    * Sets ethertype
    *
    * @param string $ethertype 功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    *
    * @return $this
    */
    public function setEthertype($ethertype)
    {
        $this->container['ethertype'] = $ethertype;
        return $this;
    }

    /**
    * Gets protocol
    *  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets action
    *  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets priority
    *  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间戳
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
    * @param \DateTime $createdAt 创建时间戳
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
    *  更新时间戳
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
    * @param \DateTime $updatedAt 更新时间戳
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

