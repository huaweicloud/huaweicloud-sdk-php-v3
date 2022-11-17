<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDiagnosisTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDiagnosisTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * diagnosisReportList  诊断报告列表
    * totalNum  诊断报告总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'diagnosisReportList' => '\HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisReportInfo[]',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * diagnosisReportList  诊断报告列表
    * totalNum  诊断报告总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'diagnosisReportList' => null,
        'totalNum' => 'int32'
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
    * diagnosisReportList  诊断报告列表
    * totalNum  诊断报告总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'diagnosisReportList' => 'diagnosis_report_list',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * diagnosisReportList  诊断报告列表
    * totalNum  诊断报告总数
    *
    * @var string[]
    */
    protected static $setters = [
            'diagnosisReportList' => 'setDiagnosisReportList',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * diagnosisReportList  诊断报告列表
    * totalNum  诊断报告总数
    *
    * @var string[]
    */
    protected static $getters = [
            'diagnosisReportList' => 'getDiagnosisReportList',
            'totalNum' => 'getTotalNum'
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
        $this->container['diagnosisReportList'] = isset($data['diagnosisReportList']) ? $data['diagnosisReportList'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
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
    * Gets diagnosisReportList
    *  诊断报告列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisReportInfo[]|null
    */
    public function getDiagnosisReportList()
    {
        return $this->container['diagnosisReportList'];
    }

    /**
    * Sets diagnosisReportList
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisReportInfo[]|null $diagnosisReportList 诊断报告列表
    *
    * @return $this
    */
    public function setDiagnosisReportList($diagnosisReportList)
    {
        $this->container['diagnosisReportList'] = $diagnosisReportList;
        return $this;
    }

    /**
    * Gets totalNum
    *  诊断报告总数
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
    * @param int|null $totalNum 诊断报告总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

