<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiVersion  **参数描述**：API版本。 **取值范围**：可选值如下： - v1
    * kind  **参数描述**：资源类型。 **取值范围**：可选值如下： - Event：事件
    * type  **参数描述**：事件类型。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常
    * firstTimestamp  **参数描述**：事件第一次出现时间。 **取值范围**：不涉及。
    * lastTimestamp  **参数描述**：事件最后一次出现时间。 **取值范围**：不涉及。
    * count  **参数描述**：事件连续出现次数。 **取值范围**：不涉及。
    * reason  **参数描述**：事件产生的原因。 **取值范围**：不涉及。
    * message  **参数描述**：事件详细信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiVersion' => 'string',
            'kind' => 'string',
            'type' => 'string',
            'firstTimestamp' => 'string',
            'lastTimestamp' => 'string',
            'count' => 'int',
            'reason' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiVersion  **参数描述**：API版本。 **取值范围**：可选值如下： - v1
    * kind  **参数描述**：资源类型。 **取值范围**：可选值如下： - Event：事件
    * type  **参数描述**：事件类型。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常
    * firstTimestamp  **参数描述**：事件第一次出现时间。 **取值范围**：不涉及。
    * lastTimestamp  **参数描述**：事件最后一次出现时间。 **取值范围**：不涉及。
    * count  **参数描述**：事件连续出现次数。 **取值范围**：不涉及。
    * reason  **参数描述**：事件产生的原因。 **取值范围**：不涉及。
    * message  **参数描述**：事件详细信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiVersion' => null,
        'kind' => null,
        'type' => null,
        'firstTimestamp' => null,
        'lastTimestamp' => null,
        'count' => null,
        'reason' => null,
        'message' => null
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
    * apiVersion  **参数描述**：API版本。 **取值范围**：可选值如下： - v1
    * kind  **参数描述**：资源类型。 **取值范围**：可选值如下： - Event：事件
    * type  **参数描述**：事件类型。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常
    * firstTimestamp  **参数描述**：事件第一次出现时间。 **取值范围**：不涉及。
    * lastTimestamp  **参数描述**：事件最后一次出现时间。 **取值范围**：不涉及。
    * count  **参数描述**：事件连续出现次数。 **取值范围**：不涉及。
    * reason  **参数描述**：事件产生的原因。 **取值范围**：不涉及。
    * message  **参数描述**：事件详细信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiVersion' => 'apiVersion',
            'kind' => 'kind',
            'type' => 'type',
            'firstTimestamp' => 'firstTimestamp',
            'lastTimestamp' => 'lastTimestamp',
            'count' => 'count',
            'reason' => 'reason',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiVersion  **参数描述**：API版本。 **取值范围**：可选值如下： - v1
    * kind  **参数描述**：资源类型。 **取值范围**：可选值如下： - Event：事件
    * type  **参数描述**：事件类型。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常
    * firstTimestamp  **参数描述**：事件第一次出现时间。 **取值范围**：不涉及。
    * lastTimestamp  **参数描述**：事件最后一次出现时间。 **取值范围**：不涉及。
    * count  **参数描述**：事件连续出现次数。 **取值范围**：不涉及。
    * reason  **参数描述**：事件产生的原因。 **取值范围**：不涉及。
    * message  **参数描述**：事件详细信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiVersion' => 'setApiVersion',
            'kind' => 'setKind',
            'type' => 'setType',
            'firstTimestamp' => 'setFirstTimestamp',
            'lastTimestamp' => 'setLastTimestamp',
            'count' => 'setCount',
            'reason' => 'setReason',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiVersion  **参数描述**：API版本。 **取值范围**：可选值如下： - v1
    * kind  **参数描述**：资源类型。 **取值范围**：可选值如下： - Event：事件
    * type  **参数描述**：事件类型。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常
    * firstTimestamp  **参数描述**：事件第一次出现时间。 **取值范围**：不涉及。
    * lastTimestamp  **参数描述**：事件最后一次出现时间。 **取值范围**：不涉及。
    * count  **参数描述**：事件连续出现次数。 **取值范围**：不涉及。
    * reason  **参数描述**：事件产生的原因。 **取值范围**：不涉及。
    * message  **参数描述**：事件详细信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiVersion' => 'getApiVersion',
            'kind' => 'getKind',
            'type' => 'getType',
            'firstTimestamp' => 'getFirstTimestamp',
            'lastTimestamp' => 'getLastTimestamp',
            'count' => 'getCount',
            'reason' => 'getReason',
            'message' => 'getMessage'
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['firstTimestamp'] = isset($data['firstTimestamp']) ? $data['firstTimestamp'] : null;
        $this->container['lastTimestamp'] = isset($data['lastTimestamp']) ? $data['lastTimestamp'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['apiVersion'] === null) {
            $invalidProperties[] = "'apiVersion' can't be null";
        }
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets apiVersion
    *  **参数描述**：API版本。 **取值范围**：可选值如下： - v1
    *
    * @return string
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string $apiVersion **参数描述**：API版本。 **取值范围**：可选值如下： - v1
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets kind
    *  **参数描述**：资源类型。 **取值范围**：可选值如下： - Event：事件
    *
    * @return string
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string $kind **参数描述**：资源类型。 **取值范围**：可选值如下： - Event：事件
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets type
    *  **参数描述**：事件类型。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数描述**：事件类型。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets firstTimestamp
    *  **参数描述**：事件第一次出现时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getFirstTimestamp()
    {
        return $this->container['firstTimestamp'];
    }

    /**
    * Sets firstTimestamp
    *
    * @param string|null $firstTimestamp **参数描述**：事件第一次出现时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFirstTimestamp($firstTimestamp)
    {
        $this->container['firstTimestamp'] = $firstTimestamp;
        return $this;
    }

    /**
    * Gets lastTimestamp
    *  **参数描述**：事件最后一次出现时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getLastTimestamp()
    {
        return $this->container['lastTimestamp'];
    }

    /**
    * Sets lastTimestamp
    *
    * @param string|null $lastTimestamp **参数描述**：事件最后一次出现时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setLastTimestamp($lastTimestamp)
    {
        $this->container['lastTimestamp'] = $lastTimestamp;
        return $this;
    }

    /**
    * Gets count
    *  **参数描述**：事件连续出现次数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数描述**：事件连续出现次数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets reason
    *  **参数描述**：事件产生的原因。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数描述**：事件产生的原因。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets message
    *  **参数描述**：事件详细信息。 **取值范围**：不涉及。
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
    * @param string|null $message **参数描述**：事件详细信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

