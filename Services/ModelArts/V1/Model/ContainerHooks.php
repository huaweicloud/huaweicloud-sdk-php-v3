<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerHooks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerHooks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * postStart  postStart
    * preStart  preStart
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'postStart' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Config',
            'preStart' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Config'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * postStart  postStart
    * preStart  preStart
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'postStart' => null,
        'preStart' => null
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
    * postStart  postStart
    * preStart  preStart
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'postStart' => 'post_start',
            'preStart' => 'pre_start'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * postStart  postStart
    * preStart  preStart
    *
    * @var string[]
    */
    protected static $setters = [
            'postStart' => 'setPostStart',
            'preStart' => 'setPreStart'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * postStart  postStart
    * preStart  preStart
    *
    * @var string[]
    */
    protected static $getters = [
            'postStart' => 'getPostStart',
            'preStart' => 'getPreStart'
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
        $this->container['postStart'] = isset($data['postStart']) ? $data['postStart'] : null;
        $this->container['preStart'] = isset($data['preStart']) ? $data['preStart'] : null;
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
    * Gets postStart
    *  postStart
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Config|null
    */
    public function getPostStart()
    {
        return $this->container['postStart'];
    }

    /**
    * Sets postStart
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Config|null $postStart postStart
    *
    * @return $this
    */
    public function setPostStart($postStart)
    {
        $this->container['postStart'] = $postStart;
        return $this;
    }

    /**
    * Gets preStart
    *  preStart
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Config|null
    */
    public function getPreStart()
    {
        return $this->container['preStart'];
    }

    /**
    * Sets preStart
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Config|null $preStart preStart
    *
    * @return $this
    */
    public function setPreStart($preStart)
    {
        $this->container['preStart'] = $preStart;
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

