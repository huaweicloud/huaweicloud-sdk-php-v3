<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  构建时间
    * createdBy  构建命令
    * emptyLayer  是否空层
    * mediaType  层格式
    * size  层大小
    * digest  层sha256信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'createdBy' => 'string',
            'emptyLayer' => 'bool',
            'mediaType' => 'string',
            'size' => 'int',
            'digest' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  构建时间
    * createdBy  构建命令
    * emptyLayer  是否空层
    * mediaType  层格式
    * size  层大小
    * digest  层sha256信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'createdBy' => null,
        'emptyLayer' => null,
        'mediaType' => null,
        'size' => null,
        'digest' => null
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
    * createdAt  构建时间
    * createdBy  构建命令
    * emptyLayer  是否空层
    * mediaType  层格式
    * size  层大小
    * digest  层sha256信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'createdBy' => 'created_by',
            'emptyLayer' => 'empty_layer',
            'mediaType' => 'mediaType',
            'size' => 'size',
            'digest' => 'digest'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  构建时间
    * createdBy  构建命令
    * emptyLayer  是否空层
    * mediaType  层格式
    * size  层大小
    * digest  层sha256信息
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'createdBy' => 'setCreatedBy',
            'emptyLayer' => 'setEmptyLayer',
            'mediaType' => 'setMediaType',
            'size' => 'setSize',
            'digest' => 'setDigest'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  构建时间
    * createdBy  构建命令
    * emptyLayer  是否空层
    * mediaType  层格式
    * size  层大小
    * digest  层sha256信息
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'createdBy' => 'getCreatedBy',
            'emptyLayer' => 'getEmptyLayer',
            'mediaType' => 'getMediaType',
            'size' => 'getSize',
            'digest' => 'getDigest'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['emptyLayer'] = isset($data['emptyLayer']) ? $data['emptyLayer'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
        if ($this->container['emptyLayer'] === null) {
            $invalidProperties[] = "'emptyLayer' can't be null";
        }
        if ($this->container['mediaType'] === null) {
            $invalidProperties[] = "'mediaType' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['digest'] === null) {
            $invalidProperties[] = "'digest' can't be null";
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
    * Gets createdAt
    *  构建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 构建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets createdBy
    *  构建命令
    *
    * @return string
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string $createdBy 构建命令
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets emptyLayer
    *  是否空层
    *
    * @return bool
    */
    public function getEmptyLayer()
    {
        return $this->container['emptyLayer'];
    }

    /**
    * Sets emptyLayer
    *
    * @param bool $emptyLayer 是否空层
    *
    * @return $this
    */
    public function setEmptyLayer($emptyLayer)
    {
        $this->container['emptyLayer'] = $emptyLayer;
        return $this;
    }

    /**
    * Gets mediaType
    *  层格式
    *
    * @return string
    */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
    * Sets mediaType
    *
    * @param string $mediaType 层格式
    *
    * @return $this
    */
    public function setMediaType($mediaType)
    {
        $this->container['mediaType'] = $mediaType;
        return $this;
    }

    /**
    * Gets size
    *  层大小
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 层大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets digest
    *  层sha256信息
    *
    * @return string
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string $digest 层sha256信息
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
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

