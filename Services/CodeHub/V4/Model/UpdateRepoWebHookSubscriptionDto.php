<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRepoWebHookSubscriptionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRepoWebHookSubscriptionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  **参数解释：** webhook的url (需要base64编码)。
    * token  **参数解释：** 密钥。
    * mentionUsers  **参数解释：** userid列表，提醒群中的指定成员（@某个成员），最长1000，每个最长100，“;”分隔符。
    * mentionPhone  **参数解释：** 手机号列表(需要base64编码)，提醒手机号对应的群成员（@某个成员），最长1000，每个最长30，“;”分隔符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'token' => 'string',
            'mentionUsers' => 'string',
            'mentionPhone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  **参数解释：** webhook的url (需要base64编码)。
    * token  **参数解释：** 密钥。
    * mentionUsers  **参数解释：** userid列表，提醒群中的指定成员（@某个成员），最长1000，每个最长100，“;”分隔符。
    * mentionPhone  **参数解释：** 手机号列表(需要base64编码)，提醒手机号对应的群成员（@某个成员），最长1000，每个最长30，“;”分隔符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'token' => null,
        'mentionUsers' => null,
        'mentionPhone' => null
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
    * url  **参数解释：** webhook的url (需要base64编码)。
    * token  **参数解释：** 密钥。
    * mentionUsers  **参数解释：** userid列表，提醒群中的指定成员（@某个成员），最长1000，每个最长100，“;”分隔符。
    * mentionPhone  **参数解释：** 手机号列表(需要base64编码)，提醒手机号对应的群成员（@某个成员），最长1000，每个最长30，“;”分隔符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'token' => 'token',
            'mentionUsers' => 'mention_users',
            'mentionPhone' => 'mention_phone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  **参数解释：** webhook的url (需要base64编码)。
    * token  **参数解释：** 密钥。
    * mentionUsers  **参数解释：** userid列表，提醒群中的指定成员（@某个成员），最长1000，每个最长100，“;”分隔符。
    * mentionPhone  **参数解释：** 手机号列表(需要base64编码)，提醒手机号对应的群成员（@某个成员），最长1000，每个最长30，“;”分隔符。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'token' => 'setToken',
            'mentionUsers' => 'setMentionUsers',
            'mentionPhone' => 'setMentionPhone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  **参数解释：** webhook的url (需要base64编码)。
    * token  **参数解释：** 密钥。
    * mentionUsers  **参数解释：** userid列表，提醒群中的指定成员（@某个成员），最长1000，每个最长100，“;”分隔符。
    * mentionPhone  **参数解释：** 手机号列表(需要base64编码)，提醒手机号对应的群成员（@某个成员），最长1000，每个最长30，“;”分隔符。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'token' => 'getToken',
            'mentionUsers' => 'getMentionUsers',
            'mentionPhone' => 'getMentionPhone'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['mentionUsers'] = isset($data['mentionUsers']) ? $data['mentionUsers'] : null;
        $this->container['mentionPhone'] = isset($data['mentionPhone']) ? $data['mentionPhone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 3000)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 3000.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 2000)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 1)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mentionUsers']) && (mb_strlen($this->container['mentionUsers']) > 1000)) {
                $invalidProperties[] = "invalid value for 'mentionUsers', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['mentionUsers']) && (mb_strlen($this->container['mentionUsers']) < 1)) {
                $invalidProperties[] = "invalid value for 'mentionUsers', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mentionPhone']) && (mb_strlen($this->container['mentionPhone']) > 1000)) {
                $invalidProperties[] = "invalid value for 'mentionPhone', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['mentionPhone']) && (mb_strlen($this->container['mentionPhone']) < 1)) {
                $invalidProperties[] = "invalid value for 'mentionPhone', the character length must be bigger than or equal to 1.";
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
    * Gets url
    *  **参数解释：** webhook的url (需要base64编码)。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释：** webhook的url (需要base64编码)。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets token
    *  **参数解释：** 密钥。
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token **参数解释：** 密钥。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets mentionUsers
    *  **参数解释：** userid列表，提醒群中的指定成员（@某个成员），最长1000，每个最长100，“;”分隔符。
    *
    * @return string|null
    */
    public function getMentionUsers()
    {
        return $this->container['mentionUsers'];
    }

    /**
    * Sets mentionUsers
    *
    * @param string|null $mentionUsers **参数解释：** userid列表，提醒群中的指定成员（@某个成员），最长1000，每个最长100，“;”分隔符。
    *
    * @return $this
    */
    public function setMentionUsers($mentionUsers)
    {
        $this->container['mentionUsers'] = $mentionUsers;
        return $this;
    }

    /**
    * Gets mentionPhone
    *  **参数解释：** 手机号列表(需要base64编码)，提醒手机号对应的群成员（@某个成员），最长1000，每个最长30，“;”分隔符。
    *
    * @return string|null
    */
    public function getMentionPhone()
    {
        return $this->container['mentionPhone'];
    }

    /**
    * Sets mentionPhone
    *
    * @param string|null $mentionPhone **参数解释：** 手机号列表(需要base64编码)，提醒手机号对应的群成员（@某个成员），最长1000，每个最长30，“;”分隔符。
    *
    * @return $this
    */
    public function setMentionPhone($mentionPhone)
    {
        $this->container['mentionPhone'] = $mentionPhone;
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

