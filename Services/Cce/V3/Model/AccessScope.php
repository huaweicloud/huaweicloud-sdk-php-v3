<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessScope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessScope';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespaces  **参数解释：** 集群命名空间的列表，允许使用通配符（“\\*”），表示所有命名空间。当选择了不同集群时，命名空间的列表可以为多个集群的集合，在转化成RBAC策略时，会自动判断集群下的命名空间是否存在。 **约束限制：** 当前最多支持同时授权500个命名空间。 **取值范围：** \\[\"\\*\"\\]或者集群命名空间列表。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespaces' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespaces  **参数解释：** 集群命名空间的列表，允许使用通配符（“\\*”），表示所有命名空间。当选择了不同集群时，命名空间的列表可以为多个集群的集合，在转化成RBAC策略时，会自动判断集群下的命名空间是否存在。 **约束限制：** 当前最多支持同时授权500个命名空间。 **取值范围：** \\[\"\\*\"\\]或者集群命名空间列表。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespaces' => null
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
    * namespaces  **参数解释：** 集群命名空间的列表，允许使用通配符（“\\*”），表示所有命名空间。当选择了不同集群时，命名空间的列表可以为多个集群的集合，在转化成RBAC策略时，会自动判断集群下的命名空间是否存在。 **约束限制：** 当前最多支持同时授权500个命名空间。 **取值范围：** \\[\"\\*\"\\]或者集群命名空间列表。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespaces' => 'namespaces'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespaces  **参数解释：** 集群命名空间的列表，允许使用通配符（“\\*”），表示所有命名空间。当选择了不同集群时，命名空间的列表可以为多个集群的集合，在转化成RBAC策略时，会自动判断集群下的命名空间是否存在。 **约束限制：** 当前最多支持同时授权500个命名空间。 **取值范围：** \\[\"\\*\"\\]或者集群命名空间列表。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'namespaces' => 'setNamespaces'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespaces  **参数解释：** 集群命名空间的列表，允许使用通配符（“\\*”），表示所有命名空间。当选择了不同集群时，命名空间的列表可以为多个集群的集合，在转化成RBAC策略时，会自动判断集群下的命名空间是否存在。 **约束限制：** 当前最多支持同时授权500个命名空间。 **取值范围：** \\[\"\\*\"\\]或者集群命名空间列表。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'namespaces' => 'getNamespaces'
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
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespaces'] === null) {
            $invalidProperties[] = "'namespaces' can't be null";
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
    * Gets namespaces
    *  **参数解释：** 集群命名空间的列表，允许使用通配符（“\\*”），表示所有命名空间。当选择了不同集群时，命名空间的列表可以为多个集群的集合，在转化成RBAC策略时，会自动判断集群下的命名空间是否存在。 **约束限制：** 当前最多支持同时授权500个命名空间。 **取值范围：** \\[\"\\*\"\\]或者集群命名空间列表。 **默认取值：** 不涉及
    *
    * @return string[]
    */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
    * Sets namespaces
    *
    * @param string[] $namespaces **参数解释：** 集群命名空间的列表，允许使用通配符（“\\*”），表示所有命名空间。当选择了不同集群时，命名空间的列表可以为多个集群的集合，在转化成RBAC策略时，会自动判断集群下的命名空间是否存在。 **约束限制：** 当前最多支持同时授权500个命名空间。 **取值范围：** \\[\"\\*\"\\]或者集群命名空间列表。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;
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

