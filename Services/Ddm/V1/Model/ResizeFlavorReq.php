<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeFlavorReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeFlavorReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specCode  变更至新规格的资源规格编码。
    * groupId  实例默认一个组，此时不需要传入该参数。当使用组功能创建多个组时, 需要传入需要规格变更的对应组的group_id。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specCode' => 'string',
            'groupId' => 'string',
            'isAutoPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specCode  变更至新规格的资源规格编码。
    * groupId  实例默认一个组，此时不需要传入该参数。当使用组功能创建多个组时, 需要传入需要规格变更的对应组的group_id。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specCode' => null,
        'groupId' => null,
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
    * specCode  变更至新规格的资源规格编码。
    * groupId  实例默认一个组，此时不需要传入该参数。当使用组功能创建多个组时, 需要传入需要规格变更的对应组的group_id。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specCode' => 'spec_code',
            'groupId' => 'group_id',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specCode  变更至新规格的资源规格编码。
    * groupId  实例默认一个组，此时不需要传入该参数。当使用组功能创建多个组时, 需要传入需要规格变更的对应组的group_id。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $setters = [
            'specCode' => 'setSpecCode',
            'groupId' => 'setGroupId',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specCode  变更至新规格的资源规格编码。
    * groupId  实例默认一个组，此时不需要传入该参数。当使用组功能创建多个组时, 需要传入需要规格变更的对应组的group_id。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @var string[]
    */
    protected static $getters = [
            'specCode' => 'getSpecCode',
            'groupId' => 'getGroupId',
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
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
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
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
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
    *  变更至新规格的资源规格编码。
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
    * @param string $specCode 变更至新规格的资源规格编码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets groupId
    *  实例默认一个组，此时不需要传入该参数。当使用组功能创建多个组时, 需要传入需要规格变更的对应组的group_id。
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
    * @param string|null $groupId 实例默认一个组，此时不需要传入该参数。当使用组功能创建多个组时, 需要传入需要规格变更的对应组的group_id。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
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
    * @param bool|null $isAutoPay 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
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

