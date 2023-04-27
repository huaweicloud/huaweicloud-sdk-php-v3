<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplicationRecordGet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplicationRecordGet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  复制的开始时间
    * destinationBackupId  复制的目的备份ID
    * destinationCheckpointId  复制的目的备份记录ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标存储库ID
    * extraInfo  extraInfo
    * id  复制记录ID
    * sourceBackupId  复制的源备份ID
    * sourceCheckpointId  复制的源备份记录ID
    * sourceProjectId  复制的源项目ID
    * sourceRegion  复制的源区域
    * status  复制的状态
    * vaultId  备份所在的存储库ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'destinationBackupId' => 'string',
            'destinationCheckpointId' => 'string',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'destinationVaultId' => 'string',
            'extraInfo' => '\HuaweiCloud\SDK\Cbr\V1\Model\ReplicationRecordsExtraInfo',
            'id' => 'string',
            'sourceBackupId' => 'string',
            'sourceCheckpointId' => 'string',
            'sourceProjectId' => 'string',
            'sourceRegion' => 'string',
            'status' => 'string',
            'vaultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  复制的开始时间
    * destinationBackupId  复制的目的备份ID
    * destinationCheckpointId  复制的目的备份记录ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标存储库ID
    * extraInfo  extraInfo
    * id  复制记录ID
    * sourceBackupId  复制的源备份ID
    * sourceCheckpointId  复制的源备份记录ID
    * sourceProjectId  复制的源项目ID
    * sourceRegion  复制的源区域
    * status  复制的状态
    * vaultId  备份所在的存储库ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'destinationBackupId' => null,
        'destinationCheckpointId' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'destinationVaultId' => null,
        'extraInfo' => null,
        'id' => null,
        'sourceBackupId' => null,
        'sourceCheckpointId' => null,
        'sourceProjectId' => null,
        'sourceRegion' => null,
        'status' => null,
        'vaultId' => null
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
    * createdAt  复制的开始时间
    * destinationBackupId  复制的目的备份ID
    * destinationCheckpointId  复制的目的备份记录ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标存储库ID
    * extraInfo  extraInfo
    * id  复制记录ID
    * sourceBackupId  复制的源备份ID
    * sourceCheckpointId  复制的源备份记录ID
    * sourceProjectId  复制的源项目ID
    * sourceRegion  复制的源区域
    * status  复制的状态
    * vaultId  备份所在的存储库ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'destinationBackupId' => 'destination_backup_id',
            'destinationCheckpointId' => 'destination_checkpoint_id',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'destinationVaultId' => 'destination_vault_id',
            'extraInfo' => 'extra_info',
            'id' => 'id',
            'sourceBackupId' => 'source_backup_id',
            'sourceCheckpointId' => 'source_checkpoint_id',
            'sourceProjectId' => 'source_project_id',
            'sourceRegion' => 'source_region',
            'status' => 'status',
            'vaultId' => 'vault_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  复制的开始时间
    * destinationBackupId  复制的目的备份ID
    * destinationCheckpointId  复制的目的备份记录ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标存储库ID
    * extraInfo  extraInfo
    * id  复制记录ID
    * sourceBackupId  复制的源备份ID
    * sourceCheckpointId  复制的源备份记录ID
    * sourceProjectId  复制的源项目ID
    * sourceRegion  复制的源区域
    * status  复制的状态
    * vaultId  备份所在的存储库ID
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'destinationBackupId' => 'setDestinationBackupId',
            'destinationCheckpointId' => 'setDestinationCheckpointId',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'destinationVaultId' => 'setDestinationVaultId',
            'extraInfo' => 'setExtraInfo',
            'id' => 'setId',
            'sourceBackupId' => 'setSourceBackupId',
            'sourceCheckpointId' => 'setSourceCheckpointId',
            'sourceProjectId' => 'setSourceProjectId',
            'sourceRegion' => 'setSourceRegion',
            'status' => 'setStatus',
            'vaultId' => 'setVaultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  复制的开始时间
    * destinationBackupId  复制的目的备份ID
    * destinationCheckpointId  复制的目的备份记录ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标存储库ID
    * extraInfo  extraInfo
    * id  复制记录ID
    * sourceBackupId  复制的源备份ID
    * sourceCheckpointId  复制的源备份记录ID
    * sourceProjectId  复制的源项目ID
    * sourceRegion  复制的源区域
    * status  复制的状态
    * vaultId  备份所在的存储库ID
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'destinationBackupId' => 'getDestinationBackupId',
            'destinationCheckpointId' => 'getDestinationCheckpointId',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'destinationVaultId' => 'getDestinationVaultId',
            'extraInfo' => 'getExtraInfo',
            'id' => 'getId',
            'sourceBackupId' => 'getSourceBackupId',
            'sourceCheckpointId' => 'getSourceCheckpointId',
            'sourceProjectId' => 'getSourceProjectId',
            'sourceRegion' => 'getSourceRegion',
            'status' => 'getStatus',
            'vaultId' => 'getVaultId'
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
    const STATUS_REPLICATING = 'replicating';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';
    const STATUS_SKIP = 'skip';
    const STATUS_WAITING_REPLICATE = 'waiting_replicate';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_REPLICATING,
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_SKIP,
            self::STATUS_WAITING_REPLICATE,
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['destinationBackupId'] = isset($data['destinationBackupId']) ? $data['destinationBackupId'] : null;
        $this->container['destinationCheckpointId'] = isset($data['destinationCheckpointId']) ? $data['destinationCheckpointId'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sourceBackupId'] = isset($data['sourceBackupId']) ? $data['sourceBackupId'] : null;
        $this->container['sourceCheckpointId'] = isset($data['sourceCheckpointId']) ? $data['sourceCheckpointId'] : null;
        $this->container['sourceProjectId'] = isset($data['sourceProjectId']) ? $data['sourceProjectId'] : null;
        $this->container['sourceRegion'] = isset($data['sourceRegion']) ? $data['sourceRegion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
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
    * Gets createdAt
    *  复制的开始时间
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
    * @param string|null $createdAt 复制的开始时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets destinationBackupId
    *  复制的目的备份ID
    *
    * @return string|null
    */
    public function getDestinationBackupId()
    {
        return $this->container['destinationBackupId'];
    }

    /**
    * Sets destinationBackupId
    *
    * @param string|null $destinationBackupId 复制的目的备份ID
    *
    * @return $this
    */
    public function setDestinationBackupId($destinationBackupId)
    {
        $this->container['destinationBackupId'] = $destinationBackupId;
        return $this;
    }

    /**
    * Gets destinationCheckpointId
    *  复制的目的备份记录ID
    *
    * @return string|null
    */
    public function getDestinationCheckpointId()
    {
        return $this->container['destinationCheckpointId'];
    }

    /**
    * Sets destinationCheckpointId
    *
    * @param string|null $destinationCheckpointId 复制的目的备份记录ID
    *
    * @return $this
    */
    public function setDestinationCheckpointId($destinationCheckpointId)
    {
        $this->container['destinationCheckpointId'] = $destinationCheckpointId;
        return $this;
    }

    /**
    * Gets destinationProjectId
    *  复制的目标项目ID
    *
    * @return string|null
    */
    public function getDestinationProjectId()
    {
        return $this->container['destinationProjectId'];
    }

    /**
    * Sets destinationProjectId
    *
    * @param string|null $destinationProjectId 复制的目标项目ID
    *
    * @return $this
    */
    public function setDestinationProjectId($destinationProjectId)
    {
        $this->container['destinationProjectId'] = $destinationProjectId;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  复制的目标区域
    *
    * @return string|null
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string|null $destinationRegion 复制的目标区域
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets destinationVaultId
    *  目标存储库ID
    *
    * @return string|null
    */
    public function getDestinationVaultId()
    {
        return $this->container['destinationVaultId'];
    }

    /**
    * Sets destinationVaultId
    *
    * @param string|null $destinationVaultId 目标存储库ID
    *
    * @return $this
    */
    public function setDestinationVaultId($destinationVaultId)
    {
        $this->container['destinationVaultId'] = $destinationVaultId;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\ReplicationRecordsExtraInfo|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\ReplicationRecordsExtraInfo|null $extraInfo extraInfo
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
    *  复制记录ID
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
    * @param string $id 复制记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sourceBackupId
    *  复制的源备份ID
    *
    * @return string|null
    */
    public function getSourceBackupId()
    {
        return $this->container['sourceBackupId'];
    }

    /**
    * Sets sourceBackupId
    *
    * @param string|null $sourceBackupId 复制的源备份ID
    *
    * @return $this
    */
    public function setSourceBackupId($sourceBackupId)
    {
        $this->container['sourceBackupId'] = $sourceBackupId;
        return $this;
    }

    /**
    * Gets sourceCheckpointId
    *  复制的源备份记录ID
    *
    * @return string|null
    */
    public function getSourceCheckpointId()
    {
        return $this->container['sourceCheckpointId'];
    }

    /**
    * Sets sourceCheckpointId
    *
    * @param string|null $sourceCheckpointId 复制的源备份记录ID
    *
    * @return $this
    */
    public function setSourceCheckpointId($sourceCheckpointId)
    {
        $this->container['sourceCheckpointId'] = $sourceCheckpointId;
        return $this;
    }

    /**
    * Gets sourceProjectId
    *  复制的源项目ID
    *
    * @return string|null
    */
    public function getSourceProjectId()
    {
        return $this->container['sourceProjectId'];
    }

    /**
    * Sets sourceProjectId
    *
    * @param string|null $sourceProjectId 复制的源项目ID
    *
    * @return $this
    */
    public function setSourceProjectId($sourceProjectId)
    {
        $this->container['sourceProjectId'] = $sourceProjectId;
        return $this;
    }

    /**
    * Gets sourceRegion
    *  复制的源区域
    *
    * @return string|null
    */
    public function getSourceRegion()
    {
        return $this->container['sourceRegion'];
    }

    /**
    * Sets sourceRegion
    *
    * @param string|null $sourceRegion 复制的源区域
    *
    * @return $this
    */
    public function setSourceRegion($sourceRegion)
    {
        $this->container['sourceRegion'] = $sourceRegion;
        return $this;
    }

    /**
    * Gets status
    *  复制的状态
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
    * @param string|null $status 复制的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vaultId
    *  备份所在的存储库ID
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
    * @param string|null $vaultId 备份所在的存储库ID
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
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

