<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobDdlsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobDdlsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制.默认值为10。
    * startSeqNo  DDL序列起始值。
    * endSeqNo  DDL序列结束值。
    * status  DDL状态，0为无告警，1为告警中。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'startSeqNo' => 'int',
            'endSeqNo' => 'int',
            'status' => 'int',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制.默认值为10。
    * startSeqNo  DDL序列起始值。
    * endSeqNo  DDL序列结束值。
    * status  DDL状态，0为无告警，1为告警中。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'startSeqNo' => 'int64',
        'endSeqNo' => 'int64',
        'status' => 'int32',
        'jobId' => null
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
    * xLanguage  请求语言类型。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制.默认值为10。
    * startSeqNo  DDL序列起始值。
    * endSeqNo  DDL序列结束值。
    * status  DDL状态，0为无告警，1为告警中。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'offset' => 'offset',
            'limit' => 'limit',
            'startSeqNo' => 'start_seq_no',
            'endSeqNo' => 'end_seq_no',
            'status' => 'status',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制.默认值为10。
    * startSeqNo  DDL序列起始值。
    * endSeqNo  DDL序列结束值。
    * status  DDL状态，0为无告警，1为告警中。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'startSeqNo' => 'setStartSeqNo',
            'endSeqNo' => 'setEndSeqNo',
            'status' => 'setStatus',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制.默认值为10。
    * startSeqNo  DDL序列起始值。
    * endSeqNo  DDL序列结束值。
    * status  DDL状态，0为无告警，1为告警中。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'startSeqNo' => 'getStartSeqNo',
            'endSeqNo' => 'getEndSeqNo',
            'status' => 'getStatus',
            'jobId' => 'getJobId'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['startSeqNo'] = isset($data['startSeqNo']) ? $data['startSeqNo'] : null;
        $this->container['endSeqNo'] = isset($data['endSeqNo']) ? $data['endSeqNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 64)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] >= 65535)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than 65535.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] <= 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] >= 65535)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than 65535.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] <= 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
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
    * Gets xLanguage
    *  请求语言类型。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，默认值为0，表示查询该偏移量后面的记录。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，默认值为0，表示查询该偏移量后面的记录。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回记录的数量限制.默认值为10。
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
    * @param int|null $limit 查询返回记录的数量限制.默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets startSeqNo
    *  DDL序列起始值。
    *
    * @return int|null
    */
    public function getStartSeqNo()
    {
        return $this->container['startSeqNo'];
    }

    /**
    * Sets startSeqNo
    *
    * @param int|null $startSeqNo DDL序列起始值。
    *
    * @return $this
    */
    public function setStartSeqNo($startSeqNo)
    {
        $this->container['startSeqNo'] = $startSeqNo;
        return $this;
    }

    /**
    * Gets endSeqNo
    *  DDL序列结束值。
    *
    * @return int|null
    */
    public function getEndSeqNo()
    {
        return $this->container['endSeqNo'];
    }

    /**
    * Sets endSeqNo
    *
    * @param int|null $endSeqNo DDL序列结束值。
    *
    * @return $this
    */
    public function setEndSeqNo($endSeqNo)
    {
        $this->container['endSeqNo'] = $endSeqNo;
        return $this;
    }

    /**
    * Gets status
    *  DDL状态，0为无告警，1为告警中。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status DDL状态，0为无告警，1为告警中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

