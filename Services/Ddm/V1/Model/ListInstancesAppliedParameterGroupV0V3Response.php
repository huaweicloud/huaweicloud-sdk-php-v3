<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesAppliedParameterGroupV0V3Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesAppliedParameterGroupV0V3Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entities  **参数解释**：  查询可应用的实例列表返回相关信息的集合。  **参数范围**：  不涉及。
    * instanceCountLimit  **参数解释**：  分页参数: 每页记录数。  **约束限制**：  不涉及。  **取值范围**：  大于0且小于等于128。  **默认取值**：  默认值是10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entities' => '\HuaweiCloud\SDK\Ddm\V1\Model\ApplicableInstance[]',
            'instanceCountLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entities  **参数解释**：  查询可应用的实例列表返回相关信息的集合。  **参数范围**：  不涉及。
    * instanceCountLimit  **参数解释**：  分页参数: 每页记录数。  **约束限制**：  不涉及。  **取值范围**：  大于0且小于等于128。  **默认取值**：  默认值是10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entities' => null,
        'instanceCountLimit' => 'int32'
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
    * entities  **参数解释**：  查询可应用的实例列表返回相关信息的集合。  **参数范围**：  不涉及。
    * instanceCountLimit  **参数解释**：  分页参数: 每页记录数。  **约束限制**：  不涉及。  **取值范围**：  大于0且小于等于128。  **默认取值**：  默认值是10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entities' => 'entities',
            'instanceCountLimit' => 'instance_count_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entities  **参数解释**：  查询可应用的实例列表返回相关信息的集合。  **参数范围**：  不涉及。
    * instanceCountLimit  **参数解释**：  分页参数: 每页记录数。  **约束限制**：  不涉及。  **取值范围**：  大于0且小于等于128。  **默认取值**：  默认值是10。
    *
    * @var string[]
    */
    protected static $setters = [
            'entities' => 'setEntities',
            'instanceCountLimit' => 'setInstanceCountLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entities  **参数解释**：  查询可应用的实例列表返回相关信息的集合。  **参数范围**：  不涉及。
    * instanceCountLimit  **参数解释**：  分页参数: 每页记录数。  **约束限制**：  不涉及。  **取值范围**：  大于0且小于等于128。  **默认取值**：  默认值是10。
    *
    * @var string[]
    */
    protected static $getters = [
            'entities' => 'getEntities',
            'instanceCountLimit' => 'getInstanceCountLimit'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceCountLimit']) && ($this->container['instanceCountLimit'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceCountLimit', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceCountLimit']) && ($this->container['instanceCountLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'instanceCountLimit', must be bigger than or equal to 1.";
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
    *  **参数解释**：  查询可应用的实例列表返回相关信息的集合。  **参数范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\ApplicableInstance[]|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\ApplicableInstance[]|null $entities **参数解释**：  查询可应用的实例列表返回相关信息的集合。  **参数范围**：  不涉及。
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
    *  **参数解释**：  分页参数: 每页记录数。  **约束限制**：  不涉及。  **取值范围**：  大于0且小于等于128。  **默认取值**：  默认值是10。
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
    * @param int|null $instanceCountLimit **参数解释**：  分页参数: 每页记录数。  **约束限制**：  不涉及。  **取值范围**：  大于0且小于等于128。  **默认取值**：  默认值是10。
    *
    * @return $this
    */
    public function setInstanceCountLimit($instanceCountLimit)
    {
        $this->container['instanceCountLimit'] = $instanceCountLimit;
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

