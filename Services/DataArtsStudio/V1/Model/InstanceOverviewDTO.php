<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceOverviewDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceOverviewDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  集群ID。
    * name  集群名称。
    * description  集群描述信息。
    * externalAddress  公网IP地址。
    * intranetAddress  内网IPv4地址。
    * intranetAddressIpv6  内网IPv6地址。
    * publicZoneId  公网域名ID。
    * publicZoneName  公网域名名称。
    * privateZoneId  内网域名ID。
    * privateZoneName  内网域名名称。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * createUser  创建人。
    * currentNamespacePublishApiNum  当前工作空间已发布的API数量。
    * allNamespacePublishApiNum  所有工作空间已发布的API数量。
    * apiPublishableNum  集群API总配额。
    * deletable  集群是否可以删除。
    * chargeStatus  集群计费状态，NO_CHARGE：未计费、CHARGED：已计费，GRACE：宽限期、RETENTION：保留期。
    * orderId  订单ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'externalAddress' => 'string',
            'intranetAddress' => 'string',
            'intranetAddressIpv6' => 'string',
            'publicZoneId' => 'string',
            'publicZoneName' => 'string',
            'privateZoneId' => 'string',
            'privateZoneName' => 'string',
            'enterpriseProjectId' => 'string',
            'createTime' => 'int',
            'createUser' => 'string',
            'currentNamespacePublishApiNum' => 'int',
            'allNamespacePublishApiNum' => 'int',
            'apiPublishableNum' => 'int',
            'deletable' => 'bool',
            'chargeStatus' => 'string',
            'orderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  集群ID。
    * name  集群名称。
    * description  集群描述信息。
    * externalAddress  公网IP地址。
    * intranetAddress  内网IPv4地址。
    * intranetAddressIpv6  内网IPv6地址。
    * publicZoneId  公网域名ID。
    * publicZoneName  公网域名名称。
    * privateZoneId  内网域名ID。
    * privateZoneName  内网域名名称。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * createUser  创建人。
    * currentNamespacePublishApiNum  当前工作空间已发布的API数量。
    * allNamespacePublishApiNum  所有工作空间已发布的API数量。
    * apiPublishableNum  集群API总配额。
    * deletable  集群是否可以删除。
    * chargeStatus  集群计费状态，NO_CHARGE：未计费、CHARGED：已计费，GRACE：宽限期、RETENTION：保留期。
    * orderId  订单ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'externalAddress' => null,
        'intranetAddress' => null,
        'intranetAddressIpv6' => null,
        'publicZoneId' => null,
        'publicZoneName' => null,
        'privateZoneId' => null,
        'privateZoneName' => null,
        'enterpriseProjectId' => null,
        'createTime' => 'int64',
        'createUser' => null,
        'currentNamespacePublishApiNum' => 'int32',
        'allNamespacePublishApiNum' => 'int32',
        'apiPublishableNum' => 'int32',
        'deletable' => null,
        'chargeStatus' => null,
        'orderId' => null
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
    * id  集群ID。
    * name  集群名称。
    * description  集群描述信息。
    * externalAddress  公网IP地址。
    * intranetAddress  内网IPv4地址。
    * intranetAddressIpv6  内网IPv6地址。
    * publicZoneId  公网域名ID。
    * publicZoneName  公网域名名称。
    * privateZoneId  内网域名ID。
    * privateZoneName  内网域名名称。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * createUser  创建人。
    * currentNamespacePublishApiNum  当前工作空间已发布的API数量。
    * allNamespacePublishApiNum  所有工作空间已发布的API数量。
    * apiPublishableNum  集群API总配额。
    * deletable  集群是否可以删除。
    * chargeStatus  集群计费状态，NO_CHARGE：未计费、CHARGED：已计费，GRACE：宽限期、RETENTION：保留期。
    * orderId  订单ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'externalAddress' => 'external_address',
            'intranetAddress' => 'intranet_address',
            'intranetAddressIpv6' => 'intranet_address_ipv6',
            'publicZoneId' => 'public_zone_id',
            'publicZoneName' => 'public_zone_name',
            'privateZoneId' => 'private_zone_id',
            'privateZoneName' => 'private_zone_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'currentNamespacePublishApiNum' => 'current_namespace_publish_api_num',
            'allNamespacePublishApiNum' => 'all_namespace_publish_api_num',
            'apiPublishableNum' => 'api_publishable_num',
            'deletable' => 'deletable',
            'chargeStatus' => 'charge_status',
            'orderId' => 'order_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  集群ID。
    * name  集群名称。
    * description  集群描述信息。
    * externalAddress  公网IP地址。
    * intranetAddress  内网IPv4地址。
    * intranetAddressIpv6  内网IPv6地址。
    * publicZoneId  公网域名ID。
    * publicZoneName  公网域名名称。
    * privateZoneId  内网域名ID。
    * privateZoneName  内网域名名称。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * createUser  创建人。
    * currentNamespacePublishApiNum  当前工作空间已发布的API数量。
    * allNamespacePublishApiNum  所有工作空间已发布的API数量。
    * apiPublishableNum  集群API总配额。
    * deletable  集群是否可以删除。
    * chargeStatus  集群计费状态，NO_CHARGE：未计费、CHARGED：已计费，GRACE：宽限期、RETENTION：保留期。
    * orderId  订单ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'externalAddress' => 'setExternalAddress',
            'intranetAddress' => 'setIntranetAddress',
            'intranetAddressIpv6' => 'setIntranetAddressIpv6',
            'publicZoneId' => 'setPublicZoneId',
            'publicZoneName' => 'setPublicZoneName',
            'privateZoneId' => 'setPrivateZoneId',
            'privateZoneName' => 'setPrivateZoneName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'currentNamespacePublishApiNum' => 'setCurrentNamespacePublishApiNum',
            'allNamespacePublishApiNum' => 'setAllNamespacePublishApiNum',
            'apiPublishableNum' => 'setApiPublishableNum',
            'deletable' => 'setDeletable',
            'chargeStatus' => 'setChargeStatus',
            'orderId' => 'setOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  集群ID。
    * name  集群名称。
    * description  集群描述信息。
    * externalAddress  公网IP地址。
    * intranetAddress  内网IPv4地址。
    * intranetAddressIpv6  内网IPv6地址。
    * publicZoneId  公网域名ID。
    * publicZoneName  公网域名名称。
    * privateZoneId  内网域名ID。
    * privateZoneName  内网域名名称。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * createUser  创建人。
    * currentNamespacePublishApiNum  当前工作空间已发布的API数量。
    * allNamespacePublishApiNum  所有工作空间已发布的API数量。
    * apiPublishableNum  集群API总配额。
    * deletable  集群是否可以删除。
    * chargeStatus  集群计费状态，NO_CHARGE：未计费、CHARGED：已计费，GRACE：宽限期、RETENTION：保留期。
    * orderId  订单ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'externalAddress' => 'getExternalAddress',
            'intranetAddress' => 'getIntranetAddress',
            'intranetAddressIpv6' => 'getIntranetAddressIpv6',
            'publicZoneId' => 'getPublicZoneId',
            'publicZoneName' => 'getPublicZoneName',
            'privateZoneId' => 'getPrivateZoneId',
            'privateZoneName' => 'getPrivateZoneName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'currentNamespacePublishApiNum' => 'getCurrentNamespacePublishApiNum',
            'allNamespacePublishApiNum' => 'getAllNamespacePublishApiNum',
            'apiPublishableNum' => 'getApiPublishableNum',
            'deletable' => 'getDeletable',
            'chargeStatus' => 'getChargeStatus',
            'orderId' => 'getOrderId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['externalAddress'] = isset($data['externalAddress']) ? $data['externalAddress'] : null;
        $this->container['intranetAddress'] = isset($data['intranetAddress']) ? $data['intranetAddress'] : null;
        $this->container['intranetAddressIpv6'] = isset($data['intranetAddressIpv6']) ? $data['intranetAddressIpv6'] : null;
        $this->container['publicZoneId'] = isset($data['publicZoneId']) ? $data['publicZoneId'] : null;
        $this->container['publicZoneName'] = isset($data['publicZoneName']) ? $data['publicZoneName'] : null;
        $this->container['privateZoneId'] = isset($data['privateZoneId']) ? $data['privateZoneId'] : null;
        $this->container['privateZoneName'] = isset($data['privateZoneName']) ? $data['privateZoneName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['currentNamespacePublishApiNum'] = isset($data['currentNamespacePublishApiNum']) ? $data['currentNamespacePublishApiNum'] : null;
        $this->container['allNamespacePublishApiNum'] = isset($data['allNamespacePublishApiNum']) ? $data['allNamespacePublishApiNum'] : null;
        $this->container['apiPublishableNum'] = isset($data['apiPublishableNum']) ? $data['apiPublishableNum'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['chargeStatus'] = isset($data['chargeStatus']) ? $data['chargeStatus'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
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
    * Gets id
    *  集群ID。
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
    * @param string|null $id 集群ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  集群名称。
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
    * @param string|null $name 集群名称。
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
    *  集群描述信息。
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
    * @param string|null $description 集群描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets externalAddress
    *  公网IP地址。
    *
    * @return string|null
    */
    public function getExternalAddress()
    {
        return $this->container['externalAddress'];
    }

    /**
    * Sets externalAddress
    *
    * @param string|null $externalAddress 公网IP地址。
    *
    * @return $this
    */
    public function setExternalAddress($externalAddress)
    {
        $this->container['externalAddress'] = $externalAddress;
        return $this;
    }

    /**
    * Gets intranetAddress
    *  内网IPv4地址。
    *
    * @return string|null
    */
    public function getIntranetAddress()
    {
        return $this->container['intranetAddress'];
    }

    /**
    * Sets intranetAddress
    *
    * @param string|null $intranetAddress 内网IPv4地址。
    *
    * @return $this
    */
    public function setIntranetAddress($intranetAddress)
    {
        $this->container['intranetAddress'] = $intranetAddress;
        return $this;
    }

    /**
    * Gets intranetAddressIpv6
    *  内网IPv6地址。
    *
    * @return string|null
    */
    public function getIntranetAddressIpv6()
    {
        return $this->container['intranetAddressIpv6'];
    }

    /**
    * Sets intranetAddressIpv6
    *
    * @param string|null $intranetAddressIpv6 内网IPv6地址。
    *
    * @return $this
    */
    public function setIntranetAddressIpv6($intranetAddressIpv6)
    {
        $this->container['intranetAddressIpv6'] = $intranetAddressIpv6;
        return $this;
    }

    /**
    * Gets publicZoneId
    *  公网域名ID。
    *
    * @return string|null
    */
    public function getPublicZoneId()
    {
        return $this->container['publicZoneId'];
    }

    /**
    * Sets publicZoneId
    *
    * @param string|null $publicZoneId 公网域名ID。
    *
    * @return $this
    */
    public function setPublicZoneId($publicZoneId)
    {
        $this->container['publicZoneId'] = $publicZoneId;
        return $this;
    }

    /**
    * Gets publicZoneName
    *  公网域名名称。
    *
    * @return string|null
    */
    public function getPublicZoneName()
    {
        return $this->container['publicZoneName'];
    }

    /**
    * Sets publicZoneName
    *
    * @param string|null $publicZoneName 公网域名名称。
    *
    * @return $this
    */
    public function setPublicZoneName($publicZoneName)
    {
        $this->container['publicZoneName'] = $publicZoneName;
        return $this;
    }

    /**
    * Gets privateZoneId
    *  内网域名ID。
    *
    * @return string|null
    */
    public function getPrivateZoneId()
    {
        return $this->container['privateZoneId'];
    }

    /**
    * Sets privateZoneId
    *
    * @param string|null $privateZoneId 内网域名ID。
    *
    * @return $this
    */
    public function setPrivateZoneId($privateZoneId)
    {
        $this->container['privateZoneId'] = $privateZoneId;
        return $this;
    }

    /**
    * Gets privateZoneName
    *  内网域名名称。
    *
    * @return string|null
    */
    public function getPrivateZoneName()
    {
        return $this->container['privateZoneName'];
    }

    /**
    * Sets privateZoneName
    *
    * @param string|null $privateZoneName 内网域名名称。
    *
    * @return $this
    */
    public function setPrivateZoneName($privateZoneName)
    {
        $this->container['privateZoneName'] = $privateZoneName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets currentNamespacePublishApiNum
    *  当前工作空间已发布的API数量。
    *
    * @return int|null
    */
    public function getCurrentNamespacePublishApiNum()
    {
        return $this->container['currentNamespacePublishApiNum'];
    }

    /**
    * Sets currentNamespacePublishApiNum
    *
    * @param int|null $currentNamespacePublishApiNum 当前工作空间已发布的API数量。
    *
    * @return $this
    */
    public function setCurrentNamespacePublishApiNum($currentNamespacePublishApiNum)
    {
        $this->container['currentNamespacePublishApiNum'] = $currentNamespacePublishApiNum;
        return $this;
    }

    /**
    * Gets allNamespacePublishApiNum
    *  所有工作空间已发布的API数量。
    *
    * @return int|null
    */
    public function getAllNamespacePublishApiNum()
    {
        return $this->container['allNamespacePublishApiNum'];
    }

    /**
    * Sets allNamespacePublishApiNum
    *
    * @param int|null $allNamespacePublishApiNum 所有工作空间已发布的API数量。
    *
    * @return $this
    */
    public function setAllNamespacePublishApiNum($allNamespacePublishApiNum)
    {
        $this->container['allNamespacePublishApiNum'] = $allNamespacePublishApiNum;
        return $this;
    }

    /**
    * Gets apiPublishableNum
    *  集群API总配额。
    *
    * @return int|null
    */
    public function getApiPublishableNum()
    {
        return $this->container['apiPublishableNum'];
    }

    /**
    * Sets apiPublishableNum
    *
    * @param int|null $apiPublishableNum 集群API总配额。
    *
    * @return $this
    */
    public function setApiPublishableNum($apiPublishableNum)
    {
        $this->container['apiPublishableNum'] = $apiPublishableNum;
        return $this;
    }

    /**
    * Gets deletable
    *  集群是否可以删除。
    *
    * @return bool|null
    */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
    * Sets deletable
    *
    * @param bool|null $deletable 集群是否可以删除。
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
        return $this;
    }

    /**
    * Gets chargeStatus
    *  集群计费状态，NO_CHARGE：未计费、CHARGED：已计费，GRACE：宽限期、RETENTION：保留期。
    *
    * @return string|null
    */
    public function getChargeStatus()
    {
        return $this->container['chargeStatus'];
    }

    /**
    * Sets chargeStatus
    *
    * @param string|null $chargeStatus 集群计费状态，NO_CHARGE：未计费、CHARGED：已计费，GRACE：宽限期、RETENTION：保留期。
    *
    * @return $this
    */
    public function setChargeStatus($chargeStatus)
    {
        $this->container['chargeStatus'] = $chargeStatus;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
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

