<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDetailNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDetail_network';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vip  云堡垒机实例浮动ip。(实例为主备模式时返回对应的值)
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * publicIp  云堡垒机实例弹性公网IP。
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * privateIp  云堡垒机实例私有ip。
    * vpcId  云堡垒机实例所在虚拟私有云ID。
    * subnetId  云堡垒机实例所在子网ID。
    * securityGroupId  云堡垒机实例所属的安全组ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vip' => 'string',
            'webPort' => 'string',
            'publicIp' => 'string',
            'publicId' => 'string',
            'privateIp' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vip  云堡垒机实例浮动ip。(实例为主备模式时返回对应的值)
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * publicIp  云堡垒机实例弹性公网IP。
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * privateIp  云堡垒机实例私有ip。
    * vpcId  云堡垒机实例所在虚拟私有云ID。
    * subnetId  云堡垒机实例所在子网ID。
    * securityGroupId  云堡垒机实例所属的安全组ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vip' => null,
        'webPort' => null,
        'publicIp' => null,
        'publicId' => null,
        'privateIp' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null
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
    * vip  云堡垒机实例浮动ip。(实例为主备模式时返回对应的值)
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * publicIp  云堡垒机实例弹性公网IP。
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * privateIp  云堡垒机实例私有ip。
    * vpcId  云堡垒机实例所在虚拟私有云ID。
    * subnetId  云堡垒机实例所在子网ID。
    * securityGroupId  云堡垒机实例所属的安全组ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vip' => 'vip',
            'webPort' => 'web_port',
            'publicIp' => 'public_ip',
            'publicId' => 'public_id',
            'privateIp' => 'private_ip',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vip  云堡垒机实例浮动ip。(实例为主备模式时返回对应的值)
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * publicIp  云堡垒机实例弹性公网IP。
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * privateIp  云堡垒机实例私有ip。
    * vpcId  云堡垒机实例所在虚拟私有云ID。
    * subnetId  云堡垒机实例所在子网ID。
    * securityGroupId  云堡垒机实例所属的安全组ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'vip' => 'setVip',
            'webPort' => 'setWebPort',
            'publicIp' => 'setPublicIp',
            'publicId' => 'setPublicId',
            'privateIp' => 'setPrivateIp',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vip  云堡垒机实例浮动ip。(实例为主备模式时返回对应的值)
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * publicIp  云堡垒机实例弹性公网IP。
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * privateIp  云堡垒机实例私有ip。
    * vpcId  云堡垒机实例所在虚拟私有云ID。
    * subnetId  云堡垒机实例所在子网ID。
    * securityGroupId  云堡垒机实例所属的安全组ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'vip' => 'getVip',
            'webPort' => 'getWebPort',
            'publicIp' => 'getPublicIp',
            'publicId' => 'getPublicId',
            'privateIp' => 'getPrivateIp',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId'
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
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['webPort'] = isset($data['webPort']) ? $data['webPort'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['publicId'] = isset($data['publicId']) ? $data['publicId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vip']) && (mb_strlen($this->container['vip']) > 36)) {
                $invalidProperties[] = "invalid value for 'vip', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vip']) && (mb_strlen($this->container['vip']) < 0)) {
                $invalidProperties[] = "invalid value for 'vip', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['webPort'] === null) {
            $invalidProperties[] = "'webPort' can't be null";
        }
            if ((mb_strlen($this->container['webPort']) > 36)) {
                $invalidProperties[] = "invalid value for 'webPort', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['webPort']) < 0)) {
                $invalidProperties[] = "invalid value for 'webPort', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['publicIp'] === null) {
            $invalidProperties[] = "'publicIp' can't be null";
        }
            if ((mb_strlen($this->container['publicIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['publicId'] === null) {
            $invalidProperties[] = "'publicId' can't be null";
        }
            if ((mb_strlen($this->container['publicId']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['publicId']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['privateIp'] === null) {
            $invalidProperties[] = "'privateIp' can't be null";
        }
            if ((mb_strlen($this->container['privateIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if ((mb_strlen($this->container['subnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['subnetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 0.";
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
    * Gets vip
    *  云堡垒机实例浮动ip。(实例为主备模式时返回对应的值)
    *
    * @return string|null
    */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
    * Sets vip
    *
    * @param string|null $vip 云堡垒机实例浮动ip。(实例为主备模式时返回对应的值)
    *
    * @return $this
    */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;
        return $this;
    }

    /**
    * Gets webPort
    *  云堡垒机实例WEB界面访问的端口号。
    *
    * @return string
    */
    public function getWebPort()
    {
        return $this->container['webPort'];
    }

    /**
    * Sets webPort
    *
    * @param string $webPort 云堡垒机实例WEB界面访问的端口号。
    *
    * @return $this
    */
    public function setWebPort($webPort)
    {
        $this->container['webPort'] = $webPort;
        return $this;
    }

    /**
    * Gets publicIp
    *  云堡垒机实例弹性公网IP。
    *
    * @return string
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string $publicIp 云堡垒机实例弹性公网IP。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets publicId
    *  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    *
    * @return string
    */
    public function getPublicId()
    {
        return $this->container['publicId'];
    }

    /**
    * Sets publicId
    *
    * @param string $publicId 云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    *
    * @return $this
    */
    public function setPublicId($publicId)
    {
        $this->container['publicId'] = $publicId;
        return $this;
    }

    /**
    * Gets privateIp
    *  云堡垒机实例私有ip。
    *
    * @return string
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string $privateIp 云堡垒机实例私有ip。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets vpcId
    *  云堡垒机实例所在虚拟私有云ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 云堡垒机实例所在虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  云堡垒机实例所在子网ID。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 云堡垒机实例所在子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  云堡垒机实例所属的安全组ID。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 云堡垒机实例所属的安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
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

