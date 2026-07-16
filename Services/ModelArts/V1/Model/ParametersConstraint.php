<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParametersConstraint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParametersConstraint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  参数种类。
    * editable  是否可编辑。
    * required  是否必须。
    * sensitive  是否敏感。该功能暂未实现。
    * validType  有效种类。
    * validRange  有效范围。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'editable' => 'bool',
            'required' => 'bool',
            'sensitive' => 'bool',
            'validType' => 'string',
            'validRange' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  参数种类。
    * editable  是否可编辑。
    * required  是否必须。
    * sensitive  是否敏感。该功能暂未实现。
    * validType  有效种类。
    * validRange  有效范围。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'editable' => null,
        'required' => null,
        'sensitive' => null,
        'validType' => null,
        'validRange' => null
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
    * type  参数种类。
    * editable  是否可编辑。
    * required  是否必须。
    * sensitive  是否敏感。该功能暂未实现。
    * validType  有效种类。
    * validRange  有效范围。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'editable' => 'editable',
            'required' => 'required',
            'sensitive' => 'sensitive',
            'validType' => 'valid_type',
            'validRange' => 'valid_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  参数种类。
    * editable  是否可编辑。
    * required  是否必须。
    * sensitive  是否敏感。该功能暂未实现。
    * validType  有效种类。
    * validRange  有效范围。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'editable' => 'setEditable',
            'required' => 'setRequired',
            'sensitive' => 'setSensitive',
            'validType' => 'setValidType',
            'validRange' => 'setValidRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  参数种类。
    * editable  是否可编辑。
    * required  是否必须。
    * sensitive  是否敏感。该功能暂未实现。
    * validType  有效种类。
    * validRange  有效范围。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'editable' => 'getEditable',
            'required' => 'getRequired',
            'sensitive' => 'getSensitive',
            'validType' => 'getValidType',
            'validRange' => 'getValidRange'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['sensitive'] = isset($data['sensitive']) ? $data['sensitive'] : null;
        $this->container['validType'] = isset($data['validType']) ? $data['validType'] : null;
        $this->container['validRange'] = isset($data['validRange']) ? $data['validRange'] : null;
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
    * Gets type
    *  参数种类。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 参数种类。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets editable
    *  是否可编辑。
    *
    * @return bool|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param bool|null $editable 是否可编辑。
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
        return $this;
    }

    /**
    * Gets required
    *  是否必须。
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required 是否必须。
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets sensitive
    *  是否敏感。该功能暂未实现。
    *
    * @return bool|null
    */
    public function getSensitive()
    {
        return $this->container['sensitive'];
    }

    /**
    * Sets sensitive
    *
    * @param bool|null $sensitive 是否敏感。该功能暂未实现。
    *
    * @return $this
    */
    public function setSensitive($sensitive)
    {
        $this->container['sensitive'] = $sensitive;
        return $this;
    }

    /**
    * Gets validType
    *  有效种类。
    *
    * @return string|null
    */
    public function getValidType()
    {
        return $this->container['validType'];
    }

    /**
    * Sets validType
    *
    * @param string|null $validType 有效种类。
    *
    * @return $this
    */
    public function setValidType($validType)
    {
        $this->container['validType'] = $validType;
        return $this;
    }

    /**
    * Gets validRange
    *  有效范围。
    *
    * @return string[]|null
    */
    public function getValidRange()
    {
        return $this->container['validRange'];
    }

    /**
    * Sets validRange
    *
    * @param string[]|null $validRange 有效范围。
    *
    * @return $this
    */
    public function setValidRange($validRange)
    {
        $this->container['validRange'] = $validRange;
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

