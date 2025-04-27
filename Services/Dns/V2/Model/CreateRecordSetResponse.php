<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRecordSetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRecordSetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  记录集的ID。
    * name  记录集的名称。
    * description  记录集的描述信息。
    * zoneId  托管该记录的域名ID。
    * zoneName  托管该记录的域名。
    * type  记录类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  域名解析后的值。
    * createAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的记录集不能删除。
    * projectId  该记录集所属的项目ID。
    * links  links
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
            'createAt' => 'string',
            'updateAt' => 'string',
            'status' => 'string',
            'default' => 'bool',
            'projectId' => 'string',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  记录集的ID。
    * name  记录集的名称。
    * description  记录集的描述信息。
    * zoneId  托管该记录的域名ID。
    * zoneName  托管该记录的域名。
    * type  记录类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  域名解析后的值。
    * createAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的记录集不能删除。
    * projectId  该记录集所属的项目ID。
    * links  links
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
        'createAt' => null,
        'updateAt' => null,
        'status' => null,
        'default' => null,
        'projectId' => null,
        'links' => null
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
    * id  记录集的ID。
    * name  记录集的名称。
    * description  记录集的描述信息。
    * zoneId  托管该记录的域名ID。
    * zoneName  托管该记录的域名。
    * type  记录类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  域名解析后的值。
    * createAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的记录集不能删除。
    * projectId  该记录集所属的项目ID。
    * links  links
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
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'status' => 'status',
            'default' => 'default',
            'projectId' => 'project_id',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  记录集的ID。
    * name  记录集的名称。
    * description  记录集的描述信息。
    * zoneId  托管该记录的域名ID。
    * zoneName  托管该记录的域名。
    * type  记录类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  域名解析后的值。
    * createAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的记录集不能删除。
    * projectId  该记录集所属的项目ID。
    * links  links
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
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'status' => 'setStatus',
            'default' => 'setDefault',
            'projectId' => 'setProjectId',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  记录集的ID。
    * name  记录集的名称。
    * description  记录集的描述信息。
    * zoneId  托管该记录的域名ID。
    * zoneName  托管该记录的域名。
    * type  记录类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  域名解析后的值。
    * createAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * default  标识是否由系统默认生成，系统默认生成的记录集不能删除。
    * projectId  该记录集所属的项目ID。
    * links  links
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
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'status' => 'getStatus',
            'default' => 'getDefault',
            'projectId' => 'getProjectId',
            'links' => 'getLinks'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
    *  记录集的ID。
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
    * @param string|null $id 记录集的ID。
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
    *  记录集的名称。
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
    * @param string|null $name 记录集的名称。
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
    *  记录集的描述信息。
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
    * @param string|null $description 记录集的描述信息。
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
    *  托管该记录的域名ID。
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
    * @param string|null $zoneId 托管该记录的域名ID。
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
    *  托管该记录的域名。
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
    * @param string|null $zoneName 托管该记录的域名。
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
    *  记录类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
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
    * @param string|null $type 记录类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
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
    *  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
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
    * @param int|null $ttl 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
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
    * Gets createAt
    *  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
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
    * @param string|null $createAt 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
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
    *  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
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
    * @param string|null $updateAt 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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
    *  标识是否由系统默认生成，系统默认生成的记录集不能删除。
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
    * @param bool|null $default 标识是否由系统默认生成，系统默认生成的记录集不能删除。
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
    *  该记录集所属的项目ID。
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
    * @param string|null $projectId 该记录集所属的项目ID。
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

