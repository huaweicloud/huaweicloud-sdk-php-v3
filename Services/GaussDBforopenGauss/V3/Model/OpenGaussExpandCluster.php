<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenGaussExpandCluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenGaussExpandCluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * coordinators  CN横向扩容时必填
    * shard  shard
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'coordinators' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussCoordinators[]',
            'shard' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussShard'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * coordinators  CN横向扩容时必填
    * shard  shard
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'coordinators' => null,
        'shard' => null
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
    * coordinators  CN横向扩容时必填
    * shard  shard
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'coordinators' => 'coordinators',
            'shard' => 'shard'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * coordinators  CN横向扩容时必填
    * shard  shard
    *
    * @var string[]
    */
    protected static $setters = [
            'coordinators' => 'setCoordinators',
            'shard' => 'setShard'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * coordinators  CN横向扩容时必填
    * shard  shard
    *
    * @var string[]
    */
    protected static $getters = [
            'coordinators' => 'getCoordinators',
            'shard' => 'getShard'
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
        $this->container['coordinators'] = isset($data['coordinators']) ? $data['coordinators'] : null;
        $this->container['shard'] = isset($data['shard']) ? $data['shard'] : null;
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
    * Gets coordinators
    *  CN横向扩容时必填
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussCoordinators[]|null
    */
    public function getCoordinators()
    {
        return $this->container['coordinators'];
    }

    /**
    * Sets coordinators
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussCoordinators[]|null $coordinators CN横向扩容时必填
    *
    * @return $this
    */
    public function setCoordinators($coordinators)
    {
        $this->container['coordinators'] = $coordinators;
        return $this;
    }

    /**
    * Gets shard
    *  shard
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussShard|null
    */
    public function getShard()
    {
        return $this->container['shard'];
    }

    /**
    * Sets shard
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussShard|null $shard shard
    *
    * @return $this
    */
    public function setShard($shard)
    {
        $this->container['shard'] = $shard;
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

