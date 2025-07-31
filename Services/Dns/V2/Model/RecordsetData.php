<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordsetData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordsetData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 记录集的ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 记录集的名称。 **取值范围：** 不涉及。
    * description  **参数解释：** 记录集的描述信息。 **取值范围：** 长度不超过255个字符。
    * type  **参数解释：** 记录类型。 **取值范围：** - 公网域名的记录类型: A、AAAA、MX、CNAME、TXT、SRV、NS、SOA、CAA。 - 内网域名的记录类型: A、AAAA、MX、CNAME、TXT、PTR、SRV、NS、SOA。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - PENDING_DISABLE：暂停中 - DISABLE：暂停 - ERROR：失败
    * zoneId  **参数解释：** 托管该记录的域名ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 托管该记录的域名。 **取值范围：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * aliasTarget  aliasTarget
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * healthCheckId  **参数解释：** 健康检查ID。 **取值范围：** 不涉及。
    * default  **参数解释：** 标识是否由系统默认生成，系统默认生成的记录集不能删除。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 该记录集所属的项目ID。 **取值范围：** 不涉及。
    * links  links
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'ttl' => 'int',
            'records' => 'string[]',
            'status' => 'string',
            'zoneId' => 'string',
            'zoneName' => 'string',
            'line' => 'string',
            'aliasTarget' => '\HuaweiCloud\SDK\Dns\V2\Model\AliasTarget',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'healthCheckId' => 'string',
            'default' => 'bool',
            'projectId' => 'string',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\Link',
            'weight' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 记录集的ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 记录集的名称。 **取值范围：** 不涉及。
    * description  **参数解释：** 记录集的描述信息。 **取值范围：** 长度不超过255个字符。
    * type  **参数解释：** 记录类型。 **取值范围：** - 公网域名的记录类型: A、AAAA、MX、CNAME、TXT、SRV、NS、SOA、CAA。 - 内网域名的记录类型: A、AAAA、MX、CNAME、TXT、PTR、SRV、NS、SOA。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - PENDING_DISABLE：暂停中 - DISABLE：暂停 - ERROR：失败
    * zoneId  **参数解释：** 托管该记录的域名ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 托管该记录的域名。 **取值范围：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * aliasTarget  aliasTarget
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * healthCheckId  **参数解释：** 健康检查ID。 **取值范围：** 不涉及。
    * default  **参数解释：** 标识是否由系统默认生成，系统默认生成的记录集不能删除。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 该记录集所属的项目ID。 **取值范围：** 不涉及。
    * links  links
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'ttl' => 'int32',
        'records' => null,
        'status' => null,
        'zoneId' => null,
        'zoneName' => null,
        'line' => null,
        'aliasTarget' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'healthCheckId' => null,
        'default' => null,
        'projectId' => null,
        'links' => null,
        'weight' => 'int32'
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
    * id  **参数解释：** 记录集的ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 记录集的名称。 **取值范围：** 不涉及。
    * description  **参数解释：** 记录集的描述信息。 **取值范围：** 长度不超过255个字符。
    * type  **参数解释：** 记录类型。 **取值范围：** - 公网域名的记录类型: A、AAAA、MX、CNAME、TXT、SRV、NS、SOA、CAA。 - 内网域名的记录类型: A、AAAA、MX、CNAME、TXT、PTR、SRV、NS、SOA。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - PENDING_DISABLE：暂停中 - DISABLE：暂停 - ERROR：失败
    * zoneId  **参数解释：** 托管该记录的域名ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 托管该记录的域名。 **取值范围：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * aliasTarget  aliasTarget
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * healthCheckId  **参数解释：** 健康检查ID。 **取值范围：** 不涉及。
    * default  **参数解释：** 标识是否由系统默认生成，系统默认生成的记录集不能删除。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 该记录集所属的项目ID。 **取值范围：** 不涉及。
    * links  links
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'ttl' => 'ttl',
            'records' => 'records',
            'status' => 'status',
            'zoneId' => 'zone_id',
            'zoneName' => 'zone_name',
            'line' => 'line',
            'aliasTarget' => 'alias_target',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'healthCheckId' => 'health_check_id',
            'default' => 'default',
            'projectId' => 'project_id',
            'links' => 'links',
            'weight' => 'weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 记录集的ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 记录集的名称。 **取值范围：** 不涉及。
    * description  **参数解释：** 记录集的描述信息。 **取值范围：** 长度不超过255个字符。
    * type  **参数解释：** 记录类型。 **取值范围：** - 公网域名的记录类型: A、AAAA、MX、CNAME、TXT、SRV、NS、SOA、CAA。 - 内网域名的记录类型: A、AAAA、MX、CNAME、TXT、PTR、SRV、NS、SOA。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - PENDING_DISABLE：暂停中 - DISABLE：暂停 - ERROR：失败
    * zoneId  **参数解释：** 托管该记录的域名ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 托管该记录的域名。 **取值范围：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * aliasTarget  aliasTarget
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * healthCheckId  **参数解释：** 健康检查ID。 **取值范围：** 不涉及。
    * default  **参数解释：** 标识是否由系统默认生成，系统默认生成的记录集不能删除。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 该记录集所属的项目ID。 **取值范围：** 不涉及。
    * links  links
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'ttl' => 'setTtl',
            'records' => 'setRecords',
            'status' => 'setStatus',
            'zoneId' => 'setZoneId',
            'zoneName' => 'setZoneName',
            'line' => 'setLine',
            'aliasTarget' => 'setAliasTarget',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'healthCheckId' => 'setHealthCheckId',
            'default' => 'setDefault',
            'projectId' => 'setProjectId',
            'links' => 'setLinks',
            'weight' => 'setWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 记录集的ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 记录集的名称。 **取值范围：** 不涉及。
    * description  **参数解释：** 记录集的描述信息。 **取值范围：** 长度不超过255个字符。
    * type  **参数解释：** 记录类型。 **取值范围：** - 公网域名的记录类型: A、AAAA、MX、CNAME、TXT、SRV、NS、SOA、CAA。 - 内网域名的记录类型: A、AAAA、MX、CNAME、TXT、PTR、SRV、NS、SOA。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - PENDING_DISABLE：暂停中 - DISABLE：暂停 - ERROR：失败
    * zoneId  **参数解释：** 托管该记录的域名ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 托管该记录的域名。 **取值范围：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * aliasTarget  aliasTarget
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * healthCheckId  **参数解释：** 健康检查ID。 **取值范围：** 不涉及。
    * default  **参数解释：** 标识是否由系统默认生成，系统默认生成的记录集不能删除。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 该记录集所属的项目ID。 **取值范围：** 不涉及。
    * links  links
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'ttl' => 'getTtl',
            'records' => 'getRecords',
            'status' => 'getStatus',
            'zoneId' => 'getZoneId',
            'zoneName' => 'getZoneName',
            'line' => 'getLine',
            'aliasTarget' => 'getAliasTarget',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'healthCheckId' => 'getHealthCheckId',
            'default' => 'getDefault',
            'projectId' => 'getProjectId',
            'links' => 'getLinks',
            'weight' => 'getWeight'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['aliasTarget'] = isset($data['aliasTarget']) ? $data['aliasTarget'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['healthCheckId'] = isset($data['healthCheckId']) ? $data['healthCheckId'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  **参数解释：** 记录集的ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 记录集的ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 记录集的名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 记录集的名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 记录集的描述信息。 **取值范围：** 长度不超过255个字符。
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
    * @param string|null $description **参数解释：** 记录集的描述信息。 **取值范围：** 长度不超过255个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 记录类型。 **取值范围：** - 公网域名的记录类型: A、AAAA、MX、CNAME、TXT、SRV、NS、SOA、CAA。 - 内网域名的记录类型: A、AAAA、MX、CNAME、TXT、PTR、SRV、NS、SOA。
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
    * @param string|null $type **参数解释：** 记录类型。 **取值范围：** - 公网域名的记录类型: A、AAAA、MX、CNAME、TXT、SRV、NS、SOA、CAA。 - 内网域名的记录类型: A、AAAA、MX、CNAME、TXT、PTR、SRV、NS、SOA。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[]|null $records **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 记录集状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - PENDING_DISABLE：暂停中 - DISABLE：暂停 - ERROR：失败
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
    * @param string|null $status **参数解释：** 记录集状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - PENDING_DISABLE：暂停中 - DISABLE：暂停 - ERROR：失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets zoneId
    *  **参数解释：** 托管该记录的域名ID。 **取值范围：** 不涉及。
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
    * @param string|null $zoneId **参数解释：** 托管该记录的域名ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets zoneName
    *  **参数解释：** 托管该记录的域名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string|null $zoneName **参数解释：** 托管该记录的域名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets line
    *  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string|null $line **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets aliasTarget
    *  aliasTarget
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\AliasTarget|null
    */
    public function getAliasTarget()
    {
        return $this->container['aliasTarget'];
    }

    /**
    * Sets aliasTarget
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\AliasTarget|null $aliasTarget aliasTarget
    *
    * @return $this
    */
    public function setAliasTarget($aliasTarget)
    {
        $this->container['aliasTarget'] = $aliasTarget;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets healthCheckId
    *  **参数解释：** 健康检查ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getHealthCheckId()
    {
        return $this->container['healthCheckId'];
    }

    /**
    * Sets healthCheckId
    *
    * @param string|null $healthCheckId **参数解释：** 健康检查ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setHealthCheckId($healthCheckId)
    {
        $this->container['healthCheckId'] = $healthCheckId;
        return $this;
    }

    /**
    * Gets default
    *  **参数解释：** 标识是否由系统默认生成，系统默认生成的记录集不能删除。 **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default **参数解释：** 标识是否由系统默认生成，系统默认生成的记录集不能删除。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 该记录集所属的项目ID。 **取值范围：** 不涉及。
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
    * @param string|null $projectId **参数解释：** 该记录集所属的项目ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Link|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Link|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
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

