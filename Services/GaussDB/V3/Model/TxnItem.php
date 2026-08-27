<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TxnItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TxnItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trxId  **参数解释**： 事务的唯一标识。 **取值范围**： 不涉及。
    * estimatedRemainingTime  **参数解释**： 预计剩余完成时间（秒）。 **取值范围**： ＞0。
    * trxMysqlThreadId  **参数解释**： 用户会话线程ID。 **取值范围**： 不涉及。
    * trxQuery  **参数解释**： 额外信息，通常是正在执行的语句。 **取值范围**： 不涉及。
    * trxStarted  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * trxRowsModified  **参数解释**： 事务修改的行数。 **取值范围**： ≥0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trxId' => 'string',
            'estimatedRemainingTime' => 'int',
            'trxMysqlThreadId' => 'int',
            'trxQuery' => 'string',
            'trxStarted' => 'string',
            'trxRowsModified' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trxId  **参数解释**： 事务的唯一标识。 **取值范围**： 不涉及。
    * estimatedRemainingTime  **参数解释**： 预计剩余完成时间（秒）。 **取值范围**： ＞0。
    * trxMysqlThreadId  **参数解释**： 用户会话线程ID。 **取值范围**： 不涉及。
    * trxQuery  **参数解释**： 额外信息，通常是正在执行的语句。 **取值范围**： 不涉及。
    * trxStarted  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * trxRowsModified  **参数解释**： 事务修改的行数。 **取值范围**： ≥0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trxId' => null,
        'estimatedRemainingTime' => 'int64',
        'trxMysqlThreadId' => 'int64',
        'trxQuery' => null,
        'trxStarted' => null,
        'trxRowsModified' => 'int64'
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
    * trxId  **参数解释**： 事务的唯一标识。 **取值范围**： 不涉及。
    * estimatedRemainingTime  **参数解释**： 预计剩余完成时间（秒）。 **取值范围**： ＞0。
    * trxMysqlThreadId  **参数解释**： 用户会话线程ID。 **取值范围**： 不涉及。
    * trxQuery  **参数解释**： 额外信息，通常是正在执行的语句。 **取值范围**： 不涉及。
    * trxStarted  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * trxRowsModified  **参数解释**： 事务修改的行数。 **取值范围**： ≥0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trxId' => 'trx_id',
            'estimatedRemainingTime' => 'estimated_remaining_time',
            'trxMysqlThreadId' => 'trx_mysql_thread_id',
            'trxQuery' => 'trx_query',
            'trxStarted' => 'trx_started',
            'trxRowsModified' => 'trx_rows_modified'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trxId  **参数解释**： 事务的唯一标识。 **取值范围**： 不涉及。
    * estimatedRemainingTime  **参数解释**： 预计剩余完成时间（秒）。 **取值范围**： ＞0。
    * trxMysqlThreadId  **参数解释**： 用户会话线程ID。 **取值范围**： 不涉及。
    * trxQuery  **参数解释**： 额外信息，通常是正在执行的语句。 **取值范围**： 不涉及。
    * trxStarted  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * trxRowsModified  **参数解释**： 事务修改的行数。 **取值范围**： ≥0。
    *
    * @var string[]
    */
    protected static $setters = [
            'trxId' => 'setTrxId',
            'estimatedRemainingTime' => 'setEstimatedRemainingTime',
            'trxMysqlThreadId' => 'setTrxMysqlThreadId',
            'trxQuery' => 'setTrxQuery',
            'trxStarted' => 'setTrxStarted',
            'trxRowsModified' => 'setTrxRowsModified'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trxId  **参数解释**： 事务的唯一标识。 **取值范围**： 不涉及。
    * estimatedRemainingTime  **参数解释**： 预计剩余完成时间（秒）。 **取值范围**： ＞0。
    * trxMysqlThreadId  **参数解释**： 用户会话线程ID。 **取值范围**： 不涉及。
    * trxQuery  **参数解释**： 额外信息，通常是正在执行的语句。 **取值范围**： 不涉及。
    * trxStarted  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * trxRowsModified  **参数解释**： 事务修改的行数。 **取值范围**： ≥0。
    *
    * @var string[]
    */
    protected static $getters = [
            'trxId' => 'getTrxId',
            'estimatedRemainingTime' => 'getEstimatedRemainingTime',
            'trxMysqlThreadId' => 'getTrxMysqlThreadId',
            'trxQuery' => 'getTrxQuery',
            'trxStarted' => 'getTrxStarted',
            'trxRowsModified' => 'getTrxRowsModified'
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
        $this->container['trxId'] = isset($data['trxId']) ? $data['trxId'] : null;
        $this->container['estimatedRemainingTime'] = isset($data['estimatedRemainingTime']) ? $data['estimatedRemainingTime'] : null;
        $this->container['trxMysqlThreadId'] = isset($data['trxMysqlThreadId']) ? $data['trxMysqlThreadId'] : null;
        $this->container['trxQuery'] = isset($data['trxQuery']) ? $data['trxQuery'] : null;
        $this->container['trxStarted'] = isset($data['trxStarted']) ? $data['trxStarted'] : null;
        $this->container['trxRowsModified'] = isset($data['trxRowsModified']) ? $data['trxRowsModified'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trxId'] === null) {
            $invalidProperties[] = "'trxId' can't be null";
        }
        if ($this->container['estimatedRemainingTime'] === null) {
            $invalidProperties[] = "'estimatedRemainingTime' can't be null";
        }
        if ($this->container['trxMysqlThreadId'] === null) {
            $invalidProperties[] = "'trxMysqlThreadId' can't be null";
        }
            if (($this->container['trxMysqlThreadId'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'trxMysqlThreadId', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['trxMysqlThreadId'] < 0)) {
                $invalidProperties[] = "invalid value for 'trxMysqlThreadId', must be bigger than or equal to 0.";
            }
        if ($this->container['trxQuery'] === null) {
            $invalidProperties[] = "'trxQuery' can't be null";
        }
            if ((mb_strlen($this->container['trxQuery']) > 67108864)) {
                $invalidProperties[] = "invalid value for 'trxQuery', the character length must be smaller than or equal to 67108864.";
            }
            if ((mb_strlen($this->container['trxQuery']) < 0)) {
                $invalidProperties[] = "invalid value for 'trxQuery', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['trxStarted'] === null) {
            $invalidProperties[] = "'trxStarted' can't be null";
        }
        if ($this->container['trxRowsModified'] === null) {
            $invalidProperties[] = "'trxRowsModified' can't be null";
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
    * Gets trxId
    *  **参数解释**： 事务的唯一标识。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getTrxId()
    {
        return $this->container['trxId'];
    }

    /**
    * Sets trxId
    *
    * @param string $trxId **参数解释**： 事务的唯一标识。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTrxId($trxId)
    {
        $this->container['trxId'] = $trxId;
        return $this;
    }

    /**
    * Gets estimatedRemainingTime
    *  **参数解释**： 预计剩余完成时间（秒）。 **取值范围**： ＞0。
    *
    * @return int
    */
    public function getEstimatedRemainingTime()
    {
        return $this->container['estimatedRemainingTime'];
    }

    /**
    * Sets estimatedRemainingTime
    *
    * @param int $estimatedRemainingTime **参数解释**： 预计剩余完成时间（秒）。 **取值范围**： ＞0。
    *
    * @return $this
    */
    public function setEstimatedRemainingTime($estimatedRemainingTime)
    {
        $this->container['estimatedRemainingTime'] = $estimatedRemainingTime;
        return $this;
    }

    /**
    * Gets trxMysqlThreadId
    *  **参数解释**： 用户会话线程ID。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getTrxMysqlThreadId()
    {
        return $this->container['trxMysqlThreadId'];
    }

    /**
    * Sets trxMysqlThreadId
    *
    * @param int $trxMysqlThreadId **参数解释**： 用户会话线程ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTrxMysqlThreadId($trxMysqlThreadId)
    {
        $this->container['trxMysqlThreadId'] = $trxMysqlThreadId;
        return $this;
    }

    /**
    * Gets trxQuery
    *  **参数解释**： 额外信息，通常是正在执行的语句。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getTrxQuery()
    {
        return $this->container['trxQuery'];
    }

    /**
    * Sets trxQuery
    *
    * @param string $trxQuery **参数解释**： 额外信息，通常是正在执行的语句。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTrxQuery($trxQuery)
    {
        $this->container['trxQuery'] = $trxQuery;
        return $this;
    }

    /**
    * Gets trxStarted
    *  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getTrxStarted()
    {
        return $this->container['trxStarted'];
    }

    /**
    * Sets trxStarted
    *
    * @param string $trxStarted **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTrxStarted($trxStarted)
    {
        $this->container['trxStarted'] = $trxStarted;
        return $this;
    }

    /**
    * Gets trxRowsModified
    *  **参数解释**： 事务修改的行数。 **取值范围**： ≥0。
    *
    * @return int
    */
    public function getTrxRowsModified()
    {
        return $this->container['trxRowsModified'];
    }

    /**
    * Sets trxRowsModified
    *
    * @param int $trxRowsModified **参数解释**： 事务修改的行数。 **取值范围**： ≥0。
    *
    * @return $this
    */
    public function setTrxRowsModified($trxRowsModified)
    {
        $this->container['trxRowsModified'] = $trxRowsModified;
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

