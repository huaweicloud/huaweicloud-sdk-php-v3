<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskBackupTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskBackupTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cycle  备份周期 - PER_DAY: 每天 - PER_WEEK: 每周 - PER_MONTH: 每月 - PER_HOUR: 每小时 - FIVE_MIN: 每5分钟
    * dbId  数据库ID
    * status  备份开关    - 0：关闭    - 1：开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cycle' => 'string',
            'dbId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cycle  备份周期 - PER_DAY: 每天 - PER_WEEK: 每周 - PER_MONTH: 每月 - PER_HOUR: 每小时 - FIVE_MIN: 每5分钟
    * dbId  数据库ID
    * status  备份开关    - 0：关闭    - 1：开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cycle' => null,
        'dbId' => null,
        'status' => 'int32'
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
    * cycle  备份周期 - PER_DAY: 每天 - PER_WEEK: 每周 - PER_MONTH: 每月 - PER_HOUR: 每小时 - FIVE_MIN: 每5分钟
    * dbId  数据库ID
    * status  备份开关    - 0：关闭    - 1：开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cycle' => 'cycle',
            'dbId' => 'db_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cycle  备份周期 - PER_DAY: 每天 - PER_WEEK: 每周 - PER_MONTH: 每月 - PER_HOUR: 每小时 - FIVE_MIN: 每5分钟
    * dbId  数据库ID
    * status  备份开关    - 0：关闭    - 1：开启
    *
    * @var string[]
    */
    protected static $setters = [
            'cycle' => 'setCycle',
            'dbId' => 'setDbId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cycle  备份周期 - PER_DAY: 每天 - PER_WEEK: 每周 - PER_MONTH: 每月 - PER_HOUR: 每小时 - FIVE_MIN: 每5分钟
    * dbId  数据库ID
    * status  备份开关    - 0：关闭    - 1：开启
    *
    * @var string[]
    */
    protected static $getters = [
            'cycle' => 'getCycle',
            'dbId' => 'getDbId',
            'status' => 'getStatus'
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
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbId'] === null) {
            $invalidProperties[] = "'dbId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets cycle
    *  备份周期 - PER_DAY: 每天 - PER_WEEK: 每周 - PER_MONTH: 每月 - PER_HOUR: 每小时 - FIVE_MIN: 每5分钟
    *
    * @return string|null
    */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
    * Sets cycle
    *
    * @param string|null $cycle 备份周期 - PER_DAY: 每天 - PER_WEEK: 每周 - PER_MONTH: 每月 - PER_HOUR: 每小时 - FIVE_MIN: 每5分钟
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets dbId
    *  数据库ID
    *
    * @return string
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets status
    *  备份开关    - 0：关闭    - 1：开启
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 备份开关    - 0：关闭    - 1：开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

