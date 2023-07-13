<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VnicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VnicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privateIpAddress  功能说明：私网IP地址
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新,由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属,如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新,由系统自动维护
    * vpcId  功能说明：虚拟私有云ID
    * portId  功能说明：端口ID
    * portProfile  功能说明：端口profile信息
    * mac  功能说明：端口MAC地址 约束：由系统分配,不支持指定
    * vtep  功能说明：VTEP IP
    * vni  功能说明：VXLAN ID
    * instanceId  功能说明：端口所属实例ID,例如RDS实例ID 约束：不支持设置和更新,由系统自动维护
    * instanceType  功能说明：端口所属实例类型,例如“RDS” 约束：不支持设置和更新,由系统自动维护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateIpAddress' => 'string',
            'deviceId' => 'string',
            'deviceOwner' => 'string',
            'vpcId' => 'string',
            'portId' => 'string',
            'portProfile' => 'string',
            'mac' => 'string',
            'vtep' => 'string',
            'vni' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateIpAddress  功能说明：私网IP地址
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新,由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属,如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新,由系统自动维护
    * vpcId  功能说明：虚拟私有云ID
    * portId  功能说明：端口ID
    * portProfile  功能说明：端口profile信息
    * mac  功能说明：端口MAC地址 约束：由系统分配,不支持指定
    * vtep  功能说明：VTEP IP
    * vni  功能说明：VXLAN ID
    * instanceId  功能说明：端口所属实例ID,例如RDS实例ID 约束：不支持设置和更新,由系统自动维护
    * instanceType  功能说明：端口所属实例类型,例如“RDS” 约束：不支持设置和更新,由系统自动维护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateIpAddress' => null,
        'deviceId' => null,
        'deviceOwner' => null,
        'vpcId' => null,
        'portId' => null,
        'portProfile' => null,
        'mac' => null,
        'vtep' => null,
        'vni' => null,
        'instanceId' => null,
        'instanceType' => null
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
    * privateIpAddress  功能说明：私网IP地址
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新,由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属,如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新,由系统自动维护
    * vpcId  功能说明：虚拟私有云ID
    * portId  功能说明：端口ID
    * portProfile  功能说明：端口profile信息
    * mac  功能说明：端口MAC地址 约束：由系统分配,不支持指定
    * vtep  功能说明：VTEP IP
    * vni  功能说明：VXLAN ID
    * instanceId  功能说明：端口所属实例ID,例如RDS实例ID 约束：不支持设置和更新,由系统自动维护
    * instanceType  功能说明：端口所属实例类型,例如“RDS” 约束：不支持设置和更新,由系统自动维护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateIpAddress' => 'private_ip_address',
            'deviceId' => 'device_id',
            'deviceOwner' => 'device_owner',
            'vpcId' => 'vpc_id',
            'portId' => 'port_id',
            'portProfile' => 'port_profile',
            'mac' => 'mac',
            'vtep' => 'vtep',
            'vni' => 'vni',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateIpAddress  功能说明：私网IP地址
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新,由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属,如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新,由系统自动维护
    * vpcId  功能说明：虚拟私有云ID
    * portId  功能说明：端口ID
    * portProfile  功能说明：端口profile信息
    * mac  功能说明：端口MAC地址 约束：由系统分配,不支持指定
    * vtep  功能说明：VTEP IP
    * vni  功能说明：VXLAN ID
    * instanceId  功能说明：端口所属实例ID,例如RDS实例ID 约束：不支持设置和更新,由系统自动维护
    * instanceType  功能说明：端口所属实例类型,例如“RDS” 约束：不支持设置和更新,由系统自动维护
    *
    * @var string[]
    */
    protected static $setters = [
            'privateIpAddress' => 'setPrivateIpAddress',
            'deviceId' => 'setDeviceId',
            'deviceOwner' => 'setDeviceOwner',
            'vpcId' => 'setVpcId',
            'portId' => 'setPortId',
            'portProfile' => 'setPortProfile',
            'mac' => 'setMac',
            'vtep' => 'setVtep',
            'vni' => 'setVni',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateIpAddress  功能说明：私网IP地址
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新,由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属,如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新,由系统自动维护
    * vpcId  功能说明：虚拟私有云ID
    * portId  功能说明：端口ID
    * portProfile  功能说明：端口profile信息
    * mac  功能说明：端口MAC地址 约束：由系统分配,不支持指定
    * vtep  功能说明：VTEP IP
    * vni  功能说明：VXLAN ID
    * instanceId  功能说明：端口所属实例ID,例如RDS实例ID 约束：不支持设置和更新,由系统自动维护
    * instanceType  功能说明：端口所属实例类型,例如“RDS” 约束：不支持设置和更新,由系统自动维护
    *
    * @var string[]
    */
    protected static $getters = [
            'privateIpAddress' => 'getPrivateIpAddress',
            'deviceId' => 'getDeviceId',
            'deviceOwner' => 'getDeviceOwner',
            'vpcId' => 'getVpcId',
            'portId' => 'getPortId',
            'portProfile' => 'getPortProfile',
            'mac' => 'getMac',
            'vtep' => 'getVtep',
            'vni' => 'getVni',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType'
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
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['portProfile'] = isset($data['portProfile']) ? $data['portProfile'] : null;
        $this->container['mac'] = isset($data['mac']) ? $data['mac'] : null;
        $this->container['vtep'] = isset($data['vtep']) ? $data['vtep'] : null;
        $this->container['vni'] = isset($data['vni']) ? $data['vni'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) > 36)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceOwner']) && (mb_strlen($this->container['deviceOwner']) > 64)) {
                $invalidProperties[] = "invalid value for 'deviceOwner', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deviceOwner']) && (mb_strlen($this->container['deviceOwner']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceOwner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) < 0)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portProfile']) && (mb_strlen($this->container['portProfile']) > 256)) {
                $invalidProperties[] = "invalid value for 'portProfile', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['portProfile']) && (mb_strlen($this->container['portProfile']) < 0)) {
                $invalidProperties[] = "invalid value for 'portProfile', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mac']) && (mb_strlen($this->container['mac']) > 64)) {
                $invalidProperties[] = "invalid value for 'mac', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mac']) && (mb_strlen($this->container['mac']) < 0)) {
                $invalidProperties[] = "invalid value for 'mac', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vtep']) && (mb_strlen($this->container['vtep']) > 36)) {
                $invalidProperties[] = "invalid value for 'vtep', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vtep']) && (mb_strlen($this->container['vtep']) < 0)) {
                $invalidProperties[] = "invalid value for 'vtep', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vni']) && (mb_strlen($this->container['vni']) > 36)) {
                $invalidProperties[] = "invalid value for 'vni', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vni']) && (mb_strlen($this->container['vni']) < 0)) {
                $invalidProperties[] = "invalid value for 'vni', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 0.";
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
    * Gets privateIpAddress
    *  功能说明：私网IP地址
    *
    * @return string|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string|null $privateIpAddress 功能说明：私网IP地址
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets deviceId
    *  功能说明：端口所属设备ID 约束：不支持设置和更新,由系统自动维护
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 功能说明：端口所属设备ID 约束：不支持设置和更新,由系统自动维护
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  功能说明：设备所属 取值范围：合法设备所属,如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新,由系统自动维护
    *
    * @return string|null
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string|null $deviceOwner 功能说明：设备所属 取值范围：合法设备所属,如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新,由系统自动维护
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets vpcId
    *  功能说明：虚拟私有云ID
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 功能说明：虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets portId
    *  功能说明：端口ID
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 功能说明：端口ID
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets portProfile
    *  功能说明：端口profile信息
    *
    * @return string|null
    */
    public function getPortProfile()
    {
        return $this->container['portProfile'];
    }

    /**
    * Sets portProfile
    *
    * @param string|null $portProfile 功能说明：端口profile信息
    *
    * @return $this
    */
    public function setPortProfile($portProfile)
    {
        $this->container['portProfile'] = $portProfile;
        return $this;
    }

    /**
    * Gets mac
    *  功能说明：端口MAC地址 约束：由系统分配,不支持指定
    *
    * @return string|null
    */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
    * Sets mac
    *
    * @param string|null $mac 功能说明：端口MAC地址 约束：由系统分配,不支持指定
    *
    * @return $this
    */
    public function setMac($mac)
    {
        $this->container['mac'] = $mac;
        return $this;
    }

    /**
    * Gets vtep
    *  功能说明：VTEP IP
    *
    * @return string|null
    */
    public function getVtep()
    {
        return $this->container['vtep'];
    }

    /**
    * Sets vtep
    *
    * @param string|null $vtep 功能说明：VTEP IP
    *
    * @return $this
    */
    public function setVtep($vtep)
    {
        $this->container['vtep'] = $vtep;
        return $this;
    }

    /**
    * Gets vni
    *  功能说明：VXLAN ID
    *
    * @return string|null
    */
    public function getVni()
    {
        return $this->container['vni'];
    }

    /**
    * Sets vni
    *
    * @param string|null $vni 功能说明：VXLAN ID
    *
    * @return $this
    */
    public function setVni($vni)
    {
        $this->container['vni'] = $vni;
        return $this;
    }

    /**
    * Gets instanceId
    *  功能说明：端口所属实例ID,例如RDS实例ID 约束：不支持设置和更新,由系统自动维护
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 功能说明：端口所属实例ID,例如RDS实例ID 约束：不支持设置和更新,由系统自动维护
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  功能说明：端口所属实例类型,例如“RDS” 约束：不支持设置和更新,由系统自动维护
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 功能说明：端口所属实例类型,例如“RDS” 约束：不支持设置和更新,由系统自动维护
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
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

