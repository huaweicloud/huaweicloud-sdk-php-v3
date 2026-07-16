<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerFlavorinstanceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerFlavorinstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  **参数解释**：CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM  **默认取值**：不涉及。
    * availabilityZone  **参数解释**：分区名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    * count  **参数解释**：数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格名称。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavorType  **参数解释**：规格类型。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * roceNum  **参数解释**：roce数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * skuCode  **参数解释**：计费码。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * specification  **参数解释**：规格详情。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：状态。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **约束限制**：不涉及。 **取值范围**： - true：已售罄 - false：未售罄  **默认取值**：false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'availabilityZone' => 'string',
            'chargingMode' => 'string',
            'count' => 'int',
            'flavor' => 'string',
            'flavorType' => 'string',
            'roceNum' => 'int',
            'serverType' => 'string',
            'skuCode' => 'string',
            'specification' => 'string',
            'status' => 'string',
            'isSoldOut' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  **参数解释**：CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM  **默认取值**：不涉及。
    * availabilityZone  **参数解释**：分区名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    * count  **参数解释**：数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格名称。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavorType  **参数解释**：规格类型。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * roceNum  **参数解释**：roce数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * skuCode  **参数解释**：计费码。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * specification  **参数解释**：规格详情。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：状态。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **约束限制**：不涉及。 **取值范围**： - true：已售罄 - false：未售罄  **默认取值**：false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => 'int64',
        'availabilityZone' => null,
        'chargingMode' => null,
        'count' => 'int32',
        'flavor' => null,
        'flavorType' => null,
        'roceNum' => 'int32',
        'serverType' => null,
        'skuCode' => null,
        'specification' => null,
        'status' => null,
        'isSoldOut' => null
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
    * arch  **参数解释**：CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM  **默认取值**：不涉及。
    * availabilityZone  **参数解释**：分区名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    * count  **参数解释**：数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格名称。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavorType  **参数解释**：规格类型。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * roceNum  **参数解释**：roce数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * skuCode  **参数解释**：计费码。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * specification  **参数解释**：规格详情。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：状态。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **约束限制**：不涉及。 **取值范围**： - true：已售罄 - false：未售罄  **默认取值**：false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'availabilityZone' => 'availability_zone',
            'chargingMode' => 'charging_mode',
            'count' => 'count',
            'flavor' => 'flavor',
            'flavorType' => 'flavor_type',
            'roceNum' => 'roce_num',
            'serverType' => 'server_type',
            'skuCode' => 'sku_code',
            'specification' => 'specification',
            'status' => 'status',
            'isSoldOut' => 'is_sold_out'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  **参数解释**：CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM  **默认取值**：不涉及。
    * availabilityZone  **参数解释**：分区名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    * count  **参数解释**：数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格名称。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavorType  **参数解释**：规格类型。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * roceNum  **参数解释**：roce数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * skuCode  **参数解释**：计费码。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * specification  **参数解释**：规格详情。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：状态。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **约束限制**：不涉及。 **取值范围**： - true：已售罄 - false：未售罄  **默认取值**：false。
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'availabilityZone' => 'setAvailabilityZone',
            'chargingMode' => 'setChargingMode',
            'count' => 'setCount',
            'flavor' => 'setFlavor',
            'flavorType' => 'setFlavorType',
            'roceNum' => 'setRoceNum',
            'serverType' => 'setServerType',
            'skuCode' => 'setSkuCode',
            'specification' => 'setSpecification',
            'status' => 'setStatus',
            'isSoldOut' => 'setIsSoldOut'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  **参数解释**：CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM  **默认取值**：不涉及。
    * availabilityZone  **参数解释**：分区名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    * count  **参数解释**：数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格名称。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * flavorType  **参数解释**：规格类型。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * roceNum  **参数解释**：roce数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * skuCode  **参数解释**：计费码。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * specification  **参数解释**：规格详情。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：状态。 **约束限制**：不涉及。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **约束限制**：不涉及。 **取值范围**： - true：已售罄 - false：未售罄  **默认取值**：false。
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'availabilityZone' => 'getAvailabilityZone',
            'chargingMode' => 'getChargingMode',
            'count' => 'getCount',
            'flavor' => 'getFlavor',
            'flavorType' => 'getFlavorType',
            'roceNum' => 'getRoceNum',
            'serverType' => 'getServerType',
            'skuCode' => 'getSkuCode',
            'specification' => 'getSpecification',
            'status' => 'getStatus',
            'isSoldOut' => 'getIsSoldOut'
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
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['roceNum'] = isset($data['roceNum']) ? $data['roceNum'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['skuCode'] = isset($data['skuCode']) ? $data['skuCode'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isSoldOut'] = isset($data['isSoldOut']) ? $data['isSoldOut'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) > 64)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) < 1)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['flavorType']) && (mb_strlen($this->container['flavorType']) > 64)) {
                $invalidProperties[] = "invalid value for 'flavorType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['flavorType']) && (mb_strlen($this->container['flavorType']) < 1)) {
                $invalidProperties[] = "invalid value for 'flavorType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roceNum']) && ($this->container['roceNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'roceNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['roceNum']) && ($this->container['roceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'roceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['skuCode']) && (mb_strlen($this->container['skuCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'skuCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['skuCode']) && (mb_strlen($this->container['skuCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'skuCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) > 64)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) < 1)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets arch
    *  **参数解释**：CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释**：CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**：分区名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释**：分区名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**：数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：规格名称。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释**：规格名称。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets flavorType
    *  **参数解释**：规格类型。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType **参数解释**：规格类型。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets roceNum
    *  **参数解释**：roce数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getRoceNum()
    {
        return $this->container['roceNum'];
    }

    /**
    * Sets roceNum
    *
    * @param int|null $roceNum **参数解释**：roce数量。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setRoceNum($roceNum)
    {
        $this->container['roceNum'] = $roceNum;
        return $this;
    }

    /**
    * Gets serverType
    *  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets skuCode
    *  **参数解释**：计费码。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSkuCode()
    {
        return $this->container['skuCode'];
    }

    /**
    * Sets skuCode
    *
    * @param string|null $skuCode **参数解释**：计费码。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSkuCode($skuCode)
    {
        $this->container['skuCode'] = $skuCode;
        return $this;
    }

    /**
    * Gets specification
    *  **参数解释**：规格详情。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification **参数解释**：规格详情。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：状态。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：状态。 **约束限制**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isSoldOut
    *  **参数解释**：是否售罄。 **约束限制**：不涉及。 **取值范围**： - true：已售罄 - false：未售罄  **默认取值**：false。
    *
    * @return bool|null
    */
    public function getIsSoldOut()
    {
        return $this->container['isSoldOut'];
    }

    /**
    * Sets isSoldOut
    *
    * @param bool|null $isSoldOut **参数解释**：是否售罄。 **约束限制**：不涉及。 **取值范围**： - true：已售罄 - false：未售罄  **默认取值**：false。
    *
    * @return $this
    */
    public function setIsSoldOut($isSoldOut)
    {
        $this->container['isSoldOut'] = $isSoldOut;
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

