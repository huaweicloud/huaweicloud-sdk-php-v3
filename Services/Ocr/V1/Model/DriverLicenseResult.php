<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DriverLicenseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DriverLicenseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * number  驾驶证号。
    * name  姓名。
    * sex  性别。
    * nationality  国籍。
    * address  住址。
    * birth  出生日期。
    * issueDate  初次领证日期。
    * class  准驾类型。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * issuingAuthority  发证机关。
    * fileNumber  档案编号。
    * record  记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'number' => 'string',
            'name' => 'string',
            'sex' => 'string',
            'nationality' => 'string',
            'address' => 'string',
            'birth' => 'string',
            'issueDate' => 'string',
            'class' => 'string',
            'validFrom' => 'string',
            'validTo' => 'string',
            'issuingAuthority' => 'string',
            'fileNumber' => 'string',
            'record' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * number  驾驶证号。
    * name  姓名。
    * sex  性别。
    * nationality  国籍。
    * address  住址。
    * birth  出生日期。
    * issueDate  初次领证日期。
    * class  准驾类型。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * issuingAuthority  发证机关。
    * fileNumber  档案编号。
    * record  记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'number' => null,
        'name' => null,
        'sex' => null,
        'nationality' => null,
        'address' => null,
        'birth' => null,
        'issueDate' => null,
        'class' => null,
        'validFrom' => null,
        'validTo' => null,
        'issuingAuthority' => null,
        'fileNumber' => null,
        'record' => null
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
    * number  驾驶证号。
    * name  姓名。
    * sex  性别。
    * nationality  国籍。
    * address  住址。
    * birth  出生日期。
    * issueDate  初次领证日期。
    * class  准驾类型。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * issuingAuthority  发证机关。
    * fileNumber  档案编号。
    * record  记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'number' => 'number',
            'name' => 'name',
            'sex' => 'sex',
            'nationality' => 'nationality',
            'address' => 'address',
            'birth' => 'birth',
            'issueDate' => 'issue_date',
            'class' => 'class',
            'validFrom' => 'valid_from',
            'validTo' => 'valid_to',
            'issuingAuthority' => 'issuing_authority',
            'fileNumber' => 'file_number',
            'record' => 'record'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * number  驾驶证号。
    * name  姓名。
    * sex  性别。
    * nationality  国籍。
    * address  住址。
    * birth  出生日期。
    * issueDate  初次领证日期。
    * class  准驾类型。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * issuingAuthority  发证机关。
    * fileNumber  档案编号。
    * record  记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'number' => 'setNumber',
            'name' => 'setName',
            'sex' => 'setSex',
            'nationality' => 'setNationality',
            'address' => 'setAddress',
            'birth' => 'setBirth',
            'issueDate' => 'setIssueDate',
            'class' => 'setClass',
            'validFrom' => 'setValidFrom',
            'validTo' => 'setValidTo',
            'issuingAuthority' => 'setIssuingAuthority',
            'fileNumber' => 'setFileNumber',
            'record' => 'setRecord'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * number  驾驶证号。
    * name  姓名。
    * sex  性别。
    * nationality  国籍。
    * address  住址。
    * birth  出生日期。
    * issueDate  初次领证日期。
    * class  准驾类型。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * issuingAuthority  发证机关。
    * fileNumber  档案编号。
    * record  记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'number' => 'getNumber',
            'name' => 'getName',
            'sex' => 'getSex',
            'nationality' => 'getNationality',
            'address' => 'getAddress',
            'birth' => 'getBirth',
            'issueDate' => 'getIssueDate',
            'class' => 'getClass',
            'validFrom' => 'getValidFrom',
            'validTo' => 'getValidTo',
            'issuingAuthority' => 'getIssuingAuthority',
            'fileNumber' => 'getFileNumber',
            'record' => 'getRecord'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['fileNumber'] = isset($data['fileNumber']) ? $data['fileNumber'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
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
    *  驾驶证号。
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
    * @param string|null $number 驾驶证号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets name
    *  姓名。
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
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets birth
    *  出生日期。
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
    * @param string|null $birth 出生日期。
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
    *  初次领证日期。
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
    * @param string|null $issueDate 初次领证日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets class
    *  准驾类型。
    *
    * @return string|null
    */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
    * Sets class
    *
    * @param string|null $class 准驾类型。
    *
    * @return $this
    */
    public function setClass($class)
    {
        $this->container['class'] = $class;
        return $this;
    }

    /**
    * Gets validFrom
    *  有效起始日期。
    *
    * @return string|null
    */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
    * Sets validFrom
    *
    * @param string|null $validFrom 有效起始日期。
    *
    * @return $this
    */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;
        return $this;
    }

    /**
    * Gets validTo
    *  有效结束日期。
    *
    * @return string|null
    */
    public function getValidTo()
    {
        return $this->container['validTo'];
    }

    /**
    * Sets validTo
    *
    * @param string|null $validTo 有效结束日期。
    *
    * @return $this
    */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;
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
    * Gets fileNumber
    *  档案编号。
    *
    * @return string|null
    */
    public function getFileNumber()
    {
        return $this->container['fileNumber'];
    }

    /**
    * Sets fileNumber
    *
    * @param string|null $fileNumber 档案编号。
    *
    * @return $this
    */
    public function setFileNumber($fileNumber)
    {
        $this->container['fileNumber'] = $fileNumber;
        return $this;
    }

    /**
    * Gets record
    *  记录。
    *
    * @return string|null
    */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
    * Sets record
    *
    * @param string|null $record 记录。
    *
    * @return $this
    */
    public function setRecord($record)
    {
        $this->container['record'] = $record;
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

