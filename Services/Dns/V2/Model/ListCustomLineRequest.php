<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomLineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomLineRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  每页返回的资源个数。取值范围为0~100。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineId' => 'string',
            'name' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'showDetail' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  每页返回的资源个数。取值范围为0~100。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineId' => null,
        'name' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'showDetail' => null
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
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  每页返回的资源个数。取值范围为0~100。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineId' => 'line_id',
            'name' => 'name',
            'limit' => 'limit',
            'offset' => 'offset',
            'showDetail' => 'show_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  每页返回的资源个数。取值范围为0~100。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @var string[]
    */
    protected static $setters = [
            'lineId' => 'setLineId',
            'name' => 'setName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'showDetail' => 'setShowDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  每页返回的资源个数。取值范围为0~100。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @var string[]
    */
    protected static $getters = [
            'lineId' => 'getLineId',
            'name' => 'getName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'showDetail' => 'getShowDetail'
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
        $this->container['lineId'] = isset($data['lineId']) ? $data['lineId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['showDetail'] = isset($data['showDetail']) ? $data['showDetail'] : null;
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
    * Gets lineId
    *  解析线路ID。
    *
    * @return string|null
    */
    public function getLineId()
    {
        return $this->container['lineId'];
    }

    /**
    * Sets lineId
    *
    * @param string|null $lineId 解析线路ID。
    *
    * @return $this
    */
    public function setLineId($lineId)
    {
        $this->container['lineId'] = $lineId;
        return $this;
    }

    /**
    * Gets name
    *  解析线路名称。
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
    * @param string|null $name 解析线路名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的资源个数。取值范围为0~100。
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
    * @param int|null $limit 每页返回的资源个数。取值范围为0~100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。
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
    * @param int|null $offset 分页查询起始偏移量，表示从偏移量的下一个资源开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets showDetail
    *  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @return bool|null
    */
    public function getShowDetail()
    {
        return $this->container['showDetail'];
    }

    /**
    * Sets showDetail
    *
    * @param bool|null $showDetail 是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @return $this
    */
    public function setShowDetail($showDetail)
    {
        $this->container['showDetail'] = $showDetail;
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

