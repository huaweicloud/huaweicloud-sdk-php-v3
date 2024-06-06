<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceEipResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceEipResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canEnablePublicAccess  是否能访问公网
    * id  弹性公网ID。
    * type  弹性公网IP的网络类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP地址。
    * privateIpAddress  私网IP地址。
    * status  弹性公网IP地址。
    * tenantId  租户ID。
    * createTime  创建时间。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthSize  带宽大小。
    * bandwidthShareType  带宽类型。枚举值：PER 和WHOLE。
    * profile  额外参数，包括订单id、产品id等信息。如果profile不为空，说明是包周期的弹性公网IP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canEnablePublicAccess' => 'bool',
            'id' => 'string',
            'type' => 'string',
            'portId' => 'string',
            'publicIpAddress' => 'string',
            'privateIpAddress' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'createTime' => 'string',
            'bandwidthId' => 'string',
            'bandwidthName' => 'string',
            'bandwidthSize' => 'string',
            'bandwidthShareType' => 'string',
            'profile' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canEnablePublicAccess  是否能访问公网
    * id  弹性公网ID。
    * type  弹性公网IP的网络类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP地址。
    * privateIpAddress  私网IP地址。
    * status  弹性公网IP地址。
    * tenantId  租户ID。
    * createTime  创建时间。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthSize  带宽大小。
    * bandwidthShareType  带宽类型。枚举值：PER 和WHOLE。
    * profile  额外参数，包括订单id、产品id等信息。如果profile不为空，说明是包周期的弹性公网IP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canEnablePublicAccess' => null,
        'id' => null,
        'type' => null,
        'portId' => null,
        'publicIpAddress' => null,
        'privateIpAddress' => null,
        'status' => null,
        'tenantId' => null,
        'createTime' => null,
        'bandwidthId' => null,
        'bandwidthName' => null,
        'bandwidthSize' => null,
        'bandwidthShareType' => null,
        'profile' => null
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
    * canEnablePublicAccess  是否能访问公网
    * id  弹性公网ID。
    * type  弹性公网IP的网络类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP地址。
    * privateIpAddress  私网IP地址。
    * status  弹性公网IP地址。
    * tenantId  租户ID。
    * createTime  创建时间。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthSize  带宽大小。
    * bandwidthShareType  带宽类型。枚举值：PER 和WHOLE。
    * profile  额外参数，包括订单id、产品id等信息。如果profile不为空，说明是包周期的弹性公网IP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canEnablePublicAccess' => 'can_enable_public_access',
            'id' => 'id',
            'type' => 'type',
            'portId' => 'port_id',
            'publicIpAddress' => 'public_ip_address',
            'privateIpAddress' => 'private_ip_address',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'createTime' => 'create_time',
            'bandwidthId' => 'bandwidth_id',
            'bandwidthName' => 'bandwidth_name',
            'bandwidthSize' => 'bandwidth_size',
            'bandwidthShareType' => 'bandwidth_share_type',
            'profile' => 'profile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canEnablePublicAccess  是否能访问公网
    * id  弹性公网ID。
    * type  弹性公网IP的网络类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP地址。
    * privateIpAddress  私网IP地址。
    * status  弹性公网IP地址。
    * tenantId  租户ID。
    * createTime  创建时间。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthSize  带宽大小。
    * bandwidthShareType  带宽类型。枚举值：PER 和WHOLE。
    * profile  额外参数，包括订单id、产品id等信息。如果profile不为空，说明是包周期的弹性公网IP。
    *
    * @var string[]
    */
    protected static $setters = [
            'canEnablePublicAccess' => 'setCanEnablePublicAccess',
            'id' => 'setId',
            'type' => 'setType',
            'portId' => 'setPortId',
            'publicIpAddress' => 'setPublicIpAddress',
            'privateIpAddress' => 'setPrivateIpAddress',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'createTime' => 'setCreateTime',
            'bandwidthId' => 'setBandwidthId',
            'bandwidthName' => 'setBandwidthName',
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthShareType' => 'setBandwidthShareType',
            'profile' => 'setProfile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canEnablePublicAccess  是否能访问公网
    * id  弹性公网ID。
    * type  弹性公网IP的网络类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP地址。
    * privateIpAddress  私网IP地址。
    * status  弹性公网IP地址。
    * tenantId  租户ID。
    * createTime  创建时间。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthSize  带宽大小。
    * bandwidthShareType  带宽类型。枚举值：PER 和WHOLE。
    * profile  额外参数，包括订单id、产品id等信息。如果profile不为空，说明是包周期的弹性公网IP。
    *
    * @var string[]
    */
    protected static $getters = [
            'canEnablePublicAccess' => 'getCanEnablePublicAccess',
            'id' => 'getId',
            'type' => 'getType',
            'portId' => 'getPortId',
            'publicIpAddress' => 'getPublicIpAddress',
            'privateIpAddress' => 'getPrivateIpAddress',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'createTime' => 'getCreateTime',
            'bandwidthId' => 'getBandwidthId',
            'bandwidthName' => 'getBandwidthName',
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthShareType' => 'getBandwidthShareType',
            'profile' => 'getProfile'
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
        $this->container['canEnablePublicAccess'] = isset($data['canEnablePublicAccess']) ? $data['canEnablePublicAccess'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
        $this->container['bandwidthName'] = isset($data['bandwidthName']) ? $data['bandwidthName'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthShareType'] = isset($data['bandwidthShareType']) ? $data['bandwidthShareType'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
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
    * Gets canEnablePublicAccess
    *  是否能访问公网
    *
    * @return bool|null
    */
    public function getCanEnablePublicAccess()
    {
        return $this->container['canEnablePublicAccess'];
    }

    /**
    * Sets canEnablePublicAccess
    *
    * @param bool|null $canEnablePublicAccess 是否能访问公网
    *
    * @return $this
    */
    public function setCanEnablePublicAccess($canEnablePublicAccess)
    {
        $this->container['canEnablePublicAccess'] = $canEnablePublicAccess;
        return $this;
    }

    /**
    * Gets id
    *  弹性公网ID。
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
    * @param string|null $id 弹性公网ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  弹性公网IP的网络类型。
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
    * @param string|null $type 弹性公网IP的网络类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets portId
    *  端口ID。
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
    * @param string|null $portId 端口ID。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  弹性公网IP地址。
    *
    * @return string|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string|null $publicIpAddress 弹性公网IP地址。
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  私网IP地址。
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
    * @param string|null $privateIpAddress 私网IP地址。
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets status
    *  弹性公网IP地址。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 弹性公网IP地址。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets bandwidthId
    *  带宽ID。
    *
    * @return string|null
    */
    public function getBandwidthId()
    {
        return $this->container['bandwidthId'];
    }

    /**
    * Sets bandwidthId
    *
    * @param string|null $bandwidthId 带宽ID。
    *
    * @return $this
    */
    public function setBandwidthId($bandwidthId)
    {
        $this->container['bandwidthId'] = $bandwidthId;
        return $this;
    }

    /**
    * Gets bandwidthName
    *  带宽名称。
    *
    * @return string|null
    */
    public function getBandwidthName()
    {
        return $this->container['bandwidthName'];
    }

    /**
    * Sets bandwidthName
    *
    * @param string|null $bandwidthName 带宽名称。
    *
    * @return $this
    */
    public function setBandwidthName($bandwidthName)
    {
        $this->container['bandwidthName'] = $bandwidthName;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽大小。
    *
    * @return string|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param string|null $bandwidthSize 带宽大小。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthShareType
    *  带宽类型。枚举值：PER 和WHOLE。
    *
    * @return string|null
    */
    public function getBandwidthShareType()
    {
        return $this->container['bandwidthShareType'];
    }

    /**
    * Sets bandwidthShareType
    *
    * @param string|null $bandwidthShareType 带宽类型。枚举值：PER 和WHOLE。
    *
    * @return $this
    */
    public function setBandwidthShareType($bandwidthShareType)
    {
        $this->container['bandwidthShareType'] = $bandwidthShareType;
        return $this;
    }

    /**
    * Gets profile
    *  额外参数，包括订单id、产品id等信息。如果profile不为空，说明是包周期的弹性公网IP。
    *
    * @return object|null
    */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
    * Sets profile
    *
    * @param object|null $profile 额外参数，包括订单id、产品id等信息。如果profile不为空，说明是包周期的弹性公网IP。
    *
    * @return $this
    */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;
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

