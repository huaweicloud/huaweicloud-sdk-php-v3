<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDiagnosisTaskDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDiagnosisTaskDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    * diagnosisNodeReportList  节点诊断报告列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'abnormalItemSum' => 'int',
            'failedItemSum' => 'int',
            'diagnosisNodeReportList' => '\HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisNodeReport[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    * diagnosisNodeReportList  节点诊断报告列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'abnormalItemSum' => 'int32',
        'failedItemSum' => 'int32',
        'diagnosisNodeReportList' => null
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
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    * diagnosisNodeReportList  节点诊断报告列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'abnormalItemSum' => 'abnormal_item_sum',
            'failedItemSum' => 'failed_item_sum',
            'diagnosisNodeReportList' => 'diagnosis_node_report_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    * diagnosisNodeReportList  节点诊断报告列表
    *
    * @var string[]
    */
    protected static $setters = [
            'abnormalItemSum' => 'setAbnormalItemSum',
            'failedItemSum' => 'setFailedItemSum',
            'diagnosisNodeReportList' => 'setDiagnosisNodeReportList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * abnormalItemSum  诊断结果为异常的诊断项总数
    * failedItemSum  诊断失败的诊断项总数
    * diagnosisNodeReportList  节点诊断报告列表
    *
    * @var string[]
    */
    protected static $getters = [
            'abnormalItemSum' => 'getAbnormalItemSum',
            'failedItemSum' => 'getFailedItemSum',
            'diagnosisNodeReportList' => 'getDiagnosisNodeReportList'
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
        $this->container['abnormalItemSum'] = isset($data['abnormalItemSum']) ? $data['abnormalItemSum'] : null;
        $this->container['failedItemSum'] = isset($data['failedItemSum']) ? $data['failedItemSum'] : null;
        $this->container['diagnosisNodeReportList'] = isset($data['diagnosisNodeReportList']) ? $data['diagnosisNodeReportList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets abnormalItemSum
    *  诊断结果为异常的诊断项总数
    *
    * @return int|null
    */
    public function getAbnormalItemSum()
    {
        return $this->container['abnormalItemSum'];
    }

    /**
    * Sets abnormalItemSum
    *
    * @param int|null $abnormalItemSum 诊断结果为异常的诊断项总数
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
    * @return int|null
    */
    public function getFailedItemSum()
    {
        return $this->container['failedItemSum'];
    }

    /**
    * Sets failedItemSum
    *
    * @param int|null $failedItemSum 诊断失败的诊断项总数
    *
    * @return $this
    */
    public function setFailedItemSum($failedItemSum)
    {
        $this->container['failedItemSum'] = $failedItemSum;
        return $this;
    }

    /**
    * Gets diagnosisNodeReportList
    *  节点诊断报告列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisNodeReport[]|null
    */
    public function getDiagnosisNodeReportList()
    {
        return $this->container['diagnosisNodeReportList'];
    }

    /**
    * Sets diagnosisNodeReportList
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisNodeReport[]|null $diagnosisNodeReportList 节点诊断报告列表
    *
    * @return $this
    */
    public function setDiagnosisNodeReportList($diagnosisNodeReportList)
    {
        $this->container['diagnosisNodeReportList'] = $diagnosisNodeReportList;
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

