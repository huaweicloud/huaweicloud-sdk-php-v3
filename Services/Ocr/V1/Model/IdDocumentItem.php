<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdDocumentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdDocumentItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。当前支持国家列表见表1。
    * idType  证件类型，可选值如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * side  证件正面或反面,可选值： - front: 正面，一般是包含人像的那面 - back: 背面 对于只有一面的卡证，返回front
    * firstName  名
    * lastName  姓氏
    * sex  性别，可选值： M:男性 F:女性 X:中性
    * nationality  持有人国籍
    * birthDate  生日，格式为yyyy-mm-dd
    * issueDate  签发日期，yyyy-mm-dd
    * expiryDate  有效日期，yyyy-mm-dd
    * documentNumber  证件号码
    * address  持有人通讯地址
    * issuingAuthority  签发机关
    * portraitImage  可选返回，证件头像图像base64编码
    * confidence  字段置信度，为0~1之间的小数，值越大，表明识别结果越可靠
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'countryRegion' => 'string',
            'idType' => 'string',
            'side' => 'string',
            'firstName' => 'string',
            'lastName' => 'string',
            'sex' => 'string',
            'nationality' => 'string',
            'birthDate' => 'string',
            'issueDate' => 'string',
            'expiryDate' => 'string',
            'documentNumber' => 'string',
            'address' => 'string',
            'issuingAuthority' => 'string',
            'portraitImage' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。当前支持国家列表见表1。
    * idType  证件类型，可选值如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * side  证件正面或反面,可选值： - front: 正面，一般是包含人像的那面 - back: 背面 对于只有一面的卡证，返回front
    * firstName  名
    * lastName  姓氏
    * sex  性别，可选值： M:男性 F:女性 X:中性
    * nationality  持有人国籍
    * birthDate  生日，格式为yyyy-mm-dd
    * issueDate  签发日期，yyyy-mm-dd
    * expiryDate  有效日期，yyyy-mm-dd
    * documentNumber  证件号码
    * address  持有人通讯地址
    * issuingAuthority  签发机关
    * portraitImage  可选返回，证件头像图像base64编码
    * confidence  字段置信度，为0~1之间的小数，值越大，表明识别结果越可靠
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'countryRegion' => null,
        'idType' => null,
        'side' => null,
        'firstName' => null,
        'lastName' => null,
        'sex' => null,
        'nationality' => null,
        'birthDate' => null,
        'issueDate' => null,
        'expiryDate' => null,
        'documentNumber' => null,
        'address' => null,
        'issuingAuthority' => null,
        'portraitImage' => null,
        'confidence' => null
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
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。当前支持国家列表见表1。
    * idType  证件类型，可选值如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * side  证件正面或反面,可选值： - front: 正面，一般是包含人像的那面 - back: 背面 对于只有一面的卡证，返回front
    * firstName  名
    * lastName  姓氏
    * sex  性别，可选值： M:男性 F:女性 X:中性
    * nationality  持有人国籍
    * birthDate  生日，格式为yyyy-mm-dd
    * issueDate  签发日期，yyyy-mm-dd
    * expiryDate  有效日期，yyyy-mm-dd
    * documentNumber  证件号码
    * address  持有人通讯地址
    * issuingAuthority  签发机关
    * portraitImage  可选返回，证件头像图像base64编码
    * confidence  字段置信度，为0~1之间的小数，值越大，表明识别结果越可靠
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'countryRegion' => 'country_region',
            'idType' => 'id_type',
            'side' => 'side',
            'firstName' => 'first_name',
            'lastName' => 'last_name',
            'sex' => 'sex',
            'nationality' => 'nationality',
            'birthDate' => 'birth_date',
            'issueDate' => 'issue_date',
            'expiryDate' => 'expiry_date',
            'documentNumber' => 'document_number',
            'address' => 'address',
            'issuingAuthority' => 'issuing_authority',
            'portraitImage' => 'portrait_image',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。当前支持国家列表见表1。
    * idType  证件类型，可选值如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * side  证件正面或反面,可选值： - front: 正面，一般是包含人像的那面 - back: 背面 对于只有一面的卡证，返回front
    * firstName  名
    * lastName  姓氏
    * sex  性别，可选值： M:男性 F:女性 X:中性
    * nationality  持有人国籍
    * birthDate  生日，格式为yyyy-mm-dd
    * issueDate  签发日期，yyyy-mm-dd
    * expiryDate  有效日期，yyyy-mm-dd
    * documentNumber  证件号码
    * address  持有人通讯地址
    * issuingAuthority  签发机关
    * portraitImage  可选返回，证件头像图像base64编码
    * confidence  字段置信度，为0~1之间的小数，值越大，表明识别结果越可靠
    *
    * @var string[]
    */
    protected static $setters = [
            'countryRegion' => 'setCountryRegion',
            'idType' => 'setIdType',
            'side' => 'setSide',
            'firstName' => 'setFirstName',
            'lastName' => 'setLastName',
            'sex' => 'setSex',
            'nationality' => 'setNationality',
            'birthDate' => 'setBirthDate',
            'issueDate' => 'setIssueDate',
            'expiryDate' => 'setExpiryDate',
            'documentNumber' => 'setDocumentNumber',
            'address' => 'setAddress',
            'issuingAuthority' => 'setIssuingAuthority',
            'portraitImage' => 'setPortraitImage',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。当前支持国家列表见表1。
    * idType  证件类型，可选值如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * side  证件正面或反面,可选值： - front: 正面，一般是包含人像的那面 - back: 背面 对于只有一面的卡证，返回front
    * firstName  名
    * lastName  姓氏
    * sex  性别，可选值： M:男性 F:女性 X:中性
    * nationality  持有人国籍
    * birthDate  生日，格式为yyyy-mm-dd
    * issueDate  签发日期，yyyy-mm-dd
    * expiryDate  有效日期，yyyy-mm-dd
    * documentNumber  证件号码
    * address  持有人通讯地址
    * issuingAuthority  签发机关
    * portraitImage  可选返回，证件头像图像base64编码
    * confidence  字段置信度，为0~1之间的小数，值越大，表明识别结果越可靠
    *
    * @var string[]
    */
    protected static $getters = [
            'countryRegion' => 'getCountryRegion',
            'idType' => 'getIdType',
            'side' => 'getSide',
            'firstName' => 'getFirstName',
            'lastName' => 'getLastName',
            'sex' => 'getSex',
            'nationality' => 'getNationality',
            'birthDate' => 'getBirthDate',
            'issueDate' => 'getIssueDate',
            'expiryDate' => 'getExpiryDate',
            'documentNumber' => 'getDocumentNumber',
            'address' => 'getAddress',
            'issuingAuthority' => 'getIssuingAuthority',
            'portraitImage' => 'getPortraitImage',
            'confidence' => 'getConfidence'
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
        $this->container['countryRegion'] = isset($data['countryRegion']) ? $data['countryRegion'] : null;
        $this->container['idType'] = isset($data['idType']) ? $data['idType'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['documentNumber'] = isset($data['documentNumber']) ? $data['documentNumber'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['portraitImage'] = isset($data['portraitImage']) ? $data['portraitImage'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
    * Gets countryRegion
    *  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。当前支持国家列表见表1。
    *
    * @return string|null
    */
    public function getCountryRegion()
    {
        return $this->container['countryRegion'];
    }

    /**
    * Sets countryRegion
    *
    * @param string|null $countryRegion 证件签发国家或地区代码，命名遵循ISO-3166 3位代码。当前支持国家列表见表1。
    *
    * @return $this
    */
    public function setCountryRegion($countryRegion)
    {
        $this->container['countryRegion'] = $countryRegion;
        return $this;
    }

    /**
    * Gets idType
    *  证件类型，可选值如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    *
    * @return string|null
    */
    public function getIdType()
    {
        return $this->container['idType'];
    }

    /**
    * Sets idType
    *
    * @param string|null $idType 证件类型，可选值如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    *
    * @return $this
    */
    public function setIdType($idType)
    {
        $this->container['idType'] = $idType;
        return $this;
    }

    /**
    * Gets side
    *  证件正面或反面,可选值： - front: 正面，一般是包含人像的那面 - back: 背面 对于只有一面的卡证，返回front
    *
    * @return string|null
    */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
    * Sets side
    *
    * @param string|null $side 证件正面或反面,可选值： - front: 正面，一般是包含人像的那面 - back: 背面 对于只有一面的卡证，返回front
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
        return $this;
    }

    /**
    * Gets firstName
    *  名
    *
    * @return string|null
    */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
    * Sets firstName
    *
    * @param string|null $firstName 名
    *
    * @return $this
    */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;
        return $this;
    }

    /**
    * Gets lastName
    *  姓氏
    *
    * @return string|null
    */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
    * Sets lastName
    *
    * @param string|null $lastName 姓氏
    *
    * @return $this
    */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;
        return $this;
    }

    /**
    * Gets sex
    *  性别，可选值： M:男性 F:女性 X:中性
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 性别，可选值： M:男性 F:女性 X:中性
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets nationality
    *  持有人国籍
    *
    * @return string|null
    */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
    * Sets nationality
    *
    * @param string|null $nationality 持有人国籍
    *
    * @return $this
    */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;
        return $this;
    }

    /**
    * Gets birthDate
    *  生日，格式为yyyy-mm-dd
    *
    * @return string|null
    */
    public function getBirthDate()
    {
        return $this->container['birthDate'];
    }

    /**
    * Sets birthDate
    *
    * @param string|null $birthDate 生日，格式为yyyy-mm-dd
    *
    * @return $this
    */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;
        return $this;
    }

    /**
    * Gets issueDate
    *  签发日期，yyyy-mm-dd
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
    * @param string|null $issueDate 签发日期，yyyy-mm-dd
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets expiryDate
    *  有效日期，yyyy-mm-dd
    *
    * @return string|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param string|null $expiryDate 有效日期，yyyy-mm-dd
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets documentNumber
    *  证件号码
    *
    * @return string|null
    */
    public function getDocumentNumber()
    {
        return $this->container['documentNumber'];
    }

    /**
    * Sets documentNumber
    *
    * @param string|null $documentNumber 证件号码
    *
    * @return $this
    */
    public function setDocumentNumber($documentNumber)
    {
        $this->container['documentNumber'] = $documentNumber;
        return $this;
    }

    /**
    * Gets address
    *  持有人通讯地址
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
    * @param string|null $address 持有人通讯地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets issuingAuthority
    *  签发机关
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
    * @param string|null $issuingAuthority 签发机关
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
        return $this;
    }

    /**
    * Gets portraitImage
    *  可选返回，证件头像图像base64编码
    *
    * @return string|null
    */
    public function getPortraitImage()
    {
        return $this->container['portraitImage'];
    }

    /**
    * Sets portraitImage
    *
    * @param string|null $portraitImage 可选返回，证件头像图像base64编码
    *
    * @return $this
    */
    public function setPortraitImage($portraitImage)
    {
        $this->container['portraitImage'] = $portraitImage;
        return $this;
    }

    /**
    * Gets confidence
    *  字段置信度，为0~1之间的小数，值越大，表明识别结果越可靠
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 字段置信度，为0~1之间的小数，值越大，表明识别结果越可靠
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

