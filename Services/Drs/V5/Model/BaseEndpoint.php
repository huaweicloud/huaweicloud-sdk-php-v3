<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseEndpoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseEndpoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库信息ID。
    * endpointName  数据库场景类型。取值： - oracle：云下自建Oracle数据库。 - ecs_oracle：华为云ECS自建Oracle数据库。 - cloud_gaussdbv5：华为云数据库GaussDB分布式。 - mysql：他云/本地自建MySQL数据库。 - ecs_mysql：华为云ECS自建MySQL数据库。 - cloud_mysql：华为云数据库RDS for MySQL。
    * ip  数据库IP。 约束： - 数据库为自建MongoDB时，数据库IP与端口之间用“:”英文冒号拼接，多个值之间请用“,”英文逗号隔开，最多支持填写3个IP地址或域名。 - 数据库为DDS实例时，数据库IP与端口之间用“:”英文冒号拼接，多个IP端口之间请用“,”英文逗号分隔。 示例： - MySQL：192.168.0.10 - MongoDB：192.168.0.10:8080,192.168.0.11:8080,192.168.0.12:8080 - DDS：192.168.205.130:8635,192.168.250.64:8635
    * dbPort  数据库端口。  约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户名。
    * dbPassword  数据库密码。
    * instanceId  华为云数据库实例ID。
    * instanceName  华为云数据库实例名称。
    * dbName  指定数据库名称。例如： - oracle：serviceName.orcl。
    * sourceSharding  物理源库信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'endpointName' => 'string',
            'ip' => 'string',
            'dbPort' => 'string',
            'dbUser' => 'string',
            'dbPassword' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'dbName' => 'string',
            'sourceSharding' => '\HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库信息ID。
    * endpointName  数据库场景类型。取值： - oracle：云下自建Oracle数据库。 - ecs_oracle：华为云ECS自建Oracle数据库。 - cloud_gaussdbv5：华为云数据库GaussDB分布式。 - mysql：他云/本地自建MySQL数据库。 - ecs_mysql：华为云ECS自建MySQL数据库。 - cloud_mysql：华为云数据库RDS for MySQL。
    * ip  数据库IP。 约束： - 数据库为自建MongoDB时，数据库IP与端口之间用“:”英文冒号拼接，多个值之间请用“,”英文逗号隔开，最多支持填写3个IP地址或域名。 - 数据库为DDS实例时，数据库IP与端口之间用“:”英文冒号拼接，多个IP端口之间请用“,”英文逗号分隔。 示例： - MySQL：192.168.0.10 - MongoDB：192.168.0.10:8080,192.168.0.11:8080,192.168.0.12:8080 - DDS：192.168.205.130:8635,192.168.250.64:8635
    * dbPort  数据库端口。  约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户名。
    * dbPassword  数据库密码。
    * instanceId  华为云数据库实例ID。
    * instanceName  华为云数据库实例名称。
    * dbName  指定数据库名称。例如： - oracle：serviceName.orcl。
    * sourceSharding  物理源库信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'endpointName' => null,
        'ip' => null,
        'dbPort' => null,
        'dbUser' => null,
        'dbPassword' => null,
        'instanceId' => null,
        'instanceName' => null,
        'dbName' => null,
        'sourceSharding' => null
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
    * id  数据库信息ID。
    * endpointName  数据库场景类型。取值： - oracle：云下自建Oracle数据库。 - ecs_oracle：华为云ECS自建Oracle数据库。 - cloud_gaussdbv5：华为云数据库GaussDB分布式。 - mysql：他云/本地自建MySQL数据库。 - ecs_mysql：华为云ECS自建MySQL数据库。 - cloud_mysql：华为云数据库RDS for MySQL。
    * ip  数据库IP。 约束： - 数据库为自建MongoDB时，数据库IP与端口之间用“:”英文冒号拼接，多个值之间请用“,”英文逗号隔开，最多支持填写3个IP地址或域名。 - 数据库为DDS实例时，数据库IP与端口之间用“:”英文冒号拼接，多个IP端口之间请用“,”英文逗号分隔。 示例： - MySQL：192.168.0.10 - MongoDB：192.168.0.10:8080,192.168.0.11:8080,192.168.0.12:8080 - DDS：192.168.205.130:8635,192.168.250.64:8635
    * dbPort  数据库端口。  约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户名。
    * dbPassword  数据库密码。
    * instanceId  华为云数据库实例ID。
    * instanceName  华为云数据库实例名称。
    * dbName  指定数据库名称。例如： - oracle：serviceName.orcl。
    * sourceSharding  物理源库信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'endpointName' => 'endpoint_name',
            'ip' => 'ip',
            'dbPort' => 'db_port',
            'dbUser' => 'db_user',
            'dbPassword' => 'db_password',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'dbName' => 'db_name',
            'sourceSharding' => 'source_sharding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库信息ID。
    * endpointName  数据库场景类型。取值： - oracle：云下自建Oracle数据库。 - ecs_oracle：华为云ECS自建Oracle数据库。 - cloud_gaussdbv5：华为云数据库GaussDB分布式。 - mysql：他云/本地自建MySQL数据库。 - ecs_mysql：华为云ECS自建MySQL数据库。 - cloud_mysql：华为云数据库RDS for MySQL。
    * ip  数据库IP。 约束： - 数据库为自建MongoDB时，数据库IP与端口之间用“:”英文冒号拼接，多个值之间请用“,”英文逗号隔开，最多支持填写3个IP地址或域名。 - 数据库为DDS实例时，数据库IP与端口之间用“:”英文冒号拼接，多个IP端口之间请用“,”英文逗号分隔。 示例： - MySQL：192.168.0.10 - MongoDB：192.168.0.10:8080,192.168.0.11:8080,192.168.0.12:8080 - DDS：192.168.205.130:8635,192.168.250.64:8635
    * dbPort  数据库端口。  约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户名。
    * dbPassword  数据库密码。
    * instanceId  华为云数据库实例ID。
    * instanceName  华为云数据库实例名称。
    * dbName  指定数据库名称。例如： - oracle：serviceName.orcl。
    * sourceSharding  物理源库信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'endpointName' => 'setEndpointName',
            'ip' => 'setIp',
            'dbPort' => 'setDbPort',
            'dbUser' => 'setDbUser',
            'dbPassword' => 'setDbPassword',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'dbName' => 'setDbName',
            'sourceSharding' => 'setSourceSharding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库信息ID。
    * endpointName  数据库场景类型。取值： - oracle：云下自建Oracle数据库。 - ecs_oracle：华为云ECS自建Oracle数据库。 - cloud_gaussdbv5：华为云数据库GaussDB分布式。 - mysql：他云/本地自建MySQL数据库。 - ecs_mysql：华为云ECS自建MySQL数据库。 - cloud_mysql：华为云数据库RDS for MySQL。
    * ip  数据库IP。 约束： - 数据库为自建MongoDB时，数据库IP与端口之间用“:”英文冒号拼接，多个值之间请用“,”英文逗号隔开，最多支持填写3个IP地址或域名。 - 数据库为DDS实例时，数据库IP与端口之间用“:”英文冒号拼接，多个IP端口之间请用“,”英文逗号分隔。 示例： - MySQL：192.168.0.10 - MongoDB：192.168.0.10:8080,192.168.0.11:8080,192.168.0.12:8080 - DDS：192.168.205.130:8635,192.168.250.64:8635
    * dbPort  数据库端口。  约束：输入范围为1-65535之间的整数。
    * dbUser  数据库用户名。
    * dbPassword  数据库密码。
    * instanceId  华为云数据库实例ID。
    * instanceName  华为云数据库实例名称。
    * dbName  指定数据库名称。例如： - oracle：serviceName.orcl。
    * sourceSharding  物理源库信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'endpointName' => 'getEndpointName',
            'ip' => 'getIp',
            'dbPort' => 'getDbPort',
            'dbUser' => 'getDbUser',
            'dbPassword' => 'getDbPassword',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'dbName' => 'getDbName',
            'sourceSharding' => 'getSourceSharding'
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
    const ENDPOINT_NAME_ORACLE = 'oracle';
    const ENDPOINT_NAME_ECS_ORACLE = 'ecs_oracle';
    const ENDPOINT_NAME_CLOUD_GAUSSDBV5 = 'cloud_gaussdbv5';
    const ENDPOINT_NAME_MYSQL = 'mysql';
    const ENDPOINT_NAME_ECS_MYSQL = 'ecs_mysql';
    const ENDPOINT_NAME_CLOUD_MYSQL = 'cloud_mysql';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEndpointNameAllowableValues()
    {
        return [
            self::ENDPOINT_NAME_ORACLE,
            self::ENDPOINT_NAME_ECS_ORACLE,
            self::ENDPOINT_NAME_CLOUD_GAUSSDBV5,
            self::ENDPOINT_NAME_MYSQL,
            self::ENDPOINT_NAME_ECS_MYSQL,
            self::ENDPOINT_NAME_CLOUD_MYSQL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['endpointName'] = isset($data['endpointName']) ? $data['endpointName'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['sourceSharding'] = isset($data['sourceSharding']) ? $data['sourceSharding'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endpointName'] === null) {
            $invalidProperties[] = "'endpointName' can't be null";
        }
            $allowedValues = $this->getEndpointNameAllowableValues();
                if (!is_null($this->container['endpointName']) && !in_array($this->container['endpointName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'endpointName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['dbUser'] === null) {
            $invalidProperties[] = "'dbUser' can't be null";
        }
        if ($this->container['dbPassword'] === null) {
            $invalidProperties[] = "'dbPassword' can't be null";
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
    *  数据库信息ID。
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
    * @param string|null $id 数据库信息ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets endpointName
    *  数据库场景类型。取值： - oracle：云下自建Oracle数据库。 - ecs_oracle：华为云ECS自建Oracle数据库。 - cloud_gaussdbv5：华为云数据库GaussDB分布式。 - mysql：他云/本地自建MySQL数据库。 - ecs_mysql：华为云ECS自建MySQL数据库。 - cloud_mysql：华为云数据库RDS for MySQL。
    *
    * @return string
    */
    public function getEndpointName()
    {
        return $this->container['endpointName'];
    }

    /**
    * Sets endpointName
    *
    * @param string $endpointName 数据库场景类型。取值： - oracle：云下自建Oracle数据库。 - ecs_oracle：华为云ECS自建Oracle数据库。 - cloud_gaussdbv5：华为云数据库GaussDB分布式。 - mysql：他云/本地自建MySQL数据库。 - ecs_mysql：华为云ECS自建MySQL数据库。 - cloud_mysql：华为云数据库RDS for MySQL。
    *
    * @return $this
    */
    public function setEndpointName($endpointName)
    {
        $this->container['endpointName'] = $endpointName;
        return $this;
    }

    /**
    * Gets ip
    *  数据库IP。 约束： - 数据库为自建MongoDB时，数据库IP与端口之间用“:”英文冒号拼接，多个值之间请用“,”英文逗号隔开，最多支持填写3个IP地址或域名。 - 数据库为DDS实例时，数据库IP与端口之间用“:”英文冒号拼接，多个IP端口之间请用“,”英文逗号分隔。 示例： - MySQL：192.168.0.10 - MongoDB：192.168.0.10:8080,192.168.0.11:8080,192.168.0.12:8080 - DDS：192.168.205.130:8635,192.168.250.64:8635
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 数据库IP。 约束： - 数据库为自建MongoDB时，数据库IP与端口之间用“:”英文冒号拼接，多个值之间请用“,”英文逗号隔开，最多支持填写3个IP地址或域名。 - 数据库为DDS实例时，数据库IP与端口之间用“:”英文冒号拼接，多个IP端口之间请用“,”英文逗号分隔。 示例： - MySQL：192.168.0.10 - MongoDB：192.168.0.10:8080,192.168.0.11:8080,192.168.0.12:8080 - DDS：192.168.205.130:8635,192.168.250.64:8635
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口。  约束：输入范围为1-65535之间的整数。
    *
    * @return string|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param string|null $dbPort 数据库端口。  约束：输入范围为1-65535之间的整数。
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets dbUser
    *  数据库用户名。
    *
    * @return string
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string $dbUser 数据库用户名。
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets dbPassword
    *  数据库密码。
    *
    * @return string
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string $dbPassword 数据库密码。
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets instanceId
    *  华为云数据库实例ID。
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
    * @param string|null $instanceId 华为云数据库实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  华为云数据库实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 华为云数据库实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets dbName
    *  指定数据库名称。例如： - oracle：serviceName.orcl。
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
    * @param string|null $dbName 指定数据库名称。例如： - oracle：serviceName.orcl。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets sourceSharding
    *  物理源库信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint[]|null
    */
    public function getSourceSharding()
    {
        return $this->container['sourceSharding'];
    }

    /**
    * Sets sourceSharding
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint[]|null $sourceSharding 物理源库信息。
    *
    * @return $this
    */
    public function setSourceSharding($sourceSharding)
    {
        $this->container['sourceSharding'] = $sourceSharding;
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

