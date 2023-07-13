<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtDataSourceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtDataSourceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataSourceId  数据源id
    * type  类型
    * dataSourceName  数据源名称
    * userName  用户名
    * userPwd  密码
    * description  描述
    * reboot  重启
    * connectInfo  数据库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataSourceId' => 'string',
            'type' => 'string',
            'dataSourceName' => 'string',
            'userName' => 'string',
            'userPwd' => 'string',
            'description' => 'string',
            'reboot' => 'bool',
            'connectInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataSourceId  数据源id
    * type  类型
    * dataSourceName  数据源名称
    * userName  用户名
    * userPwd  密码
    * description  描述
    * reboot  重启
    * connectInfo  数据库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataSourceId' => null,
        'type' => null,
        'dataSourceName' => null,
        'userName' => null,
        'userPwd' => null,
        'description' => null,
        'reboot' => null,
        'connectInfo' => null
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
    * dataSourceId  数据源id
    * type  类型
    * dataSourceName  数据源名称
    * userName  用户名
    * userPwd  密码
    * description  描述
    * reboot  重启
    * connectInfo  数据库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataSourceId' => 'data_source_id',
            'type' => 'type',
            'dataSourceName' => 'data_source_name',
            'userName' => 'user_name',
            'userPwd' => 'user_pwd',
            'description' => 'description',
            'reboot' => 'reboot',
            'connectInfo' => 'connect_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataSourceId  数据源id
    * type  类型
    * dataSourceName  数据源名称
    * userName  用户名
    * userPwd  密码
    * description  描述
    * reboot  重启
    * connectInfo  数据库
    *
    * @var string[]
    */
    protected static $setters = [
            'dataSourceId' => 'setDataSourceId',
            'type' => 'setType',
            'dataSourceName' => 'setDataSourceName',
            'userName' => 'setUserName',
            'userPwd' => 'setUserPwd',
            'description' => 'setDescription',
            'reboot' => 'setReboot',
            'connectInfo' => 'setConnectInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataSourceId  数据源id
    * type  类型
    * dataSourceName  数据源名称
    * userName  用户名
    * userPwd  密码
    * description  描述
    * reboot  重启
    * connectInfo  数据库
    *
    * @var string[]
    */
    protected static $getters = [
            'dataSourceId' => 'getDataSourceId',
            'type' => 'getType',
            'dataSourceName' => 'getDataSourceName',
            'userName' => 'getUserName',
            'userPwd' => 'getUserPwd',
            'description' => 'getDescription',
            'reboot' => 'getReboot',
            'connectInfo' => 'getConnectInfo'
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
        $this->container['dataSourceId'] = isset($data['dataSourceId']) ? $data['dataSourceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dataSourceName'] = isset($data['dataSourceName']) ? $data['dataSourceName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userPwd'] = isset($data['userPwd']) ? $data['userPwd'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['reboot'] = isset($data['reboot']) ? $data['reboot'] : null;
        $this->container['connectInfo'] = isset($data['connectInfo']) ? $data['connectInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['dataSourceName'] === null) {
            $invalidProperties[] = "'dataSourceName' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
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
    * Gets dataSourceId
    *  数据源id
    *
    * @return string|null
    */
    public function getDataSourceId()
    {
        return $this->container['dataSourceId'];
    }

    /**
    * Sets dataSourceId
    *
    * @param string|null $dataSourceId 数据源id
    *
    * @return $this
    */
    public function setDataSourceId($dataSourceId)
    {
        $this->container['dataSourceId'] = $dataSourceId;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dataSourceName
    *  数据源名称
    *
    * @return string
    */
    public function getDataSourceName()
    {
        return $this->container['dataSourceName'];
    }

    /**
    * Sets dataSourceName
    *
    * @param string $dataSourceName 数据源名称
    *
    * @return $this
    */
    public function setDataSourceName($dataSourceName)
    {
        $this->container['dataSourceName'] = $dataSourceName;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userPwd
    *  密码
    *
    * @return string|null
    */
    public function getUserPwd()
    {
        return $this->container['userPwd'];
    }

    /**
    * Sets userPwd
    *
    * @param string|null $userPwd 密码
    *
    * @return $this
    */
    public function setUserPwd($userPwd)
    {
        $this->container['userPwd'] = $userPwd;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets reboot
    *  重启
    *
    * @return bool|null
    */
    public function getReboot()
    {
        return $this->container['reboot'];
    }

    /**
    * Sets reboot
    *
    * @param bool|null $reboot 重启
    *
    * @return $this
    */
    public function setReboot($reboot)
    {
        $this->container['reboot'] = $reboot;
        return $this;
    }

    /**
    * Gets connectInfo
    *  数据库
    *
    * @return string|null
    */
    public function getConnectInfo()
    {
        return $this->container['connectInfo'];
    }

    /**
    * Sets connectInfo
    *
    * @param string|null $connectInfo 数据库
    *
    * @return $this
    */
    public function setConnectInfo($connectInfo)
    {
        $this->container['connectInfo'] = $connectInfo;
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

