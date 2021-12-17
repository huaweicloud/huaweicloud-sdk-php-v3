<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThailandIdcardConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThailandIdcardConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idNumber  身份证号置信度。
    * nameTh  泰文名字置信度。
    * firstNameEn  英文名字置信度。
    * lastNameEn  英文姓氏置信度。
    * dateOfBirthTh  泰文出生日期置信度。
    * dateOfBirthEn  英文出生日期置信度。
    * religionTh  宗教置信度。
    * addressTh  地址置信度。
    * dateOfIssueTh  泰文签发日期置信度。
    * dateOfIssueEn  英文签发日期置信度。
    * dateOfExpiryTh  泰文有效期置信度。
    * dateOfExpiryEn  英文有效期置信度。
    * serialNumber  序列号置信度。
    * cardNumber  身份证反面卡号置信度。
    * laserNumber  激光码置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idNumber' => 'float',
            'nameTh' => 'float',
            'firstNameEn' => 'float',
            'lastNameEn' => 'float',
            'dateOfBirthTh' => 'float',
            'dateOfBirthEn' => 'float',
            'religionTh' => 'float',
            'addressTh' => 'float',
            'dateOfIssueTh' => 'float',
            'dateOfIssueEn' => 'float',
            'dateOfExpiryTh' => 'float',
            'dateOfExpiryEn' => 'float',
            'serialNumber' => 'float',
            'cardNumber' => 'float',
            'laserNumber' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idNumber  身份证号置信度。
    * nameTh  泰文名字置信度。
    * firstNameEn  英文名字置信度。
    * lastNameEn  英文姓氏置信度。
    * dateOfBirthTh  泰文出生日期置信度。
    * dateOfBirthEn  英文出生日期置信度。
    * religionTh  宗教置信度。
    * addressTh  地址置信度。
    * dateOfIssueTh  泰文签发日期置信度。
    * dateOfIssueEn  英文签发日期置信度。
    * dateOfExpiryTh  泰文有效期置信度。
    * dateOfExpiryEn  英文有效期置信度。
    * serialNumber  序列号置信度。
    * cardNumber  身份证反面卡号置信度。
    * laserNumber  激光码置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idNumber' => 'float',
        'nameTh' => 'float',
        'firstNameEn' => 'float',
        'lastNameEn' => 'float',
        'dateOfBirthTh' => 'float',
        'dateOfBirthEn' => 'float',
        'religionTh' => 'float',
        'addressTh' => 'float',
        'dateOfIssueTh' => 'float',
        'dateOfIssueEn' => 'float',
        'dateOfExpiryTh' => 'float',
        'dateOfExpiryEn' => 'float',
        'serialNumber' => 'float',
        'cardNumber' => 'float',
        'laserNumber' => 'float'
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
    * idNumber  身份证号置信度。
    * nameTh  泰文名字置信度。
    * firstNameEn  英文名字置信度。
    * lastNameEn  英文姓氏置信度。
    * dateOfBirthTh  泰文出生日期置信度。
    * dateOfBirthEn  英文出生日期置信度。
    * religionTh  宗教置信度。
    * addressTh  地址置信度。
    * dateOfIssueTh  泰文签发日期置信度。
    * dateOfIssueEn  英文签发日期置信度。
    * dateOfExpiryTh  泰文有效期置信度。
    * dateOfExpiryEn  英文有效期置信度。
    * serialNumber  序列号置信度。
    * cardNumber  身份证反面卡号置信度。
    * laserNumber  激光码置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idNumber' => 'id_number',
            'nameTh' => 'name_th',
            'firstNameEn' => 'first_name_en',
            'lastNameEn' => 'last_name_en',
            'dateOfBirthTh' => 'date_of_birth_th',
            'dateOfBirthEn' => 'date_of_birth_en',
            'religionTh' => 'religion_th',
            'addressTh' => 'address_th',
            'dateOfIssueTh' => 'date_of_issue_th',
            'dateOfIssueEn' => 'date_of_issue_en',
            'dateOfExpiryTh' => 'date_of_expiry_th',
            'dateOfExpiryEn' => 'date_of_expiry_en',
            'serialNumber' => 'serial_number',
            'cardNumber' => 'card_number',
            'laserNumber' => 'laser_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idNumber  身份证号置信度。
    * nameTh  泰文名字置信度。
    * firstNameEn  英文名字置信度。
    * lastNameEn  英文姓氏置信度。
    * dateOfBirthTh  泰文出生日期置信度。
    * dateOfBirthEn  英文出生日期置信度。
    * religionTh  宗教置信度。
    * addressTh  地址置信度。
    * dateOfIssueTh  泰文签发日期置信度。
    * dateOfIssueEn  英文签发日期置信度。
    * dateOfExpiryTh  泰文有效期置信度。
    * dateOfExpiryEn  英文有效期置信度。
    * serialNumber  序列号置信度。
    * cardNumber  身份证反面卡号置信度。
    * laserNumber  激光码置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'idNumber' => 'setIdNumber',
            'nameTh' => 'setNameTh',
            'firstNameEn' => 'setFirstNameEn',
            'lastNameEn' => 'setLastNameEn',
            'dateOfBirthTh' => 'setDateOfBirthTh',
            'dateOfBirthEn' => 'setDateOfBirthEn',
            'religionTh' => 'setReligionTh',
            'addressTh' => 'setAddressTh',
            'dateOfIssueTh' => 'setDateOfIssueTh',
            'dateOfIssueEn' => 'setDateOfIssueEn',
            'dateOfExpiryTh' => 'setDateOfExpiryTh',
            'dateOfExpiryEn' => 'setDateOfExpiryEn',
            'serialNumber' => 'setSerialNumber',
            'cardNumber' => 'setCardNumber',
            'laserNumber' => 'setLaserNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idNumber  身份证号置信度。
    * nameTh  泰文名字置信度。
    * firstNameEn  英文名字置信度。
    * lastNameEn  英文姓氏置信度。
    * dateOfBirthTh  泰文出生日期置信度。
    * dateOfBirthEn  英文出生日期置信度。
    * religionTh  宗教置信度。
    * addressTh  地址置信度。
    * dateOfIssueTh  泰文签发日期置信度。
    * dateOfIssueEn  英文签发日期置信度。
    * dateOfExpiryTh  泰文有效期置信度。
    * dateOfExpiryEn  英文有效期置信度。
    * serialNumber  序列号置信度。
    * cardNumber  身份证反面卡号置信度。
    * laserNumber  激光码置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'idNumber' => 'getIdNumber',
            'nameTh' => 'getNameTh',
            'firstNameEn' => 'getFirstNameEn',
            'lastNameEn' => 'getLastNameEn',
            'dateOfBirthTh' => 'getDateOfBirthTh',
            'dateOfBirthEn' => 'getDateOfBirthEn',
            'religionTh' => 'getReligionTh',
            'addressTh' => 'getAddressTh',
            'dateOfIssueTh' => 'getDateOfIssueTh',
            'dateOfIssueEn' => 'getDateOfIssueEn',
            'dateOfExpiryTh' => 'getDateOfExpiryTh',
            'dateOfExpiryEn' => 'getDateOfExpiryEn',
            'serialNumber' => 'getSerialNumber',
            'cardNumber' => 'getCardNumber',
            'laserNumber' => 'getLaserNumber'
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
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['nameTh'] = isset($data['nameTh']) ? $data['nameTh'] : null;
        $this->container['firstNameEn'] = isset($data['firstNameEn']) ? $data['firstNameEn'] : null;
        $this->container['lastNameEn'] = isset($data['lastNameEn']) ? $data['lastNameEn'] : null;
        $this->container['dateOfBirthTh'] = isset($data['dateOfBirthTh']) ? $data['dateOfBirthTh'] : null;
        $this->container['dateOfBirthEn'] = isset($data['dateOfBirthEn']) ? $data['dateOfBirthEn'] : null;
        $this->container['religionTh'] = isset($data['religionTh']) ? $data['religionTh'] : null;
        $this->container['addressTh'] = isset($data['addressTh']) ? $data['addressTh'] : null;
        $this->container['dateOfIssueTh'] = isset($data['dateOfIssueTh']) ? $data['dateOfIssueTh'] : null;
        $this->container['dateOfIssueEn'] = isset($data['dateOfIssueEn']) ? $data['dateOfIssueEn'] : null;
        $this->container['dateOfExpiryTh'] = isset($data['dateOfExpiryTh']) ? $data['dateOfExpiryTh'] : null;
        $this->container['dateOfExpiryEn'] = isset($data['dateOfExpiryEn']) ? $data['dateOfExpiryEn'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['laserNumber'] = isset($data['laserNumber']) ? $data['laserNumber'] : null;
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
    * Gets idNumber
    *  身份证号置信度。
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
    * @param float|null $idNumber 身份证号置信度。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets nameTh
    *  泰文名字置信度。
    *
    * @return float|null
    */
    public function getNameTh()
    {
        return $this->container['nameTh'];
    }

    /**
    * Sets nameTh
    *
    * @param float|null $nameTh 泰文名字置信度。
    *
    * @return $this
    */
    public function setNameTh($nameTh)
    {
        $this->container['nameTh'] = $nameTh;
        return $this;
    }

    /**
    * Gets firstNameEn
    *  英文名字置信度。
    *
    * @return float|null
    */
    public function getFirstNameEn()
    {
        return $this->container['firstNameEn'];
    }

    /**
    * Sets firstNameEn
    *
    * @param float|null $firstNameEn 英文名字置信度。
    *
    * @return $this
    */
    public function setFirstNameEn($firstNameEn)
    {
        $this->container['firstNameEn'] = $firstNameEn;
        return $this;
    }

    /**
    * Gets lastNameEn
    *  英文姓氏置信度。
    *
    * @return float|null
    */
    public function getLastNameEn()
    {
        return $this->container['lastNameEn'];
    }

    /**
    * Sets lastNameEn
    *
    * @param float|null $lastNameEn 英文姓氏置信度。
    *
    * @return $this
    */
    public function setLastNameEn($lastNameEn)
    {
        $this->container['lastNameEn'] = $lastNameEn;
        return $this;
    }

    /**
    * Gets dateOfBirthTh
    *  泰文出生日期置信度。
    *
    * @return float|null
    */
    public function getDateOfBirthTh()
    {
        return $this->container['dateOfBirthTh'];
    }

    /**
    * Sets dateOfBirthTh
    *
    * @param float|null $dateOfBirthTh 泰文出生日期置信度。
    *
    * @return $this
    */
    public function setDateOfBirthTh($dateOfBirthTh)
    {
        $this->container['dateOfBirthTh'] = $dateOfBirthTh;
        return $this;
    }

    /**
    * Gets dateOfBirthEn
    *  英文出生日期置信度。
    *
    * @return float|null
    */
    public function getDateOfBirthEn()
    {
        return $this->container['dateOfBirthEn'];
    }

    /**
    * Sets dateOfBirthEn
    *
    * @param float|null $dateOfBirthEn 英文出生日期置信度。
    *
    * @return $this
    */
    public function setDateOfBirthEn($dateOfBirthEn)
    {
        $this->container['dateOfBirthEn'] = $dateOfBirthEn;
        return $this;
    }

    /**
    * Gets religionTh
    *  宗教置信度。
    *
    * @return float|null
    */
    public function getReligionTh()
    {
        return $this->container['religionTh'];
    }

    /**
    * Sets religionTh
    *
    * @param float|null $religionTh 宗教置信度。
    *
    * @return $this
    */
    public function setReligionTh($religionTh)
    {
        $this->container['religionTh'] = $religionTh;
        return $this;
    }

    /**
    * Gets addressTh
    *  地址置信度。
    *
    * @return float|null
    */
    public function getAddressTh()
    {
        return $this->container['addressTh'];
    }

    /**
    * Sets addressTh
    *
    * @param float|null $addressTh 地址置信度。
    *
    * @return $this
    */
    public function setAddressTh($addressTh)
    {
        $this->container['addressTh'] = $addressTh;
        return $this;
    }

    /**
    * Gets dateOfIssueTh
    *  泰文签发日期置信度。
    *
    * @return float|null
    */
    public function getDateOfIssueTh()
    {
        return $this->container['dateOfIssueTh'];
    }

    /**
    * Sets dateOfIssueTh
    *
    * @param float|null $dateOfIssueTh 泰文签发日期置信度。
    *
    * @return $this
    */
    public function setDateOfIssueTh($dateOfIssueTh)
    {
        $this->container['dateOfIssueTh'] = $dateOfIssueTh;
        return $this;
    }

    /**
    * Gets dateOfIssueEn
    *  英文签发日期置信度。
    *
    * @return float|null
    */
    public function getDateOfIssueEn()
    {
        return $this->container['dateOfIssueEn'];
    }

    /**
    * Sets dateOfIssueEn
    *
    * @param float|null $dateOfIssueEn 英文签发日期置信度。
    *
    * @return $this
    */
    public function setDateOfIssueEn($dateOfIssueEn)
    {
        $this->container['dateOfIssueEn'] = $dateOfIssueEn;
        return $this;
    }

    /**
    * Gets dateOfExpiryTh
    *  泰文有效期置信度。
    *
    * @return float|null
    */
    public function getDateOfExpiryTh()
    {
        return $this->container['dateOfExpiryTh'];
    }

    /**
    * Sets dateOfExpiryTh
    *
    * @param float|null $dateOfExpiryTh 泰文有效期置信度。
    *
    * @return $this
    */
    public function setDateOfExpiryTh($dateOfExpiryTh)
    {
        $this->container['dateOfExpiryTh'] = $dateOfExpiryTh;
        return $this;
    }

    /**
    * Gets dateOfExpiryEn
    *  英文有效期置信度。
    *
    * @return float|null
    */
    public function getDateOfExpiryEn()
    {
        return $this->container['dateOfExpiryEn'];
    }

    /**
    * Sets dateOfExpiryEn
    *
    * @param float|null $dateOfExpiryEn 英文有效期置信度。
    *
    * @return $this
    */
    public function setDateOfExpiryEn($dateOfExpiryEn)
    {
        $this->container['dateOfExpiryEn'] = $dateOfExpiryEn;
        return $this;
    }

    /**
    * Gets serialNumber
    *  序列号置信度。
    *
    * @return float|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param float|null $serialNumber 序列号置信度。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets cardNumber
    *  身份证反面卡号置信度。
    *
    * @return float|null
    */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
    * Sets cardNumber
    *
    * @param float|null $cardNumber 身份证反面卡号置信度。
    *
    * @return $this
    */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;
        return $this;
    }

    /**
    * Gets laserNumber
    *  激光码置信度。
    *
    * @return float|null
    */
    public function getLaserNumber()
    {
        return $this->container['laserNumber'];
    }

    /**
    * Sets laserNumber
    *
    * @param float|null $laserNumber 激光码置信度。
    *
    * @return $this
    */
    public function setLaserNumber($laserNumber)
    {
        $this->container['laserNumber'] = $laserNumber;
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

