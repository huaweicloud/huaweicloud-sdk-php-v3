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
    * keepDay  **参数解释**： 保留天数。 **取值范围**： 大于等于0。
    * backupStrategies  **参数解释**： 备份策略列表。 **取值范围**： 不涉及。
    * deviceName  **参数解释**： 备份设备，一般为OBS。 **取值范围**： 不涉及。
    * serverIps  **参数解释**： 服务IP。 **取值范围**： 不涉及。
    * serverPort  **参数解释**： 服务端口。 **取值范围**： 不涉及。
    * backupParam  **参数解释**： 备份参数。 **取值范围**： 不涉及。
    * autoBackup  **参数解释**： 自动备份开关状态。 **取值范围**： true：已开启自动备份选项； false：已关闭自动备份选项；
    * backupStrategyClusterTypeLimitNum  **参数解释**： 此策略下集群级快照最大数量。 **取值范围**： 大于等于0。
    * backupStrategySchemaTypeLimitNum  **参数解释**： 此策略下schema级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepDay' => 'int',
            'backupStrategies' => '\HuaweiCloud\SDK\Dws\V2\Model\BackupStrategyDetail[]',
            'deviceName' => 'string',
            'serverIps' => 'string[]',
            'serverPort' => 'string',
            'backupParam' => 'string',
            'autoBackup' => 'bool',
            'backupStrategyClusterTypeLimitNum' => 'int',
            'backupStrategySchemaTypeLimitNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepDay  **参数解释**： 保留天数。 **取值范围**： 大于等于0。
    * backupStrategies  **参数解释**： 备份策略列表。 **取值范围**： 不涉及。
    * deviceName  **参数解释**： 备份设备，一般为OBS。 **取值范围**： 不涉及。
    * serverIps  **参数解释**： 服务IP。 **取值范围**： 不涉及。
    * serverPort  **参数解释**： 服务端口。 **取值范围**： 不涉及。
    * backupParam  **参数解释**： 备份参数。 **取值范围**： 不涉及。
    * autoBackup  **参数解释**： 自动备份开关状态。 **取值范围**： true：已开启自动备份选项； false：已关闭自动备份选项；
    * backupStrategyClusterTypeLimitNum  **参数解释**： 此策略下集群级快照最大数量。 **取值范围**： 大于等于0。
    * backupStrategySchemaTypeLimitNum  **参数解释**： 此策略下schema级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepDay' => 'int32',
        'backupStrategies' => null,
        'deviceName' => null,
        'serverIps' => null,
        'serverPort' => null,
        'backupParam' => null,
        'autoBackup' => null,
        'backupStrategyClusterTypeLimitNum' => 'int32',
        'backupStrategySchemaTypeLimitNum' => 'int32'
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
    * keepDay  **参数解释**： 保留天数。 **取值范围**： 大于等于0。
    * backupStrategies  **参数解释**： 备份策略列表。 **取值范围**： 不涉及。
    * deviceName  **参数解释**： 备份设备，一般为OBS。 **取值范围**： 不涉及。
    * serverIps  **参数解释**： 服务IP。 **取值范围**： 不涉及。
    * serverPort  **参数解释**： 服务端口。 **取值范围**： 不涉及。
    * backupParam  **参数解释**： 备份参数。 **取值范围**： 不涉及。
    * autoBackup  **参数解释**： 自动备份开关状态。 **取值范围**： true：已开启自动备份选项； false：已关闭自动备份选项；
    * backupStrategyClusterTypeLimitNum  **参数解释**： 此策略下集群级快照最大数量。 **取值范围**： 大于等于0。
    * backupStrategySchemaTypeLimitNum  **参数解释**： 此策略下schema级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepDay' => 'keep_day',
            'backupStrategies' => 'backup_strategies',
            'deviceName' => 'device_name',
            'serverIps' => 'server_ips',
            'serverPort' => 'server_port',
            'backupParam' => 'backup_param',
            'autoBackup' => 'auto_backup',
            'backupStrategyClusterTypeLimitNum' => 'backup_strategy_cluster_type_limit_num',
            'backupStrategySchemaTypeLimitNum' => 'backup_strategy_schema_type_limit_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepDay  **参数解释**： 保留天数。 **取值范围**： 大于等于0。
    * backupStrategies  **参数解释**： 备份策略列表。 **取值范围**： 不涉及。
    * deviceName  **参数解释**： 备份设备，一般为OBS。 **取值范围**： 不涉及。
    * serverIps  **参数解释**： 服务IP。 **取值范围**： 不涉及。
    * serverPort  **参数解释**： 服务端口。 **取值范围**： 不涉及。
    * backupParam  **参数解释**： 备份参数。 **取值范围**： 不涉及。
    * autoBackup  **参数解释**： 自动备份开关状态。 **取值范围**： true：已开启自动备份选项； false：已关闭自动备份选项；
    * backupStrategyClusterTypeLimitNum  **参数解释**： 此策略下集群级快照最大数量。 **取值范围**： 大于等于0。
    * backupStrategySchemaTypeLimitNum  **参数解释**： 此策略下schema级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $setters = [
            'keepDay' => 'setKeepDay',
            'backupStrategies' => 'setBackupStrategies',
            'deviceName' => 'setDeviceName',
            'serverIps' => 'setServerIps',
            'serverPort' => 'setServerPort',
            'backupParam' => 'setBackupParam',
            'autoBackup' => 'setAutoBackup',
            'backupStrategyClusterTypeLimitNum' => 'setBackupStrategyClusterTypeLimitNum',
            'backupStrategySchemaTypeLimitNum' => 'setBackupStrategySchemaTypeLimitNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepDay  **参数解释**： 保留天数。 **取值范围**： 大于等于0。
    * backupStrategies  **参数解释**： 备份策略列表。 **取值范围**： 不涉及。
    * deviceName  **参数解释**： 备份设备，一般为OBS。 **取值范围**： 不涉及。
    * serverIps  **参数解释**： 服务IP。 **取值范围**： 不涉及。
    * serverPort  **参数解释**： 服务端口。 **取值范围**： 不涉及。
    * backupParam  **参数解释**： 备份参数。 **取值范围**： 不涉及。
    * autoBackup  **参数解释**： 自动备份开关状态。 **取值范围**： true：已开启自动备份选项； false：已关闭自动备份选项；
    * backupStrategyClusterTypeLimitNum  **参数解释**： 此策略下集群级快照最大数量。 **取值范围**： 大于等于0。
    * backupStrategySchemaTypeLimitNum  **参数解释**： 此策略下schema级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $getters = [
            'keepDay' => 'getKeepDay',
            'backupStrategies' => 'getBackupStrategies',
            'deviceName' => 'getDeviceName',
            'serverIps' => 'getServerIps',
            'serverPort' => 'getServerPort',
            'backupParam' => 'getBackupParam',
            'autoBackup' => 'getAutoBackup',
            'backupStrategyClusterTypeLimitNum' => 'getBackupStrategyClusterTypeLimitNum',
            'backupStrategySchemaTypeLimitNum' => 'getBackupStrategySchemaTypeLimitNum'
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
        $this->container['autoBackup'] = isset($data['autoBackup']) ? $data['autoBackup'] : null;
        $this->container['backupStrategyClusterTypeLimitNum'] = isset($data['backupStrategyClusterTypeLimitNum']) ? $data['backupStrategyClusterTypeLimitNum'] : null;
        $this->container['backupStrategySchemaTypeLimitNum'] = isset($data['backupStrategySchemaTypeLimitNum']) ? $data['backupStrategySchemaTypeLimitNum'] : null;
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
    *  **参数解释**： 保留天数。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getKeepDay()
    {
        return $this->container['keepDay'];
    }

    /**
    * Sets keepDay
    *
    * @param int|null $keepDay **参数解释**： 保留天数。 **取值范围**： 大于等于0。
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
    *  **参数解释**： 备份策略列表。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\Dws\V2\Model\BackupStrategyDetail[]|null $backupStrategies **参数解释**： 备份策略列表。 **取值范围**： 不涉及。
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
    *  **参数解释**： 备份设备，一般为OBS。 **取值范围**： 不涉及。
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
    * @param string|null $deviceName **参数解释**： 备份设备，一般为OBS。 **取值范围**： 不涉及。
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
    *  **参数解释**： 服务IP。 **取值范围**： 不涉及。
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
    * @param string[]|null $serverIps **参数解释**： 服务IP。 **取值范围**： 不涉及。
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
    *  **参数解释**： 服务端口。 **取值范围**： 不涉及。
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
    * @param string|null $serverPort **参数解释**： 服务端口。 **取值范围**： 不涉及。
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
    *  **参数解释**： 备份参数。 **取值范围**： 不涉及。
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
    * @param string|null $backupParam **参数解释**： 备份参数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupParam($backupParam)
    {
        $this->container['backupParam'] = $backupParam;
        return $this;
    }

    /**
    * Gets autoBackup
    *  **参数解释**： 自动备份开关状态。 **取值范围**： true：已开启自动备份选项； false：已关闭自动备份选项；
    *
    * @return bool|null
    */
    public function getAutoBackup()
    {
        return $this->container['autoBackup'];
    }

    /**
    * Sets autoBackup
    *
    * @param bool|null $autoBackup **参数解释**： 自动备份开关状态。 **取值范围**： true：已开启自动备份选项； false：已关闭自动备份选项；
    *
    * @return $this
    */
    public function setAutoBackup($autoBackup)
    {
        $this->container['autoBackup'] = $autoBackup;
        return $this;
    }

    /**
    * Gets backupStrategyClusterTypeLimitNum
    *  **参数解释**： 此策略下集群级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getBackupStrategyClusterTypeLimitNum()
    {
        return $this->container['backupStrategyClusterTypeLimitNum'];
    }

    /**
    * Sets backupStrategyClusterTypeLimitNum
    *
    * @param int|null $backupStrategyClusterTypeLimitNum **参数解释**： 此策略下集群级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @return $this
    */
    public function setBackupStrategyClusterTypeLimitNum($backupStrategyClusterTypeLimitNum)
    {
        $this->container['backupStrategyClusterTypeLimitNum'] = $backupStrategyClusterTypeLimitNum;
        return $this;
    }

    /**
    * Gets backupStrategySchemaTypeLimitNum
    *  **参数解释**： 此策略下schema级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getBackupStrategySchemaTypeLimitNum()
    {
        return $this->container['backupStrategySchemaTypeLimitNum'];
    }

    /**
    * Sets backupStrategySchemaTypeLimitNum
    *
    * @param int|null $backupStrategySchemaTypeLimitNum **参数解释**： 此策略下schema级快照最大数量。 **取值范围**： 大于等于0。
    *
    * @return $this
    */
    public function setBackupStrategySchemaTypeLimitNum($backupStrategySchemaTypeLimitNum)
    {
        $this->container['backupStrategySchemaTypeLimitNum'] = $backupStrategySchemaTypeLimitNum;
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

