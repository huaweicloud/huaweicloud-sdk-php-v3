<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBatchCreateRecordSetsTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBatchCreateRecordSetsTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释：** 批量创建记录集任务的ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 任务状态。 **取值范围：** - PENDING：处理中 - DONE：已完成
    * createdAt  **参数解释：** 任务的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 任务的更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * totalCount  **参数解释：** 批量创建记录集的总数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 记录集创建成功的数量。 **取值范围：** 不涉及。
    * errorCount  **参数解释：** 记录集创建失败的数量。 **取值范围：** 不涉及。
    * errorItems  **参数解释：** 记录集创建失败的条目。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'totalCount' => 'int',
            'successCount' => 'int',
            'errorCount' => 'int',
            'errorItems' => '\HuaweiCloud\SDK\Dns\V2\Model\ShowBatchCreateRecordSetsTaskErrorItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释：** 批量创建记录集任务的ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 任务状态。 **取值范围：** - PENDING：处理中 - DONE：已完成
    * createdAt  **参数解释：** 任务的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 任务的更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * totalCount  **参数解释：** 批量创建记录集的总数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 记录集创建成功的数量。 **取值范围：** 不涉及。
    * errorCount  **参数解释：** 记录集创建失败的数量。 **取值范围：** 不涉及。
    * errorItems  **参数解释：** 记录集创建失败的条目。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'totalCount' => 'int32',
        'successCount' => 'int32',
        'errorCount' => 'int32',
        'errorItems' => null
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
    * taskId  **参数解释：** 批量创建记录集任务的ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 任务状态。 **取值范围：** - PENDING：处理中 - DONE：已完成
    * createdAt  **参数解释：** 任务的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 任务的更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * totalCount  **参数解释：** 批量创建记录集的总数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 记录集创建成功的数量。 **取值范围：** 不涉及。
    * errorCount  **参数解释：** 记录集创建失败的数量。 **取值范围：** 不涉及。
    * errorItems  **参数解释：** 记录集创建失败的条目。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'totalCount' => 'total_count',
            'successCount' => 'success_count',
            'errorCount' => 'error_count',
            'errorItems' => 'error_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释：** 批量创建记录集任务的ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 任务状态。 **取值范围：** - PENDING：处理中 - DONE：已完成
    * createdAt  **参数解释：** 任务的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 任务的更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * totalCount  **参数解释：** 批量创建记录集的总数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 记录集创建成功的数量。 **取值范围：** 不涉及。
    * errorCount  **参数解释：** 记录集创建失败的数量。 **取值范围：** 不涉及。
    * errorItems  **参数解释：** 记录集创建失败的条目。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'totalCount' => 'setTotalCount',
            'successCount' => 'setSuccessCount',
            'errorCount' => 'setErrorCount',
            'errorItems' => 'setErrorItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释：** 批量创建记录集任务的ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 任务状态。 **取值范围：** - PENDING：处理中 - DONE：已完成
    * createdAt  **参数解释：** 任务的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 任务的更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * totalCount  **参数解释：** 批量创建记录集的总数。 **取值范围：** 不涉及。
    * successCount  **参数解释：** 记录集创建成功的数量。 **取值范围：** 不涉及。
    * errorCount  **参数解释：** 记录集创建失败的数量。 **取值范围：** 不涉及。
    * errorItems  **参数解释：** 记录集创建失败的条目。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'totalCount' => 'getTotalCount',
            'successCount' => 'getSuccessCount',
            'errorCount' => 'getErrorCount',
            'errorItems' => 'getErrorItems'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['errorCount'] = isset($data['errorCount']) ? $data['errorCount'] : null;
        $this->container['errorItems'] = isset($data['errorItems']) ? $data['errorItems'] : null;
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
    * Gets taskId
    *  **参数解释：** 批量创建记录集任务的ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释：** 批量创建记录集任务的ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 任务状态。 **取值范围：** - PENDING：处理中 - DONE：已完成
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
    * @param string|null $status **参数解释：** 任务状态。 **取值范围：** - PENDING：处理中 - DONE：已完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 任务的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
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
    * @param string|null $createdAt **参数解释：** 任务的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 任务的更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 任务的更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释：** 批量创建记录集的总数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释：** 批量创建记录集的总数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets successCount
    *  **参数解释：** 记录集创建成功的数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount **参数解释：** 记录集创建成功的数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets errorCount
    *  **参数解释：** 记录集创建失败的数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getErrorCount()
    {
        return $this->container['errorCount'];
    }

    /**
    * Sets errorCount
    *
    * @param int|null $errorCount **参数解释：** 记录集创建失败的数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setErrorCount($errorCount)
    {
        $this->container['errorCount'] = $errorCount;
        return $this;
    }

    /**
    * Gets errorItems
    *  **参数解释：** 记录集创建失败的条目。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\ShowBatchCreateRecordSetsTaskErrorItem[]|null
    */
    public function getErrorItems()
    {
        return $this->container['errorItems'];
    }

    /**
    * Sets errorItems
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\ShowBatchCreateRecordSetsTaskErrorItem[]|null $errorItems **参数解释：** 记录集创建失败的条目。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setErrorItems($errorItems)
    {
        $this->container['errorItems'] = $errorItems;
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

