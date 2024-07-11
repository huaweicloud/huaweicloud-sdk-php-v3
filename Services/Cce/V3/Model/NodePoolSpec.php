<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  节点池类型。不填写时默认为vm。  - vm：弹性云服务器 - ElasticBMS：C6型弹性裸金属通用计算增强型云服务器，规格示例：c6.22xlarge.2.physical - pm: 裸金属服务器
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。
    * autoscaling  autoscaling
    * nodeManagement  nodeManagement
    * podSecurityGroups  1.21版本集群节点池支持绑定安全组，最多五个。
    * extensionScaleGroups  extensionScaleGroups
    * customSecurityGroups  节点池自定义安全组相关配置。支持节点池新扩容节点绑定指定的安全组。  - 未指定安全组ID，新建节点将添加Node节点默认安全组。  - 指定有效安全组ID，新建节点将使用指定安全组。  - 指定安全组，应避免对CCE运行依赖的端口规则进行修改。[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/cce_faq/cce_faq_00265.html)。](tag:hws)[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00265.html)。](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'nodeTemplate' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeSpec',
            'initialNodeCount' => 'int',
            'autoscaling' => '\HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling',
            'nodeManagement' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeManagement',
            'podSecurityGroups' => '\HuaweiCloud\SDK\Cce\V3\Model\SecurityID[]',
            'extensionScaleGroups' => '\HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup',
            'customSecurityGroups' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  节点池类型。不填写时默认为vm。  - vm：弹性云服务器 - ElasticBMS：C6型弹性裸金属通用计算增强型云服务器，规格示例：c6.22xlarge.2.physical - pm: 裸金属服务器
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。
    * autoscaling  autoscaling
    * nodeManagement  nodeManagement
    * podSecurityGroups  1.21版本集群节点池支持绑定安全组，最多五个。
    * extensionScaleGroups  extensionScaleGroups
    * customSecurityGroups  节点池自定义安全组相关配置。支持节点池新扩容节点绑定指定的安全组。  - 未指定安全组ID，新建节点将添加Node节点默认安全组。  - 指定有效安全组ID，新建节点将使用指定安全组。  - 指定安全组，应避免对CCE运行依赖的端口规则进行修改。[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/cce_faq/cce_faq_00265.html)。](tag:hws)[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00265.html)。](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'nodeTemplate' => null,
        'initialNodeCount' => 'int32',
        'autoscaling' => null,
        'nodeManagement' => null,
        'podSecurityGroups' => null,
        'extensionScaleGroups' => null,
        'customSecurityGroups' => null
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
    * type  节点池类型。不填写时默认为vm。  - vm：弹性云服务器 - ElasticBMS：C6型弹性裸金属通用计算增强型云服务器，规格示例：c6.22xlarge.2.physical - pm: 裸金属服务器
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。
    * autoscaling  autoscaling
    * nodeManagement  nodeManagement
    * podSecurityGroups  1.21版本集群节点池支持绑定安全组，最多五个。
    * extensionScaleGroups  extensionScaleGroups
    * customSecurityGroups  节点池自定义安全组相关配置。支持节点池新扩容节点绑定指定的安全组。  - 未指定安全组ID，新建节点将添加Node节点默认安全组。  - 指定有效安全组ID，新建节点将使用指定安全组。  - 指定安全组，应避免对CCE运行依赖的端口规则进行修改。[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/cce_faq/cce_faq_00265.html)。](tag:hws)[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00265.html)。](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'nodeTemplate' => 'nodeTemplate',
            'initialNodeCount' => 'initialNodeCount',
            'autoscaling' => 'autoscaling',
            'nodeManagement' => 'nodeManagement',
            'podSecurityGroups' => 'podSecurityGroups',
            'extensionScaleGroups' => 'extensionScaleGroups',
            'customSecurityGroups' => 'customSecurityGroups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  节点池类型。不填写时默认为vm。  - vm：弹性云服务器 - ElasticBMS：C6型弹性裸金属通用计算增强型云服务器，规格示例：c6.22xlarge.2.physical - pm: 裸金属服务器
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。
    * autoscaling  autoscaling
    * nodeManagement  nodeManagement
    * podSecurityGroups  1.21版本集群节点池支持绑定安全组，最多五个。
    * extensionScaleGroups  extensionScaleGroups
    * customSecurityGroups  节点池自定义安全组相关配置。支持节点池新扩容节点绑定指定的安全组。  - 未指定安全组ID，新建节点将添加Node节点默认安全组。  - 指定有效安全组ID，新建节点将使用指定安全组。  - 指定安全组，应避免对CCE运行依赖的端口规则进行修改。[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/cce_faq/cce_faq_00265.html)。](tag:hws)[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00265.html)。](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'nodeTemplate' => 'setNodeTemplate',
            'initialNodeCount' => 'setInitialNodeCount',
            'autoscaling' => 'setAutoscaling',
            'nodeManagement' => 'setNodeManagement',
            'podSecurityGroups' => 'setPodSecurityGroups',
            'extensionScaleGroups' => 'setExtensionScaleGroups',
            'customSecurityGroups' => 'setCustomSecurityGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  节点池类型。不填写时默认为vm。  - vm：弹性云服务器 - ElasticBMS：C6型弹性裸金属通用计算增强型云服务器，规格示例：c6.22xlarge.2.physical - pm: 裸金属服务器
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。
    * autoscaling  autoscaling
    * nodeManagement  nodeManagement
    * podSecurityGroups  1.21版本集群节点池支持绑定安全组，最多五个。
    * extensionScaleGroups  extensionScaleGroups
    * customSecurityGroups  节点池自定义安全组相关配置。支持节点池新扩容节点绑定指定的安全组。  - 未指定安全组ID，新建节点将添加Node节点默认安全组。  - 指定有效安全组ID，新建节点将使用指定安全组。  - 指定安全组，应避免对CCE运行依赖的端口规则进行修改。[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/cce_faq/cce_faq_00265.html)。](tag:hws)[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00265.html)。](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'nodeTemplate' => 'getNodeTemplate',
            'initialNodeCount' => 'getInitialNodeCount',
            'autoscaling' => 'getAutoscaling',
            'nodeManagement' => 'getNodeManagement',
            'podSecurityGroups' => 'getPodSecurityGroups',
            'extensionScaleGroups' => 'getExtensionScaleGroups',
            'customSecurityGroups' => 'getCustomSecurityGroups'
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
    const TYPE_VM = 'vm';
    const TYPE_ELASTIC_BMS = 'ElasticBMS';
    const TYPE_PM = 'pm';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VM,
            self::TYPE_ELASTIC_BMS,
            self::TYPE_PM,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['nodeTemplate'] = isset($data['nodeTemplate']) ? $data['nodeTemplate'] : null;
        $this->container['initialNodeCount'] = isset($data['initialNodeCount']) ? $data['initialNodeCount'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['nodeManagement'] = isset($data['nodeManagement']) ? $data['nodeManagement'] : null;
        $this->container['podSecurityGroups'] = isset($data['podSecurityGroups']) ? $data['podSecurityGroups'] : null;
        $this->container['extensionScaleGroups'] = isset($data['extensionScaleGroups']) ? $data['extensionScaleGroups'] : null;
        $this->container['customSecurityGroups'] = isset($data['customSecurityGroups']) ? $data['customSecurityGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['nodeTemplate'] === null) {
            $invalidProperties[] = "'nodeTemplate' can't be null";
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
    * Gets type
    *  节点池类型。不填写时默认为vm。  - vm：弹性云服务器 - ElasticBMS：C6型弹性裸金属通用计算增强型云服务器，规格示例：c6.22xlarge.2.physical - pm: 裸金属服务器
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
    * @param string|null $type 节点池类型。不填写时默认为vm。  - vm：弹性云服务器 - ElasticBMS：C6型弹性裸金属通用计算增强型云服务器，规格示例：c6.22xlarge.2.physical - pm: 裸金属服务器
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets nodeTemplate
    *  nodeTemplate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeSpec
    */
    public function getNodeTemplate()
    {
        return $this->container['nodeTemplate'];
    }

    /**
    * Sets nodeTemplate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeSpec $nodeTemplate nodeTemplate
    *
    * @return $this
    */
    public function setNodeTemplate($nodeTemplate)
    {
        $this->container['nodeTemplate'] = $nodeTemplate;
        return $this;
    }

    /**
    * Gets initialNodeCount
    *  节点池初始化节点个数。查询时为节点池目标节点数量。
    *
    * @return int|null
    */
    public function getInitialNodeCount()
    {
        return $this->container['initialNodeCount'];
    }

    /**
    * Sets initialNodeCount
    *
    * @param int|null $initialNodeCount 节点池初始化节点个数。查询时为节点池目标节点数量。
    *
    * @return $this
    */
    public function setInitialNodeCount($initialNodeCount)
    {
        $this->container['initialNodeCount'] = $initialNodeCount;
        return $this;
    }

    /**
    * Gets autoscaling
    *  autoscaling
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling|null
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling|null $autoscaling autoscaling
    *
    * @return $this
    */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;
        return $this;
    }

    /**
    * Gets nodeManagement
    *  nodeManagement
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeManagement|null
    */
    public function getNodeManagement()
    {
        return $this->container['nodeManagement'];
    }

    /**
    * Sets nodeManagement
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeManagement|null $nodeManagement nodeManagement
    *
    * @return $this
    */
    public function setNodeManagement($nodeManagement)
    {
        $this->container['nodeManagement'] = $nodeManagement;
        return $this;
    }

    /**
    * Gets podSecurityGroups
    *  1.21版本集群节点池支持绑定安全组，最多五个。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\SecurityID[]|null
    */
    public function getPodSecurityGroups()
    {
        return $this->container['podSecurityGroups'];
    }

    /**
    * Sets podSecurityGroups
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\SecurityID[]|null $podSecurityGroups 1.21版本集群节点池支持绑定安全组，最多五个。
    *
    * @return $this
    */
    public function setPodSecurityGroups($podSecurityGroups)
    {
        $this->container['podSecurityGroups'] = $podSecurityGroups;
        return $this;
    }

    /**
    * Gets extensionScaleGroups
    *  extensionScaleGroups
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup|null
    */
    public function getExtensionScaleGroups()
    {
        return $this->container['extensionScaleGroups'];
    }

    /**
    * Sets extensionScaleGroups
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup|null $extensionScaleGroups extensionScaleGroups
    *
    * @return $this
    */
    public function setExtensionScaleGroups($extensionScaleGroups)
    {
        $this->container['extensionScaleGroups'] = $extensionScaleGroups;
        return $this;
    }

    /**
    * Gets customSecurityGroups
    *  节点池自定义安全组相关配置。支持节点池新扩容节点绑定指定的安全组。  - 未指定安全组ID，新建节点将添加Node节点默认安全组。  - 指定有效安全组ID，新建节点将使用指定安全组。  - 指定安全组，应避免对CCE运行依赖的端口规则进行修改。[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/cce_faq/cce_faq_00265.html)。](tag:hws)[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00265.html)。](tag:hws_hk)
    *
    * @return string[]|null
    */
    public function getCustomSecurityGroups()
    {
        return $this->container['customSecurityGroups'];
    }

    /**
    * Sets customSecurityGroups
    *
    * @param string[]|null $customSecurityGroups 节点池自定义安全组相关配置。支持节点池新扩容节点绑定指定的安全组。  - 未指定安全组ID，新建节点将添加Node节点默认安全组。  - 指定有效安全组ID，新建节点将使用指定安全组。  - 指定安全组，应避免对CCE运行依赖的端口规则进行修改。[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/cce_faq/cce_faq_00265.html)。](tag:hws)[详细设置请参考[集群安全组规则配置](https://support.huaweicloud.com/intl/zh-cn/cce_faq/cce_faq_00265.html)。](tag:hws_hk)
    *
    * @return $this
    */
    public function setCustomSecurityGroups($customSecurityGroups)
    {
        $this->container['customSecurityGroups'] = $customSecurityGroups;
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

