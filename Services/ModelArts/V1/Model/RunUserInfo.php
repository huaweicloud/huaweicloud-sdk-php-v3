<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunUserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunUserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  容器启动用户的user id
    * gid  容器启动用户的group id
    * userName  容器启动用户的user name
    * groupName  容器启动用户的group name
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'int',
            'gid' => 'int',
            'userName' => 'string',
            'groupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  容器启动用户的user id
    * gid  容器启动用户的group id
    * userName  容器启动用户的user name
    * groupName  容器启动用户的group name
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => 'int32',
        'gid' => 'int32',
        'userName' => null,
        'groupName' => null
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
    * uid  容器启动用户的user id
    * gid  容器启动用户的group id
    * userName  容器启动用户的user name
    * groupName  容器启动用户的group name
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'gid' => 'gid',
            'userName' => 'user_name',
            'groupName' => 'group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  容器启动用户的user id
    * gid  容器启动用户的group id
    * userName  容器启动用户的user name
    * groupName  容器启动用户的group name
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'gid' => 'setGid',
            'userName' => 'setUserName',
            'groupName' => 'setGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  容器启动用户的user id
    * gid  容器启动用户的group id
    * userName  容器启动用户的user name
    * groupName  容器启动用户的group name
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'gid' => 'getGid',
            'userName' => 'getUserName',
            'groupName' => 'getGroupName'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
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
    * Gets uid
    *  容器启动用户的user id
    *
    * @return int|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param int|null $uid 容器启动用户的user id
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets gid
    *  容器启动用户的group id
    *
    * @return int|null
    */
    public function getGid()
    {
        return $this->container['gid'];
    }

    /**
    * Sets gid
    *
    * @param int|null $gid 容器启动用户的group id
    *
    * @return $this
    */
    public function setGid($gid)
    {
        $this->container['gid'] = $gid;
        return $this;
    }

    /**
    * Gets userName
    *  容器启动用户的user name
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 容器启动用户的user name
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets groupName
    *  容器启动用户的group name
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 容器启动用户的group name
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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

