<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLineGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLineGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineId  线路分组ID。 模糊匹配。
    * name  线路分组名称。 模糊匹配。
    * limit  每页返回的资源个数。  当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。  当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineId' => 'string',
            'name' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineId  线路分组ID。 模糊匹配。
    * name  线路分组名称。 模糊匹配。
    * limit  每页返回的资源个数。  当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。  当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineId' => null,
        'name' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * lineId  线路分组ID。 模糊匹配。
    * name  线路分组名称。 模糊匹配。
    * limit  每页返回的资源个数。  当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。  当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineId' => 'line_id',
            'name' => 'name',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineId  线路分组ID。 模糊匹配。
    * name  线路分组名称。 模糊匹配。
    * limit  每页返回的资源个数。  当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。  当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @var string[]
    */
    protected static $setters = [
            'lineId' => 'setLineId',
            'name' => 'setName',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineId  线路分组ID。 模糊匹配。
    * name  线路分组名称。 模糊匹配。
    * limit  每页返回的资源个数。  当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。  当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @var string[]
    */
    protected static $getters = [
            'lineId' => 'getLineId',
            'name' => 'getName',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    *  线路分组ID。 模糊匹配。
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
    * @param string|null $lineId 线路分组ID。 模糊匹配。
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
    *  线路分组名称。 模糊匹配。
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
    * @param string|null $name 线路分组名称。 模糊匹配。
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
    *  每页返回的资源个数。  当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。  当查询概要信息时：取值范围：0~3000默认为3000。
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
    * @param int|null $limit 每页返回的资源个数。  当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。  当查询概要信息时：取值范围：0~3000默认为3000。
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

