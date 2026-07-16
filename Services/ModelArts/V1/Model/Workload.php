<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Workload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Workload';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v1：当前资源版本为v1
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - Workload：资源池作业
    * type  **参数解释**：资源池中作业的业务类型。 **取值范围**：可选值如下： - train：训练作业 - infer：推理服务 - notebook：Notebook作业 - x-infer：新版推理作业
    * namespace  **参数解释**：集群中作业所属的命名空间。 **取值范围**：不涉及。
    * name  **参数解释**：作业的名称。 **取值范围**：不涉及。
    * jobName  **参数解释**：作业的归属的上层业务的名称。 **取值范围**：不涉及。
    * uid  **参数解释**：作业的ID。 **取值范围**：不涉及。
    * jobUuid  **参数解释**：作业的归属的上层业务的ID。 **取值范围**：不涉及。
    * flavor  **参数解释**：作业的资源规格。 **取值范围**：不涉及。
    * status  **参数解释**：作业状态。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    * priority  **参数解释**：作业的优先级。 **取值范围**：不涉及。
    * runningDuration  **参数解释**：作业的运行时长，以秒为单位。 **取值范围**：不涉及。
    * pendingDuration  **参数解释**：作业的排队时长，以秒为单位。 **取值范围**：不涉及。
    * pendingPosition  **参数解释**：作业当前的排队位置。 **取值范围**：不涉及。
    * createTime  **参数解释**：作业的Unix创建时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * gvk  **参数解释**：作业的k8s资源类型、分组和版本。 **取值范围**：不涉及。
    * hostIps  **参数解释**：作业运行的节点IP列表，以“,”分隔。 **取值范围**：不涉及。
    * nodes  **参数解释**：作业运行时占用的节点资源信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiVersion' => 'string',
            'kind' => 'string',
            'type' => 'string',
            'namespace' => 'string',
            'name' => 'string',
            'jobName' => 'string',
            'uid' => 'string',
            'jobUuid' => 'string',
            'flavor' => 'string',
            'status' => 'string',
            'resourceRequirement' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkloadResourceRequirement',
            'priority' => 'string',
            'runningDuration' => 'int',
            'pendingDuration' => 'int',
            'pendingPosition' => 'int',
            'createTime' => 'int',
            'gvk' => 'string',
            'hostIps' => 'string',
            'nodes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkloadNodeVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v1：当前资源版本为v1
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - Workload：资源池作业
    * type  **参数解释**：资源池中作业的业务类型。 **取值范围**：可选值如下： - train：训练作业 - infer：推理服务 - notebook：Notebook作业 - x-infer：新版推理作业
    * namespace  **参数解释**：集群中作业所属的命名空间。 **取值范围**：不涉及。
    * name  **参数解释**：作业的名称。 **取值范围**：不涉及。
    * jobName  **参数解释**：作业的归属的上层业务的名称。 **取值范围**：不涉及。
    * uid  **参数解释**：作业的ID。 **取值范围**：不涉及。
    * jobUuid  **参数解释**：作业的归属的上层业务的ID。 **取值范围**：不涉及。
    * flavor  **参数解释**：作业的资源规格。 **取值范围**：不涉及。
    * status  **参数解释**：作业状态。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    * priority  **参数解释**：作业的优先级。 **取值范围**：不涉及。
    * runningDuration  **参数解释**：作业的运行时长，以秒为单位。 **取值范围**：不涉及。
    * pendingDuration  **参数解释**：作业的排队时长，以秒为单位。 **取值范围**：不涉及。
    * pendingPosition  **参数解释**：作业当前的排队位置。 **取值范围**：不涉及。
    * createTime  **参数解释**：作业的Unix创建时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * gvk  **参数解释**：作业的k8s资源类型、分组和版本。 **取值范围**：不涉及。
    * hostIps  **参数解释**：作业运行的节点IP列表，以“,”分隔。 **取值范围**：不涉及。
    * nodes  **参数解释**：作业运行时占用的节点资源信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiVersion' => null,
        'kind' => null,
        'type' => null,
        'namespace' => null,
        'name' => null,
        'jobName' => null,
        'uid' => null,
        'jobUuid' => null,
        'flavor' => null,
        'status' => null,
        'resourceRequirement' => null,
        'priority' => null,
        'runningDuration' => null,
        'pendingDuration' => null,
        'pendingPosition' => null,
        'createTime' => null,
        'gvk' => null,
        'hostIps' => null,
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
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v1：当前资源版本为v1
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - Workload：资源池作业
    * type  **参数解释**：资源池中作业的业务类型。 **取值范围**：可选值如下： - train：训练作业 - infer：推理服务 - notebook：Notebook作业 - x-infer：新版推理作业
    * namespace  **参数解释**：集群中作业所属的命名空间。 **取值范围**：不涉及。
    * name  **参数解释**：作业的名称。 **取值范围**：不涉及。
    * jobName  **参数解释**：作业的归属的上层业务的名称。 **取值范围**：不涉及。
    * uid  **参数解释**：作业的ID。 **取值范围**：不涉及。
    * jobUuid  **参数解释**：作业的归属的上层业务的ID。 **取值范围**：不涉及。
    * flavor  **参数解释**：作业的资源规格。 **取值范围**：不涉及。
    * status  **参数解释**：作业状态。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    * priority  **参数解释**：作业的优先级。 **取值范围**：不涉及。
    * runningDuration  **参数解释**：作业的运行时长，以秒为单位。 **取值范围**：不涉及。
    * pendingDuration  **参数解释**：作业的排队时长，以秒为单位。 **取值范围**：不涉及。
    * pendingPosition  **参数解释**：作业当前的排队位置。 **取值范围**：不涉及。
    * createTime  **参数解释**：作业的Unix创建时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * gvk  **参数解释**：作业的k8s资源类型、分组和版本。 **取值范围**：不涉及。
    * hostIps  **参数解释**：作业运行的节点IP列表，以“,”分隔。 **取值范围**：不涉及。
    * nodes  **参数解释**：作业运行时占用的节点资源信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiVersion' => 'apiVersion',
            'kind' => 'kind',
            'type' => 'type',
            'namespace' => 'namespace',
            'name' => 'name',
            'jobName' => 'jobName',
            'uid' => 'uid',
            'jobUuid' => 'jobUUID',
            'flavor' => 'flavor',
            'status' => 'status',
            'resourceRequirement' => 'resourceRequirement',
            'priority' => 'priority',
            'runningDuration' => 'runningDuration',
            'pendingDuration' => 'pendingDuration',
            'pendingPosition' => 'pendingPosition',
            'createTime' => 'createTime',
            'gvk' => 'gvk',
            'hostIps' => 'hostIps',
            'nodes' => 'nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v1：当前资源版本为v1
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - Workload：资源池作业
    * type  **参数解释**：资源池中作业的业务类型。 **取值范围**：可选值如下： - train：训练作业 - infer：推理服务 - notebook：Notebook作业 - x-infer：新版推理作业
    * namespace  **参数解释**：集群中作业所属的命名空间。 **取值范围**：不涉及。
    * name  **参数解释**：作业的名称。 **取值范围**：不涉及。
    * jobName  **参数解释**：作业的归属的上层业务的名称。 **取值范围**：不涉及。
    * uid  **参数解释**：作业的ID。 **取值范围**：不涉及。
    * jobUuid  **参数解释**：作业的归属的上层业务的ID。 **取值范围**：不涉及。
    * flavor  **参数解释**：作业的资源规格。 **取值范围**：不涉及。
    * status  **参数解释**：作业状态。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    * priority  **参数解释**：作业的优先级。 **取值范围**：不涉及。
    * runningDuration  **参数解释**：作业的运行时长，以秒为单位。 **取值范围**：不涉及。
    * pendingDuration  **参数解释**：作业的排队时长，以秒为单位。 **取值范围**：不涉及。
    * pendingPosition  **参数解释**：作业当前的排队位置。 **取值范围**：不涉及。
    * createTime  **参数解释**：作业的Unix创建时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * gvk  **参数解释**：作业的k8s资源类型、分组和版本。 **取值范围**：不涉及。
    * hostIps  **参数解释**：作业运行的节点IP列表，以“,”分隔。 **取值范围**：不涉及。
    * nodes  **参数解释**：作业运行时占用的节点资源信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiVersion' => 'setApiVersion',
            'kind' => 'setKind',
            'type' => 'setType',
            'namespace' => 'setNamespace',
            'name' => 'setName',
            'jobName' => 'setJobName',
            'uid' => 'setUid',
            'jobUuid' => 'setJobUuid',
            'flavor' => 'setFlavor',
            'status' => 'setStatus',
            'resourceRequirement' => 'setResourceRequirement',
            'priority' => 'setPriority',
            'runningDuration' => 'setRunningDuration',
            'pendingDuration' => 'setPendingDuration',
            'pendingPosition' => 'setPendingPosition',
            'createTime' => 'setCreateTime',
            'gvk' => 'setGvk',
            'hostIps' => 'setHostIps',
            'nodes' => 'setNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiVersion  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v1：当前资源版本为v1
    * kind  **参数解释**：资源的类型。 **取值范围**：可选值如下： - Workload：资源池作业
    * type  **参数解释**：资源池中作业的业务类型。 **取值范围**：可选值如下： - train：训练作业 - infer：推理服务 - notebook：Notebook作业 - x-infer：新版推理作业
    * namespace  **参数解释**：集群中作业所属的命名空间。 **取值范围**：不涉及。
    * name  **参数解释**：作业的名称。 **取值范围**：不涉及。
    * jobName  **参数解释**：作业的归属的上层业务的名称。 **取值范围**：不涉及。
    * uid  **参数解释**：作业的ID。 **取值范围**：不涉及。
    * jobUuid  **参数解释**：作业的归属的上层业务的ID。 **取值范围**：不涉及。
    * flavor  **参数解释**：作业的资源规格。 **取值范围**：不涉及。
    * status  **参数解释**：作业状态。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    * priority  **参数解释**：作业的优先级。 **取值范围**：不涉及。
    * runningDuration  **参数解释**：作业的运行时长，以秒为单位。 **取值范围**：不涉及。
    * pendingDuration  **参数解释**：作业的排队时长，以秒为单位。 **取值范围**：不涉及。
    * pendingPosition  **参数解释**：作业当前的排队位置。 **取值范围**：不涉及。
    * createTime  **参数解释**：作业的Unix创建时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * gvk  **参数解释**：作业的k8s资源类型、分组和版本。 **取值范围**：不涉及。
    * hostIps  **参数解释**：作业运行的节点IP列表，以“,”分隔。 **取值范围**：不涉及。
    * nodes  **参数解释**：作业运行时占用的节点资源信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiVersion' => 'getApiVersion',
            'kind' => 'getKind',
            'type' => 'getType',
            'namespace' => 'getNamespace',
            'name' => 'getName',
            'jobName' => 'getJobName',
            'uid' => 'getUid',
            'jobUuid' => 'getJobUuid',
            'flavor' => 'getFlavor',
            'status' => 'getStatus',
            'resourceRequirement' => 'getResourceRequirement',
            'priority' => 'getPriority',
            'runningDuration' => 'getRunningDuration',
            'pendingDuration' => 'getPendingDuration',
            'pendingPosition' => 'getPendingPosition',
            'createTime' => 'getCreateTime',
            'gvk' => 'getGvk',
            'hostIps' => 'getHostIps',
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['jobUuid'] = isset($data['jobUuid']) ? $data['jobUuid'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceRequirement'] = isset($data['resourceRequirement']) ? $data['resourceRequirement'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['runningDuration'] = isset($data['runningDuration']) ? $data['runningDuration'] : null;
        $this->container['pendingDuration'] = isset($data['pendingDuration']) ? $data['pendingDuration'] : null;
        $this->container['pendingPosition'] = isset($data['pendingPosition']) ? $data['pendingPosition'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['gvk'] = isset($data['gvk']) ? $data['gvk'] : null;
        $this->container['hostIps'] = isset($data['hostIps']) ? $data['hostIps'] : null;
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
        if ($this->container['apiVersion'] === null) {
            $invalidProperties[] = "'apiVersion' can't be null";
        }
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets apiVersion
    *  **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v1：当前资源版本为v1
    *
    * @return string
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string $apiVersion **参数解释**：资源的API版本。 **取值范围**：可选值如下： - v1：当前资源版本为v1
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets kind
    *  **参数解释**：资源的类型。 **取值范围**：可选值如下： - Workload：资源池作业
    *
    * @return string
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string $kind **参数解释**：资源的类型。 **取值范围**：可选值如下： - Workload：资源池作业
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：资源池中作业的业务类型。 **取值范围**：可选值如下： - train：训练作业 - infer：推理服务 - notebook：Notebook作业 - x-infer：新版推理作业
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：资源池中作业的业务类型。 **取值范围**：可选值如下： - train：训练作业 - infer：推理服务 - notebook：Notebook作业 - x-infer：新版推理作业
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**：集群中作业所属的命名空间。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace **参数解释**：集群中作业所属的命名空间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：作业的名称。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：作业的名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets jobName
    *  **参数解释**：作业的归属的上层业务的名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName **参数解释**：作业的归属的上层业务的名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets uid
    *  **参数解释**：作业的ID。 **取值范围**：不涉及。
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
    * @param string|null $uid **参数解释**：作业的ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets jobUuid
    *  **参数解释**：作业的归属的上层业务的ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getJobUuid()
    {
        return $this->container['jobUuid'];
    }

    /**
    * Sets jobUuid
    *
    * @param string|null $jobUuid **参数解释**：作业的归属的上层业务的ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setJobUuid($jobUuid)
    {
        $this->container['jobUuid'] = $jobUuid;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：作业的资源规格。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释**：作业的资源规格。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：作业状态。 **取值范围**：不涉及。
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
    * @param string|null $status **参数解释**：作业状态。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resourceRequirement
    *  resourceRequirement
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkloadResourceRequirement|null
    */
    public function getResourceRequirement()
    {
        return $this->container['resourceRequirement'];
    }

    /**
    * Sets resourceRequirement
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkloadResourceRequirement|null $resourceRequirement resourceRequirement
    *
    * @return $this
    */
    public function setResourceRequirement($resourceRequirement)
    {
        $this->container['resourceRequirement'] = $resourceRequirement;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释**：作业的优先级。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority **参数解释**：作业的优先级。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets runningDuration
    *  **参数解释**：作业的运行时长，以秒为单位。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getRunningDuration()
    {
        return $this->container['runningDuration'];
    }

    /**
    * Sets runningDuration
    *
    * @param int|null $runningDuration **参数解释**：作业的运行时长，以秒为单位。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRunningDuration($runningDuration)
    {
        $this->container['runningDuration'] = $runningDuration;
        return $this;
    }

    /**
    * Gets pendingDuration
    *  **参数解释**：作业的排队时长，以秒为单位。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getPendingDuration()
    {
        return $this->container['pendingDuration'];
    }

    /**
    * Sets pendingDuration
    *
    * @param int|null $pendingDuration **参数解释**：作业的排队时长，以秒为单位。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPendingDuration($pendingDuration)
    {
        $this->container['pendingDuration'] = $pendingDuration;
        return $this;
    }

    /**
    * Gets pendingPosition
    *  **参数解释**：作业当前的排队位置。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getPendingPosition()
    {
        return $this->container['pendingPosition'];
    }

    /**
    * Sets pendingPosition
    *
    * @param int|null $pendingPosition **参数解释**：作业当前的排队位置。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPendingPosition($pendingPosition)
    {
        $this->container['pendingPosition'] = $pendingPosition;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**：作业的Unix创建时间戳，以毫秒为单位。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**：作业的Unix创建时间戳，以毫秒为单位。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets gvk
    *  **参数解释**：作业的k8s资源类型、分组和版本。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getGvk()
    {
        return $this->container['gvk'];
    }

    /**
    * Sets gvk
    *
    * @param string|null $gvk **参数解释**：作业的k8s资源类型、分组和版本。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setGvk($gvk)
    {
        $this->container['gvk'] = $gvk;
        return $this;
    }

    /**
    * Gets hostIps
    *  **参数解释**：作业运行的节点IP列表，以“,”分隔。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getHostIps()
    {
        return $this->container['hostIps'];
    }

    /**
    * Sets hostIps
    *
    * @param string|null $hostIps **参数解释**：作业运行的节点IP列表，以“,”分隔。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setHostIps($hostIps)
    {
        $this->container['hostIps'] = $hostIps;
        return $this;
    }

    /**
    * Gets nodes
    *  **参数解释**：作业运行时占用的节点资源信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkloadNodeVO[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkloadNodeVO[]|null $nodes **参数解释**：作业运行时占用的节点资源信息。
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

