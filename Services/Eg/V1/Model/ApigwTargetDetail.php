<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigwTargetDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigwTargetDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  目标url
    * invocationHttpParameters  invocationHttpParameters
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'invocationHttpParameters' => '\HuaweiCloud\SDK\Eg\V1\Model\InvocationHttpParameters'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  目标url
    * invocationHttpParameters  invocationHttpParameters
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'invocationHttpParameters' => null
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
    * url  目标url
    * invocationHttpParameters  invocationHttpParameters
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'invocationHttpParameters' => 'invocation_http_parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  目标url
    * invocationHttpParameters  invocationHttpParameters
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'invocationHttpParameters' => 'setInvocationHttpParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  目标url
    * invocationHttpParameters  invocationHttpParameters
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'invocationHttpParameters' => 'getInvocationHttpParameters'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['invocationHttpParameters'] = isset($data['invocationHttpParameters']) ? $data['invocationHttpParameters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
    * Gets url
    *  目标url
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 目标url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets invocationHttpParameters
    *  invocationHttpParameters
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\InvocationHttpParameters|null
    */
    public function getInvocationHttpParameters()
    {
        return $this->container['invocationHttpParameters'];
    }

    /**
    * Sets invocationHttpParameters
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\InvocationHttpParameters|null $invocationHttpParameters invocationHttpParameters
    *
    * @return $this
    */
    public function setInvocationHttpParameters($invocationHttpParameters)
    {
        $this->container['invocationHttpParameters'] = $invocationHttpParameters;
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

