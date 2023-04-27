<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Member implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Member';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  共享状态
    * createdAt  共享时间，例如:\"2020-02-05T10:38:34.209782\"
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * backupId  备份副本id
    * imageId  接受的共享备份副本注册的镜像id
    * destProjectId  接受备份共享的项目id
    * vaultId  目标端接受共享备份的存储库id
    * id  共享记录id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'backupId' => 'string',
            'imageId' => 'string',
            'destProjectId' => 'string',
            'vaultId' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  共享状态
    * createdAt  共享时间，例如:\"2020-02-05T10:38:34.209782\"
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * backupId  备份副本id
    * imageId  接受的共享备份副本注册的镜像id
    * destProjectId  接受备份共享的项目id
    * vaultId  目标端接受共享备份的存储库id
    * id  共享记录id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'backupId' => null,
        'imageId' => null,
        'destProjectId' => null,
        'vaultId' => null,
        'id' => null
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
    * status  共享状态
    * createdAt  共享时间，例如:\"2020-02-05T10:38:34.209782\"
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * backupId  备份副本id
    * imageId  接受的共享备份副本注册的镜像id
    * destProjectId  接受备份共享的项目id
    * vaultId  目标端接受共享备份的存储库id
    * id  共享记录id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'backupId' => 'backup_id',
            'imageId' => 'image_id',
            'destProjectId' => 'dest_project_id',
            'vaultId' => 'vault_id',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  共享状态
    * createdAt  共享时间，例如:\"2020-02-05T10:38:34.209782\"
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * backupId  备份副本id
    * imageId  接受的共享备份副本注册的镜像id
    * destProjectId  接受备份共享的项目id
    * vaultId  目标端接受共享备份的存储库id
    * id  共享记录id
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'backupId' => 'setBackupId',
            'imageId' => 'setImageId',
            'destProjectId' => 'setDestProjectId',
            'vaultId' => 'setVaultId',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  共享状态
    * createdAt  共享时间，例如:\"2020-02-05T10:38:34.209782\"
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * backupId  备份副本id
    * imageId  接受的共享备份副本注册的镜像id
    * destProjectId  接受备份共享的项目id
    * vaultId  目标端接受共享备份的存储库id
    * id  共享记录id
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'backupId' => 'getBackupId',
            'imageId' => 'getImageId',
            'destProjectId' => 'getDestProjectId',
            'vaultId' => 'getVaultId',
            'id' => 'getId'
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
    const STATUS_PENDING = 'pending';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_ACCEPTED,
            self::STATUS_REJECTED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['destProjectId'] = isset($data['destProjectId']) ? $data['destProjectId'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets status
    *  共享状态
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
    * @param string $status 共享状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  共享时间，例如:\"2020-02-05T10:38:34.209782\"
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
    * @param string|null $createdAt 共享时间，例如:\"2020-02-05T10:38:34.209782\"
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
    *  更新时间，例如:\"2020-02-05T10:38:34.209782\"
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
    * @param string|null $updatedAt 更新时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets backupId
    *  备份副本id
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份副本id
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets imageId
    *  接受的共享备份副本注册的镜像id
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 接受的共享备份副本注册的镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets destProjectId
    *  接受备份共享的项目id
    *
    * @return string|null
    */
    public function getDestProjectId()
    {
        return $this->container['destProjectId'];
    }

    /**
    * Sets destProjectId
    *
    * @param string|null $destProjectId 接受备份共享的项目id
    *
    * @return $this
    */
    public function setDestProjectId($destProjectId)
    {
        $this->container['destProjectId'] = $destProjectId;
        return $this;
    }

    /**
    * Gets vaultId
    *  目标端接受共享备份的存储库id
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 目标端接受共享备份的存储库id
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets id
    *  共享记录id
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
    * @param string|null $id 共享记录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

