<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  日志文件名，打包文件名格式：{Domain}_{logStartTimeStamp}.log.gz
    * url  日志下载链接
    * size  日志文件大小
    * startTime  日志文件中日志开始时间，北京时间
    * endTime  日志文件中日志结束时间，北京时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'url' => 'string',
            'size' => 'int',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  日志文件名，打包文件名格式：{Domain}_{logStartTimeStamp}.log.gz
    * url  日志下载链接
    * size  日志文件大小
    * startTime  日志文件中日志开始时间，北京时间
    * endTime  日志文件中日志结束时间，北京时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'url' => null,
        'size' => 'int64',
        'startTime' => null,
        'endTime' => null
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
    * name  日志文件名，打包文件名格式：{Domain}_{logStartTimeStamp}.log.gz
    * url  日志下载链接
    * size  日志文件大小
    * startTime  日志文件中日志开始时间，北京时间
    * endTime  日志文件中日志结束时间，北京时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'url' => 'url',
            'size' => 'size',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  日志文件名，打包文件名格式：{Domain}_{logStartTimeStamp}.log.gz
    * url  日志下载链接
    * size  日志文件大小
    * startTime  日志文件中日志开始时间，北京时间
    * endTime  日志文件中日志结束时间，北京时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'url' => 'setUrl',
            'size' => 'setSize',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  日志文件名，打包文件名格式：{Domain}_{logStartTimeStamp}.log.gz
    * url  日志下载链接
    * size  日志文件大小
    * startTime  日志文件中日志开始时间，北京时间
    * endTime  日志文件中日志结束时间，北京时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'url' => 'getUrl',
            'size' => 'getSize',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 1024)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 25)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 25.";
            }
            if ((mb_strlen($this->container['startTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 20.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 25)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 25.";
            }
            if ((mb_strlen($this->container['endTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 20.";
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
    * Gets name
    *  日志文件名，打包文件名格式：{Domain}_{logStartTimeStamp}.log.gz
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 日志文件名，打包文件名格式：{Domain}_{logStartTimeStamp}.log.gz
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets url
    *  日志下载链接
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 日志下载链接
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets size
    *  日志文件大小
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 日志文件大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets startTime
    *  日志文件中日志开始时间，北京时间
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
    * @param string $startTime 日志文件中日志开始时间，北京时间
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
    *  日志文件中日志结束时间，北京时间
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
    * @param string $endTime 日志文件中日志结束时间，北京时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

