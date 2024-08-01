<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckNoNewAccessReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckNoNewAccessReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * existingPolicyDocument  该策略JSON格式策略文档。
    * newPolicyDocument  该策略JSON格式策略文档。
    * policyType  policyType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'existingPolicyDocument' => 'string',
            'newPolicyDocument' => 'string',
            'policyType' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PolicyDocumentType'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * existingPolicyDocument  该策略JSON格式策略文档。
    * newPolicyDocument  该策略JSON格式策略文档。
    * policyType  policyType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'existingPolicyDocument' => null,
        'newPolicyDocument' => null,
        'policyType' => null
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
    * existingPolicyDocument  该策略JSON格式策略文档。
    * newPolicyDocument  该策略JSON格式策略文档。
    * policyType  policyType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'existingPolicyDocument' => 'existing_policy_document',
            'newPolicyDocument' => 'new_policy_document',
            'policyType' => 'policy_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * existingPolicyDocument  该策略JSON格式策略文档。
    * newPolicyDocument  该策略JSON格式策略文档。
    * policyType  policyType
    *
    * @var string[]
    */
    protected static $setters = [
            'existingPolicyDocument' => 'setExistingPolicyDocument',
            'newPolicyDocument' => 'setNewPolicyDocument',
            'policyType' => 'setPolicyType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * existingPolicyDocument  该策略JSON格式策略文档。
    * newPolicyDocument  该策略JSON格式策略文档。
    * policyType  policyType
    *
    * @var string[]
    */
    protected static $getters = [
            'existingPolicyDocument' => 'getExistingPolicyDocument',
            'newPolicyDocument' => 'getNewPolicyDocument',
            'policyType' => 'getPolicyType'
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
        $this->container['existingPolicyDocument'] = isset($data['existingPolicyDocument']) ? $data['existingPolicyDocument'] : null;
        $this->container['newPolicyDocument'] = isset($data['newPolicyDocument']) ? $data['newPolicyDocument'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['existingPolicyDocument'] === null) {
            $invalidProperties[] = "'existingPolicyDocument' can't be null";
        }
            if ((mb_strlen($this->container['existingPolicyDocument']) > 131072)) {
                $invalidProperties[] = "invalid value for 'existingPolicyDocument', the character length must be smaller than or equal to 131072.";
            }
            if ((mb_strlen($this->container['existingPolicyDocument']) < 0)) {
                $invalidProperties[] = "invalid value for 'existingPolicyDocument', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['newPolicyDocument'] === null) {
            $invalidProperties[] = "'newPolicyDocument' can't be null";
        }
            if ((mb_strlen($this->container['newPolicyDocument']) > 131072)) {
                $invalidProperties[] = "invalid value for 'newPolicyDocument', the character length must be smaller than or equal to 131072.";
            }
            if ((mb_strlen($this->container['newPolicyDocument']) < 0)) {
                $invalidProperties[] = "invalid value for 'newPolicyDocument', the character length must be bigger than or equal to 0.";
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
    * Gets existingPolicyDocument
    *  该策略JSON格式策略文档。
    *
    * @return string
    */
    public function getExistingPolicyDocument()
    {
        return $this->container['existingPolicyDocument'];
    }

    /**
    * Sets existingPolicyDocument
    *
    * @param string $existingPolicyDocument 该策略JSON格式策略文档。
    *
    * @return $this
    */
    public function setExistingPolicyDocument($existingPolicyDocument)
    {
        $this->container['existingPolicyDocument'] = $existingPolicyDocument;
        return $this;
    }

    /**
    * Gets newPolicyDocument
    *  该策略JSON格式策略文档。
    *
    * @return string
    */
    public function getNewPolicyDocument()
    {
        return $this->container['newPolicyDocument'];
    }

    /**
    * Sets newPolicyDocument
    *
    * @param string $newPolicyDocument 该策略JSON格式策略文档。
    *
    * @return $this
    */
    public function setNewPolicyDocument($newPolicyDocument)
    {
        $this->container['newPolicyDocument'] = $newPolicyDocument;
        return $this;
    }

    /**
    * Gets policyType
    *  policyType
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PolicyDocumentType
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PolicyDocumentType $policyType policyType
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
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

