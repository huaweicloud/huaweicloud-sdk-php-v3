<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Statement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Statement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * effect  指定是允许还是拒绝该操作。既有允许（ALLOW）又有拒绝（DENY）的授权语句时，遵循拒绝（DENY）优先的原则。 - ALLOW：允许。 - DENY：拒绝。
    * actions  用于指定策略允许或拒绝的操作。格式为：服务名:资源:操作。当前支持的操作类型如下： - iotda:devices:publish：设备使用MQTT协议发布消息。 - iotda:devices:subscribe：设备使用MQTT协议订阅消息。
    * resources  用于指定允许或拒绝对其执行操作的资源。格式为：资源类型:资源名称。如设备订阅的资源为：topic:/v1/${devices.deviceId}/test/hello。  **取值范围**：资源列表长度最小为1，最大为10，列表中的资源取值范围：仅支持字母，数字，以及/{}$=+#?*:._-组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'effect' => 'string',
            'actions' => 'string[]',
            'resources' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * effect  指定是允许还是拒绝该操作。既有允许（ALLOW）又有拒绝（DENY）的授权语句时，遵循拒绝（DENY）优先的原则。 - ALLOW：允许。 - DENY：拒绝。
    * actions  用于指定策略允许或拒绝的操作。格式为：服务名:资源:操作。当前支持的操作类型如下： - iotda:devices:publish：设备使用MQTT协议发布消息。 - iotda:devices:subscribe：设备使用MQTT协议订阅消息。
    * resources  用于指定允许或拒绝对其执行操作的资源。格式为：资源类型:资源名称。如设备订阅的资源为：topic:/v1/${devices.deviceId}/test/hello。  **取值范围**：资源列表长度最小为1，最大为10，列表中的资源取值范围：仅支持字母，数字，以及/{}$=+#?*:._-组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'effect' => null,
        'actions' => null,
        'resources' => null
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
    * effect  指定是允许还是拒绝该操作。既有允许（ALLOW）又有拒绝（DENY）的授权语句时，遵循拒绝（DENY）优先的原则。 - ALLOW：允许。 - DENY：拒绝。
    * actions  用于指定策略允许或拒绝的操作。格式为：服务名:资源:操作。当前支持的操作类型如下： - iotda:devices:publish：设备使用MQTT协议发布消息。 - iotda:devices:subscribe：设备使用MQTT协议订阅消息。
    * resources  用于指定允许或拒绝对其执行操作的资源。格式为：资源类型:资源名称。如设备订阅的资源为：topic:/v1/${devices.deviceId}/test/hello。  **取值范围**：资源列表长度最小为1，最大为10，列表中的资源取值范围：仅支持字母，数字，以及/{}$=+#?*:._-组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'effect' => 'effect',
            'actions' => 'actions',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * effect  指定是允许还是拒绝该操作。既有允许（ALLOW）又有拒绝（DENY）的授权语句时，遵循拒绝（DENY）优先的原则。 - ALLOW：允许。 - DENY：拒绝。
    * actions  用于指定策略允许或拒绝的操作。格式为：服务名:资源:操作。当前支持的操作类型如下： - iotda:devices:publish：设备使用MQTT协议发布消息。 - iotda:devices:subscribe：设备使用MQTT协议订阅消息。
    * resources  用于指定允许或拒绝对其执行操作的资源。格式为：资源类型:资源名称。如设备订阅的资源为：topic:/v1/${devices.deviceId}/test/hello。  **取值范围**：资源列表长度最小为1，最大为10，列表中的资源取值范围：仅支持字母，数字，以及/{}$=+#?*:._-组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'effect' => 'setEffect',
            'actions' => 'setActions',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * effect  指定是允许还是拒绝该操作。既有允许（ALLOW）又有拒绝（DENY）的授权语句时，遵循拒绝（DENY）优先的原则。 - ALLOW：允许。 - DENY：拒绝。
    * actions  用于指定策略允许或拒绝的操作。格式为：服务名:资源:操作。当前支持的操作类型如下： - iotda:devices:publish：设备使用MQTT协议发布消息。 - iotda:devices:subscribe：设备使用MQTT协议订阅消息。
    * resources  用于指定允许或拒绝对其执行操作的资源。格式为：资源类型:资源名称。如设备订阅的资源为：topic:/v1/${devices.deviceId}/test/hello。  **取值范围**：资源列表长度最小为1，最大为10，列表中的资源取值范围：仅支持字母，数字，以及/{}$=+#?*:._-组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'effect' => 'getEffect',
            'actions' => 'getActions',
            'resources' => 'getResources'
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
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['effect'] === null) {
            $invalidProperties[] = "'effect' can't be null";
        }
            if (!preg_match("/(ALLOW|DENY)/", $this->container['effect'])) {
                $invalidProperties[] = "invalid value for 'effect', must be conform to the pattern /(ALLOW|DENY)/.";
            }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
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
    * Gets effect
    *  指定是允许还是拒绝该操作。既有允许（ALLOW）又有拒绝（DENY）的授权语句时，遵循拒绝（DENY）优先的原则。 - ALLOW：允许。 - DENY：拒绝。
    *
    * @return string
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param string $effect 指定是允许还是拒绝该操作。既有允许（ALLOW）又有拒绝（DENY）的授权语句时，遵循拒绝（DENY）优先的原则。 - ALLOW：允许。 - DENY：拒绝。
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets actions
    *  用于指定策略允许或拒绝的操作。格式为：服务名:资源:操作。当前支持的操作类型如下： - iotda:devices:publish：设备使用MQTT协议发布消息。 - iotda:devices:subscribe：设备使用MQTT协议订阅消息。
    *
    * @return string[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[] $actions 用于指定策略允许或拒绝的操作。格式为：服务名:资源:操作。当前支持的操作类型如下： - iotda:devices:publish：设备使用MQTT协议发布消息。 - iotda:devices:subscribe：设备使用MQTT协议订阅消息。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets resources
    *  用于指定允许或拒绝对其执行操作的资源。格式为：资源类型:资源名称。如设备订阅的资源为：topic:/v1/${devices.deviceId}/test/hello。  **取值范围**：资源列表长度最小为1，最大为10，列表中的资源取值范围：仅支持字母，数字，以及/{}$=+#?*:._-组合。
    *
    * @return string[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param string[] $resources 用于指定允许或拒绝对其执行操作的资源。格式为：资源类型:资源名称。如设备订阅的资源为：topic:/v1/${devices.deviceId}/test/hello。  **取值范围**：资源列表长度最小为1，最大为10，列表中的资源取值范围：仅支持字母，数字，以及/{}$=+#?*:._-组合。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

