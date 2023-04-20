<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThailandIdcardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThailandIdcardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  返回证件类型，\"normal\"表示普通泰文证件，\"pink\"表示外国人身份证件
    * nameEn  英文名。
    * refNumber  参考编码。
    * side  标示正面还是反面，取值为front或back。
    * idNumber  身份证号。
    * nameTh  泰文名字。
    * firstNameEn  英文名字。
    * lastNameEn  英文姓氏。
    * dateOfBirthTh  泰文出生日期。
    * dateOfBirthEn  英文出生日期。
    * religionTh  宗教。
    * addressTh  地址。
    * dateOfIssueTh  泰文签发日期。
    * dateOfIssueEn  英文签发日期。
    * dateOfExpiryTh  泰文有效期。
    * dateOfExpiryEn  英文有效期。
    * serialNumber  序列号。
    * cardNumber  身份证反面卡号。
    * laserNumber  激光码。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 - screen：屏幕翻拍 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'nameEn' => 'string',
            'refNumber' => 'string',
            'side' => 'string',
            'idNumber' => 'string',
            'nameTh' => 'string',
            'firstNameEn' => 'string',
            'lastNameEn' => 'string',
            'dateOfBirthTh' => 'string',
            'dateOfBirthEn' => 'string',
            'religionTh' => 'string',
            'addressTh' => 'string',
            'dateOfIssueTh' => 'string',
            'dateOfIssueEn' => 'string',
            'dateOfExpiryTh' => 'string',
            'dateOfExpiryEn' => 'string',
            'serialNumber' => 'string',
            'cardNumber' => 'string',
            'laserNumber' => 'string',
            'confidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\ThailandIdcardConfidence',
            'portraitImage' => 'string',
            'portraitLocation' => 'int[][]',
            'idcardType' => 'string',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  返回证件类型，\"normal\"表示普通泰文证件，\"pink\"表示外国人身份证件
    * nameEn  英文名。
    * refNumber  参考编码。
    * side  标示正面还是反面，取值为front或back。
    * idNumber  身份证号。
    * nameTh  泰文名字。
    * firstNameEn  英文名字。
    * lastNameEn  英文姓氏。
    * dateOfBirthTh  泰文出生日期。
    * dateOfBirthEn  英文出生日期。
    * religionTh  宗教。
    * addressTh  地址。
    * dateOfIssueTh  泰文签发日期。
    * dateOfIssueEn  英文签发日期。
    * dateOfExpiryTh  泰文有效期。
    * dateOfExpiryEn  英文有效期。
    * serialNumber  序列号。
    * cardNumber  身份证反面卡号。
    * laserNumber  激光码。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 - screen：屏幕翻拍 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'nameEn' => null,
        'refNumber' => null,
        'side' => null,
        'idNumber' => null,
        'nameTh' => null,
        'firstNameEn' => null,
        'lastNameEn' => null,
        'dateOfBirthTh' => null,
        'dateOfBirthEn' => null,
        'religionTh' => null,
        'addressTh' => null,
        'dateOfIssueTh' => null,
        'dateOfIssueEn' => null,
        'dateOfExpiryTh' => null,
        'dateOfExpiryEn' => null,
        'serialNumber' => null,
        'cardNumber' => null,
        'laserNumber' => null,
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
    * type  返回证件类型，\"normal\"表示普通泰文证件，\"pink\"表示外国人身份证件
    * nameEn  英文名。
    * refNumber  参考编码。
    * side  标示正面还是反面，取值为front或back。
    * idNumber  身份证号。
    * nameTh  泰文名字。
    * firstNameEn  英文名字。
    * lastNameEn  英文姓氏。
    * dateOfBirthTh  泰文出生日期。
    * dateOfBirthEn  英文出生日期。
    * religionTh  宗教。
    * addressTh  地址。
    * dateOfIssueTh  泰文签发日期。
    * dateOfIssueEn  英文签发日期。
    * dateOfExpiryTh  泰文有效期。
    * dateOfExpiryEn  英文有效期。
    * serialNumber  序列号。
    * cardNumber  身份证反面卡号。
    * laserNumber  激光码。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 - screen：屏幕翻拍 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'nameEn' => 'name_en',
            'refNumber' => 'ref_number',
            'side' => 'side',
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
            'laserNumber' => 'laser_number',
            'confidence' => 'confidence',
            'portraitImage' => 'portrait_image',
            'portraitLocation' => 'portrait_location',
            'idcardType' => 'idcard_type',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  返回证件类型，\"normal\"表示普通泰文证件，\"pink\"表示外国人身份证件
    * nameEn  英文名。
    * refNumber  参考编码。
    * side  标示正面还是反面，取值为front或back。
    * idNumber  身份证号。
    * nameTh  泰文名字。
    * firstNameEn  英文名字。
    * lastNameEn  英文姓氏。
    * dateOfBirthTh  泰文出生日期。
    * dateOfBirthEn  英文出生日期。
    * religionTh  宗教。
    * addressTh  地址。
    * dateOfIssueTh  泰文签发日期。
    * dateOfIssueEn  英文签发日期。
    * dateOfExpiryTh  泰文有效期。
    * dateOfExpiryEn  英文有效期。
    * serialNumber  序列号。
    * cardNumber  身份证反面卡号。
    * laserNumber  激光码。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 - screen：屏幕翻拍 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'nameEn' => 'setNameEn',
            'refNumber' => 'setRefNumber',
            'side' => 'setSide',
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
            'laserNumber' => 'setLaserNumber',
            'confidence' => 'setConfidence',
            'portraitImage' => 'setPortraitImage',
            'portraitLocation' => 'setPortraitLocation',
            'idcardType' => 'setIdcardType',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  返回证件类型，\"normal\"表示普通泰文证件，\"pink\"表示外国人身份证件
    * nameEn  英文名。
    * refNumber  参考编码。
    * side  标示正面还是反面，取值为front或back。
    * idNumber  身份证号。
    * nameTh  泰文名字。
    * firstNameEn  英文名字。
    * lastNameEn  英文姓氏。
    * dateOfBirthTh  泰文出生日期。
    * dateOfBirthEn  英文出生日期。
    * religionTh  宗教。
    * addressTh  地址。
    * dateOfIssueTh  泰文签发日期。
    * dateOfIssueEn  英文签发日期。
    * dateOfExpiryTh  泰文有效期。
    * dateOfExpiryEn  英文有效期。
    * serialNumber  序列号。
    * cardNumber  身份证反面卡号。
    * laserNumber  激光码。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 - screen：屏幕翻拍 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'nameEn' => 'getNameEn',
            'refNumber' => 'getRefNumber',
            'side' => 'getSide',
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
            'laserNumber' => 'getLaserNumber',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['refNumber'] = isset($data['refNumber']) ? $data['refNumber'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
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
    * Gets type
    *  返回证件类型，\"normal\"表示普通泰文证件，\"pink\"表示外国人身份证件
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
    * @param string|null $type 返回证件类型，\"normal\"表示普通泰文证件，\"pink\"表示外国人身份证件
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名。
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
    * @param string|null $nameEn 英文名。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets refNumber
    *  参考编码。
    *
    * @return string|null
    */
    public function getRefNumber()
    {
        return $this->container['refNumber'];
    }

    /**
    * Sets refNumber
    *
    * @param string|null $refNumber 参考编码。
    *
    * @return $this
    */
    public function setRefNumber($refNumber)
    {
        $this->container['refNumber'] = $refNumber;
        return $this;
    }

    /**
    * Gets side
    *  标示正面还是反面，取值为front或back。
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
    * @param string|null $side 标示正面还是反面，取值为front或back。
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
        return $this;
    }

    /**
    * Gets idNumber
    *  身份证号。
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
    * @param string|null $idNumber 身份证号。
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
    *  泰文名字。
    *
    * @return string|null
    */
    public function getNameTh()
    {
        return $this->container['nameTh'];
    }

    /**
    * Sets nameTh
    *
    * @param string|null $nameTh 泰文名字。
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
    *  英文名字。
    *
    * @return string|null
    */
    public function getFirstNameEn()
    {
        return $this->container['firstNameEn'];
    }

    /**
    * Sets firstNameEn
    *
    * @param string|null $firstNameEn 英文名字。
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
    *  英文姓氏。
    *
    * @return string|null
    */
    public function getLastNameEn()
    {
        return $this->container['lastNameEn'];
    }

    /**
    * Sets lastNameEn
    *
    * @param string|null $lastNameEn 英文姓氏。
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
    *  泰文出生日期。
    *
    * @return string|null
    */
    public function getDateOfBirthTh()
    {
        return $this->container['dateOfBirthTh'];
    }

    /**
    * Sets dateOfBirthTh
    *
    * @param string|null $dateOfBirthTh 泰文出生日期。
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
    *  英文出生日期。
    *
    * @return string|null
    */
    public function getDateOfBirthEn()
    {
        return $this->container['dateOfBirthEn'];
    }

    /**
    * Sets dateOfBirthEn
    *
    * @param string|null $dateOfBirthEn 英文出生日期。
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
    *  宗教。
    *
    * @return string|null
    */
    public function getReligionTh()
    {
        return $this->container['religionTh'];
    }

    /**
    * Sets religionTh
    *
    * @param string|null $religionTh 宗教。
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
    *  地址。
    *
    * @return string|null
    */
    public function getAddressTh()
    {
        return $this->container['addressTh'];
    }

    /**
    * Sets addressTh
    *
    * @param string|null $addressTh 地址。
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
    *  泰文签发日期。
    *
    * @return string|null
    */
    public function getDateOfIssueTh()
    {
        return $this->container['dateOfIssueTh'];
    }

    /**
    * Sets dateOfIssueTh
    *
    * @param string|null $dateOfIssueTh 泰文签发日期。
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
    *  英文签发日期。
    *
    * @return string|null
    */
    public function getDateOfIssueEn()
    {
        return $this->container['dateOfIssueEn'];
    }

    /**
    * Sets dateOfIssueEn
    *
    * @param string|null $dateOfIssueEn 英文签发日期。
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
    *  泰文有效期。
    *
    * @return string|null
    */
    public function getDateOfExpiryTh()
    {
        return $this->container['dateOfExpiryTh'];
    }

    /**
    * Sets dateOfExpiryTh
    *
    * @param string|null $dateOfExpiryTh 泰文有效期。
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
    *  英文有效期。
    *
    * @return string|null
    */
    public function getDateOfExpiryEn()
    {
        return $this->container['dateOfExpiryEn'];
    }

    /**
    * Sets dateOfExpiryEn
    *
    * @param string|null $dateOfExpiryEn 英文有效期。
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
    *  序列号。
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 序列号。
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
    *  身份证反面卡号。
    *
    * @return string|null
    */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
    * Sets cardNumber
    *
    * @param string|null $cardNumber 身份证反面卡号。
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
    *  激光码。
    *
    * @return string|null
    */
    public function getLaserNumber()
    {
        return $this->container['laserNumber'];
    }

    /**
    * Sets laserNumber
    *
    * @param string|null $laserNumber 激光码。
    *
    * @return $this
    */
    public function setLaserNumber($laserNumber)
    {
        $this->container['laserNumber'] = $laserNumber;
        return $this;
    }

    /**
    * Gets confidence
    *  confidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ThailandIdcardConfidence|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ThailandIdcardConfidence|null $confidence confidence
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
    *  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
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
    * @param int[][]|null $portraitLocation 头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
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
    *  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 - screen：屏幕翻拍 当输入参数“return_idcard_type”为“true”时，才返回该参数。
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
    * @param string|null $idcardType 身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 - screen：屏幕翻拍 当输入参数“return_idcard_type”为“true”时，才返回该参数。
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

