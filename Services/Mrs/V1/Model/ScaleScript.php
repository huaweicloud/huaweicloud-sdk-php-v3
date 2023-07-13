<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleScript implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleScript';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  弹性伸缩自定义自动化脚本的名称，同一个集群的自定义自动化脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  自定义自动化脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。  - OBS桶的路径：直接手动输入脚本路径。示例：s3a://XXX/scale.sh  - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  自定义自动化脚本参数。  多个参数间用空格隔开。 可以传入以下系统预定义参数： - ${mrs_scale_node_num}：扩缩容节点数 - ${mrs_scale_type}：扩缩容类型，扩容为scale_out，缩容为scale_in - ${mrs_scale_node_hostnames}：扩缩容的节点主机名称 - ${mrs_scale_node_ips}：扩缩容的节点IP - ${mrs_scale_rule_name}：触发扩缩容的规则名   其他用户自定义参数使用方式与普通shell脚本相同，多个参数中间用空格隔开。
    * nodes  自定义自动化脚本所执行的节点组名称（非自定义集群也可使用节点类型，包含Master、Core和Task三种类型）。
    * activeMaster  自定义自动化脚本是否只运行在主Master节点上。  缺省值为false，表示自定义自动化脚本可运行在所有Master节点上。
    * failAction  自自定义自动化脚本执行失败后，是否继续执行后续脚本和创建集群。  说明：  - 建议您在调试阶段设置为“continue”，无论此自定义自动化脚本是否执行成功，则集群都能继续安装和启动。  - 由于缩容成功无法回滚，因此缩容后执行的脚本“fail_action”必须设置为“continue”。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * actionStage  脚本执行时机。  枚举值： - before_scale_out：扩容前 - before_scale_in：缩容前 - after_scale_out：扩容后 - after_scale_in：缩容后
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
            'actionStage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  弹性伸缩自定义自动化脚本的名称，同一个集群的自定义自动化脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  自定义自动化脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。  - OBS桶的路径：直接手动输入脚本路径。示例：s3a://XXX/scale.sh  - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  自定义自动化脚本参数。  多个参数间用空格隔开。 可以传入以下系统预定义参数： - ${mrs_scale_node_num}：扩缩容节点数 - ${mrs_scale_type}：扩缩容类型，扩容为scale_out，缩容为scale_in - ${mrs_scale_node_hostnames}：扩缩容的节点主机名称 - ${mrs_scale_node_ips}：扩缩容的节点IP - ${mrs_scale_rule_name}：触发扩缩容的规则名   其他用户自定义参数使用方式与普通shell脚本相同，多个参数中间用空格隔开。
    * nodes  自定义自动化脚本所执行的节点组名称（非自定义集群也可使用节点类型，包含Master、Core和Task三种类型）。
    * activeMaster  自定义自动化脚本是否只运行在主Master节点上。  缺省值为false，表示自定义自动化脚本可运行在所有Master节点上。
    * failAction  自自定义自动化脚本执行失败后，是否继续执行后续脚本和创建集群。  说明：  - 建议您在调试阶段设置为“continue”，无论此自定义自动化脚本是否执行成功，则集群都能继续安装和启动。  - 由于缩容成功无法回滚，因此缩容后执行的脚本“fail_action”必须设置为“continue”。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * actionStage  脚本执行时机。  枚举值： - before_scale_out：扩容前 - before_scale_in：缩容前 - after_scale_out：扩容后 - after_scale_in：缩容后
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
        'actionStage' => null
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
    * name  弹性伸缩自定义自动化脚本的名称，同一个集群的自定义自动化脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  自定义自动化脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。  - OBS桶的路径：直接手动输入脚本路径。示例：s3a://XXX/scale.sh  - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  自定义自动化脚本参数。  多个参数间用空格隔开。 可以传入以下系统预定义参数： - ${mrs_scale_node_num}：扩缩容节点数 - ${mrs_scale_type}：扩缩容类型，扩容为scale_out，缩容为scale_in - ${mrs_scale_node_hostnames}：扩缩容的节点主机名称 - ${mrs_scale_node_ips}：扩缩容的节点IP - ${mrs_scale_rule_name}：触发扩缩容的规则名   其他用户自定义参数使用方式与普通shell脚本相同，多个参数中间用空格隔开。
    * nodes  自定义自动化脚本所执行的节点组名称（非自定义集群也可使用节点类型，包含Master、Core和Task三种类型）。
    * activeMaster  自定义自动化脚本是否只运行在主Master节点上。  缺省值为false，表示自定义自动化脚本可运行在所有Master节点上。
    * failAction  自自定义自动化脚本执行失败后，是否继续执行后续脚本和创建集群。  说明：  - 建议您在调试阶段设置为“continue”，无论此自定义自动化脚本是否执行成功，则集群都能继续安装和启动。  - 由于缩容成功无法回滚，因此缩容后执行的脚本“fail_action”必须设置为“continue”。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * actionStage  脚本执行时机。  枚举值： - before_scale_out：扩容前 - before_scale_in：缩容前 - after_scale_out：扩容后 - after_scale_in：缩容后
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
            'actionStage' => 'action_stage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  弹性伸缩自定义自动化脚本的名称，同一个集群的自定义自动化脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  自定义自动化脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。  - OBS桶的路径：直接手动输入脚本路径。示例：s3a://XXX/scale.sh  - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  自定义自动化脚本参数。  多个参数间用空格隔开。 可以传入以下系统预定义参数： - ${mrs_scale_node_num}：扩缩容节点数 - ${mrs_scale_type}：扩缩容类型，扩容为scale_out，缩容为scale_in - ${mrs_scale_node_hostnames}：扩缩容的节点主机名称 - ${mrs_scale_node_ips}：扩缩容的节点IP - ${mrs_scale_rule_name}：触发扩缩容的规则名   其他用户自定义参数使用方式与普通shell脚本相同，多个参数中间用空格隔开。
    * nodes  自定义自动化脚本所执行的节点组名称（非自定义集群也可使用节点类型，包含Master、Core和Task三种类型）。
    * activeMaster  自定义自动化脚本是否只运行在主Master节点上。  缺省值为false，表示自定义自动化脚本可运行在所有Master节点上。
    * failAction  自自定义自动化脚本执行失败后，是否继续执行后续脚本和创建集群。  说明：  - 建议您在调试阶段设置为“continue”，无论此自定义自动化脚本是否执行成功，则集群都能继续安装和启动。  - 由于缩容成功无法回滚，因此缩容后执行的脚本“fail_action”必须设置为“continue”。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * actionStage  脚本执行时机。  枚举值： - before_scale_out：扩容前 - before_scale_in：缩容前 - after_scale_out：扩容后 - after_scale_in：缩容后
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
            'actionStage' => 'setActionStage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  弹性伸缩自定义自动化脚本的名称，同一个集群的自定义自动化脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
    * uri  自定义自动化脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。  - OBS桶的路径：直接手动输入脚本路径。示例：s3a://XXX/scale.sh  - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
    * parameters  自定义自动化脚本参数。  多个参数间用空格隔开。 可以传入以下系统预定义参数： - ${mrs_scale_node_num}：扩缩容节点数 - ${mrs_scale_type}：扩缩容类型，扩容为scale_out，缩容为scale_in - ${mrs_scale_node_hostnames}：扩缩容的节点主机名称 - ${mrs_scale_node_ips}：扩缩容的节点IP - ${mrs_scale_rule_name}：触发扩缩容的规则名   其他用户自定义参数使用方式与普通shell脚本相同，多个参数中间用空格隔开。
    * nodes  自定义自动化脚本所执行的节点组名称（非自定义集群也可使用节点类型，包含Master、Core和Task三种类型）。
    * activeMaster  自定义自动化脚本是否只运行在主Master节点上。  缺省值为false，表示自定义自动化脚本可运行在所有Master节点上。
    * failAction  自自定义自动化脚本执行失败后，是否继续执行后续脚本和创建集群。  说明：  - 建议您在调试阶段设置为“continue”，无论此自定义自动化脚本是否执行成功，则集群都能继续安装和启动。  - 由于缩容成功无法回滚，因此缩容后执行的脚本“fail_action”必须设置为“continue”。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    * actionStage  脚本执行时机。  枚举值： - before_scale_out：扩容前 - before_scale_in：缩容前 - after_scale_out：扩容后 - after_scale_in：缩容后
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
            'actionStage' => 'getActionStage'
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
    const ACTION_STAGE_BEFORE_SCALE_OUT = 'before_scale_out';
    const ACTION_STAGE_BEFORE_SCALE_IN = 'before_scale_in';
    const ACTION_STAGE_AFTER_SCALE_OUT = 'after_scale_out';
    const ACTION_STAGE_AFTER_SCALE_IN = 'after_scale_in';
    

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
    public function getActionStageAllowableValues()
    {
        return [
            self::ACTION_STAGE_BEFORE_SCALE_OUT,
            self::ACTION_STAGE_BEFORE_SCALE_IN,
            self::ACTION_STAGE_AFTER_SCALE_OUT,
            self::ACTION_STAGE_AFTER_SCALE_IN,
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
        $this->container['actionStage'] = isset($data['actionStage']) ? $data['actionStage'] : null;
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

        if ($this->container['actionStage'] === null) {
            $invalidProperties[] = "'actionStage' can't be null";
        }
            $allowedValues = $this->getActionStageAllowableValues();
                if (!is_null($this->container['actionStage']) && !in_array($this->container['actionStage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionStage', must be one of '%s'",
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
    *  弹性伸缩自定义自动化脚本的名称，同一个集群的自定义自动化脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
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
    * @param string $name 弹性伸缩自定义自动化脚本的名称，同一个集群的自定义自动化脚本名称不允许相同。  只能由数字、英文字符、空格、中划线和下划线组成，且不能以空格开头。  可输入的字符串长度为1～64个字符。
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
    *  自定义自动化脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。  - OBS桶的路径：直接手动输入脚本路径。示例：s3a://XXX/scale.sh  - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
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
    * @param string $uri 自定义自动化脚本的路径。设置为OBS桶的路径或虚拟机本地的路径。  - OBS桶的路径：直接手动输入脚本路径。示例：s3a://XXX/scale.sh  - 虚拟机本地的路径：用户需要输入正确的脚本路径。脚本所在的路径必须以‘/’开头，以.sh结尾。
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
    *  自定义自动化脚本参数。  多个参数间用空格隔开。 可以传入以下系统预定义参数： - ${mrs_scale_node_num}：扩缩容节点数 - ${mrs_scale_type}：扩缩容类型，扩容为scale_out，缩容为scale_in - ${mrs_scale_node_hostnames}：扩缩容的节点主机名称 - ${mrs_scale_node_ips}：扩缩容的节点IP - ${mrs_scale_rule_name}：触发扩缩容的规则名   其他用户自定义参数使用方式与普通shell脚本相同，多个参数中间用空格隔开。
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
    * @param string|null $parameters 自定义自动化脚本参数。  多个参数间用空格隔开。 可以传入以下系统预定义参数： - ${mrs_scale_node_num}：扩缩容节点数 - ${mrs_scale_type}：扩缩容类型，扩容为scale_out，缩容为scale_in - ${mrs_scale_node_hostnames}：扩缩容的节点主机名称 - ${mrs_scale_node_ips}：扩缩容的节点IP - ${mrs_scale_rule_name}：触发扩缩容的规则名   其他用户自定义参数使用方式与普通shell脚本相同，多个参数中间用空格隔开。
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
    *  自定义自动化脚本所执行的节点组名称（非自定义集群也可使用节点类型，包含Master、Core和Task三种类型）。
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
    * @param string[] $nodes 自定义自动化脚本所执行的节点组名称（非自定义集群也可使用节点类型，包含Master、Core和Task三种类型）。
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
    *  自定义自动化脚本是否只运行在主Master节点上。  缺省值为false，表示自定义自动化脚本可运行在所有Master节点上。
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
    * @param bool|null $activeMaster 自定义自动化脚本是否只运行在主Master节点上。  缺省值为false，表示自定义自动化脚本可运行在所有Master节点上。
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
    *  自自定义自动化脚本执行失败后，是否继续执行后续脚本和创建集群。  说明：  - 建议您在调试阶段设置为“continue”，无论此自定义自动化脚本是否执行成功，则集群都能继续安装和启动。  - 由于缩容成功无法回滚，因此缩容后执行的脚本“fail_action”必须设置为“continue”。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
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
    * @param string $failAction 自自定义自动化脚本执行失败后，是否继续执行后续脚本和创建集群。  说明：  - 建议您在调试阶段设置为“continue”，无论此自定义自动化脚本是否执行成功，则集群都能继续安装和启动。  - 由于缩容成功无法回滚，因此缩容后执行的脚本“fail_action”必须设置为“continue”。  枚举值： - continue：继续执行后续脚本。 - errorout：终止操作。
    *
    * @return $this
    */
    public function setFailAction($failAction)
    {
        $this->container['failAction'] = $failAction;
        return $this;
    }

    /**
    * Gets actionStage
    *  脚本执行时机。  枚举值： - before_scale_out：扩容前 - before_scale_in：缩容前 - after_scale_out：扩容后 - after_scale_in：缩容后
    *
    * @return string
    */
    public function getActionStage()
    {
        return $this->container['actionStage'];
    }

    /**
    * Sets actionStage
    *
    * @param string $actionStage 脚本执行时机。  枚举值： - before_scale_out：扩容前 - before_scale_in：缩容前 - after_scale_out：扩容后 - after_scale_in：缩容后
    *
    * @return $this
    */
    public function setActionStage($actionStage)
    {
        $this->container['actionStage'] = $actionStage;
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

