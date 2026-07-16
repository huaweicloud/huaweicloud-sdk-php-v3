<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotebookFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotebookFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  **参数解释**：架构类型。 **取值范围**：枚举类型，取值如下： - x86_64 - aarch64
    * ascend  ascend
    * billing  billing
    * category  **参数解释**：规格处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：不是免费规格。
    * gpu  gpu
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：资源是否充足。 **取值范围**：布尔类型： - true 资源不足 - false 资源充足
    * storages  **参数解释**：规格支持的存储类型。枚举类型，取值如下： - EFS - EVS
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'ascend' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AscendInfo',
            'billing' => '\HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo',
            'category' => 'string',
            'description' => 'string',
            'feature' => 'string',
            'free' => 'bool',
            'gpu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\GPUInfo',
            'id' => 'string',
            'memory' => 'int',
            'name' => 'string',
            'soldOut' => 'bool',
            'storages' => 'string[]',
            'vcpus' => 'int',
            'evsMaxSize' => 'string',
            'evsSkuCode' => 'string',
            'growSupportType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  **参数解释**：架构类型。 **取值范围**：枚举类型，取值如下： - x86_64 - aarch64
    * ascend  ascend
    * billing  billing
    * category  **参数解释**：规格处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：不是免费规格。
    * gpu  gpu
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：资源是否充足。 **取值范围**：布尔类型： - true 资源不足 - false 资源充足
    * storages  **参数解释**：规格支持的存储类型。枚举类型，取值如下： - EFS - EVS
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'ascend' => null,
        'billing' => null,
        'category' => null,
        'description' => null,
        'feature' => null,
        'free' => null,
        'gpu' => null,
        'id' => null,
        'memory' => 'int64',
        'name' => null,
        'soldOut' => null,
        'storages' => null,
        'vcpus' => 'int32',
        'evsMaxSize' => null,
        'evsSkuCode' => null,
        'growSupportType' => null
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
    * arch  **参数解释**：架构类型。 **取值范围**：枚举类型，取值如下： - x86_64 - aarch64
    * ascend  ascend
    * billing  billing
    * category  **参数解释**：规格处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：不是免费规格。
    * gpu  gpu
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：资源是否充足。 **取值范围**：布尔类型： - true 资源不足 - false 资源充足
    * storages  **参数解释**：规格支持的存储类型。枚举类型，取值如下： - EFS - EVS
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'ascend' => 'ascend',
            'billing' => 'billing',
            'category' => 'category',
            'description' => 'description',
            'feature' => 'feature',
            'free' => 'free',
            'gpu' => 'gpu',
            'id' => 'id',
            'memory' => 'memory',
            'name' => 'name',
            'soldOut' => 'sold_out',
            'storages' => 'storages',
            'vcpus' => 'vcpus',
            'evsMaxSize' => 'evs_max_size',
            'evsSkuCode' => 'evs_sku_code',
            'growSupportType' => 'grow_support_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  **参数解释**：架构类型。 **取值范围**：枚举类型，取值如下： - x86_64 - aarch64
    * ascend  ascend
    * billing  billing
    * category  **参数解释**：规格处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：不是免费规格。
    * gpu  gpu
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：资源是否充足。 **取值范围**：布尔类型： - true 资源不足 - false 资源充足
    * storages  **参数解释**：规格支持的存储类型。枚举类型，取值如下： - EFS - EVS
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'ascend' => 'setAscend',
            'billing' => 'setBilling',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'feature' => 'setFeature',
            'free' => 'setFree',
            'gpu' => 'setGpu',
            'id' => 'setId',
            'memory' => 'setMemory',
            'name' => 'setName',
            'soldOut' => 'setSoldOut',
            'storages' => 'setStorages',
            'vcpus' => 'setVcpus',
            'evsMaxSize' => 'setEvsMaxSize',
            'evsSkuCode' => 'setEvsSkuCode',
            'growSupportType' => 'setGrowSupportType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  **参数解释**：架构类型。 **取值范围**：枚举类型，取值如下： - x86_64 - aarch64
    * ascend  ascend
    * billing  billing
    * category  **参数解释**：规格处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：不是免费规格。
    * gpu  gpu
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：资源是否充足。 **取值范围**：布尔类型： - true 资源不足 - false 资源充足
    * storages  **参数解释**：规格支持的存储类型。枚举类型，取值如下： - EFS - EVS
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'ascend' => 'getAscend',
            'billing' => 'getBilling',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'feature' => 'getFeature',
            'free' => 'getFree',
            'gpu' => 'getGpu',
            'id' => 'getId',
            'memory' => 'getMemory',
            'name' => 'getName',
            'soldOut' => 'getSoldOut',
            'storages' => 'getStorages',
            'vcpus' => 'getVcpus',
            'evsMaxSize' => 'getEvsMaxSize',
            'evsSkuCode' => 'getEvsSkuCode',
            'growSupportType' => 'getGrowSupportType'
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
    const ARCH_X86_64 = 'x86_64';
    const ARCH_AARCH64 = 'aarch64';
    const CATEGORY_ASCEND = 'ASCEND';
    const CATEGORY_CPU = 'CPU';
    const CATEGORY_GPU = 'GPU';
    const FEATURE__DEFAULT = 'DEFAULT';
    const FEATURE_NOTEBOOK = 'NOTEBOOK';
    const STORAGES_EFS = 'EFS';
    const STORAGES_EFS_DEDICATED = 'EFS_DEDICATED';
    const STORAGES_EVS = 'EVS';
    const STORAGES_OBS = 'OBS';
    const STORAGES_OBSFS = 'OBSFS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchAllowableValues()
    {
        return [
            self::ARCH_X86_64,
            self::ARCH_AARCH64,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_ASCEND,
            self::CATEGORY_CPU,
            self::CATEGORY_GPU,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFeatureAllowableValues()
    {
        return [
            self::FEATURE__DEFAULT,
            self::FEATURE_NOTEBOOK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStoragesAllowableValues()
    {
        return [
            self::STORAGES_EFS,
            self::STORAGES_EFS_DEDICATED,
            self::STORAGES_EVS,
            self::STORAGES_OBS,
            self::STORAGES_OBSFS,
        ];
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
        $this->container['ascend'] = isset($data['ascend']) ? $data['ascend'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['soldOut'] = isset($data['soldOut']) ? $data['soldOut'] : null;
        $this->container['storages'] = isset($data['storages']) ? $data['storages'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['evsMaxSize'] = isset($data['evsMaxSize']) ? $data['evsMaxSize'] : null;
        $this->container['evsSkuCode'] = isset($data['evsSkuCode']) ? $data['evsSkuCode'] : null;
        $this->container['growSupportType'] = isset($data['growSupportType']) ? $data['growSupportType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getArchAllowableValues();
                if (!is_null($this->container['arch']) && !in_array($this->container['arch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'arch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFeatureAllowableValues();
                if (!is_null($this->container['feature']) && !in_array($this->container['feature'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'feature', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释**：架构类型。 **取值范围**：枚举类型，取值如下： - x86_64 - aarch64
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
    * @param string|null $arch **参数解释**：架构类型。 **取值范围**：枚举类型，取值如下： - x86_64 - aarch64
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets ascend
    *  ascend
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AscendInfo|null
    */
    public function getAscend()
    {
        return $this->container['ascend'];
    }

    /**
    * Sets ascend
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AscendInfo|null $ascend ascend
    *
    * @return $this
    */
    public function setAscend($ascend)
    {
        $this->container['ascend'] = $ascend;
        return $this;
    }

    /**
    * Gets billing
    *  billing
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo|null
    */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
    * Sets billing
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo|null $billing billing
    *
    * @return $this
    */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**：规格处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**：规格处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：规格描述信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets feature
    *  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets free
    *  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：不是免费规格。
    *
    * @return bool|null
    */
    public function getFree()
    {
        return $this->container['free'];
    }

    /**
    * Sets free
    *
    * @param bool|null $free **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：不是免费规格。
    *
    * @return $this
    */
    public function setFree($free)
    {
        $this->container['free'] = $free;
        return $this;
    }

    /**
    * Gets gpu
    *  gpu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\GPUInfo|null
    */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
    * Sets gpu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\GPUInfo|null $gpu gpu
    *
    * @return $this
    */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：规格ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：规格ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets memory
    *  **参数解释**：内存大小。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int|null $memory **参数解释**：内存大小。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：规格名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：规格名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets soldOut
    *  **参数解释**：资源是否充足。 **取值范围**：布尔类型： - true 资源不足 - false 资源充足
    *
    * @return bool|null
    */
    public function getSoldOut()
    {
        return $this->container['soldOut'];
    }

    /**
    * Sets soldOut
    *
    * @param bool|null $soldOut **参数解释**：资源是否充足。 **取值范围**：布尔类型： - true 资源不足 - false 资源充足
    *
    * @return $this
    */
    public function setSoldOut($soldOut)
    {
        $this->container['soldOut'] = $soldOut;
        return $this;
    }

    /**
    * Gets storages
    *  **参数解释**：规格支持的存储类型。枚举类型，取值如下： - EFS - EVS
    *
    * @return string[]|null
    */
    public function getStorages()
    {
        return $this->container['storages'];
    }

    /**
    * Sets storages
    *
    * @param string[]|null $storages **参数解释**：规格支持的存储类型。枚举类型，取值如下： - EFS - EVS
    *
    * @return $this
    */
    public function setStorages($storages)
    {
        $this->container['storages'] = $storages;
        return $this;
    }

    /**
    * Gets vcpus
    *  **参数解释**：CPU核数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param int|null $vcpus **参数解释**：CPU核数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets evsMaxSize
    *  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEvsMaxSize()
    {
        return $this->container['evsMaxSize'];
    }

    /**
    * Sets evsMaxSize
    *
    * @param string|null $evsMaxSize **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEvsMaxSize($evsMaxSize)
    {
        $this->container['evsMaxSize'] = $evsMaxSize;
        return $this;
    }

    /**
    * Gets evsSkuCode
    *  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEvsSkuCode()
    {
        return $this->container['evsSkuCode'];
    }

    /**
    * Sets evsSkuCode
    *
    * @param string|null $evsSkuCode **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEvsSkuCode($evsSkuCode)
    {
        $this->container['evsSkuCode'] = $evsSkuCode;
        return $this;
    }

    /**
    * Gets growSupportType
    *  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    *
    * @return string|null
    */
    public function getGrowSupportType()
    {
        return $this->container['growSupportType'];
    }

    /**
    * Sets growSupportType
    *
    * @param string|null $growSupportType **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    *
    * @return $this
    */
    public function setGrowSupportType($growSupportType)
    {
        $this->container['growSupportType'] = $growSupportType;
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

