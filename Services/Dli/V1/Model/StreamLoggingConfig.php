<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamLoggingConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamLoggingConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logEnabled  是否开启作业的日志上传到用户的 OBS 功能。默认为 false。
    * obsBucket  用户授权保存作业日志的 OBS 桶名。
    * rootLoggerLevel  根目录日志级别配置，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR
    * loggersLevelOfClass  输出日志的类名称对应的日志级别配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logEnabled' => 'bool',
            'obsBucket' => 'string',
            'rootLoggerLevel' => 'string',
            'loggersLevelOfClass' => '\HuaweiCloud\SDK\Dli\V1\Model\StreamClassLoggerLevel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logEnabled  是否开启作业的日志上传到用户的 OBS 功能。默认为 false。
    * obsBucket  用户授权保存作业日志的 OBS 桶名。
    * rootLoggerLevel  根目录日志级别配置，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR
    * loggersLevelOfClass  输出日志的类名称对应的日志级别配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logEnabled' => null,
        'obsBucket' => null,
        'rootLoggerLevel' => null,
        'loggersLevelOfClass' => null
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
    * logEnabled  是否开启作业的日志上传到用户的 OBS 功能。默认为 false。
    * obsBucket  用户授权保存作业日志的 OBS 桶名。
    * rootLoggerLevel  根目录日志级别配置，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR
    * loggersLevelOfClass  输出日志的类名称对应的日志级别配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logEnabled' => 'log_enabled',
            'obsBucket' => 'obs_bucket',
            'rootLoggerLevel' => 'root_logger_level',
            'loggersLevelOfClass' => 'loggers_level_of_class'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logEnabled  是否开启作业的日志上传到用户的 OBS 功能。默认为 false。
    * obsBucket  用户授权保存作业日志的 OBS 桶名。
    * rootLoggerLevel  根目录日志级别配置，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR
    * loggersLevelOfClass  输出日志的类名称对应的日志级别配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'logEnabled' => 'setLogEnabled',
            'obsBucket' => 'setObsBucket',
            'rootLoggerLevel' => 'setRootLoggerLevel',
            'loggersLevelOfClass' => 'setLoggersLevelOfClass'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logEnabled  是否开启作业的日志上传到用户的 OBS 功能。默认为 false。
    * obsBucket  用户授权保存作业日志的 OBS 桶名。
    * rootLoggerLevel  根目录日志级别配置，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR
    * loggersLevelOfClass  输出日志的类名称对应的日志级别配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'logEnabled' => 'getLogEnabled',
            'obsBucket' => 'getObsBucket',
            'rootLoggerLevel' => 'getRootLoggerLevel',
            'loggersLevelOfClass' => 'getLoggersLevelOfClass'
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
        $this->container['logEnabled'] = isset($data['logEnabled']) ? $data['logEnabled'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['rootLoggerLevel'] = isset($data['rootLoggerLevel']) ? $data['rootLoggerLevel'] : null;
        $this->container['loggersLevelOfClass'] = isset($data['loggersLevelOfClass']) ? $data['loggersLevelOfClass'] : null;
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
    * Gets logEnabled
    *  是否开启作业的日志上传到用户的 OBS 功能。默认为 false。
    *
    * @return bool|null
    */
    public function getLogEnabled()
    {
        return $this->container['logEnabled'];
    }

    /**
    * Sets logEnabled
    *
    * @param bool|null $logEnabled 是否开启作业的日志上传到用户的 OBS 功能。默认为 false。
    *
    * @return $this
    */
    public function setLogEnabled($logEnabled)
    {
        $this->container['logEnabled'] = $logEnabled;
        return $this;
    }

    /**
    * Gets obsBucket
    *  用户授权保存作业日志的 OBS 桶名。
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
    * @param string|null $obsBucket 用户授权保存作业日志的 OBS 桶名。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets rootLoggerLevel
    *  根目录日志级别配置，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR
    *
    * @return string|null
    */
    public function getRootLoggerLevel()
    {
        return $this->container['rootLoggerLevel'];
    }

    /**
    * Sets rootLoggerLevel
    *
    * @param string|null $rootLoggerLevel 根目录日志级别配置，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR
    *
    * @return $this
    */
    public function setRootLoggerLevel($rootLoggerLevel)
    {
        $this->container['rootLoggerLevel'] = $rootLoggerLevel;
        return $this;
    }

    /**
    * Gets loggersLevelOfClass
    *  输出日志的类名称对应的日志级别配置。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\StreamClassLoggerLevel[]|null
    */
    public function getLoggersLevelOfClass()
    {
        return $this->container['loggersLevelOfClass'];
    }

    /**
    * Sets loggersLevelOfClass
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\StreamClassLoggerLevel[]|null $loggersLevelOfClass 输出日志的类名称对应的日志级别配置。
    *
    * @return $this
    */
    public function setLoggersLevelOfClass($loggersLevelOfClass)
    {
        $this->container['loggersLevelOfClass'] = $loggersLevelOfClass;
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

