<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowProcessInstanceVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowProcessInstanceVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 工作项工作流实例ID。 **取值范围**： 不涉及。
    * flowState  **参数解释**： 工作流实例是否挂起。 **取值范围**：  1: 运行  2: 挂起
    * workflowEntryId  **参数解释**： 工作流入口ID。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作流分类。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'flowState' => 'int',
            'workflowEntryId' => 'string',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 工作项工作流实例ID。 **取值范围**： 不涉及。
    * flowState  **参数解释**： 工作流实例是否挂起。 **取值范围**：  1: 运行  2: 挂起
    * workflowEntryId  **参数解释**： 工作流入口ID。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作流分类。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'flowState' => 'int32',
        'workflowEntryId' => null,
        'category' => null
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
    * id  **参数解释**： 工作项工作流实例ID。 **取值范围**： 不涉及。
    * flowState  **参数解释**： 工作流实例是否挂起。 **取值范围**：  1: 运行  2: 挂起
    * workflowEntryId  **参数解释**： 工作流入口ID。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作流分类。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'flowState' => 'flow_state',
            'workflowEntryId' => 'workflow_entry_id',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 工作项工作流实例ID。 **取值范围**： 不涉及。
    * flowState  **参数解释**： 工作流实例是否挂起。 **取值范围**：  1: 运行  2: 挂起
    * workflowEntryId  **参数解释**： 工作流入口ID。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作流分类。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'flowState' => 'setFlowState',
            'workflowEntryId' => 'setWorkflowEntryId',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 工作项工作流实例ID。 **取值范围**： 不涉及。
    * flowState  **参数解释**： 工作流实例是否挂起。 **取值范围**：  1: 运行  2: 挂起
    * workflowEntryId  **参数解释**： 工作流入口ID。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作流分类。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'flowState' => 'getFlowState',
            'workflowEntryId' => 'getWorkflowEntryId',
            'category' => 'getCategory'
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
        $this->container['flowState'] = isset($data['flowState']) ? $data['flowState'] : null;
        $this->container['workflowEntryId'] = isset($data['workflowEntryId']) ? $data['workflowEntryId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
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
    *  **参数解释**： 工作项工作流实例ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 工作项工作流实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets flowState
    *  **参数解释**： 工作流实例是否挂起。 **取值范围**：  1: 运行  2: 挂起
    *
    * @return int|null
    */
    public function getFlowState()
    {
        return $this->container['flowState'];
    }

    /**
    * Sets flowState
    *
    * @param int|null $flowState **参数解释**： 工作流实例是否挂起。 **取值范围**：  1: 运行  2: 挂起
    *
    * @return $this
    */
    public function setFlowState($flowState)
    {
        $this->container['flowState'] = $flowState;
        return $this;
    }

    /**
    * Gets workflowEntryId
    *  **参数解释**： 工作流入口ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWorkflowEntryId()
    {
        return $this->container['workflowEntryId'];
    }

    /**
    * Sets workflowEntryId
    *
    * @param string|null $workflowEntryId **参数解释**： 工作流入口ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkflowEntryId($workflowEntryId)
    {
        $this->container['workflowEntryId'] = $workflowEntryId;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 工作流分类。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 工作流分类。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

