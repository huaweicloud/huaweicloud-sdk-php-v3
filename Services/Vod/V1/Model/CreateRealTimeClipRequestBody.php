<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRealTimeClipRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRealTimeClipRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeshiftDomain  时移域名
    * app  live的应用名，默认可填写live
    * stream  截取的流名
    * transTemplateName  直播时移的转码模板，空表示截取源流
    * startTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * endTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * isPersistence  0 非固化，1 固化。默认非固化
    * outputBucket  非固化场景为空，固化场景必填，复制到该桶中。
    * outputObject  截取指定的m3u8文件路径名，仅支持HLS
    * mediaProcessTask  mediaProcessTask
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeshiftDomain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'transTemplateName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'isPersistence' => 'int',
            'outputBucket' => 'string',
            'outputObject' => 'string',
            'mediaProcessTask' => '\HuaweiCloud\SDK\Vod\V1\Model\AdditionalObjectProcessReq',
            'callbackUrl' => 'string',
            'sessionContext' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeshiftDomain  时移域名
    * app  live的应用名，默认可填写live
    * stream  截取的流名
    * transTemplateName  直播时移的转码模板，空表示截取源流
    * startTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * endTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * isPersistence  0 非固化，1 固化。默认非固化
    * outputBucket  非固化场景为空，固化场景必填，复制到该桶中。
    * outputObject  截取指定的m3u8文件路径名，仅支持HLS
    * mediaProcessTask  mediaProcessTask
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeshiftDomain' => null,
        'app' => null,
        'stream' => null,
        'transTemplateName' => null,
        'startTime' => null,
        'endTime' => null,
        'isPersistence' => null,
        'outputBucket' => null,
        'outputObject' => null,
        'mediaProcessTask' => null,
        'callbackUrl' => null,
        'sessionContext' => null
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
    * timeshiftDomain  时移域名
    * app  live的应用名，默认可填写live
    * stream  截取的流名
    * transTemplateName  直播时移的转码模板，空表示截取源流
    * startTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * endTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * isPersistence  0 非固化，1 固化。默认非固化
    * outputBucket  非固化场景为空，固化场景必填，复制到该桶中。
    * outputObject  截取指定的m3u8文件路径名，仅支持HLS
    * mediaProcessTask  mediaProcessTask
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeshiftDomain' => 'timeshift_domain',
            'app' => 'app',
            'stream' => 'stream',
            'transTemplateName' => 'trans_template_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'isPersistence' => 'is_persistence',
            'outputBucket' => 'output_bucket',
            'outputObject' => 'output_object',
            'mediaProcessTask' => 'media_process_task',
            'callbackUrl' => 'callback_url',
            'sessionContext' => 'session_context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeshiftDomain  时移域名
    * app  live的应用名，默认可填写live
    * stream  截取的流名
    * transTemplateName  直播时移的转码模板，空表示截取源流
    * startTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * endTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * isPersistence  0 非固化，1 固化。默认非固化
    * outputBucket  非固化场景为空，固化场景必填，复制到该桶中。
    * outputObject  截取指定的m3u8文件路径名，仅支持HLS
    * mediaProcessTask  mediaProcessTask
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $setters = [
            'timeshiftDomain' => 'setTimeshiftDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'transTemplateName' => 'setTransTemplateName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'isPersistence' => 'setIsPersistence',
            'outputBucket' => 'setOutputBucket',
            'outputObject' => 'setOutputObject',
            'mediaProcessTask' => 'setMediaProcessTask',
            'callbackUrl' => 'setCallbackUrl',
            'sessionContext' => 'setSessionContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeshiftDomain  时移域名
    * app  live的应用名，默认可填写live
    * stream  截取的流名
    * transTemplateName  直播时移的转码模板，空表示截取源流
    * startTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * endTime  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    * isPersistence  0 非固化，1 固化。默认非固化
    * outputBucket  非固化场景为空，固化场景必填，复制到该桶中。
    * outputObject  截取指定的m3u8文件路径名，仅支持HLS
    * mediaProcessTask  mediaProcessTask
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $getters = [
            'timeshiftDomain' => 'getTimeshiftDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'transTemplateName' => 'getTransTemplateName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'isPersistence' => 'getIsPersistence',
            'outputBucket' => 'getOutputBucket',
            'outputObject' => 'getOutputObject',
            'mediaProcessTask' => 'getMediaProcessTask',
            'callbackUrl' => 'getCallbackUrl',
            'sessionContext' => 'getSessionContext'
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
        $this->container['timeshiftDomain'] = isset($data['timeshiftDomain']) ? $data['timeshiftDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['transTemplateName'] = isset($data['transTemplateName']) ? $data['transTemplateName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['isPersistence'] = isset($data['isPersistence']) ? $data['isPersistence'] : null;
        $this->container['outputBucket'] = isset($data['outputBucket']) ? $data['outputBucket'] : null;
        $this->container['outputObject'] = isset($data['outputObject']) ? $data['outputObject'] : null;
        $this->container['mediaProcessTask'] = isset($data['mediaProcessTask']) ? $data['mediaProcessTask'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['sessionContext'] = isset($data['sessionContext']) ? $data['sessionContext'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timeshiftDomain']) && (mb_strlen($this->container['timeshiftDomain']) > 128)) {
                $invalidProperties[] = "invalid value for 'timeshiftDomain', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['timeshiftDomain']) && (mb_strlen($this->container['timeshiftDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeshiftDomain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
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
            if (!is_null($this->container['transTemplateName']) && (mb_strlen($this->container['transTemplateName']) > 128)) {
                $invalidProperties[] = "invalid value for 'transTemplateName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['transTemplateName']) && (mb_strlen($this->container['transTemplateName']) < 0)) {
                $invalidProperties[] = "invalid value for 'transTemplateName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isPersistence']) && ($this->container['isPersistence'] > 1)) {
                $invalidProperties[] = "invalid value for 'isPersistence', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isPersistence']) && ($this->container['isPersistence'] < 0)) {
                $invalidProperties[] = "invalid value for 'isPersistence', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputBucket']) && (mb_strlen($this->container['outputBucket']) > 63)) {
                $invalidProperties[] = "invalid value for 'outputBucket', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['outputBucket']) && (mb_strlen($this->container['outputBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputBucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputObject']) && (mb_strlen($this->container['outputObject']) > 1023)) {
                $invalidProperties[] = "invalid value for 'outputObject', the character length must be smaller than or equal to 1023.";
            }
            if (!is_null($this->container['outputObject']) && (mb_strlen($this->container['outputObject']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputObject', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) < 0)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be bigger than or equal to 0.";
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
    * Gets timeshiftDomain
    *  时移域名
    *
    * @return string|null
    */
    public function getTimeshiftDomain()
    {
        return $this->container['timeshiftDomain'];
    }

    /**
    * Sets timeshiftDomain
    *
    * @param string|null $timeshiftDomain 时移域名
    *
    * @return $this
    */
    public function setTimeshiftDomain($timeshiftDomain)
    {
        $this->container['timeshiftDomain'] = $timeshiftDomain;
        return $this;
    }

    /**
    * Gets app
    *  live的应用名，默认可填写live
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app live的应用名，默认可填写live
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
    *  截取的流名
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
    * @param string $stream 截取的流名
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets transTemplateName
    *  直播时移的转码模板，空表示截取源流
    *
    * @return string|null
    */
    public function getTransTemplateName()
    {
        return $this->container['transTemplateName'];
    }

    /**
    * Sets transTemplateName
    *
    * @param string|null $transTemplateName 直播时移的转码模板，空表示截取源流
    *
    * @return $this
    */
    public function setTransTemplateName($transTemplateName)
    {
        $this->container['transTemplateName'] = $transTemplateName;
        return $this;
    }

    /**
    * Gets startTime
    *  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
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
    *  截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 截取流的开始时间，格式为：YYYY-MM-DDTHH:mm:ssZ（UTC时间）,开始时间与结束时间的间隔最大为12小时
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets isPersistence
    *  0 非固化，1 固化。默认非固化
    *
    * @return int|null
    */
    public function getIsPersistence()
    {
        return $this->container['isPersistence'];
    }

    /**
    * Sets isPersistence
    *
    * @param int|null $isPersistence 0 非固化，1 固化。默认非固化
    *
    * @return $this
    */
    public function setIsPersistence($isPersistence)
    {
        $this->container['isPersistence'] = $isPersistence;
        return $this;
    }

    /**
    * Gets outputBucket
    *  非固化场景为空，固化场景必填，复制到该桶中。
    *
    * @return string|null
    */
    public function getOutputBucket()
    {
        return $this->container['outputBucket'];
    }

    /**
    * Sets outputBucket
    *
    * @param string|null $outputBucket 非固化场景为空，固化场景必填，复制到该桶中。
    *
    * @return $this
    */
    public function setOutputBucket($outputBucket)
    {
        $this->container['outputBucket'] = $outputBucket;
        return $this;
    }

    /**
    * Gets outputObject
    *  截取指定的m3u8文件路径名，仅支持HLS
    *
    * @return string|null
    */
    public function getOutputObject()
    {
        return $this->container['outputObject'];
    }

    /**
    * Sets outputObject
    *
    * @param string|null $outputObject 截取指定的m3u8文件路径名，仅支持HLS
    *
    * @return $this
    */
    public function setOutputObject($outputObject)
    {
        $this->container['outputObject'] = $outputObject;
        return $this;
    }

    /**
    * Gets mediaProcessTask
    *  mediaProcessTask
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\AdditionalObjectProcessReq|null
    */
    public function getMediaProcessTask()
    {
        return $this->container['mediaProcessTask'];
    }

    /**
    * Sets mediaProcessTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\AdditionalObjectProcessReq|null $mediaProcessTask mediaProcessTask
    *
    * @return $this
    */
    public function setMediaProcessTask($mediaProcessTask)
    {
        $this->container['mediaProcessTask'] = $mediaProcessTask;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  回调地址，为空则不回调
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 回调地址，为空则不回调
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets sessionContext
    *  自定义上下文，回调时会回调给用户，透传信息
    *
    * @return string|null
    */
    public function getSessionContext()
    {
        return $this->container['sessionContext'];
    }

    /**
    * Sets sessionContext
    *
    * @param string|null $sessionContext 自定义上下文，回调时会回调给用户，透传信息
    *
    * @return $this
    */
    public function setSessionContext($sessionContext)
    {
        $this->container['sessionContext'] = $sessionContext;
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

