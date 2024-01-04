<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommentData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommentData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentName  附件名字
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commentTitle' => 'string',
            'commentMessage' => 'string',
            'attachmentName' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentName  附件名字
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commentTitle' => null,
        'commentMessage' => null,
        'attachmentName' => null
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
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentName  附件名字
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commentTitle' => 'comment_title',
            'commentMessage' => 'comment_message',
            'attachmentName' => 'attachment_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentName  附件名字
    *
    * @var string[]
    */
    protected static $setters = [
            'commentTitle' => 'setCommentTitle',
            'commentMessage' => 'setCommentMessage',
            'attachmentName' => 'setAttachmentName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentName  附件名字
    *
    * @var string[]
    */
    protected static $getters = [
            'commentTitle' => 'getCommentTitle',
            'commentMessage' => 'getCommentMessage',
            'attachmentName' => 'getAttachmentName'
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
        $this->container['commentTitle'] = isset($data['commentTitle']) ? $data['commentTitle'] : null;
        $this->container['commentMessage'] = isset($data['commentMessage']) ? $data['commentMessage'] : null;
        $this->container['attachmentName'] = isset($data['attachmentName']) ? $data['attachmentName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['commentTitle']) && (mb_strlen($this->container['commentTitle']) > 2048)) {
                $invalidProperties[] = "invalid value for 'commentTitle', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['commentTitle']) && (mb_strlen($this->container['commentTitle']) < 0)) {
                $invalidProperties[] = "invalid value for 'commentTitle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commentMessage']) && (mb_strlen($this->container['commentMessage']) > 2048)) {
                $invalidProperties[] = "invalid value for 'commentMessage', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['commentMessage']) && (mb_strlen($this->container['commentMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'commentMessage', the character length must be bigger than or equal to 0.";
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
    * Gets commentTitle
    *  标题。
    *
    * @return string|null
    */
    public function getCommentTitle()
    {
        return $this->container['commentTitle'];
    }

    /**
    * Sets commentTitle
    *
    * @param string|null $commentTitle 标题。
    *
    * @return $this
    */
    public function setCommentTitle($commentTitle)
    {
        $this->container['commentTitle'] = $commentTitle;
        return $this;
    }

    /**
    * Gets commentMessage
    *  消息。
    *
    * @return string|null
    */
    public function getCommentMessage()
    {
        return $this->container['commentMessage'];
    }

    /**
    * Sets commentMessage
    *
    * @param string|null $commentMessage 消息。
    *
    * @return $this
    */
    public function setCommentMessage($commentMessage)
    {
        $this->container['commentMessage'] = $commentMessage;
        return $this;
    }

    /**
    * Gets attachmentName
    *  附件名字
    *
    * @return string[]|null
    */
    public function getAttachmentName()
    {
        return $this->container['attachmentName'];
    }

    /**
    * Sets attachmentName
    *
    * @param string[]|null $attachmentName 附件名字
    *
    * @return $this
    */
    public function setAttachmentName($attachmentName)
    {
        $this->container['attachmentName'] = $attachmentName;
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

