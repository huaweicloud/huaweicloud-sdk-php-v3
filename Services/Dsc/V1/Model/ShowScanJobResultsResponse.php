<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowScanJobResultsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowScanJobResultsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * jobName  任务名
    * type  查询资产类型
    * dbScanResult  dbScanResult
    * obsScanResult  obsScanResult
    * esScanResult  esScanResult
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobName' => 'string',
            'type' => 'string',
            'dbScanResult' => '\HuaweiCloud\SDK\Dsc\V1\Model\DbScanResult',
            'obsScanResult' => '\HuaweiCloud\SDK\Dsc\V1\Model\ObsScanResult',
            'esScanResult' => '\HuaweiCloud\SDK\Dsc\V1\Model\EsScanResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * jobName  任务名
    * type  查询资产类型
    * dbScanResult  dbScanResult
    * obsScanResult  obsScanResult
    * esScanResult  esScanResult
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobName' => null,
        'type' => null,
        'dbScanResult' => null,
        'obsScanResult' => null,
        'esScanResult' => null
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
    * jobId  任务ID
    * jobName  任务名
    * type  查询资产类型
    * dbScanResult  dbScanResult
    * obsScanResult  obsScanResult
    * esScanResult  esScanResult
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'type' => 'type',
            'dbScanResult' => 'db_scan_result',
            'obsScanResult' => 'obs_scan_result',
            'esScanResult' => 'es_scan_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * jobName  任务名
    * type  查询资产类型
    * dbScanResult  dbScanResult
    * obsScanResult  obsScanResult
    * esScanResult  esScanResult
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'type' => 'setType',
            'dbScanResult' => 'setDbScanResult',
            'obsScanResult' => 'setObsScanResult',
            'esScanResult' => 'setEsScanResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * jobName  任务名
    * type  查询资产类型
    * dbScanResult  dbScanResult
    * obsScanResult  obsScanResult
    * esScanResult  esScanResult
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'type' => 'getType',
            'dbScanResult' => 'getDbScanResult',
            'obsScanResult' => 'getObsScanResult',
            'esScanResult' => 'getEsScanResult'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dbScanResult'] = isset($data['dbScanResult']) ? $data['dbScanResult'] : null;
        $this->container['obsScanResult'] = isset($data['obsScanResult']) ? $data['obsScanResult'] : null;
        $this->container['esScanResult'] = isset($data['esScanResult']) ? $data['esScanResult'] : null;
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
    * Gets jobId
    *  任务ID
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
    * @param string|null $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 任务名
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets type
    *  查询资产类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 查询资产类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dbScanResult
    *  dbScanResult
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\DbScanResult|null
    */
    public function getDbScanResult()
    {
        return $this->container['dbScanResult'];
    }

    /**
    * Sets dbScanResult
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\DbScanResult|null $dbScanResult dbScanResult
    *
    * @return $this
    */
    public function setDbScanResult($dbScanResult)
    {
        $this->container['dbScanResult'] = $dbScanResult;
        return $this;
    }

    /**
    * Gets obsScanResult
    *  obsScanResult
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\ObsScanResult|null
    */
    public function getObsScanResult()
    {
        return $this->container['obsScanResult'];
    }

    /**
    * Sets obsScanResult
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\ObsScanResult|null $obsScanResult obsScanResult
    *
    * @return $this
    */
    public function setObsScanResult($obsScanResult)
    {
        $this->container['obsScanResult'] = $obsScanResult;
        return $this;
    }

    /**
    * Gets esScanResult
    *  esScanResult
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\EsScanResult|null
    */
    public function getEsScanResult()
    {
        return $this->container['esScanResult'];
    }

    /**
    * Sets esScanResult
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\EsScanResult|null $esScanResult esScanResult
    *
    * @return $this
    */
    public function setEsScanResult($esScanResult)
    {
        $this->container['esScanResult'] = $esScanResult;
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

