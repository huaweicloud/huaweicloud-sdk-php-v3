<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID。
    * name  连接名称。
    * createTime  连接创建时间，格式为时间戳。
    * dbType  连接类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * enterpriseProjectId  企业项目ID。
    * description  描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'name' => 'string',
            'createTime' => 'int',
            'dbType' => 'string',
            'config' => '\HuaweiCloud\SDK\Drs\V5\Model\ConnectionConfig',
            'endpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint',
            'vpc' => '\HuaweiCloud\SDK\Drs\V5\Model\CloudVpcInfo',
            'ssl' => '\HuaweiCloud\SDK\Drs\V5\Model\EndpointSslConfig',
            'enterpriseProjectId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID。
    * name  连接名称。
    * createTime  连接创建时间，格式为时间戳。
    * dbType  连接类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * enterpriseProjectId  企业项目ID。
    * description  描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'name' => null,
        'createTime' => 'int64',
        'dbType' => null,
        'config' => null,
        'endpoint' => null,
        'vpc' => null,
        'ssl' => null,
        'enterpriseProjectId' => null,
        'description' => null
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
    * connectionId  连接ID。
    * name  连接名称。
    * createTime  连接创建时间，格式为时间戳。
    * dbType  连接类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * enterpriseProjectId  企业项目ID。
    * description  描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'name' => 'name',
            'createTime' => 'create_time',
            'dbType' => 'db_type',
            'config' => 'config',
            'endpoint' => 'endpoint',
            'vpc' => 'vpc',
            'ssl' => 'ssl',
            'enterpriseProjectId' => 'enterprise_project_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID。
    * name  连接名称。
    * createTime  连接创建时间，格式为时间戳。
    * dbType  连接类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * enterpriseProjectId  企业项目ID。
    * description  描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'name' => 'setName',
            'createTime' => 'setCreateTime',
            'dbType' => 'setDbType',
            'config' => 'setConfig',
            'endpoint' => 'setEndpoint',
            'vpc' => 'setVpc',
            'ssl' => 'setSsl',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID。
    * name  连接名称。
    * createTime  连接创建时间，格式为时间戳。
    * dbType  连接类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * enterpriseProjectId  企业项目ID。
    * description  描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'name' => 'getName',
            'createTime' => 'getCreateTime',
            'dbType' => 'getDbType',
            'config' => 'getConfig',
            'endpoint' => 'getEndpoint',
            'vpc' => 'getVpc',
            'ssl' => 'getSsl',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'description' => 'getDescription'
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
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectionId'] === null) {
            $invalidProperties[] = "'connectionId' can't be null";
        }
            if ((mb_strlen($this->container['connectionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['connectionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] >= 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than 2147483647.";
            }
            if (($this->container['createTime'] <= 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than 0.";
            }
        if ($this->container['dbType'] === null) {
            $invalidProperties[] = "'dbType' can't be null";
        }
            if ((mb_strlen($this->container['dbType']) > 128)) {
                $invalidProperties[] = "invalid value for 'dbType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['dbType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dbType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets connectionId
    *  连接ID。
    *
    * @return string
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string $connectionId 连接ID。
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets name
    *  连接名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 连接名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createTime
    *  连接创建时间，格式为时间戳。
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 连接创建时间，格式为时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dbType
    *  连接类型。 取值：mysql - postgresql - mongodb - oracle
    *
    * @return string
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string $dbType 连接类型。 取值：mysql - postgresql - mongodb - oracle
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ConnectionConfig|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ConnectionConfig|null $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets endpoint
    *  endpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint $endpoint endpoint
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets vpc
    *  vpc
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\CloudVpcInfo|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\CloudVpcInfo|null $vpc vpc
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets ssl
    *  ssl
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\EndpointSslConfig|null
    */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
    * Sets ssl
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\EndpointSslConfig|null $ssl ssl
    *
    * @return $this
    */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

