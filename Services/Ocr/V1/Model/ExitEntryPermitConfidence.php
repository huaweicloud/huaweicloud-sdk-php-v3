<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExitEntryPermitConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExitEntryPermitConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度
    * number  证件号的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * issuePlace  签发地点的置信度。
    * machineCode  机器码的置信度。
    * type  证件类型的置信度。
    * side  证件图片正反面信息的置信度。
    * endorsementInfoHk  香港签注信息的置信度。
    * endorsementInfoMo  澳门签注信息的置信度。
    * endorsementInfoTw  台湾签注信息的置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'float',
            'nameEn' => 'float',
            'birthDate' => 'float',
            'sex' => 'float',
            'number' => 'float',
            'validPeriod' => 'float',
            'issuingAuthority' => 'float',
            'issuePlace' => 'float',
            'machineCode' => 'float',
            'type' => 'float',
            'side' => 'float',
            'endorsementInfoHk' => 'object',
            'endorsementInfoMo' => 'object',
            'endorsementInfoTw' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度
    * number  证件号的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * issuePlace  签发地点的置信度。
    * machineCode  机器码的置信度。
    * type  证件类型的置信度。
    * side  证件图片正反面信息的置信度。
    * endorsementInfoHk  香港签注信息的置信度。
    * endorsementInfoMo  澳门签注信息的置信度。
    * endorsementInfoTw  台湾签注信息的置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => 'float',
        'nameEn' => 'float',
        'birthDate' => 'float',
        'sex' => 'float',
        'number' => 'float',
        'validPeriod' => 'float',
        'issuingAuthority' => 'float',
        'issuePlace' => 'float',
        'machineCode' => 'float',
        'type' => 'float',
        'side' => 'float',
        'endorsementInfoHk' => null,
        'endorsementInfoMo' => null,
        'endorsementInfoTw' => null
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
    * name  姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度
    * number  证件号的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * issuePlace  签发地点的置信度。
    * machineCode  机器码的置信度。
    * type  证件类型的置信度。
    * side  证件图片正反面信息的置信度。
    * endorsementInfoHk  香港签注信息的置信度。
    * endorsementInfoMo  澳门签注信息的置信度。
    * endorsementInfoTw  台湾签注信息的置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'nameEn' => 'name_en',
            'birthDate' => 'birth_date',
            'sex' => 'sex',
            'number' => 'number',
            'validPeriod' => 'valid_period',
            'issuingAuthority' => 'issuing_authority',
            'issuePlace' => 'issue_place',
            'machineCode' => 'machine_code',
            'type' => 'type',
            'side' => 'side',
            'endorsementInfoHk' => 'endorsement_info_hk',
            'endorsementInfoMo' => 'endorsement_info_mo',
            'endorsementInfoTw' => 'endorsement_info_tw'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度
    * number  证件号的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * issuePlace  签发地点的置信度。
    * machineCode  机器码的置信度。
    * type  证件类型的置信度。
    * side  证件图片正反面信息的置信度。
    * endorsementInfoHk  香港签注信息的置信度。
    * endorsementInfoMo  澳门签注信息的置信度。
    * endorsementInfoTw  台湾签注信息的置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'birthDate' => 'setBirthDate',
            'sex' => 'setSex',
            'number' => 'setNumber',
            'validPeriod' => 'setValidPeriod',
            'issuingAuthority' => 'setIssuingAuthority',
            'issuePlace' => 'setIssuePlace',
            'machineCode' => 'setMachineCode',
            'type' => 'setType',
            'side' => 'setSide',
            'endorsementInfoHk' => 'setEndorsementInfoHk',
            'endorsementInfoMo' => 'setEndorsementInfoMo',
            'endorsementInfoTw' => 'setEndorsementInfoTw'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名的置信度。
    * nameEn  英文姓名的置信度。
    * birthDate  出生日期的置信度。
    * sex  性别的置信度
    * number  证件号的置信度。
    * validPeriod  有效期限的置信度。
    * issuingAuthority  签发机关的置信度。
    * issuePlace  签发地点的置信度。
    * machineCode  机器码的置信度。
    * type  证件类型的置信度。
    * side  证件图片正反面信息的置信度。
    * endorsementInfoHk  香港签注信息的置信度。
    * endorsementInfoMo  澳门签注信息的置信度。
    * endorsementInfoTw  台湾签注信息的置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'birthDate' => 'getBirthDate',
            'sex' => 'getSex',
            'number' => 'getNumber',
            'validPeriod' => 'getValidPeriod',
            'issuingAuthority' => 'getIssuingAuthority',
            'issuePlace' => 'getIssuePlace',
            'machineCode' => 'getMachineCode',
            'type' => 'getType',
            'side' => 'getSide',
            'endorsementInfoHk' => 'getEndorsementInfoHk',
            'endorsementInfoMo' => 'getEndorsementInfoMo',
            'endorsementInfoTw' => 'getEndorsementInfoTw'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['issuePlace'] = isset($data['issuePlace']) ? $data['issuePlace'] : null;
        $this->container['machineCode'] = isset($data['machineCode']) ? $data['machineCode'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['endorsementInfoHk'] = isset($data['endorsementInfoHk']) ? $data['endorsementInfoHk'] : null;
        $this->container['endorsementInfoMo'] = isset($data['endorsementInfoMo']) ? $data['endorsementInfoMo'] : null;
        $this->container['endorsementInfoTw'] = isset($data['endorsementInfoTw']) ? $data['endorsementInfoTw'] : null;
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
    *  姓名的置信度。
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
    * @param float|null $name 姓名的置信度。
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
    *  性别的置信度
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
    * @param float|null $sex 性别的置信度
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
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
    * Gets machineCode
    *  机器码的置信度。
    *
    * @return float|null
    */
    public function getMachineCode()
    {
        return $this->container['machineCode'];
    }

    /**
    * Sets machineCode
    *
    * @param float|null $machineCode 机器码的置信度。
    *
    * @return $this
    */
    public function setMachineCode($machineCode)
    {
        $this->container['machineCode'] = $machineCode;
        return $this;
    }

    /**
    * Gets type
    *  证件类型的置信度。
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
    * @param float|null $type 证件类型的置信度。
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
    * Gets endorsementInfoHk
    *  香港签注信息的置信度。
    *
    * @return object|null
    */
    public function getEndorsementInfoHk()
    {
        return $this->container['endorsementInfoHk'];
    }

    /**
    * Sets endorsementInfoHk
    *
    * @param object|null $endorsementInfoHk 香港签注信息的置信度。
    *
    * @return $this
    */
    public function setEndorsementInfoHk($endorsementInfoHk)
    {
        $this->container['endorsementInfoHk'] = $endorsementInfoHk;
        return $this;
    }

    /**
    * Gets endorsementInfoMo
    *  澳门签注信息的置信度。
    *
    * @return object|null
    */
    public function getEndorsementInfoMo()
    {
        return $this->container['endorsementInfoMo'];
    }

    /**
    * Sets endorsementInfoMo
    *
    * @param object|null $endorsementInfoMo 澳门签注信息的置信度。
    *
    * @return $this
    */
    public function setEndorsementInfoMo($endorsementInfoMo)
    {
        $this->container['endorsementInfoMo'] = $endorsementInfoMo;
        return $this;
    }

    /**
    * Gets endorsementInfoTw
    *  台湾签注信息的置信度。
    *
    * @return object|null
    */
    public function getEndorsementInfoTw()
    {
        return $this->container['endorsementInfoTw'];
    }

    /**
    * Sets endorsementInfoTw
    *
    * @param object|null $endorsementInfoTw 台湾签注信息的置信度。
    *
    * @return $this
    */
    public function setEndorsementInfoTw($endorsementInfoTw)
    {
        $this->container['endorsementInfoTw'] = $endorsementInfoTw;
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

