<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentInstanceId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentInstanceId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachmentInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachmentInstanceId' => null
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
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachmentInstanceId' => 'attachment_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'attachmentInstanceId' => 'setAttachmentInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'attachmentInstanceId' => 'getAttachmentInstanceId'
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
        $this->container['attachmentInstanceId'] = isset($data['attachmentInstanceId']) ? $data['attachmentInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['attachmentInstanceId'] === null) {
            $invalidProperties[] = "'attachmentInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['attachmentInstanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachmentInstanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachmentInstanceId'])) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets attachmentInstanceId
    *  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @return string
    */
    public function getAttachmentInstanceId()
    {
        return $this->container['attachmentInstanceId'];
    }

    /**
    * Sets attachmentInstanceId
    *
    * @param string $attachmentInstanceId 中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @return $this
    */
    public function setAttachmentInstanceId($attachmentInstanceId)
    {
        $this->container['attachmentInstanceId'] = $attachmentInstanceId;
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

