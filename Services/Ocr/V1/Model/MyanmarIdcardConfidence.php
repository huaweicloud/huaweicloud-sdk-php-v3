<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MyanmarIdcardConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MyanmarIdcardConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nrcId  身份证号码置信度。
    * issueDate  签发日期置信度。
    * name  姓名置信度。
    * birth  出生日期置信度。
    * bloodlinesReligion  族群或宗教置信度。
    * height  身高置信度。
    * bloodGroup  血型置信度。
    * cardId  身份证的卡号（背面）置信度。
    * nrcIdBack  背面的身份证号码。
    * profession  职业置信度。
    * address  地址置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nrcId' => 'float',
            'issueDate' => 'float',
            'name' => 'float',
            'birth' => 'float',
            'bloodlinesReligion' => 'float',
            'height' => 'float',
            'bloodGroup' => 'float',
            'cardId' => 'float',
            'nrcIdBack' => 'float',
            'profession' => 'float',
            'address' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nrcId  身份证号码置信度。
    * issueDate  签发日期置信度。
    * name  姓名置信度。
    * birth  出生日期置信度。
    * bloodlinesReligion  族群或宗教置信度。
    * height  身高置信度。
    * bloodGroup  血型置信度。
    * cardId  身份证的卡号（背面）置信度。
    * nrcIdBack  背面的身份证号码。
    * profession  职业置信度。
    * address  地址置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nrcId' => 'float',
        'issueDate' => 'float',
        'name' => 'float',
        'birth' => 'float',
        'bloodlinesReligion' => 'float',
        'height' => 'float',
        'bloodGroup' => 'float',
        'cardId' => 'float',
        'nrcIdBack' => 'float',
        'profession' => 'float',
        'address' => 'float'
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
    * nrcId  身份证号码置信度。
    * issueDate  签发日期置信度。
    * name  姓名置信度。
    * birth  出生日期置信度。
    * bloodlinesReligion  族群或宗教置信度。
    * height  身高置信度。
    * bloodGroup  血型置信度。
    * cardId  身份证的卡号（背面）置信度。
    * nrcIdBack  背面的身份证号码。
    * profession  职业置信度。
    * address  地址置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nrcId' => 'nrc_id',
            'issueDate' => 'issue_date',
            'name' => 'name',
            'birth' => 'birth',
            'bloodlinesReligion' => 'bloodlines_religion',
            'height' => 'height',
            'bloodGroup' => 'blood_group',
            'cardId' => 'card_id',
            'nrcIdBack' => 'nrc_id_back',
            'profession' => 'profession',
            'address' => 'address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nrcId  身份证号码置信度。
    * issueDate  签发日期置信度。
    * name  姓名置信度。
    * birth  出生日期置信度。
    * bloodlinesReligion  族群或宗教置信度。
    * height  身高置信度。
    * bloodGroup  血型置信度。
    * cardId  身份证的卡号（背面）置信度。
    * nrcIdBack  背面的身份证号码。
    * profession  职业置信度。
    * address  地址置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'nrcId' => 'setNrcId',
            'issueDate' => 'setIssueDate',
            'name' => 'setName',
            'birth' => 'setBirth',
            'bloodlinesReligion' => 'setBloodlinesReligion',
            'height' => 'setHeight',
            'bloodGroup' => 'setBloodGroup',
            'cardId' => 'setCardId',
            'nrcIdBack' => 'setNrcIdBack',
            'profession' => 'setProfession',
            'address' => 'setAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nrcId  身份证号码置信度。
    * issueDate  签发日期置信度。
    * name  姓名置信度。
    * birth  出生日期置信度。
    * bloodlinesReligion  族群或宗教置信度。
    * height  身高置信度。
    * bloodGroup  血型置信度。
    * cardId  身份证的卡号（背面）置信度。
    * nrcIdBack  背面的身份证号码。
    * profession  职业置信度。
    * address  地址置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'nrcId' => 'getNrcId',
            'issueDate' => 'getIssueDate',
            'name' => 'getName',
            'birth' => 'getBirth',
            'bloodlinesReligion' => 'getBloodlinesReligion',
            'height' => 'getHeight',
            'bloodGroup' => 'getBloodGroup',
            'cardId' => 'getCardId',
            'nrcIdBack' => 'getNrcIdBack',
            'profession' => 'getProfession',
            'address' => 'getAddress'
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
        $this->container['nrcId'] = isset($data['nrcId']) ? $data['nrcId'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['bloodlinesReligion'] = isset($data['bloodlinesReligion']) ? $data['bloodlinesReligion'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['bloodGroup'] = isset($data['bloodGroup']) ? $data['bloodGroup'] : null;
        $this->container['cardId'] = isset($data['cardId']) ? $data['cardId'] : null;
        $this->container['nrcIdBack'] = isset($data['nrcIdBack']) ? $data['nrcIdBack'] : null;
        $this->container['profession'] = isset($data['profession']) ? $data['profession'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
    * Gets nrcId
    *  身份证号码置信度。
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
    * @param float|null $nrcId 身份证号码置信度。
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
    *  签发日期置信度。
    *
    * @return float|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param float|null $issueDate 签发日期置信度。
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
    *  姓名置信度。
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
    * @param float|null $name 姓名置信度。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets birth
    *  出生日期置信度。
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
    * @param float|null $birth 出生日期置信度。
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
    *  族群或宗教置信度。
    *
    * @return float|null
    */
    public function getBloodlinesReligion()
    {
        return $this->container['bloodlinesReligion'];
    }

    /**
    * Sets bloodlinesReligion
    *
    * @param float|null $bloodlinesReligion 族群或宗教置信度。
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
    *  身高置信度。
    *
    * @return float|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param float|null $height 身高置信度。
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
    *  血型置信度。
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
    * @param float|null $bloodGroup 血型置信度。
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
    *  身份证的卡号（背面）置信度。
    *
    * @return float|null
    */
    public function getCardId()
    {
        return $this->container['cardId'];
    }

    /**
    * Sets cardId
    *
    * @param float|null $cardId 身份证的卡号（背面）置信度。
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
    * @return float|null
    */
    public function getNrcIdBack()
    {
        return $this->container['nrcIdBack'];
    }

    /**
    * Sets nrcIdBack
    *
    * @param float|null $nrcIdBack 背面的身份证号码。
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
    *  职业置信度。
    *
    * @return float|null
    */
    public function getProfession()
    {
        return $this->container['profession'];
    }

    /**
    * Sets profession
    *
    * @param float|null $profession 职业置信度。
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
    *  地址置信度。
    *
    * @return float|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param float|null $address 地址置信度。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
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

