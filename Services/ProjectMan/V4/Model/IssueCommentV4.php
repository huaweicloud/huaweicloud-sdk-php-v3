<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueCommentV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueCommentV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * comment  评论内容
    * id  评论id
    * createdTime  评论时间
    * timestamp  评论时间戳
    * user  user
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'comment' => 'string',
            'id' => 'int',
            'createdTime' => 'string',
            'timestamp' => 'string',
            'user' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CommentUserV4'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * comment  评论内容
    * id  评论id
    * createdTime  评论时间
    * timestamp  评论时间戳
    * user  user
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'comment' => null,
        'id' => 'int32',
        'createdTime' => null,
        'timestamp' => null,
        'user' => null
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
    * comment  评论内容
    * id  评论id
    * createdTime  评论时间
    * timestamp  评论时间戳
    * user  user
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'comment' => 'comment',
            'id' => 'id',
            'createdTime' => 'created_time',
            'timestamp' => 'timestamp',
            'user' => 'user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * comment  评论内容
    * id  评论id
    * createdTime  评论时间
    * timestamp  评论时间戳
    * user  user
    *
    * @var string[]
    */
    protected static $setters = [
            'comment' => 'setComment',
            'id' => 'setId',
            'createdTime' => 'setCreatedTime',
            'timestamp' => 'setTimestamp',
            'user' => 'setUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * comment  评论内容
    * id  评论id
    * createdTime  评论时间
    * timestamp  评论时间戳
    * user  user
    *
    * @var string[]
    */
    protected static $getters = [
            'comment' => 'getComment',
            'id' => 'getId',
            'createdTime' => 'getCreatedTime',
            'timestamp' => 'getTimestamp',
            'user' => 'getUser'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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
    * Gets comment
    *  评论内容
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 评论内容
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets id
    *  评论id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 评论id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createdTime
    *  评论时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 评论时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets timestamp
    *  评论时间戳
    *
    * @return string|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param string|null $timestamp 评论时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CommentUserV4|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CommentUserV4|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
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

