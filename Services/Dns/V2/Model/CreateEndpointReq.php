<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEndpointReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEndpointReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  待终端节点名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * direction  终端节点方向。 取值： inbound，表示入站规则。 outbound，表示出站规则。
    * region  当前子网所在的region。
    * ipaddresses  终端节点的ip地址和子网信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'direction' => 'string',
            'region' => 'string',
            'ipaddresses' => '\HuaweiCloud\SDK\Dns\V2\Model\Ipaddresses[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  待终端节点名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * direction  终端节点方向。 取值： inbound，表示入站规则。 outbound，表示出站规则。
    * region  当前子网所在的region。
    * ipaddresses  终端节点的ip地址和子网信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'direction' => null,
        'region' => null,
        'ipaddresses' => null
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
    * name  待终端节点名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * direction  终端节点方向。 取值： inbound，表示入站规则。 outbound，表示出站规则。
    * region  当前子网所在的region。
    * ipaddresses  终端节点的ip地址和子网信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'direction' => 'direction',
            'region' => 'region',
            'ipaddresses' => 'ipaddresses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  待终端节点名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * direction  终端节点方向。 取值： inbound，表示入站规则。 outbound，表示出站规则。
    * region  当前子网所在的region。
    * ipaddresses  终端节点的ip地址和子网信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'direction' => 'setDirection',
            'region' => 'setRegion',
            'ipaddresses' => 'setIpaddresses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  待终端节点名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * direction  终端节点方向。 取值： inbound，表示入站规则。 outbound，表示出站规则。
    * region  当前子网所在的region。
    * ipaddresses  终端节点的ip地址和子网信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'direction' => 'getDirection',
            'region' => 'getRegion',
            'ipaddresses' => 'getIpaddresses'
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['ipaddresses'] = isset($data['ipaddresses']) ? $data['ipaddresses'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['ipaddresses'] === null) {
            $invalidProperties[] = "'ipaddresses' can't be null";
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
    *  待终端节点名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 待终端节点名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets direction
    *  终端节点方向。 取值： inbound，表示入站规则。 outbound，表示出站规则。
    *
    * @return string
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string $direction 终端节点方向。 取值： inbound，表示入站规则。 outbound，表示出站规则。
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets region
    *  当前子网所在的region。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 当前子网所在的region。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets ipaddresses
    *  终端节点的ip地址和子网信息。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Ipaddresses[]
    */
    public function getIpaddresses()
    {
        return $this->container['ipaddresses'];
    }

    /**
    * Sets ipaddresses
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Ipaddresses[] $ipaddresses 终端节点的ip地址和子网信息。
    *
    * @return $this
    */
    public function setIpaddresses($ipaddresses)
    {
        $this->container['ipaddresses'] = $ipaddresses;
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

