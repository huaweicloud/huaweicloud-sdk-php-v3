<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * alias  实例别名。
    * projectId  项目ID。
    * clusterMode  集群模式。
    * status  状态。
    * bpdomainId  bpdomain_id
    * userId  账户ID。
    * datastoreVersion  数据库版本。
    * datastoreType  数据库类型。
    * createAt  创建时间。
    * updateAt  更新时间。
    * deleteAt  删除时间。
    * newVersionAvailable  是否有版本可升级。
    * rollbackVersionAvailable  是否有版本可回滚。
    * degradeVersionAvailable  是否有版本可降级。
    * publicIp  公共ip。
    * port  端口。
    * createFailErrorCode  创建失败原因编码。
    * timeZone  时区。
    * payModel  付费模式。
    * orderId  订单ID。
    * period  周期。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * actions  锁状态。
    * onlyDefaultGroup  是否只有默认组。
    * groups  组信息。
    * extendMap  其他信息。
    * tagsInfo  标签信息。
    * adminUserName  管理员账号。
    * eipBindingInfo  绑定eip信息。
    * enableSsl  是否支持ssl。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'alias' => 'string',
            'projectId' => 'string',
            'clusterMode' => 'string',
            'status' => 'string',
            'bpdomainId' => 'string',
            'userId' => 'string',
            'datastoreVersion' => 'string',
            'datastoreType' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string',
            'deleteAt' => 'string',
            'newVersionAvailable' => 'bool',
            'rollbackVersionAvailable' => 'bool',
            'degradeVersionAvailable' => 'bool',
            'publicIp' => 'string',
            'port' => 'string',
            'createFailErrorCode' => 'string',
            'timeZone' => 'string',
            'payModel' => 'string',
            'orderId' => 'string',
            'period' => 'int',
            'isFrozen' => 'bool',
            'frozenTime' => 'string',
            'actions' => '\HuaweiCloud\SDK\Ddm\V1\Model\ActionInfo[]',
            'onlyDefaultGroup' => 'bool',
            'groups' => '\HuaweiCloud\SDK\Ddm\V1\Model\DdmGroupInfo[]',
            'extendMap' => 'map[string,string]',
            'tagsInfo' => '\HuaweiCloud\SDK\Ddm\V1\Model\TagsInfo[]',
            'adminUserName' => 'string',
            'eipBindingInfo' => 'object',
            'enableSsl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * alias  实例别名。
    * projectId  项目ID。
    * clusterMode  集群模式。
    * status  状态。
    * bpdomainId  bpdomain_id
    * userId  账户ID。
    * datastoreVersion  数据库版本。
    * datastoreType  数据库类型。
    * createAt  创建时间。
    * updateAt  更新时间。
    * deleteAt  删除时间。
    * newVersionAvailable  是否有版本可升级。
    * rollbackVersionAvailable  是否有版本可回滚。
    * degradeVersionAvailable  是否有版本可降级。
    * publicIp  公共ip。
    * port  端口。
    * createFailErrorCode  创建失败原因编码。
    * timeZone  时区。
    * payModel  付费模式。
    * orderId  订单ID。
    * period  周期。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * actions  锁状态。
    * onlyDefaultGroup  是否只有默认组。
    * groups  组信息。
    * extendMap  其他信息。
    * tagsInfo  标签信息。
    * adminUserName  管理员账号。
    * eipBindingInfo  绑定eip信息。
    * enableSsl  是否支持ssl。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'alias' => null,
        'projectId' => null,
        'clusterMode' => null,
        'status' => null,
        'bpdomainId' => null,
        'userId' => null,
        'datastoreVersion' => null,
        'datastoreType' => null,
        'createAt' => null,
        'updateAt' => null,
        'deleteAt' => null,
        'newVersionAvailable' => null,
        'rollbackVersionAvailable' => null,
        'degradeVersionAvailable' => null,
        'publicIp' => null,
        'port' => null,
        'createFailErrorCode' => null,
        'timeZone' => null,
        'payModel' => null,
        'orderId' => null,
        'period' => null,
        'isFrozen' => null,
        'frozenTime' => null,
        'actions' => null,
        'onlyDefaultGroup' => null,
        'groups' => null,
        'extendMap' => null,
        'tagsInfo' => null,
        'adminUserName' => null,
        'eipBindingInfo' => null,
        'enableSsl' => null
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
    * id  实例ID。
    * name  实例名称。
    * alias  实例别名。
    * projectId  项目ID。
    * clusterMode  集群模式。
    * status  状态。
    * bpdomainId  bpdomain_id
    * userId  账户ID。
    * datastoreVersion  数据库版本。
    * datastoreType  数据库类型。
    * createAt  创建时间。
    * updateAt  更新时间。
    * deleteAt  删除时间。
    * newVersionAvailable  是否有版本可升级。
    * rollbackVersionAvailable  是否有版本可回滚。
    * degradeVersionAvailable  是否有版本可降级。
    * publicIp  公共ip。
    * port  端口。
    * createFailErrorCode  创建失败原因编码。
    * timeZone  时区。
    * payModel  付费模式。
    * orderId  订单ID。
    * period  周期。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * actions  锁状态。
    * onlyDefaultGroup  是否只有默认组。
    * groups  组信息。
    * extendMap  其他信息。
    * tagsInfo  标签信息。
    * adminUserName  管理员账号。
    * eipBindingInfo  绑定eip信息。
    * enableSsl  是否支持ssl。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'alias' => 'alias',
            'projectId' => 'project_id',
            'clusterMode' => 'cluster_mode',
            'status' => 'status',
            'bpdomainId' => 'bpdomain_id',
            'userId' => 'user_id',
            'datastoreVersion' => 'datastore_version',
            'datastoreType' => 'datastore_type',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'deleteAt' => 'delete_at',
            'newVersionAvailable' => 'new_version_available',
            'rollbackVersionAvailable' => 'rollback_version_available',
            'degradeVersionAvailable' => 'degrade_version_available',
            'publicIp' => 'public_ip',
            'port' => 'port',
            'createFailErrorCode' => 'create_fail_error_code',
            'timeZone' => 'time_zone',
            'payModel' => 'pay_model',
            'orderId' => 'order_id',
            'period' => 'period',
            'isFrozen' => 'is_frozen',
            'frozenTime' => 'frozen_time',
            'actions' => 'actions',
            'onlyDefaultGroup' => 'only_default_group',
            'groups' => 'groups',
            'extendMap' => 'extend_map',
            'tagsInfo' => 'tags_info',
            'adminUserName' => 'admin_user_name',
            'eipBindingInfo' => 'eip_binding_info',
            'enableSsl' => 'enable_ssl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。
    * alias  实例别名。
    * projectId  项目ID。
    * clusterMode  集群模式。
    * status  状态。
    * bpdomainId  bpdomain_id
    * userId  账户ID。
    * datastoreVersion  数据库版本。
    * datastoreType  数据库类型。
    * createAt  创建时间。
    * updateAt  更新时间。
    * deleteAt  删除时间。
    * newVersionAvailable  是否有版本可升级。
    * rollbackVersionAvailable  是否有版本可回滚。
    * degradeVersionAvailable  是否有版本可降级。
    * publicIp  公共ip。
    * port  端口。
    * createFailErrorCode  创建失败原因编码。
    * timeZone  时区。
    * payModel  付费模式。
    * orderId  订单ID。
    * period  周期。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * actions  锁状态。
    * onlyDefaultGroup  是否只有默认组。
    * groups  组信息。
    * extendMap  其他信息。
    * tagsInfo  标签信息。
    * adminUserName  管理员账号。
    * eipBindingInfo  绑定eip信息。
    * enableSsl  是否支持ssl。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'alias' => 'setAlias',
            'projectId' => 'setProjectId',
            'clusterMode' => 'setClusterMode',
            'status' => 'setStatus',
            'bpdomainId' => 'setBpdomainId',
            'userId' => 'setUserId',
            'datastoreVersion' => 'setDatastoreVersion',
            'datastoreType' => 'setDatastoreType',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'deleteAt' => 'setDeleteAt',
            'newVersionAvailable' => 'setNewVersionAvailable',
            'rollbackVersionAvailable' => 'setRollbackVersionAvailable',
            'degradeVersionAvailable' => 'setDegradeVersionAvailable',
            'publicIp' => 'setPublicIp',
            'port' => 'setPort',
            'createFailErrorCode' => 'setCreateFailErrorCode',
            'timeZone' => 'setTimeZone',
            'payModel' => 'setPayModel',
            'orderId' => 'setOrderId',
            'period' => 'setPeriod',
            'isFrozen' => 'setIsFrozen',
            'frozenTime' => 'setFrozenTime',
            'actions' => 'setActions',
            'onlyDefaultGroup' => 'setOnlyDefaultGroup',
            'groups' => 'setGroups',
            'extendMap' => 'setExtendMap',
            'tagsInfo' => 'setTagsInfo',
            'adminUserName' => 'setAdminUserName',
            'eipBindingInfo' => 'setEipBindingInfo',
            'enableSsl' => 'setEnableSsl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。
    * alias  实例别名。
    * projectId  项目ID。
    * clusterMode  集群模式。
    * status  状态。
    * bpdomainId  bpdomain_id
    * userId  账户ID。
    * datastoreVersion  数据库版本。
    * datastoreType  数据库类型。
    * createAt  创建时间。
    * updateAt  更新时间。
    * deleteAt  删除时间。
    * newVersionAvailable  是否有版本可升级。
    * rollbackVersionAvailable  是否有版本可回滚。
    * degradeVersionAvailable  是否有版本可降级。
    * publicIp  公共ip。
    * port  端口。
    * createFailErrorCode  创建失败原因编码。
    * timeZone  时区。
    * payModel  付费模式。
    * orderId  订单ID。
    * period  周期。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * actions  锁状态。
    * onlyDefaultGroup  是否只有默认组。
    * groups  组信息。
    * extendMap  其他信息。
    * tagsInfo  标签信息。
    * adminUserName  管理员账号。
    * eipBindingInfo  绑定eip信息。
    * enableSsl  是否支持ssl。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'alias' => 'getAlias',
            'projectId' => 'getProjectId',
            'clusterMode' => 'getClusterMode',
            'status' => 'getStatus',
            'bpdomainId' => 'getBpdomainId',
            'userId' => 'getUserId',
            'datastoreVersion' => 'getDatastoreVersion',
            'datastoreType' => 'getDatastoreType',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'deleteAt' => 'getDeleteAt',
            'newVersionAvailable' => 'getNewVersionAvailable',
            'rollbackVersionAvailable' => 'getRollbackVersionAvailable',
            'degradeVersionAvailable' => 'getDegradeVersionAvailable',
            'publicIp' => 'getPublicIp',
            'port' => 'getPort',
            'createFailErrorCode' => 'getCreateFailErrorCode',
            'timeZone' => 'getTimeZone',
            'payModel' => 'getPayModel',
            'orderId' => 'getOrderId',
            'period' => 'getPeriod',
            'isFrozen' => 'getIsFrozen',
            'frozenTime' => 'getFrozenTime',
            'actions' => 'getActions',
            'onlyDefaultGroup' => 'getOnlyDefaultGroup',
            'groups' => 'getGroups',
            'extendMap' => 'getExtendMap',
            'tagsInfo' => 'getTagsInfo',
            'adminUserName' => 'getAdminUserName',
            'eipBindingInfo' => 'getEipBindingInfo',
            'enableSsl' => 'getEnableSsl'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bpdomainId'] = isset($data['bpdomainId']) ? $data['bpdomainId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['deleteAt'] = isset($data['deleteAt']) ? $data['deleteAt'] : null;
        $this->container['newVersionAvailable'] = isset($data['newVersionAvailable']) ? $data['newVersionAvailable'] : null;
        $this->container['rollbackVersionAvailable'] = isset($data['rollbackVersionAvailable']) ? $data['rollbackVersionAvailable'] : null;
        $this->container['degradeVersionAvailable'] = isset($data['degradeVersionAvailable']) ? $data['degradeVersionAvailable'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['createFailErrorCode'] = isset($data['createFailErrorCode']) ? $data['createFailErrorCode'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['frozenTime'] = isset($data['frozenTime']) ? $data['frozenTime'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['onlyDefaultGroup'] = isset($data['onlyDefaultGroup']) ? $data['onlyDefaultGroup'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['extendMap'] = isset($data['extendMap']) ? $data['extendMap'] : null;
        $this->container['tagsInfo'] = isset($data['tagsInfo']) ? $data['tagsInfo'] : null;
        $this->container['adminUserName'] = isset($data['adminUserName']) ? $data['adminUserName'] : null;
        $this->container['eipBindingInfo'] = isset($data['eipBindingInfo']) ? $data['eipBindingInfo'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) < 0)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterMode']) && (mb_strlen($this->container['clusterMode']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'clusterMode', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['clusterMode']) && (mb_strlen($this->container['clusterMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bpdomainId']) && (mb_strlen($this->container['bpdomainId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bpdomainId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['bpdomainId']) && (mb_strlen($this->container['bpdomainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bpdomainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datastoreVersion']) && (mb_strlen($this->container['datastoreVersion']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'datastoreVersion', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['datastoreVersion']) && (mb_strlen($this->container['datastoreVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'datastoreVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datastoreType']) && (mb_strlen($this->container['datastoreType']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['datastoreType']) && (mb_strlen($this->container['datastoreType']) < 0)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createAt']) && (mb_strlen($this->container['createAt']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createAt', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createAt']) && (mb_strlen($this->container['createAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateAt']) && (mb_strlen($this->container['updateAt']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updateAt', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updateAt']) && (mb_strlen($this->container['updateAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleteAt']) && (mb_strlen($this->container['deleteAt']) > 214748364)) {
                $invalidProperties[] = "invalid value for 'deleteAt', the character length must be smaller than or equal to 214748364.";
            }
            if (!is_null($this->container['deleteAt']) && (mb_strlen($this->container['deleteAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'deleteAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) < 0)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createFailErrorCode']) && (mb_strlen($this->container['createFailErrorCode']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createFailErrorCode', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createFailErrorCode']) && (mb_strlen($this->container['createFailErrorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'createFailErrorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['payModel']) && (mb_strlen($this->container['payModel']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'payModel', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['payModel']) && (mb_strlen($this->container['payModel']) < 0)) {
                $invalidProperties[] = "invalid value for 'payModel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['period']) && ($this->container['period'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'period', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['period']) && ($this->container['period'] < 0)) {
                $invalidProperties[] = "invalid value for 'period', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frozenTime']) && (mb_strlen($this->container['frozenTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'frozenTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['frozenTime']) && (mb_strlen($this->container['frozenTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'frozenTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adminUserName']) && (mb_strlen($this->container['adminUserName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'adminUserName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['adminUserName']) && (mb_strlen($this->container['adminUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'adminUserName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enableSsl']) && ($this->container['enableSsl'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'enableSsl', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['enableSsl']) && ($this->container['enableSsl'] < 0)) {
                $invalidProperties[] = "invalid value for 'enableSsl', must be bigger than or equal to 0.";
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
    *  实例ID。
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
    * @param string|null $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  实例名称。
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
    * @param string|null $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets alias
    *  实例别名。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 实例别名。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
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
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets clusterMode
    *  集群模式。
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
    * @param string|null $clusterMode 集群模式。
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets status
    *  状态。
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
    * @param string|null $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets bpdomainId
    *  bpdomain_id
    *
    * @return string|null
    */
    public function getBpdomainId()
    {
        return $this->container['bpdomainId'];
    }

    /**
    * Sets bpdomainId
    *
    * @param string|null $bpdomainId bpdomain_id
    *
    * @return $this
    */
    public function setBpdomainId($bpdomainId)
    {
        $this->container['bpdomainId'] = $bpdomainId;
        return $this;
    }

    /**
    * Gets userId
    *  账户ID。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 账户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  数据库版本。
    *
    * @return string|null
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string|null $datastoreVersion 数据库版本。
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型。
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 数据库类型。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets deleteAt
    *  删除时间。
    *
    * @return string|null
    */
    public function getDeleteAt()
    {
        return $this->container['deleteAt'];
    }

    /**
    * Sets deleteAt
    *
    * @param string|null $deleteAt 删除时间。
    *
    * @return $this
    */
    public function setDeleteAt($deleteAt)
    {
        $this->container['deleteAt'] = $deleteAt;
        return $this;
    }

    /**
    * Gets newVersionAvailable
    *  是否有版本可升级。
    *
    * @return bool|null
    */
    public function getNewVersionAvailable()
    {
        return $this->container['newVersionAvailable'];
    }

    /**
    * Sets newVersionAvailable
    *
    * @param bool|null $newVersionAvailable 是否有版本可升级。
    *
    * @return $this
    */
    public function setNewVersionAvailable($newVersionAvailable)
    {
        $this->container['newVersionAvailable'] = $newVersionAvailable;
        return $this;
    }

    /**
    * Gets rollbackVersionAvailable
    *  是否有版本可回滚。
    *
    * @return bool|null
    */
    public function getRollbackVersionAvailable()
    {
        return $this->container['rollbackVersionAvailable'];
    }

    /**
    * Sets rollbackVersionAvailable
    *
    * @param bool|null $rollbackVersionAvailable 是否有版本可回滚。
    *
    * @return $this
    */
    public function setRollbackVersionAvailable($rollbackVersionAvailable)
    {
        $this->container['rollbackVersionAvailable'] = $rollbackVersionAvailable;
        return $this;
    }

    /**
    * Gets degradeVersionAvailable
    *  是否有版本可降级。
    *
    * @return bool|null
    */
    public function getDegradeVersionAvailable()
    {
        return $this->container['degradeVersionAvailable'];
    }

    /**
    * Sets degradeVersionAvailable
    *
    * @param bool|null $degradeVersionAvailable 是否有版本可降级。
    *
    * @return $this
    */
    public function setDegradeVersionAvailable($degradeVersionAvailable)
    {
        $this->container['degradeVersionAvailable'] = $degradeVersionAvailable;
        return $this;
    }

    /**
    * Gets publicIp
    *  公共ip。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 公共ip。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets port
    *  端口。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets createFailErrorCode
    *  创建失败原因编码。
    *
    * @return string|null
    */
    public function getCreateFailErrorCode()
    {
        return $this->container['createFailErrorCode'];
    }

    /**
    * Sets createFailErrorCode
    *
    * @param string|null $createFailErrorCode 创建失败原因编码。
    *
    * @return $this
    */
    public function setCreateFailErrorCode($createFailErrorCode)
    {
        $this->container['createFailErrorCode'] = $createFailErrorCode;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets payModel
    *  付费模式。
    *
    * @return string|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string|null $payModel 付费模式。
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets period
    *  周期。
    *
    * @return int|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int|null $period 周期。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets isFrozen
    *  是否冻结。
    *
    * @return bool|null
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param bool|null $isFrozen 是否冻结。
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets frozenTime
    *  冻结时间。
    *
    * @return string|null
    */
    public function getFrozenTime()
    {
        return $this->container['frozenTime'];
    }

    /**
    * Sets frozenTime
    *
    * @param string|null $frozenTime 冻结时间。
    *
    * @return $this
    */
    public function setFrozenTime($frozenTime)
    {
        $this->container['frozenTime'] = $frozenTime;
        return $this;
    }

    /**
    * Gets actions
    *  锁状态。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\ActionInfo[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\ActionInfo[]|null $actions 锁状态。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets onlyDefaultGroup
    *  是否只有默认组。
    *
    * @return bool|null
    */
    public function getOnlyDefaultGroup()
    {
        return $this->container['onlyDefaultGroup'];
    }

    /**
    * Sets onlyDefaultGroup
    *
    * @param bool|null $onlyDefaultGroup 是否只有默认组。
    *
    * @return $this
    */
    public function setOnlyDefaultGroup($onlyDefaultGroup)
    {
        $this->container['onlyDefaultGroup'] = $onlyDefaultGroup;
        return $this;
    }

    /**
    * Gets groups
    *  组信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DdmGroupInfo[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DdmGroupInfo[]|null $groups 组信息。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets extendMap
    *  其他信息。
    *
    * @return map[string,string]|null
    */
    public function getExtendMap()
    {
        return $this->container['extendMap'];
    }

    /**
    * Sets extendMap
    *
    * @param map[string,string]|null $extendMap 其他信息。
    *
    * @return $this
    */
    public function setExtendMap($extendMap)
    {
        $this->container['extendMap'] = $extendMap;
        return $this;
    }

    /**
    * Gets tagsInfo
    *  标签信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\TagsInfo[]|null
    */
    public function getTagsInfo()
    {
        return $this->container['tagsInfo'];
    }

    /**
    * Sets tagsInfo
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\TagsInfo[]|null $tagsInfo 标签信息。
    *
    * @return $this
    */
    public function setTagsInfo($tagsInfo)
    {
        $this->container['tagsInfo'] = $tagsInfo;
        return $this;
    }

    /**
    * Gets adminUserName
    *  管理员账号。
    *
    * @return string|null
    */
    public function getAdminUserName()
    {
        return $this->container['adminUserName'];
    }

    /**
    * Sets adminUserName
    *
    * @param string|null $adminUserName 管理员账号。
    *
    * @return $this
    */
    public function setAdminUserName($adminUserName)
    {
        $this->container['adminUserName'] = $adminUserName;
        return $this;
    }

    /**
    * Gets eipBindingInfo
    *  绑定eip信息。
    *
    * @return object|null
    */
    public function getEipBindingInfo()
    {
        return $this->container['eipBindingInfo'];
    }

    /**
    * Sets eipBindingInfo
    *
    * @param object|null $eipBindingInfo 绑定eip信息。
    *
    * @return $this
    */
    public function setEipBindingInfo($eipBindingInfo)
    {
        $this->container['eipBindingInfo'] = $eipBindingInfo;
        return $this;
    }

    /**
    * Gets enableSsl
    *  是否支持ssl。
    *
    * @return int|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param int|null $enableSsl 是否支持ssl。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
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

