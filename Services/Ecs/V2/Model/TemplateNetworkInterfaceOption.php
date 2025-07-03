<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateNetworkInterfaceOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateNetworkInterfaceOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * virsubnetId  子网ID
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'virsubnetId' => 'string',
            'attachment' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateNetworkInterfaceAttachmentOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * virsubnetId  子网ID
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'virsubnetId' => null,
        'attachment' => null
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
    * virsubnetId  子网ID
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'virsubnetId' => 'virsubnet_id',
            'attachment' => 'attachment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * virsubnetId  子网ID
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $setters = [
            'virsubnetId' => 'setVirsubnetId',
            'attachment' => 'setAttachment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * virsubnetId  子网ID
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $getters = [
            'virsubnetId' => 'getVirsubnetId',
            'attachment' => 'getAttachment'
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
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
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
    * Gets virsubnetId
    *  子网ID
    *
    * @return string|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string|null $virsubnetId 子网ID
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets attachment
    *  attachment
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateNetworkInterfaceAttachmentOption|null
    */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
    * Sets attachment
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateNetworkInterfaceAttachmentOption|null $attachment attachment
    *
    * @return $this
    */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;
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

