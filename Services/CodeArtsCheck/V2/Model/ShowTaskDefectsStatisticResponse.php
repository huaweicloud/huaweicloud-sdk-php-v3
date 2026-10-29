<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskDefectsStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskDefectsStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  severity
    * status  status
    * lastCheckTime  **参数解释：** 检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * lastCheckFinishTime  **参数解释：** 检查结束时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\StatisticSeverityV2',
            'status' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\StatisticStatusV2',
            'lastCheckTime' => 'string',
            'lastCheckFinishTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  severity
    * status  status
    * lastCheckTime  **参数解释：** 检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * lastCheckFinishTime  **参数解释：** 检查结束时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'status' => null,
        'lastCheckTime' => null,
        'lastCheckFinishTime' => null
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
    * severity  severity
    * status  status
    * lastCheckTime  **参数解释：** 检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * lastCheckFinishTime  **参数解释：** 检查结束时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'status' => 'status',
            'lastCheckTime' => 'last_check_time',
            'lastCheckFinishTime' => 'last_check_finish_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  severity
    * status  status
    * lastCheckTime  **参数解释：** 检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * lastCheckFinishTime  **参数解释：** 检查结束时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'status' => 'setStatus',
            'lastCheckTime' => 'setLastCheckTime',
            'lastCheckFinishTime' => 'setLastCheckFinishTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  severity
    * status  status
    * lastCheckTime  **参数解释：** 检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * lastCheckFinishTime  **参数解释：** 检查结束时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'status' => 'getStatus',
            'lastCheckTime' => 'getLastCheckTime',
            'lastCheckFinishTime' => 'getLastCheckFinishTime'
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastCheckTime'] = isset($data['lastCheckTime']) ? $data['lastCheckTime'] : null;
        $this->container['lastCheckFinishTime'] = isset($data['lastCheckFinishTime']) ? $data['lastCheckFinishTime'] : null;
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
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\StatisticSeverityV2|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\StatisticSeverityV2|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\StatisticStatusV2|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\StatisticStatusV2|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastCheckTime
    *  **参数解释：** 检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLastCheckTime()
    {
        return $this->container['lastCheckTime'];
    }

    /**
    * Sets lastCheckTime
    *
    * @param string|null $lastCheckTime **参数解释：** 检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastCheckTime($lastCheckTime)
    {
        $this->container['lastCheckTime'] = $lastCheckTime;
        return $this;
    }

    /**
    * Gets lastCheckFinishTime
    *  **参数解释：** 检查结束时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLastCheckFinishTime()
    {
        return $this->container['lastCheckFinishTime'];
    }

    /**
    * Sets lastCheckFinishTime
    *
    * @param string|null $lastCheckFinishTime **参数解释：** 检查结束时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastCheckFinishTime($lastCheckFinishTime)
    {
        $this->container['lastCheckFinishTime'] = $lastCheckFinishTime;
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

