<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogExportConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogExportConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  **参数解释**：日志版本号。 **约束限制**： - 日志版本取值为v0、v1，默认为v0。 **取值范围**：v0、v1 **默认取值**：v0。
    * rotationEnabled  **参数解释**：是否开启日志分时段下载。 **约束限制**：不涉及。 **取值范围**： - true：开启日志分时段下载 - false：关闭日志分时段下载 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'rotationEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  **参数解释**：日志版本号。 **约束限制**： - 日志版本取值为v0、v1，默认为v0。 **取值范围**：v0、v1 **默认取值**：v0。
    * rotationEnabled  **参数解释**：是否开启日志分时段下载。 **约束限制**：不涉及。 **取值范围**： - true：开启日志分时段下载 - false：关闭日志分时段下载 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'rotationEnabled' => null
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
    * version  **参数解释**：日志版本号。 **约束限制**： - 日志版本取值为v0、v1，默认为v0。 **取值范围**：v0、v1 **默认取值**：v0。
    * rotationEnabled  **参数解释**：是否开启日志分时段下载。 **约束限制**：不涉及。 **取值范围**： - true：开启日志分时段下载 - false：关闭日志分时段下载 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'rotationEnabled' => 'rotation_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  **参数解释**：日志版本号。 **约束限制**： - 日志版本取值为v0、v1，默认为v0。 **取值范围**：v0、v1 **默认取值**：v0。
    * rotationEnabled  **参数解释**：是否开启日志分时段下载。 **约束限制**：不涉及。 **取值范围**： - true：开启日志分时段下载 - false：关闭日志分时段下载 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'rotationEnabled' => 'setRotationEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  **参数解释**：日志版本号。 **约束限制**： - 日志版本取值为v0、v1，默认为v0。 **取值范围**：v0、v1 **默认取值**：v0。
    * rotationEnabled  **参数解释**：是否开启日志分时段下载。 **约束限制**：不涉及。 **取值范围**： - true：开启日志分时段下载 - false：关闭日志分时段下载 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'rotationEnabled' => 'getRotationEnabled'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['rotationEnabled'] = isset($data['rotationEnabled']) ? $data['rotationEnabled'] : null;
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
    * Gets version
    *  **参数解释**：日志版本号。 **约束限制**： - 日志版本取值为v0、v1，默认为v0。 **取值范围**：v0、v1 **默认取值**：v0。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**：日志版本号。 **约束限制**： - 日志版本取值为v0、v1，默认为v0。 **取值范围**：v0、v1 **默认取值**：v0。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets rotationEnabled
    *  **参数解释**：是否开启日志分时段下载。 **约束限制**：不涉及。 **取值范围**： - true：开启日志分时段下载 - false：关闭日志分时段下载 **默认取值**：false。
    *
    * @return bool|null
    */
    public function getRotationEnabled()
    {
        return $this->container['rotationEnabled'];
    }

    /**
    * Sets rotationEnabled
    *
    * @param bool|null $rotationEnabled **参数解释**：是否开启日志分时段下载。 **约束限制**：不涉及。 **取值范围**： - true：开启日志分时段下载 - false：关闭日志分时段下载 **默认取值**：false。
    *
    * @return $this
    */
    public function setRotationEnabled($rotationEnabled)
    {
        $this->container['rotationEnabled'] = $rotationEnabled;
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

