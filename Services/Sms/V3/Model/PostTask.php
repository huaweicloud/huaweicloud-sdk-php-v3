<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  任务名称
    * type  任务类型 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * startTargetServer  迁移后是否启动目的端虚拟机
    * osType  操作系统类型
    * sourceServer  sourceServer
    * targetServer  targetServer
    * migrationIp  迁移IP，如果是自动创建虚拟机，不需要此参数
    * regionName  region的名称
    * regionId  region ID
    * projectName  项目名称
    * projectId  项目ID
    * vmTemplateId  自动创建虚拟机使用模板
    * usePublicIp  是否使用公网ip
    * syncing  复制或者同步后是否会继续持续同步，不添加则默认是false
    * existServer  是否存在服务，如果存在，则创建任务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'startTargetServer' => 'bool',
            'osType' => 'string',
            'sourceServer' => '\HuaweiCloud\SDK\Sms\V3\Model\SourceServerByTask',
            'targetServer' => '\HuaweiCloud\SDK\Sms\V3\Model\TargetServerByTask',
            'migrationIp' => 'string',
            'regionName' => 'string',
            'regionId' => 'string',
            'projectName' => 'string',
            'projectId' => 'string',
            'vmTemplateId' => 'string',
            'usePublicIp' => 'bool',
            'syncing' => 'bool',
            'existServer' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  任务名称
    * type  任务类型 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * startTargetServer  迁移后是否启动目的端虚拟机
    * osType  操作系统类型
    * sourceServer  sourceServer
    * targetServer  targetServer
    * migrationIp  迁移IP，如果是自动创建虚拟机，不需要此参数
    * regionName  region的名称
    * regionId  region ID
    * projectName  项目名称
    * projectId  项目ID
    * vmTemplateId  自动创建虚拟机使用模板
    * usePublicIp  是否使用公网ip
    * syncing  复制或者同步后是否会继续持续同步，不添加则默认是false
    * existServer  是否存在服务，如果存在，则创建任务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'startTargetServer' => null,
        'osType' => null,
        'sourceServer' => null,
        'targetServer' => null,
        'migrationIp' => null,
        'regionName' => null,
        'regionId' => null,
        'projectName' => null,
        'projectId' => null,
        'vmTemplateId' => null,
        'usePublicIp' => null,
        'syncing' => null,
        'existServer' => null
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
    * name  任务名称
    * type  任务类型 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * startTargetServer  迁移后是否启动目的端虚拟机
    * osType  操作系统类型
    * sourceServer  sourceServer
    * targetServer  targetServer
    * migrationIp  迁移IP，如果是自动创建虚拟机，不需要此参数
    * regionName  region的名称
    * regionId  region ID
    * projectName  项目名称
    * projectId  项目ID
    * vmTemplateId  自动创建虚拟机使用模板
    * usePublicIp  是否使用公网ip
    * syncing  复制或者同步后是否会继续持续同步，不添加则默认是false
    * existServer  是否存在服务，如果存在，则创建任务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'startTargetServer' => 'start_target_server',
            'osType' => 'os_type',
            'sourceServer' => 'source_server',
            'targetServer' => 'target_server',
            'migrationIp' => 'migration_ip',
            'regionName' => 'region_name',
            'regionId' => 'region_id',
            'projectName' => 'project_name',
            'projectId' => 'project_id',
            'vmTemplateId' => 'vm_template_id',
            'usePublicIp' => 'use_public_ip',
            'syncing' => 'syncing',
            'existServer' => 'exist_server'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  任务名称
    * type  任务类型 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * startTargetServer  迁移后是否启动目的端虚拟机
    * osType  操作系统类型
    * sourceServer  sourceServer
    * targetServer  targetServer
    * migrationIp  迁移IP，如果是自动创建虚拟机，不需要此参数
    * regionName  region的名称
    * regionId  region ID
    * projectName  项目名称
    * projectId  项目ID
    * vmTemplateId  自动创建虚拟机使用模板
    * usePublicIp  是否使用公网ip
    * syncing  复制或者同步后是否会继续持续同步，不添加则默认是false
    * existServer  是否存在服务，如果存在，则创建任务
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'startTargetServer' => 'setStartTargetServer',
            'osType' => 'setOsType',
            'sourceServer' => 'setSourceServer',
            'targetServer' => 'setTargetServer',
            'migrationIp' => 'setMigrationIp',
            'regionName' => 'setRegionName',
            'regionId' => 'setRegionId',
            'projectName' => 'setProjectName',
            'projectId' => 'setProjectId',
            'vmTemplateId' => 'setVmTemplateId',
            'usePublicIp' => 'setUsePublicIp',
            'syncing' => 'setSyncing',
            'existServer' => 'setExistServer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  任务名称
    * type  任务类型 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * startTargetServer  迁移后是否启动目的端虚拟机
    * osType  操作系统类型
    * sourceServer  sourceServer
    * targetServer  targetServer
    * migrationIp  迁移IP，如果是自动创建虚拟机，不需要此参数
    * regionName  region的名称
    * regionId  region ID
    * projectName  项目名称
    * projectId  项目ID
    * vmTemplateId  自动创建虚拟机使用模板
    * usePublicIp  是否使用公网ip
    * syncing  复制或者同步后是否会继续持续同步，不添加则默认是false
    * existServer  是否存在服务，如果存在，则创建任务
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'startTargetServer' => 'getStartTargetServer',
            'osType' => 'getOsType',
            'sourceServer' => 'getSourceServer',
            'targetServer' => 'getTargetServer',
            'migrationIp' => 'getMigrationIp',
            'regionName' => 'getRegionName',
            'regionId' => 'getRegionId',
            'projectName' => 'getProjectName',
            'projectId' => 'getProjectId',
            'vmTemplateId' => 'getVmTemplateId',
            'usePublicIp' => 'getUsePublicIp',
            'syncing' => 'getSyncing',
            'existServer' => 'getExistServer'
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
    const TYPE_MIGRATE_FILE = 'MIGRATE_FILE';
    const TYPE_MIGRATE_BLOCK = 'MIGRATE_BLOCK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MIGRATE_FILE,
            self::TYPE_MIGRATE_BLOCK,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTargetServer'] = isset($data['startTargetServer']) ? $data['startTargetServer'] : true;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['sourceServer'] = isset($data['sourceServer']) ? $data['sourceServer'] : null;
        $this->container['targetServer'] = isset($data['targetServer']) ? $data['targetServer'] : null;
        $this->container['migrationIp'] = isset($data['migrationIp']) ? $data['migrationIp'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vmTemplateId'] = isset($data['vmTemplateId']) ? $data['vmTemplateId'] : null;
        $this->container['usePublicIp'] = isset($data['usePublicIp']) ? $data['usePublicIp'] : true;
        $this->container['syncing'] = isset($data['syncing']) ? $data['syncing'] : false;
        $this->container['existServer'] = isset($data['existServer']) ? $data['existServer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            if ((mb_strlen($this->container['osType']) > 255)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['sourceServer'] === null) {
            $invalidProperties[] = "'sourceServer' can't be null";
        }
        if ($this->container['targetServer'] === null) {
            $invalidProperties[] = "'targetServer' can't be null";
        }
            if (!is_null($this->container['migrationIp']) && (mb_strlen($this->container['migrationIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'migrationIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migrationIp']) && (mb_strlen($this->container['migrationIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'migrationIp', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['regionName'] === null) {
            $invalidProperties[] = "'regionName' can't be null";
        }
            if ((mb_strlen($this->container['regionName']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['regionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
            if ((mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['projectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) > 255)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  任务名称
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
    * @param string $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  任务类型 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
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
    * @param string $type 任务类型 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTargetServer
    *  迁移后是否启动目的端虚拟机
    *
    * @return bool|null
    */
    public function getStartTargetServer()
    {
        return $this->container['startTargetServer'];
    }

    /**
    * Sets startTargetServer
    *
    * @param bool|null $startTargetServer 迁移后是否启动目的端虚拟机
    *
    * @return $this
    */
    public function setStartTargetServer($startTargetServer)
    {
        $this->container['startTargetServer'] = $startTargetServer;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型
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
    * @param string $osType 操作系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets sourceServer
    *  sourceServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\SourceServerByTask
    */
    public function getSourceServer()
    {
        return $this->container['sourceServer'];
    }

    /**
    * Sets sourceServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\SourceServerByTask $sourceServer sourceServer
    *
    * @return $this
    */
    public function setSourceServer($sourceServer)
    {
        $this->container['sourceServer'] = $sourceServer;
        return $this;
    }

    /**
    * Gets targetServer
    *  targetServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TargetServerByTask
    */
    public function getTargetServer()
    {
        return $this->container['targetServer'];
    }

    /**
    * Sets targetServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TargetServerByTask $targetServer targetServer
    *
    * @return $this
    */
    public function setTargetServer($targetServer)
    {
        $this->container['targetServer'] = $targetServer;
        return $this;
    }

    /**
    * Gets migrationIp
    *  迁移IP，如果是自动创建虚拟机，不需要此参数
    *
    * @return string|null
    */
    public function getMigrationIp()
    {
        return $this->container['migrationIp'];
    }

    /**
    * Sets migrationIp
    *
    * @param string|null $migrationIp 迁移IP，如果是自动创建虚拟机，不需要此参数
    *
    * @return $this
    */
    public function setMigrationIp($migrationIp)
    {
        $this->container['migrationIp'] = $migrationIp;
        return $this;
    }

    /**
    * Gets regionName
    *  region的名称
    *
    * @return string
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string $regionName region的名称
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets regionId
    *  region ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId region ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vmTemplateId
    *  自动创建虚拟机使用模板
    *
    * @return string|null
    */
    public function getVmTemplateId()
    {
        return $this->container['vmTemplateId'];
    }

    /**
    * Sets vmTemplateId
    *
    * @param string|null $vmTemplateId 自动创建虚拟机使用模板
    *
    * @return $this
    */
    public function setVmTemplateId($vmTemplateId)
    {
        $this->container['vmTemplateId'] = $vmTemplateId;
        return $this;
    }

    /**
    * Gets usePublicIp
    *  是否使用公网ip
    *
    * @return bool|null
    */
    public function getUsePublicIp()
    {
        return $this->container['usePublicIp'];
    }

    /**
    * Sets usePublicIp
    *
    * @param bool|null $usePublicIp 是否使用公网ip
    *
    * @return $this
    */
    public function setUsePublicIp($usePublicIp)
    {
        $this->container['usePublicIp'] = $usePublicIp;
        return $this;
    }

    /**
    * Gets syncing
    *  复制或者同步后是否会继续持续同步，不添加则默认是false
    *
    * @return bool|null
    */
    public function getSyncing()
    {
        return $this->container['syncing'];
    }

    /**
    * Sets syncing
    *
    * @param bool|null $syncing 复制或者同步后是否会继续持续同步，不添加则默认是false
    *
    * @return $this
    */
    public function setSyncing($syncing)
    {
        $this->container['syncing'] = $syncing;
        return $this;
    }

    /**
    * Gets existServer
    *  是否存在服务，如果存在，则创建任务
    *
    * @return bool|null
    */
    public function getExistServer()
    {
        return $this->container['existServer'];
    }

    /**
    * Sets existServer
    *
    * @param bool|null $existServer 是否存在服务，如果存在，则创建任务
    *
    * @return $this
    */
    public function setExistServer($existServer)
    {
        $this->container['existServer'] = $existServer;
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

