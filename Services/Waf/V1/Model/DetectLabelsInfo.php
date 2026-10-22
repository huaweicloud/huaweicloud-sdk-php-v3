<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetectLabelsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetectLabelsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * complianceLabelsInfo  合规检测标签详情列表
    * injectLabelsInfo  注入检测标签详情列表
    * immunityLexiconLabelsInfo  豁免词库标签详情列表
    * lexiconLabelsInfo  自定义词库检测标签详情列表
    * lexiconInternalLabelsInfo  内置词库检测标签详情列表
    * supportedLanguageLabels  语言检测标签信息列表
    * piiLabelsInfo  敏感词的标签详情列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'complianceLabelsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]',
            'injectLabelsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]',
            'immunityLexiconLabelsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]',
            'lexiconLabelsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]',
            'lexiconInternalLabelsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]',
            'supportedLanguageLabels' => '\HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]',
            'piiLabelsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * complianceLabelsInfo  合规检测标签详情列表
    * injectLabelsInfo  注入检测标签详情列表
    * immunityLexiconLabelsInfo  豁免词库标签详情列表
    * lexiconLabelsInfo  自定义词库检测标签详情列表
    * lexiconInternalLabelsInfo  内置词库检测标签详情列表
    * supportedLanguageLabels  语言检测标签信息列表
    * piiLabelsInfo  敏感词的标签详情列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'complianceLabelsInfo' => null,
        'injectLabelsInfo' => null,
        'immunityLexiconLabelsInfo' => null,
        'lexiconLabelsInfo' => null,
        'lexiconInternalLabelsInfo' => null,
        'supportedLanguageLabels' => null,
        'piiLabelsInfo' => null
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
    * complianceLabelsInfo  合规检测标签详情列表
    * injectLabelsInfo  注入检测标签详情列表
    * immunityLexiconLabelsInfo  豁免词库标签详情列表
    * lexiconLabelsInfo  自定义词库检测标签详情列表
    * lexiconInternalLabelsInfo  内置词库检测标签详情列表
    * supportedLanguageLabels  语言检测标签信息列表
    * piiLabelsInfo  敏感词的标签详情列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'complianceLabelsInfo' => 'compliance_labels_info',
            'injectLabelsInfo' => 'inject_labels_info',
            'immunityLexiconLabelsInfo' => 'immunity_lexicon_labels_info',
            'lexiconLabelsInfo' => 'lexicon_labels_info',
            'lexiconInternalLabelsInfo' => 'lexicon_internal_labels_info',
            'supportedLanguageLabels' => 'supported_language_labels',
            'piiLabelsInfo' => 'pii_labels_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * complianceLabelsInfo  合规检测标签详情列表
    * injectLabelsInfo  注入检测标签详情列表
    * immunityLexiconLabelsInfo  豁免词库标签详情列表
    * lexiconLabelsInfo  自定义词库检测标签详情列表
    * lexiconInternalLabelsInfo  内置词库检测标签详情列表
    * supportedLanguageLabels  语言检测标签信息列表
    * piiLabelsInfo  敏感词的标签详情列表
    *
    * @var string[]
    */
    protected static $setters = [
            'complianceLabelsInfo' => 'setComplianceLabelsInfo',
            'injectLabelsInfo' => 'setInjectLabelsInfo',
            'immunityLexiconLabelsInfo' => 'setImmunityLexiconLabelsInfo',
            'lexiconLabelsInfo' => 'setLexiconLabelsInfo',
            'lexiconInternalLabelsInfo' => 'setLexiconInternalLabelsInfo',
            'supportedLanguageLabels' => 'setSupportedLanguageLabels',
            'piiLabelsInfo' => 'setPiiLabelsInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * complianceLabelsInfo  合规检测标签详情列表
    * injectLabelsInfo  注入检测标签详情列表
    * immunityLexiconLabelsInfo  豁免词库标签详情列表
    * lexiconLabelsInfo  自定义词库检测标签详情列表
    * lexiconInternalLabelsInfo  内置词库检测标签详情列表
    * supportedLanguageLabels  语言检测标签信息列表
    * piiLabelsInfo  敏感词的标签详情列表
    *
    * @var string[]
    */
    protected static $getters = [
            'complianceLabelsInfo' => 'getComplianceLabelsInfo',
            'injectLabelsInfo' => 'getInjectLabelsInfo',
            'immunityLexiconLabelsInfo' => 'getImmunityLexiconLabelsInfo',
            'lexiconLabelsInfo' => 'getLexiconLabelsInfo',
            'lexiconInternalLabelsInfo' => 'getLexiconInternalLabelsInfo',
            'supportedLanguageLabels' => 'getSupportedLanguageLabels',
            'piiLabelsInfo' => 'getPiiLabelsInfo'
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
        $this->container['complianceLabelsInfo'] = isset($data['complianceLabelsInfo']) ? $data['complianceLabelsInfo'] : null;
        $this->container['injectLabelsInfo'] = isset($data['injectLabelsInfo']) ? $data['injectLabelsInfo'] : null;
        $this->container['immunityLexiconLabelsInfo'] = isset($data['immunityLexiconLabelsInfo']) ? $data['immunityLexiconLabelsInfo'] : null;
        $this->container['lexiconLabelsInfo'] = isset($data['lexiconLabelsInfo']) ? $data['lexiconLabelsInfo'] : null;
        $this->container['lexiconInternalLabelsInfo'] = isset($data['lexiconInternalLabelsInfo']) ? $data['lexiconInternalLabelsInfo'] : null;
        $this->container['supportedLanguageLabels'] = isset($data['supportedLanguageLabels']) ? $data['supportedLanguageLabels'] : null;
        $this->container['piiLabelsInfo'] = isset($data['piiLabelsInfo']) ? $data['piiLabelsInfo'] : null;
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
    * Gets complianceLabelsInfo
    *  合规检测标签详情列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null
    */
    public function getComplianceLabelsInfo()
    {
        return $this->container['complianceLabelsInfo'];
    }

    /**
    * Sets complianceLabelsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null $complianceLabelsInfo 合规检测标签详情列表
    *
    * @return $this
    */
    public function setComplianceLabelsInfo($complianceLabelsInfo)
    {
        $this->container['complianceLabelsInfo'] = $complianceLabelsInfo;
        return $this;
    }

    /**
    * Gets injectLabelsInfo
    *  注入检测标签详情列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null
    */
    public function getInjectLabelsInfo()
    {
        return $this->container['injectLabelsInfo'];
    }

    /**
    * Sets injectLabelsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null $injectLabelsInfo 注入检测标签详情列表
    *
    * @return $this
    */
    public function setInjectLabelsInfo($injectLabelsInfo)
    {
        $this->container['injectLabelsInfo'] = $injectLabelsInfo;
        return $this;
    }

    /**
    * Gets immunityLexiconLabelsInfo
    *  豁免词库标签详情列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null
    */
    public function getImmunityLexiconLabelsInfo()
    {
        return $this->container['immunityLexiconLabelsInfo'];
    }

    /**
    * Sets immunityLexiconLabelsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null $immunityLexiconLabelsInfo 豁免词库标签详情列表
    *
    * @return $this
    */
    public function setImmunityLexiconLabelsInfo($immunityLexiconLabelsInfo)
    {
        $this->container['immunityLexiconLabelsInfo'] = $immunityLexiconLabelsInfo;
        return $this;
    }

    /**
    * Gets lexiconLabelsInfo
    *  自定义词库检测标签详情列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null
    */
    public function getLexiconLabelsInfo()
    {
        return $this->container['lexiconLabelsInfo'];
    }

    /**
    * Sets lexiconLabelsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null $lexiconLabelsInfo 自定义词库检测标签详情列表
    *
    * @return $this
    */
    public function setLexiconLabelsInfo($lexiconLabelsInfo)
    {
        $this->container['lexiconLabelsInfo'] = $lexiconLabelsInfo;
        return $this;
    }

    /**
    * Gets lexiconInternalLabelsInfo
    *  内置词库检测标签详情列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null
    */
    public function getLexiconInternalLabelsInfo()
    {
        return $this->container['lexiconInternalLabelsInfo'];
    }

    /**
    * Sets lexiconInternalLabelsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null $lexiconInternalLabelsInfo 内置词库检测标签详情列表
    *
    * @return $this
    */
    public function setLexiconInternalLabelsInfo($lexiconInternalLabelsInfo)
    {
        $this->container['lexiconInternalLabelsInfo'] = $lexiconInternalLabelsInfo;
        return $this;
    }

    /**
    * Gets supportedLanguageLabels
    *  语言检测标签信息列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null
    */
    public function getSupportedLanguageLabels()
    {
        return $this->container['supportedLanguageLabels'];
    }

    /**
    * Sets supportedLanguageLabels
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null $supportedLanguageLabels 语言检测标签信息列表
    *
    * @return $this
    */
    public function setSupportedLanguageLabels($supportedLanguageLabels)
    {
        $this->container['supportedLanguageLabels'] = $supportedLanguageLabels;
        return $this;
    }

    /**
    * Gets piiLabelsInfo
    *  敏感词的标签详情列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null
    */
    public function getPiiLabelsInfo()
    {
        return $this->container['piiLabelsInfo'];
    }

    /**
    * Sets piiLabelsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LabelInfo[]|null $piiLabelsInfo 敏感词的标签详情列表
    *
    * @return $this
    */
    public function setPiiLabelsInfo($piiLabelsInfo)
    {
        $this->container['piiLabelsInfo'] = $piiLabelsInfo;
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

