<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChileIdCardConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChileIdCardConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * surname  姓氏置信度。
    * givenName  名置信度。
    * nationality  国籍置信度。
    * sex  性别置信度。
    * birth  出生日置信度。
    * issueDate  发行日置信度。
    * expiryDate  有效期置信度。
    * documentNumber  文档编号置信度。
    * number  身份证号置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'surname' => 'float',
            'givenName' => 'float',
            'nationality' => 'float',
            'sex' => 'float',
            'birth' => 'float',
            'issueDate' => 'float',
            'expiryDate' => 'float',
            'documentNumber' => 'float',
            'number' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * surname  姓氏置信度。
    * givenName  名置信度。
    * nationality  国籍置信度。
    * sex  性别置信度。
    * birth  出生日置信度。
    * issueDate  发行日置信度。
    * expiryDate  有效期置信度。
    * documentNumber  文档编号置信度。
    * number  身份证号置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'surname' => 'float',
        'givenName' => 'float',
        'nationality' => 'float',
        'sex' => 'float',
        'birth' => 'float',
        'issueDate' => 'float',
        'expiryDate' => 'float',
        'documentNumber' => 'float',
        'number' => 'float'
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
    * surname  姓氏置信度。
    * givenName  名置信度。
    * nationality  国籍置信度。
    * sex  性别置信度。
    * birth  出生日置信度。
    * issueDate  发行日置信度。
    * expiryDate  有效期置信度。
    * documentNumber  文档编号置信度。
    * number  身份证号置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'surname' => 'surname',
            'givenName' => 'given_name',
            'nationality' => 'nationality',
            'sex' => 'sex',
            'birth' => 'birth',
            'issueDate' => 'issue_date',
            'expiryDate' => 'expiry_date',
            'documentNumber' => 'document_number',
            'number' => 'number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * surname  姓氏置信度。
    * givenName  名置信度。
    * nationality  国籍置信度。
    * sex  性别置信度。
    * birth  出生日置信度。
    * issueDate  发行日置信度。
    * expiryDate  有效期置信度。
    * documentNumber  文档编号置信度。
    * number  身份证号置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'surname' => 'setSurname',
            'givenName' => 'setGivenName',
            'nationality' => 'setNationality',
            'sex' => 'setSex',
            'birth' => 'setBirth',
            'issueDate' => 'setIssueDate',
            'expiryDate' => 'setExpiryDate',
            'documentNumber' => 'setDocumentNumber',
            'number' => 'setNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * surname  姓氏置信度。
    * givenName  名置信度。
    * nationality  国籍置信度。
    * sex  性别置信度。
    * birth  出生日置信度。
    * issueDate  发行日置信度。
    * expiryDate  有效期置信度。
    * documentNumber  文档编号置信度。
    * number  身份证号置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'surname' => 'getSurname',
            'givenName' => 'getGivenName',
            'nationality' => 'getNationality',
            'sex' => 'getSex',
            'birth' => 'getBirth',
            'issueDate' => 'getIssueDate',
            'expiryDate' => 'getExpiryDate',
            'documentNumber' => 'getDocumentNumber',
            'number' => 'getNumber'
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
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['givenName'] = isset($data['givenName']) ? $data['givenName'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['documentNumber'] = isset($data['documentNumber']) ? $data['documentNumber'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
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
    * Gets surname
    *  姓氏置信度。
    *
    * @return float|null
    */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
    * Sets surname
    *
    * @param float|null $surname 姓氏置信度。
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
    *  名置信度。
    *
    * @return float|null
    */
    public function getGivenName()
    {
        return $this->container['givenName'];
    }

    /**
    * Sets givenName
    *
    * @param float|null $givenName 名置信度。
    *
    * @return $this
    */
    public function setGivenName($givenName)
    {
        $this->container['givenName'] = $givenName;
        return $this;
    }

    /**
    * Gets nationality
    *  国籍置信度。
    *
    * @return float|null
    */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
    * Sets nationality
    *
    * @param float|null $nationality 国籍置信度。
    *
    * @return $this
    */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;
        return $this;
    }

    /**
    * Gets sex
    *  性别置信度。
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
    * @param float|null $sex 性别置信度。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets birth
    *  出生日置信度。
    *
    * @return float|null
    */
    public function getBirth()
    {
        return $this->container['birth'];
    }

    /**
    * Sets birth
    *
    * @param float|null $birth 出生日置信度。
    *
    * @return $this
    */
    public function setBirth($birth)
    {
        $this->container['birth'] = $birth;
        return $this;
    }

    /**
    * Gets issueDate
    *  发行日置信度。
    *
    * @return float|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param float|null $issueDate 发行日置信度。
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
    *  有效期置信度。
    *
    * @return float|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param float|null $expiryDate 有效期置信度。
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
    *  文档编号置信度。
    *
    * @return float|null
    */
    public function getDocumentNumber()
    {
        return $this->container['documentNumber'];
    }

    /**
    * Sets documentNumber
    *
    * @param float|null $documentNumber 文档编号置信度。
    *
    * @return $this
    */
    public function setDocumentNumber($documentNumber)
    {
        $this->container['documentNumber'] = $documentNumber;
        return $this;
    }

    /**
    * Gets number
    *  身份证号置信度。
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
    * @param float|null $number 身份证号置信度。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
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

