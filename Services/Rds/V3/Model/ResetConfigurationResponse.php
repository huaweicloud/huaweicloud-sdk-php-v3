<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configName  **参数解释**：  参数组模板名称。  **约束限制**：  不涉及。
    * needRestart  **参数解释**：  是否涉及重启。（当前该字段不使用，默认为false）  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configName' => 'string',
            'needRestart' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configName  **参数解释**：  参数组模板名称。  **约束限制**：  不涉及。
    * needRestart  **参数解释**：  是否涉及重启。（当前该字段不使用，默认为false）  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configName' => null,
        'needRestart' => null
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
    * configName  **参数解释**：  参数组模板名称。  **约束限制**：  不涉及。
    * needRestart  **参数解释**：  是否涉及重启。（当前该字段不使用，默认为false）  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configName' => 'config_name',
            'needRestart' => 'need_restart'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configName  **参数解释**：  参数组模板名称。  **约束限制**：  不涉及。
    * needRestart  **参数解释**：  是否涉及重启。（当前该字段不使用，默认为false）  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'configName' => 'setConfigName',
            'needRestart' => 'setNeedRestart'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configName  **参数解释**：  参数组模板名称。  **约束限制**：  不涉及。
    * needRestart  **参数解释**：  是否涉及重启。（当前该字段不使用，默认为false）  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'configName' => 'getConfigName',
            'needRestart' => 'getNeedRestart'
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
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['needRestart'] = isset($data['needRestart']) ? $data['needRestart'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) > 128)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) < 0)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be bigger than or equal to 0.";
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
    * Gets configName
    *  **参数解释**：  参数组模板名称。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName **参数解释**：  参数组模板名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets needRestart
    *  **参数解释**：  是否涉及重启。（当前该字段不使用，默认为false）  **约束限制**：  不涉及。
    *
    * @return bool|null
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param bool|null $needRestart **参数解释**：  是否涉及重启。（当前该字段不使用，默认为false）  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setNeedRestart($needRestart)
    {
        $this->container['needRestart'] = $needRestart;
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

