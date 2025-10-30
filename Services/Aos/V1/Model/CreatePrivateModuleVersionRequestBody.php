<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrivateModuleVersionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrivateModuleVersionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * moduleId  私有模块（private-module）的唯一Id。  此Id由资源编排服务在生成模块的时候生成，为UUID。  由于私有模块名仅在同一时间下唯一，即允许用户先生成一个叫HelloWorld的私有模块，删除，再重新创建一个同名私有模块。  对于团队并行开发，用户可能希望确保，当前我操作的私有模块就是我以为的那个，而不是其他队友删除后创建的同名私有模块。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有模块所对应的Id都不相同，更新不会影响Id。如果给予的module_id和当前模块的Id不一致，则返回400
    * moduleVersion  模块的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  模块版本（module version）的描述。可用于客户识别并管理模块的版本。注意：模块版本为不可更新（immutable），即描述不可更新，如果需要更新，请删除后重建
    * moduleUri  模块（module）包的OBS地址。模块允许用户将可复用的代码编辑在一起供模块使用。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  模块包只支持zip压缩包，文件需要以\".zip\"结尾。关于模块包的校验要求如下：   * 模块包中不得包含以\".tfvars\"结尾的文件   * 模块包解压前后的大小均应控制在1MB以内   * 模块包内的文件数量不能超过100个   * 模块包内的文件路径不允许以正斜线（/）开头   * 模块包内的文件路径分隔符之间不允许为空格、\".\"和\"..\"   * 模块包内的文件路径最长为2048   * 模块包内的文件名最长为255   * 模块包内应至少有一份模板文件（以\".tf\"或\".tf.json\"结尾的文件）  **注意：**   * 模块中的内容不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储module_uri对应的模块包。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'moduleId' => 'string',
            'moduleVersion' => 'string',
            'versionDescription' => 'string',
            'moduleUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * moduleId  私有模块（private-module）的唯一Id。  此Id由资源编排服务在生成模块的时候生成，为UUID。  由于私有模块名仅在同一时间下唯一，即允许用户先生成一个叫HelloWorld的私有模块，删除，再重新创建一个同名私有模块。  对于团队并行开发，用户可能希望确保，当前我操作的私有模块就是我以为的那个，而不是其他队友删除后创建的同名私有模块。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有模块所对应的Id都不相同，更新不会影响Id。如果给予的module_id和当前模块的Id不一致，则返回400
    * moduleVersion  模块的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  模块版本（module version）的描述。可用于客户识别并管理模块的版本。注意：模块版本为不可更新（immutable），即描述不可更新，如果需要更新，请删除后重建
    * moduleUri  模块（module）包的OBS地址。模块允许用户将可复用的代码编辑在一起供模块使用。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  模块包只支持zip压缩包，文件需要以\".zip\"结尾。关于模块包的校验要求如下：   * 模块包中不得包含以\".tfvars\"结尾的文件   * 模块包解压前后的大小均应控制在1MB以内   * 模块包内的文件数量不能超过100个   * 模块包内的文件路径不允许以正斜线（/）开头   * 模块包内的文件路径分隔符之间不允许为空格、\".\"和\"..\"   * 模块包内的文件路径最长为2048   * 模块包内的文件名最长为255   * 模块包内应至少有一份模板文件（以\".tf\"或\".tf.json\"结尾的文件）  **注意：**   * 模块中的内容不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储module_uri对应的模块包。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'moduleId' => null,
        'moduleVersion' => null,
        'versionDescription' => null,
        'moduleUri' => null
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
    * moduleId  私有模块（private-module）的唯一Id。  此Id由资源编排服务在生成模块的时候生成，为UUID。  由于私有模块名仅在同一时间下唯一，即允许用户先生成一个叫HelloWorld的私有模块，删除，再重新创建一个同名私有模块。  对于团队并行开发，用户可能希望确保，当前我操作的私有模块就是我以为的那个，而不是其他队友删除后创建的同名私有模块。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有模块所对应的Id都不相同，更新不会影响Id。如果给予的module_id和当前模块的Id不一致，则返回400
    * moduleVersion  模块的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  模块版本（module version）的描述。可用于客户识别并管理模块的版本。注意：模块版本为不可更新（immutable），即描述不可更新，如果需要更新，请删除后重建
    * moduleUri  模块（module）包的OBS地址。模块允许用户将可复用的代码编辑在一起供模块使用。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  模块包只支持zip压缩包，文件需要以\".zip\"结尾。关于模块包的校验要求如下：   * 模块包中不得包含以\".tfvars\"结尾的文件   * 模块包解压前后的大小均应控制在1MB以内   * 模块包内的文件数量不能超过100个   * 模块包内的文件路径不允许以正斜线（/）开头   * 模块包内的文件路径分隔符之间不允许为空格、\".\"和\"..\"   * 模块包内的文件路径最长为2048   * 模块包内的文件名最长为255   * 模块包内应至少有一份模板文件（以\".tf\"或\".tf.json\"结尾的文件）  **注意：**   * 模块中的内容不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储module_uri对应的模块包。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'moduleId' => 'module_id',
            'moduleVersion' => 'module_version',
            'versionDescription' => 'version_description',
            'moduleUri' => 'module_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * moduleId  私有模块（private-module）的唯一Id。  此Id由资源编排服务在生成模块的时候生成，为UUID。  由于私有模块名仅在同一时间下唯一，即允许用户先生成一个叫HelloWorld的私有模块，删除，再重新创建一个同名私有模块。  对于团队并行开发，用户可能希望确保，当前我操作的私有模块就是我以为的那个，而不是其他队友删除后创建的同名私有模块。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有模块所对应的Id都不相同，更新不会影响Id。如果给予的module_id和当前模块的Id不一致，则返回400
    * moduleVersion  模块的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  模块版本（module version）的描述。可用于客户识别并管理模块的版本。注意：模块版本为不可更新（immutable），即描述不可更新，如果需要更新，请删除后重建
    * moduleUri  模块（module）包的OBS地址。模块允许用户将可复用的代码编辑在一起供模块使用。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  模块包只支持zip压缩包，文件需要以\".zip\"结尾。关于模块包的校验要求如下：   * 模块包中不得包含以\".tfvars\"结尾的文件   * 模块包解压前后的大小均应控制在1MB以内   * 模块包内的文件数量不能超过100个   * 模块包内的文件路径不允许以正斜线（/）开头   * 模块包内的文件路径分隔符之间不允许为空格、\".\"和\"..\"   * 模块包内的文件路径最长为2048   * 模块包内的文件名最长为255   * 模块包内应至少有一份模板文件（以\".tf\"或\".tf.json\"结尾的文件）  **注意：**   * 模块中的内容不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储module_uri对应的模块包。
    *
    * @var string[]
    */
    protected static $setters = [
            'moduleId' => 'setModuleId',
            'moduleVersion' => 'setModuleVersion',
            'versionDescription' => 'setVersionDescription',
            'moduleUri' => 'setModuleUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * moduleId  私有模块（private-module）的唯一Id。  此Id由资源编排服务在生成模块的时候生成，为UUID。  由于私有模块名仅在同一时间下唯一，即允许用户先生成一个叫HelloWorld的私有模块，删除，再重新创建一个同名私有模块。  对于团队并行开发，用户可能希望确保，当前我操作的私有模块就是我以为的那个，而不是其他队友删除后创建的同名私有模块。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有模块所对应的Id都不相同，更新不会影响Id。如果给予的module_id和当前模块的Id不一致，则返回400
    * moduleVersion  模块的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    * versionDescription  模块版本（module version）的描述。可用于客户识别并管理模块的版本。注意：模块版本为不可更新（immutable），即描述不可更新，如果需要更新，请删除后重建
    * moduleUri  模块（module）包的OBS地址。模块允许用户将可复用的代码编辑在一起供模块使用。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  模块包只支持zip压缩包，文件需要以\".zip\"结尾。关于模块包的校验要求如下：   * 模块包中不得包含以\".tfvars\"结尾的文件   * 模块包解压前后的大小均应控制在1MB以内   * 模块包内的文件数量不能超过100个   * 模块包内的文件路径不允许以正斜线（/）开头   * 模块包内的文件路径分隔符之间不允许为空格、\".\"和\"..\"   * 模块包内的文件路径最长为2048   * 模块包内的文件名最长为255   * 模块包内应至少有一份模板文件（以\".tf\"或\".tf.json\"结尾的文件）  **注意：**   * 模块中的内容不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储module_uri对应的模块包。
    *
    * @var string[]
    */
    protected static $getters = [
            'moduleId' => 'getModuleId',
            'moduleVersion' => 'getModuleVersion',
            'versionDescription' => 'getVersionDescription',
            'moduleUri' => 'getModuleUri'
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
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['moduleVersion'] = isset($data['moduleVersion']) ? $data['moduleVersion'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['moduleUri'] = isset($data['moduleUri']) ? $data['moduleUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['moduleId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['moduleId'])) {
                $invalidProperties[] = "invalid value for 'moduleId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
        if ($this->container['moduleVersion'] === null) {
            $invalidProperties[] = "'moduleVersion' can't be null";
        }
            if ((mb_strlen($this->container['moduleVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'moduleVersion', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['moduleVersion']) < 5)) {
                $invalidProperties[] = "invalid value for 'moduleVersion', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['moduleUri'] === null) {
            $invalidProperties[] = "'moduleUri' can't be null";
        }
            if ((mb_strlen($this->container['moduleUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'moduleUri', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['moduleUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleUri', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(http|https):\/\/[\\S]*(\\.zip){1}(\\?[\\S]+)?$/", $this->container['moduleUri'])) {
                $invalidProperties[] = "invalid value for 'moduleUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(\\.zip){1}(\\?[\\S]+)?$/.";
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
    * Gets moduleId
    *  私有模块（private-module）的唯一Id。  此Id由资源编排服务在生成模块的时候生成，为UUID。  由于私有模块名仅在同一时间下唯一，即允许用户先生成一个叫HelloWorld的私有模块，删除，再重新创建一个同名私有模块。  对于团队并行开发，用户可能希望确保，当前我操作的私有模块就是我以为的那个，而不是其他队友删除后创建的同名私有模块。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有模块所对应的Id都不相同，更新不会影响Id。如果给予的module_id和当前模块的Id不一致，则返回400
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 私有模块（private-module）的唯一Id。  此Id由资源编排服务在生成模块的时候生成，为UUID。  由于私有模块名仅在同一时间下唯一，即允许用户先生成一个叫HelloWorld的私有模块，删除，再重新创建一个同名私有模块。  对于团队并行开发，用户可能希望确保，当前我操作的私有模块就是我以为的那个，而不是其他队友删除后创建的同名私有模块。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有模块所对应的Id都不相同，更新不会影响Id。如果给予的module_id和当前模块的Id不一致，则返回400
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets moduleVersion
    *  模块的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @return string
    */
    public function getModuleVersion()
    {
        return $this->container['moduleVersion'];
    }

    /**
    * Sets moduleVersion
    *
    * @param string $moduleVersion 模块的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @return $this
    */
    public function setModuleVersion($moduleVersion)
    {
        $this->container['moduleVersion'] = $moduleVersion;
        return $this;
    }

    /**
    * Gets versionDescription
    *  模块版本（module version）的描述。可用于客户识别并管理模块的版本。注意：模块版本为不可更新（immutable），即描述不可更新，如果需要更新，请删除后重建
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
    * @param string|null $versionDescription 模块版本（module version）的描述。可用于客户识别并管理模块的版本。注意：模块版本为不可更新（immutable），即描述不可更新，如果需要更新，请删除后重建
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets moduleUri
    *  模块（module）包的OBS地址。模块允许用户将可复用的代码编辑在一起供模块使用。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  模块包只支持zip压缩包，文件需要以\".zip\"结尾。关于模块包的校验要求如下：   * 模块包中不得包含以\".tfvars\"结尾的文件   * 模块包解压前后的大小均应控制在1MB以内   * 模块包内的文件数量不能超过100个   * 模块包内的文件路径不允许以正斜线（/）开头   * 模块包内的文件路径分隔符之间不允许为空格、\".\"和\"..\"   * 模块包内的文件路径最长为2048   * 模块包内的文件名最长为255   * 模块包内应至少有一份模板文件（以\".tf\"或\".tf.json\"结尾的文件）  **注意：**   * 模块中的内容不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储module_uri对应的模块包。
    *
    * @return string
    */
    public function getModuleUri()
    {
        return $this->container['moduleUri'];
    }

    /**
    * Sets moduleUri
    *
    * @param string $moduleUri 模块（module）包的OBS地址。模块允许用户将可复用的代码编辑在一起供模块使用。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  模块包只支持zip压缩包，文件需要以\".zip\"结尾。关于模块包的校验要求如下：   * 模块包中不得包含以\".tfvars\"结尾的文件   * 模块包解压前后的大小均应控制在1MB以内   * 模块包内的文件数量不能超过100个   * 模块包内的文件路径不允许以正斜线（/）开头   * 模块包内的文件路径分隔符之间不允许为空格、\".\"和\"..\"   * 模块包内的文件路径最长为2048   * 模块包内的文件名最长为255   * 模块包内应至少有一份模板文件（以\".tf\"或\".tf.json\"结尾的文件）  **注意：**   * 模块中的内容不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储module_uri对应的模块包。
    *
    * @return $this
    */
    public function setModuleUri($moduleUri)
    {
        $this->container['moduleUri'] = $moduleUri;
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

