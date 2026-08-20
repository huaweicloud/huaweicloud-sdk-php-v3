<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointProxyParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointProxyParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  authorization
    * data  
    * datasourceName  数据源名称
    * endpointUuid  接入点uuid
    * moduleId  模块id
    * url  
    * isInner  
    * projectUuid  项目uuid
    * regionName  区域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\EndpointAuthorizationBody',
            'data' => 'object',
            'datasourceName' => 'string',
            'endpointUuid' => 'string',
            'moduleId' => 'string',
            'url' => 'string',
            'isInner' => 'bool',
            'projectUuid' => 'string',
            'regionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  authorization
    * data  
    * datasourceName  数据源名称
    * endpointUuid  接入点uuid
    * moduleId  模块id
    * url  
    * isInner  
    * projectUuid  项目uuid
    * regionName  区域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'data' => null,
        'datasourceName' => null,
        'endpointUuid' => null,
        'moduleId' => null,
        'url' => null,
        'isInner' => null,
        'projectUuid' => null,
        'regionName' => null
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
    * authorization  authorization
    * data  
    * datasourceName  数据源名称
    * endpointUuid  接入点uuid
    * moduleId  模块id
    * url  
    * isInner  
    * projectUuid  项目uuid
    * regionName  区域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'authorization',
            'data' => 'data',
            'datasourceName' => 'datasource_name',
            'endpointUuid' => 'endpoint_uuid',
            'moduleId' => 'module_id',
            'url' => 'url',
            'isInner' => 'is_inner',
            'projectUuid' => 'project_uuid',
            'regionName' => 'region_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  authorization
    * data  
    * datasourceName  数据源名称
    * endpointUuid  接入点uuid
    * moduleId  模块id
    * url  
    * isInner  
    * projectUuid  项目uuid
    * regionName  区域名
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'data' => 'setData',
            'datasourceName' => 'setDatasourceName',
            'endpointUuid' => 'setEndpointUuid',
            'moduleId' => 'setModuleId',
            'url' => 'setUrl',
            'isInner' => 'setIsInner',
            'projectUuid' => 'setProjectUuid',
            'regionName' => 'setRegionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  authorization
    * data  
    * datasourceName  数据源名称
    * endpointUuid  接入点uuid
    * moduleId  模块id
    * url  
    * isInner  
    * projectUuid  项目uuid
    * regionName  区域名
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'data' => 'getData',
            'datasourceName' => 'getDatasourceName',
            'endpointUuid' => 'getEndpointUuid',
            'moduleId' => 'getModuleId',
            'url' => 'getUrl',
            'isInner' => 'getIsInner',
            'projectUuid' => 'getProjectUuid',
            'regionName' => 'getRegionName'
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['datasourceName'] = isset($data['datasourceName']) ? $data['datasourceName'] : null;
        $this->container['endpointUuid'] = isset($data['endpointUuid']) ? $data['endpointUuid'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['isInner'] = isset($data['isInner']) ? $data['isInner'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
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
    * Gets authorization
    *  authorization
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\EndpointAuthorizationBody|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\EndpointAuthorizationBody|null $authorization authorization
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets data
    *  
    *
    * @return object|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param object|null $data 
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets datasourceName
    *  数据源名称
    *
    * @return string|null
    */
    public function getDatasourceName()
    {
        return $this->container['datasourceName'];
    }

    /**
    * Sets datasourceName
    *
    * @param string|null $datasourceName 数据源名称
    *
    * @return $this
    */
    public function setDatasourceName($datasourceName)
    {
        $this->container['datasourceName'] = $datasourceName;
        return $this;
    }

    /**
    * Gets endpointUuid
    *  接入点uuid
    *
    * @return string|null
    */
    public function getEndpointUuid()
    {
        return $this->container['endpointUuid'];
    }

    /**
    * Sets endpointUuid
    *
    * @param string|null $endpointUuid 接入点uuid
    *
    * @return $this
    */
    public function setEndpointUuid($endpointUuid)
    {
        $this->container['endpointUuid'] = $endpointUuid;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets url
    *  
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets isInner
    *  
    *
    * @return bool|null
    */
    public function getIsInner()
    {
        return $this->container['isInner'];
    }

    /**
    * Sets isInner
    *
    * @param bool|null $isInner 
    *
    * @return $this
    */
    public function setIsInner($isInner)
    {
        $this->container['isInner'] = $isInner;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目uuid
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目uuid
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets regionName
    *  区域名
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 区域名
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
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

