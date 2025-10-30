<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddVulWhiteListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddVulWhiteListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * vulIds  **参数解释**: 漏洞ID列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值500 **默认取值**: 不涉及
    * ruleType  **参数解释**: 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机ID列表，当rule_type为specific_host时，该字段必填 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值2000 **默认取值**: 不涉及
    * withIgnore  **参数解释**: 是否忽略当前已扫描出的漏洞 **约束限制**: 不涉及 **取值范围**: - true：忽略 - false：不忽略 **默认取值**: true
    * description  **参数解释**: 白名单的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度0-1000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulType' => 'string',
            'vulIds' => 'string[]',
            'ruleType' => 'string',
            'hostIds' => 'string[]',
            'withIgnore' => 'bool',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * vulIds  **参数解释**: 漏洞ID列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值500 **默认取值**: 不涉及
    * ruleType  **参数解释**: 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机ID列表，当rule_type为specific_host时，该字段必填 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值2000 **默认取值**: 不涉及
    * withIgnore  **参数解释**: 是否忽略当前已扫描出的漏洞 **约束限制**: 不涉及 **取值范围**: - true：忽略 - false：不忽略 **默认取值**: true
    * description  **参数解释**: 白名单的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度0-1000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulType' => null,
        'vulIds' => null,
        'ruleType' => null,
        'hostIds' => null,
        'withIgnore' => null,
        'description' => null
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
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * vulIds  **参数解释**: 漏洞ID列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值500 **默认取值**: 不涉及
    * ruleType  **参数解释**: 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机ID列表，当rule_type为specific_host时，该字段必填 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值2000 **默认取值**: 不涉及
    * withIgnore  **参数解释**: 是否忽略当前已扫描出的漏洞 **约束限制**: 不涉及 **取值范围**: - true：忽略 - false：不忽略 **默认取值**: true
    * description  **参数解释**: 白名单的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度0-1000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulType' => 'vul_type',
            'vulIds' => 'vul_ids',
            'ruleType' => 'rule_type',
            'hostIds' => 'host_ids',
            'withIgnore' => 'with_ignore',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * vulIds  **参数解释**: 漏洞ID列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值500 **默认取值**: 不涉及
    * ruleType  **参数解释**: 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机ID列表，当rule_type为specific_host时，该字段必填 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值2000 **默认取值**: 不涉及
    * withIgnore  **参数解释**: 是否忽略当前已扫描出的漏洞 **约束限制**: 不涉及 **取值范围**: - true：忽略 - false：不忽略 **默认取值**: true
    * description  **参数解释**: 白名单的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度0-1000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'vulType' => 'setVulType',
            'vulIds' => 'setVulIds',
            'ruleType' => 'setRuleType',
            'hostIds' => 'setHostIds',
            'withIgnore' => 'setWithIgnore',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * vulIds  **参数解释**: 漏洞ID列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值500 **默认取值**: 不涉及
    * ruleType  **参数解释**: 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机ID列表，当rule_type为specific_host时，该字段必填 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值2000 **默认取值**: 不涉及
    * withIgnore  **参数解释**: 是否忽略当前已扫描出的漏洞 **约束限制**: 不涉及 **取值范围**: - true：忽略 - false：不忽略 **默认取值**: true
    * description  **参数解释**: 白名单的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度0-1000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'vulType' => 'getVulType',
            'vulIds' => 'getVulIds',
            'ruleType' => 'getRuleType',
            'hostIds' => 'getHostIds',
            'withIgnore' => 'getWithIgnore',
            'description' => 'getDescription'
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
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['vulIds'] = isset($data['vulIds']) ? $data['vulIds'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['withIgnore'] = isset($data['withIgnore']) ? $data['withIgnore'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vulType'] === null) {
            $invalidProperties[] = "'vulType' can't be null";
        }
            if ((mb_strlen($this->container['vulType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['vulType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(linux_vul|windows_vul|web_cms|app_vul)$/", $this->container['vulType'])) {
                $invalidProperties[] = "invalid value for 'vulType', must be conform to the pattern /^(linux_vul|windows_vul|web_cms|app_vul)$/.";
            }
        if ($this->container['vulIds'] === null) {
            $invalidProperties[] = "'vulIds' can't be null";
        }
        if ($this->container['ruleType'] === null) {
            $invalidProperties[] = "'ruleType' can't be null";
        }
            if ((mb_strlen($this->container['ruleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['ruleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(all_host|specific_host)$/", $this->container['ruleType'])) {
                $invalidProperties[] = "invalid value for 'ruleType', must be conform to the pattern /^(all_host|specific_host)$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets vulType
    *  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string $vulType **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets vulIds
    *  **参数解释**: 漏洞ID列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值500 **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getVulIds()
    {
        return $this->container['vulIds'];
    }

    /**
    * Sets vulIds
    *
    * @param string[] $vulIds **参数解释**: 漏洞ID列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值500 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulIds($vulIds)
    {
        $this->container['vulIds'] = $vulIds;
        return $this;
    }

    /**
    * Gets ruleType
    *  **参数解释**: 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string $ruleType **参数解释**: 白名单规则类型 **约束限制**: 不涉及 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets hostIds
    *  **参数解释**: 主机ID列表，当rule_type为specific_host时，该字段必填 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值2000 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**: 主机ID列表，当rule_type为specific_host时，该字段必填 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值2000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets withIgnore
    *  **参数解释**: 是否忽略当前已扫描出的漏洞 **约束限制**: 不涉及 **取值范围**: - true：忽略 - false：不忽略 **默认取值**: true
    *
    * @return bool|null
    */
    public function getWithIgnore()
    {
        return $this->container['withIgnore'];
    }

    /**
    * Sets withIgnore
    *
    * @param bool|null $withIgnore **参数解释**: 是否忽略当前已扫描出的漏洞 **约束限制**: 不涉及 **取值范围**: - true：忽略 - false：不忽略 **默认取值**: true
    *
    * @return $this
    */
    public function setWithIgnore($withIgnore)
    {
        $this->container['withIgnore'] = $withIgnore;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 白名单的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度0-1000 **默认取值**: 不涉及
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
    * @param string|null $description **参数解释**: 白名单的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度0-1000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

