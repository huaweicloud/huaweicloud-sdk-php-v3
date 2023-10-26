<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrationLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrationLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  迁移日志生成时间，形如：2023-05-15T09:11:25.449Z
    * logLevel  日志级别
    * message  日志信息
    * logCode  日志的编码
    * keyword  日志中的关键字
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'logLevel' => 'string',
            'message' => 'string',
            'logCode' => 'string',
            'keyword' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  迁移日志生成时间，形如：2023-05-15T09:11:25.449Z
    * logLevel  日志级别
    * message  日志信息
    * logCode  日志的编码
    * keyword  日志中的关键字
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'logLevel' => null,
        'message' => null,
        'logCode' => null,
        'keyword' => null
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
    * createdAt  迁移日志生成时间，形如：2023-05-15T09:11:25.449Z
    * logLevel  日志级别
    * message  日志信息
    * logCode  日志的编码
    * keyword  日志中的关键字
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'logLevel' => 'log_level',
            'message' => 'message',
            'logCode' => 'log_code',
            'keyword' => 'keyword'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  迁移日志生成时间，形如：2023-05-15T09:11:25.449Z
    * logLevel  日志级别
    * message  日志信息
    * logCode  日志的编码
    * keyword  日志中的关键字
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'logLevel' => 'setLogLevel',
            'message' => 'setMessage',
            'logCode' => 'setLogCode',
            'keyword' => 'setKeyword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  迁移日志生成时间，形如：2023-05-15T09:11:25.449Z
    * logLevel  日志级别
    * message  日志信息
    * logCode  日志的编码
    * keyword  日志中的关键字
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'logLevel' => 'getLogLevel',
            'message' => 'getMessage',
            'logCode' => 'getLogCode',
            'keyword' => 'getKeyword'
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
    const LOG_LEVEL_INFO = 'INFO';
    const LOG_LEVEL_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogLevelAllowableValues()
    {
        return [
            self::LOG_LEVEL_INFO,
            self::LOG_LEVEL_ERROR,
        ];
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['logLevel'] = isset($data['logLevel']) ? $data['logLevel'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['logCode'] = isset($data['logCode']) ? $data['logCode'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLogLevelAllowableValues();
                if (!is_null($this->container['logLevel']) && !in_array($this->container['logLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets createdAt
    *  迁移日志生成时间，形如：2023-05-15T09:11:25.449Z
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 迁移日志生成时间，形如：2023-05-15T09:11:25.449Z
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets logLevel
    *  日志级别
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
    * @param string|null $logLevel 日志级别
    *
    * @return $this
    */
    public function setLogLevel($logLevel)
    {
        $this->container['logLevel'] = $logLevel;
        return $this;
    }

    /**
    * Gets message
    *  日志信息
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
    * @param string|null $message 日志信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets logCode
    *  日志的编码
    *
    * @return string|null
    */
    public function getLogCode()
    {
        return $this->container['logCode'];
    }

    /**
    * Sets logCode
    *
    * @param string|null $logCode 日志的编码
    *
    * @return $this
    */
    public function setLogCode($logCode)
    {
        $this->container['logCode'] = $logCode;
        return $this;
    }

    /**
    * Gets keyword
    *  日志中的关键字
    *
    * @return string[]|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string[]|null $keyword 日志中的关键字
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
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

