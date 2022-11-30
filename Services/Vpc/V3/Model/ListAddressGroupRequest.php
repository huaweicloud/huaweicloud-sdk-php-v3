<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAddressGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAddressGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0~2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  地址组唯一标识，填写后接口按照id进行过滤，支持多ID同时过滤
    * name  地址组名称，填写后按照名称进行过滤，支持多名称同时过滤
    * ipVersion  IP地址组ip版本，当前只支持ipv4，填写后按照ip版本进行过滤
    * description  地址组描述信息，填写后按照地址组描述信息过滤，支持多描述同时过滤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'name' => 'string[]',
            'ipVersion' => 'int',
            'description' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0~2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  地址组唯一标识，填写后接口按照id进行过滤，支持多ID同时过滤
    * name  地址组名称，填写后按照名称进行过滤，支持多名称同时过滤
    * ipVersion  IP地址组ip版本，当前只支持ipv4，填写后按照ip版本进行过滤
    * description  地址组描述信息，填写后按照地址组描述信息过滤，支持多描述同时过滤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'name' => null,
        'ipVersion' => 'int32',
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
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0~2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  地址组唯一标识，填写后接口按照id进行过滤，支持多ID同时过滤
    * name  地址组名称，填写后按照名称进行过滤，支持多名称同时过滤
    * ipVersion  IP地址组ip版本，当前只支持ipv4，填写后按照ip版本进行过滤
    * description  地址组描述信息，填写后按照地址组描述信息过滤，支持多描述同时过滤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'name' => 'name',
            'ipVersion' => 'ip_version',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0~2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  地址组唯一标识，填写后接口按照id进行过滤，支持多ID同时过滤
    * name  地址组名称，填写后按照名称进行过滤，支持多名称同时过滤
    * ipVersion  IP地址组ip版本，当前只支持ipv4，填写后按照ip版本进行过滤
    * description  地址组描述信息，填写后按照地址组描述信息过滤，支持多描述同时过滤
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'name' => 'setName',
            'ipVersion' => 'setIpVersion',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0~2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  地址组唯一标识，填写后接口按照id进行过滤，支持多ID同时过滤
    * name  地址组名称，填写后按照名称进行过滤，支持多名称同时过滤
    * ipVersion  IP地址组ip版本，当前只支持ipv4，填写后按照ip版本进行过滤
    * description  地址组描述信息，填写后按照地址组描述信息过滤，支持多描述同时过滤
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'name' => 'getName',
            'ipVersion' => 'getIpVersion',
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets limit
    *  功能说明：每页返回的个数 取值范围：0~2000
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 功能说明：每页返回的个数 取值范围：0~2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询起始的资源ID，为空时查询第一页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询起始的资源ID，为空时查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  地址组唯一标识，填写后接口按照id进行过滤，支持多ID同时过滤
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 地址组唯一标识，填写后接口按照id进行过滤，支持多ID同时过滤
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  地址组名称，填写后按照名称进行过滤，支持多名称同时过滤
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 地址组名称，填写后按照名称进行过滤，支持多名称同时过滤
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipVersion
    *  IP地址组ip版本，当前只支持ipv4，填写后按照ip版本进行过滤
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion IP地址组ip版本，当前只支持ipv4，填写后按照ip版本进行过滤
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets description
    *  地址组描述信息，填写后按照地址组描述信息过滤，支持多描述同时过滤
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description 地址组描述信息，填写后按照地址组描述信息过滤，支持多描述同时过滤
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

