<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetricResultResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetricResultResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricId  指标ID
    * result  result
    * metricFormat  指标显示格式，根据不同指标固定返回。
    * logMsg  结果日志信息
    * status  查询结果状态，SUCCESS：查询成功，FAILED：查询失败，FALLBACK：使用默认值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricId' => 'string',
            'result' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShowMetricResultResponseBodyResult',
            'metricFormat' => '\HuaweiCloud\SDK\SecMaster\V1\Model\MetricFormat[]',
            'logMsg' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricId  指标ID
    * result  result
    * metricFormat  指标显示格式，根据不同指标固定返回。
    * logMsg  结果日志信息
    * status  查询结果状态，SUCCESS：查询成功，FAILED：查询失败，FALLBACK：使用默认值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricId' => null,
        'result' => null,
        'metricFormat' => null,
        'logMsg' => null,
        'status' => null
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
    * metricId  指标ID
    * result  result
    * metricFormat  指标显示格式，根据不同指标固定返回。
    * logMsg  结果日志信息
    * status  查询结果状态，SUCCESS：查询成功，FAILED：查询失败，FALLBACK：使用默认值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricId' => 'metric_id',
            'result' => 'result',
            'metricFormat' => 'metric_format',
            'logMsg' => 'log_msg',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricId  指标ID
    * result  result
    * metricFormat  指标显示格式，根据不同指标固定返回。
    * logMsg  结果日志信息
    * status  查询结果状态，SUCCESS：查询成功，FAILED：查询失败，FALLBACK：使用默认值
    *
    * @var string[]
    */
    protected static $setters = [
            'metricId' => 'setMetricId',
            'result' => 'setResult',
            'metricFormat' => 'setMetricFormat',
            'logMsg' => 'setLogMsg',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricId  指标ID
    * result  result
    * metricFormat  指标显示格式，根据不同指标固定返回。
    * logMsg  结果日志信息
    * status  查询结果状态，SUCCESS：查询成功，FAILED：查询失败，FALLBACK：使用默认值
    *
    * @var string[]
    */
    protected static $getters = [
            'metricId' => 'getMetricId',
            'result' => 'getResult',
            'metricFormat' => 'getMetricFormat',
            'logMsg' => 'getLogMsg',
            'status' => 'getStatus'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_FALLBACK = 'FALLBACK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_FALLBACK,
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
        $this->container['metricId'] = isset($data['metricId']) ? $data['metricId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['metricFormat'] = isset($data['metricFormat']) ? $data['metricFormat'] : null;
        $this->container['logMsg'] = isset($data['logMsg']) ? $data['logMsg'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metricId'] === null) {
            $invalidProperties[] = "'metricId' can't be null";
        }
            if (!preg_match("/[a-f0-9]{32}/", $this->container['metricId'])) {
                $invalidProperties[] = "invalid value for 'metricId', must be conform to the pattern /[a-f0-9]{32}/.";
            }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
            if (!is_null($this->container['logMsg']) && (mb_strlen($this->container['logMsg']) > 1024)) {
                $invalidProperties[] = "invalid value for 'logMsg', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['logMsg']) && (mb_strlen($this->container['logMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'logMsg', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets metricId
    *  指标ID
    *
    * @return string
    */
    public function getMetricId()
    {
        return $this->container['metricId'];
    }

    /**
    * Sets metricId
    *
    * @param string $metricId 指标ID
    *
    * @return $this
    */
    public function setMetricId($metricId)
    {
        $this->container['metricId'] = $metricId;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShowMetricResultResponseBodyResult
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShowMetricResultResponseBodyResult $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets metricFormat
    *  指标显示格式，根据不同指标固定返回。
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\MetricFormat[]|null
    */
    public function getMetricFormat()
    {
        return $this->container['metricFormat'];
    }

    /**
    * Sets metricFormat
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\MetricFormat[]|null $metricFormat 指标显示格式，根据不同指标固定返回。
    *
    * @return $this
    */
    public function setMetricFormat($metricFormat)
    {
        $this->container['metricFormat'] = $metricFormat;
        return $this;
    }

    /**
    * Gets logMsg
    *  结果日志信息
    *
    * @return string|null
    */
    public function getLogMsg()
    {
        return $this->container['logMsg'];
    }

    /**
    * Sets logMsg
    *
    * @param string|null $logMsg 结果日志信息
    *
    * @return $this
    */
    public function setLogMsg($logMsg)
    {
        $this->container['logMsg'] = $logMsg;
        return $this;
    }

    /**
    * Gets status
    *  查询结果状态，SUCCESS：查询成功，FAILED：查询失败，FALLBACK：使用默认值
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
    * @param string|null $status 查询结果状态，SUCCESS：查询成功，FAILED：查询失败，FALLBACK：使用默认值
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

