<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceProcessesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceProcessesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataSyncTime  同步时间
    * total  总数
    * data  数据列表
    * userInfoList  用户列表
    * dbInfoList  数据库列表
    * hostInfoList  来源IP列表
    * stateInfoList  状态列表
    * commandInfoList  命令列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataSyncTime' => 'int',
            'total' => 'int',
            'data' => 'object[]',
            'userInfoList' => 'string[]',
            'dbInfoList' => 'string[]',
            'hostInfoList' => 'string[]',
            'stateInfoList' => 'string[]',
            'commandInfoList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataSyncTime  同步时间
    * total  总数
    * data  数据列表
    * userInfoList  用户列表
    * dbInfoList  数据库列表
    * hostInfoList  来源IP列表
    * stateInfoList  状态列表
    * commandInfoList  命令列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataSyncTime' => 'int64',
        'total' => 'int64',
        'data' => null,
        'userInfoList' => null,
        'dbInfoList' => null,
        'hostInfoList' => null,
        'stateInfoList' => null,
        'commandInfoList' => null
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
    * dataSyncTime  同步时间
    * total  总数
    * data  数据列表
    * userInfoList  用户列表
    * dbInfoList  数据库列表
    * hostInfoList  来源IP列表
    * stateInfoList  状态列表
    * commandInfoList  命令列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataSyncTime' => 'data_sync_time',
            'total' => 'total',
            'data' => 'data',
            'userInfoList' => 'user_info_list',
            'dbInfoList' => 'db_info_list',
            'hostInfoList' => 'host_info_list',
            'stateInfoList' => 'state_info_list',
            'commandInfoList' => 'command_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataSyncTime  同步时间
    * total  总数
    * data  数据列表
    * userInfoList  用户列表
    * dbInfoList  数据库列表
    * hostInfoList  来源IP列表
    * stateInfoList  状态列表
    * commandInfoList  命令列表
    *
    * @var string[]
    */
    protected static $setters = [
            'dataSyncTime' => 'setDataSyncTime',
            'total' => 'setTotal',
            'data' => 'setData',
            'userInfoList' => 'setUserInfoList',
            'dbInfoList' => 'setDbInfoList',
            'hostInfoList' => 'setHostInfoList',
            'stateInfoList' => 'setStateInfoList',
            'commandInfoList' => 'setCommandInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataSyncTime  同步时间
    * total  总数
    * data  数据列表
    * userInfoList  用户列表
    * dbInfoList  数据库列表
    * hostInfoList  来源IP列表
    * stateInfoList  状态列表
    * commandInfoList  命令列表
    *
    * @var string[]
    */
    protected static $getters = [
            'dataSyncTime' => 'getDataSyncTime',
            'total' => 'getTotal',
            'data' => 'getData',
            'userInfoList' => 'getUserInfoList',
            'dbInfoList' => 'getDbInfoList',
            'hostInfoList' => 'getHostInfoList',
            'stateInfoList' => 'getStateInfoList',
            'commandInfoList' => 'getCommandInfoList'
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
        $this->container['dataSyncTime'] = isset($data['dataSyncTime']) ? $data['dataSyncTime'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['userInfoList'] = isset($data['userInfoList']) ? $data['userInfoList'] : null;
        $this->container['dbInfoList'] = isset($data['dbInfoList']) ? $data['dbInfoList'] : null;
        $this->container['hostInfoList'] = isset($data['hostInfoList']) ? $data['hostInfoList'] : null;
        $this->container['stateInfoList'] = isset($data['stateInfoList']) ? $data['stateInfoList'] : null;
        $this->container['commandInfoList'] = isset($data['commandInfoList']) ? $data['commandInfoList'] : null;
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
    * Gets dataSyncTime
    *  同步时间
    *
    * @return int|null
    */
    public function getDataSyncTime()
    {
        return $this->container['dataSyncTime'];
    }

    /**
    * Sets dataSyncTime
    *
    * @param int|null $dataSyncTime 同步时间
    *
    * @return $this
    */
    public function setDataSyncTime($dataSyncTime)
    {
        $this->container['dataSyncTime'] = $dataSyncTime;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets data
    *  数据列表
    *
    * @return object[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param object[]|null $data 数据列表
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets userInfoList
    *  用户列表
    *
    * @return string[]|null
    */
    public function getUserInfoList()
    {
        return $this->container['userInfoList'];
    }

    /**
    * Sets userInfoList
    *
    * @param string[]|null $userInfoList 用户列表
    *
    * @return $this
    */
    public function setUserInfoList($userInfoList)
    {
        $this->container['userInfoList'] = $userInfoList;
        return $this;
    }

    /**
    * Gets dbInfoList
    *  数据库列表
    *
    * @return string[]|null
    */
    public function getDbInfoList()
    {
        return $this->container['dbInfoList'];
    }

    /**
    * Sets dbInfoList
    *
    * @param string[]|null $dbInfoList 数据库列表
    *
    * @return $this
    */
    public function setDbInfoList($dbInfoList)
    {
        $this->container['dbInfoList'] = $dbInfoList;
        return $this;
    }

    /**
    * Gets hostInfoList
    *  来源IP列表
    *
    * @return string[]|null
    */
    public function getHostInfoList()
    {
        return $this->container['hostInfoList'];
    }

    /**
    * Sets hostInfoList
    *
    * @param string[]|null $hostInfoList 来源IP列表
    *
    * @return $this
    */
    public function setHostInfoList($hostInfoList)
    {
        $this->container['hostInfoList'] = $hostInfoList;
        return $this;
    }

    /**
    * Gets stateInfoList
    *  状态列表
    *
    * @return string[]|null
    */
    public function getStateInfoList()
    {
        return $this->container['stateInfoList'];
    }

    /**
    * Sets stateInfoList
    *
    * @param string[]|null $stateInfoList 状态列表
    *
    * @return $this
    */
    public function setStateInfoList($stateInfoList)
    {
        $this->container['stateInfoList'] = $stateInfoList;
        return $this;
    }

    /**
    * Gets commandInfoList
    *  命令列表
    *
    * @return string[]|null
    */
    public function getCommandInfoList()
    {
        return $this->container['commandInfoList'];
    }

    /**
    * Sets commandInfoList
    *
    * @param string[]|null $commandInfoList 命令列表
    *
    * @return $this
    */
    public function setCommandInfoList($commandInfoList)
    {
        $this->container['commandInfoList'] = $commandInfoList;
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

