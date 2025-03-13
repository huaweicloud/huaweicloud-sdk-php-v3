<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailableSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailableSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  VPN网关规格
    * attachmentType  关联模式
    * ipVersion  网关的IP协议版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'attachmentType' => 'string',
            'ipVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  VPN网关规格
    * attachmentType  关联模式
    * ipVersion  网关的IP协议版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'attachmentType' => null,
        'ipVersion' => null
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
    * flavor  VPN网关规格
    * attachmentType  关联模式
    * ipVersion  网关的IP协议版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'attachmentType' => 'attachment_type',
            'ipVersion' => 'ip_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  VPN网关规格
    * attachmentType  关联模式
    * ipVersion  网关的IP协议版本
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'attachmentType' => 'setAttachmentType',
            'ipVersion' => 'setIpVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  VPN网关规格
    * attachmentType  关联模式
    * ipVersion  网关的IP协议版本
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'attachmentType' => 'getAttachmentType',
            'ipVersion' => 'getIpVersion'
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['attachmentType'] = isset($data['attachmentType']) ? $data['attachmentType'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
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
    * Gets flavor
    *  VPN网关规格
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor VPN网关规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets attachmentType
    *  关联模式
    *
    * @return string|null
    */
    public function getAttachmentType()
    {
        return $this->container['attachmentType'];
    }

    /**
    * Sets attachmentType
    *
    * @param string|null $attachmentType 关联模式
    *
    * @return $this
    */
    public function setAttachmentType($attachmentType)
    {
        $this->container['attachmentType'] = $attachmentType;
        return $this;
    }

    /**
    * Gets ipVersion
    *  网关的IP协议版本
    *
    * @return string|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string|null $ipVersion 网关的IP协议版本
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
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

