<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInteractiveChatReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInteractiveChatReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  角色ID。
    * message  问题
    * sessionId  当前对话的唯一标识，用于关联对话上下文内容。
    * language  language
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'message' => 'string',
            'sessionId' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  角色ID。
    * message  问题
    * sessionId  当前对话的唯一标识，用于关联对话上下文内容。
    * language  language
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'message' => null,
        'sessionId' => null,
        'language' => null
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
    * roleId  角色ID。
    * message  问题
    * sessionId  当前对话的唯一标识，用于关联对话上下文内容。
    * language  language
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'message' => 'message',
            'sessionId' => 'session_id',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  角色ID。
    * message  问题
    * sessionId  当前对话的唯一标识，用于关联对话上下文内容。
    * language  language
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'message' => 'setMessage',
            'sessionId' => 'setSessionId',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  角色ID。
    * message  问题
    * sessionId  当前对话的唯一标识，用于关联对话上下文内容。
    * language  language
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'message' => 'getMessage',
            'sessionId' => 'getSessionId',
            'language' => 'getLanguage'
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['roleId'] === null) {
            $invalidProperties[] = "'roleId' can't be null";
        }
            if ((mb_strlen($this->container['roleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
            if ((mb_strlen($this->container['message']) > 1024)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
            if ((mb_strlen($this->container['sessionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['sessionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be bigger than or equal to 1.";
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
    * Gets roleId
    *  角色ID。
    *
    * @return string
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string $roleId 角色ID。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets message
    *  问题
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
    * @param string $message 问题
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets sessionId
    *  当前对话的唯一标识，用于关联对话上下文内容。
    *
    * @return string
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string $sessionId 当前对话的唯一标识，用于关联对话上下文内容。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

