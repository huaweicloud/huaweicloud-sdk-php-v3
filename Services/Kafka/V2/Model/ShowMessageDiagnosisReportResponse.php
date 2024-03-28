<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMessageDiagnosisReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMessageDiagnosisReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * abnormalItemNum  诊断异常的诊断项总和
    * failedItemNum  诊断失败的诊断项总和
    * normalItemNum  诊断正常的诊断项总和
    * diagnosisDimensionList  诊断维度列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'abnormalItemNum' => 'int',
            'failedItemNum' => 'int',
            'normalItemNum' => 'int',
            'diagnosisDimensionList' => '\HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisDimensionEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * abnormalItemNum  诊断异常的诊断项总和
    * failedItemNum  诊断失败的诊断项总和
    * normalItemNum  诊断正常的诊断项总和
    * diagnosisDimensionList  诊断维度列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'abnormalItemNum' => 'int32',
        'failedItemNum' => 'int32',
        'normalItemNum' => 'int32',
        'diagnosisDimensionList' => null
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
    * abnormalItemNum  诊断异常的诊断项总和
    * failedItemNum  诊断失败的诊断项总和
    * normalItemNum  诊断正常的诊断项总和
    * diagnosisDimensionList  诊断维度列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'abnormalItemNum' => 'abnormal_item_num',
            'failedItemNum' => 'failed_item_num',
            'normalItemNum' => 'normal_item_num',
            'diagnosisDimensionList' => 'diagnosis_dimension_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * abnormalItemNum  诊断异常的诊断项总和
    * failedItemNum  诊断失败的诊断项总和
    * normalItemNum  诊断正常的诊断项总和
    * diagnosisDimensionList  诊断维度列表
    *
    * @var string[]
    */
    protected static $setters = [
            'abnormalItemNum' => 'setAbnormalItemNum',
            'failedItemNum' => 'setFailedItemNum',
            'normalItemNum' => 'setNormalItemNum',
            'diagnosisDimensionList' => 'setDiagnosisDimensionList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * abnormalItemNum  诊断异常的诊断项总和
    * failedItemNum  诊断失败的诊断项总和
    * normalItemNum  诊断正常的诊断项总和
    * diagnosisDimensionList  诊断维度列表
    *
    * @var string[]
    */
    protected static $getters = [
            'abnormalItemNum' => 'getAbnormalItemNum',
            'failedItemNum' => 'getFailedItemNum',
            'normalItemNum' => 'getNormalItemNum',
            'diagnosisDimensionList' => 'getDiagnosisDimensionList'
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
        $this->container['abnormalItemNum'] = isset($data['abnormalItemNum']) ? $data['abnormalItemNum'] : null;
        $this->container['failedItemNum'] = isset($data['failedItemNum']) ? $data['failedItemNum'] : null;
        $this->container['normalItemNum'] = isset($data['normalItemNum']) ? $data['normalItemNum'] : null;
        $this->container['diagnosisDimensionList'] = isset($data['diagnosisDimensionList']) ? $data['diagnosisDimensionList'] : null;
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
    * Gets abnormalItemNum
    *  诊断异常的诊断项总和
    *
    * @return int|null
    */
    public function getAbnormalItemNum()
    {
        return $this->container['abnormalItemNum'];
    }

    /**
    * Sets abnormalItemNum
    *
    * @param int|null $abnormalItemNum 诊断异常的诊断项总和
    *
    * @return $this
    */
    public function setAbnormalItemNum($abnormalItemNum)
    {
        $this->container['abnormalItemNum'] = $abnormalItemNum;
        return $this;
    }

    /**
    * Gets failedItemNum
    *  诊断失败的诊断项总和
    *
    * @return int|null
    */
    public function getFailedItemNum()
    {
        return $this->container['failedItemNum'];
    }

    /**
    * Sets failedItemNum
    *
    * @param int|null $failedItemNum 诊断失败的诊断项总和
    *
    * @return $this
    */
    public function setFailedItemNum($failedItemNum)
    {
        $this->container['failedItemNum'] = $failedItemNum;
        return $this;
    }

    /**
    * Gets normalItemNum
    *  诊断正常的诊断项总和
    *
    * @return int|null
    */
    public function getNormalItemNum()
    {
        return $this->container['normalItemNum'];
    }

    /**
    * Sets normalItemNum
    *
    * @param int|null $normalItemNum 诊断正常的诊断项总和
    *
    * @return $this
    */
    public function setNormalItemNum($normalItemNum)
    {
        $this->container['normalItemNum'] = $normalItemNum;
        return $this;
    }

    /**
    * Gets diagnosisDimensionList
    *  诊断维度列表
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisDimensionEntity[]|null
    */
    public function getDiagnosisDimensionList()
    {
        return $this->container['diagnosisDimensionList'];
    }

    /**
    * Sets diagnosisDimensionList
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisDimensionEntity[]|null $diagnosisDimensionList 诊断维度列表
    *
    * @return $this
    */
    public function setDiagnosisDimensionList($diagnosisDimensionList)
    {
        $this->container['diagnosisDimensionList'] = $diagnosisDimensionList;
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

