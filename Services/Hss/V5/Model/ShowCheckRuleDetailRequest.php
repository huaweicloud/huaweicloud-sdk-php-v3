<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCheckRuleDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCheckRuleDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkType  **参数解释**:  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。check_type的值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-configs **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkRuleId  **参数解释**:  检查项ID，值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * standard  **参数解释**: 标准类型 **约束限制**: 不涉及 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'checkName' => 'string',
            'checkType' => 'string',
            'checkRuleId' => 'string',
            'standard' => 'string',
            'hostId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkType  **参数解释**:  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。check_type的值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-configs **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkRuleId  **参数解释**:  检查项ID，值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * standard  **参数解释**: 标准类型 **约束限制**: 不涉及 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'checkName' => null,
        'checkType' => null,
        'checkRuleId' => null,
        'standard' => null,
        'hostId' => null
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
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkType  **参数解释**:  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。check_type的值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-configs **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkRuleId  **参数解释**:  检查项ID，值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * standard  **参数解释**: 标准类型 **约束限制**: 不涉及 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'checkName' => 'check_name',
            'checkType' => 'check_type',
            'checkRuleId' => 'check_rule_id',
            'standard' => 'standard',
            'hostId' => 'host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkType  **参数解释**:  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。check_type的值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-configs **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkRuleId  **参数解释**:  检查项ID，值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * standard  **参数解释**: 标准类型 **约束限制**: 不涉及 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'checkName' => 'setCheckName',
            'checkType' => 'setCheckType',
            'checkRuleId' => 'setCheckRuleId',
            'standard' => 'setStandard',
            'hostId' => 'setHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkType  **参数解释**:  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。check_type的值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-configs **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * checkRuleId  **参数解释**:  检查项ID，值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    * standard  **参数解释**: 标准类型 **约束限制**: 不涉及 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 **默认取值**: 不涉及
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'checkName' => 'getCheckName',
            'checkType' => 'getCheckType',
            'checkRuleId' => 'getCheckRuleId',
            'standard' => 'getStandard',
            'hostId' => 'getHostId'
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
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
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
        if ($this->container['checkName'] === null) {
            $invalidProperties[] = "'checkName' can't be null";
        }
            if ((mb_strlen($this->container['checkName']) > 255)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['checkType'] === null) {
            $invalidProperties[] = "'checkType' can't be null";
        }
            if ((mb_strlen($this->container['checkType']) > 255)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['checkRuleId'] === null) {
            $invalidProperties[] = "'checkRuleId' can't be null";
        }
            if ((mb_strlen($this->container['checkRuleId']) > 255)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['standard'] === null) {
            $invalidProperties[] = "'standard' can't be null";
        }
            if ((mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
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
    * Gets checkName
    *  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string $checkName **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释**:  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。check_type的值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-configs **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string $checkType **参数解释**:  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。check_type的值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-configs **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets checkRuleId
    *  **参数解释**:  检查项ID，值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getCheckRuleId()
    {
        return $this->container['checkRuleId'];
    }

    /**
    * Sets checkRuleId
    *
    * @param string $checkRuleId **参数解释**:  检查项ID，值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules **约束限制**: 不涉及 **取值范围**: 字符长度0-255位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释**: 标准类型 **约束限制**: 不涉及 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string $standard **参数解释**: 标准类型 **约束限制**: 不涉及 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
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

