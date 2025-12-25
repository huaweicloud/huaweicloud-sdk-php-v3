<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CapacitySettingVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CapacitySettingVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * capacityThreshold  **参数解释**: 容量阈值。 **取值范围**: 不涉及。
    * messageType  **参数解释**: 消息类型。 **取值范围**: 不涉及。
    * isMailEnabled  **参数解释**: 是否启用邮件。 **取值范围**: 不涉及。
    * isSmsEnabled  **参数解释**: 是否启用短信。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'capacityThreshold' => 'int',
            'messageType' => 'int',
            'isMailEnabled' => 'int',
            'isSmsEnabled' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * capacityThreshold  **参数解释**: 容量阈值。 **取值范围**: 不涉及。
    * messageType  **参数解释**: 消息类型。 **取值范围**: 不涉及。
    * isMailEnabled  **参数解释**: 是否启用邮件。 **取值范围**: 不涉及。
    * isSmsEnabled  **参数解释**: 是否启用短信。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'capacityThreshold' => 'int32',
        'messageType' => 'int32',
        'isMailEnabled' => 'int32',
        'isSmsEnabled' => 'int32'
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
    * capacityThreshold  **参数解释**: 容量阈值。 **取值范围**: 不涉及。
    * messageType  **参数解释**: 消息类型。 **取值范围**: 不涉及。
    * isMailEnabled  **参数解释**: 是否启用邮件。 **取值范围**: 不涉及。
    * isSmsEnabled  **参数解释**: 是否启用短信。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'capacityThreshold' => 'capacity_threshold',
            'messageType' => 'message_type',
            'isMailEnabled' => 'is_mail_enabled',
            'isSmsEnabled' => 'is_sms_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * capacityThreshold  **参数解释**: 容量阈值。 **取值范围**: 不涉及。
    * messageType  **参数解释**: 消息类型。 **取值范围**: 不涉及。
    * isMailEnabled  **参数解释**: 是否启用邮件。 **取值范围**: 不涉及。
    * isSmsEnabled  **参数解释**: 是否启用短信。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'capacityThreshold' => 'setCapacityThreshold',
            'messageType' => 'setMessageType',
            'isMailEnabled' => 'setIsMailEnabled',
            'isSmsEnabled' => 'setIsSmsEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * capacityThreshold  **参数解释**: 容量阈值。 **取值范围**: 不涉及。
    * messageType  **参数解释**: 消息类型。 **取值范围**: 不涉及。
    * isMailEnabled  **参数解释**: 是否启用邮件。 **取值范围**: 不涉及。
    * isSmsEnabled  **参数解释**: 是否启用短信。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'capacityThreshold' => 'getCapacityThreshold',
            'messageType' => 'getMessageType',
            'isMailEnabled' => 'getIsMailEnabled',
            'isSmsEnabled' => 'getIsSmsEnabled'
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
        $this->container['capacityThreshold'] = isset($data['capacityThreshold']) ? $data['capacityThreshold'] : null;
        $this->container['messageType'] = isset($data['messageType']) ? $data['messageType'] : null;
        $this->container['isMailEnabled'] = isset($data['isMailEnabled']) ? $data['isMailEnabled'] : null;
        $this->container['isSmsEnabled'] = isset($data['isSmsEnabled']) ? $data['isSmsEnabled'] : null;
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
    * Gets capacityThreshold
    *  **参数解释**: 容量阈值。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getCapacityThreshold()
    {
        return $this->container['capacityThreshold'];
    }

    /**
    * Sets capacityThreshold
    *
    * @param int|null $capacityThreshold **参数解释**: 容量阈值。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCapacityThreshold($capacityThreshold)
    {
        $this->container['capacityThreshold'] = $capacityThreshold;
        return $this;
    }

    /**
    * Gets messageType
    *  **参数解释**: 消息类型。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getMessageType()
    {
        return $this->container['messageType'];
    }

    /**
    * Sets messageType
    *
    * @param int|null $messageType **参数解释**: 消息类型。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;
        return $this;
    }

    /**
    * Gets isMailEnabled
    *  **参数解释**: 是否启用邮件。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getIsMailEnabled()
    {
        return $this->container['isMailEnabled'];
    }

    /**
    * Sets isMailEnabled
    *
    * @param int|null $isMailEnabled **参数解释**: 是否启用邮件。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIsMailEnabled($isMailEnabled)
    {
        $this->container['isMailEnabled'] = $isMailEnabled;
        return $this;
    }

    /**
    * Gets isSmsEnabled
    *  **参数解释**: 是否启用短信。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getIsSmsEnabled()
    {
        return $this->container['isSmsEnabled'];
    }

    /**
    * Sets isSmsEnabled
    *
    * @param int|null $isSmsEnabled **参数解释**: 是否启用短信。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIsSmsEnabled($isSmsEnabled)
    {
        $this->container['isSmsEnabled'] = $isSmsEnabled;
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

