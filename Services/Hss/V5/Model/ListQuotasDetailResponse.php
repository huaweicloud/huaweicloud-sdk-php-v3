<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQuotasDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQuotasDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packetCycleNum  包周期配额数
    * onDemandNum  按需配额数
    * usedNum  已使用配额数
    * idleNum  空闲配额数
    * normalNum  正常配额数
    * expiredNum  过期配额数
    * createTime  创建时间
    * freezeNum  冻结配额数
    * quotaStatisticsList  配额统计列表
    * totalNum  配额总数
    * dataList  配额列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packetCycleNum' => 'int',
            'onDemandNum' => 'int',
            'usedNum' => 'int',
            'idleNum' => 'int',
            'normalNum' => 'int',
            'expiredNum' => 'int',
            'createTime' => 'int',
            'freezeNum' => 'int',
            'quotaStatisticsList' => '\HuaweiCloud\SDK\Hss\V5\Model\QuotaStatisticsResponseInfo[]',
            'totalNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\QuotaResourcesResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packetCycleNum  包周期配额数
    * onDemandNum  按需配额数
    * usedNum  已使用配额数
    * idleNum  空闲配额数
    * normalNum  正常配额数
    * expiredNum  过期配额数
    * createTime  创建时间
    * freezeNum  冻结配额数
    * quotaStatisticsList  配额统计列表
    * totalNum  配额总数
    * dataList  配额列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packetCycleNum' => 'int32',
        'onDemandNum' => 'int32',
        'usedNum' => 'int32',
        'idleNum' => 'int32',
        'normalNum' => 'int32',
        'expiredNum' => 'int32',
        'createTime' => 'int64',
        'freezeNum' => 'int32',
        'quotaStatisticsList' => null,
        'totalNum' => 'int32',
        'dataList' => null
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
    * packetCycleNum  包周期配额数
    * onDemandNum  按需配额数
    * usedNum  已使用配额数
    * idleNum  空闲配额数
    * normalNum  正常配额数
    * expiredNum  过期配额数
    * createTime  创建时间
    * freezeNum  冻结配额数
    * quotaStatisticsList  配额统计列表
    * totalNum  配额总数
    * dataList  配额列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packetCycleNum' => 'packet_cycle_num',
            'onDemandNum' => 'on_demand_num',
            'usedNum' => 'used_num',
            'idleNum' => 'idle_num',
            'normalNum' => 'normal_num',
            'expiredNum' => 'expired_num',
            'createTime' => 'create_time',
            'freezeNum' => 'freeze_num',
            'quotaStatisticsList' => 'quota_statistics_list',
            'totalNum' => 'total_num',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packetCycleNum  包周期配额数
    * onDemandNum  按需配额数
    * usedNum  已使用配额数
    * idleNum  空闲配额数
    * normalNum  正常配额数
    * expiredNum  过期配额数
    * createTime  创建时间
    * freezeNum  冻结配额数
    * quotaStatisticsList  配额统计列表
    * totalNum  配额总数
    * dataList  配额列表
    *
    * @var string[]
    */
    protected static $setters = [
            'packetCycleNum' => 'setPacketCycleNum',
            'onDemandNum' => 'setOnDemandNum',
            'usedNum' => 'setUsedNum',
            'idleNum' => 'setIdleNum',
            'normalNum' => 'setNormalNum',
            'expiredNum' => 'setExpiredNum',
            'createTime' => 'setCreateTime',
            'freezeNum' => 'setFreezeNum',
            'quotaStatisticsList' => 'setQuotaStatisticsList',
            'totalNum' => 'setTotalNum',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packetCycleNum  包周期配额数
    * onDemandNum  按需配额数
    * usedNum  已使用配额数
    * idleNum  空闲配额数
    * normalNum  正常配额数
    * expiredNum  过期配额数
    * createTime  创建时间
    * freezeNum  冻结配额数
    * quotaStatisticsList  配额统计列表
    * totalNum  配额总数
    * dataList  配额列表
    *
    * @var string[]
    */
    protected static $getters = [
            'packetCycleNum' => 'getPacketCycleNum',
            'onDemandNum' => 'getOnDemandNum',
            'usedNum' => 'getUsedNum',
            'idleNum' => 'getIdleNum',
            'normalNum' => 'getNormalNum',
            'expiredNum' => 'getExpiredNum',
            'createTime' => 'getCreateTime',
            'freezeNum' => 'getFreezeNum',
            'quotaStatisticsList' => 'getQuotaStatisticsList',
            'totalNum' => 'getTotalNum',
            'dataList' => 'getDataList'
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
        $this->container['packetCycleNum'] = isset($data['packetCycleNum']) ? $data['packetCycleNum'] : null;
        $this->container['onDemandNum'] = isset($data['onDemandNum']) ? $data['onDemandNum'] : null;
        $this->container['usedNum'] = isset($data['usedNum']) ? $data['usedNum'] : null;
        $this->container['idleNum'] = isset($data['idleNum']) ? $data['idleNum'] : null;
        $this->container['normalNum'] = isset($data['normalNum']) ? $data['normalNum'] : null;
        $this->container['expiredNum'] = isset($data['expiredNum']) ? $data['expiredNum'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['freezeNum'] = isset($data['freezeNum']) ? $data['freezeNum'] : null;
        $this->container['quotaStatisticsList'] = isset($data['quotaStatisticsList']) ? $data['quotaStatisticsList'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['packetCycleNum']) && ($this->container['packetCycleNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'packetCycleNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['packetCycleNum']) && ($this->container['packetCycleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'packetCycleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['onDemandNum']) && ($this->container['onDemandNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'onDemandNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['onDemandNum']) && ($this->container['onDemandNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'onDemandNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedNum']) && ($this->container['usedNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'usedNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['usedNum']) && ($this->container['usedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['idleNum']) && ($this->container['idleNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'idleNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['idleNum']) && ($this->container['idleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'idleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['normalNum']) && ($this->container['normalNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'normalNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['normalNum']) && ($this->container['normalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'normalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expiredNum']) && ($this->container['expiredNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'expiredNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['expiredNum']) && ($this->container['expiredNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'expiredNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freezeNum']) && ($this->container['freezeNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'freezeNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['freezeNum']) && ($this->container['freezeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'freezeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
    * Gets packetCycleNum
    *  包周期配额数
    *
    * @return int|null
    */
    public function getPacketCycleNum()
    {
        return $this->container['packetCycleNum'];
    }

    /**
    * Sets packetCycleNum
    *
    * @param int|null $packetCycleNum 包周期配额数
    *
    * @return $this
    */
    public function setPacketCycleNum($packetCycleNum)
    {
        $this->container['packetCycleNum'] = $packetCycleNum;
        return $this;
    }

    /**
    * Gets onDemandNum
    *  按需配额数
    *
    * @return int|null
    */
    public function getOnDemandNum()
    {
        return $this->container['onDemandNum'];
    }

    /**
    * Sets onDemandNum
    *
    * @param int|null $onDemandNum 按需配额数
    *
    * @return $this
    */
    public function setOnDemandNum($onDemandNum)
    {
        $this->container['onDemandNum'] = $onDemandNum;
        return $this;
    }

    /**
    * Gets usedNum
    *  已使用配额数
    *
    * @return int|null
    */
    public function getUsedNum()
    {
        return $this->container['usedNum'];
    }

    /**
    * Sets usedNum
    *
    * @param int|null $usedNum 已使用配额数
    *
    * @return $this
    */
    public function setUsedNum($usedNum)
    {
        $this->container['usedNum'] = $usedNum;
        return $this;
    }

    /**
    * Gets idleNum
    *  空闲配额数
    *
    * @return int|null
    */
    public function getIdleNum()
    {
        return $this->container['idleNum'];
    }

    /**
    * Sets idleNum
    *
    * @param int|null $idleNum 空闲配额数
    *
    * @return $this
    */
    public function setIdleNum($idleNum)
    {
        $this->container['idleNum'] = $idleNum;
        return $this;
    }

    /**
    * Gets normalNum
    *  正常配额数
    *
    * @return int|null
    */
    public function getNormalNum()
    {
        return $this->container['normalNum'];
    }

    /**
    * Sets normalNum
    *
    * @param int|null $normalNum 正常配额数
    *
    * @return $this
    */
    public function setNormalNum($normalNum)
    {
        $this->container['normalNum'] = $normalNum;
        return $this;
    }

    /**
    * Gets expiredNum
    *  过期配额数
    *
    * @return int|null
    */
    public function getExpiredNum()
    {
        return $this->container['expiredNum'];
    }

    /**
    * Sets expiredNum
    *
    * @param int|null $expiredNum 过期配额数
    *
    * @return $this
    */
    public function setExpiredNum($expiredNum)
    {
        $this->container['expiredNum'] = $expiredNum;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets freezeNum
    *  冻结配额数
    *
    * @return int|null
    */
    public function getFreezeNum()
    {
        return $this->container['freezeNum'];
    }

    /**
    * Sets freezeNum
    *
    * @param int|null $freezeNum 冻结配额数
    *
    * @return $this
    */
    public function setFreezeNum($freezeNum)
    {
        $this->container['freezeNum'] = $freezeNum;
        return $this;
    }

    /**
    * Gets quotaStatisticsList
    *  配额统计列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\QuotaStatisticsResponseInfo[]|null
    */
    public function getQuotaStatisticsList()
    {
        return $this->container['quotaStatisticsList'];
    }

    /**
    * Sets quotaStatisticsList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\QuotaStatisticsResponseInfo[]|null $quotaStatisticsList 配额统计列表
    *
    * @return $this
    */
    public function setQuotaStatisticsList($quotaStatisticsList)
    {
        $this->container['quotaStatisticsList'] = $quotaStatisticsList;
        return $this;
    }

    /**
    * Gets totalNum
    *  配额总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 配额总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets dataList
    *  配额列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\QuotaResourcesResponseInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\QuotaResourcesResponseInfo[]|null $dataList 配额列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

