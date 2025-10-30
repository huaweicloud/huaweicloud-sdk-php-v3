<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulAffectedStaticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulAffectedStaticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulNum  **参数解释**: 影响的漏洞数量(按漏洞编号计算) **取值范围**: 最小值0，最大值2147483647
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * imageNum  **参数解释**: 影响镜像数量 **取值范围**: 最小值0，最大值2147483647
    * containerNum  **参数解释**: 影响容器数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 按漏洞类型的统计值，当select_type为all_host或空时，有该字段
    * totalVulNum  **参数解释**: 影响的总漏洞条数(主机+漏洞 以此维度计算) **取值范围**: 最小值0，最大值2147483647
    * extendTips  **参数解释**: 漏洞修复提示 **取值范围**: - cce_kernel_vul_tips：cce内核修复提示信息 - ubuntu_pro_tips：ubuntu pro的修复提示
    * extendTextTips  **参数解释**: 漏洞修复提示文本 **取值范围**: 字符长度0-4096位
    * disabledOperateTypes  disabledOperateTypes
    * cceVulNum  **参数解释**: CCE漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * basicHostNum  **参数解释**: 基础版主机数量 **取值范围**: 最小值0，最大值2147483647
    * cceDisabledVulList  **参数解释**: CCE主机漏洞禁止修复列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulNum' => 'int',
            'hostNum' => 'int',
            'imageNum' => 'int',
            'containerNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoDataList[]',
            'totalVulNum' => 'int',
            'extendTips' => 'string',
            'extendTextTips' => 'string',
            'disabledOperateTypes' => '\HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoDisabledOperateTypes',
            'cceVulNum' => 'int',
            'basicHostNum' => 'int',
            'cceDisabledVulList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoCceDisabledVulList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulNum  **参数解释**: 影响的漏洞数量(按漏洞编号计算) **取值范围**: 最小值0，最大值2147483647
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * imageNum  **参数解释**: 影响镜像数量 **取值范围**: 最小值0，最大值2147483647
    * containerNum  **参数解释**: 影响容器数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 按漏洞类型的统计值，当select_type为all_host或空时，有该字段
    * totalVulNum  **参数解释**: 影响的总漏洞条数(主机+漏洞 以此维度计算) **取值范围**: 最小值0，最大值2147483647
    * extendTips  **参数解释**: 漏洞修复提示 **取值范围**: - cce_kernel_vul_tips：cce内核修复提示信息 - ubuntu_pro_tips：ubuntu pro的修复提示
    * extendTextTips  **参数解释**: 漏洞修复提示文本 **取值范围**: 字符长度0-4096位
    * disabledOperateTypes  disabledOperateTypes
    * cceVulNum  **参数解释**: CCE漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * basicHostNum  **参数解释**: 基础版主机数量 **取值范围**: 最小值0，最大值2147483647
    * cceDisabledVulList  **参数解释**: CCE主机漏洞禁止修复列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulNum' => 'int32',
        'hostNum' => 'int32',
        'imageNum' => 'int32',
        'containerNum' => 'int32',
        'dataList' => null,
        'totalVulNum' => 'int32',
        'extendTips' => null,
        'extendTextTips' => null,
        'disabledOperateTypes' => null,
        'cceVulNum' => 'int32',
        'basicHostNum' => 'int32',
        'cceDisabledVulList' => null
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
    * vulNum  **参数解释**: 影响的漏洞数量(按漏洞编号计算) **取值范围**: 最小值0，最大值2147483647
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * imageNum  **参数解释**: 影响镜像数量 **取值范围**: 最小值0，最大值2147483647
    * containerNum  **参数解释**: 影响容器数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 按漏洞类型的统计值，当select_type为all_host或空时，有该字段
    * totalVulNum  **参数解释**: 影响的总漏洞条数(主机+漏洞 以此维度计算) **取值范围**: 最小值0，最大值2147483647
    * extendTips  **参数解释**: 漏洞修复提示 **取值范围**: - cce_kernel_vul_tips：cce内核修复提示信息 - ubuntu_pro_tips：ubuntu pro的修复提示
    * extendTextTips  **参数解释**: 漏洞修复提示文本 **取值范围**: 字符长度0-4096位
    * disabledOperateTypes  disabledOperateTypes
    * cceVulNum  **参数解释**: CCE漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * basicHostNum  **参数解释**: 基础版主机数量 **取值范围**: 最小值0，最大值2147483647
    * cceDisabledVulList  **参数解释**: CCE主机漏洞禁止修复列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulNum' => 'vul_num',
            'hostNum' => 'host_num',
            'imageNum' => 'image_num',
            'containerNum' => 'container_num',
            'dataList' => 'data_list',
            'totalVulNum' => 'total_vul_num',
            'extendTips' => 'extend_tips',
            'extendTextTips' => 'extend_text_tips',
            'disabledOperateTypes' => 'disabled_operate_types',
            'cceVulNum' => 'cce_vul_num',
            'basicHostNum' => 'basic_host_num',
            'cceDisabledVulList' => 'cce_disabled_vul_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulNum  **参数解释**: 影响的漏洞数量(按漏洞编号计算) **取值范围**: 最小值0，最大值2147483647
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * imageNum  **参数解释**: 影响镜像数量 **取值范围**: 最小值0，最大值2147483647
    * containerNum  **参数解释**: 影响容器数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 按漏洞类型的统计值，当select_type为all_host或空时，有该字段
    * totalVulNum  **参数解释**: 影响的总漏洞条数(主机+漏洞 以此维度计算) **取值范围**: 最小值0，最大值2147483647
    * extendTips  **参数解释**: 漏洞修复提示 **取值范围**: - cce_kernel_vul_tips：cce内核修复提示信息 - ubuntu_pro_tips：ubuntu pro的修复提示
    * extendTextTips  **参数解释**: 漏洞修复提示文本 **取值范围**: 字符长度0-4096位
    * disabledOperateTypes  disabledOperateTypes
    * cceVulNum  **参数解释**: CCE漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * basicHostNum  **参数解释**: 基础版主机数量 **取值范围**: 最小值0，最大值2147483647
    * cceDisabledVulList  **参数解释**: CCE主机漏洞禁止修复列表
    *
    * @var string[]
    */
    protected static $setters = [
            'vulNum' => 'setVulNum',
            'hostNum' => 'setHostNum',
            'imageNum' => 'setImageNum',
            'containerNum' => 'setContainerNum',
            'dataList' => 'setDataList',
            'totalVulNum' => 'setTotalVulNum',
            'extendTips' => 'setExtendTips',
            'extendTextTips' => 'setExtendTextTips',
            'disabledOperateTypes' => 'setDisabledOperateTypes',
            'cceVulNum' => 'setCceVulNum',
            'basicHostNum' => 'setBasicHostNum',
            'cceDisabledVulList' => 'setCceDisabledVulList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulNum  **参数解释**: 影响的漏洞数量(按漏洞编号计算) **取值范围**: 最小值0，最大值2147483647
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * imageNum  **参数解释**: 影响镜像数量 **取值范围**: 最小值0，最大值2147483647
    * containerNum  **参数解释**: 影响容器数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 按漏洞类型的统计值，当select_type为all_host或空时，有该字段
    * totalVulNum  **参数解释**: 影响的总漏洞条数(主机+漏洞 以此维度计算) **取值范围**: 最小值0，最大值2147483647
    * extendTips  **参数解释**: 漏洞修复提示 **取值范围**: - cce_kernel_vul_tips：cce内核修复提示信息 - ubuntu_pro_tips：ubuntu pro的修复提示
    * extendTextTips  **参数解释**: 漏洞修复提示文本 **取值范围**: 字符长度0-4096位
    * disabledOperateTypes  disabledOperateTypes
    * cceVulNum  **参数解释**: CCE漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * basicHostNum  **参数解释**: 基础版主机数量 **取值范围**: 最小值0，最大值2147483647
    * cceDisabledVulList  **参数解释**: CCE主机漏洞禁止修复列表
    *
    * @var string[]
    */
    protected static $getters = [
            'vulNum' => 'getVulNum',
            'hostNum' => 'getHostNum',
            'imageNum' => 'getImageNum',
            'containerNum' => 'getContainerNum',
            'dataList' => 'getDataList',
            'totalVulNum' => 'getTotalVulNum',
            'extendTips' => 'getExtendTips',
            'extendTextTips' => 'getExtendTextTips',
            'disabledOperateTypes' => 'getDisabledOperateTypes',
            'cceVulNum' => 'getCceVulNum',
            'basicHostNum' => 'getBasicHostNum',
            'cceDisabledVulList' => 'getCceDisabledVulList'
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
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['imageNum'] = isset($data['imageNum']) ? $data['imageNum'] : null;
        $this->container['containerNum'] = isset($data['containerNum']) ? $data['containerNum'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['totalVulNum'] = isset($data['totalVulNum']) ? $data['totalVulNum'] : null;
        $this->container['extendTips'] = isset($data['extendTips']) ? $data['extendTips'] : null;
        $this->container['extendTextTips'] = isset($data['extendTextTips']) ? $data['extendTextTips'] : null;
        $this->container['disabledOperateTypes'] = isset($data['disabledOperateTypes']) ? $data['disabledOperateTypes'] : null;
        $this->container['cceVulNum'] = isset($data['cceVulNum']) ? $data['cceVulNum'] : null;
        $this->container['basicHostNum'] = isset($data['basicHostNum']) ? $data['basicHostNum'] : null;
        $this->container['cceDisabledVulList'] = isset($data['cceDisabledVulList']) ? $data['cceDisabledVulList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalVulNum']) && ($this->container['totalVulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalVulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalVulNum']) && ($this->container['totalVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cceVulNum']) && ($this->container['cceVulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cceVulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cceVulNum']) && ($this->container['cceVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'cceVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['basicHostNum']) && ($this->container['basicHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'basicHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['basicHostNum']) && ($this->container['basicHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'basicHostNum', must be bigger than or equal to 0.";
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
    * Gets vulNum
    *  **参数解释**: 影响的漏洞数量(按漏洞编号计算) **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum **参数解释**: 影响的漏洞数量(按漏洞编号计算) **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets imageNum
    *  **参数解释**: 影响镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getImageNum()
    {
        return $this->container['imageNum'];
    }

    /**
    * Sets imageNum
    *
    * @param int|null $imageNum **参数解释**: 影响镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setImageNum($imageNum)
    {
        $this->container['imageNum'] = $imageNum;
        return $this;
    }

    /**
    * Gets containerNum
    *  **参数解释**: 影响容器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getContainerNum()
    {
        return $this->container['containerNum'];
    }

    /**
    * Sets containerNum
    *
    * @param int|null $containerNum **参数解释**: 影响容器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setContainerNum($containerNum)
    {
        $this->container['containerNum'] = $containerNum;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: 按漏洞类型的统计值，当select_type为all_host或空时，有该字段
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoDataList[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoDataList[]|null $dataList **参数解释**: 按漏洞类型的统计值，当select_type为all_host或空时，有该字段
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets totalVulNum
    *  **参数解释**: 影响的总漏洞条数(主机+漏洞 以此维度计算) **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalVulNum()
    {
        return $this->container['totalVulNum'];
    }

    /**
    * Sets totalVulNum
    *
    * @param int|null $totalVulNum **参数解释**: 影响的总漏洞条数(主机+漏洞 以此维度计算) **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalVulNum($totalVulNum)
    {
        $this->container['totalVulNum'] = $totalVulNum;
        return $this;
    }

    /**
    * Gets extendTips
    *  **参数解释**: 漏洞修复提示 **取值范围**: - cce_kernel_vul_tips：cce内核修复提示信息 - ubuntu_pro_tips：ubuntu pro的修复提示
    *
    * @return string|null
    */
    public function getExtendTips()
    {
        return $this->container['extendTips'];
    }

    /**
    * Sets extendTips
    *
    * @param string|null $extendTips **参数解释**: 漏洞修复提示 **取值范围**: - cce_kernel_vul_tips：cce内核修复提示信息 - ubuntu_pro_tips：ubuntu pro的修复提示
    *
    * @return $this
    */
    public function setExtendTips($extendTips)
    {
        $this->container['extendTips'] = $extendTips;
        return $this;
    }

    /**
    * Gets extendTextTips
    *  **参数解释**: 漏洞修复提示文本 **取值范围**: 字符长度0-4096位
    *
    * @return string|null
    */
    public function getExtendTextTips()
    {
        return $this->container['extendTextTips'];
    }

    /**
    * Sets extendTextTips
    *
    * @param string|null $extendTextTips **参数解释**: 漏洞修复提示文本 **取值范围**: 字符长度0-4096位
    *
    * @return $this
    */
    public function setExtendTextTips($extendTextTips)
    {
        $this->container['extendTextTips'] = $extendTextTips;
        return $this;
    }

    /**
    * Gets disabledOperateTypes
    *  disabledOperateTypes
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoDisabledOperateTypes|null
    */
    public function getDisabledOperateTypes()
    {
        return $this->container['disabledOperateTypes'];
    }

    /**
    * Sets disabledOperateTypes
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoDisabledOperateTypes|null $disabledOperateTypes disabledOperateTypes
    *
    * @return $this
    */
    public function setDisabledOperateTypes($disabledOperateTypes)
    {
        $this->container['disabledOperateTypes'] = $disabledOperateTypes;
        return $this;
    }

    /**
    * Gets cceVulNum
    *  **参数解释**: CCE漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCceVulNum()
    {
        return $this->container['cceVulNum'];
    }

    /**
    * Sets cceVulNum
    *
    * @param int|null $cceVulNum **参数解释**: CCE漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCceVulNum($cceVulNum)
    {
        $this->container['cceVulNum'] = $cceVulNum;
        return $this;
    }

    /**
    * Gets basicHostNum
    *  **参数解释**: 基础版主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getBasicHostNum()
    {
        return $this->container['basicHostNum'];
    }

    /**
    * Sets basicHostNum
    *
    * @param int|null $basicHostNum **参数解释**: 基础版主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setBasicHostNum($basicHostNum)
    {
        $this->container['basicHostNum'] = $basicHostNum;
        return $this;
    }

    /**
    * Gets cceDisabledVulList
    *  **参数解释**: CCE主机漏洞禁止修复列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoCceDisabledVulList[]|null
    */
    public function getCceDisabledVulList()
    {
        return $this->container['cceDisabledVulList'];
    }

    /**
    * Sets cceDisabledVulList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulAffectedStatisticsResponseInfoCceDisabledVulList[]|null $cceDisabledVulList **参数解释**: CCE主机漏洞禁止修复列表
    *
    * @return $this
    */
    public function setCceDisabledVulList($cceDisabledVulList)
    {
        $this->container['cceDisabledVulList'] = $cceDisabledVulList;
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

