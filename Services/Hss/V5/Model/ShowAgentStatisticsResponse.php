<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgentStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgentStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * waitUpgradeNum  待升级数量
    * onlineNum  在线数量
    * notOnlineNum  不在线数量
    * offlineNum  离线数量
    * inclusterNum  集群内节点数
    * notInclusterNum  非集群内节点数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'waitUpgradeNum' => 'int',
            'onlineNum' => 'int',
            'notOnlineNum' => 'int',
            'offlineNum' => 'int',
            'inclusterNum' => 'int',
            'notInclusterNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * waitUpgradeNum  待升级数量
    * onlineNum  在线数量
    * notOnlineNum  不在线数量
    * offlineNum  离线数量
    * inclusterNum  集群内节点数
    * notInclusterNum  非集群内节点数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'waitUpgradeNum' => 'int32',
        'onlineNum' => 'int32',
        'notOnlineNum' => 'int32',
        'offlineNum' => 'int32',
        'inclusterNum' => 'int32',
        'notInclusterNum' => 'int32'
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
    * waitUpgradeNum  待升级数量
    * onlineNum  在线数量
    * notOnlineNum  不在线数量
    * offlineNum  离线数量
    * inclusterNum  集群内节点数
    * notInclusterNum  非集群内节点数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'waitUpgradeNum' => 'wait_upgrade_num',
            'onlineNum' => 'online_num',
            'notOnlineNum' => 'not_online_num',
            'offlineNum' => 'offline_num',
            'inclusterNum' => 'incluster_num',
            'notInclusterNum' => 'not_incluster_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * waitUpgradeNum  待升级数量
    * onlineNum  在线数量
    * notOnlineNum  不在线数量
    * offlineNum  离线数量
    * inclusterNum  集群内节点数
    * notInclusterNum  非集群内节点数
    *
    * @var string[]
    */
    protected static $setters = [
            'waitUpgradeNum' => 'setWaitUpgradeNum',
            'onlineNum' => 'setOnlineNum',
            'notOnlineNum' => 'setNotOnlineNum',
            'offlineNum' => 'setOfflineNum',
            'inclusterNum' => 'setInclusterNum',
            'notInclusterNum' => 'setNotInclusterNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * waitUpgradeNum  待升级数量
    * onlineNum  在线数量
    * notOnlineNum  不在线数量
    * offlineNum  离线数量
    * inclusterNum  集群内节点数
    * notInclusterNum  非集群内节点数
    *
    * @var string[]
    */
    protected static $getters = [
            'waitUpgradeNum' => 'getWaitUpgradeNum',
            'onlineNum' => 'getOnlineNum',
            'notOnlineNum' => 'getNotOnlineNum',
            'offlineNum' => 'getOfflineNum',
            'inclusterNum' => 'getInclusterNum',
            'notInclusterNum' => 'getNotInclusterNum'
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
        $this->container['waitUpgradeNum'] = isset($data['waitUpgradeNum']) ? $data['waitUpgradeNum'] : null;
        $this->container['onlineNum'] = isset($data['onlineNum']) ? $data['onlineNum'] : null;
        $this->container['notOnlineNum'] = isset($data['notOnlineNum']) ? $data['notOnlineNum'] : null;
        $this->container['offlineNum'] = isset($data['offlineNum']) ? $data['offlineNum'] : null;
        $this->container['inclusterNum'] = isset($data['inclusterNum']) ? $data['inclusterNum'] : null;
        $this->container['notInclusterNum'] = isset($data['notInclusterNum']) ? $data['notInclusterNum'] : null;
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
    * Gets waitUpgradeNum
    *  待升级数量
    *
    * @return int|null
    */
    public function getWaitUpgradeNum()
    {
        return $this->container['waitUpgradeNum'];
    }

    /**
    * Sets waitUpgradeNum
    *
    * @param int|null $waitUpgradeNum 待升级数量
    *
    * @return $this
    */
    public function setWaitUpgradeNum($waitUpgradeNum)
    {
        $this->container['waitUpgradeNum'] = $waitUpgradeNum;
        return $this;
    }

    /**
    * Gets onlineNum
    *  在线数量
    *
    * @return int|null
    */
    public function getOnlineNum()
    {
        return $this->container['onlineNum'];
    }

    /**
    * Sets onlineNum
    *
    * @param int|null $onlineNum 在线数量
    *
    * @return $this
    */
    public function setOnlineNum($onlineNum)
    {
        $this->container['onlineNum'] = $onlineNum;
        return $this;
    }

    /**
    * Gets notOnlineNum
    *  不在线数量
    *
    * @return int|null
    */
    public function getNotOnlineNum()
    {
        return $this->container['notOnlineNum'];
    }

    /**
    * Sets notOnlineNum
    *
    * @param int|null $notOnlineNum 不在线数量
    *
    * @return $this
    */
    public function setNotOnlineNum($notOnlineNum)
    {
        $this->container['notOnlineNum'] = $notOnlineNum;
        return $this;
    }

    /**
    * Gets offlineNum
    *  离线数量
    *
    * @return int|null
    */
    public function getOfflineNum()
    {
        return $this->container['offlineNum'];
    }

    /**
    * Sets offlineNum
    *
    * @param int|null $offlineNum 离线数量
    *
    * @return $this
    */
    public function setOfflineNum($offlineNum)
    {
        $this->container['offlineNum'] = $offlineNum;
        return $this;
    }

    /**
    * Gets inclusterNum
    *  集群内节点数
    *
    * @return int|null
    */
    public function getInclusterNum()
    {
        return $this->container['inclusterNum'];
    }

    /**
    * Sets inclusterNum
    *
    * @param int|null $inclusterNum 集群内节点数
    *
    * @return $this
    */
    public function setInclusterNum($inclusterNum)
    {
        $this->container['inclusterNum'] = $inclusterNum;
        return $this;
    }

    /**
    * Gets notInclusterNum
    *  非集群内节点数
    *
    * @return int|null
    */
    public function getNotInclusterNum()
    {
        return $this->container['notInclusterNum'];
    }

    /**
    * Sets notInclusterNum
    *
    * @param int|null $notInclusterNum 非集群内节点数
    *
    * @return $this
    */
    public function setNotInclusterNum($notInclusterNum)
    {
        $this->container['notInclusterNum'] = $notInclusterNum;
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

