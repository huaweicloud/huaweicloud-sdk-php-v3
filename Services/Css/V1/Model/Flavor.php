<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

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
    * cpu  **参数解释**： 实例的CPU核数。 **取值范围**： 不涉及
    * ram  **参数解释**： 实例的内存大小。单位GB。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * region  **参数解释**： 节点规格支持的Region。 **取值范围**： 不涉及
    * typename  **参数解释**： 节点类型名称。 **取值范围**： 不涉及
    * diskrange  **参数解释**： 实例的硬盘容量范围，单位GB。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * localdisk  **参数解释**： 是否本地盘。 **取值范围**： - true：本地盘。 - false：非本地盘。
    * flavorTypeCn  **参数解释**： 中文规格分类。 **取值范围**： 不涉及
    * flavorTypeEn  **参数解释**： 英文规格分类。 **取值范围**： 不涉及
    * edge  **参数解释**： 是否边缘区规格。 **取值范围**： - true：边缘区专属规格。 - false：通用规格。
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * isAllowHttps  **参数解释**： 节点类型是否支持HTTPS协议访问。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'int',
            'ram' => 'int',
            'name' => 'string',
            'region' => 'string',
            'typename' => 'string',
            'diskrange' => 'string',
            'condOperationStatus' => 'string',
            'condOperationAz' => 'string',
            'localdisk' => 'string',
            'flavorTypeCn' => 'string',
            'flavorTypeEn' => 'string',
            'edge' => 'bool',
            'strId' => 'string',
            'isAllowHttps' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  **参数解释**： 实例的CPU核数。 **取值范围**： 不涉及
    * ram  **参数解释**： 实例的内存大小。单位GB。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * region  **参数解释**： 节点规格支持的Region。 **取值范围**： 不涉及
    * typename  **参数解释**： 节点类型名称。 **取值范围**： 不涉及
    * diskrange  **参数解释**： 实例的硬盘容量范围，单位GB。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * localdisk  **参数解释**： 是否本地盘。 **取值范围**： - true：本地盘。 - false：非本地盘。
    * flavorTypeCn  **参数解释**： 中文规格分类。 **取值范围**： 不涉及
    * flavorTypeEn  **参数解释**： 英文规格分类。 **取值范围**： 不涉及
    * edge  **参数解释**： 是否边缘区规格。 **取值范围**： - true：边缘区专属规格。 - false：通用规格。
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * isAllowHttps  **参数解释**： 节点类型是否支持HTTPS协议访问。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => 'int32',
        'ram' => 'int32',
        'name' => null,
        'region' => null,
        'typename' => null,
        'diskrange' => null,
        'condOperationStatus' => null,
        'condOperationAz' => null,
        'localdisk' => null,
        'flavorTypeCn' => null,
        'flavorTypeEn' => null,
        'edge' => null,
        'strId' => null,
        'isAllowHttps' => null
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
    * cpu  **参数解释**： 实例的CPU核数。 **取值范围**： 不涉及
    * ram  **参数解释**： 实例的内存大小。单位GB。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * region  **参数解释**： 节点规格支持的Region。 **取值范围**： 不涉及
    * typename  **参数解释**： 节点类型名称。 **取值范围**： 不涉及
    * diskrange  **参数解释**： 实例的硬盘容量范围，单位GB。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * localdisk  **参数解释**： 是否本地盘。 **取值范围**： - true：本地盘。 - false：非本地盘。
    * flavorTypeCn  **参数解释**： 中文规格分类。 **取值范围**： 不涉及
    * flavorTypeEn  **参数解释**： 英文规格分类。 **取值范围**： 不涉及
    * edge  **参数解释**： 是否边缘区规格。 **取值范围**： - true：边缘区专属规格。 - false：通用规格。
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * isAllowHttps  **参数解释**： 节点类型是否支持HTTPS协议访问。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'ram' => 'ram',
            'name' => 'name',
            'region' => 'region',
            'typename' => 'typename',
            'diskrange' => 'diskrange',
            'condOperationStatus' => 'condOperationStatus',
            'condOperationAz' => 'condOperationAz',
            'localdisk' => 'localdisk',
            'flavorTypeCn' => 'flavorTypeCn',
            'flavorTypeEn' => 'flavorTypeEn',
            'edge' => 'edge',
            'strId' => 'str_id',
            'isAllowHttps' => 'isAllowHttps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  **参数解释**： 实例的CPU核数。 **取值范围**： 不涉及
    * ram  **参数解释**： 实例的内存大小。单位GB。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * region  **参数解释**： 节点规格支持的Region。 **取值范围**： 不涉及
    * typename  **参数解释**： 节点类型名称。 **取值范围**： 不涉及
    * diskrange  **参数解释**： 实例的硬盘容量范围，单位GB。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * localdisk  **参数解释**： 是否本地盘。 **取值范围**： - true：本地盘。 - false：非本地盘。
    * flavorTypeCn  **参数解释**： 中文规格分类。 **取值范围**： 不涉及
    * flavorTypeEn  **参数解释**： 英文规格分类。 **取值范围**： 不涉及
    * edge  **参数解释**： 是否边缘区规格。 **取值范围**： - true：边缘区专属规格。 - false：通用规格。
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * isAllowHttps  **参数解释**： 节点类型是否支持HTTPS协议访问。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'ram' => 'setRam',
            'name' => 'setName',
            'region' => 'setRegion',
            'typename' => 'setTypename',
            'diskrange' => 'setDiskrange',
            'condOperationStatus' => 'setCondOperationStatus',
            'condOperationAz' => 'setCondOperationAz',
            'localdisk' => 'setLocaldisk',
            'flavorTypeCn' => 'setFlavorTypeCn',
            'flavorTypeEn' => 'setFlavorTypeEn',
            'edge' => 'setEdge',
            'strId' => 'setStrId',
            'isAllowHttps' => 'setIsAllowHttps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  **参数解释**： 实例的CPU核数。 **取值范围**： 不涉及
    * ram  **参数解释**： 实例的内存大小。单位GB。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * region  **参数解释**： 节点规格支持的Region。 **取值范围**： 不涉及
    * typename  **参数解释**： 节点类型名称。 **取值范围**： 不涉及
    * diskrange  **参数解释**： 实例的硬盘容量范围，单位GB。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * localdisk  **参数解释**： 是否本地盘。 **取值范围**： - true：本地盘。 - false：非本地盘。
    * flavorTypeCn  **参数解释**： 中文规格分类。 **取值范围**： 不涉及
    * flavorTypeEn  **参数解释**： 英文规格分类。 **取值范围**： 不涉及
    * edge  **参数解释**： 是否边缘区规格。 **取值范围**： - true：边缘区专属规格。 - false：通用规格。
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * isAllowHttps  **参数解释**： 节点类型是否支持HTTPS协议访问。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'ram' => 'getRam',
            'name' => 'getName',
            'region' => 'getRegion',
            'typename' => 'getTypename',
            'diskrange' => 'getDiskrange',
            'condOperationStatus' => 'getCondOperationStatus',
            'condOperationAz' => 'getCondOperationAz',
            'localdisk' => 'getLocaldisk',
            'flavorTypeCn' => 'getFlavorTypeCn',
            'flavorTypeEn' => 'getFlavorTypeEn',
            'edge' => 'getEdge',
            'strId' => 'getStrId',
            'isAllowHttps' => 'getIsAllowHttps'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['typename'] = isset($data['typename']) ? $data['typename'] : null;
        $this->container['diskrange'] = isset($data['diskrange']) ? $data['diskrange'] : null;
        $this->container['condOperationStatus'] = isset($data['condOperationStatus']) ? $data['condOperationStatus'] : null;
        $this->container['condOperationAz'] = isset($data['condOperationAz']) ? $data['condOperationAz'] : null;
        $this->container['localdisk'] = isset($data['localdisk']) ? $data['localdisk'] : null;
        $this->container['flavorTypeCn'] = isset($data['flavorTypeCn']) ? $data['flavorTypeCn'] : null;
        $this->container['flavorTypeEn'] = isset($data['flavorTypeEn']) ? $data['flavorTypeEn'] : null;
        $this->container['edge'] = isset($data['edge']) ? $data['edge'] : null;
        $this->container['strId'] = isset($data['strId']) ? $data['strId'] : null;
        $this->container['isAllowHttps'] = isset($data['isAllowHttps']) ? $data['isAllowHttps'] : null;
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
    * Gets cpu
    *  **参数解释**： 实例的CPU核数。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu **参数解释**： 实例的CPU核数。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets ram
    *  **参数解释**： 实例的内存大小。单位GB。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int|null $ram **参数解释**： 实例的内存大小。单位GB。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 规格名称。 **取值范围**： 不涉及
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
    * @param string|null $name **参数解释**： 规格名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 节点规格支持的Region。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**： 节点规格支持的Region。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets typename
    *  **参数解释**： 节点类型名称。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getTypename()
    {
        return $this->container['typename'];
    }

    /**
    * Sets typename
    *
    * @param string|null $typename **参数解释**： 节点类型名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTypename($typename)
    {
        $this->container['typename'] = $typename;
        return $this;
    }

    /**
    * Gets diskrange
    *  **参数解释**： 实例的硬盘容量范围，单位GB。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDiskrange()
    {
        return $this->container['diskrange'];
    }

    /**
    * Sets diskrange
    *
    * @param string|null $diskrange **参数解释**： 实例的硬盘容量范围，单位GB。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDiskrange($diskrange)
    {
        $this->container['diskrange'] = $diskrange;
        return $this;
    }

    /**
    * Gets condOperationStatus
    *  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    *
    * @return string|null
    */
    public function getCondOperationStatus()
    {
        return $this->container['condOperationStatus'];
    }

    /**
    * Sets condOperationStatus
    *
    * @param string|null $condOperationStatus **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    *
    * @return $this
    */
    public function setCondOperationStatus($condOperationStatus)
    {
        $this->container['condOperationStatus'] = $condOperationStatus;
        return $this;
    }

    /**
    * Gets condOperationAz
    *  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCondOperationAz()
    {
        return $this->container['condOperationAz'];
    }

    /**
    * Sets condOperationAz
    *
    * @param string|null $condOperationAz **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCondOperationAz($condOperationAz)
    {
        $this->container['condOperationAz'] = $condOperationAz;
        return $this;
    }

    /**
    * Gets localdisk
    *  **参数解释**： 是否本地盘。 **取值范围**： - true：本地盘。 - false：非本地盘。
    *
    * @return string|null
    */
    public function getLocaldisk()
    {
        return $this->container['localdisk'];
    }

    /**
    * Sets localdisk
    *
    * @param string|null $localdisk **参数解释**： 是否本地盘。 **取值范围**： - true：本地盘。 - false：非本地盘。
    *
    * @return $this
    */
    public function setLocaldisk($localdisk)
    {
        $this->container['localdisk'] = $localdisk;
        return $this;
    }

    /**
    * Gets flavorTypeCn
    *  **参数解释**： 中文规格分类。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getFlavorTypeCn()
    {
        return $this->container['flavorTypeCn'];
    }

    /**
    * Sets flavorTypeCn
    *
    * @param string|null $flavorTypeCn **参数解释**： 中文规格分类。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFlavorTypeCn($flavorTypeCn)
    {
        $this->container['flavorTypeCn'] = $flavorTypeCn;
        return $this;
    }

    /**
    * Gets flavorTypeEn
    *  **参数解释**： 英文规格分类。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getFlavorTypeEn()
    {
        return $this->container['flavorTypeEn'];
    }

    /**
    * Sets flavorTypeEn
    *
    * @param string|null $flavorTypeEn **参数解释**： 英文规格分类。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFlavorTypeEn($flavorTypeEn)
    {
        $this->container['flavorTypeEn'] = $flavorTypeEn;
        return $this;
    }

    /**
    * Gets edge
    *  **参数解释**： 是否边缘区规格。 **取值范围**： - true：边缘区专属规格。 - false：通用规格。
    *
    * @return bool|null
    */
    public function getEdge()
    {
        return $this->container['edge'];
    }

    /**
    * Sets edge
    *
    * @param bool|null $edge **参数解释**： 是否边缘区规格。 **取值范围**： - true：边缘区专属规格。 - false：通用规格。
    *
    * @return $this
    */
    public function setEdge($edge)
    {
        $this->container['edge'] = $edge;
        return $this;
    }

    /**
    * Gets strId
    *  **参数解释**： 规格id。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getStrId()
    {
        return $this->container['strId'];
    }

    /**
    * Sets strId
    *
    * @param string|null $strId **参数解释**： 规格id。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStrId($strId)
    {
        $this->container['strId'] = $strId;
        return $this;
    }

    /**
    * Gets isAllowHttps
    *  **参数解释**： 节点类型是否支持HTTPS协议访问。 **取值范围**： 不涉及
    *
    * @return bool|null
    */
    public function getIsAllowHttps()
    {
        return $this->container['isAllowHttps'];
    }

    /**
    * Sets isAllowHttps
    *
    * @param bool|null $isAllowHttps **参数解释**： 节点类型是否支持HTTPS协议访问。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIsAllowHttps($isAllowHttps)
    {
        $this->container['isAllowHttps'] = $isAllowHttps;
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

