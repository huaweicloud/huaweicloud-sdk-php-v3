<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RespInstanceBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RespInstanceBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业帐号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'instanceName' => 'string',
            'status' => 'string',
            'instanceStatus' => 'int',
            'type' => 'string',
            'spec' => 'string',
            'createTime' => 'int',
            'enterpriseProjectId' => 'string',
            'eipAddress' => 'string',
            'chargingMode' => 'int',
            'cbcMetadata' => 'string',
            'loadbalancerProvider' => 'string',
            'cbcOperationLocks' => '\HuaweiCloud\SDK\Apig\V2\Model\CbcOperationLock[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业帐号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'instanceName' => null,
        'status' => null,
        'instanceStatus' => 'int32',
        'type' => null,
        'spec' => null,
        'createTime' => 'int64',
        'enterpriseProjectId' => null,
        'eipAddress' => null,
        'chargingMode' => 'int32',
        'cbcMetadata' => null,
        'loadbalancerProvider' => null,
        'cbcOperationLocks' => null
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
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业帐号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'instanceName' => 'instance_name',
            'status' => 'status',
            'instanceStatus' => 'instance_status',
            'type' => 'type',
            'spec' => 'spec',
            'createTime' => 'create_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'eipAddress' => 'eip_address',
            'chargingMode' => 'charging_mode',
            'cbcMetadata' => 'cbc_metadata',
            'loadbalancerProvider' => 'loadbalancer_provider',
            'cbcOperationLocks' => 'cbc_operation_locks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业帐号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'instanceName' => 'setInstanceName',
            'status' => 'setStatus',
            'instanceStatus' => 'setInstanceStatus',
            'type' => 'setType',
            'spec' => 'setSpec',
            'createTime' => 'setCreateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'eipAddress' => 'setEipAddress',
            'chargingMode' => 'setChargingMode',
            'cbcMetadata' => 'setCbcMetadata',
            'loadbalancerProvider' => 'setLoadbalancerProvider',
            'cbcOperationLocks' => 'setCbcOperationLocks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业帐号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'instanceName' => 'getInstanceName',
            'status' => 'getStatus',
            'instanceStatus' => 'getInstanceStatus',
            'type' => 'getType',
            'spec' => 'getSpec',
            'createTime' => 'getCreateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'eipAddress' => 'getEipAddress',
            'chargingMode' => 'getChargingMode',
            'cbcMetadata' => 'getCbcMetadata',
            'loadbalancerProvider' => 'getLoadbalancerProvider',
            'cbcOperationLocks' => 'getCbcOperationLocks'
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
    const STATUS_CREATING = 'Creating';
    const STATUS_CREATE_SUCCESS = 'CreateSuccess';
    const STATUS_CREATE_FAIL = 'CreateFail';
    const STATUS_INITING = 'Initing';
    const STATUS_REGISTERING = 'Registering';
    const STATUS_RUNNING = 'Running';
    const STATUS_INITING_FAILED = 'InitingFailed';
    const STATUS_REGISTER_FAILED = 'RegisterFailed';
    const STATUS_INSTALLING = 'Installing';
    const STATUS_INSTALL_FAILED = 'InstallFailed';
    const STATUS_UPDATING = 'Updating';
    const STATUS_UPDATE_FAILED = 'UpdateFailed';
    const STATUS_ROLLBACKING = 'Rollbacking';
    const STATUS_ROLLBACK_SUCCESS = 'RollbackSuccess';
    const STATUS_ROLLBACK_FAILED = 'RollbackFailed';
    const STATUS_DELETING = 'Deleting';
    const STATUS_DELETE_FAILED = 'DeleteFailed';
    const STATUS_UNREGISTERING = 'Unregistering';
    const STATUS_UN_REGISTER_FAILED = 'UnRegisterFailed';
    const STATUS_CREATE_TIMEOUT = 'CreateTimeout';
    const STATUS_INIT_TIMEOUT = 'InitTimeout';
    const STATUS_REGISTER_TIMEOUT = 'RegisterTimeout';
    const STATUS_INSTALL_TIMEOUT = 'InstallTimeout';
    const STATUS_UPDATE_TIMEOUT = 'UpdateTimeout';
    const STATUS_ROLLBACK_TIMEOUT = 'RollbackTimeout';
    const STATUS_DELETE_TIMEOUT = 'DeleteTimeout';
    const STATUS_UNREGISTER_TIMEOUT = 'UnregisterTimeout';
    const STATUS_STARTING = 'Starting';
    const STATUS_FREEZING = 'Freezing';
    const STATUS_FROZEN = 'Frozen';
    const STATUS_RESTARTING = 'Restarting';
    const STATUS_RESTART_FAIL = 'RestartFail';
    const STATUS_UNHEALTHY = 'Unhealthy';
    const STATUS_RESTART_TIMEOUT = 'RestartTimeout';
    const STATUS_RESIZING = 'Resizing';
    const STATUS_RESIZE_FAILED = 'ResizeFailed';
    const STATUS_RESIZE_TIMEOUT = 'ResizeTimeout';
    const INSTANCE_STATUS_1 = 1;
    const INSTANCE_STATUS_2 = 2;
    const INSTANCE_STATUS_3 = 3;
    const INSTANCE_STATUS_4 = 4;
    const INSTANCE_STATUS_5 = 5;
    const INSTANCE_STATUS_6 = 6;
    const INSTANCE_STATUS_7 = 7;
    const INSTANCE_STATUS_8 = 8;
    const INSTANCE_STATUS_10 = 10;
    const INSTANCE_STATUS_11 = 11;
    const INSTANCE_STATUS_12 = 12;
    const INSTANCE_STATUS_13 = 13;
    const INSTANCE_STATUS_20 = 20;
    const INSTANCE_STATUS_21 = 21;
    const INSTANCE_STATUS_22 = 22;
    const INSTANCE_STATUS_23 = 23;
    const INSTANCE_STATUS_24 = 24;
    const INSTANCE_STATUS_25 = 25;
    const INSTANCE_STATUS_26 = 26;
    const INSTANCE_STATUS_27 = 27;
    const INSTANCE_STATUS_28 = 28;
    const INSTANCE_STATUS_29 = 29;
    const INSTANCE_STATUS_30 = 30;
    const INSTANCE_STATUS_31 = 31;
    const INSTANCE_STATUS_32 = 32;
    const INSTANCE_STATUS_33 = 33;
    const INSTANCE_STATUS_34 = 34;
    const INSTANCE_STATUS_35 = 35;
    const INSTANCE_STATUS_36 = 36;
    const INSTANCE_STATUS_37 = 37;
    const INSTANCE_STATUS_38 = 38;
    const INSTANCE_STATUS_39 = 39;
    const INSTANCE_STATUS_40 = 40;
    const INSTANCE_STATUS_41 = 41;
    const INSTANCE_STATUS_42 = 42;
    const INSTANCE_STATUS_43 = 43;
    const INSTANCE_STATUS_44 = 44;
    const SPEC_BASIC = 'BASIC';
    const SPEC_PROFESSIONAL = 'PROFESSIONAL';
    const SPEC_ENTERPRISE = 'ENTERPRISE';
    const SPEC_PLATINUM = 'PLATINUM';
    const SPEC_BASIC_IPV6 = 'BASIC_IPV6';
    const SPEC_PROFESSIONAL_IPV6 = 'PROFESSIONAL_IPV6';
    const SPEC_ENTERPRISE_IPV6 = 'ENTERPRISE_IPV6';
    const SPEC_PLATINUM_IPV6 = 'PLATINUM_IPV6';
    const SPEC_PLATINUM_X2 = 'PLATINUM_X2';
    const SPEC_PLATINUM_X3 = 'PLATINUM_X3';
    const SPEC_PLATINUM_X4 = 'PLATINUM_X4';
    const SPEC_PLATINUM_X5 = 'PLATINUM_X5';
    const SPEC_PLATINUM_X6 = 'PLATINUM_X6';
    const SPEC_PLATINUM_X7 = 'PLATINUM_X7';
    const SPEC_PLATINUM_X8 = 'PLATINUM_X8';
    const CHARGING_MODE_0 = 0;
    const CHARGING_MODE_1 = 1;
    const LOADBALANCER_PROVIDER_LVS = 'lvs';
    const LOADBALANCER_PROVIDER_ELB = 'elb';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_CREATE_SUCCESS,
            self::STATUS_CREATE_FAIL,
            self::STATUS_INITING,
            self::STATUS_REGISTERING,
            self::STATUS_RUNNING,
            self::STATUS_INITING_FAILED,
            self::STATUS_REGISTER_FAILED,
            self::STATUS_INSTALLING,
            self::STATUS_INSTALL_FAILED,
            self::STATUS_UPDATING,
            self::STATUS_UPDATE_FAILED,
            self::STATUS_ROLLBACKING,
            self::STATUS_ROLLBACK_SUCCESS,
            self::STATUS_ROLLBACK_FAILED,
            self::STATUS_DELETING,
            self::STATUS_DELETE_FAILED,
            self::STATUS_UNREGISTERING,
            self::STATUS_UN_REGISTER_FAILED,
            self::STATUS_CREATE_TIMEOUT,
            self::STATUS_INIT_TIMEOUT,
            self::STATUS_REGISTER_TIMEOUT,
            self::STATUS_INSTALL_TIMEOUT,
            self::STATUS_UPDATE_TIMEOUT,
            self::STATUS_ROLLBACK_TIMEOUT,
            self::STATUS_DELETE_TIMEOUT,
            self::STATUS_UNREGISTER_TIMEOUT,
            self::STATUS_STARTING,
            self::STATUS_FREEZING,
            self::STATUS_FROZEN,
            self::STATUS_RESTARTING,
            self::STATUS_RESTART_FAIL,
            self::STATUS_UNHEALTHY,
            self::STATUS_RESTART_TIMEOUT,
            self::STATUS_RESIZING,
            self::STATUS_RESIZE_FAILED,
            self::STATUS_RESIZE_TIMEOUT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceStatusAllowableValues()
    {
        return [
            self::INSTANCE_STATUS_1,
            self::INSTANCE_STATUS_2,
            self::INSTANCE_STATUS_3,
            self::INSTANCE_STATUS_4,
            self::INSTANCE_STATUS_5,
            self::INSTANCE_STATUS_6,
            self::INSTANCE_STATUS_7,
            self::INSTANCE_STATUS_8,
            self::INSTANCE_STATUS_10,
            self::INSTANCE_STATUS_11,
            self::INSTANCE_STATUS_12,
            self::INSTANCE_STATUS_13,
            self::INSTANCE_STATUS_20,
            self::INSTANCE_STATUS_21,
            self::INSTANCE_STATUS_22,
            self::INSTANCE_STATUS_23,
            self::INSTANCE_STATUS_24,
            self::INSTANCE_STATUS_25,
            self::INSTANCE_STATUS_26,
            self::INSTANCE_STATUS_27,
            self::INSTANCE_STATUS_28,
            self::INSTANCE_STATUS_29,
            self::INSTANCE_STATUS_30,
            self::INSTANCE_STATUS_31,
            self::INSTANCE_STATUS_32,
            self::INSTANCE_STATUS_33,
            self::INSTANCE_STATUS_34,
            self::INSTANCE_STATUS_35,
            self::INSTANCE_STATUS_36,
            self::INSTANCE_STATUS_37,
            self::INSTANCE_STATUS_38,
            self::INSTANCE_STATUS_39,
            self::INSTANCE_STATUS_40,
            self::INSTANCE_STATUS_41,
            self::INSTANCE_STATUS_42,
            self::INSTANCE_STATUS_43,
            self::INSTANCE_STATUS_44,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecAllowableValues()
    {
        return [
            self::SPEC_BASIC,
            self::SPEC_PROFESSIONAL,
            self::SPEC_ENTERPRISE,
            self::SPEC_PLATINUM,
            self::SPEC_BASIC_IPV6,
            self::SPEC_PROFESSIONAL_IPV6,
            self::SPEC_ENTERPRISE_IPV6,
            self::SPEC_PLATINUM_IPV6,
            self::SPEC_PLATINUM_X2,
            self::SPEC_PLATINUM_X3,
            self::SPEC_PLATINUM_X4,
            self::SPEC_PLATINUM_X5,
            self::SPEC_PLATINUM_X6,
            self::SPEC_PLATINUM_X7,
            self::SPEC_PLATINUM_X8,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_0,
            self::CHARGING_MODE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLoadbalancerProviderAllowableValues()
    {
        return [
            self::LOADBALANCER_PROVIDER_LVS,
            self::LOADBALANCER_PROVIDER_ELB,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['eipAddress'] = isset($data['eipAddress']) ? $data['eipAddress'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['cbcMetadata'] = isset($data['cbcMetadata']) ? $data['cbcMetadata'] : null;
        $this->container['loadbalancerProvider'] = isset($data['loadbalancerProvider']) ? $data['loadbalancerProvider'] : null;
        $this->container['cbcOperationLocks'] = isset($data['cbcOperationLocks']) ? $data['cbcOperationLocks'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInstanceStatusAllowableValues();
                if (!is_null($this->container['instanceStatus']) && !in_array($this->container['instanceStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSpecAllowableValues();
                if (!is_null($this->container['spec']) && !in_array($this->container['spec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLoadbalancerProviderAllowableValues();
                if (!is_null($this->container['loadbalancerProvider']) && !in_array($this->container['loadbalancerProvider'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'loadbalancerProvider', must be one of '%s'",
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
    * Gets id
    *  实例ID
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
    * @param string|null $id 实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  实例所属租户ID
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
    * @param string|null $projectId 实例所属租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets status
    *  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
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
    * @param string|null $status 实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    *
    * @return int|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param int|null $instanceStatus 实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets type
    *  实例类型  默认apig
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
    * @param string|null $type 实例类型  默认apig
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets spec
    *  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    *
    * @return string|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string|null $spec 实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets createTime
    *  实例创建时间。unix时间戳格式。
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
    * @param int|null $createTime 实例创建时间。unix时间戳格式。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，企业帐号必填
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
    * @param string|null $enterpriseProjectId 企业项目ID，企业帐号必填
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets eipAddress
    *  实例绑定的弹性IP地址
    *
    * @return string|null
    */
    public function getEipAddress()
    {
        return $this->container['eipAddress'];
    }

    /**
    * Sets eipAddress
    *
    * @param string|null $eipAddress 实例绑定的弹性IP地址
    *
    * @return $this
    */
    public function setEipAddress($eipAddress)
    {
        $this->container['eipAddress'] = $eipAddress;
        return $this;
    }

    /**
    * Gets chargingMode
    *  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets cbcMetadata
    *  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    *
    * @return string|null
    */
    public function getCbcMetadata()
    {
        return $this->container['cbcMetadata'];
    }

    /**
    * Sets cbcMetadata
    *
    * @param string|null $cbcMetadata [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    *
    * @return $this
    */
    public function setCbcMetadata($cbcMetadata)
    {
        $this->container['cbcMetadata'] = $cbcMetadata;
        return $this;
    }

    /**
    * Gets loadbalancerProvider
    *  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    *
    * @return string|null
    */
    public function getLoadbalancerProvider()
    {
        return $this->container['loadbalancerProvider'];
    }

    /**
    * Sets loadbalancerProvider
    *
    * @param string|null $loadbalancerProvider 实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    *
    * @return $this
    */
    public function setLoadbalancerProvider($loadbalancerProvider)
    {
        $this->container['loadbalancerProvider'] = $loadbalancerProvider;
        return $this;
    }

    /**
    * Gets cbcOperationLocks
    *  云运营限制操作锁
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\CbcOperationLock[]|null
    */
    public function getCbcOperationLocks()
    {
        return $this->container['cbcOperationLocks'];
    }

    /**
    * Sets cbcOperationLocks
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\CbcOperationLock[]|null $cbcOperationLocks 云运营限制操作锁
    *
    * @return $this
    */
    public function setCbcOperationLocks($cbcOperationLocks)
    {
        $this->container['cbcOperationLocks'] = $cbcOperationLocks;
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

