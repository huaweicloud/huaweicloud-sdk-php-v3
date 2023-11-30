<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReinstallNodeSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReinstallNodeSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * os  操作系统。指定自定义镜像场景将以IMS镜像的实际操作系统版本为准。请选择当前集群支持的操作系统版本，例如EulerOS 2.5、CentOS 7.6、EulerOS 2.8。
    * login  login
    * name  节点名称 > 重装时指定将修改节点名称，且服务器名称会同步修改。默认以服务器当前名称作为节点名称。 > 命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-56位。
    * serverConfig  serverConfig
    * volumeConfig  volumeConfig
    * runtimeConfig  runtimeConfig
    * k8sOptions  k8sOptions
    * lifecycle  lifecycle
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'os' => 'string',
            'login' => '\HuaweiCloud\SDK\Cce\V3\Model\Login',
            'name' => 'string',
            'serverConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\ReinstallServerConfig',
            'volumeConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\ReinstallVolumeConfig',
            'runtimeConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\ReinstallRuntimeConfig',
            'k8sOptions' => '\HuaweiCloud\SDK\Cce\V3\Model\ReinstallK8sOptionsConfig',
            'lifecycle' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeLifecycleConfig',
            'initializedConditions' => 'string[]',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\ReinstallExtendParam',
            'hostnameConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\HostnameConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * os  操作系统。指定自定义镜像场景将以IMS镜像的实际操作系统版本为准。请选择当前集群支持的操作系统版本，例如EulerOS 2.5、CentOS 7.6、EulerOS 2.8。
    * login  login
    * name  节点名称 > 重装时指定将修改节点名称，且服务器名称会同步修改。默认以服务器当前名称作为节点名称。 > 命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-56位。
    * serverConfig  serverConfig
    * volumeConfig  volumeConfig
    * runtimeConfig  runtimeConfig
    * k8sOptions  k8sOptions
    * lifecycle  lifecycle
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'os' => null,
        'login' => null,
        'name' => null,
        'serverConfig' => null,
        'volumeConfig' => null,
        'runtimeConfig' => null,
        'k8sOptions' => null,
        'lifecycle' => null,
        'initializedConditions' => null,
        'extendParam' => null,
        'hostnameConfig' => null
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
    * os  操作系统。指定自定义镜像场景将以IMS镜像的实际操作系统版本为准。请选择当前集群支持的操作系统版本，例如EulerOS 2.5、CentOS 7.6、EulerOS 2.8。
    * login  login
    * name  节点名称 > 重装时指定将修改节点名称，且服务器名称会同步修改。默认以服务器当前名称作为节点名称。 > 命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-56位。
    * serverConfig  serverConfig
    * volumeConfig  volumeConfig
    * runtimeConfig  runtimeConfig
    * k8sOptions  k8sOptions
    * lifecycle  lifecycle
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'os' => 'os',
            'login' => 'login',
            'name' => 'name',
            'serverConfig' => 'serverConfig',
            'volumeConfig' => 'volumeConfig',
            'runtimeConfig' => 'runtimeConfig',
            'k8sOptions' => 'k8sOptions',
            'lifecycle' => 'lifecycle',
            'initializedConditions' => 'initializedConditions',
            'extendParam' => 'extendParam',
            'hostnameConfig' => 'hostnameConfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * os  操作系统。指定自定义镜像场景将以IMS镜像的实际操作系统版本为准。请选择当前集群支持的操作系统版本，例如EulerOS 2.5、CentOS 7.6、EulerOS 2.8。
    * login  login
    * name  节点名称 > 重装时指定将修改节点名称，且服务器名称会同步修改。默认以服务器当前名称作为节点名称。 > 命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-56位。
    * serverConfig  serverConfig
    * volumeConfig  volumeConfig
    * runtimeConfig  runtimeConfig
    * k8sOptions  k8sOptions
    * lifecycle  lifecycle
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'os' => 'setOs',
            'login' => 'setLogin',
            'name' => 'setName',
            'serverConfig' => 'setServerConfig',
            'volumeConfig' => 'setVolumeConfig',
            'runtimeConfig' => 'setRuntimeConfig',
            'k8sOptions' => 'setK8sOptions',
            'lifecycle' => 'setLifecycle',
            'initializedConditions' => 'setInitializedConditions',
            'extendParam' => 'setExtendParam',
            'hostnameConfig' => 'setHostnameConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * os  操作系统。指定自定义镜像场景将以IMS镜像的实际操作系统版本为准。请选择当前集群支持的操作系统版本，例如EulerOS 2.5、CentOS 7.6、EulerOS 2.8。
    * login  login
    * name  节点名称 > 重装时指定将修改节点名称，且服务器名称会同步修改。默认以服务器当前名称作为节点名称。 > 命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-56位。
    * serverConfig  serverConfig
    * volumeConfig  volumeConfig
    * runtimeConfig  runtimeConfig
    * k8sOptions  k8sOptions
    * lifecycle  lifecycle
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'os' => 'getOs',
            'login' => 'getLogin',
            'name' => 'getName',
            'serverConfig' => 'getServerConfig',
            'volumeConfig' => 'getVolumeConfig',
            'runtimeConfig' => 'getRuntimeConfig',
            'k8sOptions' => 'getK8sOptions',
            'lifecycle' => 'getLifecycle',
            'initializedConditions' => 'getInitializedConditions',
            'extendParam' => 'getExtendParam',
            'hostnameConfig' => 'getHostnameConfig'
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['serverConfig'] = isset($data['serverConfig']) ? $data['serverConfig'] : null;
        $this->container['volumeConfig'] = isset($data['volumeConfig']) ? $data['volumeConfig'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['k8sOptions'] = isset($data['k8sOptions']) ? $data['k8sOptions'] : null;
        $this->container['lifecycle'] = isset($data['lifecycle']) ? $data['lifecycle'] : null;
        $this->container['initializedConditions'] = isset($data['initializedConditions']) ? $data['initializedConditions'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
        $this->container['hostnameConfig'] = isset($data['hostnameConfig']) ? $data['hostnameConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ($this->container['login'] === null) {
            $invalidProperties[] = "'login' can't be null";
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
    * Gets os
    *  操作系统。指定自定义镜像场景将以IMS镜像的实际操作系统版本为准。请选择当前集群支持的操作系统版本，例如EulerOS 2.5、CentOS 7.6、EulerOS 2.8。
    *
    * @return string
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string $os 操作系统。指定自定义镜像场景将以IMS镜像的实际操作系统版本为准。请选择当前集群支持的操作系统版本，例如EulerOS 2.5、CentOS 7.6、EulerOS 2.8。
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Login
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Login $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets name
    *  节点名称 > 重装时指定将修改节点名称，且服务器名称会同步修改。默认以服务器当前名称作为节点名称。 > 命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-56位。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 节点名称 > 重装时指定将修改节点名称，且服务器名称会同步修改。默认以服务器当前名称作为节点名称。 > 命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-56位。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets serverConfig
    *  serverConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ReinstallServerConfig|null
    */
    public function getServerConfig()
    {
        return $this->container['serverConfig'];
    }

    /**
    * Sets serverConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ReinstallServerConfig|null $serverConfig serverConfig
    *
    * @return $this
    */
    public function setServerConfig($serverConfig)
    {
        $this->container['serverConfig'] = $serverConfig;
        return $this;
    }

    /**
    * Gets volumeConfig
    *  volumeConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ReinstallVolumeConfig|null
    */
    public function getVolumeConfig()
    {
        return $this->container['volumeConfig'];
    }

    /**
    * Sets volumeConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ReinstallVolumeConfig|null $volumeConfig volumeConfig
    *
    * @return $this
    */
    public function setVolumeConfig($volumeConfig)
    {
        $this->container['volumeConfig'] = $volumeConfig;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  runtimeConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ReinstallRuntimeConfig|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ReinstallRuntimeConfig|null $runtimeConfig runtimeConfig
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets k8sOptions
    *  k8sOptions
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ReinstallK8sOptionsConfig|null
    */
    public function getK8sOptions()
    {
        return $this->container['k8sOptions'];
    }

    /**
    * Sets k8sOptions
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ReinstallK8sOptionsConfig|null $k8sOptions k8sOptions
    *
    * @return $this
    */
    public function setK8sOptions($k8sOptions)
    {
        $this->container['k8sOptions'] = $k8sOptions;
        return $this;
    }

    /**
    * Gets lifecycle
    *  lifecycle
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeLifecycleConfig|null
    */
    public function getLifecycle()
    {
        return $this->container['lifecycle'];
    }

    /**
    * Sets lifecycle
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeLifecycleConfig|null $lifecycle lifecycle
    *
    * @return $this
    */
    public function setLifecycle($lifecycle)
    {
        $this->container['lifecycle'] = $lifecycle;
        return $this;
    }

    /**
    * Gets initializedConditions
    *  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    *
    * @return string[]|null
    */
    public function getInitializedConditions()
    {
        return $this->container['initializedConditions'];
    }

    /**
    * Sets initializedConditions
    *
    * @param string[]|null $initializedConditions 自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    *
    * @return $this
    */
    public function setInitializedConditions($initializedConditions)
    {
        $this->container['initializedConditions'] = $initializedConditions;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ReinstallExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ReinstallExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
        return $this;
    }

    /**
    * Gets hostnameConfig
    *  hostnameConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\HostnameConfig|null
    */
    public function getHostnameConfig()
    {
        return $this->container['hostnameConfig'];
    }

    /**
    * Sets hostnameConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\HostnameConfig|null $hostnameConfig hostnameConfig
    *
    * @return $this
    */
    public function setHostnameConfig($hostnameConfig)
    {
        $this->container['hostnameConfig'] = $hostnameConfig;
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

