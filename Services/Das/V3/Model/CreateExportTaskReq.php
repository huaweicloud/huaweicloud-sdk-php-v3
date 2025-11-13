<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExportTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExportTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  OBS桶名
    * startAt  开始时间(Unix timestamp),单位:毫秒。
    * endAt  结束时间(Unix timestamp),单位:毫秒。
    * filePath  OBS文件目录
    * timeZone  时区
    * order  排序字段。 - collectTime 收集时间 - occurrenceTime 发生时间 - lastSec 事务持续时间 - waitLockStructCount 持有锁数量 - holdLockStructCount 等待锁数量
    * orderBy  排序规则。 - asc 升序 - desc 降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'filePath' => 'string',
            'timeZone' => 'string',
            'order' => 'string',
            'orderBy' => 'string',
            'lastSecMin' => 'int',
            'lastSecMax' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  OBS桶名
    * startAt  开始时间(Unix timestamp),单位:毫秒。
    * endAt  结束时间(Unix timestamp),单位:毫秒。
    * filePath  OBS文件目录
    * timeZone  时区
    * order  排序字段。 - collectTime 收集时间 - occurrenceTime 发生时间 - lastSec 事务持续时间 - waitLockStructCount 持有锁数量 - holdLockStructCount 等待锁数量
    * orderBy  排序规则。 - asc 升序 - desc 降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'filePath' => null,
        'timeZone' => null,
        'order' => null,
        'orderBy' => null,
        'lastSecMin' => 'int64',
        'lastSecMax' => 'int64'
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
    * bucketName  OBS桶名
    * startAt  开始时间(Unix timestamp),单位:毫秒。
    * endAt  结束时间(Unix timestamp),单位:毫秒。
    * filePath  OBS文件目录
    * timeZone  时区
    * order  排序字段。 - collectTime 收集时间 - occurrenceTime 发生时间 - lastSec 事务持续时间 - waitLockStructCount 持有锁数量 - holdLockStructCount 等待锁数量
    * orderBy  排序规则。 - asc 升序 - desc 降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'filePath' => 'file_path',
            'timeZone' => 'time_zone',
            'order' => 'order',
            'orderBy' => 'order_by',
            'lastSecMin' => 'last_sec_min',
            'lastSecMax' => 'last_sec_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  OBS桶名
    * startAt  开始时间(Unix timestamp),单位:毫秒。
    * endAt  结束时间(Unix timestamp),单位:毫秒。
    * filePath  OBS文件目录
    * timeZone  时区
    * order  排序字段。 - collectTime 收集时间 - occurrenceTime 发生时间 - lastSec 事务持续时间 - waitLockStructCount 持有锁数量 - holdLockStructCount 等待锁数量
    * orderBy  排序规则。 - asc 升序 - desc 降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'filePath' => 'setFilePath',
            'timeZone' => 'setTimeZone',
            'order' => 'setOrder',
            'orderBy' => 'setOrderBy',
            'lastSecMin' => 'setLastSecMin',
            'lastSecMax' => 'setLastSecMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  OBS桶名
    * startAt  开始时间(Unix timestamp),单位:毫秒。
    * endAt  结束时间(Unix timestamp),单位:毫秒。
    * filePath  OBS文件目录
    * timeZone  时区
    * order  排序字段。 - collectTime 收集时间 - occurrenceTime 发生时间 - lastSec 事务持续时间 - waitLockStructCount 持有锁数量 - holdLockStructCount 等待锁数量
    * orderBy  排序规则。 - asc 升序 - desc 降序
    * lastSecMin  持续时间下限
    * lastSecMax  持续时间上限
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'filePath' => 'getFilePath',
            'timeZone' => 'getTimeZone',
            'order' => 'getOrder',
            'orderBy' => 'getOrderBy',
            'lastSecMin' => 'getLastSecMin',
            'lastSecMax' => 'getLastSecMax'
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
    const ORDER_COLLECT_TIME = 'collectTime';
    const ORDER_OCCURRENCE_TIME = 'occurrenceTime';
    const ORDER_LAST_SEC = 'lastSec';
    const ORDER_WAIT_LOCK_STRUCT_COUNT = 'waitLockStructCount';
    const ORDER_HOLD_LOCK_STRUCT_COUNT = 'holdLockStructCount';
    const ORDER_BY_ASC = 'asc';
    const ORDER_BY_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_COLLECT_TIME,
            self::ORDER_OCCURRENCE_TIME,
            self::ORDER_LAST_SEC,
            self::ORDER_WAIT_LOCK_STRUCT_COUNT,
            self::ORDER_HOLD_LOCK_STRUCT_COUNT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_ASC,
            self::ORDER_BY_DESC,
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
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['lastSecMin'] = isset($data['lastSecMin']) ? $data['lastSecMin'] : null;
        $this->container['lastSecMax'] = isset($data['lastSecMax']) ? $data['lastSecMax'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if ((mb_strlen($this->container['bucketName']) > 63)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['bucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
            if (($this->container['startAt'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startAt', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['startAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'startAt', must be bigger than or equal to 0.";
            }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
            if (($this->container['endAt'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endAt', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['endAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'endAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['lastSecMin']) && ($this->container['lastSecMin'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastSecMin', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastSecMin']) && ($this->container['lastSecMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastSecMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastSecMax']) && ($this->container['lastSecMax'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastSecMax', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastSecMax']) && ($this->container['lastSecMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastSecMax', must be bigger than or equal to 0.";
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
    * Gets bucketName
    *  OBS桶名
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName OBS桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间(Unix timestamp),单位:毫秒。
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 开始时间(Unix timestamp),单位:毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间(Unix timestamp),单位:毫秒。
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 结束时间(Unix timestamp),单位:毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets filePath
    *  OBS文件目录
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath OBS文件目录
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets order
    *  排序字段。 - collectTime 收集时间 - occurrenceTime 发生时间 - lastSec 事务持续时间 - waitLockStructCount 持有锁数量 - holdLockStructCount 等待锁数量
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序字段。 - collectTime 收集时间 - occurrenceTime 发生时间 - lastSec 事务持续时间 - waitLockStructCount 持有锁数量 - holdLockStructCount 等待锁数量
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序规则。 - asc 升序 - desc 降序
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序规则。 - asc 升序 - desc 降序
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets lastSecMin
    *  持续时间下限
    *
    * @return int|null
    */
    public function getLastSecMin()
    {
        return $this->container['lastSecMin'];
    }

    /**
    * Sets lastSecMin
    *
    * @param int|null $lastSecMin 持续时间下限
    *
    * @return $this
    */
    public function setLastSecMin($lastSecMin)
    {
        $this->container['lastSecMin'] = $lastSecMin;
        return $this;
    }

    /**
    * Gets lastSecMax
    *  持续时间上限
    *
    * @return int|null
    */
    public function getLastSecMax()
    {
        return $this->container['lastSecMax'];
    }

    /**
    * Sets lastSecMax
    *
    * @param int|null $lastSecMax 持续时间上限
    *
    * @return $this
    */
    public function setLastSecMax($lastSecMax)
    {
        $this->container['lastSecMax'] = $lastSecMax;
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

