<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordIndexRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordIndexRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  推流域名
    * app  app名
    * stream  流名
    * startTime  开始时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。
    * endTime  结束时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。结束时间不允许大于当前时间。
    * object  \"m3u8文件在OBS中的储存路径。支持下列字符串的转义   - {publish_domain}   - {app}   - {stream}   - {start_time}   - {end_time} 其中{start_time},{end_time}为返回结果的实际时间。 默认值为Index/{publish_domain}/{app}/{stream}/{stream}-{start_time}-{end_time}\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'object' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  推流域名
    * app  app名
    * stream  流名
    * startTime  开始时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。
    * endTime  结束时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。结束时间不允许大于当前时间。
    * object  \"m3u8文件在OBS中的储存路径。支持下列字符串的转义   - {publish_domain}   - {app}   - {stream}   - {start_time}   - {end_time} 其中{start_time},{end_time}为返回结果的实际时间。 默认值为Index/{publish_domain}/{app}/{stream}/{stream}-{start_time}-{end_time}\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => 'url',
        'app' => null,
        'stream' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'object' => null
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
    * publishDomain  推流域名
    * app  app名
    * stream  流名
    * startTime  开始时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。
    * endTime  结束时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。结束时间不允许大于当前时间。
    * object  \"m3u8文件在OBS中的储存路径。支持下列字符串的转义   - {publish_domain}   - {app}   - {stream}   - {start_time}   - {end_time} 其中{start_time},{end_time}为返回结果的实际时间。 默认值为Index/{publish_domain}/{app}/{stream}/{stream}-{start_time}-{end_time}\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'stream' => 'stream',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'object' => 'object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  推流域名
    * app  app名
    * stream  流名
    * startTime  开始时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。
    * endTime  结束时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。结束时间不允许大于当前时间。
    * object  \"m3u8文件在OBS中的储存路径。支持下列字符串的转义   - {publish_domain}   - {app}   - {stream}   - {start_time}   - {end_time} 其中{start_time},{end_time}为返回结果的实际时间。 默认值为Index/{publish_domain}/{app}/{stream}/{stream}-{start_time}-{end_time}\"
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'object' => 'setObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  推流域名
    * app  app名
    * stream  流名
    * startTime  开始时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。
    * endTime  结束时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。结束时间不允许大于当前时间。
    * object  \"m3u8文件在OBS中的储存路径。支持下列字符串的转义   - {publish_domain}   - {app}   - {stream}   - {start_time}   - {end_time} 其中{start_time},{end_time}为返回结果的实际时间。 默认值为Index/{publish_domain}/{app}/{stream}/{stream}-{start_time}-{end_time}\"
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'object' => 'getObject'
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publishDomain'] === null) {
            $invalidProperties[] = "'publishDomain' can't be null";
        }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['stream'] === null) {
            $invalidProperties[] = "'stream' can't be null";
        }
            if ((mb_strlen($this->container['stream']) > 128)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets publishDomain
    *  推流域名
    *
    * @return string
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string $publishDomain 推流域名
    *
    * @return $this
    */
    public function setPublishDomain($publishDomain)
    {
        $this->container['publishDomain'] = $publishDomain;
        return $this;
    }

    /**
    * Gets app
    *  app名
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
    * @param string $app app名
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets stream
    *  流名
    *
    * @return string
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string $stream 流名
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。
    *
    * @return \DateTime
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime $startTime 开始时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。
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
    *  结束时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。结束时间不允许大于当前时间。
    *
    * @return \DateTime
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime $endTime 结束时间。格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间），开始时间与结束时间的间隔最大为12小时。结束时间不允许大于当前时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets object
    *  \"m3u8文件在OBS中的储存路径。支持下列字符串的转义   - {publish_domain}   - {app}   - {stream}   - {start_time}   - {end_time} 其中{start_time},{end_time}为返回结果的实际时间。 默认值为Index/{publish_domain}/{app}/{stream}/{stream}-{start_time}-{end_time}\"
    *
    * @return string|null
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string|null $object \"m3u8文件在OBS中的储存路径。支持下列字符串的转义   - {publish_domain}   - {app}   - {stream}   - {start_time}   - {end_time} 其中{start_time},{end_time}为返回结果的实际时间。 默认值为Index/{publish_domain}/{app}/{stream}/{stream}-{start_time}-{end_time}\"
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
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

