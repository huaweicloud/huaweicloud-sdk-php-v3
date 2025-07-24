<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RulesetItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RulesetItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  规则集id
    * language  规则集语言
    * templateName  规则集名称
    * creatorId  创建人ID
    * creatorName  创建人名称
    * templateCreateTime  创建人时间
    * isUsed  使用状态1使用中，0空闲中
    * ruleIds  规则集包含的规则id
    * isDefault  是否该语言默认规则集，0不是，1是
    * isDevcloudProjectDefault  是否是项目下语言默认规则集，0不是，1是
    * isDefaultTemplate  是否是系统规则集，0不是，1是
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'language' => 'string',
            'templateName' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'templateCreateTime' => 'string',
            'isUsed' => 'string',
            'ruleIds' => 'string',
            'isDefault' => 'string',
            'isDevcloudProjectDefault' => 'string',
            'isDefaultTemplate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  规则集id
    * language  规则集语言
    * templateName  规则集名称
    * creatorId  创建人ID
    * creatorName  创建人名称
    * templateCreateTime  创建人时间
    * isUsed  使用状态1使用中，0空闲中
    * ruleIds  规则集包含的规则id
    * isDefault  是否该语言默认规则集，0不是，1是
    * isDevcloudProjectDefault  是否是项目下语言默认规则集，0不是，1是
    * isDefaultTemplate  是否是系统规则集，0不是，1是
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'language' => null,
        'templateName' => null,
        'creatorId' => null,
        'creatorName' => null,
        'templateCreateTime' => null,
        'isUsed' => null,
        'ruleIds' => null,
        'isDefault' => null,
        'isDevcloudProjectDefault' => null,
        'isDefaultTemplate' => null
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
    * templateId  规则集id
    * language  规则集语言
    * templateName  规则集名称
    * creatorId  创建人ID
    * creatorName  创建人名称
    * templateCreateTime  创建人时间
    * isUsed  使用状态1使用中，0空闲中
    * ruleIds  规则集包含的规则id
    * isDefault  是否该语言默认规则集，0不是，1是
    * isDevcloudProjectDefault  是否是项目下语言默认规则集，0不是，1是
    * isDefaultTemplate  是否是系统规则集，0不是，1是
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'language' => 'language',
            'templateName' => 'template_name',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'templateCreateTime' => 'template_create_time',
            'isUsed' => 'is_used',
            'ruleIds' => 'rule_ids',
            'isDefault' => 'is_default',
            'isDevcloudProjectDefault' => 'is_devcloud_project_default',
            'isDefaultTemplate' => 'is_default_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  规则集id
    * language  规则集语言
    * templateName  规则集名称
    * creatorId  创建人ID
    * creatorName  创建人名称
    * templateCreateTime  创建人时间
    * isUsed  使用状态1使用中，0空闲中
    * ruleIds  规则集包含的规则id
    * isDefault  是否该语言默认规则集，0不是，1是
    * isDevcloudProjectDefault  是否是项目下语言默认规则集，0不是，1是
    * isDefaultTemplate  是否是系统规则集，0不是，1是
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'language' => 'setLanguage',
            'templateName' => 'setTemplateName',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'templateCreateTime' => 'setTemplateCreateTime',
            'isUsed' => 'setIsUsed',
            'ruleIds' => 'setRuleIds',
            'isDefault' => 'setIsDefault',
            'isDevcloudProjectDefault' => 'setIsDevcloudProjectDefault',
            'isDefaultTemplate' => 'setIsDefaultTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  规则集id
    * language  规则集语言
    * templateName  规则集名称
    * creatorId  创建人ID
    * creatorName  创建人名称
    * templateCreateTime  创建人时间
    * isUsed  使用状态1使用中，0空闲中
    * ruleIds  规则集包含的规则id
    * isDefault  是否该语言默认规则集，0不是，1是
    * isDevcloudProjectDefault  是否是项目下语言默认规则集，0不是，1是
    * isDefaultTemplate  是否是系统规则集，0不是，1是
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'language' => 'getLanguage',
            'templateName' => 'getTemplateName',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'templateCreateTime' => 'getTemplateCreateTime',
            'isUsed' => 'getIsUsed',
            'ruleIds' => 'getRuleIds',
            'isDefault' => 'getIsDefault',
            'isDevcloudProjectDefault' => 'getIsDevcloudProjectDefault',
            'isDefaultTemplate' => 'getIsDefaultTemplate'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['templateCreateTime'] = isset($data['templateCreateTime']) ? $data['templateCreateTime'] : null;
        $this->container['isUsed'] = isset($data['isUsed']) ? $data['isUsed'] : null;
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['isDevcloudProjectDefault'] = isset($data['isDevcloudProjectDefault']) ? $data['isDevcloudProjectDefault'] : null;
        $this->container['isDefaultTemplate'] = isset($data['isDefaultTemplate']) ? $data['isDefaultTemplate'] : null;
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
    * Gets templateId
    *  规则集id
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 规则集id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets language
    *  规则集语言
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 规则集语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets templateName
    *  规则集名称
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 规则集名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人ID
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建人ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets templateCreateTime
    *  创建人时间
    *
    * @return string|null
    */
    public function getTemplateCreateTime()
    {
        return $this->container['templateCreateTime'];
    }

    /**
    * Sets templateCreateTime
    *
    * @param string|null $templateCreateTime 创建人时间
    *
    * @return $this
    */
    public function setTemplateCreateTime($templateCreateTime)
    {
        $this->container['templateCreateTime'] = $templateCreateTime;
        return $this;
    }

    /**
    * Gets isUsed
    *  使用状态1使用中，0空闲中
    *
    * @return string|null
    */
    public function getIsUsed()
    {
        return $this->container['isUsed'];
    }

    /**
    * Sets isUsed
    *
    * @param string|null $isUsed 使用状态1使用中，0空闲中
    *
    * @return $this
    */
    public function setIsUsed($isUsed)
    {
        $this->container['isUsed'] = $isUsed;
        return $this;
    }

    /**
    * Gets ruleIds
    *  规则集包含的规则id
    *
    * @return string|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string|null $ruleIds 规则集包含的规则id
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否该语言默认规则集，0不是，1是
    *
    * @return string|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param string|null $isDefault 是否该语言默认规则集，0不是，1是
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets isDevcloudProjectDefault
    *  是否是项目下语言默认规则集，0不是，1是
    *
    * @return string|null
    */
    public function getIsDevcloudProjectDefault()
    {
        return $this->container['isDevcloudProjectDefault'];
    }

    /**
    * Sets isDevcloudProjectDefault
    *
    * @param string|null $isDevcloudProjectDefault 是否是项目下语言默认规则集，0不是，1是
    *
    * @return $this
    */
    public function setIsDevcloudProjectDefault($isDevcloudProjectDefault)
    {
        $this->container['isDevcloudProjectDefault'] = $isDevcloudProjectDefault;
        return $this;
    }

    /**
    * Gets isDefaultTemplate
    *  是否是系统规则集，0不是，1是
    *
    * @return string|null
    */
    public function getIsDefaultTemplate()
    {
        return $this->container['isDefaultTemplate'];
    }

    /**
    * Sets isDefaultTemplate
    *
    * @param string|null $isDefaultTemplate 是否是系统规则集，0不是，1是
    *
    * @return $this
    */
    public function setIsDefaultTemplate($isDefaultTemplate)
    {
        $this->container['isDefaultTemplate'] = $isDefaultTemplate;
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

