<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryPreCheckResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryPreCheckResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * precheckId  预检查id。
    * result  返回的预检查结果是否通过。true表示预检查通过，通过后才可进行启动任务。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  RDS实例id。
    * jobDirection  迁移方向。 - up-入云 灾备场景时对应本云为备 - down-出云 灾备场景时对应本云为主 - non-dbs-自建
    * precheckResult  预检查各项结果。
    * errorMsg  错误信息
    * errorCode  任务错误码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'precheckId' => 'string',
            'result' => 'bool',
            'process' => 'string',
            'totalPassedRate' => 'string',
            'rdsInstanceId' => 'string',
            'jobDirection' => 'string',
            'precheckResult' => '\HuaweiCloud\SDK\Drs\V3\Model\PrecheckResult[]',
            'errorMsg' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * precheckId  预检查id。
    * result  返回的预检查结果是否通过。true表示预检查通过，通过后才可进行启动任务。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  RDS实例id。
    * jobDirection  迁移方向。 - up-入云 灾备场景时对应本云为备 - down-出云 灾备场景时对应本云为主 - non-dbs-自建
    * precheckResult  预检查各项结果。
    * errorMsg  错误信息
    * errorCode  任务错误码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'precheckId' => null,
        'result' => null,
        'process' => null,
        'totalPassedRate' => null,
        'rdsInstanceId' => null,
        'jobDirection' => null,
        'precheckResult' => null,
        'errorMsg' => null,
        'errorCode' => null
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
    * precheckId  预检查id。
    * result  返回的预检查结果是否通过。true表示预检查通过，通过后才可进行启动任务。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  RDS实例id。
    * jobDirection  迁移方向。 - up-入云 灾备场景时对应本云为备 - down-出云 灾备场景时对应本云为主 - non-dbs-自建
    * precheckResult  预检查各项结果。
    * errorMsg  错误信息
    * errorCode  任务错误码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'precheckId' => 'precheck_id',
            'result' => 'result',
            'process' => 'process',
            'totalPassedRate' => 'total_passed_rate',
            'rdsInstanceId' => 'rds_instance_id',
            'jobDirection' => 'job_direction',
            'precheckResult' => 'precheck_result',
            'errorMsg' => 'error_msg',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * precheckId  预检查id。
    * result  返回的预检查结果是否通过。true表示预检查通过，通过后才可进行启动任务。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  RDS实例id。
    * jobDirection  迁移方向。 - up-入云 灾备场景时对应本云为备 - down-出云 灾备场景时对应本云为主 - non-dbs-自建
    * precheckResult  预检查各项结果。
    * errorMsg  错误信息
    * errorCode  任务错误码。
    *
    * @var string[]
    */
    protected static $setters = [
            'precheckId' => 'setPrecheckId',
            'result' => 'setResult',
            'process' => 'setProcess',
            'totalPassedRate' => 'setTotalPassedRate',
            'rdsInstanceId' => 'setRdsInstanceId',
            'jobDirection' => 'setJobDirection',
            'precheckResult' => 'setPrecheckResult',
            'errorMsg' => 'setErrorMsg',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * precheckId  预检查id。
    * result  返回的预检查结果是否通过。true表示预检查通过，通过后才可进行启动任务。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  RDS实例id。
    * jobDirection  迁移方向。 - up-入云 灾备场景时对应本云为备 - down-出云 灾备场景时对应本云为主 - non-dbs-自建
    * precheckResult  预检查各项结果。
    * errorMsg  错误信息
    * errorCode  任务错误码。
    *
    * @var string[]
    */
    protected static $getters = [
            'precheckId' => 'getPrecheckId',
            'result' => 'getResult',
            'process' => 'getProcess',
            'totalPassedRate' => 'getTotalPassedRate',
            'rdsInstanceId' => 'getRdsInstanceId',
            'jobDirection' => 'getJobDirection',
            'precheckResult' => 'getPrecheckResult',
            'errorMsg' => 'getErrorMsg',
            'errorCode' => 'getErrorCode'
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
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
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
        $this->container['precheckId'] = isset($data['precheckId']) ? $data['precheckId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['totalPassedRate'] = isset($data['totalPassedRate']) ? $data['totalPassedRate'] : null;
        $this->container['rdsInstanceId'] = isset($data['rdsInstanceId']) ? $data['rdsInstanceId'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['precheckResult'] = isset($data['precheckResult']) ? $data['precheckResult'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
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
    * Gets precheckId
    *  预检查id。
    *
    * @return string|null
    */
    public function getPrecheckId()
    {
        return $this->container['precheckId'];
    }

    /**
    * Sets precheckId
    *
    * @param string|null $precheckId 预检查id。
    *
    * @return $this
    */
    public function setPrecheckId($precheckId)
    {
        $this->container['precheckId'] = $precheckId;
        return $this;
    }

    /**
    * Gets result
    *  返回的预检查结果是否通过。true表示预检查通过，通过后才可进行启动任务。
    *
    * @return bool|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param bool|null $result 返回的预检查结果是否通过。true表示预检查通过，通过后才可进行启动任务。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets process
    *  预检查进度百分比。
    *
    * @return string|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param string|null $process 预检查进度百分比。
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets totalPassedRate
    *  预检查通过百分比。
    *
    * @return string|null
    */
    public function getTotalPassedRate()
    {
        return $this->container['totalPassedRate'];
    }

    /**
    * Sets totalPassedRate
    *
    * @param string|null $totalPassedRate 预检查通过百分比。
    *
    * @return $this
    */
    public function setTotalPassedRate($totalPassedRate)
    {
        $this->container['totalPassedRate'] = $totalPassedRate;
        return $this;
    }

    /**
    * Gets rdsInstanceId
    *  RDS实例id。
    *
    * @return string|null
    */
    public function getRdsInstanceId()
    {
        return $this->container['rdsInstanceId'];
    }

    /**
    * Sets rdsInstanceId
    *
    * @param string|null $rdsInstanceId RDS实例id。
    *
    * @return $this
    */
    public function setRdsInstanceId($rdsInstanceId)
    {
        $this->container['rdsInstanceId'] = $rdsInstanceId;
        return $this;
    }

    /**
    * Gets jobDirection
    *  迁移方向。 - up-入云 灾备场景时对应本云为备 - down-出云 灾备场景时对应本云为主 - non-dbs-自建
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection 迁移方向。 - up-入云 灾备场景时对应本云为备 - down-出云 灾备场景时对应本云为主 - non-dbs-自建
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets precheckResult
    *  预检查各项结果。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\PrecheckResult[]|null
    */
    public function getPrecheckResult()
    {
        return $this->container['precheckResult'];
    }

    /**
    * Sets precheckResult
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\PrecheckResult[]|null $precheckResult 预检查各项结果。
    *
    * @return $this
    */
    public function setPrecheckResult($precheckResult)
    {
        $this->container['precheckResult'] = $precheckResult;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息
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
    * @param string|null $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets errorCode
    *  任务错误码。
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
    * @param string|null $errorCode 任务错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

