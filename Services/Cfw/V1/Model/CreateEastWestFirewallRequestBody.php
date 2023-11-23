<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEastWestFirewallRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEastWestFirewallRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * erId  出方向关联ER实例id
    * inspectionCidr  inspection cidr
    * mode  东西向防火墙模式，填写er
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'erId' => 'string',
            'inspectionCidr' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * erId  出方向关联ER实例id
    * inspectionCidr  inspection cidr
    * mode  东西向防火墙模式，填写er
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'erId' => null,
        'inspectionCidr' => null,
        'mode' => null
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
    * erId  出方向关联ER实例id
    * inspectionCidr  inspection cidr
    * mode  东西向防火墙模式，填写er
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'erId' => 'er_id',
            'inspectionCidr' => 'inspection_cidr',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * erId  出方向关联ER实例id
    * inspectionCidr  inspection cidr
    * mode  东西向防火墙模式，填写er
    *
    * @var string[]
    */
    protected static $setters = [
            'erId' => 'setErId',
            'inspectionCidr' => 'setInspectionCidr',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * erId  出方向关联ER实例id
    * inspectionCidr  inspection cidr
    * mode  东西向防火墙模式，填写er
    *
    * @var string[]
    */
    protected static $getters = [
            'erId' => 'getErId',
            'inspectionCidr' => 'getInspectionCidr',
            'mode' => 'getMode'
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
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['inspectionCidr'] = isset($data['inspectionCidr']) ? $data['inspectionCidr'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['erId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['erId'])) {
                $invalidProperties[] = "invalid value for 'erId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
        if ($this->container['inspectionCidr'] === null) {
            $invalidProperties[] = "'inspectionCidr' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
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
    * Gets erId
    *  出方向关联ER实例id
    *
    * @return string|null
    */
    public function getErId()
    {
        return $this->container['erId'];
    }

    /**
    * Sets erId
    *
    * @param string|null $erId 出方向关联ER实例id
    *
    * @return $this
    */
    public function setErId($erId)
    {
        $this->container['erId'] = $erId;
        return $this;
    }

    /**
    * Gets inspectionCidr
    *  inspection cidr
    *
    * @return string
    */
    public function getInspectionCidr()
    {
        return $this->container['inspectionCidr'];
    }

    /**
    * Sets inspectionCidr
    *
    * @param string $inspectionCidr inspection cidr
    *
    * @return $this
    */
    public function setInspectionCidr($inspectionCidr)
    {
        $this->container['inspectionCidr'] = $inspectionCidr;
        return $this;
    }

    /**
    * Gets mode
    *  东西向防火墙模式，填写er
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 东西向防火墙模式，填写er
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

