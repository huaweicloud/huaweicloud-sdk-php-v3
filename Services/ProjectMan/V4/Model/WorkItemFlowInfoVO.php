<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowInfoVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowInfoVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processInstance  processInstance
    * processNodes  **参数解释**： 工作项关联的全部工作流节点列表。 **取值范围**： 不涉及。
    * currentProcessNode  currentProcessNode
    * nextFlow  **参数解释**： 可以流转的流转线信息。 **取值范围**： 不涉及。
    * failResult  **参数解释**： 流转失败时的失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processInstance' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessInstanceVO',
            'processNodes' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessNodeVO[]',
            'currentProcessNode' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessNodeVO',
            'nextFlow' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FlowsInfoVO[]',
            'failResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processInstance  processInstance
    * processNodes  **参数解释**： 工作项关联的全部工作流节点列表。 **取值范围**： 不涉及。
    * currentProcessNode  currentProcessNode
    * nextFlow  **参数解释**： 可以流转的流转线信息。 **取值范围**： 不涉及。
    * failResult  **参数解释**： 流转失败时的失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processInstance' => null,
        'processNodes' => null,
        'currentProcessNode' => null,
        'nextFlow' => null,
        'failResult' => null
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
    * processInstance  processInstance
    * processNodes  **参数解释**： 工作项关联的全部工作流节点列表。 **取值范围**： 不涉及。
    * currentProcessNode  currentProcessNode
    * nextFlow  **参数解释**： 可以流转的流转线信息。 **取值范围**： 不涉及。
    * failResult  **参数解释**： 流转失败时的失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processInstance' => 'process_instance',
            'processNodes' => 'process_nodes',
            'currentProcessNode' => 'current_process_node',
            'nextFlow' => 'next_flow',
            'failResult' => 'fail_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processInstance  processInstance
    * processNodes  **参数解释**： 工作项关联的全部工作流节点列表。 **取值范围**： 不涉及。
    * currentProcessNode  currentProcessNode
    * nextFlow  **参数解释**： 可以流转的流转线信息。 **取值范围**： 不涉及。
    * failResult  **参数解释**： 流转失败时的失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'processInstance' => 'setProcessInstance',
            'processNodes' => 'setProcessNodes',
            'currentProcessNode' => 'setCurrentProcessNode',
            'nextFlow' => 'setNextFlow',
            'failResult' => 'setFailResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processInstance  processInstance
    * processNodes  **参数解释**： 工作项关联的全部工作流节点列表。 **取值范围**： 不涉及。
    * currentProcessNode  currentProcessNode
    * nextFlow  **参数解释**： 可以流转的流转线信息。 **取值范围**： 不涉及。
    * failResult  **参数解释**： 流转失败时的失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'processInstance' => 'getProcessInstance',
            'processNodes' => 'getProcessNodes',
            'currentProcessNode' => 'getCurrentProcessNode',
            'nextFlow' => 'getNextFlow',
            'failResult' => 'getFailResult'
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
        $this->container['processInstance'] = isset($data['processInstance']) ? $data['processInstance'] : null;
        $this->container['processNodes'] = isset($data['processNodes']) ? $data['processNodes'] : null;
        $this->container['currentProcessNode'] = isset($data['currentProcessNode']) ? $data['currentProcessNode'] : null;
        $this->container['nextFlow'] = isset($data['nextFlow']) ? $data['nextFlow'] : null;
        $this->container['failResult'] = isset($data['failResult']) ? $data['failResult'] : null;
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
    * Gets processInstance
    *  processInstance
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessInstanceVO|null
    */
    public function getProcessInstance()
    {
        return $this->container['processInstance'];
    }

    /**
    * Sets processInstance
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessInstanceVO|null $processInstance processInstance
    *
    * @return $this
    */
    public function setProcessInstance($processInstance)
    {
        $this->container['processInstance'] = $processInstance;
        return $this;
    }

    /**
    * Gets processNodes
    *  **参数解释**： 工作项关联的全部工作流节点列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessNodeVO[]|null
    */
    public function getProcessNodes()
    {
        return $this->container['processNodes'];
    }

    /**
    * Sets processNodes
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessNodeVO[]|null $processNodes **参数解释**： 工作项关联的全部工作流节点列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProcessNodes($processNodes)
    {
        $this->container['processNodes'] = $processNodes;
        return $this;
    }

    /**
    * Gets currentProcessNode
    *  currentProcessNode
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessNodeVO|null
    */
    public function getCurrentProcessNode()
    {
        return $this->container['currentProcessNode'];
    }

    /**
    * Sets currentProcessNode
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowProcessNodeVO|null $currentProcessNode currentProcessNode
    *
    * @return $this
    */
    public function setCurrentProcessNode($currentProcessNode)
    {
        $this->container['currentProcessNode'] = $currentProcessNode;
        return $this;
    }

    /**
    * Gets nextFlow
    *  **参数解释**： 可以流转的流转线信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\FlowsInfoVO[]|null
    */
    public function getNextFlow()
    {
        return $this->container['nextFlow'];
    }

    /**
    * Sets nextFlow
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FlowsInfoVO[]|null $nextFlow **参数解释**： 可以流转的流转线信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNextFlow($nextFlow)
    {
        $this->container['nextFlow'] = $nextFlow;
        return $this;
    }

    /**
    * Gets failResult
    *  **参数解释**： 流转失败时的失败原因。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFailResult()
    {
        return $this->container['failResult'];
    }

    /**
    * Sets failResult
    *
    * @param string|null $failResult **参数解释**： 流转失败时的失败原因。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailResult($failResult)
    {
        $this->container['failResult'] = $failResult;
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

