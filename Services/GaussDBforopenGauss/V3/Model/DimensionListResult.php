<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimensionListResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimensionListResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**: 统计数据名称。 **取值范围**: 不涉及。
    * activeNum  **参数解释**: 活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 总会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'activeNum' => 'string',
            'totalNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**: 统计数据名称。 **取值范围**: 不涉及。
    * activeNum  **参数解释**: 活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 总会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'activeNum' => null,
        'totalNum' => null
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
    * name  **参数解释**: 统计数据名称。 **取值范围**: 不涉及。
    * activeNum  **参数解释**: 活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 总会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'activeNum' => 'active_num',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**: 统计数据名称。 **取值范围**: 不涉及。
    * activeNum  **参数解释**: 活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 总会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'activeNum' => 'setActiveNum',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**: 统计数据名称。 **取值范围**: 不涉及。
    * activeNum  **参数解释**: 活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 总会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'activeNum' => 'getActiveNum',
            'totalNum' => 'getTotalNum'
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
        $this->container['activeNum'] = isset($data['activeNum']) ? $data['activeNum'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
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
    *  **参数解释**: 统计数据名称。 **取值范围**: 不涉及。
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
    * @param string|null $name **参数解释**: 统计数据名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets activeNum
    *  **参数解释**: 活跃会话数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getActiveNum()
    {
        return $this->container['activeNum'];
    }

    /**
    * Sets activeNum
    *
    * @param string|null $activeNum **参数解释**: 活跃会话数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setActiveNum($activeNum)
    {
        $this->container['activeNum'] = $activeNum;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释**: 总会话数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param string|null $totalNum **参数解释**: 总会话数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

