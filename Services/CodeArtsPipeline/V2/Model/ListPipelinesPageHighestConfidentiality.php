<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelinesPageHighestConfidentiality implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelinesPage_highest_confidentiality';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 密级ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 密级等级逻辑ID。 **取值范围**： 不涉及。
    * reserve1  **参数解释**： 预留字段。 **取值范围**： 不涉及。
    * value  **参数解释**： 密级等级中文名。 **取值范围**： 不涉及。
    * valueEn  **参数解释**： 密级等级英文名。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 密级等级序号，密级越高数字越大。 **取值范围**： 正整数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'code' => 'string',
            'reserve1' => 'string',
            'value' => 'string',
            'valueEn' => 'string',
            'sequence' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 密级ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 密级等级逻辑ID。 **取值范围**： 不涉及。
    * reserve1  **参数解释**： 预留字段。 **取值范围**： 不涉及。
    * value  **参数解释**： 密级等级中文名。 **取值范围**： 不涉及。
    * valueEn  **参数解释**： 密级等级英文名。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 密级等级序号，密级越高数字越大。 **取值范围**： 正整数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'code' => null,
        'reserve1' => null,
        'value' => null,
        'valueEn' => null,
        'sequence' => null
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
    * id  **参数解释**： 密级ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 密级等级逻辑ID。 **取值范围**： 不涉及。
    * reserve1  **参数解释**： 预留字段。 **取值范围**： 不涉及。
    * value  **参数解释**： 密级等级中文名。 **取值范围**： 不涉及。
    * valueEn  **参数解释**： 密级等级英文名。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 密级等级序号，密级越高数字越大。 **取值范围**： 正整数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'code' => 'code',
            'reserve1' => 'reserve_1',
            'value' => 'value',
            'valueEn' => 'value_en',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 密级ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 密级等级逻辑ID。 **取值范围**： 不涉及。
    * reserve1  **参数解释**： 预留字段。 **取值范围**： 不涉及。
    * value  **参数解释**： 密级等级中文名。 **取值范围**： 不涉及。
    * valueEn  **参数解释**： 密级等级英文名。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 密级等级序号，密级越高数字越大。 **取值范围**： 正整数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'code' => 'setCode',
            'reserve1' => 'setReserve1',
            'value' => 'setValue',
            'valueEn' => 'setValueEn',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 密级ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 密级等级逻辑ID。 **取值范围**： 不涉及。
    * reserve1  **参数解释**： 预留字段。 **取值范围**： 不涉及。
    * value  **参数解释**： 密级等级中文名。 **取值范围**： 不涉及。
    * valueEn  **参数解释**： 密级等级英文名。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 密级等级序号，密级越高数字越大。 **取值范围**： 正整数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'code' => 'getCode',
            'reserve1' => 'getReserve1',
            'value' => 'getValue',
            'valueEn' => 'getValueEn',
            'sequence' => 'getSequence'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['reserve1'] = isset($data['reserve1']) ? $data['reserve1'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['valueEn'] = isset($data['valueEn']) ? $data['valueEn'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
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
    * Gets id
    *  **参数解释**： 密级ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 密级ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**： 密级等级逻辑ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 密级等级逻辑ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets reserve1
    *  **参数解释**： 预留字段。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getReserve1()
    {
        return $this->container['reserve1'];
    }

    /**
    * Sets reserve1
    *
    * @param string|null $reserve1 **参数解释**： 预留字段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReserve1($reserve1)
    {
        $this->container['reserve1'] = $reserve1;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 密级等级中文名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value **参数解释**： 密级等级中文名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets valueEn
    *  **参数解释**： 密级等级英文名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getValueEn()
    {
        return $this->container['valueEn'];
    }

    /**
    * Sets valueEn
    *
    * @param string|null $valueEn **参数解释**： 密级等级英文名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValueEn($valueEn)
    {
        $this->container['valueEn'] = $valueEn;
        return $this;
    }

    /**
    * Gets sequence
    *  **参数解释**： 密级等级序号，密级越高数字越大。 **取值范围**： 正整数。
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence **参数解释**： 密级等级序号，密级越高数字越大。 **取值范围**： 正整数。
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
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

