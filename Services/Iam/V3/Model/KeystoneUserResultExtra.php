<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneUserResultExtra implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneUserResultExtra';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  IAM用户描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * lastProjectId  IAM用户退出系统前，在控制台最后访问的项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'pwdStatus' => 'bool',
            'lastProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  IAM用户描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * lastProjectId  IAM用户退出系统前，在控制台最后访问的项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'pwdStatus' => null,
        'lastProjectId' => null
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
    * description  IAM用户描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * lastProjectId  IAM用户退出系统前，在控制台最后访问的项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'pwdStatus' => 'pwd_status',
            'lastProjectId' => 'last_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  IAM用户描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * lastProjectId  IAM用户退出系统前，在控制台最后访问的项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'pwdStatus' => 'setPwdStatus',
            'lastProjectId' => 'setLastProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  IAM用户描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * lastProjectId  IAM用户退出系统前，在控制台最后访问的项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'pwdStatus' => 'getPwdStatus',
            'lastProjectId' => 'getLastProjectId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['pwdStatus'] = isset($data['pwdStatus']) ? $data['pwdStatus'] : null;
        $this->container['lastProjectId'] = isset($data['lastProjectId']) ? $data['lastProjectId'] : null;
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
    * Gets description
    *  IAM用户描述信息。
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
    * @param string|null $description IAM用户描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets pwdStatus
    *  IAM用户密码状态。true：需要修改密码，false：正常。
    *
    * @return bool|null
    */
    public function getPwdStatus()
    {
        return $this->container['pwdStatus'];
    }

    /**
    * Sets pwdStatus
    *
    * @param bool|null $pwdStatus IAM用户密码状态。true：需要修改密码，false：正常。
    *
    * @return $this
    */
    public function setPwdStatus($pwdStatus)
    {
        $this->container['pwdStatus'] = $pwdStatus;
        return $this;
    }

    /**
    * Gets lastProjectId
    *  IAM用户退出系统前，在控制台最后访问的项目ID。
    *
    * @return string|null
    */
    public function getLastProjectId()
    {
        return $this->container['lastProjectId'];
    }

    /**
    * Sets lastProjectId
    *
    * @param string|null $lastProjectId IAM用户退出系统前，在控制台最后访问的项目ID。
    *
    * @return $this
    */
    public function setLastProjectId($lastProjectId)
    {
        $this->container['lastProjectId'] = $lastProjectId;
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

