<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferPolicyParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferPolicyParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * prefix  转储目标前缀
    * destination  转储目标桶
    * period  自动转储周期
    * backupType  转储备份类型， db:自动备份 log:增量备份, snapshot:手动备份 snapshot:手动备份 db:自动备份 log:日志备份
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'prefix' => 'string',
            'destination' => 'string',
            'period' => 'string',
            'backupType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * prefix  转储目标前缀
    * destination  转储目标桶
    * period  自动转储周期
    * backupType  转储备份类型， db:自动备份 log:增量备份, snapshot:手动备份 snapshot:手动备份 db:自动备份 log:日志备份
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'prefix' => null,
        'destination' => null,
        'period' => null,
        'backupType' => null
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
    * prefix  转储目标前缀
    * destination  转储目标桶
    * period  自动转储周期
    * backupType  转储备份类型， db:自动备份 log:增量备份, snapshot:手动备份 snapshot:手动备份 db:自动备份 log:日志备份
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'prefix' => 'prefix',
            'destination' => 'destination',
            'period' => 'period',
            'backupType' => 'backup_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * prefix  转储目标前缀
    * destination  转储目标桶
    * period  自动转储周期
    * backupType  转储备份类型， db:自动备份 log:增量备份, snapshot:手动备份 snapshot:手动备份 db:自动备份 log:日志备份
    *
    * @var string[]
    */
    protected static $setters = [
            'prefix' => 'setPrefix',
            'destination' => 'setDestination',
            'period' => 'setPeriod',
            'backupType' => 'setBackupType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * prefix  转储目标前缀
    * destination  转储目标桶
    * period  自动转储周期
    * backupType  转储备份类型， db:自动备份 log:增量备份, snapshot:手动备份 snapshot:手动备份 db:自动备份 log:日志备份
    *
    * @var string[]
    */
    protected static $getters = [
            'prefix' => 'getPrefix',
            'destination' => 'getDestination',
            'period' => 'getPeriod',
            'backupType' => 'getBackupType'
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
    const BACKUP_TYPE_DB = 'db';
    const BACKUP_TYPE_LOG = 'log';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackupTypeAllowableValues()
    {
        return [
            self::BACKUP_TYPE_DB,
            self::BACKUP_TYPE_LOG,
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
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) > 128)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
            if ((mb_strlen($this->container['destination']) > 128)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['backupType'] === null) {
            $invalidProperties[] = "'backupType' can't be null";
        }
            $allowedValues = $this->getBackupTypeAllowableValues();
                if (!is_null($this->container['backupType']) && !in_array($this->container['backupType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backupType', must be one of '%s'",
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
    * Gets prefix
    *  转储目标前缀
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 转储目标前缀
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets destination
    *  转储目标桶
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 转储目标桶
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets period
    *  自动转储周期
    *
    * @return string
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string $period 自动转储周期
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets backupType
    *  转储备份类型， db:自动备份 log:增量备份, snapshot:手动备份 snapshot:手动备份 db:自动备份 log:日志备份
    *
    * @return string
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string $backupType 转储备份类型， db:自动备份 log:增量备份, snapshot:手动备份 snapshot:手动备份 db:自动备份 log:日志备份
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
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

