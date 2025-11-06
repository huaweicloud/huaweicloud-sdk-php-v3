<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoNotificationSubscriptionStateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoNotificationSubscriptionStateDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configSource  **参数解释：** 配资源。
    * enabled  **参数解释：** 开启通知。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configSource' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configSource  **参数解释：** 配资源。
    * enabled  **参数解释：** 开启通知。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configSource' => null,
        'enabled' => null
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
    * configSource  **参数解释：** 配资源。
    * enabled  **参数解释：** 开启通知。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configSource' => 'config_source',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configSource  **参数解释：** 配资源。
    * enabled  **参数解释：** 开启通知。
    *
    * @var string[]
    */
    protected static $setters = [
            'configSource' => 'setConfigSource',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configSource  **参数解释：** 配资源。
    * enabled  **参数解释：** 开启通知。
    *
    * @var string[]
    */
    protected static $getters = [
            'configSource' => 'getConfigSource',
            'enabled' => 'getEnabled'
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
    const CONFIG_SOURCE_REPO = 'repo';
    const CONFIG_SOURCE_PRODUCT = 'product';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigSourceAllowableValues()
    {
        return [
            self::CONFIG_SOURCE_REPO,
            self::CONFIG_SOURCE_PRODUCT,
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
        $this->container['configSource'] = isset($data['configSource']) ? $data['configSource'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConfigSourceAllowableValues();
                if (!is_null($this->container['configSource']) && !in_array($this->container['configSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets configSource
    *  **参数解释：** 配资源。
    *
    * @return string|null
    */
    public function getConfigSource()
    {
        return $this->container['configSource'];
    }

    /**
    * Sets configSource
    *
    * @param string|null $configSource **参数解释：** 配资源。
    *
    * @return $this
    */
    public function setConfigSource($configSource)
    {
        $this->container['configSource'] = $configSource;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释：** 开启通知。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释：** 开启通知。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

