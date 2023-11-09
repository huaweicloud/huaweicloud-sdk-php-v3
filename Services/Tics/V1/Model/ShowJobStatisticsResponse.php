<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobCnt  作业数量统计
    * jobInsCnt  作业实例次数
    * jobInsFailCnt  作业实例失败次数
    * jobInsInterceptCnt  作业实例拦截次数
    * jobInsSuccessCnt  作业实例成功次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobCnt' => 'int',
            'jobInsCnt' => 'int',
            'jobInsFailCnt' => 'int',
            'jobInsInterceptCnt' => 'int',
            'jobInsSuccessCnt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobCnt  作业数量统计
    * jobInsCnt  作业实例次数
    * jobInsFailCnt  作业实例失败次数
    * jobInsInterceptCnt  作业实例拦截次数
    * jobInsSuccessCnt  作业实例成功次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobCnt' => 'int64',
        'jobInsCnt' => 'int64',
        'jobInsFailCnt' => 'int64',
        'jobInsInterceptCnt' => 'int64',
        'jobInsSuccessCnt' => 'int64'
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
    * jobCnt  作业数量统计
    * jobInsCnt  作业实例次数
    * jobInsFailCnt  作业实例失败次数
    * jobInsInterceptCnt  作业实例拦截次数
    * jobInsSuccessCnt  作业实例成功次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobCnt' => 'job_cnt',
            'jobInsCnt' => 'job_ins_cnt',
            'jobInsFailCnt' => 'job_ins_fail_cnt',
            'jobInsInterceptCnt' => 'job_ins_intercept_cnt',
            'jobInsSuccessCnt' => 'job_ins_success_cnt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobCnt  作业数量统计
    * jobInsCnt  作业实例次数
    * jobInsFailCnt  作业实例失败次数
    * jobInsInterceptCnt  作业实例拦截次数
    * jobInsSuccessCnt  作业实例成功次数
    *
    * @var string[]
    */
    protected static $setters = [
            'jobCnt' => 'setJobCnt',
            'jobInsCnt' => 'setJobInsCnt',
            'jobInsFailCnt' => 'setJobInsFailCnt',
            'jobInsInterceptCnt' => 'setJobInsInterceptCnt',
            'jobInsSuccessCnt' => 'setJobInsSuccessCnt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobCnt  作业数量统计
    * jobInsCnt  作业实例次数
    * jobInsFailCnt  作业实例失败次数
    * jobInsInterceptCnt  作业实例拦截次数
    * jobInsSuccessCnt  作业实例成功次数
    *
    * @var string[]
    */
    protected static $getters = [
            'jobCnt' => 'getJobCnt',
            'jobInsCnt' => 'getJobInsCnt',
            'jobInsFailCnt' => 'getJobInsFailCnt',
            'jobInsInterceptCnt' => 'getJobInsInterceptCnt',
            'jobInsSuccessCnt' => 'getJobInsSuccessCnt'
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
        $this->container['jobCnt'] = isset($data['jobCnt']) ? $data['jobCnt'] : null;
        $this->container['jobInsCnt'] = isset($data['jobInsCnt']) ? $data['jobInsCnt'] : null;
        $this->container['jobInsFailCnt'] = isset($data['jobInsFailCnt']) ? $data['jobInsFailCnt'] : null;
        $this->container['jobInsInterceptCnt'] = isset($data['jobInsInterceptCnt']) ? $data['jobInsInterceptCnt'] : null;
        $this->container['jobInsSuccessCnt'] = isset($data['jobInsSuccessCnt']) ? $data['jobInsSuccessCnt'] : null;
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
    * Gets jobCnt
    *  作业数量统计
    *
    * @return int|null
    */
    public function getJobCnt()
    {
        return $this->container['jobCnt'];
    }

    /**
    * Sets jobCnt
    *
    * @param int|null $jobCnt 作业数量统计
    *
    * @return $this
    */
    public function setJobCnt($jobCnt)
    {
        $this->container['jobCnt'] = $jobCnt;
        return $this;
    }

    /**
    * Gets jobInsCnt
    *  作业实例次数
    *
    * @return int|null
    */
    public function getJobInsCnt()
    {
        return $this->container['jobInsCnt'];
    }

    /**
    * Sets jobInsCnt
    *
    * @param int|null $jobInsCnt 作业实例次数
    *
    * @return $this
    */
    public function setJobInsCnt($jobInsCnt)
    {
        $this->container['jobInsCnt'] = $jobInsCnt;
        return $this;
    }

    /**
    * Gets jobInsFailCnt
    *  作业实例失败次数
    *
    * @return int|null
    */
    public function getJobInsFailCnt()
    {
        return $this->container['jobInsFailCnt'];
    }

    /**
    * Sets jobInsFailCnt
    *
    * @param int|null $jobInsFailCnt 作业实例失败次数
    *
    * @return $this
    */
    public function setJobInsFailCnt($jobInsFailCnt)
    {
        $this->container['jobInsFailCnt'] = $jobInsFailCnt;
        return $this;
    }

    /**
    * Gets jobInsInterceptCnt
    *  作业实例拦截次数
    *
    * @return int|null
    */
    public function getJobInsInterceptCnt()
    {
        return $this->container['jobInsInterceptCnt'];
    }

    /**
    * Sets jobInsInterceptCnt
    *
    * @param int|null $jobInsInterceptCnt 作业实例拦截次数
    *
    * @return $this
    */
    public function setJobInsInterceptCnt($jobInsInterceptCnt)
    {
        $this->container['jobInsInterceptCnt'] = $jobInsInterceptCnt;
        return $this;
    }

    /**
    * Gets jobInsSuccessCnt
    *  作业实例成功次数
    *
    * @return int|null
    */
    public function getJobInsSuccessCnt()
    {
        return $this->container['jobInsSuccessCnt'];
    }

    /**
    * Sets jobInsSuccessCnt
    *
    * @param int|null $jobInsSuccessCnt 作业实例成功次数
    *
    * @return $this
    */
    public function setJobInsSuccessCnt($jobInsSuccessCnt)
    {
        $this->container['jobInsSuccessCnt'] = $jobInsSuccessCnt;
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

