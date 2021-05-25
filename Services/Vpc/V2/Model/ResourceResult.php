<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  功能说明：根据type过滤查询指定类型的配额  取值范围：vpc，subnet，securityGroup，securityGroupRule，publicIp，vpn，vpngw，vpcPeer，firewall，shareBandwidth，shareBandwidthIP，loadbalancer，listener，physicalConnect，virtualInterface，vpcContainRoutetable，routetableContainRoutes
    * used  功能说明：已创建的资源个数  取值范围：0~quota数
    * quota  功能说明：资源的最大配额数  取值范围：各类型资源默认配额数~Integer最大值
    * min  允许修改的配额最小值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'used' => 'int',
            'quota' => 'int',
            'min' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  功能说明：根据type过滤查询指定类型的配额  取值范围：vpc，subnet，securityGroup，securityGroupRule，publicIp，vpn，vpngw，vpcPeer，firewall，shareBandwidth，shareBandwidthIP，loadbalancer，listener，physicalConnect，virtualInterface，vpcContainRoutetable，routetableContainRoutes
    * used  功能说明：已创建的资源个数  取值范围：0~quota数
    * quota  功能说明：资源的最大配额数  取值范围：各类型资源默认配额数~Integer最大值
    * min  允许修改的配额最小值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'used' => 'int32',
        'quota' => 'int32',
        'min' => 'int32'
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
    * type  功能说明：根据type过滤查询指定类型的配额  取值范围：vpc，subnet，securityGroup，securityGroupRule，publicIp，vpn，vpngw，vpcPeer，firewall，shareBandwidth，shareBandwidthIP，loadbalancer，listener，physicalConnect，virtualInterface，vpcContainRoutetable，routetableContainRoutes
    * used  功能说明：已创建的资源个数  取值范围：0~quota数
    * quota  功能说明：资源的最大配额数  取值范围：各类型资源默认配额数~Integer最大值
    * min  允许修改的配额最小值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'used' => 'used',
            'quota' => 'quota',
            'min' => 'min'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  功能说明：根据type过滤查询指定类型的配额  取值范围：vpc，subnet，securityGroup，securityGroupRule，publicIp，vpn，vpngw，vpcPeer，firewall，shareBandwidth，shareBandwidthIP，loadbalancer，listener，physicalConnect，virtualInterface，vpcContainRoutetable，routetableContainRoutes
    * used  功能说明：已创建的资源个数  取值范围：0~quota数
    * quota  功能说明：资源的最大配额数  取值范围：各类型资源默认配额数~Integer最大值
    * min  允许修改的配额最小值
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'used' => 'setUsed',
            'quota' => 'setQuota',
            'min' => 'setMin'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  功能说明：根据type过滤查询指定类型的配额  取值范围：vpc，subnet，securityGroup，securityGroupRule，publicIp，vpn，vpngw，vpcPeer，firewall，shareBandwidth，shareBandwidthIP，loadbalancer，listener，physicalConnect，virtualInterface，vpcContainRoutetable，routetableContainRoutes
    * used  功能说明：已创建的资源个数  取值范围：0~quota数
    * quota  功能说明：资源的最大配额数  取值范围：各类型资源默认配额数~Integer最大值
    * min  允许修改的配额最小值
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'used' => 'getUsed',
            'quota' => 'getQuota',
            'min' => 'getMin'
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
    const TYPE_VPC = 'vpc';
    const TYPE_SUBNET = 'subnet';
    const TYPE_SECURITY_GROUP = 'securityGroup';
    const TYPE_SECURITY_GROUP_RULE = 'securityGroupRule';
    const TYPE_PUBLIC_IP = 'publicIp';
    const TYPE_VPN = 'vpn';
    const TYPE_VPNGW = 'vpngw';
    const TYPE_VPC_PEER = 'vpcPeer';
    const TYPE_FIREWALL = 'firewall';
    const TYPE_SHARE_BANDWIDTH = 'shareBandwidth';
    const TYPE_SHARE_BANDWIDTH_IP = 'shareBandwidthIP';
    const TYPE_LOADBALANCER = 'loadbalancer';
    const TYPE_LISTENER = 'listener';
    const TYPE_PHYSICAL_CONNECT = 'physicalConnect';
    const TYPE_VIRTUAL_INTERFACE = 'virtualInterface';
    const TYPE_VPC_CONTAIN_ROUTETABLE = 'vpcContainRoutetable';
    const TYPE_ROUTETABLE_CONTAIN_ROUTES = 'routetableContainRoutes';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VPC,
            self::TYPE_SUBNET,
            self::TYPE_SECURITY_GROUP,
            self::TYPE_SECURITY_GROUP_RULE,
            self::TYPE_PUBLIC_IP,
            self::TYPE_VPN,
            self::TYPE_VPNGW,
            self::TYPE_VPC_PEER,
            self::TYPE_FIREWALL,
            self::TYPE_SHARE_BANDWIDTH,
            self::TYPE_SHARE_BANDWIDTH_IP,
            self::TYPE_LOADBALANCER,
            self::TYPE_LISTENER,
            self::TYPE_PHYSICAL_CONNECT,
            self::TYPE_VIRTUAL_INTERFACE,
            self::TYPE_VPC_CONTAIN_ROUTETABLE,
            self::TYPE_ROUTETABLE_CONTAIN_ROUTES,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
        }
        if ($this->container['quota'] === null) {
            $invalidProperties[] = "'quota' can't be null";
        }
        if ($this->container['min'] === null) {
            $invalidProperties[] = "'min' can't be null";
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
    *  功能说明：根据type过滤查询指定类型的配额  取值范围：vpc，subnet，securityGroup，securityGroupRule，publicIp，vpn，vpngw，vpcPeer，firewall，shareBandwidth，shareBandwidthIP，loadbalancer，listener，physicalConnect，virtualInterface，vpcContainRoutetable，routetableContainRoutes
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 功能说明：根据type过滤查询指定类型的配额  取值范围：vpc，subnet，securityGroup，securityGroupRule，publicIp，vpn，vpngw，vpcPeer，firewall，shareBandwidth，shareBandwidthIP，loadbalancer，listener，physicalConnect，virtualInterface，vpcContainRoutetable，routetableContainRoutes
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets used
    *  功能说明：已创建的资源个数  取值范围：0~quota数
    *
    * @return int
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int $used 功能说明：已创建的资源个数  取值范围：0~quota数
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets quota
    *  功能说明：资源的最大配额数  取值范围：各类型资源默认配额数~Integer最大值
    *
    * @return int
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int $quota 功能说明：资源的最大配额数  取值范围：各类型资源默认配额数~Integer最大值
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets min
    *  允许修改的配额最小值
    *
    * @return int
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int $min 允许修改的配额最小值
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
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

