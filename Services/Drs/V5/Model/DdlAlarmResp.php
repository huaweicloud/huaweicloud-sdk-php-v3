<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DdlAlarmResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DdlAlarmResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * seqno  记录唯一序号。
    * checkpoint  数据源库位点。
    * status  DDL告警状态。0无告警，1告警中。
    * ddlTimestamp  DDL在源库执行时间。
    * ddlText  DDL内容。
    * exeResult  DDL执行结果。false执行失败，true执行成功。
    * recordTime  数据记录时间。
    * cleanTime  DDL告警清理时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'seqno' => 'int',
            'checkpoint' => 'string',
            'status' => 'int',
            'ddlTimestamp' => 'int',
            'ddlText' => 'string',
            'exeResult' => 'bool',
            'recordTime' => 'int',
            'cleanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * seqno  记录唯一序号。
    * checkpoint  数据源库位点。
    * status  DDL告警状态。0无告警，1告警中。
    * ddlTimestamp  DDL在源库执行时间。
    * ddlText  DDL内容。
    * exeResult  DDL执行结果。false执行失败，true执行成功。
    * recordTime  数据记录时间。
    * cleanTime  DDL告警清理时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'seqno' => 'int64',
        'checkpoint' => null,
        'status' => 'int32',
        'ddlTimestamp' => 'int64',
        'ddlText' => null,
        'exeResult' => null,
        'recordTime' => 'int64',
        'cleanTime' => 'int64'
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
    * seqno  记录唯一序号。
    * checkpoint  数据源库位点。
    * status  DDL告警状态。0无告警，1告警中。
    * ddlTimestamp  DDL在源库执行时间。
    * ddlText  DDL内容。
    * exeResult  DDL执行结果。false执行失败，true执行成功。
    * recordTime  数据记录时间。
    * cleanTime  DDL告警清理时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'seqno' => 'seqno',
            'checkpoint' => 'checkpoint',
            'status' => 'status',
            'ddlTimestamp' => 'ddl_timestamp',
            'ddlText' => 'ddl_text',
            'exeResult' => 'exe_result',
            'recordTime' => 'record_time',
            'cleanTime' => 'clean_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * seqno  记录唯一序号。
    * checkpoint  数据源库位点。
    * status  DDL告警状态。0无告警，1告警中。
    * ddlTimestamp  DDL在源库执行时间。
    * ddlText  DDL内容。
    * exeResult  DDL执行结果。false执行失败，true执行成功。
    * recordTime  数据记录时间。
    * cleanTime  DDL告警清理时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'seqno' => 'setSeqno',
            'checkpoint' => 'setCheckpoint',
            'status' => 'setStatus',
            'ddlTimestamp' => 'setDdlTimestamp',
            'ddlText' => 'setDdlText',
            'exeResult' => 'setExeResult',
            'recordTime' => 'setRecordTime',
            'cleanTime' => 'setCleanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * seqno  记录唯一序号。
    * checkpoint  数据源库位点。
    * status  DDL告警状态。0无告警，1告警中。
    * ddlTimestamp  DDL在源库执行时间。
    * ddlText  DDL内容。
    * exeResult  DDL执行结果。false执行失败，true执行成功。
    * recordTime  数据记录时间。
    * cleanTime  DDL告警清理时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'seqno' => 'getSeqno',
            'checkpoint' => 'getCheckpoint',
            'status' => 'getStatus',
            'ddlTimestamp' => 'getDdlTimestamp',
            'ddlText' => 'getDdlText',
            'exeResult' => 'getExeResult',
            'recordTime' => 'getRecordTime',
            'cleanTime' => 'getCleanTime'
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
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
        $this->container['checkpoint'] = isset($data['checkpoint']) ? $data['checkpoint'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ddlTimestamp'] = isset($data['ddlTimestamp']) ? $data['ddlTimestamp'] : null;
        $this->container['ddlText'] = isset($data['ddlText']) ? $data['ddlText'] : null;
        $this->container['exeResult'] = isset($data['exeResult']) ? $data['exeResult'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['cleanTime'] = isset($data['cleanTime']) ? $data['cleanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['seqno'] === null) {
            $invalidProperties[] = "'seqno' can't be null";
        }
        if ($this->container['checkpoint'] === null) {
            $invalidProperties[] = "'checkpoint' can't be null";
        }
            if ((mb_strlen($this->container['checkpoint']) > 128)) {
                $invalidProperties[] = "invalid value for 'checkpoint', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['checkpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'checkpoint', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if (($this->container['status'] >= 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than 2147483647.";
            }
            if (($this->container['status'] <= 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than 0.";
            }
        if ($this->container['ddlTimestamp'] === null) {
            $invalidProperties[] = "'ddlTimestamp' can't be null";
        }
        if ($this->container['ddlText'] === null) {
            $invalidProperties[] = "'ddlText' can't be null";
        }
        if ($this->container['exeResult'] === null) {
            $invalidProperties[] = "'exeResult' can't be null";
        }
        if ($this->container['recordTime'] === null) {
            $invalidProperties[] = "'recordTime' can't be null";
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
    * Gets seqno
    *  记录唯一序号。
    *
    * @return int
    */
    public function getSeqno()
    {
        return $this->container['seqno'];
    }

    /**
    * Sets seqno
    *
    * @param int $seqno 记录唯一序号。
    *
    * @return $this
    */
    public function setSeqno($seqno)
    {
        $this->container['seqno'] = $seqno;
        return $this;
    }

    /**
    * Gets checkpoint
    *  数据源库位点。
    *
    * @return string
    */
    public function getCheckpoint()
    {
        return $this->container['checkpoint'];
    }

    /**
    * Sets checkpoint
    *
    * @param string $checkpoint 数据源库位点。
    *
    * @return $this
    */
    public function setCheckpoint($checkpoint)
    {
        $this->container['checkpoint'] = $checkpoint;
        return $this;
    }

    /**
    * Gets status
    *  DDL告警状态。0无告警，1告警中。
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status DDL告警状态。0无告警，1告警中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ddlTimestamp
    *  DDL在源库执行时间。
    *
    * @return int
    */
    public function getDdlTimestamp()
    {
        return $this->container['ddlTimestamp'];
    }

    /**
    * Sets ddlTimestamp
    *
    * @param int $ddlTimestamp DDL在源库执行时间。
    *
    * @return $this
    */
    public function setDdlTimestamp($ddlTimestamp)
    {
        $this->container['ddlTimestamp'] = $ddlTimestamp;
        return $this;
    }

    /**
    * Gets ddlText
    *  DDL内容。
    *
    * @return string
    */
    public function getDdlText()
    {
        return $this->container['ddlText'];
    }

    /**
    * Sets ddlText
    *
    * @param string $ddlText DDL内容。
    *
    * @return $this
    */
    public function setDdlText($ddlText)
    {
        $this->container['ddlText'] = $ddlText;
        return $this;
    }

    /**
    * Gets exeResult
    *  DDL执行结果。false执行失败，true执行成功。
    *
    * @return bool
    */
    public function getExeResult()
    {
        return $this->container['exeResult'];
    }

    /**
    * Sets exeResult
    *
    * @param bool $exeResult DDL执行结果。false执行失败，true执行成功。
    *
    * @return $this
    */
    public function setExeResult($exeResult)
    {
        $this->container['exeResult'] = $exeResult;
        return $this;
    }

    /**
    * Gets recordTime
    *  数据记录时间。
    *
    * @return int
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param int $recordTime 数据记录时间。
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets cleanTime
    *  DDL告警清理时间。
    *
    * @return int|null
    */
    public function getCleanTime()
    {
        return $this->container['cleanTime'];
    }

    /**
    * Sets cleanTime
    *
    * @param int|null $cleanTime DDL告警清理时间。
    *
    * @return $this
    */
    public function setCleanTime($cleanTime)
    {
        $this->container['cleanTime'] = $cleanTime;
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

