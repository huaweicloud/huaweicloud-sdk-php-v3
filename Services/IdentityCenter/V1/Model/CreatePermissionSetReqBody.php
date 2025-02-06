<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePermissionSetReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePermissionSetReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  权限集描述.
    * name  权限集名称.
    * relayState  用于在联合身份验证过程中重定向应用程序中的用户
    * sessionDuration  应用程序用户会话在ISO-8601标准中有效的时间长度
    * tags  要附加到新权限集的标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'name' => 'string',
            'relayState' => 'string',
            'sessionDuration' => 'string',
            'tags' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\TagDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  权限集描述.
    * name  权限集名称.
    * relayState  用于在联合身份验证过程中重定向应用程序中的用户
    * sessionDuration  应用程序用户会话在ISO-8601标准中有效的时间长度
    * tags  要附加到新权限集的标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'name' => null,
        'relayState' => null,
        'sessionDuration' => null,
        'tags' => null
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
    * description  权限集描述.
    * name  权限集名称.
    * relayState  用于在联合身份验证过程中重定向应用程序中的用户
    * sessionDuration  应用程序用户会话在ISO-8601标准中有效的时间长度
    * tags  要附加到新权限集的标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'name' => 'name',
            'relayState' => 'relay_state',
            'sessionDuration' => 'session_duration',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  权限集描述.
    * name  权限集名称.
    * relayState  用于在联合身份验证过程中重定向应用程序中的用户
    * sessionDuration  应用程序用户会话在ISO-8601标准中有效的时间长度
    * tags  要附加到新权限集的标签
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'name' => 'setName',
            'relayState' => 'setRelayState',
            'sessionDuration' => 'setSessionDuration',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  权限集描述.
    * name  权限集名称.
    * relayState  用于在联合身份验证过程中重定向应用程序中的用户
    * sessionDuration  应用程序用户会话在ISO-8601标准中有效的时间长度
    * tags  要附加到新权限集的标签
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'name' => 'getName',
            'relayState' => 'getRelayState',
            'sessionDuration' => 'getSessionDuration',
            'tags' => 'getTags'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['relayState'] = isset($data['relayState']) ? $data['relayState'] : null;
        $this->container['sessionDuration'] = isset($data['sessionDuration']) ? $data['sessionDuration'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  ]*/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  ]*/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\w=,.@-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\w=,.@-]+/.";
            }
            if (!is_null($this->container['relayState']) && (mb_strlen($this->container['relayState']) > 240)) {
                $invalidProperties[] = "invalid value for 'relayState', the character length must be smaller than or equal to 240.";
            }
            if (!is_null($this->container['relayState']) && (mb_strlen($this->container['relayState']) < 0)) {
                $invalidProperties[] = "invalid value for 'relayState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['relayState']) && !preg_match("/[a-zA-Z0-9&$@#\\\\\/%?=~\\-_'\"|!:,\\.;*+\\[\\]\\ \\(\\)\\{\\}]*/", $this->container['relayState'])) {
                $invalidProperties[] = "invalid value for 'relayState', must be conform to the pattern /[a-zA-Z0-9&$@#\\\\\/%?=~\\-_'\"|!:,\\.;*+\\[\\]\\ \\(\\)\\{\\}]*/.";
            }
            if (!is_null($this->container['sessionDuration']) && (mb_strlen($this->container['sessionDuration']) > 100)) {
                $invalidProperties[] = "invalid value for 'sessionDuration', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sessionDuration']) && (mb_strlen($this->container['sessionDuration']) < 1)) {
                $invalidProperties[] = "invalid value for 'sessionDuration', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sessionDuration']) && !preg_match("/^(-?)P(?=\\d|T\\d)(?:(\\d+)Y)?(?:(\\d+)M)?(?:(\\d+)([DW]))?(?:T(?:(\\d+)H)?(?:(\\d+)M)?(?:(\\d+(?:\\.\\d+)?)S)?)?$/", $this->container['sessionDuration'])) {
                $invalidProperties[] = "invalid value for 'sessionDuration', must be conform to the pattern /^(-?)P(?=\\d|T\\d)(?:(\\d+)Y)?(?:(\\d+)M)?(?:(\\d+)([DW]))?(?:T(?:(\\d+)H)?(?:(\\d+)M)?(?:(\\d+(?:\\.\\d+)?)S)?)?$/.";
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
    * Gets description
    *  权限集描述.
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 权限集描述.
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  权限集名称.
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 权限集名称.
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets relayState
    *  用于在联合身份验证过程中重定向应用程序中的用户
    *
    * @return string|null
    */
    public function getRelayState()
    {
        return $this->container['relayState'];
    }

    /**
    * Sets relayState
    *
    * @param string|null $relayState 用于在联合身份验证过程中重定向应用程序中的用户
    *
    * @return $this
    */
    public function setRelayState($relayState)
    {
        $this->container['relayState'] = $relayState;
        return $this;
    }

    /**
    * Gets sessionDuration
    *  应用程序用户会话在ISO-8601标准中有效的时间长度
    *
    * @return string|null
    */
    public function getSessionDuration()
    {
        return $this->container['sessionDuration'];
    }

    /**
    * Sets sessionDuration
    *
    * @param string|null $sessionDuration 应用程序用户会话在ISO-8601标准中有效的时间长度
    *
    * @return $this
    */
    public function setSessionDuration($sessionDuration)
    {
        $this->container['sessionDuration'] = $sessionDuration;
        return $this;
    }

    /**
    * Gets tags
    *  要附加到新权限集的标签
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\TagDto[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\TagDto[]|null $tags 要附加到新权限集的标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

