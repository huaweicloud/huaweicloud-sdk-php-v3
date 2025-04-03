<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpnGatewayRoutingTableEntryVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpnGatewayRoutingTableEntryVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destination  目的地址
    * nexthop  下一跳地址
    * outboundInterfaceIp  出接口地址
    * origin  BGP路由来源
    * asPath  BGP路由的AS路径
    * med  BGP路由的MED值
    * nexthopResource  nexthopResource
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destination' => 'string',
            'nexthop' => 'string',
            'outboundInterfaceIp' => 'string',
            'origin' => 'string',
            'asPath' => 'string',
            'med' => 'int',
            'nexthopResource' => '\HuaweiCloud\SDK\Vpn\V5\Model\NexthopResourceVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destination  目的地址
    * nexthop  下一跳地址
    * outboundInterfaceIp  出接口地址
    * origin  BGP路由来源
    * asPath  BGP路由的AS路径
    * med  BGP路由的MED值
    * nexthopResource  nexthopResource
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destination' => null,
        'nexthop' => null,
        'outboundInterfaceIp' => null,
        'origin' => null,
        'asPath' => null,
        'med' => 'int64',
        'nexthopResource' => null
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
    * destination  目的地址
    * nexthop  下一跳地址
    * outboundInterfaceIp  出接口地址
    * origin  BGP路由来源
    * asPath  BGP路由的AS路径
    * med  BGP路由的MED值
    * nexthopResource  nexthopResource
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destination' => 'destination',
            'nexthop' => 'nexthop',
            'outboundInterfaceIp' => 'outbound_interface_ip',
            'origin' => 'origin',
            'asPath' => 'as_path',
            'med' => 'med',
            'nexthopResource' => 'nexthop_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destination  目的地址
    * nexthop  下一跳地址
    * outboundInterfaceIp  出接口地址
    * origin  BGP路由来源
    * asPath  BGP路由的AS路径
    * med  BGP路由的MED值
    * nexthopResource  nexthopResource
    *
    * @var string[]
    */
    protected static $setters = [
            'destination' => 'setDestination',
            'nexthop' => 'setNexthop',
            'outboundInterfaceIp' => 'setOutboundInterfaceIp',
            'origin' => 'setOrigin',
            'asPath' => 'setAsPath',
            'med' => 'setMed',
            'nexthopResource' => 'setNexthopResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destination  目的地址
    * nexthop  下一跳地址
    * outboundInterfaceIp  出接口地址
    * origin  BGP路由来源
    * asPath  BGP路由的AS路径
    * med  BGP路由的MED值
    * nexthopResource  nexthopResource
    *
    * @var string[]
    */
    protected static $getters = [
            'destination' => 'getDestination',
            'nexthop' => 'getNexthop',
            'outboundInterfaceIp' => 'getOutboundInterfaceIp',
            'origin' => 'getOrigin',
            'asPath' => 'getAsPath',
            'med' => 'getMed',
            'nexthopResource' => 'getNexthopResource'
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['nexthop'] = isset($data['nexthop']) ? $data['nexthop'] : null;
        $this->container['outboundInterfaceIp'] = isset($data['outboundInterfaceIp']) ? $data['outboundInterfaceIp'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['asPath'] = isset($data['asPath']) ? $data['asPath'] : null;
        $this->container['med'] = isset($data['med']) ? $data['med'] : null;
        $this->container['nexthopResource'] = isset($data['nexthopResource']) ? $data['nexthopResource'] : null;
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
    * Gets destination
    *  目的地址
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 目的地址
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
    *  下一跳地址
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
    * @param string|null $nexthop 下一跳地址
    *
    * @return $this
    */
    public function setNexthop($nexthop)
    {
        $this->container['nexthop'] = $nexthop;
        return $this;
    }

    /**
    * Gets outboundInterfaceIp
    *  出接口地址
    *
    * @return string|null
    */
    public function getOutboundInterfaceIp()
    {
        return $this->container['outboundInterfaceIp'];
    }

    /**
    * Sets outboundInterfaceIp
    *
    * @param string|null $outboundInterfaceIp 出接口地址
    *
    * @return $this
    */
    public function setOutboundInterfaceIp($outboundInterfaceIp)
    {
        $this->container['outboundInterfaceIp'] = $outboundInterfaceIp;
        return $this;
    }

    /**
    * Gets origin
    *  BGP路由来源
    *
    * @return string|null
    */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
    * Sets origin
    *
    * @param string|null $origin BGP路由来源
    *
    * @return $this
    */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;
        return $this;
    }

    /**
    * Gets asPath
    *  BGP路由的AS路径
    *
    * @return string|null
    */
    public function getAsPath()
    {
        return $this->container['asPath'];
    }

    /**
    * Sets asPath
    *
    * @param string|null $asPath BGP路由的AS路径
    *
    * @return $this
    */
    public function setAsPath($asPath)
    {
        $this->container['asPath'] = $asPath;
        return $this;
    }

    /**
    * Gets med
    *  BGP路由的MED值
    *
    * @return int|null
    */
    public function getMed()
    {
        return $this->container['med'];
    }

    /**
    * Sets med
    *
    * @param int|null $med BGP路由的MED值
    *
    * @return $this
    */
    public function setMed($med)
    {
        $this->container['med'] = $med;
        return $this;
    }

    /**
    * Gets nexthopResource
    *  nexthopResource
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\NexthopResourceVo|null
    */
    public function getNexthopResource()
    {
        return $this->container['nexthopResource'];
    }

    /**
    * Sets nexthopResource
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\NexthopResourceVo|null $nexthopResource nexthopResource
    *
    * @return $this
    */
    public function setNexthopResource($nexthopResource)
    {
        $this->container['nexthopResource'] = $nexthopResource;
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

