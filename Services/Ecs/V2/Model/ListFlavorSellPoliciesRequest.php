<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlavorSellPoliciesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlavorSellPoliciesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorId  云服务器的系统规格的ID
    * sellStatus  云服务器的系统规格销售状态。  取值范围：  - available：正常售卖 - sellout：售罄
    * sellMode  计费模式。  key的取值范围：  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * availabilityZoneId  可用区，需要指定可用区（AZ）
    * longestSpotDurationHoursGt  查询竞价实例时长大于设置值的策略
    * largestSpotDurationCountGt  查询“竞价实例时长”的个数大于设置值的策略
    * longestSpotDurationHours  查询竞价实例时长等于设置值的策略
    * largestSpotDurationCount  查询“竞价实例时长”的个数等于设置值的策略
    * interruptionPolicy  中断策略。  取值范围：  - immediate：立即释放 - delay：延迟释放
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorId' => 'string',
            'sellStatus' => 'string',
            'sellMode' => 'string',
            'availabilityZoneId' => 'string',
            'longestSpotDurationHoursGt' => 'int',
            'largestSpotDurationCountGt' => 'int',
            'longestSpotDurationHours' => 'int',
            'largestSpotDurationCount' => 'int',
            'interruptionPolicy' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorId  云服务器的系统规格的ID
    * sellStatus  云服务器的系统规格销售状态。  取值范围：  - available：正常售卖 - sellout：售罄
    * sellMode  计费模式。  key的取值范围：  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * availabilityZoneId  可用区，需要指定可用区（AZ）
    * longestSpotDurationHoursGt  查询竞价实例时长大于设置值的策略
    * largestSpotDurationCountGt  查询“竞价实例时长”的个数大于设置值的策略
    * longestSpotDurationHours  查询竞价实例时长等于设置值的策略
    * largestSpotDurationCount  查询“竞价实例时长”的个数等于设置值的策略
    * interruptionPolicy  中断策略。  取值范围：  - immediate：立即释放 - delay：延迟释放
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorId' => null,
        'sellStatus' => null,
        'sellMode' => null,
        'availabilityZoneId' => null,
        'longestSpotDurationHoursGt' => null,
        'largestSpotDurationCountGt' => null,
        'longestSpotDurationHours' => null,
        'largestSpotDurationCount' => null,
        'interruptionPolicy' => null,
        'limit' => 'int32',
        'marker' => null
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
    * flavorId  云服务器的系统规格的ID
    * sellStatus  云服务器的系统规格销售状态。  取值范围：  - available：正常售卖 - sellout：售罄
    * sellMode  计费模式。  key的取值范围：  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * availabilityZoneId  可用区，需要指定可用区（AZ）
    * longestSpotDurationHoursGt  查询竞价实例时长大于设置值的策略
    * largestSpotDurationCountGt  查询“竞价实例时长”的个数大于设置值的策略
    * longestSpotDurationHours  查询竞价实例时长等于设置值的策略
    * largestSpotDurationCount  查询“竞价实例时长”的个数等于设置值的策略
    * interruptionPolicy  中断策略。  取值范围：  - immediate：立即释放 - delay：延迟释放
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorId' => 'flavor_id',
            'sellStatus' => 'sell_status',
            'sellMode' => 'sell_mode',
            'availabilityZoneId' => 'availability_zone_id',
            'longestSpotDurationHoursGt' => 'longest_spot_duration_hours_gt',
            'largestSpotDurationCountGt' => 'largest_spot_duration_count_gt',
            'longestSpotDurationHours' => 'longest_spot_duration_hours',
            'largestSpotDurationCount' => 'largest_spot_duration_count',
            'interruptionPolicy' => 'interruption_policy',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorId  云服务器的系统规格的ID
    * sellStatus  云服务器的系统规格销售状态。  取值范围：  - available：正常售卖 - sellout：售罄
    * sellMode  计费模式。  key的取值范围：  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * availabilityZoneId  可用区，需要指定可用区（AZ）
    * longestSpotDurationHoursGt  查询竞价实例时长大于设置值的策略
    * largestSpotDurationCountGt  查询“竞价实例时长”的个数大于设置值的策略
    * longestSpotDurationHours  查询竞价实例时长等于设置值的策略
    * largestSpotDurationCount  查询“竞价实例时长”的个数等于设置值的策略
    * interruptionPolicy  中断策略。  取值范围：  - immediate：立即释放 - delay：延迟释放
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorId' => 'setFlavorId',
            'sellStatus' => 'setSellStatus',
            'sellMode' => 'setSellMode',
            'availabilityZoneId' => 'setAvailabilityZoneId',
            'longestSpotDurationHoursGt' => 'setLongestSpotDurationHoursGt',
            'largestSpotDurationCountGt' => 'setLargestSpotDurationCountGt',
            'longestSpotDurationHours' => 'setLongestSpotDurationHours',
            'largestSpotDurationCount' => 'setLargestSpotDurationCount',
            'interruptionPolicy' => 'setInterruptionPolicy',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorId  云服务器的系统规格的ID
    * sellStatus  云服务器的系统规格销售状态。  取值范围：  - available：正常售卖 - sellout：售罄
    * sellMode  计费模式。  key的取值范围：  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * availabilityZoneId  可用区，需要指定可用区（AZ）
    * longestSpotDurationHoursGt  查询竞价实例时长大于设置值的策略
    * largestSpotDurationCountGt  查询“竞价实例时长”的个数大于设置值的策略
    * longestSpotDurationHours  查询竞价实例时长等于设置值的策略
    * largestSpotDurationCount  查询“竞价实例时长”的个数等于设置值的策略
    * interruptionPolicy  中断策略。  取值范围：  - immediate：立即释放 - delay：延迟释放
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorId' => 'getFlavorId',
            'sellStatus' => 'getSellStatus',
            'sellMode' => 'getSellMode',
            'availabilityZoneId' => 'getAvailabilityZoneId',
            'longestSpotDurationHoursGt' => 'getLongestSpotDurationHoursGt',
            'largestSpotDurationCountGt' => 'getLargestSpotDurationCountGt',
            'longestSpotDurationHours' => 'getLongestSpotDurationHours',
            'largestSpotDurationCount' => 'getLargestSpotDurationCount',
            'interruptionPolicy' => 'getInterruptionPolicy',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
    const SELL_STATUS_AVAILABLE = 'available';
    const SELL_STATUS_SELLOUT = 'sellout';
    const SELL_MODE_POST_PAID = 'postPaid';
    const SELL_MODE_PRE_PAID = 'prePaid';
    const SELL_MODE_SPOT = 'spot';
    const SELL_MODE_RI = 'ri';
    const INTERRUPTION_POLICY_IMMEDIATE = 'immediate';
    const INTERRUPTION_POLICY_DELAY = 'delay';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSellStatusAllowableValues()
    {
        return [
            self::SELL_STATUS_AVAILABLE,
            self::SELL_STATUS_SELLOUT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSellModeAllowableValues()
    {
        return [
            self::SELL_MODE_POST_PAID,
            self::SELL_MODE_PRE_PAID,
            self::SELL_MODE_SPOT,
            self::SELL_MODE_RI,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInterruptionPolicyAllowableValues()
    {
        return [
            self::INTERRUPTION_POLICY_IMMEDIATE,
            self::INTERRUPTION_POLICY_DELAY,
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
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['sellStatus'] = isset($data['sellStatus']) ? $data['sellStatus'] : null;
        $this->container['sellMode'] = isset($data['sellMode']) ? $data['sellMode'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
        $this->container['longestSpotDurationHoursGt'] = isset($data['longestSpotDurationHoursGt']) ? $data['longestSpotDurationHoursGt'] : null;
        $this->container['largestSpotDurationCountGt'] = isset($data['largestSpotDurationCountGt']) ? $data['largestSpotDurationCountGt'] : null;
        $this->container['longestSpotDurationHours'] = isset($data['longestSpotDurationHours']) ? $data['longestSpotDurationHours'] : null;
        $this->container['largestSpotDurationCount'] = isset($data['largestSpotDurationCount']) ? $data['largestSpotDurationCount'] : null;
        $this->container['interruptionPolicy'] = isset($data['interruptionPolicy']) ? $data['interruptionPolicy'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSellStatusAllowableValues();
                if (!is_null($this->container['sellStatus']) && !in_array($this->container['sellStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sellStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSellModeAllowableValues();
                if (!is_null($this->container['sellMode']) && !in_array($this->container['sellMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sellMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInterruptionPolicyAllowableValues();
                if (!is_null($this->container['interruptionPolicy']) && !in_array($this->container['interruptionPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'interruptionPolicy', must be one of '%s'",
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
    * Gets flavorId
    *  云服务器的系统规格的ID
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 云服务器的系统规格的ID
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets sellStatus
    *  云服务器的系统规格销售状态。  取值范围：  - available：正常售卖 - sellout：售罄
    *
    * @return string|null
    */
    public function getSellStatus()
    {
        return $this->container['sellStatus'];
    }

    /**
    * Sets sellStatus
    *
    * @param string|null $sellStatus 云服务器的系统规格销售状态。  取值范围：  - available：正常售卖 - sellout：售罄
    *
    * @return $this
    */
    public function setSellStatus($sellStatus)
    {
        $this->container['sellStatus'] = $sellStatus;
        return $this;
    }

    /**
    * Gets sellMode
    *  计费模式。  key的取值范围：  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    *
    * @return string|null
    */
    public function getSellMode()
    {
        return $this->container['sellMode'];
    }

    /**
    * Sets sellMode
    *
    * @param string|null $sellMode 计费模式。  key的取值范围：  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    *
    * @return $this
    */
    public function setSellMode($sellMode)
    {
        $this->container['sellMode'] = $sellMode;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  可用区，需要指定可用区（AZ）
    *
    * @return string|null
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string|null $availabilityZoneId 可用区，需要指定可用区（AZ）
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
        return $this;
    }

    /**
    * Gets longestSpotDurationHoursGt
    *  查询竞价实例时长大于设置值的策略
    *
    * @return int|null
    */
    public function getLongestSpotDurationHoursGt()
    {
        return $this->container['longestSpotDurationHoursGt'];
    }

    /**
    * Sets longestSpotDurationHoursGt
    *
    * @param int|null $longestSpotDurationHoursGt 查询竞价实例时长大于设置值的策略
    *
    * @return $this
    */
    public function setLongestSpotDurationHoursGt($longestSpotDurationHoursGt)
    {
        $this->container['longestSpotDurationHoursGt'] = $longestSpotDurationHoursGt;
        return $this;
    }

    /**
    * Gets largestSpotDurationCountGt
    *  查询“竞价实例时长”的个数大于设置值的策略
    *
    * @return int|null
    */
    public function getLargestSpotDurationCountGt()
    {
        return $this->container['largestSpotDurationCountGt'];
    }

    /**
    * Sets largestSpotDurationCountGt
    *
    * @param int|null $largestSpotDurationCountGt 查询“竞价实例时长”的个数大于设置值的策略
    *
    * @return $this
    */
    public function setLargestSpotDurationCountGt($largestSpotDurationCountGt)
    {
        $this->container['largestSpotDurationCountGt'] = $largestSpotDurationCountGt;
        return $this;
    }

    /**
    * Gets longestSpotDurationHours
    *  查询竞价实例时长等于设置值的策略
    *
    * @return int|null
    */
    public function getLongestSpotDurationHours()
    {
        return $this->container['longestSpotDurationHours'];
    }

    /**
    * Sets longestSpotDurationHours
    *
    * @param int|null $longestSpotDurationHours 查询竞价实例时长等于设置值的策略
    *
    * @return $this
    */
    public function setLongestSpotDurationHours($longestSpotDurationHours)
    {
        $this->container['longestSpotDurationHours'] = $longestSpotDurationHours;
        return $this;
    }

    /**
    * Gets largestSpotDurationCount
    *  查询“竞价实例时长”的个数等于设置值的策略
    *
    * @return int|null
    */
    public function getLargestSpotDurationCount()
    {
        return $this->container['largestSpotDurationCount'];
    }

    /**
    * Sets largestSpotDurationCount
    *
    * @param int|null $largestSpotDurationCount 查询“竞价实例时长”的个数等于设置值的策略
    *
    * @return $this
    */
    public function setLargestSpotDurationCount($largestSpotDurationCount)
    {
        $this->container['largestSpotDurationCount'] = $largestSpotDurationCount;
        return $this;
    }

    /**
    * Gets interruptionPolicy
    *  中断策略。  取值范围：  - immediate：立即释放 - delay：延迟释放
    *
    * @return string|null
    */
    public function getInterruptionPolicy()
    {
        return $this->container['interruptionPolicy'];
    }

    /**
    * Sets interruptionPolicy
    *
    * @param string|null $interruptionPolicy 中断策略。  取值范围：  - immediate：立即释放 - delay：延迟释放
    *
    * @return $this
    */
    public function setInterruptionPolicy($interruptionPolicy)
    {
        $this->container['interruptionPolicy'] = $interruptionPolicy;
        return $this;
    }

    /**
    * Gets limit
    *  单页面可显示的flavor条数最大值，默认是1000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 单页面可显示的flavor条数最大值，默认是1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  以单页最后一条flavor的ID作为分页标记。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 以单页最后一条flavor的ID作为分页标记。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

