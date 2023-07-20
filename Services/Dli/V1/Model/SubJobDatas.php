<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubJobDatas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubJobDatas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子作业ID，对应开源spark JobData的jobId。
    * name  子作业name，对应开源spark JobData的name。
    * description  子作业description，对应开源spark JobData的description。
    * submissionTime  子作业submission_time，对应开源spark JobData的submissionTime。
    * completionTime  子作业completion_time，对应开源spark JobData的completionTime。
    * stageIds  子作业stage_ids，对应开源spark JobData的stageIds。
    * jobGroup  对应DLI的作业ID，对应开源spark JobData的jobGroup。
    * status  子作业状态，对应开源spark JobData的status。
    * numTasks  子作业task的个数，对应开源spark JobData的numTasks。
    * numActiveTasks  子作业正在运行的task个数，对应开源spark JobData的numActiveTasks。
    * numCompletedTasks  子作业已经完成的task个数，对应开源spark JobData的numCompletedTasks。
    * numSkippedTasks  子作业跳过的task个数，对应开源spark JobData的numSkippedTasks。
    * numFailedTasks  子作业跳失败的task个数，对应开源spark JobData的numFailedTasks。
    * numKilledTasks  子作业kill掉的task个数，对应开源spark JobData的numKilledTasks。
    * numCompletedIndices  子作业完成指数，对应开源spark JobData的numCompletedIndices。
    * numActiveStages  子作业正在运行的stage个数，对应开源spark JobData的numActiveStages。
    * numCompletedStages  子作业已经完成的stage个数，对应开源spark JobData的numCompletedStages。
    * numSkippedStages  子作业跳过的stage个数，对应开源spark JobData的numSkippedStages。
    * numFailedStages  子作业失败的stage个数，对应开源spark JobData的numFailedStages。
    * killedTasksSummary  子作业killed_tasks_summary，对应开源spark JobData的killedTasksSummary。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'description' => 'string',
            'submissionTime' => 'string',
            'completionTime' => 'string',
            'stageIds' => 'int[]',
            'jobGroup' => 'string',
            'status' => 'string',
            'numTasks' => 'int',
            'numActiveTasks' => 'int',
            'numCompletedTasks' => 'int',
            'numSkippedTasks' => 'int',
            'numFailedTasks' => 'int',
            'numKilledTasks' => 'int',
            'numCompletedIndices' => 'int',
            'numActiveStages' => 'int',
            'numCompletedStages' => 'int',
            'numSkippedStages' => 'int',
            'numFailedStages' => 'int',
            'killedTasksSummary' => 'map[string,int]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子作业ID，对应开源spark JobData的jobId。
    * name  子作业name，对应开源spark JobData的name。
    * description  子作业description，对应开源spark JobData的description。
    * submissionTime  子作业submission_time，对应开源spark JobData的submissionTime。
    * completionTime  子作业completion_time，对应开源spark JobData的completionTime。
    * stageIds  子作业stage_ids，对应开源spark JobData的stageIds。
    * jobGroup  对应DLI的作业ID，对应开源spark JobData的jobGroup。
    * status  子作业状态，对应开源spark JobData的status。
    * numTasks  子作业task的个数，对应开源spark JobData的numTasks。
    * numActiveTasks  子作业正在运行的task个数，对应开源spark JobData的numActiveTasks。
    * numCompletedTasks  子作业已经完成的task个数，对应开源spark JobData的numCompletedTasks。
    * numSkippedTasks  子作业跳过的task个数，对应开源spark JobData的numSkippedTasks。
    * numFailedTasks  子作业跳失败的task个数，对应开源spark JobData的numFailedTasks。
    * numKilledTasks  子作业kill掉的task个数，对应开源spark JobData的numKilledTasks。
    * numCompletedIndices  子作业完成指数，对应开源spark JobData的numCompletedIndices。
    * numActiveStages  子作业正在运行的stage个数，对应开源spark JobData的numActiveStages。
    * numCompletedStages  子作业已经完成的stage个数，对应开源spark JobData的numCompletedStages。
    * numSkippedStages  子作业跳过的stage个数，对应开源spark JobData的numSkippedStages。
    * numFailedStages  子作业失败的stage个数，对应开源spark JobData的numFailedStages。
    * killedTasksSummary  子作业killed_tasks_summary，对应开源spark JobData的killedTasksSummary。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'description' => null,
        'submissionTime' => null,
        'completionTime' => null,
        'stageIds' => 'int32',
        'jobGroup' => null,
        'status' => null,
        'numTasks' => 'int32',
        'numActiveTasks' => 'int32',
        'numCompletedTasks' => 'int32',
        'numSkippedTasks' => 'int32',
        'numFailedTasks' => 'int32',
        'numKilledTasks' => 'int32',
        'numCompletedIndices' => 'int32',
        'numActiveStages' => 'int32',
        'numCompletedStages' => 'int32',
        'numSkippedStages' => 'int32',
        'numFailedStages' => 'int32',
        'killedTasksSummary' => 'int32'
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
    * id  子作业ID，对应开源spark JobData的jobId。
    * name  子作业name，对应开源spark JobData的name。
    * description  子作业description，对应开源spark JobData的description。
    * submissionTime  子作业submission_time，对应开源spark JobData的submissionTime。
    * completionTime  子作业completion_time，对应开源spark JobData的completionTime。
    * stageIds  子作业stage_ids，对应开源spark JobData的stageIds。
    * jobGroup  对应DLI的作业ID，对应开源spark JobData的jobGroup。
    * status  子作业状态，对应开源spark JobData的status。
    * numTasks  子作业task的个数，对应开源spark JobData的numTasks。
    * numActiveTasks  子作业正在运行的task个数，对应开源spark JobData的numActiveTasks。
    * numCompletedTasks  子作业已经完成的task个数，对应开源spark JobData的numCompletedTasks。
    * numSkippedTasks  子作业跳过的task个数，对应开源spark JobData的numSkippedTasks。
    * numFailedTasks  子作业跳失败的task个数，对应开源spark JobData的numFailedTasks。
    * numKilledTasks  子作业kill掉的task个数，对应开源spark JobData的numKilledTasks。
    * numCompletedIndices  子作业完成指数，对应开源spark JobData的numCompletedIndices。
    * numActiveStages  子作业正在运行的stage个数，对应开源spark JobData的numActiveStages。
    * numCompletedStages  子作业已经完成的stage个数，对应开源spark JobData的numCompletedStages。
    * numSkippedStages  子作业跳过的stage个数，对应开源spark JobData的numSkippedStages。
    * numFailedStages  子作业失败的stage个数，对应开源spark JobData的numFailedStages。
    * killedTasksSummary  子作业killed_tasks_summary，对应开源spark JobData的killedTasksSummary。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'submissionTime' => 'submission_time',
            'completionTime' => 'completion_time',
            'stageIds' => 'stage_ids',
            'jobGroup' => 'job_group',
            'status' => 'status',
            'numTasks' => 'num_tasks',
            'numActiveTasks' => 'num_active_tasks',
            'numCompletedTasks' => 'num_completed_tasks',
            'numSkippedTasks' => 'num_skipped_tasks',
            'numFailedTasks' => 'num_failed_tasks',
            'numKilledTasks' => 'num_killed_tasks',
            'numCompletedIndices' => 'num_completed_indices',
            'numActiveStages' => 'num_active_stages',
            'numCompletedStages' => 'num_completed_stages',
            'numSkippedStages' => 'num_skipped_stages',
            'numFailedStages' => 'num_failed_stages',
            'killedTasksSummary' => 'killed_tasks_summary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子作业ID，对应开源spark JobData的jobId。
    * name  子作业name，对应开源spark JobData的name。
    * description  子作业description，对应开源spark JobData的description。
    * submissionTime  子作业submission_time，对应开源spark JobData的submissionTime。
    * completionTime  子作业completion_time，对应开源spark JobData的completionTime。
    * stageIds  子作业stage_ids，对应开源spark JobData的stageIds。
    * jobGroup  对应DLI的作业ID，对应开源spark JobData的jobGroup。
    * status  子作业状态，对应开源spark JobData的status。
    * numTasks  子作业task的个数，对应开源spark JobData的numTasks。
    * numActiveTasks  子作业正在运行的task个数，对应开源spark JobData的numActiveTasks。
    * numCompletedTasks  子作业已经完成的task个数，对应开源spark JobData的numCompletedTasks。
    * numSkippedTasks  子作业跳过的task个数，对应开源spark JobData的numSkippedTasks。
    * numFailedTasks  子作业跳失败的task个数，对应开源spark JobData的numFailedTasks。
    * numKilledTasks  子作业kill掉的task个数，对应开源spark JobData的numKilledTasks。
    * numCompletedIndices  子作业完成指数，对应开源spark JobData的numCompletedIndices。
    * numActiveStages  子作业正在运行的stage个数，对应开源spark JobData的numActiveStages。
    * numCompletedStages  子作业已经完成的stage个数，对应开源spark JobData的numCompletedStages。
    * numSkippedStages  子作业跳过的stage个数，对应开源spark JobData的numSkippedStages。
    * numFailedStages  子作业失败的stage个数，对应开源spark JobData的numFailedStages。
    * killedTasksSummary  子作业killed_tasks_summary，对应开源spark JobData的killedTasksSummary。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'submissionTime' => 'setSubmissionTime',
            'completionTime' => 'setCompletionTime',
            'stageIds' => 'setStageIds',
            'jobGroup' => 'setJobGroup',
            'status' => 'setStatus',
            'numTasks' => 'setNumTasks',
            'numActiveTasks' => 'setNumActiveTasks',
            'numCompletedTasks' => 'setNumCompletedTasks',
            'numSkippedTasks' => 'setNumSkippedTasks',
            'numFailedTasks' => 'setNumFailedTasks',
            'numKilledTasks' => 'setNumKilledTasks',
            'numCompletedIndices' => 'setNumCompletedIndices',
            'numActiveStages' => 'setNumActiveStages',
            'numCompletedStages' => 'setNumCompletedStages',
            'numSkippedStages' => 'setNumSkippedStages',
            'numFailedStages' => 'setNumFailedStages',
            'killedTasksSummary' => 'setKilledTasksSummary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子作业ID，对应开源spark JobData的jobId。
    * name  子作业name，对应开源spark JobData的name。
    * description  子作业description，对应开源spark JobData的description。
    * submissionTime  子作业submission_time，对应开源spark JobData的submissionTime。
    * completionTime  子作业completion_time，对应开源spark JobData的completionTime。
    * stageIds  子作业stage_ids，对应开源spark JobData的stageIds。
    * jobGroup  对应DLI的作业ID，对应开源spark JobData的jobGroup。
    * status  子作业状态，对应开源spark JobData的status。
    * numTasks  子作业task的个数，对应开源spark JobData的numTasks。
    * numActiveTasks  子作业正在运行的task个数，对应开源spark JobData的numActiveTasks。
    * numCompletedTasks  子作业已经完成的task个数，对应开源spark JobData的numCompletedTasks。
    * numSkippedTasks  子作业跳过的task个数，对应开源spark JobData的numSkippedTasks。
    * numFailedTasks  子作业跳失败的task个数，对应开源spark JobData的numFailedTasks。
    * numKilledTasks  子作业kill掉的task个数，对应开源spark JobData的numKilledTasks。
    * numCompletedIndices  子作业完成指数，对应开源spark JobData的numCompletedIndices。
    * numActiveStages  子作业正在运行的stage个数，对应开源spark JobData的numActiveStages。
    * numCompletedStages  子作业已经完成的stage个数，对应开源spark JobData的numCompletedStages。
    * numSkippedStages  子作业跳过的stage个数，对应开源spark JobData的numSkippedStages。
    * numFailedStages  子作业失败的stage个数，对应开源spark JobData的numFailedStages。
    * killedTasksSummary  子作业killed_tasks_summary，对应开源spark JobData的killedTasksSummary。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'submissionTime' => 'getSubmissionTime',
            'completionTime' => 'getCompletionTime',
            'stageIds' => 'getStageIds',
            'jobGroup' => 'getJobGroup',
            'status' => 'getStatus',
            'numTasks' => 'getNumTasks',
            'numActiveTasks' => 'getNumActiveTasks',
            'numCompletedTasks' => 'getNumCompletedTasks',
            'numSkippedTasks' => 'getNumSkippedTasks',
            'numFailedTasks' => 'getNumFailedTasks',
            'numKilledTasks' => 'getNumKilledTasks',
            'numCompletedIndices' => 'getNumCompletedIndices',
            'numActiveStages' => 'getNumActiveStages',
            'numCompletedStages' => 'getNumCompletedStages',
            'numSkippedStages' => 'getNumSkippedStages',
            'numFailedStages' => 'getNumFailedStages',
            'killedTasksSummary' => 'getKilledTasksSummary'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['submissionTime'] = isset($data['submissionTime']) ? $data['submissionTime'] : null;
        $this->container['completionTime'] = isset($data['completionTime']) ? $data['completionTime'] : null;
        $this->container['stageIds'] = isset($data['stageIds']) ? $data['stageIds'] : null;
        $this->container['jobGroup'] = isset($data['jobGroup']) ? $data['jobGroup'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['numTasks'] = isset($data['numTasks']) ? $data['numTasks'] : null;
        $this->container['numActiveTasks'] = isset($data['numActiveTasks']) ? $data['numActiveTasks'] : null;
        $this->container['numCompletedTasks'] = isset($data['numCompletedTasks']) ? $data['numCompletedTasks'] : null;
        $this->container['numSkippedTasks'] = isset($data['numSkippedTasks']) ? $data['numSkippedTasks'] : null;
        $this->container['numFailedTasks'] = isset($data['numFailedTasks']) ? $data['numFailedTasks'] : null;
        $this->container['numKilledTasks'] = isset($data['numKilledTasks']) ? $data['numKilledTasks'] : null;
        $this->container['numCompletedIndices'] = isset($data['numCompletedIndices']) ? $data['numCompletedIndices'] : null;
        $this->container['numActiveStages'] = isset($data['numActiveStages']) ? $data['numActiveStages'] : null;
        $this->container['numCompletedStages'] = isset($data['numCompletedStages']) ? $data['numCompletedStages'] : null;
        $this->container['numSkippedStages'] = isset($data['numSkippedStages']) ? $data['numSkippedStages'] : null;
        $this->container['numFailedStages'] = isset($data['numFailedStages']) ? $data['numFailedStages'] : null;
        $this->container['killedTasksSummary'] = isset($data['killedTasksSummary']) ? $data['killedTasksSummary'] : null;
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
    * Gets id
    *  子作业ID，对应开源spark JobData的jobId。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 子作业ID，对应开源spark JobData的jobId。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  子作业name，对应开源spark JobData的name。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 子作业name，对应开源spark JobData的name。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  子作业description，对应开源spark JobData的description。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 子作业description，对应开源spark JobData的description。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets submissionTime
    *  子作业submission_time，对应开源spark JobData的submissionTime。
    *
    * @return string|null
    */
    public function getSubmissionTime()
    {
        return $this->container['submissionTime'];
    }

    /**
    * Sets submissionTime
    *
    * @param string|null $submissionTime 子作业submission_time，对应开源spark JobData的submissionTime。
    *
    * @return $this
    */
    public function setSubmissionTime($submissionTime)
    {
        $this->container['submissionTime'] = $submissionTime;
        return $this;
    }

    /**
    * Gets completionTime
    *  子作业completion_time，对应开源spark JobData的completionTime。
    *
    * @return string|null
    */
    public function getCompletionTime()
    {
        return $this->container['completionTime'];
    }

    /**
    * Sets completionTime
    *
    * @param string|null $completionTime 子作业completion_time，对应开源spark JobData的completionTime。
    *
    * @return $this
    */
    public function setCompletionTime($completionTime)
    {
        $this->container['completionTime'] = $completionTime;
        return $this;
    }

    /**
    * Gets stageIds
    *  子作业stage_ids，对应开源spark JobData的stageIds。
    *
    * @return int[]|null
    */
    public function getStageIds()
    {
        return $this->container['stageIds'];
    }

    /**
    * Sets stageIds
    *
    * @param int[]|null $stageIds 子作业stage_ids，对应开源spark JobData的stageIds。
    *
    * @return $this
    */
    public function setStageIds($stageIds)
    {
        $this->container['stageIds'] = $stageIds;
        return $this;
    }

    /**
    * Gets jobGroup
    *  对应DLI的作业ID，对应开源spark JobData的jobGroup。
    *
    * @return string|null
    */
    public function getJobGroup()
    {
        return $this->container['jobGroup'];
    }

    /**
    * Sets jobGroup
    *
    * @param string|null $jobGroup 对应DLI的作业ID，对应开源spark JobData的jobGroup。
    *
    * @return $this
    */
    public function setJobGroup($jobGroup)
    {
        $this->container['jobGroup'] = $jobGroup;
        return $this;
    }

    /**
    * Gets status
    *  子作业状态，对应开源spark JobData的status。
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
    * @param string|null $status 子作业状态，对应开源spark JobData的status。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets numTasks
    *  子作业task的个数，对应开源spark JobData的numTasks。
    *
    * @return int|null
    */
    public function getNumTasks()
    {
        return $this->container['numTasks'];
    }

    /**
    * Sets numTasks
    *
    * @param int|null $numTasks 子作业task的个数，对应开源spark JobData的numTasks。
    *
    * @return $this
    */
    public function setNumTasks($numTasks)
    {
        $this->container['numTasks'] = $numTasks;
        return $this;
    }

    /**
    * Gets numActiveTasks
    *  子作业正在运行的task个数，对应开源spark JobData的numActiveTasks。
    *
    * @return int|null
    */
    public function getNumActiveTasks()
    {
        return $this->container['numActiveTasks'];
    }

    /**
    * Sets numActiveTasks
    *
    * @param int|null $numActiveTasks 子作业正在运行的task个数，对应开源spark JobData的numActiveTasks。
    *
    * @return $this
    */
    public function setNumActiveTasks($numActiveTasks)
    {
        $this->container['numActiveTasks'] = $numActiveTasks;
        return $this;
    }

    /**
    * Gets numCompletedTasks
    *  子作业已经完成的task个数，对应开源spark JobData的numCompletedTasks。
    *
    * @return int|null
    */
    public function getNumCompletedTasks()
    {
        return $this->container['numCompletedTasks'];
    }

    /**
    * Sets numCompletedTasks
    *
    * @param int|null $numCompletedTasks 子作业已经完成的task个数，对应开源spark JobData的numCompletedTasks。
    *
    * @return $this
    */
    public function setNumCompletedTasks($numCompletedTasks)
    {
        $this->container['numCompletedTasks'] = $numCompletedTasks;
        return $this;
    }

    /**
    * Gets numSkippedTasks
    *  子作业跳过的task个数，对应开源spark JobData的numSkippedTasks。
    *
    * @return int|null
    */
    public function getNumSkippedTasks()
    {
        return $this->container['numSkippedTasks'];
    }

    /**
    * Sets numSkippedTasks
    *
    * @param int|null $numSkippedTasks 子作业跳过的task个数，对应开源spark JobData的numSkippedTasks。
    *
    * @return $this
    */
    public function setNumSkippedTasks($numSkippedTasks)
    {
        $this->container['numSkippedTasks'] = $numSkippedTasks;
        return $this;
    }

    /**
    * Gets numFailedTasks
    *  子作业跳失败的task个数，对应开源spark JobData的numFailedTasks。
    *
    * @return int|null
    */
    public function getNumFailedTasks()
    {
        return $this->container['numFailedTasks'];
    }

    /**
    * Sets numFailedTasks
    *
    * @param int|null $numFailedTasks 子作业跳失败的task个数，对应开源spark JobData的numFailedTasks。
    *
    * @return $this
    */
    public function setNumFailedTasks($numFailedTasks)
    {
        $this->container['numFailedTasks'] = $numFailedTasks;
        return $this;
    }

    /**
    * Gets numKilledTasks
    *  子作业kill掉的task个数，对应开源spark JobData的numKilledTasks。
    *
    * @return int|null
    */
    public function getNumKilledTasks()
    {
        return $this->container['numKilledTasks'];
    }

    /**
    * Sets numKilledTasks
    *
    * @param int|null $numKilledTasks 子作业kill掉的task个数，对应开源spark JobData的numKilledTasks。
    *
    * @return $this
    */
    public function setNumKilledTasks($numKilledTasks)
    {
        $this->container['numKilledTasks'] = $numKilledTasks;
        return $this;
    }

    /**
    * Gets numCompletedIndices
    *  子作业完成指数，对应开源spark JobData的numCompletedIndices。
    *
    * @return int|null
    */
    public function getNumCompletedIndices()
    {
        return $this->container['numCompletedIndices'];
    }

    /**
    * Sets numCompletedIndices
    *
    * @param int|null $numCompletedIndices 子作业完成指数，对应开源spark JobData的numCompletedIndices。
    *
    * @return $this
    */
    public function setNumCompletedIndices($numCompletedIndices)
    {
        $this->container['numCompletedIndices'] = $numCompletedIndices;
        return $this;
    }

    /**
    * Gets numActiveStages
    *  子作业正在运行的stage个数，对应开源spark JobData的numActiveStages。
    *
    * @return int|null
    */
    public function getNumActiveStages()
    {
        return $this->container['numActiveStages'];
    }

    /**
    * Sets numActiveStages
    *
    * @param int|null $numActiveStages 子作业正在运行的stage个数，对应开源spark JobData的numActiveStages。
    *
    * @return $this
    */
    public function setNumActiveStages($numActiveStages)
    {
        $this->container['numActiveStages'] = $numActiveStages;
        return $this;
    }

    /**
    * Gets numCompletedStages
    *  子作业已经完成的stage个数，对应开源spark JobData的numCompletedStages。
    *
    * @return int|null
    */
    public function getNumCompletedStages()
    {
        return $this->container['numCompletedStages'];
    }

    /**
    * Sets numCompletedStages
    *
    * @param int|null $numCompletedStages 子作业已经完成的stage个数，对应开源spark JobData的numCompletedStages。
    *
    * @return $this
    */
    public function setNumCompletedStages($numCompletedStages)
    {
        $this->container['numCompletedStages'] = $numCompletedStages;
        return $this;
    }

    /**
    * Gets numSkippedStages
    *  子作业跳过的stage个数，对应开源spark JobData的numSkippedStages。
    *
    * @return int|null
    */
    public function getNumSkippedStages()
    {
        return $this->container['numSkippedStages'];
    }

    /**
    * Sets numSkippedStages
    *
    * @param int|null $numSkippedStages 子作业跳过的stage个数，对应开源spark JobData的numSkippedStages。
    *
    * @return $this
    */
    public function setNumSkippedStages($numSkippedStages)
    {
        $this->container['numSkippedStages'] = $numSkippedStages;
        return $this;
    }

    /**
    * Gets numFailedStages
    *  子作业失败的stage个数，对应开源spark JobData的numFailedStages。
    *
    * @return int|null
    */
    public function getNumFailedStages()
    {
        return $this->container['numFailedStages'];
    }

    /**
    * Sets numFailedStages
    *
    * @param int|null $numFailedStages 子作业失败的stage个数，对应开源spark JobData的numFailedStages。
    *
    * @return $this
    */
    public function setNumFailedStages($numFailedStages)
    {
        $this->container['numFailedStages'] = $numFailedStages;
        return $this;
    }

    /**
    * Gets killedTasksSummary
    *  子作业killed_tasks_summary，对应开源spark JobData的killedTasksSummary。
    *
    * @return map[string,int]|null
    */
    public function getKilledTasksSummary()
    {
        return $this->container['killedTasksSummary'];
    }

    /**
    * Sets killedTasksSummary
    *
    * @param map[string,int]|null $killedTasksSummary 子作业killed_tasks_summary，对应开源spark JobData的killedTasksSummary。
    *
    * @return $this
    */
    public function setKilledTasksSummary($killedTasksSummary)
    {
        $this->container['killedTasksSummary'] = $killedTasksSummary;
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

