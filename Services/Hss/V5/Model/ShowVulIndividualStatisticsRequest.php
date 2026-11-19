<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulIndividualStatisticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulIndividualStatisticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * statisticsTypes  **参数解释**: 需要查询的漏洞统计数据类型列表，多个类型以逗号分隔。 **约束限制**: 必填 **取值范围**: - need_urgent_repair_num：需要紧急修复的漏洞数量 - unhandled_num：未完成修复的漏洞数量 - existed_vul_host_num：存在漏洞的服务器数量 - today_handled_num：今日处理的漏洞数量 - all_handled_num：累计处理的漏洞数量 - vul_library_info：漏洞库统计数据 - linux_vul_unhandled_num：未处置的Linux漏洞数量 - windows_vul_unhandled_num：未处置的Windows漏洞数量 - web_cms_vul_unhandled_num：未处置的Web CMS漏洞数量 - app_vul_unhandled_num：未处置的应用漏洞数量 - urgent_vul_unhandled_num：未处置的应急漏洞数量 - max_vul_handle_num：单次最大可处置的漏洞数量  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'statisticsTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * statisticsTypes  **参数解释**: 需要查询的漏洞统计数据类型列表，多个类型以逗号分隔。 **约束限制**: 必填 **取值范围**: - need_urgent_repair_num：需要紧急修复的漏洞数量 - unhandled_num：未完成修复的漏洞数量 - existed_vul_host_num：存在漏洞的服务器数量 - today_handled_num：今日处理的漏洞数量 - all_handled_num：累计处理的漏洞数量 - vul_library_info：漏洞库统计数据 - linux_vul_unhandled_num：未处置的Linux漏洞数量 - windows_vul_unhandled_num：未处置的Windows漏洞数量 - web_cms_vul_unhandled_num：未处置的Web CMS漏洞数量 - app_vul_unhandled_num：未处置的应用漏洞数量 - urgent_vul_unhandled_num：未处置的应急漏洞数量 - max_vul_handle_num：单次最大可处置的漏洞数量  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'statisticsTypes' => null
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
    * statisticsTypes  **参数解释**: 需要查询的漏洞统计数据类型列表，多个类型以逗号分隔。 **约束限制**: 必填 **取值范围**: - need_urgent_repair_num：需要紧急修复的漏洞数量 - unhandled_num：未完成修复的漏洞数量 - existed_vul_host_num：存在漏洞的服务器数量 - today_handled_num：今日处理的漏洞数量 - all_handled_num：累计处理的漏洞数量 - vul_library_info：漏洞库统计数据 - linux_vul_unhandled_num：未处置的Linux漏洞数量 - windows_vul_unhandled_num：未处置的Windows漏洞数量 - web_cms_vul_unhandled_num：未处置的Web CMS漏洞数量 - app_vul_unhandled_num：未处置的应用漏洞数量 - urgent_vul_unhandled_num：未处置的应急漏洞数量 - max_vul_handle_num：单次最大可处置的漏洞数量  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'statisticsTypes' => 'statistics_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * statisticsTypes  **参数解释**: 需要查询的漏洞统计数据类型列表，多个类型以逗号分隔。 **约束限制**: 必填 **取值范围**: - need_urgent_repair_num：需要紧急修复的漏洞数量 - unhandled_num：未完成修复的漏洞数量 - existed_vul_host_num：存在漏洞的服务器数量 - today_handled_num：今日处理的漏洞数量 - all_handled_num：累计处理的漏洞数量 - vul_library_info：漏洞库统计数据 - linux_vul_unhandled_num：未处置的Linux漏洞数量 - windows_vul_unhandled_num：未处置的Windows漏洞数量 - web_cms_vul_unhandled_num：未处置的Web CMS漏洞数量 - app_vul_unhandled_num：未处置的应用漏洞数量 - urgent_vul_unhandled_num：未处置的应急漏洞数量 - max_vul_handle_num：单次最大可处置的漏洞数量  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'statisticsTypes' => 'setStatisticsTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * statisticsTypes  **参数解释**: 需要查询的漏洞统计数据类型列表，多个类型以逗号分隔。 **约束限制**: 必填 **取值范围**: - need_urgent_repair_num：需要紧急修复的漏洞数量 - unhandled_num：未完成修复的漏洞数量 - existed_vul_host_num：存在漏洞的服务器数量 - today_handled_num：今日处理的漏洞数量 - all_handled_num：累计处理的漏洞数量 - vul_library_info：漏洞库统计数据 - linux_vul_unhandled_num：未处置的Linux漏洞数量 - windows_vul_unhandled_num：未处置的Windows漏洞数量 - web_cms_vul_unhandled_num：未处置的Web CMS漏洞数量 - app_vul_unhandled_num：未处置的应用漏洞数量 - urgent_vul_unhandled_num：未处置的应急漏洞数量 - max_vul_handle_num：单次最大可处置的漏洞数量  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'statisticsTypes' => 'getStatisticsTypes'
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
        $this->container['statisticsTypes'] = isset($data['statisticsTypes']) ? $data['statisticsTypes'] : null;
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
        if ($this->container['statisticsTypes'] === null) {
            $invalidProperties[] = "'statisticsTypes' can't be null";
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
    * Gets statisticsTypes
    *  **参数解释**: 需要查询的漏洞统计数据类型列表，多个类型以逗号分隔。 **约束限制**: 必填 **取值范围**: - need_urgent_repair_num：需要紧急修复的漏洞数量 - unhandled_num：未完成修复的漏洞数量 - existed_vul_host_num：存在漏洞的服务器数量 - today_handled_num：今日处理的漏洞数量 - all_handled_num：累计处理的漏洞数量 - vul_library_info：漏洞库统计数据 - linux_vul_unhandled_num：未处置的Linux漏洞数量 - windows_vul_unhandled_num：未处置的Windows漏洞数量 - web_cms_vul_unhandled_num：未处置的Web CMS漏洞数量 - app_vul_unhandled_num：未处置的应用漏洞数量 - urgent_vul_unhandled_num：未处置的应急漏洞数量 - max_vul_handle_num：单次最大可处置的漏洞数量  **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getStatisticsTypes()
    {
        return $this->container['statisticsTypes'];
    }

    /**
    * Sets statisticsTypes
    *
    * @param string[] $statisticsTypes **参数解释**: 需要查询的漏洞统计数据类型列表，多个类型以逗号分隔。 **约束限制**: 必填 **取值范围**: - need_urgent_repair_num：需要紧急修复的漏洞数量 - unhandled_num：未完成修复的漏洞数量 - existed_vul_host_num：存在漏洞的服务器数量 - today_handled_num：今日处理的漏洞数量 - all_handled_num：累计处理的漏洞数量 - vul_library_info：漏洞库统计数据 - linux_vul_unhandled_num：未处置的Linux漏洞数量 - windows_vul_unhandled_num：未处置的Windows漏洞数量 - web_cms_vul_unhandled_num：未处置的Web CMS漏洞数量 - app_vul_unhandled_num：未处置的应用漏洞数量 - urgent_vul_unhandled_num：未处置的应急漏洞数量 - max_vul_handle_num：单次最大可处置的漏洞数量  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatisticsTypes($statisticsTypes)
    {
        $this->container['statisticsTypes'] = $statisticsTypes;
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

