<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VehicleLicenseFront implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VehicleLicenseFront';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * vin  车辆识别代号。
    * engineNo  发动机号码。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'number' => 'string',
            'vehicleType' => 'string',
            'name' => 'string',
            'address' => 'string',
            'useCharacter' => 'string',
            'model' => 'string',
            'vin' => 'string',
            'engineNo' => 'string',
            'registerDate' => 'string',
            'issueDate' => 'string',
            'issuingAuthority' => 'string',
            'textLocation' => 'object',
            'alarmResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmResult',
            'alarmConfidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmConfidence'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * vin  车辆识别代号。
    * engineNo  发动机号码。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'number' => null,
        'vehicleType' => null,
        'name' => null,
        'address' => null,
        'useCharacter' => null,
        'model' => null,
        'vin' => null,
        'engineNo' => null,
        'registerDate' => null,
        'issueDate' => null,
        'issuingAuthority' => null,
        'textLocation' => null,
        'alarmResult' => null,
        'alarmConfidence' => null
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
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * vin  车辆识别代号。
    * engineNo  发动机号码。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'number' => 'number',
            'vehicleType' => 'vehicle_type',
            'name' => 'name',
            'address' => 'address',
            'useCharacter' => 'use_character',
            'model' => 'model',
            'vin' => 'vin',
            'engineNo' => 'engine_no',
            'registerDate' => 'register_date',
            'issueDate' => 'issue_date',
            'issuingAuthority' => 'issuing_authority',
            'textLocation' => 'text_location',
            'alarmResult' => 'alarm_result',
            'alarmConfidence' => 'alarm_confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * vin  车辆识别代号。
    * engineNo  发动机号码。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $setters = [
            'number' => 'setNumber',
            'vehicleType' => 'setVehicleType',
            'name' => 'setName',
            'address' => 'setAddress',
            'useCharacter' => 'setUseCharacter',
            'model' => 'setModel',
            'vin' => 'setVin',
            'engineNo' => 'setEngineNo',
            'registerDate' => 'setRegisterDate',
            'issueDate' => 'setIssueDate',
            'issuingAuthority' => 'setIssuingAuthority',
            'textLocation' => 'setTextLocation',
            'alarmResult' => 'setAlarmResult',
            'alarmConfidence' => 'setAlarmConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * number  号牌号码。
    * vehicleType  车辆类型。
    * name  所有人。
    * address  住址。
    * useCharacter  使用性质。
    * model  品牌型号。
    * vin  车辆识别代号。
    * engineNo  发动机号码。
    * registerDate  注册日期。
    * issueDate  发证日期。
    * issuingAuthority  发证机关。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $getters = [
            'number' => 'getNumber',
            'vehicleType' => 'getVehicleType',
            'name' => 'getName',
            'address' => 'getAddress',
            'useCharacter' => 'getUseCharacter',
            'model' => 'getModel',
            'vin' => 'getVin',
            'engineNo' => 'getEngineNo',
            'registerDate' => 'getRegisterDate',
            'issueDate' => 'getIssueDate',
            'issuingAuthority' => 'getIssuingAuthority',
            'textLocation' => 'getTextLocation',
            'alarmResult' => 'getAlarmResult',
            'alarmConfidence' => 'getAlarmConfidence'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['vehicleType'] = isset($data['vehicleType']) ? $data['vehicleType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['useCharacter'] = isset($data['useCharacter']) ? $data['useCharacter'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['vin'] = isset($data['vin']) ? $data['vin'] : null;
        $this->container['engineNo'] = isset($data['engineNo']) ? $data['engineNo'] : null;
        $this->container['registerDate'] = isset($data['registerDate']) ? $data['registerDate'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['alarmResult'] = isset($data['alarmResult']) ? $data['alarmResult'] : null;
        $this->container['alarmConfidence'] = isset($data['alarmConfidence']) ? $data['alarmConfidence'] : null;
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
    * Gets number
    *  号牌号码。
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
    * @param string|null $number 号牌号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets vehicleType
    *  车辆类型。
    *
    * @return string|null
    */
    public function getVehicleType()
    {
        return $this->container['vehicleType'];
    }

    /**
    * Sets vehicleType
    *
    * @param string|null $vehicleType 车辆类型。
    *
    * @return $this
    */
    public function setVehicleType($vehicleType)
    {
        $this->container['vehicleType'] = $vehicleType;
        return $this;
    }

    /**
    * Gets name
    *  所有人。
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
    * @param string|null $name 所有人。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets useCharacter
    *  使用性质。
    *
    * @return string|null
    */
    public function getUseCharacter()
    {
        return $this->container['useCharacter'];
    }

    /**
    * Sets useCharacter
    *
    * @param string|null $useCharacter 使用性质。
    *
    * @return $this
    */
    public function setUseCharacter($useCharacter)
    {
        $this->container['useCharacter'] = $useCharacter;
        return $this;
    }

    /**
    * Gets model
    *  品牌型号。
    *
    * @return string|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param string|null $model 品牌型号。
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
        return $this;
    }

    /**
    * Gets vin
    *  车辆识别代号。
    *
    * @return string|null
    */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
    * Sets vin
    *
    * @param string|null $vin 车辆识别代号。
    *
    * @return $this
    */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;
        return $this;
    }

    /**
    * Gets engineNo
    *  发动机号码。
    *
    * @return string|null
    */
    public function getEngineNo()
    {
        return $this->container['engineNo'];
    }

    /**
    * Sets engineNo
    *
    * @param string|null $engineNo 发动机号码。
    *
    * @return $this
    */
    public function setEngineNo($engineNo)
    {
        $this->container['engineNo'] = $engineNo;
        return $this;
    }

    /**
    * Gets registerDate
    *  注册日期。
    *
    * @return string|null
    */
    public function getRegisterDate()
    {
        return $this->container['registerDate'];
    }

    /**
    * Sets registerDate
    *
    * @param string|null $registerDate 注册日期。
    *
    * @return $this
    */
    public function setRegisterDate($registerDate)
    {
        $this->container['registerDate'] = $registerDate;
        return $this;
    }

    /**
    * Gets issueDate
    *  发证日期。
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
    * @param string|null $issueDate 发证日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
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
    * Gets textLocation
    *  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
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
    * @param object|null $textLocation 文本框在原图位置。输出左上、右上、右下、左下四个点坐标。  当“return_text_location”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Gets alarmResult
    *  alarmResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmResult|null
    */
    public function getAlarmResult()
    {
        return $this->container['alarmResult'];
    }

    /**
    * Sets alarmResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmResult|null $alarmResult alarmResult
    *
    * @return $this
    */
    public function setAlarmResult($alarmResult)
    {
        $this->container['alarmResult'] = $alarmResult;
        return $this;
    }

    /**
    * Gets alarmConfidence
    *  alarmConfidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmConfidence|null
    */
    public function getAlarmConfidence()
    {
        return $this->container['alarmConfidence'];
    }

    /**
    * Sets alarmConfidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\VehicleLicenseAlarmConfidence|null $alarmConfidence alarmConfidence
    *
    * @return $this
    */
    public function setAlarmConfidence($alarmConfidence)
    {
        $this->container['alarmConfidence'] = $alarmConfidence;
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

