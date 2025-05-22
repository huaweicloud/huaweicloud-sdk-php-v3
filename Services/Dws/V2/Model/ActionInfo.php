<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionName  **参数解释**： 操作名称。 **取值范围**： Create：创建逻辑集群 Expand：扩容逻辑集群 Restart：重启逻辑集群 Delete：删除逻辑集群 Shrink：缩容逻辑集群
    * progress  **参数解释**： 操作进度，默认10。 **取值范围**： 0~100
    * completed  **参数解释**： 操作是否完成。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 操作开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 操作结束时间。 **取值范围**： 不涉及。
    * result  **参数解释**： 操作结果。。 **取值范围**： success：成功 failed：失败 默认空字符串。
    * logs  **参数解释**： 操作日志信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionName' => 'string',
            'progress' => 'int',
            'completed' => 'bool',
            'startTime' => 'string',
            'endTime' => 'string',
            'result' => 'string',
            'logs' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionName  **参数解释**： 操作名称。 **取值范围**： Create：创建逻辑集群 Expand：扩容逻辑集群 Restart：重启逻辑集群 Delete：删除逻辑集群 Shrink：缩容逻辑集群
    * progress  **参数解释**： 操作进度，默认10。 **取值范围**： 0~100
    * completed  **参数解释**： 操作是否完成。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 操作开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 操作结束时间。 **取值范围**： 不涉及。
    * result  **参数解释**： 操作结果。。 **取值范围**： success：成功 failed：失败 默认空字符串。
    * logs  **参数解释**： 操作日志信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionName' => null,
        'progress' => 'int32',
        'completed' => null,
        'startTime' => null,
        'endTime' => null,
        'result' => null,
        'logs' => null
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
    * actionName  **参数解释**： 操作名称。 **取值范围**： Create：创建逻辑集群 Expand：扩容逻辑集群 Restart：重启逻辑集群 Delete：删除逻辑集群 Shrink：缩容逻辑集群
    * progress  **参数解释**： 操作进度，默认10。 **取值范围**： 0~100
    * completed  **参数解释**： 操作是否完成。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 操作开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 操作结束时间。 **取值范围**： 不涉及。
    * result  **参数解释**： 操作结果。。 **取值范围**： success：成功 failed：失败 默认空字符串。
    * logs  **参数解释**： 操作日志信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionName' => 'action_name',
            'progress' => 'progress',
            'completed' => 'completed',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'result' => 'result',
            'logs' => 'logs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionName  **参数解释**： 操作名称。 **取值范围**： Create：创建逻辑集群 Expand：扩容逻辑集群 Restart：重启逻辑集群 Delete：删除逻辑集群 Shrink：缩容逻辑集群
    * progress  **参数解释**： 操作进度，默认10。 **取值范围**： 0~100
    * completed  **参数解释**： 操作是否完成。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 操作开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 操作结束时间。 **取值范围**： 不涉及。
    * result  **参数解释**： 操作结果。。 **取值范围**： success：成功 failed：失败 默认空字符串。
    * logs  **参数解释**： 操作日志信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionName' => 'setActionName',
            'progress' => 'setProgress',
            'completed' => 'setCompleted',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'result' => 'setResult',
            'logs' => 'setLogs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionName  **参数解释**： 操作名称。 **取值范围**： Create：创建逻辑集群 Expand：扩容逻辑集群 Restart：重启逻辑集群 Delete：删除逻辑集群 Shrink：缩容逻辑集群
    * progress  **参数解释**： 操作进度，默认10。 **取值范围**： 0~100
    * completed  **参数解释**： 操作是否完成。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 操作开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 操作结束时间。 **取值范围**： 不涉及。
    * result  **参数解释**： 操作结果。。 **取值范围**： success：成功 failed：失败 默认空字符串。
    * logs  **参数解释**： 操作日志信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionName' => 'getActionName',
            'progress' => 'getProgress',
            'completed' => 'getCompleted',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'result' => 'getResult',
            'logs' => 'getLogs'
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
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
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
    * Gets actionName
    *  **参数解释**： 操作名称。 **取值范围**： Create：创建逻辑集群 Expand：扩容逻辑集群 Restart：重启逻辑集群 Delete：删除逻辑集群 Shrink：缩容逻辑集群
    *
    * @return string|null
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string|null $actionName **参数解释**： 操作名称。 **取值范围**： Create：创建逻辑集群 Expand：扩容逻辑集群 Restart：重启逻辑集群 Delete：删除逻辑集群 Shrink：缩容逻辑集群
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets progress
    *  **参数解释**： 操作进度，默认10。 **取值范围**： 0~100
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress **参数解释**： 操作进度，默认10。 **取值范围**： 0~100
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets completed
    *  **参数解释**： 操作是否完成。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
    * Sets completed
    *
    * @param bool|null $completed **参数解释**： 操作是否完成。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 操作开始时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 操作开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 操作结束时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 操作结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets result
    *  **参数解释**： 操作结果。。 **取值范围**： success：成功 failed：失败 默认空字符串。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result **参数解释**： 操作结果。。 **取值范围**： success：成功 failed：失败 默认空字符串。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets logs
    *  **参数解释**： 操作日志信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
    * Sets logs
    *
    * @param string|null $logs **参数解释**： 操作日志信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;
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

