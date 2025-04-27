<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ZoneData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ZoneData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名的ID，UUID形式的一个资源标识。
    * name  域名。
    * description  对域名的描述信息。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。
    * ttl  该域名下SOA记录中的ttl值。
    * serial  该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。
    * masters  主从模式中，从DNS服务器获取DNS信息。
    * status  资源状态。
    * poolId  托管该域名的pool，由系统分配。
    * projectId  域名所属的项目ID。
    * zoneType  域名类型，取值public或private。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * recordNum  该域名下的记录集个数。
    * links  links
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'email' => 'string',
            'ttl' => 'int',
            'serial' => 'int',
            'masters' => 'string[]',
            'status' => 'string',
            'poolId' => 'string',
            'projectId' => 'string',
            'zoneType' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'recordNum' => 'int',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\Link'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名的ID，UUID形式的一个资源标识。
    * name  域名。
    * description  对域名的描述信息。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。
    * ttl  该域名下SOA记录中的ttl值。
    * serial  该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。
    * masters  主从模式中，从DNS服务器获取DNS信息。
    * status  资源状态。
    * poolId  托管该域名的pool，由系统分配。
    * projectId  域名所属的项目ID。
    * zoneType  域名类型，取值public或private。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * recordNum  该域名下的记录集个数。
    * links  links
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'email' => null,
        'ttl' => 'int32',
        'serial' => 'int32',
        'masters' => null,
        'status' => null,
        'poolId' => null,
        'projectId' => null,
        'zoneType' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'recordNum' => 'int32',
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
    * id  域名的ID，UUID形式的一个资源标识。
    * name  域名。
    * description  对域名的描述信息。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。
    * ttl  该域名下SOA记录中的ttl值。
    * serial  该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。
    * masters  主从模式中，从DNS服务器获取DNS信息。
    * status  资源状态。
    * poolId  托管该域名的pool，由系统分配。
    * projectId  域名所属的项目ID。
    * zoneType  域名类型，取值public或private。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * recordNum  该域名下的记录集个数。
    * links  links
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'email' => 'email',
            'ttl' => 'ttl',
            'serial' => 'serial',
            'masters' => 'masters',
            'status' => 'status',
            'poolId' => 'pool_id',
            'projectId' => 'project_id',
            'zoneType' => 'zone_type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'recordNum' => 'record_num',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名的ID，UUID形式的一个资源标识。
    * name  域名。
    * description  对域名的描述信息。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。
    * ttl  该域名下SOA记录中的ttl值。
    * serial  该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。
    * masters  主从模式中，从DNS服务器获取DNS信息。
    * status  资源状态。
    * poolId  托管该域名的pool，由系统分配。
    * projectId  域名所属的项目ID。
    * zoneType  域名类型，取值public或private。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * recordNum  该域名下的记录集个数。
    * links  links
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'email' => 'setEmail',
            'ttl' => 'setTtl',
            'serial' => 'setSerial',
            'masters' => 'setMasters',
            'status' => 'setStatus',
            'poolId' => 'setPoolId',
            'projectId' => 'setProjectId',
            'zoneType' => 'setZoneType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'recordNum' => 'setRecordNum',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名的ID，UUID形式的一个资源标识。
    * name  域名。
    * description  对域名的描述信息。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。
    * ttl  该域名下SOA记录中的ttl值。
    * serial  该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。
    * masters  主从模式中，从DNS服务器获取DNS信息。
    * status  资源状态。
    * poolId  托管该域名的pool，由系统分配。
    * projectId  域名所属的项目ID。
    * zoneType  域名类型，取值public或private。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * recordNum  该域名下的记录集个数。
    * links  links
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'email' => 'getEmail',
            'ttl' => 'getTtl',
            'serial' => 'getSerial',
            'masters' => 'getMasters',
            'status' => 'getStatus',
            'poolId' => 'getPoolId',
            'projectId' => 'getProjectId',
            'zoneType' => 'getZoneType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'recordNum' => 'getRecordNum',
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['masters'] = isset($data['masters']) ? $data['masters'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['zoneType'] = isset($data['zoneType']) ? $data['zoneType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['recordNum'] = isset($data['recordNum']) ? $data['recordNum'] : null;
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
    *  域名的ID，UUID形式的一个资源标识。
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
    * @param string|null $id 域名的ID，UUID形式的一个资源标识。
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
    *  域名。
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
    * @param string|null $name 域名。
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
    *  对域名的描述信息。
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
    * @param string|null $description 对域名的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets email
    *  管理该域名的管理员邮箱，用于生成该域名的SOA记录。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 管理该域名的管理员邮箱，用于生成该域名的SOA记录。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets ttl
    *  该域名下SOA记录中的ttl值。
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
    * @param int|null $ttl 该域名下SOA记录中的ttl值。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets serial
    *  该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。
    *
    * @return int|null
    */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
    * Sets serial
    *
    * @param int|null $serial 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。
    *
    * @return $this
    */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;
        return $this;
    }

    /**
    * Gets masters
    *  主从模式中，从DNS服务器获取DNS信息。
    *
    * @return string[]|null
    */
    public function getMasters()
    {
        return $this->container['masters'];
    }

    /**
    * Sets masters
    *
    * @param string[]|null $masters 主从模式中，从DNS服务器获取DNS信息。
    *
    * @return $this
    */
    public function setMasters($masters)
    {
        $this->container['masters'] = $masters;
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
    * Gets poolId
    *  托管该域名的pool，由系统分配。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId 托管该域名的pool，由系统分配。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets projectId
    *  域名所属的项目ID。
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
    * @param string|null $projectId 域名所属的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets zoneType
    *  域名类型，取值public或private。
    *
    * @return string|null
    */
    public function getZoneType()
    {
        return $this->container['zoneType'];
    }

    /**
    * Sets zoneType
    *
    * @param string|null $zoneType 域名类型，取值public或private。
    *
    * @return $this
    */
    public function setZoneType($zoneType)
    {
        $this->container['zoneType'] = $zoneType;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
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
    * @param string|null $createdAt 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
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
    *  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
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
    * @param string|null $updatedAt 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets recordNum
    *  该域名下的记录集个数。
    *
    * @return int|null
    */
    public function getRecordNum()
    {
        return $this->container['recordNum'];
    }

    /**
    * Sets recordNum
    *
    * @param int|null $recordNum 该域名下的记录集个数。
    *
    * @return $this
    */
    public function setRecordNum($recordNum)
    {
        $this->container['recordNum'] = $recordNum;
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

