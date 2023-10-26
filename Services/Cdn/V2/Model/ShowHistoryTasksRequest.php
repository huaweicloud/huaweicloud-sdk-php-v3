<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHistoryTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHistoryTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * pageSize  单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  当前查询第几页，取值范围为1-65535。默认值1。
    * status  任务状态。 task_inprocess 表示任务处理中，task_done表示任务完成。
    * startDate  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endDate  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * orderField  用来排序的字段，支持的字段有“task_type”：任务的类型，“total”：url总数，“processing”：处理中的url个数， “succeed”：成功处理的url个数，“failed”：处理失败的url个数，“create_time”：任务的创建时间。order_field和order_type必须同时传值，否则使用默认值\"create_time\" 和 \"desc\"：降序。
    * orderType  desc：降序，或者asc：升序。默认值desc。
    * fileType  默认是文件file。file：文件,directory：目录。
    * taskType  任务类型，refresh：刷新任务；preheating：预热任务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'pageSize' => 'int',
            'pageNumber' => 'int',
            'status' => 'string',
            'startDate' => 'int',
            'endDate' => 'int',
            'orderField' => 'string',
            'orderType' => 'string',
            'fileType' => 'string',
            'taskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * pageSize  单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  当前查询第几页，取值范围为1-65535。默认值1。
    * status  任务状态。 task_inprocess 表示任务处理中，task_done表示任务完成。
    * startDate  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endDate  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * orderField  用来排序的字段，支持的字段有“task_type”：任务的类型，“total”：url总数，“processing”：处理中的url个数， “succeed”：成功处理的url个数，“failed”：处理失败的url个数，“create_time”：任务的创建时间。order_field和order_type必须同时传值，否则使用默认值\"create_time\" 和 \"desc\"：降序。
    * orderType  desc：降序，或者asc：升序。默认值desc。
    * fileType  默认是文件file。file：文件,directory：目录。
    * taskType  任务类型，refresh：刷新任务；preheating：预热任务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'pageSize' => null,
        'pageNumber' => null,
        'status' => null,
        'startDate' => 'int64',
        'endDate' => 'int64',
        'orderField' => null,
        'orderType' => null,
        'fileType' => null,
        'taskType' => null
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
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * pageSize  单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  当前查询第几页，取值范围为1-65535。默认值1。
    * status  任务状态。 task_inprocess 表示任务处理中，task_done表示任务完成。
    * startDate  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endDate  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * orderField  用来排序的字段，支持的字段有“task_type”：任务的类型，“total”：url总数，“processing”：处理中的url个数， “succeed”：成功处理的url个数，“failed”：处理失败的url个数，“create_time”：任务的创建时间。order_field和order_type必须同时传值，否则使用默认值\"create_time\" 和 \"desc\"：降序。
    * orderType  desc：降序，或者asc：升序。默认值desc。
    * fileType  默认是文件file。file：文件,directory：目录。
    * taskType  任务类型，refresh：刷新任务；preheating：预热任务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'pageSize' => 'page_size',
            'pageNumber' => 'page_number',
            'status' => 'status',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'orderField' => 'order_field',
            'orderType' => 'order_type',
            'fileType' => 'file_type',
            'taskType' => 'task_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * pageSize  单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  当前查询第几页，取值范围为1-65535。默认值1。
    * status  任务状态。 task_inprocess 表示任务处理中，task_done表示任务完成。
    * startDate  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endDate  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * orderField  用来排序的字段，支持的字段有“task_type”：任务的类型，“total”：url总数，“processing”：处理中的url个数， “succeed”：成功处理的url个数，“failed”：处理失败的url个数，“create_time”：任务的创建时间。order_field和order_type必须同时传值，否则使用默认值\"create_time\" 和 \"desc\"：降序。
    * orderType  desc：降序，或者asc：升序。默认值desc。
    * fileType  默认是文件file。file：文件,directory：目录。
    * taskType  任务类型，refresh：刷新任务；preheating：预热任务
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'pageSize' => 'setPageSize',
            'pageNumber' => 'setPageNumber',
            'status' => 'setStatus',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'orderField' => 'setOrderField',
            'orderType' => 'setOrderType',
            'fileType' => 'setFileType',
            'taskType' => 'setTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * pageSize  单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  当前查询第几页，取值范围为1-65535。默认值1。
    * status  任务状态。 task_inprocess 表示任务处理中，task_done表示任务完成。
    * startDate  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endDate  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * orderField  用来排序的字段，支持的字段有“task_type”：任务的类型，“total”：url总数，“processing”：处理中的url个数， “succeed”：成功处理的url个数，“failed”：处理失败的url个数，“create_time”：任务的创建时间。order_field和order_type必须同时传值，否则使用默认值\"create_time\" 和 \"desc\"：降序。
    * orderType  desc：降序，或者asc：升序。默认值desc。
    * fileType  默认是文件file。file：文件,directory：目录。
    * taskType  任务类型，refresh：刷新任务；preheating：预热任务
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'pageSize' => 'getPageSize',
            'pageNumber' => 'getPageNumber',
            'status' => 'getStatus',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'orderField' => 'getOrderField',
            'orderType' => 'getOrderType',
            'fileType' => 'getFileType',
            'taskType' => 'getTaskType'
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
    const STATUS_TASK_INPROCESS = 'task_inprocess';
    const STATUS_TASK_DONE = 'task_done';
    const FILE_TYPE_FILE = 'file';
    const FILE_TYPE_DIRECTORY = 'directory';
    const TASK_TYPE_REFRESH = 'refresh';
    const TASK_TYPE_PREHEATING = 'preheating';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_TASK_INPROCESS,
            self::STATUS_TASK_DONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFileTypeAllowableValues()
    {
        return [
            self::FILE_TYPE_FILE,
            self::FILE_TYPE_DIRECTORY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_REFRESH,
            self::TASK_TYPE_PREHEATING,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['orderField'] = isset($data['orderField']) ? $data['orderField'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 10000)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageNumber']) && ($this->container['pageNumber'] > 65535)) {
                $invalidProperties[] = "invalid value for 'pageNumber', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['pageNumber']) && ($this->container['pageNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNumber', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFileTypeAllowableValues();
                if (!is_null($this->container['fileType']) && !in_array($this->container['fileType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fileType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
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
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets pageSize
    *  单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
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
    * @param int|null $pageSize 单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNumber
    *  当前查询第几页，取值范围为1-65535。默认值1。
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 当前查询第几页，取值范围为1-65535。默认值1。
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。 task_inprocess 表示任务处理中，task_done表示任务完成。
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
    * @param string|null $status 任务状态。 task_inprocess 表示任务处理中，task_done表示任务完成。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startDate
    *  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param int|null $startDate 查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param int|null $endDate 查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets orderField
    *  用来排序的字段，支持的字段有“task_type”：任务的类型，“total”：url总数，“processing”：处理中的url个数， “succeed”：成功处理的url个数，“failed”：处理失败的url个数，“create_time”：任务的创建时间。order_field和order_type必须同时传值，否则使用默认值\"create_time\" 和 \"desc\"：降序。
    *
    * @return string|null
    */
    public function getOrderField()
    {
        return $this->container['orderField'];
    }

    /**
    * Sets orderField
    *
    * @param string|null $orderField 用来排序的字段，支持的字段有“task_type”：任务的类型，“total”：url总数，“processing”：处理中的url个数， “succeed”：成功处理的url个数，“failed”：处理失败的url个数，“create_time”：任务的创建时间。order_field和order_type必须同时传值，否则使用默认值\"create_time\" 和 \"desc\"：降序。
    *
    * @return $this
    */
    public function setOrderField($orderField)
    {
        $this->container['orderField'] = $orderField;
        return $this;
    }

    /**
    * Gets orderType
    *  desc：降序，或者asc：升序。默认值desc。
    *
    * @return string|null
    */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
    * Sets orderType
    *
    * @param string|null $orderType desc：降序，或者asc：升序。默认值desc。
    *
    * @return $this
    */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;
        return $this;
    }

    /**
    * Gets fileType
    *  默认是文件file。file：文件,directory：目录。
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 默认是文件file。file：文件,directory：目录。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型，refresh：刷新任务；preheating：预热任务
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型，refresh：刷新任务；preheating：预热任务
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
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

