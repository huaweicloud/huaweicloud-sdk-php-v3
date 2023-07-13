<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PageLink';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * href  相应资源的链接。
    * rel  对应快捷链接。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'href' => 'string',
            'rel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * href  相应资源的链接。
    * rel  对应快捷链接。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'href' => null,
        'rel' => null
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
    * href  相应资源的链接。
    * rel  对应快捷链接。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'href' => 'href',
            'rel' => 'rel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * href  相应资源的链接。
    * rel  对应快捷链接。
    *
    * @var string[]
    */
    protected static $setters = [
            'href' => 'setHref',
            'rel' => 'setRel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * href  相应资源的链接。
    * rel  对应快捷链接。
    *
    * @var string[]
    */
    protected static $getters = [
            'href' => 'getHref',
            'rel' => 'getRel'
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
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['rel'] = isset($data['rel']) ? $data['rel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['href'] === null) {
            $invalidProperties[] = "'href' can't be null";
        }
        if ($this->container['rel'] === null) {
            $invalidProperties[] = "'rel' can't be null";
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
    * Gets href
    *  相应资源的链接。
    *
    * @return string
    */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
    * Sets href
    *
    * @param string $href 相应资源的链接。
    *
    * @return $this
    */
    public function setHref($href)
    {
        $this->container['href'] = $href;
        return $this;
    }

    /**
    * Gets rel
    *  对应快捷链接。
    *
    * @return string
    */
    public function getRel()
    {
        return $this->container['rel'];
    }

    /**
    * Sets rel
    *
    * @param string $rel 对应快捷链接。
    *
    * @return $this
    */
    public function setRel($rel)
    {
        $this->container['rel'] = $rel;
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

