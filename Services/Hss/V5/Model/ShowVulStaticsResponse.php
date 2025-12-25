<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulStaticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulStaticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * needUrgentRepair  **参数解释**: 需紧急修复的漏洞数 **取值范围**: 取值0-2147483647
    * unrepair  **参数解释**: 未完成修复的漏洞数 **取值范围**: 取值0-2147483647
    * existedVulHosts  **参数解释**: 存在漏洞的服务器数 **取值范围**: 取值0-2147483647
    * todayHandle  **参数解释**: 今日处理漏洞数 **取值范围**: 取值0-2147483647
    * allHandle  **参数解释**: 累计处理漏洞数 **取值范围**: 取值0-2147483647
    * supported  **参数解释**: 已支持漏洞数 **取值范围**: 取值0-2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'needUrgentRepair' => 'int',
            'unrepair' => 'int',
            'existedVulHosts' => 'int',
            'todayHandle' => 'int',
            'allHandle' => 'int',
            'supported' => 'int',
            'vulLibraryUpdateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * needUrgentRepair  **参数解释**: 需紧急修复的漏洞数 **取值范围**: 取值0-2147483647
    * unrepair  **参数解释**: 未完成修复的漏洞数 **取值范围**: 取值0-2147483647
    * existedVulHosts  **参数解释**: 存在漏洞的服务器数 **取值范围**: 取值0-2147483647
    * todayHandle  **参数解释**: 今日处理漏洞数 **取值范围**: 取值0-2147483647
    * allHandle  **参数解释**: 累计处理漏洞数 **取值范围**: 取值0-2147483647
    * supported  **参数解释**: 已支持漏洞数 **取值范围**: 取值0-2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'needUrgentRepair' => 'int32',
        'unrepair' => 'int32',
        'existedVulHosts' => 'int32',
        'todayHandle' => 'int32',
        'allHandle' => 'int32',
        'supported' => 'int32',
        'vulLibraryUpdateTime' => 'int64'
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
    * needUrgentRepair  **参数解释**: 需紧急修复的漏洞数 **取值范围**: 取值0-2147483647
    * unrepair  **参数解释**: 未完成修复的漏洞数 **取值范围**: 取值0-2147483647
    * existedVulHosts  **参数解释**: 存在漏洞的服务器数 **取值范围**: 取值0-2147483647
    * todayHandle  **参数解释**: 今日处理漏洞数 **取值范围**: 取值0-2147483647
    * allHandle  **参数解释**: 累计处理漏洞数 **取值范围**: 取值0-2147483647
    * supported  **参数解释**: 已支持漏洞数 **取值范围**: 取值0-2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'needUrgentRepair' => 'need_urgent_repair',
            'unrepair' => 'unrepair',
            'existedVulHosts' => 'existed_vul_hosts',
            'todayHandle' => 'today_handle',
            'allHandle' => 'all_handle',
            'supported' => 'supported',
            'vulLibraryUpdateTime' => 'vul_library_update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * needUrgentRepair  **参数解释**: 需紧急修复的漏洞数 **取值范围**: 取值0-2147483647
    * unrepair  **参数解释**: 未完成修复的漏洞数 **取值范围**: 取值0-2147483647
    * existedVulHosts  **参数解释**: 存在漏洞的服务器数 **取值范围**: 取值0-2147483647
    * todayHandle  **参数解释**: 今日处理漏洞数 **取值范围**: 取值0-2147483647
    * allHandle  **参数解释**: 累计处理漏洞数 **取值范围**: 取值0-2147483647
    * supported  **参数解释**: 已支持漏洞数 **取值范围**: 取值0-2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'needUrgentRepair' => 'setNeedUrgentRepair',
            'unrepair' => 'setUnrepair',
            'existedVulHosts' => 'setExistedVulHosts',
            'todayHandle' => 'setTodayHandle',
            'allHandle' => 'setAllHandle',
            'supported' => 'setSupported',
            'vulLibraryUpdateTime' => 'setVulLibraryUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * needUrgentRepair  **参数解释**: 需紧急修复的漏洞数 **取值范围**: 取值0-2147483647
    * unrepair  **参数解释**: 未完成修复的漏洞数 **取值范围**: 取值0-2147483647
    * existedVulHosts  **参数解释**: 存在漏洞的服务器数 **取值范围**: 取值0-2147483647
    * todayHandle  **参数解释**: 今日处理漏洞数 **取值范围**: 取值0-2147483647
    * allHandle  **参数解释**: 累计处理漏洞数 **取值范围**: 取值0-2147483647
    * supported  **参数解释**: 已支持漏洞数 **取值范围**: 取值0-2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'needUrgentRepair' => 'getNeedUrgentRepair',
            'unrepair' => 'getUnrepair',
            'existedVulHosts' => 'getExistedVulHosts',
            'todayHandle' => 'getTodayHandle',
            'allHandle' => 'getAllHandle',
            'supported' => 'getSupported',
            'vulLibraryUpdateTime' => 'getVulLibraryUpdateTime'
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
        $this->container['needUrgentRepair'] = isset($data['needUrgentRepair']) ? $data['needUrgentRepair'] : null;
        $this->container['unrepair'] = isset($data['unrepair']) ? $data['unrepair'] : null;
        $this->container['existedVulHosts'] = isset($data['existedVulHosts']) ? $data['existedVulHosts'] : null;
        $this->container['todayHandle'] = isset($data['todayHandle']) ? $data['todayHandle'] : null;
        $this->container['allHandle'] = isset($data['allHandle']) ? $data['allHandle'] : null;
        $this->container['supported'] = isset($data['supported']) ? $data['supported'] : null;
        $this->container['vulLibraryUpdateTime'] = isset($data['vulLibraryUpdateTime']) ? $data['vulLibraryUpdateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['needUrgentRepair']) && ($this->container['needUrgentRepair'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'needUrgentRepair', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['needUrgentRepair']) && ($this->container['needUrgentRepair'] < 0)) {
                $invalidProperties[] = "invalid value for 'needUrgentRepair', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unrepair']) && ($this->container['unrepair'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unrepair', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unrepair']) && ($this->container['unrepair'] < 0)) {
                $invalidProperties[] = "invalid value for 'unrepair', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['existedVulHosts']) && ($this->container['existedVulHosts'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'existedVulHosts', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['existedVulHosts']) && ($this->container['existedVulHosts'] < 0)) {
                $invalidProperties[] = "invalid value for 'existedVulHosts', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['todayHandle']) && ($this->container['todayHandle'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'todayHandle', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['todayHandle']) && ($this->container['todayHandle'] < 0)) {
                $invalidProperties[] = "invalid value for 'todayHandle', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allHandle']) && ($this->container['allHandle'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'allHandle', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['allHandle']) && ($this->container['allHandle'] < 0)) {
                $invalidProperties[] = "invalid value for 'allHandle', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['supported']) && ($this->container['supported'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'supported', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['supported']) && ($this->container['supported'] < 0)) {
                $invalidProperties[] = "invalid value for 'supported', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulLibraryUpdateTime']) && ($this->container['vulLibraryUpdateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'vulLibraryUpdateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['vulLibraryUpdateTime']) && ($this->container['vulLibraryUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulLibraryUpdateTime', must be bigger than or equal to 0.";
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
    * Gets needUrgentRepair
    *  **参数解释**: 需紧急修复的漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getNeedUrgentRepair()
    {
        return $this->container['needUrgentRepair'];
    }

    /**
    * Sets needUrgentRepair
    *
    * @param int|null $needUrgentRepair **参数解释**: 需紧急修复的漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setNeedUrgentRepair($needUrgentRepair)
    {
        $this->container['needUrgentRepair'] = $needUrgentRepair;
        return $this;
    }

    /**
    * Gets unrepair
    *  **参数解释**: 未完成修复的漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getUnrepair()
    {
        return $this->container['unrepair'];
    }

    /**
    * Sets unrepair
    *
    * @param int|null $unrepair **参数解释**: 未完成修复的漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setUnrepair($unrepair)
    {
        $this->container['unrepair'] = $unrepair;
        return $this;
    }

    /**
    * Gets existedVulHosts
    *  **参数解释**: 存在漏洞的服务器数 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getExistedVulHosts()
    {
        return $this->container['existedVulHosts'];
    }

    /**
    * Sets existedVulHosts
    *
    * @param int|null $existedVulHosts **参数解释**: 存在漏洞的服务器数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setExistedVulHosts($existedVulHosts)
    {
        $this->container['existedVulHosts'] = $existedVulHosts;
        return $this;
    }

    /**
    * Gets todayHandle
    *  **参数解释**: 今日处理漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getTodayHandle()
    {
        return $this->container['todayHandle'];
    }

    /**
    * Sets todayHandle
    *
    * @param int|null $todayHandle **参数解释**: 今日处理漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setTodayHandle($todayHandle)
    {
        $this->container['todayHandle'] = $todayHandle;
        return $this;
    }

    /**
    * Gets allHandle
    *  **参数解释**: 累计处理漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getAllHandle()
    {
        return $this->container['allHandle'];
    }

    /**
    * Sets allHandle
    *
    * @param int|null $allHandle **参数解释**: 累计处理漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setAllHandle($allHandle)
    {
        $this->container['allHandle'] = $allHandle;
        return $this;
    }

    /**
    * Gets supported
    *  **参数解释**: 已支持漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getSupported()
    {
        return $this->container['supported'];
    }

    /**
    * Sets supported
    *
    * @param int|null $supported **参数解释**: 已支持漏洞数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setSupported($supported)
    {
        $this->container['supported'] = $supported;
        return $this;
    }

    /**
    * Gets vulLibraryUpdateTime
    *  **参数解释**: 漏洞库更新时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getVulLibraryUpdateTime()
    {
        return $this->container['vulLibraryUpdateTime'];
    }

    /**
    * Sets vulLibraryUpdateTime
    *
    * @param int|null $vulLibraryUpdateTime **参数解释**: 漏洞库更新时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setVulLibraryUpdateTime($vulLibraryUpdateTime)
    {
        $this->container['vulLibraryUpdateTime'] = $vulLibraryUpdateTime;
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

