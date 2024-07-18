<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateP2cVgwRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateP2cVgwRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * eipId  eip的ID。用于给P2C VPN网关绑定新的EIP，需要先解绑当前的EIP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'eipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * eipId  eip的ID。用于给P2C VPN网关绑定新的EIP，需要先解绑当前的EIP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'eipId' => null
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
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * eipId  eip的ID。用于给P2C VPN网关绑定新的EIP，需要先解绑当前的EIP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'eipId' => 'eip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * eipId  eip的ID。用于给P2C VPN网关绑定新的EIP，需要先解绑当前的EIP
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'eipId' => 'setEipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * eipId  eip的ID。用于给P2C VPN网关绑定新的EIP，需要先解绑当前的EIP
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'eipId' => 'getEipId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[一-龥A-Za-z0-9_-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥A-Za-z0-9_-]+/.";
            }
            if (!is_null($this->container['eipId']) && (mb_strlen($this->container['eipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'eipId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['eipId']) && (mb_strlen($this->container['eipId']) < 36)) {
                $invalidProperties[] = "invalid value for 'eipId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['eipId']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['eipId'])) {
                $invalidProperties[] = "invalid value for 'eipId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
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
    * Gets name
    *  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
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
    * @param string|null $name P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets eipId
    *  eip的ID。用于给P2C VPN网关绑定新的EIP，需要先解绑当前的EIP
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId eip的ID。用于给P2C VPN网关绑定新的EIP，需要先解绑当前的EIP
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
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

