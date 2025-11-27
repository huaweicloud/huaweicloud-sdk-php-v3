<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupOtherResourceRelationQueryResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupOtherResourceRelationQueryResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** CMDB生成uuid。 **取值范围：** 不涉及。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串，长度32个字符。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 资源id。 **取值范围：** 字符串，长度36个字符。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符串。
    * type  **参数解释：** 资源类型。 **取值范围：** - PM：物理机。 - VM：虚拟机。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * isHost  **参数解释：** 是否为主机。 **取值范围：** - true：为主机。 - false： 非主机。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 字符串，长度在0到24个字符之间。
    * description  **参数解释：** 描述。 **取值范围：** 字符串，长度在1到256个字符之间。
    * properties  **参数解释：** 属性信息。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性，描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * xrn  **参数解释：** 设备标识。 **取值范围：** 字符串，长度3到50个字符之间。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'cmdbResourceId' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'resourceId' => 'string',
            'name' => 'string',
            'type' => 'string',
            'isDelegated' => 'bool',
            'regionId' => 'string',
            'innerIp' => 'string',
            'zoneId' => 'string',
            'isHost' => 'bool',
            'agentId' => 'string',
            'agentState' => 'string',
            'datasource' => 'string',
            'description' => 'string',
            'properties' => 'map[string,object]',
            'ingestProperties' => 'map[string,object]',
            'xrn' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** CMDB生成uuid。 **取值范围：** 不涉及。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串，长度32个字符。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 资源id。 **取值范围：** 字符串，长度36个字符。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符串。
    * type  **参数解释：** 资源类型。 **取值范围：** - PM：物理机。 - VM：虚拟机。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * isHost  **参数解释：** 是否为主机。 **取值范围：** - true：为主机。 - false： 非主机。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 字符串，长度在0到24个字符之间。
    * description  **参数解释：** 描述。 **取值范围：** 字符串，长度在1到256个字符之间。
    * properties  **参数解释：** 属性信息。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性，描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * xrn  **参数解释：** 设备标识。 **取值范围：** 字符串，长度3到50个字符之间。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'cmdbResourceId' => null,
        'groupId' => null,
        'groupName' => null,
        'resourceId' => null,
        'name' => null,
        'type' => null,
        'isDelegated' => null,
        'regionId' => null,
        'innerIp' => null,
        'zoneId' => null,
        'isHost' => null,
        'agentId' => null,
        'agentState' => null,
        'datasource' => null,
        'description' => null,
        'properties' => null,
        'ingestProperties' => null,
        'xrn' => null,
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
    * id  **参数解释：** CMDB生成uuid。 **取值范围：** 不涉及。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串，长度32个字符。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 资源id。 **取值范围：** 字符串，长度36个字符。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符串。
    * type  **参数解释：** 资源类型。 **取值范围：** - PM：物理机。 - VM：虚拟机。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * isHost  **参数解释：** 是否为主机。 **取值范围：** - true：为主机。 - false： 非主机。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 字符串，长度在0到24个字符之间。
    * description  **参数解释：** 描述。 **取值范围：** 字符串，长度在1到256个字符之间。
    * properties  **参数解释：** 属性信息。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性，描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * xrn  **参数解释：** 设备标识。 **取值范围：** 字符串，长度3到50个字符之间。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'cmdbResourceId' => 'cmdb_resource_id',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'resourceId' => 'resource_id',
            'name' => 'name',
            'type' => 'type',
            'isDelegated' => 'is_delegated',
            'regionId' => 'region_id',
            'innerIp' => 'inner_ip',
            'zoneId' => 'zone_id',
            'isHost' => 'is_host',
            'agentId' => 'agent_id',
            'agentState' => 'agent_state',
            'datasource' => 'datasource',
            'description' => 'description',
            'properties' => 'properties',
            'ingestProperties' => 'ingest_properties',
            'xrn' => 'xrn',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** CMDB生成uuid。 **取值范围：** 不涉及。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串，长度32个字符。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 资源id。 **取值范围：** 字符串，长度36个字符。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符串。
    * type  **参数解释：** 资源类型。 **取值范围：** - PM：物理机。 - VM：虚拟机。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * isHost  **参数解释：** 是否为主机。 **取值范围：** - true：为主机。 - false： 非主机。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 字符串，长度在0到24个字符之间。
    * description  **参数解释：** 描述。 **取值范围：** 字符串，长度在1到256个字符之间。
    * properties  **参数解释：** 属性信息。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性，描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * xrn  **参数解释：** 设备标识。 **取值范围：** 字符串，长度3到50个字符之间。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'cmdbResourceId' => 'setCmdbResourceId',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'resourceId' => 'setResourceId',
            'name' => 'setName',
            'type' => 'setType',
            'isDelegated' => 'setIsDelegated',
            'regionId' => 'setRegionId',
            'innerIp' => 'setInnerIp',
            'zoneId' => 'setZoneId',
            'isHost' => 'setIsHost',
            'agentId' => 'setAgentId',
            'agentState' => 'setAgentState',
            'datasource' => 'setDatasource',
            'description' => 'setDescription',
            'properties' => 'setProperties',
            'ingestProperties' => 'setIngestProperties',
            'xrn' => 'setXrn',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** CMDB生成uuid。 **取值范围：** 不涉及。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串，长度32个字符。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 资源id。 **取值范围：** 字符串，长度36个字符。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符串。
    * type  **参数解释：** 资源类型。 **取值范围：** - PM：物理机。 - VM：虚拟机。
    * isDelegated  **参数解释：** 是否已托管。 **取值范围：** - true：已经托管。 - false：未托管。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * isHost  **参数解释：** 是否为主机。 **取值范围：** - true：为主机。 - false： 非主机。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 字符串，长度在0到24个字符之间。
    * description  **参数解释：** 描述。 **取值范围：** 字符串，长度在1到256个字符之间。
    * properties  **参数解释：** 属性信息。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性，描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    * xrn  **参数解释：** 设备标识。 **取值范围：** 字符串，长度3到50个字符之间。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'cmdbResourceId' => 'getCmdbResourceId',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'resourceId' => 'getResourceId',
            'name' => 'getName',
            'type' => 'getType',
            'isDelegated' => 'getIsDelegated',
            'regionId' => 'getRegionId',
            'innerIp' => 'getInnerIp',
            'zoneId' => 'getZoneId',
            'isHost' => 'getIsHost',
            'agentId' => 'getAgentId',
            'agentState' => 'getAgentState',
            'datasource' => 'getDatasource',
            'description' => 'getDescription',
            'properties' => 'getProperties',
            'ingestProperties' => 'getIngestProperties',
            'xrn' => 'getXrn',
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
    const TYPE_PM = 'PM';
    const TYPE_VM = 'VM';
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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PM,
            self::TYPE_VM,
        ];
    }

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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['cmdbResourceId'] = isset($data['cmdbResourceId']) ? $data['cmdbResourceId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isDelegated'] = isset($data['isDelegated']) ? $data['isDelegated'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['isHost'] = isset($data['isHost']) ? $data['isHost'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['datasource'] = isset($data['datasource']) ? $data['datasource'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['ingestProperties'] = isset($data['ingestProperties']) ? $data['ingestProperties'] : null;
        $this->container['xrn'] = isset($data['xrn']) ? $data['xrn'] : null;
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
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 60)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 3)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['innerIp']) && !preg_match("/^(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['innerIp'])) {
                $invalidProperties[] = "invalid value for 'innerIp', must be conform to the pattern /^(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
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

            if (!is_null($this->container['datasource']) && (mb_strlen($this->container['datasource']) > 24)) {
                $invalidProperties[] = "invalid value for 'datasource', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['datasource']) && (mb_strlen($this->container['datasource']) < 0)) {
                $invalidProperties[] = "invalid value for 'datasource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xrn']) && (mb_strlen($this->container['xrn']) > 50)) {
                $invalidProperties[] = "invalid value for 'xrn', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['xrn']) && (mb_strlen($this->container['xrn']) < 3)) {
                $invalidProperties[] = "invalid value for 'xrn', the character length must be bigger than or equal to 3.";
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
    *  **参数解释：** CMDB生成uuid。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** CMDB生成uuid。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 租户id。 **取值范围：** 字符串，长度32个字符。
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
    * @param string|null $domainId **参数解释：** 租户id。 **取值范围：** 字符串，长度32个字符。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets cmdbResourceId
    *  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCmdbResourceId()
    {
        return $this->container['cmdbResourceId'];
    }

    /**
    * Sets cmdbResourceId
    *
    * @param string|null $cmdbResourceId **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCmdbResourceId($cmdbResourceId)
    {
        $this->container['cmdbResourceId'] = $cmdbResourceId;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释：** 资源id。 **取值范围：** 字符串，长度36个字符。
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
    * @param string|null $resourceId **参数解释：** 资源id。 **取值范围：** 字符串，长度36个字符。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符串。
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
    * @param string|null $name **参数解释：** 资源名称。 **取值范围：** 字符串，长度3到50个字符串。
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
    *  **参数解释：** 资源类型。 **取值范围：** - PM：物理机。 - VM：虚拟机。
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
    * @param string|null $type **参数解释：** 资源类型。 **取值范围：** - PM：物理机。 - VM：虚拟机。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets regionId
    *  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
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
    * @param string|null $regionId **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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
    * Gets zoneId
    *  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getZoneId()
    {
        return $this->container['zoneId'];
    }

    /**
    * Sets zoneId
    *
    * @param string|null $zoneId **参数解释：** 可用区id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets isHost
    *  **参数解释：** 是否为主机。 **取值范围：** - true：为主机。 - false： 非主机。
    *
    * @return bool|null
    */
    public function getIsHost()
    {
        return $this->container['isHost'];
    }

    /**
    * Sets isHost
    *
    * @param bool|null $isHost **参数解释：** 是否为主机。 **取值范围：** - true：为主机。 - false： 非主机。
    *
    * @return $this
    */
    public function setIsHost($isHost)
    {
        $this->container['isHost'] = $isHost;
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
    * Gets datasource
    *  **参数解释：** 云厂商账户id。 **取值范围：** 字符串，长度在0到24个字符之间。
    *
    * @return string|null
    */
    public function getDatasource()
    {
        return $this->container['datasource'];
    }

    /**
    * Sets datasource
    *
    * @param string|null $datasource **参数解释：** 云厂商账户id。 **取值范围：** 字符串，长度在0到24个字符之间。
    *
    * @return $this
    */
    public function setDatasource($datasource)
    {
        $this->container['datasource'] = $datasource;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述。 **取值范围：** 字符串，长度在1到256个字符之间。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述。 **取值范围：** 字符串，长度在1到256个字符之间。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets properties
    *  **参数解释：** 属性信息。 **取值范围：** 不涉及。
    *
    * @return map[string,object]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,object]|null $properties **参数解释：** 属性信息。 **取值范围：** 不涉及。
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
    *  **参数解释：** 数据采集属性，描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    *
    * @return map[string,object]|null
    */
    public function getIngestProperties()
    {
        return $this->container['ingestProperties'];
    }

    /**
    * Sets ingestProperties
    *
    * @param map[string,object]|null $ingestProperties **参数解释：** 数据采集属性，描述视图系统采集该资源时所记录的附加信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIngestProperties($ingestProperties)
    {
        $this->container['ingestProperties'] = $ingestProperties;
        return $this;
    }

    /**
    * Gets xrn
    *  **参数解释：** 设备标识。 **取值范围：** 字符串，长度3到50个字符之间。
    *
    * @return string|null
    */
    public function getXrn()
    {
        return $this->container['xrn'];
    }

    /**
    * Sets xrn
    *
    * @param string|null $xrn **参数解释：** 设备标识。 **取值范围：** 字符串，长度3到50个字符之间。
    *
    * @return $this
    */
    public function setXrn($xrn)
    {
        $this->container['xrn'] = $xrn;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 创建时间。 **取值范围：** 不涉及。
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
    * @param \DateTime|null $createTime **参数解释：** 创建时间。 **取值范围：** 不涉及。
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
    *  **参数解释：** 更新时间。 **取值范围：** 不涉及。
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
    * @param \DateTime|null $updateTime **参数解释：** 更新时间。 **取值范围：** 不涉及。
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

