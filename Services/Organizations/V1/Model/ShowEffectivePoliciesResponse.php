<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEffectivePoliciesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEffectivePoliciesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastUpdatedAt  有效策略最后更新时间。
    * policyContent  有效策略文本内容。
    * policyType  策略类型的名称，tag_policy标签策略。
    * entityId  根、组织单元或账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastUpdatedAt' => '\DateTime',
            'policyContent' => 'string',
            'policyType' => 'string',
            'entityId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastUpdatedAt  有效策略最后更新时间。
    * policyContent  有效策略文本内容。
    * policyType  策略类型的名称，tag_policy标签策略。
    * entityId  根、组织单元或账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastUpdatedAt' => 'date-time',
        'policyContent' => null,
        'policyType' => null,
        'entityId' => null
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
    * lastUpdatedAt  有效策略最后更新时间。
    * policyContent  有效策略文本内容。
    * policyType  策略类型的名称，tag_policy标签策略。
    * entityId  根、组织单元或账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastUpdatedAt' => 'last_updated_at',
            'policyContent' => 'policy_content',
            'policyType' => 'policy_type',
            'entityId' => 'entity_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastUpdatedAt  有效策略最后更新时间。
    * policyContent  有效策略文本内容。
    * policyType  策略类型的名称，tag_policy标签策略。
    * entityId  根、组织单元或账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $setters = [
            'lastUpdatedAt' => 'setLastUpdatedAt',
            'policyContent' => 'setPolicyContent',
            'policyType' => 'setPolicyType',
            'entityId' => 'setEntityId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastUpdatedAt  有效策略最后更新时间。
    * policyContent  有效策略文本内容。
    * policyType  策略类型的名称，tag_policy标签策略。
    * entityId  根、组织单元或账号的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $getters = [
            'lastUpdatedAt' => 'getLastUpdatedAt',
            'policyContent' => 'getPolicyContent',
            'policyType' => 'getPolicyType',
            'entityId' => 'getEntityId'
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
        $this->container['lastUpdatedAt'] = isset($data['lastUpdatedAt']) ? $data['lastUpdatedAt'] : null;
        $this->container['policyContent'] = isset($data['policyContent']) ? $data['policyContent'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyContent']) && (mb_strlen($this->container['policyContent']) > 20000)) {
                $invalidProperties[] = "invalid value for 'policyContent', the character length must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['policyContent']) && (mb_strlen($this->container['policyContent']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyContent', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyContent']) && !preg_match("/^[\\s\\S]*$/", $this->container['policyContent'])) {
                $invalidProperties[] = "invalid value for 'policyContent', must be conform to the pattern /^[\\s\\S]*$/.";
            }
            $allowedValues = $this->getPolicyTypeAllowableValues();
                if (!is_null($this->container['policyType']) && !in_array($this->container['policyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['entityId']) && (mb_strlen($this->container['entityId']) > 100)) {
                $invalidProperties[] = "invalid value for 'entityId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['entityId']) && !preg_match("/^(?:r-[0-9a-z]{4,32}|[\\w-]+|ou-[0-9a-z]{8,32})$/", $this->container['entityId'])) {
                $invalidProperties[] = "invalid value for 'entityId', must be conform to the pattern /^(?:r-[0-9a-z]{4,32}|[\\w-]+|ou-[0-9a-z]{8,32})$/.";
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
    * Gets lastUpdatedAt
    *  有效策略最后更新时间。
    *
    * @return \DateTime|null
    */
    public function getLastUpdatedAt()
    {
        return $this->container['lastUpdatedAt'];
    }

    /**
    * Sets lastUpdatedAt
    *
    * @param \DateTime|null $lastUpdatedAt 有效策略最后更新时间。
    *
    * @return $this
    */
    public function setLastUpdatedAt($lastUpdatedAt)
    {
        $this->container['lastUpdatedAt'] = $lastUpdatedAt;
        return $this;
    }

    /**
    * Gets policyContent
    *  有效策略文本内容。
    *
    * @return string|null
    */
    public function getPolicyContent()
    {
        return $this->container['policyContent'];
    }

    /**
    * Sets policyContent
    *
    * @param string|null $policyContent 有效策略文本内容。
    *
    * @return $this
    */
    public function setPolicyContent($policyContent)
    {
        $this->container['policyContent'] = $policyContent;
        return $this;
    }

    /**
    * Gets policyType
    *  策略类型的名称，tag_policy标签策略。
    *
    * @return string|null
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string|null $policyType 策略类型的名称，tag_policy标签策略。
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets entityId
    *  根、组织单元或账号的唯一标识符（ID）。
    *
    * @return string|null
    */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
    * Sets entityId
    *
    * @param string|null $entityId 根、组织单元或账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;
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

