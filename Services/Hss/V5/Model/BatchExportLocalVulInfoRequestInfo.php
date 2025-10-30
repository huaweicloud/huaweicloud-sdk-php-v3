<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchExportLocalVulInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchExportLocalVulInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageIdList  要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id）
    * operateAll  若为true全量查询，可筛选条件全部查询
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -app_vul : 应用漏洞
    * handleStatus  漏洞处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**:   - unscan : 未扫描。   - success : 扫描完成。   - scanning : 扫描中。   - failed : 扫描失败。   - download_failed : 下载失败。   - image_oversized : 镜像超大。   - waiting_for_scan : 等待扫描。   - image_scan_stop : 扫描终止。 **默认取值**: 不涉及
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasContainer  **参数解释**: 是否存在容器 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  导出镜像漏洞时的漏洞id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageIdList' => 'string[]',
            'operateAll' => 'bool',
            'vulType' => 'string',
            'handleStatus' => 'string',
            'scanStatus' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageSize' => 'int',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int',
            'hasContainer' => 'bool',
            'vulIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageIdList  要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id）
    * operateAll  若为true全量查询，可筛选条件全部查询
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -app_vul : 应用漏洞
    * handleStatus  漏洞处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**:   - unscan : 未扫描。   - success : 扫描完成。   - scanning : 扫描中。   - failed : 扫描失败。   - download_failed : 下载失败。   - image_oversized : 镜像超大。   - waiting_for_scan : 等待扫描。   - image_scan_stop : 扫描终止。 **默认取值**: 不涉及
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasContainer  **参数解释**: 是否存在容器 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  导出镜像漏洞时的漏洞id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageIdList' => null,
        'operateAll' => null,
        'vulType' => null,
        'handleStatus' => null,
        'scanStatus' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageSize' => 'int64',
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64',
        'hasContainer' => null,
        'vulIdList' => null
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
    * imageIdList  要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id）
    * operateAll  若为true全量查询，可筛选条件全部查询
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -app_vul : 应用漏洞
    * handleStatus  漏洞处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**:   - unscan : 未扫描。   - success : 扫描完成。   - scanning : 扫描中。   - failed : 扫描失败。   - download_failed : 下载失败。   - image_oversized : 镜像超大。   - waiting_for_scan : 等待扫描。   - image_scan_stop : 扫描终止。 **默认取值**: 不涉及
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasContainer  **参数解释**: 是否存在容器 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  导出镜像漏洞时的漏洞id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageIdList' => 'image_id_list',
            'operateAll' => 'operate_all',
            'vulType' => 'vul_type',
            'handleStatus' => 'handle_status',
            'scanStatus' => 'scan_status',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageSize' => 'image_size',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time',
            'hasContainer' => 'has_container',
            'vulIdList' => 'vul_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageIdList  要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id）
    * operateAll  若为true全量查询，可筛选条件全部查询
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -app_vul : 应用漏洞
    * handleStatus  漏洞处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**:   - unscan : 未扫描。   - success : 扫描完成。   - scanning : 扫描中。   - failed : 扫描失败。   - download_failed : 下载失败。   - image_oversized : 镜像超大。   - waiting_for_scan : 等待扫描。   - image_scan_stop : 扫描终止。 **默认取值**: 不涉及
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasContainer  **参数解释**: 是否存在容器 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  导出镜像漏洞时的漏洞id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'imageIdList' => 'setImageIdList',
            'operateAll' => 'setOperateAll',
            'vulType' => 'setVulType',
            'handleStatus' => 'setHandleStatus',
            'scanStatus' => 'setScanStatus',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageSize' => 'setImageSize',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime',
            'hasContainer' => 'setHasContainer',
            'vulIdList' => 'setVulIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageIdList  要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id）
    * operateAll  若为true全量查询，可筛选条件全部查询
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -app_vul : 应用漏洞
    * handleStatus  漏洞处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**:   - unscan : 未扫描。   - success : 扫描完成。   - scanning : 扫描中。   - failed : 扫描失败。   - download_failed : 下载失败。   - image_oversized : 镜像超大。   - waiting_for_scan : 等待扫描。   - image_scan_stop : 扫描终止。 **默认取值**: 不涉及
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasContainer  **参数解释**: 是否存在容器 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  导出镜像漏洞时的漏洞id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'imageIdList' => 'getImageIdList',
            'operateAll' => 'getOperateAll',
            'vulType' => 'getVulType',
            'handleStatus' => 'getHandleStatus',
            'scanStatus' => 'getScanStatus',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageSize' => 'getImageSize',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime',
            'hasContainer' => 'getHasContainer',
            'vulIdList' => 'getVulIdList'
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
        $this->container['imageIdList'] = isset($data['imageIdList']) ? $data['imageIdList'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
        $this->container['hasContainer'] = isset($data['hasContainer']) ? $data['hasContainer'] : null;
        $this->container['vulIdList'] = isset($data['vulIdList']) ? $data['vulIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulType']) && !preg_match("/^linux_vul|app_vul$/", $this->container['vulType'])) {
                $invalidProperties[] = "invalid value for 'vulType', must be conform to the pattern /^linux_vul|app_vul$/.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleStatus']) && !preg_match("/^unhandled|handled$/", $this->container['handleStatus'])) {
                $invalidProperties[] = "invalid value for 'handleStatus', must be conform to the pattern /^unhandled|handled$/.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanStatus']) && !preg_match("/^(unscan|success|scanning|failed|download_failed|image_oversized|waiting_for_scan|image_scan_stop)$/", $this->container['scanStatus'])) {
                $invalidProperties[] = "invalid value for 'scanStatus', must be conform to the pattern /^(unscan|success|scanning|failed|download_failed|image_oversized|waiting_for_scan|image_scan_stop)$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be bigger than or equal to 0.";
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
    * Gets imageIdList
    *  要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id）
    *
    * @return string[]|null
    */
    public function getImageIdList()
    {
        return $this->container['imageIdList'];
    }

    /**
    * Sets imageIdList
    *
    * @param string[]|null $imageIdList 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id）
    *
    * @return $this
    */
    public function setImageIdList($imageIdList)
    {
        $this->container['imageIdList'] = $imageIdList;
        return $this;
    }

    /**
    * Gets operateAll
    *  若为true全量查询，可筛选条件全部查询
    *
    * @return bool|null
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool|null $operateAll 若为true全量查询，可筛选条件全部查询
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets vulType
    *  漏洞类型，包含如下：   -linux_vul : linux漏洞   -app_vul : 应用漏洞
    *
    * @return string|null
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string|null $vulType 漏洞类型，包含如下：   -linux_vul : linux漏洞   -app_vul : 应用漏洞
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets handleStatus
    *  漏洞处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus 漏洞处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**:   - unscan : 未扫描。   - success : 扫描完成。   - scanning : 扫描中。   - failed : 扫描失败。   - download_failed : 下载失败。   - image_oversized : 镜像超大。   - waiting_for_scan : 等待扫描。   - image_scan_stop : 扫描终止。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**:   - unscan : 未扫描。   - success : 扫描完成。   - scanning : 扫描中。   - failed : 扫描失败。   - download_failed : 下载失败。   - image_oversized : 镜像超大。   - waiting_for_scan : 等待扫描。   - image_scan_stop : 扫描终止。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  镜像版本
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion 镜像版本
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageSize
    *  镜像大小
    *
    * @return int|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int|null $imageSize 镜像大小
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets startLatestUpdateTime
    *  创建时间开始日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getStartLatestUpdateTime()
    {
        return $this->container['startLatestUpdateTime'];
    }

    /**
    * Sets startLatestUpdateTime
    *
    * @param int|null $startLatestUpdateTime 创建时间开始日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setStartLatestUpdateTime($startLatestUpdateTime)
    {
        $this->container['startLatestUpdateTime'] = $startLatestUpdateTime;
        return $this;
    }

    /**
    * Gets endLatestUpdateTime
    *  创建时间结束日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getEndLatestUpdateTime()
    {
        return $this->container['endLatestUpdateTime'];
    }

    /**
    * Sets endLatestUpdateTime
    *
    * @param int|null $endLatestUpdateTime 创建时间结束日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setEndLatestUpdateTime($endLatestUpdateTime)
    {
        $this->container['endLatestUpdateTime'] = $endLatestUpdateTime;
        return $this;
    }

    /**
    * Gets startLatestScanTime
    *  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getStartLatestScanTime()
    {
        return $this->container['startLatestScanTime'];
    }

    /**
    * Sets startLatestScanTime
    *
    * @param int|null $startLatestScanTime 最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setStartLatestScanTime($startLatestScanTime)
    {
        $this->container['startLatestScanTime'] = $startLatestScanTime;
        return $this;
    }

    /**
    * Gets endLatestScanTime
    *  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getEndLatestScanTime()
    {
        return $this->container['endLatestScanTime'];
    }

    /**
    * Sets endLatestScanTime
    *
    * @param int|null $endLatestScanTime 最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setEndLatestScanTime($endLatestScanTime)
    {
        $this->container['endLatestScanTime'] = $endLatestScanTime;
        return $this;
    }

    /**
    * Gets hasContainer
    *  **参数解释**: 是否存在容器 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getHasContainer()
    {
        return $this->container['hasContainer'];
    }

    /**
    * Sets hasContainer
    *
    * @param bool|null $hasContainer **参数解释**: 是否存在容器 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasContainer($hasContainer)
    {
        $this->container['hasContainer'] = $hasContainer;
        return $this;
    }

    /**
    * Gets vulIdList
    *  导出镜像漏洞时的漏洞id列表
    *
    * @return string[]|null
    */
    public function getVulIdList()
    {
        return $this->container['vulIdList'];
    }

    /**
    * Sets vulIdList
    *
    * @param string[]|null $vulIdList 导出镜像漏洞时的漏洞id列表
    *
    * @return $this
    */
    public function setVulIdList($vulIdList)
    {
        $this->container['vulIdList'] = $vulIdList;
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

