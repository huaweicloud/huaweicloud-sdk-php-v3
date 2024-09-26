<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnterpriseRouterSiteCode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnterpriseRouterSiteCode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseRouterSiteCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseRouterSiteCode' => null
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
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseRouterSiteCode' => 'enterprise_router_site_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseRouterSiteCode' => 'setEnterpriseRouterSiteCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseRouterSiteCode' => 'getEnterpriseRouterSiteCode'
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
        $this->container['enterpriseRouterSiteCode'] = isset($data['enterpriseRouterSiteCode']) ? $data['enterpriseRouterSiteCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enterpriseRouterSiteCode'] === null) {
            $invalidProperties[] = "'enterpriseRouterSiteCode' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterSiteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterSiteCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['enterpriseRouterSiteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterSiteCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/", $this->container['enterpriseRouterSiteCode'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterSiteCode', must be conform to the pattern /^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/.";
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
    * Gets enterpriseRouterSiteCode
    *  中心网络企业路由器的站点编码。
    *
    * @return string
    */
    public function getEnterpriseRouterSiteCode()
    {
        return $this->container['enterpriseRouterSiteCode'];
    }

    /**
    * Sets enterpriseRouterSiteCode
    *
    * @param string $enterpriseRouterSiteCode 中心网络企业路由器的站点编码。
    *
    * @return $this
    */
    public function setEnterpriseRouterSiteCode($enterpriseRouterSiteCode)
    {
        $this->container['enterpriseRouterSiteCode'] = $enterpriseRouterSiteCode;
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

