<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColombiaIdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColombiaIdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * side  证件图片正反面信息。可选值包括： - front: 证件图片正面 - back:  证件图片反面
    * number  卡证编号。当响应字段\"side\"为front时，返回此字段。
    * name  名。当响应字段\"side\"为front时，返回此字段。
    * lastName  姓。当响应字段\"side\"为front时，返回此字段。
    * birthDate  出生日期。
    * birthPlace  出生地。
    * gender  性别。
    * bloodType  血型。
    * issueDate  签发日期。
    * issueAuthority  签发地区。
    * height  身高。
    * citizenCode1  公民编码一。
    * citizenCode2  公民编码二。
    * citizenCode3  公民编码三。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'side' => 'string',
            'number' => 'string',
            'name' => 'string',
            'lastName' => 'string',
            'birthDate' => 'string',
            'birthPlace' => 'string',
            'gender' => 'string',
            'bloodType' => 'string',
            'issueDate' => 'string',
            'issueAuthority' => 'string',
            'height' => 'string',
            'citizenCode1' => 'string',
            'citizenCode2' => 'string',
            'citizenCode3' => 'string',
            'confidence' => 'map[string,float]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * side  证件图片正反面信息。可选值包括： - front: 证件图片正面 - back:  证件图片反面
    * number  卡证编号。当响应字段\"side\"为front时，返回此字段。
    * name  名。当响应字段\"side\"为front时，返回此字段。
    * lastName  姓。当响应字段\"side\"为front时，返回此字段。
    * birthDate  出生日期。
    * birthPlace  出生地。
    * gender  性别。
    * bloodType  血型。
    * issueDate  签发日期。
    * issueAuthority  签发地区。
    * height  身高。
    * citizenCode1  公民编码一。
    * citizenCode2  公民编码二。
    * citizenCode3  公民编码三。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'side' => null,
        'number' => null,
        'name' => null,
        'lastName' => null,
        'birthDate' => null,
        'birthPlace' => null,
        'gender' => null,
        'bloodType' => null,
        'issueDate' => null,
        'issueAuthority' => null,
        'height' => null,
        'citizenCode1' => null,
        'citizenCode2' => null,
        'citizenCode3' => null,
        'confidence' => 'float'
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
    * side  证件图片正反面信息。可选值包括： - front: 证件图片正面 - back:  证件图片反面
    * number  卡证编号。当响应字段\"side\"为front时，返回此字段。
    * name  名。当响应字段\"side\"为front时，返回此字段。
    * lastName  姓。当响应字段\"side\"为front时，返回此字段。
    * birthDate  出生日期。
    * birthPlace  出生地。
    * gender  性别。
    * bloodType  血型。
    * issueDate  签发日期。
    * issueAuthority  签发地区。
    * height  身高。
    * citizenCode1  公民编码一。
    * citizenCode2  公民编码二。
    * citizenCode3  公民编码三。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'side' => 'side',
            'number' => 'number',
            'name' => 'name',
            'lastName' => 'last_name',
            'birthDate' => 'birth_date',
            'birthPlace' => 'birth_place',
            'gender' => 'gender',
            'bloodType' => 'blood_type',
            'issueDate' => 'issue_date',
            'issueAuthority' => 'issue_authority',
            'height' => 'height',
            'citizenCode1' => 'citizen_code1',
            'citizenCode2' => 'citizen_code2',
            'citizenCode3' => 'citizen_code3',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * side  证件图片正反面信息。可选值包括： - front: 证件图片正面 - back:  证件图片反面
    * number  卡证编号。当响应字段\"side\"为front时，返回此字段。
    * name  名。当响应字段\"side\"为front时，返回此字段。
    * lastName  姓。当响应字段\"side\"为front时，返回此字段。
    * birthDate  出生日期。
    * birthPlace  出生地。
    * gender  性别。
    * bloodType  血型。
    * issueDate  签发日期。
    * issueAuthority  签发地区。
    * height  身高。
    * citizenCode1  公民编码一。
    * citizenCode2  公民编码二。
    * citizenCode3  公民编码三。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'side' => 'setSide',
            'number' => 'setNumber',
            'name' => 'setName',
            'lastName' => 'setLastName',
            'birthDate' => 'setBirthDate',
            'birthPlace' => 'setBirthPlace',
            'gender' => 'setGender',
            'bloodType' => 'setBloodType',
            'issueDate' => 'setIssueDate',
            'issueAuthority' => 'setIssueAuthority',
            'height' => 'setHeight',
            'citizenCode1' => 'setCitizenCode1',
            'citizenCode2' => 'setCitizenCode2',
            'citizenCode3' => 'setCitizenCode3',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * side  证件图片正反面信息。可选值包括： - front: 证件图片正面 - back:  证件图片反面
    * number  卡证编号。当响应字段\"side\"为front时，返回此字段。
    * name  名。当响应字段\"side\"为front时，返回此字段。
    * lastName  姓。当响应字段\"side\"为front时，返回此字段。
    * birthDate  出生日期。
    * birthPlace  出生地。
    * gender  性别。
    * bloodType  血型。
    * issueDate  签发日期。
    * issueAuthority  签发地区。
    * height  身高。
    * citizenCode1  公民编码一。
    * citizenCode2  公民编码二。
    * citizenCode3  公民编码三。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'side' => 'getSide',
            'number' => 'getNumber',
            'name' => 'getName',
            'lastName' => 'getLastName',
            'birthDate' => 'getBirthDate',
            'birthPlace' => 'getBirthPlace',
            'gender' => 'getGender',
            'bloodType' => 'getBloodType',
            'issueDate' => 'getIssueDate',
            'issueAuthority' => 'getIssueAuthority',
            'height' => 'getHeight',
            'citizenCode1' => 'getCitizenCode1',
            'citizenCode2' => 'getCitizenCode2',
            'citizenCode3' => 'getCitizenCode3',
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
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['birthPlace'] = isset($data['birthPlace']) ? $data['birthPlace'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['bloodType'] = isset($data['bloodType']) ? $data['bloodType'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['issueAuthority'] = isset($data['issueAuthority']) ? $data['issueAuthority'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['citizenCode1'] = isset($data['citizenCode1']) ? $data['citizenCode1'] : null;
        $this->container['citizenCode2'] = isset($data['citizenCode2']) ? $data['citizenCode2'] : null;
        $this->container['citizenCode3'] = isset($data['citizenCode3']) ? $data['citizenCode3'] : null;
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
    * Gets side
    *  证件图片正反面信息。可选值包括： - front: 证件图片正面 - back:  证件图片反面
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
    * @param string|null $side 证件图片正反面信息。可选值包括： - front: 证件图片正面 - back:  证件图片反面
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
        return $this;
    }

    /**
    * Gets number
    *  卡证编号。当响应字段\"side\"为front时，返回此字段。
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
    * @param string|null $number 卡证编号。当响应字段\"side\"为front时，返回此字段。
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
    *  名。当响应字段\"side\"为front时，返回此字段。
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
    * @param string|null $name 名。当响应字段\"side\"为front时，返回此字段。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets lastName
    *  姓。当响应字段\"side\"为front时，返回此字段。
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
    * @param string|null $lastName 姓。当响应字段\"side\"为front时，返回此字段。
    *
    * @return $this
    */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;
        return $this;
    }

    /**
    * Gets birthDate
    *  出生日期。
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
    * @param string|null $birthDate 出生日期。
    *
    * @return $this
    */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;
        return $this;
    }

    /**
    * Gets birthPlace
    *  出生地。
    *
    * @return string|null
    */
    public function getBirthPlace()
    {
        return $this->container['birthPlace'];
    }

    /**
    * Sets birthPlace
    *
    * @param string|null $birthPlace 出生地。
    *
    * @return $this
    */
    public function setBirthPlace($birthPlace)
    {
        $this->container['birthPlace'] = $birthPlace;
        return $this;
    }

    /**
    * Gets gender
    *  性别。
    *
    * @return string|null
    */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
    * Sets gender
    *
    * @param string|null $gender 性别。
    *
    * @return $this
    */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;
        return $this;
    }

    /**
    * Gets bloodType
    *  血型。
    *
    * @return string|null
    */
    public function getBloodType()
    {
        return $this->container['bloodType'];
    }

    /**
    * Sets bloodType
    *
    * @param string|null $bloodType 血型。
    *
    * @return $this
    */
    public function setBloodType($bloodType)
    {
        $this->container['bloodType'] = $bloodType;
        return $this;
    }

    /**
    * Gets issueDate
    *  签发日期。
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
    * @param string|null $issueDate 签发日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets issueAuthority
    *  签发地区。
    *
    * @return string|null
    */
    public function getIssueAuthority()
    {
        return $this->container['issueAuthority'];
    }

    /**
    * Sets issueAuthority
    *
    * @param string|null $issueAuthority 签发地区。
    *
    * @return $this
    */
    public function setIssueAuthority($issueAuthority)
    {
        $this->container['issueAuthority'] = $issueAuthority;
        return $this;
    }

    /**
    * Gets height
    *  身高。
    *
    * @return string|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param string|null $height 身高。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets citizenCode1
    *  公民编码一。
    *
    * @return string|null
    */
    public function getCitizenCode1()
    {
        return $this->container['citizenCode1'];
    }

    /**
    * Sets citizenCode1
    *
    * @param string|null $citizenCode1 公民编码一。
    *
    * @return $this
    */
    public function setCitizenCode1($citizenCode1)
    {
        $this->container['citizenCode1'] = $citizenCode1;
        return $this;
    }

    /**
    * Gets citizenCode2
    *  公民编码二。
    *
    * @return string|null
    */
    public function getCitizenCode2()
    {
        return $this->container['citizenCode2'];
    }

    /**
    * Sets citizenCode2
    *
    * @param string|null $citizenCode2 公民编码二。
    *
    * @return $this
    */
    public function setCitizenCode2($citizenCode2)
    {
        $this->container['citizenCode2'] = $citizenCode2;
        return $this;
    }

    /**
    * Gets citizenCode3
    *  公民编码三。
    *
    * @return string|null
    */
    public function getCitizenCode3()
    {
        return $this->container['citizenCode3'];
    }

    /**
    * Sets citizenCode3
    *
    * @param string|null $citizenCode3 公民编码三。
    *
    * @return $this
    */
    public function setCitizenCode3($citizenCode3)
    {
        $this->container['citizenCode3'] = $citizenCode3;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return map[string,float]|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param map[string,float]|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
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

