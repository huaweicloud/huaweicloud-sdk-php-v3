<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckScheduleTaskExistRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckScheduleTaskExistRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduleType  **参数解释**： 定时任务类型。  **约束限制**： 不涉及。  **取值范围**：   - PROXY_VERSION_UPGRADE：表示升级数据库代理的内核小版本。   - VERSION_UPGRADE：表示升级实例的内核小版本。   - RESIZE_FLAVOR：表示实例规格变更。   - REBOOT_NODE：表示重启节点。   - REBOOT_INSTANCE：表示重启实例。  **默认取值**：   不涉及。
    * proxyId  **参数解释**： 数据库代理ID。 获取方法请参见[查询数据库代理信息列表](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlProxyList.html)。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduleType' => 'string',
            'proxyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduleType  **参数解释**： 定时任务类型。  **约束限制**： 不涉及。  **取值范围**：   - PROXY_VERSION_UPGRADE：表示升级数据库代理的内核小版本。   - VERSION_UPGRADE：表示升级实例的内核小版本。   - RESIZE_FLAVOR：表示实例规格变更。   - REBOOT_NODE：表示重启节点。   - REBOOT_INSTANCE：表示重启实例。  **默认取值**：   不涉及。
    * proxyId  **参数解释**： 数据库代理ID。 获取方法请参见[查询数据库代理信息列表](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlProxyList.html)。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduleType' => null,
        'proxyId' => null
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
    * scheduleType  **参数解释**： 定时任务类型。  **约束限制**： 不涉及。  **取值范围**：   - PROXY_VERSION_UPGRADE：表示升级数据库代理的内核小版本。   - VERSION_UPGRADE：表示升级实例的内核小版本。   - RESIZE_FLAVOR：表示实例规格变更。   - REBOOT_NODE：表示重启节点。   - REBOOT_INSTANCE：表示重启实例。  **默认取值**：   不涉及。
    * proxyId  **参数解释**： 数据库代理ID。 获取方法请参见[查询数据库代理信息列表](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlProxyList.html)。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduleType' => 'schedule_type',
            'proxyId' => 'proxy_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduleType  **参数解释**： 定时任务类型。  **约束限制**： 不涉及。  **取值范围**：   - PROXY_VERSION_UPGRADE：表示升级数据库代理的内核小版本。   - VERSION_UPGRADE：表示升级实例的内核小版本。   - RESIZE_FLAVOR：表示实例规格变更。   - REBOOT_NODE：表示重启节点。   - REBOOT_INSTANCE：表示重启实例。  **默认取值**：   不涉及。
    * proxyId  **参数解释**： 数据库代理ID。 获取方法请参见[查询数据库代理信息列表](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlProxyList.html)。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduleType' => 'setScheduleType',
            'proxyId' => 'setProxyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduleType  **参数解释**： 定时任务类型。  **约束限制**： 不涉及。  **取值范围**：   - PROXY_VERSION_UPGRADE：表示升级数据库代理的内核小版本。   - VERSION_UPGRADE：表示升级实例的内核小版本。   - RESIZE_FLAVOR：表示实例规格变更。   - REBOOT_NODE：表示重启节点。   - REBOOT_INSTANCE：表示重启实例。  **默认取值**：   不涉及。
    * proxyId  **参数解释**： 数据库代理ID。 获取方法请参见[查询数据库代理信息列表](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlProxyList.html)。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduleType' => 'getScheduleType',
            'proxyId' => 'getProxyId'
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
        $this->container['scheduleType'] = isset($data['scheduleType']) ? $data['scheduleType'] : null;
        $this->container['proxyId'] = isset($data['proxyId']) ? $data['proxyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scheduleType'] === null) {
            $invalidProperties[] = "'scheduleType' can't be null";
        }
            if (!is_null($this->container['proxyId']) && (mb_strlen($this->container['proxyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'proxyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['proxyId']) && (mb_strlen($this->container['proxyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'proxyId', the character length must be bigger than or equal to 36.";
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
    * Gets scheduleType
    *  **参数解释**： 定时任务类型。  **约束限制**： 不涉及。  **取值范围**：   - PROXY_VERSION_UPGRADE：表示升级数据库代理的内核小版本。   - VERSION_UPGRADE：表示升级实例的内核小版本。   - RESIZE_FLAVOR：表示实例规格变更。   - REBOOT_NODE：表示重启节点。   - REBOOT_INSTANCE：表示重启实例。  **默认取值**：   不涉及。
    *
    * @return string
    */
    public function getScheduleType()
    {
        return $this->container['scheduleType'];
    }

    /**
    * Sets scheduleType
    *
    * @param string $scheduleType **参数解释**： 定时任务类型。  **约束限制**： 不涉及。  **取值范围**：   - PROXY_VERSION_UPGRADE：表示升级数据库代理的内核小版本。   - VERSION_UPGRADE：表示升级实例的内核小版本。   - RESIZE_FLAVOR：表示实例规格变更。   - REBOOT_NODE：表示重启节点。   - REBOOT_INSTANCE：表示重启实例。  **默认取值**：   不涉及。
    *
    * @return $this
    */
    public function setScheduleType($scheduleType)
    {
        $this->container['scheduleType'] = $scheduleType;
        return $this;
    }

    /**
    * Gets proxyId
    *  **参数解释**： 数据库代理ID。 获取方法请参见[查询数据库代理信息列表](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlProxyList.html)。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProxyId()
    {
        return $this->container['proxyId'];
    }

    /**
    * Sets proxyId
    *
    * @param string|null $proxyId **参数解释**： 数据库代理ID。 获取方法请参见[查询数据库代理信息列表](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlProxyList.html)。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProxyId($proxyId)
    {
        $this->container['proxyId'] = $proxyId;
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

