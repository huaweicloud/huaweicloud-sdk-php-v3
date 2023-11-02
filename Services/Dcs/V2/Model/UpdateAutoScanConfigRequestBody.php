<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAutoScanConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAutoScanConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableAutoScan  启用自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描密钥计数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableAutoScan' => 'bool',
            'firstScanAt' => 'string',
            'interval' => 'int',
            'timeout' => 'int',
            'scanKeysCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableAutoScan  启用自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描密钥计数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableAutoScan' => null,
        'firstScanAt' => null,
        'interval' => 'int32',
        'timeout' => 'int32',
        'scanKeysCount' => 'int32'
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
    * enableAutoScan  启用自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描密钥计数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableAutoScan' => 'enable_auto_scan',
            'firstScanAt' => 'first_scan_at',
            'interval' => 'interval',
            'timeout' => 'timeout',
            'scanKeysCount' => 'scan_keys_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableAutoScan  启用自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描密钥计数
    *
    * @var string[]
    */
    protected static $setters = [
            'enableAutoScan' => 'setEnableAutoScan',
            'firstScanAt' => 'setFirstScanAt',
            'interval' => 'setInterval',
            'timeout' => 'setTimeout',
            'scanKeysCount' => 'setScanKeysCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableAutoScan  启用自动扫描
    * firstScanAt  首次扫描时间，例如：2023-07-07T15:00:05.000
    * interval  间隔时间(秒)
    * timeout  超时时间(秒)
    * scanKeysCount  扫描密钥计数
    *
    * @var string[]
    */
    protected static $getters = [
            'enableAutoScan' => 'getEnableAutoScan',
            'firstScanAt' => 'getFirstScanAt',
            'interval' => 'getInterval',
            'timeout' => 'getTimeout',
            'scanKeysCount' => 'getScanKeysCount'
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
        $this->container['enableAutoScan'] = isset($data['enableAutoScan']) ? $data['enableAutoScan'] : null;
        $this->container['firstScanAt'] = isset($data['firstScanAt']) ? $data['firstScanAt'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['scanKeysCount'] = isset($data['scanKeysCount']) ? $data['scanKeysCount'] : null;
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
    * Gets enableAutoScan
    *  启用自动扫描
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
    * @param bool|null $enableAutoScan 启用自动扫描
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
    *  扫描密钥计数
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
    * @param int|null $scanKeysCount 扫描密钥计数
    *
    * @return $this
    */
    public function setScanKeysCount($scanKeysCount)
    {
        $this->container['scanKeysCount'] = $scanKeysCount;
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

