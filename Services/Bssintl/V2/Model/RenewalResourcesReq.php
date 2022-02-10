<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RenewalResourcesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RenewalResourcesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * periodType  |参数名称：周期类型：2：月；3：年| |参数的约束及描述：周期类型：2：月；3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3|
    * expirePolicy  |参数名称：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订| |参数的约束及描述：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订|
    * isAutoPay  |参数名称：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。| |参数的约束及描述：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceIds' => 'string[]',
            'periodType' => 'int',
            'periodNum' => 'int',
            'expirePolicy' => 'int',
            'isAutoPay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * periodType  |参数名称：周期类型：2：月；3：年| |参数的约束及描述：周期类型：2：月；3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3|
    * expirePolicy  |参数名称：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订| |参数的约束及描述：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订|
    * isAutoPay  |参数名称：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。| |参数的约束及描述：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceIds' => null,
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'expirePolicy' => 'int32',
        'isAutoPay' => 'int32'
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
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * periodType  |参数名称：周期类型：2：月；3：年| |参数的约束及描述：周期类型：2：月；3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3|
    * expirePolicy  |参数名称：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订| |参数的约束及描述：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订|
    * isAutoPay  |参数名称：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。| |参数的约束及描述：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceIds' => 'resource_ids',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'expirePolicy' => 'expire_policy',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * periodType  |参数名称：周期类型：2：月；3：年| |参数的约束及描述：周期类型：2：月；3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3|
    * expirePolicy  |参数名称：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订| |参数的约束及描述：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订|
    * isAutoPay  |参数名称：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。| |参数的约束及描述：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。|
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceIds' => 'setResourceIds',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'expirePolicy' => 'setExpirePolicy',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceIds  |参数名称：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * periodType  |参数名称：周期类型：2：月；3：年| |参数的约束及描述：周期类型：2：月；3：年|
    * periodNum  |参数名称：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3|
    * expirePolicy  |参数名称：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订| |参数的约束及描述：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订|
    * isAutoPay  |参数名称：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。| |参数的约束及描述：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。|
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceIds' => 'getResourceIds',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'expirePolicy' => 'getExpirePolicy',
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['expirePolicy'] = isset($data['expirePolicy']) ? $data['expirePolicy'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : 0;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceIds'] === null) {
            $invalidProperties[] = "'resourceIds' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if (($this->container['periodType'] > 3)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 3.";
            }
            if (($this->container['periodType'] < 2)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 2.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 11)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 11.";
            }
            if (($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
            }
        if ($this->container['expirePolicy'] === null) {
            $invalidProperties[] = "'expirePolicy' can't be null";
        }
            if (($this->container['expirePolicy'] > 3)) {
                $invalidProperties[] = "invalid value for 'expirePolicy', must be smaller than or equal to 3.";
            }
            if (($this->container['expirePolicy'] < 0)) {
                $invalidProperties[] = "invalid value for 'expirePolicy', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be bigger than or equal to 0.";
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
    * Gets resourceIds
    *  |参数名称：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    *
    * @return string[]
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[] $resourceIds |参数名称：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。只支持传入主资源ID，最多100个资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets periodType
    *  |参数名称：周期类型：2：月；3：年| |参数的约束及描述：周期类型：2：月；3：年|
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType |参数名称：周期类型：2：月；3：年| |参数的约束及描述：周期类型：2：月；3：年|
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  |参数名称：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3|
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum |参数名称：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3| |参数的约束及描述：周期数目：如果是月，目前支持1-11；如果是年，目前支持1-3|
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets expirePolicy
    *  |参数名称：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订| |参数的约束及描述：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订|
    *
    * @return int
    */
    public function getExpirePolicy()
    {
        return $this->container['expirePolicy'];
    }

    /**
    * Sets expirePolicy
    *
    * @param int $expirePolicy |参数名称：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订| |参数的约束及描述：到期策略：0：进入宽限期1：转按需2：自动退订3：自动续订|
    *
    * @return $this
    */
    public function setExpirePolicy($expirePolicy)
    {
        $this->container['expirePolicy'] = $expirePolicy;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  |参数名称：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。| |参数的约束及描述：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。|
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay |参数名称：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。| |参数的约束及描述：是否自动支付。0：否1：是不填写的话，默认值是0，不自动支付。|
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

