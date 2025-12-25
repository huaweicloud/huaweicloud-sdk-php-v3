<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNoteRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNoteRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * warRoomId  评论的对象ID
    * type  评论的类型
    * content  评论的内容
    * noteType  评论的动作类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'warRoomId' => 'string',
            'type' => 'string',
            'content' => 'string',
            'noteType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * warRoomId  评论的对象ID
    * type  评论的类型
    * content  评论的内容
    * noteType  评论的动作类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'warRoomId' => null,
        'type' => null,
        'content' => null,
        'noteType' => null
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
    * warRoomId  评论的对象ID
    * type  评论的类型
    * content  评论的内容
    * noteType  评论的动作类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'warRoomId' => 'war_room_id',
            'type' => 'type',
            'content' => 'content',
            'noteType' => 'note_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * warRoomId  评论的对象ID
    * type  评论的类型
    * content  评论的内容
    * noteType  评论的动作类型
    *
    * @var string[]
    */
    protected static $setters = [
            'warRoomId' => 'setWarRoomId',
            'type' => 'setType',
            'content' => 'setContent',
            'noteType' => 'setNoteType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * warRoomId  评论的对象ID
    * type  评论的类型
    * content  评论的内容
    * noteType  评论的动作类型
    *
    * @var string[]
    */
    protected static $getters = [
            'warRoomId' => 'getWarRoomId',
            'type' => 'getType',
            'content' => 'getContent',
            'noteType' => 'getNoteType'
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
        $this->container['warRoomId'] = isset($data['warRoomId']) ? $data['warRoomId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['noteType'] = isset($data['noteType']) ? $data['noteType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['warRoomId']) && (mb_strlen($this->container['warRoomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'warRoomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['warRoomId']) && (mb_strlen($this->container['warRoomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'warRoomId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 1024)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['noteType']) && (mb_strlen($this->container['noteType']) > 64)) {
                $invalidProperties[] = "invalid value for 'noteType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['noteType']) && (mb_strlen($this->container['noteType']) < 0)) {
                $invalidProperties[] = "invalid value for 'noteType', the character length must be bigger than or equal to 0.";
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
    * Gets warRoomId
    *  评论的对象ID
    *
    * @return string|null
    */
    public function getWarRoomId()
    {
        return $this->container['warRoomId'];
    }

    /**
    * Sets warRoomId
    *
    * @param string|null $warRoomId 评论的对象ID
    *
    * @return $this
    */
    public function setWarRoomId($warRoomId)
    {
        $this->container['warRoomId'] = $warRoomId;
        return $this;
    }

    /**
    * Gets type
    *  评论的类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 评论的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  评论的内容
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 评论的内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets noteType
    *  评论的动作类型
    *
    * @return string|null
    */
    public function getNoteType()
    {
        return $this->container['noteType'];
    }

    /**
    * Sets noteType
    *
    * @param string|null $noteType 评论的动作类型
    *
    * @return $this
    */
    public function setNoteType($noteType)
    {
        $this->container['noteType'] = $noteType;
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

