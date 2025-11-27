<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceServerResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceServerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ip' => 'string',
            'name' => 'string',
            'osType' => 'string',
            'osVersion' => 'string',
            'oemSystem' => 'bool',
            'state' => 'string',
            'migrationCycle' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ip' => null,
        'name' => null,
        'osType' => null,
        'osVersion' => null,
        'oemSystem' => null,
        'state' => null,
        'migrationCycle' => null
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
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ip' => 'ip',
            'name' => 'name',
            'osType' => 'os_type',
            'osVersion' => 'os_version',
            'oemSystem' => 'oem_system',
            'state' => 'state',
            'migrationCycle' => 'migration_cycle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ip' => 'setIp',
            'name' => 'setName',
            'osType' => 'setOsType',
            'osVersion' => 'setOsVersion',
            'oemSystem' => 'setOemSystem',
            'state' => 'setState',
            'migrationCycle' => 'setMigrationCycle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ip' => 'getIp',
            'name' => 'getName',
            'osType' => 'getOsType',
            'osVersion' => 'getOsVersion',
            'oemSystem' => 'getOemSystem',
            'state' => 'getState',
            'migrationCycle' => 'getMigrationCycle'
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
    const OS_TYPE_WINDOWS = 'WINDOWS';
    const OS_TYPE_LINUX = 'LINUX';
    const STATE_UNAVAILABLE = 'unavailable';
    const STATE_WAITING = 'waiting';
    const STATE_INITIALIZE = 'initialize';
    const STATE_REPLICATE = 'replicate';
    const STATE_SYNCING = 'syncing';
    const STATE_STOPPING = 'stopping';
    const STATE_STOPPED = 'stopped';
    const STATE_SKIPPING = 'skipping';
    const STATE_DELETING = 'deleting';
    const STATE_CLEARING = 'clearing';
    const STATE_CLEARED = 'cleared';
    const STATE_CLEARFAILED = 'clearfailed';
    const STATE_PREMIGREADY = 'premigready';
    const STATE_PREMIGED = 'premiged';
    const STATE_PREMIGFAILED = 'premigfailed';
    const STATE_CLONING = 'cloning';
    const STATE_CUTOVERING = 'cutovering';
    const STATE_FINISHED = 'finished';
    const STATE_ERROR = 'error';
    const MIGRATION_CYCLE_CUTOVERING = 'cutovering';
    const MIGRATION_CYCLE_CUTOVERED = 'cutovered';
    const MIGRATION_CYCLE_CHECKING = 'checking';
    const MIGRATION_CYCLE_SETTING = 'setting';
    const MIGRATION_CYCLE_REPLICATING = 'replicating';
    const MIGRATION_CYCLE_SYNCING = 'syncing';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_LINUX,
        ];
    }

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
            self::STATE_CLEARING,
            self::STATE_CLEARED,
            self::STATE_CLEARFAILED,
            self::STATE_PREMIGREADY,
            self::STATE_PREMIGED,
            self::STATE_PREMIGFAILED,
            self::STATE_CLONING,
            self::STATE_CUTOVERING,
            self::STATE_FINISHED,
            self::STATE_ERROR,
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
            self::MIGRATION_CYCLE_CUTOVERING,
            self::MIGRATION_CYCLE_CUTOVERED,
            self::MIGRATION_CYCLE_CHECKING,
            self::MIGRATION_CYCLE_SETTING,
            self::MIGRATION_CYCLE_REPLICATING,
            self::MIGRATION_CYCLE_SYNCING,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['oemSystem'] = isset($data['oemSystem']) ? $data['oemSystem'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['migrationCycle'] = isset($data['migrationCycle']) ? $data['migrationCycle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if ((mb_strlen($this->container['ip']) > 255)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['osType']) > 255)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  源端在SMS数据库中的ID
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
    * @param string|null $id 源端在SMS数据库中的ID
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
    *  源端服务器ip，注册源端时必选，更新非必选
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 源端服务器ip，注册源端时必选，更新非必选
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets name
    *  用来区分不同源端服务器的名称
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
    * @param string $name 用来区分不同源端服务器的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets osType
    *  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType 源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osVersion
    *  操作系统版本，注册必选，更新非必选
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion 操作系统版本，注册必选，更新非必选
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets oemSystem
    *  是否是OEM操作系统(Windows)
    *
    * @return bool|null
    */
    public function getOemSystem()
    {
        return $this->container['oemSystem'];
    }

    /**
    * Sets oemSystem
    *
    * @param bool|null $oemSystem 是否是OEM操作系统(Windows)
    *
    * @return $this
    */
    public function setOemSystem($oemSystem)
    {
        $this->container['oemSystem'] = $oemSystem;
        return $this;
    }

    /**
    * Gets state
    *  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
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
    * @param string|null $state 源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets migrationCycle
    *  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
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
    * @param string|null $migrationCycle 迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @return $this
    */
    public function setMigrationCycle($migrationCycle)
    {
        $this->container['migrationCycle'] = $migrationCycle;
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

