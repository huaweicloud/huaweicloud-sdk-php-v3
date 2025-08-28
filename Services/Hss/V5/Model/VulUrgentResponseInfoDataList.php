<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulUrgentResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulUrgentResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * repairSuccessNum  **参数解释**: 当前漏洞修复成功次数 **取值范围**: 最小值0，最大值1000000
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectedBusiness  **参数解释**: 是否影响业务 **取值范围**: - true：是。 - false：否。
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 服务器私网IP **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * status  **参数解释**： 漏洞状态 **取值范围**： 字符长度0-32位
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'labelList' => 'string[]',
            'repairPriority' => 'string',
            'repairSuccessNum' => 'int',
            'vulId' => 'string',
            'vulName' => 'string',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulUrgentResponseInfoCveList[]',
            'isAffectedBusiness' => 'bool',
            'hostId' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'hostName' => 'string',
            'assetValue' => 'string',
            'status' => 'string',
            'firstScanTime' => 'int',
            'scanTime' => 'int',
            'disabledOperateTypes' => '\HuaweiCloud\SDK\Hss\V5\Model\VulUrgentResponseInfoDisabledOperateTypes[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * repairSuccessNum  **参数解释**: 当前漏洞修复成功次数 **取值范围**: 最小值0，最大值1000000
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectedBusiness  **参数解释**: 是否影响业务 **取值范围**: - true：是。 - false：否。
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 服务器私网IP **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * status  **参数解释**： 漏洞状态 **取值范围**： 字符长度0-32位
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'labelList' => null,
        'repairPriority' => null,
        'repairSuccessNum' => 'int32',
        'vulId' => null,
        'vulName' => null,
        'cveList' => null,
        'isAffectedBusiness' => null,
        'hostId' => null,
        'publicIp' => null,
        'privateIp' => null,
        'hostName' => null,
        'assetValue' => null,
        'status' => null,
        'firstScanTime' => 'int64',
        'scanTime' => 'int64',
        'disabledOperateTypes' => null
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
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * repairSuccessNum  **参数解释**: 当前漏洞修复成功次数 **取值范围**: 最小值0，最大值1000000
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectedBusiness  **参数解释**: 是否影响业务 **取值范围**: - true：是。 - false：否。
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 服务器私网IP **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * status  **参数解释**： 漏洞状态 **取值范围**： 字符长度0-32位
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'labelList' => 'label_list',
            'repairPriority' => 'repair_priority',
            'repairSuccessNum' => 'repair_success_num',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'cveList' => 'cve_list',
            'isAffectedBusiness' => 'is_affected_business',
            'hostId' => 'host_id',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'hostName' => 'host_name',
            'assetValue' => 'asset_value',
            'status' => 'status',
            'firstScanTime' => 'first_scan_time',
            'scanTime' => 'scan_time',
            'disabledOperateTypes' => 'disabled_operate_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * repairSuccessNum  **参数解释**: 当前漏洞修复成功次数 **取值范围**: 最小值0，最大值1000000
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectedBusiness  **参数解释**: 是否影响业务 **取值范围**: - true：是。 - false：否。
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 服务器私网IP **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * status  **参数解释**： 漏洞状态 **取值范围**： 字符长度0-32位
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @var string[]
    */
    protected static $setters = [
            'labelList' => 'setLabelList',
            'repairPriority' => 'setRepairPriority',
            'repairSuccessNum' => 'setRepairSuccessNum',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'cveList' => 'setCveList',
            'isAffectedBusiness' => 'setIsAffectedBusiness',
            'hostId' => 'setHostId',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'hostName' => 'setHostName',
            'assetValue' => 'setAssetValue',
            'status' => 'setStatus',
            'firstScanTime' => 'setFirstScanTime',
            'scanTime' => 'setScanTime',
            'disabledOperateTypes' => 'setDisabledOperateTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * repairSuccessNum  **参数解释**: 当前漏洞修复成功次数 **取值范围**: 最小值0，最大值1000000
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectedBusiness  **参数解释**: 是否影响业务 **取值范围**: - true：是。 - false：否。
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64
    * publicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 服务器私网IP **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * status  **参数解释**： 漏洞状态 **取值范围**： 字符长度0-32位
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @var string[]
    */
    protected static $getters = [
            'labelList' => 'getLabelList',
            'repairPriority' => 'getRepairPriority',
            'repairSuccessNum' => 'getRepairSuccessNum',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'cveList' => 'getCveList',
            'isAffectedBusiness' => 'getIsAffectedBusiness',
            'hostId' => 'getHostId',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'hostName' => 'getHostName',
            'assetValue' => 'getAssetValue',
            'status' => 'getStatus',
            'firstScanTime' => 'getFirstScanTime',
            'scanTime' => 'getScanTime',
            'disabledOperateTypes' => 'getDisabledOperateTypes'
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
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
        $this->container['repairSuccessNum'] = isset($data['repairSuccessNum']) ? $data['repairSuccessNum'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['isAffectedBusiness'] = isset($data['isAffectedBusiness']) ? $data['isAffectedBusiness'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['disabledOperateTypes'] = isset($data['disabledOperateTypes']) ? $data['disabledOperateTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 32)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
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
    * Gets labelList
    *  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return string[]|null
    */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
    * Sets labelList
    *
    * @param string[]|null $labelList **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets repairPriority
    *  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    *
    * @return string|null
    */
    public function getRepairPriority()
    {
        return $this->container['repairPriority'];
    }

    /**
    * Sets repairPriority
    *
    * @param string|null $repairPriority **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
        return $this;
    }

    /**
    * Gets repairSuccessNum
    *  **参数解释**: 当前漏洞修复成功次数 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getRepairSuccessNum()
    {
        return $this->container['repairSuccessNum'];
    }

    /**
    * Sets repairSuccessNum
    *
    * @param int|null $repairSuccessNum **参数解释**: 当前漏洞修复成功次数 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setRepairSuccessNum($repairSuccessNum)
    {
        $this->container['repairSuccessNum'] = $repairSuccessNum;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets cveList
    *  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulUrgentResponseInfoCveList[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulUrgentResponseInfoCveList[]|null $cveList **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
        return $this;
    }

    /**
    * Gets isAffectedBusiness
    *  **参数解释**: 是否影响业务 **取值范围**: - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getIsAffectedBusiness()
    {
        return $this->container['isAffectedBusiness'];
    }

    /**
    * Sets isAffectedBusiness
    *
    * @param bool|null $isAffectedBusiness **参数解释**: 是否影响业务 **取值范围**: - true：是。 - false：否。
    *
    * @return $this
    */
    public function setIsAffectedBusiness($isAffectedBusiness)
    {
        $this->container['isAffectedBusiness'] = $isAffectedBusiness;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机ID **取值范围**: 字符长度1-64
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 主机ID **取值范围**: 字符长度1-64
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私网IP **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**: 服务器私网IP **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 主机名称 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 主机名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**: 修复优先级 **取值范围**: - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 漏洞状态 **取值范围**： 字符长度0-32位
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
    * @param string|null $status **参数解释**： 漏洞状态 **取值范围**： 字符长度0-32位
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param int|null $firstScanTime **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets disabledOperateTypes
    *  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulUrgentResponseInfoDisabledOperateTypes[]|null
    */
    public function getDisabledOperateTypes()
    {
        return $this->container['disabledOperateTypes'];
    }

    /**
    * Sets disabledOperateTypes
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulUrgentResponseInfoDisabledOperateTypes[]|null $disabledOperateTypes **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @return $this
    */
    public function setDisabledOperateTypes($disabledOperateTypes)
    {
        $this->container['disabledOperateTypes'] = $disabledOperateTypes;
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

