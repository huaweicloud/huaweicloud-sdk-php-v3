<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HighPermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HighPermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  result
    * workspaceAdmin  空间管理员用户列表。
    * securityAdministrator  安全管理员用户列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DiagnoseResult',
            'workspaceAdmin' => 'string',
            'securityAdministrator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  result
    * workspaceAdmin  空间管理员用户列表。
    * securityAdministrator  安全管理员用户列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'workspaceAdmin' => null,
        'securityAdministrator' => null
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
    * result  result
    * workspaceAdmin  空间管理员用户列表。
    * securityAdministrator  安全管理员用户列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'workspaceAdmin' => 'workspace_admin',
            'securityAdministrator' => 'security_administrator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  result
    * workspaceAdmin  空间管理员用户列表。
    * securityAdministrator  安全管理员用户列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'workspaceAdmin' => 'setWorkspaceAdmin',
            'securityAdministrator' => 'setSecurityAdministrator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  result
    * workspaceAdmin  空间管理员用户列表。
    * securityAdministrator  安全管理员用户列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'workspaceAdmin' => 'getWorkspaceAdmin',
            'securityAdministrator' => 'getSecurityAdministrator'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['workspaceAdmin'] = isset($data['workspaceAdmin']) ? $data['workspaceAdmin'] : null;
        $this->container['securityAdministrator'] = isset($data['securityAdministrator']) ? $data['securityAdministrator'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workspaceAdmin']) && (mb_strlen($this->container['workspaceAdmin']) > 65535)) {
                $invalidProperties[] = "invalid value for 'workspaceAdmin', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['workspaceAdmin']) && (mb_strlen($this->container['workspaceAdmin']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceAdmin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityAdministrator']) && (mb_strlen($this->container['securityAdministrator']) > 65535)) {
                $invalidProperties[] = "invalid value for 'securityAdministrator', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['securityAdministrator']) && (mb_strlen($this->container['securityAdministrator']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityAdministrator', the character length must be bigger than or equal to 0.";
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
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DiagnoseResult|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DiagnoseResult|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets workspaceAdmin
    *  空间管理员用户列表。
    *
    * @return string|null
    */
    public function getWorkspaceAdmin()
    {
        return $this->container['workspaceAdmin'];
    }

    /**
    * Sets workspaceAdmin
    *
    * @param string|null $workspaceAdmin 空间管理员用户列表。
    *
    * @return $this
    */
    public function setWorkspaceAdmin($workspaceAdmin)
    {
        $this->container['workspaceAdmin'] = $workspaceAdmin;
        return $this;
    }

    /**
    * Gets securityAdministrator
    *  安全管理员用户列表。
    *
    * @return string|null
    */
    public function getSecurityAdministrator()
    {
        return $this->container['securityAdministrator'];
    }

    /**
    * Sets securityAdministrator
    *
    * @param string|null $securityAdministrator 安全管理员用户列表。
    *
    * @return $this
    */
    public function setSecurityAdministrator($securityAdministrator)
    {
        $this->container['securityAdministrator'] = $securityAdministrator;
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

