<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceAccesslog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceAccesslog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  集群ID。
    * requestId  请求ID。
    * apiId  API ID。
    * apiName  API名称。
    * appId  APP ID。
    * appName  APP名称。
    * accessTime  访问时间。
    * duration  访问时长。
    * statusCode  状态码。
    * errorCode  错误码。
    * errorMessage  错误信息。
    * detail  日志详情。
    * inFlowSize  输入流量大小。
    * outFlowSize  输出流量大小。
    * outTotalSize  输出数据条数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'requestId' => 'string',
            'apiId' => 'string',
            'apiName' => 'string',
            'appId' => 'string',
            'appName' => 'string',
            'accessTime' => 'int',
            'duration' => 'int',
            'statusCode' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'detail' => 'string',
            'inFlowSize' => 'int',
            'outFlowSize' => 'int',
            'outTotalSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  集群ID。
    * requestId  请求ID。
    * apiId  API ID。
    * apiName  API名称。
    * appId  APP ID。
    * appName  APP名称。
    * accessTime  访问时间。
    * duration  访问时长。
    * statusCode  状态码。
    * errorCode  错误码。
    * errorMessage  错误信息。
    * detail  日志详情。
    * inFlowSize  输入流量大小。
    * outFlowSize  输出流量大小。
    * outTotalSize  输出数据条数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'requestId' => null,
        'apiId' => null,
        'apiName' => null,
        'appId' => null,
        'appName' => null,
        'accessTime' => 'int64',
        'duration' => 'int64',
        'statusCode' => null,
        'errorCode' => null,
        'errorMessage' => null,
        'detail' => null,
        'inFlowSize' => 'int64',
        'outFlowSize' => 'int64',
        'outTotalSize' => 'int64'
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
    * id  集群ID。
    * requestId  请求ID。
    * apiId  API ID。
    * apiName  API名称。
    * appId  APP ID。
    * appName  APP名称。
    * accessTime  访问时间。
    * duration  访问时长。
    * statusCode  状态码。
    * errorCode  错误码。
    * errorMessage  错误信息。
    * detail  日志详情。
    * inFlowSize  输入流量大小。
    * outFlowSize  输出流量大小。
    * outTotalSize  输出数据条数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'requestId' => 'request_id',
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'appId' => 'app_id',
            'appName' => 'app_name',
            'accessTime' => 'access_time',
            'duration' => 'duration',
            'statusCode' => 'status_code',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'detail' => 'detail',
            'inFlowSize' => 'in_flow_size',
            'outFlowSize' => 'out_flow_size',
            'outTotalSize' => 'out_total_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  集群ID。
    * requestId  请求ID。
    * apiId  API ID。
    * apiName  API名称。
    * appId  APP ID。
    * appName  APP名称。
    * accessTime  访问时间。
    * duration  访问时长。
    * statusCode  状态码。
    * errorCode  错误码。
    * errorMessage  错误信息。
    * detail  日志详情。
    * inFlowSize  输入流量大小。
    * outFlowSize  输出流量大小。
    * outTotalSize  输出数据条数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'requestId' => 'setRequestId',
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'accessTime' => 'setAccessTime',
            'duration' => 'setDuration',
            'statusCode' => 'setStatusCode',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'detail' => 'setDetail',
            'inFlowSize' => 'setInFlowSize',
            'outFlowSize' => 'setOutFlowSize',
            'outTotalSize' => 'setOutTotalSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  集群ID。
    * requestId  请求ID。
    * apiId  API ID。
    * apiName  API名称。
    * appId  APP ID。
    * appName  APP名称。
    * accessTime  访问时间。
    * duration  访问时长。
    * statusCode  状态码。
    * errorCode  错误码。
    * errorMessage  错误信息。
    * detail  日志详情。
    * inFlowSize  输入流量大小。
    * outFlowSize  输出流量大小。
    * outTotalSize  输出数据条数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'requestId' => 'getRequestId',
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'accessTime' => 'getAccessTime',
            'duration' => 'getDuration',
            'statusCode' => 'getStatusCode',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
            'detail' => 'getDetail',
            'inFlowSize' => 'getInFlowSize',
            'outFlowSize' => 'getOutFlowSize',
            'outTotalSize' => 'getOutTotalSize'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['accessTime'] = isset($data['accessTime']) ? $data['accessTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['inFlowSize'] = isset($data['inFlowSize']) ? $data['inFlowSize'] : null;
        $this->container['outFlowSize'] = isset($data['outFlowSize']) ? $data['outFlowSize'] : null;
        $this->container['outTotalSize'] = isset($data['outTotalSize']) ? $data['outTotalSize'] : null;
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
    *  集群ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 集群ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets apiId
    *  API ID。
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId API ID。
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  API名称。
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName API名称。
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets appId
    *  APP ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId APP ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  APP名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName APP名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets accessTime
    *  访问时间。
    *
    * @return int|null
    */
    public function getAccessTime()
    {
        return $this->container['accessTime'];
    }

    /**
    * Sets accessTime
    *
    * @param int|null $accessTime 访问时间。
    *
    * @return $this
    */
    public function setAccessTime($accessTime)
    {
        $this->container['accessTime'] = $accessTime;
        return $this;
    }

    /**
    * Gets duration
    *  访问时长。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 访问时长。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态码。
    *
    * @return string|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string|null $statusCode 状态码。
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets detail
    *  日志详情。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 日志详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets inFlowSize
    *  输入流量大小。
    *
    * @return int|null
    */
    public function getInFlowSize()
    {
        return $this->container['inFlowSize'];
    }

    /**
    * Sets inFlowSize
    *
    * @param int|null $inFlowSize 输入流量大小。
    *
    * @return $this
    */
    public function setInFlowSize($inFlowSize)
    {
        $this->container['inFlowSize'] = $inFlowSize;
        return $this;
    }

    /**
    * Gets outFlowSize
    *  输出流量大小。
    *
    * @return int|null
    */
    public function getOutFlowSize()
    {
        return $this->container['outFlowSize'];
    }

    /**
    * Sets outFlowSize
    *
    * @param int|null $outFlowSize 输出流量大小。
    *
    * @return $this
    */
    public function setOutFlowSize($outFlowSize)
    {
        $this->container['outFlowSize'] = $outFlowSize;
        return $this;
    }

    /**
    * Gets outTotalSize
    *  输出数据条数。
    *
    * @return int|null
    */
    public function getOutTotalSize()
    {
        return $this->container['outTotalSize'];
    }

    /**
    * Sets outTotalSize
    *
    * @param int|null $outTotalSize 输出数据条数。
    *
    * @return $this
    */
    public function setOutTotalSize($outTotalSize)
    {
        $this->container['outTotalSize'] = $outTotalSize;
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

