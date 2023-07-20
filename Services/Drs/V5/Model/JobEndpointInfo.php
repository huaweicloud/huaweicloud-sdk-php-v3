<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobEndpointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobEndpointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbType  数据库类型。取值： - oracle：Oracle。 - gaussdbv5：GaussDB分布式版。
    * endpointType  数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * endpointRole  数据库实例角色。取值： - so：源库。 - ta：目标库。
    * endpoint  endpoint
    * cloud  cloud
    * vpc  vpc
    * config  config
    * ssl  ssl
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbType' => 'string',
            'endpointType' => 'string',
            'endpointRole' => 'string',
            'endpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint',
            'cloud' => '\HuaweiCloud\SDK\Drs\V5\Model\CloudBaseInfo',
            'vpc' => '\HuaweiCloud\SDK\Drs\V5\Model\CloudVpcInfo',
            'config' => '\HuaweiCloud\SDK\Drs\V5\Model\BaseEndpointConfig',
            'ssl' => '\HuaweiCloud\SDK\Drs\V5\Model\EndpointSslConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbType  数据库类型。取值： - oracle：Oracle。 - gaussdbv5：GaussDB分布式版。
    * endpointType  数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * endpointRole  数据库实例角色。取值： - so：源库。 - ta：目标库。
    * endpoint  endpoint
    * cloud  cloud
    * vpc  vpc
    * config  config
    * ssl  ssl
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbType' => null,
        'endpointType' => null,
        'endpointRole' => null,
        'endpoint' => null,
        'cloud' => null,
        'vpc' => null,
        'config' => null,
        'ssl' => null
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
    * dbType  数据库类型。取值： - oracle：Oracle。 - gaussdbv5：GaussDB分布式版。
    * endpointType  数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * endpointRole  数据库实例角色。取值： - so：源库。 - ta：目标库。
    * endpoint  endpoint
    * cloud  cloud
    * vpc  vpc
    * config  config
    * ssl  ssl
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbType' => 'db_type',
            'endpointType' => 'endpoint_type',
            'endpointRole' => 'endpoint_role',
            'endpoint' => 'endpoint',
            'cloud' => 'cloud',
            'vpc' => 'vpc',
            'config' => 'config',
            'ssl' => 'ssl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbType  数据库类型。取值： - oracle：Oracle。 - gaussdbv5：GaussDB分布式版。
    * endpointType  数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * endpointRole  数据库实例角色。取值： - so：源库。 - ta：目标库。
    * endpoint  endpoint
    * cloud  cloud
    * vpc  vpc
    * config  config
    * ssl  ssl
    *
    * @var string[]
    */
    protected static $setters = [
            'dbType' => 'setDbType',
            'endpointType' => 'setEndpointType',
            'endpointRole' => 'setEndpointRole',
            'endpoint' => 'setEndpoint',
            'cloud' => 'setCloud',
            'vpc' => 'setVpc',
            'config' => 'setConfig',
            'ssl' => 'setSsl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbType  数据库类型。取值： - oracle：Oracle。 - gaussdbv5：GaussDB分布式版。
    * endpointType  数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * endpointRole  数据库实例角色。取值： - so：源库。 - ta：目标库。
    * endpoint  endpoint
    * cloud  cloud
    * vpc  vpc
    * config  config
    * ssl  ssl
    *
    * @var string[]
    */
    protected static $getters = [
            'dbType' => 'getDbType',
            'endpointType' => 'getEndpointType',
            'endpointRole' => 'getEndpointRole',
            'endpoint' => 'getEndpoint',
            'cloud' => 'getCloud',
            'vpc' => 'getVpc',
            'config' => 'getConfig',
            'ssl' => 'getSsl'
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
    const DB_TYPE_ORACLE = 'oracle';
    const DB_TYPE_GAUSSDBV5 = 'gaussdbv5';
    const ENDPOINT_TYPE_OFFLINE = 'offline';
    const ENDPOINT_TYPE_ECS = 'ecs';
    const ENDPOINT_TYPE_CLOUD = 'cloud';
    const ENDPOINT_ROLE_SO = 'so';
    const ENDPOINT_ROLE_TA = 'ta';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbTypeAllowableValues()
    {
        return [
            self::DB_TYPE_ORACLE,
            self::DB_TYPE_GAUSSDBV5,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEndpointTypeAllowableValues()
    {
        return [
            self::ENDPOINT_TYPE_OFFLINE,
            self::ENDPOINT_TYPE_ECS,
            self::ENDPOINT_TYPE_CLOUD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEndpointRoleAllowableValues()
    {
        return [
            self::ENDPOINT_ROLE_SO,
            self::ENDPOINT_ROLE_TA,
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
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['endpointType'] = isset($data['endpointType']) ? $data['endpointType'] : null;
        $this->container['endpointRole'] = isset($data['endpointRole']) ? $data['endpointRole'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['cloud'] = isset($data['cloud']) ? $data['cloud'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbType'] === null) {
            $invalidProperties[] = "'dbType' can't be null";
        }
            $allowedValues = $this->getDbTypeAllowableValues();
                if (!is_null($this->container['dbType']) && !in_array($this->container['dbType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['endpointType'] === null) {
            $invalidProperties[] = "'endpointType' can't be null";
        }
            $allowedValues = $this->getEndpointTypeAllowableValues();
                if (!is_null($this->container['endpointType']) && !in_array($this->container['endpointType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'endpointType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['endpointRole'] === null) {
            $invalidProperties[] = "'endpointRole' can't be null";
        }
            $allowedValues = $this->getEndpointRoleAllowableValues();
                if (!is_null($this->container['endpointRole']) && !in_array($this->container['endpointRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'endpointRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
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
    * Gets dbType
    *  数据库类型。取值： - oracle：Oracle。 - gaussdbv5：GaussDB分布式版。
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
    * @param string $dbType 数据库类型。取值： - oracle：Oracle。 - gaussdbv5：GaussDB分布式版。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets endpointType
    *  数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    *
    * @return string
    */
    public function getEndpointType()
    {
        return $this->container['endpointType'];
    }

    /**
    * Sets endpointType
    *
    * @param string $endpointType 数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    *
    * @return $this
    */
    public function setEndpointType($endpointType)
    {
        $this->container['endpointType'] = $endpointType;
        return $this;
    }

    /**
    * Gets endpointRole
    *  数据库实例角色。取值： - so：源库。 - ta：目标库。
    *
    * @return string
    */
    public function getEndpointRole()
    {
        return $this->container['endpointRole'];
    }

    /**
    * Sets endpointRole
    *
    * @param string $endpointRole 数据库实例角色。取值： - so：源库。 - ta：目标库。
    *
    * @return $this
    */
    public function setEndpointRole($endpointRole)
    {
        $this->container['endpointRole'] = $endpointRole;
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
    * Gets cloud
    *  cloud
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\CloudBaseInfo|null
    */
    public function getCloud()
    {
        return $this->container['cloud'];
    }

    /**
    * Sets cloud
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\CloudBaseInfo|null $cloud cloud
    *
    * @return $this
    */
    public function setCloud($cloud)
    {
        $this->container['cloud'] = $cloud;
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
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpointConfig|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpointConfig|null $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
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

