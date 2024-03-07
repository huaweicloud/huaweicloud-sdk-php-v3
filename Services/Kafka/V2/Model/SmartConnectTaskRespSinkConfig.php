<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartConnectTaskRespSinkConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartConnectTaskRespSinkConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时会显示）
    * redisType  Redis实例类型。（仅目标端类型为Redis时会显示）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时会显示）
    * targetDb  目标数据库，默认为-1。（仅目标端类型为Redis时会显示）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时会显示）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时会显示）
    * deliverTimeInterval  记数据转储周期（秒）。（仅目标端类型为OBS时会显示）
    * obsBucketName  转储地址。（仅目标端类型为OBS时会显示）
    * obsPath  转储目录。（仅目标端类型为OBS时会显示）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时会显示）
    * recordDelimiter  记录分行符。（仅目标端类型为OBS时会显示）
    * storeKeys  存储Key。（仅目标端类型为OBS时会显示）
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte；默认值5242880。（仅目标端类型为OBS时会显示）
    * flushSize  flush_size。（仅目标端类型为OBS时会显示）
    * timezone  时区。（仅目标端类型为OBS时会显示）
    * connectorClass  connector类，默认为\"com.huawei.dms.connector.obs.OBSSinkConnector\"。（仅目标端类型为OBS时会显示）
    * storageClass  storage类，默认为com.huawei.dms.connector.obs.storage.OBSStorage\"。（仅目标端类型为OBS时会显示）
    * formatClass  format类，默认为\"com.huawei.dms.connector.obs.format.bytearray.ByteArrayFormat\"。（仅目标端类型为OBS时会显示）
    * schemaGeneratorClass  schema_generator类，默认为\"io.confluent.connect.storage.hive.schema.DefaultSchemaGenerator\"。（仅目标端类型为OBS时会显示）
    * partitionerClass  partitioner类，默认\"io.confluent.connect.storage.partitioner.TimeBasedPartitioner\"。（仅目标端类型为OBS时会显示）
    * valueConverter  value_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * keyConverter  key_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * kvDelimiter  kv_delimiter，默认为\":\"。（仅目标端类型为OBS时会显示）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisAddress' => 'string',
            'redisType' => 'string',
            'dcsInstanceId' => 'string',
            'targetDb' => 'int',
            'consumerStrategy' => 'string',
            'destinationFileType' => 'string',
            'deliverTimeInterval' => 'int',
            'obsBucketName' => 'string',
            'obsPath' => 'string',
            'partitionFormat' => 'string',
            'recordDelimiter' => 'string',
            'storeKeys' => 'bool',
            'obsPartSize' => 'int',
            'flushSize' => 'int',
            'timezone' => 'string',
            'connectorClass' => 'string',
            'storageClass' => 'string',
            'formatClass' => 'string',
            'schemaGeneratorClass' => 'string',
            'partitionerClass' => 'string',
            'valueConverter' => 'string',
            'keyConverter' => 'string',
            'kvDelimiter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时会显示）
    * redisType  Redis实例类型。（仅目标端类型为Redis时会显示）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时会显示）
    * targetDb  目标数据库，默认为-1。（仅目标端类型为Redis时会显示）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时会显示）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时会显示）
    * deliverTimeInterval  记数据转储周期（秒）。（仅目标端类型为OBS时会显示）
    * obsBucketName  转储地址。（仅目标端类型为OBS时会显示）
    * obsPath  转储目录。（仅目标端类型为OBS时会显示）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时会显示）
    * recordDelimiter  记录分行符。（仅目标端类型为OBS时会显示）
    * storeKeys  存储Key。（仅目标端类型为OBS时会显示）
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte；默认值5242880。（仅目标端类型为OBS时会显示）
    * flushSize  flush_size。（仅目标端类型为OBS时会显示）
    * timezone  时区。（仅目标端类型为OBS时会显示）
    * connectorClass  connector类，默认为\"com.huawei.dms.connector.obs.OBSSinkConnector\"。（仅目标端类型为OBS时会显示）
    * storageClass  storage类，默认为com.huawei.dms.connector.obs.storage.OBSStorage\"。（仅目标端类型为OBS时会显示）
    * formatClass  format类，默认为\"com.huawei.dms.connector.obs.format.bytearray.ByteArrayFormat\"。（仅目标端类型为OBS时会显示）
    * schemaGeneratorClass  schema_generator类，默认为\"io.confluent.connect.storage.hive.schema.DefaultSchemaGenerator\"。（仅目标端类型为OBS时会显示）
    * partitionerClass  partitioner类，默认\"io.confluent.connect.storage.partitioner.TimeBasedPartitioner\"。（仅目标端类型为OBS时会显示）
    * valueConverter  value_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * keyConverter  key_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * kvDelimiter  kv_delimiter，默认为\":\"。（仅目标端类型为OBS时会显示）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisAddress' => null,
        'redisType' => null,
        'dcsInstanceId' => null,
        'targetDb' => null,
        'consumerStrategy' => null,
        'destinationFileType' => null,
        'deliverTimeInterval' => null,
        'obsBucketName' => null,
        'obsPath' => null,
        'partitionFormat' => null,
        'recordDelimiter' => null,
        'storeKeys' => null,
        'obsPartSize' => null,
        'flushSize' => null,
        'timezone' => null,
        'connectorClass' => null,
        'storageClass' => null,
        'formatClass' => null,
        'schemaGeneratorClass' => null,
        'partitionerClass' => null,
        'valueConverter' => null,
        'keyConverter' => null,
        'kvDelimiter' => null
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
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时会显示）
    * redisType  Redis实例类型。（仅目标端类型为Redis时会显示）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时会显示）
    * targetDb  目标数据库，默认为-1。（仅目标端类型为Redis时会显示）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时会显示）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时会显示）
    * deliverTimeInterval  记数据转储周期（秒）。（仅目标端类型为OBS时会显示）
    * obsBucketName  转储地址。（仅目标端类型为OBS时会显示）
    * obsPath  转储目录。（仅目标端类型为OBS时会显示）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时会显示）
    * recordDelimiter  记录分行符。（仅目标端类型为OBS时会显示）
    * storeKeys  存储Key。（仅目标端类型为OBS时会显示）
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte；默认值5242880。（仅目标端类型为OBS时会显示）
    * flushSize  flush_size。（仅目标端类型为OBS时会显示）
    * timezone  时区。（仅目标端类型为OBS时会显示）
    * connectorClass  connector类，默认为\"com.huawei.dms.connector.obs.OBSSinkConnector\"。（仅目标端类型为OBS时会显示）
    * storageClass  storage类，默认为com.huawei.dms.connector.obs.storage.OBSStorage\"。（仅目标端类型为OBS时会显示）
    * formatClass  format类，默认为\"com.huawei.dms.connector.obs.format.bytearray.ByteArrayFormat\"。（仅目标端类型为OBS时会显示）
    * schemaGeneratorClass  schema_generator类，默认为\"io.confluent.connect.storage.hive.schema.DefaultSchemaGenerator\"。（仅目标端类型为OBS时会显示）
    * partitionerClass  partitioner类，默认\"io.confluent.connect.storage.partitioner.TimeBasedPartitioner\"。（仅目标端类型为OBS时会显示）
    * valueConverter  value_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * keyConverter  key_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * kvDelimiter  kv_delimiter，默认为\":\"。（仅目标端类型为OBS时会显示）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisAddress' => 'redis_address',
            'redisType' => 'redis_type',
            'dcsInstanceId' => 'dcs_instance_id',
            'targetDb' => 'target_db',
            'consumerStrategy' => 'consumer_strategy',
            'destinationFileType' => 'destination_file_type',
            'deliverTimeInterval' => 'deliver_time_interval',
            'obsBucketName' => 'obs_bucket_name',
            'obsPath' => 'obs_path',
            'partitionFormat' => 'partition_format',
            'recordDelimiter' => 'record_delimiter',
            'storeKeys' => 'store_keys',
            'obsPartSize' => 'obs_part_size',
            'flushSize' => 'flush_size',
            'timezone' => 'timezone',
            'connectorClass' => 'connector_class',
            'storageClass' => 'storage_class',
            'formatClass' => 'format_class',
            'schemaGeneratorClass' => 'schema_generator_class',
            'partitionerClass' => 'partitioner_class',
            'valueConverter' => 'value_converter',
            'keyConverter' => 'key_converter',
            'kvDelimiter' => 'kv_delimiter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时会显示）
    * redisType  Redis实例类型。（仅目标端类型为Redis时会显示）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时会显示）
    * targetDb  目标数据库，默认为-1。（仅目标端类型为Redis时会显示）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时会显示）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时会显示）
    * deliverTimeInterval  记数据转储周期（秒）。（仅目标端类型为OBS时会显示）
    * obsBucketName  转储地址。（仅目标端类型为OBS时会显示）
    * obsPath  转储目录。（仅目标端类型为OBS时会显示）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时会显示）
    * recordDelimiter  记录分行符。（仅目标端类型为OBS时会显示）
    * storeKeys  存储Key。（仅目标端类型为OBS时会显示）
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte；默认值5242880。（仅目标端类型为OBS时会显示）
    * flushSize  flush_size。（仅目标端类型为OBS时会显示）
    * timezone  时区。（仅目标端类型为OBS时会显示）
    * connectorClass  connector类，默认为\"com.huawei.dms.connector.obs.OBSSinkConnector\"。（仅目标端类型为OBS时会显示）
    * storageClass  storage类，默认为com.huawei.dms.connector.obs.storage.OBSStorage\"。（仅目标端类型为OBS时会显示）
    * formatClass  format类，默认为\"com.huawei.dms.connector.obs.format.bytearray.ByteArrayFormat\"。（仅目标端类型为OBS时会显示）
    * schemaGeneratorClass  schema_generator类，默认为\"io.confluent.connect.storage.hive.schema.DefaultSchemaGenerator\"。（仅目标端类型为OBS时会显示）
    * partitionerClass  partitioner类，默认\"io.confluent.connect.storage.partitioner.TimeBasedPartitioner\"。（仅目标端类型为OBS时会显示）
    * valueConverter  value_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * keyConverter  key_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * kvDelimiter  kv_delimiter，默认为\":\"。（仅目标端类型为OBS时会显示）
    *
    * @var string[]
    */
    protected static $setters = [
            'redisAddress' => 'setRedisAddress',
            'redisType' => 'setRedisType',
            'dcsInstanceId' => 'setDcsInstanceId',
            'targetDb' => 'setTargetDb',
            'consumerStrategy' => 'setConsumerStrategy',
            'destinationFileType' => 'setDestinationFileType',
            'deliverTimeInterval' => 'setDeliverTimeInterval',
            'obsBucketName' => 'setObsBucketName',
            'obsPath' => 'setObsPath',
            'partitionFormat' => 'setPartitionFormat',
            'recordDelimiter' => 'setRecordDelimiter',
            'storeKeys' => 'setStoreKeys',
            'obsPartSize' => 'setObsPartSize',
            'flushSize' => 'setFlushSize',
            'timezone' => 'setTimezone',
            'connectorClass' => 'setConnectorClass',
            'storageClass' => 'setStorageClass',
            'formatClass' => 'setFormatClass',
            'schemaGeneratorClass' => 'setSchemaGeneratorClass',
            'partitionerClass' => 'setPartitionerClass',
            'valueConverter' => 'setValueConverter',
            'keyConverter' => 'setKeyConverter',
            'kvDelimiter' => 'setKvDelimiter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时会显示）
    * redisType  Redis实例类型。（仅目标端类型为Redis时会显示）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时会显示）
    * targetDb  目标数据库，默认为-1。（仅目标端类型为Redis时会显示）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时会显示）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时会显示）
    * deliverTimeInterval  记数据转储周期（秒）。（仅目标端类型为OBS时会显示）
    * obsBucketName  转储地址。（仅目标端类型为OBS时会显示）
    * obsPath  转储目录。（仅目标端类型为OBS时会显示）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时会显示）
    * recordDelimiter  记录分行符。（仅目标端类型为OBS时会显示）
    * storeKeys  存储Key。（仅目标端类型为OBS时会显示）
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte；默认值5242880。（仅目标端类型为OBS时会显示）
    * flushSize  flush_size。（仅目标端类型为OBS时会显示）
    * timezone  时区。（仅目标端类型为OBS时会显示）
    * connectorClass  connector类，默认为\"com.huawei.dms.connector.obs.OBSSinkConnector\"。（仅目标端类型为OBS时会显示）
    * storageClass  storage类，默认为com.huawei.dms.connector.obs.storage.OBSStorage\"。（仅目标端类型为OBS时会显示）
    * formatClass  format类，默认为\"com.huawei.dms.connector.obs.format.bytearray.ByteArrayFormat\"。（仅目标端类型为OBS时会显示）
    * schemaGeneratorClass  schema_generator类，默认为\"io.confluent.connect.storage.hive.schema.DefaultSchemaGenerator\"。（仅目标端类型为OBS时会显示）
    * partitionerClass  partitioner类，默认\"io.confluent.connect.storage.partitioner.TimeBasedPartitioner\"。（仅目标端类型为OBS时会显示）
    * valueConverter  value_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * keyConverter  key_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    * kvDelimiter  kv_delimiter，默认为\":\"。（仅目标端类型为OBS时会显示）
    *
    * @var string[]
    */
    protected static $getters = [
            'redisAddress' => 'getRedisAddress',
            'redisType' => 'getRedisType',
            'dcsInstanceId' => 'getDcsInstanceId',
            'targetDb' => 'getTargetDb',
            'consumerStrategy' => 'getConsumerStrategy',
            'destinationFileType' => 'getDestinationFileType',
            'deliverTimeInterval' => 'getDeliverTimeInterval',
            'obsBucketName' => 'getObsBucketName',
            'obsPath' => 'getObsPath',
            'partitionFormat' => 'getPartitionFormat',
            'recordDelimiter' => 'getRecordDelimiter',
            'storeKeys' => 'getStoreKeys',
            'obsPartSize' => 'getObsPartSize',
            'flushSize' => 'getFlushSize',
            'timezone' => 'getTimezone',
            'connectorClass' => 'getConnectorClass',
            'storageClass' => 'getStorageClass',
            'formatClass' => 'getFormatClass',
            'schemaGeneratorClass' => 'getSchemaGeneratorClass',
            'partitionerClass' => 'getPartitionerClass',
            'valueConverter' => 'getValueConverter',
            'keyConverter' => 'getKeyConverter',
            'kvDelimiter' => 'getKvDelimiter'
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
        $this->container['redisAddress'] = isset($data['redisAddress']) ? $data['redisAddress'] : null;
        $this->container['redisType'] = isset($data['redisType']) ? $data['redisType'] : null;
        $this->container['dcsInstanceId'] = isset($data['dcsInstanceId']) ? $data['dcsInstanceId'] : null;
        $this->container['targetDb'] = isset($data['targetDb']) ? $data['targetDb'] : null;
        $this->container['consumerStrategy'] = isset($data['consumerStrategy']) ? $data['consumerStrategy'] : null;
        $this->container['destinationFileType'] = isset($data['destinationFileType']) ? $data['destinationFileType'] : null;
        $this->container['deliverTimeInterval'] = isset($data['deliverTimeInterval']) ? $data['deliverTimeInterval'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsPath'] = isset($data['obsPath']) ? $data['obsPath'] : null;
        $this->container['partitionFormat'] = isset($data['partitionFormat']) ? $data['partitionFormat'] : null;
        $this->container['recordDelimiter'] = isset($data['recordDelimiter']) ? $data['recordDelimiter'] : null;
        $this->container['storeKeys'] = isset($data['storeKeys']) ? $data['storeKeys'] : null;
        $this->container['obsPartSize'] = isset($data['obsPartSize']) ? $data['obsPartSize'] : null;
        $this->container['flushSize'] = isset($data['flushSize']) ? $data['flushSize'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['connectorClass'] = isset($data['connectorClass']) ? $data['connectorClass'] : null;
        $this->container['storageClass'] = isset($data['storageClass']) ? $data['storageClass'] : null;
        $this->container['formatClass'] = isset($data['formatClass']) ? $data['formatClass'] : null;
        $this->container['schemaGeneratorClass'] = isset($data['schemaGeneratorClass']) ? $data['schemaGeneratorClass'] : null;
        $this->container['partitionerClass'] = isset($data['partitionerClass']) ? $data['partitionerClass'] : null;
        $this->container['valueConverter'] = isset($data['valueConverter']) ? $data['valueConverter'] : null;
        $this->container['keyConverter'] = isset($data['keyConverter']) ? $data['keyConverter'] : null;
        $this->container['kvDelimiter'] = isset($data['kvDelimiter']) ? $data['kvDelimiter'] : null;
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
    * Gets redisAddress
    *  Redis实例地址。（仅目标端类型为Redis时会显示）
    *
    * @return string|null
    */
    public function getRedisAddress()
    {
        return $this->container['redisAddress'];
    }

    /**
    * Sets redisAddress
    *
    * @param string|null $redisAddress Redis实例地址。（仅目标端类型为Redis时会显示）
    *
    * @return $this
    */
    public function setRedisAddress($redisAddress)
    {
        $this->container['redisAddress'] = $redisAddress;
        return $this;
    }

    /**
    * Gets redisType
    *  Redis实例类型。（仅目标端类型为Redis时会显示）
    *
    * @return string|null
    */
    public function getRedisType()
    {
        return $this->container['redisType'];
    }

    /**
    * Sets redisType
    *
    * @param string|null $redisType Redis实例类型。（仅目标端类型为Redis时会显示）
    *
    * @return $this
    */
    public function setRedisType($redisType)
    {
        $this->container['redisType'] = $redisType;
        return $this;
    }

    /**
    * Gets dcsInstanceId
    *  DCS实例ID。（仅目标端类型为Redis时会显示）
    *
    * @return string|null
    */
    public function getDcsInstanceId()
    {
        return $this->container['dcsInstanceId'];
    }

    /**
    * Sets dcsInstanceId
    *
    * @param string|null $dcsInstanceId DCS实例ID。（仅目标端类型为Redis时会显示）
    *
    * @return $this
    */
    public function setDcsInstanceId($dcsInstanceId)
    {
        $this->container['dcsInstanceId'] = $dcsInstanceId;
        return $this;
    }

    /**
    * Gets targetDb
    *  目标数据库，默认为-1。（仅目标端类型为Redis时会显示）
    *
    * @return int|null
    */
    public function getTargetDb()
    {
        return $this->container['targetDb'];
    }

    /**
    * Sets targetDb
    *
    * @param int|null $targetDb 目标数据库，默认为-1。（仅目标端类型为Redis时会显示）
    *
    * @return $this
    */
    public function setTargetDb($targetDb)
    {
        $this->container['targetDb'] = $targetDb;
        return $this;
    }

    /**
    * Gets consumerStrategy
    *  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getConsumerStrategy()
    {
        return $this->container['consumerStrategy'];
    }

    /**
    * Sets consumerStrategy
    *
    * @param string|null $consumerStrategy 转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setConsumerStrategy($consumerStrategy)
    {
        $this->container['consumerStrategy'] = $consumerStrategy;
        return $this;
    }

    /**
    * Gets destinationFileType
    *  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getDestinationFileType()
    {
        return $this->container['destinationFileType'];
    }

    /**
    * Sets destinationFileType
    *
    * @param string|null $destinationFileType 转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setDestinationFileType($destinationFileType)
    {
        $this->container['destinationFileType'] = $destinationFileType;
        return $this;
    }

    /**
    * Gets deliverTimeInterval
    *  记数据转储周期（秒）。（仅目标端类型为OBS时会显示）
    *
    * @return int|null
    */
    public function getDeliverTimeInterval()
    {
        return $this->container['deliverTimeInterval'];
    }

    /**
    * Sets deliverTimeInterval
    *
    * @param int|null $deliverTimeInterval 记数据转储周期（秒）。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setDeliverTimeInterval($deliverTimeInterval)
    {
        $this->container['deliverTimeInterval'] = $deliverTimeInterval;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  转储地址。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string|null $obsBucketName 转储地址。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets obsPath
    *  转储目录。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getObsPath()
    {
        return $this->container['obsPath'];
    }

    /**
    * Sets obsPath
    *
    * @param string|null $obsPath 转储目录。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setObsPath($obsPath)
    {
        $this->container['obsPath'] = $obsPath;
        return $this;
    }

    /**
    * Gets partitionFormat
    *  时间目录格式。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getPartitionFormat()
    {
        return $this->container['partitionFormat'];
    }

    /**
    * Sets partitionFormat
    *
    * @param string|null $partitionFormat 时间目录格式。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setPartitionFormat($partitionFormat)
    {
        $this->container['partitionFormat'] = $partitionFormat;
        return $this;
    }

    /**
    * Gets recordDelimiter
    *  记录分行符。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getRecordDelimiter()
    {
        return $this->container['recordDelimiter'];
    }

    /**
    * Sets recordDelimiter
    *
    * @param string|null $recordDelimiter 记录分行符。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setRecordDelimiter($recordDelimiter)
    {
        $this->container['recordDelimiter'] = $recordDelimiter;
        return $this;
    }

    /**
    * Gets storeKeys
    *  存储Key。（仅目标端类型为OBS时会显示）
    *
    * @return bool|null
    */
    public function getStoreKeys()
    {
        return $this->container['storeKeys'];
    }

    /**
    * Sets storeKeys
    *
    * @param bool|null $storeKeys 存储Key。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setStoreKeys($storeKeys)
    {
        $this->container['storeKeys'] = $storeKeys;
        return $this;
    }

    /**
    * Gets obsPartSize
    *  每个传输文件多大后就开始上传，单位为byte；默认值5242880。（仅目标端类型为OBS时会显示）
    *
    * @return int|null
    */
    public function getObsPartSize()
    {
        return $this->container['obsPartSize'];
    }

    /**
    * Sets obsPartSize
    *
    * @param int|null $obsPartSize 每个传输文件多大后就开始上传，单位为byte；默认值5242880。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setObsPartSize($obsPartSize)
    {
        $this->container['obsPartSize'] = $obsPartSize;
        return $this;
    }

    /**
    * Gets flushSize
    *  flush_size。（仅目标端类型为OBS时会显示）
    *
    * @return int|null
    */
    public function getFlushSize()
    {
        return $this->container['flushSize'];
    }

    /**
    * Sets flushSize
    *
    * @param int|null $flushSize flush_size。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setFlushSize($flushSize)
    {
        $this->container['flushSize'] = $flushSize;
        return $this;
    }

    /**
    * Gets timezone
    *  时区。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone 时区。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets connectorClass
    *  connector类，默认为\"com.huawei.dms.connector.obs.OBSSinkConnector\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getConnectorClass()
    {
        return $this->container['connectorClass'];
    }

    /**
    * Sets connectorClass
    *
    * @param string|null $connectorClass connector类，默认为\"com.huawei.dms.connector.obs.OBSSinkConnector\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setConnectorClass($connectorClass)
    {
        $this->container['connectorClass'] = $connectorClass;
        return $this;
    }

    /**
    * Gets storageClass
    *  storage类，默认为com.huawei.dms.connector.obs.storage.OBSStorage\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getStorageClass()
    {
        return $this->container['storageClass'];
    }

    /**
    * Sets storageClass
    *
    * @param string|null $storageClass storage类，默认为com.huawei.dms.connector.obs.storage.OBSStorage\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setStorageClass($storageClass)
    {
        $this->container['storageClass'] = $storageClass;
        return $this;
    }

    /**
    * Gets formatClass
    *  format类，默认为\"com.huawei.dms.connector.obs.format.bytearray.ByteArrayFormat\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getFormatClass()
    {
        return $this->container['formatClass'];
    }

    /**
    * Sets formatClass
    *
    * @param string|null $formatClass format类，默认为\"com.huawei.dms.connector.obs.format.bytearray.ByteArrayFormat\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setFormatClass($formatClass)
    {
        $this->container['formatClass'] = $formatClass;
        return $this;
    }

    /**
    * Gets schemaGeneratorClass
    *  schema_generator类，默认为\"io.confluent.connect.storage.hive.schema.DefaultSchemaGenerator\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getSchemaGeneratorClass()
    {
        return $this->container['schemaGeneratorClass'];
    }

    /**
    * Sets schemaGeneratorClass
    *
    * @param string|null $schemaGeneratorClass schema_generator类，默认为\"io.confluent.connect.storage.hive.schema.DefaultSchemaGenerator\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setSchemaGeneratorClass($schemaGeneratorClass)
    {
        $this->container['schemaGeneratorClass'] = $schemaGeneratorClass;
        return $this;
    }

    /**
    * Gets partitionerClass
    *  partitioner类，默认\"io.confluent.connect.storage.partitioner.TimeBasedPartitioner\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getPartitionerClass()
    {
        return $this->container['partitionerClass'];
    }

    /**
    * Sets partitionerClass
    *
    * @param string|null $partitionerClass partitioner类，默认\"io.confluent.connect.storage.partitioner.TimeBasedPartitioner\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setPartitionerClass($partitionerClass)
    {
        $this->container['partitionerClass'] = $partitionerClass;
        return $this;
    }

    /**
    * Gets valueConverter
    *  value_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getValueConverter()
    {
        return $this->container['valueConverter'];
    }

    /**
    * Sets valueConverter
    *
    * @param string|null $valueConverter value_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setValueConverter($valueConverter)
    {
        $this->container['valueConverter'] = $valueConverter;
        return $this;
    }

    /**
    * Gets keyConverter
    *  key_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getKeyConverter()
    {
        return $this->container['keyConverter'];
    }

    /**
    * Sets keyConverter
    *
    * @param string|null $keyConverter key_converter，默认为\"org.apache.kafka.connect.converters.ByteArrayConverter\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setKeyConverter($keyConverter)
    {
        $this->container['keyConverter'] = $keyConverter;
        return $this;
    }

    /**
    * Gets kvDelimiter
    *  kv_delimiter，默认为\":\"。（仅目标端类型为OBS时会显示）
    *
    * @return string|null
    */
    public function getKvDelimiter()
    {
        return $this->container['kvDelimiter'];
    }

    /**
    * Sets kvDelimiter
    *
    * @param string|null $kvDelimiter kv_delimiter，默认为\":\"。（仅目标端类型为OBS时会显示）
    *
    * @return $this
    */
    public function setKvDelimiter($kvDelimiter)
    {
        $this->container['kvDelimiter'] = $kvDelimiter;
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

