<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMicroserviceRouteRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMicroserviceRouteRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * serviceName  微服务名称
    * environment  所属环境，不填表示<空>环境
    * appId  所属应用，不填默认为default应用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xEngineId' => 'string',
            'xEnterpriseProjectId' => 'string',
            'serviceName' => 'string',
            'environment' => 'string',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * serviceName  微服务名称
    * environment  所属环境，不填表示<空>环境
    * appId  所属应用，不填默认为default应用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xEngineId' => null,
        'xEnterpriseProjectId' => null,
        'serviceName' => null,
        'environment' => null,
        'appId' => null
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
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * serviceName  微服务名称
    * environment  所属环境，不填表示<空>环境
    * appId  所属应用，不填默认为default应用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xEngineId' => 'x-engine-id',
            'xEnterpriseProjectId' => 'X-Enterprise-Project-ID',
            'serviceName' => 'service_name',
            'environment' => 'environment',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * serviceName  微服务名称
    * environment  所属环境，不填表示<空>环境
    * appId  所属应用，不填默认为default应用
    *
    * @var string[]
    */
    protected static $setters = [
            'xEngineId' => 'setXEngineId',
            'xEnterpriseProjectId' => 'setXEnterpriseProjectId',
            'serviceName' => 'setServiceName',
            'environment' => 'setEnvironment',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * serviceName  微服务名称
    * environment  所属环境，不填表示<空>环境
    * appId  所属应用，不填默认为default应用
    *
    * @var string[]
    */
    protected static $getters = [
            'xEngineId' => 'getXEngineId',
            'xEnterpriseProjectId' => 'getXEnterpriseProjectId',
            'serviceName' => 'getServiceName',
            'environment' => 'getEnvironment',
            'appId' => 'getAppId'
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
        $this->container['xEngineId'] = isset($data['xEngineId']) ? $data['xEngineId'] : null;
        $this->container['xEnterpriseProjectId'] = isset($data['xEnterpriseProjectId']) ? $data['xEnterpriseProjectId'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xEngineId'] === null) {
            $invalidProperties[] = "'xEngineId' can't be null";
        }
        if ($this->container['xEnterpriseProjectId'] === null) {
            $invalidProperties[] = "'xEnterpriseProjectId' can't be null";
        }
        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
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
    * Gets xEngineId
    *  微服务引擎专享版的实例ID
    *
    * @return string
    */
    public function getXEngineId()
    {
        return $this->container['xEngineId'];
    }

    /**
    * Sets xEngineId
    *
    * @param string $xEngineId 微服务引擎专享版的实例ID
    *
    * @return $this
    */
    public function setXEngineId($xEngineId)
    {
        $this->container['xEngineId'] = $xEngineId;
        return $this;
    }

    /**
    * Gets xEnterpriseProjectId
    *  企业项目ID
    *
    * @return string
    */
    public function getXEnterpriseProjectId()
    {
        return $this->container['xEnterpriseProjectId'];
    }

    /**
    * Sets xEnterpriseProjectId
    *
    * @param string $xEnterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setXEnterpriseProjectId($xEnterpriseProjectId)
    {
        $this->container['xEnterpriseProjectId'] = $xEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets serviceName
    *  微服务名称
    *
    * @return string
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string $serviceName 微服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets environment
    *  所属环境，不填表示<空>环境
    *
    * @return string|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param string|null $environment 所属环境，不填表示<空>环境
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets appId
    *  所属应用，不填默认为default应用
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 所属应用，不填默认为default应用
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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

