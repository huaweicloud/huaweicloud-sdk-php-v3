<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectReference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  **参数解释**： 资源对象的API类型，例如，DaemonSet、Deployment 等。 **取值范围**： 不涉及。
    * apiVersion  **参数解释**： 资源对象的API版本。 **取值范围**： 不涉及。
    * namespace  **参数解释**： 资源对象的命名空间。 **取值范围**： 不涉及。
    * name  **参数解释**： 资源对象的名称。 **取值范围**： 不涉及。
    * uid  **参数解释**： 资源对象的唯一标识符（UID）。 **取值范围**： 不涉及。
    * resourceVersion  **参数解释**： 资源对象的当前版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'apiVersion' => 'string',
            'namespace' => 'string',
            'name' => 'string',
            'uid' => 'string',
            'resourceVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  **参数解释**： 资源对象的API类型，例如，DaemonSet、Deployment 等。 **取值范围**： 不涉及。
    * apiVersion  **参数解释**： 资源对象的API版本。 **取值范围**： 不涉及。
    * namespace  **参数解释**： 资源对象的命名空间。 **取值范围**： 不涉及。
    * name  **参数解释**： 资源对象的名称。 **取值范围**： 不涉及。
    * uid  **参数解释**： 资源对象的唯一标识符（UID）。 **取值范围**： 不涉及。
    * resourceVersion  **参数解释**： 资源对象的当前版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'apiVersion' => null,
        'namespace' => null,
        'name' => null,
        'uid' => null,
        'resourceVersion' => null
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
    * kind  **参数解释**： 资源对象的API类型，例如，DaemonSet、Deployment 等。 **取值范围**： 不涉及。
    * apiVersion  **参数解释**： 资源对象的API版本。 **取值范围**： 不涉及。
    * namespace  **参数解释**： 资源对象的命名空间。 **取值范围**： 不涉及。
    * name  **参数解释**： 资源对象的名称。 **取值范围**： 不涉及。
    * uid  **参数解释**： 资源对象的唯一标识符（UID）。 **取值范围**： 不涉及。
    * resourceVersion  **参数解释**： 资源对象的当前版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'apiVersion' => 'apiVersion',
            'namespace' => 'namespace',
            'name' => 'name',
            'uid' => 'uid',
            'resourceVersion' => 'resourceVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  **参数解释**： 资源对象的API类型，例如，DaemonSet、Deployment 等。 **取值范围**： 不涉及。
    * apiVersion  **参数解释**： 资源对象的API版本。 **取值范围**： 不涉及。
    * namespace  **参数解释**： 资源对象的命名空间。 **取值范围**： 不涉及。
    * name  **参数解释**： 资源对象的名称。 **取值范围**： 不涉及。
    * uid  **参数解释**： 资源对象的唯一标识符（UID）。 **取值范围**： 不涉及。
    * resourceVersion  **参数解释**： 资源对象的当前版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'apiVersion' => 'setApiVersion',
            'namespace' => 'setNamespace',
            'name' => 'setName',
            'uid' => 'setUid',
            'resourceVersion' => 'setResourceVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  **参数解释**： 资源对象的API类型，例如，DaemonSet、Deployment 等。 **取值范围**： 不涉及。
    * apiVersion  **参数解释**： 资源对象的API版本。 **取值范围**： 不涉及。
    * namespace  **参数解释**： 资源对象的命名空间。 **取值范围**： 不涉及。
    * name  **参数解释**： 资源对象的名称。 **取值范围**： 不涉及。
    * uid  **参数解释**： 资源对象的唯一标识符（UID）。 **取值范围**： 不涉及。
    * resourceVersion  **参数解释**： 资源对象的当前版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'apiVersion' => 'getApiVersion',
            'namespace' => 'getNamespace',
            'name' => 'getName',
            'uid' => 'getUid',
            'resourceVersion' => 'getResourceVersion'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['resourceVersion'] = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
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
    * Gets kind
    *  **参数解释**： 资源对象的API类型，例如，DaemonSet、Deployment 等。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind **参数解释**： 资源对象的API类型，例如，DaemonSet、Deployment 等。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets apiVersion
    *  **参数解释**： 资源对象的API版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion **参数解释**： 资源对象的API版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 资源对象的命名空间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**： 资源对象的命名空间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 资源对象的名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 资源对象的名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uid
    *  **参数解释**： 资源对象的唯一标识符（UID）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid **参数解释**： 资源对象的唯一标识符（UID）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets resourceVersion
    *  **参数解释**： 资源对象的当前版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getResourceVersion()
    {
        return $this->container['resourceVersion'];
    }

    /**
    * Sets resourceVersion
    *
    * @param string|null $resourceVersion **参数解释**： 资源对象的当前版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setResourceVersion($resourceVersion)
    {
        $this->container['resourceVersion'] = $resourceVersion;
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

