<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizeBackupDownloadResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizeBackupDownloadResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  OBS桶名。
    * filePaths  通过OBS Browser+下载备份文件的路径名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'filePaths' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  OBS桶名。
    * filePaths  通过OBS Browser+下载备份文件的路径名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'filePaths' => null
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
    * bucket  OBS桶名。
    * filePaths  通过OBS Browser+下载备份文件的路径名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'filePaths' => 'file_paths'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  OBS桶名。
    * filePaths  通过OBS Browser+下载备份文件的路径名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'filePaths' => 'setFilePaths'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  OBS桶名。
    * filePaths  通过OBS Browser+下载备份文件的路径名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'filePaths' => 'getFilePaths'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['filePaths'] = isset($data['filePaths']) ? $data['filePaths'] : null;
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
    * Gets bucket
    *  OBS桶名。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket OBS桶名。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets filePaths
    *  通过OBS Browser+下载备份文件的路径名称。
    *
    * @return string[]|null
    */
    public function getFilePaths()
    {
        return $this->container['filePaths'];
    }

    /**
    * Sets filePaths
    *
    * @param string[]|null $filePaths 通过OBS Browser+下载备份文件的路径名称。
    *
    * @return $this
    */
    public function setFilePaths($filePaths)
    {
        $this->container['filePaths'] = $filePaths;
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

