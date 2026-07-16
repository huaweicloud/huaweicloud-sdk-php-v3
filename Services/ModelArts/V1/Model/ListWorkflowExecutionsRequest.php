<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkflowExecutionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkflowExecutionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  工作流的ID。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * labels  执行记录标签。
    * status  执行记录状态。
    * sceneId  场景ID。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'workspaceId' => 'string',
            'limit' => 'string',
            'sortBy' => 'string',
            'offset' => 'string',
            'labels' => 'string',
            'status' => 'string',
            'sceneId' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  工作流的ID。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * labels  执行记录标签。
    * status  执行记录状态。
    * sceneId  场景ID。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'workspaceId' => null,
        'limit' => null,
        'sortBy' => null,
        'offset' => null,
        'labels' => null,
        'status' => null,
        'sceneId' => null,
        'order' => null
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
    * workflowId  工作流的ID。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * labels  执行记录标签。
    * status  执行记录状态。
    * sceneId  场景ID。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'workspaceId' => 'workspace_id',
            'limit' => 'limit',
            'sortBy' => 'sort_by',
            'offset' => 'offset',
            'labels' => 'labels',
            'status' => 'status',
            'sceneId' => 'scene_id',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  工作流的ID。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * labels  执行记录标签。
    * status  执行记录状态。
    * sceneId  场景ID。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'workspaceId' => 'setWorkspaceId',
            'limit' => 'setLimit',
            'sortBy' => 'setSortBy',
            'offset' => 'setOffset',
            'labels' => 'setLabels',
            'status' => 'setStatus',
            'sceneId' => 'setSceneId',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  工作流的ID。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * labels  执行记录标签。
    * status  执行记录状态。
    * sceneId  场景ID。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'workspaceId' => 'getWorkspaceId',
            'limit' => 'getLimit',
            'sortBy' => 'getSortBy',
            'offset' => 'getOffset',
            'labels' => 'getLabels',
            'status' => 'getStatus',
            'sceneId' => 'getSceneId',
            'order' => 'getOrder'
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
    const ORDER_DESC = 'desc';
    const ORDER_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_DESC,
            self::ORDER_ASC,
        ];
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sceneId'] = isset($data['sceneId']) ? $data['sceneId'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workflowId'] === null) {
            $invalidProperties[] = "'workflowId' can't be null";
        }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets workflowId
    *  工作流的ID。
    *
    * @return string
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string $workflowId 工作流的ID。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
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
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
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
    *  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets offset
    *  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets labels
    *  执行记录标签。
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 执行记录标签。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets status
    *  执行记录状态。
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
    * @param string|null $status 执行记录状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sceneId
    *  场景ID。
    *
    * @return string|null
    */
    public function getSceneId()
    {
        return $this->container['sceneId'];
    }

    /**
    * Sets sceneId
    *
    * @param string|null $sceneId 场景ID。
    *
    * @return $this
    */
    public function setSceneId($sceneId)
    {
        $this->container['sceneId'] = $sceneId;
        return $this;
    }

    /**
    * Gets order
    *  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

