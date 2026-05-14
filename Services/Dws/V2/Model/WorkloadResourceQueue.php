<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadResourceQueue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadResourceQueue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **约束限制**： 不涉及。 **取值范围**： - on：开启 - off：关闭 **默认取值**： on
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **约束限制**： 不涉及。 **取值范围**： -1以上，-1表示不限制。 **默认取值**： -1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shortQueryOptimize' => 'string',
            'shortQueryConcurrencyNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **约束限制**： 不涉及。 **取值范围**： - on：开启 - off：关闭 **默认取值**： on
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **约束限制**： 不涉及。 **取值范围**： -1以上，-1表示不限制。 **默认取值**： -1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shortQueryOptimize' => null,
        'shortQueryConcurrencyNum' => null
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
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **约束限制**： 不涉及。 **取值范围**： - on：开启 - off：关闭 **默认取值**： on
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **约束限制**： 不涉及。 **取值范围**： -1以上，-1表示不限制。 **默认取值**： -1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shortQueryOptimize' => 'short_query_optimize',
            'shortQueryConcurrencyNum' => 'short_query_concurrency_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **约束限制**： 不涉及。 **取值范围**： - on：开启 - off：关闭 **默认取值**： on
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **约束限制**： 不涉及。 **取值范围**： -1以上，-1表示不限制。 **默认取值**： -1
    *
    * @var string[]
    */
    protected static $setters = [
            'shortQueryOptimize' => 'setShortQueryOptimize',
            'shortQueryConcurrencyNum' => 'setShortQueryConcurrencyNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **约束限制**： 不涉及。 **取值范围**： - on：开启 - off：关闭 **默认取值**： on
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **约束限制**： 不涉及。 **取值范围**： -1以上，-1表示不限制。 **默认取值**： -1
    *
    * @var string[]
    */
    protected static $getters = [
            'shortQueryOptimize' => 'getShortQueryOptimize',
            'shortQueryConcurrencyNum' => 'getShortQueryConcurrencyNum'
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
        $this->container['shortQueryOptimize'] = isset($data['shortQueryOptimize']) ? $data['shortQueryOptimize'] : null;
        $this->container['shortQueryConcurrencyNum'] = isset($data['shortQueryConcurrencyNum']) ? $data['shortQueryConcurrencyNum'] : null;
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
    * Gets shortQueryOptimize
    *  **参数解释**： 工作负载队列短查询加速开关。 **约束限制**： 不涉及。 **取值范围**： - on：开启 - off：关闭 **默认取值**： on
    *
    * @return string|null
    */
    public function getShortQueryOptimize()
    {
        return $this->container['shortQueryOptimize'];
    }

    /**
    * Sets shortQueryOptimize
    *
    * @param string|null $shortQueryOptimize **参数解释**： 工作负载队列短查询加速开关。 **约束限制**： 不涉及。 **取值范围**： - on：开启 - off：关闭 **默认取值**： on
    *
    * @return $this
    */
    public function setShortQueryOptimize($shortQueryOptimize)
    {
        $this->container['shortQueryOptimize'] = $shortQueryOptimize;
        return $this;
    }

    /**
    * Gets shortQueryConcurrencyNum
    *  **参数解释**： 工作负载队列短查询并发数。 **约束限制**： 不涉及。 **取值范围**： -1以上，-1表示不限制。 **默认取值**： -1
    *
    * @return string|null
    */
    public function getShortQueryConcurrencyNum()
    {
        return $this->container['shortQueryConcurrencyNum'];
    }

    /**
    * Sets shortQueryConcurrencyNum
    *
    * @param string|null $shortQueryConcurrencyNum **参数解释**： 工作负载队列短查询并发数。 **约束限制**： 不涉及。 **取值范围**： -1以上，-1表示不限制。 **默认取值**： -1
    *
    * @return $this
    */
    public function setShortQueryConcurrencyNum($shortQueryConcurrencyNum)
    {
        $this->container['shortQueryConcurrencyNum'] = $shortQueryConcurrencyNum;
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

