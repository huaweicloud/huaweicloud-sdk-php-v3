<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrivateProviderVersionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrivateProviderVersionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给与的provider_id和当前provider的Id不一致，则返回400
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerId' => 'string',
            'providerVersion' => 'string',
            'versionDescription' => 'string',
            'functionGraphUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给与的provider_id和当前provider的Id不一致，则返回400
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerId' => null,
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
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给与的provider_id和当前provider的Id不一致，则返回400
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerId' => 'provider_id',
            'providerVersion' => 'provider_version',
            'versionDescription' => 'version_description',
            'functionGraphUrn' => 'function_graph_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给与的provider_id和当前provider的Id不一致，则返回400
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $setters = [
            'providerId' => 'setProviderId',
            'providerVersion' => 'setProviderVersion',
            'versionDescription' => 'setVersionDescription',
            'functionGraphUrn' => 'setFunctionGraphUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给与的provider_id和当前provider的Id不一致，则返回400
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  私有provider版本（provider version）的描述。可用于客户识别并管理私有provider的版本。注意：provider版本为不可更新（immutable），所以该字段不可更新，如果需要更新，请删除后重建
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $getters = [
            'providerId' => 'getProviderId',
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
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
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
            if (!is_null($this->container['providerId']) && (mb_strlen($this->container['providerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'providerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['providerId']) && (mb_strlen($this->container['providerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'providerId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['providerId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['providerId'])) {
                $invalidProperties[] = "invalid value for 'providerId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
        if ($this->container['providerVersion'] === null) {
            $invalidProperties[] = "'providerVersion' can't be null";
        }
            if ((mb_strlen($this->container['providerVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'providerVersion', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['providerVersion']) < 5)) {
                $invalidProperties[] = "invalid value for 'providerVersion', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['functionGraphUrn'] === null) {
            $invalidProperties[] = "'functionGraphUrn' can't be null";
        }
            if ((mb_strlen($this->container['functionGraphUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['functionGraphUrn']) < 32)) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^urn:fss:.+:[A-Za-z0-9]{3,64}:function:default:[A-Za-z][A-Za-z0-9_-]{0,58}[A-Za-z0-9]:([A-Za-z0-9][A-Za-z0-9_.-]{0,40}|![A-Za-z][A-Za-z0-9_-]{0,61})[A-Za-z0-9]$/", $this->container['functionGraphUrn'])) {
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
    * Gets providerId
    *  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给与的provider_id和当前provider的Id不一致，则返回400
    *
    * @return string|null
    */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
    * Sets providerId
    *
    * @param string|null $providerId 私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给与的provider_id和当前provider的Id不一致，则返回400
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets providerVersion
    *  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @return string
    */
    public function getProviderVersion()
    {
        return $this->container['providerVersion'];
    }

    /**
    * Sets providerVersion
    *
    * @param string $providerVersion provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
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
    *  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @return string
    */
    public function getFunctionGraphUrn()
    {
        return $this->container['functionGraphUrn'];
    }

    /**
    * Sets functionGraphUrn
    *
    * @param string $functionGraphUrn FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
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

