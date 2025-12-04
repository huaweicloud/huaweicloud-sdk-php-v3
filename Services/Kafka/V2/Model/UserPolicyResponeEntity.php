<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserPolicyResponeEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserPolicyResponeEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - TOPIC：表示资源类型为Topic。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。
    * patternType  **参数解释**： 匹配方式。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。
    * accessPolicy  **参数解释**： 权限类型。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。
    * aclPermissionType  **参数解释**： Acl权限类型。 **取值范围**： - ALLOW：允许用户进行某种操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceName' => 'string',
            'patternType' => 'string',
            'accessPolicy' => 'string',
            'aclPermissionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - TOPIC：表示资源类型为Topic。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。
    * patternType  **参数解释**： 匹配方式。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。
    * accessPolicy  **参数解释**： 权限类型。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。
    * aclPermissionType  **参数解释**： Acl权限类型。 **取值范围**： - ALLOW：允许用户进行某种操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceName' => null,
        'patternType' => null,
        'accessPolicy' => null,
        'aclPermissionType' => null
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
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - TOPIC：表示资源类型为Topic。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。
    * patternType  **参数解释**： 匹配方式。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。
    * accessPolicy  **参数解释**： 权限类型。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。
    * aclPermissionType  **参数解释**： Acl权限类型。 **取值范围**： - ALLOW：允许用户进行某种操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'patternType' => 'pattern_type',
            'accessPolicy' => 'access_policy',
            'aclPermissionType' => 'acl_permission_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - TOPIC：表示资源类型为Topic。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。
    * patternType  **参数解释**： 匹配方式。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。
    * accessPolicy  **参数解释**： 权限类型。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。
    * aclPermissionType  **参数解释**： Acl权限类型。 **取值范围**： - ALLOW：允许用户进行某种操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'patternType' => 'setPatternType',
            'accessPolicy' => 'setAccessPolicy',
            'aclPermissionType' => 'setAclPermissionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - TOPIC：表示资源类型为Topic。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。
    * patternType  **参数解释**： 匹配方式。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。
    * accessPolicy  **参数解释**： 权限类型。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。
    * aclPermissionType  **参数解释**： Acl权限类型。 **取值范围**： - ALLOW：允许用户进行某种操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'patternType' => 'getPatternType',
            'accessPolicy' => 'getAccessPolicy',
            'aclPermissionType' => 'getAclPermissionType'
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['patternType'] = isset($data['patternType']) ? $data['patternType'] : null;
        $this->container['accessPolicy'] = isset($data['accessPolicy']) ? $data['accessPolicy'] : null;
        $this->container['aclPermissionType'] = isset($data['aclPermissionType']) ? $data['aclPermissionType'] : null;
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
    * Gets resourceType
    *  **参数解释**： 资源类型。 **取值范围**： - TOPIC：表示资源类型为Topic。
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
    * @param string|null $resourceType **参数解释**： 资源类型。 **取值范围**： - TOPIC：表示资源类型为Topic。
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
    *  **参数解释**： 资源名称。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。
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
    * @param string|null $resourceName **参数解释**： 资源名称。 **取值范围**： - 已有的Topic名称。 - 符合Topic名称规则的前缀。 - “*”表示匹配所有的Topic。
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
    *  **参数解释**： 匹配方式。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。
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
    * @param string|null $patternType **参数解释**： 匹配方式。 **取值范围**： - LITERAL：完全匹配。 - PREFIXED：前缀匹配。
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
    *  **参数解释**： 权限类型。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。
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
    * @param string|null $accessPolicy **参数解释**： 权限类型。 **取值范围**： - all：拥有发布、订阅权限。 - pub：拥有发布权限。 - sub：拥有订阅权限。
    *
    * @return $this
    */
    public function setAccessPolicy($accessPolicy)
    {
        $this->container['accessPolicy'] = $accessPolicy;
        return $this;
    }

    /**
    * Gets aclPermissionType
    *  **参数解释**： Acl权限类型。 **取值范围**： - ALLOW：允许用户进行某种操作。
    *
    * @return string|null
    */
    public function getAclPermissionType()
    {
        return $this->container['aclPermissionType'];
    }

    /**
    * Sets aclPermissionType
    *
    * @param string|null $aclPermissionType **参数解释**： Acl权限类型。 **取值范围**： - ALLOW：允许用户进行某种操作。
    *
    * @return $this
    */
    public function setAclPermissionType($aclPermissionType)
    {
        $this->container['aclPermissionType'] = $aclPermissionType;
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

