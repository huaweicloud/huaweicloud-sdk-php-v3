<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchResizeServersOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchResizeServersOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  flavor
    * servers  servers
    * cpuOptions  cpuOptions
    * mode  mode
    * promotion  promotion
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'servers' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerId[]',
            'cpuOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\CpuOptions',
            'mode' => 'string',
            'promotion' => '\HuaweiCloud\SDK\Ecs\V2\Model\Promotion'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  flavor
    * servers  servers
    * cpuOptions  cpuOptions
    * mode  mode
    * promotion  promotion
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'servers' => null,
        'cpuOptions' => null,
        'mode' => null,
        'promotion' => null
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
    * flavorRef  flavor
    * servers  servers
    * cpuOptions  cpuOptions
    * mode  mode
    * promotion  promotion
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavorRef',
            'servers' => 'servers',
            'cpuOptions' => 'cpu_options',
            'mode' => 'mode',
            'promotion' => 'promotion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  flavor
    * servers  servers
    * cpuOptions  cpuOptions
    * mode  mode
    * promotion  promotion
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'servers' => 'setServers',
            'cpuOptions' => 'setCpuOptions',
            'mode' => 'setMode',
            'promotion' => 'setPromotion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  flavor
    * servers  servers
    * cpuOptions  cpuOptions
    * mode  mode
    * promotion  promotion
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'servers' => 'getServers',
            'cpuOptions' => 'getCpuOptions',
            'mode' => 'getMode',
            'promotion' => 'getPromotion'
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['cpuOptions'] = isset($data['cpuOptions']) ? $data['cpuOptions'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['promotion'] = isset($data['promotion']) ? $data['promotion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['servers'] === null) {
            $invalidProperties[] = "'servers' can't be null";
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
    * Gets flavorRef
    *  flavor
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef flavor
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets servers
    *  servers
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerId[]
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerId[] $servers servers
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
        return $this;
    }

    /**
    * Gets cpuOptions
    *  cpuOptions
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\CpuOptions|null
    */
    public function getCpuOptions()
    {
        return $this->container['cpuOptions'];
    }

    /**
    * Sets cpuOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\CpuOptions|null $cpuOptions cpuOptions
    *
    * @return $this
    */
    public function setCpuOptions($cpuOptions)
    {
        $this->container['cpuOptions'] = $cpuOptions;
        return $this;
    }

    /**
    * Gets mode
    *  mode
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode mode
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets promotion
    *  promotion
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\Promotion|null
    */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
    * Sets promotion
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\Promotion|null $promotion promotion
    *
    * @return $this
    */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;
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

