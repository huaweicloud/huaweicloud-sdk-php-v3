<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineByTemplateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineByTemplateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级，非涉密场景不涉及，涉密场景必填。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线涉密等级编码，非涉密场景不涉及。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线参数列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'isPublish' => 'bool',
            'sources' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]',
            'securityLevel' => 'int',
            'confidentialityCode' => 'string',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineByTemplateDTOVariables[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级，非涉密场景不涉及，涉密场景必填。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线涉密等级编码，非涉密场景不涉及。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线参数列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'isPublish' => null,
        'sources' => null,
        'securityLevel' => null,
        'confidentialityCode' => null,
        'variables' => null
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
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级，非涉密场景不涉及，涉密场景必填。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线涉密等级编码，非涉密场景不涉及。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线参数列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'isPublish' => 'is_publish',
            'sources' => 'sources',
            'securityLevel' => 'security_level',
            'confidentialityCode' => 'confidentiality_code',
            'variables' => 'variables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级，非涉密场景不涉及，涉密场景必填。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线涉密等级编码，非涉密场景不涉及。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线参数列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'isPublish' => 'setIsPublish',
            'sources' => 'setSources',
            'securityLevel' => 'setSecurityLevel',
            'confidentialityCode' => 'setConfidentialityCode',
            'variables' => 'setVariables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级，非涉密场景不涉及，涉密场景必填。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线涉密等级编码，非涉密场景不涉及。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线参数列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'isPublish' => 'getIsPublish',
            'sources' => 'getSources',
            'securityLevel' => 'getSecurityLevel',
            'confidentialityCode' => 'getConfidentialityCode',
            'variables' => 'getVariables'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['confidentialityCode'] = isset($data['confidentialityCode']) ? $data['confidentialityCode'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['isPublish'] === null) {
            $invalidProperties[] = "'isPublish' can't be null";
        }
        if ($this->container['sources'] === null) {
            $invalidProperties[] = "'sources' can't be null";
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
    * Gets name
    *  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isPublish
    *  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。 **默认取值**： 不涉及。
    *
    * @return bool
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool $isPublish **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets sources
    *  **参数解释**： 流水线源列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[] $sources **参数解释**： 流水线源列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets securityLevel
    *  **参数解释**： 流水线涉密等级，非涉密场景不涉及，涉密场景必填。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param int|null $securityLevel **参数解释**： 流水线涉密等级，非涉密场景不涉及，涉密场景必填。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
        return $this;
    }

    /**
    * Gets confidentialityCode
    *  **参数解释**： 流水线涉密等级编码，非涉密场景不涉及。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getConfidentialityCode()
    {
        return $this->container['confidentialityCode'];
    }

    /**
    * Sets confidentialityCode
    *
    * @param string|null $confidentialityCode **参数解释**： 流水线涉密等级编码，非涉密场景不涉及。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setConfidentialityCode($confidentialityCode)
    {
        $this->container['confidentialityCode'] = $confidentialityCode;
        return $this;
    }

    /**
    * Gets variables
    *  **参数解释**： 流水线参数列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineByTemplateDTOVariables[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineByTemplateDTOVariables[]|null $variables **参数解释**： 流水线参数列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
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

