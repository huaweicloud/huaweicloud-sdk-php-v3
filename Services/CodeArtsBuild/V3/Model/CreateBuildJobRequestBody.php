<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBuildJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBuildJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * groupId  任务分组id
    * timeout  timeout
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * buildIfCodeUpdated  提交代码触发构建开关
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'projectId' => 'string',
            'jobName' => 'string',
            'autoUpdateSubModule' => 'string',
            'flavor' => 'string',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]',
            'groupId' => 'string',
            'timeout' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildTimeout',
            'scms' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobScm[]',
            'steps' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobSteps[]',
            'hostType' => 'string',
            'buildConfigType' => 'string',
            'buildIfCodeUpdated' => 'bool',
            'triggers' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Trigger[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * groupId  任务分组id
    * timeout  timeout
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * buildIfCodeUpdated  提交代码触发构建开关
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'projectId' => null,
        'jobName' => null,
        'autoUpdateSubModule' => null,
        'flavor' => null,
        'parameters' => null,
        'groupId' => null,
        'timeout' => null,
        'scms' => null,
        'steps' => null,
        'hostType' => null,
        'buildConfigType' => null,
        'buildIfCodeUpdated' => null,
        'triggers' => null
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
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * groupId  任务分组id
    * timeout  timeout
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * buildIfCodeUpdated  提交代码触发构建开关
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'projectId' => 'project_id',
            'jobName' => 'job_name',
            'autoUpdateSubModule' => 'auto_update_sub_module',
            'flavor' => 'flavor',
            'parameters' => 'parameters',
            'groupId' => 'group_id',
            'timeout' => 'timeout',
            'scms' => 'scms',
            'steps' => 'steps',
            'hostType' => 'host_type',
            'buildConfigType' => 'build_config_type',
            'buildIfCodeUpdated' => 'build_if_code_updated',
            'triggers' => 'triggers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * groupId  任务分组id
    * timeout  timeout
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * buildIfCodeUpdated  提交代码触发构建开关
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'projectId' => 'setProjectId',
            'jobName' => 'setJobName',
            'autoUpdateSubModule' => 'setAutoUpdateSubModule',
            'flavor' => 'setFlavor',
            'parameters' => 'setParameters',
            'groupId' => 'setGroupId',
            'timeout' => 'setTimeout',
            'scms' => 'setScms',
            'steps' => 'setSteps',
            'hostType' => 'setHostType',
            'buildConfigType' => 'setBuildConfigType',
            'buildIfCodeUpdated' => 'setBuildIfCodeUpdated',
            'triggers' => 'setTriggers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * groupId  任务分组id
    * timeout  timeout
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * buildIfCodeUpdated  提交代码触发构建开关
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'projectId' => 'getProjectId',
            'jobName' => 'getJobName',
            'autoUpdateSubModule' => 'getAutoUpdateSubModule',
            'flavor' => 'getFlavor',
            'parameters' => 'getParameters',
            'groupId' => 'getGroupId',
            'timeout' => 'getTimeout',
            'scms' => 'getScms',
            'steps' => 'getSteps',
            'hostType' => 'getHostType',
            'buildConfigType' => 'getBuildConfigType',
            'buildIfCodeUpdated' => 'getBuildIfCodeUpdated',
            'triggers' => 'getTriggers'
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
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['autoUpdateSubModule'] = isset($data['autoUpdateSubModule']) ? $data['autoUpdateSubModule'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['scms'] = isset($data['scms']) ? $data['scms'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['buildConfigType'] = isset($data['buildConfigType']) ? $data['buildConfigType'] : null;
        $this->container['buildIfCodeUpdated'] = isset($data['buildIfCodeUpdated']) ? $data['buildIfCodeUpdated'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['arch'] === null) {
            $invalidProperties[] = "'arch' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
        if ($this->container['steps'] === null) {
            $invalidProperties[] = "'steps' can't be null";
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
    * Gets arch
    *  使用机器的架构
    *
    * @return string
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string $arch 使用机器的架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets projectId
    *  构建任务所在项目的ID
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
    * @param string $projectId 构建任务所在项目的ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名称
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
    * @param string $jobName 任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets autoUpdateSubModule
    *  是否自动更新子模块
    *
    * @return string|null
    */
    public function getAutoUpdateSubModule()
    {
        return $this->container['autoUpdateSubModule'];
    }

    /**
    * Sets autoUpdateSubModule
    *
    * @param string|null $autoUpdateSubModule 是否自动更新子模块
    *
    * @return $this
    */
    public function setAutoUpdateSubModule($autoUpdateSubModule)
    {
        $this->container['autoUpdateSubModule'] = $autoUpdateSubModule;
        return $this;
    }

    /**
    * Gets flavor
    *  执行机规格
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 执行机规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets parameters
    *  构建执行参数列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]|null $parameters 构建执行参数列表
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets groupId
    *  任务分组id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 任务分组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets timeout
    *  timeout
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildTimeout|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildTimeout|null $timeout timeout
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets scms
    *  构建执行SCM
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobScm[]|null
    */
    public function getScms()
    {
        return $this->container['scms'];
    }

    /**
    * Sets scms
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobScm[]|null $scms 构建执行SCM
    *
    * @return $this
    */
    public function setScms($scms)
    {
        $this->container['scms'] = $scms;
        return $this;
    }

    /**
    * Gets steps
    *  构建执行的步骤
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobSteps[]
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobSteps[] $steps 构建执行的步骤
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets hostType
    *  host类型
    *
    * @return string|null
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string|null $hostType host类型
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets buildConfigType
    *  构建的配置类型
    *
    * @return string|null
    */
    public function getBuildConfigType()
    {
        return $this->container['buildConfigType'];
    }

    /**
    * Sets buildConfigType
    *
    * @param string|null $buildConfigType 构建的配置类型
    *
    * @return $this
    */
    public function setBuildConfigType($buildConfigType)
    {
        $this->container['buildConfigType'] = $buildConfigType;
        return $this;
    }

    /**
    * Gets buildIfCodeUpdated
    *  提交代码触发构建开关
    *
    * @return bool|null
    */
    public function getBuildIfCodeUpdated()
    {
        return $this->container['buildIfCodeUpdated'];
    }

    /**
    * Sets buildIfCodeUpdated
    *
    * @param bool|null $buildIfCodeUpdated 提交代码触发构建开关
    *
    * @return $this
    */
    public function setBuildIfCodeUpdated($buildIfCodeUpdated)
    {
        $this->container['buildIfCodeUpdated'] = $buildIfCodeUpdated;
        return $this;
    }

    /**
    * Gets triggers
    *  定时任务触发器集合
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Trigger[]|null
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Trigger[]|null $triggers 定时任务触发器集合
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
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

