<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceInstanceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  **参数解释：** 服务实例名字。 **取值范围：** 不涉及。
    * status  **参数解释：** 服务实例状态。 **取值范围：** - RUNNING：运行中 - PENDING：未就绪 - CONCERNING：告警 - FAILED：失败 - UNKNOWN：未知 - DELETED：已删除
    * weight  **参数解释：** 服务实例权重。 **取值范围：** [0, 100] 或者为空。
    * podCount  **参数解释：** 服务实例pod数量。 **取值范围：** 不涉及。
    * runningPodCount  **参数解释：** 服务实例运行中pod数量。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务实例最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'status' => 'string',
            'weight' => 'int',
            'podCount' => 'int',
            'runningPodCount' => 'int',
            'updateAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  **参数解释：** 服务实例名字。 **取值范围：** 不涉及。
    * status  **参数解释：** 服务实例状态。 **取值范围：** - RUNNING：运行中 - PENDING：未就绪 - CONCERNING：告警 - FAILED：失败 - UNKNOWN：未知 - DELETED：已删除
    * weight  **参数解释：** 服务实例权重。 **取值范围：** [0, 100] 或者为空。
    * podCount  **参数解释：** 服务实例pod数量。 **取值范围：** 不涉及。
    * runningPodCount  **参数解释：** 服务实例运行中pod数量。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务实例最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'status' => null,
        'weight' => 'int32',
        'podCount' => 'int64',
        'runningPodCount' => 'int64',
        'updateAt' => 'int64'
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
    * instanceName  **参数解释：** 服务实例名字。 **取值范围：** 不涉及。
    * status  **参数解释：** 服务实例状态。 **取值范围：** - RUNNING：运行中 - PENDING：未就绪 - CONCERNING：告警 - FAILED：失败 - UNKNOWN：未知 - DELETED：已删除
    * weight  **参数解释：** 服务实例权重。 **取值范围：** [0, 100] 或者为空。
    * podCount  **参数解释：** 服务实例pod数量。 **取值范围：** 不涉及。
    * runningPodCount  **参数解释：** 服务实例运行中pod数量。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务实例最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'status' => 'status',
            'weight' => 'weight',
            'podCount' => 'pod_count',
            'runningPodCount' => 'running_pod_count',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  **参数解释：** 服务实例名字。 **取值范围：** 不涉及。
    * status  **参数解释：** 服务实例状态。 **取值范围：** - RUNNING：运行中 - PENDING：未就绪 - CONCERNING：告警 - FAILED：失败 - UNKNOWN：未知 - DELETED：已删除
    * weight  **参数解释：** 服务实例权重。 **取值范围：** [0, 100] 或者为空。
    * podCount  **参数解释：** 服务实例pod数量。 **取值范围：** 不涉及。
    * runningPodCount  **参数解释：** 服务实例运行中pod数量。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务实例最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'status' => 'setStatus',
            'weight' => 'setWeight',
            'podCount' => 'setPodCount',
            'runningPodCount' => 'setRunningPodCount',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  **参数解释：** 服务实例名字。 **取值范围：** 不涉及。
    * status  **参数解释：** 服务实例状态。 **取值范围：** - RUNNING：运行中 - PENDING：未就绪 - CONCERNING：告警 - FAILED：失败 - UNKNOWN：未知 - DELETED：已删除
    * weight  **参数解释：** 服务实例权重。 **取值范围：** [0, 100] 或者为空。
    * podCount  **参数解释：** 服务实例pod数量。 **取值范围：** 不涉及。
    * runningPodCount  **参数解释：** 服务实例运行中pod数量。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务实例最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'status' => 'getStatus',
            'weight' => 'getWeight',
            'podCount' => 'getPodCount',
            'runningPodCount' => 'getRunningPodCount',
            'updateAt' => 'getUpdateAt'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['podCount'] = isset($data['podCount']) ? $data['podCount'] : null;
        $this->container['runningPodCount'] = isset($data['runningPodCount']) ? $data['runningPodCount'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 100)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
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
    * Gets instanceName
    *  **参数解释：** 服务实例名字。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释：** 服务实例名字。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 服务实例状态。 **取值范围：** - RUNNING：运行中 - PENDING：未就绪 - CONCERNING：告警 - FAILED：失败 - UNKNOWN：未知 - DELETED：已删除
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
    * @param string|null $status **参数解释：** 服务实例状态。 **取值范围：** - RUNNING：运行中 - PENDING：未就绪 - CONCERNING：告警 - FAILED：失败 - UNKNOWN：未知 - DELETED：已删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 服务实例权重。 **取值范围：** [0, 100] 或者为空。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight **参数解释：** 服务实例权重。 **取值范围：** [0, 100] 或者为空。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets podCount
    *  **参数解释：** 服务实例pod数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getPodCount()
    {
        return $this->container['podCount'];
    }

    /**
    * Sets podCount
    *
    * @param int|null $podCount **参数解释：** 服务实例pod数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodCount($podCount)
    {
        $this->container['podCount'] = $podCount;
        return $this;
    }

    /**
    * Gets runningPodCount
    *  **参数解释：** 服务实例运行中pod数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getRunningPodCount()
    {
        return $this->container['runningPodCount'];
    }

    /**
    * Sets runningPodCount
    *
    * @param int|null $runningPodCount **参数解释：** 服务实例运行中pod数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRunningPodCount($runningPodCount)
    {
        $this->container['runningPodCount'] = $runningPodCount;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 服务实例最近更新时间。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释：** 服务实例最近更新时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

