<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  templateName
    * templateDesc  模板描述。
    * sourceType  模板类别。
    * sourceRepoUrl  源码仓库URL
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Template',
            'templateDesc' => 'string',
            'sourceType' => 'string',
            'sourceRepoUrl' => 'string',
            'runtime' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\RuntimeType'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  templateName
    * templateDesc  模板描述。
    * sourceType  模板类别。
    * sourceRepoUrl  源码仓库URL
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'templateDesc' => null,
        'sourceType' => null,
        'sourceRepoUrl' => null,
        'runtime' => null
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
    * templateName  templateName
    * templateDesc  模板描述。
    * sourceType  模板类别。
    * sourceRepoUrl  源码仓库URL
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'templateDesc' => 'template_desc',
            'sourceType' => 'source_type',
            'sourceRepoUrl' => 'source_repo_url',
            'runtime' => 'runtime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  templateName
    * templateDesc  模板描述。
    * sourceType  模板类别。
    * sourceRepoUrl  源码仓库URL
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'templateDesc' => 'setTemplateDesc',
            'sourceType' => 'setSourceType',
            'sourceRepoUrl' => 'setSourceRepoUrl',
            'runtime' => 'setRuntime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  templateName
    * templateDesc  模板描述。
    * sourceType  模板类别。
    * sourceRepoUrl  源码仓库URL
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'templateDesc' => 'getTemplateDesc',
            'sourceType' => 'getSourceType',
            'sourceRepoUrl' => 'getSourceRepoUrl',
            'runtime' => 'getRuntime'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateDesc'] = isset($data['templateDesc']) ? $data['templateDesc'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceRepoUrl'] = isset($data['sourceRepoUrl']) ? $data['sourceRepoUrl'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets templateName
    *  templateName
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\Template|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\Template|null $templateName templateName
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateDesc
    *  模板描述。
    *
    * @return string|null
    */
    public function getTemplateDesc()
    {
        return $this->container['templateDesc'];
    }

    /**
    * Sets templateDesc
    *
    * @param string|null $templateDesc 模板描述。
    *
    * @return $this
    */
    public function setTemplateDesc($templateDesc)
    {
        $this->container['templateDesc'] = $templateDesc;
        return $this;
    }

    /**
    * Gets sourceType
    *  模板类别。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 模板类别。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceRepoUrl
    *  源码仓库URL
    *
    * @return string|null
    */
    public function getSourceRepoUrl()
    {
        return $this->container['sourceRepoUrl'];
    }

    /**
    * Sets sourceRepoUrl
    *
    * @param string|null $sourceRepoUrl 源码仓库URL
    *
    * @return $this
    */
    public function setSourceRepoUrl($sourceRepoUrl)
    {
        $this->container['sourceRepoUrl'] = $sourceRepoUrl;
        return $this;
    }

    /**
    * Gets runtime
    *  runtime
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\RuntimeType|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\RuntimeType|null $runtime runtime
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
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

