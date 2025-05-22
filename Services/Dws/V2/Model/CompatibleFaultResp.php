<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompatibleFaultResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompatibleFaultResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  **参数解释**： 信息。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建者。 **取值范围**： 不涉及。
    * details  **参数解释**： 详细内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'created' => 'string',
            'details' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  **参数解释**： 信息。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建者。 **取值范围**： 不涉及。
    * details  **参数解释**： 详细内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'created' => null,
        'details' => null
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
    * message  **参数解释**： 信息。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建者。 **取值范围**： 不涉及。
    * details  **参数解释**： 详细内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'created' => 'created',
            'details' => 'details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  **参数解释**： 信息。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建者。 **取值范围**： 不涉及。
    * details  **参数解释**： 详细内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'created' => 'setCreated',
            'details' => 'setDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  **参数解释**： 信息。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建者。 **取值范围**： 不涉及。
    * details  **参数解释**： 详细内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'created' => 'getCreated',
            'details' => 'getDetails'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
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
    * Gets message
    *  **参数解释**： 信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**： 信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets created
    *  **参数解释**： 创建者。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created **参数解释**： 创建者。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets details
    *  **参数解释**： 详细内容。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param string|null $details **参数解释**： 详细内容。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
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

