<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SessionMemoryContextInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SessionMemoryContextInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contextName  **参数解释**: 内存上下文名称。 **取值范围**: 不涉及。
    * amount  **参数解释**: 会话上下文数量。 **取值范围**: 大于等于0。
    * size  **参数解释**: 会话上下文总大小。 **取值范围**: 大于等于0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contextName' => 'string',
            'amount' => 'int',
            'size' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contextName  **参数解释**: 内存上下文名称。 **取值范围**: 不涉及。
    * amount  **参数解释**: 会话上下文数量。 **取值范围**: 大于等于0。
    * size  **参数解释**: 会话上下文总大小。 **取值范围**: 大于等于0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contextName' => null,
        'amount' => null,
        'size' => 'double'
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
    * contextName  **参数解释**: 内存上下文名称。 **取值范围**: 不涉及。
    * amount  **参数解释**: 会话上下文数量。 **取值范围**: 大于等于0。
    * size  **参数解释**: 会话上下文总大小。 **取值范围**: 大于等于0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contextName' => 'context_name',
            'amount' => 'amount',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contextName  **参数解释**: 内存上下文名称。 **取值范围**: 不涉及。
    * amount  **参数解释**: 会话上下文数量。 **取值范围**: 大于等于0。
    * size  **参数解释**: 会话上下文总大小。 **取值范围**: 大于等于0。
    *
    * @var string[]
    */
    protected static $setters = [
            'contextName' => 'setContextName',
            'amount' => 'setAmount',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contextName  **参数解释**: 内存上下文名称。 **取值范围**: 不涉及。
    * amount  **参数解释**: 会话上下文数量。 **取值范围**: 大于等于0。
    * size  **参数解释**: 会话上下文总大小。 **取值范围**: 大于等于0。
    *
    * @var string[]
    */
    protected static $getters = [
            'contextName' => 'getContextName',
            'amount' => 'getAmount',
            'size' => 'getSize'
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
        $this->container['contextName'] = isset($data['contextName']) ? $data['contextName'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    * Gets contextName
    *  **参数解释**: 内存上下文名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getContextName()
    {
        return $this->container['contextName'];
    }

    /**
    * Sets contextName
    *
    * @param string|null $contextName **参数解释**: 内存上下文名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setContextName($contextName)
    {
        $this->container['contextName'] = $contextName;
        return $this;
    }

    /**
    * Gets amount
    *  **参数解释**: 会话上下文数量。 **取值范围**: 大于等于0。
    *
    * @return int|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param int|null $amount **参数解释**: 会话上下文数量。 **取值范围**: 大于等于0。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**: 会话上下文总大小。 **取值范围**: 大于等于0。
    *
    * @return double|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param double|null $size **参数解释**: 会话上下文总大小。 **取值范围**: 大于等于0。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

