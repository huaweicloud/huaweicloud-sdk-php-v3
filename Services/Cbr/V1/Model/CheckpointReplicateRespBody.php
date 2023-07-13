<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckpointReplicateRespBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckpointReplicateRespBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backups  待复制的备份列表
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  备份提供商ID
    * sourceRegion  复制的源区域
    * vaultId  存储库ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backups' => '\HuaweiCloud\SDK\Cbr\V1\Model\CheckpointReplicateRespbackups[]',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'destinationVaultId' => 'string',
            'projectId' => 'string',
            'providerId' => 'string',
            'sourceRegion' => 'string',
            'vaultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backups  待复制的备份列表
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  备份提供商ID
    * sourceRegion  复制的源区域
    * vaultId  存储库ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backups' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'destinationVaultId' => null,
        'projectId' => null,
        'providerId' => null,
        'sourceRegion' => null,
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
    * backups  待复制的备份列表
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  备份提供商ID
    * sourceRegion  复制的源区域
    * vaultId  存储库ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backups' => 'backups',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'destinationVaultId' => 'destination_vault_id',
            'projectId' => 'project_id',
            'providerId' => 'provider_id',
            'sourceRegion' => 'source_region',
            'vaultId' => 'vault_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backups  待复制的备份列表
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  备份提供商ID
    * sourceRegion  复制的源区域
    * vaultId  存储库ID
    *
    * @var string[]
    */
    protected static $setters = [
            'backups' => 'setBackups',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'destinationVaultId' => 'setDestinationVaultId',
            'projectId' => 'setProjectId',
            'providerId' => 'setProviderId',
            'sourceRegion' => 'setSourceRegion',
            'vaultId' => 'setVaultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backups  待复制的备份列表
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  目标区域存储库ID
    * projectId  执行复制的项目ID
    * providerId  备份提供商ID
    * sourceRegion  复制的源区域
    * vaultId  存储库ID
    *
    * @var string[]
    */
    protected static $getters = [
            'backups' => 'getBackups',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'destinationVaultId' => 'getDestinationVaultId',
            'projectId' => 'getProjectId',
            'providerId' => 'getProviderId',
            'sourceRegion' => 'getSourceRegion',
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
        $this->container['backups'] = isset($data['backups']) ? $data['backups'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['sourceRegion'] = isset($data['sourceRegion']) ? $data['sourceRegion'] : null;
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
        if ($this->container['backups'] === null) {
            $invalidProperties[] = "'backups' can't be null";
        }
        if ($this->container['destinationProjectId'] === null) {
            $invalidProperties[] = "'destinationProjectId' can't be null";
        }
        if ($this->container['destinationRegion'] === null) {
            $invalidProperties[] = "'destinationRegion' can't be null";
        }
        if ($this->container['destinationVaultId'] === null) {
            $invalidProperties[] = "'destinationVaultId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['providerId'] === null) {
            $invalidProperties[] = "'providerId' can't be null";
        }
        if ($this->container['sourceRegion'] === null) {
            $invalidProperties[] = "'sourceRegion' can't be null";
        }
        if ($this->container['vaultId'] === null) {
            $invalidProperties[] = "'vaultId' can't be null";
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
    * Gets backups
    *  待复制的备份列表
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\CheckpointReplicateRespbackups[]
    */
    public function getBackups()
    {
        return $this->container['backups'];
    }

    /**
    * Sets backups
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\CheckpointReplicateRespbackups[] $backups 待复制的备份列表
    *
    * @return $this
    */
    public function setBackups($backups)
    {
        $this->container['backups'] = $backups;
        return $this;
    }

    /**
    * Gets destinationProjectId
    *  复制的目标项目ID
    *
    * @return string
    */
    public function getDestinationProjectId()
    {
        return $this->container['destinationProjectId'];
    }

    /**
    * Sets destinationProjectId
    *
    * @param string $destinationProjectId 复制的目标项目ID
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
    * @return string
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string $destinationRegion 复制的目标区域
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
    *  目标区域存储库ID
    *
    * @return string
    */
    public function getDestinationVaultId()
    {
        return $this->container['destinationVaultId'];
    }

    /**
    * Sets destinationVaultId
    *
    * @param string $destinationVaultId 目标区域存储库ID
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
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 执行复制的项目ID
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
    *  备份提供商ID
    *
    * @return string
    */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
    * Sets providerId
    *
    * @param string $providerId 备份提供商ID
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets sourceRegion
    *  复制的源区域
    *
    * @return string
    */
    public function getSourceRegion()
    {
        return $this->container['sourceRegion'];
    }

    /**
    * Sets sourceRegion
    *
    * @param string $sourceRegion 复制的源区域
    *
    * @return $this
    */
    public function setSourceRegion($sourceRegion)
    {
        $this->container['sourceRegion'] = $sourceRegion;
        return $this;
    }

    /**
    * Gets vaultId
    *  存储库ID
    *
    * @return string
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string $vaultId 存储库ID
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

