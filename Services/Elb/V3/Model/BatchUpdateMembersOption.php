<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateMembersOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateMembersOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  后端服务器ID。 >此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * availabilityZone  参数解释：后端服务器的可用区。 约束限制：  仅支持iptarget类型的后端服务器设置该字段。且后端服务器组开启可用区亲和时，iptarget类型的后端服务器必须配置该字段为有效非空值。 取值范围：本region中ECS可选择的可用区。
    * adminStateUp  后端服务器的管理状态。取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  请勿传入该字段。
    * name  后端服务器名称。
    * protocolPort  后端服务器端口。  在开启端口透传的pool下的member，该字段无法更新。  [网关型LB，即pool协议为IP时，protocol_port必须设置为0。](tag:hws_eu)
    * weight  后端服务器的权重，请求按权重在同一后端服务器组下的后端服务器间分发。权重为0的后端不再接受新的请求。当后端服务器所在的后端服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'availabilityZone' => 'string',
            'adminStateUp' => 'bool',
            'name' => 'string',
            'protocolPort' => 'int',
            'weight' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  后端服务器ID。 >此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * availabilityZone  参数解释：后端服务器的可用区。 约束限制：  仅支持iptarget类型的后端服务器设置该字段。且后端服务器组开启可用区亲和时，iptarget类型的后端服务器必须配置该字段为有效非空值。 取值范围：本region中ECS可选择的可用区。
    * adminStateUp  后端服务器的管理状态。取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  请勿传入该字段。
    * name  后端服务器名称。
    * protocolPort  后端服务器端口。  在开启端口透传的pool下的member，该字段无法更新。  [网关型LB，即pool协议为IP时，protocol_port必须设置为0。](tag:hws_eu)
    * weight  后端服务器的权重，请求按权重在同一后端服务器组下的后端服务器间分发。权重为0的后端不再接受新的请求。当后端服务器所在的后端服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'availabilityZone' => null,
        'adminStateUp' => null,
        'name' => null,
        'protocolPort' => 'int32',
        'weight' => 'int32'
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
    * id  后端服务器ID。 >此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * availabilityZone  参数解释：后端服务器的可用区。 约束限制：  仅支持iptarget类型的后端服务器设置该字段。且后端服务器组开启可用区亲和时，iptarget类型的后端服务器必须配置该字段为有效非空值。 取值范围：本region中ECS可选择的可用区。
    * adminStateUp  后端服务器的管理状态。取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  请勿传入该字段。
    * name  后端服务器名称。
    * protocolPort  后端服务器端口。  在开启端口透传的pool下的member，该字段无法更新。  [网关型LB，即pool协议为IP时，protocol_port必须设置为0。](tag:hws_eu)
    * weight  后端服务器的权重，请求按权重在同一后端服务器组下的后端服务器间分发。权重为0的后端不再接受新的请求。当后端服务器所在的后端服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'availabilityZone' => 'availability_zone',
            'adminStateUp' => 'admin_state_up',
            'name' => 'name',
            'protocolPort' => 'protocol_port',
            'weight' => 'weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  后端服务器ID。 >此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * availabilityZone  参数解释：后端服务器的可用区。 约束限制：  仅支持iptarget类型的后端服务器设置该字段。且后端服务器组开启可用区亲和时，iptarget类型的后端服务器必须配置该字段为有效非空值。 取值范围：本region中ECS可选择的可用区。
    * adminStateUp  后端服务器的管理状态。取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  请勿传入该字段。
    * name  后端服务器名称。
    * protocolPort  后端服务器端口。  在开启端口透传的pool下的member，该字段无法更新。  [网关型LB，即pool协议为IP时，protocol_port必须设置为0。](tag:hws_eu)
    * weight  后端服务器的权重，请求按权重在同一后端服务器组下的后端服务器间分发。权重为0的后端不再接受新的请求。当后端服务器所在的后端服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'availabilityZone' => 'setAvailabilityZone',
            'adminStateUp' => 'setAdminStateUp',
            'name' => 'setName',
            'protocolPort' => 'setProtocolPort',
            'weight' => 'setWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  后端服务器ID。 >此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * availabilityZone  参数解释：后端服务器的可用区。 约束限制：  仅支持iptarget类型的后端服务器设置该字段。且后端服务器组开启可用区亲和时，iptarget类型的后端服务器必须配置该字段为有效非空值。 取值范围：本region中ECS可选择的可用区。
    * adminStateUp  后端服务器的管理状态。取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  请勿传入该字段。
    * name  后端服务器名称。
    * protocolPort  后端服务器端口。  在开启端口透传的pool下的member，该字段无法更新。  [网关型LB，即pool协议为IP时，protocol_port必须设置为0。](tag:hws_eu)
    * weight  后端服务器的权重，请求按权重在同一后端服务器组下的后端服务器间分发。权重为0的后端不再接受新的请求。当后端服务器所在的后端服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'availabilityZone' => 'getAvailabilityZone',
            'adminStateUp' => 'getAdminStateUp',
            'name' => 'getName',
            'protocolPort' => 'getProtocolPort',
            'weight' => 'getWeight'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 100)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
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
    * Gets id
    *  后端服务器ID。 >此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 后端服务器ID。 >此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  参数解释：后端服务器的可用区。 约束限制：  仅支持iptarget类型的后端服务器设置该字段。且后端服务器组开启可用区亲和时，iptarget类型的后端服务器必须配置该字段为有效非空值。 取值范围：本region中ECS可选择的可用区。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 参数解释：后端服务器的可用区。 约束限制：  仅支持iptarget类型的后端服务器设置该字段。且后端服务器组开启可用区亲和时，iptarget类型的后端服务器必须配置该字段为有效非空值。 取值范围：本region中ECS可选择的可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端服务器的管理状态。取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  请勿传入该字段。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 后端服务器的管理状态。取值：true、false。  虽然创建、更新请求支持该字段，但实际取值决定于后端服务器对应的弹性云服务器是否存在。若存在，该值为true，否则，该值为false。  请勿传入该字段。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets name
    *  后端服务器名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 后端服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端服务器端口。  在开启端口透传的pool下的member，该字段无法更新。  [网关型LB，即pool协议为IP时，protocol_port必须设置为0。](tag:hws_eu)
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort 后端服务器端口。  在开启端口透传的pool下的member，该字段无法更新。  [网关型LB，即pool协议为IP时，protocol_port必须设置为0。](tag:hws_eu)
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets weight
    *  后端服务器的权重，请求按权重在同一后端服务器组下的后端服务器间分发。权重为0的后端不再接受新的请求。当后端服务器所在的后端服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 后端服务器的权重，请求按权重在同一后端服务器组下的后端服务器间分发。权重为0的后端不再接受新的请求。当后端服务器所在的后端服务器组的lb_algorithm的取值为SOURCE_IP时，该字段无效。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
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

