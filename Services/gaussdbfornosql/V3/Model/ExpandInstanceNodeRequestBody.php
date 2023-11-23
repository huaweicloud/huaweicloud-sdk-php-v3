<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExpandInstanceNodeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExpandInstanceNodeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * num  新增加的节点数量。
    * subnetId  扩容的节点所使用的子网的ID。 - 该参数仅只支持GeminiDB Cassandra数据库实例扩容节点时传入。 - 所传入的子网ID必须属于实例当前所在的VPC。 - 不传该参数时，系统会在当前实例所使用的子网中为当前扩容的节点选择一个IP容量较为充足的子网。
    * isAutoPay  创建包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'num' => 'int',
            'subnetId' => 'string',
            'isAutoPay' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * num  新增加的节点数量。
    * subnetId  扩容的节点所使用的子网的ID。 - 该参数仅只支持GeminiDB Cassandra数据库实例扩容节点时传入。 - 所传入的子网ID必须属于实例当前所在的VPC。 - 不传该参数时，系统会在当前实例所使用的子网中为当前扩容的节点选择一个IP容量较为充足的子网。
    * isAutoPay  创建包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'num' => null,
        'subnetId' => null,
        'isAutoPay' => null
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
    * num  新增加的节点数量。
    * subnetId  扩容的节点所使用的子网的ID。 - 该参数仅只支持GeminiDB Cassandra数据库实例扩容节点时传入。 - 所传入的子网ID必须属于实例当前所在的VPC。 - 不传该参数时，系统会在当前实例所使用的子网中为当前扩容的节点选择一个IP容量较为充足的子网。
    * isAutoPay  创建包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'num' => 'num',
            'subnetId' => 'subnet_id',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * num  新增加的节点数量。
    * subnetId  扩容的节点所使用的子网的ID。 - 该参数仅只支持GeminiDB Cassandra数据库实例扩容节点时传入。 - 所传入的子网ID必须属于实例当前所在的VPC。 - 不传该参数时，系统会在当前实例所使用的子网中为当前扩容的节点选择一个IP容量较为充足的子网。
    * isAutoPay  创建包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $setters = [
            'num' => 'setNum',
            'subnetId' => 'setSubnetId',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * num  新增加的节点数量。
    * subnetId  扩容的节点所使用的子网的ID。 - 该参数仅只支持GeminiDB Cassandra数据库实例扩容节点时传入。 - 所传入的子网ID必须属于实例当前所在的VPC。 - 不传该参数时，系统会在当前实例所使用的子网中为当前扩容的节点选择一个IP容量较为充足的子网。
    * isAutoPay  创建包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $getters = [
            'num' => 'getNum',
            'subnetId' => 'getSubnetId',
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
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets num
    *  新增加的节点数量。
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
    * @param int $num 新增加的节点数量。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets subnetId
    *  扩容的节点所使用的子网的ID。 - 该参数仅只支持GeminiDB Cassandra数据库实例扩容节点时传入。 - 所传入的子网ID必须属于实例当前所在的VPC。 - 不传该参数时，系统会在当前实例所使用的子网中为当前扩容的节点选择一个IP容量较为充足的子网。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 扩容的节点所使用的子网的ID。 - 该参数仅只支持GeminiDB Cassandra数据库实例扩容节点时传入。 - 所传入的子网ID必须属于实例当前所在的VPC。 - 不传该参数时，系统会在当前实例所使用的子网中为当前扩容的节点选择一个IP容量较为充足的子网。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  创建包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。
    *
    * @return string|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param string|null $isAutoPay 创建包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。
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

