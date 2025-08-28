<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuicCidHashStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuicCidHashStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * len  **参数解释**：表示hash的时候取CID的长度。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：1-20  **默认取值**：3
    * offset  **参数解释**：表示hash的时候取CID的偏移量。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：0-19  **默认取值**：1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'len' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * len  **参数解释**：表示hash的时候取CID的长度。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：1-20  **默认取值**：3
    * offset  **参数解释**：表示hash的时候取CID的偏移量。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：0-19  **默认取值**：1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'len' => 'int32',
        'offset' => 'int32'
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
    * len  **参数解释**：表示hash的时候取CID的长度。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：1-20  **默认取值**：3
    * offset  **参数解释**：表示hash的时候取CID的偏移量。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：0-19  **默认取值**：1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'len' => 'len',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * len  **参数解释**：表示hash的时候取CID的长度。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：1-20  **默认取值**：3
    * offset  **参数解释**：表示hash的时候取CID的偏移量。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：0-19  **默认取值**：1
    *
    * @var string[]
    */
    protected static $setters = [
            'len' => 'setLen',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * len  **参数解释**：表示hash的时候取CID的长度。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：1-20  **默认取值**：3
    * offset  **参数解释**：表示hash的时候取CID的偏移量。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：0-19  **默认取值**：1
    *
    * @var string[]
    */
    protected static $getters = [
            'len' => 'getLen',
            'offset' => 'getOffset'
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
        $this->container['len'] = isset($data['len']) ? $data['len'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['len'] === null) {
            $invalidProperties[] = "'len' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
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
    * Gets len
    *  **参数解释**：表示hash的时候取CID的长度。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：1-20  **默认取值**：3
    *
    * @return int
    */
    public function getLen()
    {
        return $this->container['len'];
    }

    /**
    * Sets len
    *
    * @param int $len **参数解释**：表示hash的时候取CID的长度。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：1-20  **默认取值**：3
    *
    * @return $this
    */
    public function setLen($len)
    {
        $this->container['len'] = $len;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：表示hash的时候取CID的偏移量。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：0-19  **默认取值**：1
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**：表示hash的时候取CID的偏移量。  **约束限制**：仅当负载均衡算法为QUIC_CID的时候才生效。  **取值范围**：0-19  **默认取值**：1
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

