<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubtitleFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubtitleFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobState  字幕文件所有任务状态。 * GENERATING：字幕文件任务生成中。 * GENERATED：字幕文件生成结束。
    * subtitleFileInfo  字幕文件列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobState' => 'string',
            'subtitleFileInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SubtitleFileDetail[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobState  字幕文件所有任务状态。 * GENERATING：字幕文件任务生成中。 * GENERATED：字幕文件生成结束。
    * subtitleFileInfo  字幕文件列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobState' => null,
        'subtitleFileInfo' => null,
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
    * jobState  字幕文件所有任务状态。 * GENERATING：字幕文件任务生成中。 * GENERATED：字幕文件生成结束。
    * subtitleFileInfo  字幕文件列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobState' => 'job_state',
            'subtitleFileInfo' => 'subtitle_file_info',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobState  字幕文件所有任务状态。 * GENERATING：字幕文件任务生成中。 * GENERATED：字幕文件生成结束。
    * subtitleFileInfo  字幕文件列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobState' => 'setJobState',
            'subtitleFileInfo' => 'setSubtitleFileInfo',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobState  字幕文件所有任务状态。 * GENERATING：字幕文件任务生成中。 * GENERATED：字幕文件生成结束。
    * subtitleFileInfo  字幕文件列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobState' => 'getJobState',
            'subtitleFileInfo' => 'getSubtitleFileInfo',
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
        $this->container['jobState'] = isset($data['jobState']) ? $data['jobState'] : null;
        $this->container['subtitleFileInfo'] = isset($data['subtitleFileInfo']) ? $data['subtitleFileInfo'] : null;
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
            if (!is_null($this->container['jobState']) && (mb_strlen($this->container['jobState']) > 2048)) {
                $invalidProperties[] = "invalid value for 'jobState', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['jobState']) && (mb_strlen($this->container['jobState']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobState', the character length must be bigger than or equal to 1.";
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
    * Gets jobState
    *  字幕文件所有任务状态。 * GENERATING：字幕文件任务生成中。 * GENERATED：字幕文件生成结束。
    *
    * @return string|null
    */
    public function getJobState()
    {
        return $this->container['jobState'];
    }

    /**
    * Sets jobState
    *
    * @param string|null $jobState 字幕文件所有任务状态。 * GENERATING：字幕文件任务生成中。 * GENERATED：字幕文件生成结束。
    *
    * @return $this
    */
    public function setJobState($jobState)
    {
        $this->container['jobState'] = $jobState;
        return $this;
    }

    /**
    * Gets subtitleFileInfo
    *  字幕文件列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SubtitleFileDetail[]|null
    */
    public function getSubtitleFileInfo()
    {
        return $this->container['subtitleFileInfo'];
    }

    /**
    * Sets subtitleFileInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SubtitleFileDetail[]|null $subtitleFileInfo 字幕文件列表。
    *
    * @return $this
    */
    public function setSubtitleFileInfo($subtitleFileInfo)
    {
        $this->container['subtitleFileInfo'] = $subtitleFileInfo;
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

