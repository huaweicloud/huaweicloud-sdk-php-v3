<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRegistryRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRegistryRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiVersion  **参数解释**： 镜像仓接口版本 **约束限制**： 不涉及 **取值范围**：   - V1：V1版本   - V2：V2版本  **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**：   - http：http协议   - https：https协议  **默认取值**： 不涉及
    * registryAddr  **参数解释**： 镜像仓地址 **约束限制**： 网址/IP:端口。如：myharbor.com。 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * registryPassword  **参数解释**： 用于登录镜像仓的密码。仅用于访问镜像仓，HSS服务不会存储您的镜像仓密码。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时需要填写。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * connectClusterId  **参数解释**： 承载集群id。请选择一个已接入HSS的集群作为承载集群，镜像同步组件和扫描组件会以任务的方式运行在您所选的集群上，来帮助主机安全获取您的镜像数据和扫描镜像安全风险。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位  **默认取值**： 不涉及
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **约束限制**： 不涉及 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。选择此方式，需要调用接口/v5/{project_id}/image/registries/image-upload-command 获取扫描组件镜像上传指令。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiVersion' => 'string',
            'protocol' => 'string',
            'registryAddr' => 'string',
            'registryUsername' => 'string',
            'registryPassword' => 'string',
            'namespace' => 'string',
            'connectClusterId' => 'string',
            'getScanImageChannel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiVersion  **参数解释**： 镜像仓接口版本 **约束限制**： 不涉及 **取值范围**：   - V1：V1版本   - V2：V2版本  **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**：   - http：http协议   - https：https协议  **默认取值**： 不涉及
    * registryAddr  **参数解释**： 镜像仓地址 **约束限制**： 网址/IP:端口。如：myharbor.com。 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * registryPassword  **参数解释**： 用于登录镜像仓的密码。仅用于访问镜像仓，HSS服务不会存储您的镜像仓密码。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时需要填写。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * connectClusterId  **参数解释**： 承载集群id。请选择一个已接入HSS的集群作为承载集群，镜像同步组件和扫描组件会以任务的方式运行在您所选的集群上，来帮助主机安全获取您的镜像数据和扫描镜像安全风险。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位  **默认取值**： 不涉及
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **约束限制**： 不涉及 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。选择此方式，需要调用接口/v5/{project_id}/image/registries/image-upload-command 获取扫描组件镜像上传指令。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiVersion' => null,
        'protocol' => null,
        'registryAddr' => null,
        'registryUsername' => null,
        'registryPassword' => null,
        'namespace' => null,
        'connectClusterId' => null,
        'getScanImageChannel' => null
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
    * apiVersion  **参数解释**： 镜像仓接口版本 **约束限制**： 不涉及 **取值范围**：   - V1：V1版本   - V2：V2版本  **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**：   - http：http协议   - https：https协议  **默认取值**： 不涉及
    * registryAddr  **参数解释**： 镜像仓地址 **约束限制**： 网址/IP:端口。如：myharbor.com。 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * registryPassword  **参数解释**： 用于登录镜像仓的密码。仅用于访问镜像仓，HSS服务不会存储您的镜像仓密码。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时需要填写。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * connectClusterId  **参数解释**： 承载集群id。请选择一个已接入HSS的集群作为承载集群，镜像同步组件和扫描组件会以任务的方式运行在您所选的集群上，来帮助主机安全获取您的镜像数据和扫描镜像安全风险。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位  **默认取值**： 不涉及
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **约束限制**： 不涉及 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。选择此方式，需要调用接口/v5/{project_id}/image/registries/image-upload-command 获取扫描组件镜像上传指令。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiVersion' => 'api_version',
            'protocol' => 'protocol',
            'registryAddr' => 'registry_addr',
            'registryUsername' => 'registry_username',
            'registryPassword' => 'registry_password',
            'namespace' => 'namespace',
            'connectClusterId' => 'connect_cluster_id',
            'getScanImageChannel' => 'get_scan_image_channel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiVersion  **参数解释**： 镜像仓接口版本 **约束限制**： 不涉及 **取值范围**：   - V1：V1版本   - V2：V2版本  **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**：   - http：http协议   - https：https协议  **默认取值**： 不涉及
    * registryAddr  **参数解释**： 镜像仓地址 **约束限制**： 网址/IP:端口。如：myharbor.com。 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * registryPassword  **参数解释**： 用于登录镜像仓的密码。仅用于访问镜像仓，HSS服务不会存储您的镜像仓密码。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时需要填写。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * connectClusterId  **参数解释**： 承载集群id。请选择一个已接入HSS的集群作为承载集群，镜像同步组件和扫描组件会以任务的方式运行在您所选的集群上，来帮助主机安全获取您的镜像数据和扫描镜像安全风险。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位  **默认取值**： 不涉及
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **约束限制**： 不涉及 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。选择此方式，需要调用接口/v5/{project_id}/image/registries/image-upload-command 获取扫描组件镜像上传指令。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'apiVersion' => 'setApiVersion',
            'protocol' => 'setProtocol',
            'registryAddr' => 'setRegistryAddr',
            'registryUsername' => 'setRegistryUsername',
            'registryPassword' => 'setRegistryPassword',
            'namespace' => 'setNamespace',
            'connectClusterId' => 'setConnectClusterId',
            'getScanImageChannel' => 'setGetScanImageChannel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiVersion  **参数解释**： 镜像仓接口版本 **约束限制**： 不涉及 **取值范围**：   - V1：V1版本   - V2：V2版本  **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**：   - http：http协议   - https：https协议  **默认取值**： 不涉及
    * registryAddr  **参数解释**： 镜像仓地址 **约束限制**： 网址/IP:端口。如：myharbor.com。 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * registryUsername  **参数解释**： 用于登录镜像仓的用户名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * registryPassword  **参数解释**： 用于登录镜像仓的密码。仅用于访问镜像仓，HSS服务不会存储您的镜像仓密码。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * namespace  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时需要填写。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    * connectClusterId  **参数解释**： 承载集群id。请选择一个已接入HSS的集群作为承载集群，镜像同步组件和扫描组件会以任务的方式运行在您所选的集群上，来帮助主机安全获取您的镜像数据和扫描镜像安全风险。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位  **默认取值**： 不涉及
    * getScanImageChannel  **参数解释**： 获取扫描组件的方式 **约束限制**： 不涉及 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。选择此方式，需要调用接口/v5/{project_id}/image/registries/image-upload-command 获取扫描组件镜像上传指令。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'apiVersion' => 'getApiVersion',
            'protocol' => 'getProtocol',
            'registryAddr' => 'getRegistryAddr',
            'registryUsername' => 'getRegistryUsername',
            'registryPassword' => 'getRegistryPassword',
            'namespace' => 'getNamespace',
            'connectClusterId' => 'getConnectClusterId',
            'getScanImageChannel' => 'getGetScanImageChannel'
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['registryAddr'] = isset($data['registryAddr']) ? $data['registryAddr'] : null;
        $this->container['registryUsername'] = isset($data['registryUsername']) ? $data['registryUsername'] : null;
        $this->container['registryPassword'] = isset($data['registryPassword']) ? $data['registryPassword'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['connectClusterId'] = isset($data['connectClusterId']) ? $data['connectClusterId'] : null;
        $this->container['getScanImageChannel'] = isset($data['getScanImageChannel']) ? $data['getScanImageChannel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['apiVersion']) && !preg_match("/^V1|V2$/", $this->container['apiVersion'])) {
                $invalidProperties[] = "invalid value for 'apiVersion', must be conform to the pattern /^V1|V2$/.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 32)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protocol']) && !preg_match("/^http|https$/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /^http|https$/.";
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
            if (!is_null($this->container['registryPassword']) && (mb_strlen($this->container['registryPassword']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryPassword', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryPassword']) && (mb_strlen($this->container['registryPassword']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryPassword', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryPassword']) && !preg_match("/^.*$/", $this->container['registryPassword'])) {
                $invalidProperties[] = "invalid value for 'registryPassword', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['getScanImageChannel']) && !preg_match("/^Swr|Other$/", $this->container['getScanImageChannel'])) {
                $invalidProperties[] = "invalid value for 'getScanImageChannel', must be conform to the pattern /^Swr|Other$/.";
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
    * Gets apiVersion
    *  **参数解释**： 镜像仓接口版本 **约束限制**： 不涉及 **取值范围**：   - V1：V1版本   - V2：V2版本  **默认取值**： 不涉及
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
    * @param string|null $apiVersion **参数解释**： 镜像仓接口版本 **约束限制**： 不涉及 **取值范围**：   - V1：V1版本   - V2：V2版本  **默认取值**： 不涉及
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
    *  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**：   - http：http协议   - https：https协议  **默认取值**： 不涉及
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
    * @param string|null $protocol **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**：   - http：http协议   - https：https协议  **默认取值**： 不涉及
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
    *  **参数解释**： 镜像仓地址 **约束限制**： 网址/IP:端口。如：myharbor.com。 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
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
    * @param string|null $registryAddr **参数解释**： 镜像仓地址 **约束限制**： 网址/IP:端口。如：myharbor.com。 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
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
    *  **参数解释**： 用于登录镜像仓的用户名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
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
    * @param string|null $registryUsername **参数解释**： 用于登录镜像仓的用户名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRegistryUsername($registryUsername)
    {
        $this->container['registryUsername'] = $registryUsername;
        return $this;
    }

    /**
    * Gets registryPassword
    *  **参数解释**： 用于登录镜像仓的密码。仅用于访问镜像仓，HSS服务不会存储您的镜像仓密码。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getRegistryPassword()
    {
        return $this->container['registryPassword'];
    }

    /**
    * Sets registryPassword
    *
    * @param string|null $registryPassword **参数解释**： 用于登录镜像仓的密码。仅用于访问镜像仓，HSS服务不会存储您的镜像仓密码。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRegistryPassword($registryPassword)
    {
        $this->container['registryPassword'] = $registryPassword;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时需要填写。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
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
    * @param string|null $namespace **参数解释**： 镜像仓项目,用来指定扫描组件要上传到的镜像仓目录。get_scan_image_channel为Other时需要填写。 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位  **默认取值**： 不涉及
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
    *  **参数解释**： 承载集群id。请选择一个已接入HSS的集群作为承载集群，镜像同步组件和扫描组件会以任务的方式运行在您所选的集群上，来帮助主机安全获取您的镜像数据和扫描镜像安全风险。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位  **默认取值**： 不涉及
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
    * @param string|null $connectClusterId **参数解释**： 承载集群id。请选择一个已接入HSS的集群作为承载集群，镜像同步组件和扫描组件会以任务的方式运行在您所选的集群上，来帮助主机安全获取您的镜像数据和扫描镜像安全风险。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位  **默认取值**： 不涉及
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
    *  **参数解释**： 获取扫描组件的方式 **约束限制**： 不涉及 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。选择此方式，需要调用接口/v5/{project_id}/image/registries/image-upload-command 获取扫描组件镜像上传指令。  **默认取值**： 不涉及
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
    * @param string|null $getScanImageChannel **参数解释**： 获取扫描组件的方式 **约束限制**： 不涉及 **取值范围**： - Swr：访问swr获取扫描组件 - Other：手动上传扫描组件到承载集群。选择此方式，需要调用接口/v5/{project_id}/image/registries/image-upload-command 获取扫描组件镜像上传指令。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setGetScanImageChannel($getScanImageChannel)
    {
        $this->container['getScanImageChannel'] = $getScanImageChannel;
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

