<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MyanmarIdcardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MyanmarIdcardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * side  标示正面还是反面，取值为front或back。
    * class  身份证类型。取值如下所示： - new_version：新版身份证 - old_version：旧版
    * nrcId  身份证号码。
    * issueDate  签发日期。
    * name  姓名。
    * fatherName  父亲名字。
    * birth  出生日期。
    * bloodlinesReligion  族群或宗教。
    * height  身高。
    * bloodGroup  血型。
    * cardId  身份证的卡号（背面）。
    * nrcIdBack  背面的身份证号码。
    * profession  职业。
    * address  地址。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'side' => 'string',
            'class' => 'string',
            'nrcId' => 'string',
            'issueDate' => 'string',
            'name' => 'string',
            'fatherName' => 'string',
            'birth' => 'string',
            'bloodlinesReligion' => 'string',
            'height' => 'string',
            'bloodGroup' => 'string',
            'cardId' => 'string',
            'nrcIdBack' => 'string',
            'profession' => 'string',
            'address' => 'string',
            'confidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\MyanmarIdcardConfidence',
            'portraitImage' => 'string',
            'portraitLocation' => 'int[][]',
            'idcardType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * side  标示正面还是反面，取值为front或back。
    * class  身份证类型。取值如下所示： - new_version：新版身份证 - old_version：旧版
    * nrcId  身份证号码。
    * issueDate  签发日期。
    * name  姓名。
    * fatherName  父亲名字。
    * birth  出生日期。
    * bloodlinesReligion  族群或宗教。
    * height  身高。
    * bloodGroup  血型。
    * cardId  身份证的卡号（背面）。
    * nrcIdBack  背面的身份证号码。
    * profession  职业。
    * address  地址。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'side' => null,
        'class' => null,
        'nrcId' => null,
        'issueDate' => null,
        'name' => null,
        'fatherName' => null,
        'birth' => null,
        'bloodlinesReligion' => null,
        'height' => null,
        'bloodGroup' => null,
        'cardId' => null,
        'nrcIdBack' => null,
        'profession' => null,
        'address' => null,
        'confidence' => null,
        'portraitImage' => null,
        'portraitLocation' => 'int32',
        'idcardType' => null
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
    * side  标示正面还是反面，取值为front或back。
    * class  身份证类型。取值如下所示： - new_version：新版身份证 - old_version：旧版
    * nrcId  身份证号码。
    * issueDate  签发日期。
    * name  姓名。
    * fatherName  父亲名字。
    * birth  出生日期。
    * bloodlinesReligion  族群或宗教。
    * height  身高。
    * bloodGroup  血型。
    * cardId  身份证的卡号（背面）。
    * nrcIdBack  背面的身份证号码。
    * profession  职业。
    * address  地址。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'side' => 'side',
            'class' => 'class',
            'nrcId' => 'nrc_id',
            'issueDate' => 'issue_date',
            'name' => 'name',
            'fatherName' => 'father_name',
            'birth' => 'birth',
            'bloodlinesReligion' => 'bloodlines_religion',
            'height' => 'height',
            'bloodGroup' => 'blood_group',
            'cardId' => 'card_id',
            'nrcIdBack' => 'nrc_id_back',
            'profession' => 'profession',
            'address' => 'address',
            'confidence' => 'confidence',
            'portraitImage' => 'portrait_image',
            'portraitLocation' => 'portrait_location',
            'idcardType' => 'idcard_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * side  标示正面还是反面，取值为front或back。
    * class  身份证类型。取值如下所示： - new_version：新版身份证 - old_version：旧版
    * nrcId  身份证号码。
    * issueDate  签发日期。
    * name  姓名。
    * fatherName  父亲名字。
    * birth  出生日期。
    * bloodlinesReligion  族群或宗教。
    * height  身高。
    * bloodGroup  血型。
    * cardId  身份证的卡号（背面）。
    * nrcIdBack  背面的身份证号码。
    * profession  职业。
    * address  地址。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'side' => 'setSide',
            'class' => 'setClass',
            'nrcId' => 'setNrcId',
            'issueDate' => 'setIssueDate',
            'name' => 'setName',
            'fatherName' => 'setFatherName',
            'birth' => 'setBirth',
            'bloodlinesReligion' => 'setBloodlinesReligion',
            'height' => 'setHeight',
            'bloodGroup' => 'setBloodGroup',
            'cardId' => 'setCardId',
            'nrcIdBack' => 'setNrcIdBack',
            'profession' => 'setProfession',
            'address' => 'setAddress',
            'confidence' => 'setConfidence',
            'portraitImage' => 'setPortraitImage',
            'portraitLocation' => 'setPortraitLocation',
            'idcardType' => 'setIdcardType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * side  标示正面还是反面，取值为front或back。
    * class  身份证类型。取值如下所示： - new_version：新版身份证 - old_version：旧版
    * nrcId  身份证号码。
    * issueDate  签发日期。
    * name  姓名。
    * fatherName  父亲名字。
    * birth  出生日期。
    * bloodlinesReligion  族群或宗教。
    * height  身高。
    * bloodGroup  血型。
    * cardId  身份证的卡号（背面）。
    * nrcIdBack  背面的身份证号码。
    * profession  职业。
    * address  地址。
    * confidence  confidence
    * portraitImage  头像的base64编码。 当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向
    * idcardType  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'side' => 'getSide',
            'class' => 'getClass',
            'nrcId' => 'getNrcId',
            'issueDate' => 'getIssueDate',
            'name' => 'getName',
            'fatherName' => 'getFatherName',
            'birth' => 'getBirth',
            'bloodlinesReligion' => 'getBloodlinesReligion',
            'height' => 'getHeight',
            'bloodGroup' => 'getBloodGroup',
            'cardId' => 'getCardId',
            'nrcIdBack' => 'getNrcIdBack',
            'profession' => 'getProfession',
            'address' => 'getAddress',
            'confidence' => 'getConfidence',
            'portraitImage' => 'getPortraitImage',
            'portraitLocation' => 'getPortraitLocation',
            'idcardType' => 'getIdcardType'
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
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['nrcId'] = isset($data['nrcId']) ? $data['nrcId'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fatherName'] = isset($data['fatherName']) ? $data['fatherName'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['bloodlinesReligion'] = isset($data['bloodlinesReligion']) ? $data['bloodlinesReligion'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['bloodGroup'] = isset($data['bloodGroup']) ? $data['bloodGroup'] : null;
        $this->container['cardId'] = isset($data['cardId']) ? $data['cardId'] : null;
        $this->container['nrcIdBack'] = isset($data['nrcIdBack']) ? $data['nrcIdBack'] : null;
        $this->container['profession'] = isset($data['profession']) ? $data['profession'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['portraitImage'] = isset($data['portraitImage']) ? $data['portraitImage'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
        $this->container['idcardType'] = isset($data['idcardType']) ? $data['idcardType'] : null;
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
    * Gets class
    *  身份证类型。取值如下所示： - new_version：新版身份证 - old_version：旧版
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
    * @param string|null $class 身份证类型。取值如下所示： - new_version：新版身份证 - old_version：旧版
    *
    * @return $this
    */
    public function setClass($class)
    {
        $this->container['class'] = $class;
        return $this;
    }

    /**
    * Gets nrcId
    *  身份证号码。
    *
    * @return string|null
    */
    public function getNrcId()
    {
        return $this->container['nrcId'];
    }

    /**
    * Sets nrcId
    *
    * @param string|null $nrcId 身份证号码。
    *
    * @return $this
    */
    public function setNrcId($nrcId)
    {
        $this->container['nrcId'] = $nrcId;
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
    * Gets fatherName
    *  父亲名字。
    *
    * @return string|null
    */
    public function getFatherName()
    {
        return $this->container['fatherName'];
    }

    /**
    * Sets fatherName
    *
    * @param string|null $fatherName 父亲名字。
    *
    * @return $this
    */
    public function setFatherName($fatherName)
    {
        $this->container['fatherName'] = $fatherName;
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
    * Gets bloodlinesReligion
    *  族群或宗教。
    *
    * @return string|null
    */
    public function getBloodlinesReligion()
    {
        return $this->container['bloodlinesReligion'];
    }

    /**
    * Sets bloodlinesReligion
    *
    * @param string|null $bloodlinesReligion 族群或宗教。
    *
    * @return $this
    */
    public function setBloodlinesReligion($bloodlinesReligion)
    {
        $this->container['bloodlinesReligion'] = $bloodlinesReligion;
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
    * Gets bloodGroup
    *  血型。
    *
    * @return string|null
    */
    public function getBloodGroup()
    {
        return $this->container['bloodGroup'];
    }

    /**
    * Sets bloodGroup
    *
    * @param string|null $bloodGroup 血型。
    *
    * @return $this
    */
    public function setBloodGroup($bloodGroup)
    {
        $this->container['bloodGroup'] = $bloodGroup;
        return $this;
    }

    /**
    * Gets cardId
    *  身份证的卡号（背面）。
    *
    * @return string|null
    */
    public function getCardId()
    {
        return $this->container['cardId'];
    }

    /**
    * Sets cardId
    *
    * @param string|null $cardId 身份证的卡号（背面）。
    *
    * @return $this
    */
    public function setCardId($cardId)
    {
        $this->container['cardId'] = $cardId;
        return $this;
    }

    /**
    * Gets nrcIdBack
    *  背面的身份证号码。
    *
    * @return string|null
    */
    public function getNrcIdBack()
    {
        return $this->container['nrcIdBack'];
    }

    /**
    * Sets nrcIdBack
    *
    * @param string|null $nrcIdBack 背面的身份证号码。
    *
    * @return $this
    */
    public function setNrcIdBack($nrcIdBack)
    {
        $this->container['nrcIdBack'] = $nrcIdBack;
        return $this;
    }

    /**
    * Gets profession
    *  职业。
    *
    * @return string|null
    */
    public function getProfession()
    {
        return $this->container['profession'];
    }

    /**
    * Sets profession
    *
    * @param string|null $profession 职业。
    *
    * @return $this
    */
    public function setProfession($profession)
    {
        $this->container['profession'] = $profession;
        return $this;
    }

    /**
    * Gets address
    *  地址。
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
    * @param string|null $address 地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets confidence
    *  confidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\MyanmarIdcardConfidence|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\MyanmarIdcardConfidence|null $confidence confidence
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
    *  身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 当输入参数“return_idcard_type”为“true”时，才返回该参数。
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
    * @param string|null $idcardType 身份证的类型。取值如下所示： - normal：身份证原件 - copy：复印的身份证 当输入参数“return_idcard_type”为“true”时，才返回该参数。
    *
    * @return $this
    */
    public function setIdcardType($idcardType)
    {
        $this->container['idcardType'] = $idcardType;
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

