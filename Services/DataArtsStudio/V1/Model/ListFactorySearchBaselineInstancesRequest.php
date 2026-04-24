<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactorySearchBaselineInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactorySearchBaselineInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * baselineName  基线任务名称。
    * ownerName  责任人。
    * type  基线类型，DAY天基线，HOUR小时基线，默认查询所有基线类型。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3
    * status  状态： - ERROR：异常 - SAFE：安全 - DANGEROUS：预警 - OVER：破线 默认查询所有状态。
    * finishStatus  完成状态：UNFINISH未完成，FINISH完成，默认查询所有状态。
    * startTime  开始时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  终止时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * orderBy  排序规则，示例 start_time_ms asc，表示按照开始时间升序排序，有如下取值： - start_time_ms asc：按照开始时间升序。 - start_time_ms desc：按照开始时间降序。 - end_time_ms asc：按照结束时间升序。 - end_time_ms desc：按照结束时间降序。 默认不排序。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'xProjectId' => 'string',
            'workspace' => 'string',
            'workspaceId' => 'string',
            'baselineName' => 'string',
            'ownerName' => 'string',
            'type' => 'string',
            'priority' => 'int',
            'status' => 'string',
            'finishStatus' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'orderBy' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * baselineName  基线任务名称。
    * ownerName  责任人。
    * type  基线类型，DAY天基线，HOUR小时基线，默认查询所有基线类型。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3
    * status  状态： - ERROR：异常 - SAFE：安全 - DANGEROUS：预警 - OVER：破线 默认查询所有状态。
    * finishStatus  完成状态：UNFINISH未完成，FINISH完成，默认查询所有状态。
    * startTime  开始时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  终止时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * orderBy  排序规则，示例 start_time_ms asc，表示按照开始时间升序排序，有如下取值： - start_time_ms asc：按照开始时间升序。 - start_time_ms desc：按照开始时间降序。 - end_time_ms asc：按照结束时间升序。 - end_time_ms desc：按照结束时间降序。 默认不排序。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'xProjectId' => null,
        'workspace' => null,
        'workspaceId' => null,
        'baselineName' => null,
        'ownerName' => null,
        'type' => null,
        'priority' => 'int32',
        'status' => null,
        'finishStatus' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'orderBy' => null,
        'offset' => null,
        'limit' => null
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
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * baselineName  基线任务名称。
    * ownerName  责任人。
    * type  基线类型，DAY天基线，HOUR小时基线，默认查询所有基线类型。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3
    * status  状态： - ERROR：异常 - SAFE：安全 - DANGEROUS：预警 - OVER：破线 默认查询所有状态。
    * finishStatus  完成状态：UNFINISH未完成，FINISH完成，默认查询所有状态。
    * startTime  开始时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  终止时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * orderBy  排序规则，示例 start_time_ms asc，表示按照开始时间升序排序，有如下取值： - start_time_ms asc：按照开始时间升序。 - start_time_ms desc：按照开始时间降序。 - end_time_ms asc：按照结束时间升序。 - end_time_ms desc：按照结束时间降序。 默认不排序。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'xProjectId' => 'X-Project-Id',
            'workspace' => 'workspace',
            'workspaceId' => 'workspace_id',
            'baselineName' => 'baseline_name',
            'ownerName' => 'owner_name',
            'type' => 'type',
            'priority' => 'priority',
            'status' => 'status',
            'finishStatus' => 'finish_status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'orderBy' => 'order_by',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * baselineName  基线任务名称。
    * ownerName  责任人。
    * type  基线类型，DAY天基线，HOUR小时基线，默认查询所有基线类型。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3
    * status  状态： - ERROR：异常 - SAFE：安全 - DANGEROUS：预警 - OVER：破线 默认查询所有状态。
    * finishStatus  完成状态：UNFINISH未完成，FINISH完成，默认查询所有状态。
    * startTime  开始时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  终止时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * orderBy  排序规则，示例 start_time_ms asc，表示按照开始时间升序排序，有如下取值： - start_time_ms asc：按照开始时间升序。 - start_time_ms desc：按照开始时间降序。 - end_time_ms asc：按照结束时间升序。 - end_time_ms desc：按照结束时间降序。 默认不排序。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'xProjectId' => 'setXProjectId',
            'workspace' => 'setWorkspace',
            'workspaceId' => 'setWorkspaceId',
            'baselineName' => 'setBaselineName',
            'ownerName' => 'setOwnerName',
            'type' => 'setType',
            'priority' => 'setPriority',
            'status' => 'setStatus',
            'finishStatus' => 'setFinishStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'orderBy' => 'setOrderBy',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * baselineName  基线任务名称。
    * ownerName  责任人。
    * type  基线类型，DAY天基线，HOUR小时基线，默认查询所有基线类型。
    * priority  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3
    * status  状态： - ERROR：异常 - SAFE：安全 - DANGEROUS：预警 - OVER：破线 默认查询所有状态。
    * finishStatus  完成状态：UNFINISH未完成，FINISH完成，默认查询所有状态。
    * startTime  开始时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  终止时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * orderBy  排序规则，示例 start_time_ms asc，表示按照开始时间升序排序，有如下取值： - start_time_ms asc：按照开始时间升序。 - start_time_ms desc：按照开始时间降序。 - end_time_ms asc：按照结束时间升序。 - end_time_ms desc：按照结束时间降序。 默认不排序。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'xProjectId' => 'getXProjectId',
            'workspace' => 'getWorkspace',
            'workspaceId' => 'getWorkspaceId',
            'baselineName' => 'getBaselineName',
            'ownerName' => 'getOwnerName',
            'type' => 'getType',
            'priority' => 'getPriority',
            'status' => 'getStatus',
            'finishStatus' => 'getFinishStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'orderBy' => 'getOrderBy',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const TYPE_DAY = 'DAY';
    const TYPE_HOUR = 'HOUR';
    const STATUS_ERROR = 'ERROR';
    const STATUS_SAFE = 'SAFE';
    const STATUS_DANGEROUS = 'DANGEROUS';
    const STATUS_OVER = 'OVER';
    const FINISH_STATUS_UNFINISH = 'UNFINISH';
    const FINISH_STATUS_FINISH = 'FINISH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DAY,
            self::TYPE_HOUR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ERROR,
            self::STATUS_SAFE,
            self::STATUS_DANGEROUS,
            self::STATUS_OVER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFinishStatusAllowableValues()
    {
        return [
            self::FINISH_STATUS_UNFINISH,
            self::FINISH_STATUS_FINISH,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['baselineName'] = isset($data['baselineName']) ? $data['baselineName'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['finishStatus'] = isset($data['finishStatus']) ? $data['finishStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['baselineName']) && (mb_strlen($this->container['baselineName']) > 128)) {
                $invalidProperties[] = "invalid value for 'baselineName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['baselineName']) && (mb_strlen($this->container['baselineName']) < 1)) {
                $invalidProperties[] = "invalid value for 'baselineName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFinishStatusAllowableValues();
                if (!is_null($this->container['finishStatus']) && !in_array($this->container['finishStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'finishStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  DataArts Studio实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId DataArts Studio实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets baselineName
    *  基线任务名称。
    *
    * @return string|null
    */
    public function getBaselineName()
    {
        return $this->container['baselineName'];
    }

    /**
    * Sets baselineName
    *
    * @param string|null $baselineName 基线任务名称。
    *
    * @return $this
    */
    public function setBaselineName($baselineName)
    {
        $this->container['baselineName'] = $baselineName;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人。
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 责任人。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets type
    *  基线类型，DAY天基线，HOUR小时基线，默认查询所有基线类型。
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
    * @param string|null $type 基线类型，DAY天基线，HOUR小时基线，默认查询所有基线类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets priority
    *  优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级，取值有1/2/3/4/5，默认查询所有优先级。当同时查询优先级为1/2/3时，样例如下：priority=1&priority=2&priority=3
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets status
    *  状态： - ERROR：异常 - SAFE：安全 - DANGEROUS：预警 - OVER：破线 默认查询所有状态。
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
    * @param string|null $status 状态： - ERROR：异常 - SAFE：安全 - DANGEROUS：预警 - OVER：破线 默认查询所有状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets finishStatus
    *  完成状态：UNFINISH未完成，FINISH完成，默认查询所有状态。
    *
    * @return string|null
    */
    public function getFinishStatus()
    {
        return $this->container['finishStatus'];
    }

    /**
    * Sets finishStatus
    *
    * @param string|null $finishStatus 完成状态：UNFINISH未完成，FINISH完成，默认查询所有状态。
    *
    * @return $this
    */
    public function setFinishStatus($finishStatus)
    {
        $this->container['finishStatus'] = $finishStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
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
    *  终止时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 终止时间戳，用于检索基线任务实例的承诺时间，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序规则，示例 start_time_ms asc，表示按照开始时间升序排序，有如下取值： - start_time_ms asc：按照开始时间升序。 - start_time_ms desc：按照开始时间降序。 - end_time_ms asc：按照结束时间升序。 - end_time_ms desc：按照结束时间降序。 默认不排序。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序规则，示例 start_time_ms asc，表示按照开始时间升序排序，有如下取值： - start_time_ms asc：按照开始时间升序。 - start_time_ms desc：按照开始时间降序。 - end_time_ms asc：按照结束时间升序。 - end_time_ms desc：按照结束时间降序。 默认不排序。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets offset
    *  分页列表的页数，默认值为1。取值范围大于等于1。
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
    * @param int|null $offset 分页列表的页数，默认值为1。取值范围大于等于1。
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
    *  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
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
    * @param int|null $limit 分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

