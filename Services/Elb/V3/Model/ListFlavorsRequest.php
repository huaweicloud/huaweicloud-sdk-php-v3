<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  参数解释：上一页最后一条记录的ID。  约束限制： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  参数解释：是否反向查询。  约束限制： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  取值范围： - true：查询上一页。 - false：查询下一页，默认。
    * id  参数解释：规格ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  参数解释：规格名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * type  参数解释：规格类别。  取值范围： - L4和L7 表示四层网络型和七层应用型flavor。 [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu) - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  参数解释：是否查询公共规格。  取值范围：true表示公共规格，所有租户可见。false表示私有规格，为当前租户所有。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'id' => 'string[]',
            'name' => 'string[]',
            'type' => 'string[]',
            'shared' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  参数解释：上一页最后一条记录的ID。  约束限制： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  参数解释：是否反向查询。  约束限制： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  取值范围： - true：查询上一页。 - false：查询下一页，默认。
    * id  参数解释：规格ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  参数解释：规格名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * type  参数解释：规格类别。  取值范围： - L4和L7 表示四层网络型和七层应用型flavor。 [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu) - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  参数解释：是否查询公共规格。  取值范围：true表示公共规格，所有租户可见。false表示私有规格，为当前租户所有。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'type' => null,
        'shared' => null
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
    * marker  参数解释：上一页最后一条记录的ID。  约束限制： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  参数解释：是否反向查询。  约束限制： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  取值范围： - true：查询上一页。 - false：查询下一页，默认。
    * id  参数解释：规格ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  参数解释：规格名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * type  参数解释：规格类别。  取值范围： - L4和L7 表示四层网络型和七层应用型flavor。 [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu) - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  参数解释：是否查询公共规格。  取值范围：true表示公共规格，所有租户可见。false表示私有规格，为当前租户所有。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'shared' => 'shared'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  参数解释：上一页最后一条记录的ID。  约束限制： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  参数解释：是否反向查询。  约束限制： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  取值范围： - true：查询上一页。 - false：查询下一页，默认。
    * id  参数解释：规格ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  参数解释：规格名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * type  参数解释：规格类别。  取值范围： - L4和L7 表示四层网络型和七层应用型flavor。 [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu) - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  参数解释：是否查询公共规格。  取值范围：true表示公共规格，所有租户可见。false表示私有规格，为当前租户所有。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'shared' => 'setShared'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  参数解释：上一页最后一条记录的ID。  约束限制： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  参数解释：是否反向查询。  约束限制： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  取值范围： - true：查询上一页。 - false：查询下一页，默认。
    * id  参数解释：规格ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  参数解释：规格名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * type  参数解释：规格类别。  取值范围： - L4和L7 表示四层网络型和七层应用型flavor。 [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu) - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  参数解释：是否查询公共规格。  取值范围：true表示公共规格，所有租户可见。false表示私有规格，为当前租户所有。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'shared' => 'getShared'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets marker
    *  参数解释：上一页最后一条记录的ID。  约束限制： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
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
    * @param string|null $marker 参数解释：上一页最后一条记录的ID。  约束限制： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
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
    * @param int|null $limit 参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  参数解释：是否反向查询。  约束限制： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  取值范围： - true：查询上一页。 - false：查询下一页，默认。
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
    * @param bool|null $pageReverse 参数解释：是否反向查询。  约束限制： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  取值范围： - true：查询上一页。 - false：查询下一页，默认。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  参数解释：规格ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
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
    * @param string[]|null $id 参数解释：规格ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
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
    *  参数解释：规格名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
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
    * @param string[]|null $name 参数解释：规格名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  参数解释：规格类别。  取值范围： - L4和L7 表示四层网络型和七层应用型flavor。 [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu) - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 参数解释：规格类别。  取值范围： - L4和L7 表示四层网络型和七层应用型flavor。 [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu) - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets shared
    *  参数解释：是否查询公共规格。  取值范围：true表示公共规格，所有租户可见。false表示私有规格，为当前租户所有。
    *
    * @return bool|null
    */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
    * Sets shared
    *
    * @param bool|null $shared 参数解释：是否查询公共规格。  取值范围：true表示公共规格，所有租户可见。false表示私有规格，为当前租户所有。
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
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

