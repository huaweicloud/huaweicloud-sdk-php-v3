<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOnlineUsersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOnlineUsersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * streamName  流名称
    * startTime  查询开始时间，UTC时间，格式：yyyy-mm-ddThh:mm:ssZ。无开始时间表示查询最近统计周期在线人数数据
    * endTime  查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。  - start_time与end_time均不存在时，服务端从最近一个统计周期的数据里查询。 - start_time存在、end_time不存在时，end_time取当前时间。 - start_time不存在、end_time存在时，请求非法。 - 只能查询最近三个月内的数据，start_time和end_time的跨度不能大于30天。
    * step  统计周期。 单位：分钟
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'streamName' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'step' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * streamName  流名称
    * startTime  查询开始时间，UTC时间，格式：yyyy-mm-ddThh:mm:ssZ。无开始时间表示查询最近统计周期在线人数数据
    * endTime  查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。  - start_time与end_time均不存在时，服务端从最近一个统计周期的数据里查询。 - start_time存在、end_time不存在时，end_time取当前时间。 - start_time不存在、end_time存在时，请求非法。 - 只能查询最近三个月内的数据，start_time和end_time的跨度不能大于30天。
    * step  统计周期。 单位：分钟
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'streamName' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'step' => 'int32'
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
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * streamName  流名称
    * startTime  查询开始时间，UTC时间，格式：yyyy-mm-ddThh:mm:ssZ。无开始时间表示查询最近统计周期在线人数数据
    * endTime  查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。  - start_time与end_time均不存在时，服务端从最近一个统计周期的数据里查询。 - start_time存在、end_time不存在时，end_time取当前时间。 - start_time不存在、end_time存在时，请求非法。 - 只能查询最近三个月内的数据，start_time和end_time的跨度不能大于30天。
    * step  统计周期。 单位：分钟
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'streamName' => 'stream_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'step' => 'step'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * streamName  流名称
    * startTime  查询开始时间，UTC时间，格式：yyyy-mm-ddThh:mm:ssZ。无开始时间表示查询最近统计周期在线人数数据
    * endTime  查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。  - start_time与end_time均不存在时，服务端从最近一个统计周期的数据里查询。 - start_time存在、end_time不存在时，end_time取当前时间。 - start_time不存在、end_time存在时，请求非法。 - 只能查询最近三个月内的数据，start_time和end_time的跨度不能大于30天。
    * step  统计周期。 单位：分钟
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'streamName' => 'setStreamName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'step' => 'setStep'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * streamName  流名称
    * startTime  查询开始时间，UTC时间，格式：yyyy-mm-ddThh:mm:ssZ。无开始时间表示查询最近统计周期在线人数数据
    * endTime  查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。  - start_time与end_time均不存在时，服务端从最近一个统计周期的数据里查询。 - start_time存在、end_time不存在时，end_time取当前时间。 - start_time不存在、end_time存在时，请求非法。 - 只能查询最近三个月内的数据，start_time和end_time的跨度不能大于30天。
    * step  统计周期。 单位：分钟
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'streamName' => 'getStreamName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'step' => 'getStep'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) > 128)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['step']) && ($this->container['step'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'step', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['step']) && ($this->container['step'] < 1)) {
                $invalidProperties[] = "invalid value for 'step', must be bigger than or equal to 1.";
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
    * Gets domain
    *  直播播放域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 直播播放域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets streamName
    *  流名称
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName 流名称
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets startTime
    *  查询开始时间，UTC时间，格式：yyyy-mm-ddThh:mm:ssZ。无开始时间表示查询最近统计周期在线人数数据
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 查询开始时间，UTC时间，格式：yyyy-mm-ddThh:mm:ssZ。无开始时间表示查询最近统计周期在线人数数据
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
    *  查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。  - start_time与end_time均不存在时，服务端从最近一个统计周期的数据里查询。 - start_time存在、end_time不存在时，end_time取当前时间。 - start_time不存在、end_time存在时，请求非法。 - 只能查询最近三个月内的数据，start_time和end_time的跨度不能大于30天。
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。  - start_time与end_time均不存在时，服务端从最近一个统计周期的数据里查询。 - start_time存在、end_time不存在时，end_time取当前时间。 - start_time不存在、end_time存在时，请求非法。 - 只能查询最近三个月内的数据，start_time和end_time的跨度不能大于30天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets step
    *  统计周期。 单位：分钟
    *
    * @return int|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int|null $step 统计周期。 单位：分钟
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
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

