<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPrivateZonesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPrivateZonesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  待查询的zone的类型。  取值范围：private。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。
    * name  zone名称。
    * status  资源状态。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'offset' => 'int',
            'tags' => 'string',
            'name' => 'string',
            'status' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  待查询的zone的类型。  取值范围：private。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。
    * name  zone名称。
    * status  资源状态。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'limit' => 'int32',
        'marker' => null,
        'offset' => 'int32',
        'tags' => null,
        'name' => null,
        'status' => null,
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
    * type  待查询的zone的类型。  取值范围：private。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。
    * name  zone名称。
    * status  资源状态。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'limit' => 'limit',
            'marker' => 'marker',
            'offset' => 'offset',
            'tags' => 'tags',
            'name' => 'name',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  待查询的zone的类型。  取值范围：private。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。
    * name  zone名称。
    * status  资源状态。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'name' => 'setName',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  待查询的zone的类型。  取值范围：private。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。
    * name  zone名称。
    * status  资源状态。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'name' => 'getName',
            'status' => 'getStatus',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets type
    *  待查询的zone的类型。  取值范围：private。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 待查询的zone的类型。  取值范围：private。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
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
    * @param int|null $limit 每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
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
    *  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
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
    * @param string|null $marker 分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 资源标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets name
    *  zone名称。
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
    * @param string|null $name zone名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
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
    * @param string|null $enterpriseProjectId 域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
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

