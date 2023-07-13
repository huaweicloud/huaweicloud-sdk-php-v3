<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpExtendInfoReplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpExtendInfoReplication';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destinationBackupId  目标副本ID
    * destinationCheckpointId  目标还原点ID
    * destinationProjectId  目标project_id
    * destinationRegion  目标区域
    * sourceBackupId  源副本ID
    * sourceCheckpointId  源还原点ID
    * sourceProjectId  源project_id
    * sourceRegion  源区域
    * sourceBackupName  源备份名称
    * destinationBackupName  目标备份名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destinationBackupId' => 'string',
            'destinationCheckpointId' => 'string',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'sourceBackupId' => 'string',
            'sourceCheckpointId' => 'string',
            'sourceProjectId' => 'string',
            'sourceRegion' => 'string',
            'sourceBackupName' => 'string',
            'destinationBackupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destinationBackupId  目标副本ID
    * destinationCheckpointId  目标还原点ID
    * destinationProjectId  目标project_id
    * destinationRegion  目标区域
    * sourceBackupId  源副本ID
    * sourceCheckpointId  源还原点ID
    * sourceProjectId  源project_id
    * sourceRegion  源区域
    * sourceBackupName  源备份名称
    * destinationBackupName  目标备份名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destinationBackupId' => null,
        'destinationCheckpointId' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'sourceBackupId' => null,
        'sourceCheckpointId' => null,
        'sourceProjectId' => null,
        'sourceRegion' => null,
        'sourceBackupName' => null,
        'destinationBackupName' => null
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
    * destinationBackupId  目标副本ID
    * destinationCheckpointId  目标还原点ID
    * destinationProjectId  目标project_id
    * destinationRegion  目标区域
    * sourceBackupId  源副本ID
    * sourceCheckpointId  源还原点ID
    * sourceProjectId  源project_id
    * sourceRegion  源区域
    * sourceBackupName  源备份名称
    * destinationBackupName  目标备份名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destinationBackupId' => 'destination_backup_id',
            'destinationCheckpointId' => 'destination_checkpoint_id',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'sourceBackupId' => 'source_backup_id',
            'sourceCheckpointId' => 'source_checkpoint_id',
            'sourceProjectId' => 'source_project_id',
            'sourceRegion' => 'source_region',
            'sourceBackupName' => 'source_backup_name',
            'destinationBackupName' => 'destination_backup_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destinationBackupId  目标副本ID
    * destinationCheckpointId  目标还原点ID
    * destinationProjectId  目标project_id
    * destinationRegion  目标区域
    * sourceBackupId  源副本ID
    * sourceCheckpointId  源还原点ID
    * sourceProjectId  源project_id
    * sourceRegion  源区域
    * sourceBackupName  源备份名称
    * destinationBackupName  目标备份名称
    *
    * @var string[]
    */
    protected static $setters = [
            'destinationBackupId' => 'setDestinationBackupId',
            'destinationCheckpointId' => 'setDestinationCheckpointId',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'sourceBackupId' => 'setSourceBackupId',
            'sourceCheckpointId' => 'setSourceCheckpointId',
            'sourceProjectId' => 'setSourceProjectId',
            'sourceRegion' => 'setSourceRegion',
            'sourceBackupName' => 'setSourceBackupName',
            'destinationBackupName' => 'setDestinationBackupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destinationBackupId  目标副本ID
    * destinationCheckpointId  目标还原点ID
    * destinationProjectId  目标project_id
    * destinationRegion  目标区域
    * sourceBackupId  源副本ID
    * sourceCheckpointId  源还原点ID
    * sourceProjectId  源project_id
    * sourceRegion  源区域
    * sourceBackupName  源备份名称
    * destinationBackupName  目标备份名称
    *
    * @var string[]
    */
    protected static $getters = [
            'destinationBackupId' => 'getDestinationBackupId',
            'destinationCheckpointId' => 'getDestinationCheckpointId',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'sourceBackupId' => 'getSourceBackupId',
            'sourceCheckpointId' => 'getSourceCheckpointId',
            'sourceProjectId' => 'getSourceProjectId',
            'sourceRegion' => 'getSourceRegion',
            'sourceBackupName' => 'getSourceBackupName',
            'destinationBackupName' => 'getDestinationBackupName'
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
        $this->container['destinationBackupId'] = isset($data['destinationBackupId']) ? $data['destinationBackupId'] : null;
        $this->container['destinationCheckpointId'] = isset($data['destinationCheckpointId']) ? $data['destinationCheckpointId'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['sourceBackupId'] = isset($data['sourceBackupId']) ? $data['sourceBackupId'] : null;
        $this->container['sourceCheckpointId'] = isset($data['sourceCheckpointId']) ? $data['sourceCheckpointId'] : null;
        $this->container['sourceProjectId'] = isset($data['sourceProjectId']) ? $data['sourceProjectId'] : null;
        $this->container['sourceRegion'] = isset($data['sourceRegion']) ? $data['sourceRegion'] : null;
        $this->container['sourceBackupName'] = isset($data['sourceBackupName']) ? $data['sourceBackupName'] : null;
        $this->container['destinationBackupName'] = isset($data['destinationBackupName']) ? $data['destinationBackupName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destinationProjectId'] === null) {
            $invalidProperties[] = "'destinationProjectId' can't be null";
        }
        if ($this->container['destinationRegion'] === null) {
            $invalidProperties[] = "'destinationRegion' can't be null";
        }
        if ($this->container['sourceBackupId'] === null) {
            $invalidProperties[] = "'sourceBackupId' can't be null";
        }
        if ($this->container['sourceProjectId'] === null) {
            $invalidProperties[] = "'sourceProjectId' can't be null";
        }
        if ($this->container['sourceRegion'] === null) {
            $invalidProperties[] = "'sourceRegion' can't be null";
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
    * Gets destinationBackupId
    *  目标副本ID
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
    * @param string|null $destinationBackupId 目标副本ID
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
    *  目标还原点ID
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
    * @param string|null $destinationCheckpointId 目标还原点ID
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
    *  目标project_id
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
    * @param string $destinationProjectId 目标project_id
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
    *  目标区域
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
    * @param string $destinationRegion 目标区域
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets sourceBackupId
    *  源副本ID
    *
    * @return string
    */
    public function getSourceBackupId()
    {
        return $this->container['sourceBackupId'];
    }

    /**
    * Sets sourceBackupId
    *
    * @param string $sourceBackupId 源副本ID
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
    *  源还原点ID
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
    * @param string|null $sourceCheckpointId 源还原点ID
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
    *  源project_id
    *
    * @return string
    */
    public function getSourceProjectId()
    {
        return $this->container['sourceProjectId'];
    }

    /**
    * Sets sourceProjectId
    *
    * @param string $sourceProjectId 源project_id
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
    *  源区域
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
    * @param string $sourceRegion 源区域
    *
    * @return $this
    */
    public function setSourceRegion($sourceRegion)
    {
        $this->container['sourceRegion'] = $sourceRegion;
        return $this;
    }

    /**
    * Gets sourceBackupName
    *  源备份名称
    *
    * @return string|null
    */
    public function getSourceBackupName()
    {
        return $this->container['sourceBackupName'];
    }

    /**
    * Sets sourceBackupName
    *
    * @param string|null $sourceBackupName 源备份名称
    *
    * @return $this
    */
    public function setSourceBackupName($sourceBackupName)
    {
        $this->container['sourceBackupName'] = $sourceBackupName;
        return $this;
    }

    /**
    * Gets destinationBackupName
    *  目标备份名称
    *
    * @return string|null
    */
    public function getDestinationBackupName()
    {
        return $this->container['destinationBackupName'];
    }

    /**
    * Sets destinationBackupName
    *
    * @param string|null $destinationBackupName 目标备份名称
    *
    * @return $this
    */
    public function setDestinationBackupName($destinationBackupName)
    {
        $this->container['destinationBackupName'] = $destinationBackupName;
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

