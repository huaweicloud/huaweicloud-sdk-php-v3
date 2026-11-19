<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScansInfoRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScansInfoRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulnerabilitiesStatisticsInfoList  **参数解释**： 漏洞统计列表 **取值范围**： 0-200个VulnerabilitiesStatisticsInfo对象
    * accountChangeHistoryInfoList  **参数解释**： 资产账号变动记录列表 **取值范围**： 0-200个AccountChangeHistoryInfo对象
    * dangerPortsInfoList  **参数解释**： 危险开放端口列表 **取值范围**： 0-200个DangerPortsInfo对象
    * weakPwdInfoList  **参数解释**： 弱口令列表 **取值范围**： 0-200个WeakPwdInfo对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulnerabilitiesStatisticsInfoList' => 'object[]',
            'accountChangeHistoryInfoList' => 'object[]',
            'dangerPortsInfoList' => 'object[]',
            'weakPwdInfoList' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulnerabilitiesStatisticsInfoList  **参数解释**： 漏洞统计列表 **取值范围**： 0-200个VulnerabilitiesStatisticsInfo对象
    * accountChangeHistoryInfoList  **参数解释**： 资产账号变动记录列表 **取值范围**： 0-200个AccountChangeHistoryInfo对象
    * dangerPortsInfoList  **参数解释**： 危险开放端口列表 **取值范围**： 0-200个DangerPortsInfo对象
    * weakPwdInfoList  **参数解释**： 弱口令列表 **取值范围**： 0-200个WeakPwdInfo对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulnerabilitiesStatisticsInfoList' => null,
        'accountChangeHistoryInfoList' => null,
        'dangerPortsInfoList' => null,
        'weakPwdInfoList' => null
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
    * vulnerabilitiesStatisticsInfoList  **参数解释**： 漏洞统计列表 **取值范围**： 0-200个VulnerabilitiesStatisticsInfo对象
    * accountChangeHistoryInfoList  **参数解释**： 资产账号变动记录列表 **取值范围**： 0-200个AccountChangeHistoryInfo对象
    * dangerPortsInfoList  **参数解释**： 危险开放端口列表 **取值范围**： 0-200个DangerPortsInfo对象
    * weakPwdInfoList  **参数解释**： 弱口令列表 **取值范围**： 0-200个WeakPwdInfo对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulnerabilitiesStatisticsInfoList' => 'vulnerabilities_statistics_info_list',
            'accountChangeHistoryInfoList' => 'account_change_history_info_list',
            'dangerPortsInfoList' => 'danger_ports_info_list',
            'weakPwdInfoList' => 'weak_pwd_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulnerabilitiesStatisticsInfoList  **参数解释**： 漏洞统计列表 **取值范围**： 0-200个VulnerabilitiesStatisticsInfo对象
    * accountChangeHistoryInfoList  **参数解释**： 资产账号变动记录列表 **取值范围**： 0-200个AccountChangeHistoryInfo对象
    * dangerPortsInfoList  **参数解释**： 危险开放端口列表 **取值范围**： 0-200个DangerPortsInfo对象
    * weakPwdInfoList  **参数解释**： 弱口令列表 **取值范围**： 0-200个WeakPwdInfo对象
    *
    * @var string[]
    */
    protected static $setters = [
            'vulnerabilitiesStatisticsInfoList' => 'setVulnerabilitiesStatisticsInfoList',
            'accountChangeHistoryInfoList' => 'setAccountChangeHistoryInfoList',
            'dangerPortsInfoList' => 'setDangerPortsInfoList',
            'weakPwdInfoList' => 'setWeakPwdInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulnerabilitiesStatisticsInfoList  **参数解释**： 漏洞统计列表 **取值范围**： 0-200个VulnerabilitiesStatisticsInfo对象
    * accountChangeHistoryInfoList  **参数解释**： 资产账号变动记录列表 **取值范围**： 0-200个AccountChangeHistoryInfo对象
    * dangerPortsInfoList  **参数解释**： 危险开放端口列表 **取值范围**： 0-200个DangerPortsInfo对象
    * weakPwdInfoList  **参数解释**： 弱口令列表 **取值范围**： 0-200个WeakPwdInfo对象
    *
    * @var string[]
    */
    protected static $getters = [
            'vulnerabilitiesStatisticsInfoList' => 'getVulnerabilitiesStatisticsInfoList',
            'accountChangeHistoryInfoList' => 'getAccountChangeHistoryInfoList',
            'dangerPortsInfoList' => 'getDangerPortsInfoList',
            'weakPwdInfoList' => 'getWeakPwdInfoList'
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
        $this->container['vulnerabilitiesStatisticsInfoList'] = isset($data['vulnerabilitiesStatisticsInfoList']) ? $data['vulnerabilitiesStatisticsInfoList'] : null;
        $this->container['accountChangeHistoryInfoList'] = isset($data['accountChangeHistoryInfoList']) ? $data['accountChangeHistoryInfoList'] : null;
        $this->container['dangerPortsInfoList'] = isset($data['dangerPortsInfoList']) ? $data['dangerPortsInfoList'] : null;
        $this->container['weakPwdInfoList'] = isset($data['weakPwdInfoList']) ? $data['weakPwdInfoList'] : null;
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
    * Gets vulnerabilitiesStatisticsInfoList
    *  **参数解释**： 漏洞统计列表 **取值范围**： 0-200个VulnerabilitiesStatisticsInfo对象
    *
    * @return object[]|null
    */
    public function getVulnerabilitiesStatisticsInfoList()
    {
        return $this->container['vulnerabilitiesStatisticsInfoList'];
    }

    /**
    * Sets vulnerabilitiesStatisticsInfoList
    *
    * @param object[]|null $vulnerabilitiesStatisticsInfoList **参数解释**： 漏洞统计列表 **取值范围**： 0-200个VulnerabilitiesStatisticsInfo对象
    *
    * @return $this
    */
    public function setVulnerabilitiesStatisticsInfoList($vulnerabilitiesStatisticsInfoList)
    {
        $this->container['vulnerabilitiesStatisticsInfoList'] = $vulnerabilitiesStatisticsInfoList;
        return $this;
    }

    /**
    * Gets accountChangeHistoryInfoList
    *  **参数解释**： 资产账号变动记录列表 **取值范围**： 0-200个AccountChangeHistoryInfo对象
    *
    * @return object[]|null
    */
    public function getAccountChangeHistoryInfoList()
    {
        return $this->container['accountChangeHistoryInfoList'];
    }

    /**
    * Sets accountChangeHistoryInfoList
    *
    * @param object[]|null $accountChangeHistoryInfoList **参数解释**： 资产账号变动记录列表 **取值范围**： 0-200个AccountChangeHistoryInfo对象
    *
    * @return $this
    */
    public function setAccountChangeHistoryInfoList($accountChangeHistoryInfoList)
    {
        $this->container['accountChangeHistoryInfoList'] = $accountChangeHistoryInfoList;
        return $this;
    }

    /**
    * Gets dangerPortsInfoList
    *  **参数解释**： 危险开放端口列表 **取值范围**： 0-200个DangerPortsInfo对象
    *
    * @return object[]|null
    */
    public function getDangerPortsInfoList()
    {
        return $this->container['dangerPortsInfoList'];
    }

    /**
    * Sets dangerPortsInfoList
    *
    * @param object[]|null $dangerPortsInfoList **参数解释**： 危险开放端口列表 **取值范围**： 0-200个DangerPortsInfo对象
    *
    * @return $this
    */
    public function setDangerPortsInfoList($dangerPortsInfoList)
    {
        $this->container['dangerPortsInfoList'] = $dangerPortsInfoList;
        return $this;
    }

    /**
    * Gets weakPwdInfoList
    *  **参数解释**： 弱口令列表 **取值范围**： 0-200个WeakPwdInfo对象
    *
    * @return object[]|null
    */
    public function getWeakPwdInfoList()
    {
        return $this->container['weakPwdInfoList'];
    }

    /**
    * Sets weakPwdInfoList
    *
    * @param object[]|null $weakPwdInfoList **参数解释**： 弱口令列表 **取值范围**： 0-200个WeakPwdInfo对象
    *
    * @return $this
    */
    public function setWeakPwdInfoList($weakPwdInfoList)
    {
        $this->container['weakPwdInfoList'] = $weakPwdInfoList;
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

