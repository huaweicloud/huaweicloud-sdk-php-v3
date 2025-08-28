<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegistryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegistryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 镜像仓ID **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor harbor仓库 - Jfrog jfrog仓库 - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * apiVersion  **参数解释**： 镜像仓接口版本 **取值范围**：   - V1：V1版本   - V2：V2版本
    * protocol  **参数解释**： 协议类型 **取值范围**：   - http：http协议   - https：https协议
    * registryAddr  **参数解释**： 镜像仓地址 **取值范围**： 字符长度1-256位
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **取值范围**： 字符长度1-128位
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时返回此值。 **取值范围**： 字符长度1-128位
    * connectClusterId  **参数解释**： 承载集群id **取值范围**： 字符长度1-64位
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。
    * status  **参数解释**： 接入状态 **取值范围**： - success：接入成功 - fail：接入异常 - accessing：接入中
    * failReason  **参数解释**: 失败原因 **取值范围**: - CREATE_JOB_FAILED：集群接入状态异常，请检查集群接入状态。 - REQUEST_API_ERROR：网络不通，访问镜像仓失败。请检查承载集群是否能正常访问镜像仓 ，或前往三方镜像仓页面重新接入。 - SERVER_ERROR：系统内部错误，请稍后重试。
    * imagesNum  **参数解释**： 镜像数量 **取值范围**： 0-20000
    * latestSyncTime  **参数解释**： 最近同步时间，时间单位 毫秒（ms） **取值范围**： 0-9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'registryName' => 'string',
            'registryType' => 'string',
            'apiVersion' => 'string',
            'protocol' => 'string',
            'registryAddr' => 'string',
            'registryUsername' => 'string',
            'namespace' => 'string',
            'connectClusterId' => 'string',
            'getScanImageChannel' => 'string',
            'status' => 'string',
            'failReason' => 'string',
            'imagesNum' => 'int',
            'latestSyncTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 镜像仓ID **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor harbor仓库 - Jfrog jfrog仓库 - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * apiVersion  **参数解释**： 镜像仓接口版本 **取值范围**：   - V1：V1版本   - V2：V2版本
    * protocol  **参数解释**： 协议类型 **取值范围**：   - http：http协议   - https：https协议
    * registryAddr  **参数解释**： 镜像仓地址 **取值范围**： 字符长度1-256位
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **取值范围**： 字符长度1-128位
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时返回此值。 **取值范围**： 字符长度1-128位
    * connectClusterId  **参数解释**： 承载集群id **取值范围**： 字符长度1-64位
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。
    * status  **参数解释**： 接入状态 **取值范围**： - success：接入成功 - fail：接入异常 - accessing：接入中
    * failReason  **参数解释**: 失败原因 **取值范围**: - CREATE_JOB_FAILED：集群接入状态异常，请检查集群接入状态。 - REQUEST_API_ERROR：网络不通，访问镜像仓失败。请检查承载集群是否能正常访问镜像仓 ，或前往三方镜像仓页面重新接入。 - SERVER_ERROR：系统内部错误，请稍后重试。
    * imagesNum  **参数解释**： 镜像数量 **取值范围**： 0-20000
    * latestSyncTime  **参数解释**： 最近同步时间，时间单位 毫秒（ms） **取值范围**： 0-9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'registryName' => null,
        'registryType' => null,
        'apiVersion' => null,
        'protocol' => null,
        'registryAddr' => null,
        'registryUsername' => null,
        'namespace' => null,
        'connectClusterId' => null,
        'getScanImageChannel' => null,
        'status' => null,
        'failReason' => null,
        'imagesNum' => 'int32',
        'latestSyncTime' => 'int64'
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
    * id  **参数解释**: 镜像仓ID **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor harbor仓库 - Jfrog jfrog仓库 - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * apiVersion  **参数解释**： 镜像仓接口版本 **取值范围**：   - V1：V1版本   - V2：V2版本
    * protocol  **参数解释**： 协议类型 **取值范围**：   - http：http协议   - https：https协议
    * registryAddr  **参数解释**： 镜像仓地址 **取值范围**： 字符长度1-256位
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **取值范围**： 字符长度1-128位
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时返回此值。 **取值范围**： 字符长度1-128位
    * connectClusterId  **参数解释**： 承载集群id **取值范围**： 字符长度1-64位
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。
    * status  **参数解释**： 接入状态 **取值范围**： - success：接入成功 - fail：接入异常 - accessing：接入中
    * failReason  **参数解释**: 失败原因 **取值范围**: - CREATE_JOB_FAILED：集群接入状态异常，请检查集群接入状态。 - REQUEST_API_ERROR：网络不通，访问镜像仓失败。请检查承载集群是否能正常访问镜像仓 ，或前往三方镜像仓页面重新接入。 - SERVER_ERROR：系统内部错误，请稍后重试。
    * imagesNum  **参数解释**： 镜像数量 **取值范围**： 0-20000
    * latestSyncTime  **参数解释**： 最近同步时间，时间单位 毫秒（ms） **取值范围**： 0-9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'registryName' => 'registry_name',
            'registryType' => 'registry_type',
            'apiVersion' => 'api_version',
            'protocol' => 'protocol',
            'registryAddr' => 'registry_addr',
            'registryUsername' => 'registry_username',
            'namespace' => 'namespace',
            'connectClusterId' => 'connect_cluster_id',
            'getScanImageChannel' => 'get_scan_image_channel',
            'status' => 'status',
            'failReason' => 'fail_reason',
            'imagesNum' => 'images_num',
            'latestSyncTime' => 'latest_sync_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 镜像仓ID **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor harbor仓库 - Jfrog jfrog仓库 - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * apiVersion  **参数解释**： 镜像仓接口版本 **取值范围**：   - V1：V1版本   - V2：V2版本
    * protocol  **参数解释**： 协议类型 **取值范围**：   - http：http协议   - https：https协议
    * registryAddr  **参数解释**： 镜像仓地址 **取值范围**： 字符长度1-256位
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **取值范围**： 字符长度1-128位
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时返回此值。 **取值范围**： 字符长度1-128位
    * connectClusterId  **参数解释**： 承载集群id **取值范围**： 字符长度1-64位
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。
    * status  **参数解释**： 接入状态 **取值范围**： - success：接入成功 - fail：接入异常 - accessing：接入中
    * failReason  **参数解释**: 失败原因 **取值范围**: - CREATE_JOB_FAILED：集群接入状态异常，请检查集群接入状态。 - REQUEST_API_ERROR：网络不通，访问镜像仓失败。请检查承载集群是否能正常访问镜像仓 ，或前往三方镜像仓页面重新接入。 - SERVER_ERROR：系统内部错误，请稍后重试。
    * imagesNum  **参数解释**： 镜像数量 **取值范围**： 0-20000
    * latestSyncTime  **参数解释**： 最近同步时间，时间单位 毫秒（ms） **取值范围**： 0-9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'registryName' => 'setRegistryName',
            'registryType' => 'setRegistryType',
            'apiVersion' => 'setApiVersion',
            'protocol' => 'setProtocol',
            'registryAddr' => 'setRegistryAddr',
            'registryUsername' => 'setRegistryUsername',
            'namespace' => 'setNamespace',
            'connectClusterId' => 'setConnectClusterId',
            'getScanImageChannel' => 'setGetScanImageChannel',
            'status' => 'setStatus',
            'failReason' => 'setFailReason',
            'imagesNum' => 'setImagesNum',
            'latestSyncTime' => 'setLatestSyncTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 镜像仓ID **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor harbor仓库 - Jfrog jfrog仓库 - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * apiVersion  **参数解释**： 镜像仓接口版本 **取值范围**：   - V1：V1版本   - V2：V2版本
    * protocol  **参数解释**： 协议类型 **取值范围**：   - http：http协议   - https：https协议
    * registryAddr  **参数解释**： 镜像仓地址 **取值范围**： 字符长度1-256位
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **取值范围**： 字符长度1-128位
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时返回此值。 **取值范围**： 字符长度1-128位
    * connectClusterId  **参数解释**： 承载集群id **取值范围**： 字符长度1-64位
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。
    * status  **参数解释**： 接入状态 **取值范围**： - success：接入成功 - fail：接入异常 - accessing：接入中
    * failReason  **参数解释**: 失败原因 **取值范围**: - CREATE_JOB_FAILED：集群接入状态异常，请检查集群接入状态。 - REQUEST_API_ERROR：网络不通，访问镜像仓失败。请检查承载集群是否能正常访问镜像仓 ，或前往三方镜像仓页面重新接入。 - SERVER_ERROR：系统内部错误，请稍后重试。
    * imagesNum  **参数解释**： 镜像数量 **取值范围**： 0-20000
    * latestSyncTime  **参数解释**： 最近同步时间，时间单位 毫秒（ms） **取值范围**： 0-9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'registryName' => 'getRegistryName',
            'registryType' => 'getRegistryType',
            'apiVersion' => 'getApiVersion',
            'protocol' => 'getProtocol',
            'registryAddr' => 'getRegistryAddr',
            'registryUsername' => 'getRegistryUsername',
            'namespace' => 'getNamespace',
            'connectClusterId' => 'getConnectClusterId',
            'getScanImageChannel' => 'getGetScanImageChannel',
            'status' => 'getStatus',
            'failReason' => 'getFailReason',
            'imagesNum' => 'getImagesNum',
            'latestSyncTime' => 'getLatestSyncTime'
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
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['registryAddr'] = isset($data['registryAddr']) ? $data['registryAddr'] : null;
        $this->container['registryUsername'] = isset($data['registryUsername']) ? $data['registryUsername'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['connectClusterId'] = isset($data['connectClusterId']) ? $data['connectClusterId'] : null;
        $this->container['getScanImageChannel'] = isset($data['getScanImageChannel']) ? $data['getScanImageChannel'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['imagesNum'] = isset($data['imagesNum']) ? $data['imagesNum'] : null;
        $this->container['latestSyncTime'] = isset($data['latestSyncTime']) ? $data['latestSyncTime'] : null;
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
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryType']) && !preg_match("/^.*$/", $this->container['registryType'])) {
                $invalidProperties[] = "invalid value for 'registryType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 32)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryAddr']) && (mb_strlen($this->container['registryAddr']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryAddr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryAddr']) && (mb_strlen($this->container['registryAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryAddr']) && !preg_match("/^.*$/", $this->container['registryAddr'])) {
                $invalidProperties[] = "invalid value for 'registryAddr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryUsername']) && (mb_strlen($this->container['registryUsername']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryUsername', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryUsername']) && (mb_strlen($this->container['registryUsername']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryUsername', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryUsername']) && !preg_match("/^.*$/", $this->container['registryUsername'])) {
                $invalidProperties[] = "invalid value for 'registryUsername', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 128)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['connectClusterId']) && (mb_strlen($this->container['connectClusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectClusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['connectClusterId']) && (mb_strlen($this->container['connectClusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'connectClusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['connectClusterId']) && !preg_match("/^[a-z0-9-]*$/", $this->container['connectClusterId'])) {
                $invalidProperties[] = "invalid value for 'connectClusterId', must be conform to the pattern /^[a-z0-9-]*$/.";
            }
            if (!is_null($this->container['getScanImageChannel']) && (mb_strlen($this->container['getScanImageChannel']) > 32)) {
                $invalidProperties[] = "invalid value for 'getScanImageChannel', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['getScanImageChannel']) && (mb_strlen($this->container['getScanImageChannel']) < 1)) {
                $invalidProperties[] = "invalid value for 'getScanImageChannel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) > 128)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imagesNum']) && ($this->container['imagesNum'] > 20000)) {
                $invalidProperties[] = "invalid value for 'imagesNum', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['imagesNum']) && ($this->container['imagesNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imagesNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestSyncTime']) && ($this->container['latestSyncTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestSyncTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestSyncTime']) && ($this->container['latestSyncTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestSyncTime', must be bigger than or equal to 0.";
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
    *  **参数解释**: 镜像仓ID **取值范围**: 字符长度1-64位
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
    * @param string|null $id **参数解释**: 镜像仓ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets registryName
    *  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getRegistryName()
    {
        return $this->container['registryName'];
    }

    /**
    * Sets registryName
    *
    * @param string|null $registryName **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets registryType
    *  **参数解释**: 镜像仓类型 **取值范围**: - Harbor harbor仓库 - Jfrog jfrog仓库 - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    *
    * @return string|null
    */
    public function getRegistryType()
    {
        return $this->container['registryType'];
    }

    /**
    * Sets registryType
    *
    * @param string|null $registryType **参数解释**: 镜像仓类型 **取值范围**: - Harbor harbor仓库 - Jfrog jfrog仓库 - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    *
    * @return $this
    */
    public function setRegistryType($registryType)
    {
        $this->container['registryType'] = $registryType;
        return $this;
    }

    /**
    * Gets apiVersion
    *  **参数解释**： 镜像仓接口版本 **取值范围**：   - V1：V1版本   - V2：V2版本
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion **参数解释**： 镜像仓接口版本 **取值范围**：   - V1：V1版本   - V2：V2版本
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议类型 **取值范围**：   - http：http协议   - https：https协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol **参数解释**： 协议类型 **取值范围**：   - http：http协议   - https：https协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets registryAddr
    *  **参数解释**： 镜像仓地址 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getRegistryAddr()
    {
        return $this->container['registryAddr'];
    }

    /**
    * Sets registryAddr
    *
    * @param string|null $registryAddr **参数解释**： 镜像仓地址 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setRegistryAddr($registryAddr)
    {
        $this->container['registryAddr'] = $registryAddr;
        return $this;
    }

    /**
    * Gets registryUsername
    *  **参数解释**： 用于登录镜像仓的用户名。 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getRegistryUsername()
    {
        return $this->container['registryUsername'];
    }

    /**
    * Sets registryUsername
    *
    * @param string|null $registryUsername **参数解释**： 用于登录镜像仓的用户名。 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setRegistryUsername($registryUsername)
    {
        $this->container['registryUsername'] = $registryUsername;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时返回此值。 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时返回此值。 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets connectClusterId
    *  **参数解释**： 承载集群id **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getConnectClusterId()
    {
        return $this->container['connectClusterId'];
    }

    /**
    * Sets connectClusterId
    *
    * @param string|null $connectClusterId **参数解释**： 承载集群id **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setConnectClusterId($connectClusterId)
    {
        $this->container['connectClusterId'] = $connectClusterId;
        return $this;
    }

    /**
    * Gets getScanImageChannel
    *  **参数解释**： 获取扫描组件的方式 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。
    *
    * @return string|null
    */
    public function getGetScanImageChannel()
    {
        return $this->container['getScanImageChannel'];
    }

    /**
    * Sets getScanImageChannel
    *
    * @param string|null $getScanImageChannel **参数解释**： 获取扫描组件的方式 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。
    *
    * @return $this
    */
    public function setGetScanImageChannel($getScanImageChannel)
    {
        $this->container['getScanImageChannel'] = $getScanImageChannel;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 接入状态 **取值范围**： - success：接入成功 - fail：接入异常 - accessing：接入中
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
    * @param string|null $status **参数解释**： 接入状态 **取值范围**： - success：接入成功 - fail：接入异常 - accessing：接入中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failReason
    *  **参数解释**: 失败原因 **取值范围**: - CREATE_JOB_FAILED：集群接入状态异常，请检查集群接入状态。 - REQUEST_API_ERROR：网络不通，访问镜像仓失败。请检查承载集群是否能正常访问镜像仓 ，或前往三方镜像仓页面重新接入。 - SERVER_ERROR：系统内部错误，请稍后重试。
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason **参数解释**: 失败原因 **取值范围**: - CREATE_JOB_FAILED：集群接入状态异常，请检查集群接入状态。 - REQUEST_API_ERROR：网络不通，访问镜像仓失败。请检查承载集群是否能正常访问镜像仓 ，或前往三方镜像仓页面重新接入。 - SERVER_ERROR：系统内部错误，请稍后重试。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets imagesNum
    *  **参数解释**： 镜像数量 **取值范围**： 0-20000
    *
    * @return int|null
    */
    public function getImagesNum()
    {
        return $this->container['imagesNum'];
    }

    /**
    * Sets imagesNum
    *
    * @param int|null $imagesNum **参数解释**： 镜像数量 **取值范围**： 0-20000
    *
    * @return $this
    */
    public function setImagesNum($imagesNum)
    {
        $this->container['imagesNum'] = $imagesNum;
        return $this;
    }

    /**
    * Gets latestSyncTime
    *  **参数解释**： 最近同步时间，时间单位 毫秒（ms） **取值范围**： 0-9223372036854775807
    *
    * @return int|null
    */
    public function getLatestSyncTime()
    {
        return $this->container['latestSyncTime'];
    }

    /**
    * Sets latestSyncTime
    *
    * @param int|null $latestSyncTime **参数解释**： 最近同步时间，时间单位 毫秒（ms） **取值范围**： 0-9223372036854775807
    *
    * @return $this
    */
    public function setLatestSyncTime($latestSyncTime)
    {
        $this->container['latestSyncTime'] = $latestSyncTime;
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

