<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChatResourceConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChatResourceConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源id
    * countResource  资源数量
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * chargeMode  资源计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性计费 * ON_DEMAND: 按需计费 > * 一次性计费包括：租户订购的一次性资源，SP管理员分配给租户的一次性资源，SP管理员分配给租户的按需套餐包资源，系统管理员分配的资源（分钟数等）。
    * resourceNums  资源数量。智能交互并发路数。
    * resourceAvailableNums  可用资源数量。智能交互并发路数。
    * status  资源状态。 * ACTIVE: 正常 * FREEZE：冻结 * DELETED：退订或过期
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'countResource' => 'int',
            'resourceSource' => 'string',
            'chargeMode' => 'string',
            'resourceNums' => 'int',
            'resourceAvailableNums' => 'int',
            'status' => 'string',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源id
    * countResource  资源数量
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * chargeMode  资源计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性计费 * ON_DEMAND: 按需计费 > * 一次性计费包括：租户订购的一次性资源，SP管理员分配给租户的一次性资源，SP管理员分配给租户的按需套餐包资源，系统管理员分配的资源（分钟数等）。
    * resourceNums  资源数量。智能交互并发路数。
    * resourceAvailableNums  可用资源数量。智能交互并发路数。
    * status  资源状态。 * ACTIVE: 正常 * FREEZE：冻结 * DELETED：退订或过期
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'countResource' => 'int32',
        'resourceSource' => null,
        'chargeMode' => null,
        'resourceNums' => null,
        'resourceAvailableNums' => null,
        'status' => null,
        'expireTime' => null
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
    * resourceId  资源id
    * countResource  资源数量
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * chargeMode  资源计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性计费 * ON_DEMAND: 按需计费 > * 一次性计费包括：租户订购的一次性资源，SP管理员分配给租户的一次性资源，SP管理员分配给租户的按需套餐包资源，系统管理员分配的资源（分钟数等）。
    * resourceNums  资源数量。智能交互并发路数。
    * resourceAvailableNums  可用资源数量。智能交互并发路数。
    * status  资源状态。 * ACTIVE: 正常 * FREEZE：冻结 * DELETED：退订或过期
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'countResource' => 'count_resource',
            'resourceSource' => 'resource_source',
            'chargeMode' => 'charge_mode',
            'resourceNums' => 'resource_nums',
            'resourceAvailableNums' => 'resource_available_nums',
            'status' => 'status',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源id
    * countResource  资源数量
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * chargeMode  资源计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性计费 * ON_DEMAND: 按需计费 > * 一次性计费包括：租户订购的一次性资源，SP管理员分配给租户的一次性资源，SP管理员分配给租户的按需套餐包资源，系统管理员分配的资源（分钟数等）。
    * resourceNums  资源数量。智能交互并发路数。
    * resourceAvailableNums  可用资源数量。智能交互并发路数。
    * status  资源状态。 * ACTIVE: 正常 * FREEZE：冻结 * DELETED：退订或过期
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'countResource' => 'setCountResource',
            'resourceSource' => 'setResourceSource',
            'chargeMode' => 'setChargeMode',
            'resourceNums' => 'setResourceNums',
            'resourceAvailableNums' => 'setResourceAvailableNums',
            'status' => 'setStatus',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源id
    * countResource  资源数量
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * chargeMode  资源计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性计费 * ON_DEMAND: 按需计费 > * 一次性计费包括：租户订购的一次性资源，SP管理员分配给租户的一次性资源，SP管理员分配给租户的按需套餐包资源，系统管理员分配的资源（分钟数等）。
    * resourceNums  资源数量。智能交互并发路数。
    * resourceAvailableNums  可用资源数量。智能交互并发路数。
    * status  资源状态。 * ACTIVE: 正常 * FREEZE：冻结 * DELETED：退订或过期
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'countResource' => 'getCountResource',
            'resourceSource' => 'getResourceSource',
            'chargeMode' => 'getChargeMode',
            'resourceNums' => 'getResourceNums',
            'resourceAvailableNums' => 'getResourceAvailableNums',
            'status' => 'getStatus',
            'expireTime' => 'getExpireTime'
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
    const RESOURCE_SOURCE_PURCHASED = 'PURCHASED';
    const RESOURCE_SOURCE_SP_ALLOCATED = 'SP_ALLOCATED';
    const RESOURCE_SOURCE_ADMIN_ALLOCATED = 'ADMIN_ALLOCATED';
    const CHARGE_MODE_PERIODIC = 'PERIODIC';
    const CHARGE_MODE_ONE_TIME = 'ONE_TIME';
    const CHARGE_MODE_ON_DEMAND = 'ON_DEMAND';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_FREEZE = 'FREEZE';
    const STATUS_DELETED = 'DELETED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceSourceAllowableValues()
    {
        return [
            self::RESOURCE_SOURCE_PURCHASED,
            self::RESOURCE_SOURCE_SP_ALLOCATED,
            self::RESOURCE_SOURCE_ADMIN_ALLOCATED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_PERIODIC,
            self::CHARGE_MODE_ONE_TIME,
            self::CHARGE_MODE_ON_DEMAND,
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
            self::STATUS_ACTIVE,
            self::STATUS_FREEZE,
            self::STATUS_DELETED,
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['countResource'] = isset($data['countResource']) ? $data['countResource'] : null;
        $this->container['resourceSource'] = isset($data['resourceSource']) ? $data['resourceSource'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['resourceNums'] = isset($data['resourceNums']) ? $data['resourceNums'] : null;
        $this->container['resourceAvailableNums'] = isset($data['resourceAvailableNums']) ? $data['resourceAvailableNums'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['countResource']) && ($this->container['countResource'] > 10000)) {
                $invalidProperties[] = "invalid value for 'countResource', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['countResource']) && ($this->container['countResource'] < 0)) {
                $invalidProperties[] = "invalid value for 'countResource', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceSourceAllowableValues();
                if (!is_null($this->container['resourceSource']) && !in_array($this->container['resourceSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceNums']) && ($this->container['resourceNums'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'resourceNums', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['resourceNums']) && ($this->container['resourceNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceAvailableNums']) && ($this->container['resourceAvailableNums'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'resourceAvailableNums', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['resourceAvailableNums']) && ($this->container['resourceAvailableNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceAvailableNums', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 20.";
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
    * Gets resourceId
    *  资源id
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets countResource
    *  资源数量
    *
    * @return int|null
    */
    public function getCountResource()
    {
        return $this->container['countResource'];
    }

    /**
    * Sets countResource
    *
    * @param int|null $countResource 资源数量
    *
    * @return $this
    */
    public function setCountResource($countResource)
    {
        $this->container['countResource'] = $countResource;
        return $this;
    }

    /**
    * Gets resourceSource
    *  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    *
    * @return string|null
    */
    public function getResourceSource()
    {
        return $this->container['resourceSource'];
    }

    /**
    * Sets resourceSource
    *
    * @param string|null $resourceSource 资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    *
    * @return $this
    */
    public function setResourceSource($resourceSource)
    {
        $this->container['resourceSource'] = $resourceSource;
        return $this;
    }

    /**
    * Gets chargeMode
    *  资源计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性计费 * ON_DEMAND: 按需计费 > * 一次性计费包括：租户订购的一次性资源，SP管理员分配给租户的一次性资源，SP管理员分配给租户的按需套餐包资源，系统管理员分配的资源（分钟数等）。
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 资源计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性计费 * ON_DEMAND: 按需计费 > * 一次性计费包括：租户订购的一次性资源，SP管理员分配给租户的一次性资源，SP管理员分配给租户的按需套餐包资源，系统管理员分配的资源（分钟数等）。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets resourceNums
    *  资源数量。智能交互并发路数。
    *
    * @return int|null
    */
    public function getResourceNums()
    {
        return $this->container['resourceNums'];
    }

    /**
    * Sets resourceNums
    *
    * @param int|null $resourceNums 资源数量。智能交互并发路数。
    *
    * @return $this
    */
    public function setResourceNums($resourceNums)
    {
        $this->container['resourceNums'] = $resourceNums;
        return $this;
    }

    /**
    * Gets resourceAvailableNums
    *  可用资源数量。智能交互并发路数。
    *
    * @return int|null
    */
    public function getResourceAvailableNums()
    {
        return $this->container['resourceAvailableNums'];
    }

    /**
    * Sets resourceAvailableNums
    *
    * @param int|null $resourceAvailableNums 可用资源数量。智能交互并发路数。
    *
    * @return $this
    */
    public function setResourceAvailableNums($resourceAvailableNums)
    {
        $this->container['resourceAvailableNums'] = $resourceAvailableNums;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。 * ACTIVE: 正常 * FREEZE：冻结 * DELETED：退订或过期
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
    * @param string|null $status 资源状态。 * ACTIVE: 正常 * FREEZE：冻结 * DELETED：退订或过期
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets expireTime
    *  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

