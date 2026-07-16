<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddReadonlyNodeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddReadonlyNodeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specCode  **参数解释：** 资源规格编码。获取方法请参见查询数据库规格中参数的值。示例：dds.mongodb.c6.large.4.rr。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * num  **参数解释：** 待新增只读节点个数。 **约束限制：** 不涉及。 **取值范围：** [1, 5]。 **默认取值：** 不涉及。
    * delay  **参数解释：** 同步延迟时间。 **约束限制：** 集群不支持设置。 **取值范围：** 0~1200秒。 **默认取值：** 不涉及。
    * isAutoPay  **参数解释：** 新增包年包月实例的只读节点时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 不涉及。 **取值范围：** - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * groupId  **参数解释：** 目标Shard组ID。集群实例添加只读节点时传入目标Shard组ID。 **约束限制：** 副本集实例不支持设置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * availabilityZone  **参数解释：** 新增只读节点的可用区ID。可根据“查询实例列表和详情”接口响应参数获取。 **约束限制：** 该参数仅对多可用区部署的实例生效。仅支持传入一个可用区且必须属于当前实例的多个可用区内的其中一个。 **取值范围：** 不涉及。 **默认取值：** 若不传此参数，新增的只读节点将相对均匀分布在主备节点所在可用区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specCode' => 'string',
            'num' => 'int',
            'delay' => 'int',
            'isAutoPay' => 'bool',
            'groupId' => 'string',
            'availabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specCode  **参数解释：** 资源规格编码。获取方法请参见查询数据库规格中参数的值。示例：dds.mongodb.c6.large.4.rr。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * num  **参数解释：** 待新增只读节点个数。 **约束限制：** 不涉及。 **取值范围：** [1, 5]。 **默认取值：** 不涉及。
    * delay  **参数解释：** 同步延迟时间。 **约束限制：** 集群不支持设置。 **取值范围：** 0~1200秒。 **默认取值：** 不涉及。
    * isAutoPay  **参数解释：** 新增包年包月实例的只读节点时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 不涉及。 **取值范围：** - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * groupId  **参数解释：** 目标Shard组ID。集群实例添加只读节点时传入目标Shard组ID。 **约束限制：** 副本集实例不支持设置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * availabilityZone  **参数解释：** 新增只读节点的可用区ID。可根据“查询实例列表和详情”接口响应参数获取。 **约束限制：** 该参数仅对多可用区部署的实例生效。仅支持传入一个可用区且必须属于当前实例的多个可用区内的其中一个。 **取值范围：** 不涉及。 **默认取值：** 若不传此参数，新增的只读节点将相对均匀分布在主备节点所在可用区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specCode' => null,
        'num' => 'int32',
        'delay' => 'int32',
        'isAutoPay' => null,
        'groupId' => null,
        'availabilityZone' => null
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
    * specCode  **参数解释：** 资源规格编码。获取方法请参见查询数据库规格中参数的值。示例：dds.mongodb.c6.large.4.rr。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * num  **参数解释：** 待新增只读节点个数。 **约束限制：** 不涉及。 **取值范围：** [1, 5]。 **默认取值：** 不涉及。
    * delay  **参数解释：** 同步延迟时间。 **约束限制：** 集群不支持设置。 **取值范围：** 0~1200秒。 **默认取值：** 不涉及。
    * isAutoPay  **参数解释：** 新增包年包月实例的只读节点时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 不涉及。 **取值范围：** - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * groupId  **参数解释：** 目标Shard组ID。集群实例添加只读节点时传入目标Shard组ID。 **约束限制：** 副本集实例不支持设置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * availabilityZone  **参数解释：** 新增只读节点的可用区ID。可根据“查询实例列表和详情”接口响应参数获取。 **约束限制：** 该参数仅对多可用区部署的实例生效。仅支持传入一个可用区且必须属于当前实例的多个可用区内的其中一个。 **取值范围：** 不涉及。 **默认取值：** 若不传此参数，新增的只读节点将相对均匀分布在主备节点所在可用区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specCode' => 'spec_code',
            'num' => 'num',
            'delay' => 'delay',
            'isAutoPay' => 'is_auto_pay',
            'groupId' => 'group_id',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specCode  **参数解释：** 资源规格编码。获取方法请参见查询数据库规格中参数的值。示例：dds.mongodb.c6.large.4.rr。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * num  **参数解释：** 待新增只读节点个数。 **约束限制：** 不涉及。 **取值范围：** [1, 5]。 **默认取值：** 不涉及。
    * delay  **参数解释：** 同步延迟时间。 **约束限制：** 集群不支持设置。 **取值范围：** 0~1200秒。 **默认取值：** 不涉及。
    * isAutoPay  **参数解释：** 新增包年包月实例的只读节点时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 不涉及。 **取值范围：** - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * groupId  **参数解释：** 目标Shard组ID。集群实例添加只读节点时传入目标Shard组ID。 **约束限制：** 副本集实例不支持设置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * availabilityZone  **参数解释：** 新增只读节点的可用区ID。可根据“查询实例列表和详情”接口响应参数获取。 **约束限制：** 该参数仅对多可用区部署的实例生效。仅支持传入一个可用区且必须属于当前实例的多个可用区内的其中一个。 **取值范围：** 不涉及。 **默认取值：** 若不传此参数，新增的只读节点将相对均匀分布在主备节点所在可用区。
    *
    * @var string[]
    */
    protected static $setters = [
            'specCode' => 'setSpecCode',
            'num' => 'setNum',
            'delay' => 'setDelay',
            'isAutoPay' => 'setIsAutoPay',
            'groupId' => 'setGroupId',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specCode  **参数解释：** 资源规格编码。获取方法请参见查询数据库规格中参数的值。示例：dds.mongodb.c6.large.4.rr。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * num  **参数解释：** 待新增只读节点个数。 **约束限制：** 不涉及。 **取值范围：** [1, 5]。 **默认取值：** 不涉及。
    * delay  **参数解释：** 同步延迟时间。 **约束限制：** 集群不支持设置。 **取值范围：** 0~1200秒。 **默认取值：** 不涉及。
    * isAutoPay  **参数解释：** 新增包年包月实例的只读节点时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 不涉及。 **取值范围：** - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * groupId  **参数解释：** 目标Shard组ID。集群实例添加只读节点时传入目标Shard组ID。 **约束限制：** 副本集实例不支持设置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * availabilityZone  **参数解释：** 新增只读节点的可用区ID。可根据“查询实例列表和详情”接口响应参数获取。 **约束限制：** 该参数仅对多可用区部署的实例生效。仅支持传入一个可用区且必须属于当前实例的多个可用区内的其中一个。 **取值范围：** 不涉及。 **默认取值：** 若不传此参数，新增的只读节点将相对均匀分布在主备节点所在可用区。
    *
    * @var string[]
    */
    protected static $getters = [
            'specCode' => 'getSpecCode',
            'num' => 'getNum',
            'delay' => 'getDelay',
            'isAutoPay' => 'getIsAutoPay',
            'groupId' => 'getGroupId',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['num'] === null) {
            $invalidProperties[] = "'num' can't be null";
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
    * Gets specCode
    *  **参数解释：** 资源规格编码。获取方法请参见查询数据库规格中参数的值。示例：dds.mongodb.c6.large.4.rr。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode **参数解释：** 资源规格编码。获取方法请参见查询数据库规格中参数的值。示例：dds.mongodb.c6.large.4.rr。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets num
    *  **参数解释：** 待新增只读节点个数。 **约束限制：** 不涉及。 **取值范围：** [1, 5]。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int $num **参数解释：** 待新增只读节点个数。 **约束限制：** 不涉及。 **取值范围：** [1, 5]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets delay
    *  **参数解释：** 同步延迟时间。 **约束限制：** 集群不支持设置。 **取值范围：** 0~1200秒。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int|null $delay **参数解释：** 同步延迟时间。 **约束限制：** 集群不支持设置。 **取值范围：** 0~1200秒。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  **参数解释：** 新增包年包月实例的只读节点时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 不涉及。 **取值范围：** - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay **参数解释：** 新增包年包月实例的只读节点时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 不涉及。 **取值范围：** - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释：** 目标Shard组ID。集群实例添加只读节点时传入目标Shard组ID。 **约束限制：** 副本集实例不支持设置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释：** 目标Shard组ID。集群实例添加只读节点时传入目标Shard组ID。 **约束限制：** 副本集实例不支持设置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释：** 新增只读节点的可用区ID。可根据“查询实例列表和详情”接口响应参数获取。 **约束限制：** 该参数仅对多可用区部署的实例生效。仅支持传入一个可用区且必须属于当前实例的多个可用区内的其中一个。 **取值范围：** 不涉及。 **默认取值：** 若不传此参数，新增的只读节点将相对均匀分布在主备节点所在可用区。
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
    * @param string|null $availabilityZone **参数解释：** 新增只读节点的可用区ID。可根据“查询实例列表和详情”接口响应参数获取。 **约束限制：** 该参数仅对多可用区部署的实例生效。仅支持传入一个可用区且必须属于当前实例的多个可用区内的其中一个。 **取值范围：** 不涉及。 **默认取值：** 若不传此参数，新增的只读节点将相对均匀分布在主备节点所在可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

