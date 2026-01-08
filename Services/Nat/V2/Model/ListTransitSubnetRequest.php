<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTransitSubnetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTransitSubnetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  中转子网的ID
    * name  中转子网的名字
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属项目的ID
    * vpcId  中转子网的子网所属的VPC的ID
    * virsubnetId  中转子网的子网ID
    * status  中转子网状态。 取值范围： - ACTIVE： 当前资源状态正常。 - INACTIVE： 不可用。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取
    * pageReverse  是否查询前一页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'virsubnetProjectId' => 'string[]',
            'vpcId' => 'string[]',
            'virsubnetId' => 'string[]',
            'status' => 'string[]',
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  中转子网的ID
    * name  中转子网的名字
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属项目的ID
    * vpcId  中转子网的子网所属的VPC的ID
    * virsubnetId  中转子网的子网ID
    * status  中转子网状态。 取值范围： - ACTIVE： 当前资源状态正常。 - INACTIVE： 不可用。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取
    * pageReverse  是否查询前一页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'virsubnetProjectId' => null,
        'vpcId' => null,
        'virsubnetId' => null,
        'status' => null,
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null
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
    * id  中转子网的ID
    * name  中转子网的名字
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属项目的ID
    * vpcId  中转子网的子网所属的VPC的ID
    * virsubnetId  中转子网的子网ID
    * status  中转子网状态。 取值范围： - ACTIVE： 当前资源状态正常。 - INACTIVE： 不可用。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取
    * pageReverse  是否查询前一页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'virsubnetProjectId' => 'virsubnet_project_id',
            'vpcId' => 'vpc_id',
            'virsubnetId' => 'virsubnet_id',
            'status' => 'status',
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  中转子网的ID
    * name  中转子网的名字
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属项目的ID
    * vpcId  中转子网的子网所属的VPC的ID
    * virsubnetId  中转子网的子网ID
    * status  中转子网状态。 取值范围： - ACTIVE： 当前资源状态正常。 - INACTIVE： 不可用。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取
    * pageReverse  是否查询前一页
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'virsubnetProjectId' => 'setVirsubnetProjectId',
            'vpcId' => 'setVpcId',
            'virsubnetId' => 'setVirsubnetId',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  中转子网的ID
    * name  中转子网的名字
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属项目的ID
    * vpcId  中转子网的子网所属的VPC的ID
    * virsubnetId  中转子网的子网ID
    * status  中转子网状态。 取值范围： - ACTIVE： 当前资源状态正常。 - INACTIVE： 不可用。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取
    * pageReverse  是否查询前一页
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'virsubnetProjectId' => 'getVirsubnetProjectId',
            'vpcId' => 'getVpcId',
            'virsubnetId' => 'getVirsubnetId',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['virsubnetProjectId'] = isset($data['virsubnetProjectId']) ? $data['virsubnetProjectId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 36.";
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
    *  中转子网的ID
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
    * @param string[]|null $id 中转子网的ID
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
    *  中转子网的名字
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
    * @param string[]|null $name 中转子网的名字
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
    *  中转子网的描述
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
    * @param string[]|null $description 中转子网的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets virsubnetProjectId
    *  中转子网的子网所属项目的ID
    *
    * @return string[]|null
    */
    public function getVirsubnetProjectId()
    {
        return $this->container['virsubnetProjectId'];
    }

    /**
    * Sets virsubnetProjectId
    *
    * @param string[]|null $virsubnetProjectId 中转子网的子网所属项目的ID
    *
    * @return $this
    */
    public function setVirsubnetProjectId($virsubnetProjectId)
    {
        $this->container['virsubnetProjectId'] = $virsubnetProjectId;
        return $this;
    }

    /**
    * Gets vpcId
    *  中转子网的子网所属的VPC的ID
    *
    * @return string[]|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string[]|null $vpcId 中转子网的子网所属的VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  中转子网的子网ID
    *
    * @return string[]|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string[]|null $virsubnetId 中转子网的子网ID
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets status
    *  中转子网状态。 取值范围： - ACTIVE： 当前资源状态正常。 - INACTIVE： 不可用。
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status 中转子网状态。 取值范围： - ACTIVE： 当前资源状态正常。 - INACTIVE： 不可用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000
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
    * @param int|null $limit 功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000
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
    *  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取
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
    * @param string|null $marker 功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否查询前一页
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 是否查询前一页
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
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

