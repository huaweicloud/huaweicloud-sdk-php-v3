<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsAgentDeploy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsAgentDeploy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  可信节点Id
    * agentName  可信节点名称
    * aomFlag  是否开启aom监控
    * bcsFlag  是否使用区块链存证
    * cceVersion  可信节点使用cce集群的版本
    * createTime  可信节点创建时间
    * creatorDomainId  可信节点创建者的租户Id
    * creatorId  可信节点创建者的Id
    * creatorName  可信节点创建者的名称
    * creatorProjectId  创建可信节点所在项目Id
    * deployStatus  可信节点部署状态，ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  可信节点部署类型，CCE.云容器集群，IEF.边缘容器
    * deploymentEventInformation  可信节点部署类型
    * highAvail  可信节点是否高可用部署
    * imageId  可信节点部署使用的镜像Id
    * imageVersion  可信节点部署使用的镜像版本
    * leagueId  可信节点所在联盟的Id
    * leagueName  可信节点所在联盟的名称
    * leagueRegionName  可信节点所在联盟的区域
    * leagueVersion  可信节点所在联盟的版本
    * natId  可信节点使用的网关的Id
    * storageMountType  可信节点使用的存储方式，HOST_PATH.本地存储，OBS.对象云存储，SFS_TURBO.极速文件存储
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'agentName' => 'string',
            'aomFlag' => 'string',
            'bcsFlag' => 'string',
            'cceVersion' => 'string',
            'createTime' => '\DateTime',
            'creatorDomainId' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'creatorProjectId' => 'string',
            'deployStatus' => 'string',
            'deployType' => 'string',
            'deploymentEventInformation' => 'string',
            'highAvail' => 'string',
            'imageId' => 'string',
            'imageVersion' => 'string',
            'leagueId' => 'string',
            'leagueName' => 'string',
            'leagueRegionName' => 'string',
            'leagueVersion' => 'string',
            'natId' => 'string',
            'storageMountType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  可信节点Id
    * agentName  可信节点名称
    * aomFlag  是否开启aom监控
    * bcsFlag  是否使用区块链存证
    * cceVersion  可信节点使用cce集群的版本
    * createTime  可信节点创建时间
    * creatorDomainId  可信节点创建者的租户Id
    * creatorId  可信节点创建者的Id
    * creatorName  可信节点创建者的名称
    * creatorProjectId  创建可信节点所在项目Id
    * deployStatus  可信节点部署状态，ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  可信节点部署类型，CCE.云容器集群，IEF.边缘容器
    * deploymentEventInformation  可信节点部署类型
    * highAvail  可信节点是否高可用部署
    * imageId  可信节点部署使用的镜像Id
    * imageVersion  可信节点部署使用的镜像版本
    * leagueId  可信节点所在联盟的Id
    * leagueName  可信节点所在联盟的名称
    * leagueRegionName  可信节点所在联盟的区域
    * leagueVersion  可信节点所在联盟的版本
    * natId  可信节点使用的网关的Id
    * storageMountType  可信节点使用的存储方式，HOST_PATH.本地存储，OBS.对象云存储，SFS_TURBO.极速文件存储
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'agentName' => null,
        'aomFlag' => 'byte',
        'bcsFlag' => 'byte',
        'cceVersion' => null,
        'createTime' => 'date-time',
        'creatorDomainId' => null,
        'creatorId' => null,
        'creatorName' => null,
        'creatorProjectId' => null,
        'deployStatus' => null,
        'deployType' => null,
        'deploymentEventInformation' => null,
        'highAvail' => 'byte',
        'imageId' => null,
        'imageVersion' => null,
        'leagueId' => null,
        'leagueName' => null,
        'leagueRegionName' => null,
        'leagueVersion' => null,
        'natId' => null,
        'storageMountType' => null
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
    * agentId  可信节点Id
    * agentName  可信节点名称
    * aomFlag  是否开启aom监控
    * bcsFlag  是否使用区块链存证
    * cceVersion  可信节点使用cce集群的版本
    * createTime  可信节点创建时间
    * creatorDomainId  可信节点创建者的租户Id
    * creatorId  可信节点创建者的Id
    * creatorName  可信节点创建者的名称
    * creatorProjectId  创建可信节点所在项目Id
    * deployStatus  可信节点部署状态，ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  可信节点部署类型，CCE.云容器集群，IEF.边缘容器
    * deploymentEventInformation  可信节点部署类型
    * highAvail  可信节点是否高可用部署
    * imageId  可信节点部署使用的镜像Id
    * imageVersion  可信节点部署使用的镜像版本
    * leagueId  可信节点所在联盟的Id
    * leagueName  可信节点所在联盟的名称
    * leagueRegionName  可信节点所在联盟的区域
    * leagueVersion  可信节点所在联盟的版本
    * natId  可信节点使用的网关的Id
    * storageMountType  可信节点使用的存储方式，HOST_PATH.本地存储，OBS.对象云存储，SFS_TURBO.极速文件存储
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'agentName' => 'agent_name',
            'aomFlag' => 'aom_flag',
            'bcsFlag' => 'bcs_flag',
            'cceVersion' => 'cce_version',
            'createTime' => 'create_time',
            'creatorDomainId' => 'creator_domain_id',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'creatorProjectId' => 'creator_project_id',
            'deployStatus' => 'deploy_status',
            'deployType' => 'deploy_type',
            'deploymentEventInformation' => 'deployment_event_information',
            'highAvail' => 'high_avail',
            'imageId' => 'image_id',
            'imageVersion' => 'image_version',
            'leagueId' => 'league_id',
            'leagueName' => 'league_name',
            'leagueRegionName' => 'league_region_name',
            'leagueVersion' => 'league_version',
            'natId' => 'nat_id',
            'storageMountType' => 'storage_mount_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  可信节点Id
    * agentName  可信节点名称
    * aomFlag  是否开启aom监控
    * bcsFlag  是否使用区块链存证
    * cceVersion  可信节点使用cce集群的版本
    * createTime  可信节点创建时间
    * creatorDomainId  可信节点创建者的租户Id
    * creatorId  可信节点创建者的Id
    * creatorName  可信节点创建者的名称
    * creatorProjectId  创建可信节点所在项目Id
    * deployStatus  可信节点部署状态，ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  可信节点部署类型，CCE.云容器集群，IEF.边缘容器
    * deploymentEventInformation  可信节点部署类型
    * highAvail  可信节点是否高可用部署
    * imageId  可信节点部署使用的镜像Id
    * imageVersion  可信节点部署使用的镜像版本
    * leagueId  可信节点所在联盟的Id
    * leagueName  可信节点所在联盟的名称
    * leagueRegionName  可信节点所在联盟的区域
    * leagueVersion  可信节点所在联盟的版本
    * natId  可信节点使用的网关的Id
    * storageMountType  可信节点使用的存储方式，HOST_PATH.本地存储，OBS.对象云存储，SFS_TURBO.极速文件存储
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'agentName' => 'setAgentName',
            'aomFlag' => 'setAomFlag',
            'bcsFlag' => 'setBcsFlag',
            'cceVersion' => 'setCceVersion',
            'createTime' => 'setCreateTime',
            'creatorDomainId' => 'setCreatorDomainId',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'creatorProjectId' => 'setCreatorProjectId',
            'deployStatus' => 'setDeployStatus',
            'deployType' => 'setDeployType',
            'deploymentEventInformation' => 'setDeploymentEventInformation',
            'highAvail' => 'setHighAvail',
            'imageId' => 'setImageId',
            'imageVersion' => 'setImageVersion',
            'leagueId' => 'setLeagueId',
            'leagueName' => 'setLeagueName',
            'leagueRegionName' => 'setLeagueRegionName',
            'leagueVersion' => 'setLeagueVersion',
            'natId' => 'setNatId',
            'storageMountType' => 'setStorageMountType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  可信节点Id
    * agentName  可信节点名称
    * aomFlag  是否开启aom监控
    * bcsFlag  是否使用区块链存证
    * cceVersion  可信节点使用cce集群的版本
    * createTime  可信节点创建时间
    * creatorDomainId  可信节点创建者的租户Id
    * creatorId  可信节点创建者的Id
    * creatorName  可信节点创建者的名称
    * creatorProjectId  创建可信节点所在项目Id
    * deployStatus  可信节点部署状态，ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  可信节点部署类型，CCE.云容器集群，IEF.边缘容器
    * deploymentEventInformation  可信节点部署类型
    * highAvail  可信节点是否高可用部署
    * imageId  可信节点部署使用的镜像Id
    * imageVersion  可信节点部署使用的镜像版本
    * leagueId  可信节点所在联盟的Id
    * leagueName  可信节点所在联盟的名称
    * leagueRegionName  可信节点所在联盟的区域
    * leagueVersion  可信节点所在联盟的版本
    * natId  可信节点使用的网关的Id
    * storageMountType  可信节点使用的存储方式，HOST_PATH.本地存储，OBS.对象云存储，SFS_TURBO.极速文件存储
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'agentName' => 'getAgentName',
            'aomFlag' => 'getAomFlag',
            'bcsFlag' => 'getBcsFlag',
            'cceVersion' => 'getCceVersion',
            'createTime' => 'getCreateTime',
            'creatorDomainId' => 'getCreatorDomainId',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'creatorProjectId' => 'getCreatorProjectId',
            'deployStatus' => 'getDeployStatus',
            'deployType' => 'getDeployType',
            'deploymentEventInformation' => 'getDeploymentEventInformation',
            'highAvail' => 'getHighAvail',
            'imageId' => 'getImageId',
            'imageVersion' => 'getImageVersion',
            'leagueId' => 'getLeagueId',
            'leagueName' => 'getLeagueName',
            'leagueRegionName' => 'getLeagueRegionName',
            'leagueVersion' => 'getLeagueVersion',
            'natId' => 'getNatId',
            'storageMountType' => 'getStorageMountType'
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
    const DEPLOY_STATUS_ABNORMAL = 'ABNORMAL';
    const DEPLOY_STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const DEPLOY_STATUS_DELETE_SUCCESS = 'DELETE_SUCCESS';
    const DEPLOY_STATUS_DELETING = 'DELETING';
    const DEPLOY_STATUS_DEPLOYING = 'DEPLOYING';
    const DEPLOY_STATUS_DEPLOY_FAILED = 'DEPLOY_FAILED';
    const DEPLOY_STATUS_DEPLOY_SUCCESS = 'DEPLOY_SUCCESS';
    const DEPLOY_STATUS_FAILED = 'FAILED';
    const DEPLOY_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const DEPLOY_STATUS_RESTARTING = 'RESTARTING';
    const DEPLOY_STATUS_RESTART_FAILED = 'RESTART_FAILED';
    const DEPLOY_STATUS_ROLLBACK = 'ROLLBACK';
    const DEPLOY_STATUS_ROLLBACKING = 'ROLLBACKING';
    const DEPLOY_STATUS_ROLLBACK_FAILED = 'ROLLBACK_FAILED';
    const DEPLOY_STATUS_RUNNING = 'RUNNING';
    const DEPLOY_STATUS_STARTING = 'STARTING';
    const DEPLOY_STATUS_SUCCESS = 'SUCCESS';
    const DEPLOY_STATUS_TO_START = 'TO_START';
    const DEPLOY_STATUS_UPGRADE_FAILED = 'UPGRADE_FAILED';
    const DEPLOY_STATUS_UPGRADING = 'UPGRADING';
    const DEPLOY_TYPE_CCE = 'CCE';
    const DEPLOY_TYPE_IEF = 'IEF';
    const STORAGE_MOUNT_TYPE_HOST_PATH = 'HOST_PATH';
    const STORAGE_MOUNT_TYPE_OBS = 'OBS';
    const STORAGE_MOUNT_TYPE_SFS_TURBO = 'SFS_TURBO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeployStatusAllowableValues()
    {
        return [
            self::DEPLOY_STATUS_ABNORMAL,
            self::DEPLOY_STATUS_DELETE_FAILED,
            self::DEPLOY_STATUS_DELETE_SUCCESS,
            self::DEPLOY_STATUS_DELETING,
            self::DEPLOY_STATUS_DEPLOYING,
            self::DEPLOY_STATUS_DEPLOY_FAILED,
            self::DEPLOY_STATUS_DEPLOY_SUCCESS,
            self::DEPLOY_STATUS_FAILED,
            self::DEPLOY_STATUS_IN_PROGRESS,
            self::DEPLOY_STATUS_RESTARTING,
            self::DEPLOY_STATUS_RESTART_FAILED,
            self::DEPLOY_STATUS_ROLLBACK,
            self::DEPLOY_STATUS_ROLLBACKING,
            self::DEPLOY_STATUS_ROLLBACK_FAILED,
            self::DEPLOY_STATUS_RUNNING,
            self::DEPLOY_STATUS_STARTING,
            self::DEPLOY_STATUS_SUCCESS,
            self::DEPLOY_STATUS_TO_START,
            self::DEPLOY_STATUS_UPGRADE_FAILED,
            self::DEPLOY_STATUS_UPGRADING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeployTypeAllowableValues()
    {
        return [
            self::DEPLOY_TYPE_CCE,
            self::DEPLOY_TYPE_IEF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageMountTypeAllowableValues()
    {
        return [
            self::STORAGE_MOUNT_TYPE_HOST_PATH,
            self::STORAGE_MOUNT_TYPE_OBS,
            self::STORAGE_MOUNT_TYPE_SFS_TURBO,
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['aomFlag'] = isset($data['aomFlag']) ? $data['aomFlag'] : null;
        $this->container['bcsFlag'] = isset($data['bcsFlag']) ? $data['bcsFlag'] : null;
        $this->container['cceVersion'] = isset($data['cceVersion']) ? $data['cceVersion'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorDomainId'] = isset($data['creatorDomainId']) ? $data['creatorDomainId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorProjectId'] = isset($data['creatorProjectId']) ? $data['creatorProjectId'] : null;
        $this->container['deployStatus'] = isset($data['deployStatus']) ? $data['deployStatus'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['deploymentEventInformation'] = isset($data['deploymentEventInformation']) ? $data['deploymentEventInformation'] : null;
        $this->container['highAvail'] = isset($data['highAvail']) ? $data['highAvail'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
        $this->container['leagueName'] = isset($data['leagueName']) ? $data['leagueName'] : null;
        $this->container['leagueRegionName'] = isset($data['leagueRegionName']) ? $data['leagueRegionName'] : null;
        $this->container['leagueVersion'] = isset($data['leagueVersion']) ? $data['leagueVersion'] : null;
        $this->container['natId'] = isset($data['natId']) ? $data['natId'] : null;
        $this->container['storageMountType'] = isset($data['storageMountType']) ? $data['storageMountType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDeployStatusAllowableValues();
                if (!is_null($this->container['deployStatus']) && !in_array($this->container['deployStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deployStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeployTypeAllowableValues();
                if (!is_null($this->container['deployType']) && !in_array($this->container['deployType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deployType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStorageMountTypeAllowableValues();
                if (!is_null($this->container['storageMountType']) && !in_array($this->container['storageMountType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageMountType', must be one of '%s'",
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
    * Gets agentId
    *  可信节点Id
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId 可信节点Id
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentName
    *  可信节点名称
    *
    * @return string|null
    */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
    * Sets agentName
    *
    * @param string|null $agentName 可信节点名称
    *
    * @return $this
    */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;
        return $this;
    }

    /**
    * Gets aomFlag
    *  是否开启aom监控
    *
    * @return string|null
    */
    public function getAomFlag()
    {
        return $this->container['aomFlag'];
    }

    /**
    * Sets aomFlag
    *
    * @param string|null $aomFlag 是否开启aom监控
    *
    * @return $this
    */
    public function setAomFlag($aomFlag)
    {
        $this->container['aomFlag'] = $aomFlag;
        return $this;
    }

    /**
    * Gets bcsFlag
    *  是否使用区块链存证
    *
    * @return string|null
    */
    public function getBcsFlag()
    {
        return $this->container['bcsFlag'];
    }

    /**
    * Sets bcsFlag
    *
    * @param string|null $bcsFlag 是否使用区块链存证
    *
    * @return $this
    */
    public function setBcsFlag($bcsFlag)
    {
        $this->container['bcsFlag'] = $bcsFlag;
        return $this;
    }

    /**
    * Gets cceVersion
    *  可信节点使用cce集群的版本
    *
    * @return string|null
    */
    public function getCceVersion()
    {
        return $this->container['cceVersion'];
    }

    /**
    * Sets cceVersion
    *
    * @param string|null $cceVersion 可信节点使用cce集群的版本
    *
    * @return $this
    */
    public function setCceVersion($cceVersion)
    {
        $this->container['cceVersion'] = $cceVersion;
        return $this;
    }

    /**
    * Gets createTime
    *  可信节点创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 可信节点创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorDomainId
    *  可信节点创建者的租户Id
    *
    * @return string|null
    */
    public function getCreatorDomainId()
    {
        return $this->container['creatorDomainId'];
    }

    /**
    * Sets creatorDomainId
    *
    * @param string|null $creatorDomainId 可信节点创建者的租户Id
    *
    * @return $this
    */
    public function setCreatorDomainId($creatorDomainId)
    {
        $this->container['creatorDomainId'] = $creatorDomainId;
        return $this;
    }

    /**
    * Gets creatorId
    *  可信节点创建者的Id
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 可信节点创建者的Id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  可信节点创建者的名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 可信节点创建者的名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets creatorProjectId
    *  创建可信节点所在项目Id
    *
    * @return string|null
    */
    public function getCreatorProjectId()
    {
        return $this->container['creatorProjectId'];
    }

    /**
    * Sets creatorProjectId
    *
    * @param string|null $creatorProjectId 创建可信节点所在项目Id
    *
    * @return $this
    */
    public function setCreatorProjectId($creatorProjectId)
    {
        $this->container['creatorProjectId'] = $creatorProjectId;
        return $this;
    }

    /**
    * Gets deployStatus
    *  可信节点部署状态，ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    *
    * @return string|null
    */
    public function getDeployStatus()
    {
        return $this->container['deployStatus'];
    }

    /**
    * Sets deployStatus
    *
    * @param string|null $deployStatus 可信节点部署状态，ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    *
    * @return $this
    */
    public function setDeployStatus($deployStatus)
    {
        $this->container['deployStatus'] = $deployStatus;
        return $this;
    }

    /**
    * Gets deployType
    *  可信节点部署类型，CCE.云容器集群，IEF.边缘容器
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType 可信节点部署类型，CCE.云容器集群，IEF.边缘容器
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets deploymentEventInformation
    *  可信节点部署类型
    *
    * @return string|null
    */
    public function getDeploymentEventInformation()
    {
        return $this->container['deploymentEventInformation'];
    }

    /**
    * Sets deploymentEventInformation
    *
    * @param string|null $deploymentEventInformation 可信节点部署类型
    *
    * @return $this
    */
    public function setDeploymentEventInformation($deploymentEventInformation)
    {
        $this->container['deploymentEventInformation'] = $deploymentEventInformation;
        return $this;
    }

    /**
    * Gets highAvail
    *  可信节点是否高可用部署
    *
    * @return string|null
    */
    public function getHighAvail()
    {
        return $this->container['highAvail'];
    }

    /**
    * Sets highAvail
    *
    * @param string|null $highAvail 可信节点是否高可用部署
    *
    * @return $this
    */
    public function setHighAvail($highAvail)
    {
        $this->container['highAvail'] = $highAvail;
        return $this;
    }

    /**
    * Gets imageId
    *  可信节点部署使用的镜像Id
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 可信节点部署使用的镜像Id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageVersion
    *  可信节点部署使用的镜像版本
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion 可信节点部署使用的镜像版本
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets leagueId
    *  可信节点所在联盟的Id
    *
    * @return string|null
    */
    public function getLeagueId()
    {
        return $this->container['leagueId'];
    }

    /**
    * Sets leagueId
    *
    * @param string|null $leagueId 可信节点所在联盟的Id
    *
    * @return $this
    */
    public function setLeagueId($leagueId)
    {
        $this->container['leagueId'] = $leagueId;
        return $this;
    }

    /**
    * Gets leagueName
    *  可信节点所在联盟的名称
    *
    * @return string|null
    */
    public function getLeagueName()
    {
        return $this->container['leagueName'];
    }

    /**
    * Sets leagueName
    *
    * @param string|null $leagueName 可信节点所在联盟的名称
    *
    * @return $this
    */
    public function setLeagueName($leagueName)
    {
        $this->container['leagueName'] = $leagueName;
        return $this;
    }

    /**
    * Gets leagueRegionName
    *  可信节点所在联盟的区域
    *
    * @return string|null
    */
    public function getLeagueRegionName()
    {
        return $this->container['leagueRegionName'];
    }

    /**
    * Sets leagueRegionName
    *
    * @param string|null $leagueRegionName 可信节点所在联盟的区域
    *
    * @return $this
    */
    public function setLeagueRegionName($leagueRegionName)
    {
        $this->container['leagueRegionName'] = $leagueRegionName;
        return $this;
    }

    /**
    * Gets leagueVersion
    *  可信节点所在联盟的版本
    *
    * @return string|null
    */
    public function getLeagueVersion()
    {
        return $this->container['leagueVersion'];
    }

    /**
    * Sets leagueVersion
    *
    * @param string|null $leagueVersion 可信节点所在联盟的版本
    *
    * @return $this
    */
    public function setLeagueVersion($leagueVersion)
    {
        $this->container['leagueVersion'] = $leagueVersion;
        return $this;
    }

    /**
    * Gets natId
    *  可信节点使用的网关的Id
    *
    * @return string|null
    */
    public function getNatId()
    {
        return $this->container['natId'];
    }

    /**
    * Sets natId
    *
    * @param string|null $natId 可信节点使用的网关的Id
    *
    * @return $this
    */
    public function setNatId($natId)
    {
        $this->container['natId'] = $natId;
        return $this;
    }

    /**
    * Gets storageMountType
    *  可信节点使用的存储方式，HOST_PATH.本地存储，OBS.对象云存储，SFS_TURBO.极速文件存储
    *
    * @return string|null
    */
    public function getStorageMountType()
    {
        return $this->container['storageMountType'];
    }

    /**
    * Sets storageMountType
    *
    * @param string|null $storageMountType 可信节点使用的存储方式，HOST_PATH.本地存储，OBS.对象云存储，SFS_TURBO.极速文件存储
    *
    * @return $this
    */
    public function setStorageMountType($storageMountType)
    {
        $this->container['storageMountType'] = $storageMountType;
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

