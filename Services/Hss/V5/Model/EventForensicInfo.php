<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 不涉及
    * fileForensicList  **参数解释**： 文件取证信息列表 **取值范围**： 不涉及
    * processChainForensic  **参数解释**： 进程链取证信息 **取值范围**： 不涉及
    * networkForensic  networkForensic
    * userForensic  userForensic
    * registryForensic  registryForensic
    * abnormalLoginForensic  abnormalLoginForensic
    * containerForensic  containerForensic
    * malwareForensic  malwareForensic
    * autoLaunchForensic  autoLaunchForensic
    * kernelForensicList  **参数解释**： 内核取证信息 **取值范围**： 不涉及
    * geoForensic  geoForensic
    * stackForensic  stackForensic
    * imageBlockForensic  imageBlockForensic
    * honeyForensic  **参数解释**： 蜜罐相关取证信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'occurTime' => 'int',
            'fileForensicList' => '\HuaweiCloud\SDK\Hss\V5\Model\FileForensicInfo[]',
            'processChainForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\ProcessForensicInfo[][]',
            'networkForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoNetworkForensic',
            'userForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoUserForensic',
            'registryForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoRegistryForensic',
            'abnormalLoginForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoAbnormalLoginForensic',
            'containerForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoContainerForensic',
            'malwareForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoMalwareForensic',
            'autoLaunchForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoAutoLaunchForensic',
            'kernelForensicList' => '\HuaweiCloud\SDK\Hss\V5\Model\KernelForensicInfo[]',
            'geoForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoGeoForensic',
            'stackForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoStackForensic',
            'imageBlockForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoImageBlockForensic',
            'honeyForensic' => '\HuaweiCloud\SDK\Hss\V5\Model\HoneyForensicInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 不涉及
    * fileForensicList  **参数解释**： 文件取证信息列表 **取值范围**： 不涉及
    * processChainForensic  **参数解释**： 进程链取证信息 **取值范围**： 不涉及
    * networkForensic  networkForensic
    * userForensic  userForensic
    * registryForensic  registryForensic
    * abnormalLoginForensic  abnormalLoginForensic
    * containerForensic  containerForensic
    * malwareForensic  malwareForensic
    * autoLaunchForensic  autoLaunchForensic
    * kernelForensicList  **参数解释**： 内核取证信息 **取值范围**： 不涉及
    * geoForensic  geoForensic
    * stackForensic  stackForensic
    * imageBlockForensic  imageBlockForensic
    * honeyForensic  **参数解释**： 蜜罐相关取证信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'occurTime' => 'int64',
        'fileForensicList' => null,
        'processChainForensic' => null,
        'networkForensic' => null,
        'userForensic' => null,
        'registryForensic' => null,
        'abnormalLoginForensic' => null,
        'containerForensic' => null,
        'malwareForensic' => null,
        'autoLaunchForensic' => null,
        'kernelForensicList' => null,
        'geoForensic' => null,
        'stackForensic' => null,
        'imageBlockForensic' => null,
        'honeyForensic' => null
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
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 不涉及
    * fileForensicList  **参数解释**： 文件取证信息列表 **取值范围**： 不涉及
    * processChainForensic  **参数解释**： 进程链取证信息 **取值范围**： 不涉及
    * networkForensic  networkForensic
    * userForensic  userForensic
    * registryForensic  registryForensic
    * abnormalLoginForensic  abnormalLoginForensic
    * containerForensic  containerForensic
    * malwareForensic  malwareForensic
    * autoLaunchForensic  autoLaunchForensic
    * kernelForensicList  **参数解释**： 内核取证信息 **取值范围**： 不涉及
    * geoForensic  geoForensic
    * stackForensic  stackForensic
    * imageBlockForensic  imageBlockForensic
    * honeyForensic  **参数解释**： 蜜罐相关取证信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'occurTime' => 'occur_time',
            'fileForensicList' => 'file_forensic_list',
            'processChainForensic' => 'process_chain_forensic',
            'networkForensic' => 'network_forensic',
            'userForensic' => 'user_forensic',
            'registryForensic' => 'registry_forensic',
            'abnormalLoginForensic' => 'abnormal_login_forensic',
            'containerForensic' => 'container_forensic',
            'malwareForensic' => 'malware_forensic',
            'autoLaunchForensic' => 'auto_launch_forensic',
            'kernelForensicList' => 'kernel_forensic_list',
            'geoForensic' => 'geo_forensic',
            'stackForensic' => 'stack_forensic',
            'imageBlockForensic' => 'image_block_forensic',
            'honeyForensic' => 'honey_forensic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 不涉及
    * fileForensicList  **参数解释**： 文件取证信息列表 **取值范围**： 不涉及
    * processChainForensic  **参数解释**： 进程链取证信息 **取值范围**： 不涉及
    * networkForensic  networkForensic
    * userForensic  userForensic
    * registryForensic  registryForensic
    * abnormalLoginForensic  abnormalLoginForensic
    * containerForensic  containerForensic
    * malwareForensic  malwareForensic
    * autoLaunchForensic  autoLaunchForensic
    * kernelForensicList  **参数解释**： 内核取证信息 **取值范围**： 不涉及
    * geoForensic  geoForensic
    * stackForensic  stackForensic
    * imageBlockForensic  imageBlockForensic
    * honeyForensic  **参数解释**： 蜜罐相关取证信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'occurTime' => 'setOccurTime',
            'fileForensicList' => 'setFileForensicList',
            'processChainForensic' => 'setProcessChainForensic',
            'networkForensic' => 'setNetworkForensic',
            'userForensic' => 'setUserForensic',
            'registryForensic' => 'setRegistryForensic',
            'abnormalLoginForensic' => 'setAbnormalLoginForensic',
            'containerForensic' => 'setContainerForensic',
            'malwareForensic' => 'setMalwareForensic',
            'autoLaunchForensic' => 'setAutoLaunchForensic',
            'kernelForensicList' => 'setKernelForensicList',
            'geoForensic' => 'setGeoForensic',
            'stackForensic' => 'setStackForensic',
            'imageBlockForensic' => 'setImageBlockForensic',
            'honeyForensic' => 'setHoneyForensic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 不涉及
    * fileForensicList  **参数解释**： 文件取证信息列表 **取值范围**： 不涉及
    * processChainForensic  **参数解释**： 进程链取证信息 **取值范围**： 不涉及
    * networkForensic  networkForensic
    * userForensic  userForensic
    * registryForensic  registryForensic
    * abnormalLoginForensic  abnormalLoginForensic
    * containerForensic  containerForensic
    * malwareForensic  malwareForensic
    * autoLaunchForensic  autoLaunchForensic
    * kernelForensicList  **参数解释**： 内核取证信息 **取值范围**： 不涉及
    * geoForensic  geoForensic
    * stackForensic  stackForensic
    * imageBlockForensic  imageBlockForensic
    * honeyForensic  **参数解释**： 蜜罐相关取证信息 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'occurTime' => 'getOccurTime',
            'fileForensicList' => 'getFileForensicList',
            'processChainForensic' => 'getProcessChainForensic',
            'networkForensic' => 'getNetworkForensic',
            'userForensic' => 'getUserForensic',
            'registryForensic' => 'getRegistryForensic',
            'abnormalLoginForensic' => 'getAbnormalLoginForensic',
            'containerForensic' => 'getContainerForensic',
            'malwareForensic' => 'getMalwareForensic',
            'autoLaunchForensic' => 'getAutoLaunchForensic',
            'kernelForensicList' => 'getKernelForensicList',
            'geoForensic' => 'getGeoForensic',
            'stackForensic' => 'getStackForensic',
            'imageBlockForensic' => 'getImageBlockForensic',
            'honeyForensic' => 'getHoneyForensic'
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
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['fileForensicList'] = isset($data['fileForensicList']) ? $data['fileForensicList'] : null;
        $this->container['processChainForensic'] = isset($data['processChainForensic']) ? $data['processChainForensic'] : null;
        $this->container['networkForensic'] = isset($data['networkForensic']) ? $data['networkForensic'] : null;
        $this->container['userForensic'] = isset($data['userForensic']) ? $data['userForensic'] : null;
        $this->container['registryForensic'] = isset($data['registryForensic']) ? $data['registryForensic'] : null;
        $this->container['abnormalLoginForensic'] = isset($data['abnormalLoginForensic']) ? $data['abnormalLoginForensic'] : null;
        $this->container['containerForensic'] = isset($data['containerForensic']) ? $data['containerForensic'] : null;
        $this->container['malwareForensic'] = isset($data['malwareForensic']) ? $data['malwareForensic'] : null;
        $this->container['autoLaunchForensic'] = isset($data['autoLaunchForensic']) ? $data['autoLaunchForensic'] : null;
        $this->container['kernelForensicList'] = isset($data['kernelForensicList']) ? $data['kernelForensicList'] : null;
        $this->container['geoForensic'] = isset($data['geoForensic']) ? $data['geoForensic'] : null;
        $this->container['stackForensic'] = isset($data['stackForensic']) ? $data['stackForensic'] : null;
        $this->container['imageBlockForensic'] = isset($data['imageBlockForensic']) ? $data['imageBlockForensic'] : null;
        $this->container['honeyForensic'] = isset($data['honeyForensic']) ? $data['honeyForensic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be bigger than or equal to 0.";
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
    * Gets occurTime
    *  **参数解释**： 发生时间，毫秒 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int|null $occurTime **参数解释**： 发生时间，毫秒 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets fileForensicList
    *  **参数解释**： 文件取证信息列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\FileForensicInfo[]|null
    */
    public function getFileForensicList()
    {
        return $this->container['fileForensicList'];
    }

    /**
    * Sets fileForensicList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\FileForensicInfo[]|null $fileForensicList **参数解释**： 文件取证信息列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFileForensicList($fileForensicList)
    {
        $this->container['fileForensicList'] = $fileForensicList;
        return $this;
    }

    /**
    * Gets processChainForensic
    *  **参数解释**： 进程链取证信息 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProcessForensicInfo[][]|null
    */
    public function getProcessChainForensic()
    {
        return $this->container['processChainForensic'];
    }

    /**
    * Sets processChainForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProcessForensicInfo[][]|null $processChainForensic **参数解释**： 进程链取证信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessChainForensic($processChainForensic)
    {
        $this->container['processChainForensic'] = $processChainForensic;
        return $this;
    }

    /**
    * Gets networkForensic
    *  networkForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoNetworkForensic|null
    */
    public function getNetworkForensic()
    {
        return $this->container['networkForensic'];
    }

    /**
    * Sets networkForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoNetworkForensic|null $networkForensic networkForensic
    *
    * @return $this
    */
    public function setNetworkForensic($networkForensic)
    {
        $this->container['networkForensic'] = $networkForensic;
        return $this;
    }

    /**
    * Gets userForensic
    *  userForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoUserForensic|null
    */
    public function getUserForensic()
    {
        return $this->container['userForensic'];
    }

    /**
    * Sets userForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoUserForensic|null $userForensic userForensic
    *
    * @return $this
    */
    public function setUserForensic($userForensic)
    {
        $this->container['userForensic'] = $userForensic;
        return $this;
    }

    /**
    * Gets registryForensic
    *  registryForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoRegistryForensic|null
    */
    public function getRegistryForensic()
    {
        return $this->container['registryForensic'];
    }

    /**
    * Sets registryForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoRegistryForensic|null $registryForensic registryForensic
    *
    * @return $this
    */
    public function setRegistryForensic($registryForensic)
    {
        $this->container['registryForensic'] = $registryForensic;
        return $this;
    }

    /**
    * Gets abnormalLoginForensic
    *  abnormalLoginForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoAbnormalLoginForensic|null
    */
    public function getAbnormalLoginForensic()
    {
        return $this->container['abnormalLoginForensic'];
    }

    /**
    * Sets abnormalLoginForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoAbnormalLoginForensic|null $abnormalLoginForensic abnormalLoginForensic
    *
    * @return $this
    */
    public function setAbnormalLoginForensic($abnormalLoginForensic)
    {
        $this->container['abnormalLoginForensic'] = $abnormalLoginForensic;
        return $this;
    }

    /**
    * Gets containerForensic
    *  containerForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoContainerForensic|null
    */
    public function getContainerForensic()
    {
        return $this->container['containerForensic'];
    }

    /**
    * Sets containerForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoContainerForensic|null $containerForensic containerForensic
    *
    * @return $this
    */
    public function setContainerForensic($containerForensic)
    {
        $this->container['containerForensic'] = $containerForensic;
        return $this;
    }

    /**
    * Gets malwareForensic
    *  malwareForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoMalwareForensic|null
    */
    public function getMalwareForensic()
    {
        return $this->container['malwareForensic'];
    }

    /**
    * Sets malwareForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoMalwareForensic|null $malwareForensic malwareForensic
    *
    * @return $this
    */
    public function setMalwareForensic($malwareForensic)
    {
        $this->container['malwareForensic'] = $malwareForensic;
        return $this;
    }

    /**
    * Gets autoLaunchForensic
    *  autoLaunchForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoAutoLaunchForensic|null
    */
    public function getAutoLaunchForensic()
    {
        return $this->container['autoLaunchForensic'];
    }

    /**
    * Sets autoLaunchForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoAutoLaunchForensic|null $autoLaunchForensic autoLaunchForensic
    *
    * @return $this
    */
    public function setAutoLaunchForensic($autoLaunchForensic)
    {
        $this->container['autoLaunchForensic'] = $autoLaunchForensic;
        return $this;
    }

    /**
    * Gets kernelForensicList
    *  **参数解释**： 内核取证信息 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\KernelForensicInfo[]|null
    */
    public function getKernelForensicList()
    {
        return $this->container['kernelForensicList'];
    }

    /**
    * Sets kernelForensicList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\KernelForensicInfo[]|null $kernelForensicList **参数解释**： 内核取证信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setKernelForensicList($kernelForensicList)
    {
        $this->container['kernelForensicList'] = $kernelForensicList;
        return $this;
    }

    /**
    * Gets geoForensic
    *  geoForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoGeoForensic|null
    */
    public function getGeoForensic()
    {
        return $this->container['geoForensic'];
    }

    /**
    * Sets geoForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoGeoForensic|null $geoForensic geoForensic
    *
    * @return $this
    */
    public function setGeoForensic($geoForensic)
    {
        $this->container['geoForensic'] = $geoForensic;
        return $this;
    }

    /**
    * Gets stackForensic
    *  stackForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoStackForensic|null
    */
    public function getStackForensic()
    {
        return $this->container['stackForensic'];
    }

    /**
    * Sets stackForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoStackForensic|null $stackForensic stackForensic
    *
    * @return $this
    */
    public function setStackForensic($stackForensic)
    {
        $this->container['stackForensic'] = $stackForensic;
        return $this;
    }

    /**
    * Gets imageBlockForensic
    *  imageBlockForensic
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoImageBlockForensic|null
    */
    public function getImageBlockForensic()
    {
        return $this->container['imageBlockForensic'];
    }

    /**
    * Sets imageBlockForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventForensicInfoImageBlockForensic|null $imageBlockForensic imageBlockForensic
    *
    * @return $this
    */
    public function setImageBlockForensic($imageBlockForensic)
    {
        $this->container['imageBlockForensic'] = $imageBlockForensic;
        return $this;
    }

    /**
    * Gets honeyForensic
    *  **参数解释**： 蜜罐相关取证信息 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HoneyForensicInfo[]|null
    */
    public function getHoneyForensic()
    {
        return $this->container['honeyForensic'];
    }

    /**
    * Sets honeyForensic
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HoneyForensicInfo[]|null $honeyForensic **参数解释**： 蜜罐相关取证信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHoneyForensic($honeyForensic)
    {
        $this->container['honeyForensic'] = $honeyForensic;
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

