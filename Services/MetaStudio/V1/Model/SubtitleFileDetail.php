<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubtitleFileDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubtitleFileDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sequenceNo  剧本序号。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * generateTime  字幕文件生成时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sequenceNo' => 'int',
            'subtitleFileState' => 'string',
            'subtitleFileDownloadUrl' => 'string',
            'subtitleFileUploadUrl' => 'string',
            'generateTime' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sequenceNo  剧本序号。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * generateTime  字幕文件生成时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sequenceNo' => 'int32',
        'subtitleFileState' => null,
        'subtitleFileDownloadUrl' => null,
        'subtitleFileUploadUrl' => null,
        'generateTime' => null,
        'errorInfo' => null
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
    * sequenceNo  剧本序号。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * generateTime  字幕文件生成时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sequenceNo' => 'sequence_no',
            'subtitleFileState' => 'subtitle_file_state',
            'subtitleFileDownloadUrl' => 'subtitle_file_download_url',
            'subtitleFileUploadUrl' => 'subtitle_file_upload_url',
            'generateTime' => 'generate_time',
            'errorInfo' => 'error_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sequenceNo  剧本序号。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * generateTime  字幕文件生成时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'sequenceNo' => 'setSequenceNo',
            'subtitleFileState' => 'setSubtitleFileState',
            'subtitleFileDownloadUrl' => 'setSubtitleFileDownloadUrl',
            'subtitleFileUploadUrl' => 'setSubtitleFileUploadUrl',
            'generateTime' => 'setGenerateTime',
            'errorInfo' => 'setErrorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sequenceNo  剧本序号。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * generateTime  字幕文件生成时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'sequenceNo' => 'getSequenceNo',
            'subtitleFileState' => 'getSubtitleFileState',
            'subtitleFileDownloadUrl' => 'getSubtitleFileDownloadUrl',
            'subtitleFileUploadUrl' => 'getSubtitleFileUploadUrl',
            'generateTime' => 'getGenerateTime',
            'errorInfo' => 'getErrorInfo'
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
    const SUBTITLE_FILE_STATE_GENERATE_SUCCEED = 'GENERATE_SUCCEED';
    const SUBTITLE_FILE_STATE_GENERATE_FAILED = 'GENERATE_FAILED';
    const SUBTITLE_FILE_STATE_GENERATING = 'GENERATING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubtitleFileStateAllowableValues()
    {
        return [
            self::SUBTITLE_FILE_STATE_GENERATE_SUCCEED,
            self::SUBTITLE_FILE_STATE_GENERATE_FAILED,
            self::SUBTITLE_FILE_STATE_GENERATING,
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
        $this->container['sequenceNo'] = isset($data['sequenceNo']) ? $data['sequenceNo'] : null;
        $this->container['subtitleFileState'] = isset($data['subtitleFileState']) ? $data['subtitleFileState'] : null;
        $this->container['subtitleFileDownloadUrl'] = isset($data['subtitleFileDownloadUrl']) ? $data['subtitleFileDownloadUrl'] : null;
        $this->container['subtitleFileUploadUrl'] = isset($data['subtitleFileUploadUrl']) ? $data['subtitleFileUploadUrl'] : null;
        $this->container['generateTime'] = isset($data['generateTime']) ? $data['generateTime'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSubtitleFileStateAllowableValues();
                if (!is_null($this->container['subtitleFileState']) && !in_array($this->container['subtitleFileState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subtitleFileState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['subtitleFileDownloadUrl']) && (mb_strlen($this->container['subtitleFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'subtitleFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['subtitleFileDownloadUrl']) && (mb_strlen($this->container['subtitleFileDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'subtitleFileDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subtitleFileUploadUrl']) && (mb_strlen($this->container['subtitleFileUploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'subtitleFileUploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['subtitleFileUploadUrl']) && (mb_strlen($this->container['subtitleFileUploadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'subtitleFileUploadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['generateTime']) && (mb_strlen($this->container['generateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'generateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['generateTime']) && (mb_strlen($this->container['generateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'generateTime', the character length must be bigger than or equal to 20.";
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
    * Gets sequenceNo
    *  剧本序号。
    *
    * @return int|null
    */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
    * Sets sequenceNo
    *
    * @param int|null $sequenceNo 剧本序号。
    *
    * @return $this
    */
    public function setSequenceNo($sequenceNo)
    {
        $this->container['sequenceNo'] = $sequenceNo;
        return $this;
    }

    /**
    * Gets subtitleFileState
    *  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    *
    * @return string|null
    */
    public function getSubtitleFileState()
    {
        return $this->container['subtitleFileState'];
    }

    /**
    * Sets subtitleFileState
    *
    * @param string|null $subtitleFileState 字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    *
    * @return $this
    */
    public function setSubtitleFileState($subtitleFileState)
    {
        $this->container['subtitleFileState'] = $subtitleFileState;
        return $this;
    }

    /**
    * Gets subtitleFileDownloadUrl
    *  字幕文件下载链接。
    *
    * @return string|null
    */
    public function getSubtitleFileDownloadUrl()
    {
        return $this->container['subtitleFileDownloadUrl'];
    }

    /**
    * Sets subtitleFileDownloadUrl
    *
    * @param string|null $subtitleFileDownloadUrl 字幕文件下载链接。
    *
    * @return $this
    */
    public function setSubtitleFileDownloadUrl($subtitleFileDownloadUrl)
    {
        $this->container['subtitleFileDownloadUrl'] = $subtitleFileDownloadUrl;
        return $this;
    }

    /**
    * Gets subtitleFileUploadUrl
    *  字幕文件上传链接。
    *
    * @return string|null
    */
    public function getSubtitleFileUploadUrl()
    {
        return $this->container['subtitleFileUploadUrl'];
    }

    /**
    * Sets subtitleFileUploadUrl
    *
    * @param string|null $subtitleFileUploadUrl 字幕文件上传链接。
    *
    * @return $this
    */
    public function setSubtitleFileUploadUrl($subtitleFileUploadUrl)
    {
        $this->container['subtitleFileUploadUrl'] = $subtitleFileUploadUrl;
        return $this;
    }

    /**
    * Gets generateTime
    *  字幕文件生成时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getGenerateTime()
    {
        return $this->container['generateTime'];
    }

    /**
    * Sets generateTime
    *
    * @param string|null $generateTime 字幕文件生成时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setGenerateTime($generateTime)
    {
        $this->container['generateTime'] = $generateTime;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
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

