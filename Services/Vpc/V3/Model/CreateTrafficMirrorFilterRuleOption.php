<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTrafficMirrorFilterRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTrafficMirrorFilterRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  功能说明：端口镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'trafficMirrorFilterId' => 'string',
            'direction' => 'string',
            'protocol' => 'string',
            'ethertype' => 'string',
            'sourceCidrBlock' => 'string',
            'destinationCidrBlock' => 'string',
            'sourcePortRange' => 'string',
            'destinationPortRange' => 'string',
            'action' => 'string',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  功能说明：端口镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'trafficMirrorFilterId' => null,
        'direction' => null,
        'protocol' => null,
        'ethertype' => null,
        'sourceCidrBlock' => null,
        'destinationCidrBlock' => null,
        'sourcePortRange' => null,
        'destinationPortRange' => null,
        'action' => null,
        'priority' => 'int32'
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
    * description  功能说明：端口镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'trafficMirrorFilterId' => 'traffic_mirror_filter_id',
            'direction' => 'direction',
            'protocol' => 'protocol',
            'ethertype' => 'ethertype',
            'sourceCidrBlock' => 'source_cidr_block',
            'destinationCidrBlock' => 'destination_cidr_block',
            'sourcePortRange' => 'source_port_range',
            'destinationPortRange' => 'destination_port_range',
            'action' => 'action',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  功能说明：端口镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'trafficMirrorFilterId' => 'setTrafficMirrorFilterId',
            'direction' => 'setDirection',
            'protocol' => 'setProtocol',
            'ethertype' => 'setEthertype',
            'sourceCidrBlock' => 'setSourceCidrBlock',
            'destinationCidrBlock' => 'setDestinationCidrBlock',
            'sourcePortRange' => 'setSourcePortRange',
            'destinationPortRange' => 'setDestinationPortRange',
            'action' => 'setAction',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  功能说明：端口镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * direction  功能说明：流量方向 取值范围：     ingress：入方向     egress：出方向
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'trafficMirrorFilterId' => 'getTrafficMirrorFilterId',
            'direction' => 'getDirection',
            'protocol' => 'getProtocol',
            'ethertype' => 'getEthertype',
            'sourceCidrBlock' => 'getSourceCidrBlock',
            'destinationCidrBlock' => 'getDestinationCidrBlock',
            'sourcePortRange' => 'getSourcePortRange',
            'destinationPortRange' => 'getDestinationPortRange',
            'action' => 'getAction',
            'priority' => 'getPriority'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['trafficMirrorFilterId'] = isset($data['trafficMirrorFilterId']) ? $data['trafficMirrorFilterId'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['sourceCidrBlock'] = isset($data['sourceCidrBlock']) ? $data['sourceCidrBlock'] : null;
        $this->container['destinationCidrBlock'] = isset($data['destinationCidrBlock']) ? $data['destinationCidrBlock'] : null;
        $this->container['sourcePortRange'] = isset($data['sourcePortRange']) ? $data['sourcePortRange'] : null;
        $this->container['destinationPortRange'] = isset($data['destinationPortRange']) ? $data['destinationPortRange'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trafficMirrorFilterId'] === null) {
            $invalidProperties[] = "'trafficMirrorFilterId' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['ethertype'] === null) {
            $invalidProperties[] = "'ethertype' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets description
    *  功能说明：端口镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 功能说明：端口镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * Gets sourceCidrBlock
    *  功能说明：镜像流量的源网段
    *
    * @return string|null
    */
    public function getSourceCidrBlock()
    {
        return $this->container['sourceCidrBlock'];
    }

    /**
    * Sets sourceCidrBlock
    *
    * @param string|null $sourceCidrBlock 功能说明：镜像流量的源网段
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
    * @return string|null
    */
    public function getDestinationCidrBlock()
    {
        return $this->container['destinationCidrBlock'];
    }

    /**
    * Sets destinationCidrBlock
    *
    * @param string|null $destinationCidrBlock 功能说明：镜像流量的目的网段
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
    * @return string|null
    */
    public function getSourcePortRange()
    {
        return $this->container['sourcePortRange'];
    }

    /**
    * Sets sourcePortRange
    *
    * @param string|null $sourcePortRange 功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
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
    * @return string|null
    */
    public function getDestinationPortRange()
    {
        return $this->container['destinationPortRange'];
    }

    /**
    * Sets destinationPortRange
    *
    * @param string|null $destinationPortRange 功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    *
    * @return $this
    */
    public function setDestinationPortRange($destinationPortRange)
    {
        $this->container['destinationPortRange'] = $destinationPortRange;
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

