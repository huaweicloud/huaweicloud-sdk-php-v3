<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupReplicateRespBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupReplicateRespBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  待复制的备份ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  资源类型id
    * replicationRecordId  复制记录ID
    * sourceRegion  复制的源区域
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'destinationVaultId' => 'string',
            'projectId' => 'string',
            'providerId' => 'string',
            'replicationRecordId' => 'string',
            'sourceRegion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  待复制的备份ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  资源类型id
    * replicationRecordId  复制记录ID
    * sourceRegion  复制的源区域
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'destinationVaultId' => null,
        'projectId' => null,
        'providerId' => null,
        'replicationRecordId' => null,
        'sourceRegion' => null
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
    * backupId  待复制的备份ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  资源类型id
    * replicationRecordId  复制记录ID
    * sourceRegion  复制的源区域
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'destinationVaultId' => 'destination_vault_id',
            'projectId' => 'project_id',
            'providerId' => 'provider_id',
            'replicationRecordId' => 'replication_record_id',
            'sourceRegion' => 'source_region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  待复制的备份ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  资源类型id
    * replicationRecordId  复制记录ID
    * sourceRegion  复制的源区域
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'destinationVaultId' => 'setDestinationVaultId',
            'projectId' => 'setProjectId',
            'providerId' => 'setProviderId',
            'replicationRecordId' => 'setReplicationRecordId',
            'sourceRegion' => 'setSourceRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  待复制的备份ID
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  资源类型id
    * replicationRecordId  复制记录ID
    * sourceRegion  复制的源区域
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'destinationVaultId' => 'getDestinationVaultId',
            'projectId' => 'getProjectId',
            'providerId' => 'getProviderId',
            'replicationRecordId' => 'getReplicationRecordId',
            'sourceRegion' => 'getSourceRegion'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['replicationRecordId'] = isset($data['replicationRecordId']) ? $data['replicationRecordId'] : null;
        $this->container['sourceRegion'] = isset($data['sourceRegion']) ? $data['sourceRegion'] : null;
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
    * Gets backupId
    *  待复制的备份ID
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
    * @param string|null $backupId 待复制的备份ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
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
    *  复制的目标区域存储库ID
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
    * @param string|null $destinationVaultId 复制的目标区域存储库ID
    *
    * @return $this
    */
    public function setDestinationVaultId($destinationVaultId)
    {
        $this->container['destinationVaultId'] = $destinationVaultId;
        return $this;
    }

    /**
    * Gets projectId
    *  执行复制的项目ID
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
    * @param string|null $projectId 执行复制的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets providerId
    *  资源类型id
    *
    * @return string|null
    */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
    * Sets providerId
    *
    * @param string|null $providerId 资源类型id
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets replicationRecordId
    *  复制记录ID
    *
    * @return string|null
    */
    public function getReplicationRecordId()
    {
        return $this->container['replicationRecordId'];
    }

    /**
    * Sets replicationRecordId
    *
    * @param string|null $replicationRecordId 复制记录ID
    *
    * @return $this
    */
    public function setReplicationRecordId($replicationRecordId)
    {
        $this->container['replicationRecordId'] = $replicationRecordId;
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

