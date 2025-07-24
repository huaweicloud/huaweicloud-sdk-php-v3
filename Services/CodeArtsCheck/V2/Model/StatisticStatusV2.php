<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticStatusV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticStatusV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unresolved  未解决
    * resolved  已解决
    * dismissed  已忽略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unresolved' => 'int',
            'resolved' => 'int',
            'dismissed' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unresolved  未解决
    * resolved  已解决
    * dismissed  已忽略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unresolved' => null,
        'resolved' => null,
        'dismissed' => null
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
    * unresolved  未解决
    * resolved  已解决
    * dismissed  已忽略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unresolved' => 'unresolved',
            'resolved' => 'resolved',
            'dismissed' => 'dismissed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unresolved  未解决
    * resolved  已解决
    * dismissed  已忽略
    *
    * @var string[]
    */
    protected static $setters = [
            'unresolved' => 'setUnresolved',
            'resolved' => 'setResolved',
            'dismissed' => 'setDismissed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unresolved  未解决
    * resolved  已解决
    * dismissed  已忽略
    *
    * @var string[]
    */
    protected static $getters = [
            'unresolved' => 'getUnresolved',
            'resolved' => 'getResolved',
            'dismissed' => 'getDismissed'
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
        $this->container['unresolved'] = isset($data['unresolved']) ? $data['unresolved'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['dismissed'] = isset($data['dismissed']) ? $data['dismissed'] : null;
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
    * Gets unresolved
    *  未解决
    *
    * @return int|null
    */
    public function getUnresolved()
    {
        return $this->container['unresolved'];
    }

    /**
    * Sets unresolved
    *
    * @param int|null $unresolved 未解决
    *
    * @return $this
    */
    public function setUnresolved($unresolved)
    {
        $this->container['unresolved'] = $unresolved;
        return $this;
    }

    /**
    * Gets resolved
    *  已解决
    *
    * @return int|null
    */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
    * Sets resolved
    *
    * @param int|null $resolved 已解决
    *
    * @return $this
    */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;
        return $this;
    }

    /**
    * Gets dismissed
    *  已忽略
    *
    * @return int|null
    */
    public function getDismissed()
    {
        return $this->container['dismissed'];
    }

    /**
    * Sets dismissed
    *
    * @param int|null $dismissed 已忽略
    *
    * @return $this
    */
    public function setDismissed($dismissed)
    {
        $this->container['dismissed'] = $dismissed;
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

