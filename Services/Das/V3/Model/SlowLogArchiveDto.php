<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowLogArchiveDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowLogArchiveDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * fileName  文件名
    * logStartTime  日志开始时间
    * logEndTime  日志结束时间
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'fileName' => 'string',
            'logStartTime' => 'int',
            'logEndTime' => 'int',
            'fileSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * fileName  文件名
    * logStartTime  日志开始时间
    * logEndTime  日志结束时间
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'fileName' => null,
        'logStartTime' => 'int64',
        'logEndTime' => 'int64',
        'fileSize' => 'int64'
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
    * id  ID
    * fileName  文件名
    * logStartTime  日志开始时间
    * logEndTime  日志结束时间
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileName' => 'file_name',
            'logStartTime' => 'log_start_time',
            'logEndTime' => 'log_end_time',
            'fileSize' => 'file_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * fileName  文件名
    * logStartTime  日志开始时间
    * logEndTime  日志结束时间
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileName' => 'setFileName',
            'logStartTime' => 'setLogStartTime',
            'logEndTime' => 'setLogEndTime',
            'fileSize' => 'setFileSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * fileName  文件名
    * logStartTime  日志开始时间
    * logEndTime  日志结束时间
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileName' => 'getFileName',
            'logStartTime' => 'getLogStartTime',
            'logEndTime' => 'getLogEndTime',
            'fileSize' => 'getFileSize'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['logStartTime'] = isset($data['logStartTime']) ? $data['logStartTime'] : null;
        $this->container['logEndTime'] = isset($data['logEndTime']) ? $data['logEndTime'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
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
    * Gets id
    *  ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets logStartTime
    *  日志开始时间
    *
    * @return int|null
    */
    public function getLogStartTime()
    {
        return $this->container['logStartTime'];
    }

    /**
    * Sets logStartTime
    *
    * @param int|null $logStartTime 日志开始时间
    *
    * @return $this
    */
    public function setLogStartTime($logStartTime)
    {
        $this->container['logStartTime'] = $logStartTime;
        return $this;
    }

    /**
    * Gets logEndTime
    *  日志结束时间
    *
    * @return int|null
    */
    public function getLogEndTime()
    {
        return $this->container['logEndTime'];
    }

    /**
    * Sets logEndTime
    *
    * @param int|null $logEndTime 日志结束时间
    *
    * @return $this
    */
    public function setLogEndTime($logEndTime)
    {
        $this->container['logEndTime'] = $logEndTime;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件大小
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize 文件大小
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
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

