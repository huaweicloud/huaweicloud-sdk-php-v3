<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateState';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  任务类型
    * name  任务名字
    * moduleOrTemplateId  模板任务ID
    * moduleOrTemplateName  模板任务名字
    * displayName  任务在流水线页面展示名字
    * dslMethod  流水线可挂载任务类型
    * parameters  任务参数,map类型数据
    * isManualExecution  是否手动执行
    * jobParameterValidate  任务参数是否校验
    * isShowCodehubUrl  是否显示代码仓URL
    * isExecute  是否执行
    * jobId  执行任务ID
    * jobName  执行任务名字
    * projectId  任务所属项目ID
    * executionMode  控制阶段下任务的串并行（type是task的execution_mode值为null，type是stage的execution_mode可选parallel（并行）或者serial（串行））
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'name' => 'string',
            'moduleOrTemplateId' => 'string',
            'moduleOrTemplateName' => 'string',
            'displayName' => 'string',
            'dslMethod' => 'string',
            'parameters' => 'map[string,object]',
            'isManualExecution' => 'bool',
            'jobParameterValidate' => 'bool',
            'isShowCodehubUrl' => 'bool',
            'isExecute' => 'bool',
            'jobId' => 'string',
            'jobName' => 'string',
            'projectId' => 'string',
            'executionMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  任务类型
    * name  任务名字
    * moduleOrTemplateId  模板任务ID
    * moduleOrTemplateName  模板任务名字
    * displayName  任务在流水线页面展示名字
    * dslMethod  流水线可挂载任务类型
    * parameters  任务参数,map类型数据
    * isManualExecution  是否手动执行
    * jobParameterValidate  任务参数是否校验
    * isShowCodehubUrl  是否显示代码仓URL
    * isExecute  是否执行
    * jobId  执行任务ID
    * jobName  执行任务名字
    * projectId  任务所属项目ID
    * executionMode  控制阶段下任务的串并行（type是task的execution_mode值为null，type是stage的execution_mode可选parallel（并行）或者serial（串行））
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'name' => null,
        'moduleOrTemplateId' => null,
        'moduleOrTemplateName' => null,
        'displayName' => null,
        'dslMethod' => null,
        'parameters' => null,
        'isManualExecution' => null,
        'jobParameterValidate' => null,
        'isShowCodehubUrl' => null,
        'isExecute' => null,
        'jobId' => null,
        'jobName' => null,
        'projectId' => null,
        'executionMode' => null
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
    * type  任务类型
    * name  任务名字
    * moduleOrTemplateId  模板任务ID
    * moduleOrTemplateName  模板任务名字
    * displayName  任务在流水线页面展示名字
    * dslMethod  流水线可挂载任务类型
    * parameters  任务参数,map类型数据
    * isManualExecution  是否手动执行
    * jobParameterValidate  任务参数是否校验
    * isShowCodehubUrl  是否显示代码仓URL
    * isExecute  是否执行
    * jobId  执行任务ID
    * jobName  执行任务名字
    * projectId  任务所属项目ID
    * executionMode  控制阶段下任务的串并行（type是task的execution_mode值为null，type是stage的execution_mode可选parallel（并行）或者serial（串行））
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'name' => 'name',
            'moduleOrTemplateId' => 'module_or_template_id',
            'moduleOrTemplateName' => 'module_or_template_name',
            'displayName' => 'display_name',
            'dslMethod' => 'dsl_method',
            'parameters' => 'parameters',
            'isManualExecution' => 'is_manual_execution',
            'jobParameterValidate' => 'job_parameter_validate',
            'isShowCodehubUrl' => 'is_show_codehub_url',
            'isExecute' => 'is_execute',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'projectId' => 'project_id',
            'executionMode' => 'execution_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  任务类型
    * name  任务名字
    * moduleOrTemplateId  模板任务ID
    * moduleOrTemplateName  模板任务名字
    * displayName  任务在流水线页面展示名字
    * dslMethod  流水线可挂载任务类型
    * parameters  任务参数,map类型数据
    * isManualExecution  是否手动执行
    * jobParameterValidate  任务参数是否校验
    * isShowCodehubUrl  是否显示代码仓URL
    * isExecute  是否执行
    * jobId  执行任务ID
    * jobName  执行任务名字
    * projectId  任务所属项目ID
    * executionMode  控制阶段下任务的串并行（type是task的execution_mode值为null，type是stage的execution_mode可选parallel（并行）或者serial（串行））
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'name' => 'setName',
            'moduleOrTemplateId' => 'setModuleOrTemplateId',
            'moduleOrTemplateName' => 'setModuleOrTemplateName',
            'displayName' => 'setDisplayName',
            'dslMethod' => 'setDslMethod',
            'parameters' => 'setParameters',
            'isManualExecution' => 'setIsManualExecution',
            'jobParameterValidate' => 'setJobParameterValidate',
            'isShowCodehubUrl' => 'setIsShowCodehubUrl',
            'isExecute' => 'setIsExecute',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'projectId' => 'setProjectId',
            'executionMode' => 'setExecutionMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  任务类型
    * name  任务名字
    * moduleOrTemplateId  模板任务ID
    * moduleOrTemplateName  模板任务名字
    * displayName  任务在流水线页面展示名字
    * dslMethod  流水线可挂载任务类型
    * parameters  任务参数,map类型数据
    * isManualExecution  是否手动执行
    * jobParameterValidate  任务参数是否校验
    * isShowCodehubUrl  是否显示代码仓URL
    * isExecute  是否执行
    * jobId  执行任务ID
    * jobName  执行任务名字
    * projectId  任务所属项目ID
    * executionMode  控制阶段下任务的串并行（type是task的execution_mode值为null，type是stage的execution_mode可选parallel（并行）或者serial（串行））
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'name' => 'getName',
            'moduleOrTemplateId' => 'getModuleOrTemplateId',
            'moduleOrTemplateName' => 'getModuleOrTemplateName',
            'displayName' => 'getDisplayName',
            'dslMethod' => 'getDslMethod',
            'parameters' => 'getParameters',
            'isManualExecution' => 'getIsManualExecution',
            'jobParameterValidate' => 'getJobParameterValidate',
            'isShowCodehubUrl' => 'getIsShowCodehubUrl',
            'isExecute' => 'getIsExecute',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'projectId' => 'getProjectId',
            'executionMode' => 'getExecutionMode'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['moduleOrTemplateId'] = isset($data['moduleOrTemplateId']) ? $data['moduleOrTemplateId'] : null;
        $this->container['moduleOrTemplateName'] = isset($data['moduleOrTemplateName']) ? $data['moduleOrTemplateName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['dslMethod'] = isset($data['dslMethod']) ? $data['dslMethod'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['isManualExecution'] = isset($data['isManualExecution']) ? $data['isManualExecution'] : null;
        $this->container['jobParameterValidate'] = isset($data['jobParameterValidate']) ? $data['jobParameterValidate'] : null;
        $this->container['isShowCodehubUrl'] = isset($data['isShowCodehubUrl']) ? $data['isShowCodehubUrl'] : null;
        $this->container['isExecute'] = isset($data['isExecute']) ? $data['isExecute'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['executionMode'] = isset($data['executionMode']) ? $data['executionMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['moduleOrTemplateId'] === null) {
            $invalidProperties[] = "'moduleOrTemplateId' can't be null";
        }
        if ($this->container['moduleOrTemplateName'] === null) {
            $invalidProperties[] = "'moduleOrTemplateName' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['dslMethod'] === null) {
            $invalidProperties[] = "'dslMethod' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        if ($this->container['isManualExecution'] === null) {
            $invalidProperties[] = "'isManualExecution' can't be null";
        }
        if ($this->container['jobParameterValidate'] === null) {
            $invalidProperties[] = "'jobParameterValidate' can't be null";
        }
        if ($this->container['isShowCodehubUrl'] === null) {
            $invalidProperties[] = "'isShowCodehubUrl' can't be null";
        }
        if ($this->container['isExecute'] === null) {
            $invalidProperties[] = "'isExecute' can't be null";
        }
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['executionMode'] === null) {
            $invalidProperties[] = "'executionMode' can't be null";
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
    * Gets type
    *  任务类型
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
    * @param string $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  任务名字
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 任务名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets moduleOrTemplateId
    *  模板任务ID
    *
    * @return string
    */
    public function getModuleOrTemplateId()
    {
        return $this->container['moduleOrTemplateId'];
    }

    /**
    * Sets moduleOrTemplateId
    *
    * @param string $moduleOrTemplateId 模板任务ID
    *
    * @return $this
    */
    public function setModuleOrTemplateId($moduleOrTemplateId)
    {
        $this->container['moduleOrTemplateId'] = $moduleOrTemplateId;
        return $this;
    }

    /**
    * Gets moduleOrTemplateName
    *  模板任务名字
    *
    * @return string
    */
    public function getModuleOrTemplateName()
    {
        return $this->container['moduleOrTemplateName'];
    }

    /**
    * Sets moduleOrTemplateName
    *
    * @param string $moduleOrTemplateName 模板任务名字
    *
    * @return $this
    */
    public function setModuleOrTemplateName($moduleOrTemplateName)
    {
        $this->container['moduleOrTemplateName'] = $moduleOrTemplateName;
        return $this;
    }

    /**
    * Gets displayName
    *  任务在流水线页面展示名字
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 任务在流水线页面展示名字
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets dslMethod
    *  流水线可挂载任务类型
    *
    * @return string
    */
    public function getDslMethod()
    {
        return $this->container['dslMethod'];
    }

    /**
    * Sets dslMethod
    *
    * @param string $dslMethod 流水线可挂载任务类型
    *
    * @return $this
    */
    public function setDslMethod($dslMethod)
    {
        $this->container['dslMethod'] = $dslMethod;
        return $this;
    }

    /**
    * Gets parameters
    *  任务参数,map类型数据
    *
    * @return map[string,object]
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,object] $parameters 任务参数,map类型数据
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets isManualExecution
    *  是否手动执行
    *
    * @return bool
    */
    public function getIsManualExecution()
    {
        return $this->container['isManualExecution'];
    }

    /**
    * Sets isManualExecution
    *
    * @param bool $isManualExecution 是否手动执行
    *
    * @return $this
    */
    public function setIsManualExecution($isManualExecution)
    {
        $this->container['isManualExecution'] = $isManualExecution;
        return $this;
    }

    /**
    * Gets jobParameterValidate
    *  任务参数是否校验
    *
    * @return bool
    */
    public function getJobParameterValidate()
    {
        return $this->container['jobParameterValidate'];
    }

    /**
    * Sets jobParameterValidate
    *
    * @param bool $jobParameterValidate 任务参数是否校验
    *
    * @return $this
    */
    public function setJobParameterValidate($jobParameterValidate)
    {
        $this->container['jobParameterValidate'] = $jobParameterValidate;
        return $this;
    }

    /**
    * Gets isShowCodehubUrl
    *  是否显示代码仓URL
    *
    * @return bool
    */
    public function getIsShowCodehubUrl()
    {
        return $this->container['isShowCodehubUrl'];
    }

    /**
    * Sets isShowCodehubUrl
    *
    * @param bool $isShowCodehubUrl 是否显示代码仓URL
    *
    * @return $this
    */
    public function setIsShowCodehubUrl($isShowCodehubUrl)
    {
        $this->container['isShowCodehubUrl'] = $isShowCodehubUrl;
        return $this;
    }

    /**
    * Gets isExecute
    *  是否执行
    *
    * @return bool
    */
    public function getIsExecute()
    {
        return $this->container['isExecute'];
    }

    /**
    * Sets isExecute
    *
    * @param bool $isExecute 是否执行
    *
    * @return $this
    */
    public function setIsExecute($isExecute)
    {
        $this->container['isExecute'] = $isExecute;
        return $this;
    }

    /**
    * Gets jobId
    *  执行任务ID
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
    * @param string $jobId 执行任务ID
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
    *  执行任务名字
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
    * @param string $jobName 执行任务名字
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets projectId
    *  任务所属项目ID
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
    * @param string $projectId 任务所属项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets executionMode
    *  控制阶段下任务的串并行（type是task的execution_mode值为null，type是stage的execution_mode可选parallel（并行）或者serial（串行））
    *
    * @return string
    */
    public function getExecutionMode()
    {
        return $this->container['executionMode'];
    }

    /**
    * Sets executionMode
    *
    * @param string $executionMode 控制阶段下任务的串并行（type是task的execution_mode值为null，type是stage的execution_mode可选parallel（并行）或者serial（串行））
    *
    * @return $this
    */
    public function setExecutionMode($executionMode)
    {
        $this->container['executionMode'] = $executionMode;
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

