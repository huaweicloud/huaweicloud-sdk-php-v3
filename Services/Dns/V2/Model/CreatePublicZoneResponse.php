<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePublicZoneResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePublicZoneResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 域名的ID，UUID形式的一个资源标识。 **取值范围：** 不涉及。
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * description  **参数解释：** 域名的描述信息。 **取值范围：** 长度不超过255个字符。
    * email  **参数解释：** 管理该域名的管理员邮箱，用于生成该域名的SOA记录。 **取值范围：** 不涉及。
    * zoneType  **参数解释：** 域名类型。 **取值范围：** public：公网域名。
    * ttl  **参数解释：** 该域名下SOA记录中的有效缓存时间，以秒为单位。 **取值范围：** 不涉及。
    * serial  **参数解释：** 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。 **取值范围：** 不涉及。
    * status  **参数解释：** 公网域名状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - DISABLE：暂停
    * recordNum  **参数解释：** 该域名下的记录集个数。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 托管该域名的pool，由系统分配。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 域名所属的项目ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 域名的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 域名的最近一次修改时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * links  links
    * enterpriseProjectId  **参数解释：** 域名所属的企业项目ID。可以使用该字段过滤企业项目下的域名。 **取值范围：** 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * masters  **参数解释：** 主从模式中，从DNS服务器获取DNS信息。目前暂未使用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'email' => 'string',
            'zoneType' => 'string',
            'ttl' => 'int',
            'serial' => 'int',
            'status' => 'string',
            'recordNum' => 'int',
            'poolId' => 'string',
            'projectId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink',
            'enterpriseProjectId' => 'string',
            'masters' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 域名的ID，UUID形式的一个资源标识。 **取值范围：** 不涉及。
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * description  **参数解释：** 域名的描述信息。 **取值范围：** 长度不超过255个字符。
    * email  **参数解释：** 管理该域名的管理员邮箱，用于生成该域名的SOA记录。 **取值范围：** 不涉及。
    * zoneType  **参数解释：** 域名类型。 **取值范围：** public：公网域名。
    * ttl  **参数解释：** 该域名下SOA记录中的有效缓存时间，以秒为单位。 **取值范围：** 不涉及。
    * serial  **参数解释：** 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。 **取值范围：** 不涉及。
    * status  **参数解释：** 公网域名状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - DISABLE：暂停
    * recordNum  **参数解释：** 该域名下的记录集个数。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 托管该域名的pool，由系统分配。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 域名所属的项目ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 域名的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 域名的最近一次修改时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * links  links
    * enterpriseProjectId  **参数解释：** 域名所属的企业项目ID。可以使用该字段过滤企业项目下的域名。 **取值范围：** 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * masters  **参数解释：** 主从模式中，从DNS服务器获取DNS信息。目前暂未使用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'email' => null,
        'zoneType' => null,
        'ttl' => 'int32',
        'serial' => 'int32',
        'status' => null,
        'recordNum' => 'int32',
        'poolId' => null,
        'projectId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'links' => null,
        'enterpriseProjectId' => null,
        'masters' => null
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
    * id  **参数解释：** 域名的ID，UUID形式的一个资源标识。 **取值范围：** 不涉及。
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * description  **参数解释：** 域名的描述信息。 **取值范围：** 长度不超过255个字符。
    * email  **参数解释：** 管理该域名的管理员邮箱，用于生成该域名的SOA记录。 **取值范围：** 不涉及。
    * zoneType  **参数解释：** 域名类型。 **取值范围：** public：公网域名。
    * ttl  **参数解释：** 该域名下SOA记录中的有效缓存时间，以秒为单位。 **取值范围：** 不涉及。
    * serial  **参数解释：** 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。 **取值范围：** 不涉及。
    * status  **参数解释：** 公网域名状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - DISABLE：暂停
    * recordNum  **参数解释：** 该域名下的记录集个数。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 托管该域名的pool，由系统分配。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 域名所属的项目ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 域名的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 域名的最近一次修改时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * links  links
    * enterpriseProjectId  **参数解释：** 域名所属的企业项目ID。可以使用该字段过滤企业项目下的域名。 **取值范围：** 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * masters  **参数解释：** 主从模式中，从DNS服务器获取DNS信息。目前暂未使用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'email' => 'email',
            'zoneType' => 'zone_type',
            'ttl' => 'ttl',
            'serial' => 'serial',
            'status' => 'status',
            'recordNum' => 'record_num',
            'poolId' => 'pool_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'links' => 'links',
            'enterpriseProjectId' => 'enterprise_project_id',
            'masters' => 'masters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 域名的ID，UUID形式的一个资源标识。 **取值范围：** 不涉及。
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * description  **参数解释：** 域名的描述信息。 **取值范围：** 长度不超过255个字符。
    * email  **参数解释：** 管理该域名的管理员邮箱，用于生成该域名的SOA记录。 **取值范围：** 不涉及。
    * zoneType  **参数解释：** 域名类型。 **取值范围：** public：公网域名。
    * ttl  **参数解释：** 该域名下SOA记录中的有效缓存时间，以秒为单位。 **取值范围：** 不涉及。
    * serial  **参数解释：** 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。 **取值范围：** 不涉及。
    * status  **参数解释：** 公网域名状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - DISABLE：暂停
    * recordNum  **参数解释：** 该域名下的记录集个数。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 托管该域名的pool，由系统分配。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 域名所属的项目ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 域名的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 域名的最近一次修改时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * links  links
    * enterpriseProjectId  **参数解释：** 域名所属的企业项目ID。可以使用该字段过滤企业项目下的域名。 **取值范围：** 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * masters  **参数解释：** 主从模式中，从DNS服务器获取DNS信息。目前暂未使用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'email' => 'setEmail',
            'zoneType' => 'setZoneType',
            'ttl' => 'setTtl',
            'serial' => 'setSerial',
            'status' => 'setStatus',
            'recordNum' => 'setRecordNum',
            'poolId' => 'setPoolId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'links' => 'setLinks',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'masters' => 'setMasters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 域名的ID，UUID形式的一个资源标识。 **取值范围：** 不涉及。
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * description  **参数解释：** 域名的描述信息。 **取值范围：** 长度不超过255个字符。
    * email  **参数解释：** 管理该域名的管理员邮箱，用于生成该域名的SOA记录。 **取值范围：** 不涉及。
    * zoneType  **参数解释：** 域名类型。 **取值范围：** public：公网域名。
    * ttl  **参数解释：** 该域名下SOA记录中的有效缓存时间，以秒为单位。 **取值范围：** 不涉及。
    * serial  **参数解释：** 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。 **取值范围：** 不涉及。
    * status  **参数解释：** 公网域名状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - DISABLE：暂停
    * recordNum  **参数解释：** 该域名下的记录集个数。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 托管该域名的pool，由系统分配。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 域名所属的项目ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 域名的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 域名的最近一次修改时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * links  links
    * enterpriseProjectId  **参数解释：** 域名所属的企业项目ID。可以使用该字段过滤企业项目下的域名。 **取值范围：** 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * masters  **参数解释：** 主从模式中，从DNS服务器获取DNS信息。目前暂未使用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'email' => 'getEmail',
            'zoneType' => 'getZoneType',
            'ttl' => 'getTtl',
            'serial' => 'getSerial',
            'status' => 'getStatus',
            'recordNum' => 'getRecordNum',
            'poolId' => 'getPoolId',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'links' => 'getLinks',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'masters' => 'getMasters'
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
        $this->container['zoneType'] = isset($data['zoneType']) ? $data['zoneType'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['recordNum'] = isset($data['recordNum']) ? $data['recordNum'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['masters'] = isset($data['masters']) ? $data['masters'] : null;
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
    *  **参数解释：** 域名的ID，UUID形式的一个资源标识。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 域名的ID，UUID形式的一个资源标识。 **取值范围：** 不涉及。
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
    *  **参数解释：** 域名。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 域名。 **取值范围：** 不涉及。
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
    *  **参数解释：** 域名的描述信息。 **取值范围：** 长度不超过255个字符。
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
    * @param string|null $description **参数解释：** 域名的描述信息。 **取值范围：** 长度不超过255个字符。
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
    *  **参数解释：** 管理该域名的管理员邮箱，用于生成该域名的SOA记录。 **取值范围：** 不涉及。
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
    * @param string|null $email **参数解释：** 管理该域名的管理员邮箱，用于生成该域名的SOA记录。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets zoneType
    *  **参数解释：** 域名类型。 **取值范围：** public：公网域名。
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
    * @param string|null $zoneType **参数解释：** 域名类型。 **取值范围：** public：公网域名。
    *
    * @return $this
    */
    public function setZoneType($zoneType)
    {
        $this->container['zoneType'] = $zoneType;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数解释：** 该域名下SOA记录中的有效缓存时间，以秒为单位。 **取值范围：** 不涉及。
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
    * @param int|null $ttl **参数解释：** 该域名下SOA记录中的有效缓存时间，以秒为单位。 **取值范围：** 不涉及。
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
    *  **参数解释：** 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。 **取值范围：** 不涉及。
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
    * @param int|null $serial **参数解释：** 该域名下SOA记录中用于标识域名文件变更的序列值，用于主从节点同步。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 公网域名状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - DISABLE：暂停
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
    * @param string|null $status **参数解释：** 公网域名状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - DISABLE：暂停
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets recordNum
    *  **参数解释：** 该域名下的记录集个数。 **取值范围：** 不涉及。
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
    * @param int|null $recordNum **参数解释：** 该域名下的记录集个数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRecordNum($recordNum)
    {
        $this->container['recordNum'] = $recordNum;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 托管该域名的pool，由系统分配。 **取值范围：** 不涉及。
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
    * @param string|null $poolId **参数解释：** 托管该域名的pool，由系统分配。 **取值范围：** 不涉及。
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
    *  **参数解释：** 域名所属的项目ID。 **取值范围：** 不涉及。
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
    * @param string|null $projectId **参数解释：** 域名所属的项目ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 域名的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
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
    * @param string|null $createdAt **参数解释：** 域名的创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
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
    *  **参数解释：** 域名的最近一次修改时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
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
    * @param string|null $updatedAt **参数解释：** 域名的最近一次修改时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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
    * Gets enterpriseProjectId
    *  **参数解释：** 域名所属的企业项目ID。可以使用该字段过滤企业项目下的域名。 **取值范围：** 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释：** 域名所属的企业项目ID。可以使用该字段过滤企业项目下的域名。 **取值范围：** 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets masters
    *  **参数解释：** 主从模式中，从DNS服务器获取DNS信息。目前暂未使用。 **取值范围：** 不涉及。
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
    * @param string[]|null $masters **参数解释：** 主从模式中，从DNS服务器获取DNS信息。目前暂未使用。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMasters($masters)
    {
        $this->container['masters'] = $masters;
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

