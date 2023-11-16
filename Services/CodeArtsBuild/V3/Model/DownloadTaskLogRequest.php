<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadTaskLogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadTaskLogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordId  记录ID,36位数字、小写字母、'-'组组合。
    * taskName  记录ID,36位数字、小写字母、'-'组组合。
    * logLevel  日志等级 值为INFO | DEBUG。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordId' => 'string',
            'taskName' => 'string',
            'logLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordId  记录ID,36位数字、小写字母、'-'组组合。
    * taskName  记录ID,36位数字、小写字母、'-'组组合。
    * logLevel  日志等级 值为INFO | DEBUG。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordId' => null,
        'taskName' => null,
        'logLevel' => null
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
    * recordId  记录ID,36位数字、小写字母、'-'组组合。
    * taskName  记录ID,36位数字、小写字母、'-'组组合。
    * logLevel  日志等级 值为INFO | DEBUG。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordId' => 'record_id',
            'taskName' => 'task_name',
            'logLevel' => 'log_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordId  记录ID,36位数字、小写字母、'-'组组合。
    * taskName  记录ID,36位数字、小写字母、'-'组组合。
    * logLevel  日志等级 值为INFO | DEBUG。
    *
    * @var string[]
    */
    protected static $setters = [
            'recordId' => 'setRecordId',
            'taskName' => 'setTaskName',
            'logLevel' => 'setLogLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordId  记录ID,36位数字、小写字母、'-'组组合。
    * taskName  记录ID,36位数字、小写字母、'-'组组合。
    * logLevel  日志等级 值为INFO | DEBUG。
    *
    * @var string[]
    */
    protected static $getters = [
            'recordId' => 'getRecordId',
            'taskName' => 'getTaskName',
            'logLevel' => 'getLogLevel'
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
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['logLevel'] = isset($data['logLevel']) ? $data['logLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['recordId'] === null) {
            $invalidProperties[] = "'recordId' can't be null";
        }
            if (!preg_match("/^[0-9a-z-]{36}$/", $this->container['recordId'])) {
                $invalidProperties[] = "invalid value for 'recordId', must be conform to the pattern /^[0-9a-z-]{36}$/.";
            }
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
            if ((mb_strlen($this->container['taskName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 1000.";
            }
            if ((mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
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
    * Gets recordId
    *  记录ID,36位数字、小写字母、'-'组组合。
    *
    * @return string
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string $recordId 记录ID,36位数字、小写字母、'-'组组合。
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets taskName
    *  记录ID,36位数字、小写字母、'-'组组合。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 记录ID,36位数字、小写字母、'-'组组合。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets logLevel
    *  日志等级 值为INFO | DEBUG。
    *
    * @return string|null
    */
    public function getLogLevel()
    {
        return $this->container['logLevel'];
    }

    /**
    * Sets logLevel
    *
    * @param string|null $logLevel 日志等级 值为INFO | DEBUG。
    *
    * @return $this
    */
    public function setLogLevel($logLevel)
    {
        $this->container['logLevel'] = $logLevel;
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

