<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksRequestBodyClusterScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksRequestBody_cluster_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanTypeList  **参数解释**: 任务扫描项类型列表，若列表不为空则只有扫描了列表中所有扫描项的任务才会被筛选出来；列表为空则不对扫描项类型进行筛选 **约束限制**: 不涉及 **取值范围**: - cluster_vul：集群漏洞 - risk_assessment：风险评估 - benchmark：安全合规  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanTypeList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanTypeList  **参数解释**: 任务扫描项类型列表，若列表不为空则只有扫描了列表中所有扫描项的任务才会被筛选出来；列表为空则不对扫描项类型进行筛选 **约束限制**: 不涉及 **取值范围**: - cluster_vul：集群漏洞 - risk_assessment：风险评估 - benchmark：安全合规  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanTypeList' => null
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
    * scanTypeList  **参数解释**: 任务扫描项类型列表，若列表不为空则只有扫描了列表中所有扫描项的任务才会被筛选出来；列表为空则不对扫描项类型进行筛选 **约束限制**: 不涉及 **取值范围**: - cluster_vul：集群漏洞 - risk_assessment：风险评估 - benchmark：安全合规  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanTypeList' => 'scan_type_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanTypeList  **参数解释**: 任务扫描项类型列表，若列表不为空则只有扫描了列表中所有扫描项的任务才会被筛选出来；列表为空则不对扫描项类型进行筛选 **约束限制**: 不涉及 **取值范围**: - cluster_vul：集群漏洞 - risk_assessment：风险评估 - benchmark：安全合规  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'scanTypeList' => 'setScanTypeList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanTypeList  **参数解释**: 任务扫描项类型列表，若列表不为空则只有扫描了列表中所有扫描项的任务才会被筛选出来；列表为空则不对扫描项类型进行筛选 **约束限制**: 不涉及 **取值范围**: - cluster_vul：集群漏洞 - risk_assessment：风险评估 - benchmark：安全合规  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'scanTypeList' => 'getScanTypeList'
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
        $this->container['scanTypeList'] = isset($data['scanTypeList']) ? $data['scanTypeList'] : null;
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
    * Gets scanTypeList
    *  **参数解释**: 任务扫描项类型列表，若列表不为空则只有扫描了列表中所有扫描项的任务才会被筛选出来；列表为空则不对扫描项类型进行筛选 **约束限制**: 不涉及 **取值范围**: - cluster_vul：集群漏洞 - risk_assessment：风险评估 - benchmark：安全合规  **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getScanTypeList()
    {
        return $this->container['scanTypeList'];
    }

    /**
    * Sets scanTypeList
    *
    * @param string[]|null $scanTypeList **参数解释**: 任务扫描项类型列表，若列表不为空则只有扫描了列表中所有扫描项的任务才会被筛选出来；列表为空则不对扫描项类型进行筛选 **约束限制**: 不涉及 **取值范围**: - cluster_vul：集群漏洞 - risk_assessment：风险评估 - benchmark：安全合规  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanTypeList($scanTypeList)
    {
        $this->container['scanTypeList'] = $scanTypeList;
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

