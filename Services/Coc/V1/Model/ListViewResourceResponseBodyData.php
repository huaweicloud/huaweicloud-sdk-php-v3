<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListViewResourceResponseBodyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListViewResourceResponseBody_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** id。 **取值范围：** 不涉及。
    * viewId  **参数解释：** 视图id。 **取值范围：** 不涉及。
    * rmsResourceId  **参数解释：** 对应rms_resource集合中的id值。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 资源id。。 **取值范围：** 跨账号资源下且视图管理下对应的资源id。
    * domainId  **参数解释：** 租户id。 **取值范围：** 用户登录租户对应的账号ID。
    * name  **参数解释：** 资源名称。 **取值范围：** 视图下的资源名称。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * regionId  **参数解释：** 区域id。 **取值范围：** 不涉及。
    * tags  **参数解释：** 标签键值对。 **取值范围：** 不涉及。
    * properties  **参数解释：** 存储资源的附加字段信息，通常用于展示、筛选等。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性,描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * associatedGroupList  **参数解释：** 绑定的资源组信息列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'viewId' => 'string',
            'rmsResourceId' => 'string',
            'resourceId' => 'string',
            'domainId' => 'string',
            'name' => 'string',
            'epId' => 'string',
            'epName' => 'string',
            'projectId' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'regionId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Coc\V1\Model\ListViewResourceResponseBodyTags[]',
            'properties' => 'object',
            'ingestProperties' => 'object',
            'agentId' => 'string',
            'agentState' => 'string',
            'innerIp' => 'string',
            'associatedGroupList' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** id。 **取值范围：** 不涉及。
    * viewId  **参数解释：** 视图id。 **取值范围：** 不涉及。
    * rmsResourceId  **参数解释：** 对应rms_resource集合中的id值。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 资源id。。 **取值范围：** 跨账号资源下且视图管理下对应的资源id。
    * domainId  **参数解释：** 租户id。 **取值范围：** 用户登录租户对应的账号ID。
    * name  **参数解释：** 资源名称。 **取值范围：** 视图下的资源名称。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * regionId  **参数解释：** 区域id。 **取值范围：** 不涉及。
    * tags  **参数解释：** 标签键值对。 **取值范围：** 不涉及。
    * properties  **参数解释：** 存储资源的附加字段信息，通常用于展示、筛选等。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性,描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * associatedGroupList  **参数解释：** 绑定的资源组信息列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'viewId' => null,
        'rmsResourceId' => null,
        'resourceId' => null,
        'domainId' => null,
        'name' => null,
        'epId' => null,
        'epName' => null,
        'projectId' => null,
        'provider' => null,
        'type' => null,
        'regionId' => null,
        'tags' => null,
        'properties' => null,
        'ingestProperties' => null,
        'agentId' => null,
        'agentState' => null,
        'innerIp' => null,
        'associatedGroupList' => null
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
    * id  **参数解释：** id。 **取值范围：** 不涉及。
    * viewId  **参数解释：** 视图id。 **取值范围：** 不涉及。
    * rmsResourceId  **参数解释：** 对应rms_resource集合中的id值。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 资源id。。 **取值范围：** 跨账号资源下且视图管理下对应的资源id。
    * domainId  **参数解释：** 租户id。 **取值范围：** 用户登录租户对应的账号ID。
    * name  **参数解释：** 资源名称。 **取值范围：** 视图下的资源名称。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * regionId  **参数解释：** 区域id。 **取值范围：** 不涉及。
    * tags  **参数解释：** 标签键值对。 **取值范围：** 不涉及。
    * properties  **参数解释：** 存储资源的附加字段信息，通常用于展示、筛选等。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性,描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * associatedGroupList  **参数解释：** 绑定的资源组信息列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'viewId' => 'view_id',
            'rmsResourceId' => 'rms_resource_id',
            'resourceId' => 'resource_id',
            'domainId' => 'domain_id',
            'name' => 'name',
            'epId' => 'ep_id',
            'epName' => 'ep_name',
            'projectId' => 'project_id',
            'provider' => 'provider',
            'type' => 'type',
            'regionId' => 'region_id',
            'tags' => 'tags',
            'properties' => 'properties',
            'ingestProperties' => 'ingest_properties',
            'agentId' => 'agent_id',
            'agentState' => 'agent_state',
            'innerIp' => 'inner_ip',
            'associatedGroupList' => 'associated_group_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** id。 **取值范围：** 不涉及。
    * viewId  **参数解释：** 视图id。 **取值范围：** 不涉及。
    * rmsResourceId  **参数解释：** 对应rms_resource集合中的id值。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 资源id。。 **取值范围：** 跨账号资源下且视图管理下对应的资源id。
    * domainId  **参数解释：** 租户id。 **取值范围：** 用户登录租户对应的账号ID。
    * name  **参数解释：** 资源名称。 **取值范围：** 视图下的资源名称。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * regionId  **参数解释：** 区域id。 **取值范围：** 不涉及。
    * tags  **参数解释：** 标签键值对。 **取值范围：** 不涉及。
    * properties  **参数解释：** 存储资源的附加字段信息，通常用于展示、筛选等。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性,描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * associatedGroupList  **参数解释：** 绑定的资源组信息列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'viewId' => 'setViewId',
            'rmsResourceId' => 'setRmsResourceId',
            'resourceId' => 'setResourceId',
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'epId' => 'setEpId',
            'epName' => 'setEpName',
            'projectId' => 'setProjectId',
            'provider' => 'setProvider',
            'type' => 'setType',
            'regionId' => 'setRegionId',
            'tags' => 'setTags',
            'properties' => 'setProperties',
            'ingestProperties' => 'setIngestProperties',
            'agentId' => 'setAgentId',
            'agentState' => 'setAgentState',
            'innerIp' => 'setInnerIp',
            'associatedGroupList' => 'setAssociatedGroupList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** id。 **取值范围：** 不涉及。
    * viewId  **参数解释：** 视图id。 **取值范围：** 不涉及。
    * rmsResourceId  **参数解释：** 对应rms_resource集合中的id值。 **取值范围：** 不涉及。
    * resourceId  **参数解释：** 资源id。。 **取值范围：** 跨账号资源下且视图管理下对应的资源id。
    * domainId  **参数解释：** 租户id。 **取值范围：** 用户登录租户对应的账号ID。
    * name  **参数解释：** 资源名称。 **取值范围：** 视图下的资源名称。
    * epId  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。。
    * epName  **参数解释：** 企业项目名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** Openstack中的项目ID。 **取值范围：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * regionId  **参数解释：** 区域id。 **取值范围：** 不涉及。
    * tags  **参数解释：** 标签键值对。 **取值范围：** 不涉及。
    * properties  **参数解释：** 存储资源的附加字段信息，通常用于展示、筛选等。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性,描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * associatedGroupList  **参数解释：** 绑定的资源组信息列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'viewId' => 'getViewId',
            'rmsResourceId' => 'getRmsResourceId',
            'resourceId' => 'getResourceId',
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'epId' => 'getEpId',
            'epName' => 'getEpName',
            'projectId' => 'getProjectId',
            'provider' => 'getProvider',
            'type' => 'getType',
            'regionId' => 'getRegionId',
            'tags' => 'getTags',
            'properties' => 'getProperties',
            'ingestProperties' => 'getIngestProperties',
            'agentId' => 'getAgentId',
            'agentState' => 'getAgentState',
            'innerIp' => 'getInnerIp',
            'associatedGroupList' => 'getAssociatedGroupList'
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
        $this->container['viewId'] = isset($data['viewId']) ? $data['viewId'] : null;
        $this->container['rmsResourceId'] = isset($data['rmsResourceId']) ? $data['rmsResourceId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['epName'] = isset($data['epName']) ? $data['epName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['ingestProperties'] = isset($data['ingestProperties']) ? $data['ingestProperties'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
        $this->container['associatedGroupList'] = isset($data['associatedGroupList']) ? $data['associatedGroupList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['viewId']) && (mb_strlen($this->container['viewId']) > 32)) {
                $invalidProperties[] = "invalid value for 'viewId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['viewId']) && (mb_strlen($this->container['viewId']) < 1)) {
                $invalidProperties[] = "invalid value for 'viewId', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** id。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets viewId
    *  **参数解释：** 视图id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getViewId()
    {
        return $this->container['viewId'];
    }

    /**
    * Sets viewId
    *
    * @param string|null $viewId **参数解释：** 视图id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setViewId($viewId)
    {
        $this->container['viewId'] = $viewId;
        return $this;
    }

    /**
    * Gets rmsResourceId
    *  **参数解释：** 对应rms_resource集合中的id值。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRmsResourceId()
    {
        return $this->container['rmsResourceId'];
    }

    /**
    * Sets rmsResourceId
    *
    * @param string|null $rmsResourceId **参数解释：** 对应rms_resource集合中的id值。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRmsResourceId($rmsResourceId)
    {
        $this->container['rmsResourceId'] = $rmsResourceId;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释：** 资源id。。 **取值范围：** 跨账号资源下且视图管理下对应的资源id。
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
    * @param string|null $resourceId **参数解释：** 资源id。。 **取值范围：** 跨账号资源下且视图管理下对应的资源id。
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
    *  **参数解释：** 租户id。 **取值范围：** 用户登录租户对应的账号ID。
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
    * @param string|null $domainId **参数解释：** 租户id。 **取值范围：** 用户登录租户对应的账号ID。
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
    *  **参数解释：** 资源名称。 **取值范围：** 视图下的资源名称。
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
    * @param string|null $name **参数解释：** 资源名称。 **取值范围：** 视图下的资源名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets epId
    *  **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。。
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
    * @param string|null $epId **参数解释：** 企业项目ID。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。。
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
    *  **参数解释：** 企业项目名称。 **取值范围：** 不涉及。
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
    * @param string|null $epName **参数解释：** 企业项目名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEpName($epName)
    {
        $this->container['epName'] = $epName;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** Openstack中的项目ID。 **取值范围：** 不涉及。
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
    * @param string|null $projectId **参数解释：** Openstack中的项目ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets provider
    *  **参数解释：** 云服务名称。 **取值范围：** 不涉及。
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
    * @param string|null $provider **参数解释：** 云服务名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 资源类型。 **取值范围：** 不涉及。
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
    * @param string|null $type **参数解释：** 资源类型。 **取值范围：** 不涉及。
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
    *  **参数解释：** 区域id。 **取值范围：** 不涉及。
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
    * @param string|null $regionId **参数解释：** 区域id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 标签键值对。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ListViewResourceResponseBodyTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ListViewResourceResponseBodyTags[]|null $tags **参数解释：** 标签键值对。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets properties
    *  **参数解释：** 存储资源的附加字段信息，通常用于展示、筛选等。 **取值范围：** 不涉及。
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
    * @param object|null $properties **参数解释：** 存储资源的附加字段信息，通常用于展示、筛选等。 **取值范围：** 不涉及。
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
    *  **参数解释：** 数据采集属性,描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getIngestProperties()
    {
        return $this->container['ingestProperties'];
    }

    /**
    * Sets ingestProperties
    *
    * @param object|null $ingestProperties **参数解释：** 数据采集属性,描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIngestProperties($ingestProperties)
    {
        $this->container['ingestProperties'] = $ingestProperties;
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
    *  **参数解释：** uniagent的状态。 **取值范围：** 不涉及。
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
    * @param string|null $agentState **参数解释：** uniagent的状态。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAgentState($agentState)
    {
        $this->container['agentState'] = $agentState;
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
    * Gets associatedGroupList
    *  **参数解释：** 绑定的资源组信息列表。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getAssociatedGroupList()
    {
        return $this->container['associatedGroupList'];
    }

    /**
    * Sets associatedGroupList
    *
    * @param object|null $associatedGroupList **参数解释：** 绑定的资源组信息列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAssociatedGroupList($associatedGroupList)
    {
        $this->container['associatedGroupList'] = $associatedGroupList;
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

