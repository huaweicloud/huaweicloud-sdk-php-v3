<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckMd5DuplicationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckMd5DuplicationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * size  文件大小
    * md5  文件MD5。  建议参考[上传校验](https://support.huaweicloud.com/api-vod/vod_04_0212.html#vod_04_0212__section575102165412)生成对应的MD5值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSdkDate' => 'string',
            'size' => 'int',
            'md5' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * size  文件大小
    * md5  文件MD5。  建议参考[上传校验](https://support.huaweicloud.com/api-vod/vod_04_0212.html#vod_04_0212__section575102165412)生成对应的MD5值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSdkDate' => null,
        'size' => 'int64',
        'md5' => null
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
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * size  文件大小
    * md5  文件MD5。  建议参考[上传校验](https://support.huaweicloud.com/api-vod/vod_04_0212.html#vod_04_0212__section575102165412)生成对应的MD5值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSdkDate' => 'X-Sdk-Date',
            'size' => 'size',
            'md5' => 'md5'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * size  文件大小
    * md5  文件MD5。  建议参考[上传校验](https://support.huaweicloud.com/api-vod/vod_04_0212.html#vod_04_0212__section575102165412)生成对应的MD5值。
    *
    * @var string[]
    */
    protected static $setters = [
            'xSdkDate' => 'setXSdkDate',
            'size' => 'setSize',
            'md5' => 'setMd5'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * size  文件大小
    * md5  文件MD5。  建议参考[上传校验](https://support.huaweicloud.com/api-vod/vod_04_0212.html#vod_04_0212__section575102165412)生成对应的MD5值。
    *
    * @var string[]
    */
    protected static $getters = [
            'xSdkDate' => 'getXSdkDate',
            'size' => 'getSize',
            'md5' => 'getMd5'
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
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['md5'] === null) {
            $invalidProperties[] = "'md5' can't be null";
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
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets size
    *  文件大小
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
    * @param int $size 文件大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets md5
    *  文件MD5。  建议参考[上传校验](https://support.huaweicloud.com/api-vod/vod_04_0212.html#vod_04_0212__section575102165412)生成对应的MD5值。
    *
    * @return string
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string $md5 文件MD5。  建议参考[上传校验](https://support.huaweicloud.com/api-vod/vod_04_0212.html#vod_04_0212__section575102165412)生成对应的MD5值。
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
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

