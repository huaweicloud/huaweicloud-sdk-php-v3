<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicIpInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicIpInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性公网IP唯一标识。
    * type  弹性公网IP的类型。
    * publicIp  弹性公网IP的地址。
    * privateIp  绑定弹性公网IP的私有IP地址。
    * bindingEntityId  绑定弹性公网IP的实体ID。
    * bindingEntityName  绑定弹性公网IP的实体名称。
    * bindingEntityType  绑定弹性公网IP的实体类型（目前只支持绑定node）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'bindingEntityId' => 'string',
            'bindingEntityName' => 'string',
            'bindingEntityType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性公网IP唯一标识。
    * type  弹性公网IP的类型。
    * publicIp  弹性公网IP的地址。
    * privateIp  绑定弹性公网IP的私有IP地址。
    * bindingEntityId  绑定弹性公网IP的实体ID。
    * bindingEntityName  绑定弹性公网IP的实体名称。
    * bindingEntityType  绑定弹性公网IP的实体类型（目前只支持绑定node）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'publicIp' => null,
        'privateIp' => null,
        'bindingEntityId' => null,
        'bindingEntityName' => null,
        'bindingEntityType' => null
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
    * id  弹性公网IP唯一标识。
    * type  弹性公网IP的类型。
    * publicIp  弹性公网IP的地址。
    * privateIp  绑定弹性公网IP的私有IP地址。
    * bindingEntityId  绑定弹性公网IP的实体ID。
    * bindingEntityName  绑定弹性公网IP的实体名称。
    * bindingEntityType  绑定弹性公网IP的实体类型（目前只支持绑定node）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'bindingEntityId' => 'binding_entity_id',
            'bindingEntityName' => 'binding_entity_name',
            'bindingEntityType' => 'binding_entity_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性公网IP唯一标识。
    * type  弹性公网IP的类型。
    * publicIp  弹性公网IP的地址。
    * privateIp  绑定弹性公网IP的私有IP地址。
    * bindingEntityId  绑定弹性公网IP的实体ID。
    * bindingEntityName  绑定弹性公网IP的实体名称。
    * bindingEntityType  绑定弹性公网IP的实体类型（目前只支持绑定node）。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'bindingEntityId' => 'setBindingEntityId',
            'bindingEntityName' => 'setBindingEntityName',
            'bindingEntityType' => 'setBindingEntityType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性公网IP唯一标识。
    * type  弹性公网IP的类型。
    * publicIp  弹性公网IP的地址。
    * privateIp  绑定弹性公网IP的私有IP地址。
    * bindingEntityId  绑定弹性公网IP的实体ID。
    * bindingEntityName  绑定弹性公网IP的实体名称。
    * bindingEntityType  绑定弹性公网IP的实体类型（目前只支持绑定node）。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'bindingEntityId' => 'getBindingEntityId',
            'bindingEntityName' => 'getBindingEntityName',
            'bindingEntityType' => 'getBindingEntityType'
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
    const TYPE__5_BGPBGP = '5_bgp（全动态BGP）';
    const TYPE__5_SBGPBGP = '5_sbgp（静态BGP）';
    const BINDING_ENTITY_TYPE_NODE = 'node（节点）';
    const BINDING_ENTITY_TYPE_NODE_GROUP = 'node_group（节点组）';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__5_BGPBGP,
            self::TYPE__5_SBGPBGP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBindingEntityTypeAllowableValues()
    {
        return [
            self::BINDING_ENTITY_TYPE_NODE,
            self::BINDING_ENTITY_TYPE_NODE_GROUP,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['bindingEntityId'] = isset($data['bindingEntityId']) ? $data['bindingEntityId'] : null;
        $this->container['bindingEntityName'] = isset($data['bindingEntityName']) ? $data['bindingEntityName'] : null;
        $this->container['bindingEntityType'] = isset($data['bindingEntityType']) ? $data['bindingEntityType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getBindingEntityTypeAllowableValues();
                if (!is_null($this->container['bindingEntityType']) && !in_array($this->container['bindingEntityType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bindingEntityType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  弹性公网IP唯一标识。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 弹性公网IP唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  弹性公网IP的类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 弹性公网IP的类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets publicIp
    *  弹性公网IP的地址。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 弹性公网IP的地址。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  绑定弹性公网IP的私有IP地址。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 绑定弹性公网IP的私有IP地址。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets bindingEntityId
    *  绑定弹性公网IP的实体ID。
    *
    * @return string|null
    */
    public function getBindingEntityId()
    {
        return $this->container['bindingEntityId'];
    }

    /**
    * Sets bindingEntityId
    *
    * @param string|null $bindingEntityId 绑定弹性公网IP的实体ID。
    *
    * @return $this
    */
    public function setBindingEntityId($bindingEntityId)
    {
        $this->container['bindingEntityId'] = $bindingEntityId;
        return $this;
    }

    /**
    * Gets bindingEntityName
    *  绑定弹性公网IP的实体名称。
    *
    * @return string|null
    */
    public function getBindingEntityName()
    {
        return $this->container['bindingEntityName'];
    }

    /**
    * Sets bindingEntityName
    *
    * @param string|null $bindingEntityName 绑定弹性公网IP的实体名称。
    *
    * @return $this
    */
    public function setBindingEntityName($bindingEntityName)
    {
        $this->container['bindingEntityName'] = $bindingEntityName;
        return $this;
    }

    /**
    * Gets bindingEntityType
    *  绑定弹性公网IP的实体类型（目前只支持绑定node）。
    *
    * @return string|null
    */
    public function getBindingEntityType()
    {
        return $this->container['bindingEntityType'];
    }

    /**
    * Sets bindingEntityType
    *
    * @param string|null $bindingEntityType 绑定弹性公网IP的实体类型（目前只支持绑定node）。
    *
    * @return $this
    */
    public function setBindingEntityType($bindingEntityType)
    {
        $this->container['bindingEntityType'] = $bindingEntityType;
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

