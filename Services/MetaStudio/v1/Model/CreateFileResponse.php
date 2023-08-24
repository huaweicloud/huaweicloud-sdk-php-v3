<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileId  文件ID。
    * uploadUrl  文件上传地址，有效期为24小时。 > * 调用OBS的[\"PUT上传\"](https://support.huaweicloud.com/api-obs/obs_04_0080.html)接口上传文件。 > * 调用上述接口时，Content-MD5头必须填写，填写的值跟file_md5中的值相同。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileId' => 'string',
            'uploadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileId  文件ID。
    * uploadUrl  文件上传地址，有效期为24小时。 > * 调用OBS的[\"PUT上传\"](https://support.huaweicloud.com/api-obs/obs_04_0080.html)接口上传文件。 > * 调用上述接口时，Content-MD5头必须填写，填写的值跟file_md5中的值相同。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileId' => null,
        'uploadUrl' => null
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
    * fileId  文件ID。
    * uploadUrl  文件上传地址，有效期为24小时。 > * 调用OBS的[\"PUT上传\"](https://support.huaweicloud.com/api-obs/obs_04_0080.html)接口上传文件。 > * 调用上述接口时，Content-MD5头必须填写，填写的值跟file_md5中的值相同。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileId' => 'file_id',
            'uploadUrl' => 'upload_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileId  文件ID。
    * uploadUrl  文件上传地址，有效期为24小时。 > * 调用OBS的[\"PUT上传\"](https://support.huaweicloud.com/api-obs/obs_04_0080.html)接口上传文件。 > * 调用上述接口时，Content-MD5头必须填写，填写的值跟file_md5中的值相同。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileId' => 'setFileId',
            'uploadUrl' => 'setUploadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileId  文件ID。
    * uploadUrl  文件上传地址，有效期为24小时。 > * 调用OBS的[\"PUT上传\"](https://support.huaweicloud.com/api-obs/obs_04_0080.html)接口上传文件。 > * 调用上述接口时，Content-MD5头必须填写，填写的值跟file_md5中的值相同。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileId' => 'getFileId',
            'uploadUrl' => 'getUploadUrl'
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
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['uploadUrl'] = isset($data['uploadUrl']) ? $data['uploadUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uploadUrl']) && (mb_strlen($this->container['uploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'uploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['uploadUrl']) && (mb_strlen($this->container['uploadUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'uploadUrl', the character length must be bigger than or equal to 0.";
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
    * Gets fileId
    *  文件ID。
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId 文件ID。
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets uploadUrl
    *  文件上传地址，有效期为24小时。 > * 调用OBS的[\"PUT上传\"](https://support.huaweicloud.com/api-obs/obs_04_0080.html)接口上传文件。 > * 调用上述接口时，Content-MD5头必须填写，填写的值跟file_md5中的值相同。
    *
    * @return string|null
    */
    public function getUploadUrl()
    {
        return $this->container['uploadUrl'];
    }

    /**
    * Sets uploadUrl
    *
    * @param string|null $uploadUrl 文件上传地址，有效期为24小时。 > * 调用OBS的[\"PUT上传\"](https://support.huaweicloud.com/api-obs/obs_04_0080.html)接口上传文件。 > * 调用上述接口时，Content-MD5头必须填写，填写的值跟file_md5中的值相同。
    *
    * @return $this
    */
    public function setUploadUrl($uploadUrl)
    {
        $this->container['uploadUrl'] = $uploadUrl;
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

