<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVulRepairCmdsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVulRepairCmdsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * selectType  **参数解释**: 选择全部漏洞类型,该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞 - all_vul_container_host：选择所有容器节点 - all_vul_container：选择所有容器  **默认取值**: 不涉及
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'selectType' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[]',
            'hostDataList' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]',
            'isContainer' => 'bool',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * selectType  **参数解释**: 选择全部漏洞类型,该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞 - all_vul_container_host：选择所有容器节点 - all_vul_container：选择所有容器  **默认取值**: 不涉及
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'selectType' => null,
        'dataList' => null,
        'hostDataList' => null,
        'isContainer' => null,
        'clusterId' => null
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
    * selectType  **参数解释**: 选择全部漏洞类型,该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞 - all_vul_container_host：选择所有容器节点 - all_vul_container：选择所有容器  **默认取值**: 不涉及
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'selectType' => 'select_type',
            'dataList' => 'data_list',
            'hostDataList' => 'host_data_list',
            'isContainer' => 'is_container',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * selectType  **参数解释**: 选择全部漏洞类型,该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞 - all_vul_container_host：选择所有容器节点 - all_vul_container：选择所有容器  **默认取值**: 不涉及
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'selectType' => 'setSelectType',
            'dataList' => 'setDataList',
            'hostDataList' => 'setHostDataList',
            'isContainer' => 'setIsContainer',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * selectType  **参数解释**: 选择全部漏洞类型,该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞 - all_vul_container_host：选择所有容器节点 - all_vul_container：选择所有容器  **默认取值**: 不涉及
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'selectType' => 'getSelectType',
            'dataList' => 'getDataList',
            'hostDataList' => 'getHostDataList',
            'isContainer' => 'getIsContainer',
            'clusterId' => 'getClusterId'
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
        $this->container['selectType'] = isset($data['selectType']) ? $data['selectType'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['hostDataList'] = isset($data['hostDataList']) ? $data['hostDataList'] : null;
        $this->container['isContainer'] = isset($data['isContainer']) ? $data['isContainer'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['selectType']) && (mb_strlen($this->container['selectType']) > 64)) {
                $invalidProperties[] = "invalid value for 'selectType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['selectType']) && (mb_strlen($this->container['selectType']) < 1)) {
                $invalidProperties[] = "invalid value for 'selectType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
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
    * Gets selectType
    *  **参数解释**: 选择全部漏洞类型,该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞 - all_vul_container_host：选择所有容器节点 - all_vul_container：选择所有容器  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSelectType()
    {
        return $this->container['selectType'];
    }

    /**
    * Sets selectType
    *
    * @param string|null $selectType **参数解释**: 选择全部漏洞类型,该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞 - all_vul_container_host：选择所有容器节点 - all_vul_container：选择所有容器  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSelectType($selectType)
    {
        $this->container['selectType'] = $selectType;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[]|null $dataList **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets hostDataList
    *  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]|null
    */
    public function getHostDataList()
    {
        return $this->container['hostDataList'];
    }

    /**
    * Sets hostDataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]|null $hostDataList **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 最少1条，最多500条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostDataList($hostDataList)
    {
        $this->container['hostDataList'] = $hostDataList;
        return $this;
    }

    /**
    * Gets isContainer
    *  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    *
    * @return bool|null
    */
    public function getIsContainer()
    {
        return $this->container['isContainer'];
    }

    /**
    * Sets isContainer
    *
    * @param bool|null $isContainer **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    *
    * @return $this
    */
    public function setIsContainer($isContainer)
    {
        $this->container['isContainer'] = $isContainer;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

