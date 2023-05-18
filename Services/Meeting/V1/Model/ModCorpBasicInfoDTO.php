<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModCorpBasicInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModCorpBasicInfoDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  企业所在地，最大长度为255个字符。
    * autoUserCreate  企业自动开户开关。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => 'string',
            'autoUserCreate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  企业所在地，最大长度为255个字符。
    * autoUserCreate  企业自动开户开关。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'autoUserCreate' => null
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
    * address  企业所在地，最大长度为255个字符。
    * autoUserCreate  企业自动开户开关。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'autoUserCreate' => 'autoUserCreate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  企业所在地，最大长度为255个字符。
    * autoUserCreate  企业自动开户开关。
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'autoUserCreate' => 'setAutoUserCreate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  企业所在地，最大长度为255个字符。
    * autoUserCreate  企业自动开户开关。
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'autoUserCreate' => 'getAutoUserCreate'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['autoUserCreate'] = isset($data['autoUserCreate']) ? $data['autoUserCreate'] : null;
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
    * Gets address
    *  企业所在地，最大长度为255个字符。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 企业所在地，最大长度为255个字符。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets autoUserCreate
    *  企业自动开户开关。
    *
    * @return bool|null
    */
    public function getAutoUserCreate()
    {
        return $this->container['autoUserCreate'];
    }

    /**
    * Sets autoUserCreate
    *
    * @param bool|null $autoUserCreate 企业自动开户开关。
    *
    * @return $this
    */
    public function setAutoUserCreate($autoUserCreate)
    {
        $this->container['autoUserCreate'] = $autoUserCreate;
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

