<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RespServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RespServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addresses  弹性云服务器的网络属性。
    * created  弹性云服务器创建时间。
    * flavor  flavor
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * status  弹性云服务器状态。  取值范围：ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PASSWORD、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    * tenantId  弹性云服务器所属租户ID，格式为UUID。
    * updated  弹性云服务器更新时间。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * taskState  弹性云服务器当前任务的状态。
    * image  image
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addresses' => 'map[string,\HuaweiCloud\SDK\DeH\V1\Model\RespAddr[]]',
            'created' => 'string',
            'flavor' => '\HuaweiCloud\SDK\DeH\V1\Model\RespFlavor',
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'updated' => 'string',
            'userId' => 'string',
            'taskState' => 'string',
            'image' => '\HuaweiCloud\SDK\DeH\V1\Model\RespImage',
            'metadata' => '\HuaweiCloud\SDK\DeH\V1\Model\RespMetadata'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addresses  弹性云服务器的网络属性。
    * created  弹性云服务器创建时间。
    * flavor  flavor
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * status  弹性云服务器状态。  取值范围：ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PASSWORD、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    * tenantId  弹性云服务器所属租户ID，格式为UUID。
    * updated  弹性云服务器更新时间。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * taskState  弹性云服务器当前任务的状态。
    * image  image
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addresses' => null,
        'created' => null,
        'flavor' => null,
        'id' => null,
        'name' => null,
        'status' => null,
        'tenantId' => null,
        'updated' => null,
        'userId' => null,
        'taskState' => null,
        'image' => null,
        'metadata' => null
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
    * addresses  弹性云服务器的网络属性。
    * created  弹性云服务器创建时间。
    * flavor  flavor
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * status  弹性云服务器状态。  取值范围：ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PASSWORD、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    * tenantId  弹性云服务器所属租户ID，格式为UUID。
    * updated  弹性云服务器更新时间。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * taskState  弹性云服务器当前任务的状态。
    * image  image
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addresses' => 'addresses',
            'created' => 'created',
            'flavor' => 'flavor',
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'updated' => 'updated',
            'userId' => 'user_id',
            'taskState' => 'task_state',
            'image' => 'image',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addresses  弹性云服务器的网络属性。
    * created  弹性云服务器创建时间。
    * flavor  flavor
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * status  弹性云服务器状态。  取值范围：ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PASSWORD、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    * tenantId  弹性云服务器所属租户ID，格式为UUID。
    * updated  弹性云服务器更新时间。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * taskState  弹性云服务器当前任务的状态。
    * image  image
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $setters = [
            'addresses' => 'setAddresses',
            'created' => 'setCreated',
            'flavor' => 'setFlavor',
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'updated' => 'setUpdated',
            'userId' => 'setUserId',
            'taskState' => 'setTaskState',
            'image' => 'setImage',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addresses  弹性云服务器的网络属性。
    * created  弹性云服务器创建时间。
    * flavor  flavor
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * status  弹性云服务器状态。  取值范围：ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PASSWORD、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    * tenantId  弹性云服务器所属租户ID，格式为UUID。
    * updated  弹性云服务器更新时间。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * taskState  弹性云服务器当前任务的状态。
    * image  image
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $getters = [
            'addresses' => 'getAddresses',
            'created' => 'getCreated',
            'flavor' => 'getFlavor',
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'updated' => 'getUpdated',
            'userId' => 'getUserId',
            'taskState' => 'getTaskState',
            'image' => 'getImage',
            'metadata' => 'getMetadata'
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
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['taskState'] = isset($data['taskState']) ? $data['taskState'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['taskState'] === null) {
            $invalidProperties[] = "'taskState' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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
    * Gets addresses
    *  弹性云服务器的网络属性。
    *
    * @return map[string,\HuaweiCloud\SDK\DeH\V1\Model\RespAddr[]]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param map[string,\HuaweiCloud\SDK\DeH\V1\Model\RespAddr[]] $addresses 弹性云服务器的网络属性。
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
    *  弹性云服务器创建时间。
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
    * @param string $created 弹性云服务器创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\RespFlavor
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\RespFlavor $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets id
    *  弹性云服务器ID，格式为UUID。
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
    * Gets name
    *  弹性云服务器名称。
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
    * Gets status
    *  弹性云服务器状态。  取值范围：ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PASSWORD、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
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
    * @param string $status 弹性云服务器状态。  取值范围：ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PASSWORD、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  弹性云服务器所属租户ID，格式为UUID。
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
    * @param string $tenantId 弹性云服务器所属租户ID，格式为UUID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets updated
    *  弹性云服务器更新时间。
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
    * @param string $updated 弹性云服务器更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets userId
    *  创建弹性云服务器的用户ID，格式为UUID。
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
    * Gets taskState
    *  弹性云服务器当前任务的状态。
    *
    * @return string
    */
    public function getTaskState()
    {
        return $this->container['taskState'];
    }

    /**
    * Sets taskState
    *
    * @param string $taskState 弹性云服务器当前任务的状态。
    *
    * @return $this
    */
    public function setTaskState($taskState)
    {
        $this->container['taskState'] = $taskState;
        return $this;
    }

    /**
    * Gets image
    *  image
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\RespImage
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\RespImage $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\RespMetadata
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\RespMetadata $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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

