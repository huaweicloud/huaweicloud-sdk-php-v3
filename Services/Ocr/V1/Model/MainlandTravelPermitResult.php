<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MainlandTravelPermitResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MainlandTravelPermitResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  中文姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * validPeriod  有效期限。
    * issuingAuthority  签发机关。
    * number  证件号。
    * issuePlace  签发地点。
    * issueTimes  签发次数。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码。
    * machineCode1  机读码第一行。
    * machineCode2  机读码第二行。
    * machineCode3  机读码第三行。
    * type  证件类别。可选值包括： - “港澳居民来往内地通行证” - “台湾居民来往大陆通行证”
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'nameEn' => 'string',
            'birthDate' => 'string',
            'sex' => 'string',
            'validPeriod' => 'string',
            'issuingAuthority' => 'string',
            'number' => 'string',
            'issuePlace' => 'string',
            'issueTimes' => 'string',
            'idName' => 'string',
            'idNumber' => 'string',
            'machineCode1' => 'string',
            'machineCode2' => 'string',
            'machineCode3' => 'string',
            'type' => 'string',
            'side' => 'string',
            'portraitImage' => 'string',
            'portraitLocation' => 'int[][]',
            'confidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\MainlandTravelPermitConfidence'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  中文姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * validPeriod  有效期限。
    * issuingAuthority  签发机关。
    * number  证件号。
    * issuePlace  签发地点。
    * issueTimes  签发次数。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码。
    * machineCode1  机读码第一行。
    * machineCode2  机读码第二行。
    * machineCode3  机读码第三行。
    * type  证件类别。可选值包括： - “港澳居民来往内地通行证” - “台湾居民来往大陆通行证”
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'nameEn' => null,
        'birthDate' => null,
        'sex' => null,
        'validPeriod' => null,
        'issuingAuthority' => null,
        'number' => null,
        'issuePlace' => null,
        'issueTimes' => null,
        'idName' => null,
        'idNumber' => null,
        'machineCode1' => null,
        'machineCode2' => null,
        'machineCode3' => null,
        'type' => null,
        'side' => null,
        'portraitImage' => null,
        'portraitLocation' => 'int32',
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
    * birthDate  出生日期。
    * sex  性别。
    * validPeriod  有效期限。
    * issuingAuthority  签发机关。
    * number  证件号。
    * issuePlace  签发地点。
    * issueTimes  签发次数。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码。
    * machineCode1  机读码第一行。
    * machineCode2  机读码第二行。
    * machineCode3  机读码第三行。
    * type  证件类别。可选值包括： - “港澳居民来往内地通行证” - “台湾居民来往大陆通行证”
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'nameEn' => 'name_en',
            'birthDate' => 'birth_date',
            'sex' => 'sex',
            'validPeriod' => 'valid_period',
            'issuingAuthority' => 'issuing_authority',
            'number' => 'number',
            'issuePlace' => 'issue_place',
            'issueTimes' => 'issue_times',
            'idName' => 'id_name',
            'idNumber' => 'id_number',
            'machineCode1' => 'machine_code1',
            'machineCode2' => 'machine_code2',
            'machineCode3' => 'machine_code3',
            'type' => 'type',
            'side' => 'side',
            'portraitImage' => 'portrait_image',
            'portraitLocation' => 'portrait_location',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  中文姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * validPeriod  有效期限。
    * issuingAuthority  签发机关。
    * number  证件号。
    * issuePlace  签发地点。
    * issueTimes  签发次数。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码。
    * machineCode1  机读码第一行。
    * machineCode2  机读码第二行。
    * machineCode3  机读码第三行。
    * type  证件类别。可选值包括： - “港澳居民来往内地通行证” - “台湾居民来往大陆通行证”
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'birthDate' => 'setBirthDate',
            'sex' => 'setSex',
            'validPeriod' => 'setValidPeriod',
            'issuingAuthority' => 'setIssuingAuthority',
            'number' => 'setNumber',
            'issuePlace' => 'setIssuePlace',
            'issueTimes' => 'setIssueTimes',
            'idName' => 'setIdName',
            'idNumber' => 'setIdNumber',
            'machineCode1' => 'setMachineCode1',
            'machineCode2' => 'setMachineCode2',
            'machineCode3' => 'setMachineCode3',
            'type' => 'setType',
            'side' => 'setSide',
            'portraitImage' => 'setPortraitImage',
            'portraitLocation' => 'setPortraitLocation',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  中文姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * validPeriod  有效期限。
    * issuingAuthority  签发机关。
    * number  证件号。
    * issuePlace  签发地点。
    * issueTimes  签发次数。
    * idName  回乡证背面的香港/澳门/台湾身份证姓名。
    * idNumber  回乡证背面的香港/澳门/台湾身份证号码。
    * machineCode1  机读码第一行。
    * machineCode2  机读码第二行。
    * machineCode3  机读码第三行。
    * type  证件类别。可选值包括： - “港澳居民来往内地通行证” - “台湾居民来往大陆通行证”
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'birthDate' => 'getBirthDate',
            'sex' => 'getSex',
            'validPeriod' => 'getValidPeriod',
            'issuingAuthority' => 'getIssuingAuthority',
            'number' => 'getNumber',
            'issuePlace' => 'getIssuePlace',
            'issueTimes' => 'getIssueTimes',
            'idName' => 'getIdName',
            'idNumber' => 'getIdNumber',
            'machineCode1' => 'getMachineCode1',
            'machineCode2' => 'getMachineCode2',
            'machineCode3' => 'getMachineCode3',
            'type' => 'getType',
            'side' => 'getSide',
            'portraitImage' => 'getPortraitImage',
            'portraitLocation' => 'getPortraitLocation',
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
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issuePlace'] = isset($data['issuePlace']) ? $data['issuePlace'] : null;
        $this->container['issueTimes'] = isset($data['issueTimes']) ? $data['issueTimes'] : null;
        $this->container['idName'] = isset($data['idName']) ? $data['idName'] : null;
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['machineCode1'] = isset($data['machineCode1']) ? $data['machineCode1'] : null;
        $this->container['machineCode2'] = isset($data['machineCode2']) ? $data['machineCode2'] : null;
        $this->container['machineCode3'] = isset($data['machineCode3']) ? $data['machineCode3'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['portraitImage'] = isset($data['portraitImage']) ? $data['portraitImage'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
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
    * Gets validPeriod
    *  有效期限。
    *
    * @return string|null
    */
    public function getValidPeriod()
    {
        return $this->container['validPeriod'];
    }

    /**
    * Sets validPeriod
    *
    * @param string|null $validPeriod 有效期限。
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
    *  签发机关。
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
    * @param string|null $issuingAuthority 签发机关。
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
        return $this;
    }

    /**
    * Gets number
    *  证件号。
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
    * @param string|null $number 证件号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets issuePlace
    *  签发地点。
    *
    * @return string|null
    */
    public function getIssuePlace()
    {
        return $this->container['issuePlace'];
    }

    /**
    * Sets issuePlace
    *
    * @param string|null $issuePlace 签发地点。
    *
    * @return $this
    */
    public function setIssuePlace($issuePlace)
    {
        $this->container['issuePlace'] = $issuePlace;
        return $this;
    }

    /**
    * Gets issueTimes
    *  签发次数。
    *
    * @return string|null
    */
    public function getIssueTimes()
    {
        return $this->container['issueTimes'];
    }

    /**
    * Sets issueTimes
    *
    * @param string|null $issueTimes 签发次数。
    *
    * @return $this
    */
    public function setIssueTimes($issueTimes)
    {
        $this->container['issueTimes'] = $issueTimes;
        return $this;
    }

    /**
    * Gets idName
    *  回乡证背面的香港/澳门/台湾身份证姓名。
    *
    * @return string|null
    */
    public function getIdName()
    {
        return $this->container['idName'];
    }

    /**
    * Sets idName
    *
    * @param string|null $idName 回乡证背面的香港/澳门/台湾身份证姓名。
    *
    * @return $this
    */
    public function setIdName($idName)
    {
        $this->container['idName'] = $idName;
        return $this;
    }

    /**
    * Gets idNumber
    *  回乡证背面的香港/澳门/台湾身份证号码。
    *
    * @return string|null
    */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
    * Sets idNumber
    *
    * @param string|null $idNumber 回乡证背面的香港/澳门/台湾身份证号码。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets machineCode1
    *  机读码第一行。
    *
    * @return string|null
    */
    public function getMachineCode1()
    {
        return $this->container['machineCode1'];
    }

    /**
    * Sets machineCode1
    *
    * @param string|null $machineCode1 机读码第一行。
    *
    * @return $this
    */
    public function setMachineCode1($machineCode1)
    {
        $this->container['machineCode1'] = $machineCode1;
        return $this;
    }

    /**
    * Gets machineCode2
    *  机读码第二行。
    *
    * @return string|null
    */
    public function getMachineCode2()
    {
        return $this->container['machineCode2'];
    }

    /**
    * Sets machineCode2
    *
    * @param string|null $machineCode2 机读码第二行。
    *
    * @return $this
    */
    public function setMachineCode2($machineCode2)
    {
        $this->container['machineCode2'] = $machineCode2;
        return $this;
    }

    /**
    * Gets machineCode3
    *  机读码第三行。
    *
    * @return string|null
    */
    public function getMachineCode3()
    {
        return $this->container['machineCode3'];
    }

    /**
    * Sets machineCode3
    *
    * @param string|null $machineCode3 机读码第三行。
    *
    * @return $this
    */
    public function setMachineCode3($machineCode3)
    {
        $this->container['machineCode3'] = $machineCode3;
        return $this;
    }

    /**
    * Gets type
    *  证件类别。可选值包括： - “港澳居民来往内地通行证” - “台湾居民来往大陆通行证”
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
    * @param string|null $type 证件类别。可选值包括： - “港澳居民来往内地通行证” - “台湾居民来往大陆通行证”
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
    *  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
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
    * @param string|null $side 证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
        return $this;
    }

    /**
    * Gets portraitImage
    *  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
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
    * @param string|null $portraitImage 头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    *
    * @return $this
    */
    public function setPortraitImage($portraitImage)
    {
        $this->container['portraitImage'] = $portraitImage;
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
    * Gets confidence
    *  confidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\MainlandTravelPermitConfidence|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\MainlandTravelPermitConfidence|null $confidence confidence
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

