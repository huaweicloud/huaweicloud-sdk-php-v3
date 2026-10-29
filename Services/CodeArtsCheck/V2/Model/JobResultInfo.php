<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * critical  **参数解释：** 严重问题数。 **取值范围：** ≥0
    * delaystatusCount  **参数解释：** 延迟上线问题数。 **取值范围：** ≥0
    * fatal  **参数解释：** 致命问题数。 **取值范围：** ≥0
    * general  **参数解释：** 一般问题数。 **取值范围：** ≥0
    * info  **参数解释：** 信息问题数。 **取值范围：** ≥0
    * prompt  **参数解释：** 提示问题数。 **取值范围：** ≥0
    * codeLine  **参数解释：** 扫描代码行数，不包括空行和注释行。 **取值范围：** ≥0
    * defectCount  **参数解释：** 缺陷总数。 **取值范围：** ≥0
    * dismissed  **参数解释：** 已忽略问题数。 **取值范围：** ≥0
    * fileTotal  **参数解释：** 文件总数。 **取值范围：** ≥0
    * fixed  **参数解释：** 已修复问题数。 **取值范围：** ≥0
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * newUnsolvedDefectCount  **参数解释：** 未解决且新增的问题数。 **取值范围：** ≥0
    * nonSecurityDefectCount  **参数解释：** 非安全问题数。 **取值范围：** ≥0
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * securityDefectCount  **参数解释：** 安全问题数。 **取值范围：** ≥0
    * solvedDefectCount  **参数解释：** 已解决的问题数。 **取值范围：** 不涉及。
    * unsolvedDefectCount  **参数解释：** 未解决的问题数。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'critical' => 'int',
            'delaystatusCount' => 'int',
            'fatal' => 'int',
            'general' => 'int',
            'info' => 'int',
            'prompt' => 'int',
            'codeLine' => 'int',
            'defectCount' => 'int',
            'dismissed' => 'int',
            'fileTotal' => 'int',
            'fixed' => 'int',
            'id' => 'string',
            'jobId' => 'string',
            'newUnsolvedDefectCount' => 'int',
            'nonSecurityDefectCount' => 'int',
            'reviewResult' => 'string',
            'securityDefectCount' => 'int',
            'solvedDefectCount' => 'int',
            'unsolvedDefectCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * critical  **参数解释：** 严重问题数。 **取值范围：** ≥0
    * delaystatusCount  **参数解释：** 延迟上线问题数。 **取值范围：** ≥0
    * fatal  **参数解释：** 致命问题数。 **取值范围：** ≥0
    * general  **参数解释：** 一般问题数。 **取值范围：** ≥0
    * info  **参数解释：** 信息问题数。 **取值范围：** ≥0
    * prompt  **参数解释：** 提示问题数。 **取值范围：** ≥0
    * codeLine  **参数解释：** 扫描代码行数，不包括空行和注释行。 **取值范围：** ≥0
    * defectCount  **参数解释：** 缺陷总数。 **取值范围：** ≥0
    * dismissed  **参数解释：** 已忽略问题数。 **取值范围：** ≥0
    * fileTotal  **参数解释：** 文件总数。 **取值范围：** ≥0
    * fixed  **参数解释：** 已修复问题数。 **取值范围：** ≥0
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * newUnsolvedDefectCount  **参数解释：** 未解决且新增的问题数。 **取值范围：** ≥0
    * nonSecurityDefectCount  **参数解释：** 非安全问题数。 **取值范围：** ≥0
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * securityDefectCount  **参数解释：** 安全问题数。 **取值范围：** ≥0
    * solvedDefectCount  **参数解释：** 已解决的问题数。 **取值范围：** 不涉及。
    * unsolvedDefectCount  **参数解释：** 未解决的问题数。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'critical' => null,
        'delaystatusCount' => null,
        'fatal' => null,
        'general' => null,
        'info' => null,
        'prompt' => null,
        'codeLine' => null,
        'defectCount' => null,
        'dismissed' => null,
        'fileTotal' => null,
        'fixed' => null,
        'id' => null,
        'jobId' => null,
        'newUnsolvedDefectCount' => null,
        'nonSecurityDefectCount' => null,
        'reviewResult' => null,
        'securityDefectCount' => null,
        'solvedDefectCount' => null,
        'unsolvedDefectCount' => null
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
    * critical  **参数解释：** 严重问题数。 **取值范围：** ≥0
    * delaystatusCount  **参数解释：** 延迟上线问题数。 **取值范围：** ≥0
    * fatal  **参数解释：** 致命问题数。 **取值范围：** ≥0
    * general  **参数解释：** 一般问题数。 **取值范围：** ≥0
    * info  **参数解释：** 信息问题数。 **取值范围：** ≥0
    * prompt  **参数解释：** 提示问题数。 **取值范围：** ≥0
    * codeLine  **参数解释：** 扫描代码行数，不包括空行和注释行。 **取值范围：** ≥0
    * defectCount  **参数解释：** 缺陷总数。 **取值范围：** ≥0
    * dismissed  **参数解释：** 已忽略问题数。 **取值范围：** ≥0
    * fileTotal  **参数解释：** 文件总数。 **取值范围：** ≥0
    * fixed  **参数解释：** 已修复问题数。 **取值范围：** ≥0
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * newUnsolvedDefectCount  **参数解释：** 未解决且新增的问题数。 **取值范围：** ≥0
    * nonSecurityDefectCount  **参数解释：** 非安全问题数。 **取值范围：** ≥0
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * securityDefectCount  **参数解释：** 安全问题数。 **取值范围：** ≥0
    * solvedDefectCount  **参数解释：** 已解决的问题数。 **取值范围：** 不涉及。
    * unsolvedDefectCount  **参数解释：** 未解决的问题数。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'critical' => 'CRITICAL',
            'delaystatusCount' => 'DELAYSTATUS_COUNT',
            'fatal' => 'FATAL',
            'general' => 'GENERAL',
            'info' => 'INFO',
            'prompt' => 'PROMPT',
            'codeLine' => 'codeLine',
            'defectCount' => 'defectCount',
            'dismissed' => 'dismissed',
            'fileTotal' => 'fileTotal',
            'fixed' => 'fixed',
            'id' => 'id',
            'jobId' => 'jobId',
            'newUnsolvedDefectCount' => 'newUnsolvedDefectCount',
            'nonSecurityDefectCount' => 'nonSecurityDefectCount',
            'reviewResult' => 'reviewResult',
            'securityDefectCount' => 'securityDefectCount',
            'solvedDefectCount' => 'solvedDefectCount',
            'unsolvedDefectCount' => 'unsolvedDefectCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * critical  **参数解释：** 严重问题数。 **取值范围：** ≥0
    * delaystatusCount  **参数解释：** 延迟上线问题数。 **取值范围：** ≥0
    * fatal  **参数解释：** 致命问题数。 **取值范围：** ≥0
    * general  **参数解释：** 一般问题数。 **取值范围：** ≥0
    * info  **参数解释：** 信息问题数。 **取值范围：** ≥0
    * prompt  **参数解释：** 提示问题数。 **取值范围：** ≥0
    * codeLine  **参数解释：** 扫描代码行数，不包括空行和注释行。 **取值范围：** ≥0
    * defectCount  **参数解释：** 缺陷总数。 **取值范围：** ≥0
    * dismissed  **参数解释：** 已忽略问题数。 **取值范围：** ≥0
    * fileTotal  **参数解释：** 文件总数。 **取值范围：** ≥0
    * fixed  **参数解释：** 已修复问题数。 **取值范围：** ≥0
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * newUnsolvedDefectCount  **参数解释：** 未解决且新增的问题数。 **取值范围：** ≥0
    * nonSecurityDefectCount  **参数解释：** 非安全问题数。 **取值范围：** ≥0
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * securityDefectCount  **参数解释：** 安全问题数。 **取值范围：** ≥0
    * solvedDefectCount  **参数解释：** 已解决的问题数。 **取值范围：** 不涉及。
    * unsolvedDefectCount  **参数解释：** 未解决的问题数。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'critical' => 'setCritical',
            'delaystatusCount' => 'setDelaystatusCount',
            'fatal' => 'setFatal',
            'general' => 'setGeneral',
            'info' => 'setInfo',
            'prompt' => 'setPrompt',
            'codeLine' => 'setCodeLine',
            'defectCount' => 'setDefectCount',
            'dismissed' => 'setDismissed',
            'fileTotal' => 'setFileTotal',
            'fixed' => 'setFixed',
            'id' => 'setId',
            'jobId' => 'setJobId',
            'newUnsolvedDefectCount' => 'setNewUnsolvedDefectCount',
            'nonSecurityDefectCount' => 'setNonSecurityDefectCount',
            'reviewResult' => 'setReviewResult',
            'securityDefectCount' => 'setSecurityDefectCount',
            'solvedDefectCount' => 'setSolvedDefectCount',
            'unsolvedDefectCount' => 'setUnsolvedDefectCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * critical  **参数解释：** 严重问题数。 **取值范围：** ≥0
    * delaystatusCount  **参数解释：** 延迟上线问题数。 **取值范围：** ≥0
    * fatal  **参数解释：** 致命问题数。 **取值范围：** ≥0
    * general  **参数解释：** 一般问题数。 **取值范围：** ≥0
    * info  **参数解释：** 信息问题数。 **取值范围：** ≥0
    * prompt  **参数解释：** 提示问题数。 **取值范围：** ≥0
    * codeLine  **参数解释：** 扫描代码行数，不包括空行和注释行。 **取值范围：** ≥0
    * defectCount  **参数解释：** 缺陷总数。 **取值范围：** ≥0
    * dismissed  **参数解释：** 已忽略问题数。 **取值范围：** ≥0
    * fileTotal  **参数解释：** 文件总数。 **取值范围：** ≥0
    * fixed  **参数解释：** 已修复问题数。 **取值范围：** ≥0
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    * newUnsolvedDefectCount  **参数解释：** 未解决且新增的问题数。 **取值范围：** ≥0
    * nonSecurityDefectCount  **参数解释：** 非安全问题数。 **取值范围：** ≥0
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * securityDefectCount  **参数解释：** 安全问题数。 **取值范围：** ≥0
    * solvedDefectCount  **参数解释：** 已解决的问题数。 **取值范围：** 不涉及。
    * unsolvedDefectCount  **参数解释：** 未解决的问题数。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'critical' => 'getCritical',
            'delaystatusCount' => 'getDelaystatusCount',
            'fatal' => 'getFatal',
            'general' => 'getGeneral',
            'info' => 'getInfo',
            'prompt' => 'getPrompt',
            'codeLine' => 'getCodeLine',
            'defectCount' => 'getDefectCount',
            'dismissed' => 'getDismissed',
            'fileTotal' => 'getFileTotal',
            'fixed' => 'getFixed',
            'id' => 'getId',
            'jobId' => 'getJobId',
            'newUnsolvedDefectCount' => 'getNewUnsolvedDefectCount',
            'nonSecurityDefectCount' => 'getNonSecurityDefectCount',
            'reviewResult' => 'getReviewResult',
            'securityDefectCount' => 'getSecurityDefectCount',
            'solvedDefectCount' => 'getSolvedDefectCount',
            'unsolvedDefectCount' => 'getUnsolvedDefectCount'
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
        $this->container['critical'] = isset($data['critical']) ? $data['critical'] : null;
        $this->container['delaystatusCount'] = isset($data['delaystatusCount']) ? $data['delaystatusCount'] : null;
        $this->container['fatal'] = isset($data['fatal']) ? $data['fatal'] : null;
        $this->container['general'] = isset($data['general']) ? $data['general'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['codeLine'] = isset($data['codeLine']) ? $data['codeLine'] : null;
        $this->container['defectCount'] = isset($data['defectCount']) ? $data['defectCount'] : null;
        $this->container['dismissed'] = isset($data['dismissed']) ? $data['dismissed'] : null;
        $this->container['fileTotal'] = isset($data['fileTotal']) ? $data['fileTotal'] : null;
        $this->container['fixed'] = isset($data['fixed']) ? $data['fixed'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['newUnsolvedDefectCount'] = isset($data['newUnsolvedDefectCount']) ? $data['newUnsolvedDefectCount'] : null;
        $this->container['nonSecurityDefectCount'] = isset($data['nonSecurityDefectCount']) ? $data['nonSecurityDefectCount'] : null;
        $this->container['reviewResult'] = isset($data['reviewResult']) ? $data['reviewResult'] : null;
        $this->container['securityDefectCount'] = isset($data['securityDefectCount']) ? $data['securityDefectCount'] : null;
        $this->container['solvedDefectCount'] = isset($data['solvedDefectCount']) ? $data['solvedDefectCount'] : null;
        $this->container['unsolvedDefectCount'] = isset($data['unsolvedDefectCount']) ? $data['unsolvedDefectCount'] : null;
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
    * Gets critical
    *  **参数解释：** 严重问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getCritical()
    {
        return $this->container['critical'];
    }

    /**
    * Sets critical
    *
    * @param int|null $critical **参数解释：** 严重问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setCritical($critical)
    {
        $this->container['critical'] = $critical;
        return $this;
    }

    /**
    * Gets delaystatusCount
    *  **参数解释：** 延迟上线问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getDelaystatusCount()
    {
        return $this->container['delaystatusCount'];
    }

    /**
    * Sets delaystatusCount
    *
    * @param int|null $delaystatusCount **参数解释：** 延迟上线问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setDelaystatusCount($delaystatusCount)
    {
        $this->container['delaystatusCount'] = $delaystatusCount;
        return $this;
    }

    /**
    * Gets fatal
    *  **参数解释：** 致命问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getFatal()
    {
        return $this->container['fatal'];
    }

    /**
    * Sets fatal
    *
    * @param int|null $fatal **参数解释：** 致命问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setFatal($fatal)
    {
        $this->container['fatal'] = $fatal;
        return $this;
    }

    /**
    * Gets general
    *  **参数解释：** 一般问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getGeneral()
    {
        return $this->container['general'];
    }

    /**
    * Sets general
    *
    * @param int|null $general **参数解释：** 一般问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setGeneral($general)
    {
        $this->container['general'] = $general;
        return $this;
    }

    /**
    * Gets info
    *  **参数解释：** 信息问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param int|null $info **参数解释：** 信息问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets prompt
    *  **参数解释：** 提示问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
    * Sets prompt
    *
    * @param int|null $prompt **参数解释：** 提示问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;
        return $this;
    }

    /**
    * Gets codeLine
    *  **参数解释：** 扫描代码行数，不包括空行和注释行。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getCodeLine()
    {
        return $this->container['codeLine'];
    }

    /**
    * Sets codeLine
    *
    * @param int|null $codeLine **参数解释：** 扫描代码行数，不包括空行和注释行。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setCodeLine($codeLine)
    {
        $this->container['codeLine'] = $codeLine;
        return $this;
    }

    /**
    * Gets defectCount
    *  **参数解释：** 缺陷总数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getDefectCount()
    {
        return $this->container['defectCount'];
    }

    /**
    * Sets defectCount
    *
    * @param int|null $defectCount **参数解释：** 缺陷总数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setDefectCount($defectCount)
    {
        $this->container['defectCount'] = $defectCount;
        return $this;
    }

    /**
    * Gets dismissed
    *  **参数解释：** 已忽略问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getDismissed()
    {
        return $this->container['dismissed'];
    }

    /**
    * Sets dismissed
    *
    * @param int|null $dismissed **参数解释：** 已忽略问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setDismissed($dismissed)
    {
        $this->container['dismissed'] = $dismissed;
        return $this;
    }

    /**
    * Gets fileTotal
    *  **参数解释：** 文件总数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getFileTotal()
    {
        return $this->container['fileTotal'];
    }

    /**
    * Sets fileTotal
    *
    * @param int|null $fileTotal **参数解释：** 文件总数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setFileTotal($fileTotal)
    {
        $this->container['fileTotal'] = $fileTotal;
        return $this;
    }

    /**
    * Gets fixed
    *  **参数解释：** 已修复问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getFixed()
    {
        return $this->container['fixed'];
    }

    /**
    * Sets fixed
    *
    * @param int|null $fixed **参数解释：** 已修复问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setFixed($fixed)
    {
        $this->container['fixed'] = $fixed;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets newUnsolvedDefectCount
    *  **参数解释：** 未解决且新增的问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getNewUnsolvedDefectCount()
    {
        return $this->container['newUnsolvedDefectCount'];
    }

    /**
    * Sets newUnsolvedDefectCount
    *
    * @param int|null $newUnsolvedDefectCount **参数解释：** 未解决且新增的问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setNewUnsolvedDefectCount($newUnsolvedDefectCount)
    {
        $this->container['newUnsolvedDefectCount'] = $newUnsolvedDefectCount;
        return $this;
    }

    /**
    * Gets nonSecurityDefectCount
    *  **参数解释：** 非安全问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getNonSecurityDefectCount()
    {
        return $this->container['nonSecurityDefectCount'];
    }

    /**
    * Sets nonSecurityDefectCount
    *
    * @param int|null $nonSecurityDefectCount **参数解释：** 非安全问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setNonSecurityDefectCount($nonSecurityDefectCount)
    {
        $this->container['nonSecurityDefectCount'] = $nonSecurityDefectCount;
        return $this;
    }

    /**
    * Gets reviewResult
    *  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    *
    * @return string|null
    */
    public function getReviewResult()
    {
        return $this->container['reviewResult'];
    }

    /**
    * Sets reviewResult
    *
    * @param string|null $reviewResult **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    *
    * @return $this
    */
    public function setReviewResult($reviewResult)
    {
        $this->container['reviewResult'] = $reviewResult;
        return $this;
    }

    /**
    * Gets securityDefectCount
    *  **参数解释：** 安全问题数。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getSecurityDefectCount()
    {
        return $this->container['securityDefectCount'];
    }

    /**
    * Sets securityDefectCount
    *
    * @param int|null $securityDefectCount **参数解释：** 安全问题数。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setSecurityDefectCount($securityDefectCount)
    {
        $this->container['securityDefectCount'] = $securityDefectCount;
        return $this;
    }

    /**
    * Gets solvedDefectCount
    *  **参数解释：** 已解决的问题数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getSolvedDefectCount()
    {
        return $this->container['solvedDefectCount'];
    }

    /**
    * Sets solvedDefectCount
    *
    * @param int|null $solvedDefectCount **参数解释：** 已解决的问题数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSolvedDefectCount($solvedDefectCount)
    {
        $this->container['solvedDefectCount'] = $solvedDefectCount;
        return $this;
    }

    /**
    * Gets unsolvedDefectCount
    *  **参数解释：** 未解决的问题数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getUnsolvedDefectCount()
    {
        return $this->container['unsolvedDefectCount'];
    }

    /**
    * Sets unsolvedDefectCount
    *
    * @param int|null $unsolvedDefectCount **参数解释：** 未解决的问题数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUnsolvedDefectCount($unsolvedDefectCount)
    {
        $this->container['unsolvedDefectCount'] = $unsolvedDefectCount;
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

