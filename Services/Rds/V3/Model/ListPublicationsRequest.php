<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublicationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublicationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言。默认en-us。
    * instanceId  实例ID
    * publicationName  发布名（模糊匹配）
    * publicationDbName  发布数据库名（模糊匹配）
    * subscriberInstanceId  订阅实例id
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'publicationName' => 'string',
            'publicationDbName' => 'string',
            'subscriberInstanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言。默认en-us。
    * instanceId  实例ID
    * publicationName  发布名（模糊匹配）
    * publicationDbName  发布数据库名（模糊匹配）
    * subscriberInstanceId  订阅实例id
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'publicationName' => null,
        'publicationDbName' => null,
        'subscriberInstanceId' => null,
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
    * xLanguage  语言。默认en-us。
    * instanceId  实例ID
    * publicationName  发布名（模糊匹配）
    * publicationDbName  发布数据库名（模糊匹配）
    * subscriberInstanceId  订阅实例id
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'publicationName' => 'publication_name',
            'publicationDbName' => 'publication_db_name',
            'subscriberInstanceId' => 'subscriber_instance_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言。默认en-us。
    * instanceId  实例ID
    * publicationName  发布名（模糊匹配）
    * publicationDbName  发布数据库名（模糊匹配）
    * subscriberInstanceId  订阅实例id
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'publicationName' => 'setPublicationName',
            'publicationDbName' => 'setPublicationDbName',
            'subscriberInstanceId' => 'setSubscriberInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言。默认en-us。
    * instanceId  实例ID
    * publicationName  发布名（模糊匹配）
    * publicationDbName  发布数据库名（模糊匹配）
    * subscriberInstanceId  订阅实例id
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'publicationName' => 'getPublicationName',
            'publicationDbName' => 'getPublicationDbName',
            'subscriberInstanceId' => 'getSubscriberInstanceId',
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['publicationName'] = isset($data['publicationName']) ? $data['publicationName'] : null;
        $this->container['publicationDbName'] = isset($data['publicationDbName']) ? $data['publicationDbName'] : null;
        $this->container['subscriberInstanceId'] = isset($data['subscriberInstanceId']) ? $data['subscriberInstanceId'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
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
    * Gets xLanguage
    *  语言。默认en-us。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言。默认en-us。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets publicationName
    *  发布名（模糊匹配）
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
    * @param string|null $publicationName 发布名（模糊匹配）
    *
    * @return $this
    */
    public function setPublicationName($publicationName)
    {
        $this->container['publicationName'] = $publicationName;
        return $this;
    }

    /**
    * Gets publicationDbName
    *  发布数据库名（模糊匹配）
    *
    * @return string|null
    */
    public function getPublicationDbName()
    {
        return $this->container['publicationDbName'];
    }

    /**
    * Sets publicationDbName
    *
    * @param string|null $publicationDbName 发布数据库名（模糊匹配）
    *
    * @return $this
    */
    public function setPublicationDbName($publicationDbName)
    {
        $this->container['publicationDbName'] = $publicationDbName;
        return $this;
    }

    /**
    * Gets subscriberInstanceId
    *  订阅实例id
    *
    * @return string|null
    */
    public function getSubscriberInstanceId()
    {
        return $this->container['subscriberInstanceId'];
    }

    /**
    * Sets subscriberInstanceId
    *
    * @param string|null $subscriberInstanceId 订阅实例id
    *
    * @return $this
    */
    public function setSubscriberInstanceId($subscriberInstanceId)
    {
        $this->container['subscriberInstanceId'] = $subscriberInstanceId;
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
    *  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
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
    * @param int|null $limit 查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
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

