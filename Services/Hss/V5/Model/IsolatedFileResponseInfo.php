<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsolatedFileResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsolatedFileResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * isolationStatus  隔离状态，包含如下:   - isolated : 已隔离   - restored : 已恢复   - isolating : 已下发隔离任务   - restoring : 已下发恢复任务
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * updateTime  更新时间，毫秒
    * agentVersion  agent版本
    * isolateSource  隔离来源，包含如下:   - event : 安全告警事件   - antivirus : 病毒查杀
    * eventName  **参数解释**： 事件名称 **取值范围**： 字符长度1-256位
    * agentEventInfo  agentEventInfo
    * antivirusResultInfo  antivirusResultInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osType' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'fileHash' => 'string',
            'filePath' => 'string',
            'fileAttr' => 'string',
            'isolationStatus' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'assetValue' => 'string',
            'updateTime' => 'int',
            'agentVersion' => 'string',
            'isolateSource' => 'string',
            'eventName' => 'string',
            'agentEventInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\IsolateEventResponseInfo',
            'antivirusResultInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\AntivirusResultDetailInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * isolationStatus  隔离状态，包含如下:   - isolated : 已隔离   - restored : 已恢复   - isolating : 已下发隔离任务   - restoring : 已下发恢复任务
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * updateTime  更新时间，毫秒
    * agentVersion  agent版本
    * isolateSource  隔离来源，包含如下:   - event : 安全告警事件   - antivirus : 病毒查杀
    * eventName  **参数解释**： 事件名称 **取值范围**： 字符长度1-256位
    * agentEventInfo  agentEventInfo
    * antivirusResultInfo  antivirusResultInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osType' => null,
        'hostId' => null,
        'hostName' => null,
        'fileHash' => null,
        'filePath' => null,
        'fileAttr' => null,
        'isolationStatus' => null,
        'privateIp' => null,
        'publicIp' => null,
        'assetValue' => null,
        'updateTime' => 'int64',
        'agentVersion' => null,
        'isolateSource' => null,
        'eventName' => null,
        'agentEventInfo' => null,
        'antivirusResultInfo' => null
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
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * isolationStatus  隔离状态，包含如下:   - isolated : 已隔离   - restored : 已恢复   - isolating : 已下发隔离任务   - restoring : 已下发恢复任务
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * updateTime  更新时间，毫秒
    * agentVersion  agent版本
    * isolateSource  隔离来源，包含如下:   - event : 安全告警事件   - antivirus : 病毒查杀
    * eventName  **参数解释**： 事件名称 **取值范围**： 字符长度1-256位
    * agentEventInfo  agentEventInfo
    * antivirusResultInfo  antivirusResultInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osType' => 'os_type',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'fileHash' => 'file_hash',
            'filePath' => 'file_path',
            'fileAttr' => 'file_attr',
            'isolationStatus' => 'isolation_status',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'assetValue' => 'asset_value',
            'updateTime' => 'update_time',
            'agentVersion' => 'agent_version',
            'isolateSource' => 'isolate_source',
            'eventName' => 'event_name',
            'agentEventInfo' => 'agent_event_info',
            'antivirusResultInfo' => 'antivirus_result_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * isolationStatus  隔离状态，包含如下:   - isolated : 已隔离   - restored : 已恢复   - isolating : 已下发隔离任务   - restoring : 已下发恢复任务
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * updateTime  更新时间，毫秒
    * agentVersion  agent版本
    * isolateSource  隔离来源，包含如下:   - event : 安全告警事件   - antivirus : 病毒查杀
    * eventName  **参数解释**： 事件名称 **取值范围**： 字符长度1-256位
    * agentEventInfo  agentEventInfo
    * antivirusResultInfo  antivirusResultInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'osType' => 'setOsType',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'fileHash' => 'setFileHash',
            'filePath' => 'setFilePath',
            'fileAttr' => 'setFileAttr',
            'isolationStatus' => 'setIsolationStatus',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'assetValue' => 'setAssetValue',
            'updateTime' => 'setUpdateTime',
            'agentVersion' => 'setAgentVersion',
            'isolateSource' => 'setIsolateSource',
            'eventName' => 'setEventName',
            'agentEventInfo' => 'setAgentEventInfo',
            'antivirusResultInfo' => 'setAntivirusResultInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * isolationStatus  隔离状态，包含如下:   - isolated : 已隔离   - restored : 已恢复   - isolating : 已下发隔离任务   - restoring : 已下发恢复任务
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * updateTime  更新时间，毫秒
    * agentVersion  agent版本
    * isolateSource  隔离来源，包含如下:   - event : 安全告警事件   - antivirus : 病毒查杀
    * eventName  **参数解释**： 事件名称 **取值范围**： 字符长度1-256位
    * agentEventInfo  agentEventInfo
    * antivirusResultInfo  antivirusResultInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'osType' => 'getOsType',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'fileHash' => 'getFileHash',
            'filePath' => 'getFilePath',
            'fileAttr' => 'getFileAttr',
            'isolationStatus' => 'getIsolationStatus',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'assetValue' => 'getAssetValue',
            'updateTime' => 'getUpdateTime',
            'agentVersion' => 'getAgentVersion',
            'isolateSource' => 'getIsolateSource',
            'eventName' => 'getEventName',
            'agentEventInfo' => 'getAgentEventInfo',
            'antivirusResultInfo' => 'getAntivirusResultInfo'
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
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileAttr'] = isset($data['fileAttr']) ? $data['fileAttr'] : null;
        $this->container['isolationStatus'] = isset($data['isolationStatus']) ? $data['isolationStatus'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['isolateSource'] = isset($data['isolateSource']) ? $data['isolateSource'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['agentEventInfo'] = isset($data['agentEventInfo']) ? $data['agentEventInfo'] : null;
        $this->container['antivirusResultInfo'] = isset($data['antivirusResultInfo']) ? $data['antivirusResultInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            if ((mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['hostName'] === null) {
            $invalidProperties[] = "'hostName' can't be null";
        }
            if ((mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['fileHash'] === null) {
            $invalidProperties[] = "'fileHash' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['fileHash'])) {
                $invalidProperties[] = "invalid value for 'fileHash', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['fileAttr'] === null) {
            $invalidProperties[] = "'fileAttr' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['fileAttr'])) {
                $invalidProperties[] = "invalid value for 'fileAttr', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['isolationStatus'] === null) {
            $invalidProperties[] = "'isolationStatus' can't be null";
        }
        if ($this->container['privateIp'] === null) {
            $invalidProperties[] = "'privateIp' can't be null";
        }
            if ((mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['publicIp'] === null) {
            $invalidProperties[] = "'publicIp' can't be null";
        }
            if ((mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['assetValue'] === null) {
            $invalidProperties[] = "'assetValue' can't be null";
        }
            if ((mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
            if (($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
        if ($this->container['agentVersion'] === null) {
            $invalidProperties[] = "'agentVersion' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['agentVersion'])) {
                $invalidProperties[] = "invalid value for 'agentVersion', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['isolateSource'] === null) {
            $invalidProperties[] = "'isolateSource' can't be null";
        }
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['eventName'])) {
                $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['agentEventInfo'] === null) {
            $invalidProperties[] = "'agentEventInfo' can't be null";
        }
        if ($this->container['antivirusResultInfo'] === null) {
            $invalidProperties[] = "'antivirusResultInfo' can't be null";
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
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return string
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets fileHash
    *  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string $fileHash **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string $filePath **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileAttr
    *  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getFileAttr()
    {
        return $this->container['fileAttr'];
    }

    /**
    * Sets fileAttr
    *
    * @param string $fileAttr **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileAttr($fileAttr)
    {
        $this->container['fileAttr'] = $fileAttr;
        return $this;
    }

    /**
    * Gets isolationStatus
    *  隔离状态，包含如下:   - isolated : 已隔离   - restored : 已恢复   - isolating : 已下发隔离任务   - restoring : 已下发恢复任务
    *
    * @return string
    */
    public function getIsolationStatus()
    {
        return $this->container['isolationStatus'];
    }

    /**
    * Sets isolationStatus
    *
    * @param string $isolationStatus 隔离状态，包含如下:   - isolated : 已隔离   - restored : 已恢复   - isolating : 已下发隔离任务   - restoring : 已下发恢复任务
    *
    * @return $this
    */
    public function setIsolationStatus($isolationStatus)
    {
        $this->container['isolationStatus'] = $isolationStatus;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return string
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return string
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string $assetValue 资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，毫秒
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 更新时间，毫秒
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets agentVersion
    *  agent版本
    *
    * @return string
    */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
    * Sets agentVersion
    *
    * @param string $agentVersion agent版本
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets isolateSource
    *  隔离来源，包含如下:   - event : 安全告警事件   - antivirus : 病毒查杀
    *
    * @return string
    */
    public function getIsolateSource()
    {
        return $this->container['isolateSource'];
    }

    /**
    * Sets isolateSource
    *
    * @param string $isolateSource 隔离来源，包含如下:   - event : 安全告警事件   - antivirus : 病毒查杀
    *
    * @return $this
    */
    public function setIsolateSource($isolateSource)
    {
        $this->container['isolateSource'] = $isolateSource;
        return $this;
    }

    /**
    * Gets eventName
    *  **参数解释**： 事件名称 **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName **参数解释**： 事件名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets agentEventInfo
    *  agentEventInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\IsolateEventResponseInfo
    */
    public function getAgentEventInfo()
    {
        return $this->container['agentEventInfo'];
    }

    /**
    * Sets agentEventInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\IsolateEventResponseInfo $agentEventInfo agentEventInfo
    *
    * @return $this
    */
    public function setAgentEventInfo($agentEventInfo)
    {
        $this->container['agentEventInfo'] = $agentEventInfo;
        return $this;
    }

    /**
    * Gets antivirusResultInfo
    *  antivirusResultInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AntivirusResultDetailInfo
    */
    public function getAntivirusResultInfo()
    {
        return $this->container['antivirusResultInfo'];
    }

    /**
    * Sets antivirusResultInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AntivirusResultDetailInfo $antivirusResultInfo antivirusResultInfo
    *
    * @return $this
    */
    public function setAntivirusResultInfo($antivirusResultInfo)
    {
        $this->container['antivirusResultInfo'] = $antivirusResultInfo;
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

