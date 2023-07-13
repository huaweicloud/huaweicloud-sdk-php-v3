<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExitEntryPermitResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExitEntryPermitResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名。
    * nameEn  英文姓名。
    * sex  性别。
    * birthDate  出生日期。
    * number  证件号。
    * issuingAuthority  签发机关。
    * issuePlace  签发地点。
    * validPeriod  有效期限。
    * machineCode  机器码。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  证件类型。可选值包括： - \"往来港澳通行证 \" - \"往来台湾通行证\"
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * endorsementInfoHk  endorsementInfoHk
    * endorsementInfoMo  endorsementInfoMo
    * endorsementInfoTw  endorsementInfoTw
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'nameEn' => 'string',
            'sex' => 'string',
            'birthDate' => 'string',
            'number' => 'string',
            'issuingAuthority' => 'string',
            'issuePlace' => 'string',
            'validPeriod' => 'string',
            'machineCode' => 'string',
            'portraitImage' => 'string',
            'portraitLocation' => 'int[][]',
            'type' => 'string',
            'side' => 'string',
            'endorsementInfoHk' => '\HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo',
            'endorsementInfoMo' => '\HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo',
            'endorsementInfoTw' => '\HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo',
            'confidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitConfidence'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名。
    * nameEn  英文姓名。
    * sex  性别。
    * birthDate  出生日期。
    * number  证件号。
    * issuingAuthority  签发机关。
    * issuePlace  签发地点。
    * validPeriod  有效期限。
    * machineCode  机器码。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  证件类型。可选值包括： - \"往来港澳通行证 \" - \"往来台湾通行证\"
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * endorsementInfoHk  endorsementInfoHk
    * endorsementInfoMo  endorsementInfoMo
    * endorsementInfoTw  endorsementInfoTw
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'nameEn' => null,
        'sex' => null,
        'birthDate' => null,
        'number' => null,
        'issuingAuthority' => null,
        'issuePlace' => null,
        'validPeriod' => null,
        'machineCode' => null,
        'portraitImage' => null,
        'portraitLocation' => 'int32',
        'type' => null,
        'side' => null,
        'endorsementInfoHk' => null,
        'endorsementInfoMo' => null,
        'endorsementInfoTw' => null,
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
    * name  姓名。
    * nameEn  英文姓名。
    * sex  性别。
    * birthDate  出生日期。
    * number  证件号。
    * issuingAuthority  签发机关。
    * issuePlace  签发地点。
    * validPeriod  有效期限。
    * machineCode  机器码。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  证件类型。可选值包括： - \"往来港澳通行证 \" - \"往来台湾通行证\"
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * endorsementInfoHk  endorsementInfoHk
    * endorsementInfoMo  endorsementInfoMo
    * endorsementInfoTw  endorsementInfoTw
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'nameEn' => 'name_en',
            'sex' => 'sex',
            'birthDate' => 'birth_date',
            'number' => 'number',
            'issuingAuthority' => 'issuing_authority',
            'issuePlace' => 'issue_place',
            'validPeriod' => 'valid_period',
            'machineCode' => 'machine_code',
            'portraitImage' => 'portrait_image',
            'portraitLocation' => 'portrait_location',
            'type' => 'type',
            'side' => 'side',
            'endorsementInfoHk' => 'endorsement_info_hk',
            'endorsementInfoMo' => 'endorsement_info_mo',
            'endorsementInfoTw' => 'endorsement_info_tw',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名。
    * nameEn  英文姓名。
    * sex  性别。
    * birthDate  出生日期。
    * number  证件号。
    * issuingAuthority  签发机关。
    * issuePlace  签发地点。
    * validPeriod  有效期限。
    * machineCode  机器码。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  证件类型。可选值包括： - \"往来港澳通行证 \" - \"往来台湾通行证\"
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * endorsementInfoHk  endorsementInfoHk
    * endorsementInfoMo  endorsementInfoMo
    * endorsementInfoTw  endorsementInfoTw
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'sex' => 'setSex',
            'birthDate' => 'setBirthDate',
            'number' => 'setNumber',
            'issuingAuthority' => 'setIssuingAuthority',
            'issuePlace' => 'setIssuePlace',
            'validPeriod' => 'setValidPeriod',
            'machineCode' => 'setMachineCode',
            'portraitImage' => 'setPortraitImage',
            'portraitLocation' => 'setPortraitLocation',
            'type' => 'setType',
            'side' => 'setSide',
            'endorsementInfoHk' => 'setEndorsementInfoHk',
            'endorsementInfoMo' => 'setEndorsementInfoMo',
            'endorsementInfoTw' => 'setEndorsementInfoTw',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名。
    * nameEn  英文姓名。
    * sex  性别。
    * birthDate  出生日期。
    * number  证件号。
    * issuingAuthority  签发机关。
    * issuePlace  签发地点。
    * validPeriod  有效期限。
    * machineCode  机器码。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  证件类型。可选值包括： - \"往来港澳通行证 \" - \"往来台湾通行证\"
    * side  证件图片正反面信息。可选值包括： - \"front\"：证件图片为正面 - \"back\"：证件图片为反面
    * endorsementInfoHk  endorsementInfoHk
    * endorsementInfoMo  endorsementInfoMo
    * endorsementInfoTw  endorsementInfoTw
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'sex' => 'getSex',
            'birthDate' => 'getBirthDate',
            'number' => 'getNumber',
            'issuingAuthority' => 'getIssuingAuthority',
            'issuePlace' => 'getIssuePlace',
            'validPeriod' => 'getValidPeriod',
            'machineCode' => 'getMachineCode',
            'portraitImage' => 'getPortraitImage',
            'portraitLocation' => 'getPortraitLocation',
            'type' => 'getType',
            'side' => 'getSide',
            'endorsementInfoHk' => 'getEndorsementInfoHk',
            'endorsementInfoMo' => 'getEndorsementInfoMo',
            'endorsementInfoTw' => 'getEndorsementInfoTw',
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
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['issuePlace'] = isset($data['issuePlace']) ? $data['issuePlace'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['machineCode'] = isset($data['machineCode']) ? $data['machineCode'] : null;
        $this->container['portraitImage'] = isset($data['portraitImage']) ? $data['portraitImage'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['endorsementInfoHk'] = isset($data['endorsementInfoHk']) ? $data['endorsementInfoHk'] : null;
        $this->container['endorsementInfoMo'] = isset($data['endorsementInfoMo']) ? $data['endorsementInfoMo'] : null;
        $this->container['endorsementInfoTw'] = isset($data['endorsementInfoTw']) ? $data['endorsementInfoTw'] : null;
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
    * Gets machineCode
    *  机器码。
    *
    * @return string|null
    */
    public function getMachineCode()
    {
        return $this->container['machineCode'];
    }

    /**
    * Sets machineCode
    *
    * @param string|null $machineCode 机器码。
    *
    * @return $this
    */
    public function setMachineCode($machineCode)
    {
        $this->container['machineCode'] = $machineCode;
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
    * Gets type
    *  证件类型。可选值包括： - \"往来港澳通行证 \" - \"往来台湾通行证\"
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
    * @param string|null $type 证件类型。可选值包括： - \"往来港澳通行证 \" - \"往来台湾通行证\"
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
    * Gets endorsementInfoHk
    *  endorsementInfoHk
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo|null
    */
    public function getEndorsementInfoHk()
    {
        return $this->container['endorsementInfoHk'];
    }

    /**
    * Sets endorsementInfoHk
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo|null $endorsementInfoHk endorsementInfoHk
    *
    * @return $this
    */
    public function setEndorsementInfoHk($endorsementInfoHk)
    {
        $this->container['endorsementInfoHk'] = $endorsementInfoHk;
        return $this;
    }

    /**
    * Gets endorsementInfoMo
    *  endorsementInfoMo
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo|null
    */
    public function getEndorsementInfoMo()
    {
        return $this->container['endorsementInfoMo'];
    }

    /**
    * Sets endorsementInfoMo
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo|null $endorsementInfoMo endorsementInfoMo
    *
    * @return $this
    */
    public function setEndorsementInfoMo($endorsementInfoMo)
    {
        $this->container['endorsementInfoMo'] = $endorsementInfoMo;
        return $this;
    }

    /**
    * Gets endorsementInfoTw
    *  endorsementInfoTw
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo|null
    */
    public function getEndorsementInfoTw()
    {
        return $this->container['endorsementInfoTw'];
    }

    /**
    * Sets endorsementInfoTw
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitEndorsementInfo|null $endorsementInfoTw endorsementInfoTw
    *
    * @return $this
    */
    public function setEndorsementInfoTw($endorsementInfoTw)
    {
        $this->container['endorsementInfoTw'] = $endorsementInfoTw;
        return $this;
    }

    /**
    * Gets confidence
    *  confidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitConfidence|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ExitEntryPermitConfidence|null $confidence confidence
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

