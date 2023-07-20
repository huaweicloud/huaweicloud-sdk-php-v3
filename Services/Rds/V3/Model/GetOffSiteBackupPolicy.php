<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetOffSiteBackupPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetOffSiteBackupPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupType  指定备份的类型。取值如下：  - auto：自动全量备份。 - incremental：自动增量备份。 - manual：手动备份，仅SQL Server返回该备份类型 。
    * keepDays  备份文件可以保存的天数。
    * destinationRegion  设置跨区域备份策略的目标区域ID。
    * destinationProjectId  设置跨区域备份策略的目标project ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupType' => 'string',
            'keepDays' => 'int',
            'destinationRegion' => 'string',
            'destinationProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupType  指定备份的类型。取值如下：  - auto：自动全量备份。 - incremental：自动增量备份。 - manual：手动备份，仅SQL Server返回该备份类型 。
    * keepDays  备份文件可以保存的天数。
    * destinationRegion  设置跨区域备份策略的目标区域ID。
    * destinationProjectId  设置跨区域备份策略的目标project ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupType' => null,
        'keepDays' => null,
        'destinationRegion' => null,
        'destinationProjectId' => null
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
    * backupType  指定备份的类型。取值如下：  - auto：自动全量备份。 - incremental：自动增量备份。 - manual：手动备份，仅SQL Server返回该备份类型 。
    * keepDays  备份文件可以保存的天数。
    * destinationRegion  设置跨区域备份策略的目标区域ID。
    * destinationProjectId  设置跨区域备份策略的目标project ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupType' => 'backup_type',
            'keepDays' => 'keep_days',
            'destinationRegion' => 'destination_region',
            'destinationProjectId' => 'destination_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupType  指定备份的类型。取值如下：  - auto：自动全量备份。 - incremental：自动增量备份。 - manual：手动备份，仅SQL Server返回该备份类型 。
    * keepDays  备份文件可以保存的天数。
    * destinationRegion  设置跨区域备份策略的目标区域ID。
    * destinationProjectId  设置跨区域备份策略的目标project ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupType' => 'setBackupType',
            'keepDays' => 'setKeepDays',
            'destinationRegion' => 'setDestinationRegion',
            'destinationProjectId' => 'setDestinationProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupType  指定备份的类型。取值如下：  - auto：自动全量备份。 - incremental：自动增量备份。 - manual：手动备份，仅SQL Server返回该备份类型 。
    * keepDays  备份文件可以保存的天数。
    * destinationRegion  设置跨区域备份策略的目标区域ID。
    * destinationProjectId  设置跨区域备份策略的目标project ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupType' => 'getBackupType',
            'keepDays' => 'getKeepDays',
            'destinationRegion' => 'getDestinationRegion',
            'destinationProjectId' => 'getDestinationProjectId'
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
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
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
    * Gets backupType
    *  指定备份的类型。取值如下：  - auto：自动全量备份。 - incremental：自动增量备份。 - manual：手动备份，仅SQL Server返回该备份类型 。
    *
    * @return string|null
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string|null $backupType 指定备份的类型。取值如下：  - auto：自动全量备份。 - incremental：自动增量备份。 - manual：手动备份，仅SQL Server返回该备份类型 。
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets keepDays
    *  备份文件可以保存的天数。
    *
    * @return int|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int|null $keepDays 备份文件可以保存的天数。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  设置跨区域备份策略的目标区域ID。
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
    * @param string|null $destinationRegion 设置跨区域备份策略的目标区域ID。
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets destinationProjectId
    *  设置跨区域备份策略的目标project ID。
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
    * @param string|null $destinationProjectId 设置跨区域备份策略的目标project ID。
    *
    * @return $this
    */
    public function setDestinationProjectId($destinationProjectId)
    {
        $this->container['destinationProjectId'] = $destinationProjectId;
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

