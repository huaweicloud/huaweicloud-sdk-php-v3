<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PassportResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PassportResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * passportType  护照类型（P:普通因私护照、W:外交护照、G:公务护照）（英文）。
    * countryCode  护照签发国的国家码（英文）。
    * passportNumber  护照号码（英文）。
    * nationality  护照持有人国籍（英文）。
    * surname  姓（英文）。
    * givenName  名字（英文）。
    * sex  性别（英文）。
    * dateOfBirth  出生日期（英文）。
    * dateOfExpiry  护照有效期（英文）。
    * dateOfIssue  护照签发日期（英文）。
    * placeOfBirth  出生地（英文）。
    * placeOfIssue  签发地（英文）。
    * issuingAuthority  签发机构（英文），其中对中国的英文简写统一输出为P.R.China。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * extraInfo  默认为空。对于部分常见国家的护照OCR服务，extra_info内会包含护照上由本地官方语言描述的字段信息及其他信息。 如中国护照，里面会包含汉字表达的姓名、出生地等信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'passportType' => 'string',
            'countryCode' => 'string',
            'passportNumber' => 'string',
            'nationality' => 'string',
            'surname' => 'string',
            'givenName' => 'string',
            'sex' => 'string',
            'dateOfBirth' => 'string',
            'dateOfExpiry' => 'string',
            'dateOfIssue' => 'string',
            'placeOfBirth' => 'string',
            'placeOfIssue' => 'string',
            'issuingAuthority' => 'string',
            'confidence' => 'object',
            'extraInfo' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * passportType  护照类型（P:普通因私护照、W:外交护照、G:公务护照）（英文）。
    * countryCode  护照签发国的国家码（英文）。
    * passportNumber  护照号码（英文）。
    * nationality  护照持有人国籍（英文）。
    * surname  姓（英文）。
    * givenName  名字（英文）。
    * sex  性别（英文）。
    * dateOfBirth  出生日期（英文）。
    * dateOfExpiry  护照有效期（英文）。
    * dateOfIssue  护照签发日期（英文）。
    * placeOfBirth  出生地（英文）。
    * placeOfIssue  签发地（英文）。
    * issuingAuthority  签发机构（英文），其中对中国的英文简写统一输出为P.R.China。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * extraInfo  默认为空。对于部分常见国家的护照OCR服务，extra_info内会包含护照上由本地官方语言描述的字段信息及其他信息。 如中国护照，里面会包含汉字表达的姓名、出生地等信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'passportType' => null,
        'countryCode' => null,
        'passportNumber' => null,
        'nationality' => null,
        'surname' => null,
        'givenName' => null,
        'sex' => null,
        'dateOfBirth' => null,
        'dateOfExpiry' => null,
        'dateOfIssue' => null,
        'placeOfBirth' => null,
        'placeOfIssue' => null,
        'issuingAuthority' => null,
        'confidence' => null,
        'extraInfo' => null
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
    * passportType  护照类型（P:普通因私护照、W:外交护照、G:公务护照）（英文）。
    * countryCode  护照签发国的国家码（英文）。
    * passportNumber  护照号码（英文）。
    * nationality  护照持有人国籍（英文）。
    * surname  姓（英文）。
    * givenName  名字（英文）。
    * sex  性别（英文）。
    * dateOfBirth  出生日期（英文）。
    * dateOfExpiry  护照有效期（英文）。
    * dateOfIssue  护照签发日期（英文）。
    * placeOfBirth  出生地（英文）。
    * placeOfIssue  签发地（英文）。
    * issuingAuthority  签发机构（英文），其中对中国的英文简写统一输出为P.R.China。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * extraInfo  默认为空。对于部分常见国家的护照OCR服务，extra_info内会包含护照上由本地官方语言描述的字段信息及其他信息。 如中国护照，里面会包含汉字表达的姓名、出生地等信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'passportType' => 'passport_type',
            'countryCode' => 'country_code',
            'passportNumber' => 'passport_number',
            'nationality' => 'nationality',
            'surname' => 'surname',
            'givenName' => 'given_name',
            'sex' => 'sex',
            'dateOfBirth' => 'date_of_birth',
            'dateOfExpiry' => 'date_of_expiry',
            'dateOfIssue' => 'date_of_issue',
            'placeOfBirth' => 'place_of_birth',
            'placeOfIssue' => 'place_of_issue',
            'issuingAuthority' => 'issuing_authority',
            'confidence' => 'confidence',
            'extraInfo' => 'extra_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * passportType  护照类型（P:普通因私护照、W:外交护照、G:公务护照）（英文）。
    * countryCode  护照签发国的国家码（英文）。
    * passportNumber  护照号码（英文）。
    * nationality  护照持有人国籍（英文）。
    * surname  姓（英文）。
    * givenName  名字（英文）。
    * sex  性别（英文）。
    * dateOfBirth  出生日期（英文）。
    * dateOfExpiry  护照有效期（英文）。
    * dateOfIssue  护照签发日期（英文）。
    * placeOfBirth  出生地（英文）。
    * placeOfIssue  签发地（英文）。
    * issuingAuthority  签发机构（英文），其中对中国的英文简写统一输出为P.R.China。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * extraInfo  默认为空。对于部分常见国家的护照OCR服务，extra_info内会包含护照上由本地官方语言描述的字段信息及其他信息。 如中国护照，里面会包含汉字表达的姓名、出生地等信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'passportType' => 'setPassportType',
            'countryCode' => 'setCountryCode',
            'passportNumber' => 'setPassportNumber',
            'nationality' => 'setNationality',
            'surname' => 'setSurname',
            'givenName' => 'setGivenName',
            'sex' => 'setSex',
            'dateOfBirth' => 'setDateOfBirth',
            'dateOfExpiry' => 'setDateOfExpiry',
            'dateOfIssue' => 'setDateOfIssue',
            'placeOfBirth' => 'setPlaceOfBirth',
            'placeOfIssue' => 'setPlaceOfIssue',
            'issuingAuthority' => 'setIssuingAuthority',
            'confidence' => 'setConfidence',
            'extraInfo' => 'setExtraInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * passportType  护照类型（P:普通因私护照、W:外交护照、G:公务护照）（英文）。
    * countryCode  护照签发国的国家码（英文）。
    * passportNumber  护照号码（英文）。
    * nationality  护照持有人国籍（英文）。
    * surname  姓（英文）。
    * givenName  名字（英文）。
    * sex  性别（英文）。
    * dateOfBirth  出生日期（英文）。
    * dateOfExpiry  护照有效期（英文）。
    * dateOfIssue  护照签发日期（英文）。
    * placeOfBirth  出生地（英文）。
    * placeOfIssue  签发地（英文）。
    * issuingAuthority  签发机构（英文），其中对中国的英文简写统一输出为P.R.China。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * extraInfo  默认为空。对于部分常见国家的护照OCR服务，extra_info内会包含护照上由本地官方语言描述的字段信息及其他信息。 如中国护照，里面会包含汉字表达的姓名、出生地等信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'passportType' => 'getPassportType',
            'countryCode' => 'getCountryCode',
            'passportNumber' => 'getPassportNumber',
            'nationality' => 'getNationality',
            'surname' => 'getSurname',
            'givenName' => 'getGivenName',
            'sex' => 'getSex',
            'dateOfBirth' => 'getDateOfBirth',
            'dateOfExpiry' => 'getDateOfExpiry',
            'dateOfIssue' => 'getDateOfIssue',
            'placeOfBirth' => 'getPlaceOfBirth',
            'placeOfIssue' => 'getPlaceOfIssue',
            'issuingAuthority' => 'getIssuingAuthority',
            'confidence' => 'getConfidence',
            'extraInfo' => 'getExtraInfo'
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
        $this->container['passportType'] = isset($data['passportType']) ? $data['passportType'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['passportNumber'] = isset($data['passportNumber']) ? $data['passportNumber'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['givenName'] = isset($data['givenName']) ? $data['givenName'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['dateOfExpiry'] = isset($data['dateOfExpiry']) ? $data['dateOfExpiry'] : null;
        $this->container['dateOfIssue'] = isset($data['dateOfIssue']) ? $data['dateOfIssue'] : null;
        $this->container['placeOfBirth'] = isset($data['placeOfBirth']) ? $data['placeOfBirth'] : null;
        $this->container['placeOfIssue'] = isset($data['placeOfIssue']) ? $data['placeOfIssue'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
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
    * Gets passportType
    *  护照类型（P:普通因私护照、W:外交护照、G:公务护照）（英文）。
    *
    * @return string|null
    */
    public function getPassportType()
    {
        return $this->container['passportType'];
    }

    /**
    * Sets passportType
    *
    * @param string|null $passportType 护照类型（P:普通因私护照、W:外交护照、G:公务护照）（英文）。
    *
    * @return $this
    */
    public function setPassportType($passportType)
    {
        $this->container['passportType'] = $passportType;
        return $this;
    }

    /**
    * Gets countryCode
    *  护照签发国的国家码（英文）。
    *
    * @return string|null
    */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
    * Sets countryCode
    *
    * @param string|null $countryCode 护照签发国的国家码（英文）。
    *
    * @return $this
    */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;
        return $this;
    }

    /**
    * Gets passportNumber
    *  护照号码（英文）。
    *
    * @return string|null
    */
    public function getPassportNumber()
    {
        return $this->container['passportNumber'];
    }

    /**
    * Sets passportNumber
    *
    * @param string|null $passportNumber 护照号码（英文）。
    *
    * @return $this
    */
    public function setPassportNumber($passportNumber)
    {
        $this->container['passportNumber'] = $passportNumber;
        return $this;
    }

    /**
    * Gets nationality
    *  护照持有人国籍（英文）。
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
    * @param string|null $nationality 护照持有人国籍（英文）。
    *
    * @return $this
    */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;
        return $this;
    }

    /**
    * Gets surname
    *  姓（英文）。
    *
    * @return string|null
    */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
    * Sets surname
    *
    * @param string|null $surname 姓（英文）。
    *
    * @return $this
    */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;
        return $this;
    }

    /**
    * Gets givenName
    *  名字（英文）。
    *
    * @return string|null
    */
    public function getGivenName()
    {
        return $this->container['givenName'];
    }

    /**
    * Sets givenName
    *
    * @param string|null $givenName 名字（英文）。
    *
    * @return $this
    */
    public function setGivenName($givenName)
    {
        $this->container['givenName'] = $givenName;
        return $this;
    }

    /**
    * Gets sex
    *  性别（英文）。
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
    * @param string|null $sex 性别（英文）。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets dateOfBirth
    *  出生日期（英文）。
    *
    * @return string|null
    */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
    * Sets dateOfBirth
    *
    * @param string|null $dateOfBirth 出生日期（英文）。
    *
    * @return $this
    */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->container['dateOfBirth'] = $dateOfBirth;
        return $this;
    }

    /**
    * Gets dateOfExpiry
    *  护照有效期（英文）。
    *
    * @return string|null
    */
    public function getDateOfExpiry()
    {
        return $this->container['dateOfExpiry'];
    }

    /**
    * Sets dateOfExpiry
    *
    * @param string|null $dateOfExpiry 护照有效期（英文）。
    *
    * @return $this
    */
    public function setDateOfExpiry($dateOfExpiry)
    {
        $this->container['dateOfExpiry'] = $dateOfExpiry;
        return $this;
    }

    /**
    * Gets dateOfIssue
    *  护照签发日期（英文）。
    *
    * @return string|null
    */
    public function getDateOfIssue()
    {
        return $this->container['dateOfIssue'];
    }

    /**
    * Sets dateOfIssue
    *
    * @param string|null $dateOfIssue 护照签发日期（英文）。
    *
    * @return $this
    */
    public function setDateOfIssue($dateOfIssue)
    {
        $this->container['dateOfIssue'] = $dateOfIssue;
        return $this;
    }

    /**
    * Gets placeOfBirth
    *  出生地（英文）。
    *
    * @return string|null
    */
    public function getPlaceOfBirth()
    {
        return $this->container['placeOfBirth'];
    }

    /**
    * Sets placeOfBirth
    *
    * @param string|null $placeOfBirth 出生地（英文）。
    *
    * @return $this
    */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->container['placeOfBirth'] = $placeOfBirth;
        return $this;
    }

    /**
    * Gets placeOfIssue
    *  签发地（英文）。
    *
    * @return string|null
    */
    public function getPlaceOfIssue()
    {
        return $this->container['placeOfIssue'];
    }

    /**
    * Sets placeOfIssue
    *
    * @param string|null $placeOfIssue 签发地（英文）。
    *
    * @return $this
    */
    public function setPlaceOfIssue($placeOfIssue)
    {
        $this->container['placeOfIssue'] = $placeOfIssue;
        return $this;
    }

    /**
    * Gets issuingAuthority
    *  签发机构（英文），其中对中国的英文简写统一输出为P.R.China。
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
    * @param string|null $issuingAuthority 签发机构（英文），其中对中国的英文简写统一输出为P.R.China。
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
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
    * @param object|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets extraInfo
    *  默认为空。对于部分常见国家的护照OCR服务，extra_info内会包含护照上由本地官方语言描述的字段信息及其他信息。 如中国护照，里面会包含汉字表达的姓名、出生地等信息。
    *
    * @return object|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param object|null $extraInfo 默认为空。对于部分常见国家的护照OCR服务，extra_info内会包含护照上由本地官方语言描述的字段信息及其他信息。 如中国护照，里面会包含汉字表达的姓名、出生地等信息。
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
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

