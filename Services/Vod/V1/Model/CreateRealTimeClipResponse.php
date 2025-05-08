<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRealTimeClipResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRealTimeClipResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  截取的任务id，回调时会返回该任务id
    * publishDomain  直播推流域名
    * app  应用名
    * stream  录制的流名
    * startTime  录制完成文件对应的启动录制时间，UNIX时间戳
    * endTime  录制完成文件对应的完成录制时间，UNIX时间戳
    * fileUrl  粉丝截取响应的obs地址
    * output  output
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'publishDomain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'fileUrl' => 'string',
            'output' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'metaData' => '\HuaweiCloud\SDK\Vod\V1\Model\ObjectMetaData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  截取的任务id，回调时会返回该任务id
    * publishDomain  直播推流域名
    * app  应用名
    * stream  录制的流名
    * startTime  录制完成文件对应的启动录制时间，UNIX时间戳
    * endTime  录制完成文件对应的完成录制时间，UNIX时间戳
    * fileUrl  粉丝截取响应的obs地址
    * output  output
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'publishDomain' => null,
        'app' => null,
        'stream' => null,
        'startTime' => null,
        'endTime' => null,
        'fileUrl' => null,
        'output' => null,
        'metaData' => null
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
    * taskId  截取的任务id，回调时会返回该任务id
    * publishDomain  直播推流域名
    * app  应用名
    * stream  录制的流名
    * startTime  录制完成文件对应的启动录制时间，UNIX时间戳
    * endTime  录制完成文件对应的完成录制时间，UNIX时间戳
    * fileUrl  粉丝截取响应的obs地址
    * output  output
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'stream' => 'stream',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'fileUrl' => 'file_url',
            'output' => 'output',
            'metaData' => 'meta_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  截取的任务id，回调时会返回该任务id
    * publishDomain  直播推流域名
    * app  应用名
    * stream  录制的流名
    * startTime  录制完成文件对应的启动录制时间，UNIX时间戳
    * endTime  录制完成文件对应的完成录制时间，UNIX时间戳
    * fileUrl  粉丝截取响应的obs地址
    * output  output
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'fileUrl' => 'setFileUrl',
            'output' => 'setOutput',
            'metaData' => 'setMetaData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  截取的任务id，回调时会返回该任务id
    * publishDomain  直播推流域名
    * app  应用名
    * stream  录制的流名
    * startTime  录制完成文件对应的启动录制时间，UNIX时间戳
    * endTime  录制完成文件对应的完成录制时间，UNIX时间戳
    * fileUrl  粉丝截取响应的obs地址
    * output  output
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'fileUrl' => 'getFileUrl',
            'output' => 'getOutput',
            'metaData' => 'getMetaData'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['fileUrl'] = isset($data['fileUrl']) ? $data['fileUrl'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets taskId
    *  截取的任务id，回调时会返回该任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 截取的任务id，回调时会返回该任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets publishDomain
    *  直播推流域名
    *
    * @return string|null
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string|null $publishDomain 直播推流域名
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
    *  应用名
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
    * @param string|null $app 应用名
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
    *  录制的流名
    *
    * @return string|null
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string|null $stream 录制的流名
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
    *  录制完成文件对应的启动录制时间，UNIX时间戳
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 录制完成文件对应的启动录制时间，UNIX时间戳
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
    *  录制完成文件对应的完成录制时间，UNIX时间戳
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 录制完成文件对应的完成录制时间，UNIX时间戳
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets fileUrl
    *  粉丝截取响应的obs地址
    *
    * @return string|null
    */
    public function getFileUrl()
    {
        return $this->container['fileUrl'];
    }

    /**
    * Sets fileUrl
    *
    * @param string|null $fileUrl 粉丝截取响应的obs地址
    *
    * @return $this
    */
    public function setFileUrl($fileUrl)
    {
        $this->container['fileUrl'] = $fileUrl;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObjectMetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObjectMetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
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

