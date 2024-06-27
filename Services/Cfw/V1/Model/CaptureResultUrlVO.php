<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaptureResultUrlVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaptureResultUrlVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * captcha  下载链接提取码
    * expires  下载链接过期时间
    * fileList  抓包文件列表
    * requestHeader  requestHeader
    * url  下载链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'captcha' => 'string',
            'expires' => 'int',
            'fileList' => '\HuaweiCloud\SDK\Cfw\V1\Model\CaptureFile[]',
            'requestHeader' => '\HuaweiCloud\SDK\Cfw\V1\Model\HostHeaderInfo',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * captcha  下载链接提取码
    * expires  下载链接过期时间
    * fileList  抓包文件列表
    * requestHeader  requestHeader
    * url  下载链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'captcha' => null,
        'expires' => 'int64',
        'fileList' => null,
        'requestHeader' => null,
        'url' => null
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
    * captcha  下载链接提取码
    * expires  下载链接过期时间
    * fileList  抓包文件列表
    * requestHeader  requestHeader
    * url  下载链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'captcha' => 'captcha',
            'expires' => 'expires',
            'fileList' => 'file_list',
            'requestHeader' => 'request_header',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * captcha  下载链接提取码
    * expires  下载链接过期时间
    * fileList  抓包文件列表
    * requestHeader  requestHeader
    * url  下载链接
    *
    * @var string[]
    */
    protected static $setters = [
            'captcha' => 'setCaptcha',
            'expires' => 'setExpires',
            'fileList' => 'setFileList',
            'requestHeader' => 'setRequestHeader',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * captcha  下载链接提取码
    * expires  下载链接过期时间
    * fileList  抓包文件列表
    * requestHeader  requestHeader
    * url  下载链接
    *
    * @var string[]
    */
    protected static $getters = [
            'captcha' => 'getCaptcha',
            'expires' => 'getExpires',
            'fileList' => 'getFileList',
            'requestHeader' => 'getRequestHeader',
            'url' => 'getUrl'
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
        $this->container['captcha'] = isset($data['captcha']) ? $data['captcha'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['fileList'] = isset($data['fileList']) ? $data['fileList'] : null;
        $this->container['requestHeader'] = isset($data['requestHeader']) ? $data['requestHeader'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
    * Gets captcha
    *  下载链接提取码
    *
    * @return string|null
    */
    public function getCaptcha()
    {
        return $this->container['captcha'];
    }

    /**
    * Sets captcha
    *
    * @param string|null $captcha 下载链接提取码
    *
    * @return $this
    */
    public function setCaptcha($captcha)
    {
        $this->container['captcha'] = $captcha;
        return $this;
    }

    /**
    * Gets expires
    *  下载链接过期时间
    *
    * @return int|null
    */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
    * Sets expires
    *
    * @param int|null $expires 下载链接过期时间
    *
    * @return $this
    */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;
        return $this;
    }

    /**
    * Gets fileList
    *  抓包文件列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\CaptureFile[]|null
    */
    public function getFileList()
    {
        return $this->container['fileList'];
    }

    /**
    * Sets fileList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\CaptureFile[]|null $fileList 抓包文件列表
    *
    * @return $this
    */
    public function setFileList($fileList)
    {
        $this->container['fileList'] = $fileList;
        return $this;
    }

    /**
    * Gets requestHeader
    *  requestHeader
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\HostHeaderInfo|null
    */
    public function getRequestHeader()
    {
        return $this->container['requestHeader'];
    }

    /**
    * Sets requestHeader
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\HostHeaderInfo|null $requestHeader requestHeader
    *
    * @return $this
    */
    public function setRequestHeader($requestHeader)
    {
        $this->container['requestHeader'] = $requestHeader;
        return $this;
    }

    /**
    * Gets url
    *  下载链接
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
    * @param string|null $url 下载链接
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

