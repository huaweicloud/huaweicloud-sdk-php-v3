<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomMetrics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exec  exec
    * httpGet  httpGet
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Exec',
            'httpGet' => '\HuaweiCloud\SDK\ModelArts\V1\Model\HttpGet'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exec  exec
    * httpGet  httpGet
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exec' => null,
        'httpGet' => null
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
    * exec  exec
    * httpGet  httpGet
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exec' => 'exec',
            'httpGet' => 'http_get'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exec  exec
    * httpGet  httpGet
    *
    * @var string[]
    */
    protected static $setters = [
            'exec' => 'setExec',
            'httpGet' => 'setHttpGet'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exec  exec
    * httpGet  httpGet
    *
    * @var string[]
    */
    protected static $getters = [
            'exec' => 'getExec',
            'httpGet' => 'getHttpGet'
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
        $this->container['exec'] = isset($data['exec']) ? $data['exec'] : null;
        $this->container['httpGet'] = isset($data['httpGet']) ? $data['httpGet'] : null;
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
    * Gets exec
    *  exec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Exec|null
    */
    public function getExec()
    {
        return $this->container['exec'];
    }

    /**
    * Sets exec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Exec|null $exec exec
    *
    * @return $this
    */
    public function setExec($exec)
    {
        $this->container['exec'] = $exec;
        return $this;
    }

    /**
    * Gets httpGet
    *  httpGet
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\HttpGet|null
    */
    public function getHttpGet()
    {
        return $this->container['httpGet'];
    }

    /**
    * Sets httpGet
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\HttpGet|null $httpGet httpGet
    *
    * @return $this
    */
    public function setHttpGet($httpGet)
    {
        $this->container['httpGet'] = $httpGet;
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

