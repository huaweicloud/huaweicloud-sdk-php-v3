<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'logConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  日志备份ID，通过系统UUID生成。
    * clusterId  集群ID。
    * obsBucket  用于存储日志的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * updateAt  更新时间。格式为：Unix时间戳格式。
    * basePath  日志在OBS桶中的备份路径。
    * autoEnable  自动备份开关。 - true: 自动备份开启。 - false: 自动备份关闭。
    * period  自动备份日志开始时间。当autoEnable为false时该字段为null。格式为：格林威治标准时间。
    * logSwitch  日志开关。 - true: 日志开启。 - false: 日志关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'obsBucket' => 'string',
            'agency' => 'string',
            'updateAt' => 'int',
            'basePath' => 'string',
            'autoEnable' => 'bool',
            'period' => 'string',
            'logSwitch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志备份ID，通过系统UUID生成。
    * clusterId  集群ID。
    * obsBucket  用于存储日志的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * updateAt  更新时间。格式为：Unix时间戳格式。
    * basePath  日志在OBS桶中的备份路径。
    * autoEnable  自动备份开关。 - true: 自动备份开启。 - false: 自动备份关闭。
    * period  自动备份日志开始时间。当autoEnable为false时该字段为null。格式为：格林威治标准时间。
    * logSwitch  日志开关。 - true: 日志开启。 - false: 日志关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'obsBucket' => null,
        'agency' => null,
        'updateAt' => 'int64',
        'basePath' => null,
        'autoEnable' => null,
        'period' => null,
        'logSwitch' => null
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
    * id  日志备份ID，通过系统UUID生成。
    * clusterId  集群ID。
    * obsBucket  用于存储日志的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * updateAt  更新时间。格式为：Unix时间戳格式。
    * basePath  日志在OBS桶中的备份路径。
    * autoEnable  自动备份开关。 - true: 自动备份开启。 - false: 自动备份关闭。
    * period  自动备份日志开始时间。当autoEnable为false时该字段为null。格式为：格林威治标准时间。
    * logSwitch  日志开关。 - true: 日志开启。 - false: 日志关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'clusterId',
            'obsBucket' => 'obsBucket',
            'agency' => 'agency',
            'updateAt' => 'updateAt',
            'basePath' => 'basePath',
            'autoEnable' => 'autoEnable',
            'period' => 'period',
            'logSwitch' => 'logSwitch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志备份ID，通过系统UUID生成。
    * clusterId  集群ID。
    * obsBucket  用于存储日志的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * updateAt  更新时间。格式为：Unix时间戳格式。
    * basePath  日志在OBS桶中的备份路径。
    * autoEnable  自动备份开关。 - true: 自动备份开启。 - false: 自动备份关闭。
    * period  自动备份日志开始时间。当autoEnable为false时该字段为null。格式为：格林威治标准时间。
    * logSwitch  日志开关。 - true: 日志开启。 - false: 日志关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'obsBucket' => 'setObsBucket',
            'agency' => 'setAgency',
            'updateAt' => 'setUpdateAt',
            'basePath' => 'setBasePath',
            'autoEnable' => 'setAutoEnable',
            'period' => 'setPeriod',
            'logSwitch' => 'setLogSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志备份ID，通过系统UUID生成。
    * clusterId  集群ID。
    * obsBucket  用于存储日志的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * updateAt  更新时间。格式为：Unix时间戳格式。
    * basePath  日志在OBS桶中的备份路径。
    * autoEnable  自动备份开关。 - true: 自动备份开启。 - false: 自动备份关闭。
    * period  自动备份日志开始时间。当autoEnable为false时该字段为null。格式为：格林威治标准时间。
    * logSwitch  日志开关。 - true: 日志开启。 - false: 日志关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'obsBucket' => 'getObsBucket',
            'agency' => 'getAgency',
            'updateAt' => 'getUpdateAt',
            'basePath' => 'getBasePath',
            'autoEnable' => 'getAutoEnable',
            'period' => 'getPeriod',
            'logSwitch' => 'getLogSwitch'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['autoEnable'] = isset($data['autoEnable']) ? $data['autoEnable'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['logSwitch'] = isset($data['logSwitch']) ? $data['logSwitch'] : null;
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
    * Gets id
    *  日志备份ID，通过系统UUID生成。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 日志备份ID，通过系统UUID生成。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets obsBucket
    *  用于存储日志的OBS桶的桶名。
    *
    * @return string|null
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param string|null $obsBucket 用于存储日志的OBS桶的桶名。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets agency
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return string|null
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string|null $agency 委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间。格式为：Unix时间戳格式。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt 更新时间。格式为：Unix时间戳格式。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets basePath
    *  日志在OBS桶中的备份路径。
    *
    * @return string|null
    */
    public function getBasePath()
    {
        return $this->container['basePath'];
    }

    /**
    * Sets basePath
    *
    * @param string|null $basePath 日志在OBS桶中的备份路径。
    *
    * @return $this
    */
    public function setBasePath($basePath)
    {
        $this->container['basePath'] = $basePath;
        return $this;
    }

    /**
    * Gets autoEnable
    *  自动备份开关。 - true: 自动备份开启。 - false: 自动备份关闭。
    *
    * @return bool|null
    */
    public function getAutoEnable()
    {
        return $this->container['autoEnable'];
    }

    /**
    * Sets autoEnable
    *
    * @param bool|null $autoEnable 自动备份开关。 - true: 自动备份开启。 - false: 自动备份关闭。
    *
    * @return $this
    */
    public function setAutoEnable($autoEnable)
    {
        $this->container['autoEnable'] = $autoEnable;
        return $this;
    }

    /**
    * Gets period
    *  自动备份日志开始时间。当autoEnable为false时该字段为null。格式为：格林威治标准时间。
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
    * @param string|null $period 自动备份日志开始时间。当autoEnable为false时该字段为null。格式为：格林威治标准时间。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets logSwitch
    *  日志开关。 - true: 日志开启。 - false: 日志关闭。
    *
    * @return bool|null
    */
    public function getLogSwitch()
    {
        return $this->container['logSwitch'];
    }

    /**
    * Sets logSwitch
    *
    * @param bool|null $logSwitch 日志开关。 - true: 日志开启。 - false: 日志关闭。
    *
    * @return $this
    */
    public function setLogSwitch($logSwitch)
    {
        $this->container['logSwitch'] = $logSwitch;
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

