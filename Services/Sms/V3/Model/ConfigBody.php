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
    * configKey  配置类型，分为：”EXCLUDE_MIGRATE_PATH\"，\"EXCLUDE_SYNC_PATH\"，\"ONLY_SYNC_PATH\",\"OTHERS\"
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
    * configKey  配置类型，分为：”EXCLUDE_MIGRATE_PATH\"，\"EXCLUDE_SYNC_PATH\"，\"ONLY_SYNC_PATH\",\"OTHERS\"
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
    * configKey  配置类型，分为：”EXCLUDE_MIGRATE_PATH\"，\"EXCLUDE_SYNC_PATH\"，\"ONLY_SYNC_PATH\",\"OTHERS\"
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
    * configKey  配置类型，分为：”EXCLUDE_MIGRATE_PATH\"，\"EXCLUDE_SYNC_PATH\"，\"ONLY_SYNC_PATH\",\"OTHERS\"
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
    * configKey  配置类型，分为：”EXCLUDE_MIGRATE_PATH\"，\"EXCLUDE_SYNC_PATH\"，\"ONLY_SYNC_PATH\",\"OTHERS\"
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
            if ((mb_strlen($this->container['configKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'configKey', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['configKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'configKey', the character length must be bigger than or equal to 0.";
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
    *  配置类型，分为：”EXCLUDE_MIGRATE_PATH\"，\"EXCLUDE_SYNC_PATH\"，\"ONLY_SYNC_PATH\",\"OTHERS\"
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
    * @param string $configKey 配置类型，分为：”EXCLUDE_MIGRATE_PATH\"，\"EXCLUDE_SYNC_PATH\"，\"ONLY_SYNC_PATH\",\"OTHERS\"
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

