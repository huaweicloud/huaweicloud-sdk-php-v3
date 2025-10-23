<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  参数解释： 实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值： 不涉及。
    * datastoreType  参数解释： 数据库类型。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值：  - cassandra  - redis  - mongodb  - influxdb
    * backupId  备份ID。
    * backupType  参数解释： 备份类型，大小写敏感。 约束限制： 不涉及。 取值范围：  - 取值为“Auto”，表示自动全量备份。  - 取值为“Manual”，表示手动全量备份。  - 当该字段未传入值时，默认只查询所有的全量备份(包含库表级)，包括自动全备备份和手动全量备份。 默认取值： 不涉及。
    * type  参数解释： 备份策略类型。 约束限制： 不涉及。 取值范围：  - Instance 表示查询实例级备份。  - DatabaseTable 表示查询库表级备份。 默认取值：  Instance。
    * limit  参数解释： 查询备份个数上限值。 约束限制： 不涉及。 取值范围： 1~100。 默认取值： 不传该参数时，默认查询前100条实例信息。
    * offset  参数解释： 索引位置偏移量，表示从指定project ID下最新的备份创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的备份信息。 约束限制： 取值大于或等于0。 取值范围： 取值大于或等于0。 默认取值： 不传该参数时，查询偏移量默认为0，表示从最新的备份创建时间对应的备份开始查询。
    * beginTime  参数解释： 查询备份开始的时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “end_time”有值时，“begin_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    * endTime  参数解释： 查询备份开始的结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “begin_time”有值时，“end_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'datastoreType' => 'string',
            'backupId' => 'string',
            'backupType' => 'string',
            'type' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'beginTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  参数解释： 实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值： 不涉及。
    * datastoreType  参数解释： 数据库类型。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值：  - cassandra  - redis  - mongodb  - influxdb
    * backupId  备份ID。
    * backupType  参数解释： 备份类型，大小写敏感。 约束限制： 不涉及。 取值范围：  - 取值为“Auto”，表示自动全量备份。  - 取值为“Manual”，表示手动全量备份。  - 当该字段未传入值时，默认只查询所有的全量备份(包含库表级)，包括自动全备备份和手动全量备份。 默认取值： 不涉及。
    * type  参数解释： 备份策略类型。 约束限制： 不涉及。 取值范围：  - Instance 表示查询实例级备份。  - DatabaseTable 表示查询库表级备份。 默认取值：  Instance。
    * limit  参数解释： 查询备份个数上限值。 约束限制： 不涉及。 取值范围： 1~100。 默认取值： 不传该参数时，默认查询前100条实例信息。
    * offset  参数解释： 索引位置偏移量，表示从指定project ID下最新的备份创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的备份信息。 约束限制： 取值大于或等于0。 取值范围： 取值大于或等于0。 默认取值： 不传该参数时，查询偏移量默认为0，表示从最新的备份创建时间对应的备份开始查询。
    * beginTime  参数解释： 查询备份开始的时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “end_time”有值时，“begin_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    * endTime  参数解释： 查询备份开始的结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “begin_time”有值时，“end_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'datastoreType' => null,
        'backupId' => null,
        'backupType' => null,
        'type' => null,
        'limit' => null,
        'offset' => null,
        'beginTime' => null,
        'endTime' => null
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
    * instanceId  参数解释： 实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值： 不涉及。
    * datastoreType  参数解释： 数据库类型。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值：  - cassandra  - redis  - mongodb  - influxdb
    * backupId  备份ID。
    * backupType  参数解释： 备份类型，大小写敏感。 约束限制： 不涉及。 取值范围：  - 取值为“Auto”，表示自动全量备份。  - 取值为“Manual”，表示手动全量备份。  - 当该字段未传入值时，默认只查询所有的全量备份(包含库表级)，包括自动全备备份和手动全量备份。 默认取值： 不涉及。
    * type  参数解释： 备份策略类型。 约束限制： 不涉及。 取值范围：  - Instance 表示查询实例级备份。  - DatabaseTable 表示查询库表级备份。 默认取值：  Instance。
    * limit  参数解释： 查询备份个数上限值。 约束限制： 不涉及。 取值范围： 1~100。 默认取值： 不传该参数时，默认查询前100条实例信息。
    * offset  参数解释： 索引位置偏移量，表示从指定project ID下最新的备份创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的备份信息。 约束限制： 取值大于或等于0。 取值范围： 取值大于或等于0。 默认取值： 不传该参数时，查询偏移量默认为0，表示从最新的备份创建时间对应的备份开始查询。
    * beginTime  参数解释： 查询备份开始的时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “end_time”有值时，“begin_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    * endTime  参数解释： 查询备份开始的结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “begin_time”有值时，“end_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'datastoreType' => 'datastore_type',
            'backupId' => 'backup_id',
            'backupType' => 'backup_type',
            'type' => 'type',
            'limit' => 'limit',
            'offset' => 'offset',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  参数解释： 实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值： 不涉及。
    * datastoreType  参数解释： 数据库类型。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值：  - cassandra  - redis  - mongodb  - influxdb
    * backupId  备份ID。
    * backupType  参数解释： 备份类型，大小写敏感。 约束限制： 不涉及。 取值范围：  - 取值为“Auto”，表示自动全量备份。  - 取值为“Manual”，表示手动全量备份。  - 当该字段未传入值时，默认只查询所有的全量备份(包含库表级)，包括自动全备备份和手动全量备份。 默认取值： 不涉及。
    * type  参数解释： 备份策略类型。 约束限制： 不涉及。 取值范围：  - Instance 表示查询实例级备份。  - DatabaseTable 表示查询库表级备份。 默认取值：  Instance。
    * limit  参数解释： 查询备份个数上限值。 约束限制： 不涉及。 取值范围： 1~100。 默认取值： 不传该参数时，默认查询前100条实例信息。
    * offset  参数解释： 索引位置偏移量，表示从指定project ID下最新的备份创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的备份信息。 约束限制： 取值大于或等于0。 取值范围： 取值大于或等于0。 默认取值： 不传该参数时，查询偏移量默认为0，表示从最新的备份创建时间对应的备份开始查询。
    * beginTime  参数解释： 查询备份开始的时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “end_time”有值时，“begin_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    * endTime  参数解释： 查询备份开始的结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “begin_time”有值时，“end_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'datastoreType' => 'setDatastoreType',
            'backupId' => 'setBackupId',
            'backupType' => 'setBackupType',
            'type' => 'setType',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  参数解释： 实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值： 不涉及。
    * datastoreType  参数解释： 数据库类型。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值：  - cassandra  - redis  - mongodb  - influxdb
    * backupId  备份ID。
    * backupType  参数解释： 备份类型，大小写敏感。 约束限制： 不涉及。 取值范围：  - 取值为“Auto”，表示自动全量备份。  - 取值为“Manual”，表示手动全量备份。  - 当该字段未传入值时，默认只查询所有的全量备份(包含库表级)，包括自动全备备份和手动全量备份。 默认取值： 不涉及。
    * type  参数解释： 备份策略类型。 约束限制： 不涉及。 取值范围：  - Instance 表示查询实例级备份。  - DatabaseTable 表示查询库表级备份。 默认取值：  Instance。
    * limit  参数解释： 查询备份个数上限值。 约束限制： 不涉及。 取值范围： 1~100。 默认取值： 不传该参数时，默认查询前100条实例信息。
    * offset  参数解释： 索引位置偏移量，表示从指定project ID下最新的备份创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的备份信息。 约束限制： 取值大于或等于0。 取值范围： 取值大于或等于0。 默认取值： 不传该参数时，查询偏移量默认为0，表示从最新的备份创建时间对应的备份开始查询。
    * beginTime  参数解释： 查询备份开始的时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “end_time”有值时，“begin_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    * endTime  参数解释： 查询备份开始的结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “begin_time”有值时，“end_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'datastoreType' => 'getDatastoreType',
            'backupId' => 'getBackupId',
            'backupType' => 'getBackupType',
            'type' => 'getType',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  参数解释： 实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 参数解释： 实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets datastoreType
    *  参数解释： 数据库类型。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值：  - cassandra  - redis  - mongodb  - influxdb
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 参数解释： 数据库类型。 约束限制： 不涉及。 取值范围： 不涉及。 默认取值：  - cassandra  - redis  - mongodb  - influxdb
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets backupId
    *  备份ID。
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份ID。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets backupType
    *  参数解释： 备份类型，大小写敏感。 约束限制： 不涉及。 取值范围：  - 取值为“Auto”，表示自动全量备份。  - 取值为“Manual”，表示手动全量备份。  - 当该字段未传入值时，默认只查询所有的全量备份(包含库表级)，包括自动全备备份和手动全量备份。 默认取值： 不涉及。
    *
    * @return string|null
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string|null $backupType 参数解释： 备份类型，大小写敏感。 约束限制： 不涉及。 取值范围：  - 取值为“Auto”，表示自动全量备份。  - 取值为“Manual”，表示手动全量备份。  - 当该字段未传入值时，默认只查询所有的全量备份(包含库表级)，包括自动全备备份和手动全量备份。 默认取值： 不涉及。
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets type
    *  参数解释： 备份策略类型。 约束限制： 不涉及。 取值范围：  - Instance 表示查询实例级备份。  - DatabaseTable 表示查询库表级备份。 默认取值：  Instance。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 参数解释： 备份策略类型。 约束限制： 不涉及。 取值范围：  - Instance 表示查询实例级备份。  - DatabaseTable 表示查询库表级备份。 默认取值：  Instance。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  参数解释： 查询备份个数上限值。 约束限制： 不涉及。 取值范围： 1~100。 默认取值： 不传该参数时，默认查询前100条实例信息。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 参数解释： 查询备份个数上限值。 约束限制： 不涉及。 取值范围： 1~100。 默认取值： 不传该参数时，默认查询前100条实例信息。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  参数解释： 索引位置偏移量，表示从指定project ID下最新的备份创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的备份信息。 约束限制： 取值大于或等于0。 取值范围： 取值大于或等于0。 默认取值： 不传该参数时，查询偏移量默认为0，表示从最新的备份创建时间对应的备份开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 参数解释： 索引位置偏移量，表示从指定project ID下最新的备份创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的备份信息。 约束限制： 取值大于或等于0。 取值范围： 取值大于或等于0。 默认取值： 不传该参数时，查询偏移量默认为0，表示从最新的备份创建时间对应的备份开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets beginTime
    *  参数解释： 查询备份开始的时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “end_time”有值时，“begin_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 参数解释： 查询备份开始的时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “end_time”有值时，“begin_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  参数解释： 查询备份开始的结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “begin_time”有值时，“end_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 参数解释： 查询备份开始的结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。 约束限制： - “begin_time”有值时，“end_time”必选。 取值范围： 不涉及。 默认取值： 默认为空。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

