<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MainlandTravelPermitConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MainlandTravelPermitConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  中文姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * number  证件号的置信度。
    * issuePlace  签发地点的置信度。
    * issueTimes  签发次数的置信度。
    * type  证件类别的置信度。
    * side  证件图片正反面信息的置信度。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名的置信度。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码的置信度。
    * machineCode1  机读码第一行的置信度。
    * machineCode2  机读码第二行的置信度。
    * machineCode3  机读码第三行的置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'float',
            'nameEn' => 'float',
            'birthDate' => 'float',
            'sex' => 'float',
            'validPeriod' => 'float',
            'issuingAuthority' => 'float',
            'number' => 'float',
            'issuePlace' => 'float',
            'issueTimes' => 'float',
            'type' => 'float',
            'side' => 'float',
            'idName' => 'float',
            'idNumber' => 'float',
            'machineCode1' => 'float',
            'machineCode2' => 'float',
            'machineCode3' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  中文姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * number  证件号的置信度。
    * issuePlace  签发地点的置信度。
    * issueTimes  签发次数的置信度。
    * type  证件类别的置信度。
    * side  证件图片正反面信息的置信度。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名的置信度。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码的置信度。
    * machineCode1  机读码第一行的置信度。
    * machineCode2  机读码第二行的置信度。
    * machineCode3  机读码第三行的置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => 'float',
        'nameEn' => 'float',
        'birthDate' => 'float',
        'sex' => 'float',
        'validPeriod' => 'float',
        'issuingAuthority' => 'float',
        'number' => 'float',
        'issuePlace' => 'float',
        'issueTimes' => 'float',
        'type' => 'float',
        'side' => 'float',
        'idName' => 'float',
        'idNumber' => 'float',
        'machineCode1' => 'float',
        'machineCode2' => 'float',
        'machineCode3' => 'float'
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
    * name  中文姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * number  证件号的置信度。
    * issuePlace  签发地点的置信度。
    * issueTimes  签发次数的置信度。
    * type  证件类别的置信度。
    * side  证件图片正反面信息的置信度。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名的置信度。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码的置信度。
    * machineCode1  机读码第一行的置信度。
    * machineCode2  机读码第二行的置信度。
    * machineCode3  机读码第三行的置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'nameEn' => 'name_en',
            'birthDate' => 'birth_date',
            'sex' => 'sex',
            'validPeriod' => 'valid_period',
            'issuingAuthority' => 'issuing_authority',
            'number' => 'number',
            'issuePlace' => 'issue_place',
            'issueTimes' => 'issue_times',
            'type' => 'type',
            'side' => 'side',
            'idName' => 'id_name',
            'idNumber' => 'id_number',
            'machineCode1' => 'machine_code1',
            'machineCode2' => 'machine_code2',
            'machineCode3' => 'machine_code3'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  中文姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * number  证件号的置信度。
    * issuePlace  签发地点的置信度。
    * issueTimes  签发次数的置信度。
    * type  证件类别的置信度。
    * side  证件图片正反面信息的置信度。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名的置信度。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码的置信度。
    * machineCode1  机读码第一行的置信度。
    * machineCode2  机读码第二行的置信度。
    * machineCode3  机读码第三行的置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'birthDate' => 'setBirthDate',
            'sex' => 'setSex',
            'validPeriod' => 'setValidPeriod',
            'issuingAuthority' => 'setIssuingAuthority',
            'number' => 'setNumber',
            'issuePlace' => 'setIssuePlace',
            'issueTimes' => 'setIssueTimes',
            'type' => 'setType',
            'side' => 'setSide',
            'idName' => 'setIdName',
            'idNumber' => 'setIdNumber',
            'machineCode1' => 'setMachineCode1',
            'machineCode2' => 'setMachineCode2',
            'machineCode3' => 'setMachineCode3'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  中文姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * number  证件号的置信度。
    * issuePlace  签发地点的置信度。
    * issueTimes  签发次数的置信度。
    * type  证件类别的置信度。
    * side  证件图片正反面信息的置信度。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名的置信度。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码的置信度。
    * machineCode1  机读码第一行的置信度。
    * machineCode2  机读码第二行的置信度。
    * machineCode3  机读码第三行的置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'birthDate' => 'getBirthDate',
            'sex' => 'getSex',
            'validPeriod' => 'getValidPeriod',
            'issuingAuthority' => 'getIssuingAuthority',
            'number' => 'getNumber',
            'issuePlace' => 'getIssuePlace',
            'issueTimes' => 'getIssueTimes',
            'type' => 'getType',
            'side' => 'getSide',
            'idName' => 'getIdName',
            'idNumber' => 'getIdNumber',
            'machineCode1' => 'getMachineCode1',
            'machineCode2' => 'getMachineCode2',
            'machineCode3' => 'getMachineCode3'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issuePlace'] = isset($data['issuePlace']) ? $data['issuePlace'] : null;
        $this->container['issueTimes'] = isset($data['issueTimes']) ? $data['issueTimes'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['idName'] = isset($data['idName']) ? $data['idName'] : null;
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['machineCode1'] = isset($data['machineCode1']) ? $data['machineCode1'] : null;
        $this->container['machineCode2'] = isset($data['machineCode2']) ? $data['machineCode2'] : null;
        $this->container['machineCode3'] = isset($data['machineCode3']) ? $data['machineCode3'] : null;
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
    * Gets name
    *  中文姓名的置信度。
    *
    * @return float|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param float|null $name 中文姓名的置信度。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文姓名的置信度。
    *
    * @return float|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param float|null $nameEn 英文姓名的置信度。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets birthDate
    *  出生日期的置信度。
    *
    * @return float|null
    */
    public function getBirthDate()
    {
        return $this->container['birthDate'];
    }

    /**
    * Sets birthDate
    *
    * @param float|null $birthDate 出生日期的置信度。
    *
    * @return $this
    */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;
        return $this;
    }

    /**
    * Gets sex
    *  性别的置信度。
    *
    * @return float|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param float|null $sex 性别的置信度。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets validPeriod
    *  有效期限的置信度。
    *
    * @return float|null
    */
    public function getValidPeriod()
    {
        return $this->container['validPeriod'];
    }

    /**
    * Sets validPeriod
    *
    * @param float|null $validPeriod 有效期限的置信度。
    *
    * @return $this
    */
    public function setValidPeriod($validPeriod)
    {
        $this->container['validPeriod'] = $validPeriod;
        return $this;
    }

    /**
    * Gets issuingAuthority
    *  签发机关的置信度。
    *
    * @return float|null
    */
    public function getIssuingAuthority()
    {
        return $this->container['issuingAuthority'];
    }

    /**
    * Sets issuingAuthority
    *
    * @param float|null $issuingAuthority 签发机关的置信度。
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
        return $this;
    }

    /**
    * Gets number
    *  证件号的置信度。
    *
    * @return float|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param float|null $number 证件号的置信度。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets issuePlace
    *  签发地点的置信度。
    *
    * @return float|null
    */
    public function getIssuePlace()
    {
        return $this->container['issuePlace'];
    }

    /**
    * Sets issuePlace
    *
    * @param float|null $issuePlace 签发地点的置信度。
    *
    * @return $this
    */
    public function setIssuePlace($issuePlace)
    {
        $this->container['issuePlace'] = $issuePlace;
        return $this;
    }

    /**
    * Gets issueTimes
    *  签发次数的置信度。
    *
    * @return float|null
    */
    public function getIssueTimes()
    {
        return $this->container['issueTimes'];
    }

    /**
    * Sets issueTimes
    *
    * @param float|null $issueTimes 签发次数的置信度。
    *
    * @return $this
    */
    public function setIssueTimes($issueTimes)
    {
        $this->container['issueTimes'] = $issueTimes;
        return $this;
    }

    /**
    * Gets type
    *  证件类别的置信度。
    *
    * @return float|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param float|null $type 证件类别的置信度。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets side
    *  证件图片正反面信息的置信度。
    *
    * @return float|null
    */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
    * Sets side
    *
    * @param float|null $side 证件图片正反面信息的置信度。
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
        return $this;
    }

    /**
    * Gets idName
    *  回乡证背面的香港/澳门/台湾身份证姓名的置信度。
    *
    * @return float|null
    */
    public function getIdName()
    {
        return $this->container['idName'];
    }

    /**
    * Sets idName
    *
    * @param float|null $idName 回乡证背面的香港/澳门/台湾身份证姓名的置信度。
    *
    * @return $this
    */
    public function setIdName($idName)
    {
        $this->container['idName'] = $idName;
        return $this;
    }

    /**
    * Gets idNumber
    *  回乡证背面的香港/澳门/台湾身份证号码的置信度。
    *
    * @return float|null
    */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
    * Sets idNumber
    *
    * @param float|null $idNumber 回乡证背面的香港/澳门/台湾身份证号码的置信度。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets machineCode1
    *  机读码第一行的置信度。
    *
    * @return float|null
    */
    public function getMachineCode1()
    {
        return $this->container['machineCode1'];
    }

    /**
    * Sets machineCode1
    *
    * @param float|null $machineCode1 机读码第一行的置信度。
    *
    * @return $this
    */
    public function setMachineCode1($machineCode1)
    {
        $this->container['machineCode1'] = $machineCode1;
        return $this;
    }

    /**
    * Gets machineCode2
    *  机读码第二行的置信度。
    *
    * @return float|null
    */
    public function getMachineCode2()
    {
        return $this->container['machineCode2'];
    }

    /**
    * Sets machineCode2
    *
    * @param float|null $machineCode2 机读码第二行的置信度。
    *
    * @return $this
    */
    public function setMachineCode2($machineCode2)
    {
        $this->container['machineCode2'] = $machineCode2;
        return $this;
    }

    /**
    * Gets machineCode3
    *  机读码第三行的置信度。
    *
    * @return float|null
    */
    public function getMachineCode3()
    {
        return $this->container['machineCode3'];
    }

    /**
    * Sets machineCode3
    *
    * @param float|null $machineCode3 机读码第三行的置信度。
    *
    * @return $this
    */
    public function setMachineCode3($machineCode3)
    {
        $this->container['machineCode3'] = $machineCode3;
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

