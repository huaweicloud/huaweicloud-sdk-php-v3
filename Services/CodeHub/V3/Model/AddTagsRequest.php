<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagName  标签名称
    * ref  分支名称
    * message  备注
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagName' => 'string',
            'ref' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagName  标签名称
    * ref  分支名称
    * message  备注
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagName' => null,
        'ref' => null,
        'message' => null
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
    * tagName  标签名称
    * ref  分支名称
    * message  备注
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagName' => 'tag_name',
            'ref' => 'ref',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagName  标签名称
    * ref  分支名称
    * message  备注
    *
    * @var string[]
    */
    protected static $setters = [
            'tagName' => 'setTagName',
            'ref' => 'setRef',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagName  标签名称
    * ref  分支名称
    * message  备注
    *
    * @var string[]
    */
    protected static $getters = [
            'tagName' => 'getTagName',
            'ref' => 'getRef',
            'message' => 'getMessage'
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
        $this->container['tagName'] = isset($data['tagName']) ? $data['tagName'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tagName'] === null) {
            $invalidProperties[] = "'tagName' can't be null";
        }
        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
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
    * Gets tagName
    *  标签名称
    *
    * @return string
    */
    public function getTagName()
    {
        return $this->container['tagName'];
    }

    /**
    * Sets tagName
    *
    * @param string $tagName 标签名称
    *
    * @return $this
    */
    public function setTagName($tagName)
    {
        $this->container['tagName'] = $tagName;
        return $this;
    }

    /**
    * Gets ref
    *  分支名称
    *
    * @return string
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string $ref 分支名称
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets message
    *  备注
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 备注
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

