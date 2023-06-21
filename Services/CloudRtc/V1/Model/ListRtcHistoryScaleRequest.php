<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRtcHistoryScaleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRtcHistoryScaleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * metric  查询的数据类型 - UserCount：通话人数，不同频道中的相同用户ID计为多人; - SessionCount：通话人次，用户每次加入频道计为一个通话人次; - RoomCount：房间数，从有用户加入房间到所有用户离开房间计为一个通话房间; - MaxOnlineUserCount：最大同时在线人数; - MaxOnlineRoomCount：最大同时在线房间数; - CommunicationDuration：音视频通话总时长; - VideoCommunicationDuration：视频通话总时长; - AudioCommunicationDuration：音频通话总时长;
    * startDate  查询起始时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23，不写默认读取过去1天数据数据。
    * endDate  查询结束时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xProjectId' => 'string',
            'app' => 'string',
            'metric' => 'string[]',
            'startDate' => 'string',
            'endDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * metric  查询的数据类型 - UserCount：通话人数，不同频道中的相同用户ID计为多人; - SessionCount：通话人次，用户每次加入频道计为一个通话人次; - RoomCount：房间数，从有用户加入房间到所有用户离开房间计为一个通话房间; - MaxOnlineUserCount：最大同时在线人数; - MaxOnlineRoomCount：最大同时在线房间数; - CommunicationDuration：音视频通话总时长; - VideoCommunicationDuration：视频通话总时长; - AudioCommunicationDuration：音频通话总时长;
    * startDate  查询起始时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23，不写默认读取过去1天数据数据。
    * endDate  查询结束时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'xProjectId' => null,
        'app' => null,
        'metric' => null,
        'startDate' => null,
        'endDate' => null
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
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * metric  查询的数据类型 - UserCount：通话人数，不同频道中的相同用户ID计为多人; - SessionCount：通话人次，用户每次加入频道计为一个通话人次; - RoomCount：房间数，从有用户加入房间到所有用户离开房间计为一个通话房间; - MaxOnlineUserCount：最大同时在线人数; - MaxOnlineRoomCount：最大同时在线房间数; - CommunicationDuration：音视频通话总时长; - VideoCommunicationDuration：视频通话总时长; - AudioCommunicationDuration：音频通话总时长;
    * startDate  查询起始时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23，不写默认读取过去1天数据数据。
    * endDate  查询结束时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xProjectId' => 'X-Project-Id',
            'app' => 'app',
            'metric' => 'metric',
            'startDate' => 'start_date',
            'endDate' => 'end_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * metric  查询的数据类型 - UserCount：通话人数，不同频道中的相同用户ID计为多人; - SessionCount：通话人次，用户每次加入频道计为一个通话人次; - RoomCount：房间数，从有用户加入房间到所有用户离开房间计为一个通话房间; - MaxOnlineUserCount：最大同时在线人数; - MaxOnlineRoomCount：最大同时在线房间数; - CommunicationDuration：音视频通话总时长; - VideoCommunicationDuration：视频通话总时长; - AudioCommunicationDuration：音频通话总时长;
    * startDate  查询起始时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23，不写默认读取过去1天数据数据。
    * endDate  查询结束时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xProjectId' => 'setXProjectId',
            'app' => 'setApp',
            'metric' => 'setMetric',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * metric  查询的数据类型 - UserCount：通话人数，不同频道中的相同用户ID计为多人; - SessionCount：通话人次，用户每次加入频道计为一个通话人次; - RoomCount：房间数，从有用户加入房间到所有用户离开房间计为一个通话房间; - MaxOnlineUserCount：最大同时在线人数; - MaxOnlineRoomCount：最大同时在线房间数; - CommunicationDuration：音视频通话总时长; - VideoCommunicationDuration：视频通话总时长; - AudioCommunicationDuration：音频通话总时长;
    * startDate  查询起始时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23，不写默认读取过去1天数据数据。
    * endDate  查询结束时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xProjectId' => 'getXProjectId',
            'app' => 'getApp',
            'metric' => 'getMetric',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate'
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
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
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
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 256)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
            if (!is_null($this->container['startDate']) && (mb_strlen($this->container['startDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'startDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['startDate']) && (mb_strlen($this->container['startDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'startDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endDate']) && (mb_strlen($this->container['endDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'endDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['endDate']) && (mb_strlen($this->container['endDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'endDate', the character length must be bigger than or equal to 1.";
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
    * Gets xProjectId
    *  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets app
    *  应用标识
    *
    * @return string
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string $app 应用标识
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets metric
    *  查询的数据类型 - UserCount：通话人数，不同频道中的相同用户ID计为多人; - SessionCount：通话人次，用户每次加入频道计为一个通话人次; - RoomCount：房间数，从有用户加入房间到所有用户离开房间计为一个通话房间; - MaxOnlineUserCount：最大同时在线人数; - MaxOnlineRoomCount：最大同时在线房间数; - CommunicationDuration：音视频通话总时长; - VideoCommunicationDuration：视频通话总时长; - AudioCommunicationDuration：音频通话总时长;
    *
    * @return string[]
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string[] $metric 查询的数据类型 - UserCount：通话人数，不同频道中的相同用户ID计为多人; - SessionCount：通话人次，用户每次加入频道计为一个通话人次; - RoomCount：房间数，从有用户加入房间到所有用户离开房间计为一个通话房间; - MaxOnlineUserCount：最大同时在线人数; - MaxOnlineRoomCount：最大同时在线房间数; - CommunicationDuration：音视频通话总时长; - VideoCommunicationDuration：视频通话总时长; - AudioCommunicationDuration：音频通话总时长;
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets startDate
    *  查询起始时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23，不写默认读取过去1天数据数据。
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 查询起始时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23，不写默认读取过去1天数据数据。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  查询结束时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23
    *
    * @return string|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string|null $endDate 查询结束时间。UTC时间，格式：YYYY-MM-DD，如2020-04-23
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
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

