<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachmentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachmentId' => null
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
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachmentId' => 'attachment_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'attachmentId' => 'setAttachmentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'attachmentId' => 'getAttachmentId'
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
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['attachmentId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachmentId'])) {
                $invalidProperties[] = "invalid value for 'attachmentId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets attachmentId
    *  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @return string|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param string|null $attachmentId 中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
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

