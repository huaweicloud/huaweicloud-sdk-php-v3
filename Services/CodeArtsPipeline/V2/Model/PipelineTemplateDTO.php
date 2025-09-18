<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineTemplateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineTemplateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 模板名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 模板描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * language  **参数解释**： 模板语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * definition  **参数解释**： 模板编排json，包含stages。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isSystem  **参数解释**： 是否系统模板。 **约束限制**： 不涉及。 **取值范围**： - true：是系统模板。 - false：不是系统模板。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * isShowSource  **参数解释**： 是否显示流水线源。 **约束限制**： 不涉及。 **取值范围**： - true：显示流水线源。 - false：不显示流水线源。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'language' => 'string',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]',
            'definition' => 'string',
            'isSystem' => 'bool',
            'domainId' => 'string',
            'isShowSource' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 模板名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 模板描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * language  **参数解释**： 模板语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * definition  **参数解释**： 模板编排json，包含stages。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isSystem  **参数解释**： 是否系统模板。 **约束限制**： 不涉及。 **取值范围**： - true：是系统模板。 - false：不是系统模板。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * isShowSource  **参数解释**： 是否显示流水线源。 **约束限制**： 不涉及。 **取值范围**： - true：显示流水线源。 - false：不显示流水线源。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'language' => null,
        'variables' => null,
        'definition' => null,
        'isSystem' => null,
        'domainId' => null,
        'isShowSource' => null
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
    * name  **参数解释**： 模板名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 模板描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * language  **参数解释**： 模板语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * definition  **参数解释**： 模板编排json，包含stages。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isSystem  **参数解释**： 是否系统模板。 **约束限制**： 不涉及。 **取值范围**： - true：是系统模板。 - false：不是系统模板。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * isShowSource  **参数解释**： 是否显示流水线源。 **约束限制**： 不涉及。 **取值范围**： - true：显示流水线源。 - false：不显示流水线源。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'language' => 'language',
            'variables' => 'variables',
            'definition' => 'definition',
            'isSystem' => 'is_system',
            'domainId' => 'domain_id',
            'isShowSource' => 'is_show_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 模板名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 模板描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * language  **参数解释**： 模板语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * definition  **参数解释**： 模板编排json，包含stages。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isSystem  **参数解释**： 是否系统模板。 **约束限制**： 不涉及。 **取值范围**： - true：是系统模板。 - false：不是系统模板。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * isShowSource  **参数解释**： 是否显示流水线源。 **约束限制**： 不涉及。 **取值范围**： - true：显示流水线源。 - false：不显示流水线源。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'language' => 'setLanguage',
            'variables' => 'setVariables',
            'definition' => 'setDefinition',
            'isSystem' => 'setIsSystem',
            'domainId' => 'setDomainId',
            'isShowSource' => 'setIsShowSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 模板名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 模板描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * language  **参数解释**： 模板语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * definition  **参数解释**： 模板编排json，包含stages。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isSystem  **参数解释**： 是否系统模板。 **约束限制**： 不涉及。 **取值范围**： - true：是系统模板。 - false：不是系统模板。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * isShowSource  **参数解释**： 是否显示流水线源。 **约束限制**： 不涉及。 **取值范围**： - true：显示流水线源。 - false：不显示流水线源。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'language' => 'getLanguage',
            'variables' => 'getVariables',
            'definition' => 'getDefinition',
            'isSystem' => 'getIsSystem',
            'domainId' => 'getDomainId',
            'isShowSource' => 'getIsShowSource'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['isSystem'] = isset($data['isSystem']) ? $data['isSystem'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['isShowSource'] = isset($data['isShowSource']) ? $data['isShowSource'] : null;
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
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['definition'] === null) {
            $invalidProperties[] = "'definition' can't be null";
        }
        if ($this->container['isSystem'] === null) {
            $invalidProperties[] = "'isSystem' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['isShowSource'] === null) {
            $invalidProperties[] = "'isShowSource' can't be null";
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
    *  **参数解释**： 模板名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $name **参数解释**： 模板名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 模板描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 模板描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释**： 模板语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language **参数解释**： 模板语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets variables
    *  **参数解释**： 自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]|null $variables **参数解释**： 自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets definition
    *  **参数解释**： 模板编排json，包含stages。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string $definition **参数解释**： 模板编排json，包含stages。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
        return $this;
    }

    /**
    * Gets isSystem
    *  **参数解释**： 是否系统模板。 **约束限制**： 不涉及。 **取值范围**： - true：是系统模板。 - false：不是系统模板。 **默认取值**： 不涉及。
    *
    * @return bool
    */
    public function getIsSystem()
    {
        return $this->container['isSystem'];
    }

    /**
    * Sets isSystem
    *
    * @param bool $isSystem **参数解释**： 是否系统模板。 **约束限制**： 不涉及。 **取值范围**： - true：是系统模板。 - false：不是系统模板。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsSystem($isSystem)
    {
        $this->container['isSystem'] = $isSystem;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets isShowSource
    *  **参数解释**： 是否显示流水线源。 **约束限制**： 不涉及。 **取值范围**： - true：显示流水线源。 - false：不显示流水线源。 **默认取值**： 不涉及。
    *
    * @return bool
    */
    public function getIsShowSource()
    {
        return $this->container['isShowSource'];
    }

    /**
    * Sets isShowSource
    *
    * @param bool $isShowSource **参数解释**： 是否显示流水线源。 **约束限制**： 不涉及。 **取值范围**： - true：显示流水线源。 - false：不显示流水线源。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsShowSource($isShowSource)
    {
        $this->container['isShowSource'] = $isShowSource;
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

