<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleGroupStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleGroupStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  伸缩组名称
    * uid  伸缩组uuid
    * creationTimestamp  伸缩组创建时间
    * updateTimestamp  伸缩组更新时间
    * phase  伸缩组状态。 - 空值：可用（伸缩组当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（伸缩组当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（伸缩组当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：伸缩组当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述伸缩组状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 伸缩组扩缩状态：可通过desiredNodeCount/existingNodeCount/upcomingNodeCount节点状态统计信息，精确感知当前伸缩组扩缩状态。 > - 伸缩组可扩容状态：可通过conditions感知伸缩组详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * desiredNodeCount  伸缩组期望节点数
    * unpaidScaleNodeCount  订单未支付节点个数
    * existingNodeCount  existingNodeCount
    * upcomingNodeCount  upcomingNodeCount
    * scaleDownDisabledNodeCount  伸缩组禁止缩容的节点数
    * conditions  伸缩组当前详细状态列表，详情参见Condition类型定义。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'uid' => 'string',
            'creationTimestamp' => 'string',
            'updateTimestamp' => 'string',
            'phase' => 'string',
            'desiredNodeCount' => 'int',
            'unpaidScaleNodeCount' => 'int',
            'existingNodeCount' => '\HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatusExistingNodeCount',
            'upcomingNodeCount' => '\HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatusUpcomingNodeCount',
            'scaleDownDisabledNodeCount' => 'int',
            'conditions' => '\HuaweiCloud\SDK\Cce\V3\Model\NodePoolCondition[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  伸缩组名称
    * uid  伸缩组uuid
    * creationTimestamp  伸缩组创建时间
    * updateTimestamp  伸缩组更新时间
    * phase  伸缩组状态。 - 空值：可用（伸缩组当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（伸缩组当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（伸缩组当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：伸缩组当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述伸缩组状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 伸缩组扩缩状态：可通过desiredNodeCount/existingNodeCount/upcomingNodeCount节点状态统计信息，精确感知当前伸缩组扩缩状态。 > - 伸缩组可扩容状态：可通过conditions感知伸缩组详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * desiredNodeCount  伸缩组期望节点数
    * unpaidScaleNodeCount  订单未支付节点个数
    * existingNodeCount  existingNodeCount
    * upcomingNodeCount  upcomingNodeCount
    * scaleDownDisabledNodeCount  伸缩组禁止缩容的节点数
    * conditions  伸缩组当前详细状态列表，详情参见Condition类型定义。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'uid' => null,
        'creationTimestamp' => null,
        'updateTimestamp' => null,
        'phase' => null,
        'desiredNodeCount' => 'int32',
        'unpaidScaleNodeCount' => 'int32',
        'existingNodeCount' => null,
        'upcomingNodeCount' => null,
        'scaleDownDisabledNodeCount' => 'int32',
        'conditions' => null
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
    * name  伸缩组名称
    * uid  伸缩组uuid
    * creationTimestamp  伸缩组创建时间
    * updateTimestamp  伸缩组更新时间
    * phase  伸缩组状态。 - 空值：可用（伸缩组当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（伸缩组当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（伸缩组当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：伸缩组当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述伸缩组状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 伸缩组扩缩状态：可通过desiredNodeCount/existingNodeCount/upcomingNodeCount节点状态统计信息，精确感知当前伸缩组扩缩状态。 > - 伸缩组可扩容状态：可通过conditions感知伸缩组详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * desiredNodeCount  伸缩组期望节点数
    * unpaidScaleNodeCount  订单未支付节点个数
    * existingNodeCount  existingNodeCount
    * upcomingNodeCount  upcomingNodeCount
    * scaleDownDisabledNodeCount  伸缩组禁止缩容的节点数
    * conditions  伸缩组当前详细状态列表，详情参见Condition类型定义。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'uid' => 'uid',
            'creationTimestamp' => 'creationTimestamp',
            'updateTimestamp' => 'updateTimestamp',
            'phase' => 'phase',
            'desiredNodeCount' => 'desiredNodeCount',
            'unpaidScaleNodeCount' => 'unpaidScaleNodeCount',
            'existingNodeCount' => 'existingNodeCount',
            'upcomingNodeCount' => 'upcomingNodeCount',
            'scaleDownDisabledNodeCount' => 'scaleDownDisabledNodeCount',
            'conditions' => 'conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  伸缩组名称
    * uid  伸缩组uuid
    * creationTimestamp  伸缩组创建时间
    * updateTimestamp  伸缩组更新时间
    * phase  伸缩组状态。 - 空值：可用（伸缩组当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（伸缩组当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（伸缩组当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：伸缩组当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述伸缩组状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 伸缩组扩缩状态：可通过desiredNodeCount/existingNodeCount/upcomingNodeCount节点状态统计信息，精确感知当前伸缩组扩缩状态。 > - 伸缩组可扩容状态：可通过conditions感知伸缩组详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * desiredNodeCount  伸缩组期望节点数
    * unpaidScaleNodeCount  订单未支付节点个数
    * existingNodeCount  existingNodeCount
    * upcomingNodeCount  upcomingNodeCount
    * scaleDownDisabledNodeCount  伸缩组禁止缩容的节点数
    * conditions  伸缩组当前详细状态列表，详情参见Condition类型定义。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'uid' => 'setUid',
            'creationTimestamp' => 'setCreationTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp',
            'phase' => 'setPhase',
            'desiredNodeCount' => 'setDesiredNodeCount',
            'unpaidScaleNodeCount' => 'setUnpaidScaleNodeCount',
            'existingNodeCount' => 'setExistingNodeCount',
            'upcomingNodeCount' => 'setUpcomingNodeCount',
            'scaleDownDisabledNodeCount' => 'setScaleDownDisabledNodeCount',
            'conditions' => 'setConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  伸缩组名称
    * uid  伸缩组uuid
    * creationTimestamp  伸缩组创建时间
    * updateTimestamp  伸缩组更新时间
    * phase  伸缩组状态。 - 空值：可用（伸缩组当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（伸缩组当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（伸缩组当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：伸缩组当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述伸缩组状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 伸缩组扩缩状态：可通过desiredNodeCount/existingNodeCount/upcomingNodeCount节点状态统计信息，精确感知当前伸缩组扩缩状态。 > - 伸缩组可扩容状态：可通过conditions感知伸缩组详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    * desiredNodeCount  伸缩组期望节点数
    * unpaidScaleNodeCount  订单未支付节点个数
    * existingNodeCount  existingNodeCount
    * upcomingNodeCount  upcomingNodeCount
    * scaleDownDisabledNodeCount  伸缩组禁止缩容的节点数
    * conditions  伸缩组当前详细状态列表，详情参见Condition类型定义。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'uid' => 'getUid',
            'creationTimestamp' => 'getCreationTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp',
            'phase' => 'getPhase',
            'desiredNodeCount' => 'getDesiredNodeCount',
            'unpaidScaleNodeCount' => 'getUnpaidScaleNodeCount',
            'existingNodeCount' => 'getExistingNodeCount',
            'upcomingNodeCount' => 'getUpcomingNodeCount',
            'scaleDownDisabledNodeCount' => 'getScaleDownDisabledNodeCount',
            'conditions' => 'getConditions'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['desiredNodeCount'] = isset($data['desiredNodeCount']) ? $data['desiredNodeCount'] : null;
        $this->container['unpaidScaleNodeCount'] = isset($data['unpaidScaleNodeCount']) ? $data['unpaidScaleNodeCount'] : null;
        $this->container['existingNodeCount'] = isset($data['existingNodeCount']) ? $data['existingNodeCount'] : null;
        $this->container['upcomingNodeCount'] = isset($data['upcomingNodeCount']) ? $data['upcomingNodeCount'] : null;
        $this->container['scaleDownDisabledNodeCount'] = isset($data['scaleDownDisabledNodeCount']) ? $data['scaleDownDisabledNodeCount'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
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
    * Gets name
    *  伸缩组名称
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
    * @param string|null $name 伸缩组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uid
    *  伸缩组uuid
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 伸缩组uuid
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  伸缩组创建时间
    *
    * @return string|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string|null $creationTimestamp 伸缩组创建时间
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  伸缩组更新时间
    *
    * @return string|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param string|null $updateTimestamp 伸缩组更新时间
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets phase
    *  伸缩组状态。 - 空值：可用（伸缩组当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（伸缩组当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（伸缩组当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：伸缩组当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述伸缩组状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 伸缩组扩缩状态：可通过desiredNodeCount/existingNodeCount/upcomingNodeCount节点状态统计信息，精确感知当前伸缩组扩缩状态。 > - 伸缩组可扩容状态：可通过conditions感知伸缩组详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
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
    * @param string|null $phase 伸缩组状态。 - 空值：可用（伸缩组当前节点数已达到预期，且无伸缩中的节点） - Synchronizing：伸缩中（伸缩组当前节点数未达到预期，且无伸缩中的节点） - Synchronized：伸缩等待中（伸缩组当前节点数未达到预期，或者存在伸缩中的节点） - SoldOut：伸缩组当前不可扩容（兼容字段，标记节点池资源售罄、资源配额不足等不可扩容状态） > 上述伸缩组状态已废弃，仅兼容保留，不建议使用，替代感知方式如下： > - 伸缩组扩缩状态：可通过desiredNodeCount/existingNodeCount/upcomingNodeCount节点状态统计信息，精确感知当前伸缩组扩缩状态。 > - 伸缩组可扩容状态：可通过conditions感知伸缩组详细状态，其中\"Scalable\"可替代SoldOut语义。 - Deleting：删除中 - Error：错误
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets desiredNodeCount
    *  伸缩组期望节点数
    *
    * @return int|null
    */
    public function getDesiredNodeCount()
    {
        return $this->container['desiredNodeCount'];
    }

    /**
    * Sets desiredNodeCount
    *
    * @param int|null $desiredNodeCount 伸缩组期望节点数
    *
    * @return $this
    */
    public function setDesiredNodeCount($desiredNodeCount)
    {
        $this->container['desiredNodeCount'] = $desiredNodeCount;
        return $this;
    }

    /**
    * Gets unpaidScaleNodeCount
    *  订单未支付节点个数
    *
    * @return int|null
    */
    public function getUnpaidScaleNodeCount()
    {
        return $this->container['unpaidScaleNodeCount'];
    }

    /**
    * Sets unpaidScaleNodeCount
    *
    * @param int|null $unpaidScaleNodeCount 订单未支付节点个数
    *
    * @return $this
    */
    public function setUnpaidScaleNodeCount($unpaidScaleNodeCount)
    {
        $this->container['unpaidScaleNodeCount'] = $unpaidScaleNodeCount;
        return $this;
    }

    /**
    * Gets existingNodeCount
    *  existingNodeCount
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatusExistingNodeCount|null
    */
    public function getExistingNodeCount()
    {
        return $this->container['existingNodeCount'];
    }

    /**
    * Sets existingNodeCount
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatusExistingNodeCount|null $existingNodeCount existingNodeCount
    *
    * @return $this
    */
    public function setExistingNodeCount($existingNodeCount)
    {
        $this->container['existingNodeCount'] = $existingNodeCount;
        return $this;
    }

    /**
    * Gets upcomingNodeCount
    *  upcomingNodeCount
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatusUpcomingNodeCount|null
    */
    public function getUpcomingNodeCount()
    {
        return $this->container['upcomingNodeCount'];
    }

    /**
    * Sets upcomingNodeCount
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupStatusUpcomingNodeCount|null $upcomingNodeCount upcomingNodeCount
    *
    * @return $this
    */
    public function setUpcomingNodeCount($upcomingNodeCount)
    {
        $this->container['upcomingNodeCount'] = $upcomingNodeCount;
        return $this;
    }

    /**
    * Gets scaleDownDisabledNodeCount
    *  伸缩组禁止缩容的节点数
    *
    * @return int|null
    */
    public function getScaleDownDisabledNodeCount()
    {
        return $this->container['scaleDownDisabledNodeCount'];
    }

    /**
    * Sets scaleDownDisabledNodeCount
    *
    * @param int|null $scaleDownDisabledNodeCount 伸缩组禁止缩容的节点数
    *
    * @return $this
    */
    public function setScaleDownDisabledNodeCount($scaleDownDisabledNodeCount)
    {
        $this->container['scaleDownDisabledNodeCount'] = $scaleDownDisabledNodeCount;
        return $this;
    }

    /**
    * Gets conditions
    *  伸缩组当前详细状态列表，详情参见Condition类型定义。
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
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodePoolCondition[]|null $conditions 伸缩组当前详细状态列表，详情参见Condition类型定义。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
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

