<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MappingJoinFieldVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MappingJoinFieldVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * field1Id  属性1ID，填写String类型替代Long类型。
    * field2Id  属性2ID，填写String类型替代Long类型。
    * field1Name  属性1名称。
    * field2Name  属性2名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'field1Id' => 'string',
            'field2Id' => 'string',
            'field1Name' => 'string',
            'field2Name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * field1Id  属性1ID，填写String类型替代Long类型。
    * field2Id  属性2ID，填写String类型替代Long类型。
    * field1Name  属性1名称。
    * field2Name  属性2名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'field1Id' => null,
        'field2Id' => null,
        'field1Name' => null,
        'field2Name' => null
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
    * field1Id  属性1ID，填写String类型替代Long类型。
    * field2Id  属性2ID，填写String类型替代Long类型。
    * field1Name  属性1名称。
    * field2Name  属性2名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'field1Id' => 'field1_id',
            'field2Id' => 'field2_id',
            'field1Name' => 'field1_name',
            'field2Name' => 'field2_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * field1Id  属性1ID，填写String类型替代Long类型。
    * field2Id  属性2ID，填写String类型替代Long类型。
    * field1Name  属性1名称。
    * field2Name  属性2名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'field1Id' => 'setField1Id',
            'field2Id' => 'setField2Id',
            'field1Name' => 'setField1Name',
            'field2Name' => 'setField2Name'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * field1Id  属性1ID，填写String类型替代Long类型。
    * field2Id  属性2ID，填写String类型替代Long类型。
    * field1Name  属性1名称。
    * field2Name  属性2名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'field1Id' => 'getField1Id',
            'field2Id' => 'getField2Id',
            'field1Name' => 'getField1Name',
            'field2Name' => 'getField2Name'
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
        $this->container['field1Id'] = isset($data['field1Id']) ? $data['field1Id'] : null;
        $this->container['field2Id'] = isset($data['field2Id']) ? $data['field2Id'] : null;
        $this->container['field1Name'] = isset($data['field1Name']) ? $data['field1Name'] : null;
        $this->container['field2Name'] = isset($data['field2Name']) ? $data['field2Name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['field1Id'] === null) {
            $invalidProperties[] = "'field1Id' can't be null";
        }
        if ($this->container['field2Id'] === null) {
            $invalidProperties[] = "'field2Id' can't be null";
        }
        if ($this->container['field1Name'] === null) {
            $invalidProperties[] = "'field1Name' can't be null";
        }
        if ($this->container['field2Name'] === null) {
            $invalidProperties[] = "'field2Name' can't be null";
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
    * Gets field1Id
    *  属性1ID，填写String类型替代Long类型。
    *
    * @return string
    */
    public function getField1Id()
    {
        return $this->container['field1Id'];
    }

    /**
    * Sets field1Id
    *
    * @param string $field1Id 属性1ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setField1Id($field1Id)
    {
        $this->container['field1Id'] = $field1Id;
        return $this;
    }

    /**
    * Gets field2Id
    *  属性2ID，填写String类型替代Long类型。
    *
    * @return string
    */
    public function getField2Id()
    {
        return $this->container['field2Id'];
    }

    /**
    * Sets field2Id
    *
    * @param string $field2Id 属性2ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setField2Id($field2Id)
    {
        $this->container['field2Id'] = $field2Id;
        return $this;
    }

    /**
    * Gets field1Name
    *  属性1名称。
    *
    * @return string
    */
    public function getField1Name()
    {
        return $this->container['field1Name'];
    }

    /**
    * Sets field1Name
    *
    * @param string $field1Name 属性1名称。
    *
    * @return $this
    */
    public function setField1Name($field1Name)
    {
        $this->container['field1Name'] = $field1Name;
        return $this;
    }

    /**
    * Gets field2Name
    *  属性2名称。
    *
    * @return string
    */
    public function getField2Name()
    {
        return $this->container['field2Name'];
    }

    /**
    * Sets field2Name
    *
    * @param string $field2Name 属性2名称。
    *
    * @return $this
    */
    public function setField2Name($field2Name)
    {
        $this->container['field2Name'] = $field2Name;
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

