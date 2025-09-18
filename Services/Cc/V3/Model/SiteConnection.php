<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SiteConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SiteConnection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * siteNetworkId  分支网络ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * edgePair  分支网络连接的两个端点定义，长度固定为2的数组。
    * crossRegionType  crossRegionType
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * frozenEffect  frozenEffect
    * isBindBandwidth  是否绑定带宽包。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'siteNetworkId' => 'string',
            'state' => '\HuaweiCloud\SDK\Cc\V3\Model\SiteConnectionStateEnum',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'edgePair' => '\HuaweiCloud\SDK\Cc\V3\Model\DirectedEdge[]',
            'crossRegionType' => '\HuaweiCloud\SDK\Cc\V3\Model\CrossRegionTypeEnum',
            'globalConnectionBandwidthId' => 'string',
            'bandwidthSize' => 'int',
            'isFrozen' => 'bool',
            'frozenEffect' => '\HuaweiCloud\SDK\Cc\V3\Model\FrozenEffectEnum',
            'isBindBandwidth' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * siteNetworkId  分支网络ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * edgePair  分支网络连接的两个端点定义，长度固定为2的数组。
    * crossRegionType  crossRegionType
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * frozenEffect  frozenEffect
    * isBindBandwidth  是否绑定带宽包。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'siteNetworkId' => null,
        'state' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'edgePair' => null,
        'crossRegionType' => null,
        'globalConnectionBandwidthId' => null,
        'bandwidthSize' => 'int64',
        'isFrozen' => null,
        'frozenEffect' => null,
        'isBindBandwidth' => null
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
    * id  实例ID。
    * siteNetworkId  分支网络ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * edgePair  分支网络连接的两个端点定义，长度固定为2的数组。
    * crossRegionType  crossRegionType
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * frozenEffect  frozenEffect
    * isBindBandwidth  是否绑定带宽包。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'siteNetworkId' => 'site_network_id',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'edgePair' => 'edge_pair',
            'crossRegionType' => 'cross_region_type',
            'globalConnectionBandwidthId' => 'global_connection_bandwidth_id',
            'bandwidthSize' => 'bandwidth_size',
            'isFrozen' => 'is_frozen',
            'frozenEffect' => 'frozen_effect',
            'isBindBandwidth' => 'is_bind_bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * siteNetworkId  分支网络ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * edgePair  分支网络连接的两个端点定义，长度固定为2的数组。
    * crossRegionType  crossRegionType
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * frozenEffect  frozenEffect
    * isBindBandwidth  是否绑定带宽包。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'siteNetworkId' => 'setSiteNetworkId',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'edgePair' => 'setEdgePair',
            'crossRegionType' => 'setCrossRegionType',
            'globalConnectionBandwidthId' => 'setGlobalConnectionBandwidthId',
            'bandwidthSize' => 'setBandwidthSize',
            'isFrozen' => 'setIsFrozen',
            'frozenEffect' => 'setFrozenEffect',
            'isBindBandwidth' => 'setIsBindBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * siteNetworkId  分支网络ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * edgePair  分支网络连接的两个端点定义，长度固定为2的数组。
    * crossRegionType  crossRegionType
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * frozenEffect  frozenEffect
    * isBindBandwidth  是否绑定带宽包。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'siteNetworkId' => 'getSiteNetworkId',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'edgePair' => 'getEdgePair',
            'crossRegionType' => 'getCrossRegionType',
            'globalConnectionBandwidthId' => 'getGlobalConnectionBandwidthId',
            'bandwidthSize' => 'getBandwidthSize',
            'isFrozen' => 'getIsFrozen',
            'frozenEffect' => 'getFrozenEffect',
            'isBindBandwidth' => 'getIsBindBandwidth'
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
        $this->container['siteNetworkId'] = isset($data['siteNetworkId']) ? $data['siteNetworkId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['edgePair'] = isset($data['edgePair']) ? $data['edgePair'] : null;
        $this->container['crossRegionType'] = isset($data['crossRegionType']) ? $data['crossRegionType'] : null;
        $this->container['globalConnectionBandwidthId'] = isset($data['globalConnectionBandwidthId']) ? $data['globalConnectionBandwidthId'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['frozenEffect'] = isset($data['frozenEffect']) ? $data['frozenEffect'] : null;
        $this->container['isBindBandwidth'] = isset($data['isBindBandwidth']) ? $data['isBindBandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['siteNetworkId'] === null) {
            $invalidProperties[] = "'siteNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['siteNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'siteNetworkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['siteNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'siteNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['siteNetworkId'])) {
                $invalidProperties[] = "invalid value for 'siteNetworkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['edgePair'] === null) {
            $invalidProperties[] = "'edgePair' can't be null";
        }
        if ($this->container['crossRegionType'] === null) {
            $invalidProperties[] = "'crossRegionType' can't be null";
        }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalConnectionBandwidthId'])) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be bigger than or equal to 1.";
            }
        if ($this->container['isFrozen'] === null) {
            $invalidProperties[] = "'isFrozen' can't be null";
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
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets siteNetworkId
    *  分支网络ID。
    *
    * @return string
    */
    public function getSiteNetworkId()
    {
        return $this->container['siteNetworkId'];
    }

    /**
    * Sets siteNetworkId
    *
    * @param string $siteNetworkId 分支网络ID。
    *
    * @return $this
    */
    public function setSiteNetworkId($siteNetworkId)
    {
        $this->container['siteNetworkId'] = $siteNetworkId;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\SiteConnectionStateEnum
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SiteConnectionStateEnum $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets edgePair
    *  分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\DirectedEdge[]
    */
    public function getEdgePair()
    {
        return $this->container['edgePair'];
    }

    /**
    * Sets edgePair
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\DirectedEdge[] $edgePair 分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @return $this
    */
    public function setEdgePair($edgePair)
    {
        $this->container['edgePair'] = $edgePair;
        return $this;
    }

    /**
    * Gets crossRegionType
    *  crossRegionType
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CrossRegionTypeEnum
    */
    public function getCrossRegionType()
    {
        return $this->container['crossRegionType'];
    }

    /**
    * Sets crossRegionType
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CrossRegionTypeEnum $crossRegionType crossRegionType
    *
    * @return $this
    */
    public function setCrossRegionType($crossRegionType)
    {
        $this->container['crossRegionType'] = $crossRegionType;
        return $this;
    }

    /**
    * Gets globalConnectionBandwidthId
    *  全域互联带宽ID。
    *
    * @return string|null
    */
    public function getGlobalConnectionBandwidthId()
    {
        return $this->container['globalConnectionBandwidthId'];
    }

    /**
    * Sets globalConnectionBandwidthId
    *
    * @param string|null $globalConnectionBandwidthId 全域互联带宽ID。
    *
    * @return $this
    */
    public function setGlobalConnectionBandwidthId($globalConnectionBandwidthId)
    {
        $this->container['globalConnectionBandwidthId'] = $globalConnectionBandwidthId;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽值，单位Mbps。
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
    * @param int|null $bandwidthSize 带宽值，单位Mbps。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets isFrozen
    *  是否冻结。
    *
    * @return bool
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param bool $isFrozen 是否冻结。
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets frozenEffect
    *  frozenEffect
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\FrozenEffectEnum|null
    */
    public function getFrozenEffect()
    {
        return $this->container['frozenEffect'];
    }

    /**
    * Sets frozenEffect
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\FrozenEffectEnum|null $frozenEffect frozenEffect
    *
    * @return $this
    */
    public function setFrozenEffect($frozenEffect)
    {
        $this->container['frozenEffect'] = $frozenEffect;
        return $this;
    }

    /**
    * Gets isBindBandwidth
    *  是否绑定带宽包。
    *
    * @return bool|null
    */
    public function getIsBindBandwidth()
    {
        return $this->container['isBindBandwidth'];
    }

    /**
    * Sets isBindBandwidth
    *
    * @param bool|null $isBindBandwidth 是否绑定带宽包。
    *
    * @return $this
    */
    public function setIsBindBandwidth($isBindBandwidth)
    {
        $this->container['isBindBandwidth'] = $isBindBandwidth;
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

