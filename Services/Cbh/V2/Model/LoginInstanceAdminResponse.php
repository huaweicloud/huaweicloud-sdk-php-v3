<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoginInstanceAdminResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoginInstanceAdminResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminUrl  云堡垒机登录admin链接。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminUrl  云堡垒机登录admin链接。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminUrl' => null
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
    * adminUrl  云堡垒机登录admin链接。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminUrl' => 'admin_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminUrl  云堡垒机登录admin链接。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminUrl' => 'setAdminUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminUrl  云堡垒机登录admin链接。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminUrl' => 'getAdminUrl'
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
        $this->container['adminUrl'] = isset($data['adminUrl']) ? $data['adminUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['adminUrl']) && (mb_strlen($this->container['adminUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'adminUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['adminUrl']) && (mb_strlen($this->container['adminUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'adminUrl', the character length must be bigger than or equal to 0.";
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
    * Gets adminUrl
    *  云堡垒机登录admin链接。
    *
    * @return string|null
    */
    public function getAdminUrl()
    {
        return $this->container['adminUrl'];
    }

    /**
    * Sets adminUrl
    *
    * @param string|null $adminUrl 云堡垒机登录admin链接。
    *
    * @return $this
    */
    public function setAdminUrl($adminUrl)
    {
        $this->container['adminUrl'] = $adminUrl;
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

