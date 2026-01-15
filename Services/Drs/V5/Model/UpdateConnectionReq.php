<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateConnectionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateConnectionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  连接名称。
    * dbType  数据库类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * description  连接描述。
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * cloud  cloud
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'dbType' => 'string',
            'config' => '\HuaweiCloud\SDK\Drs\V5\Model\ConnectionConfig',
            'description' => 'string',
            'endpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint',
            'vpc' => '\HuaweiCloud\SDK\Drs\V5\Model\CloudVpcInfo',
            'ssl' => '\HuaweiCloud\SDK\Drs\V5\Model\EndpointSslConfig',
            'cloud' => '\HuaweiCloud\SDK\Drs\V5\Model\CloudBaseInfo',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  连接名称。
    * dbType  数据库类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * description  连接描述。
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * cloud  cloud
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'dbType' => null,
        'config' => null,
        'description' => null,
        'endpoint' => null,
        'vpc' => null,
        'ssl' => null,
        'cloud' => null,
        'enterpriseProjectId' => null
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
    * name  连接名称。
    * dbType  数据库类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * description  连接描述。
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * cloud  cloud
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'dbType' => 'db_type',
            'config' => 'config',
            'description' => 'description',
            'endpoint' => 'endpoint',
            'vpc' => 'vpc',
            'ssl' => 'ssl',
            'cloud' => 'cloud',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  连接名称。
    * dbType  数据库类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * description  连接描述。
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * cloud  cloud
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'dbType' => 'setDbType',
            'config' => 'setConfig',
            'description' => 'setDescription',
            'endpoint' => 'setEndpoint',
            'vpc' => 'setVpc',
            'ssl' => 'setSsl',
            'cloud' => 'setCloud',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  连接名称。
    * dbType  数据库类型。 取值：mysql - postgresql - mongodb - oracle
    * config  config
    * description  连接描述。
    * endpoint  endpoint
    * vpc  vpc
    * ssl  ssl
    * cloud  cloud
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'dbType' => 'getDbType',
            'config' => 'getConfig',
            'description' => 'getDescription',
            'endpoint' => 'getEndpoint',
            'vpc' => 'getVpc',
            'ssl' => 'getSsl',
            'cloud' => 'getCloud',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['cloud'] = isset($data['cloud']) ? $data['cloud'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dbType']) && (mb_strlen($this->container['dbType']) > 128)) {
                $invalidProperties[] = "invalid value for 'dbType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dbType']) && (mb_strlen($this->container['dbType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dbType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  连接名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 连接名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dbType
    *  数据库类型。 取值：mysql - postgresql - mongodb - oracle
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 数据库类型。 取值：mysql - postgresql - mongodb - oracle
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
    * Gets description
    *  连接描述。
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
    * @param string|null $description 连接描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets endpoint
    *  endpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BaseEndpoint|null $endpoint endpoint
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

