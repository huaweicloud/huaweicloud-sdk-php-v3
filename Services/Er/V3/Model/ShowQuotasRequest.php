<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQuotasRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQuotasRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  支持过滤的配额类型： - er_instance: 企业路由器实例的配额和使用量 - dc_attachment: 云专线网关连接的配额和使用量 - vpc_attachment: VPC连接的配额和使用量 - vpn_attachment: VPN网关连接的配额和使用量 - peering_attachment：云连接实例连接的配额和使用量 - can_attachment: 智能接入网关连接的配额和使用量 - route_table: 路由表的配额和使用量 - static_route: 静态路由的配额和使用量 - vpc_er: 每个vpc可以接入的企业路由器数量和当前使用量 - flow_log: 每个连接可以创建的流日志数量
    * erId  erId
    * routeTableId  routeTableId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string[]',
            'erId' => 'string[]',
            'routeTableId' => 'string[]',
            'vpcId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  支持过滤的配额类型： - er_instance: 企业路由器实例的配额和使用量 - dc_attachment: 云专线网关连接的配额和使用量 - vpc_attachment: VPC连接的配额和使用量 - vpn_attachment: VPN网关连接的配额和使用量 - peering_attachment：云连接实例连接的配额和使用量 - can_attachment: 智能接入网关连接的配额和使用量 - route_table: 路由表的配额和使用量 - static_route: 静态路由的配额和使用量 - vpc_er: 每个vpc可以接入的企业路由器数量和当前使用量 - flow_log: 每个连接可以创建的流日志数量
    * erId  erId
    * routeTableId  routeTableId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'erId' => null,
        'routeTableId' => null,
        'vpcId' => null
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
    * type  支持过滤的配额类型： - er_instance: 企业路由器实例的配额和使用量 - dc_attachment: 云专线网关连接的配额和使用量 - vpc_attachment: VPC连接的配额和使用量 - vpn_attachment: VPN网关连接的配额和使用量 - peering_attachment：云连接实例连接的配额和使用量 - can_attachment: 智能接入网关连接的配额和使用量 - route_table: 路由表的配额和使用量 - static_route: 静态路由的配额和使用量 - vpc_er: 每个vpc可以接入的企业路由器数量和当前使用量 - flow_log: 每个连接可以创建的流日志数量
    * erId  erId
    * routeTableId  routeTableId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'erId' => 'erId',
            'routeTableId' => 'routeTableId',
            'vpcId' => 'vpcId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  支持过滤的配额类型： - er_instance: 企业路由器实例的配额和使用量 - dc_attachment: 云专线网关连接的配额和使用量 - vpc_attachment: VPC连接的配额和使用量 - vpn_attachment: VPN网关连接的配额和使用量 - peering_attachment：云连接实例连接的配额和使用量 - can_attachment: 智能接入网关连接的配额和使用量 - route_table: 路由表的配额和使用量 - static_route: 静态路由的配额和使用量 - vpc_er: 每个vpc可以接入的企业路由器数量和当前使用量 - flow_log: 每个连接可以创建的流日志数量
    * erId  erId
    * routeTableId  routeTableId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'erId' => 'setErId',
            'routeTableId' => 'setRouteTableId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  支持过滤的配额类型： - er_instance: 企业路由器实例的配额和使用量 - dc_attachment: 云专线网关连接的配额和使用量 - vpc_attachment: VPC连接的配额和使用量 - vpn_attachment: VPN网关连接的配额和使用量 - peering_attachment：云连接实例连接的配额和使用量 - can_attachment: 智能接入网关连接的配额和使用量 - route_table: 路由表的配额和使用量 - static_route: 静态路由的配额和使用量 - vpc_er: 每个vpc可以接入的企业路由器数量和当前使用量 - flow_log: 每个连接可以创建的流日志数量
    * erId  erId
    * routeTableId  routeTableId
    * vpcId  vpcId
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'erId' => 'getErId',
            'routeTableId' => 'getRouteTableId',
            'vpcId' => 'getVpcId'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['routeTableId'] = isset($data['routeTableId']) ? $data['routeTableId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
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
    * Gets type
    *  支持过滤的配额类型： - er_instance: 企业路由器实例的配额和使用量 - dc_attachment: 云专线网关连接的配额和使用量 - vpc_attachment: VPC连接的配额和使用量 - vpn_attachment: VPN网关连接的配额和使用量 - peering_attachment：云连接实例连接的配额和使用量 - can_attachment: 智能接入网关连接的配额和使用量 - route_table: 路由表的配额和使用量 - static_route: 静态路由的配额和使用量 - vpc_er: 每个vpc可以接入的企业路由器数量和当前使用量 - flow_log: 每个连接可以创建的流日志数量
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 支持过滤的配额类型： - er_instance: 企业路由器实例的配额和使用量 - dc_attachment: 云专线网关连接的配额和使用量 - vpc_attachment: VPC连接的配额和使用量 - vpn_attachment: VPN网关连接的配额和使用量 - peering_attachment：云连接实例连接的配额和使用量 - can_attachment: 智能接入网关连接的配额和使用量 - route_table: 路由表的配额和使用量 - static_route: 静态路由的配额和使用量 - vpc_er: 每个vpc可以接入的企业路由器数量和当前使用量 - flow_log: 每个连接可以创建的流日志数量
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets erId
    *  erId
    *
    * @return string[]|null
    */
    public function getErId()
    {
        return $this->container['erId'];
    }

    /**
    * Sets erId
    *
    * @param string[]|null $erId erId
    *
    * @return $this
    */
    public function setErId($erId)
    {
        $this->container['erId'] = $erId;
        return $this;
    }

    /**
    * Gets routeTableId
    *  routeTableId
    *
    * @return string[]|null
    */
    public function getRouteTableId()
    {
        return $this->container['routeTableId'];
    }

    /**
    * Sets routeTableId
    *
    * @param string[]|null $routeTableId routeTableId
    *
    * @return $this
    */
    public function setRouteTableId($routeTableId)
    {
        $this->container['routeTableId'] = $routeTableId;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpcId
    *
    * @return string[]|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string[]|null $vpcId vpcId
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

