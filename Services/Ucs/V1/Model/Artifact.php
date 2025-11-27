<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Artifact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Artifact';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  制品的相对文件路径
    * url  HTTP地址，可通过该地址下载或访问制品内容
    * revision  版本标识符
    * digest  文件摘要，格式为 <算法>:<校验值>
    * lastUpdateTime  最后更新时间
    * size  文件大小（以字节为单位）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'url' => 'string',
            'revision' => 'string',
            'digest' => 'string',
            'lastUpdateTime' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  制品的相对文件路径
    * url  HTTP地址，可通过该地址下载或访问制品内容
    * revision  版本标识符
    * digest  文件摘要，格式为 <算法>:<校验值>
    * lastUpdateTime  最后更新时间
    * size  文件大小（以字节为单位）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'url' => null,
        'revision' => null,
        'digest' => null,
        'lastUpdateTime' => null,
        'size' => 'int32'
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
    * path  制品的相对文件路径
    * url  HTTP地址，可通过该地址下载或访问制品内容
    * revision  版本标识符
    * digest  文件摘要，格式为 <算法>:<校验值>
    * lastUpdateTime  最后更新时间
    * size  文件大小（以字节为单位）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'url' => 'url',
            'revision' => 'revision',
            'digest' => 'digest',
            'lastUpdateTime' => 'lastUpdateTime',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  制品的相对文件路径
    * url  HTTP地址，可通过该地址下载或访问制品内容
    * revision  版本标识符
    * digest  文件摘要，格式为 <算法>:<校验值>
    * lastUpdateTime  最后更新时间
    * size  文件大小（以字节为单位）
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'url' => 'setUrl',
            'revision' => 'setRevision',
            'digest' => 'setDigest',
            'lastUpdateTime' => 'setLastUpdateTime',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  制品的相对文件路径
    * url  HTTP地址，可通过该地址下载或访问制品内容
    * revision  版本标识符
    * digest  文件摘要，格式为 <算法>:<校验值>
    * lastUpdateTime  最后更新时间
    * size  文件大小（以字节为单位）
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'url' => 'getUrl',
            'revision' => 'getRevision',
            'digest' => 'getDigest',
            'lastUpdateTime' => 'getLastUpdateTime',
            'size' => 'getSize'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    * Gets path
    *  制品的相对文件路径
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
    * @param string|null $path 制品的相对文件路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets url
    *  HTTP地址，可通过该地址下载或访问制品内容
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url HTTP地址，可通过该地址下载或访问制品内容
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets revision
    *  版本标识符
    *
    * @return string|null
    */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
    * Sets revision
    *
    * @param string|null $revision 版本标识符
    *
    * @return $this
    */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;
        return $this;
    }

    /**
    * Gets digest
    *  文件摘要，格式为 <算法>:<校验值>
    *
    * @return string|null
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string|null $digest 文件摘要，格式为 <算法>:<校验值>
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最后更新时间
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 最后更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets size
    *  文件大小（以字节为单位）
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 文件大小（以字节为单位）
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

