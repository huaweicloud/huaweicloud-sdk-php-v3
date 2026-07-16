<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTimestamp  **参数解释**： job开始处理时间，单位毫秒。 **取值范围**： 不涉及。
    * endTimestamp  **参数解释**： Job结束时间，单位毫秒。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * involvedObjects  **参数解释**： Job关联的资源，比如资源池描述。 **取值范围**： 不涉及。
    * inputs  **参数解释**： Job输入参数。 **取值范围**： 不涉及。
    * phase  **参数解释**： Job状态。 **取值范围**： 可选值如下： - Running：任务正在运行中。 - Success：任务执行成功。 - Failed：任务执行失败。
    * suspend  **参数解释**： Job是否被挂起。 **取值范围**： 不涉及。
    * type  **参数解释**： Job类型。 **取值范围**： 不涉及。
    * conditions  **参数解释**： Job的执行过程信息。 **取值范围**： 不涉及。
    * message  **参数解释**： Job执行失败时返回执行信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTimestamp' => 'int',
            'endTimestamp' => 'int',
            'jobId' => 'string',
            'jobName' => 'string',
            'involvedObjects' => 'string',
            'inputs' => 'string',
            'phase' => 'string',
            'suspend' => 'bool',
            'type' => 'string',
            'conditions' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTimestamp  **参数解释**： job开始处理时间，单位毫秒。 **取值范围**： 不涉及。
    * endTimestamp  **参数解释**： Job结束时间，单位毫秒。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * involvedObjects  **参数解释**： Job关联的资源，比如资源池描述。 **取值范围**： 不涉及。
    * inputs  **参数解释**： Job输入参数。 **取值范围**： 不涉及。
    * phase  **参数解释**： Job状态。 **取值范围**： 可选值如下： - Running：任务正在运行中。 - Success：任务执行成功。 - Failed：任务执行失败。
    * suspend  **参数解释**： Job是否被挂起。 **取值范围**： 不涉及。
    * type  **参数解释**： Job类型。 **取值范围**： 不涉及。
    * conditions  **参数解释**： Job的执行过程信息。 **取值范围**： 不涉及。
    * message  **参数解释**： Job执行失败时返回执行信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTimestamp' => 'int64',
        'endTimestamp' => 'int64',
        'jobId' => null,
        'jobName' => null,
        'involvedObjects' => null,
        'inputs' => null,
        'phase' => null,
        'suspend' => null,
        'type' => null,
        'conditions' => null,
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
    * startTimestamp  **参数解释**： job开始处理时间，单位毫秒。 **取值范围**： 不涉及。
    * endTimestamp  **参数解释**： Job结束时间，单位毫秒。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * involvedObjects  **参数解释**： Job关联的资源，比如资源池描述。 **取值范围**： 不涉及。
    * inputs  **参数解释**： Job输入参数。 **取值范围**： 不涉及。
    * phase  **参数解释**： Job状态。 **取值范围**： 可选值如下： - Running：任务正在运行中。 - Success：任务执行成功。 - Failed：任务执行失败。
    * suspend  **参数解释**： Job是否被挂起。 **取值范围**： 不涉及。
    * type  **参数解释**： Job类型。 **取值范围**： 不涉及。
    * conditions  **参数解释**： Job的执行过程信息。 **取值范围**： 不涉及。
    * message  **参数解释**： Job执行失败时返回执行信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTimestamp' => 'startTimestamp',
            'endTimestamp' => 'endTimestamp',
            'jobId' => 'jobId',
            'jobName' => 'jobName',
            'involvedObjects' => 'involvedObjects',
            'inputs' => 'inputs',
            'phase' => 'phase',
            'suspend' => 'suspend',
            'type' => 'type',
            'conditions' => 'conditions',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTimestamp  **参数解释**： job开始处理时间，单位毫秒。 **取值范围**： 不涉及。
    * endTimestamp  **参数解释**： Job结束时间，单位毫秒。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * involvedObjects  **参数解释**： Job关联的资源，比如资源池描述。 **取值范围**： 不涉及。
    * inputs  **参数解释**： Job输入参数。 **取值范围**： 不涉及。
    * phase  **参数解释**： Job状态。 **取值范围**： 可选值如下： - Running：任务正在运行中。 - Success：任务执行成功。 - Failed：任务执行失败。
    * suspend  **参数解释**： Job是否被挂起。 **取值范围**： 不涉及。
    * type  **参数解释**： Job类型。 **取值范围**： 不涉及。
    * conditions  **参数解释**： Job的执行过程信息。 **取值范围**： 不涉及。
    * message  **参数解释**： Job执行失败时返回执行信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTimestamp' => 'setStartTimestamp',
            'endTimestamp' => 'setEndTimestamp',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'involvedObjects' => 'setInvolvedObjects',
            'inputs' => 'setInputs',
            'phase' => 'setPhase',
            'suspend' => 'setSuspend',
            'type' => 'setType',
            'conditions' => 'setConditions',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTimestamp  **参数解释**： job开始处理时间，单位毫秒。 **取值范围**： 不涉及。
    * endTimestamp  **参数解释**： Job结束时间，单位毫秒。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * involvedObjects  **参数解释**： Job关联的资源，比如资源池描述。 **取值范围**： 不涉及。
    * inputs  **参数解释**： Job输入参数。 **取值范围**： 不涉及。
    * phase  **参数解释**： Job状态。 **取值范围**： 可选值如下： - Running：任务正在运行中。 - Success：任务执行成功。 - Failed：任务执行失败。
    * suspend  **参数解释**： Job是否被挂起。 **取值范围**： 不涉及。
    * type  **参数解释**： Job类型。 **取值范围**： 不涉及。
    * conditions  **参数解释**： Job的执行过程信息。 **取值范围**： 不涉及。
    * message  **参数解释**： Job执行失败时返回执行信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTimestamp' => 'getStartTimestamp',
            'endTimestamp' => 'getEndTimestamp',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'involvedObjects' => 'getInvolvedObjects',
            'inputs' => 'getInputs',
            'phase' => 'getPhase',
            'suspend' => 'getSuspend',
            'type' => 'getType',
            'conditions' => 'getConditions',
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
        $this->container['startTimestamp'] = isset($data['startTimestamp']) ? $data['startTimestamp'] : null;
        $this->container['endTimestamp'] = isset($data['endTimestamp']) ? $data['endTimestamp'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['involvedObjects'] = isset($data['involvedObjects']) ? $data['involvedObjects'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['suspend'] = isset($data['suspend']) ? $data['suspend'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
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
    * Gets startTimestamp
    *  **参数解释**： job开始处理时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStartTimestamp()
    {
        return $this->container['startTimestamp'];
    }

    /**
    * Sets startTimestamp
    *
    * @param int|null $startTimestamp **参数解释**： job开始处理时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTimestamp($startTimestamp)
    {
        $this->container['startTimestamp'] = $startTimestamp;
        return $this;
    }

    /**
    * Gets endTimestamp
    *  **参数解释**： Job结束时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getEndTimestamp()
    {
        return $this->container['endTimestamp'];
    }

    /**
    * Sets endTimestamp
    *
    * @param int|null $endTimestamp **参数解释**： Job结束时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTimestamp($endTimestamp)
    {
        $this->container['endTimestamp'] = $endTimestamp;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**： 任务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName **参数解释**： 任务名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets involvedObjects
    *  **参数解释**： Job关联的资源，比如资源池描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInvolvedObjects()
    {
        return $this->container['involvedObjects'];
    }

    /**
    * Sets involvedObjects
    *
    * @param string|null $involvedObjects **参数解释**： Job关联的资源，比如资源池描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInvolvedObjects($involvedObjects)
    {
        $this->container['involvedObjects'] = $involvedObjects;
        return $this;
    }

    /**
    * Gets inputs
    *  **参数解释**： Job输入参数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param string|null $inputs **参数解释**： Job输入参数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets phase
    *  **参数解释**： Job状态。 **取值范围**： 可选值如下： - Running：任务正在运行中。 - Success：任务执行成功。 - Failed：任务执行失败。
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase **参数解释**： Job状态。 **取值范围**： 可选值如下： - Running：任务正在运行中。 - Success：任务执行成功。 - Failed：任务执行失败。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets suspend
    *  **参数解释**： Job是否被挂起。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getSuspend()
    {
        return $this->container['suspend'];
    }

    /**
    * Sets suspend
    *
    * @param bool|null $suspend **参数解释**： Job是否被挂起。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSuspend($suspend)
    {
        $this->container['suspend'] = $suspend;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： Job类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： Job类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets conditions
    *  **参数解释**： Job的执行过程信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param string|null $conditions **参数解释**： Job的执行过程信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**： Job执行失败时返回执行信息。 **取值范围**： 不涉及。
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
    * @param string|null $message **参数解释**： Job执行失败时返回执行信息。 **取值范围**： 不涉及。
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

