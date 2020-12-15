<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicipShowResp implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicipShowResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthId' => 'string',
            'bandwidthName' => 'string',
            'bandwidthShareType' => 'string',
            'bandwidthSize' => 'int',
            'createTime' => '\DateTime',
            'enterpriseProjectId' => 'string',
            'id' => 'string',
            'portId' => 'string',
            'privateIpAddress' => 'string',
            'profile' => '\HuaweiCloud\SDK\Eip\V2\Model\ProfileResp',
            'publicIpAddress' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'type' => 'string',
            'publicIpv6Address' => 'string',
            'ipVersion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthId' => null,
        'bandwidthName' => null,
        'bandwidthShareType' => null,
        'bandwidthSize' => 'int32',
        'createTime' => 'date-time',
        'enterpriseProjectId' => null,
        'id' => null,
        'portId' => null,
        'privateIpAddress' => null,
        'profile' => null,
        'publicIpAddress' => null,
        'status' => null,
        'tenantId' => null,
        'type' => null,
        'publicIpv6Address' => null,
        'ipVersion' => 'int32'
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthId' => 'bandwidth_id',
            'bandwidthName' => 'bandwidth_name',
            'bandwidthShareType' => 'bandwidth_share_type',
            'bandwidthSize' => 'bandwidth_size',
            'createTime' => 'create_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'id' => 'id',
            'portId' => 'port_id',
            'privateIpAddress' => 'private_ip_address',
            'profile' => 'profile',
            'publicIpAddress' => 'public_ip_address',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'type' => 'type',
            'publicIpv6Address' => 'public_ipv6_address',
            'ipVersion' => 'ip_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthId' => 'setBandwidthId',
            'bandwidthName' => 'setBandwidthName',
            'bandwidthShareType' => 'setBandwidthShareType',
            'bandwidthSize' => 'setBandwidthSize',
            'createTime' => 'setCreateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'id' => 'setId',
            'portId' => 'setPortId',
            'privateIpAddress' => 'setPrivateIpAddress',
            'profile' => 'setProfile',
            'publicIpAddress' => 'setPublicIpAddress',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'type' => 'setType',
            'publicIpv6Address' => 'setPublicIpv6Address',
            'ipVersion' => 'setIpVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthId' => 'getBandwidthId',
            'bandwidthName' => 'getBandwidthName',
            'bandwidthShareType' => 'getBandwidthShareType',
            'bandwidthSize' => 'getBandwidthSize',
            'createTime' => 'getCreateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'id' => 'getId',
            'portId' => 'getPortId',
            'privateIpAddress' => 'getPrivateIpAddress',
            'profile' => 'getProfile',
            'publicIpAddress' => 'getPublicIpAddress',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'type' => 'getType',
            'publicIpv6Address' => 'getPublicIpv6Address',
            'ipVersion' => 'getIpVersion'
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
    const BANDWIDTH_SHARE_TYPE_WHOLE = 'WHOLE';
    const BANDWIDTH_SHARE_TYPE_PER = 'PER';
    const STATUS_FREEZED = 'FREEZED';
    const STATUS_BIND_ERROR = 'BIND_ERROR';
    const STATUS_BINDING = 'BINDING';
    const STATUS_PENDING_DELETE = 'PENDING_DELETE';
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const STATUS_NOTIFYING = 'NOTIFYING';
    const STATUS_NOTIFY_DELETE = 'NOTIFY_DELETE';
    const STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_ELB = 'ELB';
    const STATUS_ERROR = 'ERROR';
    const STATUS_VPN = 'VPN';
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthShareTypeAllowableValues()
    {
        return [
            self::BANDWIDTH_SHARE_TYPE_WHOLE,
            self::BANDWIDTH_SHARE_TYPE_PER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FREEZED,
            self::STATUS_BIND_ERROR,
            self::STATUS_BINDING,
            self::STATUS_PENDING_DELETE,
            self::STATUS_PENDING_CREATE,
            self::STATUS_NOTIFYING,
            self::STATUS_NOTIFY_DELETE,
            self::STATUS_PENDING_UPDATE,
            self::STATUS_DOWN,
            self::STATUS_ACTIVE,
            self::STATUS_ELB,
            self::STATUS_ERROR,
            self::STATUS_VPN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
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
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
        $this->container['bandwidthName'] = isset($data['bandwidthName']) ? $data['bandwidthName'] : null;
        $this->container['bandwidthShareType'] = isset($data['bandwidthShareType']) ? $data['bandwidthShareType'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['publicIpv6Address'] = isset($data['publicIpv6Address']) ? $data['publicIpv6Address'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bandwidthId']) && (mb_strlen($this->container['bandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getBandwidthShareTypeAllowableValues();
                if (!is_null($this->container['bandwidthShareType']) && !in_array($this->container['bandwidthShareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bandwidthShareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicIpAddress']) && (mb_strlen($this->container['publicIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be smaller than or equal to 15.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicIpv6Address']) && (mb_strlen($this->container['publicIpv6Address']) > 39)) {
                $invalidProperties[] = "invalid value for 'publicIpv6Address', the character length must be smaller than or equal to 39.";
            }
            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
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
    * Gets bandwidthId
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
    * @param string|null $bandwidthId 弹性公网IP对应带宽ID
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
    * @param string|null $bandwidthName 带宽名称
    *
    * @return $this
    */
    public function setBandwidthName($bandwidthName)
    {
        $this->container['bandwidthName'] = $bandwidthName;
        return $this;
    }

    /**
    * Gets bandwidthShareType
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
    * @param string|null $bandwidthShareType 表示共享带宽或者独享带宽  取值范围：PER，WHOLE。  WHOLE表示共享带宽  PER表示独享带宽  约束：其中IPv6暂不支持WHOLE类型带宽。
    *
    * @return $this
    */
    public function setBandwidthShareType($bandwidthShareType)
    {
        $this->container['bandwidthShareType'] = $bandwidthShareType;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 带宽大小，单位为Mbit/s。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets createTime
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 弹性公网IP申请时间（UTC）
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
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
    * @param string|null $enterpriseProjectId 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建弹性公网IP时，给弹性公网IP绑定企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets id
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
    * @param string|null $id 弹性公网IP唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets portId
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
    * @param string|null $portId 功能说明：端口id。  约束：只有绑定了的弹性公网IP查询才会返回该参数
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets privateIpAddress
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
    * @param string|null $privateIpAddress 功能说明：绑定弹性公网IP的私有IP地址  约束：只有绑定了的弹性公网IP查询才会返回该参数
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets profile
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\ProfileResp|null
    */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
    * Sets profile
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\ProfileResp|null $profile profile
    *
    * @return $this
    */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;
        return $this;
    }

    /**
    * Gets publicIpAddress
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
    * @param string|null $publicIpAddress IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets status
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
    * @param string|null $status 功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
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
    * @param string|null $tenantId 项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets type
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
    * @param string|null $type 弹性公网IP的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets publicIpv6Address
    *
    * @return string|null
    */
    public function getPublicIpv6Address()
    {
        return $this->container['publicIpv6Address'];
    }

    /**
    * Sets publicIpv6Address
    *
    * @param string|null $publicIpv6Address IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    *
    * @return $this
    */
    public function setPublicIpv6Address($publicIpv6Address)
    {
        $this->container['publicIpv6Address'] = $publicIpv6Address;
        return $this;
    }

    /**
    * Gets ipVersion
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion IP版本信息，取值范围是4和6  4：表示IPv4  6：表示IPv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
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

