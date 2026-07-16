<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPoolsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPoolsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v2：当前资源版本为v2。
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - PoolList：资源池列表。
    * items  **参数解释**：资源池列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiVersion' => 'string',
            'kind' => 'string',
            'items' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolModel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v2：当前资源版本为v2。
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - PoolList：资源池列表。
    * items  **参数解释**：资源池列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiVersion' => null,
        'kind' => null,
        'items' => null
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
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v2：当前资源版本为v2。
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - PoolList：资源池列表。
    * items  **参数解释**：资源池列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiVersion' => 'apiVersion',
            'kind' => 'kind',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v2：当前资源版本为v2。
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - PoolList：资源池列表。
    * items  **参数解释**：资源池列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiVersion' => 'setApiVersion',
            'kind' => 'setKind',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v2：当前资源版本为v2。
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - PoolList：资源池列表。
    * items  **参数解释**：资源池列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiVersion' => 'getApiVersion',
            'kind' => 'getKind',
            'items' => 'getItems'
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets apiVersion
    *  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v2：当前资源版本为v2。
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
    * @param string|null $apiVersion **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v2：当前资源版本为v2。
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets kind
    *  **参数解释**：资源的类型。 **取值范围**：可选值如下： - PoolList：资源池列表。
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
    * @param string|null $kind **参数解释**：资源的类型。 **取值范围**：可选值如下： - PoolList：资源池列表。
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释**：资源池列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolModel[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolModel[]|null $items **参数解释**：资源池列表。
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

