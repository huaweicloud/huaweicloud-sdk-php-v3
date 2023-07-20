<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReleaseFileVersionDo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReleaseFileVersionDo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  发布库文件的版本
    * path  发布库文件的路径
    * downloadUrl  发布库文件的下载链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'path' => 'string',
            'downloadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  发布库文件的版本
    * path  发布库文件的路径
    * downloadUrl  发布库文件的下载链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'path' => null,
        'downloadUrl' => null
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
    * version  发布库文件的版本
    * path  发布库文件的路径
    * downloadUrl  发布库文件的下载链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'path' => 'path',
            'downloadUrl' => 'download_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  发布库文件的版本
    * path  发布库文件的路径
    * downloadUrl  发布库文件的下载链接
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'path' => 'setPath',
            'downloadUrl' => 'setDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  发布库文件的版本
    * path  发布库文件的路径
    * downloadUrl  发布库文件的下载链接
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'path' => 'getPath',
            'downloadUrl' => 'getDownloadUrl'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 100)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 100)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) > 10000)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be bigger than or equal to 1.";
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
    * Gets version
    *  发布库文件的版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 发布库文件的版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets path
    *  发布库文件的路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 发布库文件的路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  发布库文件的下载链接
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl 发布库文件的下载链接
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
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

