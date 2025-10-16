<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyPublicationsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyPublicationsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionOptions' => '\HuaweiCloud\SDK\Rds\V3\Model\SubscriptionOption',
            'jobSchedule' => '\HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule',
            'isSelectAllTable' => 'bool',
            'extendTables' => 'string[]',
            'tables' => '\HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoRequest[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionOptions' => 'subscription_options',
            'jobSchedule' => 'job_schedule',
            'isSelectAllTable' => 'is_select_all_table',
            'extendTables' => 'extend_tables',
            'tables' => 'tables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionOptions' => 'setSubscriptionOptions',
            'jobSchedule' => 'setJobSchedule',
            'isSelectAllTable' => 'setIsSelectAllTable',
            'extendTables' => 'setExtendTables',
            'tables' => 'setTables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionOptions  subscriptionOptions
    * jobSchedule  jobSchedule
    * isSelectAllTable  是否选择所有数据表。
    * extendTables  全选所有表后需要去除的表。
    * tables  发布数据表。
    *
    * @var string[]
    */
    protected static $getters = [
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
    * @return \HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule|null
    */
    public function getJobSchedule()
    {
        return $this->container['jobSchedule'];
    }

    /**
    * Sets jobSchedule
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule|null $jobSchedule jobSchedule
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
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoRequest[]|null
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableInfoRequest[]|null $tables 发布数据表。
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

