<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MyanmarDriverLicenseConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MyanmarDriverLicenseConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cardNumber  缅文驾驶证号置信度。
    * cardNumberEn  英文驾驶证号置信度。
    * name  缅文名字置信度。
    * nameEn  英文名字置信度。
    * nrcId  缅文nrc号码置信度。
    * nrcIdEn  英文nrc号码置信度。
    * birth  缅文出生日期置信度。
    * birthEn  英文出生日期置信度。
    * bloodGroup  缅文血型置信度。
    * bloodGroupEn  英文血型置信度。
    * expiriedDate  缅文有效期置信度。
    * expiriedDateEn  英文有效期置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cardNumber' => 'float',
            'cardNumberEn' => 'float',
            'name' => 'float',
            'nameEn' => 'float',
            'nrcId' => 'float',
            'nrcIdEn' => 'float',
            'birth' => 'float',
            'birthEn' => 'float',
            'bloodGroup' => 'float',
            'bloodGroupEn' => 'float',
            'expiriedDate' => 'float',
            'expiriedDateEn' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cardNumber  缅文驾驶证号置信度。
    * cardNumberEn  英文驾驶证号置信度。
    * name  缅文名字置信度。
    * nameEn  英文名字置信度。
    * nrcId  缅文nrc号码置信度。
    * nrcIdEn  英文nrc号码置信度。
    * birth  缅文出生日期置信度。
    * birthEn  英文出生日期置信度。
    * bloodGroup  缅文血型置信度。
    * bloodGroupEn  英文血型置信度。
    * expiriedDate  缅文有效期置信度。
    * expiriedDateEn  英文有效期置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cardNumber' => 'float',
        'cardNumberEn' => 'float',
        'name' => 'float',
        'nameEn' => 'float',
        'nrcId' => 'float',
        'nrcIdEn' => 'float',
        'birth' => 'float',
        'birthEn' => 'float',
        'bloodGroup' => 'float',
        'bloodGroupEn' => 'float',
        'expiriedDate' => 'float',
        'expiriedDateEn' => 'float'
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
    * cardNumber  缅文驾驶证号置信度。
    * cardNumberEn  英文驾驶证号置信度。
    * name  缅文名字置信度。
    * nameEn  英文名字置信度。
    * nrcId  缅文nrc号码置信度。
    * nrcIdEn  英文nrc号码置信度。
    * birth  缅文出生日期置信度。
    * birthEn  英文出生日期置信度。
    * bloodGroup  缅文血型置信度。
    * bloodGroupEn  英文血型置信度。
    * expiriedDate  缅文有效期置信度。
    * expiriedDateEn  英文有效期置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cardNumber' => 'card_number',
            'cardNumberEn' => 'card_number_en',
            'name' => 'name',
            'nameEn' => 'name_en',
            'nrcId' => 'nrc_id',
            'nrcIdEn' => 'nrc_id_en',
            'birth' => 'Birth',
            'birthEn' => 'birth_en',
            'bloodGroup' => 'blood_group',
            'bloodGroupEn' => 'blood_group_en',
            'expiriedDate' => 'expiried_date',
            'expiriedDateEn' => 'expiried_date_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cardNumber  缅文驾驶证号置信度。
    * cardNumberEn  英文驾驶证号置信度。
    * name  缅文名字置信度。
    * nameEn  英文名字置信度。
    * nrcId  缅文nrc号码置信度。
    * nrcIdEn  英文nrc号码置信度。
    * birth  缅文出生日期置信度。
    * birthEn  英文出生日期置信度。
    * bloodGroup  缅文血型置信度。
    * bloodGroupEn  英文血型置信度。
    * expiriedDate  缅文有效期置信度。
    * expiriedDateEn  英文有效期置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'cardNumber' => 'setCardNumber',
            'cardNumberEn' => 'setCardNumberEn',
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'nrcId' => 'setNrcId',
            'nrcIdEn' => 'setNrcIdEn',
            'birth' => 'setBirth',
            'birthEn' => 'setBirthEn',
            'bloodGroup' => 'setBloodGroup',
            'bloodGroupEn' => 'setBloodGroupEn',
            'expiriedDate' => 'setExpiriedDate',
            'expiriedDateEn' => 'setExpiriedDateEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cardNumber  缅文驾驶证号置信度。
    * cardNumberEn  英文驾驶证号置信度。
    * name  缅文名字置信度。
    * nameEn  英文名字置信度。
    * nrcId  缅文nrc号码置信度。
    * nrcIdEn  英文nrc号码置信度。
    * birth  缅文出生日期置信度。
    * birthEn  英文出生日期置信度。
    * bloodGroup  缅文血型置信度。
    * bloodGroupEn  英文血型置信度。
    * expiriedDate  缅文有效期置信度。
    * expiriedDateEn  英文有效期置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'cardNumber' => 'getCardNumber',
            'cardNumberEn' => 'getCardNumberEn',
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'nrcId' => 'getNrcId',
            'nrcIdEn' => 'getNrcIdEn',
            'birth' => 'getBirth',
            'birthEn' => 'getBirthEn',
            'bloodGroup' => 'getBloodGroup',
            'bloodGroupEn' => 'getBloodGroupEn',
            'expiriedDate' => 'getExpiriedDate',
            'expiriedDateEn' => 'getExpiriedDateEn'
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
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['cardNumberEn'] = isset($data['cardNumberEn']) ? $data['cardNumberEn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nrcId'] = isset($data['nrcId']) ? $data['nrcId'] : null;
        $this->container['nrcIdEn'] = isset($data['nrcIdEn']) ? $data['nrcIdEn'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['birthEn'] = isset($data['birthEn']) ? $data['birthEn'] : null;
        $this->container['bloodGroup'] = isset($data['bloodGroup']) ? $data['bloodGroup'] : null;
        $this->container['bloodGroupEn'] = isset($data['bloodGroupEn']) ? $data['bloodGroupEn'] : null;
        $this->container['expiriedDate'] = isset($data['expiriedDate']) ? $data['expiriedDate'] : null;
        $this->container['expiriedDateEn'] = isset($data['expiriedDateEn']) ? $data['expiriedDateEn'] : null;
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
    * Gets cardNumber
    *  缅文驾驶证号置信度。
    *
    * @return float|null
    */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
    * Sets cardNumber
    *
    * @param float|null $cardNumber 缅文驾驶证号置信度。
    *
    * @return $this
    */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;
        return $this;
    }

    /**
    * Gets cardNumberEn
    *  英文驾驶证号置信度。
    *
    * @return float|null
    */
    public function getCardNumberEn()
    {
        return $this->container['cardNumberEn'];
    }

    /**
    * Sets cardNumberEn
    *
    * @param float|null $cardNumberEn 英文驾驶证号置信度。
    *
    * @return $this
    */
    public function setCardNumberEn($cardNumberEn)
    {
        $this->container['cardNumberEn'] = $cardNumberEn;
        return $this;
    }

    /**
    * Gets name
    *  缅文名字置信度。
    *
    * @return float|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param float|null $name 缅文名字置信度。
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
    *  英文名字置信度。
    *
    * @return float|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param float|null $nameEn 英文名字置信度。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nrcId
    *  缅文nrc号码置信度。
    *
    * @return float|null
    */
    public function getNrcId()
    {
        return $this->container['nrcId'];
    }

    /**
    * Sets nrcId
    *
    * @param float|null $nrcId 缅文nrc号码置信度。
    *
    * @return $this
    */
    public function setNrcId($nrcId)
    {
        $this->container['nrcId'] = $nrcId;
        return $this;
    }

    /**
    * Gets nrcIdEn
    *  英文nrc号码置信度。
    *
    * @return float|null
    */
    public function getNrcIdEn()
    {
        return $this->container['nrcIdEn'];
    }

    /**
    * Sets nrcIdEn
    *
    * @param float|null $nrcIdEn 英文nrc号码置信度。
    *
    * @return $this
    */
    public function setNrcIdEn($nrcIdEn)
    {
        $this->container['nrcIdEn'] = $nrcIdEn;
        return $this;
    }

    /**
    * Gets birth
    *  缅文出生日期置信度。
    *
    * @return float|null
    */
    public function getBirth()
    {
        return $this->container['birth'];
    }

    /**
    * Sets birth
    *
    * @param float|null $birth 缅文出生日期置信度。
    *
    * @return $this
    */
    public function setBirth($birth)
    {
        $this->container['birth'] = $birth;
        return $this;
    }

    /**
    * Gets birthEn
    *  英文出生日期置信度。
    *
    * @return float|null
    */
    public function getBirthEn()
    {
        return $this->container['birthEn'];
    }

    /**
    * Sets birthEn
    *
    * @param float|null $birthEn 英文出生日期置信度。
    *
    * @return $this
    */
    public function setBirthEn($birthEn)
    {
        $this->container['birthEn'] = $birthEn;
        return $this;
    }

    /**
    * Gets bloodGroup
    *  缅文血型置信度。
    *
    * @return float|null
    */
    public function getBloodGroup()
    {
        return $this->container['bloodGroup'];
    }

    /**
    * Sets bloodGroup
    *
    * @param float|null $bloodGroup 缅文血型置信度。
    *
    * @return $this
    */
    public function setBloodGroup($bloodGroup)
    {
        $this->container['bloodGroup'] = $bloodGroup;
        return $this;
    }

    /**
    * Gets bloodGroupEn
    *  英文血型置信度。
    *
    * @return float|null
    */
    public function getBloodGroupEn()
    {
        return $this->container['bloodGroupEn'];
    }

    /**
    * Sets bloodGroupEn
    *
    * @param float|null $bloodGroupEn 英文血型置信度。
    *
    * @return $this
    */
    public function setBloodGroupEn($bloodGroupEn)
    {
        $this->container['bloodGroupEn'] = $bloodGroupEn;
        return $this;
    }

    /**
    * Gets expiriedDate
    *  缅文有效期置信度。
    *
    * @return float|null
    */
    public function getExpiriedDate()
    {
        return $this->container['expiriedDate'];
    }

    /**
    * Sets expiriedDate
    *
    * @param float|null $expiriedDate 缅文有效期置信度。
    *
    * @return $this
    */
    public function setExpiriedDate($expiriedDate)
    {
        $this->container['expiriedDate'] = $expiriedDate;
        return $this;
    }

    /**
    * Gets expiriedDateEn
    *  英文有效期置信度。
    *
    * @return float|null
    */
    public function getExpiriedDateEn()
    {
        return $this->container['expiriedDateEn'];
    }

    /**
    * Sets expiriedDateEn
    *
    * @param float|null $expiriedDateEn 英文有效期置信度。
    *
    * @return $this
    */
    public function setExpiriedDateEn($expiriedDateEn)
    {
        $this->container['expiriedDateEn'] = $expiriedDateEn;
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

