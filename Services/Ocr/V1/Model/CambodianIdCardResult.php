<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CambodianIdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CambodianIdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idNumber  身份证号码。
    * nameKh  高棉语版姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * height  身高。
    * birthPlace  出生地。
    * address  地址，以空格分隔。
    * issueDate  签发起始日期。
    * expiryDate  签发结束日期。
    * description  图片中的个人特征。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  身份证的类型。当输入参数“ idcard_type ”为“true”时，才返回该参数。取值如下所示： - normal：身份证原件 - copy：复印的身份证
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idNumber' => 'string',
            'nameKh' => 'string',
            'nameEn' => 'string',
            'birthDate' => 'string',
            'sex' => 'string',
            'height' => 'string',
            'birthPlace' => 'string',
            'address' => 'string',
            'issueDate' => 'string',
            'expiryDate' => 'string',
            'description' => 'string',
            'machineCode1' => 'string',
            'machineCode2' => 'string',
            'machineCode3' => 'string',
            'portraitImage' => 'string',
            'portraitLocation' => 'int[][]',
            'idcardType' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idNumber  身份证号码。
    * nameKh  高棉语版姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * height  身高。
    * birthPlace  出生地。
    * address  地址，以空格分隔。
    * issueDate  签发起始日期。
    * expiryDate  签发结束日期。
    * description  图片中的个人特征。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  身份证的类型。当输入参数“ idcard_type ”为“true”时，才返回该参数。取值如下所示： - normal：身份证原件 - copy：复印的身份证
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idNumber' => null,
        'nameKh' => null,
        'nameEn' => null,
        'birthDate' => null,
        'sex' => null,
        'height' => null,
        'birthPlace' => null,
        'address' => null,
        'issueDate' => null,
        'expiryDate' => null,
        'description' => null,
        'machineCode1' => null,
        'machineCode2' => null,
        'machineCode3' => null,
        'portraitImage' => null,
        'portraitLocation' => 'int32',
        'idcardType' => null,
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
    * idNumber  身份证号码。
    * nameKh  高棉语版姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * height  身高。
    * birthPlace  出生地。
    * address  地址，以空格分隔。
    * issueDate  签发起始日期。
    * expiryDate  签发结束日期。
    * description  图片中的个人特征。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  身份证的类型。当输入参数“ idcard_type ”为“true”时，才返回该参数。取值如下所示： - normal：身份证原件 - copy：复印的身份证
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idNumber' => 'id_number',
            'nameKh' => 'name_kh',
            'nameEn' => 'name_en',
            'birthDate' => 'birth_date',
            'sex' => 'sex',
            'height' => 'height',
            'birthPlace' => 'birth_place',
            'address' => 'address',
            'issueDate' => 'issue_date',
            'expiryDate' => 'expiry_date',
            'description' => 'description',
            'machineCode1' => 'machine_code1',
            'machineCode2' => 'machine_code2',
            'machineCode3' => 'machine_code3',
            'portraitImage' => 'portrait_image',
            'portraitLocation' => 'portrait_location',
            'idcardType' => 'idcard_type',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idNumber  身份证号码。
    * nameKh  高棉语版姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * height  身高。
    * birthPlace  出生地。
    * address  地址，以空格分隔。
    * issueDate  签发起始日期。
    * expiryDate  签发结束日期。
    * description  图片中的个人特征。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  身份证的类型。当输入参数“ idcard_type ”为“true”时，才返回该参数。取值如下所示： - normal：身份证原件 - copy：复印的身份证
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'idNumber' => 'setIdNumber',
            'nameKh' => 'setNameKh',
            'nameEn' => 'setNameEn',
            'birthDate' => 'setBirthDate',
            'sex' => 'setSex',
            'height' => 'setHeight',
            'birthPlace' => 'setBirthPlace',
            'address' => 'setAddress',
            'issueDate' => 'setIssueDate',
            'expiryDate' => 'setExpiryDate',
            'description' => 'setDescription',
            'machineCode1' => 'setMachineCode1',
            'machineCode2' => 'setMachineCode2',
            'machineCode3' => 'setMachineCode3',
            'portraitImage' => 'setPortraitImage',
            'portraitLocation' => 'setPortraitLocation',
            'idcardType' => 'setIdcardType',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idNumber  身份证号码。
    * nameKh  高棉语版姓名。
    * nameEn  英文姓名。
    * birthDate  出生日期。
    * sex  性别。
    * height  身高。
    * birthPlace  出生地。
    * address  地址，以空格分隔。
    * issueDate  签发起始日期。
    * expiryDate  签发结束日期。
    * description  图片中的个人特征。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * idcardType  身份证的类型。当输入参数“ idcard_type ”为“true”时，才返回该参数。取值如下所示： - normal：身份证原件 - copy：复印的身份证
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'idNumber' => 'getIdNumber',
            'nameKh' => 'getNameKh',
            'nameEn' => 'getNameEn',
            'birthDate' => 'getBirthDate',
            'sex' => 'getSex',
            'height' => 'getHeight',
            'birthPlace' => 'getBirthPlace',
            'address' => 'getAddress',
            'issueDate' => 'getIssueDate',
            'expiryDate' => 'getExpiryDate',
            'description' => 'getDescription',
            'machineCode1' => 'getMachineCode1',
            'machineCode2' => 'getMachineCode2',
            'machineCode3' => 'getMachineCode3',
            'portraitImage' => 'getPortraitImage',
            'portraitLocation' => 'getPortraitLocation',
            'idcardType' => 'getIdcardType',
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
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['nameKh'] = isset($data['nameKh']) ? $data['nameKh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['birthPlace'] = isset($data['birthPlace']) ? $data['birthPlace'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['machineCode1'] = isset($data['machineCode1']) ? $data['machineCode1'] : null;
        $this->container['machineCode2'] = isset($data['machineCode2']) ? $data['machineCode2'] : null;
        $this->container['machineCode3'] = isset($data['machineCode3']) ? $data['machineCode3'] : null;
        $this->container['portraitImage'] = isset($data['portraitImage']) ? $data['portraitImage'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
        $this->container['idcardType'] = isset($data['idcardType']) ? $data['idcardType'] : null;
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
    * Gets idNumber
    *  身份证号码。
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
    * @param string|null $idNumber 身份证号码。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets nameKh
    *  高棉语版姓名。
    *
    * @return string|null
    */
    public function getNameKh()
    {
        return $this->container['nameKh'];
    }

    /**
    * Sets nameKh
    *
    * @param string|null $nameKh 高棉语版姓名。
    *
    * @return $this
    */
    public function setNameKh($nameKh)
    {
        $this->container['nameKh'] = $nameKh;
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
    * Gets address
    *  地址，以空格分隔。
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
    * @param string|null $address 地址，以空格分隔。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets issueDate
    *  签发起始日期。
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
    * @param string|null $issueDate 签发起始日期。
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
    *  签发结束日期。
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
    * @param string|null $expiryDate 签发结束日期。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets description
    *  图片中的个人特征。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 图片中的个人特征。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets machineCode1
    *  机器码第一行。
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
    * @param string|null $machineCode1 机器码第一行。
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
    *  机器码第二行。
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
    * @param string|null $machineCode2 机器码第二行。
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
    *  机器码第三行。
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
    * @param string|null $machineCode3 机器码第三行。
    *
    * @return $this
    */
    public function setMachineCode3($machineCode3)
    {
        $this->container['machineCode3'] = $machineCode3;
        return $this;
    }

    /**
    * Gets portraitImage
    *  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
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
    * @param string|null $portraitImage 头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
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
    * Gets idcardType
    *  身份证的类型。当输入参数“ idcard_type ”为“true”时，才返回该参数。取值如下所示： - normal：身份证原件 - copy：复印的身份证
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
    * @param string|null $idcardType 身份证的类型。当输入参数“ idcard_type ”为“true”时，才返回该参数。取值如下所示： - normal：身份证原件 - copy：复印的身份证
    *
    * @return $this
    */
    public function setIdcardType($idcardType)
    {
        $this->container['idcardType'] = $idcardType;
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

