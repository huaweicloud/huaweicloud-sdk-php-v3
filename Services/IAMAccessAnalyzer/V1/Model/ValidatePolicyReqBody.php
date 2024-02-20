<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidatePolicyReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidatePolicyReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyDocument  此策略的json格式策略文档。
    * policyType  policyType
    * validatePolicyResourceType  validatePolicyResourceType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyDocument' => 'string',
            'policyType' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PolicyType',
            'validatePolicyResourceType' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ValidatePolicyResourceType'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyDocument  此策略的json格式策略文档。
    * policyType  policyType
    * validatePolicyResourceType  validatePolicyResourceType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyDocument' => null,
        'policyType' => null,
        'validatePolicyResourceType' => null
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
    * policyDocument  此策略的json格式策略文档。
    * policyType  policyType
    * validatePolicyResourceType  validatePolicyResourceType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyDocument' => 'policy_document',
            'policyType' => 'policy_type',
            'validatePolicyResourceType' => 'validate_policy_resource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyDocument  此策略的json格式策略文档。
    * policyType  policyType
    * validatePolicyResourceType  validatePolicyResourceType
    *
    * @var string[]
    */
    protected static $setters = [
            'policyDocument' => 'setPolicyDocument',
            'policyType' => 'setPolicyType',
            'validatePolicyResourceType' => 'setValidatePolicyResourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyDocument  此策略的json格式策略文档。
    * policyType  policyType
    * validatePolicyResourceType  validatePolicyResourceType
    *
    * @var string[]
    */
    protected static $getters = [
            'policyDocument' => 'getPolicyDocument',
            'policyType' => 'getPolicyType',
            'validatePolicyResourceType' => 'getValidatePolicyResourceType'
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
        $this->container['policyDocument'] = isset($data['policyDocument']) ? $data['policyDocument'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['validatePolicyResourceType'] = isset($data['validatePolicyResourceType']) ? $data['validatePolicyResourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyDocument'] === null) {
            $invalidProperties[] = "'policyDocument' can't be null";
        }
            if ((mb_strlen($this->container['policyDocument']) > 131072)) {
                $invalidProperties[] = "invalid value for 'policyDocument', the character length must be smaller than or equal to 131072.";
            }
            if ((mb_strlen($this->container['policyDocument']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyDocument', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
        }
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
    * Gets policyDocument
    *  此策略的json格式策略文档。
    *
    * @return string
    */
    public function getPolicyDocument()
    {
        return $this->container['policyDocument'];
    }

    /**
    * Sets policyDocument
    *
    * @param string $policyDocument 此策略的json格式策略文档。
    *
    * @return $this
    */
    public function setPolicyDocument($policyDocument)
    {
        $this->container['policyDocument'] = $policyDocument;
        return $this;
    }

    /**
    * Gets policyType
    *  policyType
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PolicyType
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PolicyType $policyType policyType
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets validatePolicyResourceType
    *  validatePolicyResourceType
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ValidatePolicyResourceType|null
    */
    public function getValidatePolicyResourceType()
    {
        return $this->container['validatePolicyResourceType'];
    }

    /**
    * Sets validatePolicyResourceType
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ValidatePolicyResourceType|null $validatePolicyResourceType validatePolicyResourceType
    *
    * @return $this
    */
    public function setValidatePolicyResourceType($validatePolicyResourceType)
    {
        $this->container['validatePolicyResourceType'] = $validatePolicyResourceType;
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

