<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentContainerParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentContainerParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  容器名称
    * size  size
    * env  应用环境变量。
    * storage  storage
    * lifecycle  lifecycle
    * probes  probes
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'size' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentContainerSize',
            'env' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationEnvParam[]',
            'storage' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentStorage[]',
            'lifecycle' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationLifecycle',
            'probes' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationProbes'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  容器名称
    * size  size
    * env  应用环境变量。
    * storage  storage
    * lifecycle  lifecycle
    * probes  probes
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'size' => null,
        'env' => null,
        'storage' => null,
        'lifecycle' => null,
        'probes' => null
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
    * name  容器名称
    * size  size
    * env  应用环境变量。
    * storage  storage
    * lifecycle  lifecycle
    * probes  probes
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'size' => 'size',
            'env' => 'env',
            'storage' => 'storage',
            'lifecycle' => 'lifecycle',
            'probes' => 'probes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  容器名称
    * size  size
    * env  应用环境变量。
    * storage  storage
    * lifecycle  lifecycle
    * probes  probes
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'size' => 'setSize',
            'env' => 'setEnv',
            'storage' => 'setStorage',
            'lifecycle' => 'setLifecycle',
            'probes' => 'setProbes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  容器名称
    * size  size
    * env  应用环境变量。
    * storage  storage
    * lifecycle  lifecycle
    * probes  probes
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'size' => 'getSize',
            'env' => 'getEnv',
            'storage' => 'getStorage',
            'lifecycle' => 'getLifecycle',
            'probes' => 'getProbes'
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
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['lifecycle'] = isset($data['lifecycle']) ? $data['lifecycle'] : null;
        $this->container['probes'] = isset($data['probes']) ? $data['probes'] : null;
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
    * Gets name
    *  容器名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 容器名称
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
    *  size
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentContainerSize|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentContainerSize|null $size size
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets env
    *  应用环境变量。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationEnvParam[]|null
    */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
    * Sets env
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationEnvParam[]|null $env 应用环境变量。
    *
    * @return $this
    */
    public function setEnv($env)
    {
        $this->container['env'] = $env;
        return $this;
    }

    /**
    * Gets storage
    *  storage
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentStorage[]|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentStorage[]|null $storage storage
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets lifecycle
    *  lifecycle
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationLifecycle|null
    */
    public function getLifecycle()
    {
        return $this->container['lifecycle'];
    }

    /**
    * Sets lifecycle
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationLifecycle|null $lifecycle lifecycle
    *
    * @return $this
    */
    public function setLifecycle($lifecycle)
    {
        $this->container['lifecycle'] = $lifecycle;
        return $this;
    }

    /**
    * Gets probes
    *  probes
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationProbes|null
    */
    public function getProbes()
    {
        return $this->container['probes'];
    }

    /**
    * Sets probes
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ConfigurationProbes|null $probes probes
    *
    * @return $this
    */
    public function setProbes($probes)
    {
        $this->container['probes'] = $probes;
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

