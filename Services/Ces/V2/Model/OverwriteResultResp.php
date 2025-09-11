<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OverwriteResultResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OverwriteResultResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successIds  **参数解释**：已覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    * failedIds  **参数解释**：未覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successIds' => 'string',
            'failedIds' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successIds  **参数解释**：已覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    * failedIds  **参数解释**：未覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successIds' => null,
        'failedIds' => null
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
    * successIds  **参数解释**：已覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    * failedIds  **参数解释**：未覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successIds' => 'success_ids',
            'failedIds' => 'failed_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successIds  **参数解释**：已覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    * failedIds  **参数解释**：未覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'successIds' => 'setSuccessIds',
            'failedIds' => 'setFailedIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successIds  **参数解释**：已覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    * failedIds  **参数解释**：未覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'successIds' => 'getSuccessIds',
            'failedIds' => 'getFailedIds'
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
        $this->container['successIds'] = isset($data['successIds']) ? $data['successIds'] : null;
        $this->container['failedIds'] = isset($data['failedIds']) ? $data['failedIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['successIds']) && (mb_strlen($this->container['successIds']) > 64)) {
                $invalidProperties[] = "invalid value for 'successIds', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['successIds']) && (mb_strlen($this->container['successIds']) < 2)) {
                $invalidProperties[] = "invalid value for 'successIds', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['failedIds']) && (mb_strlen($this->container['failedIds']) > 64)) {
                $invalidProperties[] = "invalid value for 'failedIds', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['failedIds']) && (mb_strlen($this->container['failedIds']) < 2)) {
                $invalidProperties[] = "invalid value for 'failedIds', the character length must be bigger than or equal to 2.";
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
    * Gets successIds
    *  **参数解释**：已覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @return string|null
    */
    public function getSuccessIds()
    {
        return $this->container['successIds'];
    }

    /**
    * Sets successIds
    *
    * @param string|null $successIds **参数解释**：已覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @return $this
    */
    public function setSuccessIds($successIds)
    {
        $this->container['successIds'] = $successIds;
        return $this;
    }

    /**
    * Gets failedIds
    *  **参数解释**：未覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @return string|null
    */
    public function getFailedIds()
    {
        return $this->container['failedIds'];
    }

    /**
    * Sets failedIds
    *
    * @param string|null $failedIds **参数解释**：未覆盖的模板ID值。 **取值范围**：长度为[2,64]个字符。
    *
    * @return $this
    */
    public function setFailedIds($failedIds)
    {
        $this->container['failedIds'] = $failedIds;
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

