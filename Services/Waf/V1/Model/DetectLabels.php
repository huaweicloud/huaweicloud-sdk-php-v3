<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetectLabels implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetectLabels';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * complianceLabels  合规检测标签列表
    * injectLabels  注入检测标签列表
    * immunityLexiconLabels  豁免词库标签列表
    * lexiconLabels  自定义词库检测标签列表
    * lexiconInternalLabels  内置词库检测标签列表
    * supportedLanguageLabels  支持检测语言标签列表
    * piiLabels  敏感词标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'complianceLabels' => 'string[]',
            'injectLabels' => 'string[]',
            'immunityLexiconLabels' => 'string[]',
            'lexiconLabels' => 'string[]',
            'lexiconInternalLabels' => 'string[]',
            'supportedLanguageLabels' => 'string[]',
            'piiLabels' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * complianceLabels  合规检测标签列表
    * injectLabels  注入检测标签列表
    * immunityLexiconLabels  豁免词库标签列表
    * lexiconLabels  自定义词库检测标签列表
    * lexiconInternalLabels  内置词库检测标签列表
    * supportedLanguageLabels  支持检测语言标签列表
    * piiLabels  敏感词标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'complianceLabels' => null,
        'injectLabels' => null,
        'immunityLexiconLabels' => null,
        'lexiconLabels' => null,
        'lexiconInternalLabels' => null,
        'supportedLanguageLabels' => null,
        'piiLabels' => null
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
    * complianceLabels  合规检测标签列表
    * injectLabels  注入检测标签列表
    * immunityLexiconLabels  豁免词库标签列表
    * lexiconLabels  自定义词库检测标签列表
    * lexiconInternalLabels  内置词库检测标签列表
    * supportedLanguageLabels  支持检测语言标签列表
    * piiLabels  敏感词标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'complianceLabels' => 'compliance_labels',
            'injectLabels' => 'inject_labels',
            'immunityLexiconLabels' => 'immunity_lexicon_labels',
            'lexiconLabels' => 'lexicon_labels',
            'lexiconInternalLabels' => 'lexicon_internal_labels',
            'supportedLanguageLabels' => 'supported_language_labels',
            'piiLabels' => 'pii_labels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * complianceLabels  合规检测标签列表
    * injectLabels  注入检测标签列表
    * immunityLexiconLabels  豁免词库标签列表
    * lexiconLabels  自定义词库检测标签列表
    * lexiconInternalLabels  内置词库检测标签列表
    * supportedLanguageLabels  支持检测语言标签列表
    * piiLabels  敏感词标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'complianceLabels' => 'setComplianceLabels',
            'injectLabels' => 'setInjectLabels',
            'immunityLexiconLabels' => 'setImmunityLexiconLabels',
            'lexiconLabels' => 'setLexiconLabels',
            'lexiconInternalLabels' => 'setLexiconInternalLabels',
            'supportedLanguageLabels' => 'setSupportedLanguageLabels',
            'piiLabels' => 'setPiiLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * complianceLabels  合规检测标签列表
    * injectLabels  注入检测标签列表
    * immunityLexiconLabels  豁免词库标签列表
    * lexiconLabels  自定义词库检测标签列表
    * lexiconInternalLabels  内置词库检测标签列表
    * supportedLanguageLabels  支持检测语言标签列表
    * piiLabels  敏感词标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'complianceLabels' => 'getComplianceLabels',
            'injectLabels' => 'getInjectLabels',
            'immunityLexiconLabels' => 'getImmunityLexiconLabels',
            'lexiconLabels' => 'getLexiconLabels',
            'lexiconInternalLabels' => 'getLexiconInternalLabels',
            'supportedLanguageLabels' => 'getSupportedLanguageLabels',
            'piiLabels' => 'getPiiLabels'
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
        $this->container['complianceLabels'] = isset($data['complianceLabels']) ? $data['complianceLabels'] : null;
        $this->container['injectLabels'] = isset($data['injectLabels']) ? $data['injectLabels'] : null;
        $this->container['immunityLexiconLabels'] = isset($data['immunityLexiconLabels']) ? $data['immunityLexiconLabels'] : null;
        $this->container['lexiconLabels'] = isset($data['lexiconLabels']) ? $data['lexiconLabels'] : null;
        $this->container['lexiconInternalLabels'] = isset($data['lexiconInternalLabels']) ? $data['lexiconInternalLabels'] : null;
        $this->container['supportedLanguageLabels'] = isset($data['supportedLanguageLabels']) ? $data['supportedLanguageLabels'] : null;
        $this->container['piiLabels'] = isset($data['piiLabels']) ? $data['piiLabels'] : null;
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
    * Gets complianceLabels
    *  合规检测标签列表
    *
    * @return string[]|null
    */
    public function getComplianceLabels()
    {
        return $this->container['complianceLabels'];
    }

    /**
    * Sets complianceLabels
    *
    * @param string[]|null $complianceLabels 合规检测标签列表
    *
    * @return $this
    */
    public function setComplianceLabels($complianceLabels)
    {
        $this->container['complianceLabels'] = $complianceLabels;
        return $this;
    }

    /**
    * Gets injectLabels
    *  注入检测标签列表
    *
    * @return string[]|null
    */
    public function getInjectLabels()
    {
        return $this->container['injectLabels'];
    }

    /**
    * Sets injectLabels
    *
    * @param string[]|null $injectLabels 注入检测标签列表
    *
    * @return $this
    */
    public function setInjectLabels($injectLabels)
    {
        $this->container['injectLabels'] = $injectLabels;
        return $this;
    }

    /**
    * Gets immunityLexiconLabels
    *  豁免词库标签列表
    *
    * @return string[]|null
    */
    public function getImmunityLexiconLabels()
    {
        return $this->container['immunityLexiconLabels'];
    }

    /**
    * Sets immunityLexiconLabels
    *
    * @param string[]|null $immunityLexiconLabels 豁免词库标签列表
    *
    * @return $this
    */
    public function setImmunityLexiconLabels($immunityLexiconLabels)
    {
        $this->container['immunityLexiconLabels'] = $immunityLexiconLabels;
        return $this;
    }

    /**
    * Gets lexiconLabels
    *  自定义词库检测标签列表
    *
    * @return string[]|null
    */
    public function getLexiconLabels()
    {
        return $this->container['lexiconLabels'];
    }

    /**
    * Sets lexiconLabels
    *
    * @param string[]|null $lexiconLabels 自定义词库检测标签列表
    *
    * @return $this
    */
    public function setLexiconLabels($lexiconLabels)
    {
        $this->container['lexiconLabels'] = $lexiconLabels;
        return $this;
    }

    /**
    * Gets lexiconInternalLabels
    *  内置词库检测标签列表
    *
    * @return string[]|null
    */
    public function getLexiconInternalLabels()
    {
        return $this->container['lexiconInternalLabels'];
    }

    /**
    * Sets lexiconInternalLabels
    *
    * @param string[]|null $lexiconInternalLabels 内置词库检测标签列表
    *
    * @return $this
    */
    public function setLexiconInternalLabels($lexiconInternalLabels)
    {
        $this->container['lexiconInternalLabels'] = $lexiconInternalLabels;
        return $this;
    }

    /**
    * Gets supportedLanguageLabels
    *  支持检测语言标签列表
    *
    * @return string[]|null
    */
    public function getSupportedLanguageLabels()
    {
        return $this->container['supportedLanguageLabels'];
    }

    /**
    * Sets supportedLanguageLabels
    *
    * @param string[]|null $supportedLanguageLabels 支持检测语言标签列表
    *
    * @return $this
    */
    public function setSupportedLanguageLabels($supportedLanguageLabels)
    {
        $this->container['supportedLanguageLabels'] = $supportedLanguageLabels;
        return $this;
    }

    /**
    * Gets piiLabels
    *  敏感词标签列表
    *
    * @return string[]|null
    */
    public function getPiiLabels()
    {
        return $this->container['piiLabels'];
    }

    /**
    * Sets piiLabels
    *
    * @param string[]|null $piiLabels 敏感词标签列表
    *
    * @return $this
    */
    public function setPiiLabels($piiLabels)
    {
        $this->container['piiLabels'] = $piiLabels;
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

