<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommentUserV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommentUserV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userNumId  发表评论用户id
    * userName  发表评论用户名称
    * nickName  发表评论用户昵称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userNumId' => 'int',
            'userName' => 'string',
            'nickName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userNumId  发表评论用户id
    * userName  发表评论用户名称
    * nickName  发表评论用户昵称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userNumId' => 'int32',
        'userName' => null,
        'nickName' => null
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
    * userNumId  发表评论用户id
    * userName  发表评论用户名称
    * nickName  发表评论用户昵称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userNumId' => 'user_num_id',
            'userName' => 'user_name',
            'nickName' => 'nick_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userNumId  发表评论用户id
    * userName  发表评论用户名称
    * nickName  发表评论用户昵称
    *
    * @var string[]
    */
    protected static $setters = [
            'userNumId' => 'setUserNumId',
            'userName' => 'setUserName',
            'nickName' => 'setNickName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userNumId  发表评论用户id
    * userName  发表评论用户名称
    * nickName  发表评论用户昵称
    *
    * @var string[]
    */
    protected static $getters = [
            'userNumId' => 'getUserNumId',
            'userName' => 'getUserName',
            'nickName' => 'getNickName'
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
        $this->container['userNumId'] = isset($data['userNumId']) ? $data['userNumId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
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
    * Gets userNumId
    *  发表评论用户id
    *
    * @return int|null
    */
    public function getUserNumId()
    {
        return $this->container['userNumId'];
    }

    /**
    * Sets userNumId
    *
    * @param int|null $userNumId 发表评论用户id
    *
    * @return $this
    */
    public function setUserNumId($userNumId)
    {
        $this->container['userNumId'] = $userNumId;
        return $this;
    }

    /**
    * Gets userName
    *  发表评论用户名称
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
    * @param string|null $userName 发表评论用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets nickName
    *  发表评论用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 发表评论用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
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

