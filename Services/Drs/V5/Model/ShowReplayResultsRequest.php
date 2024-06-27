<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplayResultsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplayResultsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  结果类型。取值： - shard_statistics：回放概览基于时间维度统计信息。 - slow_sql：慢SQL详情。 - error_sql： 回放异常SQL详情。 - slow_sql_template：慢SQL统计信息。  - error_sql_template：异常SQL统计信息。 - replaying_sql：正在回放SQL详情。 - error_classification：回放异常SQL分类。
    * startTime  查询数据的起始时间，在type为shard_statistics、slow_sql、error_sql时必填
    * endTime  查询数据的结束时间，在type为shard_statistics、slow_sql、error_sql时必填
    * offset  分页查询数据表当前超始偏移量, 在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * limit  分页查询数据表当前页数据总量，在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * sortKey  返回结果按该关键字排序（slow_sql_template支持count，maxLatency、avgLatency关键字，error_sql_template支持count关键字）
    * sortDir  排序规则，取值如下： - asc：升序 - desc：降序
    * targetName  回放数据库名称，用于在一致性回放策略场景，过滤目标库与源库镜像库回放结果。参数非必须，不提供则默认查询所有数据，其取值如下： - target：查询目标库回放结果 - target_mirror：查询源库镜像库回放结果
    * isSample  是否查询样例true/false，type=slow_sql/error_sql时生效，值为true时只查询一条样例数据。
    * errorType  错误分类，type=error_sql/error_sql_template时生效，根据错误分类过滤数据。
    * sqlTemplateMd5  sql模板md5，type=slow_sql/error_sql时生效，根据模板过滤对应的异常SQL和慢SQL，该值为本接口type=slow_sql_template/error_sql_template时的返回字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'xLanguage' => 'string',
            'type' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'targetName' => 'string',
            'isSample' => 'bool',
            'errorType' => 'string',
            'sqlTemplateMd5' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  结果类型。取值： - shard_statistics：回放概览基于时间维度统计信息。 - slow_sql：慢SQL详情。 - error_sql： 回放异常SQL详情。 - slow_sql_template：慢SQL统计信息。  - error_sql_template：异常SQL统计信息。 - replaying_sql：正在回放SQL详情。 - error_classification：回放异常SQL分类。
    * startTime  查询数据的起始时间，在type为shard_statistics、slow_sql、error_sql时必填
    * endTime  查询数据的结束时间，在type为shard_statistics、slow_sql、error_sql时必填
    * offset  分页查询数据表当前超始偏移量, 在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * limit  分页查询数据表当前页数据总量，在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * sortKey  返回结果按该关键字排序（slow_sql_template支持count，maxLatency、avgLatency关键字，error_sql_template支持count关键字）
    * sortDir  排序规则，取值如下： - asc：升序 - desc：降序
    * targetName  回放数据库名称，用于在一致性回放策略场景，过滤目标库与源库镜像库回放结果。参数非必须，不提供则默认查询所有数据，其取值如下： - target：查询目标库回放结果 - target_mirror：查询源库镜像库回放结果
    * isSample  是否查询样例true/false，type=slow_sql/error_sql时生效，值为true时只查询一条样例数据。
    * errorType  错误分类，type=error_sql/error_sql_template时生效，根据错误分类过滤数据。
    * sqlTemplateMd5  sql模板md5，type=slow_sql/error_sql时生效，根据模板过滤对应的异常SQL和慢SQL，该值为本接口type=slow_sql_template/error_sql_template时的返回字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'xLanguage' => null,
        'type' => null,
        'startTime' => null,
        'endTime' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortKey' => null,
        'sortDir' => null,
        'targetName' => null,
        'isSample' => null,
        'errorType' => null,
        'sqlTemplateMd5' => null
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
    * type  结果类型。取值： - shard_statistics：回放概览基于时间维度统计信息。 - slow_sql：慢SQL详情。 - error_sql： 回放异常SQL详情。 - slow_sql_template：慢SQL统计信息。  - error_sql_template：异常SQL统计信息。 - replaying_sql：正在回放SQL详情。 - error_classification：回放异常SQL分类。
    * startTime  查询数据的起始时间，在type为shard_statistics、slow_sql、error_sql时必填
    * endTime  查询数据的结束时间，在type为shard_statistics、slow_sql、error_sql时必填
    * offset  分页查询数据表当前超始偏移量, 在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * limit  分页查询数据表当前页数据总量，在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * sortKey  返回结果按该关键字排序（slow_sql_template支持count，maxLatency、avgLatency关键字，error_sql_template支持count关键字）
    * sortDir  排序规则，取值如下： - asc：升序 - desc：降序
    * targetName  回放数据库名称，用于在一致性回放策略场景，过滤目标库与源库镜像库回放结果。参数非必须，不提供则默认查询所有数据，其取值如下： - target：查询目标库回放结果 - target_mirror：查询源库镜像库回放结果
    * isSample  是否查询样例true/false，type=slow_sql/error_sql时生效，值为true时只查询一条样例数据。
    * errorType  错误分类，type=error_sql/error_sql_template时生效，根据错误分类过滤数据。
    * sqlTemplateMd5  sql模板md5，type=slow_sql/error_sql时生效，根据模板过滤对应的异常SQL和慢SQL，该值为本接口type=slow_sql_template/error_sql_template时的返回字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'xLanguage' => 'X-Language',
            'type' => 'type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'targetName' => 'target_name',
            'isSample' => 'is_sample',
            'errorType' => 'error_type',
            'sqlTemplateMd5' => 'sql_template_md5'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  结果类型。取值： - shard_statistics：回放概览基于时间维度统计信息。 - slow_sql：慢SQL详情。 - error_sql： 回放异常SQL详情。 - slow_sql_template：慢SQL统计信息。  - error_sql_template：异常SQL统计信息。 - replaying_sql：正在回放SQL详情。 - error_classification：回放异常SQL分类。
    * startTime  查询数据的起始时间，在type为shard_statistics、slow_sql、error_sql时必填
    * endTime  查询数据的结束时间，在type为shard_statistics、slow_sql、error_sql时必填
    * offset  分页查询数据表当前超始偏移量, 在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * limit  分页查询数据表当前页数据总量，在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * sortKey  返回结果按该关键字排序（slow_sql_template支持count，maxLatency、avgLatency关键字，error_sql_template支持count关键字）
    * sortDir  排序规则，取值如下： - asc：升序 - desc：降序
    * targetName  回放数据库名称，用于在一致性回放策略场景，过滤目标库与源库镜像库回放结果。参数非必须，不提供则默认查询所有数据，其取值如下： - target：查询目标库回放结果 - target_mirror：查询源库镜像库回放结果
    * isSample  是否查询样例true/false，type=slow_sql/error_sql时生效，值为true时只查询一条样例数据。
    * errorType  错误分类，type=error_sql/error_sql_template时生效，根据错误分类过滤数据。
    * sqlTemplateMd5  sql模板md5，type=slow_sql/error_sql时生效，根据模板过滤对应的异常SQL和慢SQL，该值为本接口type=slow_sql_template/error_sql_template时的返回字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'xLanguage' => 'setXLanguage',
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'targetName' => 'setTargetName',
            'isSample' => 'setIsSample',
            'errorType' => 'setErrorType',
            'sqlTemplateMd5' => 'setSqlTemplateMd5'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * xLanguage  请求语言类型。
    * type  结果类型。取值： - shard_statistics：回放概览基于时间维度统计信息。 - slow_sql：慢SQL详情。 - error_sql： 回放异常SQL详情。 - slow_sql_template：慢SQL统计信息。  - error_sql_template：异常SQL统计信息。 - replaying_sql：正在回放SQL详情。 - error_classification：回放异常SQL分类。
    * startTime  查询数据的起始时间，在type为shard_statistics、slow_sql、error_sql时必填
    * endTime  查询数据的结束时间，在type为shard_statistics、slow_sql、error_sql时必填
    * offset  分页查询数据表当前超始偏移量, 在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * limit  分页查询数据表当前页数据总量，在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    * sortKey  返回结果按该关键字排序（slow_sql_template支持count，maxLatency、avgLatency关键字，error_sql_template支持count关键字）
    * sortDir  排序规则，取值如下： - asc：升序 - desc：降序
    * targetName  回放数据库名称，用于在一致性回放策略场景，过滤目标库与源库镜像库回放结果。参数非必须，不提供则默认查询所有数据，其取值如下： - target：查询目标库回放结果 - target_mirror：查询源库镜像库回放结果
    * isSample  是否查询样例true/false，type=slow_sql/error_sql时生效，值为true时只查询一条样例数据。
    * errorType  错误分类，type=error_sql/error_sql_template时生效，根据错误分类过滤数据。
    * sqlTemplateMd5  sql模板md5，type=slow_sql/error_sql时生效，根据模板过滤对应的异常SQL和慢SQL，该值为本接口type=slow_sql_template/error_sql_template时的返回字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'xLanguage' => 'getXLanguage',
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'targetName' => 'getTargetName',
            'isSample' => 'getIsSample',
            'errorType' => 'getErrorType',
            'sqlTemplateMd5' => 'getSqlTemplateMd5'
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
    const TYPE_SHARD_STATISTICS = 'shard_statistics';
    const TYPE_SLOW_SQL = 'slow_sql';
    const TYPE_ERROR_SQL = 'error_sql';
    const TYPE_SLOW_SQL_TEMPLATE = 'slow_sql_template';
    const TYPE_ERROR_SQL_TEMPLATE = 'error_sql_template';
    const TYPE_REPLAYING_SQL = 'replaying_sql';
    const TYPE_ERROR_CLASSIFICATION = 'error_classification';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    const TARGET_NAME_TARGET = 'target';
    const TARGET_NAME_TARGET_MIRROR = 'target_mirror';
    

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
            self::TYPE_SHARD_STATISTICS,
            self::TYPE_SLOW_SQL,
            self::TYPE_ERROR_SQL,
            self::TYPE_SLOW_SQL_TEMPLATE,
            self::TYPE_ERROR_SQL_TEMPLATE,
            self::TYPE_REPLAYING_SQL,
            self::TYPE_ERROR_CLASSIFICATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetNameAllowableValues()
    {
        return [
            self::TARGET_NAME_TARGET,
            self::TARGET_NAME_TARGET_MIRROR,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['targetName'] = isset($data['targetName']) ? $data['targetName'] : null;
        $this->container['isSample'] = isset($data['isSample']) ? $data['isSample'] : null;
        $this->container['errorType'] = isset($data['errorType']) ? $data['errorType'] : null;
        $this->container['sqlTemplateMd5'] = isset($data['sqlTemplateMd5']) ? $data['sqlTemplateMd5'] : null;
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

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTargetNameAllowableValues();
                if (!is_null($this->container['targetName']) && !in_array($this->container['targetName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetName', must be one of '%s'",
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
    *  结果类型。取值： - shard_statistics：回放概览基于时间维度统计信息。 - slow_sql：慢SQL详情。 - error_sql： 回放异常SQL详情。 - slow_sql_template：慢SQL统计信息。  - error_sql_template：异常SQL统计信息。 - replaying_sql：正在回放SQL详情。 - error_classification：回放异常SQL分类。
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
    * @param string $type 结果类型。取值： - shard_statistics：回放概览基于时间维度统计信息。 - slow_sql：慢SQL详情。 - error_sql： 回放异常SQL详情。 - slow_sql_template：慢SQL统计信息。  - error_sql_template：异常SQL统计信息。 - replaying_sql：正在回放SQL详情。 - error_classification：回放异常SQL分类。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  查询数据的起始时间，在type为shard_statistics、slow_sql、error_sql时必填
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 查询数据的起始时间，在type为shard_statistics、slow_sql、error_sql时必填
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询数据的结束时间，在type为shard_statistics、slow_sql、error_sql时必填
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 查询数据的结束时间，在type为shard_statistics、slow_sql、error_sql时必填
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询数据表当前超始偏移量, 在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
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
    * @param int|null $offset 分页查询数据表当前超始偏移量, 在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
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
    *  分页查询数据表当前页数据总量，在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
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
    * @param int|null $limit 分页查询数据表当前页数据总量，在type为slow_sql、error_sql、slow_sql_template、error_sql_template必填
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序（slow_sql_template支持count，maxLatency、avgLatency关键字，error_sql_template支持count关键字）
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序（slow_sql_template支持count，maxLatency、avgLatency关键字，error_sql_template支持count关键字）
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序规则，取值如下： - asc：升序 - desc：降序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序规则，取值如下： - asc：升序 - desc：降序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets targetName
    *  回放数据库名称，用于在一致性回放策略场景，过滤目标库与源库镜像库回放结果。参数非必须，不提供则默认查询所有数据，其取值如下： - target：查询目标库回放结果 - target_mirror：查询源库镜像库回放结果
    *
    * @return string|null
    */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
    * Sets targetName
    *
    * @param string|null $targetName 回放数据库名称，用于在一致性回放策略场景，过滤目标库与源库镜像库回放结果。参数非必须，不提供则默认查询所有数据，其取值如下： - target：查询目标库回放结果 - target_mirror：查询源库镜像库回放结果
    *
    * @return $this
    */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;
        return $this;
    }

    /**
    * Gets isSample
    *  是否查询样例true/false，type=slow_sql/error_sql时生效，值为true时只查询一条样例数据。
    *
    * @return bool|null
    */
    public function getIsSample()
    {
        return $this->container['isSample'];
    }

    /**
    * Sets isSample
    *
    * @param bool|null $isSample 是否查询样例true/false，type=slow_sql/error_sql时生效，值为true时只查询一条样例数据。
    *
    * @return $this
    */
    public function setIsSample($isSample)
    {
        $this->container['isSample'] = $isSample;
        return $this;
    }

    /**
    * Gets errorType
    *  错误分类，type=error_sql/error_sql_template时生效，根据错误分类过滤数据。
    *
    * @return string|null
    */
    public function getErrorType()
    {
        return $this->container['errorType'];
    }

    /**
    * Sets errorType
    *
    * @param string|null $errorType 错误分类，type=error_sql/error_sql_template时生效，根据错误分类过滤数据。
    *
    * @return $this
    */
    public function setErrorType($errorType)
    {
        $this->container['errorType'] = $errorType;
        return $this;
    }

    /**
    * Gets sqlTemplateMd5
    *  sql模板md5，type=slow_sql/error_sql时生效，根据模板过滤对应的异常SQL和慢SQL，该值为本接口type=slow_sql_template/error_sql_template时的返回字段。
    *
    * @return string|null
    */
    public function getSqlTemplateMd5()
    {
        return $this->container['sqlTemplateMd5'];
    }

    /**
    * Sets sqlTemplateMd5
    *
    * @param string|null $sqlTemplateMd5 sql模板md5，type=slow_sql/error_sql时生效，根据模板过滤对应的异常SQL和慢SQL，该值为本接口type=slow_sql_template/error_sql_template时的返回字段。
    *
    * @return $this
    */
    public function setSqlTemplateMd5($sqlTemplateMd5)
    {
        $this->container['sqlTemplateMd5'] = $sqlTemplateMd5;
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

