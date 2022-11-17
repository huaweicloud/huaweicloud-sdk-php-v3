<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupPlan';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timezoneOffset  备份的时区。取值为-1200 ~+1200之间的时区。若为空则默认使用DCS-Server节点的当前时区。
    * backupAt  每周的周几开始备份，取值1-7，1代表周一，7代表周日。
    * periodType  备份周期类型，目前支持“weekly”。
    * beginAt  备份执行时间，“00:00-01:00”代表0点开始执行备份。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timezoneOffset' => 'string',
            'backupAt' => 'int[]',
            'periodType' => 'string',
            'beginAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timezoneOffset  备份的时区。取值为-1200 ~+1200之间的时区。若为空则默认使用DCS-Server节点的当前时区。
    * backupAt  每周的周几开始备份，取值1-7，1代表周一，7代表周日。
    * periodType  备份周期类型，目前支持“weekly”。
    * beginAt  备份执行时间，“00:00-01:00”代表0点开始执行备份。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timezoneOffset' => null,
        'backupAt' => 'int32',
        'periodType' => null,
        'beginAt' => null
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
    * timezoneOffset  备份的时区。取值为-1200 ~+1200之间的时区。若为空则默认使用DCS-Server节点的当前时区。
    * backupAt  每周的周几开始备份，取值1-7，1代表周一，7代表周日。
    * periodType  备份周期类型，目前支持“weekly”。
    * beginAt  备份执行时间，“00:00-01:00”代表0点开始执行备份。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timezoneOffset' => 'timezone_offset',
            'backupAt' => 'backup_at',
            'periodType' => 'period_type',
            'beginAt' => 'begin_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timezoneOffset  备份的时区。取值为-1200 ~+1200之间的时区。若为空则默认使用DCS-Server节点的当前时区。
    * backupAt  每周的周几开始备份，取值1-7，1代表周一，7代表周日。
    * periodType  备份周期类型，目前支持“weekly”。
    * beginAt  备份执行时间，“00:00-01:00”代表0点开始执行备份。
    *
    * @var string[]
    */
    protected static $setters = [
            'timezoneOffset' => 'setTimezoneOffset',
            'backupAt' => 'setBackupAt',
            'periodType' => 'setPeriodType',
            'beginAt' => 'setBeginAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timezoneOffset  备份的时区。取值为-1200 ~+1200之间的时区。若为空则默认使用DCS-Server节点的当前时区。
    * backupAt  每周的周几开始备份，取值1-7，1代表周一，7代表周日。
    * periodType  备份周期类型，目前支持“weekly”。
    * beginAt  备份执行时间，“00:00-01:00”代表0点开始执行备份。
    *
    * @var string[]
    */
    protected static $getters = [
            'timezoneOffset' => 'getTimezoneOffset',
            'backupAt' => 'getBackupAt',
            'periodType' => 'getPeriodType',
            'beginAt' => 'getBeginAt'
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
        $this->container['timezoneOffset'] = isset($data['timezoneOffset']) ? $data['timezoneOffset'] : null;
        $this->container['backupAt'] = isset($data['backupAt']) ? $data['backupAt'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['beginAt'] = isset($data['beginAt']) ? $data['beginAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backupAt'] === null) {
            $invalidProperties[] = "'backupAt' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['beginAt'] === null) {
            $invalidProperties[] = "'beginAt' can't be null";
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
    * Gets timezoneOffset
    *  备份的时区。取值为-1200 ~+1200之间的时区。若为空则默认使用DCS-Server节点的当前时区。
    *
    * @return string|null
    */
    public function getTimezoneOffset()
    {
        return $this->container['timezoneOffset'];
    }

    /**
    * Sets timezoneOffset
    *
    * @param string|null $timezoneOffset 备份的时区。取值为-1200 ~+1200之间的时区。若为空则默认使用DCS-Server节点的当前时区。
    *
    * @return $this
    */
    public function setTimezoneOffset($timezoneOffset)
    {
        $this->container['timezoneOffset'] = $timezoneOffset;
        return $this;
    }

    /**
    * Gets backupAt
    *  每周的周几开始备份，取值1-7，1代表周一，7代表周日。
    *
    * @return int[]
    */
    public function getBackupAt()
    {
        return $this->container['backupAt'];
    }

    /**
    * Sets backupAt
    *
    * @param int[] $backupAt 每周的周几开始备份，取值1-7，1代表周一，7代表周日。
    *
    * @return $this
    */
    public function setBackupAt($backupAt)
    {
        $this->container['backupAt'] = $backupAt;
        return $this;
    }

    /**
    * Gets periodType
    *  备份周期类型，目前支持“weekly”。
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType 备份周期类型，目前支持“weekly”。
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets beginAt
    *  备份执行时间，“00:00-01:00”代表0点开始执行备份。
    *
    * @return string
    */
    public function getBeginAt()
    {
        return $this->container['beginAt'];
    }

    /**
    * Sets beginAt
    *
    * @param string $beginAt 备份执行时间，“00:00-01:00”代表0点开始执行备份。
    *
    * @return $this
    */
    public function setBeginAt($beginAt)
    {
        $this->container['beginAt'] = $beginAt;
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

