<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotPolicyResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotPolicyResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupEnable  集群是否开启自动快照。
    * bakPeriod  快照备份时间。
    * bakFrequency  快照备份间隔。
    * bakKeepDay  快照备份保留个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupEnable' => 'bool',
            'bakPeriod' => 'string',
            'bakFrequency' => 'string',
            'bakKeepDay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupEnable  集群是否开启自动快照。
    * bakPeriod  快照备份时间。
    * bakFrequency  快照备份间隔。
    * bakKeepDay  快照备份保留个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupEnable' => null,
        'bakPeriod' => null,
        'bakFrequency' => null,
        'bakKeepDay' => 'int32'
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
    * backupEnable  集群是否开启自动快照。
    * bakPeriod  快照备份时间。
    * bakFrequency  快照备份间隔。
    * bakKeepDay  快照备份保留个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupEnable' => 'backupEnable',
            'bakPeriod' => 'bakPeriod',
            'bakFrequency' => 'bakFrequency',
            'bakKeepDay' => 'bakKeepDay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupEnable  集群是否开启自动快照。
    * bakPeriod  快照备份时间。
    * bakFrequency  快照备份间隔。
    * bakKeepDay  快照备份保留个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupEnable' => 'setBackupEnable',
            'bakPeriod' => 'setBakPeriod',
            'bakFrequency' => 'setBakFrequency',
            'bakKeepDay' => 'setBakKeepDay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupEnable  集群是否开启自动快照。
    * bakPeriod  快照备份时间。
    * bakFrequency  快照备份间隔。
    * bakKeepDay  快照备份保留个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupEnable' => 'getBackupEnable',
            'bakPeriod' => 'getBakPeriod',
            'bakFrequency' => 'getBakFrequency',
            'bakKeepDay' => 'getBakKeepDay'
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
        $this->container['backupEnable'] = isset($data['backupEnable']) ? $data['backupEnable'] : null;
        $this->container['bakPeriod'] = isset($data['bakPeriod']) ? $data['bakPeriod'] : null;
        $this->container['bakFrequency'] = isset($data['bakFrequency']) ? $data['bakFrequency'] : null;
        $this->container['bakKeepDay'] = isset($data['bakKeepDay']) ? $data['bakKeepDay'] : null;
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
    * Gets backupEnable
    *  集群是否开启自动快照。
    *
    * @return bool|null
    */
    public function getBackupEnable()
    {
        return $this->container['backupEnable'];
    }

    /**
    * Sets backupEnable
    *
    * @param bool|null $backupEnable 集群是否开启自动快照。
    *
    * @return $this
    */
    public function setBackupEnable($backupEnable)
    {
        $this->container['backupEnable'] = $backupEnable;
        return $this;
    }

    /**
    * Gets bakPeriod
    *  快照备份时间。
    *
    * @return string|null
    */
    public function getBakPeriod()
    {
        return $this->container['bakPeriod'];
    }

    /**
    * Sets bakPeriod
    *
    * @param string|null $bakPeriod 快照备份时间。
    *
    * @return $this
    */
    public function setBakPeriod($bakPeriod)
    {
        $this->container['bakPeriod'] = $bakPeriod;
        return $this;
    }

    /**
    * Gets bakFrequency
    *  快照备份间隔。
    *
    * @return string|null
    */
    public function getBakFrequency()
    {
        return $this->container['bakFrequency'];
    }

    /**
    * Sets bakFrequency
    *
    * @param string|null $bakFrequency 快照备份间隔。
    *
    * @return $this
    */
    public function setBakFrequency($bakFrequency)
    {
        $this->container['bakFrequency'] = $bakFrequency;
        return $this;
    }

    /**
    * Gets bakKeepDay
    *  快照备份保留个数。
    *
    * @return int|null
    */
    public function getBakKeepDay()
    {
        return $this->container['bakKeepDay'];
    }

    /**
    * Sets bakKeepDay
    *
    * @param int|null $bakKeepDay 快照备份保留个数。
    *
    * @return $this
    */
    public function setBakKeepDay($bakKeepDay)
    {
        $this->container['bakKeepDay'] = $bakKeepDay;
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

