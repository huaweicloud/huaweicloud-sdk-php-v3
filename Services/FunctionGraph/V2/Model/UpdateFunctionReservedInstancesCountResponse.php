<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFunctionReservedInstancesCountResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFunctionReservedInstancesCountResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'idleMode' => 'bool',
            'tacticsConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\TacticsConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'idleMode' => null,
        'tacticsConfig' => null
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
    * count  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'idleMode' => 'idle_mode',
            'tacticsConfig' => 'tactics_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'idleMode' => 'setIdleMode',
            'tacticsConfig' => 'setTacticsConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'idleMode' => 'getIdleMode',
            'tacticsConfig' => 'getTacticsConfig'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['idleMode'] = isset($data['idleMode']) ? $data['idleMode'] : null;
        $this->container['tacticsConfig'] = isset($data['tacticsConfig']) ? $data['tacticsConfig'] : null;
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
    * Gets count
    *  预留实例个数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 预留实例个数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets idleMode
    *  是否开启闲置模式配置
    *
    * @return bool|null
    */
    public function getIdleMode()
    {
        return $this->container['idleMode'];
    }

    /**
    * Sets idleMode
    *
    * @param bool|null $idleMode 是否开启闲置模式配置
    *
    * @return $this
    */
    public function setIdleMode($idleMode)
    {
        $this->container['idleMode'] = $idleMode;
        return $this;
    }

    /**
    * Gets tacticsConfig
    *  tacticsConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\TacticsConfig|null
    */
    public function getTacticsConfig()
    {
        return $this->container['tacticsConfig'];
    }

    /**
    * Sets tacticsConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\TacticsConfig|null $tacticsConfig tacticsConfig
    *
    * @return $this
    */
    public function setTacticsConfig($tacticsConfig)
    {
        $this->container['tacticsConfig'] = $tacticsConfig;
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

