<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CopyBuildJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CopyBuildJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * copyJobId  构建任务ID
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'projectId' => 'string',
            'jobName' => 'string',
            'copyJobId' => 'string',
            'autoUpdateSubModule' => 'string',
            'flavor' => 'string',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]',
            'scms' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobScm[]',
            'steps' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobSteps[]',
            'hostType' => 'string',
            'buildConfigType' => 'string',
            'triggers' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Trigger[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * copyJobId  构建任务ID
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'projectId' => null,
        'jobName' => null,
        'copyJobId' => null,
        'autoUpdateSubModule' => null,
        'flavor' => null,
        'parameters' => null,
        'scms' => null,
        'steps' => null,
        'hostType' => null,
        'buildConfigType' => null,
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
    * copyJobId  构建任务ID
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'projectId' => 'project_id',
            'jobName' => 'job_name',
            'copyJobId' => 'copy_job_id',
            'autoUpdateSubModule' => 'auto_update_sub_module',
            'flavor' => 'flavor',
            'parameters' => 'parameters',
            'scms' => 'scms',
            'steps' => 'steps',
            'hostType' => 'host_type',
            'buildConfigType' => 'build_config_type',
            'triggers' => 'triggers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * copyJobId  构建任务ID
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'projectId' => 'setProjectId',
            'jobName' => 'setJobName',
            'copyJobId' => 'setCopyJobId',
            'autoUpdateSubModule' => 'setAutoUpdateSubModule',
            'flavor' => 'setFlavor',
            'parameters' => 'setParameters',
            'scms' => 'setScms',
            'steps' => 'setSteps',
            'hostType' => 'setHostType',
            'buildConfigType' => 'setBuildConfigType',
            'triggers' => 'setTriggers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  使用机器的架构
    * projectId  构建任务所在项目的ID
    * jobName  任务名称
    * copyJobId  构建任务ID
    * autoUpdateSubModule  是否自动更新子模块
    * flavor  执行机规格
    * parameters  构建执行参数列表
    * scms  构建执行SCM
    * steps  构建执行的步骤
    * hostType  host类型
    * buildConfigType  构建的配置类型
    * triggers  定时任务触发器集合
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'projectId' => 'getProjectId',
            'jobName' => 'getJobName',
            'copyJobId' => 'getCopyJobId',
            'autoUpdateSubModule' => 'getAutoUpdateSubModule',
            'flavor' => 'getFlavor',
            'parameters' => 'getParameters',
            'scms' => 'getScms',
            'steps' => 'getSteps',
            'hostType' => 'getHostType',
            'buildConfigType' => 'getBuildConfigType',
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
        $this->container['copyJobId'] = isset($data['copyJobId']) ? $data['copyJobId'] : null;
        $this->container['autoUpdateSubModule'] = isset($data['autoUpdateSubModule']) ? $data['autoUpdateSubModule'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['scms'] = isset($data['scms']) ? $data['scms'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['buildConfigType'] = isset($data['buildConfigType']) ? $data['buildConfigType'] : null;
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
        if ($this->container['copyJobId'] === null) {
            $invalidProperties[] = "'copyJobId' can't be null";
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
    * Gets copyJobId
    *  构建任务ID
    *
    * @return string
    */
    public function getCopyJobId()
    {
        return $this->container['copyJobId'];
    }

    /**
    * Sets copyJobId
    *
    * @param string $copyJobId 构建任务ID
    *
    * @return $this
    */
    public function setCopyJobId($copyJobId)
    {
        $this->container['copyJobId'] = $copyJobId;
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

