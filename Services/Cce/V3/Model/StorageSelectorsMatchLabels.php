<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StorageSelectorsMatchLabels implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StorageSelectors_matchLabels';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  匹配的磁盘大小，不填则无磁盘大小限制。例如：100.
    * volumeType  云硬盘类型，目前支持SSD\\GPSSD\\SAS三种。
    * metadataEncrypted  磁盘加密标识符，0代表不加密，1代表加密。
    * metadataCmkid  加密磁盘的用户主密钥ID，长度为36字节的字符串。
    * count  磁盘选择个数，不填则选择所有此类磁盘。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'string',
            'volumeType' => 'string',
            'metadataEncrypted' => 'string',
            'metadataCmkid' => 'string',
            'count' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  匹配的磁盘大小，不填则无磁盘大小限制。例如：100.
    * volumeType  云硬盘类型，目前支持SSD\\GPSSD\\SAS三种。
    * metadataEncrypted  磁盘加密标识符，0代表不加密，1代表加密。
    * metadataCmkid  加密磁盘的用户主密钥ID，长度为36字节的字符串。
    * count  磁盘选择个数，不填则选择所有此类磁盘。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => null,
        'volumeType' => null,
        'metadataEncrypted' => null,
        'metadataCmkid' => null,
        'count' => null
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
    * size  匹配的磁盘大小，不填则无磁盘大小限制。例如：100.
    * volumeType  云硬盘类型，目前支持SSD\\GPSSD\\SAS三种。
    * metadataEncrypted  磁盘加密标识符，0代表不加密，1代表加密。
    * metadataCmkid  加密磁盘的用户主密钥ID，长度为36字节的字符串。
    * count  磁盘选择个数，不填则选择所有此类磁盘。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'volumeType' => 'volumeType',
            'metadataEncrypted' => 'metadataEncrypted',
            'metadataCmkid' => 'metadataCmkid',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  匹配的磁盘大小，不填则无磁盘大小限制。例如：100.
    * volumeType  云硬盘类型，目前支持SSD\\GPSSD\\SAS三种。
    * metadataEncrypted  磁盘加密标识符，0代表不加密，1代表加密。
    * metadataCmkid  加密磁盘的用户主密钥ID，长度为36字节的字符串。
    * count  磁盘选择个数，不填则选择所有此类磁盘。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'volumeType' => 'setVolumeType',
            'metadataEncrypted' => 'setMetadataEncrypted',
            'metadataCmkid' => 'setMetadataCmkid',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  匹配的磁盘大小，不填则无磁盘大小限制。例如：100.
    * volumeType  云硬盘类型，目前支持SSD\\GPSSD\\SAS三种。
    * metadataEncrypted  磁盘加密标识符，0代表不加密，1代表加密。
    * metadataCmkid  加密磁盘的用户主密钥ID，长度为36字节的字符串。
    * count  磁盘选择个数，不填则选择所有此类磁盘。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'volumeType' => 'getVolumeType',
            'metadataEncrypted' => 'getMetadataEncrypted',
            'metadataCmkid' => 'getMetadataCmkid',
            'count' => 'getCount'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['metadataEncrypted'] = isset($data['metadataEncrypted']) ? $data['metadataEncrypted'] : null;
        $this->container['metadataCmkid'] = isset($data['metadataCmkid']) ? $data['metadataCmkid'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets size
    *  匹配的磁盘大小，不填则无磁盘大小限制。例如：100.
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size 匹配的磁盘大小，不填则无磁盘大小限制。例如：100.
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets volumeType
    *  云硬盘类型，目前支持SSD\\GPSSD\\SAS三种。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 云硬盘类型，目前支持SSD\\GPSSD\\SAS三种。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets metadataEncrypted
    *  磁盘加密标识符，0代表不加密，1代表加密。
    *
    * @return string|null
    */
    public function getMetadataEncrypted()
    {
        return $this->container['metadataEncrypted'];
    }

    /**
    * Sets metadataEncrypted
    *
    * @param string|null $metadataEncrypted 磁盘加密标识符，0代表不加密，1代表加密。
    *
    * @return $this
    */
    public function setMetadataEncrypted($metadataEncrypted)
    {
        $this->container['metadataEncrypted'] = $metadataEncrypted;
        return $this;
    }

    /**
    * Gets metadataCmkid
    *  加密磁盘的用户主密钥ID，长度为36字节的字符串。
    *
    * @return string|null
    */
    public function getMetadataCmkid()
    {
        return $this->container['metadataCmkid'];
    }

    /**
    * Sets metadataCmkid
    *
    * @param string|null $metadataCmkid 加密磁盘的用户主密钥ID，长度为36字节的字符串。
    *
    * @return $this
    */
    public function setMetadataCmkid($metadataCmkid)
    {
        $this->container['metadataCmkid'] = $metadataCmkid;
        return $this;
    }

    /**
    * Gets count
    *  磁盘选择个数，不填则选择所有此类磁盘。
    *
    * @return string|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param string|null $count 磁盘选择个数，不填则选择所有此类磁盘。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

