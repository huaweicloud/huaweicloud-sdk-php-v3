<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * start  **参数解释**： 分页起始值，内容为alarm_id **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22位字母或数字。字符长度为24 **默认取值**： 不涉及。
    * limit  **参数解释**： 用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 取值范围(0,100] **默认取值**： 默认值为100
    * order  **参数解释**： 用于标识结果排序方法，按创建时间排序。 **约束限制**： 不涉及 **取值范围**： 枚举值： - asc：升序 - desc：降序 **默认取值**： desc
    * enterpriseProjectId  **参数解释**： 企业项目ID，当查询所有企业项目时，配置为：all_granted_eps。 当需要查询某个企业项目时，配置为对应的企业项目ID，请参考获[[获取项目ID](https://support.huaweicloud.com/api-ces/ces_03_0057.html)](tag:hc)[[获取项目ID](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0057.html)](tag:hk)[[获取项目ID](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0057.html)](tag:hws_eu)[[获取项目ID](ces_03_0057.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。 **默认取值**： all_granted_eps
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'start' => 'string',
            'limit' => 'int',
            'order' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * start  **参数解释**： 分页起始值，内容为alarm_id **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22位字母或数字。字符长度为24 **默认取值**： 不涉及。
    * limit  **参数解释**： 用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 取值范围(0,100] **默认取值**： 默认值为100
    * order  **参数解释**： 用于标识结果排序方法，按创建时间排序。 **约束限制**： 不涉及 **取值范围**： 枚举值： - asc：升序 - desc：降序 **默认取值**： desc
    * enterpriseProjectId  **参数解释**： 企业项目ID，当查询所有企业项目时，配置为：all_granted_eps。 当需要查询某个企业项目时，配置为对应的企业项目ID，请参考获[[获取项目ID](https://support.huaweicloud.com/api-ces/ces_03_0057.html)](tag:hc)[[获取项目ID](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0057.html)](tag:hk)[[获取项目ID](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0057.html)](tag:hws_eu)[[获取项目ID](ces_03_0057.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。 **默认取值**： all_granted_eps
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'start' => null,
        'limit' => 'int32',
        'order' => null,
        'enterpriseProjectId' => null
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
    * start  **参数解释**： 分页起始值，内容为alarm_id **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22位字母或数字。字符长度为24 **默认取值**： 不涉及。
    * limit  **参数解释**： 用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 取值范围(0,100] **默认取值**： 默认值为100
    * order  **参数解释**： 用于标识结果排序方法，按创建时间排序。 **约束限制**： 不涉及 **取值范围**： 枚举值： - asc：升序 - desc：降序 **默认取值**： desc
    * enterpriseProjectId  **参数解释**： 企业项目ID，当查询所有企业项目时，配置为：all_granted_eps。 当需要查询某个企业项目时，配置为对应的企业项目ID，请参考获[[获取项目ID](https://support.huaweicloud.com/api-ces/ces_03_0057.html)](tag:hc)[[获取项目ID](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0057.html)](tag:hk)[[获取项目ID](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0057.html)](tag:hws_eu)[[获取项目ID](ces_03_0057.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。 **默认取值**： all_granted_eps
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'start' => 'start',
            'limit' => 'limit',
            'order' => 'order',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * start  **参数解释**： 分页起始值，内容为alarm_id **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22位字母或数字。字符长度为24 **默认取值**： 不涉及。
    * limit  **参数解释**： 用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 取值范围(0,100] **默认取值**： 默认值为100
    * order  **参数解释**： 用于标识结果排序方法，按创建时间排序。 **约束限制**： 不涉及 **取值范围**： 枚举值： - asc：升序 - desc：降序 **默认取值**： desc
    * enterpriseProjectId  **参数解释**： 企业项目ID，当查询所有企业项目时，配置为：all_granted_eps。 当需要查询某个企业项目时，配置为对应的企业项目ID，请参考获[[获取项目ID](https://support.huaweicloud.com/api-ces/ces_03_0057.html)](tag:hc)[[获取项目ID](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0057.html)](tag:hk)[[获取项目ID](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0057.html)](tag:hws_eu)[[获取项目ID](ces_03_0057.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。 **默认取值**： all_granted_eps
    *
    * @var string[]
    */
    protected static $setters = [
            'start' => 'setStart',
            'limit' => 'setLimit',
            'order' => 'setOrder',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * start  **参数解释**： 分页起始值，内容为alarm_id **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22位字母或数字。字符长度为24 **默认取值**： 不涉及。
    * limit  **参数解释**： 用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 取值范围(0,100] **默认取值**： 默认值为100
    * order  **参数解释**： 用于标识结果排序方法，按创建时间排序。 **约束限制**： 不涉及 **取值范围**： 枚举值： - asc：升序 - desc：降序 **默认取值**： desc
    * enterpriseProjectId  **参数解释**： 企业项目ID，当查询所有企业项目时，配置为：all_granted_eps。 当需要查询某个企业项目时，配置为对应的企业项目ID，请参考获[[获取项目ID](https://support.huaweicloud.com/api-ces/ces_03_0057.html)](tag:hc)[[获取项目ID](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0057.html)](tag:hk)[[获取项目ID](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0057.html)](tag:hws_eu)[[获取项目ID](ces_03_0057.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。 **默认取值**： all_granted_eps
    *
    * @var string[]
    */
    protected static $getters = [
            'start' => 'getStart',
            'limit' => 'getLimit',
            'order' => 'getOrder',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['start']) && !preg_match("/^al([a-z]|[A-Z]|[0-9]){22}$/", $this->container['start'])) {
                $invalidProperties[] = "invalid value for 'start', must be conform to the pattern /^al([a-z]|[A-Z]|[0-9]){22}$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['order']) && !preg_match("/^(asc|desc)$/", $this->container['order'])) {
                $invalidProperties[] = "invalid value for 'order', must be conform to the pattern /^(asc|desc)$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12}$|0|all_granted_eps$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12}$|0|all_granted_eps$/.";
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
    * Gets start
    *  **参数解释**： 分页起始值，内容为alarm_id **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22位字母或数字。字符长度为24 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start **参数解释**： 分页起始值，内容为alarm_id **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22位字母或数字。字符长度为24 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 取值范围(0,100] **默认取值**： 默认值为100
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 取值范围(0,100] **默认取值**： 默认值为100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释**： 用于标识结果排序方法，按创建时间排序。 **约束限制**： 不涉及 **取值范围**： 枚举值： - asc：升序 - desc：降序 **默认取值**： desc
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order **参数解释**： 用于标识结果排序方法，按创建时间排序。 **约束限制**： 不涉及 **取值范围**： 枚举值： - asc：升序 - desc：降序 **默认取值**： desc
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID，当查询所有企业项目时，配置为：all_granted_eps。 当需要查询某个企业项目时，配置为对应的企业项目ID，请参考获[[获取项目ID](https://support.huaweicloud.com/api-ces/ces_03_0057.html)](tag:hc)[[获取项目ID](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0057.html)](tag:hk)[[获取项目ID](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0057.html)](tag:hws_eu)[[获取项目ID](ces_03_0057.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。 **默认取值**： all_granted_eps
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID，当查询所有企业项目时，配置为：all_granted_eps。 当需要查询某个企业项目时，配置为对应的企业项目ID，请参考获[[获取项目ID](https://support.huaweicloud.com/api-ces/ces_03_0057.html)](tag:hc)[[获取项目ID](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0057.html)](tag:hk)[[获取项目ID](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0057.html)](tag:hws_eu)[[获取项目ID](ces_03_0057.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。 **默认取值**： all_granted_eps
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

