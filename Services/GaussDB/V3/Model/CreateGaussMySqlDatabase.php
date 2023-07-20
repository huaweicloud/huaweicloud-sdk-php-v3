<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGaussMySqlDatabase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGaussMySqlDatabase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库名称,数据库名称长度可在1～64个字符之间，由字母、数字、下划线、中划线组成，中划线的累计总长度小于等于10个字符，且不能包含其他特殊字符。
    * comment  数据库备注,长度不能超过512个字符，不能包含回车和特殊字符!<\"='>&。
    * characterSet  数据库使用的字符集名称，如utf8mb4、gbk。
    * users  数据库用户列表，即创建数据库时同步授权给列表中的用户，列表最大长度为50。列表可以为空，即创建数据库时不授予其权限到数据库用户，在需要给该数据库授权某数据库用户时，调用数据库用户授权接口即可。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'comment' => 'string',
            'characterSet' => 'string',
            'users' => '\HuaweiCloud\SDK\GaussDB\V3\Model\GaussMySqlDatabaseUser[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库名称,数据库名称长度可在1～64个字符之间，由字母、数字、下划线、中划线组成，中划线的累计总长度小于等于10个字符，且不能包含其他特殊字符。
    * comment  数据库备注,长度不能超过512个字符，不能包含回车和特殊字符!<\"='>&。
    * characterSet  数据库使用的字符集名称，如utf8mb4、gbk。
    * users  数据库用户列表，即创建数据库时同步授权给列表中的用户，列表最大长度为50。列表可以为空，即创建数据库时不授予其权限到数据库用户，在需要给该数据库授权某数据库用户时，调用数据库用户授权接口即可。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'comment' => null,
        'characterSet' => null,
        'users' => null
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
    * name  数据库名称,数据库名称长度可在1～64个字符之间，由字母、数字、下划线、中划线组成，中划线的累计总长度小于等于10个字符，且不能包含其他特殊字符。
    * comment  数据库备注,长度不能超过512个字符，不能包含回车和特殊字符!<\"='>&。
    * characterSet  数据库使用的字符集名称，如utf8mb4、gbk。
    * users  数据库用户列表，即创建数据库时同步授权给列表中的用户，列表最大长度为50。列表可以为空，即创建数据库时不授予其权限到数据库用户，在需要给该数据库授权某数据库用户时，调用数据库用户授权接口即可。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'comment' => 'comment',
            'characterSet' => 'character_set',
            'users' => 'users'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库名称,数据库名称长度可在1～64个字符之间，由字母、数字、下划线、中划线组成，中划线的累计总长度小于等于10个字符，且不能包含其他特殊字符。
    * comment  数据库备注,长度不能超过512个字符，不能包含回车和特殊字符!<\"='>&。
    * characterSet  数据库使用的字符集名称，如utf8mb4、gbk。
    * users  数据库用户列表，即创建数据库时同步授权给列表中的用户，列表最大长度为50。列表可以为空，即创建数据库时不授予其权限到数据库用户，在需要给该数据库授权某数据库用户时，调用数据库用户授权接口即可。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'comment' => 'setComment',
            'characterSet' => 'setCharacterSet',
            'users' => 'setUsers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库名称,数据库名称长度可在1～64个字符之间，由字母、数字、下划线、中划线组成，中划线的累计总长度小于等于10个字符，且不能包含其他特殊字符。
    * comment  数据库备注,长度不能超过512个字符，不能包含回车和特殊字符!<\"='>&。
    * characterSet  数据库使用的字符集名称，如utf8mb4、gbk。
    * users  数据库用户列表，即创建数据库时同步授权给列表中的用户，列表最大长度为50。列表可以为空，即创建数据库时不授予其权限到数据库用户，在需要给该数据库授权某数据库用户时，调用数据库用户授权接口即可。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'comment' => 'getComment',
            'characterSet' => 'getCharacterSet',
            'users' => 'getUsers'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['characterSet'] = isset($data['characterSet']) ? $data['characterSet'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
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
        if ($this->container['characterSet'] === null) {
            $invalidProperties[] = "'characterSet' can't be null";
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
    *  数据库名称,数据库名称长度可在1～64个字符之间，由字母、数字、下划线、中划线组成，中划线的累计总长度小于等于10个字符，且不能包含其他特殊字符。
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
    * @param string $name 数据库名称,数据库名称长度可在1～64个字符之间，由字母、数字、下划线、中划线组成，中划线的累计总长度小于等于10个字符，且不能包含其他特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets comment
    *  数据库备注,长度不能超过512个字符，不能包含回车和特殊字符!<\"='>&。
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 数据库备注,长度不能超过512个字符，不能包含回车和特殊字符!<\"='>&。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets characterSet
    *  数据库使用的字符集名称，如utf8mb4、gbk。
    *
    * @return string
    */
    public function getCharacterSet()
    {
        return $this->container['characterSet'];
    }

    /**
    * Sets characterSet
    *
    * @param string $characterSet 数据库使用的字符集名称，如utf8mb4、gbk。
    *
    * @return $this
    */
    public function setCharacterSet($characterSet)
    {
        $this->container['characterSet'] = $characterSet;
        return $this;
    }

    /**
    * Gets users
    *  数据库用户列表，即创建数据库时同步授权给列表中的用户，列表最大长度为50。列表可以为空，即创建数据库时不授予其权限到数据库用户，在需要给该数据库授权某数据库用户时，调用数据库用户授权接口即可。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\GaussMySqlDatabaseUser[]|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\GaussMySqlDatabaseUser[]|null $users 数据库用户列表，即创建数据库时同步授权给列表中的用户，列表最大长度为50。列表可以为空，即创建数据库时不授予其权限到数据库用户，在需要给该数据库授权某数据库用户时，调用数据库用户授权接口即可。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
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

