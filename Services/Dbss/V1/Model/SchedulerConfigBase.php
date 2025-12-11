<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchedulerConfigBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchedulerConfigBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbIds  数据库ID
    * format  文件类型
    * frequency  周期 - AUDIT_REPORT_DAY: 天 - AUDIT_REPORT_WEEK：周 - AUDIT_REPORT_MONTH：月 - AUDIT_REPORT_YEAR：年 - AUDIT_REPORT_REAL_TIME：实时
    * id  报表模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态 - ON: 开启 - OFF：关闭
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbIds' => 'string',
            'format' => 'string',
            'frequency' => 'string',
            'id' => 'string',
            'mode' => 'string',
            'notice' => 'string',
            'startTime' => 'string',
            'status' => 'string',
            'topicUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbIds  数据库ID
    * format  文件类型
    * frequency  周期 - AUDIT_REPORT_DAY: 天 - AUDIT_REPORT_WEEK：周 - AUDIT_REPORT_MONTH：月 - AUDIT_REPORT_YEAR：年 - AUDIT_REPORT_REAL_TIME：实时
    * id  报表模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态 - ON: 开启 - OFF：关闭
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbIds' => null,
        'format' => null,
        'frequency' => null,
        'id' => null,
        'mode' => null,
        'notice' => null,
        'startTime' => null,
        'status' => null,
        'topicUrn' => null
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
    * dbIds  数据库ID
    * format  文件类型
    * frequency  周期 - AUDIT_REPORT_DAY: 天 - AUDIT_REPORT_WEEK：周 - AUDIT_REPORT_MONTH：月 - AUDIT_REPORT_YEAR：年 - AUDIT_REPORT_REAL_TIME：实时
    * id  报表模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态 - ON: 开启 - OFF：关闭
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbIds' => 'db_ids',
            'format' => 'format',
            'frequency' => 'frequency',
            'id' => 'id',
            'mode' => 'mode',
            'notice' => 'notice',
            'startTime' => 'start_time',
            'status' => 'status',
            'topicUrn' => 'topic_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbIds  数据库ID
    * format  文件类型
    * frequency  周期 - AUDIT_REPORT_DAY: 天 - AUDIT_REPORT_WEEK：周 - AUDIT_REPORT_MONTH：月 - AUDIT_REPORT_YEAR：年 - AUDIT_REPORT_REAL_TIME：实时
    * id  报表模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态 - ON: 开启 - OFF：关闭
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $setters = [
            'dbIds' => 'setDbIds',
            'format' => 'setFormat',
            'frequency' => 'setFrequency',
            'id' => 'setId',
            'mode' => 'setMode',
            'notice' => 'setNotice',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'topicUrn' => 'setTopicUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbIds  数据库ID
    * format  文件类型
    * frequency  周期 - AUDIT_REPORT_DAY: 天 - AUDIT_REPORT_WEEK：周 - AUDIT_REPORT_MONTH：月 - AUDIT_REPORT_YEAR：年 - AUDIT_REPORT_REAL_TIME：实时
    * id  报表模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态 - ON: 开启 - OFF：关闭
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $getters = [
            'dbIds' => 'getDbIds',
            'format' => 'getFormat',
            'frequency' => 'getFrequency',
            'id' => 'getId',
            'mode' => 'getMode',
            'notice' => 'getNotice',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'topicUrn' => 'getTopicUrn'
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
    const FORMAT_PDF = 'PDF';
    const FORMAT_ZIP = 'ZIP';
    const FREQUENCY_AUDIT_REPORT_DAY = 'AUDIT_REPORT_DAY';
    const FREQUENCY_AUDIT_REPORT_WEEK = 'AUDIT_REPORT_WEEK';
    const FREQUENCY_AUDIT_REPORT_MONTH = 'AUDIT_REPORT_MONTH';
    const FREQUENCY_AUDIT_REPORT_YEAR = 'AUDIT_REPORT_YEAR';
    const FREQUENCY_AUDIT_REPORT_REAL_TIME = 'AUDIT_REPORT_REAL_TIME';
    const MODE_ONCE = 'ONCE';
    const MODE_CYCLE = 'CYCLE';
    const NOTICE_OFF = 'OFF';
    const NOTICE_ON = 'ON';
    const STATUS_OFF = 'OFF';
    const STATUS_ON = 'ON';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_PDF,
            self::FORMAT_ZIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_AUDIT_REPORT_DAY,
            self::FREQUENCY_AUDIT_REPORT_WEEK,
            self::FREQUENCY_AUDIT_REPORT_MONTH,
            self::FREQUENCY_AUDIT_REPORT_YEAR,
            self::FREQUENCY_AUDIT_REPORT_REAL_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ONCE,
            self::MODE_CYCLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoticeAllowableValues()
    {
        return [
            self::NOTICE_OFF,
            self::NOTICE_ON,
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
            self::STATUS_OFF,
            self::STATUS_ON,
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
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['notice'] = isset($data['notice']) ? $data['notice'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFrequencyAllowableValues();
                if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNoticeAllowableValues();
                if (!is_null($this->container['notice']) && !in_array($this->container['notice'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notice', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets dbIds
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string|null $dbIds 数据库ID
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets format
    *  文件类型
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 文件类型
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets frequency
    *  周期 - AUDIT_REPORT_DAY: 天 - AUDIT_REPORT_WEEK：周 - AUDIT_REPORT_MONTH：月 - AUDIT_REPORT_YEAR：年 - AUDIT_REPORT_REAL_TIME：实时
    *
    * @return string|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string|null $frequency 周期 - AUDIT_REPORT_DAY: 天 - AUDIT_REPORT_WEEK：周 - AUDIT_REPORT_MONTH：月 - AUDIT_REPORT_YEAR：年 - AUDIT_REPORT_REAL_TIME：实时
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets id
    *  报表模板ID
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
    * @param string|null $id 报表模板ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mode
    *  调度方式
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 调度方式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets notice
    *  是否通知  - OFF：不通知  - ON：通知
    *
    * @return string|null
    */
    public function getNotice()
    {
        return $this->container['notice'];
    }

    /**
    * Sets notice
    *
    * @param string|null $notice 是否通知  - OFF：不通知  - ON：通知
    *
    * @return $this
    */
    public function setNotice($notice)
    {
        $this->container['notice'] = $notice;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  模板状态 - ON: 开启 - OFF：关闭
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
    * @param string|null $status 模板状态 - ON: 开启 - OFF：关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题URN
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 主题URN
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
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

