<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateStreamJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateStreamJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transactionId  流作业事务 ID，防止重复提交。长度限制：0-64个字符。
    * jobType  作业类型：flink_sql_job或flink_jar_job
    * description  流作业描述。长度限制：0-512个字符。
    * tags  标签。
    * environmentConfig  environmentConfig
    * runtimeConfig  runtimeConfig
    * flinkSqlParameter  flinkSqlParameter
    * flinkJarParameter  flinkJarParameter
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transactionId' => 'string',
            'jobType' => 'string',
            'description' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]',
            'environmentConfig' => '\HuaweiCloud\SDK\Dli\V1\Model\StreamEnvironmentConfig',
            'runtimeConfig' => '\HuaweiCloud\SDK\Dli\V1\Model\StreamRuntimeConfig',
            'flinkSqlParameter' => '\HuaweiCloud\SDK\Dli\V1\Model\FlinkSqlParameter',
            'flinkJarParameter' => '\HuaweiCloud\SDK\Dli\V1\Model\FlinkJarParameter'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transactionId  流作业事务 ID，防止重复提交。长度限制：0-64个字符。
    * jobType  作业类型：flink_sql_job或flink_jar_job
    * description  流作业描述。长度限制：0-512个字符。
    * tags  标签。
    * environmentConfig  environmentConfig
    * runtimeConfig  runtimeConfig
    * flinkSqlParameter  flinkSqlParameter
    * flinkJarParameter  flinkJarParameter
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transactionId' => null,
        'jobType' => null,
        'description' => null,
        'tags' => null,
        'environmentConfig' => null,
        'runtimeConfig' => null,
        'flinkSqlParameter' => null,
        'flinkJarParameter' => null
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
    * transactionId  流作业事务 ID，防止重复提交。长度限制：0-64个字符。
    * jobType  作业类型：flink_sql_job或flink_jar_job
    * description  流作业描述。长度限制：0-512个字符。
    * tags  标签。
    * environmentConfig  environmentConfig
    * runtimeConfig  runtimeConfig
    * flinkSqlParameter  flinkSqlParameter
    * flinkJarParameter  flinkJarParameter
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transactionId' => 'transaction_id',
            'jobType' => 'job_type',
            'description' => 'description',
            'tags' => 'tags',
            'environmentConfig' => 'environment_config',
            'runtimeConfig' => 'runtime_config',
            'flinkSqlParameter' => 'flink_sql_parameter',
            'flinkJarParameter' => 'flink_jar_parameter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transactionId  流作业事务 ID，防止重复提交。长度限制：0-64个字符。
    * jobType  作业类型：flink_sql_job或flink_jar_job
    * description  流作业描述。长度限制：0-512个字符。
    * tags  标签。
    * environmentConfig  environmentConfig
    * runtimeConfig  runtimeConfig
    * flinkSqlParameter  flinkSqlParameter
    * flinkJarParameter  flinkJarParameter
    *
    * @var string[]
    */
    protected static $setters = [
            'transactionId' => 'setTransactionId',
            'jobType' => 'setJobType',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'environmentConfig' => 'setEnvironmentConfig',
            'runtimeConfig' => 'setRuntimeConfig',
            'flinkSqlParameter' => 'setFlinkSqlParameter',
            'flinkJarParameter' => 'setFlinkJarParameter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transactionId  流作业事务 ID，防止重复提交。长度限制：0-64个字符。
    * jobType  作业类型：flink_sql_job或flink_jar_job
    * description  流作业描述。长度限制：0-512个字符。
    * tags  标签。
    * environmentConfig  environmentConfig
    * runtimeConfig  runtimeConfig
    * flinkSqlParameter  flinkSqlParameter
    * flinkJarParameter  flinkJarParameter
    *
    * @var string[]
    */
    protected static $getters = [
            'transactionId' => 'getTransactionId',
            'jobType' => 'getJobType',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'environmentConfig' => 'getEnvironmentConfig',
            'runtimeConfig' => 'getRuntimeConfig',
            'flinkSqlParameter' => 'getFlinkSqlParameter',
            'flinkJarParameter' => 'getFlinkJarParameter'
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
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['environmentConfig'] = isset($data['environmentConfig']) ? $data['environmentConfig'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['flinkSqlParameter'] = isset($data['flinkSqlParameter']) ? $data['flinkSqlParameter'] : null;
        $this->container['flinkJarParameter'] = isset($data['flinkJarParameter']) ? $data['flinkJarParameter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
            if ((mb_strlen($this->container['transactionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'transactionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['transactionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'transactionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets transactionId
    *  流作业事务 ID，防止重复提交。长度限制：0-64个字符。
    *
    * @return string
    */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
    * Sets transactionId
    *
    * @param string $transactionId 流作业事务 ID，防止重复提交。长度限制：0-64个字符。
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型：flink_sql_job或flink_jar_job
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型：flink_sql_job或flink_jar_job
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets description
    *  流作业描述。长度限制：0-512个字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 流作业描述。长度限制：0-512个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  标签。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets environmentConfig
    *  environmentConfig
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\StreamEnvironmentConfig|null
    */
    public function getEnvironmentConfig()
    {
        return $this->container['environmentConfig'];
    }

    /**
    * Sets environmentConfig
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\StreamEnvironmentConfig|null $environmentConfig environmentConfig
    *
    * @return $this
    */
    public function setEnvironmentConfig($environmentConfig)
    {
        $this->container['environmentConfig'] = $environmentConfig;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  runtimeConfig
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\StreamRuntimeConfig|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\StreamRuntimeConfig|null $runtimeConfig runtimeConfig
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets flinkSqlParameter
    *  flinkSqlParameter
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\FlinkSqlParameter|null
    */
    public function getFlinkSqlParameter()
    {
        return $this->container['flinkSqlParameter'];
    }

    /**
    * Sets flinkSqlParameter
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\FlinkSqlParameter|null $flinkSqlParameter flinkSqlParameter
    *
    * @return $this
    */
    public function setFlinkSqlParameter($flinkSqlParameter)
    {
        $this->container['flinkSqlParameter'] = $flinkSqlParameter;
        return $this;
    }

    /**
    * Gets flinkJarParameter
    *  flinkJarParameter
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\FlinkJarParameter|null
    */
    public function getFlinkJarParameter()
    {
        return $this->container['flinkJarParameter'];
    }

    /**
    * Sets flinkJarParameter
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\FlinkJarParameter|null $flinkJarParameter flinkJarParameter
    *
    * @return $this
    */
    public function setFlinkJarParameter($flinkJarParameter)
    {
        $this->container['flinkJarParameter'] = $flinkJarParameter;
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

