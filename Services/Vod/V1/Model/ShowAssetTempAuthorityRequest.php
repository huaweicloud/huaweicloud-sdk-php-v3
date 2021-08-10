<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssetTempAuthorityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssetTempAuthorityRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * httpVerb  分段上传时调用OBS接口的HTTP方法，具体操作需要的HTTP方法请参考OBS的接口文档。  - 初始化上传任务：POST - 上传段：PUT - 合并段：POST - 取消段：DELETE - 列举已上传段：GET
    * bucket  桶名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket值。
    * objectKey  对象名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的object值。
    * contentType  文件类型对应的content-type，如MP4对应video/mp4。
    * contentMd5  上传段时每段的MD5。
    * uploadId  每一个上传任务的id，是OBS进行初始段后OBS返回的。
    * partNumber  上传段时每一段的id。  取值范围：[1,10000]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'httpVerb' => 'string',
            'bucket' => 'string',
            'objectKey' => 'string',
            'contentType' => 'string',
            'contentMd5' => 'string',
            'uploadId' => 'string',
            'partNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * httpVerb  分段上传时调用OBS接口的HTTP方法，具体操作需要的HTTP方法请参考OBS的接口文档。  - 初始化上传任务：POST - 上传段：PUT - 合并段：POST - 取消段：DELETE - 列举已上传段：GET
    * bucket  桶名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket值。
    * objectKey  对象名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的object值。
    * contentType  文件类型对应的content-type，如MP4对应video/mp4。
    * contentMd5  上传段时每段的MD5。
    * uploadId  每一个上传任务的id，是OBS进行初始段后OBS返回的。
    * partNumber  上传段时每一段的id。  取值范围：[1,10000]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'httpVerb' => null,
        'bucket' => null,
        'objectKey' => null,
        'contentType' => null,
        'contentMd5' => null,
        'uploadId' => null,
        'partNumber' => null
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * httpVerb  分段上传时调用OBS接口的HTTP方法，具体操作需要的HTTP方法请参考OBS的接口文档。  - 初始化上传任务：POST - 上传段：PUT - 合并段：POST - 取消段：DELETE - 列举已上传段：GET
    * bucket  桶名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket值。
    * objectKey  对象名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的object值。
    * contentType  文件类型对应的content-type，如MP4对应video/mp4。
    * contentMd5  上传段时每段的MD5。
    * uploadId  每一个上传任务的id，是OBS进行初始段后OBS返回的。
    * partNumber  上传段时每一段的id。  取值范围：[1,10000]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'httpVerb' => 'http_verb',
            'bucket' => 'bucket',
            'objectKey' => 'object_key',
            'contentType' => 'content_type',
            'contentMd5' => 'content_md5',
            'uploadId' => 'upload_id',
            'partNumber' => 'part_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * httpVerb  分段上传时调用OBS接口的HTTP方法，具体操作需要的HTTP方法请参考OBS的接口文档。  - 初始化上传任务：POST - 上传段：PUT - 合并段：POST - 取消段：DELETE - 列举已上传段：GET
    * bucket  桶名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket值。
    * objectKey  对象名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的object值。
    * contentType  文件类型对应的content-type，如MP4对应video/mp4。
    * contentMd5  上传段时每段的MD5。
    * uploadId  每一个上传任务的id，是OBS进行初始段后OBS返回的。
    * partNumber  上传段时每一段的id。  取值范围：[1,10000]。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'httpVerb' => 'setHttpVerb',
            'bucket' => 'setBucket',
            'objectKey' => 'setObjectKey',
            'contentType' => 'setContentType',
            'contentMd5' => 'setContentMd5',
            'uploadId' => 'setUploadId',
            'partNumber' => 'setPartNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * httpVerb  分段上传时调用OBS接口的HTTP方法，具体操作需要的HTTP方法请参考OBS的接口文档。  - 初始化上传任务：POST - 上传段：PUT - 合并段：POST - 取消段：DELETE - 列举已上传段：GET
    * bucket  桶名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket值。
    * objectKey  对象名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的object值。
    * contentType  文件类型对应的content-type，如MP4对应video/mp4。
    * contentMd5  上传段时每段的MD5。
    * uploadId  每一个上传任务的id，是OBS进行初始段后OBS返回的。
    * partNumber  上传段时每一段的id。  取值范围：[1,10000]。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'httpVerb' => 'getHttpVerb',
            'bucket' => 'getBucket',
            'objectKey' => 'getObjectKey',
            'contentType' => 'getContentType',
            'contentMd5' => 'getContentMd5',
            'uploadId' => 'getUploadId',
            'partNumber' => 'getPartNumber'
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['httpVerb'] = isset($data['httpVerb']) ? $data['httpVerb'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['objectKey'] = isset($data['objectKey']) ? $data['objectKey'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['contentMd5'] = isset($data['contentMd5']) ? $data['contentMd5'] : null;
        $this->container['uploadId'] = isset($data['uploadId']) ? $data['uploadId'] : null;
        $this->container['partNumber'] = isset($data['partNumber']) ? $data['partNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['httpVerb'] === null) {
            $invalidProperties[] = "'httpVerb' can't be null";
        }
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
        if ($this->container['objectKey'] === null) {
            $invalidProperties[] = "'objectKey' can't be null";
        }
            if (!is_null($this->container['partNumber']) && ($this->container['partNumber'] > 10000)) {
                $invalidProperties[] = "invalid value for 'partNumber', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['partNumber']) && ($this->container['partNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'partNumber', must be bigger than or equal to 1.";
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
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
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
    * Gets httpVerb
    *  分段上传时调用OBS接口的HTTP方法，具体操作需要的HTTP方法请参考OBS的接口文档。  - 初始化上传任务：POST - 上传段：PUT - 合并段：POST - 取消段：DELETE - 列举已上传段：GET
    *
    * @return string
    */
    public function getHttpVerb()
    {
        return $this->container['httpVerb'];
    }

    /**
    * Sets httpVerb
    *
    * @param string $httpVerb 分段上传时调用OBS接口的HTTP方法，具体操作需要的HTTP方法请参考OBS的接口文档。  - 初始化上传任务：POST - 上传段：PUT - 合并段：POST - 取消段：DELETE - 列举已上传段：GET
    *
    * @return $this
    */
    public function setHttpVerb($httpVerb)
    {
        $this->container['httpVerb'] = $httpVerb;
        return $this;
    }

    /**
    * Gets bucket
    *  桶名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket值。
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket 桶名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket值。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets objectKey
    *  对象名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的object值。
    *
    * @return string
    */
    public function getObjectKey()
    {
        return $this->container['objectKey'];
    }

    /**
    * Sets objectKey
    *
    * @param string $objectKey 对象名。  调用[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的object值。
    *
    * @return $this
    */
    public function setObjectKey($objectKey)
    {
        $this->container['objectKey'] = $objectKey;
        return $this;
    }

    /**
    * Gets contentType
    *  文件类型对应的content-type，如MP4对应video/mp4。
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 文件类型对应的content-type，如MP4对应video/mp4。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets contentMd5
    *  上传段时每段的MD5。
    *
    * @return string|null
    */
    public function getContentMd5()
    {
        return $this->container['contentMd5'];
    }

    /**
    * Sets contentMd5
    *
    * @param string|null $contentMd5 上传段时每段的MD5。
    *
    * @return $this
    */
    public function setContentMd5($contentMd5)
    {
        $this->container['contentMd5'] = $contentMd5;
        return $this;
    }

    /**
    * Gets uploadId
    *  每一个上传任务的id，是OBS进行初始段后OBS返回的。
    *
    * @return string|null
    */
    public function getUploadId()
    {
        return $this->container['uploadId'];
    }

    /**
    * Sets uploadId
    *
    * @param string|null $uploadId 每一个上传任务的id，是OBS进行初始段后OBS返回的。
    *
    * @return $this
    */
    public function setUploadId($uploadId)
    {
        $this->container['uploadId'] = $uploadId;
        return $this;
    }

    /**
    * Gets partNumber
    *  上传段时每一段的id。  取值范围：[1,10000]。
    *
    * @return int|null
    */
    public function getPartNumber()
    {
        return $this->container['partNumber'];
    }

    /**
    * Sets partNumber
    *
    * @param int|null $partNumber 上传段时每一段的id。  取值范围：[1,10000]。
    *
    * @return $this
    */
    public function setPartNumber($partNumber)
    {
        $this->container['partNumber'] = $partNumber;
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

