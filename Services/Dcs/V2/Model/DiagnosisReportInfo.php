<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisReportInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisReportInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  诊断报告ID
    * status  诊断任务状态
    * beginTime  诊断时间段的开始时间。格式为：2017-03-31T12:24:46.297Z
    * endTime  诊断时间段的结束时间。格式为：2017-03-31T12:24:46.297Z
    * createdAt  诊断报告创建时间
    * nodeNum  参与诊断的节点个数
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'string',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'createdAt' => 'string',
            'nodeNum' => 'int',
            'abnormalItemSum' => 'int',
            'failedItemSum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  诊断报告ID
    * status  诊断任务状态
    * beginTime  诊断时间段的开始时间。格式为：2017-03-31T12:24:46.297Z
    * endTime  诊断时间段的结束时间。格式为：2017-03-31T12:24:46.297Z
    * createdAt  诊断报告创建时间
    * nodeNum  参与诊断的节点个数
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => null,
        'status' => null,
        'beginTime' => null,
        'endTime' => null,
        'createdAt' => null,
        'nodeNum' => 'int32',
        'abnormalItemSum' => 'int32',
        'failedItemSum' => 'int32'
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
    * reportId  诊断报告ID
    * status  诊断任务状态
    * beginTime  诊断时间段的开始时间。格式为：2017-03-31T12:24:46.297Z
    * endTime  诊断时间段的结束时间。格式为：2017-03-31T12:24:46.297Z
    * createdAt  诊断报告创建时间
    * nodeNum  参与诊断的节点个数
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'createdAt' => 'created_at',
            'nodeNum' => 'node_num',
            'abnormalItemSum' => 'abnormal_item_sum',
            'failedItemSum' => 'failed_item_sum'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  诊断报告ID
    * status  诊断任务状态
    * beginTime  诊断时间段的开始时间。格式为：2017-03-31T12:24:46.297Z
    * endTime  诊断时间段的结束时间。格式为：2017-03-31T12:24:46.297Z
    * createdAt  诊断报告创建时间
    * nodeNum  参与诊断的节点个数
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'createdAt' => 'setCreatedAt',
            'nodeNum' => 'setNodeNum',
            'abnormalItemSum' => 'setAbnormalItemSum',
            'failedItemSum' => 'setFailedItemSum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  诊断报告ID
    * status  诊断任务状态
    * beginTime  诊断时间段的开始时间。格式为：2017-03-31T12:24:46.297Z
    * endTime  诊断时间段的结束时间。格式为：2017-03-31T12:24:46.297Z
    * createdAt  诊断报告创建时间
    * nodeNum  参与诊断的节点个数
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'createdAt' => 'getCreatedAt',
            'nodeNum' => 'getNodeNum',
            'abnormalItemSum' => 'getAbnormalItemSum',
            'failedItemSum' => 'getFailedItemSum'
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
    const STATUS_DIAGNOSING = 'diagnosing';
    const STATUS_FINISHED = 'finished';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DIAGNOSING,
            self::STATUS_FINISHED,
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['abnormalItemSum'] = isset($data['abnormalItemSum']) ? $data['abnormalItemSum'] : null;
        $this->container['failedItemSum'] = isset($data['failedItemSum']) ? $data['failedItemSum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reportId'] === null) {
            $invalidProperties[] = "'reportId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['nodeNum'] === null) {
            $invalidProperties[] = "'nodeNum' can't be null";
        }
        if ($this->container['abnormalItemSum'] === null) {
            $invalidProperties[] = "'abnormalItemSum' can't be null";
        }
        if ($this->container['failedItemSum'] === null) {
            $invalidProperties[] = "'failedItemSum' can't be null";
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
    * Gets reportId
    *  诊断报告ID
    *
    * @return string
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string $reportId 诊断报告ID
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets status
    *  诊断任务状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 诊断任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  诊断时间段的开始时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return string
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string $beginTime 诊断时间段的开始时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  诊断时间段的结束时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 诊断时间段的结束时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets createdAt
    *  诊断报告创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 诊断报告创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets nodeNum
    *  参与诊断的节点个数
    *
    * @return int
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int $nodeNum 参与诊断的节点个数
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets abnormalItemSum
    *  诊断结果为异常的诊断项总数
    *
    * @return int
    */
    public function getAbnormalItemSum()
    {
        return $this->container['abnormalItemSum'];
    }

    /**
    * Sets abnormalItemSum
    *
    * @param int $abnormalItemSum 诊断结果为异常的诊断项总数
    *
    * @return $this
    */
    public function setAbnormalItemSum($abnormalItemSum)
    {
        $this->container['abnormalItemSum'] = $abnormalItemSum;
        return $this;
    }

    /**
    * Gets failedItemSum
    *  诊断失败的诊断项总数
    *
    * @return int
    */
    public function getFailedItemSum()
    {
        return $this->container['failedItemSum'];
    }

    /**
    * Sets failedItemSum
    *
    * @param int $failedItemSum 诊断失败的诊断项总数
    *
    * @return $this
    */
    public function setFailedItemSum($failedItemSum)
    {
        $this->container['failedItemSum'] = $failedItemSum;
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

