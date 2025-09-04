<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndPointResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndPointResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  authorization
    * uuid  uuid
    * url  访问地址
    * name  名称
    * projectUuid  项目uuid
    * regionName  区域名称
    * data  数据
    * moduleId  模块id
    * createdBy  createdBy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EndPointResponseAuthorization',
            'uuid' => 'string',
            'url' => 'string',
            'name' => 'string',
            'projectUuid' => 'string',
            'regionName' => 'string',
            'data' => 'object',
            'moduleId' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EndPointResponseCreatedBy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  authorization
    * uuid  uuid
    * url  访问地址
    * name  名称
    * projectUuid  项目uuid
    * regionName  区域名称
    * data  数据
    * moduleId  模块id
    * createdBy  createdBy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'uuid' => null,
        'url' => null,
        'name' => null,
        'projectUuid' => null,
        'regionName' => null,
        'data' => null,
        'moduleId' => null,
        'createdBy' => null
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
    * uuid  uuid
    * url  访问地址
    * name  名称
    * projectUuid  项目uuid
    * regionName  区域名称
    * data  数据
    * moduleId  模块id
    * createdBy  createdBy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'authorization',
            'uuid' => 'uuid',
            'url' => 'url',
            'name' => 'name',
            'projectUuid' => 'project_uuid',
            'regionName' => 'region_name',
            'data' => 'data',
            'moduleId' => 'module_id',
            'createdBy' => 'created_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  authorization
    * uuid  uuid
    * url  访问地址
    * name  名称
    * projectUuid  项目uuid
    * regionName  区域名称
    * data  数据
    * moduleId  模块id
    * createdBy  createdBy
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'uuid' => 'setUuid',
            'url' => 'setUrl',
            'name' => 'setName',
            'projectUuid' => 'setProjectUuid',
            'regionName' => 'setRegionName',
            'data' => 'setData',
            'moduleId' => 'setModuleId',
            'createdBy' => 'setCreatedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  authorization
    * uuid  uuid
    * url  访问地址
    * name  名称
    * projectUuid  项目uuid
    * regionName  区域名称
    * data  数据
    * moduleId  模块id
    * createdBy  createdBy
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'uuid' => 'getUuid',
            'url' => 'getUrl',
            'name' => 'getName',
            'projectUuid' => 'getProjectUuid',
            'regionName' => 'getRegionName',
            'data' => 'getData',
            'moduleId' => 'getModuleId',
            'createdBy' => 'getCreatedBy'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
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
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EndPointResponseAuthorization|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EndPointResponseAuthorization|null $authorization authorization
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets uuid
    *  uuid
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets url
    *  访问地址
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
    * @param string|null $url 访问地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    *  区域名称
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
    * @param string|null $regionName 区域名称
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets data
    *  数据
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
    * @param object|null $data 数据
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EndPointResponseCreatedBy|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EndPointResponseCreatedBy|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
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

