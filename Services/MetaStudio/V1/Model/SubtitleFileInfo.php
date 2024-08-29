<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubtitleFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubtitleFileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * jobId  字幕文件生成任务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subtitleFileDownloadUrl' => 'string',
            'subtitleFileUploadUrl' => 'string',
            'subtitleFileState' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * jobId  字幕文件生成任务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subtitleFileDownloadUrl' => null,
        'subtitleFileUploadUrl' => null,
        'subtitleFileState' => null,
        'jobId' => null
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
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * jobId  字幕文件生成任务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subtitleFileDownloadUrl' => 'subtitle_file_download_url',
            'subtitleFileUploadUrl' => 'subtitle_file_upload_url',
            'subtitleFileState' => 'subtitle_file_state',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * jobId  字幕文件生成任务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'subtitleFileDownloadUrl' => 'setSubtitleFileDownloadUrl',
            'subtitleFileUploadUrl' => 'setSubtitleFileUploadUrl',
            'subtitleFileState' => 'setSubtitleFileState',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subtitleFileDownloadUrl  字幕文件下载链接。
    * subtitleFileUploadUrl  字幕文件上传链接。
    * subtitleFileState  字幕文件生成状态。 * GENERATING：字幕文件生成中。 * GENERATE_SUCCEED：字幕文件生成成功。 * GENERATE_FAILED：字幕文件生成失败。
    * jobId  字幕文件生成任务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'subtitleFileDownloadUrl' => 'getSubtitleFileDownloadUrl',
            'subtitleFileUploadUrl' => 'getSubtitleFileUploadUrl',
            'subtitleFileState' => 'getSubtitleFileState',
            'jobId' => 'getJobId'
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
        $this->container['subtitleFileDownloadUrl'] = isset($data['subtitleFileDownloadUrl']) ? $data['subtitleFileDownloadUrl'] : null;
        $this->container['subtitleFileUploadUrl'] = isset($data['subtitleFileUploadUrl']) ? $data['subtitleFileUploadUrl'] : null;
        $this->container['subtitleFileState'] = isset($data['subtitleFileState']) ? $data['subtitleFileState'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            $allowedValues = $this->getSubtitleFileStateAllowableValues();
                if (!is_null($this->container['subtitleFileState']) && !in_array($this->container['subtitleFileState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subtitleFileState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
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
    * Gets jobId
    *  字幕文件生成任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 字幕文件生成任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

