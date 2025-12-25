<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  组件id.
    * componentName  组件名称
    * configStatus  **参数解释**: 节点配置状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * createTime  毫秒时间戳
    * failDeployMessage  部署失败的消息
    * ipAddress  IP地址
    * list  组件配置参数列表
    * monitor  monitor
    * nodeApplyFailEnum  nodeApplyFailEnum
    * nodeExpansion  nodeExpansion
    * nodeId  节点ID
    * nodeName  节点名称
    * privateIpAddress  IP地址
    * region  地区
    * specification  规范
    * vpcEndpointAddress  VPC端点地址
    * vpcEndpointId  VPC端点ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'componentName' => 'string',
            'configStatus' => 'string',
            'createTime' => 'int',
            'failDeployMessage' => 'string',
            'ipAddress' => 'string',
            'list' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfigurationParam[]',
            'monitor' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Monitor',
            'nodeApplyFailEnum' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NodeApplyFailEnum',
            'nodeExpansion' => '\HuaweiCloud\SDK\SecMaster\V1\Model\IsapNodeExpansion',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'privateIpAddress' => 'string',
            'region' => 'string',
            'specification' => 'string',
            'vpcEndpointAddress' => 'string',
            'vpcEndpointId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  组件id.
    * componentName  组件名称
    * configStatus  **参数解释**: 节点配置状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * createTime  毫秒时间戳
    * failDeployMessage  部署失败的消息
    * ipAddress  IP地址
    * list  组件配置参数列表
    * monitor  monitor
    * nodeApplyFailEnum  nodeApplyFailEnum
    * nodeExpansion  nodeExpansion
    * nodeId  节点ID
    * nodeName  节点名称
    * privateIpAddress  IP地址
    * region  地区
    * specification  规范
    * vpcEndpointAddress  VPC端点地址
    * vpcEndpointId  VPC端点ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'componentName' => null,
        'configStatus' => null,
        'createTime' => 'int64',
        'failDeployMessage' => null,
        'ipAddress' => null,
        'list' => null,
        'monitor' => null,
        'nodeApplyFailEnum' => null,
        'nodeExpansion' => null,
        'nodeId' => null,
        'nodeName' => null,
        'privateIpAddress' => null,
        'region' => null,
        'specification' => null,
        'vpcEndpointAddress' => null,
        'vpcEndpointId' => null
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
    * componentId  组件id.
    * componentName  组件名称
    * configStatus  **参数解释**: 节点配置状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * createTime  毫秒时间戳
    * failDeployMessage  部署失败的消息
    * ipAddress  IP地址
    * list  组件配置参数列表
    * monitor  monitor
    * nodeApplyFailEnum  nodeApplyFailEnum
    * nodeExpansion  nodeExpansion
    * nodeId  节点ID
    * nodeName  节点名称
    * privateIpAddress  IP地址
    * region  地区
    * specification  规范
    * vpcEndpointAddress  VPC端点地址
    * vpcEndpointId  VPC端点ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'componentName' => 'component_name',
            'configStatus' => 'config_status',
            'createTime' => 'create_time',
            'failDeployMessage' => 'fail_deploy_message',
            'ipAddress' => 'ip_address',
            'list' => 'list',
            'monitor' => 'monitor',
            'nodeApplyFailEnum' => 'node_apply_fail_enum',
            'nodeExpansion' => 'node_expansion',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'privateIpAddress' => 'private_ip_address',
            'region' => 'region',
            'specification' => 'specification',
            'vpcEndpointAddress' => 'vpc_endpoint_address',
            'vpcEndpointId' => 'vpc_endpoint_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  组件id.
    * componentName  组件名称
    * configStatus  **参数解释**: 节点配置状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * createTime  毫秒时间戳
    * failDeployMessage  部署失败的消息
    * ipAddress  IP地址
    * list  组件配置参数列表
    * monitor  monitor
    * nodeApplyFailEnum  nodeApplyFailEnum
    * nodeExpansion  nodeExpansion
    * nodeId  节点ID
    * nodeName  节点名称
    * privateIpAddress  IP地址
    * region  地区
    * specification  规范
    * vpcEndpointAddress  VPC端点地址
    * vpcEndpointId  VPC端点ID
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'componentName' => 'setComponentName',
            'configStatus' => 'setConfigStatus',
            'createTime' => 'setCreateTime',
            'failDeployMessage' => 'setFailDeployMessage',
            'ipAddress' => 'setIpAddress',
            'list' => 'setList',
            'monitor' => 'setMonitor',
            'nodeApplyFailEnum' => 'setNodeApplyFailEnum',
            'nodeExpansion' => 'setNodeExpansion',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'privateIpAddress' => 'setPrivateIpAddress',
            'region' => 'setRegion',
            'specification' => 'setSpecification',
            'vpcEndpointAddress' => 'setVpcEndpointAddress',
            'vpcEndpointId' => 'setVpcEndpointId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  组件id.
    * componentName  组件名称
    * configStatus  **参数解释**: 节点配置状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * createTime  毫秒时间戳
    * failDeployMessage  部署失败的消息
    * ipAddress  IP地址
    * list  组件配置参数列表
    * monitor  monitor
    * nodeApplyFailEnum  nodeApplyFailEnum
    * nodeExpansion  nodeExpansion
    * nodeId  节点ID
    * nodeName  节点名称
    * privateIpAddress  IP地址
    * region  地区
    * specification  规范
    * vpcEndpointAddress  VPC端点地址
    * vpcEndpointId  VPC端点ID
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'componentName' => 'getComponentName',
            'configStatus' => 'getConfigStatus',
            'createTime' => 'getCreateTime',
            'failDeployMessage' => 'getFailDeployMessage',
            'ipAddress' => 'getIpAddress',
            'list' => 'getList',
            'monitor' => 'getMonitor',
            'nodeApplyFailEnum' => 'getNodeApplyFailEnum',
            'nodeExpansion' => 'getNodeExpansion',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'privateIpAddress' => 'getPrivateIpAddress',
            'region' => 'getRegion',
            'specification' => 'getSpecification',
            'vpcEndpointAddress' => 'getVpcEndpointAddress',
            'vpcEndpointId' => 'getVpcEndpointId'
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
    const CONFIG_STATUS_UN_SAVED = 'UN_SAVED';
    const CONFIG_STATUS_SAVE_AND_UN_APPLY = 'SAVE_AND_UN_APPLY';
    const CONFIG_STATUS_MOVE_AND_UN_APPLY = 'MOVE_AND_UN_APPLY';
    const CONFIG_STATUS_APPLYING = 'APPLYING';
    const CONFIG_STATUS_FAIL_APPLY = 'FAIL_APPLY';
    const CONFIG_STATUS_APPLIED = 'APPLIED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigStatusAllowableValues()
    {
        return [
            self::CONFIG_STATUS_UN_SAVED,
            self::CONFIG_STATUS_SAVE_AND_UN_APPLY,
            self::CONFIG_STATUS_MOVE_AND_UN_APPLY,
            self::CONFIG_STATUS_APPLYING,
            self::CONFIG_STATUS_FAIL_APPLY,
            self::CONFIG_STATUS_APPLIED,
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['failDeployMessage'] = isset($data['failDeployMessage']) ? $data['failDeployMessage'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['monitor'] = isset($data['monitor']) ? $data['monitor'] : null;
        $this->container['nodeApplyFailEnum'] = isset($data['nodeApplyFailEnum']) ? $data['nodeApplyFailEnum'] : null;
        $this->container['nodeExpansion'] = isset($data['nodeExpansion']) ? $data['nodeExpansion'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['vpcEndpointAddress'] = isset($data['vpcEndpointAddress']) ? $data['vpcEndpointAddress'] : null;
        $this->container['vpcEndpointId'] = isset($data['vpcEndpointId']) ? $data['vpcEndpointId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getConfigStatusAllowableValues();
                if (!is_null($this->container['configStatus']) && !in_array($this->container['configStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failDeployMessage']) && (mb_strlen($this->container['failDeployMessage']) > 1024)) {
                $invalidProperties[] = "invalid value for 'failDeployMessage', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['failDeployMessage']) && (mb_strlen($this->container['failDeployMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'failDeployMessage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['ipAddress']) && !preg_match("/((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['ipAddress'])) {
                $invalidProperties[] = "invalid value for 'ipAddress', must be conform to the pattern /((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['privateIpAddress']) && !preg_match("/((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['privateIpAddress'])) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', must be conform to the pattern /((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 1024)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) > 1024)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) < 1)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcEndpointAddress']) && (mb_strlen($this->container['vpcEndpointAddress']) > 1024)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointAddress', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['vpcEndpointAddress']) && (mb_strlen($this->container['vpcEndpointAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcEndpointId']) && (mb_strlen($this->container['vpcEndpointId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['vpcEndpointId']) && (mb_strlen($this->container['vpcEndpointId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointId', the character length must be bigger than or equal to 0.";
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
    * Gets componentId
    *  组件id.
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件id.
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets componentName
    *  组件名称
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 组件名称
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets configStatus
    *  **参数解释**: 节点配置状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param string|null $configStatus **参数解释**: 节点配置状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 毫秒时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets failDeployMessage
    *  部署失败的消息
    *
    * @return string|null
    */
    public function getFailDeployMessage()
    {
        return $this->container['failDeployMessage'];
    }

    /**
    * Sets failDeployMessage
    *
    * @param string|null $failDeployMessage 部署失败的消息
    *
    * @return $this
    */
    public function setFailDeployMessage($failDeployMessage)
    {
        $this->container['failDeployMessage'] = $failDeployMessage;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IP地址
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress IP地址
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets list
    *  组件配置参数列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfigurationParam[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfigurationParam[]|null $list 组件配置参数列表
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets monitor
    *  monitor
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Monitor|null
    */
    public function getMonitor()
    {
        return $this->container['monitor'];
    }

    /**
    * Sets monitor
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Monitor|null $monitor monitor
    *
    * @return $this
    */
    public function setMonitor($monitor)
    {
        $this->container['monitor'] = $monitor;
        return $this;
    }

    /**
    * Gets nodeApplyFailEnum
    *  nodeApplyFailEnum
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NodeApplyFailEnum|null
    */
    public function getNodeApplyFailEnum()
    {
        return $this->container['nodeApplyFailEnum'];
    }

    /**
    * Sets nodeApplyFailEnum
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NodeApplyFailEnum|null $nodeApplyFailEnum nodeApplyFailEnum
    *
    * @return $this
    */
    public function setNodeApplyFailEnum($nodeApplyFailEnum)
    {
        $this->container['nodeApplyFailEnum'] = $nodeApplyFailEnum;
        return $this;
    }

    /**
    * Gets nodeExpansion
    *  nodeExpansion
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\IsapNodeExpansion|null
    */
    public function getNodeExpansion()
    {
        return $this->container['nodeExpansion'];
    }

    /**
    * Sets nodeExpansion
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\IsapNodeExpansion|null $nodeExpansion nodeExpansion
    *
    * @return $this
    */
    public function setNodeExpansion($nodeExpansion)
    {
        $this->container['nodeExpansion'] = $nodeExpansion;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  IP地址
    *
    * @return string|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string|null $privateIpAddress IP地址
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets region
    *  地区
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 地区
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets specification
    *  规范
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 规范
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets vpcEndpointAddress
    *  VPC端点地址
    *
    * @return string|null
    */
    public function getVpcEndpointAddress()
    {
        return $this->container['vpcEndpointAddress'];
    }

    /**
    * Sets vpcEndpointAddress
    *
    * @param string|null $vpcEndpointAddress VPC端点地址
    *
    * @return $this
    */
    public function setVpcEndpointAddress($vpcEndpointAddress)
    {
        $this->container['vpcEndpointAddress'] = $vpcEndpointAddress;
        return $this;
    }

    /**
    * Gets vpcEndpointId
    *  VPC端点ID
    *
    * @return string|null
    */
    public function getVpcEndpointId()
    {
        return $this->container['vpcEndpointId'];
    }

    /**
    * Sets vpcEndpointId
    *
    * @param string|null $vpcEndpointId VPC端点ID
    *
    * @return $this
    */
    public function setVpcEndpointId($vpcEndpointId)
    {
        $this->container['vpcEndpointId'] = $vpcEndpointId;
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

