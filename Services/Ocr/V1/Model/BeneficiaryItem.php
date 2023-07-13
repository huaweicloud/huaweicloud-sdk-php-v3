<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BeneficiaryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BeneficiaryItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beneficiaryName  beneficiaryName
    * beneficiaryType  beneficiaryType
    * beneficiaryOrder  beneficiaryOrder
    * beneficiaryShare  beneficiaryShare
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beneficiaryName' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'beneficiaryType' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'beneficiaryOrder' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'beneficiaryShare' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beneficiaryName  beneficiaryName
    * beneficiaryType  beneficiaryType
    * beneficiaryOrder  beneficiaryOrder
    * beneficiaryShare  beneficiaryShare
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beneficiaryName' => null,
        'beneficiaryType' => null,
        'beneficiaryOrder' => null,
        'beneficiaryShare' => null
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
    * beneficiaryName  beneficiaryName
    * beneficiaryType  beneficiaryType
    * beneficiaryOrder  beneficiaryOrder
    * beneficiaryShare  beneficiaryShare
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beneficiaryName' => 'beneficiary_name',
            'beneficiaryType' => 'beneficiary_type',
            'beneficiaryOrder' => 'beneficiary_order',
            'beneficiaryShare' => 'beneficiary_share'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beneficiaryName  beneficiaryName
    * beneficiaryType  beneficiaryType
    * beneficiaryOrder  beneficiaryOrder
    * beneficiaryShare  beneficiaryShare
    *
    * @var string[]
    */
    protected static $setters = [
            'beneficiaryName' => 'setBeneficiaryName',
            'beneficiaryType' => 'setBeneficiaryType',
            'beneficiaryOrder' => 'setBeneficiaryOrder',
            'beneficiaryShare' => 'setBeneficiaryShare'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beneficiaryName  beneficiaryName
    * beneficiaryType  beneficiaryType
    * beneficiaryOrder  beneficiaryOrder
    * beneficiaryShare  beneficiaryShare
    *
    * @var string[]
    */
    protected static $getters = [
            'beneficiaryName' => 'getBeneficiaryName',
            'beneficiaryType' => 'getBeneficiaryType',
            'beneficiaryOrder' => 'getBeneficiaryOrder',
            'beneficiaryShare' => 'getBeneficiaryShare'
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
        $this->container['beneficiaryName'] = isset($data['beneficiaryName']) ? $data['beneficiaryName'] : null;
        $this->container['beneficiaryType'] = isset($data['beneficiaryType']) ? $data['beneficiaryType'] : null;
        $this->container['beneficiaryOrder'] = isset($data['beneficiaryOrder']) ? $data['beneficiaryOrder'] : null;
        $this->container['beneficiaryShare'] = isset($data['beneficiaryShare']) ? $data['beneficiaryShare'] : null;
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
    * Gets beneficiaryName
    *  beneficiaryName
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getBeneficiaryName()
    {
        return $this->container['beneficiaryName'];
    }

    /**
    * Sets beneficiaryName
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $beneficiaryName beneficiaryName
    *
    * @return $this
    */
    public function setBeneficiaryName($beneficiaryName)
    {
        $this->container['beneficiaryName'] = $beneficiaryName;
        return $this;
    }

    /**
    * Gets beneficiaryType
    *  beneficiaryType
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getBeneficiaryType()
    {
        return $this->container['beneficiaryType'];
    }

    /**
    * Sets beneficiaryType
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $beneficiaryType beneficiaryType
    *
    * @return $this
    */
    public function setBeneficiaryType($beneficiaryType)
    {
        $this->container['beneficiaryType'] = $beneficiaryType;
        return $this;
    }

    /**
    * Gets beneficiaryOrder
    *  beneficiaryOrder
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getBeneficiaryOrder()
    {
        return $this->container['beneficiaryOrder'];
    }

    /**
    * Sets beneficiaryOrder
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $beneficiaryOrder beneficiaryOrder
    *
    * @return $this
    */
    public function setBeneficiaryOrder($beneficiaryOrder)
    {
        $this->container['beneficiaryOrder'] = $beneficiaryOrder;
        return $this;
    }

    /**
    * Gets beneficiaryShare
    *  beneficiaryShare
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getBeneficiaryShare()
    {
        return $this->container['beneficiaryShare'];
    }

    /**
    * Sets beneficiaryShare
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $beneficiaryShare beneficiaryShare
    *
    * @return $this
    */
    public function setBeneficiaryShare($beneficiaryShare)
    {
        $this->container['beneficiaryShare'] = $beneficiaryShare;
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

