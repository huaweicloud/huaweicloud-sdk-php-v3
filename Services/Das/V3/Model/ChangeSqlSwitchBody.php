<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeSqlSwitchBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeSqlSwitchBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  开关类型。取值DAS SQL Explorer和DAS Slow Query Log，分别表示DAS收集全量SQL开关和DAS收集慢SQL开关。
    * status  开关状态，取值0和1，分别代表要关闭和开启。
    * datastoreType  数据库类型。当前全量SQL支持的数据库类型包括MySQL和GaussDB(for MySQL)，慢SQL支持的类型：MySQL、GaussDB(for MySQL)、PostgreSQL。
    * retentionDays  SQL数据保存时长（天）。默认为7天，最长可保留30天，到期后数据自动删除。如果要保留30天以上，请到DAS页面进行操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'status' => 'int',
            'datastoreType' => 'string',
            'retentionDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  开关类型。取值DAS SQL Explorer和DAS Slow Query Log，分别表示DAS收集全量SQL开关和DAS收集慢SQL开关。
    * status  开关状态，取值0和1，分别代表要关闭和开启。
    * datastoreType  数据库类型。当前全量SQL支持的数据库类型包括MySQL和GaussDB(for MySQL)，慢SQL支持的类型：MySQL、GaussDB(for MySQL)、PostgreSQL。
    * retentionDays  SQL数据保存时长（天）。默认为7天，最长可保留30天，到期后数据自动删除。如果要保留30天以上，请到DAS页面进行操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'status' => 'int32',
        'datastoreType' => null,
        'retentionDays' => 'int64'
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
    * type  开关类型。取值DAS SQL Explorer和DAS Slow Query Log，分别表示DAS收集全量SQL开关和DAS收集慢SQL开关。
    * status  开关状态，取值0和1，分别代表要关闭和开启。
    * datastoreType  数据库类型。当前全量SQL支持的数据库类型包括MySQL和GaussDB(for MySQL)，慢SQL支持的类型：MySQL、GaussDB(for MySQL)、PostgreSQL。
    * retentionDays  SQL数据保存时长（天）。默认为7天，最长可保留30天，到期后数据自动删除。如果要保留30天以上，请到DAS页面进行操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'status' => 'status',
            'datastoreType' => 'datastore_type',
            'retentionDays' => 'retention_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  开关类型。取值DAS SQL Explorer和DAS Slow Query Log，分别表示DAS收集全量SQL开关和DAS收集慢SQL开关。
    * status  开关状态，取值0和1，分别代表要关闭和开启。
    * datastoreType  数据库类型。当前全量SQL支持的数据库类型包括MySQL和GaussDB(for MySQL)，慢SQL支持的类型：MySQL、GaussDB(for MySQL)、PostgreSQL。
    * retentionDays  SQL数据保存时长（天）。默认为7天，最长可保留30天，到期后数据自动删除。如果要保留30天以上，请到DAS页面进行操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'status' => 'setStatus',
            'datastoreType' => 'setDatastoreType',
            'retentionDays' => 'setRetentionDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  开关类型。取值DAS SQL Explorer和DAS Slow Query Log，分别表示DAS收集全量SQL开关和DAS收集慢SQL开关。
    * status  开关状态，取值0和1，分别代表要关闭和开启。
    * datastoreType  数据库类型。当前全量SQL支持的数据库类型包括MySQL和GaussDB(for MySQL)，慢SQL支持的类型：MySQL、GaussDB(for MySQL)、PostgreSQL。
    * retentionDays  SQL数据保存时长（天）。默认为7天，最长可保留30天，到期后数据自动删除。如果要保留30天以上，请到DAS页面进行操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'status' => 'getStatus',
            'datastoreType' => 'getDatastoreType',
            'retentionDays' => 'getRetentionDays'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
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
    * Gets type
    *  开关类型。取值DAS SQL Explorer和DAS Slow Query Log，分别表示DAS收集全量SQL开关和DAS收集慢SQL开关。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 开关类型。取值DAS SQL Explorer和DAS Slow Query Log，分别表示DAS收集全量SQL开关和DAS收集慢SQL开关。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  开关状态，取值0和1，分别代表要关闭和开启。
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 开关状态，取值0和1，分别代表要关闭和开启。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型。当前全量SQL支持的数据库类型包括MySQL和GaussDB(for MySQL)，慢SQL支持的类型：MySQL、GaussDB(for MySQL)、PostgreSQL。
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 数据库类型。当前全量SQL支持的数据库类型包括MySQL和GaussDB(for MySQL)，慢SQL支持的类型：MySQL、GaussDB(for MySQL)、PostgreSQL。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets retentionDays
    *  SQL数据保存时长（天）。默认为7天，最长可保留30天，到期后数据自动删除。如果要保留30天以上，请到DAS页面进行操作。
    *
    * @return int|null
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int|null $retentionDays SQL数据保存时长（天）。默认为7天，最长可保留30天，到期后数据自动删除。如果要保留30天以上，请到DAS页面进行操作。
    *
    * @return $this
    */
    public function setRetentionDays($retentionDays)
    {
        $this->container['retentionDays'] = $retentionDays;
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

