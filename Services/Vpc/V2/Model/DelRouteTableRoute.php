<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DelRouteTableRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DelRouteTableRoute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  功能说明：路由的类型 取值范围： ecs：弹性云服务器 eni：网卡 vip：虚拟IP nat：NAT网关 peering：对等连接 vpn：虚拟专用网络 dc：云专线 cc：云连接 egw：VPC终端节点 er：企业路由器 subeni：辅助弹性网卡 local：保留网段，用户下发路由的目的网段不能和local类型路由的目的网段有重叠
    * destination  功能说明：路由目的网段 约束：合法的CIDR格式
    * nexthop  功能说明：路由下一跳对象的ID 取值范围： 当type为ecs时，传入ecs实例ID； 当type为eni时，取值为从网卡ID； 当type为vip时，取值为vip对应的IP地址； 当type为nat时，取值为nat实例对应的ID； 当type为peering时，取值为peering对应实例ID； 当type为vpn时，取值为vpn实例ID； 当type为dc时，取值为dc实例ID; 当type为cc时，取值为cc的实例ID； 当type为egw时，取值为vpc终端节点的实例ID； 当type为er时，取值为企业路由器的实例ID； 当type为subeni时，取值为辅助弹性网卡的实例ID。
    * description  功能说明：路由的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'destination' => 'string',
            'nexthop' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  功能说明：路由的类型 取值范围： ecs：弹性云服务器 eni：网卡 vip：虚拟IP nat：NAT网关 peering：对等连接 vpn：虚拟专用网络 dc：云专线 cc：云连接 egw：VPC终端节点 er：企业路由器 subeni：辅助弹性网卡 local：保留网段，用户下发路由的目的网段不能和local类型路由的目的网段有重叠
    * destination  功能说明：路由目的网段 约束：合法的CIDR格式
    * nexthop  功能说明：路由下一跳对象的ID 取值范围： 当type为ecs时，传入ecs实例ID； 当type为eni时，取值为从网卡ID； 当type为vip时，取值为vip对应的IP地址； 当type为nat时，取值为nat实例对应的ID； 当type为peering时，取值为peering对应实例ID； 当type为vpn时，取值为vpn实例ID； 当type为dc时，取值为dc实例ID; 当type为cc时，取值为cc的实例ID； 当type为egw时，取值为vpc终端节点的实例ID； 当type为er时，取值为企业路由器的实例ID； 当type为subeni时，取值为辅助弹性网卡的实例ID。
    * description  功能说明：路由的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'destination' => null,
        'nexthop' => null,
        'description' => null
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
    * type  功能说明：路由的类型 取值范围： ecs：弹性云服务器 eni：网卡 vip：虚拟IP nat：NAT网关 peering：对等连接 vpn：虚拟专用网络 dc：云专线 cc：云连接 egw：VPC终端节点 er：企业路由器 subeni：辅助弹性网卡 local：保留网段，用户下发路由的目的网段不能和local类型路由的目的网段有重叠
    * destination  功能说明：路由目的网段 约束：合法的CIDR格式
    * nexthop  功能说明：路由下一跳对象的ID 取值范围： 当type为ecs时，传入ecs实例ID； 当type为eni时，取值为从网卡ID； 当type为vip时，取值为vip对应的IP地址； 当type为nat时，取值为nat实例对应的ID； 当type为peering时，取值为peering对应实例ID； 当type为vpn时，取值为vpn实例ID； 当type为dc时，取值为dc实例ID; 当type为cc时，取值为cc的实例ID； 当type为egw时，取值为vpc终端节点的实例ID； 当type为er时，取值为企业路由器的实例ID； 当type为subeni时，取值为辅助弹性网卡的实例ID。
    * description  功能说明：路由的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'destination' => 'destination',
            'nexthop' => 'nexthop',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  功能说明：路由的类型 取值范围： ecs：弹性云服务器 eni：网卡 vip：虚拟IP nat：NAT网关 peering：对等连接 vpn：虚拟专用网络 dc：云专线 cc：云连接 egw：VPC终端节点 er：企业路由器 subeni：辅助弹性网卡 local：保留网段，用户下发路由的目的网段不能和local类型路由的目的网段有重叠
    * destination  功能说明：路由目的网段 约束：合法的CIDR格式
    * nexthop  功能说明：路由下一跳对象的ID 取值范围： 当type为ecs时，传入ecs实例ID； 当type为eni时，取值为从网卡ID； 当type为vip时，取值为vip对应的IP地址； 当type为nat时，取值为nat实例对应的ID； 当type为peering时，取值为peering对应实例ID； 当type为vpn时，取值为vpn实例ID； 当type为dc时，取值为dc实例ID; 当type为cc时，取值为cc的实例ID； 当type为egw时，取值为vpc终端节点的实例ID； 当type为er时，取值为企业路由器的实例ID； 当type为subeni时，取值为辅助弹性网卡的实例ID。
    * description  功能说明：路由的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'destination' => 'setDestination',
            'nexthop' => 'setNexthop',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  功能说明：路由的类型 取值范围： ecs：弹性云服务器 eni：网卡 vip：虚拟IP nat：NAT网关 peering：对等连接 vpn：虚拟专用网络 dc：云专线 cc：云连接 egw：VPC终端节点 er：企业路由器 subeni：辅助弹性网卡 local：保留网段，用户下发路由的目的网段不能和local类型路由的目的网段有重叠
    * destination  功能说明：路由目的网段 约束：合法的CIDR格式
    * nexthop  功能说明：路由下一跳对象的ID 取值范围： 当type为ecs时，传入ecs实例ID； 当type为eni时，取值为从网卡ID； 当type为vip时，取值为vip对应的IP地址； 当type为nat时，取值为nat实例对应的ID； 当type为peering时，取值为peering对应实例ID； 当type为vpn时，取值为vpn实例ID； 当type为dc时，取值为dc实例ID; 当type为cc时，取值为cc的实例ID； 当type为egw时，取值为vpc终端节点的实例ID； 当type为er时，取值为企业路由器的实例ID； 当type为subeni时，取值为辅助弹性网卡的实例ID。
    * description  功能说明：路由的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'destination' => 'getDestination',
            'nexthop' => 'getNexthop',
            'description' => 'getDescription'
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['nexthop'] = isset($data['nexthop']) ? $data['nexthop'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
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
    * Gets type
    *  功能说明：路由的类型 取值范围： ecs：弹性云服务器 eni：网卡 vip：虚拟IP nat：NAT网关 peering：对等连接 vpn：虚拟专用网络 dc：云专线 cc：云连接 egw：VPC终端节点 er：企业路由器 subeni：辅助弹性网卡 local：保留网段，用户下发路由的目的网段不能和local类型路由的目的网段有重叠
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
    * @param string|null $type 功能说明：路由的类型 取值范围： ecs：弹性云服务器 eni：网卡 vip：虚拟IP nat：NAT网关 peering：对等连接 vpn：虚拟专用网络 dc：云专线 cc：云连接 egw：VPC终端节点 er：企业路由器 subeni：辅助弹性网卡 local：保留网段，用户下发路由的目的网段不能和local类型路由的目的网段有重叠
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets destination
    *  功能说明：路由目的网段 约束：合法的CIDR格式
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 功能说明：路由目的网段 约束：合法的CIDR格式
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets nexthop
    *  功能说明：路由下一跳对象的ID 取值范围： 当type为ecs时，传入ecs实例ID； 当type为eni时，取值为从网卡ID； 当type为vip时，取值为vip对应的IP地址； 当type为nat时，取值为nat实例对应的ID； 当type为peering时，取值为peering对应实例ID； 当type为vpn时，取值为vpn实例ID； 当type为dc时，取值为dc实例ID; 当type为cc时，取值为cc的实例ID； 当type为egw时，取值为vpc终端节点的实例ID； 当type为er时，取值为企业路由器的实例ID； 当type为subeni时，取值为辅助弹性网卡的实例ID。
    *
    * @return string|null
    */
    public function getNexthop()
    {
        return $this->container['nexthop'];
    }

    /**
    * Sets nexthop
    *
    * @param string|null $nexthop 功能说明：路由下一跳对象的ID 取值范围： 当type为ecs时，传入ecs实例ID； 当type为eni时，取值为从网卡ID； 当type为vip时，取值为vip对应的IP地址； 当type为nat时，取值为nat实例对应的ID； 当type为peering时，取值为peering对应实例ID； 当type为vpn时，取值为vpn实例ID； 当type为dc时，取值为dc实例ID; 当type为cc时，取值为cc的实例ID； 当type为egw时，取值为vpc终端节点的实例ID； 当type为er时，取值为企业路由器的实例ID； 当type为subeni时，取值为辅助弹性网卡的实例ID。
    *
    * @return $this
    */
    public function setNexthop($nexthop)
    {
        $this->container['nexthop'] = $nexthop;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：路由的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * @param string|null $description 功能说明：路由的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

