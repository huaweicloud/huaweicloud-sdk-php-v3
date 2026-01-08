<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TranscodeInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TranscodeInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  转码模板名
    * progress  转码进度
    * startTime  转码开始处理时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * waitingTime  等待时长，单位为秒，当值为非-1时有效
    * processTime  处理时长，单位为秒，当值为非-1时有效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'progress' => 'int',
            'startTime' => 'string',
            'waitingTime' => 'int',
            'processTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  转码模板名
    * progress  转码进度
    * startTime  转码开始处理时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * waitingTime  等待时长，单位为秒，当值为非-1时有效
    * processTime  处理时长，单位为秒，当值为非-1时有效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'progress' => 'int32',
        'startTime' => null,
        'waitingTime' => 'int32',
        'processTime' => 'int32'
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
    * templateName  转码模板名
    * progress  转码进度
    * startTime  转码开始处理时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * waitingTime  等待时长，单位为秒，当值为非-1时有效
    * processTime  处理时长，单位为秒，当值为非-1时有效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'progress' => 'progress',
            'startTime' => 'start_time',
            'waitingTime' => 'waiting_time',
            'processTime' => 'process_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  转码模板名
    * progress  转码进度
    * startTime  转码开始处理时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * waitingTime  等待时长，单位为秒，当值为非-1时有效
    * processTime  处理时长，单位为秒，当值为非-1时有效
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'progress' => 'setProgress',
            'startTime' => 'setStartTime',
            'waitingTime' => 'setWaitingTime',
            'processTime' => 'setProcessTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  转码模板名
    * progress  转码进度
    * startTime  转码开始处理时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * waitingTime  等待时长，单位为秒，当值为非-1时有效
    * processTime  处理时长，单位为秒，当值为非-1时有效
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'progress' => 'getProgress',
            'startTime' => 'getStartTime',
            'waitingTime' => 'getWaitingTime',
            'processTime' => 'getProcessTime'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['waitingTime'] = isset($data['waitingTime']) ? $data['waitingTime'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['waitingTime']) && ($this->container['waitingTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'waitingTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['waitingTime']) && ($this->container['waitingTime'] < -1)) {
                $invalidProperties[] = "invalid value for 'waitingTime', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['processTime']) && ($this->container['processTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processTime']) && ($this->container['processTime'] < -1)) {
                $invalidProperties[] = "invalid value for 'processTime', must be bigger than or equal to -1.";
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
    * Gets templateName
    *  转码模板名
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 转码模板名
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets progress
    *  转码进度
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 转码进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets startTime
    *  转码开始处理时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
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
    * @param string|null $startTime 转码开始处理时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets waitingTime
    *  等待时长，单位为秒，当值为非-1时有效
    *
    * @return int|null
    */
    public function getWaitingTime()
    {
        return $this->container['waitingTime'];
    }

    /**
    * Sets waitingTime
    *
    * @param int|null $waitingTime 等待时长，单位为秒，当值为非-1时有效
    *
    * @return $this
    */
    public function setWaitingTime($waitingTime)
    {
        $this->container['waitingTime'] = $waitingTime;
        return $this;
    }

    /**
    * Gets processTime
    *  处理时长，单位为秒，当值为非-1时有效
    *
    * @return int|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param int|null $processTime 处理时长，单位为秒，当值为非-1时有效
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
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

