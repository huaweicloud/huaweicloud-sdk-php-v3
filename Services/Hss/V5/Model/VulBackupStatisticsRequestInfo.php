<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulBackupStatisticsRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulBackupStatisticsRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * selectType  **参数解释**: 选择全部漏洞类型，该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当select_type选择all_vul时，需要传递该参数 **约束限制**: 不涉及 **取值范围**: - linux_vul : 漏洞类型-linux漏洞 - windows_vul : 漏洞类型-windows漏洞 - web_cms : Web-CMS漏洞 - app_vul : 应用漏洞 - urgent_vul : 应急漏洞  **默认取值**: linux_vul
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'selectType' => 'string',
            'type' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[]',
            'hostDataList' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * selectType  **参数解释**: 选择全部漏洞类型，该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当select_type选择all_vul时，需要传递该参数 **约束限制**: 不涉及 **取值范围**: - linux_vul : 漏洞类型-linux漏洞 - windows_vul : 漏洞类型-windows漏洞 - web_cms : Web-CMS漏洞 - app_vul : 应用漏洞 - urgent_vul : 应急漏洞  **默认取值**: linux_vul
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'selectType' => null,
        'type' => null,
        'dataList' => null,
        'hostDataList' => null
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
    * selectType  **参数解释**: 选择全部漏洞类型，该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当select_type选择all_vul时，需要传递该参数 **约束限制**: 不涉及 **取值范围**: - linux_vul : 漏洞类型-linux漏洞 - windows_vul : 漏洞类型-windows漏洞 - web_cms : Web-CMS漏洞 - app_vul : 应用漏洞 - urgent_vul : 应急漏洞  **默认取值**: linux_vul
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'selectType' => 'select_type',
            'type' => 'type',
            'dataList' => 'data_list',
            'hostDataList' => 'host_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * selectType  **参数解释**: 选择全部漏洞类型，该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当select_type选择all_vul时，需要传递该参数 **约束限制**: 不涉及 **取值范围**: - linux_vul : 漏洞类型-linux漏洞 - windows_vul : 漏洞类型-windows漏洞 - web_cms : Web-CMS漏洞 - app_vul : 应用漏洞 - urgent_vul : 应急漏洞  **默认取值**: linux_vul
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'selectType' => 'setSelectType',
            'type' => 'setType',
            'dataList' => 'setDataList',
            'hostDataList' => 'setHostDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * selectType  **参数解释**: 选择全部漏洞类型，该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当select_type选择all_vul时，需要传递该参数 **约束限制**: 不涉及 **取值范围**: - linux_vul : 漏洞类型-linux漏洞 - windows_vul : 漏洞类型-windows漏洞 - web_cms : Web-CMS漏洞 - app_vul : 应用漏洞 - urgent_vul : 应急漏洞  **默认取值**: linux_vul
    * dataList  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * hostDataList  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'selectType' => 'getSelectType',
            'type' => 'getType',
            'dataList' => 'getDataList',
            'hostDataList' => 'getHostDataList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['hostDataList'] = isset($data['hostDataList']) ? $data['hostDataList'] : null;
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
            if (!is_null($this->container['selectType']) && !preg_match("/^all_vul|all_host$/", $this->container['selectType'])) {
                $invalidProperties[] = "invalid value for 'selectType', must be conform to the pattern /^all_vul|all_host$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/(^linux_vul|windows_vul|web_cms|app_vul|urgent_vul$)/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /(^linux_vul|windows_vul|web_cms|app_vul|urgent_vul$)/.";
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
    *  **参数解释**: 选择全部漏洞类型，该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
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
    * @param string|null $selectType **参数解释**: 选择全部漏洞类型，该参数优先级高于data_list和host_data_list **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSelectType($selectType)
    {
        $this->container['selectType'] = $selectType;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 漏洞类型，当select_type选择all_vul时，需要传递该参数 **约束限制**: 不涉及 **取值范围**: - linux_vul : 漏洞类型-linux漏洞 - windows_vul : 漏洞类型-windows漏洞 - web_cms : Web-CMS漏洞 - app_vul : 应用漏洞 - urgent_vul : 应急漏洞  **默认取值**: linux_vul
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
    * @param string|null $type **参数解释**: 漏洞类型，当select_type选择all_vul时，需要传递该参数 **约束限制**: 不涉及 **取值范围**: - linux_vul : 漏洞类型-linux漏洞 - windows_vul : 漏洞类型-windows漏洞 - web_cms : Web-CMS漏洞 - app_vul : 应用漏洞 - urgent_vul : 应急漏洞  **默认取值**: linux_vul
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[]|null $dataList **参数解释**: 漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
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
    *  **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]|null $hostDataList **参数解释**: 主机维度漏洞列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostDataList($hostDataList)
    {
        $this->container['hostDataList'] = $hostDataList;
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

