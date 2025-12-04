<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCeshierarchyRespChildren implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCeshierarchyResp_children';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 子维度名称。 **取值范围**： 不涉及。
    * metrics  **参数解释**： 监控指标名称列表。 **取值范围**： 不涉及。
    * keyName  **参数解释**： 监控查询使用的key。
    * dimRouter  **参数解释**： 监控维度路由。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'metrics' => 'string[]',
            'keyName' => 'string[]',
            'dimRouter' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 子维度名称。 **取值范围**： 不涉及。
    * metrics  **参数解释**： 监控指标名称列表。 **取值范围**： 不涉及。
    * keyName  **参数解释**： 监控查询使用的key。
    * dimRouter  **参数解释**： 监控维度路由。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'metrics' => null,
        'keyName' => null,
        'dimRouter' => null
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
    * name  **参数解释**： 子维度名称。 **取值范围**： 不涉及。
    * metrics  **参数解释**： 监控指标名称列表。 **取值范围**： 不涉及。
    * keyName  **参数解释**： 监控查询使用的key。
    * dimRouter  **参数解释**： 监控维度路由。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'metrics' => 'metrics',
            'keyName' => 'key_name',
            'dimRouter' => 'dim_router'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 子维度名称。 **取值范围**： 不涉及。
    * metrics  **参数解释**： 监控指标名称列表。 **取值范围**： 不涉及。
    * keyName  **参数解释**： 监控查询使用的key。
    * dimRouter  **参数解释**： 监控维度路由。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'metrics' => 'setMetrics',
            'keyName' => 'setKeyName',
            'dimRouter' => 'setDimRouter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 子维度名称。 **取值范围**： 不涉及。
    * metrics  **参数解释**： 监控指标名称列表。 **取值范围**： 不涉及。
    * keyName  **参数解释**： 监控查询使用的key。
    * dimRouter  **参数解释**： 监控维度路由。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'metrics' => 'getMetrics',
            'keyName' => 'getKeyName',
            'dimRouter' => 'getDimRouter'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['dimRouter'] = isset($data['dimRouter']) ? $data['dimRouter'] : null;
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
    * Gets name
    *  **参数解释**： 子维度名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 子维度名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets metrics
    *  **参数解释**： 监控指标名称列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param string[]|null $metrics **参数解释**： 监控指标名称列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets keyName
    *  **参数解释**： 监控查询使用的key。
    *
    * @return string[]|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string[]|null $keyName **参数解释**： 监控查询使用的key。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets dimRouter
    *  **参数解释**： 监控维度路由。
    *
    * @return string[]|null
    */
    public function getDimRouter()
    {
        return $this->container['dimRouter'];
    }

    /**
    * Sets dimRouter
    *
    * @param string[]|null $dimRouter **参数解释**： 监控维度路由。
    *
    * @return $this
    */
    public function setDimRouter($dimRouter)
    {
        $this->container['dimRouter'] = $dimRouter;
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

