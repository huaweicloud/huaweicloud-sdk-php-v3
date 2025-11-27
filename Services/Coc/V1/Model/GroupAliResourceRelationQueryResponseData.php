<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupAliResourceRelationQueryResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupAliResourceRelationQueryResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 分组资源关联的id。 **取值范围：** 不涉及。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 在阿里云存的资源id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * createTime  **参数解释：** 资源创建时间。 **取值范围：** 不涉及。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cmdbResourceId' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'resourceId' => 'string',
            'name' => 'string',
            'type' => 'string',
            'ingestProperties' => 'object',
            'zoneId' => 'string',
            'innerIp' => 'string',
            'agentId' => 'string',
            'agentState' => 'string',
            'regionId' => 'string',
            'createTime' => 'string',
            'datasource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 分组资源关联的id。 **取值范围：** 不涉及。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 在阿里云存的资源id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * createTime  **参数解释：** 资源创建时间。 **取值范围：** 不涉及。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cmdbResourceId' => null,
        'groupId' => null,
        'groupName' => null,
        'resourceId' => null,
        'name' => null,
        'type' => null,
        'ingestProperties' => null,
        'zoneId' => null,
        'innerIp' => null,
        'agentId' => null,
        'agentState' => null,
        'regionId' => null,
        'createTime' => 'data-time',
        'datasource' => null
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
    * id  **参数解释：** 分组资源关联的id。 **取值范围：** 不涉及。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 在阿里云存的资源id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * createTime  **参数解释：** 资源创建时间。 **取值范围：** 不涉及。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cmdbResourceId' => 'cmdb_resource_id',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'resourceId' => 'resource_id',
            'name' => 'name',
            'type' => 'type',
            'ingestProperties' => 'ingest_properties',
            'zoneId' => 'zone_id',
            'innerIp' => 'inner_ip',
            'agentId' => 'agent_id',
            'agentState' => 'agent_state',
            'regionId' => 'region_id',
            'createTime' => 'create_time',
            'datasource' => 'datasource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 分组资源关联的id。 **取值范围：** 不涉及。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 在阿里云存的资源id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * createTime  **参数解释：** 资源创建时间。 **取值范围：** 不涉及。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cmdbResourceId' => 'setCmdbResourceId',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'resourceId' => 'setResourceId',
            'name' => 'setName',
            'type' => 'setType',
            'ingestProperties' => 'setIngestProperties',
            'zoneId' => 'setZoneId',
            'innerIp' => 'setInnerIp',
            'agentId' => 'setAgentId',
            'agentState' => 'setAgentState',
            'regionId' => 'setRegionId',
            'createTime' => 'setCreateTime',
            'datasource' => 'setDatasource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 分组资源关联的id。 **取值范围：** 不涉及。
    * cmdbResourceId  **参数解释：** CloudCMDB分配的资源uuid。 **取值范围：** 不涉及。
    * groupId  **参数解释：** 分组id。 **取值范围：** 字符串，长度24个字符。
    * groupName  **参数解释：** 分组名称。 **取值范围：** 字符串，长度3~60个字符。
    * resourceId  **参数解释：** 在阿里云存的资源id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 资源类型。 **取值范围：** 不涉及。
    * ingestProperties  **参数解释：** 数据采集属性。 **取值范围：** 不涉及。
    * zoneId  **参数解释：** 可用区id。 **取值范围：** 不涉及。
    * innerIp  **参数解释：** 资源内网ip。 **取值范围：** 不涉及。
    * agentId  **参数解释：** uniagent的id值。 **取值范围：** 不涉及。
    * agentState  **参数解释：** uniagent的状态。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。
    * regionId  **参数解释：** 区域id。 **取值范围：** 字符串，长度在0到64个字符之间。
    * createTime  **参数解释：** 资源创建时间。 **取值范围：** 不涉及。
    * datasource  **参数解释：** 云厂商账户id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cmdbResourceId' => 'getCmdbResourceId',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'resourceId' => 'getResourceId',
            'name' => 'getName',
            'type' => 'getType',
            'ingestProperties' => 'getIngestProperties',
            'zoneId' => 'getZoneId',
            'innerIp' => 'getInnerIp',
            'agentId' => 'getAgentId',
            'agentState' => 'getAgentState',
            'regionId' => 'getRegionId',
            'createTime' => 'getCreateTime',
            'datasource' => 'getDatasource'
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
        $this->container['cmdbResourceId'] = isset($data['cmdbResourceId']) ? $data['cmdbResourceId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ingestProperties'] = isset($data['ingestProperties']) ? $data['ingestProperties'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['datasource'] = isset($data['datasource']) ? $data['datasource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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

            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datasource']) && (mb_strlen($this->container['datasource']) > 24)) {
                $invalidProperties[] = "invalid value for 'datasource', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['datasource']) && (mb_strlen($this->container['datasource']) < 0)) {
                $invalidProperties[] = "invalid value for 'datasource', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** 分组资源关联的id。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 分组资源关联的id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    *  **参数解释：** 在阿里云存的资源id。 **取值范围：** 不涉及。
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
    * @param string|null $resourceId **参数解释：** 在阿里云存的资源id。 **取值范围：** 不涉及。
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
    *  **参数解释：** 资源名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 资源名称。 **取值范围：** 不涉及。
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
    * Gets ingestProperties
    *  **参数解释：** 数据采集属性。 **取值范围：** 不涉及。
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
    * @param object|null $ingestProperties **参数解释：** 数据采集属性。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIngestProperties($ingestProperties)
    {
        $this->container['ingestProperties'] = $ingestProperties;
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
    * Gets createTime
    *  **参数解释：** 资源创建时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释：** 资源创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets datasource
    *  **参数解释：** 云厂商账户id。 **取值范围：** 不涉及。
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
    * @param string|null $datasource **参数解释：** 云厂商账户id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDatasource($datasource)
    {
        $this->container['datasource'] = $datasource;
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

