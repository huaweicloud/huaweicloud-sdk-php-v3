<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentListVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentListVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  可信节点id
    * agentName  可信节点名称
    * createTime  创建时间
    * creatorDomainId  创建者租户id
    * creatorUserName  创建者名称
    * deployStatus  部署状态 ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  部署类型 CCE,IEF,EXTERNAL
    * deploymentEventInformation  部署事件状态
    * enableDelete  是否可删除
    * enableUpgrade  是否可升级
    * imageVersion  节点镜像版本
    * isHighAvail  节点是否高可用
    * leagueId  联盟ID
    * leagueName  联盟名称
    * leagueVersion  联盟版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'agentName' => 'string',
            'createTime' => '\DateTime',
            'creatorDomainId' => 'string',
            'creatorUserName' => 'string',
            'deployStatus' => 'string',
            'deployType' => 'string',
            'deploymentEventInformation' => 'string',
            'enableDelete' => 'bool',
            'enableUpgrade' => 'bool',
            'imageVersion' => 'string',
            'isHighAvail' => 'bool',
            'leagueId' => 'string',
            'leagueName' => 'string',
            'leagueVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  可信节点id
    * agentName  可信节点名称
    * createTime  创建时间
    * creatorDomainId  创建者租户id
    * creatorUserName  创建者名称
    * deployStatus  部署状态 ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  部署类型 CCE,IEF,EXTERNAL
    * deploymentEventInformation  部署事件状态
    * enableDelete  是否可删除
    * enableUpgrade  是否可升级
    * imageVersion  节点镜像版本
    * isHighAvail  节点是否高可用
    * leagueId  联盟ID
    * leagueName  联盟名称
    * leagueVersion  联盟版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'agentName' => null,
        'createTime' => 'date-time',
        'creatorDomainId' => null,
        'creatorUserName' => null,
        'deployStatus' => null,
        'deployType' => null,
        'deploymentEventInformation' => null,
        'enableDelete' => null,
        'enableUpgrade' => null,
        'imageVersion' => null,
        'isHighAvail' => null,
        'leagueId' => null,
        'leagueName' => null,
        'leagueVersion' => null
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
    * agentId  可信节点id
    * agentName  可信节点名称
    * createTime  创建时间
    * creatorDomainId  创建者租户id
    * creatorUserName  创建者名称
    * deployStatus  部署状态 ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  部署类型 CCE,IEF,EXTERNAL
    * deploymentEventInformation  部署事件状态
    * enableDelete  是否可删除
    * enableUpgrade  是否可升级
    * imageVersion  节点镜像版本
    * isHighAvail  节点是否高可用
    * leagueId  联盟ID
    * leagueName  联盟名称
    * leagueVersion  联盟版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'agentName' => 'agent_name',
            'createTime' => 'create_time',
            'creatorDomainId' => 'creator_domain_id',
            'creatorUserName' => 'creator_user_name',
            'deployStatus' => 'deploy_status',
            'deployType' => 'deploy_type',
            'deploymentEventInformation' => 'deployment_event_information',
            'enableDelete' => 'enable_delete',
            'enableUpgrade' => 'enable_upgrade',
            'imageVersion' => 'image_version',
            'isHighAvail' => 'is_high_avail',
            'leagueId' => 'league_id',
            'leagueName' => 'league_name',
            'leagueVersion' => 'league_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  可信节点id
    * agentName  可信节点名称
    * createTime  创建时间
    * creatorDomainId  创建者租户id
    * creatorUserName  创建者名称
    * deployStatus  部署状态 ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  部署类型 CCE,IEF,EXTERNAL
    * deploymentEventInformation  部署事件状态
    * enableDelete  是否可删除
    * enableUpgrade  是否可升级
    * imageVersion  节点镜像版本
    * isHighAvail  节点是否高可用
    * leagueId  联盟ID
    * leagueName  联盟名称
    * leagueVersion  联盟版本
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'agentName' => 'setAgentName',
            'createTime' => 'setCreateTime',
            'creatorDomainId' => 'setCreatorDomainId',
            'creatorUserName' => 'setCreatorUserName',
            'deployStatus' => 'setDeployStatus',
            'deployType' => 'setDeployType',
            'deploymentEventInformation' => 'setDeploymentEventInformation',
            'enableDelete' => 'setEnableDelete',
            'enableUpgrade' => 'setEnableUpgrade',
            'imageVersion' => 'setImageVersion',
            'isHighAvail' => 'setIsHighAvail',
            'leagueId' => 'setLeagueId',
            'leagueName' => 'setLeagueName',
            'leagueVersion' => 'setLeagueVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  可信节点id
    * agentName  可信节点名称
    * createTime  创建时间
    * creatorDomainId  创建者租户id
    * creatorUserName  创建者名称
    * deployStatus  部署状态 ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
    * deployType  部署类型 CCE,IEF,EXTERNAL
    * deploymentEventInformation  部署事件状态
    * enableDelete  是否可删除
    * enableUpgrade  是否可升级
    * imageVersion  节点镜像版本
    * isHighAvail  节点是否高可用
    * leagueId  联盟ID
    * leagueName  联盟名称
    * leagueVersion  联盟版本
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'agentName' => 'getAgentName',
            'createTime' => 'getCreateTime',
            'creatorDomainId' => 'getCreatorDomainId',
            'creatorUserName' => 'getCreatorUserName',
            'deployStatus' => 'getDeployStatus',
            'deployType' => 'getDeployType',
            'deploymentEventInformation' => 'getDeploymentEventInformation',
            'enableDelete' => 'getEnableDelete',
            'enableUpgrade' => 'getEnableUpgrade',
            'imageVersion' => 'getImageVersion',
            'isHighAvail' => 'getIsHighAvail',
            'leagueId' => 'getLeagueId',
            'leagueName' => 'getLeagueName',
            'leagueVersion' => 'getLeagueVersion'
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
    const DEPLOY_TYPE_EXTERNAL = 'EXTERNAL';
    const DEPLOY_TYPE_IEF = 'IEF';
    

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
            self::DEPLOY_TYPE_EXTERNAL,
            self::DEPLOY_TYPE_IEF,
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorDomainId'] = isset($data['creatorDomainId']) ? $data['creatorDomainId'] : null;
        $this->container['creatorUserName'] = isset($data['creatorUserName']) ? $data['creatorUserName'] : null;
        $this->container['deployStatus'] = isset($data['deployStatus']) ? $data['deployStatus'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['deploymentEventInformation'] = isset($data['deploymentEventInformation']) ? $data['deploymentEventInformation'] : null;
        $this->container['enableDelete'] = isset($data['enableDelete']) ? $data['enableDelete'] : null;
        $this->container['enableUpgrade'] = isset($data['enableUpgrade']) ? $data['enableUpgrade'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['isHighAvail'] = isset($data['isHighAvail']) ? $data['isHighAvail'] : null;
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
        $this->container['leagueName'] = isset($data['leagueName']) ? $data['leagueName'] : null;
        $this->container['leagueVersion'] = isset($data['leagueVersion']) ? $data['leagueVersion'] : null;
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
    *  可信节点id
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
    * @param string|null $agentId 可信节点id
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
    * Gets createTime
    *  创建时间
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
    * @param \DateTime|null $createTime 创建时间
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
    *  创建者租户id
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
    * @param string|null $creatorDomainId 创建者租户id
    *
    * @return $this
    */
    public function setCreatorDomainId($creatorDomainId)
    {
        $this->container['creatorDomainId'] = $creatorDomainId;
        return $this;
    }

    /**
    * Gets creatorUserName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorUserName()
    {
        return $this->container['creatorUserName'];
    }

    /**
    * Sets creatorUserName
    *
    * @param string|null $creatorUserName 创建者名称
    *
    * @return $this
    */
    public function setCreatorUserName($creatorUserName)
    {
        $this->container['creatorUserName'] = $creatorUserName;
        return $this;
    }

    /**
    * Gets deployStatus
    *  部署状态 ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
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
    * @param string|null $deployStatus 部署状态 ABNORMAL.正常,RESTARTING.重启中,RESTART_FAILED.重启失败，ROLLBACKING.回滚中，STARTING.启动中，DEPLOYING.创建中,DEPLOY_FAILED.创建失败,DEPLOY_SUCCESS.创建成功,RUNNING.运行中,DELETING.删除中,DELETE_FAILED.删除失败,DELETE_SUCCESS.删除成功,UPGRADING.升级中,UPGRADE_FAILED.升级失败,ROLLBACK.回退中,ROLLBACK_FAILED.回退失败,SUCCESS.成功,FAILED.失败,TO_START.待开始,IN_PROGRESS.进行中
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
    *  部署类型 CCE,IEF,EXTERNAL
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
    * @param string|null $deployType 部署类型 CCE,IEF,EXTERNAL
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
    *  部署事件状态
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
    * @param string|null $deploymentEventInformation 部署事件状态
    *
    * @return $this
    */
    public function setDeploymentEventInformation($deploymentEventInformation)
    {
        $this->container['deploymentEventInformation'] = $deploymentEventInformation;
        return $this;
    }

    /**
    * Gets enableDelete
    *  是否可删除
    *
    * @return bool|null
    */
    public function getEnableDelete()
    {
        return $this->container['enableDelete'];
    }

    /**
    * Sets enableDelete
    *
    * @param bool|null $enableDelete 是否可删除
    *
    * @return $this
    */
    public function setEnableDelete($enableDelete)
    {
        $this->container['enableDelete'] = $enableDelete;
        return $this;
    }

    /**
    * Gets enableUpgrade
    *  是否可升级
    *
    * @return bool|null
    */
    public function getEnableUpgrade()
    {
        return $this->container['enableUpgrade'];
    }

    /**
    * Sets enableUpgrade
    *
    * @param bool|null $enableUpgrade 是否可升级
    *
    * @return $this
    */
    public function setEnableUpgrade($enableUpgrade)
    {
        $this->container['enableUpgrade'] = $enableUpgrade;
        return $this;
    }

    /**
    * Gets imageVersion
    *  节点镜像版本
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
    * @param string|null $imageVersion 节点镜像版本
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets isHighAvail
    *  节点是否高可用
    *
    * @return bool|null
    */
    public function getIsHighAvail()
    {
        return $this->container['isHighAvail'];
    }

    /**
    * Sets isHighAvail
    *
    * @param bool|null $isHighAvail 节点是否高可用
    *
    * @return $this
    */
    public function setIsHighAvail($isHighAvail)
    {
        $this->container['isHighAvail'] = $isHighAvail;
        return $this;
    }

    /**
    * Gets leagueId
    *  联盟ID
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
    * @param string|null $leagueId 联盟ID
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
    *  联盟名称
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
    * @param string|null $leagueName 联盟名称
    *
    * @return $this
    */
    public function setLeagueName($leagueName)
    {
        $this->container['leagueName'] = $leagueName;
        return $this;
    }

    /**
    * Gets leagueVersion
    *  联盟版本
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
    * @param string|null $leagueVersion 联盟版本
    *
    * @return $this
    */
    public function setLeagueVersion($leagueVersion)
    {
        $this->container['leagueVersion'] = $leagueVersion;
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

