<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEipResourcesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEipResourcesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态
    * publicIpv6  弹性公网IP,IPV6
    * enterpriseProjectId  企业项目id
    * deviceId  设备id
    * deviceName  设备名称
    * deviceOwner  设备拥有者
    * associateInstanceType  关联实例类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'publicIp' => 'string',
            'status' => 'int',
            'publicIpv6' => 'string',
            'enterpriseProjectId' => 'string',
            'deviceId' => 'string',
            'deviceName' => 'string',
            'deviceOwner' => 'string',
            'associateInstanceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态
    * publicIpv6  弹性公网IP,IPV6
    * enterpriseProjectId  企业项目id
    * deviceId  设备id
    * deviceName  设备名称
    * deviceOwner  设备拥有者
    * associateInstanceType  关联实例类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'publicIp' => null,
        'status' => 'int32',
        'publicIpv6' => null,
        'enterpriseProjectId' => null,
        'deviceId' => null,
        'deviceName' => null,
        'deviceOwner' => null,
        'associateInstanceType' => null
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
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态
    * publicIpv6  弹性公网IP,IPV6
    * enterpriseProjectId  企业项目id
    * deviceId  设备id
    * deviceName  设备名称
    * deviceOwner  设备拥有者
    * associateInstanceType  关联实例类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'publicIp' => 'public_ip',
            'status' => 'status',
            'publicIpv6' => 'public_ipv6',
            'enterpriseProjectId' => 'enterprise_project_id',
            'deviceId' => 'device_id',
            'deviceName' => 'device_name',
            'deviceOwner' => 'device_owner',
            'associateInstanceType' => 'associate_instance_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态
    * publicIpv6  弹性公网IP,IPV6
    * enterpriseProjectId  企业项目id
    * deviceId  设备id
    * deviceName  设备名称
    * deviceOwner  设备拥有者
    * associateInstanceType  关联实例类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'publicIp' => 'setPublicIp',
            'status' => 'setStatus',
            'publicIpv6' => 'setPublicIpv6',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'deviceId' => 'setDeviceId',
            'deviceName' => 'setDeviceName',
            'deviceOwner' => 'setDeviceOwner',
            'associateInstanceType' => 'setAssociateInstanceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态
    * publicIpv6  弹性公网IP,IPV6
    * enterpriseProjectId  企业项目id
    * deviceId  设备id
    * deviceName  设备名称
    * deviceOwner  设备拥有者
    * associateInstanceType  关联实例类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'publicIp' => 'getPublicIp',
            'status' => 'getStatus',
            'publicIpv6' => 'getPublicIpv6',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'deviceId' => 'getDeviceId',
            'deviceName' => 'getDeviceName',
            'deviceOwner' => 'getDeviceOwner',
            'associateInstanceType' => 'getAssociateInstanceType'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
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
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['publicIpv6'] = isset($data['publicIpv6']) ? $data['publicIpv6'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['associateInstanceType'] = isset($data['associateInstanceType']) ? $data['associateInstanceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  弹性公网ID
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
    * @param string|null $id 弹性公网ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets publicIp
    *  弹性公网IP
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 弹性公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets status
    *  EIP防护状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status EIP防护状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets publicIpv6
    *  弹性公网IP,IPV6
    *
    * @return string|null
    */
    public function getPublicIpv6()
    {
        return $this->container['publicIpv6'];
    }

    /**
    * Sets publicIpv6
    *
    * @param string|null $publicIpv6 弹性公网IP,IPV6
    *
    * @return $this
    */
    public function setPublicIpv6($publicIpv6)
    {
        $this->container['publicIpv6'] = $publicIpv6;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets deviceId
    *  设备id
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
    * @param string|null $deviceId 设备id
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets deviceName
    *  设备名称
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName 设备名称
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  设备拥有者
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
    * @param string|null $deviceOwner 设备拥有者
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets associateInstanceType
    *  关联实例类型
    *
    * @return string|null
    */
    public function getAssociateInstanceType()
    {
        return $this->container['associateInstanceType'];
    }

    /**
    * Sets associateInstanceType
    *
    * @param string|null $associateInstanceType 关联实例类型
    *
    * @return $this
    */
    public function setAssociateInstanceType($associateInstanceType)
    {
        $this->container['associateInstanceType'] = $associateInstanceType;
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

