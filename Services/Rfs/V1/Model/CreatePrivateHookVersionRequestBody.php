<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrivateHookVersionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrivateHookVersionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hookId' => 'string',
            'hookVersion' => 'string',
            'hookVersionDescription' => 'string',
            'policyUri' => 'string',
            'policyBody' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hookId' => null,
        'hookVersion' => null,
        'hookVersionDescription' => null,
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
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hookId' => 'hook_id',
            'hookVersion' => 'hook_version',
            'hookVersionDescription' => 'hook_version_description',
            'policyUri' => 'policy_uri',
            'policyBody' => 'policy_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $setters = [
            'hookId' => 'setHookId',
            'hookVersion' => 'setHookVersion',
            'hookVersionDescription' => 'setHookVersionDescription',
            'policyUri' => 'setPolicyUri',
            'policyBody' => 'setPolicyBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookVersionDescription  私有hook版本的描述。可用于客户识别创建私有hook的版本。注意：hook版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建。
    * policyUri  策略文件的OBS地址。内容仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  请确保OBS地址所在局点与使用RFS服务局点一致。  策略文件当前支持单文件或zip压缩包，单文件需要以\".rego\"结尾，压缩包当前只支持zip格式，文件需要以`.zip`结尾。  关于策略文件的校验要求如下：   * 文件必须是UTF8编码   * 创建时会对大小、格式、语法等进行校验   * 策略文件必须是UTF-8编码   * 单文件或压缩包解压前后的大小应控制在1MB以内   * 压缩包内的文件数量不能超过100个   * 压缩包内的文件路径最长为2048   * 压缩包内的文件名最长为255个字节  policy_uri和policy_body必须有且只有一个存在
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以Rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $getters = [
            'hookId' => 'getHookId',
            'hookVersion' => 'getHookVersion',
            'hookVersionDescription' => 'getHookVersionDescription',
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
        $this->container['hookId'] = isset($data['hookId']) ? $data['hookId'] : null;
        $this->container['hookVersion'] = isset($data['hookVersion']) ? $data['hookVersion'] : null;
        $this->container['hookVersionDescription'] = isset($data['hookVersionDescription']) ? $data['hookVersionDescription'] : null;
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
            if (!is_null($this->container['hookId']) && (mb_strlen($this->container['hookId']) > 36)) {
                $invalidProperties[] = "invalid value for 'hookId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['hookId']) && (mb_strlen($this->container['hookId']) < 36)) {
                $invalidProperties[] = "invalid value for 'hookId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['hookId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['hookId'])) {
                $invalidProperties[] = "invalid value for 'hookId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
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
    * Gets hookId
    *  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @return string|null
    */
    public function getHookId()
    {
        return $this->container['hookId'];
    }

    /**
    * Sets hookId
    *
    * @param string|null $hookId 私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @return $this
    */
    public function setHookId($hookId)
    {
        $this->container['hookId'] = $hookId;
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

