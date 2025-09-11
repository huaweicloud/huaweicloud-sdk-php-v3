<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstancesMetricResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstancesMetricResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： - creating，表示实例正在创建。 - normal，表示实例正常。 - abnormal，表示实例异常。 - createfail，表示实例创建失败。
    * mode  **参数解释**： 实例类型。 **取值范围**： 不涉及。
    * engineName  **参数解释**： 引擎名称。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 引擎版本。 **取值范围**： 不涉及。
    * solution  **参数解释**： 部署形态。 **取值范围**： 不涉及。
    * diskUsedSize  **参数解释**： 实例数据磁盘已使用大小。 **取值范围**： 不涉及。
    * diskTotalSize  **参数解释**： 实例数据磁盘总大小。 **取值范围**： 不涉及。
    * diskUsage  **参数解释**： 实例数据磁盘已使用百分比。 **取值范围**： 不涉及。
    * p80  **参数解释**： 80% SQL的响应时间。 **取值范围**： 不涉及。
    * p95  **参数解释**： 95% SQL的响应时间。 **取值范围**： 不涉及。
    * deadlocks  **参数解释**： 死锁次数。 **取值范围**： 不涉及。
    * bufferHitRatio  **参数解释**： buffer 命中率。 **取值范围**： 不涉及。
    * nodes  **参数解释**： 实例节点信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'mode' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'solution' => 'string',
            'diskUsedSize' => 'string',
            'diskTotalSize' => 'string',
            'diskUsage' => 'string',
            'p80' => 'string',
            'p95' => 'string',
            'deadlocks' => 'string',
            'bufferHitRatio' => 'string',
            'nodes' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\InstancesNodesResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： - creating，表示实例正在创建。 - normal，表示实例正常。 - abnormal，表示实例异常。 - createfail，表示实例创建失败。
    * mode  **参数解释**： 实例类型。 **取值范围**： 不涉及。
    * engineName  **参数解释**： 引擎名称。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 引擎版本。 **取值范围**： 不涉及。
    * solution  **参数解释**： 部署形态。 **取值范围**： 不涉及。
    * diskUsedSize  **参数解释**： 实例数据磁盘已使用大小。 **取值范围**： 不涉及。
    * diskTotalSize  **参数解释**： 实例数据磁盘总大小。 **取值范围**： 不涉及。
    * diskUsage  **参数解释**： 实例数据磁盘已使用百分比。 **取值范围**： 不涉及。
    * p80  **参数解释**： 80% SQL的响应时间。 **取值范围**： 不涉及。
    * p95  **参数解释**： 95% SQL的响应时间。 **取值范围**： 不涉及。
    * deadlocks  **参数解释**： 死锁次数。 **取值范围**： 不涉及。
    * bufferHitRatio  **参数解释**： buffer 命中率。 **取值范围**： 不涉及。
    * nodes  **参数解释**： 实例节点信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'mode' => null,
        'engineName' => null,
        'engineVersion' => null,
        'solution' => null,
        'diskUsedSize' => null,
        'diskTotalSize' => null,
        'diskUsage' => null,
        'p80' => null,
        'p95' => null,
        'deadlocks' => null,
        'bufferHitRatio' => null,
        'nodes' => null
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
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： - creating，表示实例正在创建。 - normal，表示实例正常。 - abnormal，表示实例异常。 - createfail，表示实例创建失败。
    * mode  **参数解释**： 实例类型。 **取值范围**： 不涉及。
    * engineName  **参数解释**： 引擎名称。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 引擎版本。 **取值范围**： 不涉及。
    * solution  **参数解释**： 部署形态。 **取值范围**： 不涉及。
    * diskUsedSize  **参数解释**： 实例数据磁盘已使用大小。 **取值范围**： 不涉及。
    * diskTotalSize  **参数解释**： 实例数据磁盘总大小。 **取值范围**： 不涉及。
    * diskUsage  **参数解释**： 实例数据磁盘已使用百分比。 **取值范围**： 不涉及。
    * p80  **参数解释**： 80% SQL的响应时间。 **取值范围**： 不涉及。
    * p95  **参数解释**： 95% SQL的响应时间。 **取值范围**： 不涉及。
    * deadlocks  **参数解释**： 死锁次数。 **取值范围**： 不涉及。
    * bufferHitRatio  **参数解释**： buffer 命中率。 **取值范围**： 不涉及。
    * nodes  **参数解释**： 实例节点信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'mode' => 'mode',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'solution' => 'solution',
            'diskUsedSize' => 'disk_used_size',
            'diskTotalSize' => 'disk_total_size',
            'diskUsage' => 'disk_usage',
            'p80' => 'p80',
            'p95' => 'p95',
            'deadlocks' => 'deadlocks',
            'bufferHitRatio' => 'buffer_hit_ratio',
            'nodes' => 'nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： - creating，表示实例正在创建。 - normal，表示实例正常。 - abnormal，表示实例异常。 - createfail，表示实例创建失败。
    * mode  **参数解释**： 实例类型。 **取值范围**： 不涉及。
    * engineName  **参数解释**： 引擎名称。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 引擎版本。 **取值范围**： 不涉及。
    * solution  **参数解释**： 部署形态。 **取值范围**： 不涉及。
    * diskUsedSize  **参数解释**： 实例数据磁盘已使用大小。 **取值范围**： 不涉及。
    * diskTotalSize  **参数解释**： 实例数据磁盘总大小。 **取值范围**： 不涉及。
    * diskUsage  **参数解释**： 实例数据磁盘已使用百分比。 **取值范围**： 不涉及。
    * p80  **参数解释**： 80% SQL的响应时间。 **取值范围**： 不涉及。
    * p95  **参数解释**： 95% SQL的响应时间。 **取值范围**： 不涉及。
    * deadlocks  **参数解释**： 死锁次数。 **取值范围**： 不涉及。
    * bufferHitRatio  **参数解释**： buffer 命中率。 **取值范围**： 不涉及。
    * nodes  **参数解释**： 实例节点信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'mode' => 'setMode',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'solution' => 'setSolution',
            'diskUsedSize' => 'setDiskUsedSize',
            'diskTotalSize' => 'setDiskTotalSize',
            'diskUsage' => 'setDiskUsage',
            'p80' => 'setP80',
            'p95' => 'setP95',
            'deadlocks' => 'setDeadlocks',
            'bufferHitRatio' => 'setBufferHitRatio',
            'nodes' => 'setNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： - creating，表示实例正在创建。 - normal，表示实例正常。 - abnormal，表示实例异常。 - createfail，表示实例创建失败。
    * mode  **参数解释**： 实例类型。 **取值范围**： 不涉及。
    * engineName  **参数解释**： 引擎名称。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 引擎版本。 **取值范围**： 不涉及。
    * solution  **参数解释**： 部署形态。 **取值范围**： 不涉及。
    * diskUsedSize  **参数解释**： 实例数据磁盘已使用大小。 **取值范围**： 不涉及。
    * diskTotalSize  **参数解释**： 实例数据磁盘总大小。 **取值范围**： 不涉及。
    * diskUsage  **参数解释**： 实例数据磁盘已使用百分比。 **取值范围**： 不涉及。
    * p80  **参数解释**： 80% SQL的响应时间。 **取值范围**： 不涉及。
    * p95  **参数解释**： 95% SQL的响应时间。 **取值范围**： 不涉及。
    * deadlocks  **参数解释**： 死锁次数。 **取值范围**： 不涉及。
    * bufferHitRatio  **参数解释**： buffer 命中率。 **取值范围**： 不涉及。
    * nodes  **参数解释**： 实例节点信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'mode' => 'getMode',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'solution' => 'getSolution',
            'diskUsedSize' => 'getDiskUsedSize',
            'diskTotalSize' => 'getDiskTotalSize',
            'diskUsage' => 'getDiskUsage',
            'p80' => 'getP80',
            'p95' => 'getP95',
            'deadlocks' => 'getDeadlocks',
            'bufferHitRatio' => 'getBufferHitRatio',
            'nodes' => 'getNodes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['diskUsedSize'] = isset($data['diskUsedSize']) ? $data['diskUsedSize'] : null;
        $this->container['diskTotalSize'] = isset($data['diskTotalSize']) ? $data['diskTotalSize'] : null;
        $this->container['diskUsage'] = isset($data['diskUsage']) ? $data['diskUsage'] : null;
        $this->container['p80'] = isset($data['p80']) ? $data['p80'] : null;
        $this->container['p95'] = isset($data['p95']) ? $data['p95'] : null;
        $this->container['deadlocks'] = isset($data['deadlocks']) ? $data['deadlocks'] : null;
        $this->container['bufferHitRatio'] = isset($data['bufferHitRatio']) ? $data['bufferHitRatio'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
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
    * Gets id
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 实例状态。 **取值范围**： - creating，表示实例正在创建。 - normal，表示实例正常。 - abnormal，表示实例异常。 - createfail，表示实例创建失败。
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
    * @param string|null $status **参数解释**： 实例状态。 **取值范围**： - creating，表示实例正在创建。 - normal，表示实例正常。 - abnormal，表示实例异常。 - createfail，表示实例创建失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**： 实例类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**： 实例类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets engineName
    *  **参数解释**： 引擎名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName **参数解释**： 引擎名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  **参数解释**： 引擎版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion **参数解释**： 引擎版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets solution
    *  **参数解释**： 部署形态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution **参数解释**： 部署形态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets diskUsedSize
    *  **参数解释**： 实例数据磁盘已使用大小。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDiskUsedSize()
    {
        return $this->container['diskUsedSize'];
    }

    /**
    * Sets diskUsedSize
    *
    * @param string|null $diskUsedSize **参数解释**： 实例数据磁盘已使用大小。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskUsedSize($diskUsedSize)
    {
        $this->container['diskUsedSize'] = $diskUsedSize;
        return $this;
    }

    /**
    * Gets diskTotalSize
    *  **参数解释**： 实例数据磁盘总大小。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDiskTotalSize()
    {
        return $this->container['diskTotalSize'];
    }

    /**
    * Sets diskTotalSize
    *
    * @param string|null $diskTotalSize **参数解释**： 实例数据磁盘总大小。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskTotalSize($diskTotalSize)
    {
        $this->container['diskTotalSize'] = $diskTotalSize;
        return $this;
    }

    /**
    * Gets diskUsage
    *  **参数解释**： 实例数据磁盘已使用百分比。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDiskUsage()
    {
        return $this->container['diskUsage'];
    }

    /**
    * Sets diskUsage
    *
    * @param string|null $diskUsage **参数解释**： 实例数据磁盘已使用百分比。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskUsage($diskUsage)
    {
        $this->container['diskUsage'] = $diskUsage;
        return $this;
    }

    /**
    * Gets p80
    *  **参数解释**： 80% SQL的响应时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getP80()
    {
        return $this->container['p80'];
    }

    /**
    * Sets p80
    *
    * @param string|null $p80 **参数解释**： 80% SQL的响应时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setP80($p80)
    {
        $this->container['p80'] = $p80;
        return $this;
    }

    /**
    * Gets p95
    *  **参数解释**： 95% SQL的响应时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getP95()
    {
        return $this->container['p95'];
    }

    /**
    * Sets p95
    *
    * @param string|null $p95 **参数解释**： 95% SQL的响应时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setP95($p95)
    {
        $this->container['p95'] = $p95;
        return $this;
    }

    /**
    * Gets deadlocks
    *  **参数解释**： 死锁次数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDeadlocks()
    {
        return $this->container['deadlocks'];
    }

    /**
    * Sets deadlocks
    *
    * @param string|null $deadlocks **参数解释**： 死锁次数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDeadlocks($deadlocks)
    {
        $this->container['deadlocks'] = $deadlocks;
        return $this;
    }

    /**
    * Gets bufferHitRatio
    *  **参数解释**： buffer 命中率。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBufferHitRatio()
    {
        return $this->container['bufferHitRatio'];
    }

    /**
    * Sets bufferHitRatio
    *
    * @param string|null $bufferHitRatio **参数解释**： buffer 命中率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBufferHitRatio($bufferHitRatio)
    {
        $this->container['bufferHitRatio'] = $bufferHitRatio;
        return $this;
    }

    /**
    * Gets nodes
    *  **参数解释**： 实例节点信息列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\InstancesNodesResult[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\InstancesNodesResult[]|null $nodes **参数解释**： 实例节点信息列表。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
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

