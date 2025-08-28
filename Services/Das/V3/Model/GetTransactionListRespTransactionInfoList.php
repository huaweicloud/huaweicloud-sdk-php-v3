<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetTransactionListRespTransactionInfoList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetTransactionListResp_transaction_info_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastSec  事务持续时间
    * waitLocks  等待锁数量
    * holdLocks  持有锁数量
    * occurrenceTime  发生时间
    * detail  事务内容
    * collectTime  收集时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastSec' => 'int',
            'waitLocks' => 'int',
            'holdLocks' => 'int',
            'occurrenceTime' => 'int',
            'detail' => 'string',
            'collectTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastSec  事务持续时间
    * waitLocks  等待锁数量
    * holdLocks  持有锁数量
    * occurrenceTime  发生时间
    * detail  事务内容
    * collectTime  收集时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastSec' => 'int32',
        'waitLocks' => 'int32',
        'holdLocks' => 'int32',
        'occurrenceTime' => 'int64',
        'detail' => null,
        'collectTime' => 'int64'
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
    * lastSec  事务持续时间
    * waitLocks  等待锁数量
    * holdLocks  持有锁数量
    * occurrenceTime  发生时间
    * detail  事务内容
    * collectTime  收集时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastSec' => 'last_sec',
            'waitLocks' => 'wait_locks',
            'holdLocks' => 'hold_locks',
            'occurrenceTime' => 'occurrence_time',
            'detail' => 'detail',
            'collectTime' => 'collect_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastSec  事务持续时间
    * waitLocks  等待锁数量
    * holdLocks  持有锁数量
    * occurrenceTime  发生时间
    * detail  事务内容
    * collectTime  收集时间
    *
    * @var string[]
    */
    protected static $setters = [
            'lastSec' => 'setLastSec',
            'waitLocks' => 'setWaitLocks',
            'holdLocks' => 'setHoldLocks',
            'occurrenceTime' => 'setOccurrenceTime',
            'detail' => 'setDetail',
            'collectTime' => 'setCollectTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastSec  事务持续时间
    * waitLocks  等待锁数量
    * holdLocks  持有锁数量
    * occurrenceTime  发生时间
    * detail  事务内容
    * collectTime  收集时间
    *
    * @var string[]
    */
    protected static $getters = [
            'lastSec' => 'getLastSec',
            'waitLocks' => 'getWaitLocks',
            'holdLocks' => 'getHoldLocks',
            'occurrenceTime' => 'getOccurrenceTime',
            'detail' => 'getDetail',
            'collectTime' => 'getCollectTime'
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
        $this->container['lastSec'] = isset($data['lastSec']) ? $data['lastSec'] : null;
        $this->container['waitLocks'] = isset($data['waitLocks']) ? $data['waitLocks'] : null;
        $this->container['holdLocks'] = isset($data['holdLocks']) ? $data['holdLocks'] : null;
        $this->container['occurrenceTime'] = isset($data['occurrenceTime']) ? $data['occurrenceTime'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['lastSec'] === null) {
            $invalidProperties[] = "'lastSec' can't be null";
        }
        if ($this->container['waitLocks'] === null) {
            $invalidProperties[] = "'waitLocks' can't be null";
        }
        if ($this->container['holdLocks'] === null) {
            $invalidProperties[] = "'holdLocks' can't be null";
        }
        if ($this->container['occurrenceTime'] === null) {
            $invalidProperties[] = "'occurrenceTime' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
        if ($this->container['collectTime'] === null) {
            $invalidProperties[] = "'collectTime' can't be null";
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
    * Gets lastSec
    *  事务持续时间
    *
    * @return int
    */
    public function getLastSec()
    {
        return $this->container['lastSec'];
    }

    /**
    * Sets lastSec
    *
    * @param int $lastSec 事务持续时间
    *
    * @return $this
    */
    public function setLastSec($lastSec)
    {
        $this->container['lastSec'] = $lastSec;
        return $this;
    }

    /**
    * Gets waitLocks
    *  等待锁数量
    *
    * @return int
    */
    public function getWaitLocks()
    {
        return $this->container['waitLocks'];
    }

    /**
    * Sets waitLocks
    *
    * @param int $waitLocks 等待锁数量
    *
    * @return $this
    */
    public function setWaitLocks($waitLocks)
    {
        $this->container['waitLocks'] = $waitLocks;
        return $this;
    }

    /**
    * Gets holdLocks
    *  持有锁数量
    *
    * @return int
    */
    public function getHoldLocks()
    {
        return $this->container['holdLocks'];
    }

    /**
    * Sets holdLocks
    *
    * @param int $holdLocks 持有锁数量
    *
    * @return $this
    */
    public function setHoldLocks($holdLocks)
    {
        $this->container['holdLocks'] = $holdLocks;
        return $this;
    }

    /**
    * Gets occurrenceTime
    *  发生时间
    *
    * @return int
    */
    public function getOccurrenceTime()
    {
        return $this->container['occurrenceTime'];
    }

    /**
    * Sets occurrenceTime
    *
    * @param int $occurrenceTime 发生时间
    *
    * @return $this
    */
    public function setOccurrenceTime($occurrenceTime)
    {
        $this->container['occurrenceTime'] = $occurrenceTime;
        return $this;
    }

    /**
    * Gets detail
    *  事务内容
    *
    * @return string
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string $detail 事务内容
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets collectTime
    *  收集时间
    *
    * @return int
    */
    public function getCollectTime()
    {
        return $this->container['collectTime'];
    }

    /**
    * Sets collectTime
    *
    * @param int $collectTime 收集时间
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
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

