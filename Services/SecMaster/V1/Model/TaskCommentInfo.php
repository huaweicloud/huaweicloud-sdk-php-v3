<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskCommentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskCommentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 待办评论ID **取值范围**: 不涉及
    * message  **参数解释**: 待办评论信息 **取值范围**: 不涉及
    * userId  **参数解释**: 创建待办评论的用户ID **取值范围**: 不涉及
    * userName  **参数解释**: 创建待办评论的用户名称 **取值范围**: 不涉及
    * time  **参数解释**: 创建待办评论的时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'message' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'time' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 待办评论ID **取值范围**: 不涉及
    * message  **参数解释**: 待办评论信息 **取值范围**: 不涉及
    * userId  **参数解释**: 创建待办评论的用户ID **取值范围**: 不涉及
    * userName  **参数解释**: 创建待办评论的用户名称 **取值范围**: 不涉及
    * time  **参数解释**: 创建待办评论的时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'message' => null,
        'userId' => null,
        'userName' => null,
        'time' => 'int64'
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
    * id  **参数解释**: 待办评论ID **取值范围**: 不涉及
    * message  **参数解释**: 待办评论信息 **取值范围**: 不涉及
    * userId  **参数解释**: 创建待办评论的用户ID **取值范围**: 不涉及
    * userName  **参数解释**: 创建待办评论的用户名称 **取值范围**: 不涉及
    * time  **参数解释**: 创建待办评论的时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'message' => 'message',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 待办评论ID **取值范围**: 不涉及
    * message  **参数解释**: 待办评论信息 **取值范围**: 不涉及
    * userId  **参数解释**: 创建待办评论的用户ID **取值范围**: 不涉及
    * userName  **参数解释**: 创建待办评论的用户名称 **取值范围**: 不涉及
    * time  **参数解释**: 创建待办评论的时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'message' => 'setMessage',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 待办评论ID **取值范围**: 不涉及
    * message  **参数解释**: 待办评论信息 **取值范围**: 不涉及
    * userId  **参数解释**: 创建待办评论的用户ID **取值范围**: 不涉及
    * userName  **参数解释**: 创建待办评论的用户名称 **取值范围**: 不涉及
    * time  **参数解释**: 创建待办评论的时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'message' => 'getMessage',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'time' => 'getTime'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
            if ((mb_strlen($this->container['message']) > 65535)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 256)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 待办评论ID **取值范围**: 不涉及
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
    * @param string|null $id **参数解释**: 待办评论ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**: 待办评论信息 **取值范围**: 不涉及
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message **参数解释**: 待办评论信息 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**: 创建待办评论的用户ID **取值范围**: 不涉及
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
    * @param string|null $userId **参数解释**: 创建待办评论的用户ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 创建待办评论的用户名称 **取值范围**: 不涉及
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
    * @param string|null $userName **参数解释**: 创建待办评论的用户名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**: 创建待办评论的时间 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time **参数解释**: 创建待办评论的时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

