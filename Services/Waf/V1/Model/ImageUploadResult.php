<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageUploadResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageUploadResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  图片名称（与请求项对应，保序返回）
    * imageId  后端生成的图片ID（前端PUT后用此ID加入图库）；失败时为空
    * uploadUrl  OBS PUT预签名上传地址；失败时为空
    * expire  预签名过期时间（秒）；失败时为空
    * success  是否成功
    * errorMsg  失败原因（如格式不支持/大小超限）
    * errorCode  失败错误码（与error_msg配套，便于请求方按错误码处理）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'imageId' => 'string',
            'uploadUrl' => 'string',
            'expire' => 'int',
            'success' => 'bool',
            'errorMsg' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  图片名称（与请求项对应，保序返回）
    * imageId  后端生成的图片ID（前端PUT后用此ID加入图库）；失败时为空
    * uploadUrl  OBS PUT预签名上传地址；失败时为空
    * expire  预签名过期时间（秒）；失败时为空
    * success  是否成功
    * errorMsg  失败原因（如格式不支持/大小超限）
    * errorCode  失败错误码（与error_msg配套，便于请求方按错误码处理）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'imageId' => null,
        'uploadUrl' => null,
        'expire' => 'int64',
        'success' => null,
        'errorMsg' => null,
        'errorCode' => null
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
    * imageName  图片名称（与请求项对应，保序返回）
    * imageId  后端生成的图片ID（前端PUT后用此ID加入图库）；失败时为空
    * uploadUrl  OBS PUT预签名上传地址；失败时为空
    * expire  预签名过期时间（秒）；失败时为空
    * success  是否成功
    * errorMsg  失败原因（如格式不支持/大小超限）
    * errorCode  失败错误码（与error_msg配套，便于请求方按错误码处理）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'imageId' => 'image_id',
            'uploadUrl' => 'upload_url',
            'expire' => 'expire',
            'success' => 'success',
            'errorMsg' => 'error_msg',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  图片名称（与请求项对应，保序返回）
    * imageId  后端生成的图片ID（前端PUT后用此ID加入图库）；失败时为空
    * uploadUrl  OBS PUT预签名上传地址；失败时为空
    * expire  预签名过期时间（秒）；失败时为空
    * success  是否成功
    * errorMsg  失败原因（如格式不支持/大小超限）
    * errorCode  失败错误码（与error_msg配套，便于请求方按错误码处理）
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'imageId' => 'setImageId',
            'uploadUrl' => 'setUploadUrl',
            'expire' => 'setExpire',
            'success' => 'setSuccess',
            'errorMsg' => 'setErrorMsg',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  图片名称（与请求项对应，保序返回）
    * imageId  后端生成的图片ID（前端PUT后用此ID加入图库）；失败时为空
    * uploadUrl  OBS PUT预签名上传地址；失败时为空
    * expire  预签名过期时间（秒）；失败时为空
    * success  是否成功
    * errorMsg  失败原因（如格式不支持/大小超限）
    * errorCode  失败错误码（与error_msg配套，便于请求方按错误码处理）
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'imageId' => 'getImageId',
            'uploadUrl' => 'getUploadUrl',
            'expire' => 'getExpire',
            'success' => 'getSuccess',
            'errorMsg' => 'getErrorMsg',
            'errorCode' => 'getErrorCode'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['uploadUrl'] = isset($data['uploadUrl']) ? $data['uploadUrl'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
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
    * Gets imageName
    *  图片名称（与请求项对应，保序返回）
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 图片名称（与请求项对应，保序返回）
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageId
    *  后端生成的图片ID（前端PUT后用此ID加入图库）；失败时为空
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 后端生成的图片ID（前端PUT后用此ID加入图库）；失败时为空
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets uploadUrl
    *  OBS PUT预签名上传地址；失败时为空
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
    * @param string|null $uploadUrl OBS PUT预签名上传地址；失败时为空
    *
    * @return $this
    */
    public function setUploadUrl($uploadUrl)
    {
        $this->container['uploadUrl'] = $uploadUrl;
        return $this;
    }

    /**
    * Gets expire
    *  预签名过期时间（秒）；失败时为空
    *
    * @return int|null
    */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
    * Sets expire
    *
    * @param int|null $expire 预签名过期时间（秒）；失败时为空
    *
    * @return $this
    */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;
        return $this;
    }

    /**
    * Gets success
    *  是否成功
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets errorMsg
    *  失败原因（如格式不支持/大小超限）
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 失败原因（如格式不支持/大小超限）
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets errorCode
    *  失败错误码（与error_msg配套，便于请求方按错误码处理）
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 失败错误码（与error_msg配套，便于请求方按错误码处理）
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

