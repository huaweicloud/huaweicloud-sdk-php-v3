<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BootstrapScript implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BootstrapScript';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  引导操作脚本的名称，同一个集群的引导操作脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  引导操作脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。 - OBS桶的路径：直接手动输入脚本路径。例如输入MRS提供的公共样例脚本路径。示例：s3a://bootstrap/presto/presto-install.sh，其中安装dualroles时，presto-install.sh脚本参数为dualroles, 安装worker时，presto-install.sh脚本参数为worker。根据Presto使用习惯，建议您在Active Master节点上安装dualroles，在Core节点上安装worker。 - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  引导操作脚本参数。
    * nodes  引导操作脚本所执行的节点类型，包含master、core和task三种类型。 说明：节点类型必须为小写字母。
    * activeMaster  引导操作脚本是否只运行在主Master节点上。 缺省值为false，表示引导操作脚本可运行在所有Master节点上。
    * failAction  引导操作脚本执行失败后，是否继续执行后续脚本和创建集群。  缺省值为errorout,表示终止操作。  说明： 建议您在调试阶段设置为“继续”，无论此引导操作是否执行成功，则集群都能继续安装和启动。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * beforeComponentStart  引导操作脚本执行的时间。目前支持“组件启动前”和“组件启动后”两种类型。 缺省值为false，表示引导操作脚本在组件启动后执行。
    * startTime  单个引导操作脚本的执行时间。
    * state  单个引导操作脚本的运行状态。  - PENDING - IN_PROGRESS - SUCCESS - FAILURE
    * actionStages  选择引导操作脚本执行的时间。 - BEFORE_COMPONENT_FIRST_START: 组件首次启动后 - AFTER_COMPONENT_FIRST_START: 组件首次启动前 - BEFORE_SCALE_IN: 缩容前 - AFTER_SCALE_IN: 缩容后 - BEFORE_SCALE_OUT: 扩容前 - AFTER_SCALE_OUT: 扩容后
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'uri' => 'string',
            'parameters' => 'string',
            'nodes' => 'string[]',
            'activeMaster' => 'bool',
            'failAction' => 'string',
            'beforeComponentStart' => 'bool',
            'startTime' => 'int',
            'state' => 'string',
            'actionStages' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  引导操作脚本的名称，同一个集群的引导操作脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  引导操作脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。 - OBS桶的路径：直接手动输入脚本路径。例如输入MRS提供的公共样例脚本路径。示例：s3a://bootstrap/presto/presto-install.sh，其中安装dualroles时，presto-install.sh脚本参数为dualroles, 安装worker时，presto-install.sh脚本参数为worker。根据Presto使用习惯，建议您在Active Master节点上安装dualroles，在Core节点上安装worker。 - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  引导操作脚本参数。
    * nodes  引导操作脚本所执行的节点类型，包含master、core和task三种类型。 说明：节点类型必须为小写字母。
    * activeMaster  引导操作脚本是否只运行在主Master节点上。 缺省值为false，表示引导操作脚本可运行在所有Master节点上。
    * failAction  引导操作脚本执行失败后，是否继续执行后续脚本和创建集群。  缺省值为errorout,表示终止操作。  说明： 建议您在调试阶段设置为“继续”，无论此引导操作是否执行成功，则集群都能继续安装和启动。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * beforeComponentStart  引导操作脚本执行的时间。目前支持“组件启动前”和“组件启动后”两种类型。 缺省值为false，表示引导操作脚本在组件启动后执行。
    * startTime  单个引导操作脚本的执行时间。
    * state  单个引导操作脚本的运行状态。  - PENDING - IN_PROGRESS - SUCCESS - FAILURE
    * actionStages  选择引导操作脚本执行的时间。 - BEFORE_COMPONENT_FIRST_START: 组件首次启动后 - AFTER_COMPONENT_FIRST_START: 组件首次启动前 - BEFORE_SCALE_IN: 缩容前 - AFTER_SCALE_IN: 缩容后 - BEFORE_SCALE_OUT: 扩容前 - AFTER_SCALE_OUT: 扩容后
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'uri' => null,
        'parameters' => null,
        'nodes' => null,
        'activeMaster' => null,
        'failAction' => null,
        'beforeComponentStart' => null,
        'startTime' => 'int64',
        'state' => null,
        'actionStages' => null
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
    * name  引导操作脚本的名称，同一个集群的引导操作脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  引导操作脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。 - OBS桶的路径：直接手动输入脚本路径。例如输入MRS提供的公共样例脚本路径。示例：s3a://bootstrap/presto/presto-install.sh，其中安装dualroles时，presto-install.sh脚本参数为dualroles, 安装worker时，presto-install.sh脚本参数为worker。根据Presto使用习惯，建议您在Active Master节点上安装dualroles，在Core节点上安装worker。 - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  引导操作脚本参数。
    * nodes  引导操作脚本所执行的节点类型，包含master、core和task三种类型。 说明：节点类型必须为小写字母。
    * activeMaster  引导操作脚本是否只运行在主Master节点上。 缺省值为false，表示引导操作脚本可运行在所有Master节点上。
    * failAction  引导操作脚本执行失败后，是否继续执行后续脚本和创建集群。  缺省值为errorout,表示终止操作。  说明： 建议您在调试阶段设置为“继续”，无论此引导操作是否执行成功，则集群都能继续安装和启动。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * beforeComponentStart  引导操作脚本执行的时间。目前支持“组件启动前”和“组件启动后”两种类型。 缺省值为false，表示引导操作脚本在组件启动后执行。
    * startTime  单个引导操作脚本的执行时间。
    * state  单个引导操作脚本的运行状态。  - PENDING - IN_PROGRESS - SUCCESS - FAILURE
    * actionStages  选择引导操作脚本执行的时间。 - BEFORE_COMPONENT_FIRST_START: 组件首次启动后 - AFTER_COMPONENT_FIRST_START: 组件首次启动前 - BEFORE_SCALE_IN: 缩容前 - AFTER_SCALE_IN: 缩容后 - BEFORE_SCALE_OUT: 扩容前 - AFTER_SCALE_OUT: 扩容后
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'uri' => 'uri',
            'parameters' => 'parameters',
            'nodes' => 'nodes',
            'activeMaster' => 'active_master',
            'failAction' => 'fail_action',
            'beforeComponentStart' => 'before_component_start',
            'startTime' => 'start_time',
            'state' => 'state',
            'actionStages' => 'action_stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  引导操作脚本的名称，同一个集群的引导操作脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  引导操作脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。 - OBS桶的路径：直接手动输入脚本路径。例如输入MRS提供的公共样例脚本路径。示例：s3a://bootstrap/presto/presto-install.sh，其中安装dualroles时，presto-install.sh脚本参数为dualroles, 安装worker时，presto-install.sh脚本参数为worker。根据Presto使用习惯，建议您在Active Master节点上安装dualroles，在Core节点上安装worker。 - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  引导操作脚本参数。
    * nodes  引导操作脚本所执行的节点类型，包含master、core和task三种类型。 说明：节点类型必须为小写字母。
    * activeMaster  引导操作脚本是否只运行在主Master节点上。 缺省值为false，表示引导操作脚本可运行在所有Master节点上。
    * failAction  引导操作脚本执行失败后，是否继续执行后续脚本和创建集群。  缺省值为errorout,表示终止操作。  说明： 建议您在调试阶段设置为“继续”，无论此引导操作是否执行成功，则集群都能继续安装和启动。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * beforeComponentStart  引导操作脚本执行的时间。目前支持“组件启动前”和“组件启动后”两种类型。 缺省值为false，表示引导操作脚本在组件启动后执行。
    * startTime  单个引导操作脚本的执行时间。
    * state  单个引导操作脚本的运行状态。  - PENDING - IN_PROGRESS - SUCCESS - FAILURE
    * actionStages  选择引导操作脚本执行的时间。 - BEFORE_COMPONENT_FIRST_START: 组件首次启动后 - AFTER_COMPONENT_FIRST_START: 组件首次启动前 - BEFORE_SCALE_IN: 缩容前 - AFTER_SCALE_IN: 缩容后 - BEFORE_SCALE_OUT: 扩容前 - AFTER_SCALE_OUT: 扩容后
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'uri' => 'setUri',
            'parameters' => 'setParameters',
            'nodes' => 'setNodes',
            'activeMaster' => 'setActiveMaster',
            'failAction' => 'setFailAction',
            'beforeComponentStart' => 'setBeforeComponentStart',
            'startTime' => 'setStartTime',
            'state' => 'setState',
            'actionStages' => 'setActionStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  引导操作脚本的名称，同一个集群的引导操作脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  引导操作脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。 - OBS桶的路径：直接手动输入脚本路径。例如输入MRS提供的公共样例脚本路径。示例：s3a://bootstrap/presto/presto-install.sh，其中安装dualroles时，presto-install.sh脚本参数为dualroles, 安装worker时，presto-install.sh脚本参数为worker。根据Presto使用习惯，建议您在Active Master节点上安装dualroles，在Core节点上安装worker。 - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  引导操作脚本参数。
    * nodes  引导操作脚本所执行的节点类型，包含master、core和task三种类型。 说明：节点类型必须为小写字母。
    * activeMaster  引导操作脚本是否只运行在主Master节点上。 缺省值为false，表示引导操作脚本可运行在所有Master节点上。
    * failAction  引导操作脚本执行失败后，是否继续执行后续脚本和创建集群。  缺省值为errorout,表示终止操作。  说明： 建议您在调试阶段设置为“继续”，无论此引导操作是否执行成功，则集群都能继续安装和启动。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * beforeComponentStart  引导操作脚本执行的时间。目前支持“组件启动前”和“组件启动后”两种类型。 缺省值为false，表示引导操作脚本在组件启动后执行。
    * startTime  单个引导操作脚本的执行时间。
    * state  单个引导操作脚本的运行状态。  - PENDING - IN_PROGRESS - SUCCESS - FAILURE
    * actionStages  选择引导操作脚本执行的时间。 - BEFORE_COMPONENT_FIRST_START: 组件首次启动后 - AFTER_COMPONENT_FIRST_START: 组件首次启动前 - BEFORE_SCALE_IN: 缩容前 - AFTER_SCALE_IN: 缩容后 - BEFORE_SCALE_OUT: 扩容前 - AFTER_SCALE_OUT: 扩容后
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'uri' => 'getUri',
            'parameters' => 'getParameters',
            'nodes' => 'getNodes',
            'activeMaster' => 'getActiveMaster',
            'failAction' => 'getFailAction',
            'beforeComponentStart' => 'getBeforeComponentStart',
            'startTime' => 'getStartTime',
            'state' => 'getState',
            'actionStages' => 'getActionStages'
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
    const FAIL_ACTION__CONTINUE = 'continue';
    const FAIL_ACTION_ERROROUT = 'errorout';
    const STATE_PENDING = 'PENDING';
    const STATE_IN_PROGRESS = 'IN_PROGRESS';
    const STATE_SUCCESS = 'SUCCESS';
    const STATE_FAILURE = 'FAILURE';
    const ACTION_STAGES_BEFORE_COMPONENT_FIRST_START = 'BEFORE_COMPONENT_FIRST_START';
    const ACTION_STAGES_AFTER_COMPONENT_FIRST_START = 'AFTER_COMPONENT_FIRST_START';
    const ACTION_STAGES_BEFORE_SCALE_IN = 'BEFORE_SCALE_IN';
    const ACTION_STAGES_AFTER_SCALE_IN = 'AFTER_SCALE_IN';
    const ACTION_STAGES_BEFORE_SCALE_OUT = 'BEFORE_SCALE_OUT';
    const ACTION_STAGES_AFTER_SCALE_OUT = 'AFTER_SCALE_OUT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFailActionAllowableValues()
    {
        return [
            self::FAIL_ACTION__CONTINUE,
            self::FAIL_ACTION_ERROROUT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_IN_PROGRESS,
            self::STATE_SUCCESS,
            self::STATE_FAILURE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionStagesAllowableValues()
    {
        return [
            self::ACTION_STAGES_BEFORE_COMPONENT_FIRST_START,
            self::ACTION_STAGES_AFTER_COMPONENT_FIRST_START,
            self::ACTION_STAGES_BEFORE_SCALE_IN,
            self::ACTION_STAGES_AFTER_SCALE_IN,
            self::ACTION_STAGES_BEFORE_SCALE_OUT,
            self::ACTION_STAGES_AFTER_SCALE_OUT,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['activeMaster'] = isset($data['activeMaster']) ? $data['activeMaster'] : null;
        $this->container['failAction'] = isset($data['failAction']) ? $data['failAction'] : null;
        $this->container['beforeComponentStart'] = isset($data['beforeComponentStart']) ? $data['beforeComponentStart'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['actionStages'] = isset($data['actionStages']) ? $data['actionStages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['failAction'] === null) {
            $invalidProperties[] = "'failAction' can't be null";
        }
            $allowedValues = $this->getFailActionAllowableValues();
                if (!is_null($this->container['failAction']) && !in_array($this->container['failAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'failAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    * Gets name
    *  引导操作脚本的名称，同一个集群的引导操作脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 引导操作脚本的名称，同一个集群的引导操作脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uri
    *  引导操作脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。 - OBS桶的路径：直接手动输入脚本路径。例如输入MRS提供的公共样例脚本路径。示例：s3a://bootstrap/presto/presto-install.sh，其中安装dualroles时，presto-install.sh脚本参数为dualroles, 安装worker时，presto-install.sh脚本参数为worker。根据Presto使用习惯，建议您在Active Master节点上安装dualroles，在Core节点上安装worker。 - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    *
    * @return string
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string $uri 引导操作脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。 - OBS桶的路径：直接手动输入脚本路径。例如输入MRS提供的公共样例脚本路径。示例：s3a://bootstrap/presto/presto-install.sh，其中安装dualroles时，presto-install.sh脚本参数为dualroles, 安装worker时，presto-install.sh脚本参数为worker。根据Presto使用习惯，建议您在Active Master节点上安装dualroles，在Core节点上安装worker。 - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets parameters
    *  引导操作脚本参数。
    *
    * @return string|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param string|null $parameters 引导操作脚本参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets nodes
    *  引导操作脚本所执行的节点类型，包含master、core和task三种类型。 说明：节点类型必须为小写字母。
    *
    * @return string[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param string[] $nodes 引导操作脚本所执行的节点类型，包含master、core和task三种类型。 说明：节点类型必须为小写字母。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets activeMaster
    *  引导操作脚本是否只运行在主Master节点上。 缺省值为false，表示引导操作脚本可运行在所有Master节点上。
    *
    * @return bool|null
    */
    public function getActiveMaster()
    {
        return $this->container['activeMaster'];
    }

    /**
    * Sets activeMaster
    *
    * @param bool|null $activeMaster 引导操作脚本是否只运行在主Master节点上。 缺省值为false，表示引导操作脚本可运行在所有Master节点上。
    *
    * @return $this
    */
    public function setActiveMaster($activeMaster)
    {
        $this->container['activeMaster'] = $activeMaster;
        return $this;
    }

    /**
    * Gets failAction
    *  引导操作脚本执行失败后，是否继续执行后续脚本和创建集群。  缺省值为errorout,表示终止操作。  说明： 建议您在调试阶段设置为“继续”，无论此引导操作是否执行成功，则集群都能继续安装和启动。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    *
    * @return string
    */
    public function getFailAction()
    {
        return $this->container['failAction'];
    }

    /**
    * Sets failAction
    *
    * @param string $failAction 引导操作脚本执行失败后，是否继续执行后续脚本和创建集群。  缺省值为errorout,表示终止操作。  说明： 建议您在调试阶段设置为“继续”，无论此引导操作是否执行成功，则集群都能继续安装和启动。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    *
    * @return $this
    */
    public function setFailAction($failAction)
    {
        $this->container['failAction'] = $failAction;
        return $this;
    }

    /**
    * Gets beforeComponentStart
    *  引导操作脚本执行的时间。目前支持“组件启动前”和“组件启动后”两种类型。 缺省值为false，表示引导操作脚本在组件启动后执行。
    *
    * @return bool|null
    */
    public function getBeforeComponentStart()
    {
        return $this->container['beforeComponentStart'];
    }

    /**
    * Sets beforeComponentStart
    *
    * @param bool|null $beforeComponentStart 引导操作脚本执行的时间。目前支持“组件启动前”和“组件启动后”两种类型。 缺省值为false，表示引导操作脚本在组件启动后执行。
    *
    * @return $this
    */
    public function setBeforeComponentStart($beforeComponentStart)
    {
        $this->container['beforeComponentStart'] = $beforeComponentStart;
        return $this;
    }

    /**
    * Gets startTime
    *  单个引导操作脚本的执行时间。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 单个引导操作脚本的执行时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets state
    *  单个引导操作脚本的运行状态。  - PENDING - IN_PROGRESS - SUCCESS - FAILURE
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 单个引导操作脚本的运行状态。  - PENDING - IN_PROGRESS - SUCCESS - FAILURE
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets actionStages
    *  选择引导操作脚本执行的时间。 - BEFORE_COMPONENT_FIRST_START: 组件首次启动后 - AFTER_COMPONENT_FIRST_START: 组件首次启动前 - BEFORE_SCALE_IN: 缩容前 - AFTER_SCALE_IN: 缩容后 - BEFORE_SCALE_OUT: 扩容前 - AFTER_SCALE_OUT: 扩容后
    *
    * @return string[]|null
    */
    public function getActionStages()
    {
        return $this->container['actionStages'];
    }

    /**
    * Sets actionStages
    *
    * @param string[]|null $actionStages 选择引导操作脚本执行的时间。 - BEFORE_COMPONENT_FIRST_START: 组件首次启动后 - AFTER_COMPONENT_FIRST_START: 组件首次启动前 - BEFORE_SCALE_IN: 缩容前 - AFTER_SCALE_IN: 缩容后 - BEFORE_SCALE_OUT: 扩容前 - AFTER_SCALE_OUT: 扩容后
    *
    * @return $this
    */
    public function setActionStages($actionStages)
    {
        $this->container['actionStages'] = $actionStages;
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

