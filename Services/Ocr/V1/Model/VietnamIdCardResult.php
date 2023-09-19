<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VietnamIdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VietnamIdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * side  返回证件正反面。字段值为“front”或“back”
    * number  卡证编号。
    * fullName  姓名。
    * birthDate  出生日期。
    * sex  性别。
    * nationality  国籍。
    * originPlace  籍贯。
    * residencePlace  居住地。
    * expiryDate  有效日期。
    * personalIdentification  个人识别。当参数“side”为back时，返回此字段。
    * issueDate  签发日期。当参数“side”为back时，返回此字段。
    * machineCode1  身份证背面第一行机器码。当参数“side”为back时，返回此字段。
    * machineCode2  身份证背面第二行机器码。当参数“side”为back时，返回此字段。
    * machineCode3  身份证背面第三行机器码。当参数“side”为back时，返回此字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    * portraitImage  当参数return_portrait_image为true时，返回头像的base64编码。
    * portraitLocation  当参数return_portrait_location为true时，返回头像在原图上的位置，以列表形式表示，包含头像区域四个顶点的二维坐标（x,y）；坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  输入参数return_idcard_type为true时，返回身份证的类型：normal是身份证原件，copy是复印的身份证，screen是屏幕翻拍。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'side' => 'string',
            'number' => 'string',
            'fullName' => 'string',
            'birthDate' => 'string',
            'sex' => 'string',
            'nationality' => 'string',
            'originPlace' => 'string',
            'residencePlace' => 'string',
            'expiryDate' => 'string',
            'personalIdentification' => 'string',
            'issueDate' => 'string',
            'machineCode1' => 'string',
            'machineCode2' => 'string',
            'machineCode3' => 'string',
            'confidence' => 'object',
            'portraitImage' => 'string',
            'portraitLocation' => 'int[][]',
            'idcardType' => 'string',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * side  返回证件正反面。字段值为“front”或“back”
    * number  卡证编号。
    * fullName  姓名。
    * birthDate  出生日期。
    * sex  性别。
    * nationality  国籍。
    * originPlace  籍贯。
    * residencePlace  居住地。
    * expiryDate  有效日期。
    * personalIdentification  个人识别。当参数“side”为back时，返回此字段。
    * issueDate  签发日期。当参数“side”为back时，返回此字段。
    * machineCode1  身份证背面第一行机器码。当参数“side”为back时，返回此字段。
    * machineCode2  身份证背面第二行机器码。当参数“side”为back时，返回此字段。
    * machineCode3  身份证背面第三行机器码。当参数“side”为back时，返回此字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    * portraitImage  当参数return_portrait_image为true时，返回头像的base64编码。
    * portraitLocation  当参数return_portrait_location为true时，返回头像在原图上的位置，以列表形式表示，包含头像区域四个顶点的二维坐标（x,y）；坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  输入参数return_idcard_type为true时，返回身份证的类型：normal是身份证原件，copy是复印的身份证，screen是屏幕翻拍。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'side' => null,
        'number' => null,
        'fullName' => null,
        'birthDate' => null,
        'sex' => null,
        'nationality' => null,
        'originPlace' => null,
        'residencePlace' => null,
        'expiryDate' => null,
        'personalIdentification' => null,
        'issueDate' => null,
        'machineCode1' => null,
        'machineCode2' => null,
        'machineCode3' => null,
        'confidence' => null,
        'portraitImage' => null,
        'portraitLocation' => 'int32',
        'idcardType' => null,
        'textLocation' => null
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
    * side  返回证件正反面。字段值为“front”或“back”
    * number  卡证编号。
    * fullName  姓名。
    * birthDate  出生日期。
    * sex  性别。
    * nationality  国籍。
    * originPlace  籍贯。
    * residencePlace  居住地。
    * expiryDate  有效日期。
    * personalIdentification  个人识别。当参数“side”为back时，返回此字段。
    * issueDate  签发日期。当参数“side”为back时，返回此字段。
    * machineCode1  身份证背面第一行机器码。当参数“side”为back时，返回此字段。
    * machineCode2  身份证背面第二行机器码。当参数“side”为back时，返回此字段。
    * machineCode3  身份证背面第三行机器码。当参数“side”为back时，返回此字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    * portraitImage  当参数return_portrait_image为true时，返回头像的base64编码。
    * portraitLocation  当参数return_portrait_location为true时，返回头像在原图上的位置，以列表形式表示，包含头像区域四个顶点的二维坐标（x,y）；坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  输入参数return_idcard_type为true时，返回身份证的类型：normal是身份证原件，copy是复印的身份证，screen是屏幕翻拍。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'side' => 'side',
            'number' => 'number',
            'fullName' => 'full_name',
            'birthDate' => 'birth_date',
            'sex' => 'sex',
            'nationality' => 'nationality',
            'originPlace' => 'origin_place',
            'residencePlace' => 'residence_place',
            'expiryDate' => 'expiry_date',
            'personalIdentification' => 'personal_identification',
            'issueDate' => 'issue_date',
            'machineCode1' => 'machine_code1',
            'machineCode2' => 'machine_code2',
            'machineCode3' => 'machine_code3',
            'confidence' => 'confidence',
            'portraitImage' => 'portrait_image',
            'portraitLocation' => 'portrait_location',
            'idcardType' => 'idcard_type',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * side  返回证件正反面。字段值为“front”或“back”
    * number  卡证编号。
    * fullName  姓名。
    * birthDate  出生日期。
    * sex  性别。
    * nationality  国籍。
    * originPlace  籍贯。
    * residencePlace  居住地。
    * expiryDate  有效日期。
    * personalIdentification  个人识别。当参数“side”为back时，返回此字段。
    * issueDate  签发日期。当参数“side”为back时，返回此字段。
    * machineCode1  身份证背面第一行机器码。当参数“side”为back时，返回此字段。
    * machineCode2  身份证背面第二行机器码。当参数“side”为back时，返回此字段。
    * machineCode3  身份证背面第三行机器码。当参数“side”为back时，返回此字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    * portraitImage  当参数return_portrait_image为true时，返回头像的base64编码。
    * portraitLocation  当参数return_portrait_location为true时，返回头像在原图上的位置，以列表形式表示，包含头像区域四个顶点的二维坐标（x,y）；坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  输入参数return_idcard_type为true时，返回身份证的类型：normal是身份证原件，copy是复印的身份证，screen是屏幕翻拍。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $setters = [
            'side' => 'setSide',
            'number' => 'setNumber',
            'fullName' => 'setFullName',
            'birthDate' => 'setBirthDate',
            'sex' => 'setSex',
            'nationality' => 'setNationality',
            'originPlace' => 'setOriginPlace',
            'residencePlace' => 'setResidencePlace',
            'expiryDate' => 'setExpiryDate',
            'personalIdentification' => 'setPersonalIdentification',
            'issueDate' => 'setIssueDate',
            'machineCode1' => 'setMachineCode1',
            'machineCode2' => 'setMachineCode2',
            'machineCode3' => 'setMachineCode3',
            'confidence' => 'setConfidence',
            'portraitImage' => 'setPortraitImage',
            'portraitLocation' => 'setPortraitLocation',
            'idcardType' => 'setIdcardType',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * side  返回证件正反面。字段值为“front”或“back”
    * number  卡证编号。
    * fullName  姓名。
    * birthDate  出生日期。
    * sex  性别。
    * nationality  国籍。
    * originPlace  籍贯。
    * residencePlace  居住地。
    * expiryDate  有效日期。
    * personalIdentification  个人识别。当参数“side”为back时，返回此字段。
    * issueDate  签发日期。当参数“side”为back时，返回此字段。
    * machineCode1  身份证背面第一行机器码。当参数“side”为back时，返回此字段。
    * machineCode2  身份证背面第二行机器码。当参数“side”为back时，返回此字段。
    * machineCode3  身份证背面第三行机器码。当参数“side”为back时，返回此字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    * portraitImage  当参数return_portrait_image为true时，返回头像的base64编码。
    * portraitLocation  当参数return_portrait_location为true时，返回头像在原图上的位置，以列表形式表示，包含头像区域四个顶点的二维坐标（x,y）；坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  输入参数return_idcard_type为true时，返回身份证的类型：normal是身份证原件，copy是复印的身份证，screen是屏幕翻拍。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $getters = [
            'side' => 'getSide',
            'number' => 'getNumber',
            'fullName' => 'getFullName',
            'birthDate' => 'getBirthDate',
            'sex' => 'getSex',
            'nationality' => 'getNationality',
            'originPlace' => 'getOriginPlace',
            'residencePlace' => 'getResidencePlace',
            'expiryDate' => 'getExpiryDate',
            'personalIdentification' => 'getPersonalIdentification',
            'issueDate' => 'getIssueDate',
            'machineCode1' => 'getMachineCode1',
            'machineCode2' => 'getMachineCode2',
            'machineCode3' => 'getMachineCode3',
            'confidence' => 'getConfidence',
            'portraitImage' => 'getPortraitImage',
            'portraitLocation' => 'getPortraitLocation',
            'idcardType' => 'getIdcardType',
            'textLocation' => 'getTextLocation'
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
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['originPlace'] = isset($data['originPlace']) ? $data['originPlace'] : null;
        $this->container['residencePlace'] = isset($data['residencePlace']) ? $data['residencePlace'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['personalIdentification'] = isset($data['personalIdentification']) ? $data['personalIdentification'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['machineCode1'] = isset($data['machineCode1']) ? $data['machineCode1'] : null;
        $this->container['machineCode2'] = isset($data['machineCode2']) ? $data['machineCode2'] : null;
        $this->container['machineCode3'] = isset($data['machineCode3']) ? $data['machineCode3'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['portraitImage'] = isset($data['portraitImage']) ? $data['portraitImage'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
        $this->container['idcardType'] = isset($data['idcardType']) ? $data['idcardType'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
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
    *  返回证件正反面。字段值为“front”或“back”
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
    * @param string|null $side 返回证件正反面。字段值为“front”或“back”
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
    *  卡证编号。
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
    * @param string|null $number 卡证编号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets fullName
    *  姓名。
    *
    * @return string|null
    */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
    * Sets fullName
    *
    * @param string|null $fullName 姓名。
    *
    * @return $this
    */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;
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
    * Gets originPlace
    *  籍贯。
    *
    * @return string|null
    */
    public function getOriginPlace()
    {
        return $this->container['originPlace'];
    }

    /**
    * Sets originPlace
    *
    * @param string|null $originPlace 籍贯。
    *
    * @return $this
    */
    public function setOriginPlace($originPlace)
    {
        $this->container['originPlace'] = $originPlace;
        return $this;
    }

    /**
    * Gets residencePlace
    *  居住地。
    *
    * @return string|null
    */
    public function getResidencePlace()
    {
        return $this->container['residencePlace'];
    }

    /**
    * Sets residencePlace
    *
    * @param string|null $residencePlace 居住地。
    *
    * @return $this
    */
    public function setResidencePlace($residencePlace)
    {
        $this->container['residencePlace'] = $residencePlace;
        return $this;
    }

    /**
    * Gets expiryDate
    *  有效日期。
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
    * @param string|null $expiryDate 有效日期。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets personalIdentification
    *  个人识别。当参数“side”为back时，返回此字段。
    *
    * @return string|null
    */
    public function getPersonalIdentification()
    {
        return $this->container['personalIdentification'];
    }

    /**
    * Sets personalIdentification
    *
    * @param string|null $personalIdentification 个人识别。当参数“side”为back时，返回此字段。
    *
    * @return $this
    */
    public function setPersonalIdentification($personalIdentification)
    {
        $this->container['personalIdentification'] = $personalIdentification;
        return $this;
    }

    /**
    * Gets issueDate
    *  签发日期。当参数“side”为back时，返回此字段。
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
    * @param string|null $issueDate 签发日期。当参数“side”为back时，返回此字段。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets machineCode1
    *  身份证背面第一行机器码。当参数“side”为back时，返回此字段。
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
    * @param string|null $machineCode1 身份证背面第一行机器码。当参数“side”为back时，返回此字段。
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
    *  身份证背面第二行机器码。当参数“side”为back时，返回此字段。
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
    * @param string|null $machineCode2 身份证背面第二行机器码。当参数“side”为back时，返回此字段。
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
    *  身份证背面第三行机器码。当参数“side”为back时，返回此字段。
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
    * @param string|null $machineCode3 身份证背面第三行机器码。当参数“side”为back时，返回此字段。
    *
    * @return $this
    */
    public function setMachineCode3($machineCode3)
    {
        $this->container['machineCode3'] = $machineCode3;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
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
    * @param object|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets portraitImage
    *  当参数return_portrait_image为true时，返回头像的base64编码。
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
    * @param string|null $portraitImage 当参数return_portrait_image为true时，返回头像的base64编码。
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
    *  当参数return_portrait_location为true时，返回头像在原图上的位置，以列表形式表示，包含头像区域四个顶点的二维坐标（x,y）；坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
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
    * @param int[][]|null $portraitLocation 当参数return_portrait_location为true时，返回头像在原图上的位置，以列表形式表示，包含头像区域四个顶点的二维坐标（x,y）；坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setPortraitLocation($portraitLocation)
    {
        $this->container['portraitLocation'] = $portraitLocation;
        return $this;
    }

    /**
    * Gets idcardType
    *  输入参数return_idcard_type为true时，返回身份证的类型：normal是身份证原件，copy是复印的身份证，screen是屏幕翻拍。
    *
    * @return string|null
    */
    public function getIdcardType()
    {
        return $this->container['idcardType'];
    }

    /**
    * Sets idcardType
    *
    * @param string|null $idcardType 输入参数return_idcard_type为true时，返回身份证的类型：normal是身份证原件，copy是复印的身份证，screen是屏幕翻拍。
    *
    * @return $this
    */
    public function setIdcardType($idcardType)
    {
        $this->container['idcardType'] = $idcardType;
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

