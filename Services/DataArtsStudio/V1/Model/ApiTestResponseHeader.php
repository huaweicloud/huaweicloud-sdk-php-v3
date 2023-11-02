<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiTestResponseHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiTestResponseHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultStatus  是否成功
    * contentLength  内容大小
    * connection  连接状态
    * cacheControl  缓存控制（固定值）
    * contentType  内容类型 （固定值）
    * date  日期
    * xRequestId  请求ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultStatus' => 'string',
            'contentLength' => 'int',
            'connection' => 'string',
            'cacheControl' => 'string',
            'contentType' => 'string',
            'date' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultStatus  是否成功
    * contentLength  内容大小
    * connection  连接状态
    * cacheControl  缓存控制（固定值）
    * contentType  内容类型 （固定值）
    * date  日期
    * xRequestId  请求ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultStatus' => null,
        'contentLength' => null,
        'connection' => null,
        'cacheControl' => null,
        'contentType' => null,
        'date' => null,
        'xRequestId' => null
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
    * resultStatus  是否成功
    * contentLength  内容大小
    * connection  连接状态
    * cacheControl  缓存控制（固定值）
    * contentType  内容类型 （固定值）
    * date  日期
    * xRequestId  请求ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultStatus' => 'result_status',
            'contentLength' => 'content_length',
            'connection' => 'connection',
            'cacheControl' => 'cache_control',
            'contentType' => 'content_type',
            'date' => 'date',
            'xRequestId' => 'x_request_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultStatus  是否成功
    * contentLength  内容大小
    * connection  连接状态
    * cacheControl  缓存控制（固定值）
    * contentType  内容类型 （固定值）
    * date  日期
    * xRequestId  请求ID
    *
    * @var string[]
    */
    protected static $setters = [
            'resultStatus' => 'setResultStatus',
            'contentLength' => 'setContentLength',
            'connection' => 'setConnection',
            'cacheControl' => 'setCacheControl',
            'contentType' => 'setContentType',
            'date' => 'setDate',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultStatus  是否成功
    * contentLength  内容大小
    * connection  连接状态
    * cacheControl  缓存控制（固定值）
    * contentType  内容类型 （固定值）
    * date  日期
    * xRequestId  请求ID
    *
    * @var string[]
    */
    protected static $getters = [
            'resultStatus' => 'getResultStatus',
            'contentLength' => 'getContentLength',
            'connection' => 'getConnection',
            'cacheControl' => 'getCacheControl',
            'contentType' => 'getContentType',
            'date' => 'getDate',
            'xRequestId' => 'getXRequestId'
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
        $this->container['resultStatus'] = isset($data['resultStatus']) ? $data['resultStatus'] : null;
        $this->container['contentLength'] = isset($data['contentLength']) ? $data['contentLength'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['cacheControl'] = isset($data['cacheControl']) ? $data['cacheControl'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets resultStatus
    *  是否成功
    *
    * @return string|null
    */
    public function getResultStatus()
    {
        return $this->container['resultStatus'];
    }

    /**
    * Sets resultStatus
    *
    * @param string|null $resultStatus 是否成功
    *
    * @return $this
    */
    public function setResultStatus($resultStatus)
    {
        $this->container['resultStatus'] = $resultStatus;
        return $this;
    }

    /**
    * Gets contentLength
    *  内容大小
    *
    * @return int|null
    */
    public function getContentLength()
    {
        return $this->container['contentLength'];
    }

    /**
    * Sets contentLength
    *
    * @param int|null $contentLength 内容大小
    *
    * @return $this
    */
    public function setContentLength($contentLength)
    {
        $this->container['contentLength'] = $contentLength;
        return $this;
    }

    /**
    * Gets connection
    *  连接状态
    *
    * @return string|null
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param string|null $connection 连接状态
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
        return $this;
    }

    /**
    * Gets cacheControl
    *  缓存控制（固定值）
    *
    * @return string|null
    */
    public function getCacheControl()
    {
        return $this->container['cacheControl'];
    }

    /**
    * Sets cacheControl
    *
    * @param string|null $cacheControl 缓存控制（固定值）
    *
    * @return $this
    */
    public function setCacheControl($cacheControl)
    {
        $this->container['cacheControl'] = $cacheControl;
        return $this;
    }

    /**
    * Gets contentType
    *  内容类型 （固定值）
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 内容类型 （固定值）
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets date
    *  日期
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 日期
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets xRequestId
    *  请求ID
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId 请求ID
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

