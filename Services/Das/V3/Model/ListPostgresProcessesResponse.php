<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPostgresProcessesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPostgresProcessesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processInfoList  进程列表
    * total  总数
    * userInfoList  用户信息列表
    * dbInfoList  数据库信息列表
    * hostInfoList  主机信息列表
    * stateInfoList  状态信息列表
    * commandInfoList  命令信息列表
    * sessionExecTime  会话执行时间比例
    * idleSession  空闲会话数
    * activeSession  运行会话数
    * summary  概要
    * userStats  按用户统计信息
    * hostStats  按访问来源统计
    * dbStats  按数据库统计
    * showVersionSupportMessage  是否显示版本支持信息
    * showWarnMessage  是否显示告警信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processInfoList' => '\HuaweiCloud\SDK\Das\V3\Model\PgProcessInfo[]',
            'total' => 'int',
            'userInfoList' => 'string[]',
            'dbInfoList' => 'string[]',
            'hostInfoList' => 'string[]',
            'stateInfoList' => 'string[]',
            'commandInfoList' => 'string[]',
            'sessionExecTime' => 'object',
            'idleSession' => 'int',
            'activeSession' => 'int',
            'summary' => '\HuaweiCloud\SDK\Das\V3\Model\PgProcessSummary[]',
            'userStats' => '\HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]',
            'hostStats' => '\HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]',
            'dbStats' => '\HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]',
            'showVersionSupportMessage' => 'bool',
            'showWarnMessage' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processInfoList  进程列表
    * total  总数
    * userInfoList  用户信息列表
    * dbInfoList  数据库信息列表
    * hostInfoList  主机信息列表
    * stateInfoList  状态信息列表
    * commandInfoList  命令信息列表
    * sessionExecTime  会话执行时间比例
    * idleSession  空闲会话数
    * activeSession  运行会话数
    * summary  概要
    * userStats  按用户统计信息
    * hostStats  按访问来源统计
    * dbStats  按数据库统计
    * showVersionSupportMessage  是否显示版本支持信息
    * showWarnMessage  是否显示告警信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processInfoList' => null,
        'total' => 'int64',
        'userInfoList' => null,
        'dbInfoList' => null,
        'hostInfoList' => null,
        'stateInfoList' => null,
        'commandInfoList' => null,
        'sessionExecTime' => null,
        'idleSession' => 'int64',
        'activeSession' => 'int64',
        'summary' => null,
        'userStats' => null,
        'hostStats' => null,
        'dbStats' => null,
        'showVersionSupportMessage' => null,
        'showWarnMessage' => null
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
    * processInfoList  进程列表
    * total  总数
    * userInfoList  用户信息列表
    * dbInfoList  数据库信息列表
    * hostInfoList  主机信息列表
    * stateInfoList  状态信息列表
    * commandInfoList  命令信息列表
    * sessionExecTime  会话执行时间比例
    * idleSession  空闲会话数
    * activeSession  运行会话数
    * summary  概要
    * userStats  按用户统计信息
    * hostStats  按访问来源统计
    * dbStats  按数据库统计
    * showVersionSupportMessage  是否显示版本支持信息
    * showWarnMessage  是否显示告警信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processInfoList' => 'process_info_list',
            'total' => 'total',
            'userInfoList' => 'user_info_list',
            'dbInfoList' => 'db_info_list',
            'hostInfoList' => 'host_info_list',
            'stateInfoList' => 'state_info_list',
            'commandInfoList' => 'command_info_list',
            'sessionExecTime' => 'session_exec_time',
            'idleSession' => 'idle_session',
            'activeSession' => 'active_session',
            'summary' => 'summary',
            'userStats' => 'user_stats',
            'hostStats' => 'host_stats',
            'dbStats' => 'db_stats',
            'showVersionSupportMessage' => 'show_version_support_message',
            'showWarnMessage' => 'show_warn_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processInfoList  进程列表
    * total  总数
    * userInfoList  用户信息列表
    * dbInfoList  数据库信息列表
    * hostInfoList  主机信息列表
    * stateInfoList  状态信息列表
    * commandInfoList  命令信息列表
    * sessionExecTime  会话执行时间比例
    * idleSession  空闲会话数
    * activeSession  运行会话数
    * summary  概要
    * userStats  按用户统计信息
    * hostStats  按访问来源统计
    * dbStats  按数据库统计
    * showVersionSupportMessage  是否显示版本支持信息
    * showWarnMessage  是否显示告警信息
    *
    * @var string[]
    */
    protected static $setters = [
            'processInfoList' => 'setProcessInfoList',
            'total' => 'setTotal',
            'userInfoList' => 'setUserInfoList',
            'dbInfoList' => 'setDbInfoList',
            'hostInfoList' => 'setHostInfoList',
            'stateInfoList' => 'setStateInfoList',
            'commandInfoList' => 'setCommandInfoList',
            'sessionExecTime' => 'setSessionExecTime',
            'idleSession' => 'setIdleSession',
            'activeSession' => 'setActiveSession',
            'summary' => 'setSummary',
            'userStats' => 'setUserStats',
            'hostStats' => 'setHostStats',
            'dbStats' => 'setDbStats',
            'showVersionSupportMessage' => 'setShowVersionSupportMessage',
            'showWarnMessage' => 'setShowWarnMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processInfoList  进程列表
    * total  总数
    * userInfoList  用户信息列表
    * dbInfoList  数据库信息列表
    * hostInfoList  主机信息列表
    * stateInfoList  状态信息列表
    * commandInfoList  命令信息列表
    * sessionExecTime  会话执行时间比例
    * idleSession  空闲会话数
    * activeSession  运行会话数
    * summary  概要
    * userStats  按用户统计信息
    * hostStats  按访问来源统计
    * dbStats  按数据库统计
    * showVersionSupportMessage  是否显示版本支持信息
    * showWarnMessage  是否显示告警信息
    *
    * @var string[]
    */
    protected static $getters = [
            'processInfoList' => 'getProcessInfoList',
            'total' => 'getTotal',
            'userInfoList' => 'getUserInfoList',
            'dbInfoList' => 'getDbInfoList',
            'hostInfoList' => 'getHostInfoList',
            'stateInfoList' => 'getStateInfoList',
            'commandInfoList' => 'getCommandInfoList',
            'sessionExecTime' => 'getSessionExecTime',
            'idleSession' => 'getIdleSession',
            'activeSession' => 'getActiveSession',
            'summary' => 'getSummary',
            'userStats' => 'getUserStats',
            'hostStats' => 'getHostStats',
            'dbStats' => 'getDbStats',
            'showVersionSupportMessage' => 'getShowVersionSupportMessage',
            'showWarnMessage' => 'getShowWarnMessage'
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
        $this->container['processInfoList'] = isset($data['processInfoList']) ? $data['processInfoList'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['userInfoList'] = isset($data['userInfoList']) ? $data['userInfoList'] : null;
        $this->container['dbInfoList'] = isset($data['dbInfoList']) ? $data['dbInfoList'] : null;
        $this->container['hostInfoList'] = isset($data['hostInfoList']) ? $data['hostInfoList'] : null;
        $this->container['stateInfoList'] = isset($data['stateInfoList']) ? $data['stateInfoList'] : null;
        $this->container['commandInfoList'] = isset($data['commandInfoList']) ? $data['commandInfoList'] : null;
        $this->container['sessionExecTime'] = isset($data['sessionExecTime']) ? $data['sessionExecTime'] : null;
        $this->container['idleSession'] = isset($data['idleSession']) ? $data['idleSession'] : null;
        $this->container['activeSession'] = isset($data['activeSession']) ? $data['activeSession'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['userStats'] = isset($data['userStats']) ? $data['userStats'] : null;
        $this->container['hostStats'] = isset($data['hostStats']) ? $data['hostStats'] : null;
        $this->container['dbStats'] = isset($data['dbStats']) ? $data['dbStats'] : null;
        $this->container['showVersionSupportMessage'] = isset($data['showVersionSupportMessage']) ? $data['showVersionSupportMessage'] : null;
        $this->container['showWarnMessage'] = isset($data['showWarnMessage']) ? $data['showWarnMessage'] : null;
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
    * Gets processInfoList
    *  进程列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\PgProcessInfo[]|null
    */
    public function getProcessInfoList()
    {
        return $this->container['processInfoList'];
    }

    /**
    * Sets processInfoList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\PgProcessInfo[]|null $processInfoList 进程列表
    *
    * @return $this
    */
    public function setProcessInfoList($processInfoList)
    {
        $this->container['processInfoList'] = $processInfoList;
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
    * Gets userInfoList
    *  用户信息列表
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
    * @param string[]|null $userInfoList 用户信息列表
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
    *  数据库信息列表
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
    * @param string[]|null $dbInfoList 数据库信息列表
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
    *  主机信息列表
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
    * @param string[]|null $hostInfoList 主机信息列表
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
    *  状态信息列表
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
    * @param string[]|null $stateInfoList 状态信息列表
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
    *  命令信息列表
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
    * @param string[]|null $commandInfoList 命令信息列表
    *
    * @return $this
    */
    public function setCommandInfoList($commandInfoList)
    {
        $this->container['commandInfoList'] = $commandInfoList;
        return $this;
    }

    /**
    * Gets sessionExecTime
    *  会话执行时间比例
    *
    * @return object|null
    */
    public function getSessionExecTime()
    {
        return $this->container['sessionExecTime'];
    }

    /**
    * Sets sessionExecTime
    *
    * @param object|null $sessionExecTime 会话执行时间比例
    *
    * @return $this
    */
    public function setSessionExecTime($sessionExecTime)
    {
        $this->container['sessionExecTime'] = $sessionExecTime;
        return $this;
    }

    /**
    * Gets idleSession
    *  空闲会话数
    *
    * @return int|null
    */
    public function getIdleSession()
    {
        return $this->container['idleSession'];
    }

    /**
    * Sets idleSession
    *
    * @param int|null $idleSession 空闲会话数
    *
    * @return $this
    */
    public function setIdleSession($idleSession)
    {
        $this->container['idleSession'] = $idleSession;
        return $this;
    }

    /**
    * Gets activeSession
    *  运行会话数
    *
    * @return int|null
    */
    public function getActiveSession()
    {
        return $this->container['activeSession'];
    }

    /**
    * Sets activeSession
    *
    * @param int|null $activeSession 运行会话数
    *
    * @return $this
    */
    public function setActiveSession($activeSession)
    {
        $this->container['activeSession'] = $activeSession;
        return $this;
    }

    /**
    * Gets summary
    *  概要
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\PgProcessSummary[]|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\PgProcessSummary[]|null $summary 概要
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
        return $this;
    }

    /**
    * Gets userStats
    *  按用户统计信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]|null
    */
    public function getUserStats()
    {
        return $this->container['userStats'];
    }

    /**
    * Sets userStats
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]|null $userStats 按用户统计信息
    *
    * @return $this
    */
    public function setUserStats($userStats)
    {
        $this->container['userStats'] = $userStats;
        return $this;
    }

    /**
    * Gets hostStats
    *  按访问来源统计
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]|null
    */
    public function getHostStats()
    {
        return $this->container['hostStats'];
    }

    /**
    * Sets hostStats
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]|null $hostStats 按访问来源统计
    *
    * @return $this
    */
    public function setHostStats($hostStats)
    {
        $this->container['hostStats'] = $hostStats;
        return $this;
    }

    /**
    * Gets dbStats
    *  按数据库统计
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]|null
    */
    public function getDbStats()
    {
        return $this->container['dbStats'];
    }

    /**
    * Sets dbStats
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\PgProcessStats[]|null $dbStats 按数据库统计
    *
    * @return $this
    */
    public function setDbStats($dbStats)
    {
        $this->container['dbStats'] = $dbStats;
        return $this;
    }

    /**
    * Gets showVersionSupportMessage
    *  是否显示版本支持信息
    *
    * @return bool|null
    */
    public function getShowVersionSupportMessage()
    {
        return $this->container['showVersionSupportMessage'];
    }

    /**
    * Sets showVersionSupportMessage
    *
    * @param bool|null $showVersionSupportMessage 是否显示版本支持信息
    *
    * @return $this
    */
    public function setShowVersionSupportMessage($showVersionSupportMessage)
    {
        $this->container['showVersionSupportMessage'] = $showVersionSupportMessage;
        return $this;
    }

    /**
    * Gets showWarnMessage
    *  是否显示告警信息
    *
    * @return bool|null
    */
    public function getShowWarnMessage()
    {
        return $this->container['showWarnMessage'];
    }

    /**
    * Sets showWarnMessage
    *
    * @param bool|null $showWarnMessage 是否显示告警信息
    *
    * @return $this
    */
    public function setShowWarnMessage($showWarnMessage)
    {
        $this->container['showWarnMessage'] = $showWarnMessage;
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

