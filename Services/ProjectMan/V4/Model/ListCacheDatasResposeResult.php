<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCacheDatasResposeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCacheDatasRespose_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  **参数解释：** 全部字段。
    * visibleFields  **参数解释：** 表头显示字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FieldVO[]',
            'visibleFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  **参数解释：** 全部字段。
    * visibleFields  **参数解释：** 表头显示字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'visibleFields' => null
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
    * fields  **参数解释：** 全部字段。
    * visibleFields  **参数解释：** 表头显示字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'visibleFields' => 'visibleFields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  **参数解释：** 全部字段。
    * visibleFields  **参数解释：** 表头显示字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'visibleFields' => 'setVisibleFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  **参数解释：** 全部字段。
    * visibleFields  **参数解释：** 表头显示字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'visibleFields' => 'getVisibleFields'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['visibleFields'] = isset($data['visibleFields']) ? $data['visibleFields'] : null;
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
    * Gets fields
    *  **参数解释：** 全部字段。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldVO[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldVO[]|null $fields **参数解释：** 全部字段。
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets visibleFields
    *  **参数解释：** 表头显示字段。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldVO[]|null
    */
    public function getVisibleFields()
    {
        return $this->container['visibleFields'];
    }

    /**
    * Sets visibleFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldVO[]|null $visibleFields **参数解释：** 表头显示字段。
    *
    * @return $this
    */
    public function setVisibleFields($visibleFields)
    {
        $this->container['visibleFields'] = $visibleFields;
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

