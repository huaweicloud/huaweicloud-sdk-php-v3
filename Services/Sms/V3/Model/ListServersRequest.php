<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListServersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListServersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * name  源端服务器名称
    * id  源端服务器ID
    * ip  源端服务器IP地址
    * migproject  迁移项目ID，填写该参数将查询迁移项目下的所有虚拟机
    * limit  每一页记录的源端服务器数量，0表示用默认值 200
    * offset  偏移量，默认值0
    * migrationCycle  checking:检查中 setting:设置中 replicating:复制中 syncing:同步中 cutovering:启动目的端中 cutovered:启动目的端完成
    * connected  查询失去连接的源端
    * enterpriseProjectId  需要查询的企业项目ID
    * isConsistencyResultExist  是否存在一致性校验结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'name' => 'string',
            'id' => 'string',
            'ip' => 'string',
            'migproject' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'migrationCycle' => 'string',
            'connected' => 'bool',
            'enterpriseProjectId' => 'string',
            'isConsistencyResultExist' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * name  源端服务器名称
    * id  源端服务器ID
    * ip  源端服务器IP地址
    * migproject  迁移项目ID，填写该参数将查询迁移项目下的所有虚拟机
    * limit  每一页记录的源端服务器数量，0表示用默认值 200
    * offset  偏移量，默认值0
    * migrationCycle  checking:检查中 setting:设置中 replicating:复制中 syncing:同步中 cutovering:启动目的端中 cutovered:启动目的端完成
    * connected  查询失去连接的源端
    * enterpriseProjectId  需要查询的企业项目ID
    * isConsistencyResultExist  是否存在一致性校验结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'name' => null,
        'id' => null,
        'ip' => null,
        'migproject' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'migrationCycle' => null,
        'connected' => null,
        'enterpriseProjectId' => null,
        'isConsistencyResultExist' => null
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
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * name  源端服务器名称
    * id  源端服务器ID
    * ip  源端服务器IP地址
    * migproject  迁移项目ID，填写该参数将查询迁移项目下的所有虚拟机
    * limit  每一页记录的源端服务器数量，0表示用默认值 200
    * offset  偏移量，默认值0
    * migrationCycle  checking:检查中 setting:设置中 replicating:复制中 syncing:同步中 cutovering:启动目的端中 cutovered:启动目的端完成
    * connected  查询失去连接的源端
    * enterpriseProjectId  需要查询的企业项目ID
    * isConsistencyResultExist  是否存在一致性校验结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'name' => 'name',
            'id' => 'id',
            'ip' => 'ip',
            'migproject' => 'migproject',
            'limit' => 'limit',
            'offset' => 'offset',
            'migrationCycle' => 'migration_cycle',
            'connected' => 'connected',
            'enterpriseProjectId' => 'enterprise_project_id',
            'isConsistencyResultExist' => 'is_consistency_result_exist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * name  源端服务器名称
    * id  源端服务器ID
    * ip  源端服务器IP地址
    * migproject  迁移项目ID，填写该参数将查询迁移项目下的所有虚拟机
    * limit  每一页记录的源端服务器数量，0表示用默认值 200
    * offset  偏移量，默认值0
    * migrationCycle  checking:检查中 setting:设置中 replicating:复制中 syncing:同步中 cutovering:启动目的端中 cutovered:启动目的端完成
    * connected  查询失去连接的源端
    * enterpriseProjectId  需要查询的企业项目ID
    * isConsistencyResultExist  是否存在一致性校验结果
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'name' => 'setName',
            'id' => 'setId',
            'ip' => 'setIp',
            'migproject' => 'setMigproject',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'migrationCycle' => 'setMigrationCycle',
            'connected' => 'setConnected',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'isConsistencyResultExist' => 'setIsConsistencyResultExist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * name  源端服务器名称
    * id  源端服务器ID
    * ip  源端服务器IP地址
    * migproject  迁移项目ID，填写该参数将查询迁移项目下的所有虚拟机
    * limit  每一页记录的源端服务器数量，0表示用默认值 200
    * offset  偏移量，默认值0
    * migrationCycle  checking:检查中 setting:设置中 replicating:复制中 syncing:同步中 cutovering:启动目的端中 cutovered:启动目的端完成
    * connected  查询失去连接的源端
    * enterpriseProjectId  需要查询的企业项目ID
    * isConsistencyResultExist  是否存在一致性校验结果
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'name' => 'getName',
            'id' => 'getId',
            'ip' => 'getIp',
            'migproject' => 'getMigproject',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'migrationCycle' => 'getMigrationCycle',
            'connected' => 'getConnected',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'isConsistencyResultExist' => 'getIsConsistencyResultExist'
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
    const STATE_UNAVAILABLE = 'unavailable';
    const STATE_WAITING = 'waiting';
    const STATE_INITIALIZE = 'initialize';
    const STATE_REPLICATE = 'replicate';
    const STATE_SYNCING = 'syncing';
    const STATE_STOPPING = 'stopping';
    const STATE_STOPPED = 'stopped';
    const STATE_SKIPPING = 'skipping';
    const STATE_DELETING = 'deleting';
    const STATE_ERROR = 'error';
    const STATE_CLONING = 'cloning';
    const STATE_CUTOVERING = 'cutovering';
    const STATE_FINISHED = 'finished';
    const STATE_CLEARING = 'clearing';
    const STATE_CLEARED = 'cleared';
    const STATE_CLEARFAILED = 'clearfailed';
    const STATE_PREMIGREADY = 'premigready';
    const STATE_PREMIGING = 'premiging';
    const STATE_PREMIGED = 'premiged';
    const STATE_PREMIGFAILED = 'premigfailed';
    const MIGRATION_CYCLE_CHECKING = 'checking';
    const MIGRATION_CYCLE_SETTING = 'setting';
    const MIGRATION_CYCLE_REPLICATING = 'replicating';
    const MIGRATION_CYCLE_SYNCING = 'syncing';
    const MIGRATION_CYCLE_CUTOVERING = 'cutovering';
    const MIGRATION_CYCLE_CUTOVERED = 'cutovered';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_UNAVAILABLE,
            self::STATE_WAITING,
            self::STATE_INITIALIZE,
            self::STATE_REPLICATE,
            self::STATE_SYNCING,
            self::STATE_STOPPING,
            self::STATE_STOPPED,
            self::STATE_SKIPPING,
            self::STATE_DELETING,
            self::STATE_ERROR,
            self::STATE_CLONING,
            self::STATE_CUTOVERING,
            self::STATE_FINISHED,
            self::STATE_CLEARING,
            self::STATE_CLEARED,
            self::STATE_CLEARFAILED,
            self::STATE_PREMIGREADY,
            self::STATE_PREMIGING,
            self::STATE_PREMIGED,
            self::STATE_PREMIGFAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationCycleAllowableValues()
    {
        return [
            self::MIGRATION_CYCLE_CHECKING,
            self::MIGRATION_CYCLE_SETTING,
            self::MIGRATION_CYCLE_REPLICATING,
            self::MIGRATION_CYCLE_SYNCING,
            self::MIGRATION_CYCLE_CUTOVERING,
            self::MIGRATION_CYCLE_CUTOVERED,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['migproject'] = isset($data['migproject']) ? $data['migproject'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['migrationCycle'] = isset($data['migrationCycle']) ? $data['migrationCycle'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['isConsistencyResultExist'] = isset($data['isConsistencyResultExist']) ? $data['isConsistencyResultExist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 255)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['migproject']) && (mb_strlen($this->container['migproject']) > 255)) {
                $invalidProperties[] = "invalid value for 'migproject', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migproject']) && (mb_strlen($this->container['migproject']) < 0)) {
                $invalidProperties[] = "invalid value for 'migproject', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 65535)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getMigrationCycleAllowableValues();
                if (!is_null($this->container['migrationCycle']) && !in_array($this->container['migrationCycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationCycle', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['migrationCycle']) && (mb_strlen($this->container['migrationCycle']) > 255)) {
                $invalidProperties[] = "invalid value for 'migrationCycle', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migrationCycle']) && (mb_strlen($this->container['migrationCycle']) < 0)) {
                $invalidProperties[] = "invalid value for 'migrationCycle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets state
    *  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets name
    *  源端服务器名称
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
    * @param string|null $name 源端服务器名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  源端服务器ID
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
    * @param string|null $id 源端服务器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ip
    *  源端服务器IP地址
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 源端服务器IP地址
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets migproject
    *  迁移项目ID，填写该参数将查询迁移项目下的所有虚拟机
    *
    * @return string|null
    */
    public function getMigproject()
    {
        return $this->container['migproject'];
    }

    /**
    * Sets migproject
    *
    * @param string|null $migproject 迁移项目ID，填写该参数将查询迁移项目下的所有虚拟机
    *
    * @return $this
    */
    public function setMigproject($migproject)
    {
        $this->container['migproject'] = $migproject;
        return $this;
    }

    /**
    * Gets limit
    *  每一页记录的源端服务器数量，0表示用默认值 200
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每一页记录的源端服务器数量，0表示用默认值 200
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，默认值0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，默认值0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets migrationCycle
    *  checking:检查中 setting:设置中 replicating:复制中 syncing:同步中 cutovering:启动目的端中 cutovered:启动目的端完成
    *
    * @return string|null
    */
    public function getMigrationCycle()
    {
        return $this->container['migrationCycle'];
    }

    /**
    * Sets migrationCycle
    *
    * @param string|null $migrationCycle checking:检查中 setting:设置中 replicating:复制中 syncing:同步中 cutovering:启动目的端中 cutovered:启动目的端完成
    *
    * @return $this
    */
    public function setMigrationCycle($migrationCycle)
    {
        $this->container['migrationCycle'] = $migrationCycle;
        return $this;
    }

    /**
    * Gets connected
    *  查询失去连接的源端
    *
    * @return bool|null
    */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
    * Sets connected
    *
    * @param bool|null $connected 查询失去连接的源端
    *
    * @return $this
    */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  需要查询的企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 需要查询的企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets isConsistencyResultExist
    *  是否存在一致性校验结果
    *
    * @return bool|null
    */
    public function getIsConsistencyResultExist()
    {
        return $this->container['isConsistencyResultExist'];
    }

    /**
    * Sets isConsistencyResultExist
    *
    * @param bool|null $isConsistencyResultExist 是否存在一致性校验结果
    *
    * @return $this
    */
    public function setIsConsistencyResultExist($isConsistencyResultExist)
    {
        $this->container['isConsistencyResultExist'] = $isConsistencyResultExist;
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

