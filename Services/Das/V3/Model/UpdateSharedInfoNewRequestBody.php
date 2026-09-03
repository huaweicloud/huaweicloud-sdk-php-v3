<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSharedInfoNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSharedInfoNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  修改后共享的新用户ID
    * newUserName  修改后共享的新用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'newUserName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  修改后共享的新用户ID
    * newUserName  修改后共享的新用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'newUserName' => null
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
    * userId  修改后共享的新用户ID
    * newUserName  修改后共享的新用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'newUserName' => 'new_user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  修改后共享的新用户ID
    * newUserName  修改后共享的新用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'newUserName' => 'setNewUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  修改后共享的新用户ID
    * newUserName  修改后共享的新用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'newUserName' => 'getNewUserName'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['newUserName'] = isset($data['newUserName']) ? $data['newUserName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['newUserName'] === null) {
            $invalidProperties[] = "'newUserName' can't be null";
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
    * Gets userId
    *  修改后共享的新用户ID
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 修改后共享的新用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets newUserName
    *  修改后共享的新用户名
    *
    * @return string
    */
    public function getNewUserName()
    {
        return $this->container['newUserName'];
    }

    /**
    * Sets newUserName
    *
    * @param string $newUserName 修改后共享的新用户名
    *
    * @return $this
    */
    public function setNewUserName($newUserName)
    {
        $this->container['newUserName'] = $newUserName;
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

