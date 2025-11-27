<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperProtectionConfigResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperProtectionConfigResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 网页防篡改配置id **取值范围**: 字符长度1-64位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - alarm：告警模式 - block：拦截模式
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **取值范围**: 最少0条，最多10条
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **取值范围**： 最少1条，最多50条
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **取值范围**： 最少0条，最多10条
    * status  **参数解释**: 防护状态 **取值范围**: - not_protect：未防护 - protected：防护中 - partial_protected：部分防护 - protect_failed：防护失败 - redundant：防护冗余
    * protectedContainerNums  **参数解释**: 防护中的容器数量 **取值范围**: 最小值0，最大值2147483647
    * protectedEventNums  **参数解释**: 当前防护配置产生的防护事件数量 **取值范围**: 最小值0，最大值2147483647
    * resourceId  **参数解释**: 防护配置绑定的配额id **取值范围**: 字符长度1-64位
    * containerWtpInfo  containerWtpInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'protectMode' => 'string',
            'monitorProcess' => 'bool',
            'privilegedProcessList' => 'string[]',
            'privilegedChild' => 'bool',
            'protectDirectoryInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectDirectoryResponseInfo[]',
            'excludeFileTypes' => 'string[]',
            'status' => 'string',
            'protectedContainerNums' => 'int',
            'protectedEventNums' => 'int',
            'resourceId' => 'string',
            'containerWtpInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 网页防篡改配置id **取值范围**: 字符长度1-64位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - alarm：告警模式 - block：拦截模式
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **取值范围**: 最少0条，最多10条
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **取值范围**： 最少1条，最多50条
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **取值范围**： 最少0条，最多10条
    * status  **参数解释**: 防护状态 **取值范围**: - not_protect：未防护 - protected：防护中 - partial_protected：部分防护 - protect_failed：防护失败 - redundant：防护冗余
    * protectedContainerNums  **参数解释**: 防护中的容器数量 **取值范围**: 最小值0，最大值2147483647
    * protectedEventNums  **参数解释**: 当前防护配置产生的防护事件数量 **取值范围**: 最小值0，最大值2147483647
    * resourceId  **参数解释**: 防护配置绑定的配额id **取值范围**: 字符长度1-64位
    * containerWtpInfo  containerWtpInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'protectMode' => null,
        'monitorProcess' => null,
        'privilegedProcessList' => null,
        'privilegedChild' => null,
        'protectDirectoryInfoList' => null,
        'excludeFileTypes' => null,
        'status' => null,
        'protectedContainerNums' => 'int32',
        'protectedEventNums' => 'int32',
        'resourceId' => null,
        'containerWtpInfo' => null
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
    * id  **参数解释**: 网页防篡改配置id **取值范围**: 字符长度1-64位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - alarm：告警模式 - block：拦截模式
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **取值范围**: 最少0条，最多10条
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **取值范围**： 最少1条，最多50条
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **取值范围**： 最少0条，最多10条
    * status  **参数解释**: 防护状态 **取值范围**: - not_protect：未防护 - protected：防护中 - partial_protected：部分防护 - protect_failed：防护失败 - redundant：防护冗余
    * protectedContainerNums  **参数解释**: 防护中的容器数量 **取值范围**: 最小值0，最大值2147483647
    * protectedEventNums  **参数解释**: 当前防护配置产生的防护事件数量 **取值范围**: 最小值0，最大值2147483647
    * resourceId  **参数解释**: 防护配置绑定的配额id **取值范围**: 字符长度1-64位
    * containerWtpInfo  containerWtpInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'protectMode' => 'protect_mode',
            'monitorProcess' => 'monitor_process',
            'privilegedProcessList' => 'privileged_process_list',
            'privilegedChild' => 'privileged_child',
            'protectDirectoryInfoList' => 'protect_directory_info_list',
            'excludeFileTypes' => 'exclude_file_types',
            'status' => 'status',
            'protectedContainerNums' => 'protected_container_nums',
            'protectedEventNums' => 'protected_event_nums',
            'resourceId' => 'resource_id',
            'containerWtpInfo' => 'container_wtp_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 网页防篡改配置id **取值范围**: 字符长度1-64位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - alarm：告警模式 - block：拦截模式
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **取值范围**: 最少0条，最多10条
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **取值范围**： 最少1条，最多50条
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **取值范围**： 最少0条，最多10条
    * status  **参数解释**: 防护状态 **取值范围**: - not_protect：未防护 - protected：防护中 - partial_protected：部分防护 - protect_failed：防护失败 - redundant：防护冗余
    * protectedContainerNums  **参数解释**: 防护中的容器数量 **取值范围**: 最小值0，最大值2147483647
    * protectedEventNums  **参数解释**: 当前防护配置产生的防护事件数量 **取值范围**: 最小值0，最大值2147483647
    * resourceId  **参数解释**: 防护配置绑定的配额id **取值范围**: 字符长度1-64位
    * containerWtpInfo  containerWtpInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'protectMode' => 'setProtectMode',
            'monitorProcess' => 'setMonitorProcess',
            'privilegedProcessList' => 'setPrivilegedProcessList',
            'privilegedChild' => 'setPrivilegedChild',
            'protectDirectoryInfoList' => 'setProtectDirectoryInfoList',
            'excludeFileTypes' => 'setExcludeFileTypes',
            'status' => 'setStatus',
            'protectedContainerNums' => 'setProtectedContainerNums',
            'protectedEventNums' => 'setProtectedEventNums',
            'resourceId' => 'setResourceId',
            'containerWtpInfo' => 'setContainerWtpInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 网页防篡改配置id **取值范围**: 字符长度1-64位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - alarm：告警模式 - block：拦截模式
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **取值范围**: 最少0条，最多10条
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **取值范围**： 最少1条，最多50条
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **取值范围**： 最少0条，最多10条
    * status  **参数解释**: 防护状态 **取值范围**: - not_protect：未防护 - protected：防护中 - partial_protected：部分防护 - protect_failed：防护失败 - redundant：防护冗余
    * protectedContainerNums  **参数解释**: 防护中的容器数量 **取值范围**: 最小值0，最大值2147483647
    * protectedEventNums  **参数解释**: 当前防护配置产生的防护事件数量 **取值范围**: 最小值0，最大值2147483647
    * resourceId  **参数解释**: 防护配置绑定的配额id **取值范围**: 字符长度1-64位
    * containerWtpInfo  containerWtpInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'protectMode' => 'getProtectMode',
            'monitorProcess' => 'getMonitorProcess',
            'privilegedProcessList' => 'getPrivilegedProcessList',
            'privilegedChild' => 'getPrivilegedChild',
            'protectDirectoryInfoList' => 'getProtectDirectoryInfoList',
            'excludeFileTypes' => 'getExcludeFileTypes',
            'status' => 'getStatus',
            'protectedContainerNums' => 'getProtectedContainerNums',
            'protectedEventNums' => 'getProtectedEventNums',
            'resourceId' => 'getResourceId',
            'containerWtpInfo' => 'getContainerWtpInfo'
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
        $this->container['protectMode'] = isset($data['protectMode']) ? $data['protectMode'] : null;
        $this->container['monitorProcess'] = isset($data['monitorProcess']) ? $data['monitorProcess'] : null;
        $this->container['privilegedProcessList'] = isset($data['privilegedProcessList']) ? $data['privilegedProcessList'] : null;
        $this->container['privilegedChild'] = isset($data['privilegedChild']) ? $data['privilegedChild'] : null;
        $this->container['protectDirectoryInfoList'] = isset($data['protectDirectoryInfoList']) ? $data['protectDirectoryInfoList'] : null;
        $this->container['excludeFileTypes'] = isset($data['excludeFileTypes']) ? $data['excludeFileTypes'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['protectedContainerNums'] = isset($data['protectedContainerNums']) ? $data['protectedContainerNums'] : null;
        $this->container['protectedEventNums'] = isset($data['protectedEventNums']) ? $data['protectedEventNums'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['containerWtpInfo'] = isset($data['containerWtpInfo']) ? $data['containerWtpInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectMode']) && !preg_match("/^alarm|block$/", $this->container['protectMode'])) {
                $invalidProperties[] = "invalid value for 'protectMode', must be conform to the pattern /^alarm|block$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^not_protect|protected|partial_protected|protect_failed|redundant$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^not_protect|protected|partial_protected|protect_failed|redundant$/.";
            }
            if (!is_null($this->container['protectedContainerNums']) && ($this->container['protectedContainerNums'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'protectedContainerNums', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['protectedContainerNums']) && ($this->container['protectedContainerNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedContainerNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedEventNums']) && ($this->container['protectedEventNums'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'protectedEventNums', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['protectedEventNums']) && ($this->container['protectedEventNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedEventNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 网页防篡改配置id **取值范围**: 字符长度1-64位
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
    * @param string|null $id **参数解释**: 网页防篡改配置id **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets protectMode
    *  **参数解释**: 防护模式 **取值范围**: - alarm：告警模式 - block：拦截模式
    *
    * @return string|null
    */
    public function getProtectMode()
    {
        return $this->container['protectMode'];
    }

    /**
    * Sets protectMode
    *
    * @param string|null $protectMode **参数解释**: 防护模式 **取值范围**: - alarm：告警模式 - block：拦截模式
    *
    * @return $this
    */
    public function setProtectMode($protectMode)
    {
        $this->container['protectMode'] = $protectMode;
        return $this;
    }

    /**
    * Gets monitorProcess
    *  **参数解释**: 是否对篡改行为进行进程监控 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程
    *
    * @return bool|null
    */
    public function getMonitorProcess()
    {
        return $this->container['monitorProcess'];
    }

    /**
    * Sets monitorProcess
    *
    * @param bool|null $monitorProcess **参数解释**: 是否对篡改行为进行进程监控 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程
    *
    * @return $this
    */
    public function setMonitorProcess($monitorProcess)
    {
        $this->container['monitorProcess'] = $monitorProcess;
        return $this;
    }

    /**
    * Gets privilegedProcessList
    *  **参数解释**: 特权进程路径列表 **取值范围**: 最少0条，最多10条
    *
    * @return string[]|null
    */
    public function getPrivilegedProcessList()
    {
        return $this->container['privilegedProcessList'];
    }

    /**
    * Sets privilegedProcessList
    *
    * @param string[]|null $privilegedProcessList **参数解释**: 特权进程路径列表 **取值范围**: 最少0条，最多10条
    *
    * @return $this
    */
    public function setPrivilegedProcessList($privilegedProcessList)
    {
        $this->container['privilegedProcessList'] = $privilegedProcessList;
        return $this;
    }

    /**
    * Gets privilegedChild
    *  **参数解释**: 特权进程的子进程是否仍享有特权 **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程
    *
    * @return bool|null
    */
    public function getPrivilegedChild()
    {
        return $this->container['privilegedChild'];
    }

    /**
    * Sets privilegedChild
    *
    * @param bool|null $privilegedChild **参数解释**: 特权进程的子进程是否仍享有特权 **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程
    *
    * @return $this
    */
    public function setPrivilegedChild($privilegedChild)
    {
        $this->container['privilegedChild'] = $privilegedChild;
        return $this;
    }

    /**
    * Gets protectDirectoryInfoList
    *  **参数解释**： 防护目录信息 **取值范围**： 最少1条，最多50条
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectDirectoryResponseInfo[]|null
    */
    public function getProtectDirectoryInfoList()
    {
        return $this->container['protectDirectoryInfoList'];
    }

    /**
    * Sets protectDirectoryInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectDirectoryResponseInfo[]|null $protectDirectoryInfoList **参数解释**： 防护目录信息 **取值范围**： 最少1条，最多50条
    *
    * @return $this
    */
    public function setProtectDirectoryInfoList($protectDirectoryInfoList)
    {
        $this->container['protectDirectoryInfoList'] = $protectDirectoryInfoList;
        return $this;
    }

    /**
    * Gets excludeFileTypes
    *  **参数解释**： 防护排除的文件类型列表 **取值范围**： 最少0条，最多10条
    *
    * @return string[]|null
    */
    public function getExcludeFileTypes()
    {
        return $this->container['excludeFileTypes'];
    }

    /**
    * Sets excludeFileTypes
    *
    * @param string[]|null $excludeFileTypes **参数解释**： 防护排除的文件类型列表 **取值范围**： 最少0条，最多10条
    *
    * @return $this
    */
    public function setExcludeFileTypes($excludeFileTypes)
    {
        $this->container['excludeFileTypes'] = $excludeFileTypes;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 防护状态 **取值范围**: - not_protect：未防护 - protected：防护中 - partial_protected：部分防护 - protect_failed：防护失败 - redundant：防护冗余
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
    * @param string|null $status **参数解释**: 防护状态 **取值范围**: - not_protect：未防护 - protected：防护中 - partial_protected：部分防护 - protect_failed：防护失败 - redundant：防护冗余
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets protectedContainerNums
    *  **参数解释**: 防护中的容器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProtectedContainerNums()
    {
        return $this->container['protectedContainerNums'];
    }

    /**
    * Sets protectedContainerNums
    *
    * @param int|null $protectedContainerNums **参数解释**: 防护中的容器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProtectedContainerNums($protectedContainerNums)
    {
        $this->container['protectedContainerNums'] = $protectedContainerNums;
        return $this;
    }

    /**
    * Gets protectedEventNums
    *  **参数解释**: 当前防护配置产生的防护事件数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProtectedEventNums()
    {
        return $this->container['protectedEventNums'];
    }

    /**
    * Sets protectedEventNums
    *
    * @param int|null $protectedEventNums **参数解释**: 当前防护配置产生的防护事件数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProtectedEventNums($protectedEventNums)
    {
        $this->container['protectedEventNums'] = $protectedEventNums;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**: 防护配置绑定的配额id **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**: 防护配置绑定的配额id **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets containerWtpInfo
    *  containerWtpInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfo|null
    */
    public function getContainerWtpInfo()
    {
        return $this->container['containerWtpInfo'];
    }

    /**
    * Sets containerWtpInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectionConfigResponseInfoContainerWtpInfo|null $containerWtpInfo containerWtpInfo
    *
    * @return $this
    */
    public function setContainerWtpInfo($containerWtpInfo)
    {
        $this->container['containerWtpInfo'] = $containerWtpInfo;
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

