<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimensionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimensionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 维度名称。 **约束限制** 不涉及 **取值范围**： 多维度用逗号分隔，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。。必须以字母开头，只能包含0-9/a-z/A-Z/_/-，多维度用\",\"分隔，每个维度的最大长度为32。总长度为[1,131]个字符。目前最大支持4个维度。举例：单维度场景：instance_id；多维度场景：instance_id,disk **默认取值** 不涉及
    * filterType  **参数解释**： 资源类型。 **约束限制** view参数取值为柱状图 条形图 环形柱状图 表格时，则filter_type参数不支持指定资源 **取值范围**： - all_instances: 全部资源 - specific_instances: 指定资源 **默认取值** 不涉及
    * values  **参数解释**： 维度值列表。 **约束限制** 包含的维度值对象个数为[0,200]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'filterType' => 'string',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 维度名称。 **约束限制** 不涉及 **取值范围**： 多维度用逗号分隔，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。。必须以字母开头，只能包含0-9/a-z/A-Z/_/-，多维度用\",\"分隔，每个维度的最大长度为32。总长度为[1,131]个字符。目前最大支持4个维度。举例：单维度场景：instance_id；多维度场景：instance_id,disk **默认取值** 不涉及
    * filterType  **参数解释**： 资源类型。 **约束限制** view参数取值为柱状图 条形图 环形柱状图 表格时，则filter_type参数不支持指定资源 **取值范围**： - all_instances: 全部资源 - specific_instances: 指定资源 **默认取值** 不涉及
    * values  **参数解释**： 维度值列表。 **约束限制** 包含的维度值对象个数为[0,200]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'filterType' => null,
        'values' => null
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
    * name  **参数解释**： 维度名称。 **约束限制** 不涉及 **取值范围**： 多维度用逗号分隔，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。。必须以字母开头，只能包含0-9/a-z/A-Z/_/-，多维度用\",\"分隔，每个维度的最大长度为32。总长度为[1,131]个字符。目前最大支持4个维度。举例：单维度场景：instance_id；多维度场景：instance_id,disk **默认取值** 不涉及
    * filterType  **参数解释**： 资源类型。 **约束限制** view参数取值为柱状图 条形图 环形柱状图 表格时，则filter_type参数不支持指定资源 **取值范围**： - all_instances: 全部资源 - specific_instances: 指定资源 **默认取值** 不涉及
    * values  **参数解释**： 维度值列表。 **约束限制** 包含的维度值对象个数为[0,200]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'filterType' => 'filter_type',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 维度名称。 **约束限制** 不涉及 **取值范围**： 多维度用逗号分隔，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。。必须以字母开头，只能包含0-9/a-z/A-Z/_/-，多维度用\",\"分隔，每个维度的最大长度为32。总长度为[1,131]个字符。目前最大支持4个维度。举例：单维度场景：instance_id；多维度场景：instance_id,disk **默认取值** 不涉及
    * filterType  **参数解释**： 资源类型。 **约束限制** view参数取值为柱状图 条形图 环形柱状图 表格时，则filter_type参数不支持指定资源 **取值范围**： - all_instances: 全部资源 - specific_instances: 指定资源 **默认取值** 不涉及
    * values  **参数解释**： 维度值列表。 **约束限制** 包含的维度值对象个数为[0,200]
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'filterType' => 'setFilterType',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 维度名称。 **约束限制** 不涉及 **取值范围**： 多维度用逗号分隔，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。。必须以字母开头，只能包含0-9/a-z/A-Z/_/-，多维度用\",\"分隔，每个维度的最大长度为32。总长度为[1,131]个字符。目前最大支持4个维度。举例：单维度场景：instance_id；多维度场景：instance_id,disk **默认取值** 不涉及
    * filterType  **参数解释**： 资源类型。 **约束限制** view参数取值为柱状图 条形图 环形柱状图 表格时，则filter_type参数不支持指定资源 **取值范围**： - all_instances: 全部资源 - specific_instances: 指定资源 **默认取值** 不涉及
    * values  **参数解释**： 维度值列表。 **约束限制** 包含的维度值对象个数为[0,200]
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'filterType' => 'getFilterType',
            'values' => 'getValues'
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
    const FILTER_TYPE_ALL_INSTANCES = 'all_instances';
    const FILTER_TYPE_SPECIFIC_INSTANCES = 'specific_instances';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFilterTypeAllowableValues()
    {
        return [
            self::FILTER_TYPE_ALL_INSTANCES,
            self::FILTER_TYPE_SPECIFIC_INSTANCES,
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
        $this->container['filterType'] = isset($data['filterType']) ? $data['filterType'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
            if ((mb_strlen($this->container['name']) > 131)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 131.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/.";
            }
        if ($this->container['filterType'] === null) {
            $invalidProperties[] = "'filterType' can't be null";
        }
            $allowedValues = $this->getFilterTypeAllowableValues();
                if (!is_null($this->container['filterType']) && !in_array($this->container['filterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filterType', must be one of '%s'",
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
    *  **参数解释**： 维度名称。 **约束限制** 不涉及 **取值范围**： 多维度用逗号分隔，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。。必须以字母开头，只能包含0-9/a-z/A-Z/_/-，多维度用\",\"分隔，每个维度的最大长度为32。总长度为[1,131]个字符。目前最大支持4个维度。举例：单维度场景：instance_id；多维度场景：instance_id,disk **默认取值** 不涉及
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
    * @param string $name **参数解释**： 维度名称。 **约束限制** 不涉及 **取值范围**： 多维度用逗号分隔，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。。必须以字母开头，只能包含0-9/a-z/A-Z/_/-，多维度用\",\"分隔，每个维度的最大长度为32。总长度为[1,131]个字符。目前最大支持4个维度。举例：单维度场景：instance_id；多维度场景：instance_id,disk **默认取值** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets filterType
    *  **参数解释**： 资源类型。 **约束限制** view参数取值为柱状图 条形图 环形柱状图 表格时，则filter_type参数不支持指定资源 **取值范围**： - all_instances: 全部资源 - specific_instances: 指定资源 **默认取值** 不涉及
    *
    * @return string
    */
    public function getFilterType()
    {
        return $this->container['filterType'];
    }

    /**
    * Sets filterType
    *
    * @param string $filterType **参数解释**： 资源类型。 **约束限制** view参数取值为柱状图 条形图 环形柱状图 表格时，则filter_type参数不支持指定资源 **取值范围**： - all_instances: 全部资源 - specific_instances: 指定资源 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setFilterType($filterType)
    {
        $this->container['filterType'] = $filterType;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**： 维度值列表。 **约束限制** 包含的维度值对象个数为[0,200]
    *
    * @return string[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[]|null $values **参数解释**： 维度值列表。 **约束限制** 包含的维度值对象个数为[0,200]
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

