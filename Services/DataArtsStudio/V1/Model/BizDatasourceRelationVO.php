<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BizDatasourceRelationVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BizDatasourceRelationVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * bizId  业务对象信息，填写String类型替代Long类型。
    * bizType  bizType
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwId  数据连接ID。
    * dwName  数据连接名，只读。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'bizId' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'dwType' => 'string',
            'dwId' => 'string',
            'dwName' => 'string',
            'dbName' => 'string',
            'queueName' => 'string',
            'schema' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * bizId  业务对象信息，填写String类型替代Long类型。
    * bizType  bizType
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwId  数据连接ID。
    * dwName  数据连接名，只读。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'bizId' => null,
        'bizType' => null,
        'dwType' => null,
        'dwId' => null,
        'dwName' => null,
        'dbName' => null,
        'queueName' => null,
        'schema' => null
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
    * id  编码，填写String类型替代Long类型。
    * bizId  业务对象信息，填写String类型替代Long类型。
    * bizType  bizType
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwId  数据连接ID。
    * dwName  数据连接名，只读。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'bizId' => 'biz_id',
            'bizType' => 'biz_type',
            'dwType' => 'dw_type',
            'dwId' => 'dw_id',
            'dwName' => 'dw_name',
            'dbName' => 'db_name',
            'queueName' => 'queue_name',
            'schema' => 'schema'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，填写String类型替代Long类型。
    * bizId  业务对象信息，填写String类型替代Long类型。
    * bizType  bizType
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwId  数据连接ID。
    * dwName  数据连接名，只读。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'bizId' => 'setBizId',
            'bizType' => 'setBizType',
            'dwType' => 'setDwType',
            'dwId' => 'setDwId',
            'dwName' => 'setDwName',
            'dbName' => 'setDbName',
            'queueName' => 'setQueueName',
            'schema' => 'setSchema'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，填写String类型替代Long类型。
    * bizId  业务对象信息，填写String类型替代Long类型。
    * bizType  bizType
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * dwId  数据连接ID。
    * dwName  数据连接名，只读。
    * dbName  数据库名。
    * queueName  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    * schema  DWS类型需要。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'bizId' => 'getBizId',
            'bizType' => 'getBizType',
            'dwType' => 'getDwType',
            'dwId' => 'getDwId',
            'dwName' => 'getDwName',
            'dbName' => 'getDbName',
            'queueName' => 'getQueueName',
            'schema' => 'getSchema'
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
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dwType'] === null) {
            $invalidProperties[] = "'dwType' can't be null";
        }
        if ($this->container['dwId'] === null) {
            $invalidProperties[] = "'dwId' can't be null";
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
    * Gets id
    *  编码，填写String类型替代Long类型。
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
    * @param string|null $id 编码，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets bizId
    *  业务对象信息，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string|null $bizId 业务对象信息，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return string
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string $dwType 数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets dwId
    *  数据连接ID。
    *
    * @return string
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string $dwId 数据连接ID。
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets dwName
    *  数据连接名，只读。
    *
    * @return string|null
    */
    public function getDwName()
    {
        return $this->container['dwName'];
    }

    /**
    * Sets dwName
    *
    * @param string|null $dwName 数据连接名，只读。
    *
    * @return $this
    */
    public function setDwName($dwName)
    {
        $this->container['dwName'] = $dwName;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets queueName
    *  dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName dli数据连接执行sql所需的队列，数据连接类型为DLI时必须。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets schema
    *  DWS类型需要。
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema DWS类型需要。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
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

