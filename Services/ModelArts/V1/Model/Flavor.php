<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

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
    * arch  **参数解释**：硬件架构类型。 **取值范围**：枚举类型，取值如下： - x86_64：X86架构。 - aarch64：ARM架构。
    * billing  billing
    * category  **参数解释**：处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - ASCEND
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * feature  **参数解释**：规格类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab规格。 - NOTEBOOK：Notebook规格。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：非免费规格。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：是否告罄。 **取值范围**：布尔类型： - true：告罄。 - false：未告罄。
    * storages  **参数解释**：规格支持的存储类型。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘。 - OBS：对象存储服务。 - OBSFS：并行文件系统。 - EFS：弹性文件服务（SFS Turbo）
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * gpu  gpu
    * ascend  ascend
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'billing' => '\HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo',
            'category' => 'string',
            'description' => 'string',
            'evsMaxSize' => 'string',
            'evsSkuCode' => 'string',
            'feature' => 'string',
            'free' => 'bool',
            'growSupportType' => 'string',
            'id' => 'string',
            'memory' => 'string',
            'name' => 'string',
            'soldOut' => 'bool',
            'storages' => 'string[]',
            'vcpus' => 'int',
            'gpu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\GPUsInfo',
            'ascend' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AscendInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  **参数解释**：硬件架构类型。 **取值范围**：枚举类型，取值如下： - x86_64：X86架构。 - aarch64：ARM架构。
    * billing  billing
    * category  **参数解释**：处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - ASCEND
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * feature  **参数解释**：规格类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab规格。 - NOTEBOOK：Notebook规格。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：非免费规格。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：是否告罄。 **取值范围**：布尔类型： - true：告罄。 - false：未告罄。
    * storages  **参数解释**：规格支持的存储类型。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘。 - OBS：对象存储服务。 - OBSFS：并行文件系统。 - EFS：弹性文件服务（SFS Turbo）
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * gpu  gpu
    * ascend  ascend
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'billing' => null,
        'category' => null,
        'description' => null,
        'evsMaxSize' => null,
        'evsSkuCode' => null,
        'feature' => null,
        'free' => null,
        'growSupportType' => null,
        'id' => null,
        'memory' => null,
        'name' => null,
        'soldOut' => null,
        'storages' => null,
        'vcpus' => 'int32',
        'gpu' => null,
        'ascend' => null
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
    * arch  **参数解释**：硬件架构类型。 **取值范围**：枚举类型，取值如下： - x86_64：X86架构。 - aarch64：ARM架构。
    * billing  billing
    * category  **参数解释**：处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - ASCEND
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * feature  **参数解释**：规格类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab规格。 - NOTEBOOK：Notebook规格。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：非免费规格。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：是否告罄。 **取值范围**：布尔类型： - true：告罄。 - false：未告罄。
    * storages  **参数解释**：规格支持的存储类型。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘。 - OBS：对象存储服务。 - OBSFS：并行文件系统。 - EFS：弹性文件服务（SFS Turbo）
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * gpu  gpu
    * ascend  ascend
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'billing' => 'billing',
            'category' => 'category',
            'description' => 'description',
            'evsMaxSize' => 'evs_max_size',
            'evsSkuCode' => 'evs_sku_code',
            'feature' => 'feature',
            'free' => 'free',
            'growSupportType' => 'grow_support_type',
            'id' => 'id',
            'memory' => 'memory',
            'name' => 'name',
            'soldOut' => 'sold_out',
            'storages' => 'storages',
            'vcpus' => 'vcpus',
            'gpu' => 'gpu',
            'ascend' => 'ascend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  **参数解释**：硬件架构类型。 **取值范围**：枚举类型，取值如下： - x86_64：X86架构。 - aarch64：ARM架构。
    * billing  billing
    * category  **参数解释**：处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - ASCEND
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * feature  **参数解释**：规格类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab规格。 - NOTEBOOK：Notebook规格。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：非免费规格。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：是否告罄。 **取值范围**：布尔类型： - true：告罄。 - false：未告罄。
    * storages  **参数解释**：规格支持的存储类型。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘。 - OBS：对象存储服务。 - OBSFS：并行文件系统。 - EFS：弹性文件服务（SFS Turbo）
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * gpu  gpu
    * ascend  ascend
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'billing' => 'setBilling',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'evsMaxSize' => 'setEvsMaxSize',
            'evsSkuCode' => 'setEvsSkuCode',
            'feature' => 'setFeature',
            'free' => 'setFree',
            'growSupportType' => 'setGrowSupportType',
            'id' => 'setId',
            'memory' => 'setMemory',
            'name' => 'setName',
            'soldOut' => 'setSoldOut',
            'storages' => 'setStorages',
            'vcpus' => 'setVcpus',
            'gpu' => 'setGpu',
            'ascend' => 'setAscend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  **参数解释**：硬件架构类型。 **取值范围**：枚举类型，取值如下： - x86_64：X86架构。 - aarch64：ARM架构。
    * billing  billing
    * category  **参数解释**：处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - ASCEND
    * description  **参数解释**：规格描述信息。 **取值范围**：不涉及。
    * evsMaxSize  **参数解释**：规格包含EVS时，EVS存储创建的最大上限(单位：GB)。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含EVS时，EVS存储的sku编码。 **取值范围**：不涉及。
    * feature  **参数解释**：规格类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab规格。 - NOTEBOOK：Notebook规格。
    * free  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：非免费规格。
    * growSupportType  **参数解释**：支持站点类型。 **取值范围**：枚举类型，取值如下： - COMMON：国内与国际站都支持。 - NATIONAL：仅在国内站支持。 - INTERNATIONAL：仅在国际站支持。 - NONE：国内与国际站都不支持。
    * id  **参数解释**：规格ID。 **取值范围**：不涉及。
    * memory  **参数解释**：内存大小。 **取值范围**：不涉及。
    * name  **参数解释**：规格名称。 **取值范围**：不涉及。
    * soldOut  **参数解释**：是否告罄。 **取值范围**：布尔类型： - true：告罄。 - false：未告罄。
    * storages  **参数解释**：规格支持的存储类型。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘。 - OBS：对象存储服务。 - OBSFS：并行文件系统。 - EFS：弹性文件服务（SFS Turbo）
    * vcpus  **参数解释**：CPU核数。 **取值范围**：不涉及。
    * gpu  gpu
    * ascend  ascend
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'billing' => 'getBilling',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'evsMaxSize' => 'getEvsMaxSize',
            'evsSkuCode' => 'getEvsSkuCode',
            'feature' => 'getFeature',
            'free' => 'getFree',
            'growSupportType' => 'getGrowSupportType',
            'id' => 'getId',
            'memory' => 'getMemory',
            'name' => 'getName',
            'soldOut' => 'getSoldOut',
            'storages' => 'getStorages',
            'vcpus' => 'getVcpus',
            'gpu' => 'getGpu',
            'ascend' => 'getAscend'
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
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['evsMaxSize'] = isset($data['evsMaxSize']) ? $data['evsMaxSize'] : null;
        $this->container['evsSkuCode'] = isset($data['evsSkuCode']) ? $data['evsSkuCode'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['growSupportType'] = isset($data['growSupportType']) ? $data['growSupportType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['soldOut'] = isset($data['soldOut']) ? $data['soldOut'] : null;
        $this->container['storages'] = isset($data['storages']) ? $data['storages'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['ascend'] = isset($data['ascend']) ? $data['ascend'] : null;
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
    * Gets arch
    *  **参数解释**：硬件架构类型。 **取值范围**：枚举类型，取值如下： - x86_64：X86架构。 - aarch64：ARM架构。
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
    * @param string|null $arch **参数解释**：硬件架构类型。 **取值范围**：枚举类型，取值如下： - x86_64：X86架构。 - aarch64：ARM架构。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
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
    *  **参数解释**：处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - ASCEND
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
    * @param string|null $category **参数解释**：处理器类型。 **取值范围**：枚举类型，取值如下： - CPU - GPU - ASCEND
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
    * Gets feature
    *  **参数解释**：规格类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab规格。 - NOTEBOOK：Notebook规格。
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
    * @param string|null $feature **参数解释**：规格类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab规格。 - NOTEBOOK：Notebook规格。
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
    *  **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：非免费规格。
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
    * @param bool|null $free **参数解释**：是否为免费规格。 **取值范围**：布尔类型： - true：免费规格。 - false：非免费规格。
    *
    * @return $this
    */
    public function setFree($free)
    {
        $this->container['free'] = $free;
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
    * @return string|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string|null $memory **参数解释**：内存大小。 **取值范围**：不涉及。
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
    *  **参数解释**：是否告罄。 **取值范围**：布尔类型： - true：告罄。 - false：未告罄。
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
    * @param bool|null $soldOut **参数解释**：是否告罄。 **取值范围**：布尔类型： - true：告罄。 - false：未告罄。
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
    *  **参数解释**：规格支持的存储类型。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘。 - OBS：对象存储服务。 - OBSFS：并行文件系统。 - EFS：弹性文件服务（SFS Turbo）
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
    * @param string[]|null $storages **参数解释**：规格支持的存储类型。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘。 - OBS：对象存储服务。 - OBSFS：并行文件系统。 - EFS：弹性文件服务（SFS Turbo）
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
    * Gets gpu
    *  gpu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\GPUsInfo|null
    */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
    * Sets gpu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\GPUsInfo|null $gpu gpu
    *
    * @return $this
    */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;
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

