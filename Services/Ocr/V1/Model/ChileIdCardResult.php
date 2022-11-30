<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChileIdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChileIdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * surname  姓氏。
    * givenName  名。
    * nationality  国籍。
    * sex  性别。
    * birth  出生日。
    * issueDate  发行日。
    * expiryDate  有效期。
    * documentNumber  文档编号。
    * number  身份证号。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'surname' => 'string[]',
            'givenName' => 'string',
            'nationality' => 'string',
            'sex' => 'string',
            'birth' => 'string',
            'issueDate' => 'string',
            'expiryDate' => 'string',
            'documentNumber' => 'string',
            'number' => 'string',
            'confidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\ChileIdCardConfidence'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * surname  姓氏。
    * givenName  名。
    * nationality  国籍。
    * sex  性别。
    * birth  出生日。
    * issueDate  发行日。
    * expiryDate  有效期。
    * documentNumber  文档编号。
    * number  身份证号。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'surname' => null,
        'givenName' => null,
        'nationality' => null,
        'sex' => null,
        'birth' => null,
        'issueDate' => null,
        'expiryDate' => null,
        'documentNumber' => null,
        'number' => null,
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
    * surname  姓氏。
    * givenName  名。
    * nationality  国籍。
    * sex  性别。
    * birth  出生日。
    * issueDate  发行日。
    * expiryDate  有效期。
    * documentNumber  文档编号。
    * number  身份证号。
    * confidence  confidence
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
            'number' => 'number',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * surname  姓氏。
    * givenName  名。
    * nationality  国籍。
    * sex  性别。
    * birth  出生日。
    * issueDate  发行日。
    * expiryDate  有效期。
    * documentNumber  文档编号。
    * number  身份证号。
    * confidence  confidence
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
            'number' => 'setNumber',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * surname  姓氏。
    * givenName  名。
    * nationality  国籍。
    * sex  性别。
    * birth  出生日。
    * issueDate  发行日。
    * expiryDate  有效期。
    * documentNumber  文档编号。
    * number  身份证号。
    * confidence  confidence
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
            'number' => 'getNumber',
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
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['givenName'] = isset($data['givenName']) ? $data['givenName'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['documentNumber'] = isset($data['documentNumber']) ? $data['documentNumber'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
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
    * Gets surname
    *  姓氏。
    *
    * @return string[]|null
    */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
    * Sets surname
    *
    * @param string[]|null $surname 姓氏。
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
    *  名。
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
    * @param string|null $givenName 名。
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
    *  国籍。
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
    * @param string|null $nationality 国籍。
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
    *  性别。
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
    * @param string|null $sex 性别。
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
    *  出生日。
    *
    * @return string|null
    */
    public function getBirth()
    {
        return $this->container['birth'];
    }

    /**
    * Sets birth
    *
    * @param string|null $birth 出生日。
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
    *  发行日。
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
    * @param string|null $issueDate 发行日。
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
    *  有效期。
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
    * @param string|null $expiryDate 有效期。
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
    *  文档编号。
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
    * @param string|null $documentNumber 文档编号。
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
    *  身份证号。
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
    * @param string|null $number 身份证号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets confidence
    *  confidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ChileIdCardConfidence|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ChileIdCardConfidence|null $confidence confidence
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

