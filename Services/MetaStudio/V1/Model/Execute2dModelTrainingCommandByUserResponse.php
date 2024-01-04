<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Execute2dModelTrainingCommandByUserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Execute2dModelTrainingCommandByUserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commondResult  命令执行结果。 * EXCUTE_SUCCESS: 命令提交成功 * EXCUTE_FAILED: 命令提交失败
    * attachmentUploadUrl  附件上传地址
    * multipartData  训练视频已上传分片信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commondResult' => 'string',
            'attachmentUploadUrl' => 'string[]',
            'multipartData' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\MultipartUploadInfo[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commondResult  命令执行结果。 * EXCUTE_SUCCESS: 命令提交成功 * EXCUTE_FAILED: 命令提交失败
    * attachmentUploadUrl  附件上传地址
    * multipartData  训练视频已上传分片信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commondResult' => null,
        'attachmentUploadUrl' => null,
        'multipartData' => null,
        'xRequestId' => null
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
    * commondResult  命令执行结果。 * EXCUTE_SUCCESS: 命令提交成功 * EXCUTE_FAILED: 命令提交失败
    * attachmentUploadUrl  附件上传地址
    * multipartData  训练视频已上传分片信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commondResult' => 'commond_result',
            'attachmentUploadUrl' => 'attachment_upload_url',
            'multipartData' => 'multipart_data',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commondResult  命令执行结果。 * EXCUTE_SUCCESS: 命令提交成功 * EXCUTE_FAILED: 命令提交失败
    * attachmentUploadUrl  附件上传地址
    * multipartData  训练视频已上传分片信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'commondResult' => 'setCommondResult',
            'attachmentUploadUrl' => 'setAttachmentUploadUrl',
            'multipartData' => 'setMultipartData',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commondResult  命令执行结果。 * EXCUTE_SUCCESS: 命令提交成功 * EXCUTE_FAILED: 命令提交失败
    * attachmentUploadUrl  附件上传地址
    * multipartData  训练视频已上传分片信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'commondResult' => 'getCommondResult',
            'attachmentUploadUrl' => 'getAttachmentUploadUrl',
            'multipartData' => 'getMultipartData',
            'xRequestId' => 'getXRequestId'
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
    const COMMOND_RESULT_EXCUTE_SUCCESS = 'EXCUTE_SUCCESS';
    const COMMOND_RESULT_EXCUTE_FAILED = 'EXCUTE_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommondResultAllowableValues()
    {
        return [
            self::COMMOND_RESULT_EXCUTE_SUCCESS,
            self::COMMOND_RESULT_EXCUTE_FAILED,
        ];
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
        $this->container['commondResult'] = isset($data['commondResult']) ? $data['commondResult'] : null;
        $this->container['attachmentUploadUrl'] = isset($data['attachmentUploadUrl']) ? $data['attachmentUploadUrl'] : null;
        $this->container['multipartData'] = isset($data['multipartData']) ? $data['multipartData'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCommondResultAllowableValues();
                if (!is_null($this->container['commondResult']) && !in_array($this->container['commondResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'commondResult', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets commondResult
    *  命令执行结果。 * EXCUTE_SUCCESS: 命令提交成功 * EXCUTE_FAILED: 命令提交失败
    *
    * @return string|null
    */
    public function getCommondResult()
    {
        return $this->container['commondResult'];
    }

    /**
    * Sets commondResult
    *
    * @param string|null $commondResult 命令执行结果。 * EXCUTE_SUCCESS: 命令提交成功 * EXCUTE_FAILED: 命令提交失败
    *
    * @return $this
    */
    public function setCommondResult($commondResult)
    {
        $this->container['commondResult'] = $commondResult;
        return $this;
    }

    /**
    * Gets attachmentUploadUrl
    *  附件上传地址
    *
    * @return string[]|null
    */
    public function getAttachmentUploadUrl()
    {
        return $this->container['attachmentUploadUrl'];
    }

    /**
    * Sets attachmentUploadUrl
    *
    * @param string[]|null $attachmentUploadUrl 附件上传地址
    *
    * @return $this
    */
    public function setAttachmentUploadUrl($attachmentUploadUrl)
    {
        $this->container['attachmentUploadUrl'] = $attachmentUploadUrl;
        return $this;
    }

    /**
    * Gets multipartData
    *  训练视频已上传分片信息
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\MultipartUploadInfo[]|null
    */
    public function getMultipartData()
    {
        return $this->container['multipartData'];
    }

    /**
    * Sets multipartData
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\MultipartUploadInfo[]|null $multipartData 训练视频已上传分片信息
    *
    * @return $this
    */
    public function setMultipartData($multipartData)
    {
        $this->container['multipartData'] = $multipartData;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

