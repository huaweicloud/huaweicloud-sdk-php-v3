<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrivateProviderRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrivateProviderRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于唯一标识的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给予了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerName' => 'string',
            'providerDescription' => 'string',
            'providerVersion' => 'string',
            'versionDescription' => 'string',
            'functionGraphUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于唯一标识的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给予了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerName' => null,
        'providerDescription' => null,
        'providerVersion' => null,
        'versionDescription' => null,
        'functionGraphUrn' => null
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
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于唯一标识的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给予了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerName' => 'provider_name',
            'providerDescription' => 'provider_description',
            'providerVersion' => 'provider_version',
            'versionDescription' => 'version_description',
            'functionGraphUrn' => 'function_graph_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于唯一标识的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给予了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $setters = [
            'providerName' => 'setProviderName',
            'providerDescription' => 'setProviderDescription',
            'providerVersion' => 'setProviderVersion',
            'versionDescription' => 'setVersionDescription',
            'functionGraphUrn' => 'setFunctionGraphUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于唯一标识的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给予了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $getters = [
            'providerName' => 'getProviderName',
            'providerDescription' => 'getProviderDescription',
            'providerVersion' => 'getProviderVersion',
            'versionDescription' => 'getVersionDescription',
            'functionGraphUrn' => 'getFunctionGraphUrn'
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
        $this->container['providerName'] = isset($data['providerName']) ? $data['providerName'] : null;
        $this->container['providerDescription'] = isset($data['providerDescription']) ? $data['providerDescription'] : null;
        $this->container['providerVersion'] = isset($data['providerVersion']) ? $data['providerVersion'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['functionGraphUrn'] = isset($data['functionGraphUrn']) ? $data['functionGraphUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['providerName'] === null) {
            $invalidProperties[] = "'providerName' can't be null";
        }
            if ((mb_strlen($this->container['providerName']) > 64)) {
                $invalidProperties[] = "invalid value for 'providerName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['providerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'providerName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-z]([0-9a-z-]*[0-9a-z])*$/", $this->container['providerName'])) {
                $invalidProperties[] = "invalid value for 'providerName', must be conform to the pattern /^[0-9a-z]([0-9a-z-]*[0-9a-z])*$/.";
            }
            if (!is_null($this->container['providerDescription']) && (mb_strlen($this->container['providerDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'providerDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['providerDescription']) && (mb_strlen($this->container['providerDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'providerDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['providerVersion']) && (mb_strlen($this->container['providerVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'providerVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['providerVersion']) && (mb_strlen($this->container['providerVersion']) < 5)) {
                $invalidProperties[] = "invalid value for 'providerVersion', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['functionGraphUrn']) && (mb_strlen($this->container['functionGraphUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['functionGraphUrn']) && (mb_strlen($this->container['functionGraphUrn']) < 32)) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['functionGraphUrn']) && !preg_match("/^urn:fss:.+:[A-Za-z0-9]{3,64}:function:default:[A-Za-z][A-Za-z0-9_-]{0,58}[A-Za-z0-9]:([A-Za-z0-9][A-Za-z0-9_.-]{0,40}|![A-Za-z][A-Za-z0-9_-]{0,61})[A-Za-z0-9]$/", $this->container['functionGraphUrn'])) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', must be conform to the pattern /^urn:fss:.+:[A-Za-z0-9]{3,64}:function:default:[A-Za-z][A-Za-z0-9_-]{0,58}[A-Za-z0-9]:([A-Za-z0-9][A-Za-z0-9_.-]{0,40}|![A-Za-z][A-Za-z0-9_-]{0,61})[A-Za-z0-9]$/.";
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
    * Gets providerName
    *  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return string
    */
    public function getProviderName()
    {
        return $this->container['providerName'];
    }

    /**
    * Sets providerName
    *
    * @param string $providerName 私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return $this
    */
    public function setProviderName($providerName)
    {
        $this->container['providerName'] = $providerName;
        return $this;
    }

    /**
    * Gets providerDescription
    *  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    *
    * @return string|null
    */
    public function getProviderDescription()
    {
        return $this->container['providerDescription'];
    }

    /**
    * Sets providerDescription
    *
    * @param string|null $providerDescription 私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    *
    * @return $this
    */
    public function setProviderDescription($providerDescription)
    {
        $this->container['providerDescription'] = $providerDescription;
        return $this;
    }

    /**
    * Gets providerVersion
    *  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @return string|null
    */
    public function getProviderVersion()
    {
        return $this->container['providerVersion'];
    }

    /**
    * Sets providerVersion
    *
    * @param string|null $providerVersion provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @return $this
    */
    public function setProviderVersion($providerVersion)
    {
        $this->container['providerVersion'] = $providerVersion;
        return $this;
    }

    /**
    * Gets versionDescription
    *  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets functionGraphUrn
    *  FunctionGraph方法的统一资源标识，用于唯一标识的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给予了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @return string|null
    */
    public function getFunctionGraphUrn()
    {
        return $this->container['functionGraphUrn'];
    }

    /**
    * Sets functionGraphUrn
    *
    * @param string|null $functionGraphUrn FunctionGraph方法的统一资源标识，用于唯一标识的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给予了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @return $this
    */
    public function setFunctionGraphUrn($functionGraphUrn)
    {
        $this->container['functionGraphUrn'] = $functionGraphUrn;
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

