<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProfileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProfileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * localNetworkPort  公网IP附属的5_xxx网络（如5_bgp）中的port_id
    * standalone  标识公网IP是否是和虚机一起创建的。true-独立创建；false-和虚机一起创建
    * notifyStatus  云服务标识公网IP创建进度, EIP服务内部使用。
    * createTime  公网IP创建时间
    * fakeNetworkType  该字段仅仅用于表示eip的bgp类型是否是真实的静态sbgp * 1. 如果为true，则该eip可以切换bgp类型 * 2. 如果为false，则该eip不可以切换bgp类型
    * createSource  标识IP是和哪类资源一起购买的
    * ecsId  标识和公网IP一起购买的ecs的id
    * lockStatus  公网IP加锁状态, eg:\"POLICE,LOCKED\"。POLICE-公安冻结；LOCKED-普通冻结；普通冻结细分状态：ARREAR-欠费；DELABLE-可删除；
    * freezedStatus  公网IP冻结状态。
    * bandwithInfo  bandwithInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'localNetworkPort' => 'string',
            'standalone' => 'bool',
            'notifyStatus' => 'string',
            'createTime' => 'string',
            'fakeNetworkType' => 'bool',
            'createSource' => 'string',
            'ecsId' => 'string',
            'lockStatus' => 'string',
            'freezedStatus' => 'string',
            'bandwithInfo' => '\HuaweiCloud\SDK\Eip\V3\Model\BandwidthInfoResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * localNetworkPort  公网IP附属的5_xxx网络（如5_bgp）中的port_id
    * standalone  标识公网IP是否是和虚机一起创建的。true-独立创建；false-和虚机一起创建
    * notifyStatus  云服务标识公网IP创建进度, EIP服务内部使用。
    * createTime  公网IP创建时间
    * fakeNetworkType  该字段仅仅用于表示eip的bgp类型是否是真实的静态sbgp * 1. 如果为true，则该eip可以切换bgp类型 * 2. 如果为false，则该eip不可以切换bgp类型
    * createSource  标识IP是和哪类资源一起购买的
    * ecsId  标识和公网IP一起购买的ecs的id
    * lockStatus  公网IP加锁状态, eg:\"POLICE,LOCKED\"。POLICE-公安冻结；LOCKED-普通冻结；普通冻结细分状态：ARREAR-欠费；DELABLE-可删除；
    * freezedStatus  公网IP冻结状态。
    * bandwithInfo  bandwithInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'localNetworkPort' => null,
        'standalone' => null,
        'notifyStatus' => null,
        'createTime' => null,
        'fakeNetworkType' => null,
        'createSource' => null,
        'ecsId' => null,
        'lockStatus' => null,
        'freezedStatus' => null,
        'bandwithInfo' => null
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
    * localNetworkPort  公网IP附属的5_xxx网络（如5_bgp）中的port_id
    * standalone  标识公网IP是否是和虚机一起创建的。true-独立创建；false-和虚机一起创建
    * notifyStatus  云服务标识公网IP创建进度, EIP服务内部使用。
    * createTime  公网IP创建时间
    * fakeNetworkType  该字段仅仅用于表示eip的bgp类型是否是真实的静态sbgp * 1. 如果为true，则该eip可以切换bgp类型 * 2. 如果为false，则该eip不可以切换bgp类型
    * createSource  标识IP是和哪类资源一起购买的
    * ecsId  标识和公网IP一起购买的ecs的id
    * lockStatus  公网IP加锁状态, eg:\"POLICE,LOCKED\"。POLICE-公安冻结；LOCKED-普通冻结；普通冻结细分状态：ARREAR-欠费；DELABLE-可删除；
    * freezedStatus  公网IP冻结状态。
    * bandwithInfo  bandwithInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'localNetworkPort' => 'local_network_port',
            'standalone' => 'standalone',
            'notifyStatus' => 'notify_status',
            'createTime' => 'create_time',
            'fakeNetworkType' => 'fake_network_type',
            'createSource' => 'create_source',
            'ecsId' => 'ecs_id',
            'lockStatus' => 'lock_status',
            'freezedStatus' => 'freezed_status',
            'bandwithInfo' => 'bandwith_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * localNetworkPort  公网IP附属的5_xxx网络（如5_bgp）中的port_id
    * standalone  标识公网IP是否是和虚机一起创建的。true-独立创建；false-和虚机一起创建
    * notifyStatus  云服务标识公网IP创建进度, EIP服务内部使用。
    * createTime  公网IP创建时间
    * fakeNetworkType  该字段仅仅用于表示eip的bgp类型是否是真实的静态sbgp * 1. 如果为true，则该eip可以切换bgp类型 * 2. 如果为false，则该eip不可以切换bgp类型
    * createSource  标识IP是和哪类资源一起购买的
    * ecsId  标识和公网IP一起购买的ecs的id
    * lockStatus  公网IP加锁状态, eg:\"POLICE,LOCKED\"。POLICE-公安冻结；LOCKED-普通冻结；普通冻结细分状态：ARREAR-欠费；DELABLE-可删除；
    * freezedStatus  公网IP冻结状态。
    * bandwithInfo  bandwithInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'localNetworkPort' => 'setLocalNetworkPort',
            'standalone' => 'setStandalone',
            'notifyStatus' => 'setNotifyStatus',
            'createTime' => 'setCreateTime',
            'fakeNetworkType' => 'setFakeNetworkType',
            'createSource' => 'setCreateSource',
            'ecsId' => 'setEcsId',
            'lockStatus' => 'setLockStatus',
            'freezedStatus' => 'setFreezedStatus',
            'bandwithInfo' => 'setBandwithInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * localNetworkPort  公网IP附属的5_xxx网络（如5_bgp）中的port_id
    * standalone  标识公网IP是否是和虚机一起创建的。true-独立创建；false-和虚机一起创建
    * notifyStatus  云服务标识公网IP创建进度, EIP服务内部使用。
    * createTime  公网IP创建时间
    * fakeNetworkType  该字段仅仅用于表示eip的bgp类型是否是真实的静态sbgp * 1. 如果为true，则该eip可以切换bgp类型 * 2. 如果为false，则该eip不可以切换bgp类型
    * createSource  标识IP是和哪类资源一起购买的
    * ecsId  标识和公网IP一起购买的ecs的id
    * lockStatus  公网IP加锁状态, eg:\"POLICE,LOCKED\"。POLICE-公安冻结；LOCKED-普通冻结；普通冻结细分状态：ARREAR-欠费；DELABLE-可删除；
    * freezedStatus  公网IP冻结状态。
    * bandwithInfo  bandwithInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'localNetworkPort' => 'getLocalNetworkPort',
            'standalone' => 'getStandalone',
            'notifyStatus' => 'getNotifyStatus',
            'createTime' => 'getCreateTime',
            'fakeNetworkType' => 'getFakeNetworkType',
            'createSource' => 'getCreateSource',
            'ecsId' => 'getEcsId',
            'lockStatus' => 'getLockStatus',
            'freezedStatus' => 'getFreezedStatus',
            'bandwithInfo' => 'getBandwithInfo'
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
    const NOTIFY_STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const NOTIFY_STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    const NOTIFY_STATUS_NOTIFYING = 'NOTIFYING';
    const NOTIFY_STATUS_NOTIFYED = 'NOTIFYED';
    const NOTIFY_STATUS_NOTIFY_DELETE = 'NOTIFY_DELETE';
    const CREATE_SOURCE_ECS = 'ecs';
    const FREEZED_STATUS_FREEZED = 'FREEZED';
    const FREEZED_STATUS_UNFREEZED = 'UNFREEZED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotifyStatusAllowableValues()
    {
        return [
            self::NOTIFY_STATUS_PENDING_CREATE,
            self::NOTIFY_STATUS_PENDING_UPDATE,
            self::NOTIFY_STATUS_NOTIFYING,
            self::NOTIFY_STATUS_NOTIFYED,
            self::NOTIFY_STATUS_NOTIFY_DELETE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCreateSourceAllowableValues()
    {
        return [
            self::CREATE_SOURCE_ECS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFreezedStatusAllowableValues()
    {
        return [
            self::FREEZED_STATUS_FREEZED,
            self::FREEZED_STATUS_UNFREEZED,
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
        $this->container['localNetworkPort'] = isset($data['localNetworkPort']) ? $data['localNetworkPort'] : null;
        $this->container['standalone'] = isset($data['standalone']) ? $data['standalone'] : null;
        $this->container['notifyStatus'] = isset($data['notifyStatus']) ? $data['notifyStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['fakeNetworkType'] = isset($data['fakeNetworkType']) ? $data['fakeNetworkType'] : null;
        $this->container['createSource'] = isset($data['createSource']) ? $data['createSource'] : null;
        $this->container['ecsId'] = isset($data['ecsId']) ? $data['ecsId'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['freezedStatus'] = isset($data['freezedStatus']) ? $data['freezedStatus'] : null;
        $this->container['bandwithInfo'] = isset($data['bandwithInfo']) ? $data['bandwithInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['localNetworkPort']) && (mb_strlen($this->container['localNetworkPort']) > 36)) {
                $invalidProperties[] = "invalid value for 'localNetworkPort', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['localNetworkPort']) && (mb_strlen($this->container['localNetworkPort']) < 0)) {
                $invalidProperties[] = "invalid value for 'localNetworkPort', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getNotifyStatusAllowableValues();
                if (!is_null($this->container['notifyStatus']) && !in_array($this->container['notifyStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notifyStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['notifyStatus']) && (mb_strlen($this->container['notifyStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'notifyStatus', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['notifyStatus']) && (mb_strlen($this->container['notifyStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'notifyStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getCreateSourceAllowableValues();
                if (!is_null($this->container['createSource']) && !in_array($this->container['createSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'createSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createSource']) && (mb_strlen($this->container['createSource']) > 36)) {
                $invalidProperties[] = "invalid value for 'createSource', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['createSource']) && (mb_strlen($this->container['createSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'createSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ecsId']) && (mb_strlen($this->container['ecsId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ecsId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ecsId']) && (mb_strlen($this->container['ecsId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ecsId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getFreezedStatusAllowableValues();
                if (!is_null($this->container['freezedStatus']) && !in_array($this->container['freezedStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'freezedStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['freezedStatus']) && (mb_strlen($this->container['freezedStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'freezedStatus', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['freezedStatus']) && (mb_strlen($this->container['freezedStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'freezedStatus', the character length must be bigger than or equal to 0.";
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
    * Gets localNetworkPort
    *  公网IP附属的5_xxx网络（如5_bgp）中的port_id
    *
    * @return string|null
    */
    public function getLocalNetworkPort()
    {
        return $this->container['localNetworkPort'];
    }

    /**
    * Sets localNetworkPort
    *
    * @param string|null $localNetworkPort 公网IP附属的5_xxx网络（如5_bgp）中的port_id
    *
    * @return $this
    */
    public function setLocalNetworkPort($localNetworkPort)
    {
        $this->container['localNetworkPort'] = $localNetworkPort;
        return $this;
    }

    /**
    * Gets standalone
    *  标识公网IP是否是和虚机一起创建的。true-独立创建；false-和虚机一起创建
    *
    * @return bool|null
    */
    public function getStandalone()
    {
        return $this->container['standalone'];
    }

    /**
    * Sets standalone
    *
    * @param bool|null $standalone 标识公网IP是否是和虚机一起创建的。true-独立创建；false-和虚机一起创建
    *
    * @return $this
    */
    public function setStandalone($standalone)
    {
        $this->container['standalone'] = $standalone;
        return $this;
    }

    /**
    * Gets notifyStatus
    *  云服务标识公网IP创建进度, EIP服务内部使用。
    *
    * @return string|null
    */
    public function getNotifyStatus()
    {
        return $this->container['notifyStatus'];
    }

    /**
    * Sets notifyStatus
    *
    * @param string|null $notifyStatus 云服务标识公网IP创建进度, EIP服务内部使用。
    *
    * @return $this
    */
    public function setNotifyStatus($notifyStatus)
    {
        $this->container['notifyStatus'] = $notifyStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  公网IP创建时间
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
    * @param string|null $createTime 公网IP创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets fakeNetworkType
    *  该字段仅仅用于表示eip的bgp类型是否是真实的静态sbgp * 1. 如果为true，则该eip可以切换bgp类型 * 2. 如果为false，则该eip不可以切换bgp类型
    *
    * @return bool|null
    */
    public function getFakeNetworkType()
    {
        return $this->container['fakeNetworkType'];
    }

    /**
    * Sets fakeNetworkType
    *
    * @param bool|null $fakeNetworkType 该字段仅仅用于表示eip的bgp类型是否是真实的静态sbgp * 1. 如果为true，则该eip可以切换bgp类型 * 2. 如果为false，则该eip不可以切换bgp类型
    *
    * @return $this
    */
    public function setFakeNetworkType($fakeNetworkType)
    {
        $this->container['fakeNetworkType'] = $fakeNetworkType;
        return $this;
    }

    /**
    * Gets createSource
    *  标识IP是和哪类资源一起购买的
    *
    * @return string|null
    */
    public function getCreateSource()
    {
        return $this->container['createSource'];
    }

    /**
    * Sets createSource
    *
    * @param string|null $createSource 标识IP是和哪类资源一起购买的
    *
    * @return $this
    */
    public function setCreateSource($createSource)
    {
        $this->container['createSource'] = $createSource;
        return $this;
    }

    /**
    * Gets ecsId
    *  标识和公网IP一起购买的ecs的id
    *
    * @return string|null
    */
    public function getEcsId()
    {
        return $this->container['ecsId'];
    }

    /**
    * Sets ecsId
    *
    * @param string|null $ecsId 标识和公网IP一起购买的ecs的id
    *
    * @return $this
    */
    public function setEcsId($ecsId)
    {
        $this->container['ecsId'] = $ecsId;
        return $this;
    }

    /**
    * Gets lockStatus
    *  公网IP加锁状态, eg:\"POLICE,LOCKED\"。POLICE-公安冻结；LOCKED-普通冻结；普通冻结细分状态：ARREAR-欠费；DELABLE-可删除；
    *
    * @return string|null
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param string|null $lockStatus 公网IP加锁状态, eg:\"POLICE,LOCKED\"。POLICE-公安冻结；LOCKED-普通冻结；普通冻结细分状态：ARREAR-欠费；DELABLE-可删除；
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
        return $this;
    }

    /**
    * Gets freezedStatus
    *  公网IP冻结状态。
    *
    * @return string|null
    */
    public function getFreezedStatus()
    {
        return $this->container['freezedStatus'];
    }

    /**
    * Sets freezedStatus
    *
    * @param string|null $freezedStatus 公网IP冻结状态。
    *
    * @return $this
    */
    public function setFreezedStatus($freezedStatus)
    {
        $this->container['freezedStatus'] = $freezedStatus;
        return $this;
    }

    /**
    * Gets bandwithInfo
    *  bandwithInfo
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\BandwidthInfoResp|null
    */
    public function getBandwithInfo()
    {
        return $this->container['bandwithInfo'];
    }

    /**
    * Sets bandwithInfo
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\BandwidthInfoResp|null $bandwithInfo bandwithInfo
    *
    * @return $this
    */
    public function setBandwithInfo($bandwithInfo)
    {
        $this->container['bandwithInfo'] = $bandwithInfo;
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

