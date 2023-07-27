<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OsExtraSpecs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OsExtraSpecs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  识该规格对应的资源类型，取值范围为“ironic”。
    * capabilitiescpuArch  裸金属服务器的CPU架构类型，取值为：x86_64（适用于x86机型）aarch64（适用于ARM机型）
    * baremetaldiskDetail  磁盘物理规格描述信息。
    * capabilitieshypervisorType  标示ironic类型的规格。
    * baremetalSupportEvs  标识当前的规格是否支持挂载EVS卷。truefalse
    * baremetalextBootType  裸金属服务器启动源。LocalDisk：本地盘Volume：云硬盘（快速发放）
    * capabilitiesboardType  裸金属服务器的规格类型。格式为规格的缩写，例如规格名称为“physical.o2.medium”，则规格类型为“o2m”。
    * baremetalnetNum  实际可挂载网络数量。
    * baremetalnetcardDetail  网卡物理规格描述信息。
    * baremetalcpuDetail  CPU物理规格描述信息。
    * baremetalmemoryDetail  内存物理规格描述信息
    * condoperationstatus  裸金属服务器规格状态。不配置时等同于normal。normal：正常商用abandon：下线（即不显示）sellout：售罄obt：公测promotion：推荐（等同normal，也是商用）
    * condoperationaz  在某个AZ的裸金属服务器规格状态。此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。格式：az(xx)。()内为某个AZ下的裸金属服务器规格状态，()内必须填写状态，不填为无效配置。例如：规格在某个区域的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：“cond:operation:status”设置为“abandon”“cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(promotion)” 说明：如果规格在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'capabilitiescpuArch' => 'string',
            'baremetaldiskDetail' => 'string',
            'capabilitieshypervisorType' => 'string',
            'baremetalSupportEvs' => 'string',
            'baremetalextBootType' => 'string',
            'capabilitiesboardType' => 'string',
            'baremetalnetNum' => 'string',
            'baremetalnetcardDetail' => 'string',
            'baremetalcpuDetail' => 'string',
            'baremetalmemoryDetail' => 'string',
            'condoperationstatus' => 'string',
            'condoperationaz' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  识该规格对应的资源类型，取值范围为“ironic”。
    * capabilitiescpuArch  裸金属服务器的CPU架构类型，取值为：x86_64（适用于x86机型）aarch64（适用于ARM机型）
    * baremetaldiskDetail  磁盘物理规格描述信息。
    * capabilitieshypervisorType  标示ironic类型的规格。
    * baremetalSupportEvs  标识当前的规格是否支持挂载EVS卷。truefalse
    * baremetalextBootType  裸金属服务器启动源。LocalDisk：本地盘Volume：云硬盘（快速发放）
    * capabilitiesboardType  裸金属服务器的规格类型。格式为规格的缩写，例如规格名称为“physical.o2.medium”，则规格类型为“o2m”。
    * baremetalnetNum  实际可挂载网络数量。
    * baremetalnetcardDetail  网卡物理规格描述信息。
    * baremetalcpuDetail  CPU物理规格描述信息。
    * baremetalmemoryDetail  内存物理规格描述信息
    * condoperationstatus  裸金属服务器规格状态。不配置时等同于normal。normal：正常商用abandon：下线（即不显示）sellout：售罄obt：公测promotion：推荐（等同normal，也是商用）
    * condoperationaz  在某个AZ的裸金属服务器规格状态。此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。格式：az(xx)。()内为某个AZ下的裸金属服务器规格状态，()内必须填写状态，不填为无效配置。例如：规格在某个区域的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：“cond:operation:status”设置为“abandon”“cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(promotion)” 说明：如果规格在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'capabilitiescpuArch' => null,
        'baremetaldiskDetail' => null,
        'capabilitieshypervisorType' => null,
        'baremetalSupportEvs' => null,
        'baremetalextBootType' => null,
        'capabilitiesboardType' => null,
        'baremetalnetNum' => null,
        'baremetalnetcardDetail' => null,
        'baremetalcpuDetail' => null,
        'baremetalmemoryDetail' => null,
        'condoperationstatus' => null,
        'condoperationaz' => null
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
    * resourceType  识该规格对应的资源类型，取值范围为“ironic”。
    * capabilitiescpuArch  裸金属服务器的CPU架构类型，取值为：x86_64（适用于x86机型）aarch64（适用于ARM机型）
    * baremetaldiskDetail  磁盘物理规格描述信息。
    * capabilitieshypervisorType  标示ironic类型的规格。
    * baremetalSupportEvs  标识当前的规格是否支持挂载EVS卷。truefalse
    * baremetalextBootType  裸金属服务器启动源。LocalDisk：本地盘Volume：云硬盘（快速发放）
    * capabilitiesboardType  裸金属服务器的规格类型。格式为规格的缩写，例如规格名称为“physical.o2.medium”，则规格类型为“o2m”。
    * baremetalnetNum  实际可挂载网络数量。
    * baremetalnetcardDetail  网卡物理规格描述信息。
    * baremetalcpuDetail  CPU物理规格描述信息。
    * baremetalmemoryDetail  内存物理规格描述信息
    * condoperationstatus  裸金属服务器规格状态。不配置时等同于normal。normal：正常商用abandon：下线（即不显示）sellout：售罄obt：公测promotion：推荐（等同normal，也是商用）
    * condoperationaz  在某个AZ的裸金属服务器规格状态。此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。格式：az(xx)。()内为某个AZ下的裸金属服务器规格状态，()内必须填写状态，不填为无效配置。例如：规格在某个区域的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：“cond:operation:status”设置为“abandon”“cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(promotion)” 说明：如果规格在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'capabilitiescpuArch' => 'capabilities:cpu_arch',
            'baremetaldiskDetail' => 'baremetal:disk_detail',
            'capabilitieshypervisorType' => 'capabilities:hypervisor_type',
            'baremetalSupportEvs' => 'baremetal:__support_evs',
            'baremetalextBootType' => 'baremetal:extBootType',
            'capabilitiesboardType' => 'capabilities:board_type',
            'baremetalnetNum' => 'baremetal:net_num',
            'baremetalnetcardDetail' => 'baremetal:netcard_detail',
            'baremetalcpuDetail' => 'baremetal:cpu_detail',
            'baremetalmemoryDetail' => 'baremetal:memory_detail',
            'condoperationstatus' => 'cond:operation:status',
            'condoperationaz' => 'cond:operation:az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  识该规格对应的资源类型，取值范围为“ironic”。
    * capabilitiescpuArch  裸金属服务器的CPU架构类型，取值为：x86_64（适用于x86机型）aarch64（适用于ARM机型）
    * baremetaldiskDetail  磁盘物理规格描述信息。
    * capabilitieshypervisorType  标示ironic类型的规格。
    * baremetalSupportEvs  标识当前的规格是否支持挂载EVS卷。truefalse
    * baremetalextBootType  裸金属服务器启动源。LocalDisk：本地盘Volume：云硬盘（快速发放）
    * capabilitiesboardType  裸金属服务器的规格类型。格式为规格的缩写，例如规格名称为“physical.o2.medium”，则规格类型为“o2m”。
    * baremetalnetNum  实际可挂载网络数量。
    * baremetalnetcardDetail  网卡物理规格描述信息。
    * baremetalcpuDetail  CPU物理规格描述信息。
    * baremetalmemoryDetail  内存物理规格描述信息
    * condoperationstatus  裸金属服务器规格状态。不配置时等同于normal。normal：正常商用abandon：下线（即不显示）sellout：售罄obt：公测promotion：推荐（等同normal，也是商用）
    * condoperationaz  在某个AZ的裸金属服务器规格状态。此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。格式：az(xx)。()内为某个AZ下的裸金属服务器规格状态，()内必须填写状态，不填为无效配置。例如：规格在某个区域的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：“cond:operation:status”设置为“abandon”“cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(promotion)” 说明：如果规格在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'capabilitiescpuArch' => 'setCapabilitiescpuArch',
            'baremetaldiskDetail' => 'setBaremetaldiskDetail',
            'capabilitieshypervisorType' => 'setCapabilitieshypervisorType',
            'baremetalSupportEvs' => 'setBaremetalSupportEvs',
            'baremetalextBootType' => 'setBaremetalextBootType',
            'capabilitiesboardType' => 'setCapabilitiesboardType',
            'baremetalnetNum' => 'setBaremetalnetNum',
            'baremetalnetcardDetail' => 'setBaremetalnetcardDetail',
            'baremetalcpuDetail' => 'setBaremetalcpuDetail',
            'baremetalmemoryDetail' => 'setBaremetalmemoryDetail',
            'condoperationstatus' => 'setCondoperationstatus',
            'condoperationaz' => 'setCondoperationaz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  识该规格对应的资源类型，取值范围为“ironic”。
    * capabilitiescpuArch  裸金属服务器的CPU架构类型，取值为：x86_64（适用于x86机型）aarch64（适用于ARM机型）
    * baremetaldiskDetail  磁盘物理规格描述信息。
    * capabilitieshypervisorType  标示ironic类型的规格。
    * baremetalSupportEvs  标识当前的规格是否支持挂载EVS卷。truefalse
    * baremetalextBootType  裸金属服务器启动源。LocalDisk：本地盘Volume：云硬盘（快速发放）
    * capabilitiesboardType  裸金属服务器的规格类型。格式为规格的缩写，例如规格名称为“physical.o2.medium”，则规格类型为“o2m”。
    * baremetalnetNum  实际可挂载网络数量。
    * baremetalnetcardDetail  网卡物理规格描述信息。
    * baremetalcpuDetail  CPU物理规格描述信息。
    * baremetalmemoryDetail  内存物理规格描述信息
    * condoperationstatus  裸金属服务器规格状态。不配置时等同于normal。normal：正常商用abandon：下线（即不显示）sellout：售罄obt：公测promotion：推荐（等同normal，也是商用）
    * condoperationaz  在某个AZ的裸金属服务器规格状态。此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。格式：az(xx)。()内为某个AZ下的裸金属服务器规格状态，()内必须填写状态，不填为无效配置。例如：规格在某个区域的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：“cond:operation:status”设置为“abandon”“cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(promotion)” 说明：如果规格在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'capabilitiescpuArch' => 'getCapabilitiescpuArch',
            'baremetaldiskDetail' => 'getBaremetaldiskDetail',
            'capabilitieshypervisorType' => 'getCapabilitieshypervisorType',
            'baremetalSupportEvs' => 'getBaremetalSupportEvs',
            'baremetalextBootType' => 'getBaremetalextBootType',
            'capabilitiesboardType' => 'getCapabilitiesboardType',
            'baremetalnetNum' => 'getBaremetalnetNum',
            'baremetalnetcardDetail' => 'getBaremetalnetcardDetail',
            'baremetalcpuDetail' => 'getBaremetalcpuDetail',
            'baremetalmemoryDetail' => 'getBaremetalmemoryDetail',
            'condoperationstatus' => 'getCondoperationstatus',
            'condoperationaz' => 'getCondoperationaz'
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
    const RESOURCE_TYPE_IRONIC = 'ironic';
    const CAPABILITIESCPU_ARCH_X86_64 = 'x86_64';
    const CAPABILITIESCPU_ARCH_AARCH64 = 'aarch64';
    const BAREMETALEXT_BOOT_TYPE_LOCAL_DISK = 'LocalDisk';
    const BAREMETALEXT_BOOT_TYPE_VOLUME = 'Volume';
    const CONDOPERATIONSTATUS_NORMAL = 'normal';
    const CONDOPERATIONSTATUS_ABANDON = 'abandon';
    const CONDOPERATIONSTATUS_SELLOUT = 'sellout';
    const CONDOPERATIONSTATUS_OBT = 'obt';
    const CONDOPERATIONSTATUS_PROMOTION = 'promotion';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_IRONIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCapabilitiescpuArchAllowableValues()
    {
        return [
            self::CAPABILITIESCPU_ARCH_X86_64,
            self::CAPABILITIESCPU_ARCH_AARCH64,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBaremetalextBootTypeAllowableValues()
    {
        return [
            self::BAREMETALEXT_BOOT_TYPE_LOCAL_DISK,
            self::BAREMETALEXT_BOOT_TYPE_VOLUME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCondoperationstatusAllowableValues()
    {
        return [
            self::CONDOPERATIONSTATUS_NORMAL,
            self::CONDOPERATIONSTATUS_ABANDON,
            self::CONDOPERATIONSTATUS_SELLOUT,
            self::CONDOPERATIONSTATUS_OBT,
            self::CONDOPERATIONSTATUS_PROMOTION,
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['capabilitiescpuArch'] = isset($data['capabilitiescpuArch']) ? $data['capabilitiescpuArch'] : null;
        $this->container['baremetaldiskDetail'] = isset($data['baremetaldiskDetail']) ? $data['baremetaldiskDetail'] : null;
        $this->container['capabilitieshypervisorType'] = isset($data['capabilitieshypervisorType']) ? $data['capabilitieshypervisorType'] : null;
        $this->container['baremetalSupportEvs'] = isset($data['baremetalSupportEvs']) ? $data['baremetalSupportEvs'] : null;
        $this->container['baremetalextBootType'] = isset($data['baremetalextBootType']) ? $data['baremetalextBootType'] : null;
        $this->container['capabilitiesboardType'] = isset($data['capabilitiesboardType']) ? $data['capabilitiesboardType'] : null;
        $this->container['baremetalnetNum'] = isset($data['baremetalnetNum']) ? $data['baremetalnetNum'] : null;
        $this->container['baremetalnetcardDetail'] = isset($data['baremetalnetcardDetail']) ? $data['baremetalnetcardDetail'] : null;
        $this->container['baremetalcpuDetail'] = isset($data['baremetalcpuDetail']) ? $data['baremetalcpuDetail'] : null;
        $this->container['baremetalmemoryDetail'] = isset($data['baremetalmemoryDetail']) ? $data['baremetalmemoryDetail'] : null;
        $this->container['condoperationstatus'] = isset($data['condoperationstatus']) ? $data['condoperationstatus'] : null;
        $this->container['condoperationaz'] = isset($data['condoperationaz']) ? $data['condoperationaz'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['capabilitiescpuArch'] === null) {
            $invalidProperties[] = "'capabilitiescpuArch' can't be null";
        }
            $allowedValues = $this->getCapabilitiescpuArchAllowableValues();
                if (!is_null($this->container['capabilitiescpuArch']) && !in_array($this->container['capabilitiescpuArch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'capabilitiescpuArch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['baremetaldiskDetail'] === null) {
            $invalidProperties[] = "'baremetaldiskDetail' can't be null";
        }
        if ($this->container['capabilitieshypervisorType'] === null) {
            $invalidProperties[] = "'capabilitieshypervisorType' can't be null";
        }
            $allowedValues = $this->getBaremetalextBootTypeAllowableValues();
                if (!is_null($this->container['baremetalextBootType']) && !in_array($this->container['baremetalextBootType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'baremetalextBootType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['capabilitiesboardType'] === null) {
            $invalidProperties[] = "'capabilitiesboardType' can't be null";
        }
        if ($this->container['baremetalnetNum'] === null) {
            $invalidProperties[] = "'baremetalnetNum' can't be null";
        }
        if ($this->container['baremetalnetcardDetail'] === null) {
            $invalidProperties[] = "'baremetalnetcardDetail' can't be null";
        }
        if ($this->container['baremetalcpuDetail'] === null) {
            $invalidProperties[] = "'baremetalcpuDetail' can't be null";
        }
        if ($this->container['baremetalmemoryDetail'] === null) {
            $invalidProperties[] = "'baremetalmemoryDetail' can't be null";
        }
            $allowedValues = $this->getCondoperationstatusAllowableValues();
                if (!is_null($this->container['condoperationstatus']) && !in_array($this->container['condoperationstatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'condoperationstatus', must be one of '%s'",
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
    * Gets resourceType
    *  识该规格对应的资源类型，取值范围为“ironic”。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 识该规格对应的资源类型，取值范围为“ironic”。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets capabilitiescpuArch
    *  裸金属服务器的CPU架构类型，取值为：x86_64（适用于x86机型）aarch64（适用于ARM机型）
    *
    * @return string
    */
    public function getCapabilitiescpuArch()
    {
        return $this->container['capabilitiescpuArch'];
    }

    /**
    * Sets capabilitiescpuArch
    *
    * @param string $capabilitiescpuArch 裸金属服务器的CPU架构类型，取值为：x86_64（适用于x86机型）aarch64（适用于ARM机型）
    *
    * @return $this
    */
    public function setCapabilitiescpuArch($capabilitiescpuArch)
    {
        $this->container['capabilitiescpuArch'] = $capabilitiescpuArch;
        return $this;
    }

    /**
    * Gets baremetaldiskDetail
    *  磁盘物理规格描述信息。
    *
    * @return string
    */
    public function getBaremetaldiskDetail()
    {
        return $this->container['baremetaldiskDetail'];
    }

    /**
    * Sets baremetaldiskDetail
    *
    * @param string $baremetaldiskDetail 磁盘物理规格描述信息。
    *
    * @return $this
    */
    public function setBaremetaldiskDetail($baremetaldiskDetail)
    {
        $this->container['baremetaldiskDetail'] = $baremetaldiskDetail;
        return $this;
    }

    /**
    * Gets capabilitieshypervisorType
    *  标示ironic类型的规格。
    *
    * @return string
    */
    public function getCapabilitieshypervisorType()
    {
        return $this->container['capabilitieshypervisorType'];
    }

    /**
    * Sets capabilitieshypervisorType
    *
    * @param string $capabilitieshypervisorType 标示ironic类型的规格。
    *
    * @return $this
    */
    public function setCapabilitieshypervisorType($capabilitieshypervisorType)
    {
        $this->container['capabilitieshypervisorType'] = $capabilitieshypervisorType;
        return $this;
    }

    /**
    * Gets baremetalSupportEvs
    *  标识当前的规格是否支持挂载EVS卷。truefalse
    *
    * @return string|null
    */
    public function getBaremetalSupportEvs()
    {
        return $this->container['baremetalSupportEvs'];
    }

    /**
    * Sets baremetalSupportEvs
    *
    * @param string|null $baremetalSupportEvs 标识当前的规格是否支持挂载EVS卷。truefalse
    *
    * @return $this
    */
    public function setBaremetalSupportEvs($baremetalSupportEvs)
    {
        $this->container['baremetalSupportEvs'] = $baremetalSupportEvs;
        return $this;
    }

    /**
    * Gets baremetalextBootType
    *  裸金属服务器启动源。LocalDisk：本地盘Volume：云硬盘（快速发放）
    *
    * @return string|null
    */
    public function getBaremetalextBootType()
    {
        return $this->container['baremetalextBootType'];
    }

    /**
    * Sets baremetalextBootType
    *
    * @param string|null $baremetalextBootType 裸金属服务器启动源。LocalDisk：本地盘Volume：云硬盘（快速发放）
    *
    * @return $this
    */
    public function setBaremetalextBootType($baremetalextBootType)
    {
        $this->container['baremetalextBootType'] = $baremetalextBootType;
        return $this;
    }

    /**
    * Gets capabilitiesboardType
    *  裸金属服务器的规格类型。格式为规格的缩写，例如规格名称为“physical.o2.medium”，则规格类型为“o2m”。
    *
    * @return string
    */
    public function getCapabilitiesboardType()
    {
        return $this->container['capabilitiesboardType'];
    }

    /**
    * Sets capabilitiesboardType
    *
    * @param string $capabilitiesboardType 裸金属服务器的规格类型。格式为规格的缩写，例如规格名称为“physical.o2.medium”，则规格类型为“o2m”。
    *
    * @return $this
    */
    public function setCapabilitiesboardType($capabilitiesboardType)
    {
        $this->container['capabilitiesboardType'] = $capabilitiesboardType;
        return $this;
    }

    /**
    * Gets baremetalnetNum
    *  实际可挂载网络数量。
    *
    * @return string
    */
    public function getBaremetalnetNum()
    {
        return $this->container['baremetalnetNum'];
    }

    /**
    * Sets baremetalnetNum
    *
    * @param string $baremetalnetNum 实际可挂载网络数量。
    *
    * @return $this
    */
    public function setBaremetalnetNum($baremetalnetNum)
    {
        $this->container['baremetalnetNum'] = $baremetalnetNum;
        return $this;
    }

    /**
    * Gets baremetalnetcardDetail
    *  网卡物理规格描述信息。
    *
    * @return string
    */
    public function getBaremetalnetcardDetail()
    {
        return $this->container['baremetalnetcardDetail'];
    }

    /**
    * Sets baremetalnetcardDetail
    *
    * @param string $baremetalnetcardDetail 网卡物理规格描述信息。
    *
    * @return $this
    */
    public function setBaremetalnetcardDetail($baremetalnetcardDetail)
    {
        $this->container['baremetalnetcardDetail'] = $baremetalnetcardDetail;
        return $this;
    }

    /**
    * Gets baremetalcpuDetail
    *  CPU物理规格描述信息。
    *
    * @return string
    */
    public function getBaremetalcpuDetail()
    {
        return $this->container['baremetalcpuDetail'];
    }

    /**
    * Sets baremetalcpuDetail
    *
    * @param string $baremetalcpuDetail CPU物理规格描述信息。
    *
    * @return $this
    */
    public function setBaremetalcpuDetail($baremetalcpuDetail)
    {
        $this->container['baremetalcpuDetail'] = $baremetalcpuDetail;
        return $this;
    }

    /**
    * Gets baremetalmemoryDetail
    *  内存物理规格描述信息
    *
    * @return string
    */
    public function getBaremetalmemoryDetail()
    {
        return $this->container['baremetalmemoryDetail'];
    }

    /**
    * Sets baremetalmemoryDetail
    *
    * @param string $baremetalmemoryDetail 内存物理规格描述信息
    *
    * @return $this
    */
    public function setBaremetalmemoryDetail($baremetalmemoryDetail)
    {
        $this->container['baremetalmemoryDetail'] = $baremetalmemoryDetail;
        return $this;
    }

    /**
    * Gets condoperationstatus
    *  裸金属服务器规格状态。不配置时等同于normal。normal：正常商用abandon：下线（即不显示）sellout：售罄obt：公测promotion：推荐（等同normal，也是商用）
    *
    * @return string|null
    */
    public function getCondoperationstatus()
    {
        return $this->container['condoperationstatus'];
    }

    /**
    * Sets condoperationstatus
    *
    * @param string|null $condoperationstatus 裸金属服务器规格状态。不配置时等同于normal。normal：正常商用abandon：下线（即不显示）sellout：售罄obt：公测promotion：推荐（等同normal，也是商用）
    *
    * @return $this
    */
    public function setCondoperationstatus($condoperationstatus)
    {
        $this->container['condoperationstatus'] = $condoperationstatus;
        return $this;
    }

    /**
    * Gets condoperationaz
    *  在某个AZ的裸金属服务器规格状态。此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。格式：az(xx)。()内为某个AZ下的裸金属服务器规格状态，()内必须填写状态，不填为无效配置。例如：规格在某个区域的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：“cond:operation:status”设置为“abandon”“cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(promotion)” 说明：如果规格在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @return string|null
    */
    public function getCondoperationaz()
    {
        return $this->container['condoperationaz'];
    }

    /**
    * Sets condoperationaz
    *
    * @param string|null $condoperationaz 在某个AZ的裸金属服务器规格状态。此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。格式：az(xx)。()内为某个AZ下的裸金属服务器规格状态，()内必须填写状态，不填为无效配置。例如：规格在某个区域的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：“cond:operation:status”设置为“abandon”“cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(promotion)” 说明：如果规格在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @return $this
    */
    public function setCondoperationaz($condoperationaz)
    {
        $this->container['condoperationaz'] = $condoperationaz;
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

