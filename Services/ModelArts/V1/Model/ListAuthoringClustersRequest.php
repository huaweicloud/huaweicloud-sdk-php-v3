<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAuthoringClustersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAuthoringClustersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED： 公共池。 - DEDICATED：专属池。  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：1000。
    * offset  **参数解释**：数据条目偏移量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：0。
    * scope  **参数解释**：作业类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：开发环境 - TRAIN：训练作业 - INFER：推理作业  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'workspaceId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'scope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED： 公共池。 - DEDICATED：专属池。  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：1000。
    * offset  **参数解释**：数据条目偏移量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：0。
    * scope  **参数解释**：作业类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：开发环境 - TRAIN：训练作业 - INFER：推理作业  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'workspaceId' => null,
        'limit' => 'int32',
        'offset' => null,
        'scope' => null
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
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED： 公共池。 - DEDICATED：专属池。  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：1000。
    * offset  **参数解释**：数据条目偏移量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：0。
    * scope  **参数解释**：作业类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：开发环境 - TRAIN：训练作业 - INFER：推理作业  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'workspaceId' => 'workspace_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'scope' => 'scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED： 公共池。 - DEDICATED：专属池。  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：1000。
    * offset  **参数解释**：数据条目偏移量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：0。
    * scope  **参数解释**：作业类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：开发环境 - TRAIN：训练作业 - INFER：推理作业  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'workspaceId' => 'setWorkspaceId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'scope' => 'setScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED： 公共池。 - DEDICATED：专属池。  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：1000。
    * offset  **参数解释**：数据条目偏移量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：0。
    * scope  **参数解释**：作业类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：开发环境 - TRAIN：训练作业 - INFER：推理作业  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'workspaceId' => 'getWorkspaceId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'scope' => 'getScope'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets type
    *  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED： 公共池。 - DEDICATED：专属池。  **默认取值**：不涉及。
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
    * @param string $type **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED： 公共池。 - DEDICATED：专属池。  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：1000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：数据条目偏移量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**：数据条目偏移量。 **约束限制**：不涉及。 **取值范围**：大于等于0。 **默认取值**：0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**：作业类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：开发环境 - TRAIN：训练作业 - INFER：推理作业  **默认取值**：NOTEBOOK。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope **参数解释**：作业类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：开发环境 - TRAIN：训练作业 - INFER：推理作业  **默认取值**：NOTEBOOK。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
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

