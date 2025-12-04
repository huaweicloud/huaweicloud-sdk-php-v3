<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserPolicyEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserPolicyEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  **参数解释**： 资源类型。 **约束限制**： 不涉及。 **取值范围**： - TOPIC：表示资源类型为Topic。 **默认取值**： TOPIC
    * resourceName  **参数解释**： 资源名称。 **约束限制**： 不涉及。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。 **默认取值**： 不涉及。
    * patternType  **参数解释**： 匹配方式。 **约束限制**： 不涉及。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。 **默认取值**： 不涉及。
    * accessPolicy  **参数解释**： 权限类型。 **约束限制**： 不涉及。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceName' => 'string',
            'patternType' => 'string',
            'accessPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  **参数解释**： 资源类型。 **约束限制**： 不涉及。 **取值范围**： - TOPIC：表示资源类型为Topic。 **默认取值**： TOPIC
    * resourceName  **参数解释**： 资源名称。 **约束限制**： 不涉及。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。 **默认取值**： 不涉及。
    * patternType  **参数解释**： 匹配方式。 **约束限制**： 不涉及。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。 **默认取值**： 不涉及。
    * accessPolicy  **参数解释**： 权限类型。 **约束限制**： 不涉及。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceName' => null,
        'patternType' => null,
        'accessPolicy' => null
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
    * resourceType  **参数解释**： 资源类型。 **约束限制**： 不涉及。 **取值范围**： - TOPIC：表示资源类型为Topic。 **默认取值**： TOPIC
    * resourceName  **参数解释**： 资源名称。 **约束限制**： 不涉及。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。 **默认取值**： 不涉及。
    * patternType  **参数解释**： 匹配方式。 **约束限制**： 不涉及。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。 **默认取值**： 不涉及。
    * accessPolicy  **参数解释**： 权限类型。 **约束限制**： 不涉及。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'patternType' => 'pattern_type',
            'accessPolicy' => 'access_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  **参数解释**： 资源类型。 **约束限制**： 不涉及。 **取值范围**： - TOPIC：表示资源类型为Topic。 **默认取值**： TOPIC
    * resourceName  **参数解释**： 资源名称。 **约束限制**： 不涉及。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。 **默认取值**： 不涉及。
    * patternType  **参数解释**： 匹配方式。 **约束限制**： 不涉及。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。 **默认取值**： 不涉及。
    * accessPolicy  **参数解释**： 权限类型。 **约束限制**： 不涉及。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'patternType' => 'setPatternType',
            'accessPolicy' => 'setAccessPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  **参数解释**： 资源类型。 **约束限制**： 不涉及。 **取值范围**： - TOPIC：表示资源类型为Topic。 **默认取值**： TOPIC
    * resourceName  **参数解释**： 资源名称。 **约束限制**： 不涉及。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。 **默认取值**： 不涉及。
    * patternType  **参数解释**： 匹配方式。 **约束限制**： 不涉及。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。 **默认取值**： 不涉及。
    * accessPolicy  **参数解释**： 权限类型。 **约束限制**： 不涉及。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'patternType' => 'getPatternType',
            'accessPolicy' => 'getAccessPolicy'
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
    const PATTERN_TYPE_LITERAL = 'LITERAL';
    const PATTERN_TYPE_PREFIXED = 'PREFIXED';
    const ACCESS_POLICY_ALL = 'all';
    const ACCESS_POLICY_PUB = 'pub';
    const ACCESS_POLICY_SUB = 'sub';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPatternTypeAllowableValues()
    {
        return [
            self::PATTERN_TYPE_LITERAL,
            self::PATTERN_TYPE_PREFIXED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessPolicyAllowableValues()
    {
        return [
            self::ACCESS_POLICY_ALL,
            self::ACCESS_POLICY_PUB,
            self::ACCESS_POLICY_SUB,
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['patternType'] = isset($data['patternType']) ? $data['patternType'] : null;
        $this->container['accessPolicy'] = isset($data['accessPolicy']) ? $data['accessPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPatternTypeAllowableValues();
                if (!is_null($this->container['patternType']) && !in_array($this->container['patternType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'patternType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAccessPolicyAllowableValues();
                if (!is_null($this->container['accessPolicy']) && !in_array($this->container['accessPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessPolicy', must be one of '%s'",
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
    * Gets resourceType
    *  **参数解释**： 资源类型。 **约束限制**： 不涉及。 **取值范围**： - TOPIC：表示资源类型为Topic。 **默认取值**： TOPIC
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType **参数解释**： 资源类型。 **约束限制**： 不涉及。 **取值范围**： - TOPIC：表示资源类型为Topic。 **默认取值**： TOPIC
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceName
    *  **参数解释**： 资源名称。 **约束限制**： 不涉及。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName **参数解释**： 资源名称。 **约束限制**： 不涉及。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets patternType
    *  **参数解释**： 匹配方式。 **约束限制**： 不涉及。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPatternType()
    {
        return $this->container['patternType'];
    }

    /**
    * Sets patternType
    *
    * @param string|null $patternType **参数解释**： 匹配方式。 **约束限制**： 不涉及。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPatternType($patternType)
    {
        $this->container['patternType'] = $patternType;
        return $this;
    }

    /**
    * Gets accessPolicy
    *  **参数解释**： 权限类型。 **约束限制**： 不涉及。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAccessPolicy()
    {
        return $this->container['accessPolicy'];
    }

    /**
    * Sets accessPolicy
    *
    * @param string|null $accessPolicy **参数解释**： 权限类型。 **约束限制**： 不涉及。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAccessPolicy($accessPolicy)
    {
        $this->container['accessPolicy'] = $accessPolicy;
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

