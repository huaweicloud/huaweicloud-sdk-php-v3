<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceUnderNodeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceUnderNodeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rfResourceType  云服务资源,同rms服务的provider
    * type  云服务资源类型,同rms服务的type
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rfResourceType' => 'string',
            'type' => 'string',
            'body' => '\HuaweiCloud\SDK\Aom\V3\Model\PageResourceListParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rfResourceType  云服务资源,同rms服务的provider
    * type  云服务资源类型,同rms服务的type
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rfResourceType' => null,
        'type' => null,
        'body' => null
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
    * rfResourceType  云服务资源,同rms服务的provider
    * type  云服务资源类型,同rms服务的type
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rfResourceType' => 'rf_resource_type',
            'type' => 'type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rfResourceType  云服务资源,同rms服务的provider
    * type  云服务资源类型,同rms服务的type
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'rfResourceType' => 'setRfResourceType',
            'type' => 'setType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rfResourceType  云服务资源,同rms服务的provider
    * type  云服务资源类型,同rms服务的type
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'rfResourceType' => 'getRfResourceType',
            'type' => 'getType',
            'body' => 'getBody'
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
        $this->container['rfResourceType'] = isset($data['rfResourceType']) ? $data['rfResourceType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['rfResourceType'] === null) {
            $invalidProperties[] = "'rfResourceType' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets rfResourceType
    *  云服务资源,同rms服务的provider
    *
    * @return string
    */
    public function getRfResourceType()
    {
        return $this->container['rfResourceType'];
    }

    /**
    * Sets rfResourceType
    *
    * @param string $rfResourceType 云服务资源,同rms服务的provider
    *
    * @return $this
    */
    public function setRfResourceType($rfResourceType)
    {
        $this->container['rfResourceType'] = $rfResourceType;
        return $this;
    }

    /**
    * Gets type
    *  云服务资源类型,同rms服务的type
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 云服务资源类型,同rms服务的type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Aom\V3\Model\PageResourceListParam|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Aom\V3\Model\PageResourceListParam|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

