<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRealNameAuthQrCodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRealNameAuthQrCodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * qrCodeUrl  人脸实名认证二维码地址。该二维码仅限单次使用，扫描后将自动失效。若未在10分钟内完成扫描，系统将自动作废。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'qrCodeUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * qrCodeUrl  人脸实名认证二维码地址。该二维码仅限单次使用，扫描后将自动失效。若未在10分钟内完成扫描，系统将自动作废。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'qrCodeUrl' => null
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
    * qrCodeUrl  人脸实名认证二维码地址。该二维码仅限单次使用，扫描后将自动失效。若未在10分钟内完成扫描，系统将自动作废。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'qrCodeUrl' => 'qr_code_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * qrCodeUrl  人脸实名认证二维码地址。该二维码仅限单次使用，扫描后将自动失效。若未在10分钟内完成扫描，系统将自动作废。
    *
    * @var string[]
    */
    protected static $setters = [
            'qrCodeUrl' => 'setQrCodeUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * qrCodeUrl  人脸实名认证二维码地址。该二维码仅限单次使用，扫描后将自动失效。若未在10分钟内完成扫描，系统将自动作废。
    *
    * @var string[]
    */
    protected static $getters = [
            'qrCodeUrl' => 'getQrCodeUrl'
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
        $this->container['qrCodeUrl'] = isset($data['qrCodeUrl']) ? $data['qrCodeUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['qrCodeUrl']) && (mb_strlen($this->container['qrCodeUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'qrCodeUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['qrCodeUrl']) && (mb_strlen($this->container['qrCodeUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'qrCodeUrl', the character length must be bigger than or equal to 0.";
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
    * Gets qrCodeUrl
    *  人脸实名认证二维码地址。该二维码仅限单次使用，扫描后将自动失效。若未在10分钟内完成扫描，系统将自动作废。
    *
    * @return string|null
    */
    public function getQrCodeUrl()
    {
        return $this->container['qrCodeUrl'];
    }

    /**
    * Sets qrCodeUrl
    *
    * @param string|null $qrCodeUrl 人脸实名认证二维码地址。该二维码仅限单次使用，扫描后将自动失效。若未在10分钟内完成扫描，系统将自动作废。
    *
    * @return $this
    */
    public function setQrCodeUrl($qrCodeUrl)
    {
        $this->container['qrCodeUrl'] = $qrCodeUrl;
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

