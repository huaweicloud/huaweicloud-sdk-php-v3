<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesConfigurationsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesConfigurationsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entities  **参数解释**：  实例列表  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceCountLimit  **参数解释**：  实例的限制数量  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * totalCount  **参数解释**：  应用参数模板的实例总数  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entities' => '\HuaweiCloud\SDK\Rds\V3\Model\ApplicableInstanceInfo[]',
            'instanceCountLimit' => 'int',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entities  **参数解释**：  实例列表  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceCountLimit  **参数解释**：  实例的限制数量  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * totalCount  **参数解释**：  应用参数模板的实例总数  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entities' => null,
        'instanceCountLimit' => 'int32',
        'totalCount' => 'int32'
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
    * entities  **参数解释**：  实例列表  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceCountLimit  **参数解释**：  实例的限制数量  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * totalCount  **参数解释**：  应用参数模板的实例总数  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entities' => 'entities',
            'instanceCountLimit' => 'instance_count_limit',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entities  **参数解释**：  实例列表  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceCountLimit  **参数解释**：  实例的限制数量  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * totalCount  **参数解释**：  应用参数模板的实例总数  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'entities' => 'setEntities',
            'instanceCountLimit' => 'setInstanceCountLimit',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entities  **参数解释**：  实例列表  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceCountLimit  **参数解释**：  实例的限制数量  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * totalCount  **参数解释**：  应用参数模板的实例总数  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'entities' => 'getEntities',
            'instanceCountLimit' => 'getInstanceCountLimit',
            'totalCount' => 'getTotalCount'
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
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['instanceCountLimit'] = isset($data['instanceCountLimit']) ? $data['instanceCountLimit'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceCountLimit']) && ($this->container['instanceCountLimit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'instanceCountLimit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['instanceCountLimit']) && ($this->container['instanceCountLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'instanceCountLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 1000)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
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
    * Gets entities
    *  **参数解释**：  实例列表  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ApplicableInstanceInfo[]|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ApplicableInstanceInfo[]|null $entities **参数解释**：  实例列表  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
        return $this;
    }

    /**
    * Gets instanceCountLimit
    *  **参数解释**：  实例的限制数量  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getInstanceCountLimit()
    {
        return $this->container['instanceCountLimit'];
    }

    /**
    * Sets instanceCountLimit
    *
    * @param int|null $instanceCountLimit **参数解释**：  实例的限制数量  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceCountLimit($instanceCountLimit)
    {
        $this->container['instanceCountLimit'] = $instanceCountLimit;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**：  应用参数模板的实例总数  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**：  应用参数模板的实例总数  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

