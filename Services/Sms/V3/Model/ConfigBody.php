<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configKey  配置类型 MIGRATE_EXCLUDE_DIR: 迁移时设定的不迁移目录 SYNC_EXCLUDE_DIR: 同步时设定的不同步目录 ONLY_SYNC_DIR: 同步时设定的同步目录 CONSISTENCY_DIR: 一致性校验的目录 CONSISTENCY_DIR_ILLEGAL: 一致性校验后非法目录 LINUX_BLOCK_COMPRESS_THREAD_NUM: linux块迁移压缩线程个数 MIGRATE_DST_IP: 迁移目的ip LINUX_BLOCK_CACHE_SIZE: linux块迁移缓存大小 LINUX_CPU_LIMIT: linux的cpu限制 LINUX_MEM_LIMIT: linux的内存限制 LINUX_IO_LIMIT: linux的IO限制 NUM_PROCESS_MIGRATE: 迁移进程数 NUM_PROCESS_SYNC: 同步进程数 CONSISTENCY_RECHECK: 一致性校验再检 CONSISTENCY_MODE: 一致性校验模式 DYNAMIC_PORT: 动态端口
    * configValue  具体配置参数字段，保存于数据库，最终在agent端进行解析
    * configStatus  描述配置状态的保留字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configKey' => 'string',
            'configValue' => 'string',
            'configStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configKey  配置类型 MIGRATE_EXCLUDE_DIR: 迁移时设定的不迁移目录 SYNC_EXCLUDE_DIR: 同步时设定的不同步目录 ONLY_SYNC_DIR: 同步时设定的同步目录 CONSISTENCY_DIR: 一致性校验的目录 CONSISTENCY_DIR_ILLEGAL: 一致性校验后非法目录 LINUX_BLOCK_COMPRESS_THREAD_NUM: linux块迁移压缩线程个数 MIGRATE_DST_IP: 迁移目的ip LINUX_BLOCK_CACHE_SIZE: linux块迁移缓存大小 LINUX_CPU_LIMIT: linux的cpu限制 LINUX_MEM_LIMIT: linux的内存限制 LINUX_IO_LIMIT: linux的IO限制 NUM_PROCESS_MIGRATE: 迁移进程数 NUM_PROCESS_SYNC: 同步进程数 CONSISTENCY_RECHECK: 一致性校验再检 CONSISTENCY_MODE: 一致性校验模式 DYNAMIC_PORT: 动态端口
    * configValue  具体配置参数字段，保存于数据库，最终在agent端进行解析
    * configStatus  描述配置状态的保留字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configKey' => null,
        'configValue' => null,
        'configStatus' => null
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
    * configKey  配置类型 MIGRATE_EXCLUDE_DIR: 迁移时设定的不迁移目录 SYNC_EXCLUDE_DIR: 同步时设定的不同步目录 ONLY_SYNC_DIR: 同步时设定的同步目录 CONSISTENCY_DIR: 一致性校验的目录 CONSISTENCY_DIR_ILLEGAL: 一致性校验后非法目录 LINUX_BLOCK_COMPRESS_THREAD_NUM: linux块迁移压缩线程个数 MIGRATE_DST_IP: 迁移目的ip LINUX_BLOCK_CACHE_SIZE: linux块迁移缓存大小 LINUX_CPU_LIMIT: linux的cpu限制 LINUX_MEM_LIMIT: linux的内存限制 LINUX_IO_LIMIT: linux的IO限制 NUM_PROCESS_MIGRATE: 迁移进程数 NUM_PROCESS_SYNC: 同步进程数 CONSISTENCY_RECHECK: 一致性校验再检 CONSISTENCY_MODE: 一致性校验模式 DYNAMIC_PORT: 动态端口
    * configValue  具体配置参数字段，保存于数据库，最终在agent端进行解析
    * configStatus  描述配置状态的保留字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configKey' => 'config_key',
            'configValue' => 'config_value',
            'configStatus' => 'config_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configKey  配置类型 MIGRATE_EXCLUDE_DIR: 迁移时设定的不迁移目录 SYNC_EXCLUDE_DIR: 同步时设定的不同步目录 ONLY_SYNC_DIR: 同步时设定的同步目录 CONSISTENCY_DIR: 一致性校验的目录 CONSISTENCY_DIR_ILLEGAL: 一致性校验后非法目录 LINUX_BLOCK_COMPRESS_THREAD_NUM: linux块迁移压缩线程个数 MIGRATE_DST_IP: 迁移目的ip LINUX_BLOCK_CACHE_SIZE: linux块迁移缓存大小 LINUX_CPU_LIMIT: linux的cpu限制 LINUX_MEM_LIMIT: linux的内存限制 LINUX_IO_LIMIT: linux的IO限制 NUM_PROCESS_MIGRATE: 迁移进程数 NUM_PROCESS_SYNC: 同步进程数 CONSISTENCY_RECHECK: 一致性校验再检 CONSISTENCY_MODE: 一致性校验模式 DYNAMIC_PORT: 动态端口
    * configValue  具体配置参数字段，保存于数据库，最终在agent端进行解析
    * configStatus  描述配置状态的保留字段
    *
    * @var string[]
    */
    protected static $setters = [
            'configKey' => 'setConfigKey',
            'configValue' => 'setConfigValue',
            'configStatus' => 'setConfigStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configKey  配置类型 MIGRATE_EXCLUDE_DIR: 迁移时设定的不迁移目录 SYNC_EXCLUDE_DIR: 同步时设定的不同步目录 ONLY_SYNC_DIR: 同步时设定的同步目录 CONSISTENCY_DIR: 一致性校验的目录 CONSISTENCY_DIR_ILLEGAL: 一致性校验后非法目录 LINUX_BLOCK_COMPRESS_THREAD_NUM: linux块迁移压缩线程个数 MIGRATE_DST_IP: 迁移目的ip LINUX_BLOCK_CACHE_SIZE: linux块迁移缓存大小 LINUX_CPU_LIMIT: linux的cpu限制 LINUX_MEM_LIMIT: linux的内存限制 LINUX_IO_LIMIT: linux的IO限制 NUM_PROCESS_MIGRATE: 迁移进程数 NUM_PROCESS_SYNC: 同步进程数 CONSISTENCY_RECHECK: 一致性校验再检 CONSISTENCY_MODE: 一致性校验模式 DYNAMIC_PORT: 动态端口
    * configValue  具体配置参数字段，保存于数据库，最终在agent端进行解析
    * configStatus  描述配置状态的保留字段
    *
    * @var string[]
    */
    protected static $getters = [
            'configKey' => 'getConfigKey',
            'configValue' => 'getConfigValue',
            'configStatus' => 'getConfigStatus'
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
    const CONFIG_KEY_MIGRATE_EXCLUDE_DIR = 'MIGRATE_EXCLUDE_DIR';
    const CONFIG_KEY_SYNC_EXCLUDE_DIR = 'SYNC_EXCLUDE_DIR';
    const CONFIG_KEY_ONLY_SYNC_DIR = 'ONLY_SYNC_DIR';
    const CONFIG_KEY_CONSISTENCY_DIR = 'CONSISTENCY_DIR';
    const CONFIG_KEY_CONSISTENCY_DIR_ILLEGAL = 'CONSISTENCY_DIR_ILLEGAL';
    const CONFIG_KEY_LINUX_BLOCK_COMPRESS_THREAD_NUM = 'LINUX_BLOCK_COMPRESS_THREAD_NUM';
    const CONFIG_KEY_MIGRATE_DST_IP = 'MIGRATE_DST_IP';
    const CONFIG_KEY_LINUX_BLOCK_CACHE_SIZE = 'LINUX_BLOCK_CACHE_SIZE';
    const CONFIG_KEY_LINUX_CPU_LIMIT = 'LINUX_CPU_LIMIT';
    const CONFIG_KEY_LINUX_MEM_LIMIT = 'LINUX_MEM_LIMIT';
    const CONFIG_KEY_LINUX_IO_LIMIT = 'LINUX_IO_LIMIT';
    const CONFIG_KEY_NUM_PROCESS_MIGRATE = 'NUM_PROCESS_MIGRATE';
    const CONFIG_KEY_NUM_PROCESS_SYNC = 'NUM_PROCESS_SYNC';
    const CONFIG_KEY_CONSISTENCY_RECHECK = 'CONSISTENCY_RECHECK';
    const CONFIG_KEY_CONSISTENCY_MODE = 'CONSISTENCY_MODE';
    const CONFIG_KEY_DYNAMIC_PORT = 'DYNAMIC_PORT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigKeyAllowableValues()
    {
        return [
            self::CONFIG_KEY_MIGRATE_EXCLUDE_DIR,
            self::CONFIG_KEY_SYNC_EXCLUDE_DIR,
            self::CONFIG_KEY_ONLY_SYNC_DIR,
            self::CONFIG_KEY_CONSISTENCY_DIR,
            self::CONFIG_KEY_CONSISTENCY_DIR_ILLEGAL,
            self::CONFIG_KEY_LINUX_BLOCK_COMPRESS_THREAD_NUM,
            self::CONFIG_KEY_MIGRATE_DST_IP,
            self::CONFIG_KEY_LINUX_BLOCK_CACHE_SIZE,
            self::CONFIG_KEY_LINUX_CPU_LIMIT,
            self::CONFIG_KEY_LINUX_MEM_LIMIT,
            self::CONFIG_KEY_LINUX_IO_LIMIT,
            self::CONFIG_KEY_NUM_PROCESS_MIGRATE,
            self::CONFIG_KEY_NUM_PROCESS_SYNC,
            self::CONFIG_KEY_CONSISTENCY_RECHECK,
            self::CONFIG_KEY_CONSISTENCY_MODE,
            self::CONFIG_KEY_DYNAMIC_PORT,
        ];
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
        $this->container['configKey'] = isset($data['configKey']) ? $data['configKey'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['configKey'] === null) {
            $invalidProperties[] = "'configKey' can't be null";
        }
            $allowedValues = $this->getConfigKeyAllowableValues();
                if (!is_null($this->container['configKey']) && !in_array($this->container['configKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['configValue'] === null) {
            $invalidProperties[] = "'configValue' can't be null";
        }
            if ((mb_strlen($this->container['configValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'configValue', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['configValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'configValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['configStatus']) && (mb_strlen($this->container['configStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'configStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['configStatus']) && (mb_strlen($this->container['configStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'configStatus', the character length must be bigger than or equal to 0.";
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
    * Gets configKey
    *  配置类型 MIGRATE_EXCLUDE_DIR: 迁移时设定的不迁移目录 SYNC_EXCLUDE_DIR: 同步时设定的不同步目录 ONLY_SYNC_DIR: 同步时设定的同步目录 CONSISTENCY_DIR: 一致性校验的目录 CONSISTENCY_DIR_ILLEGAL: 一致性校验后非法目录 LINUX_BLOCK_COMPRESS_THREAD_NUM: linux块迁移压缩线程个数 MIGRATE_DST_IP: 迁移目的ip LINUX_BLOCK_CACHE_SIZE: linux块迁移缓存大小 LINUX_CPU_LIMIT: linux的cpu限制 LINUX_MEM_LIMIT: linux的内存限制 LINUX_IO_LIMIT: linux的IO限制 NUM_PROCESS_MIGRATE: 迁移进程数 NUM_PROCESS_SYNC: 同步进程数 CONSISTENCY_RECHECK: 一致性校验再检 CONSISTENCY_MODE: 一致性校验模式 DYNAMIC_PORT: 动态端口
    *
    * @return string
    */
    public function getConfigKey()
    {
        return $this->container['configKey'];
    }

    /**
    * Sets configKey
    *
    * @param string $configKey 配置类型 MIGRATE_EXCLUDE_DIR: 迁移时设定的不迁移目录 SYNC_EXCLUDE_DIR: 同步时设定的不同步目录 ONLY_SYNC_DIR: 同步时设定的同步目录 CONSISTENCY_DIR: 一致性校验的目录 CONSISTENCY_DIR_ILLEGAL: 一致性校验后非法目录 LINUX_BLOCK_COMPRESS_THREAD_NUM: linux块迁移压缩线程个数 MIGRATE_DST_IP: 迁移目的ip LINUX_BLOCK_CACHE_SIZE: linux块迁移缓存大小 LINUX_CPU_LIMIT: linux的cpu限制 LINUX_MEM_LIMIT: linux的内存限制 LINUX_IO_LIMIT: linux的IO限制 NUM_PROCESS_MIGRATE: 迁移进程数 NUM_PROCESS_SYNC: 同步进程数 CONSISTENCY_RECHECK: 一致性校验再检 CONSISTENCY_MODE: 一致性校验模式 DYNAMIC_PORT: 动态端口
    *
    * @return $this
    */
    public function setConfigKey($configKey)
    {
        $this->container['configKey'] = $configKey;
        return $this;
    }

    /**
    * Gets configValue
    *  具体配置参数字段，保存于数据库，最终在agent端进行解析
    *
    * @return string
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string $configValue 具体配置参数字段，保存于数据库，最终在agent端进行解析
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
        return $this;
    }

    /**
    * Gets configStatus
    *  描述配置状态的保留字段
    *
    * @return string|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param string|null $configStatus 描述配置状态的保留字段
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
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

