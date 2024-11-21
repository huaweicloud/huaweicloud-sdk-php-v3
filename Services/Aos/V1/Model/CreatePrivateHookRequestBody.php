<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrivateHookRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrivateHookRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * configuration  configuration
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hookName' => 'string',
            'hookVersion' => 'string',
            'hookDescription' => 'string',
            'hookVersionDescription' => 'string',
            'configuration' => '\HuaweiCloud\SDK\Aos\V1\Model\ConfigurationPrimitiveTypeHolderConfiguration',
            'policyUri' => 'string',
            'policyBody' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * configuration  configuration
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hookName' => null,
        'hookVersion' => null,
        'hookDescription' => null,
        'hookVersionDescription' => null,
        'configuration' => null,
        'policyUri' => null,
        'policyBody' => null
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
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * configuration  configuration
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hookName' => 'hook_name',
            'hookVersion' => 'hook_version',
            'hookDescription' => 'hook_description',
            'hookVersionDescription' => 'hook_version_description',
            'configuration' => 'configuration',
            'policyUri' => 'policy_uri',
            'policyBody' => 'policy_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * configuration  configuration
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $setters = [
            'hookName' => 'setHookName',
            'hookVersion' => 'setHookVersion',
            'hookDescription' => 'setHookDescription',
            'hookVersionDescription' => 'setHookVersionDescription',
            'configuration' => 'setConfiguration',
            'policyUri' => 'setPolicyUri',
            'policyBody' => 'setPolicyBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * configuration  configuration
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $getters = [
            'hookName' => 'getHookName',
            'hookVersion' => 'getHookVersion',
            'hookDescription' => 'getHookDescription',
            'hookVersionDescription' => 'getHookVersionDescription',
            'configuration' => 'getConfiguration',
            'policyUri' => 'getPolicyUri',
            'policyBody' => 'getPolicyBody'
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
        $this->container['hookName'] = isset($data['hookName']) ? $data['hookName'] : null;
        $this->container['hookVersion'] = isset($data['hookVersion']) ? $data['hookVersion'] : null;
        $this->container['hookDescription'] = isset($data['hookDescription']) ? $data['hookDescription'] : null;
        $this->container['hookVersionDescription'] = isset($data['hookVersionDescription']) ? $data['hookVersionDescription'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['policyUri'] = isset($data['policyUri']) ? $data['policyUri'] : null;
        $this->container['policyBody'] = isset($data['policyBody']) ? $data['policyBody'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hookName'] === null) {
            $invalidProperties[] = "'hookName' can't be null";
        }
            if ((mb_strlen($this->container['hookName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hookName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hookName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hookName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['hookName'])) {
                $invalidProperties[] = "invalid value for 'hookName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
        if ($this->container['hookVersion'] === null) {
            $invalidProperties[] = "'hookVersion' can't be null";
        }
            if ((mb_strlen($this->container['hookVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'hookVersion', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hookVersion']) < 5)) {
                $invalidProperties[] = "invalid value for 'hookVersion', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['hookDescription']) && (mb_strlen($this->container['hookDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'hookDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['hookDescription']) && (mb_strlen($this->container['hookDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'hookDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hookVersionDescription']) && (mb_strlen($this->container['hookVersionDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'hookVersionDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['hookVersionDescription']) && (mb_strlen($this->container['hookVersionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'hookVersionDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyUri']) && (mb_strlen($this->container['policyUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'policyUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['policyUri']) && (mb_strlen($this->container['policyUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyUri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyUri']) && !preg_match("/^(http|https):\/\/[\\S]*(\\.rego|\\.zip){1}(\\?[\\S]+)?$/", $this->container['policyUri'])) {
                $invalidProperties[] = "invalid value for 'policyUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(\\.rego|\\.zip){1}(\\?[\\S]+)?$/.";
            }
            if (!is_null($this->container['policyBody']) && (mb_strlen($this->container['policyBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'policyBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['policyBody']) && (mb_strlen($this->container['policyBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyBody', the character length must be bigger than or equal to 0.";
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
    * Gets hookName
    *  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @return string
    */
    public function getHookName()
    {
        return $this->container['hookName'];
    }

    /**
    * Sets hookName
    *
    * @param string $hookName 私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @return $this
    */
    public function setHookName($hookName)
    {
        $this->container['hookName'] = $hookName;
        return $this;
    }

    /**
    * Gets hookVersion
    *  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    *
    * @return string
    */
    public function getHookVersion()
    {
        return $this->container['hookVersion'];
    }

    /**
    * Sets hookVersion
    *
    * @param string $hookVersion 私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    *
    * @return $this
    */
    public function setHookVersion($hookVersion)
    {
        $this->container['hookVersion'] = $hookVersion;
        return $this;
    }

    /**
    * Gets hookDescription
    *  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    *
    * @return string|null
    */
    public function getHookDescription()
    {
        return $this->container['hookDescription'];
    }

    /**
    * Sets hookDescription
    *
    * @param string|null $hookDescription 私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    *
    * @return $this
    */
    public function setHookDescription($hookDescription)
    {
        $this->container['hookDescription'] = $hookDescription;
        return $this;
    }

    /**
    * Gets hookVersionDescription
    *  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    *
    * @return string|null
    */
    public function getHookVersionDescription()
    {
        return $this->container['hookVersionDescription'];
    }

    /**
    * Sets hookVersionDescription
    *
    * @param string|null $hookVersionDescription 私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    *
    * @return $this
    */
    public function setHookVersionDescription($hookVersionDescription)
    {
        $this->container['hookVersionDescription'] = $hookVersionDescription;
        return $this;
    }

    /**
    * Gets configuration
    *  configuration
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\ConfigurationPrimitiveTypeHolderConfiguration|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\ConfigurationPrimitiveTypeHolderConfiguration|null $configuration configuration
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
        return $this;
    }

    /**
    * Gets policyUri
    *  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    *
    * @return string|null
    */
    public function getPolicyUri()
    {
        return $this->container['policyUri'];
    }

    /**
    * Sets policyUri
    *
    * @param string|null $policyUri 策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    *
    * @return $this
    */
    public function setPolicyUri($policyUri)
    {
        $this->container['policyUri'] = $policyUri;
        return $this;
    }

    /**
    * Gets policyBody
    *  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @return string|null
    */
    public function getPolicyBody()
    {
        return $this->container['policyBody'];
    }

    /**
    * Sets policyBody
    *
    * @param string|null $policyBody 策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @return $this
    */
    public function setPolicyBody($policyBody)
    {
        $this->container['policyBody'] = $policyBody;
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

