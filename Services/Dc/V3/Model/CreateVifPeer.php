<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVifPeer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVifPeer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * vifId  vif对等体对应的虚拟接口ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'addressFamily' => 'string',
            'localGatewayIp' => 'string',
            'remoteGatewayIp' => 'string',
            'routeMode' => 'string',
            'bgpAsn' => 'int',
            'bgpMd5' => 'string',
            'remoteEpGroup' => 'string[]',
            'vifId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * vifId  vif对等体对应的虚拟接口ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'addressFamily' => null,
        'localGatewayIp' => null,
        'remoteGatewayIp' => null,
        'routeMode' => null,
        'bgpAsn' => 'int32',
        'bgpMd5' => null,
        'remoteEpGroup' => null,
        'vifId' => null
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
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * vifId  vif对等体对应的虚拟接口ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'addressFamily' => 'address_family',
            'localGatewayIp' => 'local_gateway_ip',
            'remoteGatewayIp' => 'remote_gateway_ip',
            'routeMode' => 'route_mode',
            'bgpAsn' => 'bgp_asn',
            'bgpMd5' => 'bgp_md5',
            'remoteEpGroup' => 'remote_ep_group',
            'vifId' => 'vif_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * vifId  vif对等体对应的虚拟接口ID
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'addressFamily' => 'setAddressFamily',
            'localGatewayIp' => 'setLocalGatewayIp',
            'remoteGatewayIp' => 'setRemoteGatewayIp',
            'routeMode' => 'setRouteMode',
            'bgpAsn' => 'setBgpAsn',
            'bgpMd5' => 'setBgpMd5',
            'remoteEpGroup' => 'setRemoteEpGroup',
            'vifId' => 'setVifId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * vifId  vif对等体对应的虚拟接口ID
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'addressFamily' => 'getAddressFamily',
            'localGatewayIp' => 'getLocalGatewayIp',
            'remoteGatewayIp' => 'getRemoteGatewayIp',
            'routeMode' => 'getRouteMode',
            'bgpAsn' => 'getBgpAsn',
            'bgpMd5' => 'getBgpMd5',
            'remoteEpGroup' => 'getRemoteEpGroup',
            'vifId' => 'getVifId'
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
    const ROUTE_MODE_BGP = 'bgp';
    const ROUTE_MODE__STATIC = 'static';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRouteModeAllowableValues()
    {
        return [
            self::ROUTE_MODE_BGP,
            self::ROUTE_MODE__STATIC,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['localGatewayIp'] = isset($data['localGatewayIp']) ? $data['localGatewayIp'] : null;
        $this->container['remoteGatewayIp'] = isset($data['remoteGatewayIp']) ? $data['remoteGatewayIp'] : null;
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['bgpMd5'] = isset($data['bgpMd5']) ? $data['bgpMd5'] : null;
        $this->container['remoteEpGroup'] = isset($data['remoteEpGroup']) ? $data['remoteEpGroup'] : null;
        $this->container['vifId'] = isset($data['vifId']) ? $data['vifId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRouteModeAllowableValues();
                if (!is_null($this->container['routeMode']) && !in_array($this->container['routeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'routeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['routeMode']) && (mb_strlen($this->container['routeMode']) > 255)) {
                $invalidProperties[] = "invalid value for 'routeMode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 1)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vifId']) && (mb_strlen($this->container['vifId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vifId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vifId']) && (mb_strlen($this->container['vifId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vifId', the character length must be bigger than or equal to 36.";
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
    * Gets name
    *  VIF对等体名字
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
    * @param string|null $name VIF对等体名字
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
    *  VIF对等体名字描述信息
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
    * @param string|null $description VIF对等体名字描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets addressFamily
    *  接口的地址簇类型，ipv4，ipv6
    *
    * @return string|null
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param string|null $addressFamily 接口的地址簇类型，ipv4，ipv6
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
        return $this;
    }

    /**
    * Gets localGatewayIp
    *  VIF对等体云侧接口地址
    *
    * @return string|null
    */
    public function getLocalGatewayIp()
    {
        return $this->container['localGatewayIp'];
    }

    /**
    * Sets localGatewayIp
    *
    * @param string|null $localGatewayIp VIF对等体云侧接口地址
    *
    * @return $this
    */
    public function setLocalGatewayIp($localGatewayIp)
    {
        $this->container['localGatewayIp'] = $localGatewayIp;
        return $this;
    }

    /**
    * Gets remoteGatewayIp
    *  VIF对等体客户侧接口地址
    *
    * @return string|null
    */
    public function getRemoteGatewayIp()
    {
        return $this->container['remoteGatewayIp'];
    }

    /**
    * Sets remoteGatewayIp
    *
    * @param string|null $remoteGatewayIp VIF对等体客户侧接口地址
    *
    * @return $this
    */
    public function setRemoteGatewayIp($remoteGatewayIp)
    {
        $this->container['remoteGatewayIp'] = $remoteGatewayIp;
        return $this;
    }

    /**
    * Gets routeMode
    *  路由模式：static/bgp
    *
    * @return string|null
    */
    public function getRouteMode()
    {
        return $this->container['routeMode'];
    }

    /**
    * Sets routeMode
    *
    * @param string|null $routeMode 路由模式：static/bgp
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  BGP邻居的AS号
    *
    * @return int|null
    */
    public function getBgpAsn()
    {
        return $this->container['bgpAsn'];
    }

    /**
    * Sets bgpAsn
    *
    * @param int|null $bgpAsn BGP邻居的AS号
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets bgpMd5
    *  BGP邻居的MD5密码
    *
    * @return string|null
    */
    public function getBgpMd5()
    {
        return $this->container['bgpMd5'];
    }

    /**
    * Sets bgpMd5
    *
    * @param string|null $bgpMd5 BGP邻居的MD5密码
    *
    * @return $this
    */
    public function setBgpMd5($bgpMd5)
    {
        $this->container['bgpMd5'] = $bgpMd5;
        return $this;
    }

    /**
    * Gets remoteEpGroup
    *  远端子网列表，记录租户侧的cidrs
    *
    * @return string[]|null
    */
    public function getRemoteEpGroup()
    {
        return $this->container['remoteEpGroup'];
    }

    /**
    * Sets remoteEpGroup
    *
    * @param string[]|null $remoteEpGroup 远端子网列表，记录租户侧的cidrs
    *
    * @return $this
    */
    public function setRemoteEpGroup($remoteEpGroup)
    {
        $this->container['remoteEpGroup'] = $remoteEpGroup;
        return $this;
    }

    /**
    * Gets vifId
    *  vif对等体对应的虚拟接口ID
    *
    * @return string|null
    */
    public function getVifId()
    {
        return $this->container['vifId'];
    }

    /**
    * Sets vifId
    *
    * @param string|null $vifId vif对等体对应的虚拟接口ID
    *
    * @return $this
    */
    public function setVifId($vifId)
    {
        $this->container['vifId'] = $vifId;
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

