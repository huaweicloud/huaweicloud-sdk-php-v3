<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileExtraMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileExtraMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoTranscodingStatus  视频转码状态。 * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoTranscodingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoTranscodingStatus  视频转码状态。 * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoTranscodingStatus' => null
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
    * videoTranscodingStatus  视频转码状态。 * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoTranscodingStatus' => 'video_transcoding_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoTranscodingStatus  视频转码状态。 * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功
    *
    * @var string[]
    */
    protected static $setters = [
            'videoTranscodingStatus' => 'setVideoTranscodingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoTranscodingStatus  视频转码状态。 * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功
    *
    * @var string[]
    */
    protected static $getters = [
            'videoTranscodingStatus' => 'getVideoTranscodingStatus'
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
    const VIDEO_TRANSCODING_STATUS_WAITING = 'WAITING';
    const VIDEO_TRANSCODING_STATUS_TRANSCODING = 'TRANSCODING';
    const VIDEO_TRANSCODING_STATUS_FAILED = 'FAILED';
    const VIDEO_TRANSCODING_STATUS_SUCCEEDED = 'SUCCEEDED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoTranscodingStatusAllowableValues()
    {
        return [
            self::VIDEO_TRANSCODING_STATUS_WAITING,
            self::VIDEO_TRANSCODING_STATUS_TRANSCODING,
            self::VIDEO_TRANSCODING_STATUS_FAILED,
            self::VIDEO_TRANSCODING_STATUS_SUCCEEDED,
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
        $this->container['videoTranscodingStatus'] = isset($data['videoTranscodingStatus']) ? $data['videoTranscodingStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVideoTranscodingStatusAllowableValues();
                if (!is_null($this->container['videoTranscodingStatus']) && !in_array($this->container['videoTranscodingStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoTranscodingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['videoTranscodingStatus']) && (mb_strlen($this->container['videoTranscodingStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'videoTranscodingStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['videoTranscodingStatus']) && (mb_strlen($this->container['videoTranscodingStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoTranscodingStatus', the character length must be bigger than or equal to 0.";
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
    * Gets videoTranscodingStatus
    *  视频转码状态。 * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功
    *
    * @return string|null
    */
    public function getVideoTranscodingStatus()
    {
        return $this->container['videoTranscodingStatus'];
    }

    /**
    * Sets videoTranscodingStatus
    *
    * @param string|null $videoTranscodingStatus 视频转码状态。 * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功
    *
    * @return $this
    */
    public function setVideoTranscodingStatus($videoTranscodingStatus)
    {
        $this->container['videoTranscodingStatus'] = $videoTranscodingStatus;
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

