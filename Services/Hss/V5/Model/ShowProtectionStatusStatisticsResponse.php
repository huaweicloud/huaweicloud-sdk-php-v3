<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProtectionStatusStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProtectionStatusStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulScanTime  **参数解释**: 漏洞扫描时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * avUpgradeTime  **参数解释**: 病毒库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * protectionEnabledList  **参数解释**: 已开启防护的类型列表 **取值范围**: 0-200个ProtectionEnabledTypes对象
    * dataList  **参数解释**: 防护状态统计列表 **取值范围**: 0-200个ProtectStatusStatistics对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulScanTime' => 'int',
            'avUpgradeTime' => 'int',
            'protectionEnabledList' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectionEnabledTypes[]',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectStatusStatistics[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulScanTime  **参数解释**: 漏洞扫描时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * avUpgradeTime  **参数解释**: 病毒库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * protectionEnabledList  **参数解释**: 已开启防护的类型列表 **取值范围**: 0-200个ProtectionEnabledTypes对象
    * dataList  **参数解释**: 防护状态统计列表 **取值范围**: 0-200个ProtectStatusStatistics对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulScanTime' => 'int64',
        'avUpgradeTime' => 'int64',
        'protectionEnabledList' => null,
        'dataList' => null
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
    * vulScanTime  **参数解释**: 漏洞扫描时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * avUpgradeTime  **参数解释**: 病毒库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * protectionEnabledList  **参数解释**: 已开启防护的类型列表 **取值范围**: 0-200个ProtectionEnabledTypes对象
    * dataList  **参数解释**: 防护状态统计列表 **取值范围**: 0-200个ProtectStatusStatistics对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulScanTime' => 'vul_scan_time',
            'avUpgradeTime' => 'av_upgrade_time',
            'protectionEnabledList' => 'protection_enabled_list',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulScanTime  **参数解释**: 漏洞扫描时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * avUpgradeTime  **参数解释**: 病毒库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * protectionEnabledList  **参数解释**: 已开启防护的类型列表 **取值范围**: 0-200个ProtectionEnabledTypes对象
    * dataList  **参数解释**: 防护状态统计列表 **取值范围**: 0-200个ProtectStatusStatistics对象
    *
    * @var string[]
    */
    protected static $setters = [
            'vulScanTime' => 'setVulScanTime',
            'avUpgradeTime' => 'setAvUpgradeTime',
            'protectionEnabledList' => 'setProtectionEnabledList',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulScanTime  **参数解释**: 漏洞扫描时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * avUpgradeTime  **参数解释**: 病毒库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * protectionEnabledList  **参数解释**: 已开启防护的类型列表 **取值范围**: 0-200个ProtectionEnabledTypes对象
    * dataList  **参数解释**: 防护状态统计列表 **取值范围**: 0-200个ProtectStatusStatistics对象
    *
    * @var string[]
    */
    protected static $getters = [
            'vulScanTime' => 'getVulScanTime',
            'avUpgradeTime' => 'getAvUpgradeTime',
            'protectionEnabledList' => 'getProtectionEnabledList',
            'dataList' => 'getDataList'
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
        $this->container['vulScanTime'] = isset($data['vulScanTime']) ? $data['vulScanTime'] : null;
        $this->container['avUpgradeTime'] = isset($data['avUpgradeTime']) ? $data['avUpgradeTime'] : null;
        $this->container['protectionEnabledList'] = isset($data['protectionEnabledList']) ? $data['protectionEnabledList'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
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
    * Gets vulScanTime
    *  **参数解释**: 漏洞扫描时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getVulScanTime()
    {
        return $this->container['vulScanTime'];
    }

    /**
    * Sets vulScanTime
    *
    * @param int|null $vulScanTime **参数解释**: 漏洞扫描时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setVulScanTime($vulScanTime)
    {
        $this->container['vulScanTime'] = $vulScanTime;
        return $this;
    }

    /**
    * Gets avUpgradeTime
    *  **参数解释**: 病毒库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getAvUpgradeTime()
    {
        return $this->container['avUpgradeTime'];
    }

    /**
    * Sets avUpgradeTime
    *
    * @param int|null $avUpgradeTime **参数解释**: 病毒库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setAvUpgradeTime($avUpgradeTime)
    {
        $this->container['avUpgradeTime'] = $avUpgradeTime;
        return $this;
    }

    /**
    * Gets protectionEnabledList
    *  **参数解释**: 已开启防护的类型列表 **取值范围**: 0-200个ProtectionEnabledTypes对象
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectionEnabledTypes[]|null
    */
    public function getProtectionEnabledList()
    {
        return $this->container['protectionEnabledList'];
    }

    /**
    * Sets protectionEnabledList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectionEnabledTypes[]|null $protectionEnabledList **参数解释**: 已开启防护的类型列表 **取值范围**: 0-200个ProtectionEnabledTypes对象
    *
    * @return $this
    */
    public function setProtectionEnabledList($protectionEnabledList)
    {
        $this->container['protectionEnabledList'] = $protectionEnabledList;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: 防护状态统计列表 **取值范围**: 0-200个ProtectStatusStatistics对象
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectStatusStatistics[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectStatusStatistics[]|null $dataList **参数解释**: 防护状态统计列表 **取值范围**: 0-200个ProtectStatusStatistics对象
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

