<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckpointResourceResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckpointResourceResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * extraInfo  资源附加信息
    * id  待备份资源id
    * name  待备份资源名称
    * protectStatus  保护状态。available（可用），error（错误），protecting（备份中），restoring（恢复中），removing（删除中）。
    * resourceSize  资源已分配容量,单位为GB
    * type  待备份资源的类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2
    * backupSize  副本大小
    * backupCount  副本数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'extraInfo' => 'string',
            'id' => 'string',
            'name' => 'string',
            'protectStatus' => 'string',
            'resourceSize' => 'string',
            'type' => 'string',
            'backupSize' => 'string',
            'backupCount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * extraInfo  资源附加信息
    * id  待备份资源id
    * name  待备份资源名称
    * protectStatus  保护状态。available（可用），error（错误），protecting（备份中），restoring（恢复中），removing（删除中）。
    * resourceSize  资源已分配容量,单位为GB
    * type  待备份资源的类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2
    * backupSize  副本大小
    * backupCount  副本数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'extraInfo' => null,
        'id' => null,
        'name' => null,
        'protectStatus' => null,
        'resourceSize' => null,
        'type' => null,
        'backupSize' => null,
        'backupCount' => null
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
    * extraInfo  资源附加信息
    * id  待备份资源id
    * name  待备份资源名称
    * protectStatus  保护状态。available（可用），error（错误），protecting（备份中），restoring（恢复中），removing（删除中）。
    * resourceSize  资源已分配容量,单位为GB
    * type  待备份资源的类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2
    * backupSize  副本大小
    * backupCount  副本数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'extraInfo' => 'extra_info',
            'id' => 'id',
            'name' => 'name',
            'protectStatus' => 'protect_status',
            'resourceSize' => 'resource_size',
            'type' => 'type',
            'backupSize' => 'backup_size',
            'backupCount' => 'backup_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * extraInfo  资源附加信息
    * id  待备份资源id
    * name  待备份资源名称
    * protectStatus  保护状态。available（可用），error（错误），protecting（备份中），restoring（恢复中），removing（删除中）。
    * resourceSize  资源已分配容量,单位为GB
    * type  待备份资源的类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2
    * backupSize  副本大小
    * backupCount  副本数量
    *
    * @var string[]
    */
    protected static $setters = [
            'extraInfo' => 'setExtraInfo',
            'id' => 'setId',
            'name' => 'setName',
            'protectStatus' => 'setProtectStatus',
            'resourceSize' => 'setResourceSize',
            'type' => 'setType',
            'backupSize' => 'setBackupSize',
            'backupCount' => 'setBackupCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * extraInfo  资源附加信息
    * id  待备份资源id
    * name  待备份资源名称
    * protectStatus  保护状态。available（可用），error（错误），protecting（备份中），restoring（恢复中），removing（删除中）。
    * resourceSize  资源已分配容量,单位为GB
    * type  待备份资源的类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2
    * backupSize  副本大小
    * backupCount  副本数量
    *
    * @var string[]
    */
    protected static $getters = [
            'extraInfo' => 'getExtraInfo',
            'id' => 'getId',
            'name' => 'getName',
            'protectStatus' => 'getProtectStatus',
            'resourceSize' => 'getResourceSize',
            'type' => 'getType',
            'backupSize' => 'getBackupSize',
            'backupCount' => 'getBackupCount'
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
    const PROTECT_STATUS_AVAILABLE = 'available';
    const PROTECT_STATUS_ERROR = 'error';
    const PROTECT_STATUS_PROTECTING = 'protecting';
    const PROTECT_STATUS_RESTORING = 'restoring';
    const PROTECT_STATUS_REMOVING = 'removing';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectStatusAllowableValues()
    {
        return [
            self::PROTECT_STATUS_AVAILABLE,
            self::PROTECT_STATUS_ERROR,
            self::PROTECT_STATUS_PROTECTING,
            self::PROTECT_STATUS_RESTORING,
            self::PROTECT_STATUS_REMOVING,
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
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['backupSize'] = isset($data['backupSize']) ? $data['backupSize'] : null;
        $this->container['backupCount'] = isset($data['backupCount']) ? $data['backupCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            $allowedValues = $this->getProtectStatusAllowableValues();
                if (!is_null($this->container['protectStatus']) && !in_array($this->container['protectStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets extraInfo
    *  资源附加信息
    *
    * @return string|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param string|null $extraInfo 资源附加信息
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets id
    *  待备份资源id
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
    * @param string $id 待备份资源id
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
    *  待备份资源名称
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
    * @param string $name 待备份资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protectStatus
    *  保护状态。available（可用），error（错误），protecting（备份中），restoring（恢复中），removing（删除中）。
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 保护状态。available（可用），error（错误），protecting（备份中），restoring（恢复中），removing（删除中）。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets resourceSize
    *  资源已分配容量,单位为GB
    *
    * @return string|null
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param string|null $resourceSize 资源已分配容量,单位为GB
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets type
    *  待备份资源的类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 待备份资源的类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets backupSize
    *  副本大小
    *
    * @return string|null
    */
    public function getBackupSize()
    {
        return $this->container['backupSize'];
    }

    /**
    * Sets backupSize
    *
    * @param string|null $backupSize 副本大小
    *
    * @return $this
    */
    public function setBackupSize($backupSize)
    {
        $this->container['backupSize'] = $backupSize;
        return $this;
    }

    /**
    * Gets backupCount
    *  副本数量
    *
    * @return string|null
    */
    public function getBackupCount()
    {
        return $this->container['backupCount'];
    }

    /**
    * Sets backupCount
    *
    * @param string|null $backupCount 副本数量
    *
    * @return $this
    */
    public function setBackupCount($backupCount)
    {
        $this->container['backupCount'] = $backupCount;
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

