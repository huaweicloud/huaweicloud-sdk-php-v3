<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateServerResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateServerResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'image' => 'string',
            'accessIPv4' => 'string',
            'accessIPv6' => 'string',
            'metadata' => 'map[string,string]',
            'addresses' => 'map[string,\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerAddress[]]',
            'created' => 'string',
            'hostId' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Ecs\V2\Model\SimpleFlavor',
            'osDcFdiskConfig' => 'string',
            'userId' => 'string',
            'name' => 'string',
            'progress' => 'int',
            'links' => '\HuaweiCloud\SDK\Ecs\V2\Model\Link[]',
            'id' => 'string',
            'updated' => 'string',
            'locked' => 'bool',
            'description' => 'string',
            'tags' => 'string[]',
            'status' => 'string',
            'osExtSrvAttRhostname' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'image' => null,
        'accessIPv4' => null,
        'accessIPv6' => null,
        'metadata' => null,
        'addresses' => null,
        'created' => null,
        'hostId' => null,
        'flavor' => null,
        'osDcFdiskConfig' => null,
        'userId' => null,
        'name' => null,
        'progress' => 'int32',
        'links' => null,
        'id' => null,
        'updated' => null,
        'locked' => null,
        'description' => null,
        'tags' => null,
        'status' => null,
        'osExtSrvAttRhostname' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'image' => 'image',
            'accessIPv4' => 'accessIPv4',
            'accessIPv6' => 'accessIPv6',
            'metadata' => 'metadata',
            'addresses' => 'addresses',
            'created' => 'created',
            'hostId' => 'hostId',
            'flavor' => 'flavor',
            'osDcFdiskConfig' => 'OS-DCF:diskConfig',
            'userId' => 'user_id',
            'name' => 'name',
            'progress' => 'progress',
            'links' => 'links',
            'id' => 'id',
            'updated' => 'updated',
            'locked' => 'locked',
            'description' => 'description',
            'tags' => 'tags',
            'status' => 'status',
            'osExtSrvAttRhostname' => 'OS-EXT-SRV-ATTR:hostname'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'image' => 'setImage',
            'accessIPv4' => 'setAccessIPv4',
            'accessIPv6' => 'setAccessIPv6',
            'metadata' => 'setMetadata',
            'addresses' => 'setAddresses',
            'created' => 'setCreated',
            'hostId' => 'setHostId',
            'flavor' => 'setFlavor',
            'osDcFdiskConfig' => 'setOsDcFdiskConfig',
            'userId' => 'setUserId',
            'name' => 'setName',
            'progress' => 'setProgress',
            'links' => 'setLinks',
            'id' => 'setId',
            'updated' => 'setUpdated',
            'locked' => 'setLocked',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'osExtSrvAttRhostname' => 'setOsExtSrvAttRhostname'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'image' => 'getImage',
            'accessIPv4' => 'getAccessIPv4',
            'accessIPv6' => 'getAccessIPv6',
            'metadata' => 'getMetadata',
            'addresses' => 'getAddresses',
            'created' => 'getCreated',
            'hostId' => 'getHostId',
            'flavor' => 'getFlavor',
            'osDcFdiskConfig' => 'getOsDcFdiskConfig',
            'userId' => 'getUserId',
            'name' => 'getName',
            'progress' => 'getProgress',
            'links' => 'getLinks',
            'id' => 'getId',
            'updated' => 'getUpdated',
            'locked' => 'getLocked',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'osExtSrvAttRhostname' => 'getOsExtSrvAttRhostname'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['accessIPv4'] = isset($data['accessIPv4']) ? $data['accessIPv4'] : null;
        $this->container['accessIPv6'] = isset($data['accessIPv6']) ? $data['accessIPv6'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['osDcFdiskConfig'] = isset($data['osDcFdiskConfig']) ? $data['osDcFdiskConfig'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['osExtSrvAttRhostname'] = isset($data['osExtSrvAttRhostname']) ? $data['osExtSrvAttRhostname'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['accessIPv4'] === null) {
            $invalidProperties[] = "'accessIPv4' can't be null";
        }
        if ($this->container['accessIPv6'] === null) {
            $invalidProperties[] = "'accessIPv6' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['osExtSrvAttRhostname'] === null) {
            $invalidProperties[] = "'osExtSrvAttRhostname' can't be null";
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
    * Gets tenantId
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets image
    *
    * @return string
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string $image 镜像ID。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets accessIPv4
    *
    * @return string
    */
    public function getAccessIPv4()
    {
        return $this->container['accessIPv4'];
    }

    /**
    * Sets accessIPv4
    *
    * @param string $accessIPv4 预留属性。
    *
    * @return $this
    */
    public function setAccessIPv4($accessIPv4)
    {
        $this->container['accessIPv4'] = $accessIPv4;
        return $this;
    }

    /**
    * Gets accessIPv6
    *
    * @return string
    */
    public function getAccessIPv6()
    {
        return $this->container['accessIPv6'];
    }

    /**
    * Sets accessIPv6
    *
    * @param string $accessIPv6 预留属性。
    *
    * @return $this
    */
    public function setAccessIPv6($accessIPv6)
    {
        $this->container['accessIPv6'] = $accessIPv6;
        return $this;
    }

    /**
    * Gets metadata
    *
    * @return map[string,string]
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string] $metadata 云服务器元数据。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets addresses
    *
    * @return map[string,\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerAddress[]]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param map[string,\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerAddress[]] $addresses 弹性云服务器的网络属性。
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets created
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 弹性云服务器创建时间。  时间格式例如：2019-05-22T03:19:19Z
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets hostId
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId 弹性云服务器所在主机的主机ID。
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets flavor
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\SimpleFlavor
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\SimpleFlavor $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets osDcFdiskConfig
    *
    * @return string|null
    */
    public function getOsDcFdiskConfig()
    {
        return $this->container['osDcFdiskConfig'];
    }

    /**
    * Sets osDcFdiskConfig
    *
    * @param string|null $osDcFdiskConfig 扩展属性， diskConfig的类型。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    *
    * @return $this
    */
    public function setOsDcFdiskConfig($osDcFdiskConfig)
    {
        $this->container['osDcFdiskConfig'] = $osDcFdiskConfig;
        return $this;
    }

    /**
    * Gets userId
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 创建弹性云服务器的用户ID，格式为UUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets name
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 弹性云服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets progress
    *
    * @return int
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int $progress 弹性云服务器进度。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets links
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\Link[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\Link[] $links 云服务器相关标记快捷链接信息。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 弹性云服务器ID，格式为UUID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets updated
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 弹性云服务器更新时间。  时间格式例如：2019-05-22T03:30:52Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets locked
    *
    * @return bool|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param bool|null $locked 弹性云服务器是否为锁定状态。  - true：锁定 - false：未锁定
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets description
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
    * @param string|null $description 弹性云服务器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *
    * @return string[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[] $tags 云服务器的标签列表。  微版本2.26后支持，如果不使用微版本查询，响应中无tags字段。  系统近期对标签功能进行了升级，升级后，返回的tag值遵循如下规则：  - key与value使用“=”连接，如“key=value”。 - 如果value为空字符串，则仅返回key。 - key与value使用“=”连接，如“key=value”。 - 如果value为空字符串，则仅返回key。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets status
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 弹性云服务器状态。  取值范围：  ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets osExtSrvAttRhostname
    *
    * @return string
    */
    public function getOsExtSrvAttRhostname()
    {
        return $this->container['osExtSrvAttRhostname'];
    }

    /**
    * Sets osExtSrvAttRhostname
    *
    * @param string $osExtSrvAttRhostname 弹性云服务器的主机名。
    *
    * @return $this
    */
    public function setOsExtSrvAttRhostname($osExtSrvAttRhostname)
    {
        $this->container['osExtSrvAttRhostname'] = $osExtSrvAttRhostname;
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

