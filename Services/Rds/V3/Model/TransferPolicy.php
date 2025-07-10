<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * settingId  策略id
    * instanceId  实例id
    * period  转储策略周期
    * backupType  转储备份类型
    * destination  目标存储
    * prefix  转储目标前缀
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'settingId' => 'string',
            'instanceId' => 'string',
            'period' => 'string',
            'backupType' => 'string',
            'destination' => 'string',
            'prefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * settingId  策略id
    * instanceId  实例id
    * period  转储策略周期
    * backupType  转储备份类型
    * destination  目标存储
    * prefix  转储目标前缀
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'settingId' => null,
        'instanceId' => null,
        'period' => null,
        'backupType' => null,
        'destination' => null,
        'prefix' => null
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
    * settingId  策略id
    * instanceId  实例id
    * period  转储策略周期
    * backupType  转储备份类型
    * destination  目标存储
    * prefix  转储目标前缀
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'settingId' => 'setting_id',
            'instanceId' => 'instance_id',
            'period' => 'period',
            'backupType' => 'backup_type',
            'destination' => 'destination',
            'prefix' => 'prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * settingId  策略id
    * instanceId  实例id
    * period  转储策略周期
    * backupType  转储备份类型
    * destination  目标存储
    * prefix  转储目标前缀
    *
    * @var string[]
    */
    protected static $setters = [
            'settingId' => 'setSettingId',
            'instanceId' => 'setInstanceId',
            'period' => 'setPeriod',
            'backupType' => 'setBackupType',
            'destination' => 'setDestination',
            'prefix' => 'setPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * settingId  策略id
    * instanceId  实例id
    * period  转储策略周期
    * backupType  转储备份类型
    * destination  目标存储
    * prefix  转储目标前缀
    *
    * @var string[]
    */
    protected static $getters = [
            'settingId' => 'getSettingId',
            'instanceId' => 'getInstanceId',
            'period' => 'getPeriod',
            'backupType' => 'getBackupType',
            'destination' => 'getDestination',
            'prefix' => 'getPrefix'
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
        $this->container['settingId'] = isset($data['settingId']) ? $data['settingId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
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
    * Gets settingId
    *  策略id
    *
    * @return string|null
    */
    public function getSettingId()
    {
        return $this->container['settingId'];
    }

    /**
    * Sets settingId
    *
    * @param string|null $settingId 策略id
    *
    * @return $this
    */
    public function setSettingId($settingId)
    {
        $this->container['settingId'] = $settingId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets period
    *  转储策略周期
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 转储策略周期
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
    *  转储备份类型
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
    * @param string|null $backupType 转储备份类型
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets destination
    *  目标存储
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 目标存储
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
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

