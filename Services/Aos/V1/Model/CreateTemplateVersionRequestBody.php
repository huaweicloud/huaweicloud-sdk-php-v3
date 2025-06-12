<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTemplateVersionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTemplateVersionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * templateBody  HCL模板，描述了模板中使用的资源 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的obs链接，该模板描述了资源的目标状态  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionDescription' => 'string',
            'templateBody' => 'string',
            'templateUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * templateBody  HCL模板，描述了模板中使用的资源 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的obs链接，该模板描述了资源的目标状态  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionDescription' => null,
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
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * templateBody  HCL模板，描述了模板中使用的资源 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的obs链接，该模板描述了资源的目标状态  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionDescription' => 'version_description',
            'templateBody' => 'template_body',
            'templateUri' => 'template_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * templateBody  HCL模板，描述了模板中使用的资源 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的obs链接，该模板描述了资源的目标状态  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $setters = [
            'versionDescription' => 'setVersionDescription',
            'templateBody' => 'setTemplateBody',
            'templateUri' => 'setTemplateUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * templateBody  HCL模板，描述了模板中使用的资源 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板的obs链接，该模板描述了资源的目标状态  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $getters = [
            'versionDescription' => 'getVersionDescription',
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
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
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
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be bigger than or equal to 0.";
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
    * Gets versionDescription
    *  模板版本的描述。可用于客户识别自己的模板版本
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
    * @param string|null $versionDescription 模板版本的描述。可用于客户识别自己的模板版本
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets templateBody
    *  HCL模板，描述了模板中使用的资源 template_body 和 template_uri 有且仅有一个存在
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
    * @param string|null $templateBody HCL模板，描述了模板中使用的资源 template_body 和 template_uri 有且仅有一个存在
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
    *  HCL模板的obs链接，该模板描述了资源的目标状态  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body 和 template_uri 有且仅有一个存在
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
    * @param string|null $templateUri HCL模板的obs链接，该模板描述了资源的目标状态  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tf.json`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body 和 template_uri 有且仅有一个存在
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

