<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CycleSubConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CycleSubConf';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cycleSubConfId  子会议UUID。
    * conferenceId  会议ID。
    * mediaType  会议的媒体类型。 * Voice：语音 * Video：标清视频 * HDVideo：高清视频 * Data：数据
    * startTime  会议起始时间(格式：YYYY-MM-DD HH:MM)。
    * endTime  会议结束时间(格式：YYYY-MM-DD HH:MM)。
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * confConfigInfo  confConfigInfo
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * description  会议描述。长度限制为200个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cycleSubConfId' => 'string',
            'conferenceId' => 'string',
            'mediaType' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'isAutoRecord' => 'int',
            'confConfigInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\CycleSubConfConfigDTO',
            'recordAuthType' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cycleSubConfId  子会议UUID。
    * conferenceId  会议ID。
    * mediaType  会议的媒体类型。 * Voice：语音 * Video：标清视频 * HDVideo：高清视频 * Data：数据
    * startTime  会议起始时间(格式：YYYY-MM-DD HH:MM)。
    * endTime  会议结束时间(格式：YYYY-MM-DD HH:MM)。
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * confConfigInfo  confConfigInfo
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * description  会议描述。长度限制为200个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cycleSubConfId' => null,
        'conferenceId' => null,
        'mediaType' => null,
        'startTime' => null,
        'endTime' => null,
        'isAutoRecord' => 'int32',
        'confConfigInfo' => null,
        'recordAuthType' => 'int32',
        'description' => null
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
    * cycleSubConfId  子会议UUID。
    * conferenceId  会议ID。
    * mediaType  会议的媒体类型。 * Voice：语音 * Video：标清视频 * HDVideo：高清视频 * Data：数据
    * startTime  会议起始时间(格式：YYYY-MM-DD HH:MM)。
    * endTime  会议结束时间(格式：YYYY-MM-DD HH:MM)。
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * confConfigInfo  confConfigInfo
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * description  会议描述。长度限制为200个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cycleSubConfId' => 'cycleSubConfID',
            'conferenceId' => 'conferenceID',
            'mediaType' => 'mediaType',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'isAutoRecord' => 'isAutoRecord',
            'confConfigInfo' => 'confConfigInfo',
            'recordAuthType' => 'recordAuthType',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cycleSubConfId  子会议UUID。
    * conferenceId  会议ID。
    * mediaType  会议的媒体类型。 * Voice：语音 * Video：标清视频 * HDVideo：高清视频 * Data：数据
    * startTime  会议起始时间(格式：YYYY-MM-DD HH:MM)。
    * endTime  会议结束时间(格式：YYYY-MM-DD HH:MM)。
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * confConfigInfo  confConfigInfo
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * description  会议描述。长度限制为200个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'cycleSubConfId' => 'setCycleSubConfId',
            'conferenceId' => 'setConferenceId',
            'mediaType' => 'setMediaType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'isAutoRecord' => 'setIsAutoRecord',
            'confConfigInfo' => 'setConfConfigInfo',
            'recordAuthType' => 'setRecordAuthType',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cycleSubConfId  子会议UUID。
    * conferenceId  会议ID。
    * mediaType  会议的媒体类型。 * Voice：语音 * Video：标清视频 * HDVideo：高清视频 * Data：数据
    * startTime  会议起始时间(格式：YYYY-MM-DD HH:MM)。
    * endTime  会议结束时间(格式：YYYY-MM-DD HH:MM)。
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * confConfigInfo  confConfigInfo
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * description  会议描述。长度限制为200个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'cycleSubConfId' => 'getCycleSubConfId',
            'conferenceId' => 'getConferenceId',
            'mediaType' => 'getMediaType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'isAutoRecord' => 'getIsAutoRecord',
            'confConfigInfo' => 'getConfConfigInfo',
            'recordAuthType' => 'getRecordAuthType',
            'description' => 'getDescription'
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
        $this->container['cycleSubConfId'] = isset($data['cycleSubConfId']) ? $data['cycleSubConfId'] : null;
        $this->container['conferenceId'] = isset($data['conferenceId']) ? $data['conferenceId'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['isAutoRecord'] = isset($data['isAutoRecord']) ? $data['isAutoRecord'] : null;
        $this->container['confConfigInfo'] = isset($data['confConfigInfo']) ? $data['confConfigInfo'] : null;
        $this->container['recordAuthType'] = isset($data['recordAuthType']) ? $data['recordAuthType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cycleSubConfId'] === null) {
            $invalidProperties[] = "'cycleSubConfId' can't be null";
        }
            if ((mb_strlen($this->container['cycleSubConfId']) > 32)) {
                $invalidProperties[] = "invalid value for 'cycleSubConfId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['conferenceId']) && (mb_strlen($this->container['conferenceId']) > 32)) {
                $invalidProperties[] = "invalid value for 'conferenceId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['conferenceId']) && (mb_strlen($this->container['conferenceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'conferenceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAutoRecord']) && ($this->container['isAutoRecord'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoRecord', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoRecord']) && ($this->container['isAutoRecord'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRecord', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordAuthType']) && ($this->container['recordAuthType'] > 2)) {
                $invalidProperties[] = "invalid value for 'recordAuthType', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['recordAuthType']) && ($this->container['recordAuthType'] < 0)) {
                $invalidProperties[] = "invalid value for 'recordAuthType', must be bigger than or equal to 0.";
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
    * Gets cycleSubConfId
    *  子会议UUID。
    *
    * @return string
    */
    public function getCycleSubConfId()
    {
        return $this->container['cycleSubConfId'];
    }

    /**
    * Sets cycleSubConfId
    *
    * @param string $cycleSubConfId 子会议UUID。
    *
    * @return $this
    */
    public function setCycleSubConfId($cycleSubConfId)
    {
        $this->container['cycleSubConfId'] = $cycleSubConfId;
        return $this;
    }

    /**
    * Gets conferenceId
    *  会议ID。
    *
    * @return string|null
    */
    public function getConferenceId()
    {
        return $this->container['conferenceId'];
    }

    /**
    * Sets conferenceId
    *
    * @param string|null $conferenceId 会议ID。
    *
    * @return $this
    */
    public function setConferenceId($conferenceId)
    {
        $this->container['conferenceId'] = $conferenceId;
        return $this;
    }

    /**
    * Gets mediaType
    *  会议的媒体类型。 * Voice：语音 * Video：标清视频 * HDVideo：高清视频 * Data：数据
    *
    * @return string|null
    */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
    * Sets mediaType
    *
    * @param string|null $mediaType 会议的媒体类型。 * Voice：语音 * Video：标清视频 * HDVideo：高清视频 * Data：数据
    *
    * @return $this
    */
    public function setMediaType($mediaType)
    {
        $this->container['mediaType'] = $mediaType;
        return $this;
    }

    /**
    * Gets startTime
    *  会议起始时间(格式：YYYY-MM-DD HH:MM)。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 会议起始时间(格式：YYYY-MM-DD HH:MM)。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  会议结束时间(格式：YYYY-MM-DD HH:MM)。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 会议结束时间(格式：YYYY-MM-DD HH:MM)。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets isAutoRecord
    *  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    *
    * @return int|null
    */
    public function getIsAutoRecord()
    {
        return $this->container['isAutoRecord'];
    }

    /**
    * Sets isAutoRecord
    *
    * @param int|null $isAutoRecord 是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    *
    * @return $this
    */
    public function setIsAutoRecord($isAutoRecord)
    {
        $this->container['isAutoRecord'] = $isAutoRecord;
        return $this;
    }

    /**
    * Gets confConfigInfo
    *  confConfigInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\CycleSubConfConfigDTO|null
    */
    public function getConfConfigInfo()
    {
        return $this->container['confConfigInfo'];
    }

    /**
    * Sets confConfigInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\CycleSubConfConfigDTO|null $confConfigInfo confConfigInfo
    *
    * @return $this
    */
    public function setConfConfigInfo($confConfigInfo)
    {
        $this->container['confConfigInfo'] = $confConfigInfo;
        return $this;
    }

    /**
    * Gets recordAuthType
    *  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @return int|null
    */
    public function getRecordAuthType()
    {
        return $this->container['recordAuthType'];
    }

    /**
    * Sets recordAuthType
    *
    * @param int|null $recordAuthType 观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @return $this
    */
    public function setRecordAuthType($recordAuthType)
    {
        $this->container['recordAuthType'] = $recordAuthType;
        return $this;
    }

    /**
    * Gets description
    *  会议描述。长度限制为200个字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 会议描述。长度限制为200个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

