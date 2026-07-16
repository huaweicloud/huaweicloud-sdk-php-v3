<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServicePodEventResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServicePodEventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  **参数解释：** 事件发生次数。 **取值范围：** 不涉及。
    * firstTimestamp  **参数解释：** 首次发生时间。 **取值范围：** 不涉及。
    * lastTimestamp  **参数解释：** 最近发生时间。 **取值范围：** 不涉及。
    * message  **参数解释：** 事件信息。 **取值范围：** 不涉及。
    * reason  **参数解释：** 事件名称。 **取值范围：** 不涉及。
    * reportingComponent  **参数解释：** 上报该事件的k8s组件名。 **取值范围：** 不涉及。
    * type  **参数解释：** 事件类型。 **取值范围：** Normal/Warning。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'firstTimestamp' => '\DateTime',
            'lastTimestamp' => '\DateTime',
            'message' => 'string',
            'reason' => 'string',
            'reportingComponent' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  **参数解释：** 事件发生次数。 **取值范围：** 不涉及。
    * firstTimestamp  **参数解释：** 首次发生时间。 **取值范围：** 不涉及。
    * lastTimestamp  **参数解释：** 最近发生时间。 **取值范围：** 不涉及。
    * message  **参数解释：** 事件信息。 **取值范围：** 不涉及。
    * reason  **参数解释：** 事件名称。 **取值范围：** 不涉及。
    * reportingComponent  **参数解释：** 上报该事件的k8s组件名。 **取值范围：** 不涉及。
    * type  **参数解释：** 事件类型。 **取值范围：** Normal/Warning。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'firstTimestamp' => 'date-time',
        'lastTimestamp' => 'date-time',
        'message' => null,
        'reason' => null,
        'reportingComponent' => null,
        'type' => null
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
    * count  **参数解释：** 事件发生次数。 **取值范围：** 不涉及。
    * firstTimestamp  **参数解释：** 首次发生时间。 **取值范围：** 不涉及。
    * lastTimestamp  **参数解释：** 最近发生时间。 **取值范围：** 不涉及。
    * message  **参数解释：** 事件信息。 **取值范围：** 不涉及。
    * reason  **参数解释：** 事件名称。 **取值范围：** 不涉及。
    * reportingComponent  **参数解释：** 上报该事件的k8s组件名。 **取值范围：** 不涉及。
    * type  **参数解释：** 事件类型。 **取值范围：** Normal/Warning。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'firstTimestamp' => 'first_timestamp',
            'lastTimestamp' => 'last_timestamp',
            'message' => 'message',
            'reason' => 'reason',
            'reportingComponent' => 'reporting_component',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  **参数解释：** 事件发生次数。 **取值范围：** 不涉及。
    * firstTimestamp  **参数解释：** 首次发生时间。 **取值范围：** 不涉及。
    * lastTimestamp  **参数解释：** 最近发生时间。 **取值范围：** 不涉及。
    * message  **参数解释：** 事件信息。 **取值范围：** 不涉及。
    * reason  **参数解释：** 事件名称。 **取值范围：** 不涉及。
    * reportingComponent  **参数解释：** 上报该事件的k8s组件名。 **取值范围：** 不涉及。
    * type  **参数解释：** 事件类型。 **取值范围：** Normal/Warning。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'firstTimestamp' => 'setFirstTimestamp',
            'lastTimestamp' => 'setLastTimestamp',
            'message' => 'setMessage',
            'reason' => 'setReason',
            'reportingComponent' => 'setReportingComponent',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  **参数解释：** 事件发生次数。 **取值范围：** 不涉及。
    * firstTimestamp  **参数解释：** 首次发生时间。 **取值范围：** 不涉及。
    * lastTimestamp  **参数解释：** 最近发生时间。 **取值范围：** 不涉及。
    * message  **参数解释：** 事件信息。 **取值范围：** 不涉及。
    * reason  **参数解释：** 事件名称。 **取值范围：** 不涉及。
    * reportingComponent  **参数解释：** 上报该事件的k8s组件名。 **取值范围：** 不涉及。
    * type  **参数解释：** 事件类型。 **取值范围：** Normal/Warning。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'firstTimestamp' => 'getFirstTimestamp',
            'lastTimestamp' => 'getLastTimestamp',
            'message' => 'getMessage',
            'reason' => 'getReason',
            'reportingComponent' => 'getReportingComponent',
            'type' => 'getType'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['firstTimestamp'] = isset($data['firstTimestamp']) ? $data['firstTimestamp'] : null;
        $this->container['lastTimestamp'] = isset($data['lastTimestamp']) ? $data['lastTimestamp'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['reportingComponent'] = isset($data['reportingComponent']) ? $data['reportingComponent'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['firstTimestamp'] === null) {
            $invalidProperties[] = "'firstTimestamp' can't be null";
        }
        if ($this->container['lastTimestamp'] === null) {
            $invalidProperties[] = "'lastTimestamp' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['reportingComponent'] === null) {
            $invalidProperties[] = "'reportingComponent' can't be null";
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
    * Gets count
    *  **参数解释：** 事件发生次数。 **取值范围：** 不涉及。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count **参数解释：** 事件发生次数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets firstTimestamp
    *  **参数解释：** 首次发生时间。 **取值范围：** 不涉及。
    *
    * @return \DateTime
    */
    public function getFirstTimestamp()
    {
        return $this->container['firstTimestamp'];
    }

    /**
    * Sets firstTimestamp
    *
    * @param \DateTime $firstTimestamp **参数解释：** 首次发生时间。 **取值范围：** 不涉及。
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
    *  **参数解释：** 最近发生时间。 **取值范围：** 不涉及。
    *
    * @return \DateTime
    */
    public function getLastTimestamp()
    {
        return $this->container['lastTimestamp'];
    }

    /**
    * Sets lastTimestamp
    *
    * @param \DateTime $lastTimestamp **参数解释：** 最近发生时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastTimestamp($lastTimestamp)
    {
        $this->container['lastTimestamp'] = $lastTimestamp;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 事件信息。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message **参数解释：** 事件信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释：** 事件名称。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string $reason **参数解释：** 事件名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets reportingComponent
    *  **参数解释：** 上报该事件的k8s组件名。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getReportingComponent()
    {
        return $this->container['reportingComponent'];
    }

    /**
    * Sets reportingComponent
    *
    * @param string $reportingComponent **参数解释：** 上报该事件的k8s组件名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setReportingComponent($reportingComponent)
    {
        $this->container['reportingComponent'] = $reportingComponent;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 事件类型。 **取值范围：** Normal/Warning。
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
    * @param string $type **参数解释：** 事件类型。 **取值范围：** Normal/Warning。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

