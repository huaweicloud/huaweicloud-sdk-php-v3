<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLockBlockingTrendRespTrendList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLockBlockingTrendResp_trend_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectTime  采集时间
    * totalLockBlockingCount  锁阻塞总数
    * asyncIoCompletionCount  ASYNC_IO_COMPLETION数量
    * asyncNetworkIoCount  ASYNC_NETWORK_IO数量
    * cxconsumerCount  CXCONSUMER数量
    * cxpacketCount  CXPACKET数量
    * dtcCount  DTC数量
    * lckMBuCount  LCK_M_BU数量
    * lckMIsCount  LCK_M_IS数量
    * lckMIuCount  LCK_M_IU数量
    * lckMIxCount  LCK_M_IX数量
    * otherCount  其他锁阻塞数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectTime' => 'int',
            'totalLockBlockingCount' => 'int',
            'asyncIoCompletionCount' => 'int',
            'asyncNetworkIoCount' => 'int',
            'cxconsumerCount' => 'int',
            'cxpacketCount' => 'int',
            'dtcCount' => 'int',
            'lckMBuCount' => 'int',
            'lckMIsCount' => 'int',
            'lckMIuCount' => 'int',
            'lckMIxCount' => 'int',
            'otherCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectTime  采集时间
    * totalLockBlockingCount  锁阻塞总数
    * asyncIoCompletionCount  ASYNC_IO_COMPLETION数量
    * asyncNetworkIoCount  ASYNC_NETWORK_IO数量
    * cxconsumerCount  CXCONSUMER数量
    * cxpacketCount  CXPACKET数量
    * dtcCount  DTC数量
    * lckMBuCount  LCK_M_BU数量
    * lckMIsCount  LCK_M_IS数量
    * lckMIuCount  LCK_M_IU数量
    * lckMIxCount  LCK_M_IX数量
    * otherCount  其他锁阻塞数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectTime' => 'int64',
        'totalLockBlockingCount' => 'int64',
        'asyncIoCompletionCount' => 'int64',
        'asyncNetworkIoCount' => 'int64',
        'cxconsumerCount' => 'int64',
        'cxpacketCount' => 'int64',
        'dtcCount' => 'int64',
        'lckMBuCount' => 'int64',
        'lckMIsCount' => 'int64',
        'lckMIuCount' => 'int64',
        'lckMIxCount' => 'int64',
        'otherCount' => 'int64'
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
    * collectTime  采集时间
    * totalLockBlockingCount  锁阻塞总数
    * asyncIoCompletionCount  ASYNC_IO_COMPLETION数量
    * asyncNetworkIoCount  ASYNC_NETWORK_IO数量
    * cxconsumerCount  CXCONSUMER数量
    * cxpacketCount  CXPACKET数量
    * dtcCount  DTC数量
    * lckMBuCount  LCK_M_BU数量
    * lckMIsCount  LCK_M_IS数量
    * lckMIuCount  LCK_M_IU数量
    * lckMIxCount  LCK_M_IX数量
    * otherCount  其他锁阻塞数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectTime' => 'collect_time',
            'totalLockBlockingCount' => 'total_lock_blocking_count',
            'asyncIoCompletionCount' => 'async_io_completion_count',
            'asyncNetworkIoCount' => 'async_network_io_count',
            'cxconsumerCount' => 'cxconsumer_count',
            'cxpacketCount' => 'cxpacket_count',
            'dtcCount' => 'dtc_count',
            'lckMBuCount' => 'lck_m_bu_count',
            'lckMIsCount' => 'lck_m_is_count',
            'lckMIuCount' => 'lck_m_iu_count',
            'lckMIxCount' => 'lck_m_ix_count',
            'otherCount' => 'other_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectTime  采集时间
    * totalLockBlockingCount  锁阻塞总数
    * asyncIoCompletionCount  ASYNC_IO_COMPLETION数量
    * asyncNetworkIoCount  ASYNC_NETWORK_IO数量
    * cxconsumerCount  CXCONSUMER数量
    * cxpacketCount  CXPACKET数量
    * dtcCount  DTC数量
    * lckMBuCount  LCK_M_BU数量
    * lckMIsCount  LCK_M_IS数量
    * lckMIuCount  LCK_M_IU数量
    * lckMIxCount  LCK_M_IX数量
    * otherCount  其他锁阻塞数量
    *
    * @var string[]
    */
    protected static $setters = [
            'collectTime' => 'setCollectTime',
            'totalLockBlockingCount' => 'setTotalLockBlockingCount',
            'asyncIoCompletionCount' => 'setAsyncIoCompletionCount',
            'asyncNetworkIoCount' => 'setAsyncNetworkIoCount',
            'cxconsumerCount' => 'setCxconsumerCount',
            'cxpacketCount' => 'setCxpacketCount',
            'dtcCount' => 'setDtcCount',
            'lckMBuCount' => 'setLckMBuCount',
            'lckMIsCount' => 'setLckMIsCount',
            'lckMIuCount' => 'setLckMIuCount',
            'lckMIxCount' => 'setLckMIxCount',
            'otherCount' => 'setOtherCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectTime  采集时间
    * totalLockBlockingCount  锁阻塞总数
    * asyncIoCompletionCount  ASYNC_IO_COMPLETION数量
    * asyncNetworkIoCount  ASYNC_NETWORK_IO数量
    * cxconsumerCount  CXCONSUMER数量
    * cxpacketCount  CXPACKET数量
    * dtcCount  DTC数量
    * lckMBuCount  LCK_M_BU数量
    * lckMIsCount  LCK_M_IS数量
    * lckMIuCount  LCK_M_IU数量
    * lckMIxCount  LCK_M_IX数量
    * otherCount  其他锁阻塞数量
    *
    * @var string[]
    */
    protected static $getters = [
            'collectTime' => 'getCollectTime',
            'totalLockBlockingCount' => 'getTotalLockBlockingCount',
            'asyncIoCompletionCount' => 'getAsyncIoCompletionCount',
            'asyncNetworkIoCount' => 'getAsyncNetworkIoCount',
            'cxconsumerCount' => 'getCxconsumerCount',
            'cxpacketCount' => 'getCxpacketCount',
            'dtcCount' => 'getDtcCount',
            'lckMBuCount' => 'getLckMBuCount',
            'lckMIsCount' => 'getLckMIsCount',
            'lckMIuCount' => 'getLckMIuCount',
            'lckMIxCount' => 'getLckMIxCount',
            'otherCount' => 'getOtherCount'
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
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
        $this->container['totalLockBlockingCount'] = isset($data['totalLockBlockingCount']) ? $data['totalLockBlockingCount'] : null;
        $this->container['asyncIoCompletionCount'] = isset($data['asyncIoCompletionCount']) ? $data['asyncIoCompletionCount'] : null;
        $this->container['asyncNetworkIoCount'] = isset($data['asyncNetworkIoCount']) ? $data['asyncNetworkIoCount'] : null;
        $this->container['cxconsumerCount'] = isset($data['cxconsumerCount']) ? $data['cxconsumerCount'] : null;
        $this->container['cxpacketCount'] = isset($data['cxpacketCount']) ? $data['cxpacketCount'] : null;
        $this->container['dtcCount'] = isset($data['dtcCount']) ? $data['dtcCount'] : null;
        $this->container['lckMBuCount'] = isset($data['lckMBuCount']) ? $data['lckMBuCount'] : null;
        $this->container['lckMIsCount'] = isset($data['lckMIsCount']) ? $data['lckMIsCount'] : null;
        $this->container['lckMIuCount'] = isset($data['lckMIuCount']) ? $data['lckMIuCount'] : null;
        $this->container['lckMIxCount'] = isset($data['lckMIxCount']) ? $data['lckMIxCount'] : null;
        $this->container['otherCount'] = isset($data['otherCount']) ? $data['otherCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['collectTime']) && ($this->container['collectTime'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'collectTime', must be smaller than or equal to 253370736001000.";
            }
            if (!is_null($this->container['collectTime']) && ($this->container['collectTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'collectTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalLockBlockingCount']) && ($this->container['totalLockBlockingCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalLockBlockingCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalLockBlockingCount']) && ($this->container['totalLockBlockingCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalLockBlockingCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['asyncIoCompletionCount']) && ($this->container['asyncIoCompletionCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'asyncIoCompletionCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['asyncIoCompletionCount']) && ($this->container['asyncIoCompletionCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'asyncIoCompletionCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['asyncNetworkIoCount']) && ($this->container['asyncNetworkIoCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'asyncNetworkIoCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['asyncNetworkIoCount']) && ($this->container['asyncNetworkIoCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'asyncNetworkIoCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cxconsumerCount']) && ($this->container['cxconsumerCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'cxconsumerCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['cxconsumerCount']) && ($this->container['cxconsumerCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'cxconsumerCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cxpacketCount']) && ($this->container['cxpacketCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'cxpacketCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['cxpacketCount']) && ($this->container['cxpacketCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'cxpacketCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dtcCount']) && ($this->container['dtcCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'dtcCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['dtcCount']) && ($this->container['dtcCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'dtcCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lckMBuCount']) && ($this->container['lckMBuCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lckMBuCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lckMBuCount']) && ($this->container['lckMBuCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lckMBuCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lckMIsCount']) && ($this->container['lckMIsCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lckMIsCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lckMIsCount']) && ($this->container['lckMIsCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lckMIsCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lckMIuCount']) && ($this->container['lckMIuCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lckMIuCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lckMIuCount']) && ($this->container['lckMIuCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lckMIuCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lckMIxCount']) && ($this->container['lckMIxCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lckMIxCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lckMIxCount']) && ($this->container['lckMIxCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lckMIxCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['otherCount']) && ($this->container['otherCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'otherCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['otherCount']) && ($this->container['otherCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'otherCount', must be bigger than or equal to 0.";
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
    * Gets collectTime
    *  采集时间
    *
    * @return int|null
    */
    public function getCollectTime()
    {
        return $this->container['collectTime'];
    }

    /**
    * Sets collectTime
    *
    * @param int|null $collectTime 采集时间
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
        return $this;
    }

    /**
    * Gets totalLockBlockingCount
    *  锁阻塞总数
    *
    * @return int|null
    */
    public function getTotalLockBlockingCount()
    {
        return $this->container['totalLockBlockingCount'];
    }

    /**
    * Sets totalLockBlockingCount
    *
    * @param int|null $totalLockBlockingCount 锁阻塞总数
    *
    * @return $this
    */
    public function setTotalLockBlockingCount($totalLockBlockingCount)
    {
        $this->container['totalLockBlockingCount'] = $totalLockBlockingCount;
        return $this;
    }

    /**
    * Gets asyncIoCompletionCount
    *  ASYNC_IO_COMPLETION数量
    *
    * @return int|null
    */
    public function getAsyncIoCompletionCount()
    {
        return $this->container['asyncIoCompletionCount'];
    }

    /**
    * Sets asyncIoCompletionCount
    *
    * @param int|null $asyncIoCompletionCount ASYNC_IO_COMPLETION数量
    *
    * @return $this
    */
    public function setAsyncIoCompletionCount($asyncIoCompletionCount)
    {
        $this->container['asyncIoCompletionCount'] = $asyncIoCompletionCount;
        return $this;
    }

    /**
    * Gets asyncNetworkIoCount
    *  ASYNC_NETWORK_IO数量
    *
    * @return int|null
    */
    public function getAsyncNetworkIoCount()
    {
        return $this->container['asyncNetworkIoCount'];
    }

    /**
    * Sets asyncNetworkIoCount
    *
    * @param int|null $asyncNetworkIoCount ASYNC_NETWORK_IO数量
    *
    * @return $this
    */
    public function setAsyncNetworkIoCount($asyncNetworkIoCount)
    {
        $this->container['asyncNetworkIoCount'] = $asyncNetworkIoCount;
        return $this;
    }

    /**
    * Gets cxconsumerCount
    *  CXCONSUMER数量
    *
    * @return int|null
    */
    public function getCxconsumerCount()
    {
        return $this->container['cxconsumerCount'];
    }

    /**
    * Sets cxconsumerCount
    *
    * @param int|null $cxconsumerCount CXCONSUMER数量
    *
    * @return $this
    */
    public function setCxconsumerCount($cxconsumerCount)
    {
        $this->container['cxconsumerCount'] = $cxconsumerCount;
        return $this;
    }

    /**
    * Gets cxpacketCount
    *  CXPACKET数量
    *
    * @return int|null
    */
    public function getCxpacketCount()
    {
        return $this->container['cxpacketCount'];
    }

    /**
    * Sets cxpacketCount
    *
    * @param int|null $cxpacketCount CXPACKET数量
    *
    * @return $this
    */
    public function setCxpacketCount($cxpacketCount)
    {
        $this->container['cxpacketCount'] = $cxpacketCount;
        return $this;
    }

    /**
    * Gets dtcCount
    *  DTC数量
    *
    * @return int|null
    */
    public function getDtcCount()
    {
        return $this->container['dtcCount'];
    }

    /**
    * Sets dtcCount
    *
    * @param int|null $dtcCount DTC数量
    *
    * @return $this
    */
    public function setDtcCount($dtcCount)
    {
        $this->container['dtcCount'] = $dtcCount;
        return $this;
    }

    /**
    * Gets lckMBuCount
    *  LCK_M_BU数量
    *
    * @return int|null
    */
    public function getLckMBuCount()
    {
        return $this->container['lckMBuCount'];
    }

    /**
    * Sets lckMBuCount
    *
    * @param int|null $lckMBuCount LCK_M_BU数量
    *
    * @return $this
    */
    public function setLckMBuCount($lckMBuCount)
    {
        $this->container['lckMBuCount'] = $lckMBuCount;
        return $this;
    }

    /**
    * Gets lckMIsCount
    *  LCK_M_IS数量
    *
    * @return int|null
    */
    public function getLckMIsCount()
    {
        return $this->container['lckMIsCount'];
    }

    /**
    * Sets lckMIsCount
    *
    * @param int|null $lckMIsCount LCK_M_IS数量
    *
    * @return $this
    */
    public function setLckMIsCount($lckMIsCount)
    {
        $this->container['lckMIsCount'] = $lckMIsCount;
        return $this;
    }

    /**
    * Gets lckMIuCount
    *  LCK_M_IU数量
    *
    * @return int|null
    */
    public function getLckMIuCount()
    {
        return $this->container['lckMIuCount'];
    }

    /**
    * Sets lckMIuCount
    *
    * @param int|null $lckMIuCount LCK_M_IU数量
    *
    * @return $this
    */
    public function setLckMIuCount($lckMIuCount)
    {
        $this->container['lckMIuCount'] = $lckMIuCount;
        return $this;
    }

    /**
    * Gets lckMIxCount
    *  LCK_M_IX数量
    *
    * @return int|null
    */
    public function getLckMIxCount()
    {
        return $this->container['lckMIxCount'];
    }

    /**
    * Sets lckMIxCount
    *
    * @param int|null $lckMIxCount LCK_M_IX数量
    *
    * @return $this
    */
    public function setLckMIxCount($lckMIxCount)
    {
        $this->container['lckMIxCount'] = $lckMIxCount;
        return $this;
    }

    /**
    * Gets otherCount
    *  其他锁阻塞数量
    *
    * @return int|null
    */
    public function getOtherCount()
    {
        return $this->container['otherCount'];
    }

    /**
    * Sets otherCount
    *
    * @param int|null $otherCount 其他锁阻塞数量
    *
    * @return $this
    */
    public function setOtherCount($otherCount)
    {
        $this->container['otherCount'] = $otherCount;
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

