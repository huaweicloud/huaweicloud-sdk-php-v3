<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryRecordSetWithLineResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryRecordSetWithLineResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Record Set的ID。
    * name  Record Set的名称。
    * description  Record Set的描述信息。
    * zoneId  托管该记录的zone_id。
    * zoneName  托管该记录的zone_name。
    * type  记录类型。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * records  域名解析后的值。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的Record Set不能删除。
    * projectId  该Record Set所属的项目ID。
    * links  links
    * line  解析线路ID。
    * weight  解析记录的权重。
    * healthCheckId  健康检查ID。
    * aliasTarget  aliasTarget
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'zoneId' => 'string',
            'zoneName' => 'string',
            'type' => 'string',
            'ttl' => 'int',
            'records' => 'string[]',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'status' => 'string',
            'default' => 'bool',
            'projectId' => 'string',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink',
            'line' => 'string',
            'weight' => 'int',
            'healthCheckId' => 'string',
            'aliasTarget' => '\HuaweiCloud\SDK\Dns\V2\Model\AliasTarget'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Record Set的ID。
    * name  Record Set的名称。
    * description  Record Set的描述信息。
    * zoneId  托管该记录的zone_id。
    * zoneName  托管该记录的zone_name。
    * type  记录类型。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * records  域名解析后的值。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的Record Set不能删除。
    * projectId  该Record Set所属的项目ID。
    * links  links
    * line  解析线路ID。
    * weight  解析记录的权重。
    * healthCheckId  健康检查ID。
    * aliasTarget  aliasTarget
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'zoneId' => null,
        'zoneName' => null,
        'type' => null,
        'ttl' => 'int32',
        'records' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'status' => null,
        'default' => null,
        'projectId' => null,
        'links' => null,
        'line' => null,
        'weight' => 'int32',
        'healthCheckId' => null,
        'aliasTarget' => null
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
    * id  Record Set的ID。
    * name  Record Set的名称。
    * description  Record Set的描述信息。
    * zoneId  托管该记录的zone_id。
    * zoneName  托管该记录的zone_name。
    * type  记录类型。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * records  域名解析后的值。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的Record Set不能删除。
    * projectId  该Record Set所属的项目ID。
    * links  links
    * line  解析线路ID。
    * weight  解析记录的权重。
    * healthCheckId  健康检查ID。
    * aliasTarget  aliasTarget
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'zoneId' => 'zone_id',
            'zoneName' => 'zone_name',
            'type' => 'type',
            'ttl' => 'ttl',
            'records' => 'records',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'status' => 'status',
            'default' => 'default',
            'projectId' => 'project_id',
            'links' => 'links',
            'line' => 'line',
            'weight' => 'weight',
            'healthCheckId' => 'health_check_id',
            'aliasTarget' => 'alias_target'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Record Set的ID。
    * name  Record Set的名称。
    * description  Record Set的描述信息。
    * zoneId  托管该记录的zone_id。
    * zoneName  托管该记录的zone_name。
    * type  记录类型。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * records  域名解析后的值。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的Record Set不能删除。
    * projectId  该Record Set所属的项目ID。
    * links  links
    * line  解析线路ID。
    * weight  解析记录的权重。
    * healthCheckId  健康检查ID。
    * aliasTarget  aliasTarget
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'zoneId' => 'setZoneId',
            'zoneName' => 'setZoneName',
            'type' => 'setType',
            'ttl' => 'setTtl',
            'records' => 'setRecords',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'status' => 'setStatus',
            'default' => 'setDefault',
            'projectId' => 'setProjectId',
            'links' => 'setLinks',
            'line' => 'setLine',
            'weight' => 'setWeight',
            'healthCheckId' => 'setHealthCheckId',
            'aliasTarget' => 'setAliasTarget'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Record Set的ID。
    * name  Record Set的名称。
    * description  Record Set的描述信息。
    * zoneId  托管该记录的zone_id。
    * zoneName  托管该记录的zone_name。
    * type  记录类型。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * records  域名解析后的值。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的Record Set不能删除。
    * projectId  该Record Set所属的项目ID。
    * links  links
    * line  解析线路ID。
    * weight  解析记录的权重。
    * healthCheckId  健康检查ID。
    * aliasTarget  aliasTarget
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'zoneId' => 'getZoneId',
            'zoneName' => 'getZoneName',
            'type' => 'getType',
            'ttl' => 'getTtl',
            'records' => 'getRecords',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'status' => 'getStatus',
            'default' => 'getDefault',
            'projectId' => 'getProjectId',
            'links' => 'getLinks',
            'line' => 'getLine',
            'weight' => 'getWeight',
            'healthCheckId' => 'getHealthCheckId',
            'aliasTarget' => 'getAliasTarget'
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
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['healthCheckId'] = isset($data['healthCheckId']) ? $data['healthCheckId'] : null;
        $this->container['aliasTarget'] = isset($data['aliasTarget']) ? $data['aliasTarget'] : null;
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
    *  Record Set的ID。
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
    * @param string|null $id Record Set的ID。
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
    *  Record Set的名称。
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
    * @param string|null $name Record Set的名称。
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
    *  Record Set的描述信息。
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
    * @param string|null $description Record Set的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets zoneId
    *  托管该记录的zone_id。
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
    * @param string|null $zoneId 托管该记录的zone_id。
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
    *  托管该记录的zone_name。
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
    * @param string|null $zoneName 托管该记录的zone_name。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets type
    *  记录类型。
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
    * @param string|null $type 记录类型。
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
    *  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
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
    * @param int|null $ttl 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
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
    *  域名解析后的值。
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
    * @param string[]|null $records 域名解析后的值。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
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
    * @param string|null $createdAt 创建时间。
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
    *  更新时间。
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
    * @param string|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。
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
    * @param string|null $status 资源状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets default
    *  标识是否由系统默认生成，系统默认生成的Record Set不能删除。
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
    * @param bool|null $default 标识是否由系统默认生成，系统默认生成的Record Set不能删除。
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
    *  该Record Set所属的项目ID。
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
    * @param string|null $projectId 该Record Set所属的项目ID。
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
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets line
    *  解析线路ID。
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
    * @param string|null $line 解析线路ID。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets weight
    *  解析记录的权重。
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
    * @param int|null $weight 解析记录的权重。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets healthCheckId
    *  健康检查ID。
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
    * @param string|null $healthCheckId 健康检查ID。
    *
    * @return $this
    */
    public function setHealthCheckId($healthCheckId)
    {
        $this->container['healthCheckId'] = $healthCheckId;
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

