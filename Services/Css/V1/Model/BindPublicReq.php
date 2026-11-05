<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindPublicReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindPublicReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eip  eip
    * whiteList  公网访问控制白名单。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eip' => '\HuaweiCloud\SDK\Css\V1\Model\BindPublicReqEip',
            'whiteList' => 'string',
            'isAutoPay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eip  eip
    * whiteList  公网访问控制白名单。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eip' => null,
        'whiteList' => null,
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
    * eip  eip
    * whiteList  公网访问控制白名单。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eip' => 'eip',
            'whiteList' => 'white_list',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eip  eip
    * whiteList  公网访问控制白名单。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $setters = [
            'eip' => 'setEip',
            'whiteList' => 'setWhiteList',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eip  eip
    * whiteList  公网访问控制白名单。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $getters = [
            'eip' => 'getEip',
            'whiteList' => 'getWhiteList',
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
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['whiteList'] = isset($data['whiteList']) ? $data['whiteList'] : null;
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
        if ($this->container['eip'] === null) {
            $invalidProperties[] = "'eip' can't be null";
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
    * Gets eip
    *  eip
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\BindPublicReqEip
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\BindPublicReqEip $eip eip
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets whiteList
    *  公网访问控制白名单。
    *
    * @return string|null
    */
    public function getWhiteList()
    {
        return $this->container['whiteList'];
    }

    /**
    * Sets whiteList
    *
    * @param string|null $whiteList 公网访问控制白名单。
    *
    * @return $this
    */
    public function setWhiteList($whiteList)
    {
        $this->container['whiteList'] = $whiteList;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  isAutoPay
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
    * @param int|null $isAutoPay isAutoPay
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

