<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InsurantItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InsurantItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * insurantName  insurantName
    * insurantSex  insurantSex
    * insurantBirthday  insurantBirthday
    * insurantIdType  insurantIdType
    * insurantIdNumber  insurantIdNumber
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'insurantName' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'insurantSex' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'insurantBirthday' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'insurantIdType' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'insurantIdNumber' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * insurantName  insurantName
    * insurantSex  insurantSex
    * insurantBirthday  insurantBirthday
    * insurantIdType  insurantIdType
    * insurantIdNumber  insurantIdNumber
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'insurantName' => null,
        'insurantSex' => null,
        'insurantBirthday' => null,
        'insurantIdType' => null,
        'insurantIdNumber' => null
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
    * insurantName  insurantName
    * insurantSex  insurantSex
    * insurantBirthday  insurantBirthday
    * insurantIdType  insurantIdType
    * insurantIdNumber  insurantIdNumber
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'insurantName' => 'insurant_name',
            'insurantSex' => 'insurant_sex',
            'insurantBirthday' => 'insurant_birthday',
            'insurantIdType' => 'insurant_id_type',
            'insurantIdNumber' => 'insurant_id_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * insurantName  insurantName
    * insurantSex  insurantSex
    * insurantBirthday  insurantBirthday
    * insurantIdType  insurantIdType
    * insurantIdNumber  insurantIdNumber
    *
    * @var string[]
    */
    protected static $setters = [
            'insurantName' => 'setInsurantName',
            'insurantSex' => 'setInsurantSex',
            'insurantBirthday' => 'setInsurantBirthday',
            'insurantIdType' => 'setInsurantIdType',
            'insurantIdNumber' => 'setInsurantIdNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * insurantName  insurantName
    * insurantSex  insurantSex
    * insurantBirthday  insurantBirthday
    * insurantIdType  insurantIdType
    * insurantIdNumber  insurantIdNumber
    *
    * @var string[]
    */
    protected static $getters = [
            'insurantName' => 'getInsurantName',
            'insurantSex' => 'getInsurantSex',
            'insurantBirthday' => 'getInsurantBirthday',
            'insurantIdType' => 'getInsurantIdType',
            'insurantIdNumber' => 'getInsurantIdNumber'
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
        $this->container['insurantName'] = isset($data['insurantName']) ? $data['insurantName'] : null;
        $this->container['insurantSex'] = isset($data['insurantSex']) ? $data['insurantSex'] : null;
        $this->container['insurantBirthday'] = isset($data['insurantBirthday']) ? $data['insurantBirthday'] : null;
        $this->container['insurantIdType'] = isset($data['insurantIdType']) ? $data['insurantIdType'] : null;
        $this->container['insurantIdNumber'] = isset($data['insurantIdNumber']) ? $data['insurantIdNumber'] : null;
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
    * Gets insurantName
    *  insurantName
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsurantName()
    {
        return $this->container['insurantName'];
    }

    /**
    * Sets insurantName
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insurantName insurantName
    *
    * @return $this
    */
    public function setInsurantName($insurantName)
    {
        $this->container['insurantName'] = $insurantName;
        return $this;
    }

    /**
    * Gets insurantSex
    *  insurantSex
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsurantSex()
    {
        return $this->container['insurantSex'];
    }

    /**
    * Sets insurantSex
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insurantSex insurantSex
    *
    * @return $this
    */
    public function setInsurantSex($insurantSex)
    {
        $this->container['insurantSex'] = $insurantSex;
        return $this;
    }

    /**
    * Gets insurantBirthday
    *  insurantBirthday
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsurantBirthday()
    {
        return $this->container['insurantBirthday'];
    }

    /**
    * Sets insurantBirthday
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insurantBirthday insurantBirthday
    *
    * @return $this
    */
    public function setInsurantBirthday($insurantBirthday)
    {
        $this->container['insurantBirthday'] = $insurantBirthday;
        return $this;
    }

    /**
    * Gets insurantIdType
    *  insurantIdType
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsurantIdType()
    {
        return $this->container['insurantIdType'];
    }

    /**
    * Sets insurantIdType
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insurantIdType insurantIdType
    *
    * @return $this
    */
    public function setInsurantIdType($insurantIdType)
    {
        $this->container['insurantIdType'] = $insurantIdType;
        return $this;
    }

    /**
    * Gets insurantIdNumber
    *  insurantIdNumber
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsurantIdNumber()
    {
        return $this->container['insurantIdNumber'];
    }

    /**
    * Sets insurantIdNumber
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insurantIdNumber insurantIdNumber
    *
    * @return $this
    */
    public function setInsurantIdNumber($insurantIdNumber)
    {
        $this->container['insurantIdNumber'] = $insurantIdNumber;
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

