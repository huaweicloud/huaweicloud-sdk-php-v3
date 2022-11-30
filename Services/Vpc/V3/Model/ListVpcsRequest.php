<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpcsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpcsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  VPC资源ID。可以使用该字段过滤VPC
    * name  VPC的name信息，可以使用该字段过滤VPC
    * description  VPC的描述信息。可以使用该字段过滤VPC
    * cidr  VPC的CIDR。可以使用该字段过滤VPC
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'cidr' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  VPC资源ID。可以使用该字段过滤VPC
    * name  VPC的name信息，可以使用该字段过滤VPC
    * description  VPC的描述信息。可以使用该字段过滤VPC
    * cidr  VPC的CIDR。可以使用该字段过滤VPC
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'cidr' => null
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
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  VPC资源ID。可以使用该字段过滤VPC
    * name  VPC的name信息，可以使用该字段过滤VPC
    * description  VPC的描述信息。可以使用该字段过滤VPC
    * cidr  VPC的CIDR。可以使用该字段过滤VPC
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'cidr' => 'cidr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  VPC资源ID。可以使用该字段过滤VPC
    * name  VPC的name信息，可以使用该字段过滤VPC
    * description  VPC的描述信息。可以使用该字段过滤VPC
    * cidr  VPC的CIDR。可以使用该字段过滤VPC
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'cidr' => 'setCidr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  VPC资源ID。可以使用该字段过滤VPC
    * name  VPC的name信息，可以使用该字段过滤VPC
    * description  VPC的描述信息。可以使用该字段过滤VPC
    * cidr  VPC的CIDR。可以使用该字段过滤VPC
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'cidr' => 'getCidr'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
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
    *  功能说明：每页返回的个数 取值范围：0-2000
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
    * @param int|null $limit 功能说明：每页返回的个数 取值范围：0-2000
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
    *  VPC资源ID。可以使用该字段过滤VPC
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
    * @param string[]|null $id VPC资源ID。可以使用该字段过滤VPC
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
    *  VPC的name信息，可以使用该字段过滤VPC
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
    * @param string[]|null $name VPC的name信息，可以使用该字段过滤VPC
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  VPC的描述信息。可以使用该字段过滤VPC
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
    * @param string[]|null $description VPC的描述信息。可以使用该字段过滤VPC
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cidr
    *  VPC的CIDR。可以使用该字段过滤VPC
    *
    * @return string[]|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string[]|null $cidr VPC的CIDR。可以使用该字段过滤VPC
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
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

