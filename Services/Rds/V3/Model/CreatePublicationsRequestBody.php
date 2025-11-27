<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePublicationsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePublicationsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicationName  发布名称。  发布名称长度可在5～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符。
    * publicationDatabase  发布数据库名。
    * isCreateSnapshotImmediately  是否立即创建快照。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicationName' => 'string',
            'publicationDatabase' => 'string',
            'isCreateSnapshotImmediately' => 'string',
            'subscriptionOptions' => '\HuaweiCloud\SDK\Rds\V3\Model\SubscriptionOption',
            'jobSchedule' => '\HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule',
            'isSelectAllTable' => 'bool',
            'extendTables' => 'string[]',
            'tables' => '\HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoRequest[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicationName  发布名称。  发布名称长度可在5～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符。
    * publicationDatabase  发布数据库名。
    * isCreateSnapshotImmediately  是否立即创建快照。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicationName' => null,
        'publicationDatabase' => null,
        'isCreateSnapshotImmediately' => null,
        'subscriptionOptions' => null,
        'jobSchedule' => null,
        'isSelectAllTable' => null,
        'extendTables' => null,
        'tables' => null
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
    * publicationName  发布名称。  发布名称长度可在5～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符。
    * publicationDatabase  发布数据库名。
    * isCreateSnapshotImmediately  是否立即创建快照。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicationName' => 'publication_name',
            'publicationDatabase' => 'publication_database',
            'isCreateSnapshotImmediately' => 'is_create_snapshot_immediately',
            'subscriptionOptions' => 'subscription_options',
            'jobSchedule' => 'job_schedule',
            'isSelectAllTable' => 'is_select_all_table',
            'extendTables' => 'extend_tables',
            'tables' => 'tables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicationName  发布名称。  发布名称长度可在5～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符。
    * publicationDatabase  发布数据库名。
    * isCreateSnapshotImmediately  是否立即创建快照。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicationName' => 'setPublicationName',
            'publicationDatabase' => 'setPublicationDatabase',
            'isCreateSnapshotImmediately' => 'setIsCreateSnapshotImmediately',
            'subscriptionOptions' => 'setSubscriptionOptions',
            'jobSchedule' => 'setJobSchedule',
            'isSelectAllTable' => 'setIsSelectAllTable',
            'extendTables' => 'setExtendTables',
            'tables' => 'setTables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicationName  发布名称。  发布名称长度可在5～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符。
    * publicationDatabase  发布数据库名。
    * isCreateSnapshotImmediately  是否立即创建快照。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicationName' => 'getPublicationName',
            'publicationDatabase' => 'getPublicationDatabase',
            'isCreateSnapshotImmediately' => 'getIsCreateSnapshotImmediately',
            'subscriptionOptions' => 'getSubscriptionOptions',
            'jobSchedule' => 'getJobSchedule',
            'isSelectAllTable' => 'getIsSelectAllTable',
            'extendTables' => 'getExtendTables',
            'tables' => 'getTables'
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
        $this->container['publicationName'] = isset($data['publicationName']) ? $data['publicationName'] : null;
        $this->container['publicationDatabase'] = isset($data['publicationDatabase']) ? $data['publicationDatabase'] : null;
        $this->container['isCreateSnapshotImmediately'] = isset($data['isCreateSnapshotImmediately']) ? $data['isCreateSnapshotImmediately'] : null;
        $this->container['subscriptionOptions'] = isset($data['subscriptionOptions']) ? $data['subscriptionOptions'] : null;
        $this->container['jobSchedule'] = isset($data['jobSchedule']) ? $data['jobSchedule'] : null;
        $this->container['isSelectAllTable'] = isset($data['isSelectAllTable']) ? $data['isSelectAllTable'] : null;
        $this->container['extendTables'] = isset($data['extendTables']) ? $data['extendTables'] : null;
        $this->container['tables'] = isset($data['tables']) ? $data['tables'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publicationName'] === null) {
            $invalidProperties[] = "'publicationName' can't be null";
        }
        if ($this->container['publicationDatabase'] === null) {
            $invalidProperties[] = "'publicationDatabase' can't be null";
        }
        if ($this->container['isCreateSnapshotImmediately'] === null) {
            $invalidProperties[] = "'isCreateSnapshotImmediately' can't be null";
        }
        if ($this->container['jobSchedule'] === null) {
            $invalidProperties[] = "'jobSchedule' can't be null";
        }
        if ($this->container['tables'] === null) {
            $invalidProperties[] = "'tables' can't be null";
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
    * Gets publicationName
    *  发布名称。  发布名称长度可在5～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符。
    *
    * @return string
    */
    public function getPublicationName()
    {
        return $this->container['publicationName'];
    }

    /**
    * Sets publicationName
    *
    * @param string $publicationName 发布名称。  发布名称长度可在5～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符。
    *
    * @return $this
    */
    public function setPublicationName($publicationName)
    {
        $this->container['publicationName'] = $publicationName;
        return $this;
    }

    /**
    * Gets publicationDatabase
    *  发布数据库名。
    *
    * @return string
    */
    public function getPublicationDatabase()
    {
        return $this->container['publicationDatabase'];
    }

    /**
    * Sets publicationDatabase
    *
    * @param string $publicationDatabase 发布数据库名。
    *
    * @return $this
    */
    public function setPublicationDatabase($publicationDatabase)
    {
        $this->container['publicationDatabase'] = $publicationDatabase;
        return $this;
    }

    /**
    * Gets isCreateSnapshotImmediately
    *  是否立即创建快照。
    *
    * @return string
    */
    public function getIsCreateSnapshotImmediately()
    {
        return $this->container['isCreateSnapshotImmediately'];
    }

    /**
    * Sets isCreateSnapshotImmediately
    *
    * @param string $isCreateSnapshotImmediately 是否立即创建快照。
    *
    * @return $this
    */
    public function setIsCreateSnapshotImmediately($isCreateSnapshotImmediately)
    {
        $this->container['isCreateSnapshotImmediately'] = $isCreateSnapshotImmediately;
        return $this;
    }

    /**
    * Gets subscriptionOptions
    *  subscriptionOptions
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SubscriptionOption|null
    */
    public function getSubscriptionOptions()
    {
        return $this->container['subscriptionOptions'];
    }

    /**
    * Sets subscriptionOptions
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SubscriptionOption|null $subscriptionOptions subscriptionOptions
    *
    * @return $this
    */
    public function setSubscriptionOptions($subscriptionOptions)
    {
        $this->container['subscriptionOptions'] = $subscriptionOptions;
        return $this;
    }

    /**
    * Gets jobSchedule
    *  jobSchedule
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule
    */
    public function getJobSchedule()
    {
        return $this->container['jobSchedule'];
    }

    /**
    * Sets jobSchedule
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule $jobSchedule jobSchedule
    *
    * @return $this
    */
    public function setJobSchedule($jobSchedule)
    {
        $this->container['jobSchedule'] = $jobSchedule;
        return $this;
    }

    /**
    * Gets isSelectAllTable
    *  是否选择所有数据表。
    *
    * @return bool|null
    */
    public function getIsSelectAllTable()
    {
        return $this->container['isSelectAllTable'];
    }

    /**
    * Sets isSelectAllTable
    *
    * @param bool|null $isSelectAllTable 是否选择所有数据表。
    *
    * @return $this
    */
    public function setIsSelectAllTable($isSelectAllTable)
    {
        $this->container['isSelectAllTable'] = $isSelectAllTable;
        return $this;
    }

    /**
    * Gets extendTables
    *  全选所有表后需要去除的表。
    *
    * @return string[]|null
    */
    public function getExtendTables()
    {
        return $this->container['extendTables'];
    }

    /**
    * Sets extendTables
    *
    * @param string[]|null $extendTables 全选所有表后需要去除的表。
    *
    * @return $this
    */
    public function setExtendTables($extendTables)
    {
        $this->container['extendTables'] = $extendTables;
        return $this;
    }

    /**
    * Gets tables
    *  发布数据表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoRequest[]
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoRequest[] $tables 发布数据表。
    *
    * @return $this
    */
    public function setTables($tables)
    {
        $this->container['tables'] = $tables;
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

