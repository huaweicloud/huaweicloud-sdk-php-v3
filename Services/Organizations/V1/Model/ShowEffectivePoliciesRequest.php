<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEffectivePoliciesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEffectivePoliciesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entityId  账号的唯一标识符（ID）。当前还不支持指定根、组织单元。
    * policyType  策略类型的名称，tag_policy标签策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entityId' => 'string',
            'policyType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entityId  账号的唯一标识符（ID）。当前还不支持指定根、组织单元。
    * policyType  策略类型的名称，tag_policy标签策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entityId' => null,
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
    * entityId  账号的唯一标识符（ID）。当前还不支持指定根、组织单元。
    * policyType  策略类型的名称，tag_policy标签策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entityId' => 'entity_id',
            'policyType' => 'policy_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entityId  账号的唯一标识符（ID）。当前还不支持指定根、组织单元。
    * policyType  策略类型的名称，tag_policy标签策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'entityId' => 'setEntityId',
            'policyType' => 'setPolicyType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entityId  账号的唯一标识符（ID）。当前还不支持指定根、组织单元。
    * policyType  策略类型的名称，tag_policy标签策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'entityId' => 'getEntityId',
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
    const POLICY_TYPE_TAG_POLICY = 'tag_policy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPolicyTypeAllowableValues()
    {
        return [
            self::POLICY_TYPE_TAG_POLICY,
        ];
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
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
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
        if ($this->container['entityId'] === null) {
            $invalidProperties[] = "'entityId' can't be null";
        }
            if ((mb_strlen($this->container['entityId']) > 100)) {
                $invalidProperties[] = "invalid value for 'entityId', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^(?:r-[0-9a-z]{4,32}|[\\w-]+|ou-[0-9a-z]{8,32})$/", $this->container['entityId'])) {
                $invalidProperties[] = "invalid value for 'entityId', must be conform to the pattern /^(?:r-[0-9a-z]{4,32}|[\\w-]+|ou-[0-9a-z]{8,32})$/.";
            }
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
        }
            $allowedValues = $this->getPolicyTypeAllowableValues();
                if (!is_null($this->container['policyType']) && !in_array($this->container['policyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets entityId
    *  账号的唯一标识符（ID）。当前还不支持指定根、组织单元。
    *
    * @return string
    */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
    * Sets entityId
    *
    * @param string $entityId 账号的唯一标识符（ID）。当前还不支持指定根、组织单元。
    *
    * @return $this
    */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;
        return $this;
    }

    /**
    * Gets policyType
    *  策略类型的名称，tag_policy标签策略。
    *
    * @return string
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string $policyType 策略类型的名称，tag_policy标签策略。
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

