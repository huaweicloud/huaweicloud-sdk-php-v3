<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobUpdateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobUpdateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * spec  spec
    * endpoints  endpoints
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'spec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobUpdateRequestBodySpec',
            'endpoints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsReq',
            'metadata' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobUpdateRequestBodyMetadata'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * spec  spec
    * endpoints  endpoints
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'spec' => null,
        'endpoints' => null,
        'metadata' => null
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
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * spec  spec
    * endpoints  endpoints
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'spec' => 'spec',
            'endpoints' => 'endpoints',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * spec  spec
    * endpoints  endpoints
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'spec' => 'setSpec',
            'endpoints' => 'setEndpoints',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * spec  spec
    * endpoints  endpoints
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'spec' => 'getSpec',
            'endpoints' => 'getEndpoints',
            'metadata' => 'getMetadata'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
    * Gets description
    *  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets spec
    *  spec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobUpdateRequestBodySpec|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobUpdateRequestBodySpec|null $spec spec
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets endpoints
    *  endpoints
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsReq|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsReq|null $endpoints endpoints
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobUpdateRequestBodyMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobUpdateRequestBodyMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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

