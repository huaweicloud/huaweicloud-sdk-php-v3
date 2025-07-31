<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIacFilesResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIacFilesResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileId  **参数解释**: 文件ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-512 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件 - k8s_yaml：k8s yaml文件  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险 - false：无风险 **默认取值**: 不涉及
    * riskNum  风险项数量
    * firstScanTime  首次扫描时间
    * lastScanTime  最近扫描时间
    * uploadFileTime  上传文件时间
    * cicdId  **参数解释**: cicd标识 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * cicdName  **参数解释**: CI/CD名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描 - cicd_scan：cicd扫描 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileId' => 'string',
            'fileName' => 'string',
            'fileType' => 'string',
            'risky' => 'bool',
            'riskNum' => 'int',
            'firstScanTime' => 'int',
            'lastScanTime' => 'int',
            'uploadFileTime' => 'int',
            'cicdId' => 'string',
            'cicdName' => 'string',
            'scanType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileId  **参数解释**: 文件ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-512 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件 - k8s_yaml：k8s yaml文件  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险 - false：无风险 **默认取值**: 不涉及
    * riskNum  风险项数量
    * firstScanTime  首次扫描时间
    * lastScanTime  最近扫描时间
    * uploadFileTime  上传文件时间
    * cicdId  **参数解释**: cicd标识 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * cicdName  **参数解释**: CI/CD名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描 - cicd_scan：cicd扫描 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileId' => null,
        'fileName' => null,
        'fileType' => null,
        'risky' => null,
        'riskNum' => 'int32',
        'firstScanTime' => 'int64',
        'lastScanTime' => 'int64',
        'uploadFileTime' => 'int64',
        'cicdId' => null,
        'cicdName' => null,
        'scanType' => null
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
    * fileId  **参数解释**: 文件ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-512 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件 - k8s_yaml：k8s yaml文件  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险 - false：无风险 **默认取值**: 不涉及
    * riskNum  风险项数量
    * firstScanTime  首次扫描时间
    * lastScanTime  最近扫描时间
    * uploadFileTime  上传文件时间
    * cicdId  **参数解释**: cicd标识 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * cicdName  **参数解释**: CI/CD名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描 - cicd_scan：cicd扫描 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileId' => 'file_id',
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'risky' => 'risky',
            'riskNum' => 'risk_num',
            'firstScanTime' => 'first_scan_time',
            'lastScanTime' => 'last_scan_time',
            'uploadFileTime' => 'upload_file_time',
            'cicdId' => 'cicd_id',
            'cicdName' => 'cicd_name',
            'scanType' => 'scan_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileId  **参数解释**: 文件ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-512 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件 - k8s_yaml：k8s yaml文件  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险 - false：无风险 **默认取值**: 不涉及
    * riskNum  风险项数量
    * firstScanTime  首次扫描时间
    * lastScanTime  最近扫描时间
    * uploadFileTime  上传文件时间
    * cicdId  **参数解释**: cicd标识 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * cicdName  **参数解释**: CI/CD名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描 - cicd_scan：cicd扫描 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'fileId' => 'setFileId',
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'risky' => 'setRisky',
            'riskNum' => 'setRiskNum',
            'firstScanTime' => 'setFirstScanTime',
            'lastScanTime' => 'setLastScanTime',
            'uploadFileTime' => 'setUploadFileTime',
            'cicdId' => 'setCicdId',
            'cicdName' => 'setCicdName',
            'scanType' => 'setScanType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileId  **参数解释**: 文件ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-512 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件 - k8s_yaml：k8s yaml文件  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险 - false：无风险 **默认取值**: 不涉及
    * riskNum  风险项数量
    * firstScanTime  首次扫描时间
    * lastScanTime  最近扫描时间
    * uploadFileTime  上传文件时间
    * cicdId  **参数解释**: cicd标识 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * cicdName  **参数解释**: CI/CD名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描 - cicd_scan：cicd扫描 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'fileId' => 'getFileId',
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'risky' => 'getRisky',
            'riskNum' => 'getRiskNum',
            'firstScanTime' => 'getFirstScanTime',
            'lastScanTime' => 'getLastScanTime',
            'uploadFileTime' => 'getUploadFileTime',
            'cicdId' => 'getCicdId',
            'cicdName' => 'getCicdName',
            'scanType' => 'getScanType'
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
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['risky'] = isset($data['risky']) ? $data['risky'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['lastScanTime'] = isset($data['lastScanTime']) ? $data['lastScanTime'] : null;
        $this->container['uploadFileTime'] = isset($data['uploadFileTime']) ? $data['uploadFileTime'] : null;
        $this->container['cicdId'] = isset($data['cicdId']) ? $data['cicdId'] : null;
        $this->container['cicdName'] = isset($data['cicdName']) ? $data['cicdName'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 512)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && !preg_match("/^.*$/", $this->container['fileName'])) {
                $invalidProperties[] = "invalid value for 'fileName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && !preg_match("/^dockerfile|k8s_yaml$/", $this->container['fileType'])) {
                $invalidProperties[] = "invalid value for 'fileType', must be conform to the pattern /^dockerfile|k8s_yaml$/.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastScanTime']) && ($this->container['lastScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastScanTime']) && ($this->container['lastScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uploadFileTime']) && ($this->container['uploadFileTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'uploadFileTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['uploadFileTime']) && ($this->container['uploadFileTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'uploadFileTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cicdId']) && (mb_strlen($this->container['cicdId']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cicdId']) && (mb_strlen($this->container['cicdId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cicdId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
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
    * Gets fileId
    *  **参数解释**: 文件ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId **参数解释**: 文件ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-512 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-512 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileType
    *  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件 - k8s_yaml：k8s yaml文件  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件 - k8s_yaml：k8s yaml文件  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets risky
    *  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险 - false：无风险 **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getRisky()
    {
        return $this->container['risky'];
    }

    /**
    * Sets risky
    *
    * @param bool|null $risky **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险 - false：无风险 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRisky($risky)
    {
        $this->container['risky'] = $risky;
        return $this;
    }

    /**
    * Gets riskNum
    *  风险项数量
    *
    * @return int|null
    */
    public function getRiskNum()
    {
        return $this->container['riskNum'];
    }

    /**
    * Sets riskNum
    *
    * @param int|null $riskNum 风险项数量
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  首次扫描时间
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
    * @param int|null $firstScanTime 首次扫描时间
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
        return $this;
    }

    /**
    * Gets lastScanTime
    *  最近扫描时间
    *
    * @return int|null
    */
    public function getLastScanTime()
    {
        return $this->container['lastScanTime'];
    }

    /**
    * Sets lastScanTime
    *
    * @param int|null $lastScanTime 最近扫描时间
    *
    * @return $this
    */
    public function setLastScanTime($lastScanTime)
    {
        $this->container['lastScanTime'] = $lastScanTime;
        return $this;
    }

    /**
    * Gets uploadFileTime
    *  上传文件时间
    *
    * @return int|null
    */
    public function getUploadFileTime()
    {
        return $this->container['uploadFileTime'];
    }

    /**
    * Sets uploadFileTime
    *
    * @param int|null $uploadFileTime 上传文件时间
    *
    * @return $this
    */
    public function setUploadFileTime($uploadFileTime)
    {
        $this->container['uploadFileTime'] = $uploadFileTime;
        return $this;
    }

    /**
    * Gets cicdId
    *  **参数解释**: cicd标识 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getCicdId()
    {
        return $this->container['cicdId'];
    }

    /**
    * Sets cicdId
    *
    * @param string|null $cicdId **参数解释**: cicd标识 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCicdId($cicdId)
    {
        $this->container['cicdId'] = $cicdId;
        return $this;
    }

    /**
    * Gets cicdName
    *  **参数解释**: CI/CD名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getCicdName()
    {
        return $this->container['cicdName'];
    }

    /**
    * Sets cicdName
    *
    * @param string|null $cicdName **参数解释**: CI/CD名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCicdName($cicdName)
    {
        $this->container['cicdName'] = $cicdName;
        return $this;
    }

    /**
    * Gets scanType
    *  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描 - cicd_scan：cicd扫描 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描 - cicd_scan：cicd扫描 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
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

