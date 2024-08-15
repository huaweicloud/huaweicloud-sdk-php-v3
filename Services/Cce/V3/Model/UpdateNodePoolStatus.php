<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNodePoolStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNodePoolStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentNode  当前节点池中所有节点数量（不含删除中的节点）。
    * creatingNode  当前节点池中处于创建流程中的节点数量。
    * deletingNode  当前节点池中删除中的节点数量。
    * phase  节点池状态。 - 空值：可用（节点池当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（节点池当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（节点池当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：节点池当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述节点池状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 节点池扩缩状态：可通过currentNode/creatingNode/deletingNode节点状态统计信息，精确感知当前节点池扩缩状态。 > - 节点池可扩容状态：可通过conditions感知节点池详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * conditions  节点池当前详细状态列表，详情参见Condition类型定义。
    * scaleGroupStatuses  伸缩组当前详细状态信息，详情参见ScaleGroupStatus类型定义
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentNode' => 'int',
            'creatingNode' => 'int',
            'deletingNode' => 'int',
            'phase' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Cce\V3\Model\NodePoolCondition[]',
            'scaleGroupStatuses' => '\HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatus[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentNode  当前节点池中所有节点数量（不含删除中的节点）。
    * creatingNode  当前节点池中处于创建流程中的节点数量。
    * deletingNode  当前节点池中删除中的节点数量。
    * phase  节点池状态。 - 空值：可用（节点池当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（节点池当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（节点池当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：节点池当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述节点池状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 节点池扩缩状态：可通过currentNode/creatingNode/deletingNode节点状态统计信息，精确感知当前节点池扩缩状态。 > - 节点池可扩容状态：可通过conditions感知节点池详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * conditions  节点池当前详细状态列表，详情参见Condition类型定义。
    * scaleGroupStatuses  伸缩组当前详细状态信息，详情参见ScaleGroupStatus类型定义
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentNode' => 'int32',
        'creatingNode' => 'int32',
        'deletingNode' => 'int32',
        'phase' => null,
        'conditions' => null,
        'scaleGroupStatuses' => null
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
    * currentNode  当前节点池中所有节点数量（不含删除中的节点）。
    * creatingNode  当前节点池中处于创建流程中的节点数量。
    * deletingNode  当前节点池中删除中的节点数量。
    * phase  节点池状态。 - 空值：可用（节点池当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（节点池当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（节点池当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：节点池当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述节点池状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 节点池扩缩状态：可通过currentNode/creatingNode/deletingNode节点状态统计信息，精确感知当前节点池扩缩状态。 > - 节点池可扩容状态：可通过conditions感知节点池详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * conditions  节点池当前详细状态列表，详情参见Condition类型定义。
    * scaleGroupStatuses  伸缩组当前详细状态信息，详情参见ScaleGroupStatus类型定义
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentNode' => 'currentNode',
            'creatingNode' => 'creatingNode',
            'deletingNode' => 'deletingNode',
            'phase' => 'phase',
            'conditions' => 'conditions',
            'scaleGroupStatuses' => 'scaleGroupStatuses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentNode  当前节点池中所有节点数量（不含删除中的节点）。
    * creatingNode  当前节点池中处于创建流程中的节点数量。
    * deletingNode  当前节点池中删除中的节点数量。
    * phase  节点池状态。 - 空值：可用（节点池当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（节点池当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（节点池当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：节点池当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述节点池状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 节点池扩缩状态：可通过currentNode/creatingNode/deletingNode节点状态统计信息，精确感知当前节点池扩缩状态。 > - 节点池可扩容状态：可通过conditions感知节点池详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * conditions  节点池当前详细状态列表，详情参见Condition类型定义。
    * scaleGroupStatuses  伸缩组当前详细状态信息，详情参见ScaleGroupStatus类型定义
    *
    * @var string[]
    */
    protected static $setters = [
            'currentNode' => 'setCurrentNode',
            'creatingNode' => 'setCreatingNode',
            'deletingNode' => 'setDeletingNode',
            'phase' => 'setPhase',
            'conditions' => 'setConditions',
            'scaleGroupStatuses' => 'setScaleGroupStatuses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentNode  当前节点池中所有节点数量（不含删除中的节点）。
    * creatingNode  当前节点池中处于创建流程中的节点数量。
    * deletingNode  当前节点池中删除中的节点数量。
    * phase  节点池状态。 - 空值：可用（节点池当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（节点池当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（节点池当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：节点池当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述节点池状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 节点池扩缩状态：可通过currentNode/creatingNode/deletingNode节点状态统计信息，精确感知当前节点池扩缩状态。 > - 节点池可扩容状态：可通过conditions感知节点池详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * conditions  节点池当前详细状态列表，详情参见Condition类型定义。
    * scaleGroupStatuses  伸缩组当前详细状态信息，详情参见ScaleGroupStatus类型定义
    *
    * @var string[]
    */
    protected static $getters = [
            'currentNode' => 'getCurrentNode',
            'creatingNode' => 'getCreatingNode',
            'deletingNode' => 'getDeletingNode',
            'phase' => 'getPhase',
            'conditions' => 'getConditions',
            'scaleGroupStatuses' => 'getScaleGroupStatuses'
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
    const PHASE_SYNCHRONIZING = 'Synchronizing';
    const PHASE_SYNCHRONIZED = 'Synchronized';
    const PHASE_SOLD_OUT = 'SoldOut';
    const PHASE_DELETING = 'Deleting';
    const PHASE_ERROR = 'Error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPhaseAllowableValues()
    {
        return [
            self::PHASE_SYNCHRONIZING,
            self::PHASE_SYNCHRONIZED,
            self::PHASE_SOLD_OUT,
            self::PHASE_DELETING,
            self::PHASE_ERROR,
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
        $this->container['currentNode'] = isset($data['currentNode']) ? $data['currentNode'] : null;
        $this->container['creatingNode'] = isset($data['creatingNode']) ? $data['creatingNode'] : null;
        $this->container['deletingNode'] = isset($data['deletingNode']) ? $data['deletingNode'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['scaleGroupStatuses'] = isset($data['scaleGroupStatuses']) ? $data['scaleGroupStatuses'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPhaseAllowableValues();
                if (!is_null($this->container['phase']) && !in_array($this->container['phase'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'phase', must be one of '%s'",
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
    * Gets currentNode
    *  当前节点池中所有节点数量（不含删除中的节点）。
    *
    * @return int|null
    */
    public function getCurrentNode()
    {
        return $this->container['currentNode'];
    }

    /**
    * Sets currentNode
    *
    * @param int|null $currentNode 当前节点池中所有节点数量（不含删除中的节点）。
    *
    * @return $this
    */
    public function setCurrentNode($currentNode)
    {
        $this->container['currentNode'] = $currentNode;
        return $this;
    }

    /**
    * Gets creatingNode
    *  当前节点池中处于创建流程中的节点数量。
    *
    * @return int|null
    */
    public function getCreatingNode()
    {
        return $this->container['creatingNode'];
    }

    /**
    * Sets creatingNode
    *
    * @param int|null $creatingNode 当前节点池中处于创建流程中的节点数量。
    *
    * @return $this
    */
    public function setCreatingNode($creatingNode)
    {
        $this->container['creatingNode'] = $creatingNode;
        return $this;
    }

    /**
    * Gets deletingNode
    *  当前节点池中删除中的节点数量。
    *
    * @return int|null
    */
    public function getDeletingNode()
    {
        return $this->container['deletingNode'];
    }

    /**
    * Sets deletingNode
    *
    * @param int|null $deletingNode 当前节点池中删除中的节点数量。
    *
    * @return $this
    */
    public function setDeletingNode($deletingNode)
    {
        $this->container['deletingNode'] = $deletingNode;
        return $this;
    }

    /**
    * Gets phase
    *  节点池状态。 - 空值：可用（节点池当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（节点池当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（节点池当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：节点池当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述节点池状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 节点池扩缩状态：可通过currentNode/creatingNode/deletingNode节点状态统计信息，精确感知当前节点池扩缩状态。 > - 节点池可扩容状态：可通过conditions感知节点池详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
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
    * @param string|null $phase 节点池状态。 - 空值：可用（节点池当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（节点池当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（节点池当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：节点池当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述节点池状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 节点池扩缩状态：可通过currentNode/creatingNode/deletingNode节点状态统计信息，精确感知当前节点池扩缩状态。 > - 节点池可扩容状态：可通过conditions感知节点池详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets conditions
    *  节点池当前详细状态列表，详情参见Condition类型定义。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodePoolCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodePoolCondition[]|null $conditions 节点池当前详细状态列表，详情参见Condition类型定义。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets scaleGroupStatuses
    *  伸缩组当前详细状态信息，详情参见ScaleGroupStatus类型定义
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatus[]|null
    */
    public function getScaleGroupStatuses()
    {
        return $this->container['scaleGroupStatuses'];
    }

    /**
    * Sets scaleGroupStatuses
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatus[]|null $scaleGroupStatuses 伸缩组当前详细状态信息，详情参见ScaleGroupStatus类型定义
    *
    * @return $this
    */
    public function setScaleGroupStatuses($scaleGroupStatuses)
    {
        $this->container['scaleGroupStatuses'] = $scaleGroupStatuses;
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

