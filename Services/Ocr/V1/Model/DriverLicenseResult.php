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
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * accumulatedScores  累积记分。
    * status  状态。
    * generationDate  生成时间。
    * currentTime  当前时间。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
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
            'record' => 'string',
            'accumulatedScores' => 'string',
            'status' => 'string[]',
            'generationDate' => 'string',
            'currentTime' => 'string',
            'textLocation' => 'object',
            'front' => '\HuaweiCloud\SDK\Ocr\V1\Model\DriverLicenseFront',
            'back' => '\HuaweiCloud\SDK\Ocr\V1\Model\DriverLicenseBack'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * accumulatedScores  累积记分。
    * status  状态。
    * generationDate  生成时间。
    * currentTime  当前时间。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
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
        'record' => null,
        'accumulatedScores' => null,
        'status' => null,
        'generationDate' => null,
        'currentTime' => null,
        'textLocation' => null,
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
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * accumulatedScores  累积记分。
    * status  状态。
    * generationDate  生成时间。
    * currentTime  当前时间。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
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
            'record' => 'record',
            'accumulatedScores' => 'accumulated_scores',
            'status' => 'status',
            'generationDate' => 'generation_date',
            'currentTime' => 'current_time',
            'textLocation' => 'text_location',
            'front' => 'front',
            'back' => 'back'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * accumulatedScores  累积记分。
    * status  状态。
    * generationDate  生成时间。
    * currentTime  当前时间。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
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
            'record' => 'setRecord',
            'accumulatedScores' => 'setAccumulatedScores',
            'status' => 'setStatus',
            'generationDate' => 'setGenerationDate',
            'currentTime' => 'setCurrentTime',
            'textLocation' => 'setTextLocation',
            'front' => 'setFront',
            'back' => 'setBack'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * accumulatedScores  累积记分。
    * status  状态。
    * generationDate  生成时间。
    * currentTime  当前时间。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
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
            'record' => 'getRecord',
            'accumulatedScores' => 'getAccumulatedScores',
            'status' => 'getStatus',
            'generationDate' => 'getGenerationDate',
            'currentTime' => 'getCurrentTime',
            'textLocation' => 'getTextLocation',
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
        $this->container['accumulatedScores'] = isset($data['accumulatedScores']) ? $data['accumulatedScores'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['generationDate'] = isset($data['generationDate']) ? $data['generationDate'] : null;
        $this->container['currentTime'] = isset($data['currentTime']) ? $data['currentTime'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
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
    *  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * @param string|null $type 驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * Gets accumulatedScores
    *  累积记分。
    *
    * @return string|null
    */
    public function getAccumulatedScores()
    {
        return $this->container['accumulatedScores'];
    }

    /**
    * Sets accumulatedScores
    *
    * @param string|null $accumulatedScores 累积记分。
    *
    * @return $this
    */
    public function setAccumulatedScores($accumulatedScores)
    {
        $this->container['accumulatedScores'] = $accumulatedScores;
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
    * Gets generationDate
    *  生成时间。
    *
    * @return string|null
    */
    public function getGenerationDate()
    {
        return $this->container['generationDate'];
    }

    /**
    * Sets generationDate
    *
    * @param string|null $generationDate 生成时间。
    *
    * @return $this
    */
    public function setGenerationDate($generationDate)
    {
        $this->container['generationDate'] = $generationDate;
        return $this;
    }

    /**
    * Gets currentTime
    *  当前时间。
    *
    * @return string|null
    */
    public function getCurrentTime()
    {
        return $this->container['currentTime'];
    }

    /**
    * Sets currentTime
    *
    * @param string|null $currentTime 当前时间。
    *
    * @return $this
    */
    public function setCurrentTime($currentTime)
    {
        $this->container['currentTime'] = $currentTime;
        return $this;
    }

    /**
    * Gets textLocation
    *  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
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
    * @param object|null $textLocation 对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Gets front
    *  front
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\DriverLicenseFront|null
    */
    public function getFront()
    {
        return $this->container['front'];
    }

    /**
    * Sets front
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\DriverLicenseFront|null $front front
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
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\DriverLicenseBack|null
    */
    public function getBack()
    {
        return $this->container['back'];
    }

    /**
    * Sets back
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\DriverLicenseBack|null $back back
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

