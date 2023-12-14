<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeClusterWithExistedNodesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeClusterWithExistedNodesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scaleOut  scaleOut
    * resize  resize
    * forceBackup  是否强制备份
    * mode  扩容模式
    * logicalClusterName  逻辑集群名称
    * expandWithExistedNode  是否是使用已添加的空闲节点进行扩容
    * createNodeOnly  否只是添加节点
    * autoRedistribute  扩容完成后是否自动启动重分布，默认是
    * isSchedulerBuildMode  是否调度模式扩容加节点
    * redisConf  redisConf
    * buildTaskInfo  buildTaskInfo
    * orderId  扩容订单ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scaleOut' => '\HuaweiCloud\SDK\Dws\V2\Model\ScaleOut',
            'resize' => '\HuaweiCloud\SDK\Dws\V2\Model\Resize',
            'forceBackup' => 'bool',
            'mode' => 'string',
            'logicalClusterName' => 'string',
            'expandWithExistedNode' => 'bool',
            'createNodeOnly' => 'bool',
            'autoRedistribute' => 'bool',
            'isSchedulerBuildMode' => 'bool',
            'redisConf' => '\HuaweiCloud\SDK\Dws\V2\Model\RedisConf',
            'buildTaskInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\BuildTaskInfo',
            'orderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scaleOut  scaleOut
    * resize  resize
    * forceBackup  是否强制备份
    * mode  扩容模式
    * logicalClusterName  逻辑集群名称
    * expandWithExistedNode  是否是使用已添加的空闲节点进行扩容
    * createNodeOnly  否只是添加节点
    * autoRedistribute  扩容完成后是否自动启动重分布，默认是
    * isSchedulerBuildMode  是否调度模式扩容加节点
    * redisConf  redisConf
    * buildTaskInfo  buildTaskInfo
    * orderId  扩容订单ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scaleOut' => null,
        'resize' => null,
        'forceBackup' => null,
        'mode' => null,
        'logicalClusterName' => null,
        'expandWithExistedNode' => null,
        'createNodeOnly' => null,
        'autoRedistribute' => null,
        'isSchedulerBuildMode' => null,
        'redisConf' => null,
        'buildTaskInfo' => null,
        'orderId' => null
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
    * resize  resize
    * forceBackup  是否强制备份
    * mode  扩容模式
    * logicalClusterName  逻辑集群名称
    * expandWithExistedNode  是否是使用已添加的空闲节点进行扩容
    * createNodeOnly  否只是添加节点
    * autoRedistribute  扩容完成后是否自动启动重分布，默认是
    * isSchedulerBuildMode  是否调度模式扩容加节点
    * redisConf  redisConf
    * buildTaskInfo  buildTaskInfo
    * orderId  扩容订单ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scaleOut' => 'scale_out',
            'resize' => 'resize',
            'forceBackup' => 'force_backup',
            'mode' => 'mode',
            'logicalClusterName' => 'logical_cluster_name',
            'expandWithExistedNode' => 'expand_with_existed_node',
            'createNodeOnly' => 'create_node_only',
            'autoRedistribute' => 'auto_redistribute',
            'isSchedulerBuildMode' => 'is_scheduler_build_mode',
            'redisConf' => 'redis_conf',
            'buildTaskInfo' => 'build_task_info',
            'orderId' => 'order_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scaleOut  scaleOut
    * resize  resize
    * forceBackup  是否强制备份
    * mode  扩容模式
    * logicalClusterName  逻辑集群名称
    * expandWithExistedNode  是否是使用已添加的空闲节点进行扩容
    * createNodeOnly  否只是添加节点
    * autoRedistribute  扩容完成后是否自动启动重分布，默认是
    * isSchedulerBuildMode  是否调度模式扩容加节点
    * redisConf  redisConf
    * buildTaskInfo  buildTaskInfo
    * orderId  扩容订单ID
    *
    * @var string[]
    */
    protected static $setters = [
            'scaleOut' => 'setScaleOut',
            'resize' => 'setResize',
            'forceBackup' => 'setForceBackup',
            'mode' => 'setMode',
            'logicalClusterName' => 'setLogicalClusterName',
            'expandWithExistedNode' => 'setExpandWithExistedNode',
            'createNodeOnly' => 'setCreateNodeOnly',
            'autoRedistribute' => 'setAutoRedistribute',
            'isSchedulerBuildMode' => 'setIsSchedulerBuildMode',
            'redisConf' => 'setRedisConf',
            'buildTaskInfo' => 'setBuildTaskInfo',
            'orderId' => 'setOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scaleOut  scaleOut
    * resize  resize
    * forceBackup  是否强制备份
    * mode  扩容模式
    * logicalClusterName  逻辑集群名称
    * expandWithExistedNode  是否是使用已添加的空闲节点进行扩容
    * createNodeOnly  否只是添加节点
    * autoRedistribute  扩容完成后是否自动启动重分布，默认是
    * isSchedulerBuildMode  是否调度模式扩容加节点
    * redisConf  redisConf
    * buildTaskInfo  buildTaskInfo
    * orderId  扩容订单ID
    *
    * @var string[]
    */
    protected static $getters = [
            'scaleOut' => 'getScaleOut',
            'resize' => 'getResize',
            'forceBackup' => 'getForceBackup',
            'mode' => 'getMode',
            'logicalClusterName' => 'getLogicalClusterName',
            'expandWithExistedNode' => 'getExpandWithExistedNode',
            'createNodeOnly' => 'getCreateNodeOnly',
            'autoRedistribute' => 'getAutoRedistribute',
            'isSchedulerBuildMode' => 'getIsSchedulerBuildMode',
            'redisConf' => 'getRedisConf',
            'buildTaskInfo' => 'getBuildTaskInfo',
            'orderId' => 'getOrderId'
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
        $this->container['resize'] = isset($data['resize']) ? $data['resize'] : null;
        $this->container['forceBackup'] = isset($data['forceBackup']) ? $data['forceBackup'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['expandWithExistedNode'] = isset($data['expandWithExistedNode']) ? $data['expandWithExistedNode'] : null;
        $this->container['createNodeOnly'] = isset($data['createNodeOnly']) ? $data['createNodeOnly'] : null;
        $this->container['autoRedistribute'] = isset($data['autoRedistribute']) ? $data['autoRedistribute'] : null;
        $this->container['isSchedulerBuildMode'] = isset($data['isSchedulerBuildMode']) ? $data['isSchedulerBuildMode'] : null;
        $this->container['redisConf'] = isset($data['redisConf']) ? $data['redisConf'] : null;
        $this->container['buildTaskInfo'] = isset($data['buildTaskInfo']) ? $data['buildTaskInfo'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
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
        if ($this->container['forceBackup'] === null) {
            $invalidProperties[] = "'forceBackup' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['logicalClusterName'] === null) {
            $invalidProperties[] = "'logicalClusterName' can't be null";
        }
        if ($this->container['expandWithExistedNode'] === null) {
            $invalidProperties[] = "'expandWithExistedNode' can't be null";
        }
        if ($this->container['createNodeOnly'] === null) {
            $invalidProperties[] = "'createNodeOnly' can't be null";
        }
        if ($this->container['autoRedistribute'] === null) {
            $invalidProperties[] = "'autoRedistribute' can't be null";
        }
        if ($this->container['isSchedulerBuildMode'] === null) {
            $invalidProperties[] = "'isSchedulerBuildMode' can't be null";
        }
        if ($this->container['redisConf'] === null) {
            $invalidProperties[] = "'redisConf' can't be null";
        }
        if ($this->container['buildTaskInfo'] === null) {
            $invalidProperties[] = "'buildTaskInfo' can't be null";
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
    * Gets resize
    *  resize
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Resize|null
    */
    public function getResize()
    {
        return $this->container['resize'];
    }

    /**
    * Sets resize
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Resize|null $resize resize
    *
    * @return $this
    */
    public function setResize($resize)
    {
        $this->container['resize'] = $resize;
        return $this;
    }

    /**
    * Gets forceBackup
    *  是否强制备份
    *
    * @return bool
    */
    public function getForceBackup()
    {
        return $this->container['forceBackup'];
    }

    /**
    * Sets forceBackup
    *
    * @param bool $forceBackup 是否强制备份
    *
    * @return $this
    */
    public function setForceBackup($forceBackup)
    {
        $this->container['forceBackup'] = $forceBackup;
        return $this;
    }

    /**
    * Gets mode
    *  扩容模式
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 扩容模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  逻辑集群名称
    *
    * @return string
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string $logicalClusterName 逻辑集群名称
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets expandWithExistedNode
    *  是否是使用已添加的空闲节点进行扩容
    *
    * @return bool
    */
    public function getExpandWithExistedNode()
    {
        return $this->container['expandWithExistedNode'];
    }

    /**
    * Sets expandWithExistedNode
    *
    * @param bool $expandWithExistedNode 是否是使用已添加的空闲节点进行扩容
    *
    * @return $this
    */
    public function setExpandWithExistedNode($expandWithExistedNode)
    {
        $this->container['expandWithExistedNode'] = $expandWithExistedNode;
        return $this;
    }

    /**
    * Gets createNodeOnly
    *  否只是添加节点
    *
    * @return bool
    */
    public function getCreateNodeOnly()
    {
        return $this->container['createNodeOnly'];
    }

    /**
    * Sets createNodeOnly
    *
    * @param bool $createNodeOnly 否只是添加节点
    *
    * @return $this
    */
    public function setCreateNodeOnly($createNodeOnly)
    {
        $this->container['createNodeOnly'] = $createNodeOnly;
        return $this;
    }

    /**
    * Gets autoRedistribute
    *  扩容完成后是否自动启动重分布，默认是
    *
    * @return bool
    */
    public function getAutoRedistribute()
    {
        return $this->container['autoRedistribute'];
    }

    /**
    * Sets autoRedistribute
    *
    * @param bool $autoRedistribute 扩容完成后是否自动启动重分布，默认是
    *
    * @return $this
    */
    public function setAutoRedistribute($autoRedistribute)
    {
        $this->container['autoRedistribute'] = $autoRedistribute;
        return $this;
    }

    /**
    * Gets isSchedulerBuildMode
    *  是否调度模式扩容加节点
    *
    * @return bool
    */
    public function getIsSchedulerBuildMode()
    {
        return $this->container['isSchedulerBuildMode'];
    }

    /**
    * Sets isSchedulerBuildMode
    *
    * @param bool $isSchedulerBuildMode 是否调度模式扩容加节点
    *
    * @return $this
    */
    public function setIsSchedulerBuildMode($isSchedulerBuildMode)
    {
        $this->container['isSchedulerBuildMode'] = $isSchedulerBuildMode;
        return $this;
    }

    /**
    * Gets redisConf
    *  redisConf
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\RedisConf
    */
    public function getRedisConf()
    {
        return $this->container['redisConf'];
    }

    /**
    * Sets redisConf
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\RedisConf $redisConf redisConf
    *
    * @return $this
    */
    public function setRedisConf($redisConf)
    {
        $this->container['redisConf'] = $redisConf;
        return $this;
    }

    /**
    * Gets buildTaskInfo
    *  buildTaskInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\BuildTaskInfo
    */
    public function getBuildTaskInfo()
    {
        return $this->container['buildTaskInfo'];
    }

    /**
    * Sets buildTaskInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\BuildTaskInfo $buildTaskInfo buildTaskInfo
    *
    * @return $this
    */
    public function setBuildTaskInfo($buildTaskInfo)
    {
        $this->container['buildTaskInfo'] = $buildTaskInfo;
        return $this;
    }

    /**
    * Gets orderId
    *  扩容订单ID
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 扩容订单ID
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
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

