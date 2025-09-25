<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVaultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVaultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vault  vault
    * orders  包周期创建订单信息（仅包周期创建时显示）
    * retCode  包周期订购结果（仅包周期创建时显示）
    * errText  包周期创建错误信息（仅包周期创建时显示）
    * errorCode  包周期创建错误码（仅包周期创建时显示）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vault' => '\HuaweiCloud\SDK\Cbr\V1\Model\VaultCreateResource',
            'orders' => '\HuaweiCloud\SDK\Cbr\V1\Model\CbcOrderResult[]',
            'retCode' => 'int',
            'errText' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vault  vault
    * orders  包周期创建订单信息（仅包周期创建时显示）
    * retCode  包周期订购结果（仅包周期创建时显示）
    * errText  包周期创建错误信息（仅包周期创建时显示）
    * errorCode  包周期创建错误码（仅包周期创建时显示）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vault' => null,
        'orders' => null,
        'retCode' => 'int32',
        'errText' => null,
        'errorCode' => null
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
    * vault  vault
    * orders  包周期创建订单信息（仅包周期创建时显示）
    * retCode  包周期订购结果（仅包周期创建时显示）
    * errText  包周期创建错误信息（仅包周期创建时显示）
    * errorCode  包周期创建错误码（仅包周期创建时显示）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vault' => 'vault',
            'orders' => 'orders',
            'retCode' => 'retCode',
            'errText' => 'errText',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vault  vault
    * orders  包周期创建订单信息（仅包周期创建时显示）
    * retCode  包周期订购结果（仅包周期创建时显示）
    * errText  包周期创建错误信息（仅包周期创建时显示）
    * errorCode  包周期创建错误码（仅包周期创建时显示）
    *
    * @var string[]
    */
    protected static $setters = [
            'vault' => 'setVault',
            'orders' => 'setOrders',
            'retCode' => 'setRetCode',
            'errText' => 'setErrText',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vault  vault
    * orders  包周期创建订单信息（仅包周期创建时显示）
    * retCode  包周期订购结果（仅包周期创建时显示）
    * errText  包周期创建错误信息（仅包周期创建时显示）
    * errorCode  包周期创建错误码（仅包周期创建时显示）
    *
    * @var string[]
    */
    protected static $getters = [
            'vault' => 'getVault',
            'orders' => 'getOrders',
            'retCode' => 'getRetCode',
            'errText' => 'getErrText',
            'errorCode' => 'getErrorCode'
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
        $this->container['vault'] = isset($data['vault']) ? $data['vault'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
        $this->container['errText'] = isset($data['errText']) ? $data['errText'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets vault
    *  vault
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\VaultCreateResource|null
    */
    public function getVault()
    {
        return $this->container['vault'];
    }

    /**
    * Sets vault
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\VaultCreateResource|null $vault vault
    *
    * @return $this
    */
    public function setVault($vault)
    {
        $this->container['vault'] = $vault;
        return $this;
    }

    /**
    * Gets orders
    *  包周期创建订单信息（仅包周期创建时显示）
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\CbcOrderResult[]|null
    */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
    * Sets orders
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\CbcOrderResult[]|null $orders 包周期创建订单信息（仅包周期创建时显示）
    *
    * @return $this
    */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;
        return $this;
    }

    /**
    * Gets retCode
    *  包周期订购结果（仅包周期创建时显示）
    *
    * @return int|null
    */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
    * Sets retCode
    *
    * @param int|null $retCode 包周期订购结果（仅包周期创建时显示）
    *
    * @return $this
    */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;
        return $this;
    }

    /**
    * Gets errText
    *  包周期创建错误信息（仅包周期创建时显示）
    *
    * @return string|null
    */
    public function getErrText()
    {
        return $this->container['errText'];
    }

    /**
    * Sets errText
    *
    * @param string|null $errText 包周期创建错误信息（仅包周期创建时显示）
    *
    * @return $this
    */
    public function setErrText($errText)
    {
        $this->container['errText'] = $errText;
        return $this;
    }

    /**
    * Gets errorCode
    *  包周期创建错误码（仅包周期创建时显示）
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 包周期创建错误码（仅包周期创建时显示）
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

