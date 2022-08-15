<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HkIdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HkIdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  中文姓名。
    * nameEn  英文姓名。
    * sex  性别。  男： value值为：M 女： value值为：F
    * birthDate  出生日期。
    * number  身份证号。
    * symbols  证件符号。
    * nameTelegraphCode  中文姓名对应电码。
    * permanent  是否永久性居民身份证。  永久：value值为true 非永久：value值为false
    * initialIssueDate  首次领用日期。
    * issueDate  签发日期。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * portraitImage  头像的base64编码，默认返回尺寸较大的头像。 当输入参数“return_portrait_image”为true时，才返回该参数。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'nameEn' => 'string',
            'sex' => 'string',
            'birthDate' => 'string',
            'number' => 'string',
            'symbols' => 'string',
            'nameTelegraphCode' => 'string',
            'permanent' => 'bool',
            'initialIssueDate' => 'string',
            'issueDate' => 'string',
            'portraitLocation' => 'int[][]',
            'portraitImage' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  中文姓名。
    * nameEn  英文姓名。
    * sex  性别。  男： value值为：M 女： value值为：F
    * birthDate  出生日期。
    * number  身份证号。
    * symbols  证件符号。
    * nameTelegraphCode  中文姓名对应电码。
    * permanent  是否永久性居民身份证。  永久：value值为true 非永久：value值为false
    * initialIssueDate  首次领用日期。
    * issueDate  签发日期。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * portraitImage  头像的base64编码，默认返回尺寸较大的头像。 当输入参数“return_portrait_image”为true时，才返回该参数。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'nameEn' => null,
        'sex' => null,
        'birthDate' => null,
        'number' => null,
        'symbols' => null,
        'nameTelegraphCode' => null,
        'permanent' => null,
        'initialIssueDate' => null,
        'issueDate' => null,
        'portraitLocation' => 'int32',
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
    * name  中文姓名。
    * nameEn  英文姓名。
    * sex  性别。  男： value值为：M 女： value值为：F
    * birthDate  出生日期。
    * number  身份证号。
    * symbols  证件符号。
    * nameTelegraphCode  中文姓名对应电码。
    * permanent  是否永久性居民身份证。  永久：value值为true 非永久：value值为false
    * initialIssueDate  首次领用日期。
    * issueDate  签发日期。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * portraitImage  头像的base64编码，默认返回尺寸较大的头像。 当输入参数“return_portrait_image”为true时，才返回该参数。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'nameEn' => 'name_en',
            'sex' => 'sex',
            'birthDate' => 'birth_date',
            'number' => 'number',
            'symbols' => 'symbols',
            'nameTelegraphCode' => 'name_telegraph_code',
            'permanent' => 'permanent',
            'initialIssueDate' => 'initial_issue_date',
            'issueDate' => 'issue_date',
            'portraitLocation' => 'portrait_location',
            'portraitImage' => 'portrait_image',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  中文姓名。
    * nameEn  英文姓名。
    * sex  性别。  男： value值为：M 女： value值为：F
    * birthDate  出生日期。
    * number  身份证号。
    * symbols  证件符号。
    * nameTelegraphCode  中文姓名对应电码。
    * permanent  是否永久性居民身份证。  永久：value值为true 非永久：value值为false
    * initialIssueDate  首次领用日期。
    * issueDate  签发日期。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * portraitImage  头像的base64编码，默认返回尺寸较大的头像。 当输入参数“return_portrait_image”为true时，才返回该参数。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'sex' => 'setSex',
            'birthDate' => 'setBirthDate',
            'number' => 'setNumber',
            'symbols' => 'setSymbols',
            'nameTelegraphCode' => 'setNameTelegraphCode',
            'permanent' => 'setPermanent',
            'initialIssueDate' => 'setInitialIssueDate',
            'issueDate' => 'setIssueDate',
            'portraitLocation' => 'setPortraitLocation',
            'portraitImage' => 'setPortraitImage',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  中文姓名。
    * nameEn  英文姓名。
    * sex  性别。  男： value值为：M 女： value值为：F
    * birthDate  出生日期。
    * number  身份证号。
    * symbols  证件符号。
    * nameTelegraphCode  中文姓名对应电码。
    * permanent  是否永久性居民身份证。  永久：value值为true 非永久：value值为false
    * initialIssueDate  首次领用日期。
    * issueDate  签发日期。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * portraitImage  头像的base64编码，默认返回尺寸较大的头像。 当输入参数“return_portrait_image”为true时，才返回该参数。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'sex' => 'getSex',
            'birthDate' => 'getBirthDate',
            'number' => 'getNumber',
            'symbols' => 'getSymbols',
            'nameTelegraphCode' => 'getNameTelegraphCode',
            'permanent' => 'getPermanent',
            'initialIssueDate' => 'getInitialIssueDate',
            'issueDate' => 'getIssueDate',
            'portraitLocation' => 'getPortraitLocation',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['symbols'] = isset($data['symbols']) ? $data['symbols'] : null;
        $this->container['nameTelegraphCode'] = isset($data['nameTelegraphCode']) ? $data['nameTelegraphCode'] : null;
        $this->container['permanent'] = isset($data['permanent']) ? $data['permanent'] : null;
        $this->container['initialIssueDate'] = isset($data['initialIssueDate']) ? $data['initialIssueDate'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
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
    * Gets name
    *  中文姓名。
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
    * @param string|null $name 中文姓名。
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
    *  英文姓名。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 英文姓名。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets sex
    *  性别。  男： value值为：M 女： value值为：F
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
    * @param string|null $sex 性别。  男： value值为：M 女： value值为：F
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
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
    * Gets symbols
    *  证件符号。
    *
    * @return string|null
    */
    public function getSymbols()
    {
        return $this->container['symbols'];
    }

    /**
    * Sets symbols
    *
    * @param string|null $symbols 证件符号。
    *
    * @return $this
    */
    public function setSymbols($symbols)
    {
        $this->container['symbols'] = $symbols;
        return $this;
    }

    /**
    * Gets nameTelegraphCode
    *  中文姓名对应电码。
    *
    * @return string|null
    */
    public function getNameTelegraphCode()
    {
        return $this->container['nameTelegraphCode'];
    }

    /**
    * Sets nameTelegraphCode
    *
    * @param string|null $nameTelegraphCode 中文姓名对应电码。
    *
    * @return $this
    */
    public function setNameTelegraphCode($nameTelegraphCode)
    {
        $this->container['nameTelegraphCode'] = $nameTelegraphCode;
        return $this;
    }

    /**
    * Gets permanent
    *  是否永久性居民身份证。  永久：value值为true 非永久：value值为false
    *
    * @return bool|null
    */
    public function getPermanent()
    {
        return $this->container['permanent'];
    }

    /**
    * Sets permanent
    *
    * @param bool|null $permanent 是否永久性居民身份证。  永久：value值为true 非永久：value值为false
    *
    * @return $this
    */
    public function setPermanent($permanent)
    {
        $this->container['permanent'] = $permanent;
        return $this;
    }

    /**
    * Gets initialIssueDate
    *  首次领用日期。
    *
    * @return string|null
    */
    public function getInitialIssueDate()
    {
        return $this->container['initialIssueDate'];
    }

    /**
    * Sets initialIssueDate
    *
    * @param string|null $initialIssueDate 首次领用日期。
    *
    * @return $this
    */
    public function setInitialIssueDate($initialIssueDate)
    {
        $this->container['initialIssueDate'] = $initialIssueDate;
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
    * Gets portraitLocation
    *  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getPortraitLocation()
    {
        return $this->container['portraitLocation'];
    }

    /**
    * Sets portraitLocation
    *
    * @param int[][]|null $portraitLocation 头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setPortraitLocation($portraitLocation)
    {
        $this->container['portraitLocation'] = $portraitLocation;
        return $this;
    }

    /**
    * Gets portraitImage
    *  头像的base64编码，默认返回尺寸较大的头像。 当输入参数“return_portrait_image”为true时，才返回该参数。
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
    * @param string|null $portraitImage 头像的base64编码，默认返回尺寸较大的头像。 当输入参数“return_portrait_image”为true时，才返回该参数。
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
    *  各个字段的置信度。
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
    * @param object|null $confidence 各个字段的置信度。
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

