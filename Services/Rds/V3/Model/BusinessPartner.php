<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessPartner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessPartner';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bpDomainId  服务商ID。
    * bpName  服务商名称。
    * order  优先级，整数取值范围1-100，数值越小优先级越高。
    * international  是否是国际站服务商。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bpDomainId' => 'string',
            'bpName' => 'string',
            'order' => 'int',
            'international' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bpDomainId  服务商ID。
    * bpName  服务商名称。
    * order  优先级，整数取值范围1-100，数值越小优先级越高。
    * international  是否是国际站服务商。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bpDomainId' => null,
        'bpName' => null,
        'order' => null,
        'international' => null
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
    * bpDomainId  服务商ID。
    * bpName  服务商名称。
    * order  优先级，整数取值范围1-100，数值越小优先级越高。
    * international  是否是国际站服务商。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bpDomainId' => 'bp_domain_id',
            'bpName' => 'bp_name',
            'order' => 'order',
            'international' => 'international'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bpDomainId  服务商ID。
    * bpName  服务商名称。
    * order  优先级，整数取值范围1-100，数值越小优先级越高。
    * international  是否是国际站服务商。
    *
    * @var string[]
    */
    protected static $setters = [
            'bpDomainId' => 'setBpDomainId',
            'bpName' => 'setBpName',
            'order' => 'setOrder',
            'international' => 'setInternational'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bpDomainId  服务商ID。
    * bpName  服务商名称。
    * order  优先级，整数取值范围1-100，数值越小优先级越高。
    * international  是否是国际站服务商。
    *
    * @var string[]
    */
    protected static $getters = [
            'bpDomainId' => 'getBpDomainId',
            'bpName' => 'getBpName',
            'order' => 'getOrder',
            'international' => 'getInternational'
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
        $this->container['bpDomainId'] = isset($data['bpDomainId']) ? $data['bpDomainId'] : null;
        $this->container['bpName'] = isset($data['bpName']) ? $data['bpName'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['international'] = isset($data['international']) ? $data['international'] : null;
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
    * Gets bpDomainId
    *  服务商ID。
    *
    * @return string|null
    */
    public function getBpDomainId()
    {
        return $this->container['bpDomainId'];
    }

    /**
    * Sets bpDomainId
    *
    * @param string|null $bpDomainId 服务商ID。
    *
    * @return $this
    */
    public function setBpDomainId($bpDomainId)
    {
        $this->container['bpDomainId'] = $bpDomainId;
        return $this;
    }

    /**
    * Gets bpName
    *  服务商名称。
    *
    * @return string|null
    */
    public function getBpName()
    {
        return $this->container['bpName'];
    }

    /**
    * Sets bpName
    *
    * @param string|null $bpName 服务商名称。
    *
    * @return $this
    */
    public function setBpName($bpName)
    {
        $this->container['bpName'] = $bpName;
        return $this;
    }

    /**
    * Gets order
    *  优先级，整数取值范围1-100，数值越小优先级越高。
    *
    * @return int|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param int|null $order 优先级，整数取值范围1-100，数值越小优先级越高。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets international
    *  是否是国际站服务商。
    *
    * @return bool|null
    */
    public function getInternational()
    {
        return $this->container['international'];
    }

    /**
    * Sets international
    *
    * @param bool|null $international 是否是国际站服务商。
    *
    * @return $this
    */
    public function setInternational($international)
    {
        $this->container['international'] = $international;
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

