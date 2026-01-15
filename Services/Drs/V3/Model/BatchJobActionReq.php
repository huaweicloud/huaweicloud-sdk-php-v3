<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchJobActionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchJobActionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  需要执行的特定操作。
    * jobId  任务ID（集群模式 取父任务的任务ID）。
    * property  操作对应的参数（API参考文档-批量测试连接-集群模式-property字段数据结构说明）[字段说明参考](https://support.huaweicloud.com/api-drs/drs_03_0106.html dbtype参数取值：mysql, taurusha, sqlserver, postgresql, ddm, mongodb, awsdocumentdb, hwmongodb, hwpostgresql, oracle, taurus, gaussdb, kafka, mrsKafka, cassandra, dynamo, dws, gaussdbv5, gaussdbv5ha, gaussmongodb, multigaussdbv5, dmq, gaussdbt, gaussdbtha, gaussdb300, elasticsearch, db2, tidb, redis, gaussredis, rediscluster, mariadb, oceanbase, informix, gaussdbv1, gausscassandra, geminidynamo, dds, tauruslite, star-rocks, gaussdbformysqllite, taurus-postgresql, thl, opengauss, ddmforgaussdb, gaussdbmultimaster
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'jobId' => 'string',
            'property' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  需要执行的特定操作。
    * jobId  任务ID（集群模式 取父任务的任务ID）。
    * property  操作对应的参数（API参考文档-批量测试连接-集群模式-property字段数据结构说明）[字段说明参考](https://support.huaweicloud.com/api-drs/drs_03_0106.html dbtype参数取值：mysql, taurusha, sqlserver, postgresql, ddm, mongodb, awsdocumentdb, hwmongodb, hwpostgresql, oracle, taurus, gaussdb, kafka, mrsKafka, cassandra, dynamo, dws, gaussdbv5, gaussdbv5ha, gaussmongodb, multigaussdbv5, dmq, gaussdbt, gaussdbtha, gaussdb300, elasticsearch, db2, tidb, redis, gaussredis, rediscluster, mariadb, oceanbase, informix, gaussdbv1, gausscassandra, geminidynamo, dds, tauruslite, star-rocks, gaussdbformysqllite, taurus-postgresql, thl, opengauss, ddmforgaussdb, gaussdbmultimaster
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'jobId' => null,
        'property' => null
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
    * action  需要执行的特定操作。
    * jobId  任务ID（集群模式 取父任务的任务ID）。
    * property  操作对应的参数（API参考文档-批量测试连接-集群模式-property字段数据结构说明）[字段说明参考](https://support.huaweicloud.com/api-drs/drs_03_0106.html dbtype参数取值：mysql, taurusha, sqlserver, postgresql, ddm, mongodb, awsdocumentdb, hwmongodb, hwpostgresql, oracle, taurus, gaussdb, kafka, mrsKafka, cassandra, dynamo, dws, gaussdbv5, gaussdbv5ha, gaussmongodb, multigaussdbv5, dmq, gaussdbt, gaussdbtha, gaussdb300, elasticsearch, db2, tidb, redis, gaussredis, rediscluster, mariadb, oceanbase, informix, gaussdbv1, gausscassandra, geminidynamo, dds, tauruslite, star-rocks, gaussdbformysqllite, taurus-postgresql, thl, opengauss, ddmforgaussdb, gaussdbmultimaster
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'jobId' => 'job_id',
            'property' => 'property'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  需要执行的特定操作。
    * jobId  任务ID（集群模式 取父任务的任务ID）。
    * property  操作对应的参数（API参考文档-批量测试连接-集群模式-property字段数据结构说明）[字段说明参考](https://support.huaweicloud.com/api-drs/drs_03_0106.html dbtype参数取值：mysql, taurusha, sqlserver, postgresql, ddm, mongodb, awsdocumentdb, hwmongodb, hwpostgresql, oracle, taurus, gaussdb, kafka, mrsKafka, cassandra, dynamo, dws, gaussdbv5, gaussdbv5ha, gaussmongodb, multigaussdbv5, dmq, gaussdbt, gaussdbtha, gaussdb300, elasticsearch, db2, tidb, redis, gaussredis, rediscluster, mariadb, oceanbase, informix, gaussdbv1, gausscassandra, geminidynamo, dds, tauruslite, star-rocks, gaussdbformysqllite, taurus-postgresql, thl, opengauss, ddmforgaussdb, gaussdbmultimaster
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'jobId' => 'setJobId',
            'property' => 'setProperty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  需要执行的特定操作。
    * jobId  任务ID（集群模式 取父任务的任务ID）。
    * property  操作对应的参数（API参考文档-批量测试连接-集群模式-property字段数据结构说明）[字段说明参考](https://support.huaweicloud.com/api-drs/drs_03_0106.html dbtype参数取值：mysql, taurusha, sqlserver, postgresql, ddm, mongodb, awsdocumentdb, hwmongodb, hwpostgresql, oracle, taurus, gaussdb, kafka, mrsKafka, cassandra, dynamo, dws, gaussdbv5, gaussdbv5ha, gaussmongodb, multigaussdbv5, dmq, gaussdbt, gaussdbtha, gaussdb300, elasticsearch, db2, tidb, redis, gaussredis, rediscluster, mariadb, oceanbase, informix, gaussdbv1, gausscassandra, geminidynamo, dds, tauruslite, star-rocks, gaussdbformysqllite, taurus-postgresql, thl, opengauss, ddmforgaussdb, gaussdbmultimaster
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'jobId' => 'getJobId',
            'property' => 'getProperty'
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
    const ACTION_TEST_CONNECTION = 'testConnection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_TEST_CONNECTION,
        ];
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['property'] === null) {
            $invalidProperties[] = "'property' can't be null";
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
    * Gets action
    *  需要执行的特定操作。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 需要执行的特定操作。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID（集群模式 取父任务的任务ID）。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID（集群模式 取父任务的任务ID）。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets property
    *  操作对应的参数（API参考文档-批量测试连接-集群模式-property字段数据结构说明）[字段说明参考](https://support.huaweicloud.com/api-drs/drs_03_0106.html dbtype参数取值：mysql, taurusha, sqlserver, postgresql, ddm, mongodb, awsdocumentdb, hwmongodb, hwpostgresql, oracle, taurus, gaussdb, kafka, mrsKafka, cassandra, dynamo, dws, gaussdbv5, gaussdbv5ha, gaussmongodb, multigaussdbv5, dmq, gaussdbt, gaussdbtha, gaussdb300, elasticsearch, db2, tidb, redis, gaussredis, rediscluster, mariadb, oceanbase, informix, gaussdbv1, gausscassandra, geminidynamo, dds, tauruslite, star-rocks, gaussdbformysqllite, taurus-postgresql, thl, opengauss, ddmforgaussdb, gaussdbmultimaster
    *
    * @return string
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string $property 操作对应的参数（API参考文档-批量测试连接-集群模式-property字段数据结构说明）[字段说明参考](https://support.huaweicloud.com/api-drs/drs_03_0106.html dbtype参数取值：mysql, taurusha, sqlserver, postgresql, ddm, mongodb, awsdocumentdb, hwmongodb, hwpostgresql, oracle, taurus, gaussdb, kafka, mrsKafka, cassandra, dynamo, dws, gaussdbv5, gaussdbv5ha, gaussmongodb, multigaussdbv5, dmq, gaussdbt, gaussdbtha, gaussdb300, elasticsearch, db2, tidb, redis, gaussredis, rediscluster, mariadb, oceanbase, informix, gaussdbv1, gausscassandra, geminidynamo, dds, tauruslite, star-rocks, gaussdbformysqllite, taurus-postgresql, thl, opengauss, ddmforgaussdb, gaussdbmultimaster
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
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

