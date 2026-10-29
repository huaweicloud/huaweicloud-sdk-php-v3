<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exeTime  **参数解释：** 执行时间，单位为秒。 **取值范围：** 不涉及。
    * executeTime  **参数解释：** 执行时间，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    * message  **参数解释：** 执行过程。 **取值范围：** 不涉及。
    * process  **参数解释：** 任务执行的进度百分比。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exeTime' => 'string',
            'executeTime' => 'string',
            'message' => 'string',
            'process' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exeTime  **参数解释：** 执行时间，单位为秒。 **取值范围：** 不涉及。
    * executeTime  **参数解释：** 执行时间，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    * message  **参数解释：** 执行过程。 **取值范围：** 不涉及。
    * process  **参数解释：** 任务执行的进度百分比。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exeTime' => null,
        'executeTime' => null,
        'message' => null,
        'process' => null,
        'status' => null
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
    * exeTime  **参数解释：** 执行时间，单位为秒。 **取值范围：** 不涉及。
    * executeTime  **参数解释：** 执行时间，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    * message  **参数解释：** 执行过程。 **取值范围：** 不涉及。
    * process  **参数解释：** 任务执行的进度百分比。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exeTime' => 'exeTime',
            'executeTime' => 'executeTime',
            'message' => 'message',
            'process' => 'process',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exeTime  **参数解释：** 执行时间，单位为秒。 **取值范围：** 不涉及。
    * executeTime  **参数解释：** 执行时间，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    * message  **参数解释：** 执行过程。 **取值范围：** 不涉及。
    * process  **参数解释：** 任务执行的进度百分比。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @var string[]
    */
    protected static $setters = [
            'exeTime' => 'setExeTime',
            'executeTime' => 'setExecuteTime',
            'message' => 'setMessage',
            'process' => 'setProcess',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exeTime  **参数解释：** 执行时间，单位为秒。 **取值范围：** 不涉及。
    * executeTime  **参数解释：** 执行时间，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    * message  **参数解释：** 执行过程。 **取值范围：** 不涉及。
    * process  **参数解释：** 任务执行的进度百分比。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @var string[]
    */
    protected static $getters = [
            'exeTime' => 'getExeTime',
            'executeTime' => 'getExecuteTime',
            'message' => 'getMessage',
            'process' => 'getProcess',
            'status' => 'getStatus'
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
        $this->container['exeTime'] = isset($data['exeTime']) ? $data['exeTime'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets exeTime
    *  **参数解释：** 执行时间，单位为秒。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getExeTime()
    {
        return $this->container['exeTime'];
    }

    /**
    * Sets exeTime
    *
    * @param string|null $exeTime **参数解释：** 执行时间，单位为秒。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setExeTime($exeTime)
    {
        $this->container['exeTime'] = $exeTime;
        return $this;
    }

    /**
    * Gets executeTime
    *  **参数解释：** 执行时间，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param string|null $executeTime **参数解释：** 执行时间，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 执行过程。 **取值范围：** 不涉及。
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
    * @param string|null $message **参数解释：** 执行过程。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets process
    *  **参数解释：** 任务执行的进度百分比。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param string|null $process **参数解释：** 任务执行的进度百分比。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

