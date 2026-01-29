<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  任务名称（用户自定义） 仅由中文字符、下划线、短横线、数字、英文大小写字母组成
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * regionId  目的端服务器的区域ID
    * regionName  目的端服务器的区域名称
    * existServer  目的端服务器是否存在。true代表已有目的端服务器，false代表需要新建目的端服务器
    * migrationIp  目的端服务器的IP地址。 公网迁移时请填写弹性IP地址 专线迁移时请填写私有IP地址 如果use_ipv6是true，则需要满足ipv6的格式，如果use_ipv6是false，则需要满足ipv4的格式
    * useIpv6  目的端服务器的IP地址是否使用ipv6
    * usePublicIp  是否为公网
    * speedLimit  限制迁移速率，单位：Mbps
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * enterpriseProject  企业项目ID
    * imageDiskId  目的端服务器镜像代理磁盘ID
    * vmTemplateId  模板ID
    * targetDiskIds  目的端服务器磁盘ID数组，用空格分隔，单个id长度不超过255
    * snapshotIds  目的端的快照ID，id之间\";\"分隔
    * cutoveredSnapshotIds  割接的快照ID
    * targetServer  targetServer
    * cloneServer  cloneServer
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'regionId' => 'string',
            'regionName' => 'string',
            'existServer' => 'bool',
            'migrationIp' => 'string',
            'useIpv6' => 'bool',
            'usePublicIp' => 'bool',
            'speedLimit' => 'int',
            'projectName' => 'string',
            'projectId' => 'string',
            'enterpriseProject' => 'string',
            'imageDiskId' => 'string',
            'vmTemplateId' => 'string',
            'targetDiskIds' => 'string',
            'snapshotIds' => 'string',
            'cutoveredSnapshotIds' => 'string',
            'targetServer' => '\HuaweiCloud\SDK\Sms\V3\Model\TargetServer',
            'cloneServer' => '\HuaweiCloud\SDK\Sms\V3\Model\CloneServer'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  任务名称（用户自定义） 仅由中文字符、下划线、短横线、数字、英文大小写字母组成
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * regionId  目的端服务器的区域ID
    * regionName  目的端服务器的区域名称
    * existServer  目的端服务器是否存在。true代表已有目的端服务器，false代表需要新建目的端服务器
    * migrationIp  目的端服务器的IP地址。 公网迁移时请填写弹性IP地址 专线迁移时请填写私有IP地址 如果use_ipv6是true，则需要满足ipv6的格式，如果use_ipv6是false，则需要满足ipv4的格式
    * useIpv6  目的端服务器的IP地址是否使用ipv6
    * usePublicIp  是否为公网
    * speedLimit  限制迁移速率，单位：Mbps
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * enterpriseProject  企业项目ID
    * imageDiskId  目的端服务器镜像代理磁盘ID
    * vmTemplateId  模板ID
    * targetDiskIds  目的端服务器磁盘ID数组，用空格分隔，单个id长度不超过255
    * snapshotIds  目的端的快照ID，id之间\";\"分隔
    * cutoveredSnapshotIds  割接的快照ID
    * targetServer  targetServer
    * cloneServer  cloneServer
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'regionId' => null,
        'regionName' => null,
        'existServer' => null,
        'migrationIp' => null,
        'useIpv6' => null,
        'usePublicIp' => null,
        'speedLimit' => 'int32',
        'projectName' => null,
        'projectId' => null,
        'enterpriseProject' => null,
        'imageDiskId' => null,
        'vmTemplateId' => null,
        'targetDiskIds' => null,
        'snapshotIds' => null,
        'cutoveredSnapshotIds' => null,
        'targetServer' => null,
        'cloneServer' => null
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
    * name  任务名称（用户自定义） 仅由中文字符、下划线、短横线、数字、英文大小写字母组成
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * regionId  目的端服务器的区域ID
    * regionName  目的端服务器的区域名称
    * existServer  目的端服务器是否存在。true代表已有目的端服务器，false代表需要新建目的端服务器
    * migrationIp  目的端服务器的IP地址。 公网迁移时请填写弹性IP地址 专线迁移时请填写私有IP地址 如果use_ipv6是true，则需要满足ipv6的格式，如果use_ipv6是false，则需要满足ipv4的格式
    * useIpv6  目的端服务器的IP地址是否使用ipv6
    * usePublicIp  是否为公网
    * speedLimit  限制迁移速率，单位：Mbps
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * enterpriseProject  企业项目ID
    * imageDiskId  目的端服务器镜像代理磁盘ID
    * vmTemplateId  模板ID
    * targetDiskIds  目的端服务器磁盘ID数组，用空格分隔，单个id长度不超过255
    * snapshotIds  目的端的快照ID，id之间\";\"分隔
    * cutoveredSnapshotIds  割接的快照ID
    * targetServer  targetServer
    * cloneServer  cloneServer
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'regionId' => 'region_id',
            'regionName' => 'region_name',
            'existServer' => 'exist_server',
            'migrationIp' => 'migration_ip',
            'useIpv6' => 'use_ipv6',
            'usePublicIp' => 'use_public_ip',
            'speedLimit' => 'speed_limit',
            'projectName' => 'project_name',
            'projectId' => 'project_id',
            'enterpriseProject' => 'enterprise_project',
            'imageDiskId' => 'image_disk_id',
            'vmTemplateId' => 'vm_template_id',
            'targetDiskIds' => 'target_disk_ids',
            'snapshotIds' => 'snapshot_ids',
            'cutoveredSnapshotIds' => 'cutovered_snapshot_ids',
            'targetServer' => 'target_server',
            'cloneServer' => 'clone_server'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  任务名称（用户自定义） 仅由中文字符、下划线、短横线、数字、英文大小写字母组成
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * regionId  目的端服务器的区域ID
    * regionName  目的端服务器的区域名称
    * existServer  目的端服务器是否存在。true代表已有目的端服务器，false代表需要新建目的端服务器
    * migrationIp  目的端服务器的IP地址。 公网迁移时请填写弹性IP地址 专线迁移时请填写私有IP地址 如果use_ipv6是true，则需要满足ipv6的格式，如果use_ipv6是false，则需要满足ipv4的格式
    * useIpv6  目的端服务器的IP地址是否使用ipv6
    * usePublicIp  是否为公网
    * speedLimit  限制迁移速率，单位：Mbps
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * enterpriseProject  企业项目ID
    * imageDiskId  目的端服务器镜像代理磁盘ID
    * vmTemplateId  模板ID
    * targetDiskIds  目的端服务器磁盘ID数组，用空格分隔，单个id长度不超过255
    * snapshotIds  目的端的快照ID，id之间\";\"分隔
    * cutoveredSnapshotIds  割接的快照ID
    * targetServer  targetServer
    * cloneServer  cloneServer
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'regionId' => 'setRegionId',
            'regionName' => 'setRegionName',
            'existServer' => 'setExistServer',
            'migrationIp' => 'setMigrationIp',
            'useIpv6' => 'setUseIpv6',
            'usePublicIp' => 'setUsePublicIp',
            'speedLimit' => 'setSpeedLimit',
            'projectName' => 'setProjectName',
            'projectId' => 'setProjectId',
            'enterpriseProject' => 'setEnterpriseProject',
            'imageDiskId' => 'setImageDiskId',
            'vmTemplateId' => 'setVmTemplateId',
            'targetDiskIds' => 'setTargetDiskIds',
            'snapshotIds' => 'setSnapshotIds',
            'cutoveredSnapshotIds' => 'setCutoveredSnapshotIds',
            'targetServer' => 'setTargetServer',
            'cloneServer' => 'setCloneServer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  任务名称（用户自定义） 仅由中文字符、下划线、短横线、数字、英文大小写字母组成
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * regionId  目的端服务器的区域ID
    * regionName  目的端服务器的区域名称
    * existServer  目的端服务器是否存在。true代表已有目的端服务器，false代表需要新建目的端服务器
    * migrationIp  目的端服务器的IP地址。 公网迁移时请填写弹性IP地址 专线迁移时请填写私有IP地址 如果use_ipv6是true，则需要满足ipv6的格式，如果use_ipv6是false，则需要满足ipv4的格式
    * useIpv6  目的端服务器的IP地址是否使用ipv6
    * usePublicIp  是否为公网
    * speedLimit  限制迁移速率，单位：Mbps
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * enterpriseProject  企业项目ID
    * imageDiskId  目的端服务器镜像代理磁盘ID
    * vmTemplateId  模板ID
    * targetDiskIds  目的端服务器磁盘ID数组，用空格分隔，单个id长度不超过255
    * snapshotIds  目的端的快照ID，id之间\";\"分隔
    * cutoveredSnapshotIds  割接的快照ID
    * targetServer  targetServer
    * cloneServer  cloneServer
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'regionId' => 'getRegionId',
            'regionName' => 'getRegionName',
            'existServer' => 'getExistServer',
            'migrationIp' => 'getMigrationIp',
            'useIpv6' => 'getUseIpv6',
            'usePublicIp' => 'getUsePublicIp',
            'speedLimit' => 'getSpeedLimit',
            'projectName' => 'getProjectName',
            'projectId' => 'getProjectId',
            'enterpriseProject' => 'getEnterpriseProject',
            'imageDiskId' => 'getImageDiskId',
            'vmTemplateId' => 'getVmTemplateId',
            'targetDiskIds' => 'getTargetDiskIds',
            'snapshotIds' => 'getSnapshotIds',
            'cutoveredSnapshotIds' => 'getCutoveredSnapshotIds',
            'targetServer' => 'getTargetServer',
            'cloneServer' => 'getCloneServer'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['existServer'] = isset($data['existServer']) ? $data['existServer'] : null;
        $this->container['migrationIp'] = isset($data['migrationIp']) ? $data['migrationIp'] : null;
        $this->container['useIpv6'] = isset($data['useIpv6']) ? $data['useIpv6'] : null;
        $this->container['usePublicIp'] = isset($data['usePublicIp']) ? $data['usePublicIp'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['imageDiskId'] = isset($data['imageDiskId']) ? $data['imageDiskId'] : null;
        $this->container['vmTemplateId'] = isset($data['vmTemplateId']) ? $data['vmTemplateId'] : null;
        $this->container['targetDiskIds'] = isset($data['targetDiskIds']) ? $data['targetDiskIds'] : null;
        $this->container['snapshotIds'] = isset($data['snapshotIds']) ? $data['snapshotIds'] : null;
        $this->container['cutoveredSnapshotIds'] = isset($data['cutoveredSnapshotIds']) ? $data['cutoveredSnapshotIds'] : null;
        $this->container['targetServer'] = isset($data['targetServer']) ? $data['targetServer'] : null;
        $this->container['cloneServer'] = isset($data['cloneServer']) ? $data['cloneServer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['migrationIp']) && (mb_strlen($this->container['migrationIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'migrationIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migrationIp']) && (mb_strlen($this->container['migrationIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'migrationIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDiskId']) && (mb_strlen($this->container['imageDiskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageDiskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageDiskId']) && (mb_strlen($this->container['imageDiskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDiskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) > 100)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetDiskIds']) && (mb_strlen($this->container['targetDiskIds']) > 16384)) {
                $invalidProperties[] = "invalid value for 'targetDiskIds', the character length must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['targetDiskIds']) && (mb_strlen($this->container['targetDiskIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetDiskIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['snapshotIds']) && (mb_strlen($this->container['snapshotIds']) > 1024)) {
                $invalidProperties[] = "invalid value for 'snapshotIds', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['snapshotIds']) && (mb_strlen($this->container['snapshotIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'snapshotIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cutoveredSnapshotIds']) && (mb_strlen($this->container['cutoveredSnapshotIds']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cutoveredSnapshotIds', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cutoveredSnapshotIds']) && (mb_strlen($this->container['cutoveredSnapshotIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'cutoveredSnapshotIds', the character length must be bigger than or equal to 0.";
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
    *  任务名称（用户自定义） 仅由中文字符、下划线、短横线、数字、英文大小写字母组成
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
    * @param string|null $name 任务名称（用户自定义） 仅由中文字符、下划线、短横线、数字、英文大小写字母组成
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
    *  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets regionId
    *  目的端服务器的区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 目的端服务器的区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets regionName
    *  目的端服务器的区域名称
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 目的端服务器的区域名称
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets existServer
    *  目的端服务器是否存在。true代表已有目的端服务器，false代表需要新建目的端服务器
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
    * @param bool|null $existServer 目的端服务器是否存在。true代表已有目的端服务器，false代表需要新建目的端服务器
    *
    * @return $this
    */
    public function setExistServer($existServer)
    {
        $this->container['existServer'] = $existServer;
        return $this;
    }

    /**
    * Gets migrationIp
    *  目的端服务器的IP地址。 公网迁移时请填写弹性IP地址 专线迁移时请填写私有IP地址 如果use_ipv6是true，则需要满足ipv6的格式，如果use_ipv6是false，则需要满足ipv4的格式
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
    * @param string|null $migrationIp 目的端服务器的IP地址。 公网迁移时请填写弹性IP地址 专线迁移时请填写私有IP地址 如果use_ipv6是true，则需要满足ipv6的格式，如果use_ipv6是false，则需要满足ipv4的格式
    *
    * @return $this
    */
    public function setMigrationIp($migrationIp)
    {
        $this->container['migrationIp'] = $migrationIp;
        return $this;
    }

    /**
    * Gets useIpv6
    *  目的端服务器的IP地址是否使用ipv6
    *
    * @return bool|null
    */
    public function getUseIpv6()
    {
        return $this->container['useIpv6'];
    }

    /**
    * Sets useIpv6
    *
    * @param bool|null $useIpv6 目的端服务器的IP地址是否使用ipv6
    *
    * @return $this
    */
    public function setUseIpv6($useIpv6)
    {
        $this->container['useIpv6'] = $useIpv6;
        return $this;
    }

    /**
    * Gets usePublicIp
    *  是否为公网
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
    * @param bool|null $usePublicIp 是否为公网
    *
    * @return $this
    */
    public function setUsePublicIp($usePublicIp)
    {
        $this->container['usePublicIp'] = $usePublicIp;
        return $this;
    }

    /**
    * Gets speedLimit
    *  限制迁移速率，单位：Mbps
    *
    * @return int|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param int|null $speedLimit 限制迁移速率，单位：Mbps
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets projectName
    *  目的端服务器所在项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 目的端服务器所在项目名称
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
    *  目的端服务器所在项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 目的端服务器所在项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param string|null $enterpriseProject 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets imageDiskId
    *  目的端服务器镜像代理磁盘ID
    *
    * @return string|null
    */
    public function getImageDiskId()
    {
        return $this->container['imageDiskId'];
    }

    /**
    * Sets imageDiskId
    *
    * @param string|null $imageDiskId 目的端服务器镜像代理磁盘ID
    *
    * @return $this
    */
    public function setImageDiskId($imageDiskId)
    {
        $this->container['imageDiskId'] = $imageDiskId;
        return $this;
    }

    /**
    * Gets vmTemplateId
    *  模板ID
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
    * @param string|null $vmTemplateId 模板ID
    *
    * @return $this
    */
    public function setVmTemplateId($vmTemplateId)
    {
        $this->container['vmTemplateId'] = $vmTemplateId;
        return $this;
    }

    /**
    * Gets targetDiskIds
    *  目的端服务器磁盘ID数组，用空格分隔，单个id长度不超过255
    *
    * @return string|null
    */
    public function getTargetDiskIds()
    {
        return $this->container['targetDiskIds'];
    }

    /**
    * Sets targetDiskIds
    *
    * @param string|null $targetDiskIds 目的端服务器磁盘ID数组，用空格分隔，单个id长度不超过255
    *
    * @return $this
    */
    public function setTargetDiskIds($targetDiskIds)
    {
        $this->container['targetDiskIds'] = $targetDiskIds;
        return $this;
    }

    /**
    * Gets snapshotIds
    *  目的端的快照ID，id之间\";\"分隔
    *
    * @return string|null
    */
    public function getSnapshotIds()
    {
        return $this->container['snapshotIds'];
    }

    /**
    * Sets snapshotIds
    *
    * @param string|null $snapshotIds 目的端的快照ID，id之间\";\"分隔
    *
    * @return $this
    */
    public function setSnapshotIds($snapshotIds)
    {
        $this->container['snapshotIds'] = $snapshotIds;
        return $this;
    }

    /**
    * Gets cutoveredSnapshotIds
    *  割接的快照ID
    *
    * @return string|null
    */
    public function getCutoveredSnapshotIds()
    {
        return $this->container['cutoveredSnapshotIds'];
    }

    /**
    * Sets cutoveredSnapshotIds
    *
    * @param string|null $cutoveredSnapshotIds 割接的快照ID
    *
    * @return $this
    */
    public function setCutoveredSnapshotIds($cutoveredSnapshotIds)
    {
        $this->container['cutoveredSnapshotIds'] = $cutoveredSnapshotIds;
        return $this;
    }

    /**
    * Gets targetServer
    *  targetServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TargetServer|null
    */
    public function getTargetServer()
    {
        return $this->container['targetServer'];
    }

    /**
    * Sets targetServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TargetServer|null $targetServer targetServer
    *
    * @return $this
    */
    public function setTargetServer($targetServer)
    {
        $this->container['targetServer'] = $targetServer;
        return $this;
    }

    /**
    * Gets cloneServer
    *  cloneServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\CloneServer|null
    */
    public function getCloneServer()
    {
        return $this->container['cloneServer'];
    }

    /**
    * Sets cloneServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\CloneServer|null $cloneServer cloneServer
    *
    * @return $this
    */
    public function setCloneServer($cloneServer)
    {
        $this->container['cloneServer'] = $cloneServer;
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

