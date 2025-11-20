<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DNInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DNInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dnInstanceId  实例id。
    * adminUser  实例账号。
    * adminPassword  实例密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dnInstanceId' => 'string',
            'adminUser' => 'string',
            'adminPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dnInstanceId  实例id。
    * adminUser  实例账号。
    * adminPassword  实例密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dnInstanceId' => null,
        'adminUser' => null,
        'adminPassword' => null
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
    * dnInstanceId  实例id。
    * adminUser  实例账号。
    * adminPassword  实例密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dnInstanceId' => 'dn_instance_id',
            'adminUser' => 'admin_user',
            'adminPassword' => 'admin_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dnInstanceId  实例id。
    * adminUser  实例账号。
    * adminPassword  实例密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'dnInstanceId' => 'setDnInstanceId',
            'adminUser' => 'setAdminUser',
            'adminPassword' => 'setAdminPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dnInstanceId  实例id。
    * adminUser  实例账号。
    * adminPassword  实例密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'dnInstanceId' => 'getDnInstanceId',
            'adminUser' => 'getAdminUser',
            'adminPassword' => 'getAdminPassword'
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
        $this->container['dnInstanceId'] = isset($data['dnInstanceId']) ? $data['dnInstanceId'] : null;
        $this->container['adminUser'] = isset($data['adminUser']) ? $data['adminUser'] : null;
        $this->container['adminPassword'] = isset($data['adminPassword']) ? $data['adminPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dnInstanceId']) && (mb_strlen($this->container['dnInstanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'dnInstanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['dnInstanceId']) && (mb_strlen($this->container['dnInstanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dnInstanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['adminUser']) && (mb_strlen($this->container['adminUser']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'adminUser', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['adminUser']) && (mb_strlen($this->container['adminUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'adminUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['adminPassword']) && (mb_strlen($this->container['adminPassword']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'adminPassword', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['adminPassword']) && (mb_strlen($this->container['adminPassword']) < 1)) {
                $invalidProperties[] = "invalid value for 'adminPassword', the character length must be bigger than or equal to 1.";
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
    * Gets dnInstanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getDnInstanceId()
    {
        return $this->container['dnInstanceId'];
    }

    /**
    * Sets dnInstanceId
    *
    * @param string|null $dnInstanceId 实例id。
    *
    * @return $this
    */
    public function setDnInstanceId($dnInstanceId)
    {
        $this->container['dnInstanceId'] = $dnInstanceId;
        return $this;
    }

    /**
    * Gets adminUser
    *  实例账号。
    *
    * @return string|null
    */
    public function getAdminUser()
    {
        return $this->container['adminUser'];
    }

    /**
    * Sets adminUser
    *
    * @param string|null $adminUser 实例账号。
    *
    * @return $this
    */
    public function setAdminUser($adminUser)
    {
        $this->container['adminUser'] = $adminUser;
        return $this;
    }

    /**
    * Gets adminPassword
    *  实例密码。
    *
    * @return string|null
    */
    public function getAdminPassword()
    {
        return $this->container['adminPassword'];
    }

    /**
    * Sets adminPassword
    *
    * @param string|null $adminPassword 实例密码。
    *
    * @return $this
    */
    public function setAdminPassword($adminPassword)
    {
        $this->container['adminPassword'] = $adminPassword;
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

