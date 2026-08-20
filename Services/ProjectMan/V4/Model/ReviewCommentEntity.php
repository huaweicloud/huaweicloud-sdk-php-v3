<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewCommentEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewCommentEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  评审意见对象ID。
    * userId  评审用户ID。
    * otherUserId  其他用户Id（转他人）。
    * result  评审结果。
    * comment  评审意见。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'userId' => 'string',
            'otherUserId' => 'string',
            'result' => 'string',
            'comment' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  评审意见对象ID。
    * userId  评审用户ID。
    * otherUserId  其他用户Id（转他人）。
    * result  评审结果。
    * comment  评审意见。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userId' => null,
        'otherUserId' => null,
        'result' => null,
        'comment' => null
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
    * id  评审意见对象ID。
    * userId  评审用户ID。
    * otherUserId  其他用户Id（转他人）。
    * result  评审结果。
    * comment  评审意见。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'otherUserId' => 'other_user_id',
            'result' => 'result',
            'comment' => 'comment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  评审意见对象ID。
    * userId  评审用户ID。
    * otherUserId  其他用户Id（转他人）。
    * result  评审结果。
    * comment  评审意见。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'otherUserId' => 'setOtherUserId',
            'result' => 'setResult',
            'comment' => 'setComment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  评审意见对象ID。
    * userId  评审用户ID。
    * otherUserId  其他用户Id（转他人）。
    * result  评审结果。
    * comment  评审意见。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'otherUserId' => 'getOtherUserId',
            'result' => 'getResult',
            'comment' => 'getComment'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['otherUserId'] = isset($data['otherUserId']) ? $data['otherUserId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['otherUserId']) && (mb_strlen($this->container['otherUserId']) > 32)) {
                $invalidProperties[] = "invalid value for 'otherUserId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['otherUserId']) && (mb_strlen($this->container['otherUserId']) < 0)) {
                $invalidProperties[] = "invalid value for 'otherUserId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) > 256)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) < 0)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 256)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 0)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  评审意见对象ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 评审意见对象ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  评审用户ID。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 评审用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets otherUserId
    *  其他用户Id（转他人）。
    *
    * @return string|null
    */
    public function getOtherUserId()
    {
        return $this->container['otherUserId'];
    }

    /**
    * Sets otherUserId
    *
    * @param string|null $otherUserId 其他用户Id（转他人）。
    *
    * @return $this
    */
    public function setOtherUserId($otherUserId)
    {
        $this->container['otherUserId'] = $otherUserId;
        return $this;
    }

    /**
    * Gets result
    *  评审结果。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 评审结果。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets comment
    *  评审意见。
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
    * @param string|null $comment 评审意见。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
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

