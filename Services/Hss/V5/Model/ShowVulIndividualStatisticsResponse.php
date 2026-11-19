<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulIndividualStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulIndividualStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * needUrgentRepairNum  **参数解释**: 需要紧急修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * unhandledNum  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * existedVulHostNum  **参数解释**: 存在漏洞的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * todayHandledNum  **参数解释**: 今日处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * allHandledNum  **参数解释**: 累计处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * vulLibrarySupportedNum  **参数解释**: 漏洞库已支持漏洞数 **取值范围**: 最小值0，最大值2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulUnhandledNum  **参数解释**: 未处置的Linux漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * windowsVulUnhandledNum  **参数解释**: 未处置的Windows漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * webCmsVulUnhandledNum  **参数解释**: 未处置的Web CMS漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * appVulUnhandledNum  **参数解释**: 未处置的应用漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * urgentVulUnhandledNum  **参数解释**: 未处置的应急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * needRebootHostNum  **参数解释**: 修复成功待重启的主机数量 **取值范围**: 最小值0，最大值2147483647
    * maxVulHandleNum  **参数解释**: 单次最大可处置的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'needUrgentRepairNum' => 'int',
            'unhandledNum' => 'int',
            'existedVulHostNum' => 'int',
            'todayHandledNum' => 'int',
            'allHandledNum' => 'int',
            'vulLibrarySupportedNum' => 'int',
            'vulLibraryUpdateTime' => 'int',
            'linuxVulUnhandledNum' => 'int',
            'windowsVulUnhandledNum' => 'int',
            'webCmsVulUnhandledNum' => 'int',
            'appVulUnhandledNum' => 'int',
            'urgentVulUnhandledNum' => 'int',
            'needRebootHostNum' => 'int',
            'maxVulHandleNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * needUrgentRepairNum  **参数解释**: 需要紧急修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * unhandledNum  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * existedVulHostNum  **参数解释**: 存在漏洞的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * todayHandledNum  **参数解释**: 今日处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * allHandledNum  **参数解释**: 累计处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * vulLibrarySupportedNum  **参数解释**: 漏洞库已支持漏洞数 **取值范围**: 最小值0，最大值2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulUnhandledNum  **参数解释**: 未处置的Linux漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * windowsVulUnhandledNum  **参数解释**: 未处置的Windows漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * webCmsVulUnhandledNum  **参数解释**: 未处置的Web CMS漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * appVulUnhandledNum  **参数解释**: 未处置的应用漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * urgentVulUnhandledNum  **参数解释**: 未处置的应急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * needRebootHostNum  **参数解释**: 修复成功待重启的主机数量 **取值范围**: 最小值0，最大值2147483647
    * maxVulHandleNum  **参数解释**: 单次最大可处置的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'needUrgentRepairNum' => 'int32',
        'unhandledNum' => 'int32',
        'existedVulHostNum' => 'int32',
        'todayHandledNum' => 'int32',
        'allHandledNum' => 'int32',
        'vulLibrarySupportedNum' => 'int32',
        'vulLibraryUpdateTime' => 'int64',
        'linuxVulUnhandledNum' => 'int32',
        'windowsVulUnhandledNum' => 'int32',
        'webCmsVulUnhandledNum' => 'int32',
        'appVulUnhandledNum' => 'int32',
        'urgentVulUnhandledNum' => 'int32',
        'needRebootHostNum' => 'int32',
        'maxVulHandleNum' => 'int32'
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
    * needUrgentRepairNum  **参数解释**: 需要紧急修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * unhandledNum  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * existedVulHostNum  **参数解释**: 存在漏洞的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * todayHandledNum  **参数解释**: 今日处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * allHandledNum  **参数解释**: 累计处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * vulLibrarySupportedNum  **参数解释**: 漏洞库已支持漏洞数 **取值范围**: 最小值0，最大值2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulUnhandledNum  **参数解释**: 未处置的Linux漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * windowsVulUnhandledNum  **参数解释**: 未处置的Windows漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * webCmsVulUnhandledNum  **参数解释**: 未处置的Web CMS漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * appVulUnhandledNum  **参数解释**: 未处置的应用漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * urgentVulUnhandledNum  **参数解释**: 未处置的应急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * needRebootHostNum  **参数解释**: 修复成功待重启的主机数量 **取值范围**: 最小值0，最大值2147483647
    * maxVulHandleNum  **参数解释**: 单次最大可处置的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'needUrgentRepairNum' => 'need_urgent_repair_num',
            'unhandledNum' => 'unhandled_num',
            'existedVulHostNum' => 'existed_vul_host_num',
            'todayHandledNum' => 'today_handled_num',
            'allHandledNum' => 'all_handled_num',
            'vulLibrarySupportedNum' => 'vul_library_supported_num',
            'vulLibraryUpdateTime' => 'vul_library_update_time',
            'linuxVulUnhandledNum' => 'linux_vul_unhandled_num',
            'windowsVulUnhandledNum' => 'windows_vul_unhandled_num',
            'webCmsVulUnhandledNum' => 'web_cms_vul_unhandled_num',
            'appVulUnhandledNum' => 'app_vul_unhandled_num',
            'urgentVulUnhandledNum' => 'urgent_vul_unhandled_num',
            'needRebootHostNum' => 'need_reboot_host_num',
            'maxVulHandleNum' => 'max_vul_handle_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * needUrgentRepairNum  **参数解释**: 需要紧急修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * unhandledNum  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * existedVulHostNum  **参数解释**: 存在漏洞的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * todayHandledNum  **参数解释**: 今日处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * allHandledNum  **参数解释**: 累计处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * vulLibrarySupportedNum  **参数解释**: 漏洞库已支持漏洞数 **取值范围**: 最小值0，最大值2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulUnhandledNum  **参数解释**: 未处置的Linux漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * windowsVulUnhandledNum  **参数解释**: 未处置的Windows漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * webCmsVulUnhandledNum  **参数解释**: 未处置的Web CMS漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * appVulUnhandledNum  **参数解释**: 未处置的应用漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * urgentVulUnhandledNum  **参数解释**: 未处置的应急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * needRebootHostNum  **参数解释**: 修复成功待重启的主机数量 **取值范围**: 最小值0，最大值2147483647
    * maxVulHandleNum  **参数解释**: 单次最大可处置的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'needUrgentRepairNum' => 'setNeedUrgentRepairNum',
            'unhandledNum' => 'setUnhandledNum',
            'existedVulHostNum' => 'setExistedVulHostNum',
            'todayHandledNum' => 'setTodayHandledNum',
            'allHandledNum' => 'setAllHandledNum',
            'vulLibrarySupportedNum' => 'setVulLibrarySupportedNum',
            'vulLibraryUpdateTime' => 'setVulLibraryUpdateTime',
            'linuxVulUnhandledNum' => 'setLinuxVulUnhandledNum',
            'windowsVulUnhandledNum' => 'setWindowsVulUnhandledNum',
            'webCmsVulUnhandledNum' => 'setWebCmsVulUnhandledNum',
            'appVulUnhandledNum' => 'setAppVulUnhandledNum',
            'urgentVulUnhandledNum' => 'setUrgentVulUnhandledNum',
            'needRebootHostNum' => 'setNeedRebootHostNum',
            'maxVulHandleNum' => 'setMaxVulHandleNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * needUrgentRepairNum  **参数解释**: 需要紧急修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * unhandledNum  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * existedVulHostNum  **参数解释**: 存在漏洞的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * todayHandledNum  **参数解释**: 今日处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * allHandledNum  **参数解释**: 累计处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * vulLibrarySupportedNum  **参数解释**: 漏洞库已支持漏洞数 **取值范围**: 最小值0，最大值2147483647
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulUnhandledNum  **参数解释**: 未处置的Linux漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * windowsVulUnhandledNum  **参数解释**: 未处置的Windows漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * webCmsVulUnhandledNum  **参数解释**: 未处置的Web CMS漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * appVulUnhandledNum  **参数解释**: 未处置的应用漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * urgentVulUnhandledNum  **参数解释**: 未处置的应急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * needRebootHostNum  **参数解释**: 修复成功待重启的主机数量 **取值范围**: 最小值0，最大值2147483647
    * maxVulHandleNum  **参数解释**: 单次最大可处置的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'needUrgentRepairNum' => 'getNeedUrgentRepairNum',
            'unhandledNum' => 'getUnhandledNum',
            'existedVulHostNum' => 'getExistedVulHostNum',
            'todayHandledNum' => 'getTodayHandledNum',
            'allHandledNum' => 'getAllHandledNum',
            'vulLibrarySupportedNum' => 'getVulLibrarySupportedNum',
            'vulLibraryUpdateTime' => 'getVulLibraryUpdateTime',
            'linuxVulUnhandledNum' => 'getLinuxVulUnhandledNum',
            'windowsVulUnhandledNum' => 'getWindowsVulUnhandledNum',
            'webCmsVulUnhandledNum' => 'getWebCmsVulUnhandledNum',
            'appVulUnhandledNum' => 'getAppVulUnhandledNum',
            'urgentVulUnhandledNum' => 'getUrgentVulUnhandledNum',
            'needRebootHostNum' => 'getNeedRebootHostNum',
            'maxVulHandleNum' => 'getMaxVulHandleNum'
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
        $this->container['needUrgentRepairNum'] = isset($data['needUrgentRepairNum']) ? $data['needUrgentRepairNum'] : null;
        $this->container['unhandledNum'] = isset($data['unhandledNum']) ? $data['unhandledNum'] : null;
        $this->container['existedVulHostNum'] = isset($data['existedVulHostNum']) ? $data['existedVulHostNum'] : null;
        $this->container['todayHandledNum'] = isset($data['todayHandledNum']) ? $data['todayHandledNum'] : null;
        $this->container['allHandledNum'] = isset($data['allHandledNum']) ? $data['allHandledNum'] : null;
        $this->container['vulLibrarySupportedNum'] = isset($data['vulLibrarySupportedNum']) ? $data['vulLibrarySupportedNum'] : null;
        $this->container['vulLibraryUpdateTime'] = isset($data['vulLibraryUpdateTime']) ? $data['vulLibraryUpdateTime'] : null;
        $this->container['linuxVulUnhandledNum'] = isset($data['linuxVulUnhandledNum']) ? $data['linuxVulUnhandledNum'] : null;
        $this->container['windowsVulUnhandledNum'] = isset($data['windowsVulUnhandledNum']) ? $data['windowsVulUnhandledNum'] : null;
        $this->container['webCmsVulUnhandledNum'] = isset($data['webCmsVulUnhandledNum']) ? $data['webCmsVulUnhandledNum'] : null;
        $this->container['appVulUnhandledNum'] = isset($data['appVulUnhandledNum']) ? $data['appVulUnhandledNum'] : null;
        $this->container['urgentVulUnhandledNum'] = isset($data['urgentVulUnhandledNum']) ? $data['urgentVulUnhandledNum'] : null;
        $this->container['needRebootHostNum'] = isset($data['needRebootHostNum']) ? $data['needRebootHostNum'] : null;
        $this->container['maxVulHandleNum'] = isset($data['maxVulHandleNum']) ? $data['maxVulHandleNum'] : null;
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
    * Gets needUrgentRepairNum
    *  **参数解释**: 需要紧急修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getNeedUrgentRepairNum()
    {
        return $this->container['needUrgentRepairNum'];
    }

    /**
    * Sets needUrgentRepairNum
    *
    * @param int|null $needUrgentRepairNum **参数解释**: 需要紧急修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setNeedUrgentRepairNum($needUrgentRepairNum)
    {
        $this->container['needUrgentRepairNum'] = $needUrgentRepairNum;
        return $this;
    }

    /**
    * Gets unhandledNum
    *  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnhandledNum()
    {
        return $this->container['unhandledNum'];
    }

    /**
    * Sets unhandledNum
    *
    * @param int|null $unhandledNum **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnhandledNum($unhandledNum)
    {
        $this->container['unhandledNum'] = $unhandledNum;
        return $this;
    }

    /**
    * Gets existedVulHostNum
    *  **参数解释**: 存在漏洞的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getExistedVulHostNum()
    {
        return $this->container['existedVulHostNum'];
    }

    /**
    * Sets existedVulHostNum
    *
    * @param int|null $existedVulHostNum **参数解释**: 存在漏洞的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setExistedVulHostNum($existedVulHostNum)
    {
        $this->container['existedVulHostNum'] = $existedVulHostNum;
        return $this;
    }

    /**
    * Gets todayHandledNum
    *  **参数解释**: 今日处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTodayHandledNum()
    {
        return $this->container['todayHandledNum'];
    }

    /**
    * Sets todayHandledNum
    *
    * @param int|null $todayHandledNum **参数解释**: 今日处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTodayHandledNum($todayHandledNum)
    {
        $this->container['todayHandledNum'] = $todayHandledNum;
        return $this;
    }

    /**
    * Gets allHandledNum
    *  **参数解释**: 累计处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAllHandledNum()
    {
        return $this->container['allHandledNum'];
    }

    /**
    * Sets allHandledNum
    *
    * @param int|null $allHandledNum **参数解释**: 累计处理的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAllHandledNum($allHandledNum)
    {
        $this->container['allHandledNum'] = $allHandledNum;
        return $this;
    }

    /**
    * Gets vulLibrarySupportedNum
    *  **参数解释**: 漏洞库已支持漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulLibrarySupportedNum()
    {
        return $this->container['vulLibrarySupportedNum'];
    }

    /**
    * Sets vulLibrarySupportedNum
    *
    * @param int|null $vulLibrarySupportedNum **参数解释**: 漏洞库已支持漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulLibrarySupportedNum($vulLibrarySupportedNum)
    {
        $this->container['vulLibrarySupportedNum'] = $vulLibrarySupportedNum;
        return $this;
    }

    /**
    * Gets vulLibraryUpdateTime
    *  **参数解释**: 漏洞库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getVulLibraryUpdateTime()
    {
        return $this->container['vulLibraryUpdateTime'];
    }

    /**
    * Sets vulLibraryUpdateTime
    *
    * @param int|null $vulLibraryUpdateTime **参数解释**: 漏洞库更新时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setVulLibraryUpdateTime($vulLibraryUpdateTime)
    {
        $this->container['vulLibraryUpdateTime'] = $vulLibraryUpdateTime;
        return $this;
    }

    /**
    * Gets linuxVulUnhandledNum
    *  **参数解释**: 未处置的Linux漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getLinuxVulUnhandledNum()
    {
        return $this->container['linuxVulUnhandledNum'];
    }

    /**
    * Sets linuxVulUnhandledNum
    *
    * @param int|null $linuxVulUnhandledNum **参数解释**: 未处置的Linux漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLinuxVulUnhandledNum($linuxVulUnhandledNum)
    {
        $this->container['linuxVulUnhandledNum'] = $linuxVulUnhandledNum;
        return $this;
    }

    /**
    * Gets windowsVulUnhandledNum
    *  **参数解释**: 未处置的Windows漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getWindowsVulUnhandledNum()
    {
        return $this->container['windowsVulUnhandledNum'];
    }

    /**
    * Sets windowsVulUnhandledNum
    *
    * @param int|null $windowsVulUnhandledNum **参数解释**: 未处置的Windows漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setWindowsVulUnhandledNum($windowsVulUnhandledNum)
    {
        $this->container['windowsVulUnhandledNum'] = $windowsVulUnhandledNum;
        return $this;
    }

    /**
    * Gets webCmsVulUnhandledNum
    *  **参数解释**: 未处置的Web CMS漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getWebCmsVulUnhandledNum()
    {
        return $this->container['webCmsVulUnhandledNum'];
    }

    /**
    * Sets webCmsVulUnhandledNum
    *
    * @param int|null $webCmsVulUnhandledNum **参数解释**: 未处置的Web CMS漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setWebCmsVulUnhandledNum($webCmsVulUnhandledNum)
    {
        $this->container['webCmsVulUnhandledNum'] = $webCmsVulUnhandledNum;
        return $this;
    }

    /**
    * Gets appVulUnhandledNum
    *  **参数解释**: 未处置的应用漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAppVulUnhandledNum()
    {
        return $this->container['appVulUnhandledNum'];
    }

    /**
    * Sets appVulUnhandledNum
    *
    * @param int|null $appVulUnhandledNum **参数解释**: 未处置的应用漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAppVulUnhandledNum($appVulUnhandledNum)
    {
        $this->container['appVulUnhandledNum'] = $appVulUnhandledNum;
        return $this;
    }

    /**
    * Gets urgentVulUnhandledNum
    *  **参数解释**: 未处置的应急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUrgentVulUnhandledNum()
    {
        return $this->container['urgentVulUnhandledNum'];
    }

    /**
    * Sets urgentVulUnhandledNum
    *
    * @param int|null $urgentVulUnhandledNum **参数解释**: 未处置的应急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUrgentVulUnhandledNum($urgentVulUnhandledNum)
    {
        $this->container['urgentVulUnhandledNum'] = $urgentVulUnhandledNum;
        return $this;
    }

    /**
    * Gets needRebootHostNum
    *  **参数解释**: 修复成功待重启的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getNeedRebootHostNum()
    {
        return $this->container['needRebootHostNum'];
    }

    /**
    * Sets needRebootHostNum
    *
    * @param int|null $needRebootHostNum **参数解释**: 修复成功待重启的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setNeedRebootHostNum($needRebootHostNum)
    {
        $this->container['needRebootHostNum'] = $needRebootHostNum;
        return $this;
    }

    /**
    * Gets maxVulHandleNum
    *  **参数解释**: 单次最大可处置的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getMaxVulHandleNum()
    {
        return $this->container['maxVulHandleNum'];
    }

    /**
    * Sets maxVulHandleNum
    *
    * @param int|null $maxVulHandleNum **参数解释**: 单次最大可处置的漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMaxVulHandleNum($maxVulHandleNum)
    {
        $this->container['maxVulHandleNum'] = $maxVulHandleNum;
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

