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
    * templateId  **参数解释:** 规则集ID。 **取值范围:** 32位UUID。
    * language  **参数解释:** 规则集语言。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释:** 规则集语言。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * creatorId  **参数解释:** 创建者的user_id，值来源于IAM的用户ID。 **取值范围:** 32位UUID。
    * creatorName  **参数解释:** 创建人名称，值来源于IAM用户名称。 **取值范围:** IAM用户名称。
    * templateCreateTime  **参数解释:** 创建时间，时区统一为0时区。 **取值范围:** 0时区时间。
    * isUsed  **参数解释:** 使用状态。 **取值范围:** - 0：空闲中。 - 1：使用中。
    * ruleIds  **参数解释:** 规则集包含的规则ID，每条规则都有唯一的规则ID。 **取值范围:** 32位UUID列表，多个UUID以英文逗号分隔。
    * isDefault  **参数解释:** 规则集是否是该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDevcloudProjectDefault  **参数解释:** 规则集是否是项目下该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDefaultTemplate  **参数解释:** 规则集是否是系统规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    * templateId  **参数解释:** 规则集ID。 **取值范围:** 32位UUID。
    * language  **参数解释:** 规则集语言。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释:** 规则集语言。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * creatorId  **参数解释:** 创建者的user_id，值来源于IAM的用户ID。 **取值范围:** 32位UUID。
    * creatorName  **参数解释:** 创建人名称，值来源于IAM用户名称。 **取值范围:** IAM用户名称。
    * templateCreateTime  **参数解释:** 创建时间，时区统一为0时区。 **取值范围:** 0时区时间。
    * isUsed  **参数解释:** 使用状态。 **取值范围:** - 0：空闲中。 - 1：使用中。
    * ruleIds  **参数解释:** 规则集包含的规则ID，每条规则都有唯一的规则ID。 **取值范围:** 32位UUID列表，多个UUID以英文逗号分隔。
    * isDefault  **参数解释:** 规则集是否是该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDevcloudProjectDefault  **参数解释:** 规则集是否是项目下该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDefaultTemplate  **参数解释:** 规则集是否是系统规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    * templateId  **参数解释:** 规则集ID。 **取值范围:** 32位UUID。
    * language  **参数解释:** 规则集语言。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释:** 规则集语言。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * creatorId  **参数解释:** 创建者的user_id，值来源于IAM的用户ID。 **取值范围:** 32位UUID。
    * creatorName  **参数解释:** 创建人名称，值来源于IAM用户名称。 **取值范围:** IAM用户名称。
    * templateCreateTime  **参数解释:** 创建时间，时区统一为0时区。 **取值范围:** 0时区时间。
    * isUsed  **参数解释:** 使用状态。 **取值范围:** - 0：空闲中。 - 1：使用中。
    * ruleIds  **参数解释:** 规则集包含的规则ID，每条规则都有唯一的规则ID。 **取值范围:** 32位UUID列表，多个UUID以英文逗号分隔。
    * isDefault  **参数解释:** 规则集是否是该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDevcloudProjectDefault  **参数解释:** 规则集是否是项目下该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDefaultTemplate  **参数解释:** 规则集是否是系统规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    * templateId  **参数解释:** 规则集ID。 **取值范围:** 32位UUID。
    * language  **参数解释:** 规则集语言。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释:** 规则集语言。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * creatorId  **参数解释:** 创建者的user_id，值来源于IAM的用户ID。 **取值范围:** 32位UUID。
    * creatorName  **参数解释:** 创建人名称，值来源于IAM用户名称。 **取值范围:** IAM用户名称。
    * templateCreateTime  **参数解释:** 创建时间，时区统一为0时区。 **取值范围:** 0时区时间。
    * isUsed  **参数解释:** 使用状态。 **取值范围:** - 0：空闲中。 - 1：使用中。
    * ruleIds  **参数解释:** 规则集包含的规则ID，每条规则都有唯一的规则ID。 **取值范围:** 32位UUID列表，多个UUID以英文逗号分隔。
    * isDefault  **参数解释:** 规则集是否是该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDevcloudProjectDefault  **参数解释:** 规则集是否是项目下该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDefaultTemplate  **参数解释:** 规则集是否是系统规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    * templateId  **参数解释:** 规则集ID。 **取值范围:** 32位UUID。
    * language  **参数解释:** 规则集语言。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释:** 规则集语言。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * creatorId  **参数解释:** 创建者的user_id，值来源于IAM的用户ID。 **取值范围:** 32位UUID。
    * creatorName  **参数解释:** 创建人名称，值来源于IAM用户名称。 **取值范围:** IAM用户名称。
    * templateCreateTime  **参数解释:** 创建时间，时区统一为0时区。 **取值范围:** 0时区时间。
    * isUsed  **参数解释:** 使用状态。 **取值范围:** - 0：空闲中。 - 1：使用中。
    * ruleIds  **参数解释:** 规则集包含的规则ID，每条规则都有唯一的规则ID。 **取值范围:** 32位UUID列表，多个UUID以英文逗号分隔。
    * isDefault  **参数解释:** 规则集是否是该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDevcloudProjectDefault  **参数解释:** 规则集是否是项目下该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
    * isDefaultTemplate  **参数解释:** 规则集是否是系统规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    *  **参数解释:** 规则集ID。 **取值范围:** 32位UUID。
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
    * @param string|null $templateId **参数解释:** 规则集ID。 **取值范围:** 32位UUID。
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
    *  **参数解释:** 规则集语言。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
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
    * @param string|null $language **参数解释:** 规则集语言。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
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
    *  **参数解释:** 规则集语言。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
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
    * @param string|null $templateName **参数解释:** 规则集语言。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
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
    *  **参数解释:** 创建者的user_id，值来源于IAM的用户ID。 **取值范围:** 32位UUID。
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
    * @param string|null $creatorId **参数解释:** 创建者的user_id，值来源于IAM的用户ID。 **取值范围:** 32位UUID。
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
    *  **参数解释:** 创建人名称，值来源于IAM用户名称。 **取值范围:** IAM用户名称。
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
    * @param string|null $creatorName **参数解释:** 创建人名称，值来源于IAM用户名称。 **取值范围:** IAM用户名称。
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
    *  **参数解释:** 创建时间，时区统一为0时区。 **取值范围:** 0时区时间。
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
    * @param string|null $templateCreateTime **参数解释:** 创建时间，时区统一为0时区。 **取值范围:** 0时区时间。
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
    *  **参数解释:** 使用状态。 **取值范围:** - 0：空闲中。 - 1：使用中。
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
    * @param string|null $isUsed **参数解释:** 使用状态。 **取值范围:** - 0：空闲中。 - 1：使用中。
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
    *  **参数解释:** 规则集包含的规则ID，每条规则都有唯一的规则ID。 **取值范围:** 32位UUID列表，多个UUID以英文逗号分隔。
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
    * @param string|null $ruleIds **参数解释:** 规则集包含的规则ID，每条规则都有唯一的规则ID。 **取值范围:** 32位UUID列表，多个UUID以英文逗号分隔。
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
    *  **参数解释:** 规则集是否是该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    * @param string|null $isDefault **参数解释:** 规则集是否是该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    *  **参数解释:** 规则集是否是项目下该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    * @param string|null $isDevcloudProjectDefault **参数解释:** 规则集是否是项目下该语言默认规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    *  **参数解释:** 规则集是否是系统规则集。 **取值范围:** - 0：不是。 - 1：是。
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
    * @param string|null $isDefaultTemplate **参数解释:** 规则集是否是系统规则集。 **取值范围:** - 0：不是。 - 1：是。
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

