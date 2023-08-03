<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VirtualSpace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VirtualSpace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  virtualSpace的名称，当前仅支持三种类型：kubernetes、runtime、user。 - kubernetes：k8s空间配置，需配置lvmConfig； - runtime：运行时空间配置，需配置runtimeConfig； - user：用户空间配置，需配置lvmConfig
    * size  virtualSpace的大小，仅支持整数百分比。例如：90%。 >一个group中所有virtualSpace的百分比之和不得超过100%
    * lvmConfig  lvmConfig
    * runtimeConfig  runtimeConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'size' => 'string',
            'lvmConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\LVMConfig',
            'runtimeConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\RuntimeConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  virtualSpace的名称，当前仅支持三种类型：kubernetes、runtime、user。 - kubernetes：k8s空间配置，需配置lvmConfig； - runtime：运行时空间配置，需配置runtimeConfig； - user：用户空间配置，需配置lvmConfig
    * size  virtualSpace的大小，仅支持整数百分比。例如：90%。 >一个group中所有virtualSpace的百分比之和不得超过100%
    * lvmConfig  lvmConfig
    * runtimeConfig  runtimeConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'size' => null,
        'lvmConfig' => null,
        'runtimeConfig' => null
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
    * name  virtualSpace的名称，当前仅支持三种类型：kubernetes、runtime、user。 - kubernetes：k8s空间配置，需配置lvmConfig； - runtime：运行时空间配置，需配置runtimeConfig； - user：用户空间配置，需配置lvmConfig
    * size  virtualSpace的大小，仅支持整数百分比。例如：90%。 >一个group中所有virtualSpace的百分比之和不得超过100%
    * lvmConfig  lvmConfig
    * runtimeConfig  runtimeConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'size' => 'size',
            'lvmConfig' => 'lvmConfig',
            'runtimeConfig' => 'runtimeConfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  virtualSpace的名称，当前仅支持三种类型：kubernetes、runtime、user。 - kubernetes：k8s空间配置，需配置lvmConfig； - runtime：运行时空间配置，需配置runtimeConfig； - user：用户空间配置，需配置lvmConfig
    * size  virtualSpace的大小，仅支持整数百分比。例如：90%。 >一个group中所有virtualSpace的百分比之和不得超过100%
    * lvmConfig  lvmConfig
    * runtimeConfig  runtimeConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'size' => 'setSize',
            'lvmConfig' => 'setLvmConfig',
            'runtimeConfig' => 'setRuntimeConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  virtualSpace的名称，当前仅支持三种类型：kubernetes、runtime、user。 - kubernetes：k8s空间配置，需配置lvmConfig； - runtime：运行时空间配置，需配置runtimeConfig； - user：用户空间配置，需配置lvmConfig
    * size  virtualSpace的大小，仅支持整数百分比。例如：90%。 >一个group中所有virtualSpace的百分比之和不得超过100%
    * lvmConfig  lvmConfig
    * runtimeConfig  runtimeConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'size' => 'getSize',
            'lvmConfig' => 'getLvmConfig',
            'runtimeConfig' => 'getRuntimeConfig'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['lvmConfig'] = isset($data['lvmConfig']) ? $data['lvmConfig'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
    * Gets name
    *  virtualSpace的名称，当前仅支持三种类型：kubernetes、runtime、user。 - kubernetes：k8s空间配置，需配置lvmConfig； - runtime：运行时空间配置，需配置runtimeConfig； - user：用户空间配置，需配置lvmConfig
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name virtualSpace的名称，当前仅支持三种类型：kubernetes、runtime、user。 - kubernetes：k8s空间配置，需配置lvmConfig； - runtime：运行时空间配置，需配置runtimeConfig； - user：用户空间配置，需配置lvmConfig
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  virtualSpace的大小，仅支持整数百分比。例如：90%。 >一个group中所有virtualSpace的百分比之和不得超过100%
    *
    * @return string
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string $size virtualSpace的大小，仅支持整数百分比。例如：90%。 >一个group中所有virtualSpace的百分比之和不得超过100%
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets lvmConfig
    *  lvmConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\LVMConfig|null
    */
    public function getLvmConfig()
    {
        return $this->container['lvmConfig'];
    }

    /**
    * Sets lvmConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\LVMConfig|null $lvmConfig lvmConfig
    *
    * @return $this
    */
    public function setLvmConfig($lvmConfig)
    {
        $this->container['lvmConfig'] = $lvmConfig;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  runtimeConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\RuntimeConfig|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\RuntimeConfig|null $runtimeConfig runtimeConfig
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
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

