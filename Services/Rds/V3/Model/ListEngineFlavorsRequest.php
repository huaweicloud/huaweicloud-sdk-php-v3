<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEngineFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEngineFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * availabilityZoneIds  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b
    * haMode  模式，包括如下类型： ha：主备实例。 replica：只读实例。 single：单实例。
    * specCodeLike  性能规格,如rds.dec.pg.s1.medium，模糊匹配该规格类型
    * flavorCategoryType  规格类型，包括如下类型：simple、dec
    * isRhaFlavor  是否显示高可用只读类型
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0。 取值必须为数字，且不能为负数。
    * limit  查询个数上限值。 取值范围：1~100。 不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'availabilityZoneIds' => 'string',
            'haMode' => 'string',
            'specCodeLike' => 'string',
            'flavorCategoryType' => 'string',
            'isRhaFlavor' => 'bool',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * availabilityZoneIds  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b
    * haMode  模式，包括如下类型： ha：主备实例。 replica：只读实例。 single：单实例。
    * specCodeLike  性能规格,如rds.dec.pg.s1.medium，模糊匹配该规格类型
    * flavorCategoryType  规格类型，包括如下类型：simple、dec
    * isRhaFlavor  是否显示高可用只读类型
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0。 取值必须为数字，且不能为负数。
    * limit  查询个数上限值。 取值范围：1~100。 不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'availabilityZoneIds' => null,
        'haMode' => null,
        'specCodeLike' => null,
        'flavorCategoryType' => null,
        'isRhaFlavor' => null,
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
    * instanceId  实例ID
    * availabilityZoneIds  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b
    * haMode  模式，包括如下类型： ha：主备实例。 replica：只读实例。 single：单实例。
    * specCodeLike  性能规格,如rds.dec.pg.s1.medium，模糊匹配该规格类型
    * flavorCategoryType  规格类型，包括如下类型：simple、dec
    * isRhaFlavor  是否显示高可用只读类型
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0。 取值必须为数字，且不能为负数。
    * limit  查询个数上限值。 取值范围：1~100。 不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'availabilityZoneIds' => 'availability_zone_ids',
            'haMode' => 'ha_mode',
            'specCodeLike' => 'spec_code_like',
            'flavorCategoryType' => 'flavor_category_type',
            'isRhaFlavor' => 'is_rha_flavor',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * availabilityZoneIds  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b
    * haMode  模式，包括如下类型： ha：主备实例。 replica：只读实例。 single：单实例。
    * specCodeLike  性能规格,如rds.dec.pg.s1.medium，模糊匹配该规格类型
    * flavorCategoryType  规格类型，包括如下类型：simple、dec
    * isRhaFlavor  是否显示高可用只读类型
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0。 取值必须为数字，且不能为负数。
    * limit  查询个数上限值。 取值范围：1~100。 不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'haMode' => 'setHaMode',
            'specCodeLike' => 'setSpecCodeLike',
            'flavorCategoryType' => 'setFlavorCategoryType',
            'isRhaFlavor' => 'setIsRhaFlavor',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * availabilityZoneIds  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b
    * haMode  模式，包括如下类型： ha：主备实例。 replica：只读实例。 single：单实例。
    * specCodeLike  性能规格,如rds.dec.pg.s1.medium，模糊匹配该规格类型
    * flavorCategoryType  规格类型，包括如下类型：simple、dec
    * isRhaFlavor  是否显示高可用只读类型
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0。 取值必须为数字，且不能为负数。
    * limit  查询个数上限值。 取值范围：1~100。 不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'haMode' => 'getHaMode',
            'specCodeLike' => 'getSpecCodeLike',
            'flavorCategoryType' => 'getFlavorCategoryType',
            'isRhaFlavor' => 'getIsRhaFlavor',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['specCodeLike'] = isset($data['specCodeLike']) ? $data['specCodeLike'] : null;
        $this->container['flavorCategoryType'] = isset($data['flavorCategoryType']) ? $data['flavorCategoryType'] : null;
        $this->container['isRhaFlavor'] = isset($data['isRhaFlavor']) ? $data['isRhaFlavor'] : null;
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
        if ($this->container['availabilityZoneIds'] === null) {
            $invalidProperties[] = "'availabilityZoneIds' can't be null";
        }
        if ($this->container['haMode'] === null) {
            $invalidProperties[] = "'haMode' can't be null";
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
    * Gets availabilityZoneIds
    *  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b
    *
    * @return string
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string $availabilityZoneIds 可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets haMode
    *  模式，包括如下类型： ha：主备实例。 replica：只读实例。 single：单实例。
    *
    * @return string
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string $haMode 模式，包括如下类型： ha：主备实例。 replica：只读实例。 single：单实例。
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets specCodeLike
    *  性能规格,如rds.dec.pg.s1.medium，模糊匹配该规格类型
    *
    * @return string|null
    */
    public function getSpecCodeLike()
    {
        return $this->container['specCodeLike'];
    }

    /**
    * Sets specCodeLike
    *
    * @param string|null $specCodeLike 性能规格,如rds.dec.pg.s1.medium，模糊匹配该规格类型
    *
    * @return $this
    */
    public function setSpecCodeLike($specCodeLike)
    {
        $this->container['specCodeLike'] = $specCodeLike;
        return $this;
    }

    /**
    * Gets flavorCategoryType
    *  规格类型，包括如下类型：simple、dec
    *
    * @return string|null
    */
    public function getFlavorCategoryType()
    {
        return $this->container['flavorCategoryType'];
    }

    /**
    * Sets flavorCategoryType
    *
    * @param string|null $flavorCategoryType 规格类型，包括如下类型：simple、dec
    *
    * @return $this
    */
    public function setFlavorCategoryType($flavorCategoryType)
    {
        $this->container['flavorCategoryType'] = $flavorCategoryType;
        return $this;
    }

    /**
    * Gets isRhaFlavor
    *  是否显示高可用只读类型
    *
    * @return bool|null
    */
    public function getIsRhaFlavor()
    {
        return $this->container['isRhaFlavor'];
    }

    /**
    * Sets isRhaFlavor
    *
    * @param bool|null $isRhaFlavor 是否显示高可用只读类型
    *
    * @return $this
    */
    public function setIsRhaFlavor($isRhaFlavor)
    {
        $this->container['isRhaFlavor'] = $isRhaFlavor;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0。 取值必须为数字，且不能为负数。
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
    * @param int|null $offset 索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0。 取值必须为数字，且不能为负数。
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
    *  查询个数上限值。 取值范围：1~100。 不传该参数时，默认查询前100条信息。
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
    * @param int|null $limit 查询个数上限值。 取值范围：1~100。 不传该参数时，默认查询前100条信息。
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

