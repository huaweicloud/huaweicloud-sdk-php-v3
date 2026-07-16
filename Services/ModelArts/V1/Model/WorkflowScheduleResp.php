<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowScheduleResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowScheduleResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：类型，仅支持time（时间）。 **取值范围**：不涉及。
    * content  **参数解释**：内容。
    * action  **参数解释**：动作，仅支持run。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * enable  **参数解释**：定时调度信息，使能标记。 **取值范围**： - true：生效 - false：不生效
    * uuid  **参数解释**：ID标记。 **取值范围**：不涉及。
    * policies  policies
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'content' => 'map[string,string]',
            'action' => 'string',
            'workflowId' => 'string',
            'userId' => 'string',
            'enable' => 'bool',
            'uuid' => 'string',
            'policies' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSchedulePoliciesResp',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：类型，仅支持time（时间）。 **取值范围**：不涉及。
    * content  **参数解释**：内容。
    * action  **参数解释**：动作，仅支持run。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * enable  **参数解释**：定时调度信息，使能标记。 **取值范围**： - true：生效 - false：不生效
    * uuid  **参数解释**：ID标记。 **取值范围**：不涉及。
    * policies  policies
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'content' => null,
        'action' => null,
        'workflowId' => null,
        'userId' => null,
        'enable' => null,
        'uuid' => null,
        'policies' => null,
        'createdAt' => null
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
    * type  **参数解释**：类型，仅支持time（时间）。 **取值范围**：不涉及。
    * content  **参数解释**：内容。
    * action  **参数解释**：动作，仅支持run。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * enable  **参数解释**：定时调度信息，使能标记。 **取值范围**： - true：生效 - false：不生效
    * uuid  **参数解释**：ID标记。 **取值范围**：不涉及。
    * policies  policies
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'content' => 'content',
            'action' => 'action',
            'workflowId' => 'workflow_id',
            'userId' => 'user_id',
            'enable' => 'enable',
            'uuid' => 'uuid',
            'policies' => 'policies',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：类型，仅支持time（时间）。 **取值范围**：不涉及。
    * content  **参数解释**：内容。
    * action  **参数解释**：动作，仅支持run。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * enable  **参数解释**：定时调度信息，使能标记。 **取值范围**： - true：生效 - false：不生效
    * uuid  **参数解释**：ID标记。 **取值范围**：不涉及。
    * policies  policies
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'content' => 'setContent',
            'action' => 'setAction',
            'workflowId' => 'setWorkflowId',
            'userId' => 'setUserId',
            'enable' => 'setEnable',
            'uuid' => 'setUuid',
            'policies' => 'setPolicies',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：类型，仅支持time（时间）。 **取值范围**：不涉及。
    * content  **参数解释**：内容。
    * action  **参数解释**：动作，仅支持run。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * enable  **参数解释**：定时调度信息，使能标记。 **取值范围**： - true：生效 - false：不生效
    * uuid  **参数解释**：ID标记。 **取值范围**：不涉及。
    * policies  policies
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'content' => 'getContent',
            'action' => 'getAction',
            'workflowId' => 'getWorkflowId',
            'userId' => 'getUserId',
            'enable' => 'getEnable',
            'uuid' => 'getUuid',
            'policies' => 'getPolicies',
            'createdAt' => 'getCreatedAt'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    * Gets type
    *  **参数解释**：类型，仅支持time（时间）。 **取值范围**：不涉及。
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
    * @param string|null $type **参数解释**：类型，仅支持time（时间）。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**：内容。
    *
    * @return map[string,string]|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param map[string,string]|null $content **参数解释**：内容。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**：动作，仅支持run。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释**：动作，仅支持run。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets workflowId
    *  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets enable
    *  **参数解释**：定时调度信息，使能标记。 **取值范围**： - true：生效 - false：不生效
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable **参数解释**：定时调度信息，使能标记。 **取值范围**： - true：生效 - false：不生效
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets uuid
    *  **参数解释**：ID标记。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid **参数解释**：ID标记。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets policies
    *  policies
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSchedulePoliciesResp|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSchedulePoliciesResp|null $policies policies
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

