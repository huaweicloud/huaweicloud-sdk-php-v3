<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartLogsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartLogsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * logBasePath  日志在OBS桶中的备份路径。
    * logBucket  用于存储日志的OBS桶的桶名。
    * indexPrefix  保存日志的索引前缀。action等于real_time_log_collect时必选
    * keepDays  日志保存时间。action等于real_time_log_collect时必选
    * targetClusterId  保存日志的目标集群。action等于real_time_log_collect时必选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agency' => 'string',
            'logBasePath' => 'string',
            'logBucket' => 'string',
            'indexPrefix' => 'string',
            'keepDays' => 'int',
            'targetClusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * logBasePath  日志在OBS桶中的备份路径。
    * logBucket  用于存储日志的OBS桶的桶名。
    * indexPrefix  保存日志的索引前缀。action等于real_time_log_collect时必选
    * keepDays  日志保存时间。action等于real_time_log_collect时必选
    * targetClusterId  保存日志的目标集群。action等于real_time_log_collect时必选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agency' => null,
        'logBasePath' => null,
        'logBucket' => null,
        'indexPrefix' => null,
        'keepDays' => 'int32',
        'targetClusterId' => null
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
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * logBasePath  日志在OBS桶中的备份路径。
    * logBucket  用于存储日志的OBS桶的桶名。
    * indexPrefix  保存日志的索引前缀。action等于real_time_log_collect时必选
    * keepDays  日志保存时间。action等于real_time_log_collect时必选
    * targetClusterId  保存日志的目标集群。action等于real_time_log_collect时必选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agency' => 'agency',
            'logBasePath' => 'logBasePath',
            'logBucket' => 'logBucket',
            'indexPrefix' => 'index_prefix',
            'keepDays' => 'keep_days',
            'targetClusterId' => 'target_cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * logBasePath  日志在OBS桶中的备份路径。
    * logBucket  用于存储日志的OBS桶的桶名。
    * indexPrefix  保存日志的索引前缀。action等于real_time_log_collect时必选
    * keepDays  日志保存时间。action等于real_time_log_collect时必选
    * targetClusterId  保存日志的目标集群。action等于real_time_log_collect时必选
    *
    * @var string[]
    */
    protected static $setters = [
            'agency' => 'setAgency',
            'logBasePath' => 'setLogBasePath',
            'logBucket' => 'setLogBucket',
            'indexPrefix' => 'setIndexPrefix',
            'keepDays' => 'setKeepDays',
            'targetClusterId' => 'setTargetClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * logBasePath  日志在OBS桶中的备份路径。
    * logBucket  用于存储日志的OBS桶的桶名。
    * indexPrefix  保存日志的索引前缀。action等于real_time_log_collect时必选
    * keepDays  日志保存时间。action等于real_time_log_collect时必选
    * targetClusterId  保存日志的目标集群。action等于real_time_log_collect时必选
    *
    * @var string[]
    */
    protected static $getters = [
            'agency' => 'getAgency',
            'logBasePath' => 'getLogBasePath',
            'logBucket' => 'getLogBucket',
            'indexPrefix' => 'getIndexPrefix',
            'keepDays' => 'getKeepDays',
            'targetClusterId' => 'getTargetClusterId'
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
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['logBasePath'] = isset($data['logBasePath']) ? $data['logBasePath'] : null;
        $this->container['logBucket'] = isset($data['logBucket']) ? $data['logBucket'] : null;
        $this->container['indexPrefix'] = isset($data['indexPrefix']) ? $data['indexPrefix'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['targetClusterId'] = isset($data['targetClusterId']) ? $data['targetClusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agency'] === null) {
            $invalidProperties[] = "'agency' can't be null";
        }
        if ($this->container['logBasePath'] === null) {
            $invalidProperties[] = "'logBasePath' can't be null";
        }
        if ($this->container['logBucket'] === null) {
            $invalidProperties[] = "'logBucket' can't be null";
        }
            if (!is_null($this->container['keepDays']) && ($this->container['keepDays'] > 3650)) {
                $invalidProperties[] = "invalid value for 'keepDays', must be smaller than or equal to 3650.";
            }
            if (!is_null($this->container['keepDays']) && ($this->container['keepDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'keepDays', must be bigger than or equal to 1.";
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
    * Gets agency
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return string
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string $agency 委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets logBasePath
    *  日志在OBS桶中的备份路径。
    *
    * @return string
    */
    public function getLogBasePath()
    {
        return $this->container['logBasePath'];
    }

    /**
    * Sets logBasePath
    *
    * @param string $logBasePath 日志在OBS桶中的备份路径。
    *
    * @return $this
    */
    public function setLogBasePath($logBasePath)
    {
        $this->container['logBasePath'] = $logBasePath;
        return $this;
    }

    /**
    * Gets logBucket
    *  用于存储日志的OBS桶的桶名。
    *
    * @return string
    */
    public function getLogBucket()
    {
        return $this->container['logBucket'];
    }

    /**
    * Sets logBucket
    *
    * @param string $logBucket 用于存储日志的OBS桶的桶名。
    *
    * @return $this
    */
    public function setLogBucket($logBucket)
    {
        $this->container['logBucket'] = $logBucket;
        return $this;
    }

    /**
    * Gets indexPrefix
    *  保存日志的索引前缀。action等于real_time_log_collect时必选
    *
    * @return string|null
    */
    public function getIndexPrefix()
    {
        return $this->container['indexPrefix'];
    }

    /**
    * Sets indexPrefix
    *
    * @param string|null $indexPrefix 保存日志的索引前缀。action等于real_time_log_collect时必选
    *
    * @return $this
    */
    public function setIndexPrefix($indexPrefix)
    {
        $this->container['indexPrefix'] = $indexPrefix;
        return $this;
    }

    /**
    * Gets keepDays
    *  日志保存时间。action等于real_time_log_collect时必选
    *
    * @return int|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int|null $keepDays 日志保存时间。action等于real_time_log_collect时必选
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets targetClusterId
    *  保存日志的目标集群。action等于real_time_log_collect时必选
    *
    * @return string|null
    */
    public function getTargetClusterId()
    {
        return $this->container['targetClusterId'];
    }

    /**
    * Sets targetClusterId
    *
    * @param string|null $targetClusterId 保存日志的目标集群。action等于real_time_log_collect时必选
    *
    * @return $this
    */
    public function setTargetClusterId($targetClusterId)
    {
        $this->container['targetClusterId'] = $targetClusterId;
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

