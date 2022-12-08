<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExecutionPlanRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExecutionPlanRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackId  用户希望生成执行计划的栈（stack）的Id。此Id由资源编排服务在生成栈的时候生成，为UUID。
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的OBS地址，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。目前接受纯tf文件或zip压缩包。 纯tf文件需要以“.tf”结尾，并遵守tf模板格式。压缩包目前只支持zip格式，文件需要以\".zip\"结尾，压缩包解压后应该只包含文件，且文件均以“.tf”结尾，不支持nested结构 template_body 和 template_uri 有且仅有一个存在
    * executionPlanName  执行计划的名字，在domain_id+region+project_id+stack_id下应唯一。
    * description  执行计划的描述。可用于客户识别自己的执行计划
    * varsStructure  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。var是一系列terraform所需要的参数。 注：资源编排服务支持vars、vars_body和vars_uri，如果vars、vars_body和vars_uri中声名了同一个变量，将报错400。 注：vars中的值只支持简单的字符串类型，如果其他类型，需要用户自己在HCL引用时转换，或者用户可以使用vars_body或vars_uri， vars_body和vars_uri中支持HCL支持的各种类型以及复杂结构。
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * varsUri  参数文件的OBS地址，如果客户偏向使用文件维护参数，可以将参数上传OBS，并将OBS地址提交。 注：如果用户同时使用了vars_body、vars_uri和vars，且他们的内容中定义了同一个参数，资源编排服务将报错并返回400。 vars_uri和vars_body中的vars按照HCL的语义，可以支持各种类型、复杂结构等
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackId' => 'string',
            'templateBody' => 'string',
            'templateUri' => 'string',
            'executionPlanName' => 'string',
            'description' => 'string',
            'varsStructure' => '\HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]',
            'varsBody' => 'string',
            'varsUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackId  用户希望生成执行计划的栈（stack）的Id。此Id由资源编排服务在生成栈的时候生成，为UUID。
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的OBS地址，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。目前接受纯tf文件或zip压缩包。 纯tf文件需要以“.tf”结尾，并遵守tf模板格式。压缩包目前只支持zip格式，文件需要以\".zip\"结尾，压缩包解压后应该只包含文件，且文件均以“.tf”结尾，不支持nested结构 template_body 和 template_uri 有且仅有一个存在
    * executionPlanName  执行计划的名字，在domain_id+region+project_id+stack_id下应唯一。
    * description  执行计划的描述。可用于客户识别自己的执行计划
    * varsStructure  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。var是一系列terraform所需要的参数。 注：资源编排服务支持vars、vars_body和vars_uri，如果vars、vars_body和vars_uri中声名了同一个变量，将报错400。 注：vars中的值只支持简单的字符串类型，如果其他类型，需要用户自己在HCL引用时转换，或者用户可以使用vars_body或vars_uri， vars_body和vars_uri中支持HCL支持的各种类型以及复杂结构。
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * varsUri  参数文件的OBS地址，如果客户偏向使用文件维护参数，可以将参数上传OBS，并将OBS地址提交。 注：如果用户同时使用了vars_body、vars_uri和vars，且他们的内容中定义了同一个参数，资源编排服务将报错并返回400。 vars_uri和vars_body中的vars按照HCL的语义，可以支持各种类型、复杂结构等
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackId' => null,
        'templateBody' => null,
        'templateUri' => null,
        'executionPlanName' => null,
        'description' => null,
        'varsStructure' => null,
        'varsBody' => null,
        'varsUri' => null
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
    * stackId  用户希望生成执行计划的栈（stack）的Id。此Id由资源编排服务在生成栈的时候生成，为UUID。
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的OBS地址，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。目前接受纯tf文件或zip压缩包。 纯tf文件需要以“.tf”结尾，并遵守tf模板格式。压缩包目前只支持zip格式，文件需要以\".zip\"结尾，压缩包解压后应该只包含文件，且文件均以“.tf”结尾，不支持nested结构 template_body 和 template_uri 有且仅有一个存在
    * executionPlanName  执行计划的名字，在domain_id+region+project_id+stack_id下应唯一。
    * description  执行计划的描述。可用于客户识别自己的执行计划
    * varsStructure  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。var是一系列terraform所需要的参数。 注：资源编排服务支持vars、vars_body和vars_uri，如果vars、vars_body和vars_uri中声名了同一个变量，将报错400。 注：vars中的值只支持简单的字符串类型，如果其他类型，需要用户自己在HCL引用时转换，或者用户可以使用vars_body或vars_uri， vars_body和vars_uri中支持HCL支持的各种类型以及复杂结构。
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * varsUri  参数文件的OBS地址，如果客户偏向使用文件维护参数，可以将参数上传OBS，并将OBS地址提交。 注：如果用户同时使用了vars_body、vars_uri和vars，且他们的内容中定义了同一个参数，资源编排服务将报错并返回400。 vars_uri和vars_body中的vars按照HCL的语义，可以支持各种类型、复杂结构等
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackId' => 'stack_id',
            'templateBody' => 'template_body',
            'templateUri' => 'template_uri',
            'executionPlanName' => 'execution_plan_name',
            'description' => 'description',
            'varsStructure' => 'vars_structure',
            'varsBody' => 'vars_body',
            'varsUri' => 'vars_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackId  用户希望生成执行计划的栈（stack）的Id。此Id由资源编排服务在生成栈的时候生成，为UUID。
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的OBS地址，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。目前接受纯tf文件或zip压缩包。 纯tf文件需要以“.tf”结尾，并遵守tf模板格式。压缩包目前只支持zip格式，文件需要以\".zip\"结尾，压缩包解压后应该只包含文件，且文件均以“.tf”结尾，不支持nested结构 template_body 和 template_uri 有且仅有一个存在
    * executionPlanName  执行计划的名字，在domain_id+region+project_id+stack_id下应唯一。
    * description  执行计划的描述。可用于客户识别自己的执行计划
    * varsStructure  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。var是一系列terraform所需要的参数。 注：资源编排服务支持vars、vars_body和vars_uri，如果vars、vars_body和vars_uri中声名了同一个变量，将报错400。 注：vars中的值只支持简单的字符串类型，如果其他类型，需要用户自己在HCL引用时转换，或者用户可以使用vars_body或vars_uri， vars_body和vars_uri中支持HCL支持的各种类型以及复杂结构。
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * varsUri  参数文件的OBS地址，如果客户偏向使用文件维护参数，可以将参数上传OBS，并将OBS地址提交。 注：如果用户同时使用了vars_body、vars_uri和vars，且他们的内容中定义了同一个参数，资源编排服务将报错并返回400。 vars_uri和vars_body中的vars按照HCL的语义，可以支持各种类型、复杂结构等
    *
    * @var string[]
    */
    protected static $setters = [
            'stackId' => 'setStackId',
            'templateBody' => 'setTemplateBody',
            'templateUri' => 'setTemplateUri',
            'executionPlanName' => 'setExecutionPlanName',
            'description' => 'setDescription',
            'varsStructure' => 'setVarsStructure',
            'varsBody' => 'setVarsBody',
            'varsUri' => 'setVarsUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackId  用户希望生成执行计划的栈（stack）的Id。此Id由资源编排服务在生成栈的时候生成，为UUID。
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的OBS地址，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。目前接受纯tf文件或zip压缩包。 纯tf文件需要以“.tf”结尾，并遵守tf模板格式。压缩包目前只支持zip格式，文件需要以\".zip\"结尾，压缩包解压后应该只包含文件，且文件均以“.tf”结尾，不支持nested结构 template_body 和 template_uri 有且仅有一个存在
    * executionPlanName  执行计划的名字，在domain_id+region+project_id+stack_id下应唯一。
    * description  执行计划的描述。可用于客户识别自己的执行计划
    * varsStructure  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。var是一系列terraform所需要的参数。 注：资源编排服务支持vars、vars_body和vars_uri，如果vars、vars_body和vars_uri中声名了同一个变量，将报错400。 注：vars中的值只支持简单的字符串类型，如果其他类型，需要用户自己在HCL引用时转换，或者用户可以使用vars_body或vars_uri， vars_body和vars_uri中支持HCL支持的各种类型以及复杂结构。
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * varsUri  参数文件的OBS地址，如果客户偏向使用文件维护参数，可以将参数上传OBS，并将OBS地址提交。 注：如果用户同时使用了vars_body、vars_uri和vars，且他们的内容中定义了同一个参数，资源编排服务将报错并返回400。 vars_uri和vars_body中的vars按照HCL的语义，可以支持各种类型、复杂结构等
    *
    * @var string[]
    */
    protected static $getters = [
            'stackId' => 'getStackId',
            'templateBody' => 'getTemplateBody',
            'templateUri' => 'getTemplateUri',
            'executionPlanName' => 'getExecutionPlanName',
            'description' => 'getDescription',
            'varsStructure' => 'getVarsStructure',
            'varsBody' => 'getVarsBody',
            'varsUri' => 'getVarsUri'
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
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
        $this->container['templateUri'] = isset($data['templateUri']) ? $data['templateUri'] : null;
        $this->container['executionPlanName'] = isset($data['executionPlanName']) ? $data['executionPlanName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['varsStructure'] = isset($data['varsStructure']) ? $data['varsStructure'] : null;
        $this->container['varsBody'] = isset($data['varsBody']) ? $data['varsBody'] : null;
        $this->container['varsUri'] = isset($data['varsUri']) ? $data['varsUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackId'])) {
                $invalidProperties[] = "invalid value for 'stackId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateUri']) && !preg_match("/^(http|https):\/\/[\\S]*(.tf|.tf.json|.zip){1}(\\?[\\S]+)?$/", $this->container['templateUri'])) {
                $invalidProperties[] = "invalid value for 'templateUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(.tf|.tf.json|.zip){1}(\\?[\\S]+)?$/.";
            }
        if ($this->container['executionPlanName'] === null) {
            $invalidProperties[] = "'executionPlanName' can't be null";
        }
            if ((mb_strlen($this->container['executionPlanName']) > 128)) {
                $invalidProperties[] = "invalid value for 'executionPlanName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['executionPlanName']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionPlanName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['executionPlanName'])) {
                $invalidProperties[] = "invalid value for 'executionPlanName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['varsBody']) && (mb_strlen($this->container['varsBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'varsBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['varsBody']) && (mb_strlen($this->container['varsBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'varsBody', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['varsUri']) && (mb_strlen($this->container['varsUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'varsUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['varsUri']) && (mb_strlen($this->container['varsUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'varsUri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['varsUri']) && !preg_match("/^(http|https):\/\/[\\S]*(.tfvars){1}(\\?[\\S]+)?$/", $this->container['varsUri'])) {
                $invalidProperties[] = "invalid value for 'varsUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(.tfvars){1}(\\?[\\S]+)?$/.";
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
    * Gets stackId
    *  用户希望生成执行计划的栈（stack）的Id。此Id由资源编排服务在生成栈的时候生成，为UUID。
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 用户希望生成执行计划的栈（stack）的Id。此Id由资源编排服务在生成栈的时候生成，为UUID。
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets templateBody
    *  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别 template_body 和 template_uri 有且仅有一个存在
    *
    * @return string|null
    */
    public function getTemplateBody()
    {
        return $this->container['templateBody'];
    }

    /**
    * Sets templateBody
    *
    * @param string|null $templateBody HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别 template_body 和 template_uri 有且仅有一个存在
    *
    * @return $this
    */
    public function setTemplateBody($templateBody)
    {
        $this->container['templateBody'] = $templateBody;
        return $this;
    }

    /**
    * Gets templateUri
    *  HCL模板的OBS地址，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。目前接受纯tf文件或zip压缩包。 纯tf文件需要以“.tf”结尾，并遵守tf模板格式。压缩包目前只支持zip格式，文件需要以\".zip\"结尾，压缩包解压后应该只包含文件，且文件均以“.tf”结尾，不支持nested结构 template_body 和 template_uri 有且仅有一个存在
    *
    * @return string|null
    */
    public function getTemplateUri()
    {
        return $this->container['templateUri'];
    }

    /**
    * Sets templateUri
    *
    * @param string|null $templateUri HCL模板的OBS地址，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。目前接受纯tf文件或zip压缩包。 纯tf文件需要以“.tf”结尾，并遵守tf模板格式。压缩包目前只支持zip格式，文件需要以\".zip\"结尾，压缩包解压后应该只包含文件，且文件均以“.tf”结尾，不支持nested结构 template_body 和 template_uri 有且仅有一个存在
    *
    * @return $this
    */
    public function setTemplateUri($templateUri)
    {
        $this->container['templateUri'] = $templateUri;
        return $this;
    }

    /**
    * Gets executionPlanName
    *  执行计划的名字，在domain_id+region+project_id+stack_id下应唯一。
    *
    * @return string
    */
    public function getExecutionPlanName()
    {
        return $this->container['executionPlanName'];
    }

    /**
    * Sets executionPlanName
    *
    * @param string $executionPlanName 执行计划的名字，在domain_id+region+project_id+stack_id下应唯一。
    *
    * @return $this
    */
    public function setExecutionPlanName($executionPlanName)
    {
        $this->container['executionPlanName'] = $executionPlanName;
        return $this;
    }

    /**
    * Gets description
    *  执行计划的描述。可用于客户识别自己的执行计划
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
    * @param string|null $description 执行计划的描述。可用于客户识别自己的执行计划
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets varsStructure
    *  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。var是一系列terraform所需要的参数。 注：资源编排服务支持vars、vars_body和vars_uri，如果vars、vars_body和vars_uri中声名了同一个变量，将报错400。 注：vars中的值只支持简单的字符串类型，如果其他类型，需要用户自己在HCL引用时转换，或者用户可以使用vars_body或vars_uri， vars_body和vars_uri中支持HCL支持的各种类型以及复杂结构。
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]|null
    */
    public function getVarsStructure()
    {
        return $this->container['varsStructure'];
    }

    /**
    * Sets varsStructure
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]|null $varsStructure terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。var是一系列terraform所需要的参数。 注：资源编排服务支持vars、vars_body和vars_uri，如果vars、vars_body和vars_uri中声名了同一个变量，将报错400。 注：vars中的值只支持简单的字符串类型，如果其他类型，需要用户自己在HCL引用时转换，或者用户可以使用vars_body或vars_uri， vars_body和vars_uri中支持HCL支持的各种类型以及复杂结构。
    *
    * @return $this
    */
    public function setVarsStructure($varsStructure)
    {
        $this->container['varsStructure'] = $varsStructure;
        return $this;
    }

    /**
    * Gets varsBody
    *  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    *
    * @return string|null
    */
    public function getVarsBody()
    {
        return $this->container['varsBody'];
    }

    /**
    * Sets varsBody
    *
    * @param string|null $varsBody terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    *
    * @return $this
    */
    public function setVarsBody($varsBody)
    {
        $this->container['varsBody'] = $varsBody;
        return $this;
    }

    /**
    * Gets varsUri
    *  参数文件的OBS地址，如果客户偏向使用文件维护参数，可以将参数上传OBS，并将OBS地址提交。 注：如果用户同时使用了vars_body、vars_uri和vars，且他们的内容中定义了同一个参数，资源编排服务将报错并返回400。 vars_uri和vars_body中的vars按照HCL的语义，可以支持各种类型、复杂结构等
    *
    * @return string|null
    */
    public function getVarsUri()
    {
        return $this->container['varsUri'];
    }

    /**
    * Sets varsUri
    *
    * @param string|null $varsUri 参数文件的OBS地址，如果客户偏向使用文件维护参数，可以将参数上传OBS，并将OBS地址提交。 注：如果用户同时使用了vars_body、vars_uri和vars，且他们的内容中定义了同一个参数，资源编排服务将报错并返回400。 vars_uri和vars_body中的vars按照HCL的语义，可以支持各种类型、复杂结构等
    *
    * @return $this
    */
    public function setVarsUri($varsUri)
    {
        $this->container['varsUri'] = $varsUri;
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

