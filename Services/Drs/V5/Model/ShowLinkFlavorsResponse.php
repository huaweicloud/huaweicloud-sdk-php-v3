<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLinkFlavorsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLinkFlavorsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vmFlavor  vmFlavor
    * volumeFlavor  volumeFlavor
    * flowFlavor  flowFlavor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vmFlavor' => '\HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo',
            'volumeFlavor' => '\HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo',
            'flowFlavor' => '\HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vmFlavor  vmFlavor
    * volumeFlavor  volumeFlavor
    * flowFlavor  flowFlavor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vmFlavor' => null,
        'volumeFlavor' => null,
        'flowFlavor' => null
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
    * vmFlavor  vmFlavor
    * volumeFlavor  volumeFlavor
    * flowFlavor  flowFlavor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vmFlavor' => 'vm_flavor',
            'volumeFlavor' => 'volume_flavor',
            'flowFlavor' => 'flow_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vmFlavor  vmFlavor
    * volumeFlavor  volumeFlavor
    * flowFlavor  flowFlavor
    *
    * @var string[]
    */
    protected static $setters = [
            'vmFlavor' => 'setVmFlavor',
            'volumeFlavor' => 'setVolumeFlavor',
            'flowFlavor' => 'setFlowFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vmFlavor  vmFlavor
    * volumeFlavor  volumeFlavor
    * flowFlavor  flowFlavor
    *
    * @var string[]
    */
    protected static $getters = [
            'vmFlavor' => 'getVmFlavor',
            'volumeFlavor' => 'getVolumeFlavor',
            'flowFlavor' => 'getFlowFlavor'
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
        $this->container['vmFlavor'] = isset($data['vmFlavor']) ? $data['vmFlavor'] : null;
        $this->container['volumeFlavor'] = isset($data['volumeFlavor']) ? $data['volumeFlavor'] : null;
        $this->container['flowFlavor'] = isset($data['flowFlavor']) ? $data['flowFlavor'] : null;
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
    * Gets vmFlavor
    *  vmFlavor
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo|null
    */
    public function getVmFlavor()
    {
        return $this->container['vmFlavor'];
    }

    /**
    * Sets vmFlavor
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo|null $vmFlavor vmFlavor
    *
    * @return $this
    */
    public function setVmFlavor($vmFlavor)
    {
        $this->container['vmFlavor'] = $vmFlavor;
        return $this;
    }

    /**
    * Gets volumeFlavor
    *  volumeFlavor
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo|null
    */
    public function getVolumeFlavor()
    {
        return $this->container['volumeFlavor'];
    }

    /**
    * Sets volumeFlavor
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo|null $volumeFlavor volumeFlavor
    *
    * @return $this
    */
    public function setVolumeFlavor($volumeFlavor)
    {
        $this->container['volumeFlavor'] = $volumeFlavor;
        return $this;
    }

    /**
    * Gets flowFlavor
    *  flowFlavor
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo|null
    */
    public function getFlowFlavor()
    {
        return $this->container['flowFlavor'];
    }

    /**
    * Sets flowFlavor
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\FlavorInfo|null $flowFlavor flowFlavor
    *
    * @return $this
    */
    public function setFlowFlavor($flowFlavor)
    {
        $this->container['flowFlavor'] = $flowFlavor;
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

