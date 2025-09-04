<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasePathDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasePathDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logBasePath  节点日志根目录
    * configBasePath  节点配置根目录
    * dbBasePath  节点数据存储根目录
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logBasePath' => 'string',
            'configBasePath' => 'string',
            'dbBasePath' => 'string',
            'offlineCacheConfigs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\OfflineCacheConfigsDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logBasePath  节点日志根目录
    * configBasePath  节点配置根目录
    * dbBasePath  节点数据存储根目录
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logBasePath' => null,
        'configBasePath' => null,
        'dbBasePath' => null,
        'offlineCacheConfigs' => null
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
    * logBasePath  节点日志根目录
    * configBasePath  节点配置根目录
    * dbBasePath  节点数据存储根目录
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logBasePath' => 'log_base_path',
            'configBasePath' => 'config_base_path',
            'dbBasePath' => 'db_base_path',
            'offlineCacheConfigs' => 'offline_cache_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logBasePath  节点日志根目录
    * configBasePath  节点配置根目录
    * dbBasePath  节点数据存储根目录
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $setters = [
            'logBasePath' => 'setLogBasePath',
            'configBasePath' => 'setConfigBasePath',
            'dbBasePath' => 'setDbBasePath',
            'offlineCacheConfigs' => 'setOfflineCacheConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logBasePath  节点日志根目录
    * configBasePath  节点配置根目录
    * dbBasePath  节点数据存储根目录
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $getters = [
            'logBasePath' => 'getLogBasePath',
            'configBasePath' => 'getConfigBasePath',
            'dbBasePath' => 'getDbBasePath',
            'offlineCacheConfigs' => 'getOfflineCacheConfigs'
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
        $this->container['logBasePath'] = isset($data['logBasePath']) ? $data['logBasePath'] : null;
        $this->container['configBasePath'] = isset($data['configBasePath']) ? $data['configBasePath'] : null;
        $this->container['dbBasePath'] = isset($data['dbBasePath']) ? $data['dbBasePath'] : null;
        $this->container['offlineCacheConfigs'] = isset($data['offlineCacheConfigs']) ? $data['offlineCacheConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logBasePath']) && (mb_strlen($this->container['logBasePath']) > 64)) {
                $invalidProperties[] = "invalid value for 'logBasePath', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logBasePath']) && (mb_strlen($this->container['logBasePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'logBasePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logBasePath']) && !preg_match("/^\/([a-zA-Z_0-9-]+\/)*$/", $this->container['logBasePath'])) {
                $invalidProperties[] = "invalid value for 'logBasePath', must be conform to the pattern /^\/([a-zA-Z_0-9-]+\/)*$/.";
            }
            if (!is_null($this->container['configBasePath']) && (mb_strlen($this->container['configBasePath']) > 64)) {
                $invalidProperties[] = "invalid value for 'configBasePath', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['configBasePath']) && (mb_strlen($this->container['configBasePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'configBasePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['configBasePath']) && !preg_match("/^\/([a-zA-Z_0-9-]+\/)*$/", $this->container['configBasePath'])) {
                $invalidProperties[] = "invalid value for 'configBasePath', must be conform to the pattern /^\/([a-zA-Z_0-9-]+\/)*$/.";
            }
            if (!is_null($this->container['dbBasePath']) && (mb_strlen($this->container['dbBasePath']) > 64)) {
                $invalidProperties[] = "invalid value for 'dbBasePath', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dbBasePath']) && (mb_strlen($this->container['dbBasePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'dbBasePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dbBasePath']) && !preg_match("/^\/([a-zA-Z_0-9-]+\/)*$/", $this->container['dbBasePath'])) {
                $invalidProperties[] = "invalid value for 'dbBasePath', must be conform to the pattern /^\/([a-zA-Z_0-9-]+\/)*$/.";
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
    * Gets logBasePath
    *  节点日志根目录
    *
    * @return string|null
    */
    public function getLogBasePath()
    {
        return $this->container['logBasePath'];
    }

    /**
    * Sets logBasePath
    *
    * @param string|null $logBasePath 节点日志根目录
    *
    * @return $this
    */
    public function setLogBasePath($logBasePath)
    {
        $this->container['logBasePath'] = $logBasePath;
        return $this;
    }

    /**
    * Gets configBasePath
    *  节点配置根目录
    *
    * @return string|null
    */
    public function getConfigBasePath()
    {
        return $this->container['configBasePath'];
    }

    /**
    * Sets configBasePath
    *
    * @param string|null $configBasePath 节点配置根目录
    *
    * @return $this
    */
    public function setConfigBasePath($configBasePath)
    {
        $this->container['configBasePath'] = $configBasePath;
        return $this;
    }

    /**
    * Gets dbBasePath
    *  节点数据存储根目录
    *
    * @return string|null
    */
    public function getDbBasePath()
    {
        return $this->container['dbBasePath'];
    }

    /**
    * Sets dbBasePath
    *
    * @param string|null $dbBasePath 节点数据存储根目录
    *
    * @return $this
    */
    public function setDbBasePath($dbBasePath)
    {
        $this->container['dbBasePath'] = $dbBasePath;
        return $this;
    }

    /**
    * Gets offlineCacheConfigs
    *  offlineCacheConfigs
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\OfflineCacheConfigsDTO|null
    */
    public function getOfflineCacheConfigs()
    {
        return $this->container['offlineCacheConfigs'];
    }

    /**
    * Sets offlineCacheConfigs
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\OfflineCacheConfigsDTO|null $offlineCacheConfigs offlineCacheConfigs
    *
    * @return $this
    */
    public function setOfflineCacheConfigs($offlineCacheConfigs)
    {
        $this->container['offlineCacheConfigs'] = $offlineCacheConfigs;
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

