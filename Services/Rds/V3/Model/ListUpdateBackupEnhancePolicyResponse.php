<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUpdateBackupEnhancePolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUpdateBackupEnhancePolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  备份时间段开始时间
    * endTime  备份时间段结束时间
    * manualBackupRetentionDays  手动备份保留时长
    * frequency  高频备份的频率
    * policies  备份策略集
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'string',
            'endTime' => 'string',
            'manualBackupRetentionDays' => 'string',
            'frequency' => 'string',
            'policies' => '\HuaweiCloud\SDK\Rds\V3\Model\Policy[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  备份时间段开始时间
    * endTime  备份时间段结束时间
    * manualBackupRetentionDays  手动备份保留时长
    * frequency  高频备份的频率
    * policies  备份策略集
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => null,
        'endTime' => null,
        'manualBackupRetentionDays' => null,
        'frequency' => null,
        'policies' => null
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
    * beginTime  备份时间段开始时间
    * endTime  备份时间段结束时间
    * manualBackupRetentionDays  手动备份保留时长
    * frequency  高频备份的频率
    * policies  备份策略集
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'manualBackupRetentionDays' => 'manual_backup_retention_days',
            'frequency' => 'frequency',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  备份时间段开始时间
    * endTime  备份时间段结束时间
    * manualBackupRetentionDays  手动备份保留时长
    * frequency  高频备份的频率
    * policies  备份策略集
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'manualBackupRetentionDays' => 'setManualBackupRetentionDays',
            'frequency' => 'setFrequency',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  备份时间段开始时间
    * endTime  备份时间段结束时间
    * manualBackupRetentionDays  手动备份保留时长
    * frequency  高频备份的频率
    * policies  备份策略集
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'manualBackupRetentionDays' => 'getManualBackupRetentionDays',
            'frequency' => 'getFrequency',
            'policies' => 'getPolicies'
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['manualBackupRetentionDays'] = isset($data['manualBackupRetentionDays']) ? $data['manualBackupRetentionDays'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
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
    * Gets beginTime
    *  备份时间段开始时间
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 备份时间段开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  备份时间段结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 备份时间段结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets manualBackupRetentionDays
    *  手动备份保留时长
    *
    * @return string|null
    */
    public function getManualBackupRetentionDays()
    {
        return $this->container['manualBackupRetentionDays'];
    }

    /**
    * Sets manualBackupRetentionDays
    *
    * @param string|null $manualBackupRetentionDays 手动备份保留时长
    *
    * @return $this
    */
    public function setManualBackupRetentionDays($manualBackupRetentionDays)
    {
        $this->container['manualBackupRetentionDays'] = $manualBackupRetentionDays;
        return $this;
    }

    /**
    * Gets frequency
    *  高频备份的频率
    *
    * @return string|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string|null $frequency 高频备份的频率
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets policies
    *  备份策略集
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Policy[]|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Policy[]|null $policies 备份策略集
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
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

