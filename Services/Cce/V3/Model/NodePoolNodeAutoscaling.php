<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolNodeAutoscaling implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolNodeAutoscaling';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  是否开启自动扩缩容
    * minNodeCount  若开启自动扩缩容，最小能缩容的节点个数。不可大于集群规格所允许的节点上限
    * maxNodeCount  若开启自动扩缩容，最大能扩容的节点个数，应大于等于 minNodeCount，且不超过集群规格对应的节点数量上限。
    * scaleDownCooldownTime  节点保留时间，单位为分钟，扩容出来的节点在这个时间内不会被缩掉
    * priority  节点池权重，更高的权重在扩容时拥有更高的优先级
    * scaleDownUnneededTime  **参数解释**： 缩容非必要时间。单位为分钟，该参数用于指定在确定可以进行缩容操作之前，节点处于不需要状态的持续时间。 当节点在指定的这段时间内一直处于不需要的状态时，autoscaler 插件才会考虑对其进行缩容操作。 这样可以避免因资源的短暂波动而频繁触发缩容，增强系统的稳定性。如果未设置该参数，autoscaler 插件插件会使用默认的时间阈值。 **约束限制**： 不涉及 **取值范围**： 0-2147483647。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    * scaleDownUtilizationThreshold  **参数解释**： 缩容利用率阈值。运行在该节点上的所有 Pod 的 CPU 或内存总和除以该节点相应的可分配资源， 当该比值低于此阈值时，该节点可被考虑进行缩容。例如，设置为 0.3 表示当资源利用率低于 30% 时， 会触发缩容操作的评估。如果未设置该参数，autoscaler 插件会使用默认的利用率阈值。 **约束限制**： 不涉及 **取值范围**： 0-1。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'minNodeCount' => 'int',
            'maxNodeCount' => 'int',
            'scaleDownCooldownTime' => 'int',
            'priority' => 'int',
            'scaleDownUnneededTime' => 'int',
            'scaleDownUtilizationThreshold' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  是否开启自动扩缩容
    * minNodeCount  若开启自动扩缩容，最小能缩容的节点个数。不可大于集群规格所允许的节点上限
    * maxNodeCount  若开启自动扩缩容，最大能扩容的节点个数，应大于等于 minNodeCount，且不超过集群规格对应的节点数量上限。
    * scaleDownCooldownTime  节点保留时间，单位为分钟，扩容出来的节点在这个时间内不会被缩掉
    * priority  节点池权重，更高的权重在扩容时拥有更高的优先级
    * scaleDownUnneededTime  **参数解释**： 缩容非必要时间。单位为分钟，该参数用于指定在确定可以进行缩容操作之前，节点处于不需要状态的持续时间。 当节点在指定的这段时间内一直处于不需要的状态时，autoscaler 插件才会考虑对其进行缩容操作。 这样可以避免因资源的短暂波动而频繁触发缩容，增强系统的稳定性。如果未设置该参数，autoscaler 插件插件会使用默认的时间阈值。 **约束限制**： 不涉及 **取值范围**： 0-2147483647。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    * scaleDownUtilizationThreshold  **参数解释**： 缩容利用率阈值。运行在该节点上的所有 Pod 的 CPU 或内存总和除以该节点相应的可分配资源， 当该比值低于此阈值时，该节点可被考虑进行缩容。例如，设置为 0.3 表示当资源利用率低于 30% 时， 会触发缩容操作的评估。如果未设置该参数，autoscaler 插件会使用默认的利用率阈值。 **约束限制**： 不涉及 **取值范围**： 0-1。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'minNodeCount' => 'int32',
        'maxNodeCount' => 'int32',
        'scaleDownCooldownTime' => 'int32',
        'priority' => 'int32',
        'scaleDownUnneededTime' => 'int32',
        'scaleDownUtilizationThreshold' => 'float'
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
    * enable  是否开启自动扩缩容
    * minNodeCount  若开启自动扩缩容，最小能缩容的节点个数。不可大于集群规格所允许的节点上限
    * maxNodeCount  若开启自动扩缩容，最大能扩容的节点个数，应大于等于 minNodeCount，且不超过集群规格对应的节点数量上限。
    * scaleDownCooldownTime  节点保留时间，单位为分钟，扩容出来的节点在这个时间内不会被缩掉
    * priority  节点池权重，更高的权重在扩容时拥有更高的优先级
    * scaleDownUnneededTime  **参数解释**： 缩容非必要时间。单位为分钟，该参数用于指定在确定可以进行缩容操作之前，节点处于不需要状态的持续时间。 当节点在指定的这段时间内一直处于不需要的状态时，autoscaler 插件才会考虑对其进行缩容操作。 这样可以避免因资源的短暂波动而频繁触发缩容，增强系统的稳定性。如果未设置该参数，autoscaler 插件插件会使用默认的时间阈值。 **约束限制**： 不涉及 **取值范围**： 0-2147483647。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    * scaleDownUtilizationThreshold  **参数解释**： 缩容利用率阈值。运行在该节点上的所有 Pod 的 CPU 或内存总和除以该节点相应的可分配资源， 当该比值低于此阈值时，该节点可被考虑进行缩容。例如，设置为 0.3 表示当资源利用率低于 30% 时， 会触发缩容操作的评估。如果未设置该参数，autoscaler 插件会使用默认的利用率阈值。 **约束限制**： 不涉及 **取值范围**： 0-1。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'minNodeCount' => 'minNodeCount',
            'maxNodeCount' => 'maxNodeCount',
            'scaleDownCooldownTime' => 'scaleDownCooldownTime',
            'priority' => 'priority',
            'scaleDownUnneededTime' => 'scaleDownUnneededTime',
            'scaleDownUtilizationThreshold' => 'scaleDownUtilizationThreshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  是否开启自动扩缩容
    * minNodeCount  若开启自动扩缩容，最小能缩容的节点个数。不可大于集群规格所允许的节点上限
    * maxNodeCount  若开启自动扩缩容，最大能扩容的节点个数，应大于等于 minNodeCount，且不超过集群规格对应的节点数量上限。
    * scaleDownCooldownTime  节点保留时间，单位为分钟，扩容出来的节点在这个时间内不会被缩掉
    * priority  节点池权重，更高的权重在扩容时拥有更高的优先级
    * scaleDownUnneededTime  **参数解释**： 缩容非必要时间。单位为分钟，该参数用于指定在确定可以进行缩容操作之前，节点处于不需要状态的持续时间。 当节点在指定的这段时间内一直处于不需要的状态时，autoscaler 插件才会考虑对其进行缩容操作。 这样可以避免因资源的短暂波动而频繁触发缩容，增强系统的稳定性。如果未设置该参数，autoscaler 插件插件会使用默认的时间阈值。 **约束限制**： 不涉及 **取值范围**： 0-2147483647。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    * scaleDownUtilizationThreshold  **参数解释**： 缩容利用率阈值。运行在该节点上的所有 Pod 的 CPU 或内存总和除以该节点相应的可分配资源， 当该比值低于此阈值时，该节点可被考虑进行缩容。例如，设置为 0.3 表示当资源利用率低于 30% 时， 会触发缩容操作的评估。如果未设置该参数，autoscaler 插件会使用默认的利用率阈值。 **约束限制**： 不涉及 **取值范围**： 0-1。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'minNodeCount' => 'setMinNodeCount',
            'maxNodeCount' => 'setMaxNodeCount',
            'scaleDownCooldownTime' => 'setScaleDownCooldownTime',
            'priority' => 'setPriority',
            'scaleDownUnneededTime' => 'setScaleDownUnneededTime',
            'scaleDownUtilizationThreshold' => 'setScaleDownUtilizationThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  是否开启自动扩缩容
    * minNodeCount  若开启自动扩缩容，最小能缩容的节点个数。不可大于集群规格所允许的节点上限
    * maxNodeCount  若开启自动扩缩容，最大能扩容的节点个数，应大于等于 minNodeCount，且不超过集群规格对应的节点数量上限。
    * scaleDownCooldownTime  节点保留时间，单位为分钟，扩容出来的节点在这个时间内不会被缩掉
    * priority  节点池权重，更高的权重在扩容时拥有更高的优先级
    * scaleDownUnneededTime  **参数解释**： 缩容非必要时间。单位为分钟，该参数用于指定在确定可以进行缩容操作之前，节点处于不需要状态的持续时间。 当节点在指定的这段时间内一直处于不需要的状态时，autoscaler 插件才会考虑对其进行缩容操作。 这样可以避免因资源的短暂波动而频繁触发缩容，增强系统的稳定性。如果未设置该参数，autoscaler 插件插件会使用默认的时间阈值。 **约束限制**： 不涉及 **取值范围**： 0-2147483647。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    * scaleDownUtilizationThreshold  **参数解释**： 缩容利用率阈值。运行在该节点上的所有 Pod 的 CPU 或内存总和除以该节点相应的可分配资源， 当该比值低于此阈值时，该节点可被考虑进行缩容。例如，设置为 0.3 表示当资源利用率低于 30% 时， 会触发缩容操作的评估。如果未设置该参数，autoscaler 插件会使用默认的利用率阈值。 **约束限制**： 不涉及 **取值范围**： 0-1。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'minNodeCount' => 'getMinNodeCount',
            'maxNodeCount' => 'getMaxNodeCount',
            'scaleDownCooldownTime' => 'getScaleDownCooldownTime',
            'priority' => 'getPriority',
            'scaleDownUnneededTime' => 'getScaleDownUnneededTime',
            'scaleDownUtilizationThreshold' => 'getScaleDownUtilizationThreshold'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['minNodeCount'] = isset($data['minNodeCount']) ? $data['minNodeCount'] : null;
        $this->container['maxNodeCount'] = isset($data['maxNodeCount']) ? $data['maxNodeCount'] : null;
        $this->container['scaleDownCooldownTime'] = isset($data['scaleDownCooldownTime']) ? $data['scaleDownCooldownTime'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['scaleDownUnneededTime'] = isset($data['scaleDownUnneededTime']) ? $data['scaleDownUnneededTime'] : null;
        $this->container['scaleDownUtilizationThreshold'] = isset($data['scaleDownUtilizationThreshold']) ? $data['scaleDownUtilizationThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['minNodeCount']) && ($this->container['minNodeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'minNodeCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxNodeCount']) && ($this->container['maxNodeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxNodeCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scaleDownCooldownTime']) && ($this->container['scaleDownCooldownTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scaleDownCooldownTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scaleDownCooldownTime']) && ($this->container['scaleDownCooldownTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scaleDownCooldownTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scaleDownUnneededTime']) && ($this->container['scaleDownUnneededTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scaleDownUnneededTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scaleDownUnneededTime']) && ($this->container['scaleDownUnneededTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scaleDownUnneededTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scaleDownUtilizationThreshold']) && ($this->container['scaleDownUtilizationThreshold'] > 1)) {
                $invalidProperties[] = "invalid value for 'scaleDownUtilizationThreshold', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['scaleDownUtilizationThreshold']) && ($this->container['scaleDownUtilizationThreshold'] < 0)) {
                $invalidProperties[] = "invalid value for 'scaleDownUtilizationThreshold', must be bigger than or equal to 0.";
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
    * Gets enable
    *  是否开启自动扩缩容
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
    * @param bool|null $enable 是否开启自动扩缩容
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets minNodeCount
    *  若开启自动扩缩容，最小能缩容的节点个数。不可大于集群规格所允许的节点上限
    *
    * @return int|null
    */
    public function getMinNodeCount()
    {
        return $this->container['minNodeCount'];
    }

    /**
    * Sets minNodeCount
    *
    * @param int|null $minNodeCount 若开启自动扩缩容，最小能缩容的节点个数。不可大于集群规格所允许的节点上限
    *
    * @return $this
    */
    public function setMinNodeCount($minNodeCount)
    {
        $this->container['minNodeCount'] = $minNodeCount;
        return $this;
    }

    /**
    * Gets maxNodeCount
    *  若开启自动扩缩容，最大能扩容的节点个数，应大于等于 minNodeCount，且不超过集群规格对应的节点数量上限。
    *
    * @return int|null
    */
    public function getMaxNodeCount()
    {
        return $this->container['maxNodeCount'];
    }

    /**
    * Sets maxNodeCount
    *
    * @param int|null $maxNodeCount 若开启自动扩缩容，最大能扩容的节点个数，应大于等于 minNodeCount，且不超过集群规格对应的节点数量上限。
    *
    * @return $this
    */
    public function setMaxNodeCount($maxNodeCount)
    {
        $this->container['maxNodeCount'] = $maxNodeCount;
        return $this;
    }

    /**
    * Gets scaleDownCooldownTime
    *  节点保留时间，单位为分钟，扩容出来的节点在这个时间内不会被缩掉
    *
    * @return int|null
    */
    public function getScaleDownCooldownTime()
    {
        return $this->container['scaleDownCooldownTime'];
    }

    /**
    * Sets scaleDownCooldownTime
    *
    * @param int|null $scaleDownCooldownTime 节点保留时间，单位为分钟，扩容出来的节点在这个时间内不会被缩掉
    *
    * @return $this
    */
    public function setScaleDownCooldownTime($scaleDownCooldownTime)
    {
        $this->container['scaleDownCooldownTime'] = $scaleDownCooldownTime;
        return $this;
    }

    /**
    * Gets priority
    *  节点池权重，更高的权重在扩容时拥有更高的优先级
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 节点池权重，更高的权重在扩容时拥有更高的优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets scaleDownUnneededTime
    *  **参数解释**： 缩容非必要时间。单位为分钟，该参数用于指定在确定可以进行缩容操作之前，节点处于不需要状态的持续时间。 当节点在指定的这段时间内一直处于不需要的状态时，autoscaler 插件才会考虑对其进行缩容操作。 这样可以避免因资源的短暂波动而频繁触发缩容，增强系统的稳定性。如果未设置该参数，autoscaler 插件插件会使用默认的时间阈值。 **约束限制**： 不涉及 **取值范围**： 0-2147483647。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @return int|null
    */
    public function getScaleDownUnneededTime()
    {
        return $this->container['scaleDownUnneededTime'];
    }

    /**
    * Sets scaleDownUnneededTime
    *
    * @param int|null $scaleDownUnneededTime **参数解释**： 缩容非必要时间。单位为分钟，该参数用于指定在确定可以进行缩容操作之前，节点处于不需要状态的持续时间。 当节点在指定的这段时间内一直处于不需要的状态时，autoscaler 插件才会考虑对其进行缩容操作。 这样可以避免因资源的短暂波动而频繁触发缩容，增强系统的稳定性。如果未设置该参数，autoscaler 插件插件会使用默认的时间阈值。 **约束限制**： 不涉及 **取值范围**： 0-2147483647。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @return $this
    */
    public function setScaleDownUnneededTime($scaleDownUnneededTime)
    {
        $this->container['scaleDownUnneededTime'] = $scaleDownUnneededTime;
        return $this;
    }

    /**
    * Gets scaleDownUtilizationThreshold
    *  **参数解释**： 缩容利用率阈值。运行在该节点上的所有 Pod 的 CPU 或内存总和除以该节点相应的可分配资源， 当该比值低于此阈值时，该节点可被考虑进行缩容。例如，设置为 0.3 表示当资源利用率低于 30% 时， 会触发缩容操作的评估。如果未设置该参数，autoscaler 插件会使用默认的利用率阈值。 **约束限制**： 不涉及 **取值范围**： 0-1。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @return float|null
    */
    public function getScaleDownUtilizationThreshold()
    {
        return $this->container['scaleDownUtilizationThreshold'];
    }

    /**
    * Sets scaleDownUtilizationThreshold
    *
    * @param float|null $scaleDownUtilizationThreshold **参数解释**： 缩容利用率阈值。运行在该节点上的所有 Pod 的 CPU 或内存总和除以该节点相应的可分配资源， 当该比值低于此阈值时，该节点可被考虑进行缩容。例如，设置为 0.3 表示当资源利用率低于 30% 时， 会触发缩容操作的评估。如果未设置该参数，autoscaler 插件会使用默认的利用率阈值。 **约束限制**： 不涉及 **取值范围**： 0-1。 > 注意：如果传值为-1，代表取值为空。  **默认取值**： 默认为空
    *
    * @return $this
    */
    public function setScaleDownUtilizationThreshold($scaleDownUtilizationThreshold)
    {
        $this->container['scaleDownUtilizationThreshold'] = $scaleDownUtilizationThreshold;
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

