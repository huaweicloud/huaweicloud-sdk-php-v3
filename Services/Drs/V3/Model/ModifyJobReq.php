<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id
    * description  任务描述，修改任务描述时必填。
    * name  任务名称，修改任务名称时必填
    * alarmNotify  alarmNotify
    * taskType  任务模式，FULL_TRANS：全量；FULL_INCR_TRANS：全量+增量；INCR_TRANS：增量。
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  node规格类型，测试连接之后修改调用时必填。
    * engineType  引擎类型，测试连接之后修改调用时必填。mysql：迁移，同步使用。mongodb：迁移使用。cloudDataGuard-mysql：灾备使用
    * netType  网络类型，测试连接之后修改调用时必填。
    * storeDbInfo  保存数据库信息，测试连接之后修改调用时必填为true。
    * isRecreate  是否为重建任务。
    * jobDirection  迁移方向,up 入云 灾备场景时对应本云为备,down 出云 灾备场景时对应本云为主,non-dbs 自建
    * isTargetReadonly  目标实例是否限制为只读。
    * replaceDefiner  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。 - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变。
    * tags  标签信息
    * dbUseType  迁移类型，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * productId  产品ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'description' => 'string',
            'name' => 'string',
            'alarmNotify' => '\HuaweiCloud\SDK\Drs\V3\Model\AlarmNotifyInfo',
            'taskType' => 'string',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'nodeType' => 'string',
            'engineType' => 'string',
            'netType' => 'string',
            'storeDbInfo' => 'bool',
            'isRecreate' => 'bool',
            'jobDirection' => 'string',
            'isTargetReadonly' => 'bool',
            'replaceDefiner' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]',
            'dbUseType' => 'string',
            'productId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id
    * description  任务描述，修改任务描述时必填。
    * name  任务名称，修改任务名称时必填
    * alarmNotify  alarmNotify
    * taskType  任务模式，FULL_TRANS：全量；FULL_INCR_TRANS：全量+增量；INCR_TRANS：增量。
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  node规格类型，测试连接之后修改调用时必填。
    * engineType  引擎类型，测试连接之后修改调用时必填。mysql：迁移，同步使用。mongodb：迁移使用。cloudDataGuard-mysql：灾备使用
    * netType  网络类型，测试连接之后修改调用时必填。
    * storeDbInfo  保存数据库信息，测试连接之后修改调用时必填为true。
    * isRecreate  是否为重建任务。
    * jobDirection  迁移方向,up 入云 灾备场景时对应本云为备,down 出云 灾备场景时对应本云为主,non-dbs 自建
    * isTargetReadonly  目标实例是否限制为只读。
    * replaceDefiner  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。 - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变。
    * tags  标签信息
    * dbUseType  迁移类型，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * productId  产品ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'description' => null,
        'name' => null,
        'alarmNotify' => null,
        'taskType' => null,
        'sourceEndpoint' => null,
        'targetEndpoint' => null,
        'nodeType' => null,
        'engineType' => null,
        'netType' => null,
        'storeDbInfo' => null,
        'isRecreate' => null,
        'jobDirection' => null,
        'isTargetReadonly' => null,
        'replaceDefiner' => null,
        'tags' => null,
        'dbUseType' => null,
        'productId' => null
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
    * jobId  任务id
    * description  任务描述，修改任务描述时必填。
    * name  任务名称，修改任务名称时必填
    * alarmNotify  alarmNotify
    * taskType  任务模式，FULL_TRANS：全量；FULL_INCR_TRANS：全量+增量；INCR_TRANS：增量。
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  node规格类型，测试连接之后修改调用时必填。
    * engineType  引擎类型，测试连接之后修改调用时必填。mysql：迁移，同步使用。mongodb：迁移使用。cloudDataGuard-mysql：灾备使用
    * netType  网络类型，测试连接之后修改调用时必填。
    * storeDbInfo  保存数据库信息，测试连接之后修改调用时必填为true。
    * isRecreate  是否为重建任务。
    * jobDirection  迁移方向,up 入云 灾备场景时对应本云为备,down 出云 灾备场景时对应本云为主,non-dbs 自建
    * isTargetReadonly  目标实例是否限制为只读。
    * replaceDefiner  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。 - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变。
    * tags  标签信息
    * dbUseType  迁移类型，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * productId  产品ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'description' => 'description',
            'name' => 'name',
            'alarmNotify' => 'alarm_notify',
            'taskType' => 'task_type',
            'sourceEndpoint' => 'source_endpoint',
            'targetEndpoint' => 'target_endpoint',
            'nodeType' => 'node_type',
            'engineType' => 'engine_type',
            'netType' => 'net_type',
            'storeDbInfo' => 'store_db_info',
            'isRecreate' => 'is_recreate',
            'jobDirection' => 'job_direction',
            'isTargetReadonly' => 'is_target_readonly',
            'replaceDefiner' => 'replace_definer',
            'tags' => 'tags',
            'dbUseType' => 'db_use_type',
            'productId' => 'product_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id
    * description  任务描述，修改任务描述时必填。
    * name  任务名称，修改任务名称时必填
    * alarmNotify  alarmNotify
    * taskType  任务模式，FULL_TRANS：全量；FULL_INCR_TRANS：全量+增量；INCR_TRANS：增量。
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  node规格类型，测试连接之后修改调用时必填。
    * engineType  引擎类型，测试连接之后修改调用时必填。mysql：迁移，同步使用。mongodb：迁移使用。cloudDataGuard-mysql：灾备使用
    * netType  网络类型，测试连接之后修改调用时必填。
    * storeDbInfo  保存数据库信息，测试连接之后修改调用时必填为true。
    * isRecreate  是否为重建任务。
    * jobDirection  迁移方向,up 入云 灾备场景时对应本云为备,down 出云 灾备场景时对应本云为主,non-dbs 自建
    * isTargetReadonly  目标实例是否限制为只读。
    * replaceDefiner  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。 - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变。
    * tags  标签信息
    * dbUseType  迁移类型，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * productId  产品ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'description' => 'setDescription',
            'name' => 'setName',
            'alarmNotify' => 'setAlarmNotify',
            'taskType' => 'setTaskType',
            'sourceEndpoint' => 'setSourceEndpoint',
            'targetEndpoint' => 'setTargetEndpoint',
            'nodeType' => 'setNodeType',
            'engineType' => 'setEngineType',
            'netType' => 'setNetType',
            'storeDbInfo' => 'setStoreDbInfo',
            'isRecreate' => 'setIsRecreate',
            'jobDirection' => 'setJobDirection',
            'isTargetReadonly' => 'setIsTargetReadonly',
            'replaceDefiner' => 'setReplaceDefiner',
            'tags' => 'setTags',
            'dbUseType' => 'setDbUseType',
            'productId' => 'setProductId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id
    * description  任务描述，修改任务描述时必填。
    * name  任务名称，修改任务名称时必填
    * alarmNotify  alarmNotify
    * taskType  任务模式，FULL_TRANS：全量；FULL_INCR_TRANS：全量+增量；INCR_TRANS：增量。
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  node规格类型，测试连接之后修改调用时必填。
    * engineType  引擎类型，测试连接之后修改调用时必填。mysql：迁移，同步使用。mongodb：迁移使用。cloudDataGuard-mysql：灾备使用
    * netType  网络类型，测试连接之后修改调用时必填。
    * storeDbInfo  保存数据库信息，测试连接之后修改调用时必填为true。
    * isRecreate  是否为重建任务。
    * jobDirection  迁移方向,up 入云 灾备场景时对应本云为备,down 出云 灾备场景时对应本云为主,non-dbs 自建
    * isTargetReadonly  目标实例是否限制为只读。
    * replaceDefiner  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。 - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变。
    * tags  标签信息
    * dbUseType  迁移类型，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * productId  产品ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'description' => 'getDescription',
            'name' => 'getName',
            'alarmNotify' => 'getAlarmNotify',
            'taskType' => 'getTaskType',
            'sourceEndpoint' => 'getSourceEndpoint',
            'targetEndpoint' => 'getTargetEndpoint',
            'nodeType' => 'getNodeType',
            'engineType' => 'getEngineType',
            'netType' => 'getNetType',
            'storeDbInfo' => 'getStoreDbInfo',
            'isRecreate' => 'getIsRecreate',
            'jobDirection' => 'getJobDirection',
            'isTargetReadonly' => 'getIsTargetReadonly',
            'replaceDefiner' => 'getReplaceDefiner',
            'tags' => 'getTags',
            'dbUseType' => 'getDbUseType',
            'productId' => 'getProductId'
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
    const TASK_TYPE_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPE_INCR_TRANS = 'INCR_TRANS';
    const TASK_TYPE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const NODE_TYPE_HIGH = 'high';
    const ENGINE_TYPE_MYSQL = 'mysql';
    const ENGINE_TYPE_MONGODB = 'mongodb';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL = 'cloudDataGuard-mysql';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    const NET_TYPE_EIP = 'eip';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    const DB_USE_TYPE_MIGRATION = 'migration';
    const DB_USE_TYPE_SYNC = 'sync';
    const DB_USE_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_FULL_TRANS,
            self::TASK_TYPE_INCR_TRANS,
            self::TASK_TYPE_FULL_INCR_TRANS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_HIGH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_MYSQL,
            self::ENGINE_TYPE_MONGODB,
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_VPC,
            self::NET_TYPE_VPN,
            self::NET_TYPE_EIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbUseTypeAllowableValues()
    {
        return [
            self::DB_USE_TYPE_MIGRATION,
            self::DB_USE_TYPE_SYNC,
            self::DB_USE_TYPE_CLOUD_DATA_GUARD,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alarmNotify'] = isset($data['alarmNotify']) ? $data['alarmNotify'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['storeDbInfo'] = isset($data['storeDbInfo']) ? $data['storeDbInfo'] : null;
        $this->container['isRecreate'] = isset($data['isRecreate']) ? $data['isRecreate'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['isTargetReadonly'] = isset($data['isTargetReadonly']) ? $data['isTargetReadonly'] : null;
        $this->container['replaceDefiner'] = isset($data['replaceDefiner']) ? $data['replaceDefiner'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['dbUseType'] = isset($data['dbUseType']) ? $data['dbUseType'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^!<>=&\"\\\\']{0,256}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^!<>=&\"\\\\']{0,256}$/.";
            }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDbUseTypeAllowableValues();
                if (!is_null($this->container['dbUseType']) && !in_array($this->container['dbUseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbUseType', must be one of '%s'",
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
    * Gets jobId
    *  任务id
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets description
    *  任务描述，修改任务描述时必填。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 任务描述，修改任务描述时必填。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  任务名称，修改任务名称时必填
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
    * @param string|null $name 任务名称，修改任务名称时必填
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets alarmNotify
    *  alarmNotify
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\AlarmNotifyInfo|null
    */
    public function getAlarmNotify()
    {
        return $this->container['alarmNotify'];
    }

    /**
    * Sets alarmNotify
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\AlarmNotifyInfo|null $alarmNotify alarmNotify
    *
    * @return $this
    */
    public function setAlarmNotify($alarmNotify)
    {
        $this->container['alarmNotify'] = $alarmNotify;
        return $this;
    }

    /**
    * Gets taskType
    *  任务模式，FULL_TRANS：全量；FULL_INCR_TRANS：全量+增量；INCR_TRANS：增量。
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务模式，FULL_TRANS：全量；FULL_INCR_TRANS：全量+增量；INCR_TRANS：增量。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  sourceEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null $sourceEndpoint sourceEndpoint
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets targetEndpoint
    *  targetEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null $targetEndpoint targetEndpoint
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets nodeType
    *  node规格类型，测试连接之后修改调用时必填。
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType node规格类型，测试连接之后修改调用时必填。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型，测试连接之后修改调用时必填。mysql：迁移，同步使用。mongodb：迁移使用。cloudDataGuard-mysql：灾备使用
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型，测试连接之后修改调用时必填。mysql：迁移，同步使用。mongodb：迁移使用。cloudDataGuard-mysql：灾备使用
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型，测试连接之后修改调用时必填。
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType 网络类型，测试连接之后修改调用时必填。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets storeDbInfo
    *  保存数据库信息，测试连接之后修改调用时必填为true。
    *
    * @return bool|null
    */
    public function getStoreDbInfo()
    {
        return $this->container['storeDbInfo'];
    }

    /**
    * Sets storeDbInfo
    *
    * @param bool|null $storeDbInfo 保存数据库信息，测试连接之后修改调用时必填为true。
    *
    * @return $this
    */
    public function setStoreDbInfo($storeDbInfo)
    {
        $this->container['storeDbInfo'] = $storeDbInfo;
        return $this;
    }

    /**
    * Gets isRecreate
    *  是否为重建任务。
    *
    * @return bool|null
    */
    public function getIsRecreate()
    {
        return $this->container['isRecreate'];
    }

    /**
    * Sets isRecreate
    *
    * @param bool|null $isRecreate 是否为重建任务。
    *
    * @return $this
    */
    public function setIsRecreate($isRecreate)
    {
        $this->container['isRecreate'] = $isRecreate;
        return $this;
    }

    /**
    * Gets jobDirection
    *  迁移方向,up 入云 灾备场景时对应本云为备,down 出云 灾备场景时对应本云为主,non-dbs 自建
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection 迁移方向,up 入云 灾备场景时对应本云为备,down 出云 灾备场景时对应本云为主,non-dbs 自建
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets isTargetReadonly
    *  目标实例是否限制为只读。
    *
    * @return bool|null
    */
    public function getIsTargetReadonly()
    {
        return $this->container['isTargetReadonly'];
    }

    /**
    * Sets isTargetReadonly
    *
    * @param bool|null $isTargetReadonly 目标实例是否限制为只读。
    *
    * @return $this
    */
    public function setIsTargetReadonly($isTargetReadonly)
    {
        $this->container['isTargetReadonly'] = $isTargetReadonly;
        return $this;
    }

    /**
    * Gets replaceDefiner
    *  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。 - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变。
    *
    * @return bool|null
    */
    public function getReplaceDefiner()
    {
        return $this->container['replaceDefiner'];
    }

    /**
    * Sets replaceDefiner
    *
    * @param bool|null $replaceDefiner 所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。 - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变。
    *
    * @return $this
    */
    public function setReplaceDefiner($replaceDefiner)
    {
        $this->container['replaceDefiner'] = $replaceDefiner;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets dbUseType
    *  迁移类型，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    *
    * @return string|null
    */
    public function getDbUseType()
    {
        return $this->container['dbUseType'];
    }

    /**
    * Sets dbUseType
    *
    * @param string|null $dbUseType 迁移类型，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    *
    * @return $this
    */
    public function setDbUseType($dbUseType)
    {
        $this->container['dbUseType'] = $dbUseType;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
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

