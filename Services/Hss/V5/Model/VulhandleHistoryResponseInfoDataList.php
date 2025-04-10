<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulhandleHistoryResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulhandleHistoryResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  历史记录唯一id
    * userName  用户名
    * type  漏洞类型
    * hostId  服务器ID
    * hostName  服务器名称
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * handleTime  处置时间
    * status  处置状态
    * failedReason  失败原因
    * description  备注
    * vulId  漏洞ID
    * vulName  漏洞名称
    * assetValue  资产重要性
    * cveList  cve列表
    * appName  软件名称
    * appPath  应用软件路径
    * appVersion  软件版本
    * handleType  处置类型
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'userName' => 'string',
            'type' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'handleTime' => 'string',
            'status' => 'string',
            'failedReason' => 'string',
            'description' => 'string',
            'vulId' => 'string',
            'vulName' => 'string',
            'assetValue' => 'string',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulCveInfo[]',
            'appName' => 'string',
            'appPath' => 'string',
            'appVersion' => 'string',
            'handleType' => 'string',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  历史记录唯一id
    * userName  用户名
    * type  漏洞类型
    * hostId  服务器ID
    * hostName  服务器名称
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * handleTime  处置时间
    * status  处置状态
    * failedReason  失败原因
    * description  备注
    * vulId  漏洞ID
    * vulName  漏洞名称
    * assetValue  资产重要性
    * cveList  cve列表
    * appName  软件名称
    * appPath  应用软件路径
    * appVersion  软件版本
    * handleType  处置类型
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userName' => null,
        'type' => null,
        'hostId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'handleTime' => null,
        'status' => null,
        'failedReason' => null,
        'description' => null,
        'vulId' => null,
        'vulName' => null,
        'assetValue' => null,
        'cveList' => null,
        'appName' => null,
        'appPath' => null,
        'appVersion' => null,
        'handleType' => null,
        'clusterId' => null
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
    * id  历史记录唯一id
    * userName  用户名
    * type  漏洞类型
    * hostId  服务器ID
    * hostName  服务器名称
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * handleTime  处置时间
    * status  处置状态
    * failedReason  失败原因
    * description  备注
    * vulId  漏洞ID
    * vulName  漏洞名称
    * assetValue  资产重要性
    * cveList  cve列表
    * appName  软件名称
    * appPath  应用软件路径
    * appVersion  软件版本
    * handleType  处置类型
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userName' => 'user_name',
            'type' => 'type',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'handleTime' => 'handle_time',
            'status' => 'status',
            'failedReason' => 'failed_reason',
            'description' => 'description',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'assetValue' => 'asset_value',
            'cveList' => 'cve_list',
            'appName' => 'app_name',
            'appPath' => 'app_path',
            'appVersion' => 'app_version',
            'handleType' => 'handle_type',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  历史记录唯一id
    * userName  用户名
    * type  漏洞类型
    * hostId  服务器ID
    * hostName  服务器名称
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * handleTime  处置时间
    * status  处置状态
    * failedReason  失败原因
    * description  备注
    * vulId  漏洞ID
    * vulName  漏洞名称
    * assetValue  资产重要性
    * cveList  cve列表
    * appName  软件名称
    * appPath  应用软件路径
    * appVersion  软件版本
    * handleType  处置类型
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userName' => 'setUserName',
            'type' => 'setType',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'handleTime' => 'setHandleTime',
            'status' => 'setStatus',
            'failedReason' => 'setFailedReason',
            'description' => 'setDescription',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'assetValue' => 'setAssetValue',
            'cveList' => 'setCveList',
            'appName' => 'setAppName',
            'appPath' => 'setAppPath',
            'appVersion' => 'setAppVersion',
            'handleType' => 'setHandleType',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  历史记录唯一id
    * userName  用户名
    * type  漏洞类型
    * hostId  服务器ID
    * hostName  服务器名称
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * handleTime  处置时间
    * status  处置状态
    * failedReason  失败原因
    * description  备注
    * vulId  漏洞ID
    * vulName  漏洞名称
    * assetValue  资产重要性
    * cveList  cve列表
    * appName  软件名称
    * appPath  应用软件路径
    * appVersion  软件版本
    * handleType  处置类型
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userName' => 'getUserName',
            'type' => 'getType',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'handleTime' => 'getHandleTime',
            'status' => 'getStatus',
            'failedReason' => 'getFailedReason',
            'description' => 'getDescription',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'assetValue' => 'getAssetValue',
            'cveList' => 'getCveList',
            'appName' => 'getAppName',
            'appPath' => 'getAppPath',
            'appVersion' => 'getAppVersion',
            'handleType' => 'getHandleType',
            'clusterId' => 'getClusterId'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['handleType'] = isset($data['handleType']) ? $data['handleType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
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
    * Gets id
    *  历史记录唯一id
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
    * @param string|null $id 历史记录唯一id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets type
    *  漏洞类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 漏洞类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets hostId
    *  服务器ID
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
    * @param string|null $hostId 服务器ID
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
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  服务器公网ip
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
    * @param string|null $publicIp 服务器公网ip
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
    *  服务器私网ip
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
    * @param string|null $privateIp 服务器私网ip
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets handleTime
    *  处置时间
    *
    * @return string|null
    */
    public function getHandleTime()
    {
        return $this->container['handleTime'];
    }

    /**
    * Sets handleTime
    *
    * @param string|null $handleTime 处置时间
    *
    * @return $this
    */
    public function setHandleTime($handleTime)
    {
        $this->container['handleTime'] = $handleTime;
        return $this;
    }

    /**
    * Gets status
    *  处置状态
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
    * @param string|null $status 处置状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedReason
    *  失败原因
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
    * @param string|null $failedReason 失败原因
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets description
    *  备注
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 备注
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vulId
    *  漏洞ID
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
    * @param string|null $vulId 漏洞ID
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
    *  漏洞名称
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
    * @param string|null $vulName 漏洞名称
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性
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
    * @param string|null $assetValue 资产重要性
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets cveList
    *  cve列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulCveInfo[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulCveInfo[]|null $cveList cve列表
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
        return $this;
    }

    /**
    * Gets appName
    *  软件名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 软件名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appPath
    *  应用软件路径
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath 应用软件路径
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets appVersion
    *  软件版本
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 软件版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets handleType
    *  处置类型
    *
    * @return string|null
    */
    public function getHandleType()
    {
        return $this->container['handleType'];
    }

    /**
    * Sets handleType
    *
    * @param string|null $handleType 处置类型
    *
    * @return $this
    */
    public function setHandleType($handleType)
    {
        $this->container['handleType'] = $handleType;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

