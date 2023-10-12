<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTrafficMirrorSessionOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTrafficMirrorSessionOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：流量镜像会话名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：流量镜像会话的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * trafficMirrorTargetId  功能说明：镜像目标ID
    * trafficMirrorTargetType  功能说明：镜像目的类型 取值范围：     eni：弹性网卡     elb：私网弹性负载均衡
    * virtualNetworkId  功能说明：指定VNI，用于在镜像目的区分不同会话的镜像流量 取值范围：0~16777215
    * packetLength  功能说明：最大传输单元MTU 取值范围：1~1460
    * priority  功能说明：会话优先级 取值范围：1~32766
    * enabled  功能说明：是否开启会话 取值范围：true、false
    * type  功能说明：支持的镜像源类型 取值范围：     eni：弹性网卡
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'trafficMirrorFilterId' => 'string',
            'trafficMirrorTargetId' => 'string',
            'trafficMirrorTargetType' => 'string',
            'virtualNetworkId' => 'int',
            'packetLength' => 'int',
            'priority' => 'int',
            'enabled' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：流量镜像会话名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：流量镜像会话的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * trafficMirrorTargetId  功能说明：镜像目标ID
    * trafficMirrorTargetType  功能说明：镜像目的类型 取值范围：     eni：弹性网卡     elb：私网弹性负载均衡
    * virtualNetworkId  功能说明：指定VNI，用于在镜像目的区分不同会话的镜像流量 取值范围：0~16777215
    * packetLength  功能说明：最大传输单元MTU 取值范围：1~1460
    * priority  功能说明：会话优先级 取值范围：1~32766
    * enabled  功能说明：是否开启会话 取值范围：true、false
    * type  功能说明：支持的镜像源类型 取值范围：     eni：弹性网卡
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'trafficMirrorFilterId' => null,
        'trafficMirrorTargetId' => null,
        'trafficMirrorTargetType' => null,
        'virtualNetworkId' => 'int32',
        'packetLength' => 'int32',
        'priority' => 'int32',
        'enabled' => null,
        'type' => null
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
    * name  功能说明：流量镜像会话名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：流量镜像会话的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * trafficMirrorTargetId  功能说明：镜像目标ID
    * trafficMirrorTargetType  功能说明：镜像目的类型 取值范围：     eni：弹性网卡     elb：私网弹性负载均衡
    * virtualNetworkId  功能说明：指定VNI，用于在镜像目的区分不同会话的镜像流量 取值范围：0~16777215
    * packetLength  功能说明：最大传输单元MTU 取值范围：1~1460
    * priority  功能说明：会话优先级 取值范围：1~32766
    * enabled  功能说明：是否开启会话 取值范围：true、false
    * type  功能说明：支持的镜像源类型 取值范围：     eni：弹性网卡
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'trafficMirrorFilterId' => 'traffic_mirror_filter_id',
            'trafficMirrorTargetId' => 'traffic_mirror_target_id',
            'trafficMirrorTargetType' => 'traffic_mirror_target_type',
            'virtualNetworkId' => 'virtual_network_id',
            'packetLength' => 'packet_length',
            'priority' => 'priority',
            'enabled' => 'enabled',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：流量镜像会话名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：流量镜像会话的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * trafficMirrorTargetId  功能说明：镜像目标ID
    * trafficMirrorTargetType  功能说明：镜像目的类型 取值范围：     eni：弹性网卡     elb：私网弹性负载均衡
    * virtualNetworkId  功能说明：指定VNI，用于在镜像目的区分不同会话的镜像流量 取值范围：0~16777215
    * packetLength  功能说明：最大传输单元MTU 取值范围：1~1460
    * priority  功能说明：会话优先级 取值范围：1~32766
    * enabled  功能说明：是否开启会话 取值范围：true、false
    * type  功能说明：支持的镜像源类型 取值范围：     eni：弹性网卡
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'trafficMirrorFilterId' => 'setTrafficMirrorFilterId',
            'trafficMirrorTargetId' => 'setTrafficMirrorTargetId',
            'trafficMirrorTargetType' => 'setTrafficMirrorTargetType',
            'virtualNetworkId' => 'setVirtualNetworkId',
            'packetLength' => 'setPacketLength',
            'priority' => 'setPriority',
            'enabled' => 'setEnabled',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：流量镜像会话名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：流量镜像会话的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * trafficMirrorFilterId  功能说明：流量镜像筛选条件ID
    * trafficMirrorTargetId  功能说明：镜像目标ID
    * trafficMirrorTargetType  功能说明：镜像目的类型 取值范围：     eni：弹性网卡     elb：私网弹性负载均衡
    * virtualNetworkId  功能说明：指定VNI，用于在镜像目的区分不同会话的镜像流量 取值范围：0~16777215
    * packetLength  功能说明：最大传输单元MTU 取值范围：1~1460
    * priority  功能说明：会话优先级 取值范围：1~32766
    * enabled  功能说明：是否开启会话 取值范围：true、false
    * type  功能说明：支持的镜像源类型 取值范围：     eni：弹性网卡
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'trafficMirrorFilterId' => 'getTrafficMirrorFilterId',
            'trafficMirrorTargetId' => 'getTrafficMirrorTargetId',
            'trafficMirrorTargetType' => 'getTrafficMirrorTargetType',
            'virtualNetworkId' => 'getVirtualNetworkId',
            'packetLength' => 'getPacketLength',
            'priority' => 'getPriority',
            'enabled' => 'getEnabled',
            'type' => 'getType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['trafficMirrorFilterId'] = isset($data['trafficMirrorFilterId']) ? $data['trafficMirrorFilterId'] : null;
        $this->container['trafficMirrorTargetId'] = isset($data['trafficMirrorTargetId']) ? $data['trafficMirrorTargetId'] : null;
        $this->container['trafficMirrorTargetType'] = isset($data['trafficMirrorTargetType']) ? $data['trafficMirrorTargetType'] : null;
        $this->container['virtualNetworkId'] = isset($data['virtualNetworkId']) ? $data['virtualNetworkId'] : null;
        $this->container['packetLength'] = isset($data['packetLength']) ? $data['packetLength'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets name
    *  功能说明：流量镜像会话名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string|null $name 功能说明：流量镜像会话名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：流量镜像会话的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * @param string|null $description 功能说明：流量镜像会话的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * @return string|null
    */
    public function getTrafficMirrorFilterId()
    {
        return $this->container['trafficMirrorFilterId'];
    }

    /**
    * Sets trafficMirrorFilterId
    *
    * @param string|null $trafficMirrorFilterId 功能说明：流量镜像筛选条件ID
    *
    * @return $this
    */
    public function setTrafficMirrorFilterId($trafficMirrorFilterId)
    {
        $this->container['trafficMirrorFilterId'] = $trafficMirrorFilterId;
        return $this;
    }

    /**
    * Gets trafficMirrorTargetId
    *  功能说明：镜像目标ID
    *
    * @return string|null
    */
    public function getTrafficMirrorTargetId()
    {
        return $this->container['trafficMirrorTargetId'];
    }

    /**
    * Sets trafficMirrorTargetId
    *
    * @param string|null $trafficMirrorTargetId 功能说明：镜像目标ID
    *
    * @return $this
    */
    public function setTrafficMirrorTargetId($trafficMirrorTargetId)
    {
        $this->container['trafficMirrorTargetId'] = $trafficMirrorTargetId;
        return $this;
    }

    /**
    * Gets trafficMirrorTargetType
    *  功能说明：镜像目的类型 取值范围：     eni：弹性网卡     elb：私网弹性负载均衡
    *
    * @return string|null
    */
    public function getTrafficMirrorTargetType()
    {
        return $this->container['trafficMirrorTargetType'];
    }

    /**
    * Sets trafficMirrorTargetType
    *
    * @param string|null $trafficMirrorTargetType 功能说明：镜像目的类型 取值范围：     eni：弹性网卡     elb：私网弹性负载均衡
    *
    * @return $this
    */
    public function setTrafficMirrorTargetType($trafficMirrorTargetType)
    {
        $this->container['trafficMirrorTargetType'] = $trafficMirrorTargetType;
        return $this;
    }

    /**
    * Gets virtualNetworkId
    *  功能说明：指定VNI，用于在镜像目的区分不同会话的镜像流量 取值范围：0~16777215
    *
    * @return int|null
    */
    public function getVirtualNetworkId()
    {
        return $this->container['virtualNetworkId'];
    }

    /**
    * Sets virtualNetworkId
    *
    * @param int|null $virtualNetworkId 功能说明：指定VNI，用于在镜像目的区分不同会话的镜像流量 取值范围：0~16777215
    *
    * @return $this
    */
    public function setVirtualNetworkId($virtualNetworkId)
    {
        $this->container['virtualNetworkId'] = $virtualNetworkId;
        return $this;
    }

    /**
    * Gets packetLength
    *  功能说明：最大传输单元MTU 取值范围：1~1460
    *
    * @return int|null
    */
    public function getPacketLength()
    {
        return $this->container['packetLength'];
    }

    /**
    * Sets packetLength
    *
    * @param int|null $packetLength 功能说明：最大传输单元MTU 取值范围：1~1460
    *
    * @return $this
    */
    public function setPacketLength($packetLength)
    {
        $this->container['packetLength'] = $packetLength;
        return $this;
    }

    /**
    * Gets priority
    *  功能说明：会话优先级 取值范围：1~32766
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
    * @param int|null $priority 功能说明：会话优先级 取值范围：1~32766
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets enabled
    *  功能说明：是否开启会话 取值范围：true、false
    *
    * @return string|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string|null $enabled 功能说明：是否开启会话 取值范围：true、false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets type
    *  功能说明：支持的镜像源类型 取值范围：     eni：弹性网卡
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 功能说明：支持的镜像源类型 取值范围：     eni：弹性网卡
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

