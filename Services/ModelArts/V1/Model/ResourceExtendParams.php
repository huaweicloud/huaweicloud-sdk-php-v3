<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceExtendParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceExtendParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**：节点的容器镜像空间大小。 **取值范围**：可选值如下： - 指定大小：dockerBaseSize的大小范围默认为50-500，但实际上限受到节点的容器数据盘大小约束。 - 不限制：dockerBaseSize=\\\"0\\\"，表示不限制容器镜像空间大小。
    * postInstall  **参数解释**：安装后执行脚本，输入的值需要经过Base64编码。 **取值范围**：不涉及。
    * runtime  **参数解释**：容器运行时。 **取值范围**：可选值如下： - docker：容器运行时，是目前最常用的容器化引擎，基于容器镜像创建和管理容器实例。 - containerd：工业级的容器运行时，专注于容器的生命周期管理，是 Docker 底层核心组件之一，也可独立部署使用。
    * labelPolicyOnExistingNodes  **参数解释**：存量节点k8s标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * taintPolicyOnExistingNodes  **参数解释**：存量节点k8s污点更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * tagPolicyOnExistingNodes  **参数解释**：存量节点资源标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * xParameterPlaneSubnet  **参数解释**：跨物理集群之间进行参数面数据传输使用的子网id。不可与节点子网和容器子网重复。 **取值范围**：不涉及。
    * nodePoolName  **参数解释**：用户指定的节点池名称。最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能以-，-default结尾。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dockerBaseSize' => 'string',
            'postInstall' => 'string',
            'runtime' => 'string',
            'labelPolicyOnExistingNodes' => 'string',
            'taintPolicyOnExistingNodes' => 'string',
            'tagPolicyOnExistingNodes' => 'string',
            'xParameterPlaneSubnet' => 'string',
            'nodePoolName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**：节点的容器镜像空间大小。 **取值范围**：可选值如下： - 指定大小：dockerBaseSize的大小范围默认为50-500，但实际上限受到节点的容器数据盘大小约束。 - 不限制：dockerBaseSize=\\\"0\\\"，表示不限制容器镜像空间大小。
    * postInstall  **参数解释**：安装后执行脚本，输入的值需要经过Base64编码。 **取值范围**：不涉及。
    * runtime  **参数解释**：容器运行时。 **取值范围**：可选值如下： - docker：容器运行时，是目前最常用的容器化引擎，基于容器镜像创建和管理容器实例。 - containerd：工业级的容器运行时，专注于容器的生命周期管理，是 Docker 底层核心组件之一，也可独立部署使用。
    * labelPolicyOnExistingNodes  **参数解释**：存量节点k8s标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * taintPolicyOnExistingNodes  **参数解释**：存量节点k8s污点更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * tagPolicyOnExistingNodes  **参数解释**：存量节点资源标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * xParameterPlaneSubnet  **参数解释**：跨物理集群之间进行参数面数据传输使用的子网id。不可与节点子网和容器子网重复。 **取值范围**：不涉及。
    * nodePoolName  **参数解释**：用户指定的节点池名称。最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能以-，-default结尾。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dockerBaseSize' => null,
        'postInstall' => null,
        'runtime' => null,
        'labelPolicyOnExistingNodes' => null,
        'taintPolicyOnExistingNodes' => null,
        'tagPolicyOnExistingNodes' => null,
        'xParameterPlaneSubnet' => null,
        'nodePoolName' => null
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
    * dockerBaseSize  **参数解释**：节点的容器镜像空间大小。 **取值范围**：可选值如下： - 指定大小：dockerBaseSize的大小范围默认为50-500，但实际上限受到节点的容器数据盘大小约束。 - 不限制：dockerBaseSize=\\\"0\\\"，表示不限制容器镜像空间大小。
    * postInstall  **参数解释**：安装后执行脚本，输入的值需要经过Base64编码。 **取值范围**：不涉及。
    * runtime  **参数解释**：容器运行时。 **取值范围**：可选值如下： - docker：容器运行时，是目前最常用的容器化引擎，基于容器镜像创建和管理容器实例。 - containerd：工业级的容器运行时，专注于容器的生命周期管理，是 Docker 底层核心组件之一，也可独立部署使用。
    * labelPolicyOnExistingNodes  **参数解释**：存量节点k8s标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * taintPolicyOnExistingNodes  **参数解释**：存量节点k8s污点更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * tagPolicyOnExistingNodes  **参数解释**：存量节点资源标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * xParameterPlaneSubnet  **参数解释**：跨物理集群之间进行参数面数据传输使用的子网id。不可与节点子网和容器子网重复。 **取值范围**：不涉及。
    * nodePoolName  **参数解释**：用户指定的节点池名称。最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能以-，-default结尾。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dockerBaseSize' => 'dockerBaseSize',
            'postInstall' => 'postInstall',
            'runtime' => 'runtime',
            'labelPolicyOnExistingNodes' => 'labelPolicyOnExistingNodes',
            'taintPolicyOnExistingNodes' => 'taintPolicyOnExistingNodes',
            'tagPolicyOnExistingNodes' => 'tagPolicyOnExistingNodes',
            'xParameterPlaneSubnet' => 'XParameterPlaneSubnet',
            'nodePoolName' => 'nodePoolName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dockerBaseSize  **参数解释**：节点的容器镜像空间大小。 **取值范围**：可选值如下： - 指定大小：dockerBaseSize的大小范围默认为50-500，但实际上限受到节点的容器数据盘大小约束。 - 不限制：dockerBaseSize=\\\"0\\\"，表示不限制容器镜像空间大小。
    * postInstall  **参数解释**：安装后执行脚本，输入的值需要经过Base64编码。 **取值范围**：不涉及。
    * runtime  **参数解释**：容器运行时。 **取值范围**：可选值如下： - docker：容器运行时，是目前最常用的容器化引擎，基于容器镜像创建和管理容器实例。 - containerd：工业级的容器运行时，专注于容器的生命周期管理，是 Docker 底层核心组件之一，也可独立部署使用。
    * labelPolicyOnExistingNodes  **参数解释**：存量节点k8s标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * taintPolicyOnExistingNodes  **参数解释**：存量节点k8s污点更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * tagPolicyOnExistingNodes  **参数解释**：存量节点资源标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * xParameterPlaneSubnet  **参数解释**：跨物理集群之间进行参数面数据传输使用的子网id。不可与节点子网和容器子网重复。 **取值范围**：不涉及。
    * nodePoolName  **参数解释**：用户指定的节点池名称。最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能以-，-default结尾。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'dockerBaseSize' => 'setDockerBaseSize',
            'postInstall' => 'setPostInstall',
            'runtime' => 'setRuntime',
            'labelPolicyOnExistingNodes' => 'setLabelPolicyOnExistingNodes',
            'taintPolicyOnExistingNodes' => 'setTaintPolicyOnExistingNodes',
            'tagPolicyOnExistingNodes' => 'setTagPolicyOnExistingNodes',
            'xParameterPlaneSubnet' => 'setXParameterPlaneSubnet',
            'nodePoolName' => 'setNodePoolName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dockerBaseSize  **参数解释**：节点的容器镜像空间大小。 **取值范围**：可选值如下： - 指定大小：dockerBaseSize的大小范围默认为50-500，但实际上限受到节点的容器数据盘大小约束。 - 不限制：dockerBaseSize=\\\"0\\\"，表示不限制容器镜像空间大小。
    * postInstall  **参数解释**：安装后执行脚本，输入的值需要经过Base64编码。 **取值范围**：不涉及。
    * runtime  **参数解释**：容器运行时。 **取值范围**：可选值如下： - docker：容器运行时，是目前最常用的容器化引擎，基于容器镜像创建和管理容器实例。 - containerd：工业级的容器运行时，专注于容器的生命周期管理，是 Docker 底层核心组件之一，也可独立部署使用。
    * labelPolicyOnExistingNodes  **参数解释**：存量节点k8s标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * taintPolicyOnExistingNodes  **参数解释**：存量节点k8s污点更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * tagPolicyOnExistingNodes  **参数解释**：存量节点资源标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    * xParameterPlaneSubnet  **参数解释**：跨物理集群之间进行参数面数据传输使用的子网id。不可与节点子网和容器子网重复。 **取值范围**：不涉及。
    * nodePoolName  **参数解释**：用户指定的节点池名称。最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能以-，-default结尾。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'dockerBaseSize' => 'getDockerBaseSize',
            'postInstall' => 'getPostInstall',
            'runtime' => 'getRuntime',
            'labelPolicyOnExistingNodes' => 'getLabelPolicyOnExistingNodes',
            'taintPolicyOnExistingNodes' => 'getTaintPolicyOnExistingNodes',
            'tagPolicyOnExistingNodes' => 'getTagPolicyOnExistingNodes',
            'xParameterPlaneSubnet' => 'getXParameterPlaneSubnet',
            'nodePoolName' => 'getNodePoolName'
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
        $this->container['dockerBaseSize'] = isset($data['dockerBaseSize']) ? $data['dockerBaseSize'] : null;
        $this->container['postInstall'] = isset($data['postInstall']) ? $data['postInstall'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['labelPolicyOnExistingNodes'] = isset($data['labelPolicyOnExistingNodes']) ? $data['labelPolicyOnExistingNodes'] : null;
        $this->container['taintPolicyOnExistingNodes'] = isset($data['taintPolicyOnExistingNodes']) ? $data['taintPolicyOnExistingNodes'] : null;
        $this->container['tagPolicyOnExistingNodes'] = isset($data['tagPolicyOnExistingNodes']) ? $data['tagPolicyOnExistingNodes'] : null;
        $this->container['xParameterPlaneSubnet'] = isset($data['xParameterPlaneSubnet']) ? $data['xParameterPlaneSubnet'] : null;
        $this->container['nodePoolName'] = isset($data['nodePoolName']) ? $data['nodePoolName'] : null;
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
    * Gets dockerBaseSize
    *  **参数解释**：节点的容器镜像空间大小。 **取值范围**：可选值如下： - 指定大小：dockerBaseSize的大小范围默认为50-500，但实际上限受到节点的容器数据盘大小约束。 - 不限制：dockerBaseSize=\\\"0\\\"，表示不限制容器镜像空间大小。
    *
    * @return string|null
    */
    public function getDockerBaseSize()
    {
        return $this->container['dockerBaseSize'];
    }

    /**
    * Sets dockerBaseSize
    *
    * @param string|null $dockerBaseSize **参数解释**：节点的容器镜像空间大小。 **取值范围**：可选值如下： - 指定大小：dockerBaseSize的大小范围默认为50-500，但实际上限受到节点的容器数据盘大小约束。 - 不限制：dockerBaseSize=\\\"0\\\"，表示不限制容器镜像空间大小。
    *
    * @return $this
    */
    public function setDockerBaseSize($dockerBaseSize)
    {
        $this->container['dockerBaseSize'] = $dockerBaseSize;
        return $this;
    }

    /**
    * Gets postInstall
    *  **参数解释**：安装后执行脚本，输入的值需要经过Base64编码。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPostInstall()
    {
        return $this->container['postInstall'];
    }

    /**
    * Sets postInstall
    *
    * @param string|null $postInstall **参数解释**：安装后执行脚本，输入的值需要经过Base64编码。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPostInstall($postInstall)
    {
        $this->container['postInstall'] = $postInstall;
        return $this;
    }

    /**
    * Gets runtime
    *  **参数解释**：容器运行时。 **取值范围**：可选值如下： - docker：容器运行时，是目前最常用的容器化引擎，基于容器镜像创建和管理容器实例。 - containerd：工业级的容器运行时，专注于容器的生命周期管理，是 Docker 底层核心组件之一，也可独立部署使用。
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime **参数解释**：容器运行时。 **取值范围**：可选值如下： - docker：容器运行时，是目前最常用的容器化引擎，基于容器镜像创建和管理容器实例。 - containerd：工业级的容器运行时，专注于容器的生命周期管理，是 Docker 底层核心组件之一，也可独立部署使用。
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets labelPolicyOnExistingNodes
    *  **参数解释**：存量节点k8s标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    *
    * @return string|null
    */
    public function getLabelPolicyOnExistingNodes()
    {
        return $this->container['labelPolicyOnExistingNodes'];
    }

    /**
    * Sets labelPolicyOnExistingNodes
    *
    * @param string|null $labelPolicyOnExistingNodes **参数解释**：存量节点k8s标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    *
    * @return $this
    */
    public function setLabelPolicyOnExistingNodes($labelPolicyOnExistingNodes)
    {
        $this->container['labelPolicyOnExistingNodes'] = $labelPolicyOnExistingNodes;
        return $this;
    }

    /**
    * Gets taintPolicyOnExistingNodes
    *  **参数解释**：存量节点k8s污点更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    *
    * @return string|null
    */
    public function getTaintPolicyOnExistingNodes()
    {
        return $this->container['taintPolicyOnExistingNodes'];
    }

    /**
    * Sets taintPolicyOnExistingNodes
    *
    * @param string|null $taintPolicyOnExistingNodes **参数解释**：存量节点k8s污点更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    *
    * @return $this
    */
    public function setTaintPolicyOnExistingNodes($taintPolicyOnExistingNodes)
    {
        $this->container['taintPolicyOnExistingNodes'] = $taintPolicyOnExistingNodes;
        return $this;
    }

    /**
    * Gets tagPolicyOnExistingNodes
    *  **参数解释**：存量节点资源标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    *
    * @return string|null
    */
    public function getTagPolicyOnExistingNodes()
    {
        return $this->container['tagPolicyOnExistingNodes'];
    }

    /**
    * Sets tagPolicyOnExistingNodes
    *
    * @param string|null $tagPolicyOnExistingNodes **参数解释**：存量节点资源标签更新策略，值为空时默认更新存量节点。 **取值范围**：可选值如下： - refresh：更新。 - ignore：不更新。
    *
    * @return $this
    */
    public function setTagPolicyOnExistingNodes($tagPolicyOnExistingNodes)
    {
        $this->container['tagPolicyOnExistingNodes'] = $tagPolicyOnExistingNodes;
        return $this;
    }

    /**
    * Gets xParameterPlaneSubnet
    *  **参数解释**：跨物理集群之间进行参数面数据传输使用的子网id。不可与节点子网和容器子网重复。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getXParameterPlaneSubnet()
    {
        return $this->container['xParameterPlaneSubnet'];
    }

    /**
    * Sets xParameterPlaneSubnet
    *
    * @param string|null $xParameterPlaneSubnet **参数解释**：跨物理集群之间进行参数面数据传输使用的子网id。不可与节点子网和容器子网重复。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setXParameterPlaneSubnet($xParameterPlaneSubnet)
    {
        $this->container['xParameterPlaneSubnet'] = $xParameterPlaneSubnet;
        return $this;
    }

    /**
    * Gets nodePoolName
    *  **参数解释**：用户指定的节点池名称。最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能以-，-default结尾。 **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getNodePoolName()
    {
        return $this->container['nodePoolName'];
    }

    /**
    * Sets nodePoolName
    *
    * @param string|null $nodePoolName **参数解释**：用户指定的节点池名称。最小长度为2，最大长度为50的小写字母、中划线-、数字组成，由小写字母开头，不能以-，-default结尾。 **取值范围**：不涉及
    *
    * @return $this
    */
    public function setNodePoolName($nodePoolName)
    {
        $this->container['nodePoolName'] = $nodePoolName;
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

