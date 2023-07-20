<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  任务详情类型。取值： - overview：任务概览信息。 - detail：任务基本信息。 - network：测试连接结果信息，需配合query_id参数一起查询。 - precheck：预检查结果信息，需配合query_id参数一起查询。 - progress：任务进度信息。 - log：任务日志信息，支持分页查询参数offset与limit。 - comapre：查询对比任务。 - file：对象导入信息
    * queryId  通过指定Query ID查询任务详情。  说明：部分type类型的任务详情，需要通过触发该操作的请求返回的query_id进行操作结果查询。
    * offset  偏移量，表示查询该偏移量后面的记录。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * limit  查询返回记录的数量限制。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * compareType  对比任务类型 - object_compare：对象对比。 - line_compare：行对比。 - content_compare：内容对比。 - data_compare：数据对比。
    * queryType  查询对比内容。取值： - overview：对比任务概览。 - list：数据对比任务列表。 - detail：对比详情。
    * objectType  查询对象对比详情类型。取值： - DB：库级对比详情。 - TABLE：表级对比详情。 - INDEX：索引对比详情。
    * compareTaskId  对比任务ID。
    * sourceDbName  数据对比源库名称。
    * targetDbName  数据对比目标库名称。
    * compareDetailType  对比结果类型。取值： - compare：对比完成。 - uncompare：无法对比。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'xLanguage' => 'string',
            'type' => 'string',
            'queryId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'compareType' => 'string',
            'queryType' => 'string',
            'objectType' => 'string',
            'compareTaskId' => 'string',
            'sourceDbName' => 'string',
            'targetDbName' => 'string',
            'compareDetailType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  任务详情类型。取值： - overview：任务概览信息。 - detail：任务基本信息。 - network：测试连接结果信息，需配合query_id参数一起查询。 - precheck：预检查结果信息，需配合query_id参数一起查询。 - progress：任务进度信息。 - log：任务日志信息，支持分页查询参数offset与limit。 - comapre：查询对比任务。 - file：对象导入信息
    * queryId  通过指定Query ID查询任务详情。  说明：部分type类型的任务详情，需要通过触发该操作的请求返回的query_id进行操作结果查询。
    * offset  偏移量，表示查询该偏移量后面的记录。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * limit  查询返回记录的数量限制。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * compareType  对比任务类型 - object_compare：对象对比。 - line_compare：行对比。 - content_compare：内容对比。 - data_compare：数据对比。
    * queryType  查询对比内容。取值： - overview：对比任务概览。 - list：数据对比任务列表。 - detail：对比详情。
    * objectType  查询对象对比详情类型。取值： - DB：库级对比详情。 - TABLE：表级对比详情。 - INDEX：索引对比详情。
    * compareTaskId  对比任务ID。
    * sourceDbName  数据对比源库名称。
    * targetDbName  数据对比目标库名称。
    * compareDetailType  对比结果类型。取值： - compare：对比完成。 - uncompare：无法对比。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'xLanguage' => null,
        'type' => null,
        'queryId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'compareType' => null,
        'queryType' => null,
        'objectType' => null,
        'compareTaskId' => null,
        'sourceDbName' => null,
        'targetDbName' => null,
        'compareDetailType' => null
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
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  任务详情类型。取值： - overview：任务概览信息。 - detail：任务基本信息。 - network：测试连接结果信息，需配合query_id参数一起查询。 - precheck：预检查结果信息，需配合query_id参数一起查询。 - progress：任务进度信息。 - log：任务日志信息，支持分页查询参数offset与limit。 - comapre：查询对比任务。 - file：对象导入信息
    * queryId  通过指定Query ID查询任务详情。  说明：部分type类型的任务详情，需要通过触发该操作的请求返回的query_id进行操作结果查询。
    * offset  偏移量，表示查询该偏移量后面的记录。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * limit  查询返回记录的数量限制。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * compareType  对比任务类型 - object_compare：对象对比。 - line_compare：行对比。 - content_compare：内容对比。 - data_compare：数据对比。
    * queryType  查询对比内容。取值： - overview：对比任务概览。 - list：数据对比任务列表。 - detail：对比详情。
    * objectType  查询对象对比详情类型。取值： - DB：库级对比详情。 - TABLE：表级对比详情。 - INDEX：索引对比详情。
    * compareTaskId  对比任务ID。
    * sourceDbName  数据对比源库名称。
    * targetDbName  数据对比目标库名称。
    * compareDetailType  对比结果类型。取值： - compare：对比完成。 - uncompare：无法对比。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'xLanguage' => 'X-Language',
            'type' => 'type',
            'queryId' => 'query_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'compareType' => 'compare_type',
            'queryType' => 'query_type',
            'objectType' => 'object_type',
            'compareTaskId' => 'compare_task_id',
            'sourceDbName' => 'source_db_name',
            'targetDbName' => 'target_db_name',
            'compareDetailType' => 'compare_detail_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  任务详情类型。取值： - overview：任务概览信息。 - detail：任务基本信息。 - network：测试连接结果信息，需配合query_id参数一起查询。 - precheck：预检查结果信息，需配合query_id参数一起查询。 - progress：任务进度信息。 - log：任务日志信息，支持分页查询参数offset与limit。 - comapre：查询对比任务。 - file：对象导入信息
    * queryId  通过指定Query ID查询任务详情。  说明：部分type类型的任务详情，需要通过触发该操作的请求返回的query_id进行操作结果查询。
    * offset  偏移量，表示查询该偏移量后面的记录。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * limit  查询返回记录的数量限制。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * compareType  对比任务类型 - object_compare：对象对比。 - line_compare：行对比。 - content_compare：内容对比。 - data_compare：数据对比。
    * queryType  查询对比内容。取值： - overview：对比任务概览。 - list：数据对比任务列表。 - detail：对比详情。
    * objectType  查询对象对比详情类型。取值： - DB：库级对比详情。 - TABLE：表级对比详情。 - INDEX：索引对比详情。
    * compareTaskId  对比任务ID。
    * sourceDbName  数据对比源库名称。
    * targetDbName  数据对比目标库名称。
    * compareDetailType  对比结果类型。取值： - compare：对比完成。 - uncompare：无法对比。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'xLanguage' => 'setXLanguage',
            'type' => 'setType',
            'queryId' => 'setQueryId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'compareType' => 'setCompareType',
            'queryType' => 'setQueryType',
            'objectType' => 'setObjectType',
            'compareTaskId' => 'setCompareTaskId',
            'sourceDbName' => 'setSourceDbName',
            'targetDbName' => 'setTargetDbName',
            'compareDetailType' => 'setCompareDetailType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  任务详情类型。取值： - overview：任务概览信息。 - detail：任务基本信息。 - network：测试连接结果信息，需配合query_id参数一起查询。 - precheck：预检查结果信息，需配合query_id参数一起查询。 - progress：任务进度信息。 - log：任务日志信息，支持分页查询参数offset与limit。 - comapre：查询对比任务。 - file：对象导入信息
    * queryId  通过指定Query ID查询任务详情。  说明：部分type类型的任务详情，需要通过触发该操作的请求返回的query_id进行操作结果查询。
    * offset  偏移量，表示查询该偏移量后面的记录。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * limit  查询返回记录的数量限制。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    * compareType  对比任务类型 - object_compare：对象对比。 - line_compare：行对比。 - content_compare：内容对比。 - data_compare：数据对比。
    * queryType  查询对比内容。取值： - overview：对比任务概览。 - list：数据对比任务列表。 - detail：对比详情。
    * objectType  查询对象对比详情类型。取值： - DB：库级对比详情。 - TABLE：表级对比详情。 - INDEX：索引对比详情。
    * compareTaskId  对比任务ID。
    * sourceDbName  数据对比源库名称。
    * targetDbName  数据对比目标库名称。
    * compareDetailType  对比结果类型。取值： - compare：对比完成。 - uncompare：无法对比。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'xLanguage' => 'getXLanguage',
            'type' => 'getType',
            'queryId' => 'getQueryId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'compareType' => 'getCompareType',
            'queryType' => 'getQueryType',
            'objectType' => 'getObjectType',
            'compareTaskId' => 'getCompareTaskId',
            'sourceDbName' => 'getSourceDbName',
            'targetDbName' => 'getTargetDbName',
            'compareDetailType' => 'getCompareDetailType'
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
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const TYPE_OVERVIEW = 'overview';
    const TYPE_DETAIL = 'detail';
    const TYPE_NETWORK = 'network';
    const TYPE_PRECHECK = 'precheck';
    const TYPE_PROGRESS = 'progress';
    const TYPE_LOG = 'log';
    const TYPE_COMAPRE = 'comapre';
    const TYPE_FILE = 'file';
    const COMPARE_TYPE_OBJECT_COMPARE = 'object_compare';
    const COMPARE_TYPE_LINE_COMPARE = 'line_compare';
    const COMPARE_TYPE_CONTENT_COMPARE = 'content_compare';
    const COMPARE_TYPE_DATA_COMPARE = 'data_compare';
    const QUERY_TYPE_OVERVIEW = 'overview';
    const QUERY_TYPE__LIST = 'list';
    const QUERY_TYPE_DETAIL = 'detail';
    const OBJECT_TYPE_DB = 'DB';
    const OBJECT_TYPE_TABLE = 'TABLE';
    const OBJECT_TYPE_INDEX = 'INDEX';
    const COMPARE_DETAIL_TYPE_COMPARE = 'compare';
    const COMPARE_DETAIL_TYPE_UNCOMPARE = 'uncompare';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OVERVIEW,
            self::TYPE_DETAIL,
            self::TYPE_NETWORK,
            self::TYPE_PRECHECK,
            self::TYPE_PROGRESS,
            self::TYPE_LOG,
            self::TYPE_COMAPRE,
            self::TYPE_FILE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompareTypeAllowableValues()
    {
        return [
            self::COMPARE_TYPE_OBJECT_COMPARE,
            self::COMPARE_TYPE_LINE_COMPARE,
            self::COMPARE_TYPE_CONTENT_COMPARE,
            self::COMPARE_TYPE_DATA_COMPARE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueryTypeAllowableValues()
    {
        return [
            self::QUERY_TYPE_OVERVIEW,
            self::QUERY_TYPE__LIST,
            self::QUERY_TYPE_DETAIL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_DB,
            self::OBJECT_TYPE_TABLE,
            self::OBJECT_TYPE_INDEX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompareDetailTypeAllowableValues()
    {
        return [
            self::COMPARE_DETAIL_TYPE_COMPARE,
            self::COMPARE_DETAIL_TYPE_UNCOMPARE,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : 'en-us';
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['compareTaskId'] = isset($data['compareTaskId']) ? $data['compareTaskId'] : null;
        $this->container['sourceDbName'] = isset($data['sourceDbName']) ? $data['sourceDbName'] : null;
        $this->container['targetDbName'] = isset($data['targetDbName']) ? $data['targetDbName'] : null;
        $this->container['compareDetailType'] = isset($data['compareDetailType']) ? $data['compareDetailType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCompareTypeAllowableValues();
                if (!is_null($this->container['compareType']) && !in_array($this->container['compareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getQueryTypeAllowableValues();
                if (!is_null($this->container['queryType']) && !in_array($this->container['queryType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queryType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCompareDetailTypeAllowableValues();
                if (!is_null($this->container['compareDetailType']) && !in_array($this->container['compareDetailType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compareDetailType', must be one of '%s'",
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
    * Gets jobId
    *  任务ID。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets type
    *  任务详情类型。取值： - overview：任务概览信息。 - detail：任务基本信息。 - network：测试连接结果信息，需配合query_id参数一起查询。 - precheck：预检查结果信息，需配合query_id参数一起查询。 - progress：任务进度信息。 - log：任务日志信息，支持分页查询参数offset与limit。 - comapre：查询对比任务。 - file：对象导入信息
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 任务详情类型。取值： - overview：任务概览信息。 - detail：任务基本信息。 - network：测试连接结果信息，需配合query_id参数一起查询。 - precheck：预检查结果信息，需配合query_id参数一起查询。 - progress：任务进度信息。 - log：任务日志信息，支持分页查询参数offset与limit。 - comapre：查询对比任务。 - file：对象导入信息
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets queryId
    *  通过指定Query ID查询任务详情。  说明：部分type类型的任务详情，需要通过触发该操作的请求返回的query_id进行操作结果查询。
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId 通过指定Query ID查询任务详情。  说明：部分type类型的任务详情，需要通过触发该操作的请求返回的query_id进行操作结果查询。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示查询该偏移量后面的记录。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示查询该偏移量后面的记录。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回记录的数量限制。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询返回记录的数量限制。  说明：部分type类型的任务详情支持分页查询，可以通过传递该参数进行分页控制。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets compareType
    *  对比任务类型 - object_compare：对象对比。 - line_compare：行对比。 - content_compare：内容对比。 - data_compare：数据对比。
    *
    * @return string|null
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string|null $compareType 对比任务类型 - object_compare：对象对比。 - line_compare：行对比。 - content_compare：内容对比。 - data_compare：数据对比。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets queryType
    *  查询对比内容。取值： - overview：对比任务概览。 - list：数据对比任务列表。 - detail：对比详情。
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 查询对比内容。取值： - overview：对比任务概览。 - list：数据对比任务列表。 - detail：对比详情。
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets objectType
    *  查询对象对比详情类型。取值： - DB：库级对比详情。 - TABLE：表级对比详情。 - INDEX：索引对比详情。
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 查询对象对比详情类型。取值： - DB：库级对比详情。 - TABLE：表级对比详情。 - INDEX：索引对比详情。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets compareTaskId
    *  对比任务ID。
    *
    * @return string|null
    */
    public function getCompareTaskId()
    {
        return $this->container['compareTaskId'];
    }

    /**
    * Sets compareTaskId
    *
    * @param string|null $compareTaskId 对比任务ID。
    *
    * @return $this
    */
    public function setCompareTaskId($compareTaskId)
    {
        $this->container['compareTaskId'] = $compareTaskId;
        return $this;
    }

    /**
    * Gets sourceDbName
    *  数据对比源库名称。
    *
    * @return string|null
    */
    public function getSourceDbName()
    {
        return $this->container['sourceDbName'];
    }

    /**
    * Sets sourceDbName
    *
    * @param string|null $sourceDbName 数据对比源库名称。
    *
    * @return $this
    */
    public function setSourceDbName($sourceDbName)
    {
        $this->container['sourceDbName'] = $sourceDbName;
        return $this;
    }

    /**
    * Gets targetDbName
    *  数据对比目标库名称。
    *
    * @return string|null
    */
    public function getTargetDbName()
    {
        return $this->container['targetDbName'];
    }

    /**
    * Sets targetDbName
    *
    * @param string|null $targetDbName 数据对比目标库名称。
    *
    * @return $this
    */
    public function setTargetDbName($targetDbName)
    {
        $this->container['targetDbName'] = $targetDbName;
        return $this;
    }

    /**
    * Gets compareDetailType
    *  对比结果类型。取值： - compare：对比完成。 - uncompare：无法对比。
    *
    * @return string|null
    */
    public function getCompareDetailType()
    {
        return $this->container['compareDetailType'];
    }

    /**
    * Sets compareDetailType
    *
    * @param string|null $compareDetailType 对比结果类型。取值： - compare：对比完成。 - uncompare：无法对比。
    *
    * @return $this
    */
    public function setCompareDetailType($compareDetailType)
    {
        $this->container['compareDetailType'] = $compareDetailType;
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

