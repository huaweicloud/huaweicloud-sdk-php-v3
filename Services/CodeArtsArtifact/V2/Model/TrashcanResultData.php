<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrashcanResultData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrashcanResultData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successNum  **参数解释**： 成功数目。 **取值范围**： 不涉及。
    * failedNum  **参数解释**： 失败数目。 **取值范围**： 不涉及。
    * failedMessages  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successNum' => 'int',
            'failedNum' => 'int',
            'failedMessages' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successNum  **参数解释**： 成功数目。 **取值范围**： 不涉及。
    * failedNum  **参数解释**： 失败数目。 **取值范围**： 不涉及。
    * failedMessages  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successNum' => 'int32',
        'failedNum' => 'int32',
        'failedMessages' => null
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
    * successNum  **参数解释**： 成功数目。 **取值范围**： 不涉及。
    * failedNum  **参数解释**： 失败数目。 **取值范围**： 不涉及。
    * failedMessages  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successNum' => 'successNum',
            'failedNum' => 'failedNum',
            'failedMessages' => 'failedMessages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successNum  **参数解释**： 成功数目。 **取值范围**： 不涉及。
    * failedNum  **参数解释**： 失败数目。 **取值范围**： 不涉及。
    * failedMessages  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'successNum' => 'setSuccessNum',
            'failedNum' => 'setFailedNum',
            'failedMessages' => 'setFailedMessages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successNum  **参数解释**： 成功数目。 **取值范围**： 不涉及。
    * failedNum  **参数解释**： 失败数目。 **取值范围**： 不涉及。
    * failedMessages  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'successNum' => 'getSuccessNum',
            'failedNum' => 'getFailedNum',
            'failedMessages' => 'getFailedMessages'
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
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['failedMessages'] = isset($data['failedMessages']) ? $data['failedMessages'] : null;
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
    * Gets successNum
    *  **参数解释**： 成功数目。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum **参数解释**： 成功数目。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets failedNum
    *  **参数解释**： 失败数目。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum **参数解释**： 失败数目。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets failedMessages
    *  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getFailedMessages()
    {
        return $this->container['failedMessages'];
    }

    /**
    * Sets failedMessages
    *
    * @param string[]|null $failedMessages **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailedMessages($failedMessages)
    {
        $this->container['failedMessages'] = $failedMessages;
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

