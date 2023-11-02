<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoScalingSwitchStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoScalingSwitchStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingSwitch  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * flavorSwitch  扩缩规格开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * readOnlySwitch  增删只读节点开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingSwitch' => 'string',
            'flavorSwitch' => 'string',
            'readOnlySwitch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingSwitch  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * flavorSwitch  扩缩规格开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * readOnlySwitch  增删只读节点开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingSwitch' => null,
        'flavorSwitch' => null,
        'readOnlySwitch' => null
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
    * scalingSwitch  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * flavorSwitch  扩缩规格开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * readOnlySwitch  增删只读节点开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingSwitch' => 'scaling_switch',
            'flavorSwitch' => 'flavor_switch',
            'readOnlySwitch' => 'read_only_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingSwitch  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * flavorSwitch  扩缩规格开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * readOnlySwitch  增删只读节点开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingSwitch' => 'setScalingSwitch',
            'flavorSwitch' => 'setFlavorSwitch',
            'readOnlySwitch' => 'setReadOnlySwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingSwitch  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * flavorSwitch  扩缩规格开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * readOnlySwitch  增删只读节点开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingSwitch' => 'getScalingSwitch',
            'flavorSwitch' => 'getFlavorSwitch',
            'readOnlySwitch' => 'getReadOnlySwitch'
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
        $this->container['scalingSwitch'] = isset($data['scalingSwitch']) ? $data['scalingSwitch'] : null;
        $this->container['flavorSwitch'] = isset($data['flavorSwitch']) ? $data['flavorSwitch'] : null;
        $this->container['readOnlySwitch'] = isset($data['readOnlySwitch']) ? $data['readOnlySwitch'] : null;
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
    * Gets scalingSwitch
    *  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getScalingSwitch()
    {
        return $this->container['scalingSwitch'];
    }

    /**
    * Sets scalingSwitch
    *
    * @param string|null $scalingSwitch 自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setScalingSwitch($scalingSwitch)
    {
        $this->container['scalingSwitch'] = $scalingSwitch;
        return $this;
    }

    /**
    * Gets flavorSwitch
    *  扩缩规格开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getFlavorSwitch()
    {
        return $this->container['flavorSwitch'];
    }

    /**
    * Sets flavorSwitch
    *
    * @param string|null $flavorSwitch 扩缩规格开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setFlavorSwitch($flavorSwitch)
    {
        $this->container['flavorSwitch'] = $flavorSwitch;
        return $this;
    }

    /**
    * Gets readOnlySwitch
    *  增删只读节点开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getReadOnlySwitch()
    {
        return $this->container['readOnlySwitch'];
    }

    /**
    * Sets readOnlySwitch
    *
    * @param string|null $readOnlySwitch 增删只读节点开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setReadOnlySwitch($readOnlySwitch)
    {
        $this->container['readOnlySwitch'] = $readOnlySwitch;
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

