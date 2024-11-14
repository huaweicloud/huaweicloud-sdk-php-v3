<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBeautyPreviewJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBeautyPreviewJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  任务的状态。 * WAIT_IMAGE_UPLOAD：待上传美白前图片 * WAITING：等待生成美白预览图 * PROCESSING：美白预览图生成中 * SUCCESS：美白预览图生成成功 * FAILED：美白预览图生成失败
    * postBeautyImageDownloadUrl  美白后图片下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'postBeautyImageDownloadUrl' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  任务的状态。 * WAIT_IMAGE_UPLOAD：待上传美白前图片 * WAITING：等待生成美白预览图 * PROCESSING：美白预览图生成中 * SUCCESS：美白预览图生成成功 * FAILED：美白预览图生成失败
    * postBeautyImageDownloadUrl  美白后图片下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'postBeautyImageDownloadUrl' => null,
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
    * state  任务的状态。 * WAIT_IMAGE_UPLOAD：待上传美白前图片 * WAITING：等待生成美白预览图 * PROCESSING：美白预览图生成中 * SUCCESS：美白预览图生成成功 * FAILED：美白预览图生成失败
    * postBeautyImageDownloadUrl  美白后图片下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'postBeautyImageDownloadUrl' => 'post_beauty_image_download_url',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  任务的状态。 * WAIT_IMAGE_UPLOAD：待上传美白前图片 * WAITING：等待生成美白预览图 * PROCESSING：美白预览图生成中 * SUCCESS：美白预览图生成成功 * FAILED：美白预览图生成失败
    * postBeautyImageDownloadUrl  美白后图片下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'postBeautyImageDownloadUrl' => 'setPostBeautyImageDownloadUrl',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  任务的状态。 * WAIT_IMAGE_UPLOAD：待上传美白前图片 * WAITING：等待生成美白预览图 * PROCESSING：美白预览图生成中 * SUCCESS：美白预览图生成成功 * FAILED：美白预览图生成失败
    * postBeautyImageDownloadUrl  美白后图片下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'postBeautyImageDownloadUrl' => 'getPostBeautyImageDownloadUrl',
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
    const STATE_WAIT_IMAGE_UPLOAD = 'WAIT_IMAGE_UPLOAD';
    const STATE_WAITING = 'WAITING';
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_SUCCESS = 'SUCCESS';
    const STATE_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WAIT_IMAGE_UPLOAD,
            self::STATE_WAITING,
            self::STATE_PROCESSING,
            self::STATE_SUCCESS,
            self::STATE_FAILED,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postBeautyImageDownloadUrl'] = isset($data['postBeautyImageDownloadUrl']) ? $data['postBeautyImageDownloadUrl'] : null;
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
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['postBeautyImageDownloadUrl']) && (mb_strlen($this->container['postBeautyImageDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'postBeautyImageDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['postBeautyImageDownloadUrl']) && (mb_strlen($this->container['postBeautyImageDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'postBeautyImageDownloadUrl', the character length must be bigger than or equal to 1.";
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
    * Gets state
    *  任务的状态。 * WAIT_IMAGE_UPLOAD：待上传美白前图片 * WAITING：等待生成美白预览图 * PROCESSING：美白预览图生成中 * SUCCESS：美白预览图生成成功 * FAILED：美白预览图生成失败
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务的状态。 * WAIT_IMAGE_UPLOAD：待上传美白前图片 * WAITING：等待生成美白预览图 * PROCESSING：美白预览图生成中 * SUCCESS：美白预览图生成成功 * FAILED：美白预览图生成失败
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets postBeautyImageDownloadUrl
    *  美白后图片下载url。
    *
    * @return string|null
    */
    public function getPostBeautyImageDownloadUrl()
    {
        return $this->container['postBeautyImageDownloadUrl'];
    }

    /**
    * Sets postBeautyImageDownloadUrl
    *
    * @param string|null $postBeautyImageDownloadUrl 美白后图片下载url。
    *
    * @return $this
    */
    public function setPostBeautyImageDownloadUrl($postBeautyImageDownloadUrl)
    {
        $this->container['postBeautyImageDownloadUrl'] = $postBeautyImageDownloadUrl;
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

