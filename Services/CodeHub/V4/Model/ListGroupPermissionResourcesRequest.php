<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGroupPermissionResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGroupPermissionResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scope  **参数解释：** 创建资源类型。 **约束限制：** - group 代码组。 - project  项目。 - all 代码组和项目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scope  **参数解释：** 创建资源类型。 **约束限制：** - group 代码组。 - project  项目。 - all 代码组和项目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scope' => null
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
    * scope  **参数解释：** 创建资源类型。 **约束限制：** - group 代码组。 - project  项目。 - all 代码组和项目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scope' => 'scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scope  **参数解释：** 创建资源类型。 **约束限制：** - group 代码组。 - project  项目。 - all 代码组和项目
    *
    * @var string[]
    */
    protected static $setters = [
            'scope' => 'setScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scope  **参数解释：** 创建资源类型。 **约束限制：** - group 代码组。 - project  项目。 - all 代码组和项目
    *
    * @var string[]
    */
    protected static $getters = [
            'scope' => 'getScope'
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
    const SCOPE_GROUP = 'group';
    const SCOPE_PROJECT = 'project';
    const SCOPE_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_GROUP,
            self::SCOPE_PROJECT,
            self::SCOPE_ALL,
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
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScopeAllowableValues();
                if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
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
    * Gets scope
    *  **参数解释：** 创建资源类型。 **约束限制：** - group 代码组。 - project  项目。 - all 代码组和项目
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope **参数解释：** 创建资源类型。 **约束限制：** - group 代码组。 - project  项目。 - all 代码组和项目
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
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

