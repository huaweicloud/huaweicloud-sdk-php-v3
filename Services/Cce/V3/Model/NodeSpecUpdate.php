<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSpecUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSpecUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。默认值为空。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ``` > 参数未指定或者为空数组时将删除节点池的自定义Taints
    * k8sTags  格式为key/value键值对。键值对个数不超过20条。默认值为空。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ``` > 参数未指定或者为空对象时将删除节点池的自定义K8s标签
    * userTags  云服务器标签，键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。默认值为空。 > 参数未指定或者为空数组时将删除节点池的自定义云服务器标签
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  默认值为空。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * login  login
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taints' => '\HuaweiCloud\SDK\Cce\V3\Model\Taint[]',
            'k8sTags' => 'map[string,string]',
            'userTags' => '\HuaweiCloud\SDK\Cce\V3\Model\UserTag[]',
            'initializedConditions' => 'string[]',
            'login' => '\HuaweiCloud\SDK\Cce\V3\Model\Login'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。默认值为空。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ``` > 参数未指定或者为空数组时将删除节点池的自定义Taints
    * k8sTags  格式为key/value键值对。键值对个数不超过20条。默认值为空。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ``` > 参数未指定或者为空对象时将删除节点池的自定义K8s标签
    * userTags  云服务器标签，键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。默认值为空。 > 参数未指定或者为空数组时将删除节点池的自定义云服务器标签
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  默认值为空。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * login  login
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taints' => null,
        'k8sTags' => null,
        'userTags' => null,
        'initializedConditions' => null,
        'login' => null
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
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。默认值为空。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ``` > 参数未指定或者为空数组时将删除节点池的自定义Taints
    * k8sTags  格式为key/value键值对。键值对个数不超过20条。默认值为空。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ``` > 参数未指定或者为空对象时将删除节点池的自定义K8s标签
    * userTags  云服务器标签，键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。默认值为空。 > 参数未指定或者为空数组时将删除节点池的自定义云服务器标签
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  默认值为空。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * login  login
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taints' => 'taints',
            'k8sTags' => 'k8sTags',
            'userTags' => 'userTags',
            'initializedConditions' => 'initializedConditions',
            'login' => 'login'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。默认值为空。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ``` > 参数未指定或者为空数组时将删除节点池的自定义Taints
    * k8sTags  格式为key/value键值对。键值对个数不超过20条。默认值为空。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ``` > 参数未指定或者为空对象时将删除节点池的自定义K8s标签
    * userTags  云服务器标签，键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。默认值为空。 > 参数未指定或者为空数组时将删除节点池的自定义云服务器标签
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  默认值为空。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * login  login
    *
    * @var string[]
    */
    protected static $setters = [
            'taints' => 'setTaints',
            'k8sTags' => 'setK8sTags',
            'userTags' => 'setUserTags',
            'initializedConditions' => 'setInitializedConditions',
            'login' => 'setLogin'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。默认值为空。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ``` > 参数未指定或者为空数组时将删除节点池的自定义Taints
    * k8sTags  格式为key/value键值对。键值对个数不超过20条。默认值为空。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ``` > 参数未指定或者为空对象时将删除节点池的自定义K8s标签
    * userTags  云服务器标签，键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。默认值为空。 > 参数未指定或者为空数组时将删除节点池的自定义云服务器标签
    * initializedConditions  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  默认值为空。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    * login  login
    *
    * @var string[]
    */
    protected static $getters = [
            'taints' => 'getTaints',
            'k8sTags' => 'getK8sTags',
            'userTags' => 'getUserTags',
            'initializedConditions' => 'getInitializedConditions',
            'login' => 'getLogin'
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
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['k8sTags'] = isset($data['k8sTags']) ? $data['k8sTags'] : null;
        $this->container['userTags'] = isset($data['userTags']) ? $data['userTags'] : null;
        $this->container['initializedConditions'] = isset($data['initializedConditions']) ? $data['initializedConditions'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taints'] === null) {
            $invalidProperties[] = "'taints' can't be null";
        }
        if ($this->container['k8sTags'] === null) {
            $invalidProperties[] = "'k8sTags' can't be null";
        }
        if ($this->container['userTags'] === null) {
            $invalidProperties[] = "'userTags' can't be null";
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
    * Gets taints
    *  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。默认值为空。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ``` > 参数未指定或者为空数组时将删除节点池的自定义Taints
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Taint[]
    */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
    * Sets taints
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Taint[] $taints 支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。默认值为空。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ``` > 参数未指定或者为空数组时将删除节点池的自定义Taints
    *
    * @return $this
    */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;
        return $this;
    }

    /**
    * Gets k8sTags
    *  格式为key/value键值对。键值对个数不超过20条。默认值为空。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ``` > 参数未指定或者为空对象时将删除节点池的自定义K8s标签
    *
    * @return map[string,string]
    */
    public function getK8sTags()
    {
        return $this->container['k8sTags'];
    }

    /**
    * Sets k8sTags
    *
    * @param map[string,string] $k8sTags 格式为key/value键值对。键值对个数不超过20条。默认值为空。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ``` > 参数未指定或者为空对象时将删除节点池的自定义K8s标签
    *
    * @return $this
    */
    public function setK8sTags($k8sTags)
    {
        $this->container['k8sTags'] = $k8sTags;
        return $this;
    }

    /**
    * Gets userTags
    *  云服务器标签，键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。默认值为空。 > 参数未指定或者为空数组时将删除节点池的自定义云服务器标签
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UserTag[]
    */
    public function getUserTags()
    {
        return $this->container['userTags'];
    }

    /**
    * Sets userTags
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UserTag[] $userTags 云服务器标签，键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。默认值为空。 > 参数未指定或者为空数组时将删除节点池的自定义云服务器标签
    *
    * @return $this
    */
    public function setUserTags($userTags)
    {
        $this->container['userTags'] = $userTags;
        return $this;
    }

    /**
    * Gets initializedConditions
    *  自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  默认值为空。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
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
    * @param string[]|null $initializedConditions 自定义初始化标记。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。  cce支持自定义初始化标记，在接收到initializedConditions参数后，会将参数值转换成节点标签，随节点下发，例如：cloudprovider.openvessel.io/inject-initialized-conditions=CCEInitial_CustomedInitial。  当节点上设置了此标签，会轮询节点的status.Conditions，查看conditions的type是否存在标记名，如CCEInitial、CustomedInitial标记，如果存在所有传入的标记，且状态为True，认为节点初始化完成，则移除初始化污点。  默认值为空。  - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个
    *
    * @return $this
    */
    public function setInitializedConditions($initializedConditions)
    {
        $this->container['initializedConditions'] = $initializedConditions;
        return $this;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Login|null
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Login|null $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
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

