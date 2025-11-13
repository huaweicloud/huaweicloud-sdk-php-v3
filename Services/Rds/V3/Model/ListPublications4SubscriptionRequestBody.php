<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublications4SubscriptionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublications4SubscriptionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicationInstanceId  发布实例id。若不为空，优先查该实例下的发布。
    * publicationInstanceName  发布实例名称（模糊匹配）。
    * publicationName  发布名称（模糊匹配）。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicationInstanceId' => 'string',
            'publicationInstanceName' => 'string',
            'publicationName' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicationInstanceId  发布实例id。若不为空，优先查该实例下的发布。
    * publicationInstanceName  发布实例名称（模糊匹配）。
    * publicationName  发布名称（模糊匹配）。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicationInstanceId' => null,
        'publicationInstanceName' => null,
        'publicationName' => null,
        'offset' => null,
        'limit' => null
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
    * publicationInstanceId  发布实例id。若不为空，优先查该实例下的发布。
    * publicationInstanceName  发布实例名称（模糊匹配）。
    * publicationName  发布名称（模糊匹配）。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicationInstanceId' => 'publication_instance_id',
            'publicationInstanceName' => 'publication_instance_name',
            'publicationName' => 'publication_name',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicationInstanceId  发布实例id。若不为空，优先查该实例下的发布。
    * publicationInstanceName  发布实例名称（模糊匹配）。
    * publicationName  发布名称（模糊匹配）。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicationInstanceId' => 'setPublicationInstanceId',
            'publicationInstanceName' => 'setPublicationInstanceName',
            'publicationName' => 'setPublicationName',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicationInstanceId  发布实例id。若不为空，优先查该实例下的发布。
    * publicationInstanceName  发布实例名称（模糊匹配）。
    * publicationName  发布名称（模糊匹配）。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicationInstanceId' => 'getPublicationInstanceId',
            'publicationInstanceName' => 'getPublicationInstanceName',
            'publicationName' => 'getPublicationName',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['publicationInstanceId'] = isset($data['publicationInstanceId']) ? $data['publicationInstanceId'] : null;
        $this->container['publicationInstanceName'] = isset($data['publicationInstanceName']) ? $data['publicationInstanceName'] : null;
        $this->container['publicationName'] = isset($data['publicationName']) ? $data['publicationName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
    * Gets publicationInstanceId
    *  发布实例id。若不为空，优先查该实例下的发布。
    *
    * @return string|null
    */
    public function getPublicationInstanceId()
    {
        return $this->container['publicationInstanceId'];
    }

    /**
    * Sets publicationInstanceId
    *
    * @param string|null $publicationInstanceId 发布实例id。若不为空，优先查该实例下的发布。
    *
    * @return $this
    */
    public function setPublicationInstanceId($publicationInstanceId)
    {
        $this->container['publicationInstanceId'] = $publicationInstanceId;
        return $this;
    }

    /**
    * Gets publicationInstanceName
    *  发布实例名称（模糊匹配）。
    *
    * @return string|null
    */
    public function getPublicationInstanceName()
    {
        return $this->container['publicationInstanceName'];
    }

    /**
    * Sets publicationInstanceName
    *
    * @param string|null $publicationInstanceName 发布实例名称（模糊匹配）。
    *
    * @return $this
    */
    public function setPublicationInstanceName($publicationInstanceName)
    {
        $this->container['publicationInstanceName'] = $publicationInstanceName;
        return $this;
    }

    /**
    * Gets publicationName
    *  发布名称（模糊匹配）。
    *
    * @return string|null
    */
    public function getPublicationName()
    {
        return $this->container['publicationName'];
    }

    /**
    * Sets publicationName
    *
    * @param string|null $publicationName 发布名称（模糊匹配）。
    *
    * @return $this
    */
    public function setPublicationName($publicationName)
    {
        $this->container['publicationName'] = $publicationName;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。默认为10，不能为负数，最小值为1，最大值为1000。
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
    * @param int|null $limit 查询记录数。默认为10，不能为负数，最小值为1，最大值为1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

