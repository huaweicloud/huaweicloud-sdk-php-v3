<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDbAgentJobHistorysResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDbAgentJobHistorysResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * historyId  作业历史记录id。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * runTime  作业执行开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runDuration  作业执行时长。格式为hh:mm:ss
    * message  执行信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'historyId' => 'string',
            'runStatus' => 'string',
            'runTime' => 'string',
            'runDuration' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * historyId  作业历史记录id。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * runTime  作业执行开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runDuration  作业执行时长。格式为hh:mm:ss
    * message  执行信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'historyId' => null,
        'runStatus' => null,
        'runTime' => null,
        'runDuration' => null,
        'message' => null
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
    * historyId  作业历史记录id。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * runTime  作业执行开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runDuration  作业执行时长。格式为hh:mm:ss
    * message  执行信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'historyId' => 'history_id',
            'runStatus' => 'run_status',
            'runTime' => 'run_time',
            'runDuration' => 'run_duration',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * historyId  作业历史记录id。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * runTime  作业执行开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runDuration  作业执行时长。格式为hh:mm:ss
    * message  执行信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'historyId' => 'setHistoryId',
            'runStatus' => 'setRunStatus',
            'runTime' => 'setRunTime',
            'runDuration' => 'setRunDuration',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * historyId  作业历史记录id。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * runTime  作业执行开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runDuration  作业执行时长。格式为hh:mm:ss
    * message  执行信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'historyId' => 'getHistoryId',
            'runStatus' => 'getRunStatus',
            'runTime' => 'getRunTime',
            'runDuration' => 'getRunDuration',
            'message' => 'getMessage'
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
        $this->container['historyId'] = isset($data['historyId']) ? $data['historyId'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['runTime'] = isset($data['runTime']) ? $data['runTime'] : null;
        $this->container['runDuration'] = isset($data['runDuration']) ? $data['runDuration'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    * Gets historyId
    *  作业历史记录id。
    *
    * @return string|null
    */
    public function getHistoryId()
    {
        return $this->container['historyId'];
    }

    /**
    * Sets historyId
    *
    * @param string|null $historyId 作业历史记录id。
    *
    * @return $this
    */
    public function setHistoryId($historyId)
    {
        $this->container['historyId'] = $historyId;
        return $this;
    }

    /**
    * Gets runStatus
    *  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    *
    * @return string|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param string|null $runStatus 作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
        return $this;
    }

    /**
    * Gets runTime
    *  作业执行开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getRunTime()
    {
        return $this->container['runTime'];
    }

    /**
    * Sets runTime
    *
    * @param string|null $runTime 作业执行开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setRunTime($runTime)
    {
        $this->container['runTime'] = $runTime;
        return $this;
    }

    /**
    * Gets runDuration
    *  作业执行时长。格式为hh:mm:ss
    *
    * @return string|null
    */
    public function getRunDuration()
    {
        return $this->container['runDuration'];
    }

    /**
    * Sets runDuration
    *
    * @param string|null $runDuration 作业执行时长。格式为hh:mm:ss
    *
    * @return $this
    */
    public function setRunDuration($runDuration)
    {
        $this->container['runDuration'] = $runDuration;
        return $this;
    }

    /**
    * Gets message
    *  执行信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 执行信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

