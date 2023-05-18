<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PartAttendee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PartAttendee';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  与会者名称。
    * phone  号码。SIP号码或者手机号码。
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * role  用户入会时是否需要自动静音 。默认不静音。 * 0： 不需要静音 * 1： 需要静音
    * isMute  用户入会时是否需要自动静音。默认不静音。 * 0: 不需要静音。 * 1: 需要静音。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'phone' => 'string',
            'phone2' => 'string',
            'phone3' => 'string',
            'type' => 'string',
            'role' => 'int',
            'isMute' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  与会者名称。
    * phone  号码。SIP号码或者手机号码。
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * role  用户入会时是否需要自动静音 。默认不静音。 * 0： 不需要静音 * 1： 需要静音
    * isMute  用户入会时是否需要自动静音。默认不静音。 * 0: 不需要静音。 * 1: 需要静音。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'phone' => null,
        'phone2' => null,
        'phone3' => null,
        'type' => null,
        'role' => 'int32',
        'isMute' => 'int32'
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
    * name  与会者名称。
    * phone  号码。SIP号码或者手机号码。
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * role  用户入会时是否需要自动静音 。默认不静音。 * 0： 不需要静音 * 1： 需要静音
    * isMute  用户入会时是否需要自动静音。默认不静音。 * 0: 不需要静音。 * 1: 需要静音。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'phone' => 'phone',
            'phone2' => 'phone2',
            'phone3' => 'phone3',
            'type' => 'type',
            'role' => 'role',
            'isMute' => 'isMute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  与会者名称。
    * phone  号码。SIP号码或者手机号码。
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * role  用户入会时是否需要自动静音 。默认不静音。 * 0： 不需要静音 * 1： 需要静音
    * isMute  用户入会时是否需要自动静音。默认不静音。 * 0: 不需要静音。 * 1: 需要静音。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'phone' => 'setPhone',
            'phone2' => 'setPhone2',
            'phone3' => 'setPhone3',
            'type' => 'setType',
            'role' => 'setRole',
            'isMute' => 'setIsMute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  与会者名称。
    * phone  号码。SIP号码或者手机号码。
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * role  用户入会时是否需要自动静音 。默认不静音。 * 0： 不需要静音 * 1： 需要静音
    * isMute  用户入会时是否需要自动静音。默认不静音。 * 0: 不需要静音。 * 1: 需要静音。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'phone' => 'getPhone',
            'phone2' => 'getPhone2',
            'phone3' => 'getPhone3',
            'type' => 'getType',
            'role' => 'getRole',
            'isMute' => 'getIsMute'
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
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['phone3'] = isset($data['phone3']) ? $data['phone3'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['isMute'] = isset($data['isMute']) ? $data['isMute'] : null;
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
    * Gets name
    *  与会者名称。
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
    * @param string|null $name 与会者名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets phone
    *  号码。SIP号码或者手机号码。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 号码。SIP号码或者手机号码。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets phone2
    *  预留字段，取值类型同参数“phone”。
    *
    * @return string|null
    */
    public function getPhone2()
    {
        return $this->container['phone2'];
    }

    /**
    * Sets phone2
    *
    * @param string|null $phone2 预留字段，取值类型同参数“phone”。
    *
    * @return $this
    */
    public function setPhone2($phone2)
    {
        $this->container['phone2'] = $phone2;
        return $this;
    }

    /**
    * Gets phone3
    *  预留字段，取值类型同参数“phone”。
    *
    * @return string|null
    */
    public function getPhone3()
    {
        return $this->container['phone3'];
    }

    /**
    * Sets phone3
    *
    * @param string|null $phone3 预留字段，取值类型同参数“phone”。
    *
    * @return $this
    */
    public function setPhone3($phone3)
    {
        $this->container['phone3'] = $phone3;
        return $this;
    }

    /**
    * Gets type
    *  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
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
    * @param string|null $type 终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets role
    *  用户入会时是否需要自动静音 。默认不静音。 * 0： 不需要静音 * 1： 需要静音
    *
    * @return int|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param int|null $role 用户入会时是否需要自动静音 。默认不静音。 * 0： 不需要静音 * 1： 需要静音
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets isMute
    *  用户入会时是否需要自动静音。默认不静音。 * 0: 不需要静音。 * 1: 需要静音。
    *
    * @return int|null
    */
    public function getIsMute()
    {
        return $this->container['isMute'];
    }

    /**
    * Sets isMute
    *
    * @param int|null $isMute 用户入会时是否需要自动静音。默认不静音。 * 0: 不需要静音。 * 1: 需要静音。
    *
    * @return $this
    */
    public function setIsMute($isMute)
    {
        $this->container['isMute'] = $isMute;
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

