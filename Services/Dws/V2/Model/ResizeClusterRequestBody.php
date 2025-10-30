<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeClusterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeClusterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scaleOut  scaleOut
    * logicalClusterName  **参数解释**： 逻辑集群名字，扩容到逻辑集群时，需要填写。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * createNodeOnly  **参数解释**： 当前是否仅添加空闲节点。 **约束限制**： 不涉及。 **取值范围**： true：仅添加节点，如需扩容则需要单独操作 false：添加节点并扩容集群 **默认取值**： false
    * waitingForKilling  **参数解释**： 自动查杀作业等待时间。 **约束限制**： guestAgent插件版本8.2.1及以上才支持。 **取值范围**： 30~1200 **默认取值**： 0，即不限制。
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认是。如果设置为false，扩容后不进行重分布，此时集群任务信息处于“待重分布”状态，无法进行其他操作。 **约束限制**： 不涉及。 **取值范围**： true：扩容后立即重分布。 false：扩容后不进行重分布，此时集群任务信息处于“待重分布”状态。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scaleOut' => '\HuaweiCloud\SDK\Dws\V2\Model\ScaleOut',
            'logicalClusterName' => 'string',
            'createNodeOnly' => 'bool',
            'waitingForKilling' => 'int',
            'autoRedistribute' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scaleOut  scaleOut
    * logicalClusterName  **参数解释**： 逻辑集群名字，扩容到逻辑集群时，需要填写。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * createNodeOnly  **参数解释**： 当前是否仅添加空闲节点。 **约束限制**： 不涉及。 **取值范围**： true：仅添加节点，如需扩容则需要单独操作 false：添加节点并扩容集群 **默认取值**： false
    * waitingForKilling  **参数解释**： 自动查杀作业等待时间。 **约束限制**： guestAgent插件版本8.2.1及以上才支持。 **取值范围**： 30~1200 **默认取值**： 0，即不限制。
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认是。如果设置为false，扩容后不进行重分布，此时集群任务信息处于“待重分布”状态，无法进行其他操作。 **约束限制**： 不涉及。 **取值范围**： true：扩容后立即重分布。 false：扩容后不进行重分布，此时集群任务信息处于“待重分布”状态。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scaleOut' => null,
        'logicalClusterName' => null,
        'createNodeOnly' => null,
        'waitingForKilling' => 'int32',
        'autoRedistribute' => null
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
    * scaleOut  scaleOut
    * logicalClusterName  **参数解释**： 逻辑集群名字，扩容到逻辑集群时，需要填写。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * createNodeOnly  **参数解释**： 当前是否仅添加空闲节点。 **约束限制**： 不涉及。 **取值范围**： true：仅添加节点，如需扩容则需要单独操作 false：添加节点并扩容集群 **默认取值**： false
    * waitingForKilling  **参数解释**： 自动查杀作业等待时间。 **约束限制**： guestAgent插件版本8.2.1及以上才支持。 **取值范围**： 30~1200 **默认取值**： 0，即不限制。
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认是。如果设置为false，扩容后不进行重分布，此时集群任务信息处于“待重分布”状态，无法进行其他操作。 **约束限制**： 不涉及。 **取值范围**： true：扩容后立即重分布。 false：扩容后不进行重分布，此时集群任务信息处于“待重分布”状态。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scaleOut' => 'scale_out',
            'logicalClusterName' => 'logical_cluster_name',
            'createNodeOnly' => 'create_node_only',
            'waitingForKilling' => 'waiting_for_killing',
            'autoRedistribute' => 'auto_redistribute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scaleOut  scaleOut
    * logicalClusterName  **参数解释**： 逻辑集群名字，扩容到逻辑集群时，需要填写。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * createNodeOnly  **参数解释**： 当前是否仅添加空闲节点。 **约束限制**： 不涉及。 **取值范围**： true：仅添加节点，如需扩容则需要单独操作 false：添加节点并扩容集群 **默认取值**： false
    * waitingForKilling  **参数解释**： 自动查杀作业等待时间。 **约束限制**： guestAgent插件版本8.2.1及以上才支持。 **取值范围**： 30~1200 **默认取值**： 0，即不限制。
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认是。如果设置为false，扩容后不进行重分布，此时集群任务信息处于“待重分布”状态，无法进行其他操作。 **约束限制**： 不涉及。 **取值范围**： true：扩容后立即重分布。 false：扩容后不进行重分布，此时集群任务信息处于“待重分布”状态。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $setters = [
            'scaleOut' => 'setScaleOut',
            'logicalClusterName' => 'setLogicalClusterName',
            'createNodeOnly' => 'setCreateNodeOnly',
            'waitingForKilling' => 'setWaitingForKilling',
            'autoRedistribute' => 'setAutoRedistribute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scaleOut  scaleOut
    * logicalClusterName  **参数解释**： 逻辑集群名字，扩容到逻辑集群时，需要填写。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * createNodeOnly  **参数解释**： 当前是否仅添加空闲节点。 **约束限制**： 不涉及。 **取值范围**： true：仅添加节点，如需扩容则需要单独操作 false：添加节点并扩容集群 **默认取值**： false
    * waitingForKilling  **参数解释**： 自动查杀作业等待时间。 **约束限制**： guestAgent插件版本8.2.1及以上才支持。 **取值范围**： 30~1200 **默认取值**： 0，即不限制。
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认是。如果设置为false，扩容后不进行重分布，此时集群任务信息处于“待重分布”状态，无法进行其他操作。 **约束限制**： 不涉及。 **取值范围**： true：扩容后立即重分布。 false：扩容后不进行重分布，此时集群任务信息处于“待重分布”状态。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $getters = [
            'scaleOut' => 'getScaleOut',
            'logicalClusterName' => 'getLogicalClusterName',
            'createNodeOnly' => 'getCreateNodeOnly',
            'waitingForKilling' => 'getWaitingForKilling',
            'autoRedistribute' => 'getAutoRedistribute'
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
        $this->container['scaleOut'] = isset($data['scaleOut']) ? $data['scaleOut'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['createNodeOnly'] = isset($data['createNodeOnly']) ? $data['createNodeOnly'] : null;
        $this->container['waitingForKilling'] = isset($data['waitingForKilling']) ? $data['waitingForKilling'] : null;
        $this->container['autoRedistribute'] = isset($data['autoRedistribute']) ? $data['autoRedistribute'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scaleOut'] === null) {
            $invalidProperties[] = "'scaleOut' can't be null";
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
    * Gets scaleOut
    *  scaleOut
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ScaleOut
    */
    public function getScaleOut()
    {
        return $this->container['scaleOut'];
    }

    /**
    * Sets scaleOut
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ScaleOut $scaleOut scaleOut
    *
    * @return $this
    */
    public function setScaleOut($scaleOut)
    {
        $this->container['scaleOut'] = $scaleOut;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  **参数解释**： 逻辑集群名字，扩容到逻辑集群时，需要填写。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName **参数解释**： 逻辑集群名字，扩容到逻辑集群时，需要填写。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets createNodeOnly
    *  **参数解释**： 当前是否仅添加空闲节点。 **约束限制**： 不涉及。 **取值范围**： true：仅添加节点，如需扩容则需要单独操作 false：添加节点并扩容集群 **默认取值**： false
    *
    * @return bool|null
    */
    public function getCreateNodeOnly()
    {
        return $this->container['createNodeOnly'];
    }

    /**
    * Sets createNodeOnly
    *
    * @param bool|null $createNodeOnly **参数解释**： 当前是否仅添加空闲节点。 **约束限制**： 不涉及。 **取值范围**： true：仅添加节点，如需扩容则需要单独操作 false：添加节点并扩容集群 **默认取值**： false
    *
    * @return $this
    */
    public function setCreateNodeOnly($createNodeOnly)
    {
        $this->container['createNodeOnly'] = $createNodeOnly;
        return $this;
    }

    /**
    * Gets waitingForKilling
    *  **参数解释**： 自动查杀作业等待时间。 **约束限制**： guestAgent插件版本8.2.1及以上才支持。 **取值范围**： 30~1200 **默认取值**： 0，即不限制。
    *
    * @return int|null
    */
    public function getWaitingForKilling()
    {
        return $this->container['waitingForKilling'];
    }

    /**
    * Sets waitingForKilling
    *
    * @param int|null $waitingForKilling **参数解释**： 自动查杀作业等待时间。 **约束限制**： guestAgent插件版本8.2.1及以上才支持。 **取值范围**： 30~1200 **默认取值**： 0，即不限制。
    *
    * @return $this
    */
    public function setWaitingForKilling($waitingForKilling)
    {
        $this->container['waitingForKilling'] = $waitingForKilling;
        return $this;
    }

    /**
    * Gets autoRedistribute
    *  **参数解释**： 扩容完成后是否自动启动重分布，默认是。如果设置为false，扩容后不进行重分布，此时集群任务信息处于“待重分布”状态，无法进行其他操作。 **约束限制**： 不涉及。 **取值范围**： true：扩容后立即重分布。 false：扩容后不进行重分布，此时集群任务信息处于“待重分布”状态。 **默认取值**： true
    *
    * @return bool|null
    */
    public function getAutoRedistribute()
    {
        return $this->container['autoRedistribute'];
    }

    /**
    * Sets autoRedistribute
    *
    * @param bool|null $autoRedistribute **参数解释**： 扩容完成后是否自动启动重分布，默认是。如果设置为false，扩容后不进行重分布，此时集群任务信息处于“待重分布”状态，无法进行其他操作。 **约束限制**： 不涉及。 **取值范围**： true：扩容后立即重分布。 false：扩容后不进行重分布，此时集群任务信息处于“待重分布”状态。 **默认取值**： true
    *
    * @return $this
    */
    public function setAutoRedistribute($autoRedistribute)
    {
        $this->container['autoRedistribute'] = $autoRedistribute;
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

