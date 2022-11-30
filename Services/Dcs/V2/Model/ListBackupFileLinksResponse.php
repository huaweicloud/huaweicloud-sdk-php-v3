<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackupFileLinksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackupFileLinksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  OBS桶内文件路径。
    * bucketName  OBS桶名。
    * links  备份文件下链接集合，链接数最大为64个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'bucketName' => 'string',
            'links' => '\HuaweiCloud\SDK\Dcs\V2\Model\LinksItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  OBS桶内文件路径。
    * bucketName  OBS桶名。
    * links  备份文件下链接集合，链接数最大为64个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'bucketName' => null,
        'links' => null
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
    * filePath  OBS桶内文件路径。
    * bucketName  OBS桶名。
    * links  备份文件下链接集合，链接数最大为64个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'bucketName' => 'bucket_name',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  OBS桶内文件路径。
    * bucketName  OBS桶名。
    * links  备份文件下链接集合，链接数最大为64个。
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'bucketName' => 'setBucketName',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  OBS桶内文件路径。
    * bucketName  OBS桶名。
    * links  备份文件下链接集合，链接数最大为64个。
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'bucketName' => 'getBucketName',
            'links' => 'getLinks'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
    * Gets filePath
    *  OBS桶内文件路径。
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath OBS桶内文件路径。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets bucketName
    *  OBS桶名。
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName OBS桶名。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets links
    *  备份文件下链接集合，链接数最大为64个。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\LinksItem[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\LinksItem[]|null $links 备份文件下链接集合，链接数最大为64个。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
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

