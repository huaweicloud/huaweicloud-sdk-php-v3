<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteMembersOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteMembersOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  需要删除的后端服务器ID。  使用说明： - 若传入id则不能传其他参数，否则报错。  >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * address  后端服务器IP地址。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段
    * protocolPort  后端服务器端口。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段 - 可以传0，用于删除端口透传pool下的member
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'address' => 'string',
            'protocolPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  需要删除的后端服务器ID。  使用说明： - 若传入id则不能传其他参数，否则报错。  >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * address  后端服务器IP地址。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段
    * protocolPort  后端服务器端口。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段 - 可以传0，用于删除端口透传pool下的member
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'address' => null,
        'protocolPort' => 'int32'
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
    * id  需要删除的后端服务器ID。  使用说明： - 若传入id则不能传其他参数，否则报错。  >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * address  后端服务器IP地址。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段
    * protocolPort  后端服务器端口。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段 - 可以传0，用于删除端口透传pool下的member
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'address' => 'address',
            'protocolPort' => 'protocol_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  需要删除的后端服务器ID。  使用说明： - 若传入id则不能传其他参数，否则报错。  >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * address  后端服务器IP地址。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段
    * protocolPort  后端服务器端口。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段 - 可以传0，用于删除端口透传pool下的member
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'address' => 'setAddress',
            'protocolPort' => 'setProtocolPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  需要删除的后端服务器ID。  使用说明： - 若传入id则不能传其他参数，否则报错。  >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    * address  后端服务器IP地址。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段
    * protocolPort  后端服务器端口。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段 - 可以传0，用于删除端口透传pool下的member
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'address' => 'getAddress',
            'protocolPort' => 'getProtocolPort'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
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
    * Gets id
    *  需要删除的后端服务器ID。  使用说明： - 若传入id则不能传其他参数，否则报错。  >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
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
    * @param string|null $id 需要删除的后端服务器ID。  使用说明： - 若传入id则不能传其他参数，否则报错。  >说明： 此处并非ECS服务器的ID，而是ELB为绑定的后端服务器自动生成的member ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets address
    *  后端服务器IP地址。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 后端服务器IP地址。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端服务器端口。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段 - 可以传0，用于删除端口透传pool下的member
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort 后端服务器端口。  使用说明： - address和protocol_port必须同时传入。 - 不能同时传入ID字段 - 可以传0，用于删除端口透传pool下的member
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
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

