<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  serverId
    * newResourceSpecCode  待变更云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  可参考接口\"查询云堡垒机规格信息\"获取
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小不能超过300TB。
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'object',
            'newResourceSpecCode' => 'string',
            'attachDiskSize' => 'int',
            'isAutoPay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  serverId
    * newResourceSpecCode  待变更云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  可参考接口\"查询云堡垒机规格信息\"获取
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小不能超过300TB。
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'newResourceSpecCode' => null,
        'attachDiskSize' => null,
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
    * serverId  serverId
    * newResourceSpecCode  待变更云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  可参考接口\"查询云堡垒机规格信息\"获取
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小不能超过300TB。
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'newResourceSpecCode' => 'new_resource_spec_code',
            'attachDiskSize' => 'attach_disk_size',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  serverId
    * newResourceSpecCode  待变更云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  可参考接口\"查询云堡垒机规格信息\"获取
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小不能超过300TB。
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'newResourceSpecCode' => 'setNewResourceSpecCode',
            'attachDiskSize' => 'setAttachDiskSize',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  serverId
    * newResourceSpecCode  待变更云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  可参考接口\"查询云堡垒机规格信息\"获取
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小不能超过300TB。
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'newResourceSpecCode' => 'getNewResourceSpecCode',
            'attachDiskSize' => 'getAttachDiskSize',
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['newResourceSpecCode'] = isset($data['newResourceSpecCode']) ? $data['newResourceSpecCode'] : null;
        $this->container['attachDiskSize'] = isset($data['attachDiskSize']) ? $data['attachDiskSize'] : null;
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
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
            if (!is_null($this->container['newResourceSpecCode']) && (mb_strlen($this->container['newResourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'newResourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['newResourceSpecCode']) && (mb_strlen($this->container['newResourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'newResourceSpecCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attachDiskSize']) && ($this->container['attachDiskSize'] > 300)) {
                $invalidProperties[] = "invalid value for 'attachDiskSize', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['attachDiskSize']) && ($this->container['attachDiskSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'attachDiskSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] > 2)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be smaller than or equal to 2.";
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
    * Gets serverId
    *  serverId
    *
    * @return object
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param object $serverId serverId
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets newResourceSpecCode
    *  待变更云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  可参考接口\"查询云堡垒机规格信息\"获取
    *
    * @return string|null
    */
    public function getNewResourceSpecCode()
    {
        return $this->container['newResourceSpecCode'];
    }

    /**
    * Sets newResourceSpecCode
    *
    * @param string|null $newResourceSpecCode 待变更云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  可参考接口\"查询云堡垒机规格信息\"获取
    *
    * @return $this
    */
    public function setNewResourceSpecCode($newResourceSpecCode)
    {
        $this->container['newResourceSpecCode'] = $newResourceSpecCode;
        return $this;
    }

    /**
    * Gets attachDiskSize
    *  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小不能超过300TB。
    *
    * @return int|null
    */
    public function getAttachDiskSize()
    {
        return $this->container['attachDiskSize'];
    }

    /**
    * Sets attachDiskSize
    *
    * @param int|null $attachDiskSize 附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小不能超过300TB。
    *
    * @return $this
    */
    public function setAttachDiskSize($attachDiskSize)
    {
        $this->container['attachDiskSize'] = $attachDiskSize;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
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
    * @param int|null $isAutoPay 是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
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

