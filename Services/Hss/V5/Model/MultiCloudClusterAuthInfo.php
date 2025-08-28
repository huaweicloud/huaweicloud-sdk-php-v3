<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiCloudClusterAuthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiCloudClusterAuthInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiGroups  **参数解释**： API组 **取值范围**： 字符长度1-64位
    * resources  **参数解释**： 资源 **取值范围**： 字符长度1-16位
    * function  **参数解释**： 所属特性 **取值范围**： 字符长度1-16位
    * isAuthed  是否有权访问
    * advice  **参数解释**： 修复建议 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiGroups' => 'string',
            'resources' => 'string',
            'function' => 'string',
            'isAuthed' => 'bool',
            'advice' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiGroups  **参数解释**： API组 **取值范围**： 字符长度1-64位
    * resources  **参数解释**： 资源 **取值范围**： 字符长度1-16位
    * function  **参数解释**： 所属特性 **取值范围**： 字符长度1-16位
    * isAuthed  是否有权访问
    * advice  **参数解释**： 修复建议 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiGroups' => null,
        'resources' => null,
        'function' => null,
        'isAuthed' => null,
        'advice' => null
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
    * apiGroups  **参数解释**： API组 **取值范围**： 字符长度1-64位
    * resources  **参数解释**： 资源 **取值范围**： 字符长度1-16位
    * function  **参数解释**： 所属特性 **取值范围**： 字符长度1-16位
    * isAuthed  是否有权访问
    * advice  **参数解释**： 修复建议 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiGroups' => 'api_groups',
            'resources' => 'resources',
            'function' => 'function',
            'isAuthed' => 'is_authed',
            'advice' => 'advice'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiGroups  **参数解释**： API组 **取值范围**： 字符长度1-64位
    * resources  **参数解释**： 资源 **取值范围**： 字符长度1-16位
    * function  **参数解释**： 所属特性 **取值范围**： 字符长度1-16位
    * isAuthed  是否有权访问
    * advice  **参数解释**： 修复建议 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'apiGroups' => 'setApiGroups',
            'resources' => 'setResources',
            'function' => 'setFunction',
            'isAuthed' => 'setIsAuthed',
            'advice' => 'setAdvice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiGroups  **参数解释**： API组 **取值范围**： 字符长度1-64位
    * resources  **参数解释**： 资源 **取值范围**： 字符长度1-16位
    * function  **参数解释**： 所属特性 **取值范围**： 字符长度1-16位
    * isAuthed  是否有权访问
    * advice  **参数解释**： 修复建议 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'apiGroups' => 'getApiGroups',
            'resources' => 'getResources',
            'function' => 'getFunction',
            'isAuthed' => 'getIsAuthed',
            'advice' => 'getAdvice'
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
        $this->container['apiGroups'] = isset($data['apiGroups']) ? $data['apiGroups'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['isAuthed'] = isset($data['isAuthed']) ? $data['isAuthed'] : null;
        $this->container['advice'] = isset($data['advice']) ? $data['advice'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['apiGroups']) && (mb_strlen($this->container['apiGroups']) > 64)) {
                $invalidProperties[] = "invalid value for 'apiGroups', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['apiGroups']) && (mb_strlen($this->container['apiGroups']) < 1)) {
                $invalidProperties[] = "invalid value for 'apiGroups', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resources']) && (mb_strlen($this->container['resources']) > 16)) {
                $invalidProperties[] = "invalid value for 'resources', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['resources']) && (mb_strlen($this->container['resources']) < 1)) {
                $invalidProperties[] = "invalid value for 'resources', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['function']) && (mb_strlen($this->container['function']) > 16)) {
                $invalidProperties[] = "invalid value for 'function', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['function']) && (mb_strlen($this->container['function']) < 1)) {
                $invalidProperties[] = "invalid value for 'function', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['advice']) && (mb_strlen($this->container['advice']) > 128)) {
                $invalidProperties[] = "invalid value for 'advice', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['advice']) && (mb_strlen($this->container['advice']) < 1)) {
                $invalidProperties[] = "invalid value for 'advice', the character length must be bigger than or equal to 1.";
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
    * Gets apiGroups
    *  **参数解释**： API组 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getApiGroups()
    {
        return $this->container['apiGroups'];
    }

    /**
    * Sets apiGroups
    *
    * @param string|null $apiGroups **参数解释**： API组 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setApiGroups($apiGroups)
    {
        $this->container['apiGroups'] = $apiGroups;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释**： 资源 **取值范围**： 字符长度1-16位
    *
    * @return string|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param string|null $resources **参数解释**： 资源 **取值范围**： 字符长度1-16位
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets function
    *  **参数解释**： 所属特性 **取值范围**： 字符长度1-16位
    *
    * @return string|null
    */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
    * Sets function
    *
    * @param string|null $function **参数解释**： 所属特性 **取值范围**： 字符长度1-16位
    *
    * @return $this
    */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
    * Gets isAuthed
    *  是否有权访问
    *
    * @return bool|null
    */
    public function getIsAuthed()
    {
        return $this->container['isAuthed'];
    }

    /**
    * Sets isAuthed
    *
    * @param bool|null $isAuthed 是否有权访问
    *
    * @return $this
    */
    public function setIsAuthed($isAuthed)
    {
        $this->container['isAuthed'] = $isAuthed;
        return $this;
    }

    /**
    * Gets advice
    *  **参数解释**： 修复建议 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getAdvice()
    {
        return $this->container['advice'];
    }

    /**
    * Sets advice
    *
    * @param string|null $advice **参数解释**： 修复建议 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setAdvice($advice)
    {
        $this->container['advice'] = $advice;
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

