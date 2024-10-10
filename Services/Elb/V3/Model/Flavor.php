<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Flavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Flavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释：规格ID。
    * info  info
    * name  参数解释：规格名称。  取值范围：  网络型有如下规格：   - L4_flavor.elb.s1.small: 小型 I   - L4_flavor.elb.s2.small: 小型 II   - L4_flavor.elb.s1.medium: 中型 I   - L4_flavor.elb.s2.medium: 中型 II   - L4_flavor.elb.s1.large: 大型 I   - L4_flavor.elb.s2.large: 大型 II   - L4_flavor.elb.pro.max: 四层弹性规格  应用型有如下规格：   - L7_flavor.elb.s1.small: 小型 I   - L7_flavor.elb.s2.small: 小型 II   - L7_flavor.elb.s1.medium: 中型 I   - L7_flavor.elb.s2.medium: 中型 II   - L7_flavor.elb.s1.large: 大型 I   - L7_flavor.elb.s2.large: 大型 II   - L7_flavor.elb.s1.extra-large: 超大型 I   - L7_flavor.elb.s2.extra-large: 超大型 II   - L7_flavor.elb.pro.max: 七层弹性规格
    * shared  参数解释：是否公共规格。  取值范围： - true表示公共规格，所有租户可见。 - false表示私有规格，为当前租户所有。
    * projectId  参数解释：项目ID。
    * type  参数解释：规格类别。  取值范围：   - L4和L7 表示四层网络型和七层应用型flavor。   [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu)   - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。已废弃，请勿使用。   - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。
    * flavorSoldOut  参数解释：[是否售罄。](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [是否无法购买该规格的LB](tag:ctc,cmcc,ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)  取值范围： - true：[已售罄，将](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)无法购买该规格的LB。 - false：[未售罄，](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)可购买该规格的LB。
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：可用区组编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'info' => '\HuaweiCloud\SDK\Elb\V3\Model\FlavorInfo',
            'name' => 'string',
            'shared' => 'bool',
            'projectId' => 'string',
            'type' => 'string',
            'flavorSoldOut' => 'bool',
            'publicBorderGroup' => 'string',
            'category' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释：规格ID。
    * info  info
    * name  参数解释：规格名称。  取值范围：  网络型有如下规格：   - L4_flavor.elb.s1.small: 小型 I   - L4_flavor.elb.s2.small: 小型 II   - L4_flavor.elb.s1.medium: 中型 I   - L4_flavor.elb.s2.medium: 中型 II   - L4_flavor.elb.s1.large: 大型 I   - L4_flavor.elb.s2.large: 大型 II   - L4_flavor.elb.pro.max: 四层弹性规格  应用型有如下规格：   - L7_flavor.elb.s1.small: 小型 I   - L7_flavor.elb.s2.small: 小型 II   - L7_flavor.elb.s1.medium: 中型 I   - L7_flavor.elb.s2.medium: 中型 II   - L7_flavor.elb.s1.large: 大型 I   - L7_flavor.elb.s2.large: 大型 II   - L7_flavor.elb.s1.extra-large: 超大型 I   - L7_flavor.elb.s2.extra-large: 超大型 II   - L7_flavor.elb.pro.max: 七层弹性规格
    * shared  参数解释：是否公共规格。  取值范围： - true表示公共规格，所有租户可见。 - false表示私有规格，为当前租户所有。
    * projectId  参数解释：项目ID。
    * type  参数解释：规格类别。  取值范围：   - L4和L7 表示四层网络型和七层应用型flavor。   [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu)   - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。已废弃，请勿使用。   - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。
    * flavorSoldOut  参数解释：[是否售罄。](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [是否无法购买该规格的LB](tag:ctc,cmcc,ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)  取值范围： - true：[已售罄，将](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)无法购买该规格的LB。 - false：[未售罄，](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)可购买该规格的LB。
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：可用区组编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'info' => null,
        'name' => null,
        'shared' => null,
        'projectId' => null,
        'type' => null,
        'flavorSoldOut' => null,
        'publicBorderGroup' => null,
        'category' => 'int32'
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
    * id  参数解释：规格ID。
    * info  info
    * name  参数解释：规格名称。  取值范围：  网络型有如下规格：   - L4_flavor.elb.s1.small: 小型 I   - L4_flavor.elb.s2.small: 小型 II   - L4_flavor.elb.s1.medium: 中型 I   - L4_flavor.elb.s2.medium: 中型 II   - L4_flavor.elb.s1.large: 大型 I   - L4_flavor.elb.s2.large: 大型 II   - L4_flavor.elb.pro.max: 四层弹性规格  应用型有如下规格：   - L7_flavor.elb.s1.small: 小型 I   - L7_flavor.elb.s2.small: 小型 II   - L7_flavor.elb.s1.medium: 中型 I   - L7_flavor.elb.s2.medium: 中型 II   - L7_flavor.elb.s1.large: 大型 I   - L7_flavor.elb.s2.large: 大型 II   - L7_flavor.elb.s1.extra-large: 超大型 I   - L7_flavor.elb.s2.extra-large: 超大型 II   - L7_flavor.elb.pro.max: 七层弹性规格
    * shared  参数解释：是否公共规格。  取值范围： - true表示公共规格，所有租户可见。 - false表示私有规格，为当前租户所有。
    * projectId  参数解释：项目ID。
    * type  参数解释：规格类别。  取值范围：   - L4和L7 表示四层网络型和七层应用型flavor。   [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu)   - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。已废弃，请勿使用。   - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。
    * flavorSoldOut  参数解释：[是否售罄。](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [是否无法购买该规格的LB](tag:ctc,cmcc,ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)  取值范围： - true：[已售罄，将](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)无法购买该规格的LB。 - false：[未售罄，](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)可购买该规格的LB。
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：可用区组编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'info' => 'info',
            'name' => 'name',
            'shared' => 'shared',
            'projectId' => 'project_id',
            'type' => 'type',
            'flavorSoldOut' => 'flavor_sold_out',
            'publicBorderGroup' => 'public_border_group',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释：规格ID。
    * info  info
    * name  参数解释：规格名称。  取值范围：  网络型有如下规格：   - L4_flavor.elb.s1.small: 小型 I   - L4_flavor.elb.s2.small: 小型 II   - L4_flavor.elb.s1.medium: 中型 I   - L4_flavor.elb.s2.medium: 中型 II   - L4_flavor.elb.s1.large: 大型 I   - L4_flavor.elb.s2.large: 大型 II   - L4_flavor.elb.pro.max: 四层弹性规格  应用型有如下规格：   - L7_flavor.elb.s1.small: 小型 I   - L7_flavor.elb.s2.small: 小型 II   - L7_flavor.elb.s1.medium: 中型 I   - L7_flavor.elb.s2.medium: 中型 II   - L7_flavor.elb.s1.large: 大型 I   - L7_flavor.elb.s2.large: 大型 II   - L7_flavor.elb.s1.extra-large: 超大型 I   - L7_flavor.elb.s2.extra-large: 超大型 II   - L7_flavor.elb.pro.max: 七层弹性规格
    * shared  参数解释：是否公共规格。  取值范围： - true表示公共规格，所有租户可见。 - false表示私有规格，为当前租户所有。
    * projectId  参数解释：项目ID。
    * type  参数解释：规格类别。  取值范围：   - L4和L7 表示四层网络型和七层应用型flavor。   [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu)   - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。已废弃，请勿使用。   - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。
    * flavorSoldOut  参数解释：[是否售罄。](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [是否无法购买该规格的LB](tag:ctc,cmcc,ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)  取值范围： - true：[已售罄，将](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)无法购买该规格的LB。 - false：[未售罄，](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)可购买该规格的LB。
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：可用区组编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'info' => 'setInfo',
            'name' => 'setName',
            'shared' => 'setShared',
            'projectId' => 'setProjectId',
            'type' => 'setType',
            'flavorSoldOut' => 'setFlavorSoldOut',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释：规格ID。
    * info  info
    * name  参数解释：规格名称。  取值范围：  网络型有如下规格：   - L4_flavor.elb.s1.small: 小型 I   - L4_flavor.elb.s2.small: 小型 II   - L4_flavor.elb.s1.medium: 中型 I   - L4_flavor.elb.s2.medium: 中型 II   - L4_flavor.elb.s1.large: 大型 I   - L4_flavor.elb.s2.large: 大型 II   - L4_flavor.elb.pro.max: 四层弹性规格  应用型有如下规格：   - L7_flavor.elb.s1.small: 小型 I   - L7_flavor.elb.s2.small: 小型 II   - L7_flavor.elb.s1.medium: 中型 I   - L7_flavor.elb.s2.medium: 中型 II   - L7_flavor.elb.s1.large: 大型 I   - L7_flavor.elb.s2.large: 大型 II   - L7_flavor.elb.s1.extra-large: 超大型 I   - L7_flavor.elb.s2.extra-large: 超大型 II   - L7_flavor.elb.pro.max: 七层弹性规格
    * shared  参数解释：是否公共规格。  取值范围： - true表示公共规格，所有租户可见。 - false表示私有规格，为当前租户所有。
    * projectId  参数解释：项目ID。
    * type  参数解释：规格类别。  取值范围：   - L4和L7 表示四层网络型和七层应用型flavor。   [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu)   - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。已废弃，请勿使用。   - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。
    * flavorSoldOut  参数解释：[是否售罄。](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [是否无法购买该规格的LB](tag:ctc,cmcc,ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)  取值范围： - true：[已售罄，将](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)无法购买该规格的LB。 - false：[未售罄，](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)可购买该规格的LB。
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：可用区组编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'info' => 'getInfo',
            'name' => 'getName',
            'shared' => 'getShared',
            'projectId' => 'getProjectId',
            'type' => 'getType',
            'flavorSoldOut' => 'getFlavorSoldOut',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'category' => 'getCategory'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['flavorSoldOut'] = isset($data['flavorSoldOut']) ? $data['flavorSoldOut'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['info'] === null) {
            $invalidProperties[] = "'info' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['shared'] === null) {
            $invalidProperties[] = "'shared' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['flavorSoldOut'] === null) {
            $invalidProperties[] = "'flavorSoldOut' can't be null";
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
    * Gets id
    *  参数解释：规格ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 参数解释：规格ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets info
    *  info
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\FlavorInfo
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\FlavorInfo $info info
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets name
    *  参数解释：规格名称。  取值范围：  网络型有如下规格：   - L4_flavor.elb.s1.small: 小型 I   - L4_flavor.elb.s2.small: 小型 II   - L4_flavor.elb.s1.medium: 中型 I   - L4_flavor.elb.s2.medium: 中型 II   - L4_flavor.elb.s1.large: 大型 I   - L4_flavor.elb.s2.large: 大型 II   - L4_flavor.elb.pro.max: 四层弹性规格  应用型有如下规格：   - L7_flavor.elb.s1.small: 小型 I   - L7_flavor.elb.s2.small: 小型 II   - L7_flavor.elb.s1.medium: 中型 I   - L7_flavor.elb.s2.medium: 中型 II   - L7_flavor.elb.s1.large: 大型 I   - L7_flavor.elb.s2.large: 大型 II   - L7_flavor.elb.s1.extra-large: 超大型 I   - L7_flavor.elb.s2.extra-large: 超大型 II   - L7_flavor.elb.pro.max: 七层弹性规格
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 参数解释：规格名称。  取值范围：  网络型有如下规格：   - L4_flavor.elb.s1.small: 小型 I   - L4_flavor.elb.s2.small: 小型 II   - L4_flavor.elb.s1.medium: 中型 I   - L4_flavor.elb.s2.medium: 中型 II   - L4_flavor.elb.s1.large: 大型 I   - L4_flavor.elb.s2.large: 大型 II   - L4_flavor.elb.pro.max: 四层弹性规格  应用型有如下规格：   - L7_flavor.elb.s1.small: 小型 I   - L7_flavor.elb.s2.small: 小型 II   - L7_flavor.elb.s1.medium: 中型 I   - L7_flavor.elb.s2.medium: 中型 II   - L7_flavor.elb.s1.large: 大型 I   - L7_flavor.elb.s2.large: 大型 II   - L7_flavor.elb.s1.extra-large: 超大型 I   - L7_flavor.elb.s2.extra-large: 超大型 II   - L7_flavor.elb.pro.max: 七层弹性规格
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets shared
    *  参数解释：是否公共规格。  取值范围： - true表示公共规格，所有租户可见。 - false表示私有规格，为当前租户所有。
    *
    * @return bool
    */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
    * Sets shared
    *
    * @param bool $shared 参数解释：是否公共规格。  取值范围： - true表示公共规格，所有租户可见。 - false表示私有规格，为当前租户所有。
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
    * Gets projectId
    *  参数解释：项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 参数解释：项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  参数解释：规格类别。  取值范围：   - L4和L7 表示四层网络型和七层应用型flavor。   [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu)   - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。已废弃，请勿使用。   - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 参数解释：规格类别。  取值范围：   - L4和L7 表示四层网络型和七层应用型flavor。   [- gateway 表示网关型LB的flavor，目前只支持弹性计费类型。当前仅支持欧洲局点。](tag:hws_eu)   - L4_elastic和L7_elastic 表示弹性扩缩容实例的下限规格。已废弃，请勿使用。   - L4_elastic_max、L7_elastic_max[和gateway_elastic_max](tag:hws_eu) 表示弹性扩缩容实例的上限规格。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets flavorSoldOut
    *  参数解释：[是否售罄。](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [是否无法购买该规格的LB](tag:ctc,cmcc,ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)  取值范围： - true：[已售罄，将](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)无法购买该规格的LB。 - false：[未售罄，](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)可购买该规格的LB。
    *
    * @return bool
    */
    public function getFlavorSoldOut()
    {
        return $this->container['flavorSoldOut'];
    }

    /**
    * Sets flavorSoldOut
    *
    * @param bool $flavorSoldOut 参数解释：[是否售罄。](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [是否无法购买该规格的LB](tag:ctc,cmcc,ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)  取值范围： - true：[已售罄，将](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)无法购买该规格的LB。 - false：[未售罄，](tag:hws,hk,hws_eu,otc,tlf,sbc,g42,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt)可购买该规格的LB。
    *
    * @return $this
    */
    public function setFlavorSoldOut($flavorSoldOut)
    {
        $this->container['flavorSoldOut'] = $flavorSoldOut;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  参数解释：可用区组，如：center
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 参数解释：可用区组，如：center
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
    *  参数解释：可用区组编码。  取值范围：0表示center，21表示homezone。
    *
    * @return int|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param int|null $category 参数解释：可用区组编码。  取值范围：0表示center，21表示homezone。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

