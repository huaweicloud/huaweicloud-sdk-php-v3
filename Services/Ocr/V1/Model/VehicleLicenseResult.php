<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VehicleLicenseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VehicleLicenseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  行驶证类型：  - normal: 纸质行驶证  - electronic: 电子行驶证
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * engineNo  发动机号码。
    * vin  车辆识别代号。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
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
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * energyType  能源类型。
    * color  车身颜色。
    * mandatoryScrappingDate  强制报废日期。
    * status  状态。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'number' => 'string',
            'vehicleType' => 'string',
            'name' => 'string',
            'address' => 'string',
            'useCharacter' => 'string',
            'model' => 'string',
            'engineNo' => 'string',
            'vin' => 'string',
            'registerDate' => 'string',
            'issueDate' => 'string',
            'issuingAuthority' => 'string',
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
            'textLocation' => 'object',
            'energyType' => 'string',
            'color' => 'string',
            'mandatoryScrappingDate' => 'string',
            'status' => 'string[]',
            'front' => '\HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseFront',
            'back' => '\HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseback'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  行驶证类型：  - normal: 纸质行驶证  - electronic: 电子行驶证
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * engineNo  发动机号码。
    * vin  车辆识别代号。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
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
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * energyType  能源类型。
    * color  车身颜色。
    * mandatoryScrappingDate  强制报废日期。
    * status  状态。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'number' => null,
        'vehicleType' => null,
        'name' => null,
        'address' => null,
        'useCharacter' => null,
        'model' => null,
        'engineNo' => null,
        'vin' => null,
        'registerDate' => null,
        'issueDate' => null,
        'issuingAuthority' => null,
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
        'textLocation' => null,
        'energyType' => null,
        'color' => null,
        'mandatoryScrappingDate' => null,
        'status' => null,
        'front' => null,
        'back' => null
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
    * type  行驶证类型：  - normal: 纸质行驶证  - electronic: 电子行驶证
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * engineNo  发动机号码。
    * vin  车辆识别代号。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
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
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * energyType  能源类型。
    * color  车身颜色。
    * mandatoryScrappingDate  强制报废日期。
    * status  状态。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'number' => 'number',
            'vehicleType' => 'vehicle_type',
            'name' => 'name',
            'address' => 'address',
            'useCharacter' => 'use_character',
            'model' => 'model',
            'engineNo' => 'engine_no',
            'vin' => 'vin',
            'registerDate' => 'register_date',
            'issueDate' => 'issue_date',
            'issuingAuthority' => 'issuing_authority',
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
            'textLocation' => 'text_location',
            'energyType' => 'energy_type',
            'color' => 'color',
            'mandatoryScrappingDate' => 'mandatory_scrapping_date',
            'status' => 'status',
            'front' => 'front',
            'back' => 'back'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  行驶证类型：  - normal: 纸质行驶证  - electronic: 电子行驶证
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * engineNo  发动机号码。
    * vin  车辆识别代号。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
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
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * energyType  能源类型。
    * color  车身颜色。
    * mandatoryScrappingDate  强制报废日期。
    * status  状态。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'number' => 'setNumber',
            'vehicleType' => 'setVehicleType',
            'name' => 'setName',
            'address' => 'setAddress',
            'useCharacter' => 'setUseCharacter',
            'model' => 'setModel',
            'engineNo' => 'setEngineNo',
            'vin' => 'setVin',
            'registerDate' => 'setRegisterDate',
            'issueDate' => 'setIssueDate',
            'issuingAuthority' => 'setIssuingAuthority',
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
            'textLocation' => 'setTextLocation',
            'energyType' => 'setEnergyType',
            'color' => 'setColor',
            'mandatoryScrappingDate' => 'setMandatoryScrappingDate',
            'status' => 'setStatus',
            'front' => 'setFront',
            'back' => 'setBack'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  行驶证类型：  - normal: 纸质行驶证  - electronic: 电子行驶证
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * engineNo  发动机号码。
    * vin  车辆识别代号。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
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
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * energyType  能源类型。
    * color  车身颜色。
    * mandatoryScrappingDate  强制报废日期。
    * status  状态。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'number' => 'getNumber',
            'vehicleType' => 'getVehicleType',
            'name' => 'getName',
            'address' => 'getAddress',
            'useCharacter' => 'getUseCharacter',
            'model' => 'getModel',
            'engineNo' => 'getEngineNo',
            'vin' => 'getVin',
            'registerDate' => 'getRegisterDate',
            'issueDate' => 'getIssueDate',
            'issuingAuthority' => 'getIssuingAuthority',
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
            'textLocation' => 'getTextLocation',
            'energyType' => 'getEnergyType',
            'color' => 'getColor',
            'mandatoryScrappingDate' => 'getMandatoryScrappingDate',
            'status' => 'getStatus',
            'front' => 'getFront',
            'back' => 'getBack'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['vehicleType'] = isset($data['vehicleType']) ? $data['vehicleType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['useCharacter'] = isset($data['useCharacter']) ? $data['useCharacter'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['engineNo'] = isset($data['engineNo']) ? $data['engineNo'] : null;
        $this->container['vin'] = isset($data['vin']) ? $data['vin'] : null;
        $this->container['registerDate'] = isset($data['registerDate']) ? $data['registerDate'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
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
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['energyType'] = isset($data['energyType']) ? $data['energyType'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['mandatoryScrappingDate'] = isset($data['mandatoryScrappingDate']) ? $data['mandatoryScrappingDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['front'] = isset($data['front']) ? $data['front'] : null;
        $this->container['back'] = isset($data['back']) ? $data['back'] : null;
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
    * Gets type
    *  行驶证类型：  - normal: 纸质行驶证  - electronic: 电子行驶证
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 行驶证类型：  - normal: 纸质行驶证  - electronic: 电子行驶证
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
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
    * Gets vehicleType
    *  车辆类型。
    *
    * @return string|null
    */
    public function getVehicleType()
    {
        return $this->container['vehicleType'];
    }

    /**
    * Sets vehicleType
    *
    * @param string|null $vehicleType 车辆类型。
    *
    * @return $this
    */
    public function setVehicleType($vehicleType)
    {
        $this->container['vehicleType'] = $vehicleType;
        return $this;
    }

    /**
    * Gets name
    *  所有人。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 所有人。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets address
    *  住址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 住址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets useCharacter
    *  使用性质。
    *
    * @return string|null
    */
    public function getUseCharacter()
    {
        return $this->container['useCharacter'];
    }

    /**
    * Sets useCharacter
    *
    * @param string|null $useCharacter 使用性质。
    *
    * @return $this
    */
    public function setUseCharacter($useCharacter)
    {
        $this->container['useCharacter'] = $useCharacter;
        return $this;
    }

    /**
    * Gets model
    *  品牌型号。
    *
    * @return string|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param string|null $model 品牌型号。
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
        return $this;
    }

    /**
    * Gets engineNo
    *  发动机号码。
    *
    * @return string|null
    */
    public function getEngineNo()
    {
        return $this->container['engineNo'];
    }

    /**
    * Sets engineNo
    *
    * @param string|null $engineNo 发动机号码。
    *
    * @return $this
    */
    public function setEngineNo($engineNo)
    {
        $this->container['engineNo'] = $engineNo;
        return $this;
    }

    /**
    * Gets vin
    *  车辆识别代号。
    *
    * @return string|null
    */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
    * Sets vin
    *
    * @param string|null $vin 车辆识别代号。
    *
    * @return $this
    */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;
        return $this;
    }

    /**
    * Gets registerDate
    *  注册日期。
    *
    * @return string|null
    */
    public function getRegisterDate()
    {
        return $this->container['registerDate'];
    }

    /**
    * Sets registerDate
    *
    * @param string|null $registerDate 注册日期。
    *
    * @return $this
    */
    public function setRegisterDate($registerDate)
    {
        $this->container['registerDate'] = $registerDate;
        return $this;
    }

    /**
    * Gets issueDate
    *  发证日期。
    *
    * @return string|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string|null $issueDate 发证日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets issuingAuthority
    *  发证机关。
    *
    * @return string|null
    */
    public function getIssuingAuthority()
    {
        return $this->container['issuingAuthority'];
    }

    /**
    * Sets issuingAuthority
    *
    * @param string|null $issuingAuthority 发证机关。
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
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
    * Gets color
    *  车身颜色。
    *
    * @return string|null
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string|null $color 车身颜色。
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets mandatoryScrappingDate
    *  强制报废日期。
    *
    * @return string|null
    */
    public function getMandatoryScrappingDate()
    {
        return $this->container['mandatoryScrappingDate'];
    }

    /**
    * Sets mandatoryScrappingDate
    *
    * @param string|null $mandatoryScrappingDate 强制报废日期。
    *
    * @return $this
    */
    public function setMandatoryScrappingDate($mandatoryScrappingDate)
    {
        $this->container['mandatoryScrappingDate'] = $mandatoryScrappingDate;
        return $this;
    }

    /**
    * Gets status
    *  状态。
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets front
    *  front
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseFront|null
    */
    public function getFront()
    {
        return $this->container['front'];
    }

    /**
    * Sets front
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseFront|null $front front
    *
    * @return $this
    */
    public function setFront($front)
    {
        $this->container['front'] = $front;
        return $this;
    }

    /**
    * Gets back
    *  back
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseback|null
    */
    public function getBack()
    {
        return $this->container['back'];
    }

    /**
    * Sets back
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseback|null $back back
    *
    * @return $this
    */
    public function setBack($back)
    {
        $this->container['back'] = $back;
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

