<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFreeResourcesUsageRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFreeResourcesUsageRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。 此参数不携带或携带值为空时，不作为筛选条件。
    * productId  产品ID，即资源包ID。 此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空时，不作为筛选条件。
    * deductTimeBegin  资源抵扣的起始时间。东八区时间，格式为YYYY-MM-DD。
    * deductTimeEnd  资源抵扣的结束时间。东八区时间，格式为YYYY-MM-DD。  说明： 抵扣结束时间-抵扣起始时间<=90天。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeResourceId' => 'string',
            'productId' => 'string',
            'resourceTypeCode' => 'string',
            'deductTimeBegin' => 'string',
            'deductTimeEnd' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。 此参数不携带或携带值为空时，不作为筛选条件。
    * productId  产品ID，即资源包ID。 此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空时，不作为筛选条件。
    * deductTimeBegin  资源抵扣的起始时间。东八区时间，格式为YYYY-MM-DD。
    * deductTimeEnd  资源抵扣的结束时间。东八区时间，格式为YYYY-MM-DD。  说明： 抵扣结束时间-抵扣起始时间<=90天。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeResourceId' => null,
        'productId' => null,
        'resourceTypeCode' => null,
        'deductTimeBegin' => null,
        'deductTimeEnd' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。 此参数不携带或携带值为空时，不作为筛选条件。
    * productId  产品ID，即资源包ID。 此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空时，不作为筛选条件。
    * deductTimeBegin  资源抵扣的起始时间。东八区时间，格式为YYYY-MM-DD。
    * deductTimeEnd  资源抵扣的结束时间。东八区时间，格式为YYYY-MM-DD。  说明： 抵扣结束时间-抵扣起始时间<=90天。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeResourceId' => 'free_resource_id',
            'productId' => 'product_id',
            'resourceTypeCode' => 'resource_type_code',
            'deductTimeBegin' => 'deduct_time_begin',
            'deductTimeEnd' => 'deduct_time_end',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。 此参数不携带或携带值为空时，不作为筛选条件。
    * productId  产品ID，即资源包ID。 此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空时，不作为筛选条件。
    * deductTimeBegin  资源抵扣的起始时间。东八区时间，格式为YYYY-MM-DD。
    * deductTimeEnd  资源抵扣的结束时间。东八区时间，格式为YYYY-MM-DD。  说明： 抵扣结束时间-抵扣起始时间<=90天。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $setters = [
            'freeResourceId' => 'setFreeResourceId',
            'productId' => 'setProductId',
            'resourceTypeCode' => 'setResourceTypeCode',
            'deductTimeBegin' => 'setDeductTimeBegin',
            'deductTimeEnd' => 'setDeductTimeEnd',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。 此参数不携带或携带值为空时，不作为筛选条件。
    * productId  产品ID，即资源包ID。 此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空时，不作为筛选条件。
    * deductTimeBegin  资源抵扣的起始时间。东八区时间，格式为YYYY-MM-DD。
    * deductTimeEnd  资源抵扣的结束时间。东八区时间，格式为YYYY-MM-DD。  说明： 抵扣结束时间-抵扣起始时间<=90天。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $getters = [
            'freeResourceId' => 'getFreeResourceId',
            'productId' => 'getProductId',
            'resourceTypeCode' => 'getResourceTypeCode',
            'deductTimeBegin' => 'getDeductTimeBegin',
            'deductTimeEnd' => 'getDeductTimeEnd',
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
        $this->container['freeResourceId'] = isset($data['freeResourceId']) ? $data['freeResourceId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['deductTimeBegin'] = isset($data['deductTimeBegin']) ? $data['deductTimeBegin'] : null;
        $this->container['deductTimeEnd'] = isset($data['deductTimeEnd']) ? $data['deductTimeEnd'] : null;
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
        if ($this->container['deductTimeBegin'] === null) {
            $invalidProperties[] = "'deductTimeBegin' can't be null";
        }
        if ($this->container['deductTimeEnd'] === null) {
            $invalidProperties[] = "'deductTimeEnd' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets freeResourceId
    *  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getFreeResourceId()
    {
        return $this->container['freeResourceId'];
    }

    /**
    * Sets freeResourceId
    *
    * @param string|null $freeResourceId 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setFreeResourceId($freeResourceId)
    {
        $this->container['freeResourceId'] = $freeResourceId;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID，即资源包ID。 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID，即资源包ID。 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string|null $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets deductTimeBegin
    *  资源抵扣的起始时间。东八区时间，格式为YYYY-MM-DD。
    *
    * @return string
    */
    public function getDeductTimeBegin()
    {
        return $this->container['deductTimeBegin'];
    }

    /**
    * Sets deductTimeBegin
    *
    * @param string $deductTimeBegin 资源抵扣的起始时间。东八区时间，格式为YYYY-MM-DD。
    *
    * @return $this
    */
    public function setDeductTimeBegin($deductTimeBegin)
    {
        $this->container['deductTimeBegin'] = $deductTimeBegin;
        return $this;
    }

    /**
    * Gets deductTimeEnd
    *  资源抵扣的结束时间。东八区时间，格式为YYYY-MM-DD。  说明： 抵扣结束时间-抵扣起始时间<=90天。
    *
    * @return string
    */
    public function getDeductTimeEnd()
    {
        return $this->container['deductTimeEnd'];
    }

    /**
    * Sets deductTimeEnd
    *
    * @param string $deductTimeEnd 资源抵扣的结束时间。东八区时间，格式为YYYY-MM-DD。  说明： 抵扣结束时间-抵扣起始时间<=90天。
    *
    * @return $this
    */
    public function setDeductTimeEnd($deductTimeEnd)
    {
        $this->container['deductTimeEnd'] = $deductTimeEnd;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    *  每次查询的数量限制。默认值为10。
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
    * @param int|null $limit 每次查询的数量限制。默认值为10。
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

