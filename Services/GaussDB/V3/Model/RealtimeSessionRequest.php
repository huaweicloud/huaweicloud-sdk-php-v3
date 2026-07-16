<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealtimeSessionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RealtimeSessionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  **参数解释**：  需要收集的实时会话类型。  **约束限制**：  不涉及。  **取值范围**：  - slow：慢会话。 - active：活跃会话。 - total：会话总数。 - long：长事务会话。  **默认取值**：  total。
    * slowProcessThreshold  **参数解释**：  慢会话阈值，单位是秒。  **约束限制**：  不涉及。  **取值范围**：  1-86400。  **默认取值**：  10。
    * user  **参数解释**：  实时会话的用户。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * host  **参数解释**：  实时会话的主机。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * db  **参数解释**：  实时会话的数据库。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * command  **参数解释**：  实时会话的命令类型。  **约束限制**：  不涉及。  **取值范围**：  - Sleep：空闲连接，无任何操作。 - Query：正在执行查询。 - Connect：建立连接。 - Init DB：切换数据库。 - Field List：获取表字段列表。 - Processlist：查看会话列表。  **默认取值**：  不涉及。
    * sqlKey  **参数解释**：  实时会话的SQL语句。 您可以通过登录管理控制台，选择智能DBA助手下的实时会话，在会话列表中获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sortKey  **参数解释**：  实时会话的排序列。  **约束限制**：  不涉及。  **取值范围**：  - id：会话ID。 - state_duration：状态持续时间。 - trx_executed_time：事务持续时间。 - trx_id：事务ID。 - trx_lock_duration：事务锁等待时长。 - trx_lock_rows：事务锁定行数。 - trx_lock_tables：事务锁定表数量。 - trx_update_rows：事务更新行数。  **默认取值**：  id。
    * sortDir  **参数解释**：  实时会话的排序方向。  **约束限制**：  不涉及。  **取值范围**：  - desc：降序排列。 - asc：升序排列。  **默认取值**：  asc。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'string',
            'slowProcessThreshold' => 'int',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'sqlKey' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filter  **参数解释**：  需要收集的实时会话类型。  **约束限制**：  不涉及。  **取值范围**：  - slow：慢会话。 - active：活跃会话。 - total：会话总数。 - long：长事务会话。  **默认取值**：  total。
    * slowProcessThreshold  **参数解释**：  慢会话阈值，单位是秒。  **约束限制**：  不涉及。  **取值范围**：  1-86400。  **默认取值**：  10。
    * user  **参数解释**：  实时会话的用户。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * host  **参数解释**：  实时会话的主机。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * db  **参数解释**：  实时会话的数据库。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * command  **参数解释**：  实时会话的命令类型。  **约束限制**：  不涉及。  **取值范围**：  - Sleep：空闲连接，无任何操作。 - Query：正在执行查询。 - Connect：建立连接。 - Init DB：切换数据库。 - Field List：获取表字段列表。 - Processlist：查看会话列表。  **默认取值**：  不涉及。
    * sqlKey  **参数解释**：  实时会话的SQL语句。 您可以通过登录管理控制台，选择智能DBA助手下的实时会话，在会话列表中获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sortKey  **参数解释**：  实时会话的排序列。  **约束限制**：  不涉及。  **取值范围**：  - id：会话ID。 - state_duration：状态持续时间。 - trx_executed_time：事务持续时间。 - trx_id：事务ID。 - trx_lock_duration：事务锁等待时长。 - trx_lock_rows：事务锁定行数。 - trx_lock_tables：事务锁定表数量。 - trx_update_rows：事务更新行数。  **默认取值**：  id。
    * sortDir  **参数解释**：  实时会话的排序方向。  **约束限制**：  不涉及。  **取值范围**：  - desc：降序排列。 - asc：升序排列。  **默认取值**：  asc。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'slowProcessThreshold' => 'int32',
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'sqlKey' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * filter  **参数解释**：  需要收集的实时会话类型。  **约束限制**：  不涉及。  **取值范围**：  - slow：慢会话。 - active：活跃会话。 - total：会话总数。 - long：长事务会话。  **默认取值**：  total。
    * slowProcessThreshold  **参数解释**：  慢会话阈值，单位是秒。  **约束限制**：  不涉及。  **取值范围**：  1-86400。  **默认取值**：  10。
    * user  **参数解释**：  实时会话的用户。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * host  **参数解释**：  实时会话的主机。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * db  **参数解释**：  实时会话的数据库。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * command  **参数解释**：  实时会话的命令类型。  **约束限制**：  不涉及。  **取值范围**：  - Sleep：空闲连接，无任何操作。 - Query：正在执行查询。 - Connect：建立连接。 - Init DB：切换数据库。 - Field List：获取表字段列表。 - Processlist：查看会话列表。  **默认取值**：  不涉及。
    * sqlKey  **参数解释**：  实时会话的SQL语句。 您可以通过登录管理控制台，选择智能DBA助手下的实时会话，在会话列表中获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sortKey  **参数解释**：  实时会话的排序列。  **约束限制**：  不涉及。  **取值范围**：  - id：会话ID。 - state_duration：状态持续时间。 - trx_executed_time：事务持续时间。 - trx_id：事务ID。 - trx_lock_duration：事务锁等待时长。 - trx_lock_rows：事务锁定行数。 - trx_lock_tables：事务锁定表数量。 - trx_update_rows：事务更新行数。  **默认取值**：  id。
    * sortDir  **参数解释**：  实时会话的排序方向。  **约束限制**：  不涉及。  **取值范围**：  - desc：降序排列。 - asc：升序排列。  **默认取值**：  asc。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filter' => 'filter',
            'slowProcessThreshold' => 'slow_process_threshold',
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'command' => 'command',
            'sqlKey' => 'sql_key',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filter  **参数解释**：  需要收集的实时会话类型。  **约束限制**：  不涉及。  **取值范围**：  - slow：慢会话。 - active：活跃会话。 - total：会话总数。 - long：长事务会话。  **默认取值**：  total。
    * slowProcessThreshold  **参数解释**：  慢会话阈值，单位是秒。  **约束限制**：  不涉及。  **取值范围**：  1-86400。  **默认取值**：  10。
    * user  **参数解释**：  实时会话的用户。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * host  **参数解释**：  实时会话的主机。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * db  **参数解释**：  实时会话的数据库。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * command  **参数解释**：  实时会话的命令类型。  **约束限制**：  不涉及。  **取值范围**：  - Sleep：空闲连接，无任何操作。 - Query：正在执行查询。 - Connect：建立连接。 - Init DB：切换数据库。 - Field List：获取表字段列表。 - Processlist：查看会话列表。  **默认取值**：  不涉及。
    * sqlKey  **参数解释**：  实时会话的SQL语句。 您可以通过登录管理控制台，选择智能DBA助手下的实时会话，在会话列表中获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sortKey  **参数解释**：  实时会话的排序列。  **约束限制**：  不涉及。  **取值范围**：  - id：会话ID。 - state_duration：状态持续时间。 - trx_executed_time：事务持续时间。 - trx_id：事务ID。 - trx_lock_duration：事务锁等待时长。 - trx_lock_rows：事务锁定行数。 - trx_lock_tables：事务锁定表数量。 - trx_update_rows：事务更新行数。  **默认取值**：  id。
    * sortDir  **参数解释**：  实时会话的排序方向。  **约束限制**：  不涉及。  **取值范围**：  - desc：降序排列。 - asc：升序排列。  **默认取值**：  asc。
    *
    * @var string[]
    */
    protected static $setters = [
            'filter' => 'setFilter',
            'slowProcessThreshold' => 'setSlowProcessThreshold',
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'command' => 'setCommand',
            'sqlKey' => 'setSqlKey',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filter  **参数解释**：  需要收集的实时会话类型。  **约束限制**：  不涉及。  **取值范围**：  - slow：慢会话。 - active：活跃会话。 - total：会话总数。 - long：长事务会话。  **默认取值**：  total。
    * slowProcessThreshold  **参数解释**：  慢会话阈值，单位是秒。  **约束限制**：  不涉及。  **取值范围**：  1-86400。  **默认取值**：  10。
    * user  **参数解释**：  实时会话的用户。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * host  **参数解释**：  实时会话的主机。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * db  **参数解释**：  实时会话的数据库。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * command  **参数解释**：  实时会话的命令类型。  **约束限制**：  不涉及。  **取值范围**：  - Sleep：空闲连接，无任何操作。 - Query：正在执行查询。 - Connect：建立连接。 - Init DB：切换数据库。 - Field List：获取表字段列表。 - Processlist：查看会话列表。  **默认取值**：  不涉及。
    * sqlKey  **参数解释**：  实时会话的SQL语句。 您可以通过登录管理控制台，选择智能DBA助手下的实时会话，在会话列表中获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sortKey  **参数解释**：  实时会话的排序列。  **约束限制**：  不涉及。  **取值范围**：  - id：会话ID。 - state_duration：状态持续时间。 - trx_executed_time：事务持续时间。 - trx_id：事务ID。 - trx_lock_duration：事务锁等待时长。 - trx_lock_rows：事务锁定行数。 - trx_lock_tables：事务锁定表数量。 - trx_update_rows：事务更新行数。  **默认取值**：  id。
    * sortDir  **参数解释**：  实时会话的排序方向。  **约束限制**：  不涉及。  **取值范围**：  - desc：降序排列。 - asc：升序排列。  **默认取值**：  asc。
    *
    * @var string[]
    */
    protected static $getters = [
            'filter' => 'getFilter',
            'slowProcessThreshold' => 'getSlowProcessThreshold',
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'command' => 'getCommand',
            'sqlKey' => 'getSqlKey',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['slowProcessThreshold'] = isset($data['slowProcessThreshold']) ? $data['slowProcessThreshold'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['sqlKey'] = isset($data['sqlKey']) ? $data['sqlKey'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['filter']) && (mb_strlen($this->container['filter']) > 36)) {
                $invalidProperties[] = "invalid value for 'filter', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['filter']) && (mb_strlen($this->container['filter']) < 2)) {
                $invalidProperties[] = "invalid value for 'filter', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['slowProcessThreshold']) && ($this->container['slowProcessThreshold'] > 86400)) {
                $invalidProperties[] = "invalid value for 'slowProcessThreshold', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['slowProcessThreshold']) && ($this->container['slowProcessThreshold'] < 1)) {
                $invalidProperties[] = "invalid value for 'slowProcessThreshold', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) > 36)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) < 2)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['host']) && (mb_strlen($this->container['host']) > 36)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['host']) && (mb_strlen($this->container['host']) < 2)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['db']) && (mb_strlen($this->container['db']) > 36)) {
                $invalidProperties[] = "invalid value for 'db', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['db']) && (mb_strlen($this->container['db']) < 2)) {
                $invalidProperties[] = "invalid value for 'db', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['command']) && (mb_strlen($this->container['command']) > 36)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['command']) && (mb_strlen($this->container['command']) < 2)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sqlKey']) && (mb_strlen($this->container['sqlKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sqlKey', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sqlKey']) && (mb_strlen($this->container['sqlKey']) < 2)) {
                $invalidProperties[] = "invalid value for 'sqlKey', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 36)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 2)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 36)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 2)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 2.";
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
    * Gets filter
    *  **参数解释**：  需要收集的实时会话类型。  **约束限制**：  不涉及。  **取值范围**：  - slow：慢会话。 - active：活跃会话。 - total：会话总数。 - long：长事务会话。  **默认取值**：  total。
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter **参数解释**：  需要收集的实时会话类型。  **约束限制**：  不涉及。  **取值范围**：  - slow：慢会话。 - active：活跃会话。 - total：会话总数。 - long：长事务会话。  **默认取值**：  total。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets slowProcessThreshold
    *  **参数解释**：  慢会话阈值，单位是秒。  **约束限制**：  不涉及。  **取值范围**：  1-86400。  **默认取值**：  10。
    *
    * @return int|null
    */
    public function getSlowProcessThreshold()
    {
        return $this->container['slowProcessThreshold'];
    }

    /**
    * Sets slowProcessThreshold
    *
    * @param int|null $slowProcessThreshold **参数解释**：  慢会话阈值，单位是秒。  **约束限制**：  不涉及。  **取值范围**：  1-86400。  **默认取值**：  10。
    *
    * @return $this
    */
    public function setSlowProcessThreshold($slowProcessThreshold)
    {
        $this->container['slowProcessThreshold'] = $slowProcessThreshold;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**：  实时会话的用户。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user **参数解释**：  实时会话的用户。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets host
    *  **参数解释**：  实时会话的主机。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host **参数解释**：  实时会话的主机。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets db
    *  **参数解释**：  实时会话的数据库。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param string|null $db **参数解释**：  实时会话的数据库。 获取方法请参见[查询数据库用户](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabaseUser.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets command
    *  **参数解释**：  实时会话的命令类型。  **约束限制**：  不涉及。  **取值范围**：  - Sleep：空闲连接，无任何操作。 - Query：正在执行查询。 - Connect：建立连接。 - Init DB：切换数据库。 - Field List：获取表字段列表。 - Processlist：查看会话列表。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command **参数解释**：  实时会话的命令类型。  **约束限制**：  不涉及。  **取值范围**：  - Sleep：空闲连接，无任何操作。 - Query：正在执行查询。 - Connect：建立连接。 - Init DB：切换数据库。 - Field List：获取表字段列表。 - Processlist：查看会话列表。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets sqlKey
    *  **参数解释**：  实时会话的SQL语句。 您可以通过登录管理控制台，选择智能DBA助手下的实时会话，在会话列表中获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getSqlKey()
    {
        return $this->container['sqlKey'];
    }

    /**
    * Sets sqlKey
    *
    * @param string|null $sqlKey **参数解释**：  实时会话的SQL语句。 您可以通过登录管理控制台，选择智能DBA助手下的实时会话，在会话列表中获取。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSqlKey($sqlKey)
    {
        $this->container['sqlKey'] = $sqlKey;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**：  实时会话的排序列。  **约束限制**：  不涉及。  **取值范围**：  - id：会话ID。 - state_duration：状态持续时间。 - trx_executed_time：事务持续时间。 - trx_id：事务ID。 - trx_lock_duration：事务锁等待时长。 - trx_lock_rows：事务锁定行数。 - trx_lock_tables：事务锁定表数量。 - trx_update_rows：事务更新行数。  **默认取值**：  id。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**：  实时会话的排序列。  **约束限制**：  不涉及。  **取值范围**：  - id：会话ID。 - state_duration：状态持续时间。 - trx_executed_time：事务持续时间。 - trx_id：事务ID。 - trx_lock_duration：事务锁等待时长。 - trx_lock_rows：事务锁定行数。 - trx_lock_tables：事务锁定表数量。 - trx_update_rows：事务更新行数。  **默认取值**：  id。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**：  实时会话的排序方向。  **约束限制**：  不涉及。  **取值范围**：  - desc：降序排列。 - asc：升序排列。  **默认取值**：  asc。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**：  实时会话的排序方向。  **约束限制**：  不涉及。  **取值范围**：  - desc：降序排列。 - asc：升序排列。  **默认取值**：  asc。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

