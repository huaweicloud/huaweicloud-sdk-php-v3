<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackupsStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackupsStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * countBackedupServer  **参数解释**： 已备份服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countRestoredTask  **参数解释**： 已恢复的备份任务数量 **取值范围**： 最小值0，最大值2147483647
    * countUsedCapacity  **参数解释**： 已使用容量 **取值范围**： 最小值0，最大值2147483647
    * countTotalCapacity  **参数解释**： 总容量 **取值范围**： 最小值0，最大值2147483647
    * vaultStatus  **参数解释**： 存储库状态 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'countBackedupServer' => 'int',
            'countRestoredTask' => 'int',
            'countUsedCapacity' => 'int',
            'countTotalCapacity' => 'int',
            'vaultStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * countBackedupServer  **参数解释**： 已备份服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countRestoredTask  **参数解释**： 已恢复的备份任务数量 **取值范围**： 最小值0，最大值2147483647
    * countUsedCapacity  **参数解释**： 已使用容量 **取值范围**： 最小值0，最大值2147483647
    * countTotalCapacity  **参数解释**： 总容量 **取值范围**： 最小值0，最大值2147483647
    * vaultStatus  **参数解释**： 存储库状态 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'countBackedupServer' => 'int32',
        'countRestoredTask' => 'int32',
        'countUsedCapacity' => 'int32',
        'countTotalCapacity' => 'int32',
        'vaultStatus' => null
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
    * countBackedupServer  **参数解释**： 已备份服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countRestoredTask  **参数解释**： 已恢复的备份任务数量 **取值范围**： 最小值0，最大值2147483647
    * countUsedCapacity  **参数解释**： 已使用容量 **取值范围**： 最小值0，最大值2147483647
    * countTotalCapacity  **参数解释**： 总容量 **取值范围**： 最小值0，最大值2147483647
    * vaultStatus  **参数解释**： 存储库状态 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'countBackedupServer' => 'count_backedup_server',
            'countRestoredTask' => 'count_restored_task',
            'countUsedCapacity' => 'count_used_capacity',
            'countTotalCapacity' => 'count_total_capacity',
            'vaultStatus' => 'vault_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * countBackedupServer  **参数解释**： 已备份服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countRestoredTask  **参数解释**： 已恢复的备份任务数量 **取值范围**： 最小值0，最大值2147483647
    * countUsedCapacity  **参数解释**： 已使用容量 **取值范围**： 最小值0，最大值2147483647
    * countTotalCapacity  **参数解释**： 总容量 **取值范围**： 最小值0，最大值2147483647
    * vaultStatus  **参数解释**： 存储库状态 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $setters = [
            'countBackedupServer' => 'setCountBackedupServer',
            'countRestoredTask' => 'setCountRestoredTask',
            'countUsedCapacity' => 'setCountUsedCapacity',
            'countTotalCapacity' => 'setCountTotalCapacity',
            'vaultStatus' => 'setVaultStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * countBackedupServer  **参数解释**： 已备份服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countRestoredTask  **参数解释**： 已恢复的备份任务数量 **取值范围**： 最小值0，最大值2147483647
    * countUsedCapacity  **参数解释**： 已使用容量 **取值范围**： 最小值0，最大值2147483647
    * countTotalCapacity  **参数解释**： 总容量 **取值范围**： 最小值0，最大值2147483647
    * vaultStatus  **参数解释**： 存储库状态 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $getters = [
            'countBackedupServer' => 'getCountBackedupServer',
            'countRestoredTask' => 'getCountRestoredTask',
            'countUsedCapacity' => 'getCountUsedCapacity',
            'countTotalCapacity' => 'getCountTotalCapacity',
            'vaultStatus' => 'getVaultStatus'
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
        $this->container['countBackedupServer'] = isset($data['countBackedupServer']) ? $data['countBackedupServer'] : null;
        $this->container['countRestoredTask'] = isset($data['countRestoredTask']) ? $data['countRestoredTask'] : null;
        $this->container['countUsedCapacity'] = isset($data['countUsedCapacity']) ? $data['countUsedCapacity'] : null;
        $this->container['countTotalCapacity'] = isset($data['countTotalCapacity']) ? $data['countTotalCapacity'] : null;
        $this->container['vaultStatus'] = isset($data['vaultStatus']) ? $data['vaultStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['countBackedupServer']) && ($this->container['countBackedupServer'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'countBackedupServer', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['countBackedupServer']) && ($this->container['countBackedupServer'] < 0)) {
                $invalidProperties[] = "invalid value for 'countBackedupServer', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countRestoredTask']) && ($this->container['countRestoredTask'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'countRestoredTask', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['countRestoredTask']) && ($this->container['countRestoredTask'] < 0)) {
                $invalidProperties[] = "invalid value for 'countRestoredTask', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countUsedCapacity']) && ($this->container['countUsedCapacity'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'countUsedCapacity', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['countUsedCapacity']) && ($this->container['countUsedCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'countUsedCapacity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countTotalCapacity']) && ($this->container['countTotalCapacity'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'countTotalCapacity', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['countTotalCapacity']) && ($this->container['countTotalCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'countTotalCapacity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultStatus']) && (mb_strlen($this->container['vaultStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'vaultStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vaultStatus']) && (mb_strlen($this->container['vaultStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultStatus', the character length must be bigger than or equal to 0.";
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
    * Gets countBackedupServer
    *  **参数解释**： 已备份服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCountBackedupServer()
    {
        return $this->container['countBackedupServer'];
    }

    /**
    * Sets countBackedupServer
    *
    * @param int|null $countBackedupServer **参数解释**： 已备份服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCountBackedupServer($countBackedupServer)
    {
        $this->container['countBackedupServer'] = $countBackedupServer;
        return $this;
    }

    /**
    * Gets countRestoredTask
    *  **参数解释**： 已恢复的备份任务数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCountRestoredTask()
    {
        return $this->container['countRestoredTask'];
    }

    /**
    * Sets countRestoredTask
    *
    * @param int|null $countRestoredTask **参数解释**： 已恢复的备份任务数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCountRestoredTask($countRestoredTask)
    {
        $this->container['countRestoredTask'] = $countRestoredTask;
        return $this;
    }

    /**
    * Gets countUsedCapacity
    *  **参数解释**： 已使用容量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCountUsedCapacity()
    {
        return $this->container['countUsedCapacity'];
    }

    /**
    * Sets countUsedCapacity
    *
    * @param int|null $countUsedCapacity **参数解释**： 已使用容量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCountUsedCapacity($countUsedCapacity)
    {
        $this->container['countUsedCapacity'] = $countUsedCapacity;
        return $this;
    }

    /**
    * Gets countTotalCapacity
    *  **参数解释**： 总容量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCountTotalCapacity()
    {
        return $this->container['countTotalCapacity'];
    }

    /**
    * Sets countTotalCapacity
    *
    * @param int|null $countTotalCapacity **参数解释**： 总容量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCountTotalCapacity($countTotalCapacity)
    {
        $this->container['countTotalCapacity'] = $countTotalCapacity;
        return $this;
    }

    /**
    * Gets vaultStatus
    *  **参数解释**： 存储库状态 **取值范围**： 字符长度0-64位
    *
    * @return string|null
    */
    public function getVaultStatus()
    {
        return $this->container['vaultStatus'];
    }

    /**
    * Sets vaultStatus
    *
    * @param string|null $vaultStatus **参数解释**： 存储库状态 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setVaultStatus($vaultStatus)
    {
        $this->container['vaultStatus'] = $vaultStatus;
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

