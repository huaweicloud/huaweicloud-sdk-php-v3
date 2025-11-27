<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListResourceResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListResourceResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** CMDB分配的资源ID。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 云服务分配的资源ID。 **取值范围：** 字符串，长度在36个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符之间。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 字符串，长度1到64个字符之间。
    * type  **参数解释：** 资源类型。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 字符串，长度32个字符。
    * projectName  **参数解释：** region的子项目名称。 **取值范围：** 字符串，不超过255个字符。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度0到64个字符。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 由中文、英文字母、数字、下划线、中划线组成，且不能使用任何大小写形式的“default”，不超过255个字符。
    * tags  **参数解释：** 资源标签。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * properties  **参数解释：** 资源详细属性。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 采集属性。 **取值范围：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。
    * isAssociateGroup  **参数解释：** 是否已被指定分组关联。 **取值范围：** - true：已被指定分组关联。 - false：未被指定分组关联。
    * associatedGroupList  **参数解释：** 资源所关联的分组信息组成的列表。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 修改时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'resourceId' => 'string',
            'domainId' => 'string',
            'name' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'regionId' => 'string',
            'epId' => 'string',
            'epName' => 'string',
            'tags' => '\HuaweiCloud\SDK\Coc\V1\Model\TagResponse[]',
            'agentId' => 'string',
            'agentState' => 'string',
            'properties' => 'object',
            'ingestProperties' => 'map[string,string]',
            'isDelegated' => 'bool',
            'innerIp' => 'string',
            'operable' => 'string',
            'isAssociateGroup' => 'bool',
            'associatedGroupList' => 'string[]',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** CMDB分配的资源ID。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 云服务分配的资源ID。 **取值范围：** 字符串，长度在36个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符之间。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 字符串，长度1到64个字符之间。
    * type  **参数解释：** 资源类型。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 字符串，长度32个字符。
    * projectName  **参数解释：** region的子项目名称。 **取值范围：** 字符串，不超过255个字符。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度0到64个字符。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 由中文、英文字母、数字、下划线、中划线组成，且不能使用任何大小写形式的“default”，不超过255个字符。
    * tags  **参数解释：** 资源标签。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * properties  **参数解释：** 资源详细属性。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 采集属性。 **取值范围：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。
    * isAssociateGroup  **参数解释：** 是否已被指定分组关联。 **取值范围：** - true：已被指定分组关联。 - false：未被指定分组关联。
    * associatedGroupList  **参数解释：** 资源所关联的分组信息组成的列表。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 修改时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'resourceId' => null,
        'domainId' => null,
        'name' => null,
        'provider' => null,
        'type' => null,
        'projectId' => null,
        'projectName' => null,
        'regionId' => null,
        'epId' => null,
        'epName' => null,
        'tags' => null,
        'agentId' => null,
        'agentState' => null,
        'properties' => null,
        'ingestProperties' => null,
        'isDelegated' => null,
        'innerIp' => null,
        'operable' => null,
        'isAssociateGroup' => null,
        'associatedGroupList' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * id  **参数解释：** CMDB分配的资源ID。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 云服务分配的资源ID。 **取值范围：** 字符串，长度在36个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符之间。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 字符串，长度1到64个字符之间。
    * type  **参数解释：** 资源类型。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 字符串，长度32个字符。
    * projectName  **参数解释：** region的子项目名称。 **取值范围：** 字符串，不超过255个字符。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度0到64个字符。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 由中文、英文字母、数字、下划线、中划线组成，且不能使用任何大小写形式的“default”，不超过255个字符。
    * tags  **参数解释：** 资源标签。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * properties  **参数解释：** 资源详细属性。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 采集属性。 **取值范围：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。
    * isAssociateGroup  **参数解释：** 是否已被指定分组关联。 **取值范围：** - true：已被指定分组关联。 - false：未被指定分组关联。
    * associatedGroupList  **参数解释：** 资源所关联的分组信息组成的列表。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 修改时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'resourceId' => 'resource_id',
            'domainId' => 'domain_id',
            'name' => 'name',
            'provider' => 'provider',
            'type' => 'type',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'regionId' => 'region_id',
            'epId' => 'ep_id',
            'epName' => 'ep_name',
            'tags' => 'tags',
            'agentId' => 'agent_id',
            'agentState' => 'agent_state',
            'properties' => 'properties',
            'ingestProperties' => 'ingest_properties',
            'isDelegated' => 'is_delegated',
            'innerIp' => 'inner_ip',
            'operable' => 'operable',
            'isAssociateGroup' => 'is_associate_group',
            'associatedGroupList' => 'associated_group_list',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** CMDB分配的资源ID。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 云服务分配的资源ID。 **取值范围：** 字符串，长度在36个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符之间。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 字符串，长度1到64个字符之间。
    * type  **参数解释：** 资源类型。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 字符串，长度32个字符。
    * projectName  **参数解释：** region的子项目名称。 **取值范围：** 字符串，不超过255个字符。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度0到64个字符。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 由中文、英文字母、数字、下划线、中划线组成，且不能使用任何大小写形式的“default”，不超过255个字符。
    * tags  **参数解释：** 资源标签。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * properties  **参数解释：** 资源详细属性。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 采集属性。 **取值范围：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。
    * isAssociateGroup  **参数解释：** 是否已被指定分组关联。 **取值范围：** - true：已被指定分组关联。 - false：未被指定分组关联。
    * associatedGroupList  **参数解释：** 资源所关联的分组信息组成的列表。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 修改时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'resourceId' => 'setResourceId',
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'provider' => 'setProvider',
            'type' => 'setType',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'regionId' => 'setRegionId',
            'epId' => 'setEpId',
            'epName' => 'setEpName',
            'tags' => 'setTags',
            'agentId' => 'setAgentId',
            'agentState' => 'setAgentState',
            'properties' => 'setProperties',
            'ingestProperties' => 'setIngestProperties',
            'isDelegated' => 'setIsDelegated',
            'innerIp' => 'setInnerIp',
            'operable' => 'setOperable',
            'isAssociateGroup' => 'setIsAssociateGroup',
            'associatedGroupList' => 'setAssociatedGroupList',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** CMDB分配的资源ID。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 云服务分配的资源ID。 **取值范围：** 字符串，长度在36个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符之间。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 字符串，长度1到64个字符之间。
    * type  **参数解释：** 资源类型。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 字符串，长度32个字符。
    * projectName  **参数解释：** region的子项目名称。 **取值范围：** 字符串，不超过255个字符。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度0到64个字符。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 由中文、英文字母、数字、下划线、中划线组成，且不能使用任何大小写形式的“default”，不超过255个字符。
    * tags  **参数解释：** 资源标签。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * properties  **参数解释：** 资源详细属性。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 采集属性。 **取值范围：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。
    * isAssociateGroup  **参数解释：** 是否已被指定分组关联。 **取值范围：** - true：已被指定分组关联。 - false：未被指定分组关联。
    * associatedGroupList  **参数解释：** 资源所关联的分组信息组成的列表。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 修改时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'resourceId' => 'getResourceId',
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'provider' => 'getProvider',
            'type' => 'getType',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'regionId' => 'getRegionId',
            'epId' => 'getEpId',
            'epName' => 'getEpName',
            'tags' => 'getTags',
            'agentId' => 'getAgentId',
            'agentState' => 'getAgentState',
            'properties' => 'getProperties',
            'ingestProperties' => 'getIngestProperties',
            'isDelegated' => 'getIsDelegated',
            'innerIp' => 'getInnerIp',
            'operable' => 'getOperable',
            'isAssociateGroup' => 'getIsAssociateGroup',
            'associatedGroupList' => 'getAssociatedGroupList',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const AGENT_STATE_ONLINE = 'ONLINE';
    const AGENT_STATE_OFFLINE = 'OFFLINE';
    const AGENT_STATE_INSTALLING = 'INSTALLING';
    const AGENT_STATE_FAILED = 'FAILED';
    const AGENT_STATE_UNINSTALLED = 'UNINSTALLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgentStateAllowableValues()
    {
        return [
            self::AGENT_STATE_ONLINE,
            self::AGENT_STATE_OFFLINE,
            self::AGENT_STATE_INSTALLING,
            self::AGENT_STATE_FAILED,
            self::AGENT_STATE_UNINSTALLED,
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['epName'] = isset($data['epName']) ? $data['epName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['ingestProperties'] = isset($data['ingestProperties']) ? $data['ingestProperties'] : null;
        $this->container['isDelegated'] = isset($data['isDelegated']) ? $data['isDelegated'] : null;
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
        $this->container['operable'] = isset($data['operable']) ? $data['operable'] : null;
        $this->container['isAssociateGroup'] = isset($data['isAssociateGroup']) ? $data['isAssociateGroup'] : null;
        $this->container['associatedGroupList'] = isset($data['associatedGroupList']) ? $data['associatedGroupList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) > 64)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) < 1)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['epId']) && (mb_strlen($this->container['epId']) > 36)) {
                $invalidProperties[] = "invalid value for 'epId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['epId']) && (mb_strlen($this->container['epId']) < 0)) {
                $invalidProperties[] = "invalid value for 'epId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['epName']) && (mb_strlen($this->container['epName']) > 255)) {
                $invalidProperties[] = "invalid value for 'epName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['epName']) && (mb_strlen($this->container['epName']) < 1)) {
                $invalidProperties[] = "invalid value for 'epName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getAgentStateAllowableValues();
                if (!is_null($this->container['agentState']) && !in_array($this->container['agentState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agentState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['innerIp']) && !preg_match("/^(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['innerIp'])) {
                $invalidProperties[] = "invalid value for 'innerIp', must be conform to the pattern /^(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
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
    *  **参数解释：** CMDB分配的资源ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** CMDB分配的资源ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释：** 云服务分配的资源ID。 **取值范围：** 字符串，长度在36个字符。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释：** 云服务分配的资源ID。 **取值范围：** 字符串，长度在36个字符。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 租户id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释：** 租户id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符之间。
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
    * @param string|null $name **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符之间。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets provider
    *  **参数解释：** 云服务名称。 **取值范围：** 字符串，长度1到64个字符之间。
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider **参数解释：** 云服务名称。 **取值范围：** 字符串，长度1到64个字符之间。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 资源类型。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。
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
    * @param string|null $type **参数解释：** 资源类型。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** Openstack中的项目ID。 **取值范围：** 字符串，长度32个字符。
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
    * @param string|null $projectId **参数解释：** Openstack中的项目ID。 **取值范围：** 字符串，长度32个字符。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** region的子项目名称。 **取值范围：** 字符串，不超过255个字符。
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
    * @param string|null $projectName **参数解释：** region的子项目名称。 **取值范围：** 字符串，不超过255个字符。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets regionId
    *  **参数解释：** 区域id。 **取值范围：** 字符串，长度0到64个字符。
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
    * @param string|null $regionId **参数解释：** 区域id。 **取值范围：** 字符串，长度0到64个字符。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets epId
    *  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets epName
    *  **参数解释：** 企业项目名称。 **取值范围：** 由中文、英文字母、数字、下划线、中划线组成，且不能使用任何大小写形式的“default”，不超过255个字符。
    *
    * @return string|null
    */
    public function getEpName()
    {
        return $this->container['epName'];
    }

    /**
    * Sets epName
    *
    * @param string|null $epName **参数解释：** 企业项目名称。 **取值范围：** 由中文、英文字母、数字、下划线、中划线组成，且不能使用任何大小写形式的“default”，不超过255个字符。
    *
    * @return $this
    */
    public function setEpName($epName)
    {
        $this->container['epName'] = $epName;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 资源标签。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TagResponse[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TagResponse[]|null $tags **参数解释：** 资源标签。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
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
    * @param string|null $agentId **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentState
    *  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    *
    * @return string|null
    */
    public function getAgentState()
    {
        return $this->container['agentState'];
    }

    /**
    * Sets agentState
    *
    * @param string|null $agentState **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    *
    * @return $this
    */
    public function setAgentState($agentState)
    {
        $this->container['agentState'] = $agentState;
        return $this;
    }

    /**
    * Gets properties
    *  **参数解释：** 资源详细属性。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param object|null $properties **参数解释：** 资源详细属性。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets ingestProperties
    *  **参数解释：** 采集属性。 **取值范围：** 不涉及。
    *
    * @return map[string,string]|null
    */
    public function getIngestProperties()
    {
        return $this->container['ingestProperties'];
    }

    /**
    * Sets ingestProperties
    *
    * @param map[string,string]|null $ingestProperties **参数解释：** 采集属性。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIngestProperties($ingestProperties)
    {
        $this->container['ingestProperties'] = $ingestProperties;
        return $this;
    }

    /**
    * Gets isDelegated
    *  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    *
    * @return bool|null
    */
    public function getIsDelegated()
    {
        return $this->container['isDelegated'];
    }

    /**
    * Sets isDelegated
    *
    * @param bool|null $isDelegated **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    *
    * @return $this
    */
    public function setIsDelegated($isDelegated)
    {
        $this->container['isDelegated'] = $isDelegated;
        return $this;
    }

    /**
    * Gets innerIp
    *  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getInnerIp()
    {
        return $this->container['innerIp'];
    }

    /**
    * Sets innerIp
    *
    * @param string|null $innerIp **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInnerIp($innerIp)
    {
        $this->container['innerIp'] = $innerIp;
        return $this;
    }

    /**
    * Gets operable
    *  **参数解释：** 用户定义资源是否可运维实例。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。
    *
    * @return string|null
    */
    public function getOperable()
    {
        return $this->container['operable'];
    }

    /**
    * Sets operable
    *
    * @param string|null $operable **参数解释：** 用户定义资源是否可运维实例。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。
    *
    * @return $this
    */
    public function setOperable($operable)
    {
        $this->container['operable'] = $operable;
        return $this;
    }

    /**
    * Gets isAssociateGroup
    *  **参数解释：** 是否已被指定分组关联。 **取值范围：** - true：已被指定分组关联。 - false：未被指定分组关联。
    *
    * @return bool|null
    */
    public function getIsAssociateGroup()
    {
        return $this->container['isAssociateGroup'];
    }

    /**
    * Sets isAssociateGroup
    *
    * @param bool|null $isAssociateGroup **参数解释：** 是否已被指定分组关联。 **取值范围：** - true：已被指定分组关联。 - false：未被指定分组关联。
    *
    * @return $this
    */
    public function setIsAssociateGroup($isAssociateGroup)
    {
        $this->container['isAssociateGroup'] = $isAssociateGroup;
        return $this;
    }

    /**
    * Gets associatedGroupList
    *  **参数解释：** 资源所关联的分组信息组成的列表。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getAssociatedGroupList()
    {
        return $this->container['associatedGroupList'];
    }

    /**
    * Sets associatedGroupList
    *
    * @param string[]|null $associatedGroupList **参数解释：** 资源所关联的分组信息组成的列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAssociatedGroupList($associatedGroupList)
    {
        $this->container['associatedGroupList'] = $associatedGroupList;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 创建时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
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
    * @param \DateTime|null $createTime **参数解释：** 创建时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释：** 修改时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime **参数解释：** 修改时间，参考ISO8601标准格式。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

