<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  工作流名称，需要满足中文、英文大小写、数字、中划线和下划线{1,64}。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * templateName  模板名称，示例：CMS::ECS::BulkyRunScript  CMS::ECS::BulkyStartECSInstances CMS::ECS::BulkyCleanDisks
    * templateId  模板id。
    * input  任务执行时需要的参数列表。
    * quote  引用，参数引用。
    * jobName  作业名称。
    * jobId  作业id。
    * serviceScenario  服务场景分类。
    * serviceName  服务名称。
    * taskType  任务类型。package,script,job,cloud,standard,customize
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'description' => 'string',
            'tags' => 'object',
            'templateName' => 'string',
            'templateId' => 'string',
            'input' => 'map[string,object]',
            'quote' => 'string[]',
            'jobName' => 'string',
            'jobId' => 'string',
            'serviceScenario' => 'string',
            'serviceName' => 'string',
            'taskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  工作流名称，需要满足中文、英文大小写、数字、中划线和下划线{1,64}。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * templateName  模板名称，示例：CMS::ECS::BulkyRunScript  CMS::ECS::BulkyStartECSInstances CMS::ECS::BulkyCleanDisks
    * templateId  模板id。
    * input  任务执行时需要的参数列表。
    * quote  引用，参数引用。
    * jobName  作业名称。
    * jobId  作业id。
    * serviceScenario  服务场景分类。
    * serviceName  服务名称。
    * taskType  任务类型。package,script,job,cloud,standard,customize
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'description' => null,
        'tags' => null,
        'templateName' => null,
        'templateId' => null,
        'input' => null,
        'quote' => null,
        'jobName' => null,
        'jobId' => null,
        'serviceScenario' => null,
        'serviceName' => null,
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
    * name  工作流名称，需要满足中文、英文大小写、数字、中划线和下划线{1,64}。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * templateName  模板名称，示例：CMS::ECS::BulkyRunScript  CMS::ECS::BulkyStartECSInstances CMS::ECS::BulkyCleanDisks
    * templateId  模板id。
    * input  任务执行时需要的参数列表。
    * quote  引用，参数引用。
    * jobName  作业名称。
    * jobId  作业id。
    * serviceScenario  服务场景分类。
    * serviceName  服务名称。
    * taskType  任务类型。package,script,job,cloud,standard,customize
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'tags' => 'tags',
            'templateName' => 'template_name',
            'templateId' => 'template_id',
            'input' => 'input',
            'quote' => 'quote',
            'jobName' => 'job_name',
            'jobId' => 'job_id',
            'serviceScenario' => 'service_scenario',
            'serviceName' => 'service_name',
            'taskType' => 'task_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  工作流名称，需要满足中文、英文大小写、数字、中划线和下划线{1,64}。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * templateName  模板名称，示例：CMS::ECS::BulkyRunScript  CMS::ECS::BulkyStartECSInstances CMS::ECS::BulkyCleanDisks
    * templateId  模板id。
    * input  任务执行时需要的参数列表。
    * quote  引用，参数引用。
    * jobName  作业名称。
    * jobId  作业id。
    * serviceScenario  服务场景分类。
    * serviceName  服务名称。
    * taskType  任务类型。package,script,job,cloud,standard,customize
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'templateName' => 'setTemplateName',
            'templateId' => 'setTemplateId',
            'input' => 'setInput',
            'quote' => 'setQuote',
            'jobName' => 'setJobName',
            'jobId' => 'setJobId',
            'serviceScenario' => 'setServiceScenario',
            'serviceName' => 'setServiceName',
            'taskType' => 'setTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  工作流名称，需要满足中文、英文大小写、数字、中划线和下划线{1,64}。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * templateName  模板名称，示例：CMS::ECS::BulkyRunScript  CMS::ECS::BulkyStartECSInstances CMS::ECS::BulkyCleanDisks
    * templateId  模板id。
    * input  任务执行时需要的参数列表。
    * quote  引用，参数引用。
    * jobName  作业名称。
    * jobId  作业id。
    * serviceScenario  服务场景分类。
    * serviceName  服务名称。
    * taskType  任务类型。package,script,job,cloud,standard,customize
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'templateName' => 'getTemplateName',
            'templateId' => 'getTemplateId',
            'input' => 'getInput',
            'quote' => 'getQuote',
            'jobName' => 'getJobName',
            'jobId' => 'getJobId',
            'serviceScenario' => 'getServiceScenario',
            'serviceName' => 'getServiceName',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['serviceScenario'] = isset($data['serviceScenario']) ? $data['serviceScenario'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[^\\\\>+<^;#\"\\s&?%='$￥@*_\/\\]\\[【】{}|:,.，。：‘’“、—！!~`·？《》…]{1,64}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[^\\\\>+<^;#\"\\s&?%='$￥@*_\/\\]\\[【】{}|:,.，。：‘’“、—！!~`·？《》…]{1,64}/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if ((mb_strlen($this->container['templateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceScenario']) && (mb_strlen($this->container['serviceScenario']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceScenario', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serviceScenario']) && (mb_strlen($this->container['serviceScenario']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceScenario', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
            if ((mb_strlen($this->container['taskType']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  工作流名称，需要满足中文、英文大小写、数字、中划线和下划线{1,64}。
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
    * @param string $name 工作流名称，需要满足中文、英文大小写、数字、中划线和下划线{1,64}。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  工作流类型，可以为cron、manual
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
    * @param string $type 工作流类型，可以为cron、manual
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  工作流描述信息。
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
    * @param string|null $description 工作流描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  标签键和值列表，标签键值对数量范围是0至20。
    *
    * @return object|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param object|null $tags 标签键和值列表，标签键值对数量范围是0至20。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets templateName
    *  模板名称，示例：CMS::ECS::BulkyRunScript  CMS::ECS::BulkyStartECSInstances CMS::ECS::BulkyCleanDisks
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 模板名称，示例：CMS::ECS::BulkyRunScript  CMS::ECS::BulkyStartECSInstances CMS::ECS::BulkyCleanDisks
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateId
    *  模板id。
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 模板id。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets input
    *  任务执行时需要的参数列表。
    *
    * @return map[string,object]
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param map[string,object] $input 任务执行时需要的参数列表。
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets quote
    *  引用，参数引用。
    *
    * @return string[]|null
    */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
    * Sets quote
    *
    * @param string[]|null $quote 引用，参数引用。
    *
    * @return $this
    */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 作业名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id。
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
    * @param string|null $jobId 作业id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets serviceScenario
    *  服务场景分类。
    *
    * @return string|null
    */
    public function getServiceScenario()
    {
        return $this->container['serviceScenario'];
    }

    /**
    * Sets serviceScenario
    *
    * @param string|null $serviceScenario 服务场景分类。
    *
    * @return $this
    */
    public function setServiceScenario($serviceScenario)
    {
        $this->container['serviceScenario'] = $serviceScenario;
        return $this;
    }

    /**
    * Gets serviceName
    *  服务名称。
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名称。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型。package,script,job,cloud,standard,customize
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType 任务类型。package,script,job,cloud,standard,customize
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

