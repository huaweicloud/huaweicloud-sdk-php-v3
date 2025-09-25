<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IacScanRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IacScanRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationMode  **参数解释**: 配置方式 **约束限制**: 不涉及 **取值范围**: - local_directory：本地目录。 - remote_address：https远程地址。 - git_repository_address：git仓库地址。  **默认取值**: 不涉及
    * path  **参数解释**: 配置文件路径 **约束限制**: 不涉及 **取值范围**: 字符取值1-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationMode' => 'string',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationMode  **参数解释**: 配置方式 **约束限制**: 不涉及 **取值范围**: - local_directory：本地目录。 - remote_address：https远程地址。 - git_repository_address：git仓库地址。  **默认取值**: 不涉及
    * path  **参数解释**: 配置文件路径 **约束限制**: 不涉及 **取值范围**: 字符取值1-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationMode' => null,
        'path' => null
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
    * configurationMode  **参数解释**: 配置方式 **约束限制**: 不涉及 **取值范围**: - local_directory：本地目录。 - remote_address：https远程地址。 - git_repository_address：git仓库地址。  **默认取值**: 不涉及
    * path  **参数解释**: 配置文件路径 **约束限制**: 不涉及 **取值范围**: 字符取值1-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationMode' => 'configuration_mode',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationMode  **参数解释**: 配置方式 **约束限制**: 不涉及 **取值范围**: - local_directory：本地目录。 - remote_address：https远程地址。 - git_repository_address：git仓库地址。  **默认取值**: 不涉及
    * path  **参数解释**: 配置文件路径 **约束限制**: 不涉及 **取值范围**: 字符取值1-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationMode' => 'setConfigurationMode',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationMode  **参数解释**: 配置方式 **约束限制**: 不涉及 **取值范围**: - local_directory：本地目录。 - remote_address：https远程地址。 - git_repository_address：git仓库地址。  **默认取值**: 不涉及
    * path  **参数解释**: 配置文件路径 **约束限制**: 不涉及 **取值范围**: 字符取值1-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationMode' => 'getConfigurationMode',
            'path' => 'getPath'
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
        $this->container['configurationMode'] = isset($data['configurationMode']) ? $data['configurationMode'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configurationMode']) && (mb_strlen($this->container['configurationMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'configurationMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['configurationMode']) && (mb_strlen($this->container['configurationMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'configurationMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['configurationMode']) && !preg_match("/^local_directory|remote_address|git_repository_address$/", $this->container['configurationMode'])) {
                $invalidProperties[] = "invalid value for 'configurationMode', must be conform to the pattern /^local_directory|remote_address|git_repository_address$/.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 256)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && !preg_match("/^.*$/", $this->container['path'])) {
                $invalidProperties[] = "invalid value for 'path', must be conform to the pattern /^.*$/.";
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
    * Gets configurationMode
    *  **参数解释**: 配置方式 **约束限制**: 不涉及 **取值范围**: - local_directory：本地目录。 - remote_address：https远程地址。 - git_repository_address：git仓库地址。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getConfigurationMode()
    {
        return $this->container['configurationMode'];
    }

    /**
    * Sets configurationMode
    *
    * @param string|null $configurationMode **参数解释**: 配置方式 **约束限制**: 不涉及 **取值范围**: - local_directory：本地目录。 - remote_address：https远程地址。 - git_repository_address：git仓库地址。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setConfigurationMode($configurationMode)
    {
        $this->container['configurationMode'] = $configurationMode;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 配置文件路径 **约束限制**: 不涉及 **取值范围**: 字符取值1-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 配置文件路径 **约束限制**: 不涉及 **取值范围**: 字符取值1-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

