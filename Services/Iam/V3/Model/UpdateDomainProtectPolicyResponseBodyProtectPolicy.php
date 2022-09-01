<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDomainProtectPolicyResponseBodyProtectPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDomainProtectPolicyResponseBody_protect_policy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allowUser  allowUser
    * operationProtection  是否开启操作保护，取值范围true或false。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allowUser' => '\HuaweiCloud\SDK\Iam\V3\Model\AllowUserBody',
            'operationProtection' => 'bool',
            'adminCheck' => 'string',
            'scene' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allowUser  allowUser
    * operationProtection  是否开启操作保护，取值范围true或false。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allowUser' => null,
        'operationProtection' => null,
        'adminCheck' => null,
        'scene' => null
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
    * allowUser  allowUser
    * operationProtection  是否开启操作保护，取值范围true或false。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allowUser' => 'allow_user',
            'operationProtection' => 'operation_protection',
            'adminCheck' => 'admin_check',
            'scene' => 'scene'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allowUser  allowUser
    * operationProtection  是否开启操作保护，取值范围true或false。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $setters = [
            'allowUser' => 'setAllowUser',
            'operationProtection' => 'setOperationProtection',
            'adminCheck' => 'setAdminCheck',
            'scene' => 'setScene'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allowUser  allowUser
    * operationProtection  是否开启操作保护，取值范围true或false。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $getters = [
            'allowUser' => 'getAllowUser',
            'operationProtection' => 'getOperationProtection',
            'adminCheck' => 'getAdminCheck',
            'scene' => 'getScene'
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
        $this->container['allowUser'] = isset($data['allowUser']) ? $data['allowUser'] : null;
        $this->container['operationProtection'] = isset($data['operationProtection']) ? $data['operationProtection'] : null;
        $this->container['adminCheck'] = isset($data['adminCheck']) ? $data['adminCheck'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allowUser'] === null) {
            $invalidProperties[] = "'allowUser' can't be null";
        }
        if ($this->container['operationProtection'] === null) {
            $invalidProperties[] = "'operationProtection' can't be null";
        }
        if ($this->container['adminCheck'] === null) {
            $invalidProperties[] = "'adminCheck' can't be null";
        }
        if ($this->container['scene'] === null) {
            $invalidProperties[] = "'scene' can't be null";
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
    * Gets allowUser
    *  allowUser
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AllowUserBody
    */
    public function getAllowUser()
    {
        return $this->container['allowUser'];
    }

    /**
    * Sets allowUser
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AllowUserBody $allowUser allowUser
    *
    * @return $this
    */
    public function setAllowUser($allowUser)
    {
        $this->container['allowUser'] = $allowUser;
        return $this;
    }

    /**
    * Gets operationProtection
    *  是否开启操作保护，取值范围true或false。
    *
    * @return bool
    */
    public function getOperationProtection()
    {
        return $this->container['operationProtection'];
    }

    /**
    * Sets operationProtection
    *
    * @param bool $operationProtection 是否开启操作保护，取值范围true或false。
    *
    * @return $this
    */
    public function setOperationProtection($operationProtection)
    {
        $this->container['operationProtection'] = $operationProtection;
        return $this;
    }

    /**
    * Gets adminCheck
    *  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    *
    * @return string
    */
    public function getAdminCheck()
    {
        return $this->container['adminCheck'];
    }

    /**
    * Sets adminCheck
    *
    * @param string $adminCheck 是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    *
    * @return $this
    */
    public function setAdminCheck($adminCheck)
    {
        $this->container['adminCheck'] = $adminCheck;
        return $this;
    }

    /**
    * Gets scene
    *  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @return string
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string $scene 操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
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

