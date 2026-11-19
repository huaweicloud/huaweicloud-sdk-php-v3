<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulAffectInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulAffectInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不传时查询该漏洞影响范围内的所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：Linux漏洞。 - windows_vul：Windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。 - urgent_vul：应急漏洞。  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞处理状态 **约束限制**: 不涉及 **取值范围**: - handled：已处理。 - unhandled：未处理。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'hostId' => 'string',
            'vulType' => 'string',
            'vulId' => 'string',
            'handleStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不传时查询该漏洞影响范围内的所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：Linux漏洞。 - windows_vul：Windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。 - urgent_vul：应急漏洞。  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞处理状态 **约束限制**: 不涉及 **取值范围**: - handled：已处理。 - unhandled：未处理。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'hostId' => null,
        'vulType' => null,
        'vulId' => null,
        'handleStatus' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不传时查询该漏洞影响范围内的所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：Linux漏洞。 - windows_vul：Windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。 - urgent_vul：应急漏洞。  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞处理状态 **约束限制**: 不涉及 **取值范围**: - handled：已处理。 - unhandled：未处理。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'hostId' => 'host_id',
            'vulType' => 'vul_type',
            'vulId' => 'vul_id',
            'handleStatus' => 'handle_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不传时查询该漏洞影响范围内的所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：Linux漏洞。 - windows_vul：Windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。 - urgent_vul：应急漏洞。  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞处理状态 **约束限制**: 不涉及 **取值范围**: - handled：已处理。 - unhandled：未处理。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'hostId' => 'setHostId',
            'vulType' => 'setVulType',
            'vulId' => 'setVulId',
            'handleStatus' => 'setHandleStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 主机ID，不传时查询该漏洞影响范围内的所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：Linux漏洞。 - windows_vul：Windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。 - urgent_vul：应急漏洞。  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞处理状态 **约束限制**: 不涉及 **取值范围**: - handled：已处理。 - unhandled：未处理。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'hostId' => 'getHostId',
            'vulType' => 'getVulType',
            'vulId' => 'getVulId',
            'handleStatus' => 'getHandleStatus'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vulType']) && !preg_match("/^(linux_vul|windows_vul|web_cms|app_vul|urgent_vul)$/", $this->container['vulType'])) {
                $invalidProperties[] = "invalid value for 'vulType', must be conform to the pattern /^(linux_vul|windows_vul|web_cms|app_vul|urgent_vul)$/.";
            }
        if ($this->container['vulId'] === null) {
            $invalidProperties[] = "'vulId' can't be null";
        }
            if ((mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['vulId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['vulId'])) {
                $invalidProperties[] = "invalid value for 'vulId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 15)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleStatus']) && !preg_match("/^(handled|unhandled)$/", $this->container['handleStatus'])) {
                $invalidProperties[] = "invalid value for 'handleStatus', must be conform to the pattern /^(handled|unhandled)$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机ID，不传时查询该漏洞影响范围内的所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 主机ID，不传时查询该漏洞影响范围内的所有主机 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets vulType
    *  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：Linux漏洞。 - windows_vul：Windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。 - urgent_vul：应急漏洞。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string|null $vulType **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：Linux漏洞。 - windows_vul：Windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。 - urgent_vul：应急漏洞。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string $vulId **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 漏洞处理状态 **约束限制**: 不涉及 **取值范围**: - handled：已处理。 - unhandled：未处理。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**: 漏洞处理状态 **约束限制**: 不涉及 **取值范围**: - handled：已处理。 - unhandled：未处理。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
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

