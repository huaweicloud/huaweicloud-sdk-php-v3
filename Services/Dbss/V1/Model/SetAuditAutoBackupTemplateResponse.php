<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetAuditAutoBackupTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetAuditAutoBackupTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  OBS桶名称
    * bucketRootPath  OBS备份根路径
    * cycle  周期 - PER_DAY：每天 - PER_WEEK：每周 - PER_MONTH：每月 - PER_HOUR：每小时 - FIVE_MIN：每5分钟
    * latestBackupTime  最近备份时间
    * status  备份开关  - 0：关闭  - 1：开启
    * triggerTime  触发时间
    * triggered  是否已触发
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'bucketRootPath' => 'string',
            'cycle' => 'string',
            'latestBackupTime' => '\DateTime',
            'status' => 'int',
            'triggerTime' => '\DateTime',
            'triggered' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  OBS桶名称
    * bucketRootPath  OBS备份根路径
    * cycle  周期 - PER_DAY：每天 - PER_WEEK：每周 - PER_MONTH：每月 - PER_HOUR：每小时 - FIVE_MIN：每5分钟
    * latestBackupTime  最近备份时间
    * status  备份开关  - 0：关闭  - 1：开启
    * triggerTime  触发时间
    * triggered  是否已触发
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'bucketRootPath' => null,
        'cycle' => null,
        'latestBackupTime' => 'date-time',
        'status' => 'int32',
        'triggerTime' => 'date-time',
        'triggered' => null
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
    * bucketName  OBS桶名称
    * bucketRootPath  OBS备份根路径
    * cycle  周期 - PER_DAY：每天 - PER_WEEK：每周 - PER_MONTH：每月 - PER_HOUR：每小时 - FIVE_MIN：每5分钟
    * latestBackupTime  最近备份时间
    * status  备份开关  - 0：关闭  - 1：开启
    * triggerTime  触发时间
    * triggered  是否已触发
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'bucketRootPath' => 'bucket_root_path',
            'cycle' => 'cycle',
            'latestBackupTime' => 'latest_backup_time',
            'status' => 'status',
            'triggerTime' => 'trigger_time',
            'triggered' => 'triggered'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  OBS桶名称
    * bucketRootPath  OBS备份根路径
    * cycle  周期 - PER_DAY：每天 - PER_WEEK：每周 - PER_MONTH：每月 - PER_HOUR：每小时 - FIVE_MIN：每5分钟
    * latestBackupTime  最近备份时间
    * status  备份开关  - 0：关闭  - 1：开启
    * triggerTime  触发时间
    * triggered  是否已触发
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'bucketRootPath' => 'setBucketRootPath',
            'cycle' => 'setCycle',
            'latestBackupTime' => 'setLatestBackupTime',
            'status' => 'setStatus',
            'triggerTime' => 'setTriggerTime',
            'triggered' => 'setTriggered'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  OBS桶名称
    * bucketRootPath  OBS备份根路径
    * cycle  周期 - PER_DAY：每天 - PER_WEEK：每周 - PER_MONTH：每月 - PER_HOUR：每小时 - FIVE_MIN：每5分钟
    * latestBackupTime  最近备份时间
    * status  备份开关  - 0：关闭  - 1：开启
    * triggerTime  触发时间
    * triggered  是否已触发
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'bucketRootPath' => 'getBucketRootPath',
            'cycle' => 'getCycle',
            'latestBackupTime' => 'getLatestBackupTime',
            'status' => 'getStatus',
            'triggerTime' => 'getTriggerTime',
            'triggered' => 'getTriggered'
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
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['bucketRootPath'] = isset($data['bucketRootPath']) ? $data['bucketRootPath'] : null;
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['latestBackupTime'] = isset($data['latestBackupTime']) ? $data['latestBackupTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggerTime'] = isset($data['triggerTime']) ? $data['triggerTime'] : null;
        $this->container['triggered'] = isset($data['triggered']) ? $data['triggered'] : null;
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
    * Gets bucketName
    *  OBS桶名称
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName OBS桶名称
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets bucketRootPath
    *  OBS备份根路径
    *
    * @return string|null
    */
    public function getBucketRootPath()
    {
        return $this->container['bucketRootPath'];
    }

    /**
    * Sets bucketRootPath
    *
    * @param string|null $bucketRootPath OBS备份根路径
    *
    * @return $this
    */
    public function setBucketRootPath($bucketRootPath)
    {
        $this->container['bucketRootPath'] = $bucketRootPath;
        return $this;
    }

    /**
    * Gets cycle
    *  周期 - PER_DAY：每天 - PER_WEEK：每周 - PER_MONTH：每月 - PER_HOUR：每小时 - FIVE_MIN：每5分钟
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
    * @param string|null $cycle 周期 - PER_DAY：每天 - PER_WEEK：每周 - PER_MONTH：每月 - PER_HOUR：每小时 - FIVE_MIN：每5分钟
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets latestBackupTime
    *  最近备份时间
    *
    * @return \DateTime|null
    */
    public function getLatestBackupTime()
    {
        return $this->container['latestBackupTime'];
    }

    /**
    * Sets latestBackupTime
    *
    * @param \DateTime|null $latestBackupTime 最近备份时间
    *
    * @return $this
    */
    public function setLatestBackupTime($latestBackupTime)
    {
        $this->container['latestBackupTime'] = $latestBackupTime;
        return $this;
    }

    /**
    * Gets status
    *  备份开关  - 0：关闭  - 1：开启
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 备份开关  - 0：关闭  - 1：开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets triggerTime
    *  触发时间
    *
    * @return \DateTime|null
    */
    public function getTriggerTime()
    {
        return $this->container['triggerTime'];
    }

    /**
    * Sets triggerTime
    *
    * @param \DateTime|null $triggerTime 触发时间
    *
    * @return $this
    */
    public function setTriggerTime($triggerTime)
    {
        $this->container['triggerTime'] = $triggerTime;
        return $this;
    }

    /**
    * Gets triggered
    *  是否已触发
    *
    * @return bool|null
    */
    public function getTriggered()
    {
        return $this->container['triggered'];
    }

    /**
    * Sets triggered
    *
    * @param bool|null $triggered 是否已触发
    *
    * @return $this
    */
    public function setTriggered($triggered)
    {
        $this->container['triggered'] = $triggered;
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

