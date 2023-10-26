<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * clusterId  集群ID
    * jobName  查询多个作业用all,查询单个作业输入作业名
    * filter  当“job_name”为“all”时，此参数用于模糊过滤作业
    * pageNo  指定作业页号
    * pageSize  每页作业数，值在10-100之间
    * jobType  作业类型: - jobType=NORMAL_JOB：表示查询表/文件迁移的作业。 - jobType=BATCH_JOB：表示查询整库迁移的作业。 - jobType=SCENARIO_JOB：表示查询场景迁移的作业。 - 不指定该参数时，默认只查询表/文件迁移的作业。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'clusterId' => 'string',
            'jobName' => 'string',
            'filter' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'jobType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * clusterId  集群ID
    * jobName  查询多个作业用all,查询单个作业输入作业名
    * filter  当“job_name”为“all”时，此参数用于模糊过滤作业
    * pageNo  指定作业页号
    * pageSize  每页作业数，值在10-100之间
    * jobType  作业类型: - jobType=NORMAL_JOB：表示查询表/文件迁移的作业。 - jobType=BATCH_JOB：表示查询整库迁移的作业。 - jobType=SCENARIO_JOB：表示查询场景迁移的作业。 - 不指定该参数时，默认只查询表/文件迁移的作业。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'clusterId' => null,
        'jobName' => null,
        'filter' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'jobType' => null
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
    * projectId  项目ID
    * clusterId  集群ID
    * jobName  查询多个作业用all,查询单个作业输入作业名
    * filter  当“job_name”为“all”时，此参数用于模糊过滤作业
    * pageNo  指定作业页号
    * pageSize  每页作业数，值在10-100之间
    * jobType  作业类型: - jobType=NORMAL_JOB：表示查询表/文件迁移的作业。 - jobType=BATCH_JOB：表示查询整库迁移的作业。 - jobType=SCENARIO_JOB：表示查询场景迁移的作业。 - 不指定该参数时，默认只查询表/文件迁移的作业。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'clusterId' => 'cluster_id',
            'jobName' => 'job_name',
            'filter' => 'filter',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'jobType' => 'jobType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * clusterId  集群ID
    * jobName  查询多个作业用all,查询单个作业输入作业名
    * filter  当“job_name”为“all”时，此参数用于模糊过滤作业
    * pageNo  指定作业页号
    * pageSize  每页作业数，值在10-100之间
    * jobType  作业类型: - jobType=NORMAL_JOB：表示查询表/文件迁移的作业。 - jobType=BATCH_JOB：表示查询整库迁移的作业。 - jobType=SCENARIO_JOB：表示查询场景迁移的作业。 - 不指定该参数时，默认只查询表/文件迁移的作业。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'clusterId' => 'setClusterId',
            'jobName' => 'setJobName',
            'filter' => 'setFilter',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'jobType' => 'setJobType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * clusterId  集群ID
    * jobName  查询多个作业用all,查询单个作业输入作业名
    * filter  当“job_name”为“all”时，此参数用于模糊过滤作业
    * pageNo  指定作业页号
    * pageSize  每页作业数，值在10-100之间
    * jobType  作业类型: - jobType=NORMAL_JOB：表示查询表/文件迁移的作业。 - jobType=BATCH_JOB：表示查询整库迁移的作业。 - jobType=SCENARIO_JOB：表示查询场景迁移的作业。 - 不指定该参数时，默认只查询表/文件迁移的作业。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'clusterId' => 'getClusterId',
            'jobName' => 'getJobName',
            'filter' => 'getFilter',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'jobType' => 'getJobType'
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
    const JOB_TYPE_NORMAL_JOB = 'NORMAL_JOB';
    const JOB_TYPE_BATCH_JOB = 'BATCH_JOB';
    const JOB_TYPE_SCENARIO_JOB = 'SCENARIO_JOB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_NORMAL_JOB,
            self::JOB_TYPE_BATCH_JOB,
            self::JOB_TYPE_SCENARIO_JOB,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 10)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 10.";
            }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets jobName
    *  查询多个作业用all,查询单个作业输入作业名
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 查询多个作业用all,查询单个作业输入作业名
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets filter
    *  当“job_name”为“all”时，此参数用于模糊过滤作业
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 当“job_name”为“all”时，此参数用于模糊过滤作业
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets pageNo
    *  指定作业页号
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 指定作业页号
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页作业数，值在10-100之间
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页作业数，值在10-100之间
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型: - jobType=NORMAL_JOB：表示查询表/文件迁移的作业。 - jobType=BATCH_JOB：表示查询整库迁移的作业。 - jobType=SCENARIO_JOB：表示查询场景迁移的作业。 - 不指定该参数时，默认只查询表/文件迁移的作业。
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型: - jobType=NORMAL_JOB：表示查询表/文件迁移的作业。 - jobType=BATCH_JOB：表示查询整库迁移的作业。 - jobType=SCENARIO_JOB：表示查询场景迁移的作业。 - 不指定该参数时，默认只查询表/文件迁移的作业。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
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

