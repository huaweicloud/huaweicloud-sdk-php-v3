<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryPublicationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryPublicationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  发布id。
    * status  发布状态。normal，abnormal，creating，modifying，createfail
    * publicationName  发布名。
    * publicationDatabase  发布数据库名。
    * subscriptionCount  订阅数。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'publicationName' => 'string',
            'publicationDatabase' => 'string',
            'subscriptionCount' => 'int',
            'subscriptionOptions' => '\HuaweiCloud\SDK\Rds\V3\Model\SubscriptionOptionsResult',
            'jobSchedule' => '\HuaweiCloud\SDK\Rds\V3\Model\UsedJobSchedule',
            'isSelectAllTable' => 'bool',
            'extendTables' => 'string[]',
            'tables' => '\HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  发布id。
    * status  发布状态。normal，abnormal，creating，modifying，createfail
    * publicationName  发布名。
    * publicationDatabase  发布数据库名。
    * subscriptionCount  订阅数。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'publicationName' => null,
        'publicationDatabase' => null,
        'subscriptionCount' => null,
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
    * id  发布id。
    * status  发布状态。normal，abnormal，creating，modifying，createfail
    * publicationName  发布名。
    * publicationDatabase  发布数据库名。
    * subscriptionCount  订阅数。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'publicationName' => 'publication_name',
            'publicationDatabase' => 'publication_database',
            'subscriptionCount' => 'subscription_count',
            'subscriptionOptions' => 'subscription_options',
            'jobSchedule' => 'job_schedule',
            'isSelectAllTable' => 'is_select_all_table',
            'extendTables' => 'extend_tables',
            'tables' => 'tables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  发布id。
    * status  发布状态。normal，abnormal，creating，modifying，createfail
    * publicationName  发布名。
    * publicationDatabase  发布数据库名。
    * subscriptionCount  订阅数。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'publicationName' => 'setPublicationName',
            'publicationDatabase' => 'setPublicationDatabase',
            'subscriptionCount' => 'setSubscriptionCount',
            'subscriptionOptions' => 'setSubscriptionOptions',
            'jobSchedule' => 'setJobSchedule',
            'isSelectAllTable' => 'setIsSelectAllTable',
            'extendTables' => 'setExtendTables',
            'tables' => 'setTables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  发布id。
    * status  发布状态。normal，abnormal，creating，modifying，createfail
    * publicationName  发布名。
    * publicationDatabase  发布数据库名。
    * subscriptionCount  订阅数。
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'publicationName' => 'getPublicationName',
            'publicationDatabase' => 'getPublicationDatabase',
            'subscriptionCount' => 'getSubscriptionCount',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['publicationName'] = isset($data['publicationName']) ? $data['publicationName'] : null;
        $this->container['publicationDatabase'] = isset($data['publicationDatabase']) ? $data['publicationDatabase'] : null;
        $this->container['subscriptionCount'] = isset($data['subscriptionCount']) ? $data['subscriptionCount'] : null;
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
    * Gets id
    *  发布id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 发布id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  发布状态。normal，abnormal，creating，modifying，createfail
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 发布状态。normal，abnormal，creating，modifying，createfail
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets publicationName
    *  发布名。
    *
    * @return string|null
    */
    public function getPublicationName()
    {
        return $this->container['publicationName'];
    }

    /**
    * Sets publicationName
    *
    * @param string|null $publicationName 发布名。
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
    * @return string|null
    */
    public function getPublicationDatabase()
    {
        return $this->container['publicationDatabase'];
    }

    /**
    * Sets publicationDatabase
    *
    * @param string|null $publicationDatabase 发布数据库名。
    *
    * @return $this
    */
    public function setPublicationDatabase($publicationDatabase)
    {
        $this->container['publicationDatabase'] = $publicationDatabase;
        return $this;
    }

    /**
    * Gets subscriptionCount
    *  订阅数。
    *
    * @return int|null
    */
    public function getSubscriptionCount()
    {
        return $this->container['subscriptionCount'];
    }

    /**
    * Sets subscriptionCount
    *
    * @param int|null $subscriptionCount 订阅数。
    *
    * @return $this
    */
    public function setSubscriptionCount($subscriptionCount)
    {
        $this->container['subscriptionCount'] = $subscriptionCount;
        return $this;
    }

    /**
    * Gets subscriptionOptions
    *  subscriptionOptions
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SubscriptionOptionsResult|null
    */
    public function getSubscriptionOptions()
    {
        return $this->container['subscriptionOptions'];
    }

    /**
    * Sets subscriptionOptions
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SubscriptionOptionsResult|null $subscriptionOptions subscriptionOptions
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
    * @return \HuaweiCloud\SDK\Rds\V3\Model\UsedJobSchedule|null
    */
    public function getJobSchedule()
    {
        return $this->container['jobSchedule'];
    }

    /**
    * Sets jobSchedule
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\UsedJobSchedule|null $jobSchedule jobSchedule
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
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoResponse[]|null
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoResponse[]|null $tables 发布数据表。
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

