<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiOps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiOps';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 集群风险检测任务ID。 **取值范围**： 不涉及
    * checkType  **参数解释**： 检测范围 **取值范围**： - full_detection：全量检测 - unavailability_detection：集群不可用检测 - partial_detection：部分检测
    * triggerType  **参数解释**： 触发类型 **取值范围**： - manual：手动 - auto：自动
    * name  **参数解释**： 集群风险检测任务名称。 **取值范围**： 不涉及
    * desc  **参数解释**： 集群风险检测任务描述。 **取值范围**： 不涉及
    * status  **参数解释**： 任务执行状态。 **取值范围**： - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * taskRisks  **参数解释**： 集群风险项详情。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'checkType' => 'string',
            'triggerType' => 'string',
            'name' => 'string',
            'desc' => 'string',
            'status' => 'int',
            'summary' => '\HuaweiCloud\SDK\Css\V1\Model\SummaryInfo',
            'taskRisks' => '\HuaweiCloud\SDK\Css\V1\Model\AiOpsRiskObject[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 集群风险检测任务ID。 **取值范围**： 不涉及
    * checkType  **参数解释**： 检测范围 **取值范围**： - full_detection：全量检测 - unavailability_detection：集群不可用检测 - partial_detection：部分检测
    * triggerType  **参数解释**： 触发类型 **取值范围**： - manual：手动 - auto：自动
    * name  **参数解释**： 集群风险检测任务名称。 **取值范围**： 不涉及
    * desc  **参数解释**： 集群风险检测任务描述。 **取值范围**： 不涉及
    * status  **参数解释**： 任务执行状态。 **取值范围**： - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * taskRisks  **参数解释**： 集群风险项详情。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'checkType' => null,
        'triggerType' => null,
        'name' => null,
        'desc' => null,
        'status' => null,
        'summary' => null,
        'taskRisks' => null
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
    * id  **参数解释**： 集群风险检测任务ID。 **取值范围**： 不涉及
    * checkType  **参数解释**： 检测范围 **取值范围**： - full_detection：全量检测 - unavailability_detection：集群不可用检测 - partial_detection：部分检测
    * triggerType  **参数解释**： 触发类型 **取值范围**： - manual：手动 - auto：自动
    * name  **参数解释**： 集群风险检测任务名称。 **取值范围**： 不涉及
    * desc  **参数解释**： 集群风险检测任务描述。 **取值范围**： 不涉及
    * status  **参数解释**： 任务执行状态。 **取值范围**： - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * taskRisks  **参数解释**： 集群风险项详情。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'checkType' => 'check_type',
            'triggerType' => 'trigger_type',
            'name' => 'name',
            'desc' => 'desc',
            'status' => 'status',
            'summary' => 'summary',
            'taskRisks' => 'task_risks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 集群风险检测任务ID。 **取值范围**： 不涉及
    * checkType  **参数解释**： 检测范围 **取值范围**： - full_detection：全量检测 - unavailability_detection：集群不可用检测 - partial_detection：部分检测
    * triggerType  **参数解释**： 触发类型 **取值范围**： - manual：手动 - auto：自动
    * name  **参数解释**： 集群风险检测任务名称。 **取值范围**： 不涉及
    * desc  **参数解释**： 集群风险检测任务描述。 **取值范围**： 不涉及
    * status  **参数解释**： 任务执行状态。 **取值范围**： - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * taskRisks  **参数解释**： 集群风险项详情。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'checkType' => 'setCheckType',
            'triggerType' => 'setTriggerType',
            'name' => 'setName',
            'desc' => 'setDesc',
            'status' => 'setStatus',
            'summary' => 'setSummary',
            'taskRisks' => 'setTaskRisks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 集群风险检测任务ID。 **取值范围**： 不涉及
    * checkType  **参数解释**： 检测范围 **取值范围**： - full_detection：全量检测 - unavailability_detection：集群不可用检测 - partial_detection：部分检测
    * triggerType  **参数解释**： 触发类型 **取值范围**： - manual：手动 - auto：自动
    * name  **参数解释**： 集群风险检测任务名称。 **取值范围**： 不涉及
    * desc  **参数解释**： 集群风险检测任务描述。 **取值范围**： 不涉及
    * status  **参数解释**： 任务执行状态。 **取值范围**： - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * taskRisks  **参数解释**： 集群风险项详情。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'checkType' => 'getCheckType',
            'triggerType' => 'getTriggerType',
            'name' => 'getName',
            'desc' => 'getDesc',
            'status' => 'getStatus',
            'summary' => 'getSummary',
            'taskRisks' => 'getTaskRisks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['taskRisks'] = isset($data['taskRisks']) ? $data['taskRisks'] : null;
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
    * Gets id
    *  **参数解释**： 集群风险检测任务ID。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 集群风险检测任务ID。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释**： 检测范围 **取值范围**： - full_detection：全量检测 - unavailability_detection：集群不可用检测 - partial_detection：部分检测
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType **参数解释**： 检测范围 **取值范围**： - full_detection：全量检测 - unavailability_detection：集群不可用检测 - partial_detection：部分检测
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets triggerType
    *  **参数解释**： 触发类型 **取值范围**： - manual：手动 - auto：自动
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType **参数解释**： 触发类型 **取值范围**： - manual：手动 - auto：自动
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 集群风险检测任务名称。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 集群风险检测任务名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 集群风险检测任务描述。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 集群风险检测任务描述。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 任务执行状态。 **取值范围**： - 150：未开启。 - 200：已开启。 - 300：已发送。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： 任务执行状态。 **取值范围**： - 150：未开启。 - 200：已开启。 - 300：已发送。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets summary
    *  summary
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\SummaryInfo|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\SummaryInfo|null $summary summary
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
        return $this;
    }

    /**
    * Gets taskRisks
    *  **参数解释**： 集群风险项详情。 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\AiOpsRiskObject[]|null
    */
    public function getTaskRisks()
    {
        return $this->container['taskRisks'];
    }

    /**
    * Sets taskRisks
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\AiOpsRiskObject[]|null $taskRisks **参数解释**： 集群风险项详情。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTaskRisks($taskRisks)
    {
        $this->container['taskRisks'] = $taskRisks;
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

