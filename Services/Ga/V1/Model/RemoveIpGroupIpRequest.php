<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoveIpGroupIpRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoveIpGroupIpRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipGroupId  IP地址组ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipGroupId' => 'string',
            'body' => '\HuaweiCloud\SDK\Ga\V1\Model\RemoveIpGroupIpRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipGroupId  IP地址组ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipGroupId' => null,
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
    * ipGroupId  IP地址组ID。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipGroupId' => 'ip_group_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipGroupId  IP地址组ID。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'ipGroupId' => 'setIpGroupId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipGroupId  IP地址组ID。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'ipGroupId' => 'getIpGroupId',
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
        $this->container['ipGroupId'] = isset($data['ipGroupId']) ? $data['ipGroupId'] : null;
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
        if ($this->container['ipGroupId'] === null) {
            $invalidProperties[] = "'ipGroupId' can't be null";
        }
            if ((mb_strlen($this->container['ipGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ipGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['ipGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['ipGroupId'])) {
                $invalidProperties[] = "invalid value for 'ipGroupId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets ipGroupId
    *  IP地址组ID。
    *
    * @return string
    */
    public function getIpGroupId()
    {
        return $this->container['ipGroupId'];
    }

    /**
    * Sets ipGroupId
    *
    * @param string $ipGroupId IP地址组ID。
    *
    * @return $this
    */
    public function setIpGroupId($ipGroupId)
    {
        $this->container['ipGroupId'] = $ipGroupId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\RemoveIpGroupIpRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\RemoveIpGroupIpRequestBody|null $body body
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

