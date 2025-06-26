<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlanLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlanLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * execTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * stageInfo  **参数解释**： 执行计划阶段。 **取值范围**： 不涉及。
    * execResult  **参数解释**： 执行结果。 **取值范围**： 不涉及。
    * execLog  **参数解释**： 执行日志。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'execTime' => 'string',
            'stageInfo' => 'string',
            'execResult' => 'int',
            'execLog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * execTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * stageInfo  **参数解释**： 执行计划阶段。 **取值范围**： 不涉及。
    * execResult  **参数解释**： 执行结果。 **取值范围**： 不涉及。
    * execLog  **参数解释**： 执行日志。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'execTime' => null,
        'stageInfo' => null,
        'execResult' => null,
        'execLog' => null
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
    * execTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * stageInfo  **参数解释**： 执行计划阶段。 **取值范围**： 不涉及。
    * execResult  **参数解释**： 执行结果。 **取值范围**： 不涉及。
    * execLog  **参数解释**： 执行日志。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'execTime' => 'exec_time',
            'stageInfo' => 'stage_info',
            'execResult' => 'exec_result',
            'execLog' => 'exec_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * execTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * stageInfo  **参数解释**： 执行计划阶段。 **取值范围**： 不涉及。
    * execResult  **参数解释**： 执行结果。 **取值范围**： 不涉及。
    * execLog  **参数解释**： 执行日志。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'execTime' => 'setExecTime',
            'stageInfo' => 'setStageInfo',
            'execResult' => 'setExecResult',
            'execLog' => 'setExecLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * execTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * stageInfo  **参数解释**： 执行计划阶段。 **取值范围**： 不涉及。
    * execResult  **参数解释**： 执行结果。 **取值范围**： 不涉及。
    * execLog  **参数解释**： 执行日志。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'execTime' => 'getExecTime',
            'stageInfo' => 'getStageInfo',
            'execResult' => 'getExecResult',
            'execLog' => 'getExecLog'
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
        $this->container['execTime'] = isset($data['execTime']) ? $data['execTime'] : null;
        $this->container['stageInfo'] = isset($data['stageInfo']) ? $data['stageInfo'] : null;
        $this->container['execResult'] = isset($data['execResult']) ? $data['execResult'] : null;
        $this->container['execLog'] = isset($data['execLog']) ? $data['execLog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['execTime'] === null) {
            $invalidProperties[] = "'execTime' can't be null";
        }
        if ($this->container['stageInfo'] === null) {
            $invalidProperties[] = "'stageInfo' can't be null";
        }
        if ($this->container['execResult'] === null) {
            $invalidProperties[] = "'execResult' can't be null";
        }
        if ($this->container['execLog'] === null) {
            $invalidProperties[] = "'execLog' can't be null";
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
    * Gets execTime
    *  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getExecTime()
    {
        return $this->container['execTime'];
    }

    /**
    * Sets execTime
    *
    * @param string $execTime **参数解释**： 执行时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExecTime($execTime)
    {
        $this->container['execTime'] = $execTime;
        return $this;
    }

    /**
    * Gets stageInfo
    *  **参数解释**： 执行计划阶段。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getStageInfo()
    {
        return $this->container['stageInfo'];
    }

    /**
    * Sets stageInfo
    *
    * @param string $stageInfo **参数解释**： 执行计划阶段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStageInfo($stageInfo)
    {
        $this->container['stageInfo'] = $stageInfo;
        return $this;
    }

    /**
    * Gets execResult
    *  **参数解释**： 执行结果。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getExecResult()
    {
        return $this->container['execResult'];
    }

    /**
    * Sets execResult
    *
    * @param int $execResult **参数解释**： 执行结果。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExecResult($execResult)
    {
        $this->container['execResult'] = $execResult;
        return $this;
    }

    /**
    * Gets execLog
    *  **参数解释**： 执行日志。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getExecLog()
    {
        return $this->container['execLog'];
    }

    /**
    * Sets execLog
    *
    * @param string $execLog **参数解释**： 执行日志。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExecLog($execLog)
    {
        $this->container['execLog'] = $execLog;
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

