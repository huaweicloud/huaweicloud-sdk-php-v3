<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParseTemplateVariablesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParseTemplateVariablesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_body中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的template_body。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守HCL语法  压缩包目前只支持zip格式，文件需要以`.zip`结尾。解压后的文件不得包含\".tfvars\"文件且必须是UTF8编码（其中.tf.json不能包含BOM头），zip压缩包当前支持的子文件数量最大为100  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_uri对应的模板文件中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的模板文件内容。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密   * template_uri对应的文件（或文件夹、zip包）名的长度不得超过255个字节，文件大小不得超过1MB
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateBody' => 'string',
            'templateUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_body中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的template_body。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守HCL语法  压缩包目前只支持zip格式，文件需要以`.zip`结尾。解压后的文件不得包含\".tfvars\"文件且必须是UTF8编码（其中.tf.json不能包含BOM头），zip压缩包当前支持的子文件数量最大为100  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_uri对应的模板文件中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的模板文件内容。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密   * template_uri对应的文件（或文件夹、zip包）名的长度不得超过255个字节，文件大小不得超过1MB
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateBody' => null,
        'templateUri' => null
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
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_body中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的template_body。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守HCL语法  压缩包目前只支持zip格式，文件需要以`.zip`结尾。解压后的文件不得包含\".tfvars\"文件且必须是UTF8编码（其中.tf.json不能包含BOM头），zip压缩包当前支持的子文件数量最大为100  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_uri对应的模板文件中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的模板文件内容。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密   * template_uri对应的文件（或文件夹、zip包）名的长度不得超过255个字节，文件大小不得超过1MB
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateBody' => 'template_body',
            'templateUri' => 'template_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_body中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的template_body。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守HCL语法  压缩包目前只支持zip格式，文件需要以`.zip`结尾。解压后的文件不得包含\".tfvars\"文件且必须是UTF8编码（其中.tf.json不能包含BOM头），zip压缩包当前支持的子文件数量最大为100  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_uri对应的模板文件中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的模板文件内容。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密   * template_uri对应的文件（或文件夹、zip包）名的长度不得超过255个字节，文件大小不得超过1MB
    *
    * @var string[]
    */
    protected static $setters = [
            'templateBody' => 'setTemplateBody',
            'templateUri' => 'setTemplateUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateBody  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_body中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的template_body。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守HCL语法  压缩包目前只支持zip格式，文件需要以`.zip`结尾。解压后的文件不得包含\".tfvars\"文件且必须是UTF8编码（其中.tf.json不能包含BOM头），zip压缩包当前支持的子文件数量最大为100  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_uri对应的模板文件中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的模板文件内容。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密   * template_uri对应的文件（或文件夹、zip包）名的长度不得超过255个字节，文件大小不得超过1MB
    *
    * @var string[]
    */
    protected static $getters = [
            'templateBody' => 'getTemplateBody',
            'templateUri' => 'getTemplateUri'
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
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
        $this->container['templateUri'] = isset($data['templateUri']) ? $data['templateUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets templateBody
    *  HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_body中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的template_body。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密
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
    * @param string|null $templateBody HCL模板，描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_body中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的template_body。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密
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
    *  HCL模板的OBS地址，该模板描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守HCL语法  压缩包目前只支持zip格式，文件需要以`.zip`结尾。解压后的文件不得包含\".tfvars\"文件且必须是UTF8编码（其中.tf.json不能包含BOM头），zip压缩包当前支持的子文件数量最大为100  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_uri对应的模板文件中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的模板文件内容。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密   * template_uri对应的文件（或文件夹、zip包）名的长度不得超过255个字节，文件大小不得超过1MB
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
    * @param string|null $templateUri HCL模板的OBS地址，该模板描述了资源的目标状态。资源编排服务将比较此模板与当前远程资源的状态之间的区别。  OBS地址支持同类型Region之间进行互相访问（Region分为通用Region和专属Region，通用Region指面向公共租户提供通用云服务的Region；专属Region指只承载同一类业务或只面向特定租户提供业务服务的专用Region）  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守HCL语法  压缩包目前只支持zip格式，文件需要以`.zip`结尾。解压后的文件不得包含\".tfvars\"文件且必须是UTF8编码（其中.tf.json不能包含BOM头），zip压缩包当前支持的子文件数量最大为100  template_body和template_uri 必须有且只有一个存在  *在CreateStack API中，template_body和template_uri可以都不给予*  **注意：**   * template_uri对应的模板文件中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的模板文件内容。如为敏感信息，建议将敏感信息通过vars_structure参数化，并设置encryption字段开启加密   * template_uri对应的文件（或文件夹、zip包）名的长度不得超过255个字节，文件大小不得超过1MB
    *
    * @return $this
    */
    public function setTemplateUri($templateUri)
    {
        $this->container['templateUri'] = $templateUri;
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

