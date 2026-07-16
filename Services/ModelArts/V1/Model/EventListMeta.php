<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventListMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventListMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * continue  **参数描述**：分页标记。 **取值范围**：不涉及。
    * remainingItemCount  **参数描述**：分页剩余数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'continue' => 'string',
            'remainingItemCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * continue  **参数描述**：分页标记。 **取值范围**：不涉及。
    * remainingItemCount  **参数描述**：分页剩余数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'continue' => null,
        'remainingItemCount' => null
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
    * continue  **参数描述**：分页标记。 **取值范围**：不涉及。
    * remainingItemCount  **参数描述**：分页剩余数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'continue' => 'continue',
            'remainingItemCount' => 'remainingItemCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * continue  **参数描述**：分页标记。 **取值范围**：不涉及。
    * remainingItemCount  **参数描述**：分页剩余数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'continue' => 'setContinue',
            'remainingItemCount' => 'setRemainingItemCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * continue  **参数描述**：分页标记。 **取值范围**：不涉及。
    * remainingItemCount  **参数描述**：分页剩余数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'continue' => 'getContinue',
            'remainingItemCount' => 'getRemainingItemCount'
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
        $this->container['continue'] = isset($data['continue']) ? $data['continue'] : null;
        $this->container['remainingItemCount'] = isset($data['remainingItemCount']) ? $data['remainingItemCount'] : null;
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
    * Gets continue
    *  **参数描述**：分页标记。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getContinue()
    {
        return $this->container['continue'];
    }

    /**
    * Sets continue
    *
    * @param string|null $continue **参数描述**：分页标记。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setContinue($continue)
    {
        $this->container['continue'] = $continue;
        return $this;
    }

    /**
    * Gets remainingItemCount
    *  **参数描述**：分页剩余数量。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getRemainingItemCount()
    {
        return $this->container['remainingItemCount'];
    }

    /**
    * Sets remainingItemCount
    *
    * @param int|null $remainingItemCount **参数描述**：分页剩余数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRemainingItemCount($remainingItemCount)
    {
        $this->container['remainingItemCount'] = $remainingItemCount;
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

