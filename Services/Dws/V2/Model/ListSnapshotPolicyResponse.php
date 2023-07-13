<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSnapshotPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSnapshotPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keepDay  保留天数。
    * backupStrategies  备份策略。
    * deviceName  备份设备。
    * serverIps  服务IP。
    * serverPort  服务端口。
    * backupParam  参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepDay' => 'string',
            'backupStrategies' => '\HuaweiCloud\SDK\Dws\V2\Model\BackupStrategyDetail[]',
            'deviceName' => 'string',
            'serverIps' => 'string[]',
            'serverPort' => 'string',
            'backupParam' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepDay  保留天数。
    * backupStrategies  备份策略。
    * deviceName  备份设备。
    * serverIps  服务IP。
    * serverPort  服务端口。
    * backupParam  参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepDay' => null,
        'backupStrategies' => null,
        'deviceName' => null,
        'serverIps' => null,
        'serverPort' => null,
        'backupParam' => null
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
    * keepDay  保留天数。
    * backupStrategies  备份策略。
    * deviceName  备份设备。
    * serverIps  服务IP。
    * serverPort  服务端口。
    * backupParam  参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepDay' => 'keep_day',
            'backupStrategies' => 'backup_strategies',
            'deviceName' => 'device_name',
            'serverIps' => 'server_ips',
            'serverPort' => 'server_port',
            'backupParam' => 'backup_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepDay  保留天数。
    * backupStrategies  备份策略。
    * deviceName  备份设备。
    * serverIps  服务IP。
    * serverPort  服务端口。
    * backupParam  参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'keepDay' => 'setKeepDay',
            'backupStrategies' => 'setBackupStrategies',
            'deviceName' => 'setDeviceName',
            'serverIps' => 'setServerIps',
            'serverPort' => 'setServerPort',
            'backupParam' => 'setBackupParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepDay  保留天数。
    * backupStrategies  备份策略。
    * deviceName  备份设备。
    * serverIps  服务IP。
    * serverPort  服务端口。
    * backupParam  参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'keepDay' => 'getKeepDay',
            'backupStrategies' => 'getBackupStrategies',
            'deviceName' => 'getDeviceName',
            'serverIps' => 'getServerIps',
            'serverPort' => 'getServerPort',
            'backupParam' => 'getBackupParam'
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
        $this->container['keepDay'] = isset($data['keepDay']) ? $data['keepDay'] : null;
        $this->container['backupStrategies'] = isset($data['backupStrategies']) ? $data['backupStrategies'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['serverIps'] = isset($data['serverIps']) ? $data['serverIps'] : null;
        $this->container['serverPort'] = isset($data['serverPort']) ? $data['serverPort'] : null;
        $this->container['backupParam'] = isset($data['backupParam']) ? $data['backupParam'] : null;
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
    * Gets keepDay
    *  保留天数。
    *
    * @return string|null
    */
    public function getKeepDay()
    {
        return $this->container['keepDay'];
    }

    /**
    * Sets keepDay
    *
    * @param string|null $keepDay 保留天数。
    *
    * @return $this
    */
    public function setKeepDay($keepDay)
    {
        $this->container['keepDay'] = $keepDay;
        return $this;
    }

    /**
    * Gets backupStrategies
    *  备份策略。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\BackupStrategyDetail[]|null
    */
    public function getBackupStrategies()
    {
        return $this->container['backupStrategies'];
    }

    /**
    * Sets backupStrategies
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\BackupStrategyDetail[]|null $backupStrategies 备份策略。
    *
    * @return $this
    */
    public function setBackupStrategies($backupStrategies)
    {
        $this->container['backupStrategies'] = $backupStrategies;
        return $this;
    }

    /**
    * Gets deviceName
    *  备份设备。
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName 备份设备。
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets serverIps
    *  服务IP。
    *
    * @return string[]|null
    */
    public function getServerIps()
    {
        return $this->container['serverIps'];
    }

    /**
    * Sets serverIps
    *
    * @param string[]|null $serverIps 服务IP。
    *
    * @return $this
    */
    public function setServerIps($serverIps)
    {
        $this->container['serverIps'] = $serverIps;
        return $this;
    }

    /**
    * Gets serverPort
    *  服务端口。
    *
    * @return string|null
    */
    public function getServerPort()
    {
        return $this->container['serverPort'];
    }

    /**
    * Sets serverPort
    *
    * @param string|null $serverPort 服务端口。
    *
    * @return $this
    */
    public function setServerPort($serverPort)
    {
        $this->container['serverPort'] = $serverPort;
        return $this;
    }

    /**
    * Gets backupParam
    *  参数。
    *
    * @return string|null
    */
    public function getBackupParam()
    {
        return $this->container['backupParam'];
    }

    /**
    * Sets backupParam
    *
    * @param string|null $backupParam 参数。
    *
    * @return $this
    */
    public function setBackupParam($backupParam)
    {
        $this->container['backupParam'] = $backupParam;
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

