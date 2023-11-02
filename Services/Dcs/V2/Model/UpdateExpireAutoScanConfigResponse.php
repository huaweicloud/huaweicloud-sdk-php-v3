<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateExpireAutoScanConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateExpireAutoScanConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * enableAutoScan  是否开启自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描数
    * updatedAt  更新时间，例如：2023-06-15T06:20:13.283Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'enableAutoScan' => 'bool',
            'firstScanAt' => 'string',
            'interval' => 'int',
            'timeout' => 'int',
            'scanKeysCount' => 'int',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * enableAutoScan  是否开启自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描数
    * updatedAt  更新时间，例如：2023-06-15T06:20:13.283Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'enableAutoScan' => null,
        'firstScanAt' => null,
        'interval' => 'int32',
        'timeout' => 'int32',
        'scanKeysCount' => 'int32',
        'updatedAt' => null
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
    * instanceId  实例ID
    * enableAutoScan  是否开启自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描数
    * updatedAt  更新时间，例如：2023-06-15T06:20:13.283Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'enableAutoScan' => 'enable_auto_scan',
            'firstScanAt' => 'first_scan_at',
            'interval' => 'interval',
            'timeout' => 'timeout',
            'scanKeysCount' => 'scan_keys_count',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * enableAutoScan  是否开启自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描数
    * updatedAt  更新时间，例如：2023-06-15T06:20:13.283Z
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'enableAutoScan' => 'setEnableAutoScan',
            'firstScanAt' => 'setFirstScanAt',
            'interval' => 'setInterval',
            'timeout' => 'setTimeout',
            'scanKeysCount' => 'setScanKeysCount',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * enableAutoScan  是否开启自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描数
    * updatedAt  更新时间，例如：2023-06-15T06:20:13.283Z
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'enableAutoScan' => 'getEnableAutoScan',
            'firstScanAt' => 'getFirstScanAt',
            'interval' => 'getInterval',
            'timeout' => 'getTimeout',
            'scanKeysCount' => 'getScanKeysCount',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['enableAutoScan'] = isset($data['enableAutoScan']) ? $data['enableAutoScan'] : null;
        $this->container['firstScanAt'] = isset($data['firstScanAt']) ? $data['firstScanAt'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['scanKeysCount'] = isset($data['scanKeysCount']) ? $data['scanKeysCount'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets enableAutoScan
    *  是否开启自动扫描
    *
    * @return bool|null
    */
    public function getEnableAutoScan()
    {
        return $this->container['enableAutoScan'];
    }

    /**
    * Sets enableAutoScan
    *
    * @param bool|null $enableAutoScan 是否开启自动扫描
    *
    * @return $this
    */
    public function setEnableAutoScan($enableAutoScan)
    {
        $this->container['enableAutoScan'] = $enableAutoScan;
        return $this;
    }

    /**
    * Gets firstScanAt
    *  首次扫描时间，例如：2023-07-07T15:00:05.000
    *
    * @return string|null
    */
    public function getFirstScanAt()
    {
        return $this->container['firstScanAt'];
    }

    /**
    * Sets firstScanAt
    *
    * @param string|null $firstScanAt 首次扫描时间，例如：2023-07-07T15:00:05.000
    *
    * @return $this
    */
    public function setFirstScanAt($firstScanAt)
    {
        $this->container['firstScanAt'] = $firstScanAt;
        return $this;
    }

    /**
    * Gets interval
    *  间隔时间(秒)
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 间隔时间(秒)
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets timeout
    *  超时时间(秒)
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 超时时间(秒)
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets scanKeysCount
    *  扫描数
    *
    * @return int|null
    */
    public function getScanKeysCount()
    {
        return $this->container['scanKeysCount'];
    }

    /**
    * Sets scanKeysCount
    *
    * @param int|null $scanKeysCount 扫描数
    *
    * @return $this
    */
    public function setScanKeysCount($scanKeysCount)
    {
        $this->container['scanKeysCount'] = $scanKeysCount;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间，例如：2023-06-15T06:20:13.283Z
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间，例如：2023-06-15T06:20:13.283Z
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

