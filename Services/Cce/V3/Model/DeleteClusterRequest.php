<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteClusterRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteClusterRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * deleteEfs  是否删除SFS Turbo（极速文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteEni  是否删除eni ports（原生弹性网卡）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteEvs  是否删除evs（云硬盘）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteNet  是否删除elb（弹性负载均衡）等集群Service/Ingress相关资源。 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteObs  是否删除obs（对象存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs  是否删除sfs（文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs30  是否删除sfs3.0（文件存储卷3.0）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * ltsReclaimPolicy  是否删除LTS LogStream（日志流）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * tobedeleted  是否使用包周期集群删除参数预置模式（仅对包周期集群生效）。  需要和其他删除选项参数一起使用，未指定的参数，则使用默认值。  使用该参数，集群不执行真正的删除，仅将本次请求的全部query参数都预置到集群数据库中，用于包周期集群退订时识别用户要删除的资源。  允许重复执行，覆盖预置的删除参数。  枚举取值： - true  (预置模式，仅预置query参数，不执行删除)
    * ondemandNodePolicy  集群下所有按需节点处理策略， 枚举取值： - delete (删除服务器) - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    * periodicNodePolicy  集群下所有包周期节点处理策略， 枚举取值： - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'deleteEfs' => 'string',
            'deleteEni' => 'string',
            'deleteEvs' => 'string',
            'deleteNet' => 'string',
            'deleteObs' => 'string',
            'deleteSfs' => 'string',
            'deleteSfs30' => 'string',
            'ltsReclaimPolicy' => 'string',
            'tobedeleted' => 'string',
            'ondemandNodePolicy' => 'string',
            'periodicNodePolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * deleteEfs  是否删除SFS Turbo（极速文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteEni  是否删除eni ports（原生弹性网卡）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteEvs  是否删除evs（云硬盘）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteNet  是否删除elb（弹性负载均衡）等集群Service/Ingress相关资源。 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteObs  是否删除obs（对象存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs  是否删除sfs（文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs30  是否删除sfs3.0（文件存储卷3.0）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * ltsReclaimPolicy  是否删除LTS LogStream（日志流）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * tobedeleted  是否使用包周期集群删除参数预置模式（仅对包周期集群生效）。  需要和其他删除选项参数一起使用，未指定的参数，则使用默认值。  使用该参数，集群不执行真正的删除，仅将本次请求的全部query参数都预置到集群数据库中，用于包周期集群退订时识别用户要删除的资源。  允许重复执行，覆盖预置的删除参数。  枚举取值： - true  (预置模式，仅预置query参数，不执行删除)
    * ondemandNodePolicy  集群下所有按需节点处理策略， 枚举取值： - delete (删除服务器) - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    * periodicNodePolicy  集群下所有包周期节点处理策略， 枚举取值： - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'deleteEfs' => null,
        'deleteEni' => null,
        'deleteEvs' => null,
        'deleteNet' => null,
        'deleteObs' => null,
        'deleteSfs' => null,
        'deleteSfs30' => null,
        'ltsReclaimPolicy' => null,
        'tobedeleted' => null,
        'ondemandNodePolicy' => null,
        'periodicNodePolicy' => null
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
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * deleteEfs  是否删除SFS Turbo（极速文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteEni  是否删除eni ports（原生弹性网卡）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteEvs  是否删除evs（云硬盘）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteNet  是否删除elb（弹性负载均衡）等集群Service/Ingress相关资源。 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteObs  是否删除obs（对象存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs  是否删除sfs（文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs30  是否删除sfs3.0（文件存储卷3.0）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * ltsReclaimPolicy  是否删除LTS LogStream（日志流）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * tobedeleted  是否使用包周期集群删除参数预置模式（仅对包周期集群生效）。  需要和其他删除选项参数一起使用，未指定的参数，则使用默认值。  使用该参数，集群不执行真正的删除，仅将本次请求的全部query参数都预置到集群数据库中，用于包周期集群退订时识别用户要删除的资源。  允许重复执行，覆盖预置的删除参数。  枚举取值： - true  (预置模式，仅预置query参数，不执行删除)
    * ondemandNodePolicy  集群下所有按需节点处理策略， 枚举取值： - delete (删除服务器) - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    * periodicNodePolicy  集群下所有包周期节点处理策略， 枚举取值： - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'deleteEfs' => 'delete_efs',
            'deleteEni' => 'delete_eni',
            'deleteEvs' => 'delete_evs',
            'deleteNet' => 'delete_net',
            'deleteObs' => 'delete_obs',
            'deleteSfs' => 'delete_sfs',
            'deleteSfs30' => 'delete_sfs30',
            'ltsReclaimPolicy' => 'lts_reclaim_policy',
            'tobedeleted' => 'tobedeleted',
            'ondemandNodePolicy' => 'ondemand_node_policy',
            'periodicNodePolicy' => 'periodic_node_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * deleteEfs  是否删除SFS Turbo（极速文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteEni  是否删除eni ports（原生弹性网卡）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteEvs  是否删除evs（云硬盘）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteNet  是否删除elb（弹性负载均衡）等集群Service/Ingress相关资源。 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteObs  是否删除obs（对象存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs  是否删除sfs（文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs30  是否删除sfs3.0（文件存储卷3.0）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * ltsReclaimPolicy  是否删除LTS LogStream（日志流）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * tobedeleted  是否使用包周期集群删除参数预置模式（仅对包周期集群生效）。  需要和其他删除选项参数一起使用，未指定的参数，则使用默认值。  使用该参数，集群不执行真正的删除，仅将本次请求的全部query参数都预置到集群数据库中，用于包周期集群退订时识别用户要删除的资源。  允许重复执行，覆盖预置的删除参数。  枚举取值： - true  (预置模式，仅预置query参数，不执行删除)
    * ondemandNodePolicy  集群下所有按需节点处理策略， 枚举取值： - delete (删除服务器) - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    * periodicNodePolicy  集群下所有包周期节点处理策略， 枚举取值： - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'deleteEfs' => 'setDeleteEfs',
            'deleteEni' => 'setDeleteEni',
            'deleteEvs' => 'setDeleteEvs',
            'deleteNet' => 'setDeleteNet',
            'deleteObs' => 'setDeleteObs',
            'deleteSfs' => 'setDeleteSfs',
            'deleteSfs30' => 'setDeleteSfs30',
            'ltsReclaimPolicy' => 'setLtsReclaimPolicy',
            'tobedeleted' => 'setTobedeleted',
            'ondemandNodePolicy' => 'setOndemandNodePolicy',
            'periodicNodePolicy' => 'setPeriodicNodePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * deleteEfs  是否删除SFS Turbo（极速文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteEni  是否删除eni ports（原生弹性网卡）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteEvs  是否删除evs（云硬盘）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteNet  是否删除elb（弹性负载均衡）等集群Service/Ingress相关资源。 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    * deleteObs  是否删除obs（对象存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs  是否删除sfs（文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * deleteSfs30  是否删除sfs3.0（文件存储卷3.0）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * ltsReclaimPolicy  是否删除LTS LogStream（日志流）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    * tobedeleted  是否使用包周期集群删除参数预置模式（仅对包周期集群生效）。  需要和其他删除选项参数一起使用，未指定的参数，则使用默认值。  使用该参数，集群不执行真正的删除，仅将本次请求的全部query参数都预置到集群数据库中，用于包周期集群退订时识别用户要删除的资源。  允许重复执行，覆盖预置的删除参数。  枚举取值： - true  (预置模式，仅预置query参数，不执行删除)
    * ondemandNodePolicy  集群下所有按需节点处理策略， 枚举取值： - delete (删除服务器) - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    * periodicNodePolicy  集群下所有包周期节点处理策略， 枚举取值： - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'deleteEfs' => 'getDeleteEfs',
            'deleteEni' => 'getDeleteEni',
            'deleteEvs' => 'getDeleteEvs',
            'deleteNet' => 'getDeleteNet',
            'deleteObs' => 'getDeleteObs',
            'deleteSfs' => 'getDeleteSfs',
            'deleteSfs30' => 'getDeleteSfs30',
            'ltsReclaimPolicy' => 'getLtsReclaimPolicy',
            'tobedeleted' => 'getTobedeleted',
            'ondemandNodePolicy' => 'getOndemandNodePolicy',
            'periodicNodePolicy' => 'getPeriodicNodePolicy'
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
    const DELETE_EFS_TRUE = 'true';
    const DELETE_EFS_BLOCK = 'block';
    const DELETE_EFS__TRY = 'try';
    const DELETE_EFS_FALSE = 'false';
    const DELETE_EFS_SKIP = 'skip';
    const DELETE_ENI_TRUE = 'true';
    const DELETE_ENI_BLOCK = 'block';
    const DELETE_ENI__TRY = 'try';
    const DELETE_ENI_FALSE = 'false';
    const DELETE_ENI_SKIP = 'skip';
    const DELETE_EVS_TRUE = 'true';
    const DELETE_EVS_BLOCK = 'block';
    const DELETE_EVS__TRY = 'try';
    const DELETE_EVS_FALSE = 'false';
    const DELETE_EVS_SKIP = 'skip';
    const DELETE_NET_TRUE = 'true';
    const DELETE_NET_BLOCK = 'block';
    const DELETE_NET__TRY = 'try';
    const DELETE_NET_FALSE = 'false';
    const DELETE_NET_SKIP = 'skip';
    const DELETE_OBS_TRUE = 'true';
    const DELETE_OBS_BLOCK = 'block';
    const DELETE_OBS__TRY = 'try';
    const DELETE_OBS_FALSE = 'false';
    const DELETE_OBS_SKIP = 'skip';
    const DELETE_SFS_TRUE = 'true';
    const DELETE_SFS_BLOCK = 'block';
    const DELETE_SFS__TRY = 'try';
    const DELETE_SFS_FALSE = 'false';
    const DELETE_SFS_SKIP = 'skip';
    const DELETE_SFS30_TRUE = 'true';
    const DELETE_SFS30_BLOCK = 'block';
    const DELETE_SFS30__TRY = 'try';
    const DELETE_SFS30_FALSE = 'false';
    const DELETE_SFS30_SKIP = 'skip';
    const LTS_RECLAIM_POLICY_TRUE = 'true';
    const LTS_RECLAIM_POLICY_BLOCK = 'block';
    const LTS_RECLAIM_POLICY__TRY = 'try';
    const LTS_RECLAIM_POLICY_FALSE = 'false';
    const LTS_RECLAIM_POLICY_SKIP = 'skip';
    const TOBEDELETED_TRUE = 'true';
    const ONDEMAND_NODE_POLICY_DELETE = 'delete';
    const ONDEMAND_NODE_POLICY_RESET = 'reset';
    const ONDEMAND_NODE_POLICY_RETAIN = 'retain';
    const PERIODIC_NODE_POLICY_RESET = 'reset';
    const PERIODIC_NODE_POLICY_RETAIN = 'retain';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteEfsAllowableValues()
    {
        return [
            self::DELETE_EFS_TRUE,
            self::DELETE_EFS_BLOCK,
            self::DELETE_EFS__TRY,
            self::DELETE_EFS_FALSE,
            self::DELETE_EFS_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteEniAllowableValues()
    {
        return [
            self::DELETE_ENI_TRUE,
            self::DELETE_ENI_BLOCK,
            self::DELETE_ENI__TRY,
            self::DELETE_ENI_FALSE,
            self::DELETE_ENI_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteEvsAllowableValues()
    {
        return [
            self::DELETE_EVS_TRUE,
            self::DELETE_EVS_BLOCK,
            self::DELETE_EVS__TRY,
            self::DELETE_EVS_FALSE,
            self::DELETE_EVS_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteNetAllowableValues()
    {
        return [
            self::DELETE_NET_TRUE,
            self::DELETE_NET_BLOCK,
            self::DELETE_NET__TRY,
            self::DELETE_NET_FALSE,
            self::DELETE_NET_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteObsAllowableValues()
    {
        return [
            self::DELETE_OBS_TRUE,
            self::DELETE_OBS_BLOCK,
            self::DELETE_OBS__TRY,
            self::DELETE_OBS_FALSE,
            self::DELETE_OBS_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteSfsAllowableValues()
    {
        return [
            self::DELETE_SFS_TRUE,
            self::DELETE_SFS_BLOCK,
            self::DELETE_SFS__TRY,
            self::DELETE_SFS_FALSE,
            self::DELETE_SFS_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteSfs30AllowableValues()
    {
        return [
            self::DELETE_SFS30_TRUE,
            self::DELETE_SFS30_BLOCK,
            self::DELETE_SFS30__TRY,
            self::DELETE_SFS30_FALSE,
            self::DELETE_SFS30_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLtsReclaimPolicyAllowableValues()
    {
        return [
            self::LTS_RECLAIM_POLICY_TRUE,
            self::LTS_RECLAIM_POLICY_BLOCK,
            self::LTS_RECLAIM_POLICY__TRY,
            self::LTS_RECLAIM_POLICY_FALSE,
            self::LTS_RECLAIM_POLICY_SKIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTobedeletedAllowableValues()
    {
        return [
            self::TOBEDELETED_TRUE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOndemandNodePolicyAllowableValues()
    {
        return [
            self::ONDEMAND_NODE_POLICY_DELETE,
            self::ONDEMAND_NODE_POLICY_RESET,
            self::ONDEMAND_NODE_POLICY_RETAIN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodicNodePolicyAllowableValues()
    {
        return [
            self::PERIODIC_NODE_POLICY_RESET,
            self::PERIODIC_NODE_POLICY_RETAIN,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['deleteEfs'] = isset($data['deleteEfs']) ? $data['deleteEfs'] : null;
        $this->container['deleteEni'] = isset($data['deleteEni']) ? $data['deleteEni'] : null;
        $this->container['deleteEvs'] = isset($data['deleteEvs']) ? $data['deleteEvs'] : null;
        $this->container['deleteNet'] = isset($data['deleteNet']) ? $data['deleteNet'] : null;
        $this->container['deleteObs'] = isset($data['deleteObs']) ? $data['deleteObs'] : null;
        $this->container['deleteSfs'] = isset($data['deleteSfs']) ? $data['deleteSfs'] : null;
        $this->container['deleteSfs30'] = isset($data['deleteSfs30']) ? $data['deleteSfs30'] : null;
        $this->container['ltsReclaimPolicy'] = isset($data['ltsReclaimPolicy']) ? $data['ltsReclaimPolicy'] : null;
        $this->container['tobedeleted'] = isset($data['tobedeleted']) ? $data['tobedeleted'] : null;
        $this->container['ondemandNodePolicy'] = isset($data['ondemandNodePolicy']) ? $data['ondemandNodePolicy'] : null;
        $this->container['periodicNodePolicy'] = isset($data['periodicNodePolicy']) ? $data['periodicNodePolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            $allowedValues = $this->getDeleteEfsAllowableValues();
                if (!is_null($this->container['deleteEfs']) && !in_array($this->container['deleteEfs'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteEfs', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeleteEniAllowableValues();
                if (!is_null($this->container['deleteEni']) && !in_array($this->container['deleteEni'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteEni', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeleteEvsAllowableValues();
                if (!is_null($this->container['deleteEvs']) && !in_array($this->container['deleteEvs'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteEvs', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeleteNetAllowableValues();
                if (!is_null($this->container['deleteNet']) && !in_array($this->container['deleteNet'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteNet', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeleteObsAllowableValues();
                if (!is_null($this->container['deleteObs']) && !in_array($this->container['deleteObs'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteObs', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeleteSfsAllowableValues();
                if (!is_null($this->container['deleteSfs']) && !in_array($this->container['deleteSfs'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteSfs', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeleteSfs30AllowableValues();
                if (!is_null($this->container['deleteSfs30']) && !in_array($this->container['deleteSfs30'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteSfs30', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLtsReclaimPolicyAllowableValues();
                if (!is_null($this->container['ltsReclaimPolicy']) && !in_array($this->container['ltsReclaimPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ltsReclaimPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTobedeletedAllowableValues();
                if (!is_null($this->container['tobedeleted']) && !in_array($this->container['tobedeleted'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tobedeleted', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOndemandNodePolicyAllowableValues();
                if (!is_null($this->container['ondemandNodePolicy']) && !in_array($this->container['ondemandNodePolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ondemandNodePolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPeriodicNodePolicyAllowableValues();
                if (!is_null($this->container['periodicNodePolicy']) && !in_array($this->container['periodicNodePolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodicNodePolicy', must be one of '%s'",
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
    * Gets clusterId
    *  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets deleteEfs
    *  是否删除SFS Turbo（极速文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return string|null
    */
    public function getDeleteEfs()
    {
        return $this->container['deleteEfs'];
    }

    /**
    * Sets deleteEfs
    *
    * @param string|null $deleteEfs 是否删除SFS Turbo（极速文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return $this
    */
    public function setDeleteEfs($deleteEfs)
    {
        $this->container['deleteEfs'] = $deleteEfs;
        return $this;
    }

    /**
    * Gets deleteEni
    *  是否删除eni ports（原生弹性网卡）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    *
    * @return string|null
    */
    public function getDeleteEni()
    {
        return $this->container['deleteEni'];
    }

    /**
    * Sets deleteEni
    *
    * @param string|null $deleteEni 是否删除eni ports（原生弹性网卡）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    *
    * @return $this
    */
    public function setDeleteEni($deleteEni)
    {
        $this->container['deleteEni'] = $deleteEni;
        return $this;
    }

    /**
    * Gets deleteEvs
    *  是否删除evs（云硬盘）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return string|null
    */
    public function getDeleteEvs()
    {
        return $this->container['deleteEvs'];
    }

    /**
    * Sets deleteEvs
    *
    * @param string|null $deleteEvs 是否删除evs（云硬盘）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return $this
    */
    public function setDeleteEvs($deleteEvs)
    {
        $this->container['deleteEvs'] = $deleteEvs;
        return $this;
    }

    /**
    * Gets deleteNet
    *  是否删除elb（弹性负载均衡）等集群Service/Ingress相关资源。 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    *
    * @return string|null
    */
    public function getDeleteNet()
    {
        return $this->container['deleteNet'];
    }

    /**
    * Sets deleteNet
    *
    * @param string|null $deleteNet 是否删除elb（弹性负载均衡）等集群Service/Ingress相关资源。 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程，默认选项) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程)
    *
    * @return $this
    */
    public function setDeleteNet($deleteNet)
    {
        $this->container['deleteNet'] = $deleteNet;
        return $this;
    }

    /**
    * Gets deleteObs
    *  是否删除obs（对象存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return string|null
    */
    public function getDeleteObs()
    {
        return $this->container['deleteObs'];
    }

    /**
    * Sets deleteObs
    *
    * @param string|null $deleteObs 是否删除obs（对象存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return $this
    */
    public function setDeleteObs($deleteObs)
    {
        $this->container['deleteObs'] = $deleteObs;
        return $this;
    }

    /**
    * Gets deleteSfs
    *  是否删除sfs（文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return string|null
    */
    public function getDeleteSfs()
    {
        return $this->container['deleteSfs'];
    }

    /**
    * Sets deleteSfs
    *
    * @param string|null $deleteSfs 是否删除sfs（文件存储卷）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return $this
    */
    public function setDeleteSfs($deleteSfs)
    {
        $this->container['deleteSfs'] = $deleteSfs;
        return $this;
    }

    /**
    * Gets deleteSfs30
    *  是否删除sfs3.0（文件存储卷3.0）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return string|null
    */
    public function getDeleteSfs30()
    {
        return $this->container['deleteSfs30'];
    }

    /**
    * Sets deleteSfs30
    *
    * @param string|null $deleteSfs30 是否删除sfs3.0（文件存储卷3.0）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return $this
    */
    public function setDeleteSfs30($deleteSfs30)
    {
        $this->container['deleteSfs30'] = $deleteSfs30;
        return $this;
    }

    /**
    * Gets ltsReclaimPolicy
    *  是否删除LTS LogStream（日志流）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return string|null
    */
    public function getLtsReclaimPolicy()
    {
        return $this->container['ltsReclaimPolicy'];
    }

    /**
    * Sets ltsReclaimPolicy
    *
    * @param string|null $ltsReclaimPolicy 是否删除LTS LogStream（日志流）， 枚举取值： - true或block (执行删除流程，失败则阻塞后续流程) - try (执行删除流程，失败则忽略，并继续执行后续流程) - false或skip (跳过删除流程，默认选项)
    *
    * @return $this
    */
    public function setLtsReclaimPolicy($ltsReclaimPolicy)
    {
        $this->container['ltsReclaimPolicy'] = $ltsReclaimPolicy;
        return $this;
    }

    /**
    * Gets tobedeleted
    *  是否使用包周期集群删除参数预置模式（仅对包周期集群生效）。  需要和其他删除选项参数一起使用，未指定的参数，则使用默认值。  使用该参数，集群不执行真正的删除，仅将本次请求的全部query参数都预置到集群数据库中，用于包周期集群退订时识别用户要删除的资源。  允许重复执行，覆盖预置的删除参数。  枚举取值： - true  (预置模式，仅预置query参数，不执行删除)
    *
    * @return string|null
    */
    public function getTobedeleted()
    {
        return $this->container['tobedeleted'];
    }

    /**
    * Sets tobedeleted
    *
    * @param string|null $tobedeleted 是否使用包周期集群删除参数预置模式（仅对包周期集群生效）。  需要和其他删除选项参数一起使用，未指定的参数，则使用默认值。  使用该参数，集群不执行真正的删除，仅将本次请求的全部query参数都预置到集群数据库中，用于包周期集群退订时识别用户要删除的资源。  允许重复执行，覆盖预置的删除参数。  枚举取值： - true  (预置模式，仅预置query参数，不执行删除)
    *
    * @return $this
    */
    public function setTobedeleted($tobedeleted)
    {
        $this->container['tobedeleted'] = $tobedeleted;
        return $this;
    }

    /**
    * Gets ondemandNodePolicy
    *  集群下所有按需节点处理策略， 枚举取值： - delete (删除服务器) - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @return string|null
    */
    public function getOndemandNodePolicy()
    {
        return $this->container['ondemandNodePolicy'];
    }

    /**
    * Sets ondemandNodePolicy
    *
    * @param string|null $ondemandNodePolicy 集群下所有按需节点处理策略， 枚举取值： - delete (删除服务器) - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @return $this
    */
    public function setOndemandNodePolicy($ondemandNodePolicy)
    {
        $this->container['ondemandNodePolicy'] = $ondemandNodePolicy;
        return $this;
    }

    /**
    * Gets periodicNodePolicy
    *  集群下所有包周期节点处理策略， 枚举取值： - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @return string|null
    */
    public function getPeriodicNodePolicy()
    {
        return $this->container['periodicNodePolicy'];
    }

    /**
    * Sets periodicNodePolicy
    *
    * @param string|null $periodicNodePolicy 集群下所有包周期节点处理策略， 枚举取值： - reset (保留服务器并重置服务器，数据不保留) - retain （保留服务器不重置服务器，数据保留）
    *
    * @return $this
    */
    public function setPeriodicNodePolicy($periodicNodePolicy)
    {
        $this->container['periodicNodePolicy'] = $periodicNodePolicy;
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

