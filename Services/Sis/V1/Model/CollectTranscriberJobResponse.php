<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectTranscriberJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectTranscriberJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  录音文件识别任务标识符。  使用“callback_url”回调url时，该字段会随结果发送至用户服务器。 使用get接口查询，不会出现该字段
    * status  当前识别状态。具体状态如下所示：  WAITING 等待识别。 FINISHED 识别已经完成。 ERROR 识别过程中发生错误。
    * createTime  任务创建时间, 遵循 RFC 3339格式。 格式示例：2018-12-04T13:10:29.310Z。
    * startTime  开始识别时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * finishTime  识别完成时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * segments  转写结果, 多句结果的数组。
    * audioDuration  音频时长，单位ms
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'segments' => '\HuaweiCloud\SDK\Sis\V1\Model\Segment[]',
            'audioDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  录音文件识别任务标识符。  使用“callback_url”回调url时，该字段会随结果发送至用户服务器。 使用get接口查询，不会出现该字段
    * status  当前识别状态。具体状态如下所示：  WAITING 等待识别。 FINISHED 识别已经完成。 ERROR 识别过程中发生错误。
    * createTime  任务创建时间, 遵循 RFC 3339格式。 格式示例：2018-12-04T13:10:29.310Z。
    * startTime  开始识别时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * finishTime  识别完成时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * segments  转写结果, 多句结果的数组。
    * audioDuration  音频时长，单位ms
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'status' => null,
        'createTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'segments' => null,
        'audioDuration' => 'int32'
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
    * jobId  录音文件识别任务标识符。  使用“callback_url”回调url时，该字段会随结果发送至用户服务器。 使用get接口查询，不会出现该字段
    * status  当前识别状态。具体状态如下所示：  WAITING 等待识别。 FINISHED 识别已经完成。 ERROR 识别过程中发生错误。
    * createTime  任务创建时间, 遵循 RFC 3339格式。 格式示例：2018-12-04T13:10:29.310Z。
    * startTime  开始识别时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * finishTime  识别完成时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * segments  转写结果, 多句结果的数组。
    * audioDuration  音频时长，单位ms
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'segments' => 'segments',
            'audioDuration' => 'audio_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  录音文件识别任务标识符。  使用“callback_url”回调url时，该字段会随结果发送至用户服务器。 使用get接口查询，不会出现该字段
    * status  当前识别状态。具体状态如下所示：  WAITING 等待识别。 FINISHED 识别已经完成。 ERROR 识别过程中发生错误。
    * createTime  任务创建时间, 遵循 RFC 3339格式。 格式示例：2018-12-04T13:10:29.310Z。
    * startTime  开始识别时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * finishTime  识别完成时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * segments  转写结果, 多句结果的数组。
    * audioDuration  音频时长，单位ms
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'segments' => 'setSegments',
            'audioDuration' => 'setAudioDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  录音文件识别任务标识符。  使用“callback_url”回调url时，该字段会随结果发送至用户服务器。 使用get接口查询，不会出现该字段
    * status  当前识别状态。具体状态如下所示：  WAITING 等待识别。 FINISHED 识别已经完成。 ERROR 识别过程中发生错误。
    * createTime  任务创建时间, 遵循 RFC 3339格式。 格式示例：2018-12-04T13:10:29.310Z。
    * startTime  开始识别时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * finishTime  识别完成时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    * segments  转写结果, 多句结果的数组。
    * audioDuration  音频时长，单位ms
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'segments' => 'getSegments',
            'audioDuration' => 'getAudioDuration'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['audioDuration'] = isset($data['audioDuration']) ? $data['audioDuration'] : null;
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
    * Gets jobId
    *  录音文件识别任务标识符。  使用“callback_url”回调url时，该字段会随结果发送至用户服务器。 使用get接口查询，不会出现该字段
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
    * @param string|null $jobId 录音文件识别任务标识符。  使用“callback_url”回调url时，该字段会随结果发送至用户服务器。 使用get接口查询，不会出现该字段
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  当前识别状态。具体状态如下所示：  WAITING 等待识别。 FINISHED 识别已经完成。 ERROR 识别过程中发生错误。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 当前识别状态。具体状态如下所示：  WAITING 等待识别。 FINISHED 识别已经完成。 ERROR 识别过程中发生错误。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间, 遵循 RFC 3339格式。 格式示例：2018-12-04T13:10:29.310Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间, 遵循 RFC 3339格式。 格式示例：2018-12-04T13:10:29.310Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始识别时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
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
    * @param string|null $startTime 开始识别时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  识别完成时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 识别完成时间, 遵循 RFC 3339格式。 当status为FINISHED或ERROR时存在。 格式示例：2018-12-04T13:10:29.310Z。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets segments
    *  转写结果, 多句结果的数组。
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\Segment[]|null
    */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
    * Sets segments
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\Segment[]|null $segments 转写结果, 多句结果的数组。
    *
    * @return $this
    */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;
        return $this;
    }

    /**
    * Gets audioDuration
    *  音频时长，单位ms
    *
    * @return int|null
    */
    public function getAudioDuration()
    {
        return $this->container['audioDuration'];
    }

    /**
    * Sets audioDuration
    *
    * @param int|null $audioDuration 音频时长，单位ms
    *
    * @return $this
    */
    public function setAudioDuration($audioDuration)
    {
        $this->container['audioDuration'] = $audioDuration;
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

