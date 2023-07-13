<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID。
    * assetStatus  媒资状态。 - \"CREATING\"：上传中 - \"FAILED\"：上传失败 - \"CREATED\"：上传成功 - \"PUBLISHED\"：已发布 - \"DELETED\"：已删除
    * transcodeStatus  转码状态。 - \"UN_TRANSCODE\"：未转码 - \"WAITING_TRANSCODE\"：等待转码，排队中 - \"TRANSCODING\"：转码中 - \"TRANSCODE_SUCCEED\"：转码成功 - \"TRANSCODE_FAILED\"：转码失败
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'assetStatus' => 'string',
            'transcodeStatus' => 'string',
            'baseInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\BaseInfo',
            'transcodeInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID。
    * assetStatus  媒资状态。 - \"CREATING\"：上传中 - \"FAILED\"：上传失败 - \"CREATED\"：上传成功 - \"PUBLISHED\"：已发布 - \"DELETED\"：已删除
    * transcodeStatus  转码状态。 - \"UN_TRANSCODE\"：未转码 - \"WAITING_TRANSCODE\"：等待转码，排队中 - \"TRANSCODING\"：转码中 - \"TRANSCODE_SUCCEED\"：转码成功 - \"TRANSCODE_FAILED\"：转码失败
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'assetStatus' => null,
        'transcodeStatus' => null,
        'baseInfo' => null,
        'transcodeInfo' => null
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
    * assetId  媒资ID。
    * assetStatus  媒资状态。 - \"CREATING\"：上传中 - \"FAILED\"：上传失败 - \"CREATED\"：上传成功 - \"PUBLISHED\"：已发布 - \"DELETED\"：已删除
    * transcodeStatus  转码状态。 - \"UN_TRANSCODE\"：未转码 - \"WAITING_TRANSCODE\"：等待转码，排队中 - \"TRANSCODING\"：转码中 - \"TRANSCODE_SUCCEED\"：转码成功 - \"TRANSCODE_FAILED\"：转码失败
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'assetStatus' => 'asset_status',
            'transcodeStatus' => 'transcode_status',
            'baseInfo' => 'base_info',
            'transcodeInfo' => 'transcode_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID。
    * assetStatus  媒资状态。 - \"CREATING\"：上传中 - \"FAILED\"：上传失败 - \"CREATED\"：上传成功 - \"PUBLISHED\"：已发布 - \"DELETED\"：已删除
    * transcodeStatus  转码状态。 - \"UN_TRANSCODE\"：未转码 - \"WAITING_TRANSCODE\"：等待转码，排队中 - \"TRANSCODING\"：转码中 - \"TRANSCODE_SUCCEED\"：转码成功 - \"TRANSCODE_FAILED\"：转码失败
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'assetStatus' => 'setAssetStatus',
            'transcodeStatus' => 'setTranscodeStatus',
            'baseInfo' => 'setBaseInfo',
            'transcodeInfo' => 'setTranscodeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID。
    * assetStatus  媒资状态。 - \"CREATING\"：上传中 - \"FAILED\"：上传失败 - \"CREATED\"：上传成功 - \"PUBLISHED\"：已发布 - \"DELETED\"：已删除
    * transcodeStatus  转码状态。 - \"UN_TRANSCODE\"：未转码 - \"WAITING_TRANSCODE\"：等待转码，排队中 - \"TRANSCODING\"：转码中 - \"TRANSCODE_SUCCEED\"：转码成功 - \"TRANSCODE_FAILED\"：转码失败
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'assetStatus' => 'getAssetStatus',
            'transcodeStatus' => 'getTranscodeStatus',
            'baseInfo' => 'getBaseInfo',
            'transcodeInfo' => 'getTranscodeInfo'
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
    const ASSET_STATUS_CREATING = 'CREATING';
    const ASSET_STATUS_FAILED = 'FAILED';
    const ASSET_STATUS_CREATED = 'CREATED';
    const ASSET_STATUS_PUBLISHED = 'PUBLISHED';
    const ASSET_STATUS_DELETED = 'DELETED';
    const TRANSCODE_STATUS_UN_TRANSCODE = 'UN_TRANSCODE';
    const TRANSCODE_STATUS_WAITING_TRANSCODE = 'WAITING_TRANSCODE';
    const TRANSCODE_STATUS_TRANSCODING = 'TRANSCODING';
    const TRANSCODE_STATUS_TRANSCODE_SUCCEED = 'TRANSCODE_SUCCEED';
    const TRANSCODE_STATUS_TRANSCODE_FAILED = 'TRANSCODE_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetStatusAllowableValues()
    {
        return [
            self::ASSET_STATUS_CREATING,
            self::ASSET_STATUS_FAILED,
            self::ASSET_STATUS_CREATED,
            self::ASSET_STATUS_PUBLISHED,
            self::ASSET_STATUS_DELETED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTranscodeStatusAllowableValues()
    {
        return [
            self::TRANSCODE_STATUS_UN_TRANSCODE,
            self::TRANSCODE_STATUS_WAITING_TRANSCODE,
            self::TRANSCODE_STATUS_TRANSCODING,
            self::TRANSCODE_STATUS_TRANSCODE_SUCCEED,
            self::TRANSCODE_STATUS_TRANSCODE_FAILED,
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetStatus'] = isset($data['assetStatus']) ? $data['assetStatus'] : null;
        $this->container['transcodeStatus'] = isset($data['transcodeStatus']) ? $data['transcodeStatus'] : null;
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['transcodeInfo'] = isset($data['transcodeInfo']) ? $data['transcodeInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
            $allowedValues = $this->getAssetStatusAllowableValues();
                if (!is_null($this->container['assetStatus']) && !in_array($this->container['assetStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTranscodeStatusAllowableValues();
                if (!is_null($this->container['transcodeStatus']) && !in_array($this->container['transcodeStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transcodeStatus', must be one of '%s'",
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
    * Gets assetId
    *  媒资ID。
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId 媒资ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetStatus
    *  媒资状态。 - \"CREATING\"：上传中 - \"FAILED\"：上传失败 - \"CREATED\"：上传成功 - \"PUBLISHED\"：已发布 - \"DELETED\"：已删除
    *
    * @return string|null
    */
    public function getAssetStatus()
    {
        return $this->container['assetStatus'];
    }

    /**
    * Sets assetStatus
    *
    * @param string|null $assetStatus 媒资状态。 - \"CREATING\"：上传中 - \"FAILED\"：上传失败 - \"CREATED\"：上传成功 - \"PUBLISHED\"：已发布 - \"DELETED\"：已删除
    *
    * @return $this
    */
    public function setAssetStatus($assetStatus)
    {
        $this->container['assetStatus'] = $assetStatus;
        return $this;
    }

    /**
    * Gets transcodeStatus
    *  转码状态。 - \"UN_TRANSCODE\"：未转码 - \"WAITING_TRANSCODE\"：等待转码，排队中 - \"TRANSCODING\"：转码中 - \"TRANSCODE_SUCCEED\"：转码成功 - \"TRANSCODE_FAILED\"：转码失败
    *
    * @return string|null
    */
    public function getTranscodeStatus()
    {
        return $this->container['transcodeStatus'];
    }

    /**
    * Sets transcodeStatus
    *
    * @param string|null $transcodeStatus 转码状态。 - \"UN_TRANSCODE\"：未转码 - \"WAITING_TRANSCODE\"：等待转码，排队中 - \"TRANSCODING\"：转码中 - \"TRANSCODE_SUCCEED\"：转码成功 - \"TRANSCODE_FAILED\"：转码失败
    *
    * @return $this
    */
    public function setTranscodeStatus($transcodeStatus)
    {
        $this->container['transcodeStatus'] = $transcodeStatus;
        return $this;
    }

    /**
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\BaseInfo|null
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\BaseInfo|null $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets transcodeInfo
    *  transcodeInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfo|null
    */
    public function getTranscodeInfo()
    {
        return $this->container['transcodeInfo'];
    }

    /**
    * Sets transcodeInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfo|null $transcodeInfo transcodeInfo
    *
    * @return $this
    */
    public function setTranscodeInfo($transcodeInfo)
    {
        $this->container['transcodeInfo'] = $transcodeInfo;
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

