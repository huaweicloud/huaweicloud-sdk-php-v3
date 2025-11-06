<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VehicleLicenseBack implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VehicleLicenseBack';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * number  号牌号码。
    * fileNo  档案编码。
    * approvedPassengers  核定载人数。
    * grossMass  总质量。
    * unladenMass  整备质量。
    * approvedLoad  核定载质量。
    * dimension  外廓尺寸。
    * tractionMass  准牵引总质量。
    * remarks  备注。
    * inspectionRecord  检验记录。
    * codeNumber  条码号。
    * energyType  能源类型。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'number' => 'string',
            'fileNo' => 'string',
            'approvedPassengers' => 'string',
            'grossMass' => 'string',
            'unladenMass' => 'string',
            'approvedLoad' => 'string',
            'dimension' => 'string',
            'tractionMass' => 'string',
            'remarks' => 'string',
            'inspectionRecord' => 'string',
            'codeNumber' => 'string',
            'energyType' => 'string',
            'textLocation' => 'object',
            'alarmResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmResult',
            'alarmConfidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmConfidence'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * number  号牌号码。
    * fileNo  档案编码。
    * approvedPassengers  核定载人数。
    * grossMass  总质量。
    * unladenMass  整备质量。
    * approvedLoad  核定载质量。
    * dimension  外廓尺寸。
    * tractionMass  准牵引总质量。
    * remarks  备注。
    * inspectionRecord  检验记录。
    * codeNumber  条码号。
    * energyType  能源类型。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'number' => null,
        'fileNo' => null,
        'approvedPassengers' => null,
        'grossMass' => null,
        'unladenMass' => null,
        'approvedLoad' => null,
        'dimension' => null,
        'tractionMass' => null,
        'remarks' => null,
        'inspectionRecord' => null,
        'codeNumber' => null,
        'energyType' => null,
        'textLocation' => null,
        'alarmResult' => null,
        'alarmConfidence' => null
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
    * number  号牌号码。
    * fileNo  档案编码。
    * approvedPassengers  核定载人数。
    * grossMass  总质量。
    * unladenMass  整备质量。
    * approvedLoad  核定载质量。
    * dimension  外廓尺寸。
    * tractionMass  准牵引总质量。
    * remarks  备注。
    * inspectionRecord  检验记录。
    * codeNumber  条码号。
    * energyType  能源类型。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'number' => 'number',
            'fileNo' => 'file_no',
            'approvedPassengers' => 'approved_passengers',
            'grossMass' => 'gross_mass',
            'unladenMass' => 'unladen_mass',
            'approvedLoad' => 'approved_load',
            'dimension' => 'dimension',
            'tractionMass' => 'traction_mass',
            'remarks' => 'remarks',
            'inspectionRecord' => 'inspection_record',
            'codeNumber' => 'code_number',
            'energyType' => 'energy_type',
            'textLocation' => 'text_location',
            'alarmResult' => 'alarm_result',
            'alarmConfidence' => 'alarm_confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * number  号牌号码。
    * fileNo  档案编码。
    * approvedPassengers  核定载人数。
    * grossMass  总质量。
    * unladenMass  整备质量。
    * approvedLoad  核定载质量。
    * dimension  外廓尺寸。
    * tractionMass  准牵引总质量。
    * remarks  备注。
    * inspectionRecord  检验记录。
    * codeNumber  条码号。
    * energyType  能源类型。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $setters = [
            'number' => 'setNumber',
            'fileNo' => 'setFileNo',
            'approvedPassengers' => 'setApprovedPassengers',
            'grossMass' => 'setGrossMass',
            'unladenMass' => 'setUnladenMass',
            'approvedLoad' => 'setApprovedLoad',
            'dimension' => 'setDimension',
            'tractionMass' => 'setTractionMass',
            'remarks' => 'setRemarks',
            'inspectionRecord' => 'setInspectionRecord',
            'codeNumber' => 'setCodeNumber',
            'energyType' => 'setEnergyType',
            'textLocation' => 'setTextLocation',
            'alarmResult' => 'setAlarmResult',
            'alarmConfidence' => 'setAlarmConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * number  号牌号码。
    * fileNo  档案编码。
    * approvedPassengers  核定载人数。
    * grossMass  总质量。
    * unladenMass  整备质量。
    * approvedLoad  核定载质量。
    * dimension  外廓尺寸。
    * tractionMass  准牵引总质量。
    * remarks  备注。
    * inspectionRecord  检验记录。
    * codeNumber  条码号。
    * energyType  能源类型。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $getters = [
            'number' => 'getNumber',
            'fileNo' => 'getFileNo',
            'approvedPassengers' => 'getApprovedPassengers',
            'grossMass' => 'getGrossMass',
            'unladenMass' => 'getUnladenMass',
            'approvedLoad' => 'getApprovedLoad',
            'dimension' => 'getDimension',
            'tractionMass' => 'getTractionMass',
            'remarks' => 'getRemarks',
            'inspectionRecord' => 'getInspectionRecord',
            'codeNumber' => 'getCodeNumber',
            'energyType' => 'getEnergyType',
            'textLocation' => 'getTextLocation',
            'alarmResult' => 'getAlarmResult',
            'alarmConfidence' => 'getAlarmConfidence'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['fileNo'] = isset($data['fileNo']) ? $data['fileNo'] : null;
        $this->container['approvedPassengers'] = isset($data['approvedPassengers']) ? $data['approvedPassengers'] : null;
        $this->container['grossMass'] = isset($data['grossMass']) ? $data['grossMass'] : null;
        $this->container['unladenMass'] = isset($data['unladenMass']) ? $data['unladenMass'] : null;
        $this->container['approvedLoad'] = isset($data['approvedLoad']) ? $data['approvedLoad'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['tractionMass'] = isset($data['tractionMass']) ? $data['tractionMass'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['inspectionRecord'] = isset($data['inspectionRecord']) ? $data['inspectionRecord'] : null;
        $this->container['codeNumber'] = isset($data['codeNumber']) ? $data['codeNumber'] : null;
        $this->container['energyType'] = isset($data['energyType']) ? $data['energyType'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['alarmResult'] = isset($data['alarmResult']) ? $data['alarmResult'] : null;
        $this->container['alarmConfidence'] = isset($data['alarmConfidence']) ? $data['alarmConfidence'] : null;
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
    * Gets number
    *  号牌号码。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 号牌号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets fileNo
    *  档案编码。
    *
    * @return string|null
    */
    public function getFileNo()
    {
        return $this->container['fileNo'];
    }

    /**
    * Sets fileNo
    *
    * @param string|null $fileNo 档案编码。
    *
    * @return $this
    */
    public function setFileNo($fileNo)
    {
        $this->container['fileNo'] = $fileNo;
        return $this;
    }

    /**
    * Gets approvedPassengers
    *  核定载人数。
    *
    * @return string|null
    */
    public function getApprovedPassengers()
    {
        return $this->container['approvedPassengers'];
    }

    /**
    * Sets approvedPassengers
    *
    * @param string|null $approvedPassengers 核定载人数。
    *
    * @return $this
    */
    public function setApprovedPassengers($approvedPassengers)
    {
        $this->container['approvedPassengers'] = $approvedPassengers;
        return $this;
    }

    /**
    * Gets grossMass
    *  总质量。
    *
    * @return string|null
    */
    public function getGrossMass()
    {
        return $this->container['grossMass'];
    }

    /**
    * Sets grossMass
    *
    * @param string|null $grossMass 总质量。
    *
    * @return $this
    */
    public function setGrossMass($grossMass)
    {
        $this->container['grossMass'] = $grossMass;
        return $this;
    }

    /**
    * Gets unladenMass
    *  整备质量。
    *
    * @return string|null
    */
    public function getUnladenMass()
    {
        return $this->container['unladenMass'];
    }

    /**
    * Sets unladenMass
    *
    * @param string|null $unladenMass 整备质量。
    *
    * @return $this
    */
    public function setUnladenMass($unladenMass)
    {
        $this->container['unladenMass'] = $unladenMass;
        return $this;
    }

    /**
    * Gets approvedLoad
    *  核定载质量。
    *
    * @return string|null
    */
    public function getApprovedLoad()
    {
        return $this->container['approvedLoad'];
    }

    /**
    * Sets approvedLoad
    *
    * @param string|null $approvedLoad 核定载质量。
    *
    * @return $this
    */
    public function setApprovedLoad($approvedLoad)
    {
        $this->container['approvedLoad'] = $approvedLoad;
        return $this;
    }

    /**
    * Gets dimension
    *  外廓尺寸。
    *
    * @return string|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string|null $dimension 外廓尺寸。
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets tractionMass
    *  准牵引总质量。
    *
    * @return string|null
    */
    public function getTractionMass()
    {
        return $this->container['tractionMass'];
    }

    /**
    * Sets tractionMass
    *
    * @param string|null $tractionMass 准牵引总质量。
    *
    * @return $this
    */
    public function setTractionMass($tractionMass)
    {
        $this->container['tractionMass'] = $tractionMass;
        return $this;
    }

    /**
    * Gets remarks
    *  备注。
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注。
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets inspectionRecord
    *  检验记录。
    *
    * @return string|null
    */
    public function getInspectionRecord()
    {
        return $this->container['inspectionRecord'];
    }

    /**
    * Sets inspectionRecord
    *
    * @param string|null $inspectionRecord 检验记录。
    *
    * @return $this
    */
    public function setInspectionRecord($inspectionRecord)
    {
        $this->container['inspectionRecord'] = $inspectionRecord;
        return $this;
    }

    /**
    * Gets codeNumber
    *  条码号。
    *
    * @return string|null
    */
    public function getCodeNumber()
    {
        return $this->container['codeNumber'];
    }

    /**
    * Sets codeNumber
    *
    * @param string|null $codeNumber 条码号。
    *
    * @return $this
    */
    public function setCodeNumber($codeNumber)
    {
        $this->container['codeNumber'] = $codeNumber;
        return $this;
    }

    /**
    * Gets energyType
    *  能源类型。
    *
    * @return string|null
    */
    public function getEnergyType()
    {
        return $this->container['energyType'];
    }

    /**
    * Sets energyType
    *
    * @param string|null $energyType 能源类型。
    *
    * @return $this
    */
    public function setEnergyType($energyType)
    {
        $this->container['energyType'] = $energyType;
        return $this;
    }

    /**
    * Gets textLocation
    *  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Gets alarmResult
    *  alarmResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmResult|null
    */
    public function getAlarmResult()
    {
        return $this->container['alarmResult'];
    }

    /**
    * Sets alarmResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmResult|null $alarmResult alarmResult
    *
    * @return $this
    */
    public function setAlarmResult($alarmResult)
    {
        $this->container['alarmResult'] = $alarmResult;
        return $this;
    }

    /**
    * Gets alarmConfidence
    *  alarmConfidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmConfidence|null
    */
    public function getAlarmConfidence()
    {
        return $this->container['alarmConfidence'];
    }

    /**
    * Sets alarmConfidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmConfidence|null $alarmConfidence alarmConfidence
    *
    * @return $this
    */
    public function setAlarmConfidence($alarmConfidence)
    {
        $this->container['alarmConfidence'] = $alarmConfidence;
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

