<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTrafficMirrorFilterRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTrafficMirrorFilterRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'protocol' => 'string',
            'ethertype' => 'string',
            'sourceCidrBlock' => 'string',
            'destinationCidrBlock' => 'string',
            'sourcePortRange' => 'string',
            'destinationPortRange' => 'string',
            'priority' => 'int',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'protocol' => null,
        'ethertype' => null,
        'sourceCidrBlock' => null,
        'destinationCidrBlock' => null,
        'sourcePortRange' => null,
        'destinationPortRange' => null,
        'priority' => 'int32',
        'action' => null
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
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'protocol' => 'protocol',
            'ethertype' => 'ethertype',
            'sourceCidrBlock' => 'source_cidr_block',
            'destinationCidrBlock' => 'destination_cidr_block',
            'sourcePortRange' => 'source_port_range',
            'destinationPortRange' => 'destination_port_range',
            'priority' => 'priority',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'protocol' => 'setProtocol',
            'ethertype' => 'setEthertype',
            'sourceCidrBlock' => 'setSourceCidrBlock',
            'destinationCidrBlock' => 'setDestinationCidrBlock',
            'sourcePortRange' => 'setSourcePortRange',
            'destinationPortRange' => 'setDestinationPortRange',
            'priority' => 'setPriority',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * protocol  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    * ethertype  功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
    * sourceCidrBlock  功能说明：镜像流量的源网段
    * destinationCidrBlock  功能说明：镜像流量的目的网段
    * sourcePortRange  功能说明：流量源端口范围 取值范围：1~65535 格式：80-200
    * destinationPortRange  功能说明：流量目的端口范围 取值范围：1~65535 格式：80-200
    * priority  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    * action  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'protocol' => 'getProtocol',
            'ethertype' => 'getEthertype',
            'sourceCidrBlock' => 'getSourceCidrBlock',
            'destinationCidrBlock' => 'getDestinationCidrBlock',
            'sourcePortRange' => 'getSourcePortRange',
            'destinationPortRange' => 'getDestinationPortRange',
            'priority' => 'getPriority',
            'action' => 'getAction'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['sourceCidrBlock'] = isset($data['sourceCidrBlock']) ? $data['sourceCidrBlock'] : null;
        $this->container['destinationCidrBlock'] = isset($data['destinationCidrBlock']) ? $data['destinationCidrBlock'] : null;
        $this->container['sourcePortRange'] = isset($data['sourcePortRange']) ? $data['sourcePortRange'] : null;
        $this->container['destinationPortRange'] = isset($data['destinationPortRange']) ? $data['destinationPortRange'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * @param string|null $description 功能说明：流量镜像筛选规则的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets protocol
    *  功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 功能说明：镜像流量的协议类型 取值范围：TCP、UDP、ICMP、ICMPV6、ALL
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
    * @return string|null
    */
    public function getEthertype()
    {
        return $this->container['ethertype'];
    }

    /**
    * Sets ethertype
    *
    * @param string|null $ethertype 功能说明：镜像流量的地址协议版本 取值范围：IPv4，IPv6
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
    * Gets priority
    *  功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 功能说明：镜像规则优先级 取值范围：1~65535，数字越小，优先级越高
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets action
    *  功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 功能说明：镜像策略 取值范围：accept（采集）、reject（不采集）
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

