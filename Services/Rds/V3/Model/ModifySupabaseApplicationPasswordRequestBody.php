<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifySupabaseApplicationPasswordRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifySupabaseApplicationPasswordRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationPassword  Supabase应用登录密码。
    * instancePassword  纳管实例数据库密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationPassword' => 'string',
            'instancePassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationPassword  Supabase应用登录密码。
    * instancePassword  纳管实例数据库密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationPassword' => null,
        'instancePassword' => null
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
    * applicationPassword  Supabase应用登录密码。
    * instancePassword  纳管实例数据库密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationPassword' => 'application_password',
            'instancePassword' => 'instance_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationPassword  Supabase应用登录密码。
    * instancePassword  纳管实例数据库密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationPassword' => 'setApplicationPassword',
            'instancePassword' => 'setInstancePassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationPassword  Supabase应用登录密码。
    * instancePassword  纳管实例数据库密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationPassword' => 'getApplicationPassword',
            'instancePassword' => 'getInstancePassword'
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
        $this->container['applicationPassword'] = isset($data['applicationPassword']) ? $data['applicationPassword'] : null;
        $this->container['instancePassword'] = isset($data['instancePassword']) ? $data['instancePassword'] : null;
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
    * Gets applicationPassword
    *  Supabase应用登录密码。
    *
    * @return string|null
    */
    public function getApplicationPassword()
    {
        return $this->container['applicationPassword'];
    }

    /**
    * Sets applicationPassword
    *
    * @param string|null $applicationPassword Supabase应用登录密码。
    *
    * @return $this
    */
    public function setApplicationPassword($applicationPassword)
    {
        $this->container['applicationPassword'] = $applicationPassword;
        return $this;
    }

    /**
    * Gets instancePassword
    *  纳管实例数据库密码。
    *
    * @return string|null
    */
    public function getInstancePassword()
    {
        return $this->container['instancePassword'];
    }

    /**
    * Sets instancePassword
    *
    * @param string|null $instancePassword 纳管实例数据库密码。
    *
    * @return $this
    */
    public function setInstancePassword($instancePassword)
    {
        $this->container['instancePassword'] = $instancePassword;
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

