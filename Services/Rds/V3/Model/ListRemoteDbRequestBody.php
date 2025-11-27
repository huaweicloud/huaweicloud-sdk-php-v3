<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRemoteDbRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRemoteDbRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverIp  服务器ip。
    * serverPort  端口号。
    * loginUserName  登录名。
    * loginUserPassword  登录密码。要求密码长度在5~64位之间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverIp' => 'string',
            'serverPort' => 'string',
            'loginUserName' => 'string',
            'loginUserPassword' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverIp  服务器ip。
    * serverPort  端口号。
    * loginUserName  登录名。
    * loginUserPassword  登录密码。要求密码长度在5~64位之间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverIp' => null,
        'serverPort' => null,
        'loginUserName' => null,
        'loginUserPassword' => null,
        'offset' => null,
        'limit' => null
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
    * serverIp  服务器ip。
    * serverPort  端口号。
    * loginUserName  登录名。
    * loginUserPassword  登录密码。要求密码长度在5~64位之间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverIp' => 'server_ip',
            'serverPort' => 'server_port',
            'loginUserName' => 'login_user_name',
            'loginUserPassword' => 'login_user_password',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverIp  服务器ip。
    * serverPort  端口号。
    * loginUserName  登录名。
    * loginUserPassword  登录密码。要求密码长度在5~64位之间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverIp' => 'setServerIp',
            'serverPort' => 'setServerPort',
            'loginUserName' => 'setLoginUserName',
            'loginUserPassword' => 'setLoginUserPassword',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverIp  服务器ip。
    * serverPort  端口号。
    * loginUserName  登录名。
    * loginUserPassword  登录密码。要求密码长度在5~64位之间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverIp' => 'getServerIp',
            'serverPort' => 'getServerPort',
            'loginUserName' => 'getLoginUserName',
            'loginUserPassword' => 'getLoginUserPassword',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['serverPort'] = isset($data['serverPort']) ? $data['serverPort'] : null;
        $this->container['loginUserName'] = isset($data['loginUserName']) ? $data['loginUserName'] : null;
        $this->container['loginUserPassword'] = isset($data['loginUserPassword']) ? $data['loginUserPassword'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverIp'] === null) {
            $invalidProperties[] = "'serverIp' can't be null";
        }
        if ($this->container['serverPort'] === null) {
            $invalidProperties[] = "'serverPort' can't be null";
        }
        if ($this->container['loginUserName'] === null) {
            $invalidProperties[] = "'loginUserName' can't be null";
        }
        if ($this->container['loginUserPassword'] === null) {
            $invalidProperties[] = "'loginUserPassword' can't be null";
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
    * Gets serverIp
    *  服务器ip。
    *
    * @return string
    */
    public function getServerIp()
    {
        return $this->container['serverIp'];
    }

    /**
    * Sets serverIp
    *
    * @param string $serverIp 服务器ip。
    *
    * @return $this
    */
    public function setServerIp($serverIp)
    {
        $this->container['serverIp'] = $serverIp;
        return $this;
    }

    /**
    * Gets serverPort
    *  端口号。
    *
    * @return string
    */
    public function getServerPort()
    {
        return $this->container['serverPort'];
    }

    /**
    * Sets serverPort
    *
    * @param string $serverPort 端口号。
    *
    * @return $this
    */
    public function setServerPort($serverPort)
    {
        $this->container['serverPort'] = $serverPort;
        return $this;
    }

    /**
    * Gets loginUserName
    *  登录名。
    *
    * @return string
    */
    public function getLoginUserName()
    {
        return $this->container['loginUserName'];
    }

    /**
    * Sets loginUserName
    *
    * @param string $loginUserName 登录名。
    *
    * @return $this
    */
    public function setLoginUserName($loginUserName)
    {
        $this->container['loginUserName'] = $loginUserName;
        return $this;
    }

    /**
    * Gets loginUserPassword
    *  登录密码。要求密码长度在5~64位之间。
    *
    * @return string
    */
    public function getLoginUserPassword()
    {
        return $this->container['loginUserPassword'];
    }

    /**
    * Sets loginUserPassword
    *
    * @param string $loginUserPassword 登录密码。要求密码长度在5~64位之间。
    *
    * @return $this
    */
    public function setLoginUserPassword($loginUserPassword)
    {
        $this->container['loginUserPassword'] = $loginUserPassword;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

