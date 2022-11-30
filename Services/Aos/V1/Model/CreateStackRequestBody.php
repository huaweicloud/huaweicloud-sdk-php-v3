<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateStackRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateStackRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * executor  执行操作者的名字，将用做未来的审计工作
    * agencies  委托授权的信息。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）
    * templateBody  HCL模板，描述了资源的目标状态。RF将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    * varsBody  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsStructure  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsUri  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackName' => 'string',
            'executor' => 'string',
            'agencies' => '\HuaweiCloud\SDK\Aos\V1\Model\Agency[]',
            'description' => 'string',
            'enableDeletionProtection' => 'bool',
            'enableAutoRollback' => 'bool',
            'templateBody' => 'string',
            'templateUri' => 'string',
            'varsBody' => 'string',
            'varsStructure' => '\HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]',
            'varsUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * executor  执行操作者的名字，将用做未来的审计工作
    * agencies  委托授权的信息。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）
    * templateBody  HCL模板，描述了资源的目标状态。RF将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    * varsBody  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsStructure  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsUri  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackName' => null,
        'executor' => null,
        'agencies' => null,
        'description' => null,
        'enableDeletionProtection' => null,
        'enableAutoRollback' => null,
        'templateBody' => null,
        'templateUri' => null,
        'varsBody' => null,
        'varsStructure' => null,
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
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * executor  执行操作者的名字，将用做未来的审计工作
    * agencies  委托授权的信息。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）
    * templateBody  HCL模板，描述了资源的目标状态。RF将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    * varsBody  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsStructure  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsUri  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackName' => 'stack_name',
            'executor' => 'executor',
            'agencies' => 'agencies',
            'description' => 'description',
            'enableDeletionProtection' => 'enable_deletion_protection',
            'enableAutoRollback' => 'enable_auto_rollback',
            'templateBody' => 'template_body',
            'templateUri' => 'template_uri',
            'varsBody' => 'vars_body',
            'varsStructure' => 'vars_structure',
            'varsUri' => 'vars_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * executor  执行操作者的名字，将用做未来的审计工作
    * agencies  委托授权的信息。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）
    * templateBody  HCL模板，描述了资源的目标状态。RF将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    * varsBody  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsStructure  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsUri  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    *
    * @var string[]
    */
    protected static $setters = [
            'stackName' => 'setStackName',
            'executor' => 'setExecutor',
            'agencies' => 'setAgencies',
            'description' => 'setDescription',
            'enableDeletionProtection' => 'setEnableDeletionProtection',
            'enableAutoRollback' => 'setEnableAutoRollback',
            'templateBody' => 'setTemplateBody',
            'templateUri' => 'setTemplateUri',
            'varsBody' => 'setVarsBody',
            'varsStructure' => 'setVarsStructure',
            'varsUri' => 'setVarsUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * executor  执行操作者的名字，将用做未来的审计工作
    * agencies  委托授权的信息。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）
    * templateBody  HCL模板，描述了资源的目标状态。RF将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    * varsBody  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsStructure  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    * varsUri  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    *
    * @var string[]
    */
    protected static $getters = [
            'stackName' => 'getStackName',
            'executor' => 'getExecutor',
            'agencies' => 'getAgencies',
            'description' => 'getDescription',
            'enableDeletionProtection' => 'getEnableDeletionProtection',
            'enableAutoRollback' => 'getEnableAutoRollback',
            'templateBody' => 'getTemplateBody',
            'templateUri' => 'getTemplateUri',
            'varsBody' => 'getVarsBody',
            'varsStructure' => 'getVarsStructure',
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
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['agencies'] = isset($data['agencies']) ? $data['agencies'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableDeletionProtection'] = isset($data['enableDeletionProtection']) ? $data['enableDeletionProtection'] : null;
        $this->container['enableAutoRollback'] = isset($data['enableAutoRollback']) ? $data['enableAutoRollback'] : null;
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
        $this->container['templateUri'] = isset($data['templateUri']) ? $data['templateUri'] : null;
        $this->container['varsBody'] = isset($data['varsBody']) ? $data['varsBody'] : null;
        $this->container['varsStructure'] = isset($data['varsStructure']) ? $data['varsStructure'] : null;
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
        if ($this->container['stackName'] === null) {
            $invalidProperties[] = "'stackName' can't be null";
        }
            if ((mb_strlen($this->container['stackName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['stackName'])) {
                $invalidProperties[] = "invalid value for 'stackName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) > 32)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) < 1)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executor']) && !preg_match("/^[A-Za-z0-9]+$/", $this->container['executor'])) {
                $invalidProperties[] = "invalid value for 'executor', must be conform to the pattern /^[A-Za-z0-9]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be bigger than or equal to 0.";
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
    * Gets stackName
    *  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return string
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string $stackName 用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets executor
    *  执行操作者的名字，将用做未来的审计工作
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行操作者的名字，将用做未来的审计工作
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets agencies
    *  委托授权的信息。
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null
    */
    public function getAgencies()
    {
        return $this->container['agencies'];
    }

    /**
    * Sets agencies
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null $agencies 委托授权的信息。
    *
    * @return $this
    */
    public function setAgencies($agencies)
    {
        $this->container['agencies'] = $agencies;
        return $this;
    }

    /**
    * Gets description
    *  资源栈的描述。可用于客户识别自己的资源栈。
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
    * @param string|null $description 资源栈的描述。可用于客户识别自己的资源栈。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enableDeletionProtection
    *  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）
    *
    * @return bool|null
    */
    public function getEnableDeletionProtection()
    {
        return $this->container['enableDeletionProtection'];
    }

    /**
    * Sets enableDeletionProtection
    *
    * @param bool|null $enableDeletionProtection 删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）
    *
    * @return $this
    */
    public function setEnableDeletionProtection($enableDeletionProtection)
    {
        $this->container['enableDeletionProtection'] = $enableDeletionProtection;
        return $this;
    }

    /**
    * Gets enableAutoRollback
    *  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）
    *
    * @return bool|null
    */
    public function getEnableAutoRollback()
    {
        return $this->container['enableAutoRollback'];
    }

    /**
    * Sets enableAutoRollback
    *
    * @param bool|null $enableAutoRollback 自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）
    *
    * @return $this
    */
    public function setEnableAutoRollback($enableAutoRollback)
    {
        $this->container['enableAutoRollback'] = $enableAutoRollback;
        return $this;
    }

    /**
    * Gets templateBody
    *  HCL模板，描述了资源的目标状态。RF将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在
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
    * @param string|null $templateBody HCL模板，描述了资源的目标状态。RF将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在
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
    *  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
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
    * @param string|null $templateUri HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @return $this
    */
    public function setTemplateUri($templateUri)
    {
        $this->container['templateUri'] = $templateUri;
        return $this;
    }

    /**
    * Gets varsBody
    *  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
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
    * @param string|null $varsBody HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    *
    * @return $this
    */
    public function setVarsBody($varsBody)
    {
        $this->container['varsBody'] = $varsBody;
        return $this;
    }

    /**
    * Gets varsStructure
    *  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
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
    * @param \HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]|null $varsStructure HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
    *
    * @return $this
    */
    public function setVarsStructure($varsStructure)
    {
        $this->container['varsStructure'] = $varsStructure;
        return $this;
    }

    /**
    * Gets varsUri
    *  HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
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
    * @param string|null $varsUri HCL支持参数，即，同一个模板可以给予不同的参数而达到不同的效果  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中。具体tfvars格式见：https://www.terraform.io/language/values/variables#variable-definitions-tfvars-files  * RF支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 如果vars中都是简单的字符串格式，可以使用var_structure  * 注意：vars中不应该传递任何敏感信息，RF会直接明文使用、log、展示、存储对应的vars
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

