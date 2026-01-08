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
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：规格ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：规格名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：规格类别。  **取值范围**： - L4和L7 表示四层网络型和七层应用型flavor。 - gwlb 表示网关型LB的flavor。 - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max和gwlb_elastic_max 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  **参数解释**：是否查询公共规格。  **约束限制**：不涉及  **取值范围**： - true表示查询公共规格，所有租户可见的规格。 - false表示查询私有规格，当前仅租户可见的规格。  **默认取值**：不涉及
    * publicBorderGroup  **参数解释**：公网边界组。 支持多值查询，查询条件格式：*public_border_group=xxx&public_border_group=xxx*。  **约束限制**：不涉及  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  **默认取值**：不涉及
    * category  **参数解释**：可用区子类型编码。该字段主要用于区分在边缘场景下，边缘AZ的类型。 支持多值查询，查询条件格式：*category=xxx&category=xxx*。  **约束限制**：不涉及  **取值范围**：0表示center，21表示homezone，41表示IES。  **默认取值**：不涉及
    * listAll  **参数解释**：是否查询当前租户所有的弹性上限规格。  **约束限制**：不涉及  **取值范围**： - true：查询当前租户所有的弹性上限规格（l4_elastic_max、l7_elastic_max）。 - false：查询租户弹性上限规格中最大的规格（l4类型优先比较cps指标，然后是带宽；l7类型优先比较https cps指标然后是qps指标）。  **默认取值**：不涉及
    * flavorSoldOut  **参数解释**：[是否售罄。](tag:hws)[是否无法购买该规格的LB。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,ct)  **约束限制**：不涉及  **取值范围**： - true：[已售罄，将](tag:hws)无法购买该规格的LB。 - false：[未售罄，](tag:hws)可购买该规格的LB。  **默认取值**：不涉及
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
            'shared' => 'bool',
            'publicBorderGroup' => 'string[]',
            'category' => 'int[]',
            'listAll' => 'bool',
            'flavorSoldOut' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：规格ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：规格名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：规格类别。  **取值范围**： - L4和L7 表示四层网络型和七层应用型flavor。 - gwlb 表示网关型LB的flavor。 - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max和gwlb_elastic_max 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  **参数解释**：是否查询公共规格。  **约束限制**：不涉及  **取值范围**： - true表示查询公共规格，所有租户可见的规格。 - false表示查询私有规格，当前仅租户可见的规格。  **默认取值**：不涉及
    * publicBorderGroup  **参数解释**：公网边界组。 支持多值查询，查询条件格式：*public_border_group=xxx&public_border_group=xxx*。  **约束限制**：不涉及  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  **默认取值**：不涉及
    * category  **参数解释**：可用区子类型编码。该字段主要用于区分在边缘场景下，边缘AZ的类型。 支持多值查询，查询条件格式：*category=xxx&category=xxx*。  **约束限制**：不涉及  **取值范围**：0表示center，21表示homezone，41表示IES。  **默认取值**：不涉及
    * listAll  **参数解释**：是否查询当前租户所有的弹性上限规格。  **约束限制**：不涉及  **取值范围**： - true：查询当前租户所有的弹性上限规格（l4_elastic_max、l7_elastic_max）。 - false：查询租户弹性上限规格中最大的规格（l4类型优先比较cps指标，然后是带宽；l7类型优先比较https cps指标然后是qps指标）。  **默认取值**：不涉及
    * flavorSoldOut  **参数解释**：[是否售罄。](tag:hws)[是否无法购买该规格的LB。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,ct)  **约束限制**：不涉及  **取值范围**： - true：[已售罄，将](tag:hws)无法购买该规格的LB。 - false：[未售罄，](tag:hws)可购买该规格的LB。  **默认取值**：不涉及
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
        'shared' => null,
        'publicBorderGroup' => null,
        'category' => null,
        'listAll' => null,
        'flavorSoldOut' => null
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
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：规格ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：规格名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：规格类别。  **取值范围**： - L4和L7 表示四层网络型和七层应用型flavor。 - gwlb 表示网关型LB的flavor。 - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max和gwlb_elastic_max 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  **参数解释**：是否查询公共规格。  **约束限制**：不涉及  **取值范围**： - true表示查询公共规格，所有租户可见的规格。 - false表示查询私有规格，当前仅租户可见的规格。  **默认取值**：不涉及
    * publicBorderGroup  **参数解释**：公网边界组。 支持多值查询，查询条件格式：*public_border_group=xxx&public_border_group=xxx*。  **约束限制**：不涉及  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  **默认取值**：不涉及
    * category  **参数解释**：可用区子类型编码。该字段主要用于区分在边缘场景下，边缘AZ的类型。 支持多值查询，查询条件格式：*category=xxx&category=xxx*。  **约束限制**：不涉及  **取值范围**：0表示center，21表示homezone，41表示IES。  **默认取值**：不涉及
    * listAll  **参数解释**：是否查询当前租户所有的弹性上限规格。  **约束限制**：不涉及  **取值范围**： - true：查询当前租户所有的弹性上限规格（l4_elastic_max、l7_elastic_max）。 - false：查询租户弹性上限规格中最大的规格（l4类型优先比较cps指标，然后是带宽；l7类型优先比较https cps指标然后是qps指标）。  **默认取值**：不涉及
    * flavorSoldOut  **参数解释**：[是否售罄。](tag:hws)[是否无法购买该规格的LB。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,ct)  **约束限制**：不涉及  **取值范围**： - true：[已售罄，将](tag:hws)无法购买该规格的LB。 - false：[未售罄，](tag:hws)可购买该规格的LB。  **默认取值**：不涉及
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
            'shared' => 'shared',
            'publicBorderGroup' => 'public_border_group',
            'category' => 'category',
            'listAll' => 'list_all',
            'flavorSoldOut' => 'flavor_sold_out'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：规格ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：规格名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：规格类别。  **取值范围**： - L4和L7 表示四层网络型和七层应用型flavor。 - gwlb 表示网关型LB的flavor。 - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max和gwlb_elastic_max 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  **参数解释**：是否查询公共规格。  **约束限制**：不涉及  **取值范围**： - true表示查询公共规格，所有租户可见的规格。 - false表示查询私有规格，当前仅租户可见的规格。  **默认取值**：不涉及
    * publicBorderGroup  **参数解释**：公网边界组。 支持多值查询，查询条件格式：*public_border_group=xxx&public_border_group=xxx*。  **约束限制**：不涉及  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  **默认取值**：不涉及
    * category  **参数解释**：可用区子类型编码。该字段主要用于区分在边缘场景下，边缘AZ的类型。 支持多值查询，查询条件格式：*category=xxx&category=xxx*。  **约束限制**：不涉及  **取值范围**：0表示center，21表示homezone，41表示IES。  **默认取值**：不涉及
    * listAll  **参数解释**：是否查询当前租户所有的弹性上限规格。  **约束限制**：不涉及  **取值范围**： - true：查询当前租户所有的弹性上限规格（l4_elastic_max、l7_elastic_max）。 - false：查询租户弹性上限规格中最大的规格（l4类型优先比较cps指标，然后是带宽；l7类型优先比较https cps指标然后是qps指标）。  **默认取值**：不涉及
    * flavorSoldOut  **参数解释**：[是否售罄。](tag:hws)[是否无法购买该规格的LB。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,ct)  **约束限制**：不涉及  **取值范围**： - true：[已售罄，将](tag:hws)无法购买该规格的LB。 - false：[未售罄，](tag:hws)可购买该规格的LB。  **默认取值**：不涉及
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
            'shared' => 'setShared',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'category' => 'setCategory',
            'listAll' => 'setListAll',
            'flavorSoldOut' => 'setFlavorSoldOut'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：规格ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：规格名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：规格类别。  **取值范围**： - L4和L7 表示四层网络型和七层应用型flavor。 - gwlb 表示网关型LB的flavor。 - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max和gwlb_elastic_max 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * shared  **参数解释**：是否查询公共规格。  **约束限制**：不涉及  **取值范围**： - true表示查询公共规格，所有租户可见的规格。 - false表示查询私有规格，当前仅租户可见的规格。  **默认取值**：不涉及
    * publicBorderGroup  **参数解释**：公网边界组。 支持多值查询，查询条件格式：*public_border_group=xxx&public_border_group=xxx*。  **约束限制**：不涉及  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  **默认取值**：不涉及
    * category  **参数解释**：可用区子类型编码。该字段主要用于区分在边缘场景下，边缘AZ的类型。 支持多值查询，查询条件格式：*category=xxx&category=xxx*。  **约束限制**：不涉及  **取值范围**：0表示center，21表示homezone，41表示IES。  **默认取值**：不涉及
    * listAll  **参数解释**：是否查询当前租户所有的弹性上限规格。  **约束限制**：不涉及  **取值范围**： - true：查询当前租户所有的弹性上限规格（l4_elastic_max、l7_elastic_max）。 - false：查询租户弹性上限规格中最大的规格（l4类型优先比较cps指标，然后是带宽；l7类型优先比较https cps指标然后是qps指标）。  **默认取值**：不涉及
    * flavorSoldOut  **参数解释**：[是否售罄。](tag:hws)[是否无法购买该规格的LB。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,ct)  **约束限制**：不涉及  **取值范围**： - true：[已售罄，将](tag:hws)无法购买该规格的LB。 - false：[未售罄，](tag:hws)可购买该规格的LB。  **默认取值**：不涉及
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
            'shared' => 'getShared',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'category' => 'getCategory',
            'listAll' => 'getListAll',
            'flavorSoldOut' => 'getFlavorSoldOut'
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
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['listAll'] = isset($data['listAll']) ? $data['listAll'] : null;
        $this->container['flavorSoldOut'] = isset($data['flavorSoldOut']) ? $data['flavorSoldOut'] : null;
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
    *  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $marker **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
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
    * @param int|null $limit **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
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
    *  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
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
    * @param bool|null $pageReverse **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
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
    *  **参数解释**：规格ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string[]|null $id **参数解释**：规格ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：规格名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string[]|null $name **参数解释**：规格名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：规格类别。  **取值范围**： - L4和L7 表示四层网络型和七层应用型flavor。 - gwlb 表示网关型LB的flavor。 - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max和gwlb_elastic_max 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
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
    * @param string[]|null $type **参数解释**：规格类别。  **取值范围**： - L4和L7 表示四层网络型和七层应用型flavor。 - gwlb 表示网关型LB的flavor。 - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。 - L4_elastic_max、L7_elastic_max和gwlb_elastic_max 表示弹性扩缩容实例的上限规格。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
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
    *  **参数解释**：是否查询公共规格。  **约束限制**：不涉及  **取值范围**： - true表示查询公共规格，所有租户可见的规格。 - false表示查询私有规格，当前仅租户可见的规格。  **默认取值**：不涉及
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
    * @param bool|null $shared **参数解释**：是否查询公共规格。  **约束限制**：不涉及  **取值范围**： - true表示查询公共规格，所有租户可见的规格。 - false表示查询私有规格，当前仅租户可见的规格。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  **参数解释**：公网边界组。 支持多值查询，查询条件格式：*public_border_group=xxx&public_border_group=xxx*。  **约束限制**：不涉及  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string[]|null $publicBorderGroup **参数解释**：公网边界组。 支持多值查询，查询条件格式：*public_border_group=xxx&public_border_group=xxx*。  **约束限制**：不涉及  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**：可用区子类型编码。该字段主要用于区分在边缘场景下，边缘AZ的类型。 支持多值查询，查询条件格式：*category=xxx&category=xxx*。  **约束限制**：不涉及  **取值范围**：0表示center，21表示homezone，41表示IES。  **默认取值**：不涉及
    *
    * @return int[]|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param int[]|null $category **参数解释**：可用区子类型编码。该字段主要用于区分在边缘场景下，边缘AZ的类型。 支持多值查询，查询条件格式：*category=xxx&category=xxx*。  **约束限制**：不涉及  **取值范围**：0表示center，21表示homezone，41表示IES。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets listAll
    *  **参数解释**：是否查询当前租户所有的弹性上限规格。  **约束限制**：不涉及  **取值范围**： - true：查询当前租户所有的弹性上限规格（l4_elastic_max、l7_elastic_max）。 - false：查询租户弹性上限规格中最大的规格（l4类型优先比较cps指标，然后是带宽；l7类型优先比较https cps指标然后是qps指标）。  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getListAll()
    {
        return $this->container['listAll'];
    }

    /**
    * Sets listAll
    *
    * @param bool|null $listAll **参数解释**：是否查询当前租户所有的弹性上限规格。  **约束限制**：不涉及  **取值范围**： - true：查询当前租户所有的弹性上限规格（l4_elastic_max、l7_elastic_max）。 - false：查询租户弹性上限规格中最大的规格（l4类型优先比较cps指标，然后是带宽；l7类型优先比较https cps指标然后是qps指标）。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setListAll($listAll)
    {
        $this->container['listAll'] = $listAll;
        return $this;
    }

    /**
    * Gets flavorSoldOut
    *  **参数解释**：[是否售罄。](tag:hws)[是否无法购买该规格的LB。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,ct)  **约束限制**：不涉及  **取值范围**： - true：[已售罄，将](tag:hws)无法购买该规格的LB。 - false：[未售罄，](tag:hws)可购买该规格的LB。  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getFlavorSoldOut()
    {
        return $this->container['flavorSoldOut'];
    }

    /**
    * Sets flavorSoldOut
    *
    * @param bool|null $flavorSoldOut **参数解释**：[是否售罄。](tag:hws)[是否无法购买该规格的LB。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,ct)  **约束限制**：不涉及  **取值范围**： - true：[已售罄，将](tag:hws)无法购买该规格的LB。 - false：[未售罄，](tag:hws)可购买该规格的LB。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setFlavorSoldOut($flavorSoldOut)
    {
        $this->container['flavorSoldOut'] = $flavorSoldOut;
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

