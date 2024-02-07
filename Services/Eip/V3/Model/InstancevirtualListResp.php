<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstancevirtualListResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstancevirtualListResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  virtualnexthop的uuid
    * owner  virtualnexthop的所有者
    * location  标识网关所在位置POD、AZ、REGION、GLOBAL
    * forwardMode  功能说明：nexthops的转发模式  取值范围：'ACTIVE-ACTIVE'多活模式、'ACTIVE-STANDBY'主备模式
    * clusterId  功能说明：网关所在集群信息，可为空  取值范围：0-36长度的字符串
    * hashMode  功能说明：nexthops在底层的负载均衡策略  取值范围：'2_TUPLE'二元组、'3_TUPLE'三元组、'5_TUPLE'五元组
    * type  功能说明：下一跳所属网络类型  取值范围：'VXLAN'、'VLAN'
    * vni  功能说明：网络id标识，与type组合使用  取值范围：type=VXLAN时取值0-16777215,type=VLAN时取值0-4095
    * nexthops  下一跳信息列表
    * createdAt  功能说明：VirtualNexthop对象创建时间，UTC格式
    * updatedAt  功能说明：VirtualNexthop对象更新时间，UTC格式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'owner' => 'string',
            'location' => 'string',
            'forwardMode' => 'string',
            'clusterId' => 'string',
            'hashMode' => 'string',
            'type' => 'string',
            'vni' => 'int',
            'nexthops' => '\HuaweiCloud\SDK\Eip\V3\Model\NexthopDict[]',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  virtualnexthop的uuid
    * owner  virtualnexthop的所有者
    * location  标识网关所在位置POD、AZ、REGION、GLOBAL
    * forwardMode  功能说明：nexthops的转发模式  取值范围：'ACTIVE-ACTIVE'多活模式、'ACTIVE-STANDBY'主备模式
    * clusterId  功能说明：网关所在集群信息，可为空  取值范围：0-36长度的字符串
    * hashMode  功能说明：nexthops在底层的负载均衡策略  取值范围：'2_TUPLE'二元组、'3_TUPLE'三元组、'5_TUPLE'五元组
    * type  功能说明：下一跳所属网络类型  取值范围：'VXLAN'、'VLAN'
    * vni  功能说明：网络id标识，与type组合使用  取值范围：type=VXLAN时取值0-16777215,type=VLAN时取值0-4095
    * nexthops  下一跳信息列表
    * createdAt  功能说明：VirtualNexthop对象创建时间，UTC格式
    * updatedAt  功能说明：VirtualNexthop对象更新时间，UTC格式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'owner' => null,
        'location' => null,
        'forwardMode' => null,
        'clusterId' => null,
        'hashMode' => null,
        'type' => null,
        'vni' => 'int32',
        'nexthops' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  virtualnexthop的uuid
    * owner  virtualnexthop的所有者
    * location  标识网关所在位置POD、AZ、REGION、GLOBAL
    * forwardMode  功能说明：nexthops的转发模式  取值范围：'ACTIVE-ACTIVE'多活模式、'ACTIVE-STANDBY'主备模式
    * clusterId  功能说明：网关所在集群信息，可为空  取值范围：0-36长度的字符串
    * hashMode  功能说明：nexthops在底层的负载均衡策略  取值范围：'2_TUPLE'二元组、'3_TUPLE'三元组、'5_TUPLE'五元组
    * type  功能说明：下一跳所属网络类型  取值范围：'VXLAN'、'VLAN'
    * vni  功能说明：网络id标识，与type组合使用  取值范围：type=VXLAN时取值0-16777215,type=VLAN时取值0-4095
    * nexthops  下一跳信息列表
    * createdAt  功能说明：VirtualNexthop对象创建时间，UTC格式
    * updatedAt  功能说明：VirtualNexthop对象更新时间，UTC格式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'owner' => 'owner',
            'location' => 'location',
            'forwardMode' => 'forward_mode',
            'clusterId' => 'cluster_id',
            'hashMode' => 'hash_mode',
            'type' => 'type',
            'vni' => 'vni',
            'nexthops' => 'nexthops',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  virtualnexthop的uuid
    * owner  virtualnexthop的所有者
    * location  标识网关所在位置POD、AZ、REGION、GLOBAL
    * forwardMode  功能说明：nexthops的转发模式  取值范围：'ACTIVE-ACTIVE'多活模式、'ACTIVE-STANDBY'主备模式
    * clusterId  功能说明：网关所在集群信息，可为空  取值范围：0-36长度的字符串
    * hashMode  功能说明：nexthops在底层的负载均衡策略  取值范围：'2_TUPLE'二元组、'3_TUPLE'三元组、'5_TUPLE'五元组
    * type  功能说明：下一跳所属网络类型  取值范围：'VXLAN'、'VLAN'
    * vni  功能说明：网络id标识，与type组合使用  取值范围：type=VXLAN时取值0-16777215,type=VLAN时取值0-4095
    * nexthops  下一跳信息列表
    * createdAt  功能说明：VirtualNexthop对象创建时间，UTC格式
    * updatedAt  功能说明：VirtualNexthop对象更新时间，UTC格式
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'owner' => 'setOwner',
            'location' => 'setLocation',
            'forwardMode' => 'setForwardMode',
            'clusterId' => 'setClusterId',
            'hashMode' => 'setHashMode',
            'type' => 'setType',
            'vni' => 'setVni',
            'nexthops' => 'setNexthops',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  virtualnexthop的uuid
    * owner  virtualnexthop的所有者
    * location  标识网关所在位置POD、AZ、REGION、GLOBAL
    * forwardMode  功能说明：nexthops的转发模式  取值范围：'ACTIVE-ACTIVE'多活模式、'ACTIVE-STANDBY'主备模式
    * clusterId  功能说明：网关所在集群信息，可为空  取值范围：0-36长度的字符串
    * hashMode  功能说明：nexthops在底层的负载均衡策略  取值范围：'2_TUPLE'二元组、'3_TUPLE'三元组、'5_TUPLE'五元组
    * type  功能说明：下一跳所属网络类型  取值范围：'VXLAN'、'VLAN'
    * vni  功能说明：网络id标识，与type组合使用  取值范围：type=VXLAN时取值0-16777215,type=VLAN时取值0-4095
    * nexthops  下一跳信息列表
    * createdAt  功能说明：VirtualNexthop对象创建时间，UTC格式
    * updatedAt  功能说明：VirtualNexthop对象更新时间，UTC格式
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'owner' => 'getOwner',
            'location' => 'getLocation',
            'forwardMode' => 'getForwardMode',
            'clusterId' => 'getClusterId',
            'hashMode' => 'getHashMode',
            'type' => 'getType',
            'vni' => 'getVni',
            'nexthops' => 'getNexthops',
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
    const FORWARD_MODE_ACTIVE_ACTIVE = 'ACTIVE-ACTIVE';
    const FORWARD_MODE_ACTIVE_STANDBY = 'ACTIVE-STANDBY';
    const HASH_MODE__2_TUPLE = '2_TUPLE';
    const HASH_MODE__3_TUPLE = '3_TUPLE';
    const HASH_MODE__5_TUPLE = '5_TUPLE';
    const TYPE_VLAN = 'VLAN';
    const TYPE_VXLAN = 'VXLAN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getForwardModeAllowableValues()
    {
        return [
            self::FORWARD_MODE_ACTIVE_ACTIVE,
            self::FORWARD_MODE_ACTIVE_STANDBY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHashModeAllowableValues()
    {
        return [
            self::HASH_MODE__2_TUPLE,
            self::HASH_MODE__3_TUPLE,
            self::HASH_MODE__5_TUPLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VLAN,
            self::TYPE_VXLAN,
        ];
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['forwardMode'] = isset($data['forwardMode']) ? $data['forwardMode'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['hashMode'] = isset($data['hashMode']) ? $data['hashMode'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vni'] = isset($data['vni']) ? $data['vni'] : null;
        $this->container['nexthops'] = isset($data['nexthops']) ? $data['nexthops'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 256)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 0)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 256)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) < 0)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getForwardModeAllowableValues();
                if (!is_null($this->container['forwardMode']) && !in_array($this->container['forwardMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'forwardMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['forwardMode']) && (mb_strlen($this->container['forwardMode']) > 256)) {
                $invalidProperties[] = "invalid value for 'forwardMode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['forwardMode']) && (mb_strlen($this->container['forwardMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'forwardMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getHashModeAllowableValues();
                if (!is_null($this->container['hashMode']) && !in_array($this->container['hashMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hashMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hashMode']) && (mb_strlen($this->container['hashMode']) > 256)) {
                $invalidProperties[] = "invalid value for 'hashMode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hashMode']) && (mb_strlen($this->container['hashMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'hashMode', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vni']) && ($this->container['vni'] > 999999)) {
                $invalidProperties[] = "invalid value for 'vni', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['vni']) && ($this->container['vni'] < 0)) {
                $invalidProperties[] = "invalid value for 'vni', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 256)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 256)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
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
    *  virtualnexthop的uuid
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id virtualnexthop的uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets owner
    *  virtualnexthop的所有者
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner virtualnexthop的所有者
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets location
    *  标识网关所在位置POD、AZ、REGION、GLOBAL
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 标识网关所在位置POD、AZ、REGION、GLOBAL
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets forwardMode
    *  功能说明：nexthops的转发模式  取值范围：'ACTIVE-ACTIVE'多活模式、'ACTIVE-STANDBY'主备模式
    *
    * @return string|null
    */
    public function getForwardMode()
    {
        return $this->container['forwardMode'];
    }

    /**
    * Sets forwardMode
    *
    * @param string|null $forwardMode 功能说明：nexthops的转发模式  取值范围：'ACTIVE-ACTIVE'多活模式、'ACTIVE-STANDBY'主备模式
    *
    * @return $this
    */
    public function setForwardMode($forwardMode)
    {
        $this->container['forwardMode'] = $forwardMode;
        return $this;
    }

    /**
    * Gets clusterId
    *  功能说明：网关所在集群信息，可为空  取值范围：0-36长度的字符串
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 功能说明：网关所在集群信息，可为空  取值范围：0-36长度的字符串
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets hashMode
    *  功能说明：nexthops在底层的负载均衡策略  取值范围：'2_TUPLE'二元组、'3_TUPLE'三元组、'5_TUPLE'五元组
    *
    * @return string|null
    */
    public function getHashMode()
    {
        return $this->container['hashMode'];
    }

    /**
    * Sets hashMode
    *
    * @param string|null $hashMode 功能说明：nexthops在底层的负载均衡策略  取值范围：'2_TUPLE'二元组、'3_TUPLE'三元组、'5_TUPLE'五元组
    *
    * @return $this
    */
    public function setHashMode($hashMode)
    {
        $this->container['hashMode'] = $hashMode;
        return $this;
    }

    /**
    * Gets type
    *  功能说明：下一跳所属网络类型  取值范围：'VXLAN'、'VLAN'
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
    * @param string|null $type 功能说明：下一跳所属网络类型  取值范围：'VXLAN'、'VLAN'
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vni
    *  功能说明：网络id标识，与type组合使用  取值范围：type=VXLAN时取值0-16777215,type=VLAN时取值0-4095
    *
    * @return int|null
    */
    public function getVni()
    {
        return $this->container['vni'];
    }

    /**
    * Sets vni
    *
    * @param int|null $vni 功能说明：网络id标识，与type组合使用  取值范围：type=VXLAN时取值0-16777215,type=VLAN时取值0-4095
    *
    * @return $this
    */
    public function setVni($vni)
    {
        $this->container['vni'] = $vni;
        return $this;
    }

    /**
    * Gets nexthops
    *  下一跳信息列表
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\NexthopDict[]|null
    */
    public function getNexthops()
    {
        return $this->container['nexthops'];
    }

    /**
    * Sets nexthops
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\NexthopDict[]|null $nexthops 下一跳信息列表
    *
    * @return $this
    */
    public function setNexthops($nexthops)
    {
        $this->container['nexthops'] = $nexthops;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：VirtualNexthop对象创建时间，UTC格式
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
    * @param string|null $createdAt 功能说明：VirtualNexthop对象创建时间，UTC格式
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
    *  功能说明：VirtualNexthop对象更新时间，UTC格式
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
    * @param string|null $updatedAt 功能说明：VirtualNexthop对象更新时间，UTC格式
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

