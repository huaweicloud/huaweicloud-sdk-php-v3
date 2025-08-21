<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateGroupNoteRequiredAttributesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateGroupNoteRequiredAttributesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'noteRequiredAttributes' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RequiredAttributeDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'noteRequiredAttributes' => null
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
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'noteRequiredAttributes' => 'note_required_attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    *
    * @var string[]
    */
    protected static $setters = [
            'noteRequiredAttributes' => 'setNoteRequiredAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    *
    * @var string[]
    */
    protected static $getters = [
            'noteRequiredAttributes' => 'getNoteRequiredAttributes'
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
        $this->container['noteRequiredAttributes'] = isset($data['noteRequiredAttributes']) ? $data['noteRequiredAttributes'] : null;
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
    * Gets noteRequiredAttributes
    *  **参数解释：** 检视意见必填项。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RequiredAttributeDto[]|null
    */
    public function getNoteRequiredAttributes()
    {
        return $this->container['noteRequiredAttributes'];
    }

    /**
    * Sets noteRequiredAttributes
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RequiredAttributeDto[]|null $noteRequiredAttributes **参数解释：** 检视意见必填项。
    *
    * @return $this
    */
    public function setNoteRequiredAttributes($noteRequiredAttributes)
    {
        $this->container['noteRequiredAttributes'] = $noteRequiredAttributes;
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

