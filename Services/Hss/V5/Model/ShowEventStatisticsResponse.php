<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskyHostNum  **参数解释**: 存在告警的服务器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * riskyContainerNum  **参数解释**: 存在告警的容器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * unhandledNum  **参数解释**: 待处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * processedNum  **参数解释**: 已处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * autoBlockedNum  **参数解释**: 自动处置告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * blockedIpNum  **参数解释**: 已拦截IP数量 **取值范围**: 最小值0，最大值9223372036854775807
    * isolatedFileNum  **参数解释**: 已隔离文件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * supportEs  **参数解释**: 是否支持ES查询 **取值范围**: - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskyHostNum' => 'int',
            'riskyContainerNum' => 'int',
            'unhandledNum' => 'int',
            'processedNum' => 'int',
            'autoBlockedNum' => 'int',
            'blockedIpNum' => 'int',
            'isolatedFileNum' => 'int',
            'supportEs' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskyHostNum  **参数解释**: 存在告警的服务器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * riskyContainerNum  **参数解释**: 存在告警的容器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * unhandledNum  **参数解释**: 待处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * processedNum  **参数解释**: 已处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * autoBlockedNum  **参数解释**: 自动处置告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * blockedIpNum  **参数解释**: 已拦截IP数量 **取值范围**: 最小值0，最大值9223372036854775807
    * isolatedFileNum  **参数解释**: 已隔离文件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * supportEs  **参数解释**: 是否支持ES查询 **取值范围**: - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskyHostNum' => 'int64',
        'riskyContainerNum' => 'int64',
        'unhandledNum' => 'int64',
        'processedNum' => 'int64',
        'autoBlockedNum' => 'int64',
        'blockedIpNum' => 'int64',
        'isolatedFileNum' => 'int64',
        'supportEs' => null
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
    * riskyHostNum  **参数解释**: 存在告警的服务器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * riskyContainerNum  **参数解释**: 存在告警的容器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * unhandledNum  **参数解释**: 待处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * processedNum  **参数解释**: 已处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * autoBlockedNum  **参数解释**: 自动处置告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * blockedIpNum  **参数解释**: 已拦截IP数量 **取值范围**: 最小值0，最大值9223372036854775807
    * isolatedFileNum  **参数解释**: 已隔离文件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * supportEs  **参数解释**: 是否支持ES查询 **取值范围**: - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskyHostNum' => 'risky_host_num',
            'riskyContainerNum' => 'risky_container_num',
            'unhandledNum' => 'unhandled_num',
            'processedNum' => 'processed_num',
            'autoBlockedNum' => 'auto_blocked_num',
            'blockedIpNum' => 'blocked_ip_num',
            'isolatedFileNum' => 'isolated_file_num',
            'supportEs' => 'support_ES'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskyHostNum  **参数解释**: 存在告警的服务器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * riskyContainerNum  **参数解释**: 存在告警的容器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * unhandledNum  **参数解释**: 待处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * processedNum  **参数解释**: 已处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * autoBlockedNum  **参数解释**: 自动处置告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * blockedIpNum  **参数解释**: 已拦截IP数量 **取值范围**: 最小值0，最大值9223372036854775807
    * isolatedFileNum  **参数解释**: 已隔离文件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * supportEs  **参数解释**: 是否支持ES查询 **取值范围**: - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'riskyHostNum' => 'setRiskyHostNum',
            'riskyContainerNum' => 'setRiskyContainerNum',
            'unhandledNum' => 'setUnhandledNum',
            'processedNum' => 'setProcessedNum',
            'autoBlockedNum' => 'setAutoBlockedNum',
            'blockedIpNum' => 'setBlockedIpNum',
            'isolatedFileNum' => 'setIsolatedFileNum',
            'supportEs' => 'setSupportEs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskyHostNum  **参数解释**: 存在告警的服务器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * riskyContainerNum  **参数解释**: 存在告警的容器数量 **取值范围**: 最小值0，最大值9223372036854775807
    * unhandledNum  **参数解释**: 待处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * processedNum  **参数解释**: 已处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * autoBlockedNum  **参数解释**: 自动处置告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * blockedIpNum  **参数解释**: 已拦截IP数量 **取值范围**: 最小值0，最大值9223372036854775807
    * isolatedFileNum  **参数解释**: 已隔离文件数量 **取值范围**: 最小值0，最大值9223372036854775807
    * supportEs  **参数解释**: 是否支持ES查询 **取值范围**: - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'riskyHostNum' => 'getRiskyHostNum',
            'riskyContainerNum' => 'getRiskyContainerNum',
            'unhandledNum' => 'getUnhandledNum',
            'processedNum' => 'getProcessedNum',
            'autoBlockedNum' => 'getAutoBlockedNum',
            'blockedIpNum' => 'getBlockedIpNum',
            'isolatedFileNum' => 'getIsolatedFileNum',
            'supportEs' => 'getSupportEs'
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
        $this->container['riskyHostNum'] = isset($data['riskyHostNum']) ? $data['riskyHostNum'] : null;
        $this->container['riskyContainerNum'] = isset($data['riskyContainerNum']) ? $data['riskyContainerNum'] : null;
        $this->container['unhandledNum'] = isset($data['unhandledNum']) ? $data['unhandledNum'] : null;
        $this->container['processedNum'] = isset($data['processedNum']) ? $data['processedNum'] : null;
        $this->container['autoBlockedNum'] = isset($data['autoBlockedNum']) ? $data['autoBlockedNum'] : null;
        $this->container['blockedIpNum'] = isset($data['blockedIpNum']) ? $data['blockedIpNum'] : null;
        $this->container['isolatedFileNum'] = isset($data['isolatedFileNum']) ? $data['isolatedFileNum'] : null;
        $this->container['supportEs'] = isset($data['supportEs']) ? $data['supportEs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['riskyHostNum']) && ($this->container['riskyHostNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'riskyHostNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['riskyHostNum']) && ($this->container['riskyHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskyHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskyContainerNum']) && ($this->container['riskyContainerNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'riskyContainerNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['riskyContainerNum']) && ($this->container['riskyContainerNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskyContainerNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unhandledNum']) && ($this->container['unhandledNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'unhandledNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['unhandledNum']) && ($this->container['unhandledNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unhandledNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processedNum']) && ($this->container['processedNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'processedNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['processedNum']) && ($this->container['processedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'processedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['autoBlockedNum']) && ($this->container['autoBlockedNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'autoBlockedNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['autoBlockedNum']) && ($this->container['autoBlockedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'autoBlockedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockedIpNum']) && ($this->container['blockedIpNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'blockedIpNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['blockedIpNum']) && ($this->container['blockedIpNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockedIpNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isolatedFileNum']) && ($this->container['isolatedFileNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'isolatedFileNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['isolatedFileNum']) && ($this->container['isolatedFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'isolatedFileNum', must be bigger than or equal to 0.";
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
    * Gets riskyHostNum
    *  **参数解释**: 存在告警的服务器数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getRiskyHostNum()
    {
        return $this->container['riskyHostNum'];
    }

    /**
    * Sets riskyHostNum
    *
    * @param int|null $riskyHostNum **参数解释**: 存在告警的服务器数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setRiskyHostNum($riskyHostNum)
    {
        $this->container['riskyHostNum'] = $riskyHostNum;
        return $this;
    }

    /**
    * Gets riskyContainerNum
    *  **参数解释**: 存在告警的容器数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getRiskyContainerNum()
    {
        return $this->container['riskyContainerNum'];
    }

    /**
    * Sets riskyContainerNum
    *
    * @param int|null $riskyContainerNum **参数解释**: 存在告警的容器数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setRiskyContainerNum($riskyContainerNum)
    {
        $this->container['riskyContainerNum'] = $riskyContainerNum;
        return $this;
    }

    /**
    * Gets unhandledNum
    *  **参数解释**: 待处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getUnhandledNum()
    {
        return $this->container['unhandledNum'];
    }

    /**
    * Sets unhandledNum
    *
    * @param int|null $unhandledNum **参数解释**: 待处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setUnhandledNum($unhandledNum)
    {
        $this->container['unhandledNum'] = $unhandledNum;
        return $this;
    }

    /**
    * Gets processedNum
    *  **参数解释**: 已处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getProcessedNum()
    {
        return $this->container['processedNum'];
    }

    /**
    * Sets processedNum
    *
    * @param int|null $processedNum **参数解释**: 已处理告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setProcessedNum($processedNum)
    {
        $this->container['processedNum'] = $processedNum;
        return $this;
    }

    /**
    * Gets autoBlockedNum
    *  **参数解释**: 自动处置告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getAutoBlockedNum()
    {
        return $this->container['autoBlockedNum'];
    }

    /**
    * Sets autoBlockedNum
    *
    * @param int|null $autoBlockedNum **参数解释**: 自动处置告警事件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setAutoBlockedNum($autoBlockedNum)
    {
        $this->container['autoBlockedNum'] = $autoBlockedNum;
        return $this;
    }

    /**
    * Gets blockedIpNum
    *  **参数解释**: 已拦截IP数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getBlockedIpNum()
    {
        return $this->container['blockedIpNum'];
    }

    /**
    * Sets blockedIpNum
    *
    * @param int|null $blockedIpNum **参数解释**: 已拦截IP数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setBlockedIpNum($blockedIpNum)
    {
        $this->container['blockedIpNum'] = $blockedIpNum;
        return $this;
    }

    /**
    * Gets isolatedFileNum
    *  **参数解释**: 已隔离文件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getIsolatedFileNum()
    {
        return $this->container['isolatedFileNum'];
    }

    /**
    * Sets isolatedFileNum
    *
    * @param int|null $isolatedFileNum **参数解释**: 已隔离文件数量 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setIsolatedFileNum($isolatedFileNum)
    {
        $this->container['isolatedFileNum'] = $isolatedFileNum;
        return $this;
    }

    /**
    * Gets supportEs
    *  **参数解释**: 是否支持ES查询 **取值范围**: - true：支持 - false：不支持
    *
    * @return bool|null
    */
    public function getSupportEs()
    {
        return $this->container['supportEs'];
    }

    /**
    * Sets supportEs
    *
    * @param bool|null $supportEs **参数解释**: 是否支持ES查询 **取值范围**: - true：支持 - false：不支持
    *
    * @return $this
    */
    public function setSupportEs($supportEs)
    {
        $this->container['supportEs'] = $supportEs;
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

