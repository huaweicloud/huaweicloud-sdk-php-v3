<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDdmFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDdmFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。取值必须为数字，且不能为负数。
    * limit  查询个数上限值。取值范围：1~128。不传该参数时，默认值为10。
    * engineId  引擎ID,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * engineVersion  引擎版本,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * availableZones  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b。请参见地区和终端节点(https://console.huaweicloud.com/apiexplorer/#/endpoint/DDM)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'engineId' => 'string',
            'engineVersion' => 'string',
            'availableZones' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。取值必须为数字，且不能为负数。
    * limit  查询个数上限值。取值范围：1~128。不传该参数时，默认值为10。
    * engineId  引擎ID,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * engineVersion  引擎版本,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * availableZones  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b。请参见地区和终端节点(https://console.huaweicloud.com/apiexplorer/#/endpoint/DDM)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'engineId' => null,
        'engineVersion' => null,
        'availableZones' => null
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
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。取值必须为数字，且不能为负数。
    * limit  查询个数上限值。取值范围：1~128。不传该参数时，默认值为10。
    * engineId  引擎ID,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * engineVersion  引擎版本,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * availableZones  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b。请参见地区和终端节点(https://console.huaweicloud.com/apiexplorer/#/endpoint/DDM)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'engineId' => 'engine_id',
            'engineVersion' => 'engine_version',
            'availableZones' => 'available_zones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。取值必须为数字，且不能为负数。
    * limit  查询个数上限值。取值范围：1~128。不传该参数时，默认值为10。
    * engineId  引擎ID,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * engineVersion  引擎版本,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * availableZones  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b。请参见地区和终端节点(https://console.huaweicloud.com/apiexplorer/#/endpoint/DDM)。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'engineId' => 'setEngineId',
            'engineVersion' => 'setEngineVersion',
            'availableZones' => 'setAvailableZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。取值必须为数字，且不能为负数。
    * limit  查询个数上限值。取值范围：1~128。不传该参数时，默认值为10。
    * engineId  引擎ID,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * engineVersion  引擎版本,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    * availableZones  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b。请参见地区和终端节点(https://console.huaweicloud.com/apiexplorer/#/endpoint/DDM)。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'engineId' => 'getEngineId',
            'engineVersion' => 'getEngineVersion',
            'availableZones' => 'getAvailableZones'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
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
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。取值必须为数字，且不能为负数。
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
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。取值必须为数字，且不能为负数。
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
    *  查询个数上限值。取值范围：1~128。不传该参数时，默认值为10。
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
    * @param int|null $limit 查询个数上限值。取值范围：1~128。不传该参数时，默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets engineId
    *  引擎ID,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    *
    * @return string|null
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string|null $engineId 引擎ID,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎版本,通过查询DDM引擎信息接口获取，引擎ID与引擎版本至少指定一个
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets availableZones
    *  可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b。请参见地区和终端节点(https://console.huaweicloud.com/apiexplorer/#/endpoint/DDM)。
    *
    * @return string|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string|null $availableZones 可用区，多个用\",\"分割，如cn-southwest-244a,cn-southwest-244b。请参见地区和终端节点(https://console.huaweicloud.com/apiexplorer/#/endpoint/DDM)。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
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

