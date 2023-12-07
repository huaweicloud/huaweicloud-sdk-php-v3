<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateTasksReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateTasksReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  迁移任务组ID，表示批量更新该任务组下所有任务。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * ids  迁移任务id数组，包含所有需要批量更新操作的任务id。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * taskPriority  任务优先级配置，存在高中低三个优先级档次，限制仅在等待中、已暂停、已失败的任务进行修改 HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'ids' => 'int[]',
            'bandwidthPolicy' => '\HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]',
            'taskPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  迁移任务组ID，表示批量更新该任务组下所有任务。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * ids  迁移任务id数组，包含所有需要批量更新操作的任务id。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * taskPriority  任务优先级配置，存在高中低三个优先级档次，限制仅在等待中、已暂停、已失败的任务进行修改 HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'ids' => 'int64',
        'bandwidthPolicy' => null,
        'taskPriority' => null
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
    * groupId  迁移任务组ID，表示批量更新该任务组下所有任务。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * ids  迁移任务id数组，包含所有需要批量更新操作的任务id。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * taskPriority  任务优先级配置，存在高中低三个优先级档次，限制仅在等待中、已暂停、已失败的任务进行修改 HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'ids' => 'ids',
            'bandwidthPolicy' => 'bandwidth_policy',
            'taskPriority' => 'task_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  迁移任务组ID，表示批量更新该任务组下所有任务。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * ids  迁移任务id数组，包含所有需要批量更新操作的任务id。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * taskPriority  任务优先级配置，存在高中低三个优先级档次，限制仅在等待中、已暂停、已失败的任务进行修改 HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'ids' => 'setIds',
            'bandwidthPolicy' => 'setBandwidthPolicy',
            'taskPriority' => 'setTaskPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  迁移任务组ID，表示批量更新该任务组下所有任务。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * ids  迁移任务id数组，包含所有需要批量更新操作的任务id。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * taskPriority  任务优先级配置，存在高中低三个优先级档次，限制仅在等待中、已暂停、已失败的任务进行修改 HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'ids' => 'getIds',
            'bandwidthPolicy' => 'getBandwidthPolicy',
            'taskPriority' => 'getTaskPriority'
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
    const TASK_PRIORITY_HIGH = 'HIGH';
    const TASK_PRIORITY_MEDIUM = 'MEDIUM';
    const TASK_PRIORITY_LOW = 'LOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskPriorityAllowableValues()
    {
        return [
            self::TASK_PRIORITY_HIGH,
            self::TASK_PRIORITY_MEDIUM,
            self::TASK_PRIORITY_LOW,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['bandwidthPolicy'] = isset($data['bandwidthPolicy']) ? $data['bandwidthPolicy'] : null;
        $this->container['taskPriority'] = isset($data['taskPriority']) ? $data['taskPriority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['bandwidthPolicy'] === null) {
            $invalidProperties[] = "'bandwidthPolicy' can't be null";
        }
            $allowedValues = $this->getTaskPriorityAllowableValues();
                if (!is_null($this->container['taskPriority']) && !in_array($this->container['taskPriority'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskPriority', must be one of '%s'",
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
    * Gets groupId
    *  迁移任务组ID，表示批量更新该任务组下所有任务。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 迁移任务组ID，表示批量更新该任务组下所有任务。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets ids
    *  迁移任务id数组，包含所有需要批量更新操作的任务id。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    *
    * @return int[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param int[]|null $ids 迁移任务id数组，包含所有需要批量更新操作的任务id。 group_id和ids为二选一参数，不可同时存在或同时缺失。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets bandwidthPolicy
    *  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]
    */
    public function getBandwidthPolicy()
    {
        return $this->container['bandwidthPolicy'];
    }

    /**
    * Sets bandwidthPolicy
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[] $bandwidthPolicy 配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    *
    * @return $this
    */
    public function setBandwidthPolicy($bandwidthPolicy)
    {
        $this->container['bandwidthPolicy'] = $bandwidthPolicy;
        return $this;
    }

    /**
    * Gets taskPriority
    *  任务优先级配置，存在高中低三个优先级档次，限制仅在等待中、已暂停、已失败的任务进行修改 HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @return string|null
    */
    public function getTaskPriority()
    {
        return $this->container['taskPriority'];
    }

    /**
    * Sets taskPriority
    *
    * @param string|null $taskPriority 任务优先级配置，存在高中低三个优先级档次，限制仅在等待中、已暂停、已失败的任务进行修改 HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @return $this
    */
    public function setTaskPriority($taskPriority)
    {
        $this->container['taskPriority'] = $taskPriority;
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

