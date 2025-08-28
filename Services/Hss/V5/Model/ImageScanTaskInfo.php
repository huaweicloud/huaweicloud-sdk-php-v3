<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageScanTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageScanTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度1-256位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-256位
    * beginTime  **参数解释**： 任务开始时间 **取值范围**： 最小值0，最大值9223372036854775807
    * endTime  **参数解释**： 任务结束时间 **取值范围**： 最小值0，最大值9223372036854775807
    * remainMin  **参数解释**： 任务剩余时间 **取值范围**： 最小值0，最大值2147483547
    * taskType  **参数解释**： 任务细分类型 **取值范围**： - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。
    * imageType  **参数解释**： 镜像类型 **取值范围**： - local：本地镜像。 - registry：仓库镜像。
    * taskStatus  **参数解释**： 扫描进度状态 **取值范围**： - 100：扫描完成。 - 0-100：扫描进度。 - -1：扫描终止。 - -2：扫描超时。 - -3：扫描异常。
    * scanScope  **参数解释**： 扫描风险类型 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。
    * rateLimit  **参数解释**： 扫描限速 单位：个/h **取值范围**： 最小值0，最大值1000
    * isAll  **参数解释**： 扫描全部镜像 **取值范围**： - true：扫描全部镜像。 - false：指定镜像扫描。
    * failedNum  **参数解释**： 扫描失败镜像数量 **取值范围**： 最小值0，最大值2147483547
    * successNum  **参数解释**： 扫描成功镜像数量 **取值范围**： 最小值0，最大值2147483547
    * totalNum  **参数解释**： 任务关联的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * riskyNum  **参数解释**： 有漏洞风险、基线风险、恶意文件的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * syncTaskType  **参数解释**： 同步任务类型 **取值范围**： 字符长度1-256位
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    * failedImages  **参数解释**： 失败镜像列表 **取值范围**： 最小值0，最大值2147483547
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'policyId' => 'string',
            'taskName' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'remainMin' => 'int',
            'taskType' => 'string',
            'imageType' => 'string',
            'taskStatus' => 'int',
            'scanScope' => 'int',
            'rateLimit' => 'int',
            'isAll' => 'bool',
            'failedNum' => 'int',
            'successNum' => 'int',
            'totalNum' => 'int',
            'riskyNum' => 'int',
            'syncTaskType' => 'string',
            'failedReason' => 'string',
            'failedImages' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageScanTaskInfoFailedImages[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度1-256位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-256位
    * beginTime  **参数解释**： 任务开始时间 **取值范围**： 最小值0，最大值9223372036854775807
    * endTime  **参数解释**： 任务结束时间 **取值范围**： 最小值0，最大值9223372036854775807
    * remainMin  **参数解释**： 任务剩余时间 **取值范围**： 最小值0，最大值2147483547
    * taskType  **参数解释**： 任务细分类型 **取值范围**： - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。
    * imageType  **参数解释**： 镜像类型 **取值范围**： - local：本地镜像。 - registry：仓库镜像。
    * taskStatus  **参数解释**： 扫描进度状态 **取值范围**： - 100：扫描完成。 - 0-100：扫描进度。 - -1：扫描终止。 - -2：扫描超时。 - -3：扫描异常。
    * scanScope  **参数解释**： 扫描风险类型 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。
    * rateLimit  **参数解释**： 扫描限速 单位：个/h **取值范围**： 最小值0，最大值1000
    * isAll  **参数解释**： 扫描全部镜像 **取值范围**： - true：扫描全部镜像。 - false：指定镜像扫描。
    * failedNum  **参数解释**： 扫描失败镜像数量 **取值范围**： 最小值0，最大值2147483547
    * successNum  **参数解释**： 扫描成功镜像数量 **取值范围**： 最小值0，最大值2147483547
    * totalNum  **参数解释**： 任务关联的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * riskyNum  **参数解释**： 有漏洞风险、基线风险、恶意文件的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * syncTaskType  **参数解释**： 同步任务类型 **取值范围**： 字符长度1-256位
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    * failedImages  **参数解释**： 失败镜像列表 **取值范围**： 最小值0，最大值2147483547
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'policyId' => null,
        'taskName' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'remainMin' => 'int64',
        'taskType' => null,
        'imageType' => null,
        'taskStatus' => null,
        'scanScope' => 'int32',
        'rateLimit' => 'int32',
        'isAll' => null,
        'failedNum' => null,
        'successNum' => null,
        'totalNum' => null,
        'riskyNum' => null,
        'syncTaskType' => null,
        'failedReason' => null,
        'failedImages' => null
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
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度1-256位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-256位
    * beginTime  **参数解释**： 任务开始时间 **取值范围**： 最小值0，最大值9223372036854775807
    * endTime  **参数解释**： 任务结束时间 **取值范围**： 最小值0，最大值9223372036854775807
    * remainMin  **参数解释**： 任务剩余时间 **取值范围**： 最小值0，最大值2147483547
    * taskType  **参数解释**： 任务细分类型 **取值范围**： - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。
    * imageType  **参数解释**： 镜像类型 **取值范围**： - local：本地镜像。 - registry：仓库镜像。
    * taskStatus  **参数解释**： 扫描进度状态 **取值范围**： - 100：扫描完成。 - 0-100：扫描进度。 - -1：扫描终止。 - -2：扫描超时。 - -3：扫描异常。
    * scanScope  **参数解释**： 扫描风险类型 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。
    * rateLimit  **参数解释**： 扫描限速 单位：个/h **取值范围**： 最小值0，最大值1000
    * isAll  **参数解释**： 扫描全部镜像 **取值范围**： - true：扫描全部镜像。 - false：指定镜像扫描。
    * failedNum  **参数解释**： 扫描失败镜像数量 **取值范围**： 最小值0，最大值2147483547
    * successNum  **参数解释**： 扫描成功镜像数量 **取值范围**： 最小值0，最大值2147483547
    * totalNum  **参数解释**： 任务关联的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * riskyNum  **参数解释**： 有漏洞风险、基线风险、恶意文件的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * syncTaskType  **参数解释**： 同步任务类型 **取值范围**： 字符长度1-256位
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    * failedImages  **参数解释**： 失败镜像列表 **取值范围**： 最小值0，最大值2147483547
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'policyId' => 'policy_id',
            'taskName' => 'task_name',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'remainMin' => 'remain_min',
            'taskType' => 'task_type',
            'imageType' => 'image_type',
            'taskStatus' => 'task_status',
            'scanScope' => 'scan_scope',
            'rateLimit' => 'rate_limit',
            'isAll' => 'is_all',
            'failedNum' => 'failed_num',
            'successNum' => 'success_num',
            'totalNum' => 'total_num',
            'riskyNum' => 'risky_num',
            'syncTaskType' => 'sync_task_type',
            'failedReason' => 'failed_reason',
            'failedImages' => 'failed_images'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度1-256位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-256位
    * beginTime  **参数解释**： 任务开始时间 **取值范围**： 最小值0，最大值9223372036854775807
    * endTime  **参数解释**： 任务结束时间 **取值范围**： 最小值0，最大值9223372036854775807
    * remainMin  **参数解释**： 任务剩余时间 **取值范围**： 最小值0，最大值2147483547
    * taskType  **参数解释**： 任务细分类型 **取值范围**： - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。
    * imageType  **参数解释**： 镜像类型 **取值范围**： - local：本地镜像。 - registry：仓库镜像。
    * taskStatus  **参数解释**： 扫描进度状态 **取值范围**： - 100：扫描完成。 - 0-100：扫描进度。 - -1：扫描终止。 - -2：扫描超时。 - -3：扫描异常。
    * scanScope  **参数解释**： 扫描风险类型 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。
    * rateLimit  **参数解释**： 扫描限速 单位：个/h **取值范围**： 最小值0，最大值1000
    * isAll  **参数解释**： 扫描全部镜像 **取值范围**： - true：扫描全部镜像。 - false：指定镜像扫描。
    * failedNum  **参数解释**： 扫描失败镜像数量 **取值范围**： 最小值0，最大值2147483547
    * successNum  **参数解释**： 扫描成功镜像数量 **取值范围**： 最小值0，最大值2147483547
    * totalNum  **参数解释**： 任务关联的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * riskyNum  **参数解释**： 有漏洞风险、基线风险、恶意文件的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * syncTaskType  **参数解释**： 同步任务类型 **取值范围**： 字符长度1-256位
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    * failedImages  **参数解释**： 失败镜像列表 **取值范围**： 最小值0，最大值2147483547
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'policyId' => 'setPolicyId',
            'taskName' => 'setTaskName',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'remainMin' => 'setRemainMin',
            'taskType' => 'setTaskType',
            'imageType' => 'setImageType',
            'taskStatus' => 'setTaskStatus',
            'scanScope' => 'setScanScope',
            'rateLimit' => 'setRateLimit',
            'isAll' => 'setIsAll',
            'failedNum' => 'setFailedNum',
            'successNum' => 'setSuccessNum',
            'totalNum' => 'setTotalNum',
            'riskyNum' => 'setRiskyNum',
            'syncTaskType' => 'setSyncTaskType',
            'failedReason' => 'setFailedReason',
            'failedImages' => 'setFailedImages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度1-256位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-256位
    * beginTime  **参数解释**： 任务开始时间 **取值范围**： 最小值0，最大值9223372036854775807
    * endTime  **参数解释**： 任务结束时间 **取值范围**： 最小值0，最大值9223372036854775807
    * remainMin  **参数解释**： 任务剩余时间 **取值范围**： 最小值0，最大值2147483547
    * taskType  **参数解释**： 任务细分类型 **取值范围**： - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。
    * imageType  **参数解释**： 镜像类型 **取值范围**： - local：本地镜像。 - registry：仓库镜像。
    * taskStatus  **参数解释**： 扫描进度状态 **取值范围**： - 100：扫描完成。 - 0-100：扫描进度。 - -1：扫描终止。 - -2：扫描超时。 - -3：扫描异常。
    * scanScope  **参数解释**： 扫描风险类型 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。
    * rateLimit  **参数解释**： 扫描限速 单位：个/h **取值范围**： 最小值0，最大值1000
    * isAll  **参数解释**： 扫描全部镜像 **取值范围**： - true：扫描全部镜像。 - false：指定镜像扫描。
    * failedNum  **参数解释**： 扫描失败镜像数量 **取值范围**： 最小值0，最大值2147483547
    * successNum  **参数解释**： 扫描成功镜像数量 **取值范围**： 最小值0，最大值2147483547
    * totalNum  **参数解释**： 任务关联的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * riskyNum  **参数解释**： 有漏洞风险、基线风险、恶意文件的镜像总数 **取值范围**： 最小值0，最大值2147483547
    * syncTaskType  **参数解释**： 同步任务类型 **取值范围**： 字符长度1-256位
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    * failedImages  **参数解释**： 失败镜像列表 **取值范围**： 最小值0，最大值2147483547
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'policyId' => 'getPolicyId',
            'taskName' => 'getTaskName',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'remainMin' => 'getRemainMin',
            'taskType' => 'getTaskType',
            'imageType' => 'getImageType',
            'taskStatus' => 'getTaskStatus',
            'scanScope' => 'getScanScope',
            'rateLimit' => 'getRateLimit',
            'isAll' => 'getIsAll',
            'failedNum' => 'getFailedNum',
            'successNum' => 'getSuccessNum',
            'totalNum' => 'getTotalNum',
            'riskyNum' => 'getRiskyNum',
            'syncTaskType' => 'getSyncTaskType',
            'failedReason' => 'getFailedReason',
            'failedImages' => 'getFailedImages'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['remainMin'] = isset($data['remainMin']) ? $data['remainMin'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['scanScope'] = isset($data['scanScope']) ? $data['scanScope'] : null;
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['isAll'] = isset($data['isAll']) ? $data['isAll'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['riskyNum'] = isset($data['riskyNum']) ? $data['riskyNum'] : null;
        $this->container['syncTaskType'] = isset($data['syncTaskType']) ? $data['syncTaskType'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['failedImages'] = isset($data['failedImages']) ? $data['failedImages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remainMin']) && ($this->container['remainMin'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'remainMin', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['remainMin']) && ($this->container['remainMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'remainMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskStatus']) && ($this->container['taskStatus'] > 100)) {
                $invalidProperties[] = "invalid value for 'taskStatus', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['taskStatus']) && ($this->container['taskStatus'] < -3)) {
                $invalidProperties[] = "invalid value for 'taskStatus', must be bigger than or equal to -3.";
            }
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'successNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskyNum']) && ($this->container['riskyNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'riskyNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['riskyNum']) && ($this->container['riskyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['syncTaskType']) && (mb_strlen($this->container['syncTaskType']) > 256)) {
                $invalidProperties[] = "invalid value for 'syncTaskType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['syncTaskType']) && (mb_strlen($this->container['syncTaskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'syncTaskType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 128)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  **参数解释**： 任务ID **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**： 任务ID **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets policyId
    *  **参数解释**： 策略ID **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId **参数解释**： 策略ID **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**： 任务名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**： 任务名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**： 任务开始时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime **参数解释**： 任务开始时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 任务结束时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 任务结束时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets remainMin
    *  **参数解释**： 任务剩余时间 **取值范围**： 最小值0，最大值2147483547
    *
    * @return int|null
    */
    public function getRemainMin()
    {
        return $this->container['remainMin'];
    }

    /**
    * Sets remainMin
    *
    * @param int|null $remainMin **参数解释**： 任务剩余时间 **取值范围**： 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setRemainMin($remainMin)
    {
        $this->container['remainMin'] = $remainMin;
        return $this;
    }

    /**
    * Gets taskType
    *  **参数解释**： 任务细分类型 **取值范围**： - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType **参数解释**： 任务细分类型 **取值范围**： - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**： 镜像类型 **取值范围**： - local：本地镜像。 - registry：仓库镜像。
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释**： 镜像类型 **取值范围**： - local：本地镜像。 - registry：仓库镜像。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets taskStatus
    *  **参数解释**： 扫描进度状态 **取值范围**： - 100：扫描完成。 - 0-100：扫描进度。 - -1：扫描终止。 - -2：扫描超时。 - -3：扫描异常。
    *
    * @return int|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param int|null $taskStatus **参数解释**： 扫描进度状态 **取值范围**： - 100：扫描完成。 - 0-100：扫描进度。 - -1：扫描终止。 - -2：扫描超时。 - -3：扫描异常。
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets scanScope
    *  **参数解释**： 扫描风险类型 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。
    *
    * @return int|null
    */
    public function getScanScope()
    {
        return $this->container['scanScope'];
    }

    /**
    * Sets scanScope
    *
    * @param int|null $scanScope **参数解释**： 扫描风险类型 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。
    *
    * @return $this
    */
    public function setScanScope($scanScope)
    {
        $this->container['scanScope'] = $scanScope;
        return $this;
    }

    /**
    * Gets rateLimit
    *  **参数解释**： 扫描限速 单位：个/h **取值范围**： 最小值0，最大值1000
    *
    * @return int|null
    */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
    * Sets rateLimit
    *
    * @param int|null $rateLimit **参数解释**： 扫描限速 单位：个/h **取值范围**： 最小值0，最大值1000
    *
    * @return $this
    */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;
        return $this;
    }

    /**
    * Gets isAll
    *  **参数解释**： 扫描全部镜像 **取值范围**： - true：扫描全部镜像。 - false：指定镜像扫描。
    *
    * @return bool|null
    */
    public function getIsAll()
    {
        return $this->container['isAll'];
    }

    /**
    * Sets isAll
    *
    * @param bool|null $isAll **参数解释**： 扫描全部镜像 **取值范围**： - true：扫描全部镜像。 - false：指定镜像扫描。
    *
    * @return $this
    */
    public function setIsAll($isAll)
    {
        $this->container['isAll'] = $isAll;
        return $this;
    }

    /**
    * Gets failedNum
    *  **参数解释**： 扫描失败镜像数量 **取值范围**： 最小值0，最大值2147483547
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum **参数解释**： 扫描失败镜像数量 **取值范围**： 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets successNum
    *  **参数解释**： 扫描成功镜像数量 **取值范围**： 最小值0，最大值2147483547
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum **参数解释**： 扫描成功镜像数量 **取值范围**： 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释**： 任务关联的镜像总数 **取值范围**： 最小值0，最大值2147483547
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum **参数解释**： 任务关联的镜像总数 **取值范围**： 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets riskyNum
    *  **参数解释**： 有漏洞风险、基线风险、恶意文件的镜像总数 **取值范围**： 最小值0，最大值2147483547
    *
    * @return int|null
    */
    public function getRiskyNum()
    {
        return $this->container['riskyNum'];
    }

    /**
    * Sets riskyNum
    *
    * @param int|null $riskyNum **参数解释**： 有漏洞风险、基线风险、恶意文件的镜像总数 **取值范围**： 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setRiskyNum($riskyNum)
    {
        $this->container['riskyNum'] = $riskyNum;
        return $this;
    }

    /**
    * Gets syncTaskType
    *  **参数解释**： 同步任务类型 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getSyncTaskType()
    {
        return $this->container['syncTaskType'];
    }

    /**
    * Sets syncTaskType
    *
    * @param string|null $syncTaskType **参数解释**： 同步任务类型 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setSyncTaskType($syncTaskType)
    {
        $this->container['syncTaskType'] = $syncTaskType;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets failedImages
    *  **参数解释**： 失败镜像列表 **取值范围**： 最小值0，最大值2147483547
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageScanTaskInfoFailedImages[]|null
    */
    public function getFailedImages()
    {
        return $this->container['failedImages'];
    }

    /**
    * Sets failedImages
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageScanTaskInfoFailedImages[]|null $failedImages **参数解释**： 失败镜像列表 **取值范围**： 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setFailedImages($failedImages)
    {
        $this->container['failedImages'] = $failedImages;
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

