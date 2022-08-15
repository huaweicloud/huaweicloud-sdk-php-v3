<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MacaoIdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MacaoIdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * side  证件图片正反面信息。可选值包括： - \"front\": 证件图片为正面 - \"back\": 证件图片为反面
    * name  姓名。
    * nameEn  英文姓名，姓名单词之间使用空格进行间隔。
    * sex  性别，返回“男”或“女”。
    * issueDate  本次发证日期。
    * expiryDate  证件有效期。
    * birthDate  出生日期。
    * initialIssueDate  首次发证日期。
    * height  身高。
    * number  身份证号。
    * symbols  身份证上的字母代码，表示出生地等信息。
    * machineCode1  身份证背面第一行机器码。
    * machineCode2  身份证背面第二行机器码。
    * machineCode3  身份证背面第三行机器码。
    * portraitImage  身份证头像照片的Base64编码。 若入参“return_portrait_image”字段缺失时，则此字段不存在。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'side' => 'string',
            'name' => 'string',
            'nameEn' => 'string',
            'sex' => 'string',
            'issueDate' => 'string',
            'expiryDate' => 'string',
            'birthDate' => 'string',
            'initialIssueDate' => 'string',
            'height' => 'string',
            'number' => 'string',
            'symbols' => 'string',
            'machineCode1' => 'string',
            'machineCode2' => 'string',
            'machineCode3' => 'string',
            'portraitImage' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * side  证件图片正反面信息。可选值包括： - \"front\": 证件图片为正面 - \"back\": 证件图片为反面
    * name  姓名。
    * nameEn  英文姓名，姓名单词之间使用空格进行间隔。
    * sex  性别，返回“男”或“女”。
    * issueDate  本次发证日期。
    * expiryDate  证件有效期。
    * birthDate  出生日期。
    * initialIssueDate  首次发证日期。
    * height  身高。
    * number  身份证号。
    * symbols  身份证上的字母代码，表示出生地等信息。
    * machineCode1  身份证背面第一行机器码。
    * machineCode2  身份证背面第二行机器码。
    * machineCode3  身份证背面第三行机器码。
    * portraitImage  身份证头像照片的Base64编码。 若入参“return_portrait_image”字段缺失时，则此字段不存在。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'side' => null,
        'name' => null,
        'nameEn' => null,
        'sex' => null,
        'issueDate' => null,
        'expiryDate' => null,
        'birthDate' => null,
        'initialIssueDate' => null,
        'height' => null,
        'number' => null,
        'symbols' => null,
        'machineCode1' => null,
        'machineCode2' => null,
        'machineCode3' => null,
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
    * side  证件图片正反面信息。可选值包括： - \"front\": 证件图片为正面 - \"back\": 证件图片为反面
    * name  姓名。
    * nameEn  英文姓名，姓名单词之间使用空格进行间隔。
    * sex  性别，返回“男”或“女”。
    * issueDate  本次发证日期。
    * expiryDate  证件有效期。
    * birthDate  出生日期。
    * initialIssueDate  首次发证日期。
    * height  身高。
    * number  身份证号。
    * symbols  身份证上的字母代码，表示出生地等信息。
    * machineCode1  身份证背面第一行机器码。
    * machineCode2  身份证背面第二行机器码。
    * machineCode3  身份证背面第三行机器码。
    * portraitImage  身份证头像照片的Base64编码。 若入参“return_portrait_image”字段缺失时，则此字段不存在。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'side' => 'side',
            'name' => 'name',
            'nameEn' => 'name_en',
            'sex' => 'sex',
            'issueDate' => 'issue_date',
            'expiryDate' => 'expiry_date',
            'birthDate' => 'birth_date',
            'initialIssueDate' => 'initial_issue_date',
            'height' => 'height',
            'number' => 'number',
            'symbols' => 'symbols',
            'machineCode1' => 'machine_code1',
            'machineCode2' => 'machine_code2',
            'machineCode3' => 'machine_code3',
            'portraitImage' => 'portrait_image',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * side  证件图片正反面信息。可选值包括： - \"front\": 证件图片为正面 - \"back\": 证件图片为反面
    * name  姓名。
    * nameEn  英文姓名，姓名单词之间使用空格进行间隔。
    * sex  性别，返回“男”或“女”。
    * issueDate  本次发证日期。
    * expiryDate  证件有效期。
    * birthDate  出生日期。
    * initialIssueDate  首次发证日期。
    * height  身高。
    * number  身份证号。
    * symbols  身份证上的字母代码，表示出生地等信息。
    * machineCode1  身份证背面第一行机器码。
    * machineCode2  身份证背面第二行机器码。
    * machineCode3  身份证背面第三行机器码。
    * portraitImage  身份证头像照片的Base64编码。 若入参“return_portrait_image”字段缺失时，则此字段不存在。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'side' => 'setSide',
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'sex' => 'setSex',
            'issueDate' => 'setIssueDate',
            'expiryDate' => 'setExpiryDate',
            'birthDate' => 'setBirthDate',
            'initialIssueDate' => 'setInitialIssueDate',
            'height' => 'setHeight',
            'number' => 'setNumber',
            'symbols' => 'setSymbols',
            'machineCode1' => 'setMachineCode1',
            'machineCode2' => 'setMachineCode2',
            'machineCode3' => 'setMachineCode3',
            'portraitImage' => 'setPortraitImage',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * side  证件图片正反面信息。可选值包括： - \"front\": 证件图片为正面 - \"back\": 证件图片为反面
    * name  姓名。
    * nameEn  英文姓名，姓名单词之间使用空格进行间隔。
    * sex  性别，返回“男”或“女”。
    * issueDate  本次发证日期。
    * expiryDate  证件有效期。
    * birthDate  出生日期。
    * initialIssueDate  首次发证日期。
    * height  身高。
    * number  身份证号。
    * symbols  身份证上的字母代码，表示出生地等信息。
    * machineCode1  身份证背面第一行机器码。
    * machineCode2  身份证背面第二行机器码。
    * machineCode3  身份证背面第三行机器码。
    * portraitImage  身份证头像照片的Base64编码。 若入参“return_portrait_image”字段缺失时，则此字段不存在。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'side' => 'getSide',
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'sex' => 'getSex',
            'issueDate' => 'getIssueDate',
            'expiryDate' => 'getExpiryDate',
            'birthDate' => 'getBirthDate',
            'initialIssueDate' => 'getInitialIssueDate',
            'height' => 'getHeight',
            'number' => 'getNumber',
            'symbols' => 'getSymbols',
            'machineCode1' => 'getMachineCode1',
            'machineCode2' => 'getMachineCode2',
            'machineCode3' => 'getMachineCode3',
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
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['initialIssueDate'] = isset($data['initialIssueDate']) ? $data['initialIssueDate'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['symbols'] = isset($data['symbols']) ? $data['symbols'] : null;
        $this->container['machineCode1'] = isset($data['machineCode1']) ? $data['machineCode1'] : null;
        $this->container['machineCode2'] = isset($data['machineCode2']) ? $data['machineCode2'] : null;
        $this->container['machineCode3'] = isset($data['machineCode3']) ? $data['machineCode3'] : null;
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
    * Gets side
    *  证件图片正反面信息。可选值包括： - \"front\": 证件图片为正面 - \"back\": 证件图片为反面
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
    * @param string|null $side 证件图片正反面信息。可选值包括： - \"front\": 证件图片为正面 - \"back\": 证件图片为反面
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
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
    * Gets nameEn
    *  英文姓名，姓名单词之间使用空格进行间隔。
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
    * @param string|null $nameEn 英文姓名，姓名单词之间使用空格进行间隔。
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
    *  性别，返回“男”或“女”。
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
    * @param string|null $sex 性别，返回“男”或“女”。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets issueDate
    *  本次发证日期。
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
    * @param string|null $issueDate 本次发证日期。
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
    *  证件有效期。
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
    * @param string|null $expiryDate 证件有效期。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
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
    * Gets initialIssueDate
    *  首次发证日期。
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
    * @param string|null $initialIssueDate 首次发证日期。
    *
    * @return $this
    */
    public function setInitialIssueDate($initialIssueDate)
    {
        $this->container['initialIssueDate'] = $initialIssueDate;
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
    *  身份证上的字母代码，表示出生地等信息。
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
    * @param string|null $symbols 身份证上的字母代码，表示出生地等信息。
    *
    * @return $this
    */
    public function setSymbols($symbols)
    {
        $this->container['symbols'] = $symbols;
        return $this;
    }

    /**
    * Gets machineCode1
    *  身份证背面第一行机器码。
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
    * @param string|null $machineCode1 身份证背面第一行机器码。
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
    *  身份证背面第二行机器码。
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
    * @param string|null $machineCode2 身份证背面第二行机器码。
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
    *  身份证背面第三行机器码。
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
    * @param string|null $machineCode3 身份证背面第三行机器码。
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
    *  身份证头像照片的Base64编码。 若入参“return_portrait_image”字段缺失时，则此字段不存在。
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
    * @param string|null $portraitImage 身份证头像照片的Base64编码。 若入参“return_portrait_image”字段缺失时，则此字段不存在。
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

