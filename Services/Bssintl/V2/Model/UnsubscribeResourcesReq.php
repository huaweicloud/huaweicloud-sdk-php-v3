<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnsubscribeResourcesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnsubscribeResourcesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * unsubscribeType  |参数名称：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。| |参数的约束及描述：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。|
    * unsubscribeReasonType  |参数名称：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他| |参数的约束及描述：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他|
    * unsubscribeReason  |参数名称：退订原因，一般由客户输入。| |参数约束及描述：退订原因，一般由客户输入。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceIds' => 'string[]',
            'unsubscribeType' => 'int',
            'unsubscribeReasonType' => 'int',
            'unsubscribeReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * unsubscribeType  |参数名称：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。| |参数的约束及描述：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。|
    * unsubscribeReasonType  |参数名称：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他| |参数的约束及描述：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他|
    * unsubscribeReason  |参数名称：退订原因，一般由客户输入。| |参数约束及描述：退订原因，一般由客户输入。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceIds' => null,
        'unsubscribeType' => 'int32',
        'unsubscribeReasonType' => 'int32',
        'unsubscribeReason' => null
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
    * resourceIds  |参数名称：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * unsubscribeType  |参数名称：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。| |参数的约束及描述：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。|
    * unsubscribeReasonType  |参数名称：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他| |参数的约束及描述：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他|
    * unsubscribeReason  |参数名称：退订原因，一般由客户输入。| |参数约束及描述：退订原因，一般由客户输入。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceIds' => 'resource_ids',
            'unsubscribeType' => 'unsubscribe_type',
            'unsubscribeReasonType' => 'unsubscribe_reason_type',
            'unsubscribeReason' => 'unsubscribe_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceIds  |参数名称：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * unsubscribeType  |参数名称：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。| |参数的约束及描述：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。|
    * unsubscribeReasonType  |参数名称：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他| |参数的约束及描述：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他|
    * unsubscribeReason  |参数名称：退订原因，一般由客户输入。| |参数约束及描述：退订原因，一般由客户输入。|
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceIds' => 'setResourceIds',
            'unsubscribeType' => 'setUnsubscribeType',
            'unsubscribeReasonType' => 'setUnsubscribeReasonType',
            'unsubscribeReason' => 'setUnsubscribeReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceIds  |参数名称：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    * unsubscribeType  |参数名称：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。| |参数的约束及描述：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。|
    * unsubscribeReasonType  |参数名称：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他| |参数的约束及描述：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他|
    * unsubscribeReason  |参数名称：退订原因，一般由客户输入。| |参数约束及描述：退订原因，一般由客户输入。|
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceIds' => 'getResourceIds',
            'unsubscribeType' => 'getUnsubscribeType',
            'unsubscribeReasonType' => 'getUnsubscribeReasonType',
            'unsubscribeReason' => 'getUnsubscribeReason'
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
        $this->container['unsubscribeType'] = isset($data['unsubscribeType']) ? $data['unsubscribeType'] : null;
        $this->container['unsubscribeReasonType'] = isset($data['unsubscribeReasonType']) ? $data['unsubscribeReasonType'] : null;
        $this->container['unsubscribeReason'] = isset($data['unsubscribeReason']) ? $data['unsubscribeReason'] : null;
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
        if ($this->container['unsubscribeType'] === null) {
            $invalidProperties[] = "'unsubscribeType' can't be null";
        }
            if (($this->container['unsubscribeType'] > 2)) {
                $invalidProperties[] = "invalid value for 'unsubscribeType', must be smaller than or equal to 2.";
            }
            if (($this->container['unsubscribeType'] < 1)) {
                $invalidProperties[] = "invalid value for 'unsubscribeType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unsubscribeReasonType']) && ($this->container['unsubscribeReasonType'] > 5)) {
                $invalidProperties[] = "invalid value for 'unsubscribeReasonType', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['unsubscribeReasonType']) && ($this->container['unsubscribeReasonType'] < 1)) {
                $invalidProperties[] = "invalid value for 'unsubscribeReasonType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unsubscribeReason']) && (mb_strlen($this->container['unsubscribeReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'unsubscribeReason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['unsubscribeReason']) && (mb_strlen($this->container['unsubscribeReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'unsubscribeReason', the character length must be bigger than or equal to 0.";
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
    *  |参数名称：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
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
    * @param string[] $resourceIds |参数名称：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。| |参数约束以及描述：资源ID列表。最大支持1次性输入10个资源ID，只能输入主资源ID。哪些资源是主资源请根据“2.1-查询客户包周期资源列表”接口响应参数中的“is_main_resource”来标识。|
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets unsubscribeType
    *  |参数名称：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。| |参数的约束及描述：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。|
    *
    * @return int
    */
    public function getUnsubscribeType()
    {
        return $this->container['unsubscribeType'];
    }

    /**
    * Sets unsubscribeType
    *
    * @param int $unsubscribeType |参数名称：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。| |参数的约束及描述：退订类型，取值如下：1：退订资源及其已续费周期。2：只退订资源已续费周期，不退订资源。|
    *
    * @return $this
    */
    public function setUnsubscribeType($unsubscribeType)
    {
        $this->container['unsubscribeType'] = $unsubscribeType;
        return $this;
    }

    /**
    * Gets unsubscribeReasonType
    *  |参数名称：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他| |参数的约束及描述：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他|
    *
    * @return int|null
    */
    public function getUnsubscribeReasonType()
    {
        return $this->container['unsubscribeReasonType'];
    }

    /**
    * Sets unsubscribeReasonType
    *
    * @param int|null $unsubscribeReasonType |参数名称：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他| |参数的约束及描述：退订理由分类，取值如下：1：产品不好用2：产品功能无法满足需求3：不会操作/操作过于复杂4：对服务不满意5：其他|
    *
    * @return $this
    */
    public function setUnsubscribeReasonType($unsubscribeReasonType)
    {
        $this->container['unsubscribeReasonType'] = $unsubscribeReasonType;
        return $this;
    }

    /**
    * Gets unsubscribeReason
    *  |参数名称：退订原因，一般由客户输入。| |参数约束及描述：退订原因，一般由客户输入。|
    *
    * @return string|null
    */
    public function getUnsubscribeReason()
    {
        return $this->container['unsubscribeReason'];
    }

    /**
    * Sets unsubscribeReason
    *
    * @param string|null $unsubscribeReason |参数名称：退订原因，一般由客户输入。| |参数约束及描述：退订原因，一般由客户输入。|
    *
    * @return $this
    */
    public function setUnsubscribeReason($unsubscribeReason)
    {
        $this->container['unsubscribeReason'] = $unsubscribeReason;
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

