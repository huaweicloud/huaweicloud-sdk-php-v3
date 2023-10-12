<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessConfigDeatilCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessConfigDeatilCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paths  采集路径。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次`` CCE类型中 容器路径和主机路径必填，标准输出不用 最小长度：1 最大长度：128
    * blackPaths  采集路径黑名单。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次 最小长度：1 最大长度：128
    * format  format
    * windowsLogInfo  windowsLogInfo
    * stdout  标准输出开关，仅CCE接入类型时使用
    * stderr  标准输出开关标准错误开关，仅CCE接入类型时使用
    * pathType  CCE接入类型，仅CCE接入类型时使用
    * namespaceRegex  K8s Namespace正则匹配，仅CCE接入类型时使用
    * podNameRegex  K8s Pod正则匹配，仅CCE接入类型时使用
    * containerNameRegex  K8s 容器名称正则匹配，仅CCE接入类型时使用
    * includeLabels  容器 Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeLabels  容器 Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeEnvs  环境变量白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeEnvs  环境变量黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logLabels  容器 Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logEnvs  环境变量日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeK8sLabels  K8s Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeK8sLabels  K8s Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logK8s  K8s Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paths' => 'string[]',
            'blackPaths' => 'string[]',
            'format' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigFormatCreate',
            'windowsLogInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigWindowsLogInfoCreate',
            'stdout' => 'bool',
            'stderr' => 'bool',
            'pathType' => 'string',
            'namespaceRegex' => 'string',
            'podNameRegex' => 'string',
            'containerNameRegex' => 'string',
            'includeLabels' => 'map[string,string]',
            'excludeLabels' => 'map[string,string]',
            'includeEnvs' => 'map[string,string]',
            'excludeEnvs' => 'map[string,string]',
            'logLabels' => 'map[string,string]',
            'logEnvs' => 'map[string,string]',
            'includeK8sLabels' => 'map[string,string]',
            'excludeK8sLabels' => 'map[string,string]',
            'logK8s' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paths  采集路径。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次`` CCE类型中 容器路径和主机路径必填，标准输出不用 最小长度：1 最大长度：128
    * blackPaths  采集路径黑名单。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次 最小长度：1 最大长度：128
    * format  format
    * windowsLogInfo  windowsLogInfo
    * stdout  标准输出开关，仅CCE接入类型时使用
    * stderr  标准输出开关标准错误开关，仅CCE接入类型时使用
    * pathType  CCE接入类型，仅CCE接入类型时使用
    * namespaceRegex  K8s Namespace正则匹配，仅CCE接入类型时使用
    * podNameRegex  K8s Pod正则匹配，仅CCE接入类型时使用
    * containerNameRegex  K8s 容器名称正则匹配，仅CCE接入类型时使用
    * includeLabels  容器 Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeLabels  容器 Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeEnvs  环境变量白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeEnvs  环境变量黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logLabels  容器 Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logEnvs  环境变量日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeK8sLabels  K8s Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeK8sLabels  K8s Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logK8s  K8s Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paths' => null,
        'blackPaths' => null,
        'format' => null,
        'windowsLogInfo' => null,
        'stdout' => null,
        'stderr' => null,
        'pathType' => null,
        'namespaceRegex' => null,
        'podNameRegex' => null,
        'containerNameRegex' => null,
        'includeLabels' => null,
        'excludeLabels' => null,
        'includeEnvs' => null,
        'excludeEnvs' => null,
        'logLabels' => null,
        'logEnvs' => null,
        'includeK8sLabels' => null,
        'excludeK8sLabels' => null,
        'logK8s' => null
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
    * paths  采集路径。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次`` CCE类型中 容器路径和主机路径必填，标准输出不用 最小长度：1 最大长度：128
    * blackPaths  采集路径黑名单。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次 最小长度：1 最大长度：128
    * format  format
    * windowsLogInfo  windowsLogInfo
    * stdout  标准输出开关，仅CCE接入类型时使用
    * stderr  标准输出开关标准错误开关，仅CCE接入类型时使用
    * pathType  CCE接入类型，仅CCE接入类型时使用
    * namespaceRegex  K8s Namespace正则匹配，仅CCE接入类型时使用
    * podNameRegex  K8s Pod正则匹配，仅CCE接入类型时使用
    * containerNameRegex  K8s 容器名称正则匹配，仅CCE接入类型时使用
    * includeLabels  容器 Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeLabels  容器 Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeEnvs  环境变量白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeEnvs  环境变量黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logLabels  容器 Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logEnvs  环境变量日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeK8sLabels  K8s Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeK8sLabels  K8s Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logK8s  K8s Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paths' => 'paths',
            'blackPaths' => 'black_paths',
            'format' => 'format',
            'windowsLogInfo' => 'windows_log_info',
            'stdout' => 'stdout',
            'stderr' => 'stderr',
            'pathType' => 'pathType',
            'namespaceRegex' => 'namespaceRegex',
            'podNameRegex' => 'podNameRegex',
            'containerNameRegex' => 'containerNameRegex',
            'includeLabels' => 'includeLabels',
            'excludeLabels' => 'excludeLabels',
            'includeEnvs' => 'includeEnvs',
            'excludeEnvs' => 'excludeEnvs',
            'logLabels' => 'logLabels',
            'logEnvs' => 'logEnvs',
            'includeK8sLabels' => 'includeK8sLabels',
            'excludeK8sLabels' => 'excludeK8sLabels',
            'logK8s' => 'logK8s'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paths  采集路径。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次`` CCE类型中 容器路径和主机路径必填，标准输出不用 最小长度：1 最大长度：128
    * blackPaths  采集路径黑名单。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次 最小长度：1 最大长度：128
    * format  format
    * windowsLogInfo  windowsLogInfo
    * stdout  标准输出开关，仅CCE接入类型时使用
    * stderr  标准输出开关标准错误开关，仅CCE接入类型时使用
    * pathType  CCE接入类型，仅CCE接入类型时使用
    * namespaceRegex  K8s Namespace正则匹配，仅CCE接入类型时使用
    * podNameRegex  K8s Pod正则匹配，仅CCE接入类型时使用
    * containerNameRegex  K8s 容器名称正则匹配，仅CCE接入类型时使用
    * includeLabels  容器 Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeLabels  容器 Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeEnvs  环境变量白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeEnvs  环境变量黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logLabels  容器 Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logEnvs  环境变量日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeK8sLabels  K8s Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeK8sLabels  K8s Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logK8s  K8s Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @var string[]
    */
    protected static $setters = [
            'paths' => 'setPaths',
            'blackPaths' => 'setBlackPaths',
            'format' => 'setFormat',
            'windowsLogInfo' => 'setWindowsLogInfo',
            'stdout' => 'setStdout',
            'stderr' => 'setStderr',
            'pathType' => 'setPathType',
            'namespaceRegex' => 'setNamespaceRegex',
            'podNameRegex' => 'setPodNameRegex',
            'containerNameRegex' => 'setContainerNameRegex',
            'includeLabels' => 'setIncludeLabels',
            'excludeLabels' => 'setExcludeLabels',
            'includeEnvs' => 'setIncludeEnvs',
            'excludeEnvs' => 'setExcludeEnvs',
            'logLabels' => 'setLogLabels',
            'logEnvs' => 'setLogEnvs',
            'includeK8sLabels' => 'setIncludeK8sLabels',
            'excludeK8sLabels' => 'setExcludeK8sLabels',
            'logK8s' => 'setLogK8s'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paths  采集路径。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次`` CCE类型中 容器路径和主机路径必填，标准输出不用 最小长度：1 最大长度：128
    * blackPaths  采集路径黑名单。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次 最小长度：1 最大长度：128
    * format  format
    * windowsLogInfo  windowsLogInfo
    * stdout  标准输出开关，仅CCE接入类型时使用
    * stderr  标准输出开关标准错误开关，仅CCE接入类型时使用
    * pathType  CCE接入类型，仅CCE接入类型时使用
    * namespaceRegex  K8s Namespace正则匹配，仅CCE接入类型时使用
    * podNameRegex  K8s Pod正则匹配，仅CCE接入类型时使用
    * containerNameRegex  K8s 容器名称正则匹配，仅CCE接入类型时使用
    * includeLabels  容器 Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeLabels  容器 Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeEnvs  环境变量白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeEnvs  环境变量黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logLabels  容器 Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logEnvs  环境变量日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * includeK8sLabels  K8s Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * excludeK8sLabels  K8s Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    * logK8s  K8s Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @var string[]
    */
    protected static $getters = [
            'paths' => 'getPaths',
            'blackPaths' => 'getBlackPaths',
            'format' => 'getFormat',
            'windowsLogInfo' => 'getWindowsLogInfo',
            'stdout' => 'getStdout',
            'stderr' => 'getStderr',
            'pathType' => 'getPathType',
            'namespaceRegex' => 'getNamespaceRegex',
            'podNameRegex' => 'getPodNameRegex',
            'containerNameRegex' => 'getContainerNameRegex',
            'includeLabels' => 'getIncludeLabels',
            'excludeLabels' => 'getExcludeLabels',
            'includeEnvs' => 'getIncludeEnvs',
            'excludeEnvs' => 'getExcludeEnvs',
            'logLabels' => 'getLogLabels',
            'logEnvs' => 'getLogEnvs',
            'includeK8sLabels' => 'getIncludeK8sLabels',
            'excludeK8sLabels' => 'getExcludeK8sLabels',
            'logK8s' => 'getLogK8s'
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
    const PATH_TYPE_HOST_FILE = 'HOST_FILE';
    const PATH_TYPE_CONTAINER_STDOUT = 'CONTAINER_STDOUT';
    const PATH_TYPE_CONTAINER_FILE = 'CONTAINER_FILE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPathTypeAllowableValues()
    {
        return [
            self::PATH_TYPE_HOST_FILE,
            self::PATH_TYPE_CONTAINER_STDOUT,
            self::PATH_TYPE_CONTAINER_FILE,
        ];
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
        $this->container['paths'] = isset($data['paths']) ? $data['paths'] : null;
        $this->container['blackPaths'] = isset($data['blackPaths']) ? $data['blackPaths'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['windowsLogInfo'] = isset($data['windowsLogInfo']) ? $data['windowsLogInfo'] : null;
        $this->container['stdout'] = isset($data['stdout']) ? $data['stdout'] : null;
        $this->container['stderr'] = isset($data['stderr']) ? $data['stderr'] : null;
        $this->container['pathType'] = isset($data['pathType']) ? $data['pathType'] : null;
        $this->container['namespaceRegex'] = isset($data['namespaceRegex']) ? $data['namespaceRegex'] : null;
        $this->container['podNameRegex'] = isset($data['podNameRegex']) ? $data['podNameRegex'] : null;
        $this->container['containerNameRegex'] = isset($data['containerNameRegex']) ? $data['containerNameRegex'] : null;
        $this->container['includeLabels'] = isset($data['includeLabels']) ? $data['includeLabels'] : null;
        $this->container['excludeLabels'] = isset($data['excludeLabels']) ? $data['excludeLabels'] : null;
        $this->container['includeEnvs'] = isset($data['includeEnvs']) ? $data['includeEnvs'] : null;
        $this->container['excludeEnvs'] = isset($data['excludeEnvs']) ? $data['excludeEnvs'] : null;
        $this->container['logLabels'] = isset($data['logLabels']) ? $data['logLabels'] : null;
        $this->container['logEnvs'] = isset($data['logEnvs']) ? $data['logEnvs'] : null;
        $this->container['includeK8sLabels'] = isset($data['includeK8sLabels']) ? $data['includeK8sLabels'] : null;
        $this->container['excludeK8sLabels'] = isset($data['excludeK8sLabels']) ? $data['excludeK8sLabels'] : null;
        $this->container['logK8s'] = isset($data['logK8s']) ? $data['logK8s'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            $allowedValues = $this->getPathTypeAllowableValues();
                if (!is_null($this->container['pathType']) && !in_array($this->container['pathType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pathType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets paths
    *  采集路径。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次`` CCE类型中 容器路径和主机路径必填，标准输出不用 最小长度：1 最大长度：128
    *
    * @return string[]|null
    */
    public function getPaths()
    {
        return $this->container['paths'];
    }

    /**
    * Sets paths
    *
    * @param string[]|null $paths 采集路径。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次`` CCE类型中 容器路径和主机路径必填，标准输出不用 最小长度：1 最大长度：128
    *
    * @return $this
    */
    public function setPaths($paths)
    {
        $this->container['paths'] = $paths;
        return $this;
    }

    /**
    * Gets blackPaths
    *  采集路径黑名单。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次 最小长度：1 最大长度：128
    *
    * @return string[]|null
    */
    public function getBlackPaths()
    {
        return $this->container['blackPaths'];
    }

    /**
    * Sets blackPaths
    *
    * @param string[]|null $blackPaths 采集路径黑名单。 1. 路径必须以/或者字母:\\\\开头 2. 不能包含特殊字符<> ' | \" 且不能只输入/ 3. 第一级目录不支持通配符*：不能以/_**   /_*开头 4.**只能出现一次 最小长度：1 最大长度：128
    *
    * @return $this
    */
    public function setBlackPaths($blackPaths)
    {
        $this->container['blackPaths'] = $blackPaths;
        return $this;
    }

    /**
    * Gets format
    *  format
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigFormatCreate
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigFormatCreate $format format
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets windowsLogInfo
    *  windowsLogInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigWindowsLogInfoCreate|null
    */
    public function getWindowsLogInfo()
    {
        return $this->container['windowsLogInfo'];
    }

    /**
    * Sets windowsLogInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigWindowsLogInfoCreate|null $windowsLogInfo windowsLogInfo
    *
    * @return $this
    */
    public function setWindowsLogInfo($windowsLogInfo)
    {
        $this->container['windowsLogInfo'] = $windowsLogInfo;
        return $this;
    }

    /**
    * Gets stdout
    *  标准输出开关，仅CCE接入类型时使用
    *
    * @return bool|null
    */
    public function getStdout()
    {
        return $this->container['stdout'];
    }

    /**
    * Sets stdout
    *
    * @param bool|null $stdout 标准输出开关，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setStdout($stdout)
    {
        $this->container['stdout'] = $stdout;
        return $this;
    }

    /**
    * Gets stderr
    *  标准输出开关标准错误开关，仅CCE接入类型时使用
    *
    * @return bool|null
    */
    public function getStderr()
    {
        return $this->container['stderr'];
    }

    /**
    * Sets stderr
    *
    * @param bool|null $stderr 标准输出开关标准错误开关，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setStderr($stderr)
    {
        $this->container['stderr'] = $stderr;
        return $this;
    }

    /**
    * Gets pathType
    *  CCE接入类型，仅CCE接入类型时使用
    *
    * @return string|null
    */
    public function getPathType()
    {
        return $this->container['pathType'];
    }

    /**
    * Sets pathType
    *
    * @param string|null $pathType CCE接入类型，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setPathType($pathType)
    {
        $this->container['pathType'] = $pathType;
        return $this;
    }

    /**
    * Gets namespaceRegex
    *  K8s Namespace正则匹配，仅CCE接入类型时使用
    *
    * @return string|null
    */
    public function getNamespaceRegex()
    {
        return $this->container['namespaceRegex'];
    }

    /**
    * Sets namespaceRegex
    *
    * @param string|null $namespaceRegex K8s Namespace正则匹配，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setNamespaceRegex($namespaceRegex)
    {
        $this->container['namespaceRegex'] = $namespaceRegex;
        return $this;
    }

    /**
    * Gets podNameRegex
    *  K8s Pod正则匹配，仅CCE接入类型时使用
    *
    * @return string|null
    */
    public function getPodNameRegex()
    {
        return $this->container['podNameRegex'];
    }

    /**
    * Sets podNameRegex
    *
    * @param string|null $podNameRegex K8s Pod正则匹配，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setPodNameRegex($podNameRegex)
    {
        $this->container['podNameRegex'] = $podNameRegex;
        return $this;
    }

    /**
    * Gets containerNameRegex
    *  K8s 容器名称正则匹配，仅CCE接入类型时使用
    *
    * @return string|null
    */
    public function getContainerNameRegex()
    {
        return $this->container['containerNameRegex'];
    }

    /**
    * Sets containerNameRegex
    *
    * @param string|null $containerNameRegex K8s 容器名称正则匹配，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setContainerNameRegex($containerNameRegex)
    {
        $this->container['containerNameRegex'] = $containerNameRegex;
        return $this;
    }

    /**
    * Gets includeLabels
    *  容器 Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getIncludeLabels()
    {
        return $this->container['includeLabels'];
    }

    /**
    * Sets includeLabels
    *
    * @param map[string,string]|null $includeLabels 容器 Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setIncludeLabels($includeLabels)
    {
        $this->container['includeLabels'] = $includeLabels;
        return $this;
    }

    /**
    * Gets excludeLabels
    *  容器 Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getExcludeLabels()
    {
        return $this->container['excludeLabels'];
    }

    /**
    * Sets excludeLabels
    *
    * @param map[string,string]|null $excludeLabels 容器 Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setExcludeLabels($excludeLabels)
    {
        $this->container['excludeLabels'] = $excludeLabels;
        return $this;
    }

    /**
    * Gets includeEnvs
    *  环境变量白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getIncludeEnvs()
    {
        return $this->container['includeEnvs'];
    }

    /**
    * Sets includeEnvs
    *
    * @param map[string,string]|null $includeEnvs 环境变量白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setIncludeEnvs($includeEnvs)
    {
        $this->container['includeEnvs'] = $includeEnvs;
        return $this;
    }

    /**
    * Gets excludeEnvs
    *  环境变量黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getExcludeEnvs()
    {
        return $this->container['excludeEnvs'];
    }

    /**
    * Sets excludeEnvs
    *
    * @param map[string,string]|null $excludeEnvs 环境变量黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setExcludeEnvs($excludeEnvs)
    {
        $this->container['excludeEnvs'] = $excludeEnvs;
        return $this;
    }

    /**
    * Gets logLabels
    *  容器 Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getLogLabels()
    {
        return $this->container['logLabels'];
    }

    /**
    * Sets logLabels
    *
    * @param map[string,string]|null $logLabels 容器 Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setLogLabels($logLabels)
    {
        $this->container['logLabels'] = $logLabels;
        return $this;
    }

    /**
    * Gets logEnvs
    *  环境变量日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getLogEnvs()
    {
        return $this->container['logEnvs'];
    }

    /**
    * Sets logEnvs
    *
    * @param map[string,string]|null $logEnvs 环境变量日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setLogEnvs($logEnvs)
    {
        $this->container['logEnvs'] = $logEnvs;
        return $this;
    }

    /**
    * Gets includeK8sLabels
    *  K8s Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getIncludeK8sLabels()
    {
        return $this->container['includeK8sLabels'];
    }

    /**
    * Sets includeK8sLabels
    *
    * @param map[string,string]|null $includeK8sLabels K8s Label白名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setIncludeK8sLabels($includeK8sLabels)
    {
        $this->container['includeK8sLabels'] = $includeK8sLabels;
        return $this;
    }

    /**
    * Gets excludeK8sLabels
    *  K8s Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getExcludeK8sLabels()
    {
        return $this->container['excludeK8sLabels'];
    }

    /**
    * Sets excludeK8sLabels
    *
    * @param map[string,string]|null $excludeK8sLabels K8s Label黑名单，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setExcludeK8sLabels($excludeK8sLabels)
    {
        $this->container['excludeK8sLabels'] = $excludeK8sLabels;
        return $this;
    }

    /**
    * Gets logK8s
    *  K8s Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return map[string,string]|null
    */
    public function getLogK8s()
    {
        return $this->container['logK8s'];
    }

    /**
    * Sets logK8s
    *
    * @param map[string,string]|null $logK8s K8s Label日志标签，最多支持创建30个，keyname不支持重名，仅CCE接入类型时使用
    *
    * @return $this
    */
    public function setLogK8s($logK8s)
    {
        $this->container['logK8s'] = $logK8s;
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

