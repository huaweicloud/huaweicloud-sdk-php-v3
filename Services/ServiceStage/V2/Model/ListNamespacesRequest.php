<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNamespacesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNamespacesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xRepoAuth  授权名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xRepoAuth' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xRepoAuth  授权名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xRepoAuth' => null
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
    * xRepoAuth  授权名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xRepoAuth' => 'X-Repo-Auth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xRepoAuth  授权名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'xRepoAuth' => 'setXRepoAuth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xRepoAuth  授权名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'xRepoAuth' => 'getXRepoAuth'
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
        $this->container['xRepoAuth'] = isset($data['xRepoAuth']) ? $data['xRepoAuth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xRepoAuth'] === null) {
            $invalidProperties[] = "'xRepoAuth' can't be null";
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
    * Gets xRepoAuth
    *  授权名称。
    *
    * @return string
    */
    public function getXRepoAuth()
    {
        return $this->container['xRepoAuth'];
    }

    /**
    * Sets xRepoAuth
    *
    * @param string $xRepoAuth 授权名称。
    *
    * @return $this
    */
    public function setXRepoAuth($xRepoAuth)
    {
        $this->container['xRepoAuth'] = $xRepoAuth;
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

