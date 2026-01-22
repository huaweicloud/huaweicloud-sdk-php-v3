<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * jobId  **参数解释**：任务ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * jobType  **参数解释**：任务类型。  **约束限制**：不涉及  **取值范围**： - cloneLoadbalancer：复制负载均衡器任务。 - cloneListener：复制监听器任务。 - batchCreateV2Loadbalancer：批量创建共享型负载均衡器任务。 - batchCreateV3Loadbalancer：批量创建独享型负载均衡器任务。 - batchDeleteLoadbalancer：批量删除负载均衡器任务。 - batchDeleteListener：批量删除监听器任务。  **默认取值**：不涉及
    * status  **参数解释**：任务状态。  **约束限制**：不涉及  **取值范围**： - INIT：初始状态。 - RUNNING：任务处理中。 - FAIL：任务处理失败。 - SUCCESS：任务处理成功。 - ROLLBACKING：任务正在回退。 - COMPLETE：任务完成。 - ROLLBACK_FAIL：回退失败。 - CANCEL：已取消。  **默认取值**：不涉及
    * errorCode  **参数解释**：任务的错误码。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * resourceId  **参数解释**：资源ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * beginTime  **参数解释**：查询任务的开始时间大于等于传入时间的任务。格式：yyyy-MM-dd'T'HH:mm:ss  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'jobId' => 'string',
            'jobType' => 'string',
            'status' => 'string',
            'errorCode' => 'string',
            'resourceId' => 'string',
            'beginTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * jobId  **参数解释**：任务ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * jobType  **参数解释**：任务类型。  **约束限制**：不涉及  **取值范围**： - cloneLoadbalancer：复制负载均衡器任务。 - cloneListener：复制监听器任务。 - batchCreateV2Loadbalancer：批量创建共享型负载均衡器任务。 - batchCreateV3Loadbalancer：批量创建独享型负载均衡器任务。 - batchDeleteLoadbalancer：批量删除负载均衡器任务。 - batchDeleteListener：批量删除监听器任务。  **默认取值**：不涉及
    * status  **参数解释**：任务状态。  **约束限制**：不涉及  **取值范围**： - INIT：初始状态。 - RUNNING：任务处理中。 - FAIL：任务处理失败。 - SUCCESS：任务处理成功。 - ROLLBACKING：任务正在回退。 - COMPLETE：任务完成。 - ROLLBACK_FAIL：回退失败。 - CANCEL：已取消。  **默认取值**：不涉及
    * errorCode  **参数解释**：任务的错误码。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * resourceId  **参数解释**：资源ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * beginTime  **参数解释**：查询任务的开始时间大于等于传入时间的任务。格式：yyyy-MM-dd'T'HH:mm:ss  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'jobId' => null,
        'jobType' => null,
        'status' => null,
        'errorCode' => null,
        'resourceId' => null,
        'beginTime' => null
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
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * jobId  **参数解释**：任务ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * jobType  **参数解释**：任务类型。  **约束限制**：不涉及  **取值范围**： - cloneLoadbalancer：复制负载均衡器任务。 - cloneListener：复制监听器任务。 - batchCreateV2Loadbalancer：批量创建共享型负载均衡器任务。 - batchCreateV3Loadbalancer：批量创建独享型负载均衡器任务。 - batchDeleteLoadbalancer：批量删除负载均衡器任务。 - batchDeleteListener：批量删除监听器任务。  **默认取值**：不涉及
    * status  **参数解释**：任务状态。  **约束限制**：不涉及  **取值范围**： - INIT：初始状态。 - RUNNING：任务处理中。 - FAIL：任务处理失败。 - SUCCESS：任务处理成功。 - ROLLBACKING：任务正在回退。 - COMPLETE：任务完成。 - ROLLBACK_FAIL：回退失败。 - CANCEL：已取消。  **默认取值**：不涉及
    * errorCode  **参数解释**：任务的错误码。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * resourceId  **参数解释**：资源ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * beginTime  **参数解释**：查询任务的开始时间大于等于传入时间的任务。格式：yyyy-MM-dd'T'HH:mm:ss  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'status' => 'status',
            'errorCode' => 'error_code',
            'resourceId' => 'resource_id',
            'beginTime' => 'begin_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * jobId  **参数解释**：任务ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * jobType  **参数解释**：任务类型。  **约束限制**：不涉及  **取值范围**： - cloneLoadbalancer：复制负载均衡器任务。 - cloneListener：复制监听器任务。 - batchCreateV2Loadbalancer：批量创建共享型负载均衡器任务。 - batchCreateV3Loadbalancer：批量创建独享型负载均衡器任务。 - batchDeleteLoadbalancer：批量删除负载均衡器任务。 - batchDeleteListener：批量删除监听器任务。  **默认取值**：不涉及
    * status  **参数解释**：任务状态。  **约束限制**：不涉及  **取值范围**： - INIT：初始状态。 - RUNNING：任务处理中。 - FAIL：任务处理失败。 - SUCCESS：任务处理成功。 - ROLLBACKING：任务正在回退。 - COMPLETE：任务完成。 - ROLLBACK_FAIL：回退失败。 - CANCEL：已取消。  **默认取值**：不涉及
    * errorCode  **参数解释**：任务的错误码。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * resourceId  **参数解释**：资源ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * beginTime  **参数解释**：查询任务的开始时间大于等于传入时间的任务。格式：yyyy-MM-dd'T'HH:mm:ss  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'status' => 'setStatus',
            'errorCode' => 'setErrorCode',
            'resourceId' => 'setResourceId',
            'beginTime' => 'setBeginTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * jobId  **参数解释**：任务ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * jobType  **参数解释**：任务类型。  **约束限制**：不涉及  **取值范围**： - cloneLoadbalancer：复制负载均衡器任务。 - cloneListener：复制监听器任务。 - batchCreateV2Loadbalancer：批量创建共享型负载均衡器任务。 - batchCreateV3Loadbalancer：批量创建独享型负载均衡器任务。 - batchDeleteLoadbalancer：批量删除负载均衡器任务。 - batchDeleteListener：批量删除监听器任务。  **默认取值**：不涉及
    * status  **参数解释**：任务状态。  **约束限制**：不涉及  **取值范围**： - INIT：初始状态。 - RUNNING：任务处理中。 - FAIL：任务处理失败。 - SUCCESS：任务处理成功。 - ROLLBACKING：任务正在回退。 - COMPLETE：任务完成。 - ROLLBACK_FAIL：回退失败。 - CANCEL：已取消。  **默认取值**：不涉及
    * errorCode  **参数解释**：任务的错误码。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * resourceId  **参数解释**：资源ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * beginTime  **参数解释**：查询任务的开始时间大于等于传入时间的任务。格式：yyyy-MM-dd'T'HH:mm:ss  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'status' => 'getStatus',
            'errorCode' => 'getErrorCode',
            'resourceId' => 'getResourceId',
            'beginTime' => 'getBeginTime'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets limit
    *  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
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
    * @param int|null $limit **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**：任务ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $jobId **参数解释**：任务ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobType
    *  **参数解释**：任务类型。  **约束限制**：不涉及  **取值范围**： - cloneLoadbalancer：复制负载均衡器任务。 - cloneListener：复制监听器任务。 - batchCreateV2Loadbalancer：批量创建共享型负载均衡器任务。 - batchCreateV3Loadbalancer：批量创建独享型负载均衡器任务。 - batchDeleteLoadbalancer：批量删除负载均衡器任务。 - batchDeleteListener：批量删除监听器任务。  **默认取值**：不涉及
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
    * @param string|null $jobType **参数解释**：任务类型。  **约束限制**：不涉及  **取值范围**： - cloneLoadbalancer：复制负载均衡器任务。 - cloneListener：复制监听器任务。 - batchCreateV2Loadbalancer：批量创建共享型负载均衡器任务。 - batchCreateV3Loadbalancer：批量创建独享型负载均衡器任务。 - batchDeleteLoadbalancer：批量删除负载均衡器任务。 - batchDeleteListener：批量删除监听器任务。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：任务状态。  **约束限制**：不涉及  **取值范围**： - INIT：初始状态。 - RUNNING：任务处理中。 - FAIL：任务处理失败。 - SUCCESS：任务处理成功。 - ROLLBACKING：任务正在回退。 - COMPLETE：任务完成。 - ROLLBACK_FAIL：回退失败。 - CANCEL：已取消。  **默认取值**：不涉及
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
    * @param string|null $status **参数解释**：任务状态。  **约束限制**：不涉及  **取值范围**： - INIT：初始状态。 - RUNNING：任务处理中。 - FAIL：任务处理失败。 - SUCCESS：任务处理成功。 - ROLLBACKING：任务正在回退。 - COMPLETE：任务完成。 - ROLLBACK_FAIL：回退失败。 - CANCEL：已取消。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorCode
    *  **参数解释**：任务的错误码。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $errorCode **参数解释**：任务的错误码。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**：资源ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**：资源ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**：查询任务的开始时间大于等于传入时间的任务。格式：yyyy-MM-dd'T'HH:mm:ss  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**：查询任务的开始时间大于等于传入时间的任务。格式：yyyy-MM-dd'T'HH:mm:ss  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
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

