<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportIpBlacklistResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportIpBlacklistResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * body  body
    * contentDisposition  contentDisposition
    * contentType  contentType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'body' => 'string',
            'contentDisposition' => 'string',
            'contentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * body  body
    * contentDisposition  contentDisposition
    * contentType  contentType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'body' => null,
        'contentDisposition' => null,
        'contentType' => null
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
    * body  body
    * contentDisposition  contentDisposition
    * contentType  contentType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'body' => 'body',
            'contentDisposition' => 'Content-Disposition',
            'contentType' => 'Content-Type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * body  body
    * contentDisposition  contentDisposition
    * contentType  contentType
    *
    * @var string[]
    */
    protected static $setters = [
            'body' => 'setBody',
            'contentDisposition' => 'setContentDisposition',
            'contentType' => 'setContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * body  body
    * contentDisposition  contentDisposition
    * contentType  contentType
    *
    * @var string[]
    */
    protected static $getters = [
            'body' => 'getBody',
            'contentDisposition' => 'getContentDisposition',
            'contentType' => 'getContentType'
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['contentDisposition'] = isset($data['contentDisposition']) ? $data['contentDisposition'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
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
    * Gets body
    *  body
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets contentDisposition
    *  contentDisposition
    *
    * @return string|null
    */
    public function getContentDisposition()
    {
        return $this->container['contentDisposition'];
    }

    /**
    * Sets contentDisposition
    *
    * @param string|null $contentDisposition contentDisposition
    *
    * @return $this
    */
    public function setContentDisposition($contentDisposition)
    {
        $this->container['contentDisposition'] = $contentDisposition;
        return $this;
    }

    /**
    * Gets contentType
    *  contentType
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType contentType
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
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

