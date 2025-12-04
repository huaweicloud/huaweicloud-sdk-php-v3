<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EncodeServerJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EncodeServerJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * encodeServerId  编码服务的唯一标识ID，编码服务相关任务包含此字段。
    * jobId  任务的唯一标识。
    * errorCode  错误码。
    * errorMsg  错误说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'encodeServerId' => 'string',
            'jobId' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * encodeServerId  编码服务的唯一标识ID，编码服务相关任务包含此字段。
    * jobId  任务的唯一标识。
    * errorCode  错误码。
    * errorMsg  错误说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'encodeServerId' => null,
        'jobId' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * encodeServerId  编码服务的唯一标识ID，编码服务相关任务包含此字段。
    * jobId  任务的唯一标识。
    * errorCode  错误码。
    * errorMsg  错误说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'encodeServerId' => 'encode_server_id',
            'jobId' => 'job_id',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * encodeServerId  编码服务的唯一标识ID，编码服务相关任务包含此字段。
    * jobId  任务的唯一标识。
    * errorCode  错误码。
    * errorMsg  错误说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'encodeServerId' => 'setEncodeServerId',
            'jobId' => 'setJobId',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * encodeServerId  编码服务的唯一标识ID，编码服务相关任务包含此字段。
    * jobId  任务的唯一标识。
    * errorCode  错误码。
    * errorMsg  错误说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'encodeServerId' => 'getEncodeServerId',
            'jobId' => 'getJobId',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['encodeServerId'] = isset($data['encodeServerId']) ? $data['encodeServerId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['encodeServerId']) && (mb_strlen($this->container['encodeServerId']) > 32)) {
                $invalidProperties[] = "invalid value for 'encodeServerId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['encodeServerId']) && (mb_strlen($this->container['encodeServerId']) < 32)) {
                $invalidProperties[] = "invalid value for 'encodeServerId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 32)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 32)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
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
    * Gets encodeServerId
    *  编码服务的唯一标识ID，编码服务相关任务包含此字段。
    *
    * @return string|null
    */
    public function getEncodeServerId()
    {
        return $this->container['encodeServerId'];
    }

    /**
    * Sets encodeServerId
    *
    * @param string|null $encodeServerId 编码服务的唯一标识ID，编码服务相关任务包含此字段。
    *
    * @return $this
    */
    public function setEncodeServerId($encodeServerId)
    {
        $this->container['encodeServerId'] = $encodeServerId;
        return $this;
    }

    /**
    * Gets jobId
    *  任务的唯一标识。
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
    * @param string|null $jobId 任务的唯一标识。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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
    * Gets errorMsg
    *  错误说明。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误说明。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

