<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultipartUploadInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultipartUploadInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partNumber  分片编号
    * etag  分片文件标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partNumber' => 'string',
            'etag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partNumber  分片编号
    * etag  分片文件标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partNumber' => null,
        'etag' => null
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
    * partNumber  分片编号
    * etag  分片文件标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partNumber' => 'part_number',
            'etag' => 'etag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partNumber  分片编号
    * etag  分片文件标识
    *
    * @var string[]
    */
    protected static $setters = [
            'partNumber' => 'setPartNumber',
            'etag' => 'setEtag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partNumber  分片编号
    * etag  分片文件标识
    *
    * @var string[]
    */
    protected static $getters = [
            'partNumber' => 'getPartNumber',
            'etag' => 'getEtag'
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
        $this->container['partNumber'] = isset($data['partNumber']) ? $data['partNumber'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['partNumber']) && (mb_strlen($this->container['partNumber']) > 10)) {
                $invalidProperties[] = "invalid value for 'partNumber', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['partNumber']) && (mb_strlen($this->container['partNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'partNumber', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['etag']) && (mb_strlen($this->container['etag']) > 64)) {
                $invalidProperties[] = "invalid value for 'etag', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['etag']) && (mb_strlen($this->container['etag']) < 1)) {
                $invalidProperties[] = "invalid value for 'etag', the character length must be bigger than or equal to 1.";
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
    * Gets partNumber
    *  分片编号
    *
    * @return string|null
    */
    public function getPartNumber()
    {
        return $this->container['partNumber'];
    }

    /**
    * Sets partNumber
    *
    * @param string|null $partNumber 分片编号
    *
    * @return $this
    */
    public function setPartNumber($partNumber)
    {
        $this->container['partNumber'] = $partNumber;
        return $this;
    }

    /**
    * Gets etag
    *  分片文件标识
    *
    * @return string|null
    */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
    * Sets etag
    *
    * @param string|null $etag 分片文件标识
    *
    * @return $this
    */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;
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

