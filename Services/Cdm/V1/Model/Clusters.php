<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Clusters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'clusters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerConfig  customerConfig
    * datastore  datastore
    * instances  集群的节点信息，请参见instances参数说明
    * azName  az名称
    * dbuser  数据库用户
    * flavorName  规格名称
    * recentEvent  事件数
    * isAutoOff  自动关机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * clusterMode  集群模式：sharding(分片集群)
    * namespace  命名空间
    * task  task
    * publicEndpoint  集群绑定的EIP
    * actionProgress  actionProgress
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * name  集群名称
    * statusDetail  集群状态描述：Normal（正常）
    * id  集群ID
    * isFrozen  集群是否冻结：0：否 1：是
    * updated  集群更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 500：重启中 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    * failedReasons  failedReasons
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerConfig' => '\HuaweiCloud\SDK\Cdm\V1\Model\CustomerConfig',
            'datastore' => '\HuaweiCloud\SDK\Cdm\V1\Model\Datastore',
            'instances' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstance[]',
            'azName' => 'string',
            'dbuser' => 'string',
            'flavorName' => 'string',
            'recentEvent' => 'int',
            'isAutoOff' => 'bool',
            'isScheduleBootOff' => 'bool',
            'clusterMode' => 'string',
            'namespace' => 'string',
            'task' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterTask',
            'publicEndpoint' => 'string',
            'actionProgress' => '\HuaweiCloud\SDK\Cdm\V1\Model\ActionProgress',
            'created' => 'string',
            'bakExpectedStartTime' => 'string',
            'bakKeepDay' => 'int',
            'name' => 'string',
            'statusDetail' => 'string',
            'id' => 'string',
            'isFrozen' => 'string',
            'updated' => 'string',
            'status' => 'string',
            'failedReasons' => '\HuaweiCloud\SDK\Cdm\V1\Model\FailedReasons'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerConfig  customerConfig
    * datastore  datastore
    * instances  集群的节点信息，请参见instances参数说明
    * azName  az名称
    * dbuser  数据库用户
    * flavorName  规格名称
    * recentEvent  事件数
    * isAutoOff  自动关机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * clusterMode  集群模式：sharding(分片集群)
    * namespace  命名空间
    * task  task
    * publicEndpoint  集群绑定的EIP
    * actionProgress  actionProgress
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * name  集群名称
    * statusDetail  集群状态描述：Normal（正常）
    * id  集群ID
    * isFrozen  集群是否冻结：0：否 1：是
    * updated  集群更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 500：重启中 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    * failedReasons  failedReasons
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerConfig' => null,
        'datastore' => null,
        'instances' => null,
        'azName' => null,
        'dbuser' => null,
        'flavorName' => null,
        'recentEvent' => 'int32',
        'isAutoOff' => null,
        'isScheduleBootOff' => null,
        'clusterMode' => null,
        'namespace' => null,
        'task' => null,
        'publicEndpoint' => null,
        'actionProgress' => null,
        'created' => null,
        'bakExpectedStartTime' => null,
        'bakKeepDay' => 'int32',
        'name' => null,
        'statusDetail' => null,
        'id' => null,
        'isFrozen' => null,
        'updated' => null,
        'status' => null,
        'failedReasons' => null
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
    * customerConfig  customerConfig
    * datastore  datastore
    * instances  集群的节点信息，请参见instances参数说明
    * azName  az名称
    * dbuser  数据库用户
    * flavorName  规格名称
    * recentEvent  事件数
    * isAutoOff  自动关机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * clusterMode  集群模式：sharding(分片集群)
    * namespace  命名空间
    * task  task
    * publicEndpoint  集群绑定的EIP
    * actionProgress  actionProgress
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * name  集群名称
    * statusDetail  集群状态描述：Normal（正常）
    * id  集群ID
    * isFrozen  集群是否冻结：0：否 1：是
    * updated  集群更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 500：重启中 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    * failedReasons  failedReasons
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerConfig' => 'customerConfig',
            'datastore' => 'datastore',
            'instances' => 'instances',
            'azName' => 'azName',
            'dbuser' => 'dbuser',
            'flavorName' => 'flavorName',
            'recentEvent' => 'recentEvent',
            'isAutoOff' => 'isAutoOff',
            'isScheduleBootOff' => 'isScheduleBootOff',
            'clusterMode' => 'clusterMode',
            'namespace' => 'namespace',
            'task' => 'task',
            'publicEndpoint' => 'publicEndpoint',
            'actionProgress' => 'actionProgress',
            'created' => 'created',
            'bakExpectedStartTime' => 'bakExpectedStartTime',
            'bakKeepDay' => 'bakKeepDay',
            'name' => 'name',
            'statusDetail' => 'statusDetail',
            'id' => 'id',
            'isFrozen' => 'isFrozen',
            'updated' => 'updated',
            'status' => 'status',
            'failedReasons' => 'failedReasons'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerConfig  customerConfig
    * datastore  datastore
    * instances  集群的节点信息，请参见instances参数说明
    * azName  az名称
    * dbuser  数据库用户
    * flavorName  规格名称
    * recentEvent  事件数
    * isAutoOff  自动关机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * clusterMode  集群模式：sharding(分片集群)
    * namespace  命名空间
    * task  task
    * publicEndpoint  集群绑定的EIP
    * actionProgress  actionProgress
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * name  集群名称
    * statusDetail  集群状态描述：Normal（正常）
    * id  集群ID
    * isFrozen  集群是否冻结：0：否 1：是
    * updated  集群更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 500：重启中 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    * failedReasons  failedReasons
    *
    * @var string[]
    */
    protected static $setters = [
            'customerConfig' => 'setCustomerConfig',
            'datastore' => 'setDatastore',
            'instances' => 'setInstances',
            'azName' => 'setAzName',
            'dbuser' => 'setDbuser',
            'flavorName' => 'setFlavorName',
            'recentEvent' => 'setRecentEvent',
            'isAutoOff' => 'setIsAutoOff',
            'isScheduleBootOff' => 'setIsScheduleBootOff',
            'clusterMode' => 'setClusterMode',
            'namespace' => 'setNamespace',
            'task' => 'setTask',
            'publicEndpoint' => 'setPublicEndpoint',
            'actionProgress' => 'setActionProgress',
            'created' => 'setCreated',
            'bakExpectedStartTime' => 'setBakExpectedStartTime',
            'bakKeepDay' => 'setBakKeepDay',
            'name' => 'setName',
            'statusDetail' => 'setStatusDetail',
            'id' => 'setId',
            'isFrozen' => 'setIsFrozen',
            'updated' => 'setUpdated',
            'status' => 'setStatus',
            'failedReasons' => 'setFailedReasons'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerConfig  customerConfig
    * datastore  datastore
    * instances  集群的节点信息，请参见instances参数说明
    * azName  az名称
    * dbuser  数据库用户
    * flavorName  规格名称
    * recentEvent  事件数
    * isAutoOff  自动关机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * clusterMode  集群模式：sharding(分片集群)
    * namespace  命名空间
    * task  task
    * publicEndpoint  集群绑定的EIP
    * actionProgress  actionProgress
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * name  集群名称
    * statusDetail  集群状态描述：Normal（正常）
    * id  集群ID
    * isFrozen  集群是否冻结：0：否 1：是
    * updated  集群更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 500：重启中 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    * failedReasons  failedReasons
    *
    * @var string[]
    */
    protected static $getters = [
            'customerConfig' => 'getCustomerConfig',
            'datastore' => 'getDatastore',
            'instances' => 'getInstances',
            'azName' => 'getAzName',
            'dbuser' => 'getDbuser',
            'flavorName' => 'getFlavorName',
            'recentEvent' => 'getRecentEvent',
            'isAutoOff' => 'getIsAutoOff',
            'isScheduleBootOff' => 'getIsScheduleBootOff',
            'clusterMode' => 'getClusterMode',
            'namespace' => 'getNamespace',
            'task' => 'getTask',
            'publicEndpoint' => 'getPublicEndpoint',
            'actionProgress' => 'getActionProgress',
            'created' => 'getCreated',
            'bakExpectedStartTime' => 'getBakExpectedStartTime',
            'bakKeepDay' => 'getBakKeepDay',
            'name' => 'getName',
            'statusDetail' => 'getStatusDetail',
            'id' => 'getId',
            'isFrozen' => 'getIsFrozen',
            'updated' => 'getUpdated',
            'status' => 'getStatus',
            'failedReasons' => 'getFailedReasons'
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
        $this->container['customerConfig'] = isset($data['customerConfig']) ? $data['customerConfig'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['dbuser'] = isset($data['dbuser']) ? $data['dbuser'] : null;
        $this->container['flavorName'] = isset($data['flavorName']) ? $data['flavorName'] : null;
        $this->container['recentEvent'] = isset($data['recentEvent']) ? $data['recentEvent'] : null;
        $this->container['isAutoOff'] = isset($data['isAutoOff']) ? $data['isAutoOff'] : null;
        $this->container['isScheduleBootOff'] = isset($data['isScheduleBootOff']) ? $data['isScheduleBootOff'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['publicEndpoint'] = isset($data['publicEndpoint']) ? $data['publicEndpoint'] : null;
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['bakExpectedStartTime'] = isset($data['bakExpectedStartTime']) ? $data['bakExpectedStartTime'] : null;
        $this->container['bakKeepDay'] = isset($data['bakKeepDay']) ? $data['bakKeepDay'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statusDetail'] = isset($data['statusDetail']) ? $data['statusDetail'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedReasons'] = isset($data['failedReasons']) ? $data['failedReasons'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['isFrozen'] === null) {
            $invalidProperties[] = "'isFrozen' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets customerConfig
    *  customerConfig
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CustomerConfig|null
    */
    public function getCustomerConfig()
    {
        return $this->container['customerConfig'];
    }

    /**
    * Sets customerConfig
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CustomerConfig|null $customerConfig customerConfig
    *
    * @return $this
    */
    public function setCustomerConfig($customerConfig)
    {
        $this->container['customerConfig'] = $customerConfig;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets instances
    *  集群的节点信息，请参见instances参数说明
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstance[]|null $instances 集群的节点信息，请参见instances参数说明
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets azName
    *  az名称
    *
    * @return string|null
    */
    public function getAzName()
    {
        return $this->container['azName'];
    }

    /**
    * Sets azName
    *
    * @param string|null $azName az名称
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets dbuser
    *  数据库用户
    *
    * @return string|null
    */
    public function getDbuser()
    {
        return $this->container['dbuser'];
    }

    /**
    * Sets dbuser
    *
    * @param string|null $dbuser 数据库用户
    *
    * @return $this
    */
    public function setDbuser($dbuser)
    {
        $this->container['dbuser'] = $dbuser;
        return $this;
    }

    /**
    * Gets flavorName
    *  规格名称
    *
    * @return string|null
    */
    public function getFlavorName()
    {
        return $this->container['flavorName'];
    }

    /**
    * Sets flavorName
    *
    * @param string|null $flavorName 规格名称
    *
    * @return $this
    */
    public function setFlavorName($flavorName)
    {
        $this->container['flavorName'] = $flavorName;
        return $this;
    }

    /**
    * Gets recentEvent
    *  事件数
    *
    * @return int|null
    */
    public function getRecentEvent()
    {
        return $this->container['recentEvent'];
    }

    /**
    * Sets recentEvent
    *
    * @param int|null $recentEvent 事件数
    *
    * @return $this
    */
    public function setRecentEvent($recentEvent)
    {
        $this->container['recentEvent'] = $recentEvent;
        return $this;
    }

    /**
    * Gets isAutoOff
    *  自动关机
    *
    * @return bool|null
    */
    public function getIsAutoOff()
    {
        return $this->container['isAutoOff'];
    }

    /**
    * Sets isAutoOff
    *
    * @param bool|null $isAutoOff 自动关机
    *
    * @return $this
    */
    public function setIsAutoOff($isAutoOff)
    {
        $this->container['isAutoOff'] = $isAutoOff;
        return $this;
    }

    /**
    * Gets isScheduleBootOff
    *  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    *
    * @return bool|null
    */
    public function getIsScheduleBootOff()
    {
        return $this->container['isScheduleBootOff'];
    }

    /**
    * Sets isScheduleBootOff
    *
    * @param bool|null $isScheduleBootOff 选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    *
    * @return $this
    */
    public function setIsScheduleBootOff($isScheduleBootOff)
    {
        $this->container['isScheduleBootOff'] = $isScheduleBootOff;
        return $this;
    }

    /**
    * Gets clusterMode
    *  集群模式：sharding(分片集群)
    *
    * @return string|null
    */
    public function getClusterMode()
    {
        return $this->container['clusterMode'];
    }

    /**
    * Sets clusterMode
    *
    * @param string|null $clusterMode 集群模式：sharding(分片集群)
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets task
    *  task
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterTask|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterTask|null $task task
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets publicEndpoint
    *  集群绑定的EIP
    *
    * @return string|null
    */
    public function getPublicEndpoint()
    {
        return $this->container['publicEndpoint'];
    }

    /**
    * Sets publicEndpoint
    *
    * @param string|null $publicEndpoint 集群绑定的EIP
    *
    * @return $this
    */
    public function setPublicEndpoint($publicEndpoint)
    {
        $this->container['publicEndpoint'] = $publicEndpoint;
        return $this;
    }

    /**
    * Gets actionProgress
    *  actionProgress
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ActionProgress|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ActionProgress|null $actionProgress actionProgress
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets created
    *  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets bakExpectedStartTime
    *  开始时间
    *
    * @return string|null
    */
    public function getBakExpectedStartTime()
    {
        return $this->container['bakExpectedStartTime'];
    }

    /**
    * Sets bakExpectedStartTime
    *
    * @param string|null $bakExpectedStartTime 开始时间
    *
    * @return $this
    */
    public function setBakExpectedStartTime($bakExpectedStartTime)
    {
        $this->container['bakExpectedStartTime'] = $bakExpectedStartTime;
        return $this;
    }

    /**
    * Gets bakKeepDay
    *  保留时间
    *
    * @return int|null
    */
    public function getBakKeepDay()
    {
        return $this->container['bakKeepDay'];
    }

    /**
    * Sets bakKeepDay
    *
    * @param int|null $bakKeepDay 保留时间
    *
    * @return $this
    */
    public function setBakKeepDay($bakKeepDay)
    {
        $this->container['bakKeepDay'] = $bakKeepDay;
        return $this;
    }

    /**
    * Gets name
    *  集群名称
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
    * @param string $name 集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets statusDetail
    *  集群状态描述：Normal（正常）
    *
    * @return string|null
    */
    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    /**
    * Sets statusDetail
    *
    * @param string|null $statusDetail 集群状态描述：Normal（正常）
    *
    * @return $this
    */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;
        return $this;
    }

    /**
    * Gets id
    *  集群ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 集群ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isFrozen
    *  集群是否冻结：0：否 1：是
    *
    * @return string
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param string $isFrozen 集群是否冻结：0：否 1：是
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets updated
    *  集群更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 集群更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets status
    *  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 500：重启中 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 500：重启中 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedReasons
    *  failedReasons
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\FailedReasons|null
    */
    public function getFailedReasons()
    {
        return $this->container['failedReasons'];
    }

    /**
    * Sets failedReasons
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\FailedReasons|null $failedReasons failedReasons
    *
    * @return $this
    */
    public function setFailedReasons($failedReasons)
    {
        $this->container['failedReasons'] = $failedReasons;
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

